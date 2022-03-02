<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Auth;
use Illuminate\Support\Facades\DB;


class CustomerController extends Controller
{
    public function index(){
       $customers=DB::table('customer')->paginate(5);
       return view('CustomerList',['customers'=>$customers]);
    
        
    }
    public function newCustomer(){
       return view('cutomerForm');
    }
    public function storeCustomer(Request $request ){
      $request->validate([
                'name' => 'required',
                'phone' => 'required',
                'email' => 'required',
                'address' => 'required',
            ]);
            $customer=DB::table('customer')->insert([
                'Name'=>$request->name,
                'Phone'=>$request->phone,
                'Email'=>$request->email,
                'Address'=>$request->address,
            ]);
  
       
         return redirect()->route('customerlist')
                            ->with('success','Customer created successfully.');

    }
    public function editCustomer($id)
    {
        $customeredit=DB::table('customer')->find($id);
        return view('CustomerEdit',['customer'=>$customeredit]);
    }
    public function updateCustomer(Request $request)
    {
        // exit();
        $request->validate([
            'name' => 'required',
            
        ]);
        $customer = DB::table('customer')->where('id', $request->customer_id);
        $customer->update([
            'Name'=>$request->name,
            'Phone'=>$request->phone,
            'Email'=>$request->email,
            'Address'=>$request->address,
            
        ]);
       
        return redirect()->route('customerlist')
                        ->with('success','Customer updated successfully');
    }
    public function destory($id)
    {
        $customer = DB::table('customer')->where('id', $id);
        $customer->delete();
    
        return redirect()->route('customerlist')
                        ->with('success','Customer deleted successfully');
    }
          
}
