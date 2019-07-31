<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Cart_model;
use App\Category_model;
use App\ImageGallery_model;
use App\ProductAtrr_model;
use App\Products_model;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Session;
use DB;

class IndexController extends Controller
{

    protected $request;

    public function __construct(Request $request) {
        $this->request = $request;
    }
    
    public function index(){
        $products=Products_model::all();
        $newbooks=Products_model::take(3)->get();
        return view('frontEnd.index',compact('products','cart_datas','total_price','newbooks'));
    }
    public function shop(){
        $products=Products_model::all();
        $byCate="";
        return view('frontEnd.products',compact('products','byCate'));
    }
    public function listByCat($id){
        $list_product=Products_model::where('categories_id',$id)->get();
        $byCate=Category_model::select('name')->where('id',$id)->first();
        return view('frontEnd.products',compact('list_product','byCate'));
    }
    public function detialpro($id){
        $detail_product=Products_model::findOrFail($id);
        $imagesGalleries=ImageGallery_model::where('products_id',$id)->get();
        $totalStock=ProductAtrr_model::where('products_id',$id)->sum('stock');
        $relateProducts=Products_model::where([['id','!=',$id],['categories_id',$detail_product->categories_id]])->get();
        return view('frontEnd.product_details',compact('detail_product','imagesGalleries','totalStock','relateProducts'));
    }
    public function getAttrs(Request $request){
        $all_attrs=$request->all();
        //print_r($all_attrs);die();
        $attr=explode('-',$all_attrs['size']);
        //echo $attr[0].' <=> '. $attr[1];
        $result_select=ProductAtrr_model::where(['products_id'=>$attr[0],'size'=>$attr[1]])->first();
        echo $result_select->price."#".$result_select->stock;
    }
    // public function show($id)
    // {
    //     $menu_active =3;
    //     $newbooks=Products_model::where('id',$id)->get();
    //     $product=Products_model::findOrFail($id);
    //     return view('frontEnd.index',compact('menu_active','product','newbooks'));
    // }
    public function getPriceRange($low,$high){
        $products           = Product::whereBetween('price',[$low,$high])->get();
        return view('categorylist')->with('products',$products)->with('cart',$this->getCart())->with('searchType','Price Range')->with('searchName','$'.$low.' - $'. $high);
    }
    public function getSort($type){
        $products = [];
        $sortName = 'N/A';
        switch($type){
            case 'new':
            $products           = Products_model::orderBy('created_at','desc')->get();
            $sortName           = 'Newest';
            break;
            case 'old':
            $products           = Products_model::orderBy('created_at','asc')->get();
            $sortName           = 'Oldest';
            break;
            case 'expensive':
            $products           = Products_model::orderBy('price','desc')->get();
            $sortName           = 'Most Expensive';
            break;
            case 'costly':
            $products           = Products_model::orderBy('price','asc')->get();
            $sortName           = 'Most Cost Effective';
            break;
        }
        return view('frontEnd.index')->with('products',$products)->with('cart',$this->getCart())->with('searchType','Sort')->with('searchName',$sortName);
    }
    private function getCart(){
        if (! $this->request->session()->has('cart')){
            $this->request->session()->put( 'cart',[] );;
            $this->request->session()->save();
        }
        return $cart = $this->request->session()->get('cart');
    }
    public function newArrivals(){
        $products           = Products_model::orderBy('created_at','asc')->get();
        $sortName           = 'Newest';
        return view('frontEnd.index')->with('products',$products)->with('cart',$this->getCart())->with('searchType','Shopper\'s Select')->with('searchName','New Arrivals');
    }
    
    public function addToCart($id)
    {
        //$products=Products_model::all();
        $products = Products_model::find($id);
 
        if(!$products) {
 
            abort(404);
 
        }
 
        $cart = session()->get('cart');
 
        // if cart is empty then this the first product
        if(!$cart) {
 
            $cart = [
                    $id => [
                        "p_name" => $products->p_name,
                        "quantity" => 1,
                        "price" => $products->price,
                        "image" => $products->image
                    ]
            ];
 
            session()->put('cart', $cart);
 
            return view('frontEnd/cart')->with('success', 'Product added to cart successfully!');
        }
 
        // if cart not empty then check if this product exist then increment quantity
        if(isset($cart[$id])) {
 
            $cart[$id]['quantity']++;
 
            session()->put('cart', $cart);
 
            return view('frontEnd/cart')->with('success', 'Product added to cart successfully!');
 
        }
 
        // if item not exist in cart then add to cart with quantity = 1
        $cart[$id] = [
            "p_name" => $products->p_name,
            "quantity" => 1,
            "price" => $products->price,
            "image" => $products->image
        ];
 
        session()->put('cart', $cart);
 
        return view('frontEnd/cart')->with('success', 'Product added to cart successfully!');
 
    }

    public function update(Request $request)
    {
        if($request->id and $request->quantity)
        {
            $cart = session()->get('cart');
 
            $cart[$request->id]["quantity"] = $request->quantity;
 
            session()->put('cart', $cart);
 
            session()->flash('success', 'Cart updated successfully');
        }
    }
 
    public function remove(Request $request)
    {
        if($request->id) {
 
            $cart = session()->get('cart');
 
            if(isset($cart[$request->id])) {
 
                unset($cart[$request->id]);
 
                session()->put('cart', $cart);
            }
 
            session()->flash('success', 'Product removed successfully');
        }
    }
}
