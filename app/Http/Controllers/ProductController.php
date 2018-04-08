<?php

namespace App\Http\Controllers;

use App\Enums\CategoryType;
use App\Orders;
use App\Product;
use App\Profile;
use Doctrine\Common\Annotations\CachedReader;
use Illuminate\Filesystem\Cache;
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
    public function create(Request $request)
    {


        return view('Product.create-product');





    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $newProduct = new Product();


        $nameProduct = $request->name_product;
        $price = $request->price;
        $statusProduct = $request->product_status;
        $freeShipment = $request->free_shipment;

        if (($statusProduct === '1') && (! is_null($statusProduct)) && (!empty($statusProduct)) ){
            $statusProduct = '1';
        }else {
            $statusProduct = '0';
        }


        if (($freeShipment === '1') && (! is_null($freeShipment)) && (!empty($freeShipment)) ){
            $freeShipment = '1';
        }else {
            $freeShipment = '0';
        }

        $newProduct->addProduct($nameProduct, $price, $statusProduct, $freeShipment);
        return view('Product.create-product');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {

        $products = new Product();
        $products = $products->getProductsSortByCategory();
        $categoryTitles = [];
        foreach ($products as $product) {
            array_push($categoryTitles, $product->category_product_id);
        }

        $categoryTitles = array_unique($categoryTitles);
        $category = [];
        foreach ($categoryTitles as $categoryTitle) {
            array_push($category, $categoryTitle );
        }


        return view('Product.products-list',[
            'products' => $products,
            'category' => $category
        ]);

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

    public function test(Request $request, $productId)
    {
        $orders = new Orders();
        $orders->setBasket($productId);

    }
}
