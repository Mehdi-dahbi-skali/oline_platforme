<?php

namespace App\Http\Controllers;

use auth;
use App\Models\User;
use Illuminate\Http\Request;
//use Illuminate\Support\Facades\Auth;

class Authlogin extends Controller
{
    public function login(){
        if (session()->has('id')) {
            return redirect('profile');
        }
        return view('login');
    }

    public function checkacc(Request $request){

        $request->validate([
            'username' => ['required'],
            'password' => ['required'],
        ]);

       

        $users=User::all();
        

        foreach ($users as $user){
            if ($user->username == $request->username){
                if ($user->password == $request->password) {

                    $data = $request->input();
                    $request->session()->put('id', $user->id);
                    
                    
                    
                    return redirect()->intended();
                }
                
            }

      }
      return back()->withErrors([
          'username' => 'The provided credentials do not match our records.',
      ]);
        


    }

    public function logout(){
        if ( session()->has('id') ) {

            session()->pull('id');
            
        }
        return redirect('login');
    }
}
