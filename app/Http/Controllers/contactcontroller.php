<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Contracts\View\View as ViewContract;
use Illuminate\Support\Facades\Mail;
use Monolog\Handler\SendGridHandler;
use App\Mail\contactMail;

class contactcontroller extends Controller
{
    

    public function contacts(){
        return view("contacts");
    }

    public function sendContacts(Request $request){
        $request->validate([
            "nom"=> "required|string|max:255",
            "email"=> "required|string|max:255",
            "objet"=> "required|string|max:255",
            "message"=>"required|string|max:255"
            ]);
         

        $details = [
            'nom'=> $request->input('nom'),
            'email'=> $request->input('email'),
            'objet'=> $request->input('objet'),
            'message'=> $request->input('message'),
        ];
    

        Mail::to('fifisha221@gmail.com')->send(new contactMail($details));

        return back()->with( 'Votre message a été envoyé avec succès!');

}
}
