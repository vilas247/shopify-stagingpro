<?php

namespace App\Http\Controllers\Api\Shopify;

use App\Http\Controllers\Controller;
use GuzzleHttp\Client;
use Exception;

class ShopifyGraphIqlApiController extends Controller
{

    private $shopify;
    public function __construct()
    {
        $this->shopify = app('shopify');
    }

    public function getProducts()
    {
        $payload = array("query" => "query {
            products(first: 10, reverse: true) {
              edges {
                node {
                  title
                  availablePublicationsCount {
                    count
                  }
                  createdAt
                  customProductType
                  defaultCursor
                  isGiftCard
                  id
                  images(first: 10) {
                    edges {
                      node {
                        id
                      }
                    }
                  }
                }
              }
            }
          }
          ");
        $endpoint = "https://247commercestage.myshopify.com/admin/api/2024-04/graphql.json";
        $headers = array(
            'Content-Type' => 'application/json',
            'X-Shopify-Access-Token' => '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'

        );

        $response = $this->makeAnAPICallToShopify('POST', $endpoint, null,$headers, $payload);
        print_r(json_encode($response,true));exit;

    }

    public function makeAnAPICallToShopify($method, $endpoint, $url_params = null, $headers, $requestBody = null) {
        //Headers
        /**
         * Content-Type: application/json
         * X-Shopify-Access-Token: value
         */
        //Log::info('Endpoint '.$endpoint);
        try {
            $client = new Client();
            $response = null;
            if($method == 'GET' || $method == 'DELETE') {
                $response = $client->request($method, $endpoint, [ 'headers' => $headers ]);
            } else {
                $response = $client->request($method, $endpoint, [ 'headers' => $headers, 'json' => $requestBody ]);
            }
            return [
                'statusCode' => $response->getStatusCode(),
                'body' => json_decode($response->getBody(), true)
            ];
        } catch(Exception $e) {
            return [
                'statusCode' => $e->getCode(),
                'message' => $e->getMessage(),
                'body' => null
            ];
        }
    }

}
