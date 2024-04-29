<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\TokenValidation;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Session;
use InvalidArgumentException;
use Shopify\Utils;

class ShopifyAppController extends Controller
{

    public function install(Request $request)
    {
        $params = $request->all();
        if(isset($params['shop'])){
            $token_validation = new TokenValidation;
            if($token_validation::where('store_url', $params['shop'])->whereNotNull('access_token')->exists())
            {
                Session::put('store_url', $params['shop']);
                return Redirect::away($this->getEmbeddedAppUrl($params['host']));
            }
            $access_scopes = config('shopify.access_scopes');
            $shop = $params['shop'];
            $redirect_uri = URL::to('/') . '/app-shopify/generate-token';
            $install_url = "https://" . $shop . "/admin/oauth/authorize?client_id=" . config('shopify.credentials.api_key') . "&scope=" . $access_scopes . "&redirect_uri=" . urlencode($redirect_uri);

            $token_validation = new TokenValidation;
            if($token_validation::where('store_url', $shop)->exists() == false){

                $token_validation->store_url = $shop;
                $token_validation->save();
            }

            //echo config('shopify.credentials.api_key');exit;
            return Redirect::away($install_url);
        } else {
            return redirect()->route('app-shopify.index');
        }
    }

    public function generateToken(Request $request)
    {
        $params = $request->all();

        $token_validation = new TokenValidation;
        if($token_validation::where('store_url', $params['shop'])->whereNotNull('access_token')->exists())
        {
            Session::put('store_url', $params['shop']);
            return Redirect::away($this->getEmbeddedAppUrl($params['host']));
        }

        // Set variables for our request
        $api_key = config('shopify.credentials.api_key');
        $shared_secret = config('shopify.credentials.api_secret');
        $hmac = $params['hmac']; // Retrieve HMAC request parameter

        $params = array_diff_key($params, array('hmac' => '')); // Remove hmac from params

        $params = array_diff_key($params, array('hmac' => '')); // Remove hmac from params
        ksort($params); // Sort params lexographically
        $computed_hmac = hash_hmac('sha256', http_build_query($params), $shared_secret);
        if (hash_equals($hmac, $computed_hmac)) {
            // Set variables for our request
            $query = array(
                "client_id" => $api_key, // Your API key
                "client_secret" => $shared_secret, // Your app credentials (secret key)
                "code" => $params['code'] // Grab the access key from the URL
            );
            // Generate access token URL
	        $access_token_url = "https://" . $params['shop'] . "/admin/oauth/access_token";
            $client = new Client();
            $response = $client->request('POST', $access_token_url, [ 'headers' => array(), 'json' => $query ]);

            if($response->getStatusCode() == 200)
            {
                $response_data = json_decode($response->getBody(), true);
                $access_token = $response_data['access_token'];
                $token_validation = new TokenValidation;
                if($token_validation::where('store_url', $params['shop'])->exists())
                {
                    $update_data = array(
                                        'access_token' => $access_token
                                    );
                    $token_validation::where('store_url', $params['shop'])->update($update_data);
                } else {
                    $token_validation->store_url = $params['shop'];
                    $token_validation->access_token = $access_token;
                    $token_validation->save();
                }
                Session::put('store_url', $params['shop']);
                //return redirect()->route('app-shopify.index');
                return Redirect::away($this->getEmbeddedAppUrl($params['host']));
            } else {
                die('This request is NOT from Shopify!');
            }

        }  else {
            // Someone is trying to be shady!
            die('This request is NOT from Shopify!');
        }
    }

    /**
     * Returns the appropriate URL for the host that should load the embedded app.
     *
     * @param string $host The host value received from Shopify
     *
     * @return string
     */
    public function getEmbeddedAppUrl(string $host): string
    {
        if (empty($host)) {
            throw new InvalidArgumentException("Host value cannot be empty");
        }

        $decodedHost = base64_decode($host, true);
        if (!$decodedHost) {
            throw new InvalidArgumentException("Host was not a valid base64 string");
        }

        $apiKey = config('shopify.credentials.api_key');
        return "https://$decodedHost/apps/$apiKey";
    }

    public function index(Request $request)
    {
        $shop = Utils::sanitizeShopDomain($request['shop']);
        $token_validation = new TokenValidation;
        if($token_validation::where('store_url', $shop)->whereNotNull('access_token')->exists())
        {
            $store_url = Session::get('store_url');
            return view('shopify.index');
        } else {
            return redirect()->route('app-shopify.install', ['shop' => $shop]);
        }
    }

    public function bulkMigration()
    {

        return view('shopify.bulk-migration');
    }

    public function selectiveMigration()
    {

        return view('shopify.selective-migration');
    }

    public function themeDeployments()
    {

        return view('shopify.theme-deployments');
    }

    public function history()
    {

        return view('shopify.history');
    }

    public function settings()
    {

        return view('shopify.settings');
    }

}
