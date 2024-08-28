<?php

namespace App\Http\Controllers;

use App\Models\ouvriersData;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class ouvriersDataController extends Controller
{
    public function showRegistrationForm()
    {
        return view('inscription');
    }

    public function register(Request $request)
    {
       /* $validator = Validator::make($request->all(), [
            'prenom' => 'required|string|max:255',
            'nom' => 'required|string|max:255',
            'tel' => 'required|Integer|max:9',
            'region' => 'required|string|max:255',
            'metier' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:ouvriers',
            'password' => 'required|string|min:8|confirmed',
        ]);
        */

        $ouvrier = ouvriersData::create([
            'prenom' => $request->prenom,
            'nom' => $request->nom,
            'tel'=> $request->tel,
            'region' => $request->region,
            'metier' => $request->metier,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        Auth::login($ouvrier);

        return redirect()->route('connexion')->with('success',$ouvrier);
    }

    public function showLoginForm()
    {
        return view('connexion');
    }

    public function login(Request $request)
    {
       

        $request->validate([
            'email' => 'required|email',
            'password' => 'required|string',
        ]);
        
       
        $credentials = $request->only('email', 'password');
       

        if (Auth::attempt($credentials)) {
            

            return redirect()->route('moncompte');
        }

        else return back()->withErrors([
            'email' => 'Aucun utilisateur trouvé avec cet email et/ou ce mot de passe',
        ]);
    }

    public function logout(Request $request)
    {
        
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();
        


        return redirect()->route('connexion');


    }
}
