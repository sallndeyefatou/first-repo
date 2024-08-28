<?php
namespace App\Http\Controllers;

use App\Models\Ouvrier;
use App\Models\ouvriersData;
use Illuminate\Http\Request;

class RechercheController extends Controller
{
    public function showRechercheForm()
    {
        return view('recherche');
    }

    public function recherche(Request $request)
    {
        
       /* $request->validate([
            'region' => 'required|string|max:255',
        ]);
        */

        $region = $request->input('region');
        $metier = $request->input('metier');
        
        
        $ouvriers = ouvriersData::where('region', $region)->where('metier',$metier)->get();
        
        
        
        return view('recherche')->with('ouvriers',$ouvriers);
    }
   

    }

