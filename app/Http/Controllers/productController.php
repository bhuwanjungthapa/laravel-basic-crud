<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
class productController extends Controller
{
    function create(){
        return view('product.create');
    }

    function store(Request $request){

        /*$od = $request->all();
       array_shift($od);
       Employee::create($od);*/
        try{
            $product = Product::create($request->all());
            if($product){
                $request->session()->flash('success','Product Added Successfully!!');
            }else{
                $request->session()->flash('error','Product addition failed!!');
            }
        }
        catch(\Exception $exception){
            $request->session()->flash('error','Error: ' . $exception->getMessage());
        }

        return redirect()->route('product.index');
    }

    function index(){
        //$data = Employee::all(); //fetch all employee data
        //$data = Employee::where('phone','>',50)->get();//whose phone number is great than 50
        //$data = Employee::where('phone','>',50)->orderby('name')->get();//display by name order
        $data = Product::paginate(2);
        return view('product.index', compact('data'));
    }

    function show($id){
        $product = Product::find($id);
        //dd($employee);
        return view('product.show', compact('product'));
    }
}
