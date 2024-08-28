<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{asset('css/inscription.css')}}">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <title>Laravel</title>
    </head>
    <body > 
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
               <li class="nav-item">
                 <a class="nav-link" href="#">A  propos</a>
               </li>
               
             </ul>

              
              </div>
              
              
          </nav>
        </div>
    <div class="container text-center">
    <div class="row align-items-center">
        <form action="{{--route('inscription')--}}" method="POST">
            @csrf
          <h2>Inscription</h2>
            <div class="form-group">
                <label for="name">Prenom</label>
                <input type="text" class="form-control" id="fname" name="prenom" required>
            </div>

            <div class="form-group ">
              <label for="name">Nom</label>
              <input type="text" class="form-control" id="lname" name="nom" required>
          </div>
          <div class="form-group">
            <label for="name">Tel</label>
            <input type="text" class="form-control" id="lname" name="tel" required>
        </div>
           
            <div class="form-group">
                <label for="validationTooltip04" class="form-label" >Région</label>
                <select class="form-select" id="region" name="region" required>
                  <option selected disabled value="">Choisir</option>
                  <option>Dakar</option>
                  <option>Thiès</option>
                  <option>Diourbel</option>
                  <option>Matam</option>
                  <option>Tambacounda</option>
                  <option>Kédougou</option>
                  <option>Kaffrine</option>
                  <option>Kolda</option>
                  <option>Fatick</option>
                  <option>Kaolack</option>
                  <option>Louga</option>
                  <option>Saint-Louis</option>
                  

                </select>
                <div class="invalid-tooltip">
                  Veuillez choisir un des metiers présents
                </div>
              </div>
            <div class="form-group">
                <label for="validationTooltip04" class="form-label" >Métier</label>
                <select class="form-select" id="metier" name="metier" required>
                  <option selected disabled value="">Choisir</option>
                  <option>Menuisier bois</option>
                  <option>Froid et Climatisation</option>
                  <option>Plombier</option>
                  <option>Menuisier métallique</option>
                  <option>Maçon</option>
                  <option>Electricien</option>
                </select>
                <div class="invalid-tooltip">
                  Veuillez choisir un des metiers présents
                </div>
              </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="password">Mot de passe</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <hr>
            <button type="submit" class="btn btn-primary">S'inscrire</button>
            <hr>
            <p>Vous avez déja un compte?<a class="suscribe" href="{{route('connexion')}}">Connectez-vous</a></p>
        </form>
       
           


    </div>
</div>


    </body>
</html>
