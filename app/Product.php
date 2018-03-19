<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class Product extends Model
{
    protected $table = 'products';

    protected $userId;

    protected $listProducts;



    protected $product;

    protected $sellerName;

    public function getAllProducts($categoryId, $limit, $offsetProductId)
    {

        $limit === 0 ? $limit = 999 : $limit = $limit;

        $this->listProducts = DB::table('products')
            ->where('category_product_id', $categoryId)
            ->whereNotIn('id', [$offsetProductId] )
            ->limit($limit)
            ->get();

        return $this->listProducts;

    }

    public function getProductsSortByCategory()
    {
        $this->listProducts = DB::table('products')
            ->orderBy('category_product_id', 'asc')
            ->get();
        return $this->listProducts;
    }


/*
 * param int($productId)
 * return array(product)
 *
 */
    public function getOneProduct($productId)
    {
        $this->userId = Auth::id();

        $this->product = DB::table('products')
            ->whereId($productId)
            ->get();
        return $this->product;
    }
    /*
     * param int($productId)
     * return seller product 'name'(product)
     *
     */
    public function getSellerName($productId)
    {
        $profileId = DB::table('products')
            ->where('id', $productId)
            ->pluck('user_id');

        $this->sellerName = DB::table('profiles')
            ->where('id', $profileId)
            ->pluck('name_profile')
            ->first();

        return $this->sellerName;
    }


    public function addProduct($nameProduct, $price, $statusProduct, $freeShipment)
    {

        $this->userId = Auth::id();


        DB::table('products')->insertGetId(
            ['user_id' => $this->userId,
                'category_product_id' => '1',
                'name_product' => $nameProduct,
                'price' => $price,
                'previous_price' => '0',
                'product_description' => 'testesras',
                'product_status' => $statusProduct,
                'free_shipment' => $freeShipment]
        );


    }
}
