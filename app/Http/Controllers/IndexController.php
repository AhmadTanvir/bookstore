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
    public function bookreview(){
        
        return view('frontEnd.bookreview');
    }
    public function aboutus(){
        
        return view('frontEnd.aboutus');
    }
    public function contactus(){
        
        return view('frontEnd.contact');
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
        $byCate="";
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
        return view('frontEnd.products')->with('products',$products)->with('cart',$this->getCart())->with('searchType','Sort')->with('searchName',$sortName)->with('byCate', $byCate);
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
    
    // public function addToCart(Request $request){
    //     $inputToCart=$request->all();
    //     $session_id=Session::get('session_id');
    //     Session::forget('discount_amount_price');
    //     Session::forget('coupon_code');
    //     if($inputToCart['size']==""){
    //         return back()->with('message','Please select Size');
    //     }else{
    //         $stockAvailable=DB::table('product_att')->select('stock','sku')->where(['products_id'=>$inputToCart['products_id'],
    //             'price'=>$inputToCart['price']])->first();
    //         if($stockAvailable->stock>=$inputToCart['quantity']){
    //             $inputToCart['user_email']='weshare@gmail.com';
    //             $session_id=Session::get('session_id');
    //             if(empty($session_id)){
    //                 $session_id=str_random(40);
    //                 Session::put('session_id',$session_id);
    //             }
    //             $inputToCart['session_id']=$session_id;
    //             $sizeAtrr=explode("-",$inputToCart['size']);
    //             $inputToCart['size']=$sizeAtrr[1];
    //             $inputToCart['product_code']=$stockAvailable->sku;
    //             $count_duplicateItems=Cart_model::where(['products_id'=>$inputToCart['products_id'],
    //                 'product_color'=>$inputToCart['product_color'],
    //                 'size'=>$inputToCart['size']])->count();
    //             if($count_duplicateItems>0){
    //                 return back()->with('message','This Item Added already');
    //             }else{
    //                 Cart_model::create($inputToCart);
    //                 return back()->with('message','Add To Cart Already');
    //             }
    //         }else{
    //             return back()->with('message','Stock is not Available!');
    //         }
    //     }
    // }
    public function search(Request $request)
    {
        $this->validate($request, [
            'query' => 'required|min:3'
        ]);

        $query = $request->input('query');

        $products = Products_model::where('p_name', 'like', "%$query%")->get();

        return view('frontEnd.search-results')->with('products', $products);
    }
}
