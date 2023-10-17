<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use GuzzleHttp\Promise\Create;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;
use Illuminate\View\View;

class CustomerController extends Controller
{

    public function render(): View     {
        $cstmrs = DB::table('customers')->get();
        // $cstmrs = Customer::all();
        return view('table', ['customers' => $cstmrs])->with('content', 'Customers List')->with('icon', 'fa-solid fa-users');
    }


    public function create(Request $request){
        $validated = $request->validate([
            "fname" => ['required', 'min:2'],
            "lname" => ['required', 'min:2'],
            "age" => ['required'],
            "gender" => ['required', 'min:4', 'max:6'],
            "email" => ['required', 'email', Rule::unique('customers', 'email')],
        ]);

        Customer::create($validated);
        return redirect('/customers')->with('message', 'Added Succesfully!');
    }

    public function read($id){ 
        $specific_data = Customer::findorFail($id);
        // dd($specific_data);
        return view('profile', ['data' => $specific_data])->with('content', 'User′s Profile')->with('icon', 'fa-solid fa-user'); 
    }

    public function update(Request $request, $key){ //key is the referal code or unique data
        // supply row names
        $validated = $request->validate([
            "fname" => ['required', 'min:2'],
            "lname" => ['required', 'min:2'],
            "age" => ['required'],
            "gender" => ['required', 'min:4', 'max:6'],
            "email" => ['required', 'email'],
        ]);

        Customer::where('id', $key)->update($validated);
        return back()->with('message', 'Updated Successfully');
    }
    // yung referal code ay mag ma-matter sa kung anong pinasa mong data sa action ng form
    // once the submit button clicked, ipapasa ng form yung referal code sa route at ito ay sasaluhin ng route 
    // and ipapasa naman ni route sa contoller which is sasaluhin naman ng parameter sa function at yun ang magiging final variable para sa referal code


    public function delete($key){
        Customer::where('id', $key)->forceDelete();
        return redirect('/customers')->with('delete', 'Deleted Successfully');
    }

}
