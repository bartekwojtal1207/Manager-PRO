<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class Product extends Model
{
    protected $table = 'products';

    protected $userId;

    protected $product;

    protected $productManagerName;

/*
 * param int($productId)
 * return array(product)
 *
 */
    public function getMyProducts($productId)
    {
        $this->userId = Auth::id();

        $this->product = DB::table('products')
            ->where('user_id', '=',  $this->userId)
            ->whereId($productId)
            ->get();

        return $this->product;
    }


}
