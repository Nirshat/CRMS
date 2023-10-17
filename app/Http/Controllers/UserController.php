<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    public function loginpage(){
        return view('login');
    }

    public function login(Request $request){
        $validated = $request->validate([
            "email" => ['required', 'email'],
            "password" => ['required'],
        ]);

        // Pag clinick na yung login (login attempt)
        if (Auth::attempt($validated)) {
            $request->session()->regenerate();
            return redirect()->intended('customers')->with('message', 'Login Successfully!');
        }
        else{
            return redirect('/login')->with('failed', 'Login Failed, Please Try Again.');
        }
    }




    public function logout(Request $request): RedirectResponse {
        Auth::logout();    
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->intended('login');
    }




    public function regpage(){
        return view('reg');
    }

    public function register(Request $request){
        $validated = $request->validate([
            "name" => ['required', 'min:2'],
            "email" => ['required', 'email', Rule::unique('customers', 'email')],
            "password" => ['required', 'confirmed', 'min:5'],
        ]);

        $validated['password'] = bcrypt($validated['password']) ;

        User::create($validated);
        return redirect()->intended('login')->with('success', 'Registered Succesfully! You can sign-in now.');
    }





    // ACCOUNT MANAGEMENT (Change Credentials)
    public function manageAccPage() {
        $user = Auth::user(); // currently authenticated user

        // return view('acc', ['user' => $user])->with('icon', 'fa-solid fa-user-lock')->with('content', 'Manage Account');
        return view('acc', compact('user'))->with('icon', 'fa-solid fa-user-lock')->with('content', 'Manage Account');
        
        // Note: ['user' => $user] and compact('user) is a same method that will be use to retrieve the data of the authenticated user
    }

    public function manageAccount(Request $request){ //key is the referal code or unique data

        $user = Auth::user(); // currently authenticated user

        // supply row names
        $validated = $request->validate([
            "name" => ['required', 'min:2'],
            "email" => ['required'],
            "oldpassword" => ['required'],
            "password" => ['required', 'confirmed'],
        ]);

        $storeValidatedData = [
            "name" => $validated['name'],
            "email" => $validated['email'],
            "password" => $validated['password'],
        ];

        // Verify if the old password matches the one in the database
        if(Hash::check($validated['oldpassword'], $user->password)){

            // Hash the new password before updating
            $storeValidatedData['password'] = bcrypt($validated['password']);

             // Check if the new password is not the same as the old password
            if($validated['oldpassword'] !== $validated['password']){
                User::where('id', $user->id)->update($storeValidatedData);
                return back()->with('success', 'Credentials Changes Saved!');
            }
            else{
                return back()->with('failed', 'New Password must be different from your old password');
            }
        }
        else{
            return back()->with('failed', 'Old password is incorrect!');
        }
    }





    // ENCRYPTION TEST
    // public function enc(){
    //     dd(bcrypt(''));
    // }


}
