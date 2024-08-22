@extends('auth.layouts.app')
@section('content')
<div class="row align-items-center">
    <div class="col-md-6 col-lg-7">
        <img src="{{asset('deskapp/vendors/images/login-page-img.png')}}" alt="" />
    </div>
    <div class="col-md-6 col-lg-5">
        <div class="login-box bg-white box-shadow border-radius-10">
            <div class="login-title">
                <!--<h2 class="text-center text-primary">Login To DeskApp</h2>-->
                    <div class="text-center">
                        <img src="{{asset('images/logo.png')}}" width="180" alt="" />

                        <div class="text-center text-primary title">Administrateur</div>
                    </div>                 
            </div>
            <form  method="POST" action="{{route('login.admin')}}">
                @csrf
                
                <div class="input-group custom">
                    <input type="text" class="form-control form-control-lg @error('prenom') is-invalid @enderror" id="prenom" name="prenom" value="{{old('prenom')}}" placeholder="Prénom Nom"/>
                    <div class="input-group-append custom">
                        <span class="input-group-text"></span>
                    </div>
                </div>
                <div class="input-group custom">
                    <input type="text" class="form-control form-control-lg @error('identifiant') is-invalid @enderror"id="identifiant" name="identifiant" value="{{old('identifiant')}}" placeholder="Identifiant"/>
                    <div class="input-group-append custom">
                        <span class="input-group-text"><i class="icon-copy dw dw-user1"></i></span>
                    </div>
                </div>                
                <div class="input-group custom">
                    <input type="password" class="form-control form-control-lg @error('password') is-invalid @enderror" id="password" name="password" value="{{old('password')}}" placeholder="password"/>
                    <div class="input-group-append custom">
                        <span class="input-group-text"><i class="dw dw-padlock1"></i></span>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="input-group mb-0">
                            <!--<a class="btn btn-primary btn-lg btn-block"
                                href="index.html">Login</a>-->
                            <button class="btn btn-primary btn-lg btn-block">Login</button>                                
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
@section('script')
<script type="text/javascript">
  $(document).ready(function() {
    //$('#divtimer').hide();

    //alert(window.location.href);
    $('#divtimer').hide();

  } );  
</script>
@endsection    