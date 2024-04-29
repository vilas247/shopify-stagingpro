<?php

namespace App\Http\Controllers\Api\Shopify;

use App\Http\Controllers\Controller;
use Signifly\Shopify\Shopify;

class ShopifyApiController extends Controller
{

    private $shopify;
    public function __construct()
    {
        $this->shopify = app('shopify');
    }

    public function apiCall()
    {

        // Paginate products
        $pages = $this->shopify->paginateProducts(); // returns a Cursor
        $results = collect();

        foreach ($pages as $page) {
            //print_r($page[0]);exit;
            // $page is a Collection of ApiResources
            $results = $results->merge($page);
        }
        foreach ($results as $k => $v) {
            print_r($v->title);
            exit;
        }

        // Get products count
        $count = $this->shopify->getProductsCount(); // returns an integer
        print_r($count);
        exit;

        // Get products
        $products = $this->shopify->getProducts(); // returns a Collection of ProductResource
        print_r($products);
        exit;
        // Create a product
        $product = $this->shopify->createProduct([
            'title' => 'Adidas Shoe, Pink',
        ]); // returns a ProductResource

        // Get a specific product
        //$product = $shopify->getProduct($productId); // returns a ProductResource

        // Update a product
        /*$product = $shopify->updateProduct($productId, [
            'title' => 'Adidas Shoe, Rose',
        ]);*/ // returns a ProductResource

        // Deleting a product
        //$shopify->deleteProduct($productId);
    }

    public function getProductsCount()
    {
        $count = $this->shopify->getProductsCount(); // returns an integer
        return $count;
    }

    public function getProducts()
    {
        $response = array("status" => false, "html" => "");
        $html = "";
        $products = $this->shopify->getProducts();
        if(count($products) > 0){
            $response["status"] = true;
            foreach ($products as $product) {
                $html .= '<tr>';
                $src = "";
                if(isset($product->image['src'])){
                    $src = $product->image['src'];
                } else {
                    if(isset($product->images) && count($product->images)){
                        $src = $product->images[0]['src'];
                    }
                }
                if (count($product->variants) > 0) {
                    foreach ($product->variants as $kpv => $kpvdata) {
                        if($kpv > 0){
                            $html .= '<tr>';
                        }
                        $html .= '<td><label><input class="form-check-input me-1 selectOne" data-product-id="'.$product->id.'" type="checkbox" value="'.$product->id.'" aria-label="..."></label></td>';
                        $html .= '<td><img style="height:30px;width:30px;" src=" ' . $src . ' " class="br-10 brd" />' . $product->title . '</td>';
                        $html .= '<td> ' . $kpvdata['sku'] . ' </td>';
                        $html .= '<td> ' . $kpvdata['inventory_quantity'] . ' </td>';
                        $html .= '<td> ' . $kpvdata['price'] . ' </td>';
                        $html .= '</tr>';
                    }
                } else {
                    $html .= '</tr>';
                }
            }
            $response["html"] = $html;
        }

        return json_encode($response,true);
    }
}
