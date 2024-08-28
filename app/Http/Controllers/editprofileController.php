<?php 
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\ouvriersData;


class editprofileController extends Controller
{
    public function showEditProfile()
    {
        $ouvriers = Auth::user();
        return view('editprofile')->with('ouvrier', $ouvriers);
    }

    public function updateUser(Request $request)
    {
        $ouvrier = Auth::user();
       


     
        
        $ouvrier->prenom = $request->input('prenom');
        $ouvrier->nom = $request->input('nom');
        $ouvrier->tel = $request->input('tel');
        $ouvrier->metier = $request->input('metier');
        $ouvrier->region = $request->input('region');
        $ouvrier->email = $request->input('email');

        if ($request->filled('password')) {
            $ouvrier->password = Hash::make($request->input('password'));
        }
        

        $ouvrier->save();

        return redirect()->route('moncompte')->with('success', 'Informations mises à jour avec succès.');
    }
}
