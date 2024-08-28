

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{asset('css/style.css')}}">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <title>Laravel</title>
    </head>
    <body >         
        <header>
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
               
         </header>
         <div class="d-grid gap-4">
            <button class="btn btn-primary" type="button"><a href="{{route('connexion')}}">Je suis un ouvrier</a></button>
            <button class="btn btn-primary" type="button"><a href="{{route('recherche.form')}}">Je cherche un ouvrier</a></button>
          </div>
          
        
    </body>
</html>
