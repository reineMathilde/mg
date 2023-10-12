<?php

namespace App\Http\Controllers;
use App\Models\loginMg;
use Session;


use Illuminate\Http\Request;

class loginController extends Controller
{
    //


    public function saveLogin(Request $request){
        $request->validate([
            'email' => 'required',
            'password' => 'required|min:5|max:12'
        ]);

        $user = loginMg::where('email', '=', $request->email)->first();


        if ($user) {
            // Comparaison en texte brut
            if ($request->password === $user->password) {

                $request->session()->put('loginId', $user->id);
                return redirect('dashboard');
            } else {
                return back()->with("fail", "Votre mot de passe n'est pas correct!");
            }
        } else {
            return back()->with("fail", "Votre email n'est pas enregistré!");
        }
    }




    public function logout(){


        if(Session::has('loginId')){
         Session::pull('loginId');
          return redirect('login');
        }

      }
}
