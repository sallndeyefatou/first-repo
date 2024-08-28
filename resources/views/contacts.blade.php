<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{asset('css/contacts.css')}}">
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
        <br>
    <div class="container">
        <div class="row card">
            <h4 class="card-header">Contacts</h4>
            <div class="card-body">
                <form action="{{ route('sendContacts') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <input type="text" class="form-control  @error('nom') is-invalid @enderror" name="nom" id="nom" placeholder="Votre nom complet" value="{{ old('nom') }}">
                        @error('nom')
                            <div class="invalid-feedback">{{ $details}}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <input type="email" class="form-control  @error('email') is-invalid @enderror" name="email" id="email" placeholder="Votre email" value="{{ old('email') }}">
                        @error('email')
                            <div class="invalid-feedback">{{ $details }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <input type="objet" class="form-control  @error('objet') is-invalid @enderror" name="objet" id="objet" placeholder="Objet de votre message" value="{{ old('objet') }}">
                        @error('objet')
                            <div class="invalid-feedback">{{ $details }}</div>
                        @enderror
                    </div>
                    
                    <div class="mb-4">
                        <textarea class="form-control  @error('message') is-invalid @enderror" name="message" id="message" placeholder="Votre message">{{ old('message') }}</textarea>
                        @error('message')
                            <div class="invalid-feedback">{{ $details }}</div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Envoyer </button>
                </form>
            </div>
        </div>
    </div>
