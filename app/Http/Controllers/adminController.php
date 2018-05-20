<?php

namespace App\Http\Controllers;
use Redirect;
use Illuminate\Http\Request;
use Auth;
use DB;
use Table;
use App\product;
use App\order;
class adminController extends Controller
{
    public function home_view()
    {
         
        return view('admin.home');
       
    }
    public function login_view()
    {
      

            return view('admin.login');
      
    }

    public function login(Request $request)
    {
        $username = $request->input('username');
        $password = $request->input('password');
        $userdata = array(
            'username'     => $username,
            'password'  => $password
        );
        
        $this->validate($request,['username' => 'required',
        'password'=> 'required']);
       $password= md5($request->input('password'));
      
        
       $result = DB::select("select* from admin_details where username = '$username' and password='$password' ");
       if(count($result)>0)
       {
          
            $request->session()->put('username',$username);
$request->session()->put('type','admin');
           $request->session()->put('name',$result[0]->{'fname'}.' '.$result[0]->{'lname'});
          /*
          defining permission in session
          */

           
            return Redirect::to('admin/home');
       }
       else 
       {
        
          return view('admin.login')->withErrors('username or password incorrect');
       }
    

        
    }
    public function check()
    {
        $auth = Auth::guard('admin');
        return dd($auth->user());

    return bcrypt('admin');
    }
    public function home()
    {
        return view('admin.home');
    }
    public function create_product_view()
    {
        return view('admin.create_product');
    }
    public function list_product_view()
    {
        $products = new product;
        $products=  $products::all();
        return view('admin.list_product_view',compact('products'));
    }
    public function logout()
    {
        session()->flush();
        return redirect('/admin');
    }

    public function create_product(Request $request)
    {
        $products = new product;
        $products->product_name = $request->input('product_name');
        $products->product_type =$request->input('product_type');
        $products->product_price =$request->input('product_price');
        $products->ladb_process =$request->input('ladb');
  
        $products->product_price_wm =$request->input('product_price_wm');
        $products->product_requirements =$request->input('product_requirement');
        $products->product_description = $request->input('product_description');
        $thumbnail = "";
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $uniqueFileName = uniqid() . $image->getClientOriginalName();
            
            $input['imagename'] = time().'.'.strtolower($image->getClientOriginalExtension());
            
               $image->storeAs('public/images',$uniqueFileName);
                $thumbnail=$uniqueFileName;
        }
        $products->product_logo = $thumbnail;
        
        $products->save();
        return redirect('/admin/create/product');
    }
    public function specific_product_view($id)
    {
        $product= product::where('id', $id)->get()->first();
        
        return view('admin.specific_product_view',compact('product'));
    }
    public function delete_product($id)
    {
        product::where('id', $id)->delete();
        return redirect('/admin/view/product');
    }

    public function list_order_active_view()
    {
        return view('admin.active_order');
    }
    public function list_order_new_view()
    {
       $order = order::all();
        return view('admin.new_order',compact('order'));
    }
    public function order_new_view($id)
    {
        $order = order::find($id);
        return view('admin.view_new_order',compact('order'));
    }
    public function confirm_order_new($id)
    {
        $order = order::find($id);
        $order->status= 1;
        $order->save();
        return redirect('/admin/view/order/active');
    }
    public function list_order_completed_view()
    {
        return view('admin.completed_order');
    }
    public function list_order_cancelled_view()
    {
        return view('admin.cancel_order');
    }
    public function list_order_refunded_view()
    {
        return view('admin.refunded_order');
    }
}