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
            <form>
                <div class="input-group custom">
                    <input type="text" class="form-control form-control-lg" placeholder="Identifiant"/>
                </div>
                <div class="input-group custom">
                    <input type="text" class="form-control form-control-lg" placeholder="Firstname"/>
                </div>
                <div class="input-group custom">
                    <input type="text" class="form-control form-control-lg" placeholder="Lastname"/>
                </div>                                
                <div class="input-group custom">
                    <input type="password" class="form-control form-control-lg" placeholder="Password"/>
                </div>
                <div class="input-group custom">
                    <input type="password" class="form-control form-control-lg" placeholder="Confirm Password"/>
                </div>                

                <div class="row">
                    <div class="col-sm-12">
                        <div class="input-group mb-0">
                            <a class="btn btn-primary btn-lg btn-block"
                                href="index.html">Login</a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
