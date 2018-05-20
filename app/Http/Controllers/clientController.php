<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
use App\product;
use App\order;
class clientController extends Controller
{
    public function logout()
    {
        session()->flush();
        return redirect('/login');
    }
    public function login(Request $request)
    {
        $username = $request->input('username');
        $password = $request->input('password');
        $userdata = array(
            'username'     => $username,
            'password'  => $password
        );

        if(Auth::attempt($userdata))
        {
            session()->put('username',$username);
            session()->put('type','client');
          
            return "true";
        }
        else
        return "false";
    }
    public function register(Request $request)
    {
        $u = new User;
        $u->name=$request->input('name');
        $u->username=$request->input('email');
        $u->password=bcrypt($request->input('password'));
        $u->city=$request->input('city');
        $u->country=$request->input('country');
        $u->phone=$request->input('phone');
        $u->save();
        return redirect('/login');
        
    }
    public function test()
    {
        return session('username');
    }
    public function order_process_1($ladb)
    {
        session()->put('order.ladb',$ladb);
        return view('product-form1');
    }
    public function order_process_2(Request $request)
    {
        session()->put('order.product_name',$request->input('pname'));
        session()->put('order.industry',$request->input('industry'));
        session()->put('order.c1',$request->input('c1'));
        session()->put('order.c2',$request->input('c2'));
        $thumbnail = "";
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $uniqueFileName = uniqid() . $image->getClientOriginalName();
            
            $input['imagename'] = time().'.'.strtolower($image->getClientOriginalExtension());
            
               $image->storeAs('public/images',$uniqueFileName);
                $thumbnail=$uniqueFileName;
        }
        session()->put('order.logo',$thumbnail);
        
return redirect('/order/process/step/2');
    }

    public function order_process_2_view()
    {
        $ladb = session()->get("order.ladb");
        
        $product = product::where('ladb_process', $ladb)->get();
        
      
        return view('product-form2',compact('product'));
    }
    public function order_process_3(Request $request)
    {
        if(session()->has('order.our_product') && session()->get('order.our_product')!=$request->input('c'))
        {
            session()->put('edit','false');
            session()->put('additional','false');
            
        }
        $p  = product::find($request->input('c'));
        session()->put('order.our_product',$p->product_name);
        
        //return dd(session()->get('order'));
        return redirect('/order/process/step/3');
    }
    public function order_process_3_view()
    {
        $p = session()->get('order.our_product');
        if( !(session()->get('edit')=='true'))
        {
            $product= product::where('product_name', $p)->get()->first();
        session()->put('order.base_requirements',$product->product_requirements);
        session()->put('order.price',$product->product_price);
        session()->put('order.price_wm',$product->product_price_wm);
        $product = session()->get('order.base_requirements');
        //$result = DB::select("select* from products where product_name = '$p'");
        return view('product-form3',compact('product'));
        }
        else
        {
            $product = session()->get('order.base_requirements');
            //$result = DB::select("select* from products where product_name = '$p'");
            return view('product-form3',compact('product'));
        }
    }
    public function edit_base_requirement_view()
    {
        return view('product-form4');
    }

    public function edit_base_requirement(Request $request)
    {
        $br = $request->input('br');
        session()->put('order.base_requirements',$br);
        session()->put('edit','true');
        return redirect('/order/process/step/3');
    }


    public function add_additional_requirement_view()
    {
        return view('product-form5');
    }

    public function add_additional_requirement(Request $request)
    {
        $br = $request->input('br');
        session()->put('order.additional_requirements',$br);
        session()->put('additional','true');
        return redirect('/order/process/step/3');
    }
    public function confirm()
    {

        if(session()->has('username'))
        {
            
        }
        else
        {
            return view('order_login');
        }
    }
    public function order_login(Request $request)
    {
        $username = $request->input('username');
        $password = $request->input('password');
        $userdata = array(
            'username'     => $username,
            'password'  => $password
        );

        if(Auth::attempt($userdata))
        {
            session()->put('username',$username);
            session()->put('type','client');
            
            return "true";
        }
        else
        return "false";
    }
    public function order_register(Request $request)
    {
        $u = new User;
        $u->name=$request->input('name');
        $u->username=$request->input('email');
        $u->password=bcrypt($request->input('password'));
        $u->city=$request->input('city');
        $u->country=$request->input('country');
        $u->phone=$request->input('phone');
        $u->save();
        return redirect('/login');
        
    }
    public function order_register_view()
    {
        return view('order_register');
    }
    public function confirm_order()
    {
        $a = session()->get("order");
        
        $order = new order;
        $order->ladb_process = $a["ladb"];
        $order->our_product_name = $a["our_product"];
        $order->his_product_name = $a["product_name"];
        $order->industry = $a["industry"];
        $order->c1 = $a["c1"];
        $order->c2 = $a["c2"];
        $order->logo = $a["logo"];
        $order->total = $a["price"]+$a["price_wm"];
        $order->base_requirements = $a["base_requirements"];
        $order->additional_requirements = $a["additional_requirements"];
        $order->status = 2;
        $order->customer_id = 1;
        $order->save();
        //$order["industry"]
        return $order;
    }
}
