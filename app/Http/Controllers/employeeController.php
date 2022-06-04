<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use function PHPUnit\Framework\returnValueMap;

class employeeController extends Controller
{

    function create(){
        return view('employee.create');
    }

    function store(Request $request){

        /*$od = $request->all();
       array_shift($od);
       Employee::create($od);*/
            try{
                $employee = Employee::create($request->all());
                if($employee){
                    $request->session()->flash('success','Employee Created Successfully!!');
                }else{
                    $request->session()->flash('error','Employee Creation failed!!');
                }
            }
            catch(\Exception $exception){
                $request->session()->flash('error','Error: ' . $exception->getMessage());
            }

        return redirect()->route('employee.index');
    }

    function index(){
        //$data = Employee::all(); //fetch all employee data but links cant be used in all()
        //$data = Employee::where('phone','>',50)->get();//whose phone number is great than 50
        //$data = Employee::where('phone','>',50)->orderby('name')->get();//display by name order
        $data = Employee::all(); // show 2 item in on epage
        return view('employee.index', compact('data'));
    }
    function show($id){
        $employee = Employee::find($id);
        //dd($employee);
        return view('employee.show', compact('employee'));
    }
    function destroy(Request $request,$id){

        try{
            $employee = Employee::find($id);
            if($employee->delete()){
                $request->session()->flash('success','Deleted Successfully!!');
            }else{
                $request->session()->flash('error','Deletion failed!!');
            }
        }
        catch(\Exception $exception){
            $request->session()->flash('error','Error: ' . $exception->getMessage());
        }
        /*$employee=Employee::find($id);
        $employee=delete();*/
        return redirect()->route('employee.index');
    }

    function edit($id){
        try{
            $employee = Employee::find($id);
            if(!$employee){
                request()->session()->flash('error','Error: Invalid Request');
                return redirect()->route('employee.index');
            }
        }catch(\Exception $exception){
            request()->session()->flash('error','Error:'.$exception->getMessage());
        }
        return view('employee.edit',compact('employee'));
    }
    function update(Request $request,$id){
        try{
            $employee = Employee::find($id);
            if(!$employee)
            {
                request()->session()->flash('error','Error: Invalid Request');
                return redirect()->route('employee.index');
            }
            if ($employee->update($request->all())){
                $request->session()->flash('success','Employee Updated Successfully!!');
            }else{
                $request->session()->flash('error','Employee Update Failed!!');
            }
        }catch(\Exception $exception){
            $request->session()->flash('error','Error: ' . $exception->getMessage());
        }
        return redirect()->route("employee.index");
    }


}
