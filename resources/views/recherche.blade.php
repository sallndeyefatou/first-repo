<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{asset('css/recherche.css')}}">
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
             <form class="d-flex" role="search" action="{{route('recherche')}}" method="POST">
              @csrf
              <select class="form-select" id="metier" name="metier" >
                <option selected disabled value="">Métier</option>
                <option>Menuisier bois</option>
            <option>Froid et Climatisation</option>
            <option>Plombier</option>
            <option>Menuisier métallique</option>
            <option>Maçon</option>
            <option>Electricien</option>
              </select>
            <select class="form-select" id="region" name="region" >
              <option selected disabled value="">Région</option>
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
            <button class="btn btn-primary" type="submit">Rechercher</button>


          </form>
              </div>
              
                
                
             
              
            
           
          </nav>
        </div>
        


           
    </header>

    @if(isset($ouvriers))

<div class="results">
<h2>Résultats de la recherche</h2>
  
  @if(!empty($ouvriers))
      <ul class="list-group">
          @foreach($ouvriers as $ouvrier)
              <li class="list-group-item">
                  <strong>{{ $ouvrier->prenom }} {{ $ouvrier->nom }}</strong><br>
                  Métier: {{ $ouvrier->metier }}<br>
                  Email: {{ $ouvrier->email }}<br>
                  Région: {{ $ouvrier->region }}<br>
                  Tel:{{$ouvrier->tel}}
              </li>
          @endforeach
     
  @else
      <p>Aucun ouvrier trouvé dans cette région.</p>
    </ul>
  @endif
@endif

</div>

       
  
    
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.3/js/bootstrap.min.js"></script>
</body>
</html>
