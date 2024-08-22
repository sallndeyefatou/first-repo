<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\admin;
Use App\Models\User;

class loginAdminController extends Controller
{
    public function index(){
        return view('admin.loginAdmin');

    }

    public function isAdmin(Request $request){
       /* $request->validated([
            'identifiant'=> 'required|string|max:255',
            'password'=> 'required'
        ]);
*/
        $credentials=$request->only('identifiant','password','accesslevel_id');
        //$admin=User::where('accesslevel_id','=','7');

        try {
            if((Auth::attempt($credentials))){

            return redirect()->route('quizz-list')->with('success','Connexion reussie');
            }
            return back()->with(['error','Aucun admin trouvé avec cet identifiant et/ou ce mot de passe']);

        } 
        catch (\Throwable $e) {
           throw $e;
        }
    }
}
