<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{asset('css/moncompte.css')}}">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <title>Mon compte</title>
    </head>
    <body >         
        <header>
             <nav class="navbar bg-body-tertiary fixed-top">
                 <div class="container-fluid">
                   <a class="navbar-brand" href="#">SenegalJob</a>
                   <ul class="nav justify-content-end">
                    <li class="nav-item">
                      <a class="nav-link" href="{{route('contacts')}}">Contacts</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">Mon profil</a>
                    </li> 
                  </ul> 
                </div> 
            </nav> 
         </header>

         <div class="bienvenue text-center">
            <h1>Bienvenue {{Auth::user()->prenom}}</h1>
            <div class="shadow">
              <p>Prénom: {{ Auth::user()->prenom }}</p>
              <p>Nom: {{ Auth::user()->nom }}</p>
              <p>Tel:{{Auth::user()->tel}}</p>
              <p>Email: {{ Auth::user()->email }}</p>
              <p>Région: {{ Auth::user()->region }}</p>
              <p>Métier: {{ Auth::user()->metier }}</p>
            </div>

            
            
            <button class="btn btn-primary"><a href="{{route('editprofile')}}">Editer mon profil</a> </button>
            <form action="{{route('logout')}}" method="POST">
                @csrf
                <button class="btn btn-danger">Deconnexion</button>
            </form>
            

        </div>

    </body>
</html>
