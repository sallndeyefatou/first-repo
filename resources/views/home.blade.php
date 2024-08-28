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
                    </div>                 
            </div>
            <form action="{{route('login.admin')}}"  method="POST">
                @csrf
                <div class="row">
                    <div class="col-sm-12">
                        <div class="input-group mb-4 h-75">
                            <a class="btn btn-outline-primary btn-lg btn-block"
                                href="{{route('evalSelectedTo',['evalSelectedTo'=>'EvalStagiaire'])}}">EVALUATIONS PAR LE STAGIAIRE</a>
                            <!--<a class="btn btn-outline-primary btn-lg btn-block"
                                href="{{--route('start')--}}">EVALUATIONS PAR LE STAGIAIRE</a>-->
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="input-group mb-4">
                            <a class="btn btn-outline-primary btn-lg btn-block"
                                href="{{route('evalSelectedTo',['evalSelectedTo'=>'EvalMensuelle'])}}">EVALUATIONS MENSUELLES</a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="input-group mb-4">
                            <a class="btn btn-outline-primary btn-lg btn-block"
                                href="{{route('accueil')}}">TESTS RECRUTEMENT</a>
                        </div>
                    </div>
                </div> 
                <div class="row">
                    <div class="col-sm-12">
                        <div class="input-group mb-4">
                            <a class="btn btn-outline-info btn-lg btn-block"
                                href="{{route('evalSelectedTo',['evalSelectedTo'=>'Administrations'])}}">ADMINISTRATIONS</a>
                        </div>
                    </div>
                </div>    
                <div class="row">
                    <div class="col-sm-12">
                        <div class="input-group mb-4">
                            <a class="btn btn-outline-info btn-lg btn-block"
                                href="{{route('admin.index')}}">Se connecter en tant qu'admin</a>
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
    //$('#divdate').hide();

  } );  
</script>
@endsection