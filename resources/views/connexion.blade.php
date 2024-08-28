<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{asset('css/connexion.css')}}">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <title>Laravel</title>
    </head>
    <body >         
        <header>
          <div class="row">
            <nav class="navbar bg-body-tertiary fixed-top">
                <div class="container-fluid">
                  <a class="navbar-brand" href="#">SenegalJob</a>
                  <ul class="nav justify-content-end">
                   <li class="nav-item">
                     <a class="nav-link active" aria-current="page" href="{{route('welcome')}}">Accueil</a>
                   </li>
                   <li class="nav-item">
                     <a class="nav-link" href="{{route('contacts')}}">Contacts</a>
                   </li>
                   
                   
                 </ul>
    
                  
                  </div>
                  
                  
              </nav>
            </div>
               
         </header>
        
         <div class="container text-center">
            <div class="row align-items-center">
            <div class="colonne">
              <form action="{{route('login')}}" method="POST">
                @csrf
                <h2>Connectez-vous</h2>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="password">Mot de passe</label>
                    <input type="password" name="password" id="password" class="form-control" required>
                </div>
                <hr>
                <button type="submit" class="btn btn-primary">connexion</button>
                <hr>
                <p>Vous n'avez pas de compte?<a class="suscribe" href="{{route('inscription')}}">Inscrivez-vous</a></p>
            </form>  
            
                </div>
                
                    
          
              </div>
              
            
            
          </div>
        
    </body>
</html>
