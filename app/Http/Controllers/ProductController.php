<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\product;
use App\Models\cart;
use App\Models\order;
use Session;
use Illuminate\Support\Facades\DB;
class ProductController extends Controller
{

    function index()
    {
    	$data= product::all();
    	return view('product',['products'=>$data]);
    }
    function detail($id)
    {
    	 $data=product::find($id);
    	 return view('detail',['product'=>$data]);
    }
    function search(Request $req)
    {
    
       $data= product::where('name', 'like', '%'.$req->input('query').'%')->get();
     return view('search',['product'=>$data]);
    }
    function addToCart(Request $req)
    {
      if ($req->session()->has('user'))
      { 
        $cart= new Cart;
        $cart->user_id=$req->session()->get('user')["id"];
        $cart->product_id=$req->product_id;
        $cart->save();
        return redirect('/');
       }
         else
          {
        return redirect('/login');
          }
 }
     static function cartItem()
     {
      $userId=Session::get('user')['id'];
      return cart::where('user_id',$userId)->count();
     }
     function cartList()
     {
      $userId= Session::get('user')['id'];
     $data= DB::table('cart')
      ->join('products','cart.product_id','products.id')
      ->select('products.*','cart.id as cart_id')
      ->where('cart.user_id',$userId)
      ->get();
      
      return view('cartlist',['products'=>$data]);

     }
   function removeItem($id)
   {
    Cart::destroy($id);
    return redirect('cartlist');
   }
   function orderNow()
   {
     $userId= Session::get('user')['id'];
     $total=DB::table('cart')
      ->join('products','cart.product_id','products.id')
      ->where('cart.user_id',$userId)
      ->sum('products.price');
      
      return view('order',['total'=>$total]);
   }
   function orderPlace(Request $req)
   {
      return$req->input();
   }
}

