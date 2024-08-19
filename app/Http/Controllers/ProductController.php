<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\cart;
use Illuminate\Http\Request;
use App\Models\Product;
use public\image;
use App\Models\order;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class ProductController extends Controller
{
    public function index(){
        $product =  product::all();
        return view('product',['products' => $product]);
    }

    public $details;
    public function detail(int $id){
        $details = product::find($id);
        return view('details',['details'=> $details]);
    }

    public function search(Request $req){
       $data = product::where('name','like','%' .$req->input('query').'%')->get();
        return view('search',['products' => $data]);
    }

    public function addtoCart(Request $req){

        if($req->session()->has('user')){
            $addtocart = new cart;
            $addtocart->user_id = $req->session()->get('user')['id'];
            $addtocart->product_id = $req->product_id;
            $addtocart->save();
            return redirect('/');
  
        }else{
           return redirect('homeRoute')->with('status','First you have to Login');
        }   
        }

        
        static function cartitems(){

            $user_id = session::get('user')['id'];
            return cart::where('user_id',$user_id)->count();

        }   

        // Here only show the login user data 
       public function cartlist(){

            $user_id = session::get('user')['id'];
            $foundData = DB::table('carts')
            ->join('products','carts.product_id','products.id')
            ->select('products.*','carts.id as cart_id')
            ->where('carts.user_id',$user_id)->get();

        return view('cartlist',['foundData' => $foundData]);
        }


      public function deleteId(string $id){
      
         cart::destroy($id);
        return redirect('/cartlist')->with('status','Your Data is Deleted.');
       }
  
       //Here we show the order page details
       public function ordernow(){

        $user_id = session::get('user')['id'];
        $total = DB::table('carts')
         ->join('products','carts.product_id','products.id')
         ->where('carts.user_id',$user_id)
         ->sum('products.price');

     return view('orderNow',['total' => $total]);

       }


       public function orderplace(Request $req){

          $user_id = session::get('user')['id'];
          $allcartData = cart::where('user_id',$user_id)->get();

          foreach($allcartData as $cart){

                $order = new order;

                $order->product_id = $cart['product_id'];
                $order->user_id = $cart['user_id'];
                $order->address = $req->address;
                $order->status = "pending";
                $order->payment_method = $req->payment;
                $order->payment_status = "pending";
                $order->save();

          }
            

          cart::where('user_id',$user_id)->delete();
          return redirect('/');

       }


    //    public function showallorder(){


    //        $user_id = session::get('user')['id'];
    //        $allorder = DB::table('orders')
    //         ->join('products','orders.product_id','products.id')
    //         ->where('orders.user_id',$user_id)
    //         ->get();

    //         return view('showallOrder',['allorder' => $allorder]);

    //    }



       public function showallorder(){

         $user_id = session::get('user')['id'];
        $allorder = DB::table('orders')
         ->join('products','orders.product_id','products.id')
         ->where('orders.user_id',$user_id)
        ->get();

        return view('showallOrder',['allorder' => $allorder]);
       }





}
