<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/editprofile.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.3/css/bootstrap.min.css">
    <title>Modifier mes informations</title>
</head>
<body>

    <div class="row">
        <nav class="navbar bg-body-tertiary fixed-top">
            <div class="container-fluid">
              <a class="navbar-brand" href="#">SenegalJob</a>
              <ul class="nav justify-content-end">
               <li class="nav-item">
                 <a class="nav-link" href="{{route('contacts')}}">Contacts</a>
               </li>
               <li class="nav-item">
                 <a class="nav-link" href="{{route('moncompte')}}">Mon profil</a>
               </li>
               
             </ul>

              
              </div>
              
              
          </nav>
        </div>

    <div class="container text-center ">
        <div class="row align-items-center">
            <div class="colonne">
        

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{route('updateUser')}}" method="POST">
            <h1>Modifier mes informations</h1>
            @csrf

            <div class="form-group">
                <label for="prenom">Prenom</label>
                <input type="text" class="form-control" id="prenom" name="prenom"  required>
            </div>

            <div class="form-group">
                <label for="nom">Nom</label>
                <input type="text" class="form-control" id="nom" name="nom"  required>
            </div>
            <div class="form-group">
              <label for="tel">Tel</label>
              <input type="text" class="form-control" id="tel" name="tel"  required>
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
                  Veuillez choisir une des régions présentes
                </div>
             </div>

             
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" value="" required>
            </div>

            <div class="form-group">
                <label for="password">Mot de passe</label>
                <input type="password" class="form-control" id="password" name="password">
                <!--small>Laissez vide si vous ne souhaitez pas changer le mot de passe</small-->
            </div>

            <div class="form-group">
                <label for="password_confirmation">Confirmer le mot de passe</label>
                <input type="password" class="form-control" id="password_confirmation" name="password_confirmation">
            </div>

            <button type="submit" class="btn btn-success">Mettre à jour</button>
        </form>
            </div>
        </div>
    </div>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.3/js/bootstrap.min.js"></script>
</body>
</html>
