<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         
        $users=User::where('statut','<>',1)->where('accesslevel_id','=','1')->get();

        return view('users.list')->with([
            'users'=>$users
        ]);        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users.addUser');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         
        //dd($request->all());

         $validated = $request->validate([
            'identifiant' => 'required',
            'prenom' => 'required',
            'nom' => 'required', 
            'password' => 'required',
            //'campagne_id'=> 'required'
        ]);  
        $identifiants=$request->identifiant;

    $user = User::where('identifiant', $identifiants)->first();
    if(empty($user))
       {
         //dd("Pas en base !");


        try {

                //dd($request->all());

                $create_user=User::create([
                    'name'=>$request->prenom,
                    'identifiant'=>$request->identifiant,
                    'prenom'=>$request->prenom,
                    'nom'=>$request->nom,
                    'agent'=>$request->prenom.' '.$request->nom,
                    'evaluation'=>'test recrutement',
                    //'campagne'=>'expresso',
                    'login'=>$request->prenom.' '.$request->nom,
                    'statut'=>0,
                    'accesslevel_id'=>1,
                    'email'=>Str::lower($request->nom.$request->prenom.'@pcci.sn'),
                    'password'=>Hash::make($request->password),
                ]);

                  if ($create_user) 
                {
                    return redirect()->route('users.index')->with('success', 'Enregistrement effectué avec succès.');
                   
                }else
                return back()->with('error','Erreur lors de l enregistrement des données.');
           

           
                
         } catch (\Throwable $e) {
          
            throw $e; 
        }
      }
      else{
       // dd("identifiant existe en base !");
        return back()->with('error','Cet identifiant existe déjà en base !');
      }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $user=User::where($id)->first();

        if(!$user)
        {
            return back()->with('error','Utilisateur non trouvé.');
        }
        return view('users.edit')->with([
            'user'=>$user,           
        ]); 

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
         $validated = $request->validate([
            'identifiant' => 'required',
            'prenom' => 'required',
            'nom' => 'required', 
            'password' => 'required',
        ]); 

    $user = User::where('identifiant','=',$request->identifiant)->first(); 

    if($user->id == $id){
     //dd("Pas en base !".$user->id." ".$id);

        try {


                $update_user=User::where('id',$id)->update([
                    'name'=>$request->prenom,
                    'identifiant'=>$request->identifiant,
                    'prenom'=>$request->prenom,
                    'nom'=>$request->nom,
                    'agent'=>$request->prenom.''.$request->nom,
                    'login'=>$request->prenom.''.$request->nom,
                    'statut'=>0,
                    'password'=>Hash::make($request->password),
                ]);
                if (!$update_user) 
                {
                    
                    return back()->with('error','Erreur s est produite lors de la mise à jour des données');                    
                }

            return redirect()->route('users.index')->with('success', 'Utilisateur mis à jour avec succès.');
         } catch (\Throwable $e) {

            throw $e; 
        }
    } 
    else
    {
        //dd("Identifiant existe en base !");
        return back()->with('error','Cet identifiant existe déjà en base !');
    } 

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {


            $delete_user=User::where($id)->delete();
            if(!$delete_user){

              return back()->with('error','Erreur lors de la suppression user.');
            }

            return redirect()->route('users.index')->with('success', 'User supprimé avec succès.');
        } catch (\Throwable $e) {
            

            throw $e;
        }
    }

    public function updateStatus($user_id,$status_code){
        try {
            $update_user = user::whereId($user_id)->update([
                'statut'=>$status_code,
            ]);

            if($update_user){
             return redirect()->route('users.index')->with('success','Statut utilisateur mis à jour avec succès');
            }
             return redirect()->route('users.index')->with('error','échec sur update user status.');            
        } catch (\Throwable $e) {
            
        }
    }

}
