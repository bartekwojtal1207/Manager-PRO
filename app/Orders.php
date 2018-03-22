<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class Orders extends Model
{

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'orders';

    protected $userId = '';


    public function setBasket($productsId)
    {


        $this->userId = Auth::id();

        DB::table($this->table)->insertGetId(
            [   'user_id' => $this->userId,
                'products_id' => $productsId,
                'completed' => false]
        );

    }

    public function products()
    {
        return $this->belongsToMany('App\Product');
    }


}
