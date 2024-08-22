@extends('auth.layouts.app')
@section('style')

<!-- Google Font -->
<!--<link
    href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap"
    rel="stylesheet"
/>-->
<!-- CSS -->
<!--<link rel="stylesheet" type="text/css" href="vendors/styles/core.css" />
<link
    rel="stylesheet"
    type="text/css"
    href="vendors/styles/icon-font.min.css"
/>-->
<link
    rel="stylesheet"
    type="text/css"
    href="{{asset('deskapp/src/plugins/datatables/css/dataTables.bootstrap4.min.css')}}"
/>
<link
    rel="stylesheet"
    type="text/css"
    href="{{asset('deskapp/src/plugins/datatables/css/responsive.bootstrap4.min.css')}}"
/>
<!--<link rel="stylesheet" type="text/css" href="vendors/styles/style.css" />-->

@endsection
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
            <form  method="POST" action="{{route('evalSelected')}}" >
                @csrf
                <div class="row">
                    <div class="col-sm-12">
                        <div class="mb-0 h-75">
                            <h6 class="text-center">TESTS RECRUTEMENT</h6>
                            <hr>
                            <h6 class="text-left mt-2">Bienvenue au tests recrutement !</h6>

                            <!--<label class="weight-600">TESTS RECRUTEMENT</label>-->
                            <div class="custom-control custom-radio mb-5">
                                <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input" value="TEST AMABILITE" />
                                <label class="custom-control-label" for="customRadio1">TEST AMABILITE</label>
                            </div>
                            <div class="custom-control custom-radio mb-5">
                                <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input" value="TEST CAPACITE DECOUTE"/>
                                <label class="custom-control-label" for="customRadio2">TEST CAPACITE D'ECOUTE</label>
                            </div> 
                            <div class="custom-control custom-radio mb-5">
                                <input type="radio" id="customRadio3" name="customRadio" class="custom-control-input" value="TEST DISPONIBILITE"/>
                                <label class="custom-control-label" for="customRadio3">TEST DISPONIBILITE</label>
                            </div>                                                       
                            <div class="custom-control custom-radio mb-5">
                                <input type="radio" id="customRadio4" name="customRadio" class="custom-control-input" value="TEST EMPATHIE"/>
                                <label class="custom-control-label" for="customRadio4">TEST EMPATHIE</label>
                            </div>
                            <div class="custom-control custom-radio mb-5">
                                <input type="radio" id="customRadio5" name="customRadio" class="custom-control-input" value="TEST FRANCAIS CAPACITE REDACTIONNELLE"/>
                                <label class="custom-control-label" for="customRadio5">TEST FRANCAIS CAPACITE REDACTIONNELLE</label>
                            </div>   
                            <div class="custom-control custom-radio mb-5">
                                <input type="radio" id="customRadio6" name="customRadio" class="custom-control-input" value="TEST STRESS"/>
                                <label class="custom-control-label" for="customRadio6">TEST STRESS</label>
                            </div>                                                      
                        </div>
                    </div>
                </div>   


                <div class="row">
                    <div class="col-sm-12 text-center">
                        <div class="mb-0">
                            <hr>
                            <button class="btn btn-success btn-lg w-50" type="submit">Valider</button>                                                   
                            <a class="btn btn-outline-primary btn-lg ml-1 w-25"
                                href="{{route('deconnexion')}}">Exit</a>
                                
                        </div>
                    </div>
                </div>                              
            </form>
        </div>
    </div>
</div>
@endsection

@section('script')
<!--<script src="vendors/scripts/core.js"></script>-->
<!--<script src="vendors/scripts/script.min.js"></script>-->
<!--<script src="vendors/scripts/process.js"></script>-->
<!--<script src="vendors/scripts/layout-settings.js"></script>-->
<!--<script src="{{--asset('deskapp/src/plugins/apexcharts/apexcharts.min.js')--}}"></script>-->
<script src="{{asset('deskapp/src/plugins/datatables/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('deskapp/src/plugins/datatables/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('deskapp/src/plugins/datatables/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('deskapp/src/plugins/datatables/js/responsive.bootstrap4.min.js')}}"></script>
<!--<script src="{{--asset('deskapp/vendors/scripts/dashboard3.js')--}}"></script>-->
@endsection