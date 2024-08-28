@extends('auth.layouts.app')
@section('content')
<div class="row align-items-center">
    <div class="col-md-6 col-lg-7">
        <img src="{{asset('deskapp/vendors/images/register-page-img.png')}}" alt="" />
    </div>
    <div class="col-md-6 col-lg-5">
        <div class="login-box bg-white box-shadow border-radius-10">
            <div class="login-title">
                <!--<h2 class="text-center text-primary">Login To DeskApp</h2>-->
                    <div class="text-center">
                        <img src="{{asset('images/logo.png')}}" width="180" alt="" />
                    </div>                 
            </div>
            <form method="POST" action="{{route('users.store')}}">
                @csrf
                <div class="input-group custom">
                    <input type="text" class="form-control form-control-lg @error('identifiant') is-invalid @enderror" id="identifiant" name="identifiant" value="{{ old('identifiant')}}" placeholder="Identifiant"/>
                </div>
                <div class="input-group custom">
                    <input type="text" class="form-control form-control-lg @error('prenom') is-invalid @enderror" id="prenom" name="prenom" value="{{ old('prenom')}}" placeholder="prenom"/>
                </div>
                <div class="input-group custom">
                    <input type="text" class="form-control form-control-lg @error('nom') is-invalid @enderror" id="nom" name="nom" value="{{ old('nom')}}" placeholder="nom"/>
                </div>                                
                <div class="input-group custom">
                    <input type="password" class="form-control form-control-lg @error('password') is-invalid @enderror" id="password" name="password" placeholder="Password"/>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="input-group mb-0">
                            <!--<a class="btn btn-primary btn-lg btn-block"
                                href="index.html">Login</a>-->
                            <button type="submit" class="btn btn-primary btn-lg btn-block">
                                Save
                            </button>                                
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
