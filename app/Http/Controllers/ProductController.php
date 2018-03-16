<?php

namespace App\Http\Controllers;

use App\Enums\CategoryType;
use App\Product;
use App\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Query\Builder;
use League\Flysystem\Config;


class ProductController extends Controller
{

    protected $userId;

    public function __construct()
    {
        $this->middleware('auth');

        $this->middleware(function ($request, $next) {
            $this->userId = Auth::user()->id;
            return $next($request);
        });
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, $productId)
    {
        $products = new Product();

        $product = $products->getOneProduct($productId);
        $sellerName = $products->getSellerName($productId);

        $categoryId = 0;

        foreach ($product as $productItem) {
            $categoryId = $productItem->category_product_id;
        }
        $recomendedProducts = $products->getAllProducts($categoryId,8, $productId);

        $categoryTitle = CategoryType::getDescription($categoryId);

        return view('Product.index',
            ['products' => $product,
            'categoryTitle' => $categoryTitle,
            'sellerName' => $sellerName,
            'recomendedProducts' => $recomendedProducts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
