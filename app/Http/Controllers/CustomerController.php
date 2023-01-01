<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class CustomerController extends Controller
{
    public function home(){
        return view('index');
    }
    public function index()
    {
        $customer="";
        $title="Customer Registration";
        $url=url('/customer/register');
        $data=compact('title','url','customer');
        return view('customer')->with($data);
    }
    public function register(Request $request)
    {
        $request->validate(
            [
                'name'=>'required',
                'email'=>'required|email',
                'gender'=>'required',
                'country'=>'required',
                'address'=>'required',
                'dob'=>'required',
                'status'=>'required',
                'password'=>'required',
                'confirm_password'=>'required|same:password'
            ]
            );
        $customer=new Customer;
        $customer->name=$request['name'];
        $customer->email=$request['email'];
        $customer->gender=$request['gender'];
        $customer->country=$request['country'];
        $customer->address=$request['address'];
        $customer->dob=$request['dob'];
        $customer->password=md5($request['password']);
        $customer->status=$request['status'];
        $customer->save();
        return redirect('customer/view');
    }

    public function view(){
        $customers=Customer::all();
        $data=compact('customers');
        return view('customer-view')->with($data);
    }
    public function delete($id)
    {
        $customer=Customer::find($id);
        if(!is_null($customer)){
            $customer->delete();
        }
        return redirect()->route('customer.view');

    }
    public function edit($id)
    {
        $customer=Customer::find($id);
        if(is_null($customer)){
            return redirect('customer/view');
        }
        else{
        $title="Update Customer Info";
        $url=url('/customer/update')."/".$id;
        $data=compact('customer','url','title');
        return view('customer')->with($data);
    }
    }

    public function update($id,Request $request)
    {
        $customer=Customer::find($id);
        $request->validate(
            [
                'name'=>'required',
                'email'=>'required|email',
                'gender'=>'required',
                'country'=>'required',
                'address'=>'required',
                'dob'=>'required',
                'status'=>'required',
                'password'=>'required',
                'confirm_password'=>'required|same:password'
            ]
            );
        $customer->name=$request['name'];
        $customer->email=$request['email'];
        $customer->gender=$request['gender'];
        $customer->country=$request['country'];
        $customer->address=$request['address'];
        $customer->dob=$request['dob'];
        $customer->password=md5($request['password']);
        $customer->status=$request['status'];
        $customer->save();
        return redirect()->route('customer.view');
    }
}
