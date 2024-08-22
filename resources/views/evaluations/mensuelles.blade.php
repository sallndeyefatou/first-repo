@extends('auth.layouts.app')
@section('content')
<div id="showQuestions">
    <div class="row align-items-center">
        <div class="col-md-6 col-lg-5">
            <img src="{{asset('deskapp/vendors/images/login-page-img.png')}}" alt="" />
        </div>
        <div class="col-md-6 col-lg-7">
            <div class="card-box bg-white box-shadow border-radius-10">
                <div class="login-title">
                        <div class="text-center">
                            <img src="{{asset('images/logo.png')}}" width="180" alt="" />
                        </div>
                        <input type="hidden" name="nbreQ" id="nbreQ" value="{{$questionnaire->que_nbreques}}">
                        <input type="hidden" name="que_id" id="que_id" value="{{$questionnaire->id}}">
                    <input type="hidden" name="campagne" id="campagne" value="{{$questionnaire->que_op}}">
                        <input type="hidden" name="semaine" id="semaine" value="{{$questionnaire->que_semaine}}">
                        <input type="hidden" name="annee" id="annee" value="{{$questionnaire->que_annee}}">
                        <input type="hidden" name="duree" id="duree" value="{{$questionnaire->que_duree}}">
                </div>
                <!--<form method="POST"  id="quiz_form" action="{{--route('home')--}}">-->
                    <!--@csrf-->
                    <!-- Objectifs de l'action -->  
                    @if(!@empty($questionnaire) && @isset($questionnaire) && !@empty($questionnaire->que_nbreques) && @isset($questionnaire->que_nbreques)) 
                    @if($questionnaire->que_nbreques>=1)
                    <div class="row" id="Q1">
                        <div class="col-sm-12">
                            <div class="mb-0 h-75">

                                <h6 class="text-center">{{$questionnaire->que_q1theme}}</h6>
                                <hr>                          
                                <h5 class="mb-4"><span class="badge bg-secondary w-100">Question 1 / {{$questionnaire->que_nbreques}}</span></h5>
                                <hr>
                                <h6 class="text-sm-left m-2">
                                    <strong>1°) </strong>{{$questionnaire->que_q1}}
                                </h6>
                                    <div class="mt-2">
                                        <input type="hidden" name="choixrepq1" id="choixrepq1" value="{{$questionnaire->que_choixrepq1}}">
                                        <input type="hidden" name="nbrerepq1" id="nbrerepq1" value="{{$questionnaire->que_nbrerepq1}}">

                                        @if($questionnaire->que_choixrepq1==1)
                                            @if($questionnaire->que_nbrerepq1>=1)
                                            <div class="custom-control custom-radio mb-5">
                                                <input type="radio" id="customRadio1_1" name="ChoixRQ1" class="custom-control-input @error('ChoixRQ1') is-invalid @enderror" value="A"/>
                                                <label class="custom-control-label" for="customRadio1_1">{{$questionnaire->que_q1r1}}</label>
                                                @error('ChoixRQ1')
                                                    <span class="text-danger">{{$message}}</span>
                                                @enderror
                                            </div>
                                            @endif
                                            @if($questionnaire->que_nbrerepq1>=2)
                                            <div class="custom-control custom-radio mb-5">    
                                                <input type="radio" id="customRadio1_2" name="ChoixRQ1" class="custom-control-input @error('ChoixRQ1') is-invalid @enderror" value="B"/>
                                                <label class="custom-control-label" for="customRadio1_2">{{$questionnaire->que_q1r2}}</label>
                                                @error('ChoixRQ1')
                                                    <span class="text-danger">{{$message}}</span>
                                                @enderror
                                            </div>
                                            @endif
                                            @if($questionnaire->que_nbrerepq1>=3)
                                            <div class="custom-control custom-radio mb-5">    
                                                <input type="radio" id="customRadio1_3" name="ChoixRQ1" class="custom-control-input @error('ChoixRQ1') is-invalid @enderror" value="C"/>
                                                <label class="custom-control-label" for="customRadio1_3">{{$questionnaire->que_q1r3}}</label>
                                                @error('ChoixRQ1')
                                                    <span class="text-danger">{{$message}}</span>
                                                @enderror
                                            </div>
                                            @endif
                                            @if($questionnaire->que_nbrerepq1>=4)  
                                            <div class="custom-control custom-radio mb-5">    
                                                <input type="radio" id="customRadio1_4" name="ChoixRQ1" class="custom-control-input @error('ChoixRQ1') is-invalid @enderror" value="D"/>
                                                <label class="custom-control-label" for="customRadio1_4">{{$questionnaire->que_q1r4}}</label>
                                                @error('ChoixRQ1')
                                                    <span class="text-danger">{{$message}}</span>
                                                @enderror
                                            </div> 
                                            @endif
                                        @endif

                                        @if($questionnaire->que_choixrepq1==2)
                                            @if($questionnaire->que_nbrerepq1>=1)
                                            <div class="custom-control custom-checkbox mb-5">
                                                <input type="checkbox" class="custom-control-input @error('CheckRQ1_1') is-invalid @enderror" id="customCheck1_1" name="CheckRQ1_1" value="A"/>
                                                <label class="custom-control-label" for="customCheck1_1">{{$questionnaire->que_q2r1}}</label>
                                                @error('CheckRQ1_1')
                                                    <span class="text-danger">{{$message}}</span>
                                                @enderror
                                            </div>
                                            @endif
                                            @if($questionnaire->que_nbrerepq1>=2)
                                            <div class="custom-control custom-checkbox mb-5">
                                                <input type="checkbox" class="custom-control-input @error('CheckRQ1_2') is-invalid @enderror" id="customCheck1_2" name="CheckRQ1_2" value="B"/>
                                                <label class="custom-control-label" for="customCheck1_2">{{$questionnaire->que_q2r1}}</label> 
                                                @error('CheckRQ1_2')
                                                    <span class="text-danger">{{$message}}</span>
                                                @enderror       
                                            </div>
                                            @endif
                                            @if($questionnaire->que_nbrerepq1>=3)
                                            <div class="custom-control custom-checkbox mb-5">
                                                <input type="checkbox" class="custom-control-input @error('CheckRQ1_3') is-invalid @enderror" id="customCheck1_3" name="CheckRQ1_3" value="C"/>
                                                <label class="custom-control-label" for="customCheck1_3">{{$questionnaire->que_q2r3}}</label>
                                                @error('CheckRQ1_3')
                                                    <span class="text-danger">{{$message}}</span>
                                                @enderror         
                                            </div>
                                            @endif
                                            @if($questionnaire->que_nbrerepq1>=4)
                                            <div class="custom-control custom-checkbox mb-5">
                                                <input type="checkbox" class="custom-control-input @error('CheckRQ1_4') is-invalid @enderror" id="customCheck1_4" name="CheckRQ1_4" value="D"/>
                                                <label class="custom-control-label" for="customCheck1_4">{{$questionnaire->que_q2r4}}</label> 
                                                @error('CheckRQ1_4')
                                                    <span class="text-danger">{{$message}}</span>
                                                @enderror  
                                            </div> 
                                            @endif
                                        @endif

                                        @if($questionnaire->que_choixrepq1==3)
                                        <div class="form-group row m-2">
                                            <textarea class="form-control @error('txtq1') is-invalid @enderror" id="txtq1" name="txtq1" >{{ old('txtq1')}}</textarea>
                                            @error('txtq1')
                                                <span class="text-danger">{{$message}}</span>
                                            @enderror
                                        </div>
                                        @endif
                                    </div>                                    
                            </div>
                            <div class="progress mt-5" style="height: 25px">
                                <div
                                    class="progress-bar bg-info"
                                    role="progressbar"
                                    style="width: {{round(1/$questionnaire->que_nbreques*100)}} %"
                                    aria-valuenow="6"
                                    aria-valuemin="0"
                                    aria-valuemax="100">
                                    {{round(1/$questionnaire->que_nbreques*100)}}%
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif
                    @if($questionnaire->que_nbreques>=2)
                    <div class="row" id="Q2">
                        <div class="col-sm-12">
                            <div class="mb-0 h-75">

                                <h6 class="text-center">{{$questionnaire->que_q2theme}}</h6>
                                <hr>                          
                                <h5 class="mb-4"><span class="badge bg-secondary w-100">Question 2 / {{$questionnaire->que_nbreques}}</span></h5>
                                <hr>
                                <h6 class="text-sm-left m-2">
                                    <strong>2°) </strong>{{$questionnaire->que_q2}}
                                </h6>
                                    <div class="mt-2">
                                        <input type="hidden" name="choixrepq2" id="choixrepq2" value="{{$questionnaire->que_choixrepq2}}">
                                        <input type="hidden" name="nbrerepq2" id="nbrerepq2" value="{{$questionnaire->que_nbrerepq2}}">

                                        @if($questionnaire->que_choixrepq2==1)
                                            @if($questionnaire->que_nbrerepq2>=1)
                                            <div class="custom-control custom-radio mb-5">
                                                <input type="radio" id="customRadio2_1" name="ChoixRQ2" class="custom-control-input @error('ChoixRQ2') is-invalid @enderror" value="A"/>
                                                <label class="custom-control-label" for="customRadio2_1">{{$questionnaire->que_q2r1}}</label>
                                                @error('ChoixRQ2')
                                                    <span class="text-danger">{{$message}}</span>
                                                @enderror
                                            </div>
                                            @endif
                                            @if($questionnaire->que_nbrerepq2>=2)
                                            <div class="custom-control custom-radio mb-5">    
                                                <input type="radio" id="customRadio2_2" name="ChoixRQ2" class="custom-control-input @error('ChoixRQ2') is-invalid @enderror" value="B"/>
                                                <label class="custom-control-label" for="customRadio2_2">{{$questionnaire->que_q2r2}}</label>
                                                @error('ChoixRQ2')
                                                    <span class="text-danger">{{$message}}</span>
                                                @enderror
                                            </div>
                                            @endif
                                            @if($questionnaire->que_nbrerepq2>=3)
                                            <div class="custom-control custom-radio mb-5">    
                                                <input type="radio" id="customRadio2_3" name="ChoixRQ2" class="custom-control-input @error('ChoixRQ2') is-invalid @enderror" value="C"/>
                                                <label class="custom-control-label" for="customRadio2_3">{{$questionnaire->que_q2r3}}</label>
                                                @error('ChoixRQ2')
                                                    <span class="text-danger">{{$message}}</span>
                                                @enderror
                                            </div>
                                            @endif
                                            @if($questionnaire->que_nbrerepq2>=4)  
                                            <div class="custom-control custom-radio mb-5">    
                                                <input type="radio" id="customRadio2_4" name="ChoixRQ2" class="custom-control-input @error('ChoixRQ2') is-invalid @enderror" value="D"/>
                                                <label class="custom-control-label" for="customRadio2_4">{{$questionnaire->que_q2r4}}</label>
                                                @error('ChoixRQ2')
                                                    <span class="text-danger">{{$message}}</span>
                                                @enderror
                                            </div> 
                                            @endif
                                        @endif

                                        @if($questionnaire->que_choixrepq2==2)
                                            @if($questionnaire->que_nbrerepq2>=1)
                                            <div class="custom-control custom-checkbox mb-5">
                                                <input type="checkbox" class="custom-control-input @error('CheckRQ2_1') is-invalid @enderror" id="customCheck2_1" name="CheckRQ2_1" value="A"/>
                                                <label class="custom-control-label" for="customCheck2_1">{{$questionnaire->que_q2r1}}</label>
                                                @error('CheckRQ2_1')
                                                    <span class="text-danger">{{$message}}</span>
                                                @enderror
                                            </div>
                                            @endif
                                            @if($questionnaire->que_nbrerepq2>=2)
                                            <div class="custom-control custom-checkbox mb-5">
                                                <input type="checkbox" class="custom-control-input @error('CheckRQ2_2') is-invalid @enderror" id="customCheck2_2" name="CheckRQ2_2" value="B"/>
                                                <label class="custom-control-label" for="customCheck2_2">{{$questionnaire->que_q2r2}}</label> 
                                                @error('CheckRQ2_2')
                                                    <span class="text-danger">{{$message}}</span>
                                                @enderror       
                                            </div>
                                            @endif
                                            @if($questionnaire->que_nbrerepq2>=3)
                                            <div class="custom-control custom-checkbox mb-5">
                                                <input type="checkbox" class="custom-control-input @error('CheckRQ2_3') is-invalid @enderror" id="customCheck2_3" name="CheckRQ2_3" value="C"/>
                                                <label class="custom-control-label" for="customCheck2_3">{{$questionnaire->que_q2r3}}</label>
                                                @error('CheckRQ2_3')
                                                    <span class="text-danger">{{$message}}</span>
                                                @enderror         
                                            </div>
                                            @endif
                                            @if($questionnaire->que_nbrerepq2>=4)
                                            <div class="custom-control custom-checkbox mb-5">
                                                <input type="checkbox" class="custom-control-input @error('CheckRQ2_4') is-invalid @enderror" id="customCheck2_4" name="CheckRQ2_4" value="D"/>
                                                <label class="custom-control-label" for="customCheck2_4">{{$questionnaire->que_q2r4}}</label> 
                                                @error('CheckRQ2_4')
                                                    <span class="text-danger">{{$message}}</span>
                                                @enderror  
                                            </div> 
                                            @endif
                                        @endif

                                        @if($questionnaire->que_choixrepq2==3)
                                        <div class="form-group row m-2">
                                            <textarea class="form-control @error('txtq2') is-invalid @enderror" id="txtq2" name="txtq2" >{{ old('txtq2')}}</textarea>
                                            @error('txtq2')
                                                <span class="text-danger">{{$message}}</span>
                                            @enderror
                                        </div>
                                        @endif
                                    </div>                                    
                            </div>
                            <div class="progress mt-5" style="height: 25px">
                                <div
                                    class="progress-bar bg-info"
                                    role="progressbar"
                                    style="width: {{round(2/$questionnaire->que_nbreques*100)}}%"
                                    aria-valuenow="6"
                                    aria-valuemin="0"
                                    aria-valuemax="100">
                                    {{round(2/$questionnaire->que_nbreques*100)}}%
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif           
                    @if($questionnaire->que_nbreques>=3)
                    <div class="row" id="Q3">
                        <div class="col-sm-12">
                            <div class="mb-0 h-75">

                                <h6 class="text-center">{{$questionnaire->que_q3theme}}</h6>
                                <hr>                          
                                <h5 class="mb-4"><span class="badge bg-secondary w-100">Question 3 / {{$questionnaire->que_nbreques}}</span></h5>
                                <hr>
                                <h6 class="text-sm-left m-2">
                                    <strong>3°) </strong>{{$questionnaire->que_q3}}
                                </h6>
                                    <div class="mt-2">
                                        <input type="hidden" name="choixrepq3" id="choixrepq3" value="{{$questionnaire->que_choixrepq3}}">
                                        <input type="hidden" name="nbrerepq3" id="nbrerepq3" value="{{$questionnaire->que_nbrerepq3}}">

                                        @if($questionnaire->que_choixrepq3==1)
                                            @if($questionnaire->que_nbrerepq3>=1)
                                            <div class="custom-control custom-radio mb-5">
                                                <input type="radio" id="customRadio3_1" name="ChoixRQ3" class="custom-control-input @error('ChoixRQ3') is-invalid @enderror" value="A"/>
                                                <label class="custom-control-label" for="customRadio3_1">{{$questionnaire->que_q3r1}}</label>
                                                @error('ChoixRQ3')
                                                    <span class="text-danger">{{$message}}</span>
                                                @enderror
                                            </div>
                                            @endif
                                            @if($questionnaire->que_nbrerepq3>=2)
                                            <div class="custom-control custom-radio mb-5">    
                                                <input type="radio" id="customRadio3_2" name="ChoixRQ3" class="custom-control-input @error('ChoixRQ3') is-invalid @enderror" value="B"/>
                                                <label class="custom-control-label" for="customRadio3_2">{{$questionnaire->que_q3r2}}</label>
                                                @error('ChoixRQ3')
                                                    <span class="text-danger">{{$message}}</span>
                                                @enderror
                                            </div>
                                            @endif
                                            @if($questionnaire->que_nbrerepq3>=3)
                                            <div class="custom-control custom-radio mb-5">    
                                                <input type="radio" id="customRadio3_3" name="ChoixRQ3" class="custom-control-input @error('ChoixRQ3') is-invalid @enderror" value="C"/>
                                                <label class="custom-control-label" for="customRadio3_3">{{$questionnaire->que_q3r3}}</label>
                                                @error('ChoixRQ3')
                                                    <span class="text-danger">{{$message}}</span>
                                                @enderror
                                            </div>
                                            @endif
                                            @if($questionnaire->que_nbrerepq3>=4)  
                                            <div class="custom-control custom-radio mb-5">    
                                                <input type="radio" id="customRadio3_4" name="ChoixRQ3" class="custom-control-input @error('ChoixRQ3') is-invalid @enderror" value="D"/>
                                                <label class="custom-control-label" for="customRadio3_4">{{$questionnaire->que_q3r4}}</label>
                                                @error('ChoixRQ3')
                                                    <span class="text-danger">{{$message}}</span>
                                                @enderror
                                            </div> 
                                            @endif
                                        @endif

                                        @if($questionnaire->que_choixrepq3==2)
                                            @if($questionnaire->que_nbrerepq3>=1)
                                            <div class="custom-control custom-checkbox mb-5">
                                                <input type="checkbox" class="custom-control-input @error('CheckRQ3_1') is-invalid @enderror" id="customCheck3_1" name="CheckRQ3_1" value="A"/>
                                                <label class="custom-control-label" for="customCheck3_1">{{$questionnaire->que_q3r1}}</label>
                                                @error('CheckRQ3_1')
                                                    <span class="text-danger">{{$message}}</span>
                                                @enderror
                                            </div>
                                            @endif
                                            @if($questionnaire->que_nbrerepq3>=2)
                                            <div class="custom-control custom-checkbox mb-5">
                                                <input type="checkbox" class="custom-control-input @error('CheckRQ3_2') is-invalid @enderror" id="customCheck3_2" name="CheckRQ3_2" value="B"/>
                                                <label class="custom-control-label" for="customCheck3_2">{{$questionnaire->que_q3r2}}</label> 
                                                @error('CheckRQ3_2')
                                                    <span class="text-danger">{{$message}}</span>
                                                @enderror       
                                            </div>
                                            @endif
                                            @if($questionnaire->que_nbrerepq3>=3)
                                            <div class="custom-control custom-checkbox mb-5">
                                                <input type="checkbox" class="custom-control-input @error('CheckRQ3_3') is-invalid @enderror" id="customCheck3_3" name="CheckRQ3_3" value="C"/>
                                                <label class="custom-control-label" for="customCheck3_3">{{$questionnaire->que_q3r3}}</label>
                                                @error('CheckRQ3_3')
                                                    <span class="text-danger">{{$message}}</span>
                                                @enderror         
                                            </div>
                                            @endif
                                            @if($questionnaire->que_nbrerepq3>=4)
                                            <div class="custom-control custom-checkbox mb-5">
                                                <input type="checkbox" class="custom-control-input @error('CheckRQ3_4') is-invalid @enderror" id="customCheck3_4" name="CheckRQ3_4" value="D"/>
                                                <label class="custom-control-label" for="customCheck3_4">{{$questionnaire->que_q3r4}}</label> 
                                                @error('CheckRQ3_4')
                                                    <span class="text-danger">{{$message}}</span>
                                                @enderror  
                                            </div> 
                                            @endif
                                        @endif

                                        @if($questionnaire->que_choixrepq3==3)
                                        <div class="form-group row m-2">
                                            <textarea class="form-control @error('txtq3') is-invalid @enderror" id="txtq3" name="txtq3" >{{ old('txtq3')}}</textarea>
                                            @error('txtq3')
                                                <span class="text-danger">{{$message}}</span>
                                            @enderror
                                        </div>
                                        @endif
                                    </div>                                    
                            </div>
                            <div class="progress mt-5" style="height: 25px">
                                <div
                                    class="progress-bar bg-info"
                                    role="progressbar"
                                    style="width: {{round(3/$questionnaire->que_nbreques*100)}}%"
                                    aria-valuenow="6"
                                    aria-valuemin="0"
                                    aria-valuemax="100">
                                    {{round(3/$questionnaire->que_nbreques*100)}}%
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif
                    @if($questionnaire->que_nbreques>=4)
                    <div class="row" id="Q4">
                        <div class="col-sm-12">
                            <div class="mb-0 h-75">

                                <h6 class="text-center">{{$questionnaire->que_q4theme}}</h6>
                                <hr>                          
                                <h5 class="mb-4"><span class="badge bg-secondary w-100">Question 4 / {{$questionnaire->que_nbreques}}</span></h5>
                                <hr>
                                <h6 class="text-sm-left m-2">
                                    <strong>4°) </strong>{{$questionnaire->que_q4}}
                                </h6>
                                    <div class="mt-2">
                                        <input type="hidden" name="choixrepq4" id="choixrepq4" value="{{$questionnaire->que_choixrepq4}}">
                                        <input type="hidden" name="nbrerepq4" id="nbrerepq4" value="{{$questionnaire->que_nbrerepq4}}">

                                        @if($questionnaire->que_choixrepq4==1)
                                            @if($questionnaire->que_nbrerepq4>=1)
                                            <div class="custom-control custom-radio mb-5">
                                                <input type="radio" id="customRadio4_1" name="ChoixRQ4" class="custom-control-input @error('ChoixRQ4') is-invalid @enderror" value="A"/>
                                                <label class="custom-control-label" for="customRadio4_1">{{$questionnaire->que_q4r1}}</label>
                                                @error('ChoixRQ4')
                                                    <span class="text-danger">{{$message}}</span>
                                                @enderror
                                            </div>
                                            @endif
                                            @if($questionnaire->que_nbrerepq4>=2)
                                            <div class="custom-control custom-radio mb-5">    
                                                <input type="radio" id="customRadio4_2" name="ChoixRQ4" class="custom-control-input @error('ChoixRQ4') is-invalid @enderror" value="B"/>
                                                <label class="custom-control-label" for="customRadio4_2">{{$questionnaire->que_q4r2}}</label>
                                                @error('ChoixRQ4')
                                                    <span class="text-danger">{{$message}}</span>
                                                @enderror
                                            </div>
                                            @endif
                                            @if($questionnaire->que_nbrerepq4>=3)
                                            <div class="custom-control custom-radio mb-5">    
                                                <input type="radio" id="customRadio4_3" name="ChoixRQ4" class="custom-control-input @error('ChoixRQ4') is-invalid @enderror" value="C"/>
                                                <label class="custom-control-label" for="customRadio4_3">{{$questionnaire->que_q4r3}}</label>
                                                @error('ChoixRQ4')
                                                    <span class="text-danger">{{$message}}</span>
                                                @enderror
                                            </div>
                                            @endif
                                            @if($questionnaire->que_nbrerepq4>=4)  
                                            <div class="custom-control custom-radio mb-5">    
                                                <input type="radio" id="customRadio4_4" name="ChoixRQ4" class="custom-control-input @error('ChoixRQ4') is-invalid @enderror" value="D"/>
                                                <label class="custom-control-label" for="customRadio4_4">{{$questionnaire->que_q4r4}}</label>
                                                @error('ChoixRQ4')
                                                    <span class="text-danger">{{$message}}</span>
                                                @enderror
                                            </div> 
                                            @endif
                                        @endif

                                        @if($questionnaire->que_choixrepq4==2)
                                            @if($questionnaire->que_nbrerepq4>=1)
                                            <div class="custom-control custom-checkbox mb-5">
                                                <input type="checkbox" class="custom-control-input @error('CheckRQ4_1') is-invalid @enderror" id="customCheck4_1" name="CheckRQ4_1" value="A"/>
                                                <label class="custom-control-label" for="customCheck4_1">{{$questionnaire->que_q4r1}}</label>
                                                @error('CheckRQ4_1')
                                                    <span class="text-danger">{{$message}}</span>
                                                @enderror
                                            </div>
                                            @endif
                                            @if($questionnaire->que_nbrerepq4>=2)
                                            <div class="custom-control custom-checkbox mb-5">
                                                <input type="checkbox" class="custom-control-input @error('CheckRQ4_2') is-invalid @enderror" id="customCheck4_2" name="CheckRQ4_2" value="B"/>
                                                <label class="custom-control-label" for="customCheck4_2">{{$questionnaire->que_q4r2}}</label> 
                                                @error('CheckRQ4_2')
                                                    <span class="text-danger">{{$message}}</span>
                                                @enderror       
                                            </div>
                                            @endif
                                            @if($questionnaire->que_nbrerepq4>=3)
                                            <div class="custom-control custom-checkbox mb-5">
                                                <input type="checkbox" class="custom-control-input @error('CheckRQ4_3') is-invalid @enderror" id="customCheck4_3" name="CheckRQ4_3" value="C"/>
                                                <label class="custom-control-label" for="customCheck4_3">{{$questionnaire->que_q4r3}}</label>
                                                @error('CheckRQ4_3')
                                                    <span class="text-danger">{{$message}}</span>
                                                @enderror         
                                            </div>
                                            @endif
                                            @if($questionnaire->que_nbrerepq4>=4)
                                            <div class="custom-control custom-checkbox mb-5">
                                                <input type="checkbox" class="custom-control-input @error('CheckRQ4_4') is-invalid @enderror" id="customCheck4_4" name="CheckRQ4_4" value="D"/>
                                                <label class="custom-control-label" for="customCheck4_4">{{$questionnaire->que_q4r4}}</label> 
                                                @error('CheckRQ4_4')
                                                    <span class="text-danger">{{$message}}</span>
                                                @enderror  
                                            </div> 
                                            @endif
                                        @endif

                                        @if($questionnaire->que_choixrepq4==3)
                                        <div class="form-group row m-2">
                                            <textarea class="form-control @error('txtq4') is-invalid @enderror" id="txtq4" name="txtq4" >{{ old('txtq4')}}</textarea>
                                            @error('txtq4')
                                                <span class="text-danger">{{$message}}</span>
                                            @enderror
                                        </div>
                                        @endif
                                    </div>                                    
                            </div>
                            <div class="progress mt-5" style="height: 25px">
                                <div
                                    class="progress-bar bg-info"
                                    role="progressbar"
                                    style="width: {{round(4/$questionnaire->que_nbreques*100)}}%"
                                    aria-valuenow="6"
                                    aria-valuemin="0"
                                    aria-valuemax="100">
                                    {{round(4/$questionnaire->que_nbreques*100)}}%
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif
                    @if($questionnaire->que_nbreques>=5)
                    <div class="row" id="Q5">
                        <div class="col-sm-12">
                            <div class="mb-0 h-75">

                                <h6 class="text-center">{{$questionnaire->que_q5theme}}</h6>
                                <hr>                          
                                <h5 class="mb-4"><span class="badge bg-secondary w-100">Question 5 / {{$questionnaire->que_nbreques}}</span></h5>
                                <hr>
                                <h6 class="text-sm-left m-2">
                                    <strong>5°) </strong>{{$questionnaire->que_q5}}
                                </h6>
                                    <div class="mt-2">
                                        <input type="hidden" name="choixrepq5" id="choixrepq5" value="{{$questionnaire->que_choixrepq5}}">
                                        <input type="hidden" name="nbrerepq5" id="nbrerepq5" value="{{$questionnaire->que_nbrerepq5}}">

                                        @if($questionnaire->que_choixrepq5==1)
                                            @if($questionnaire->que_nbrerepq5>=1)
                                            <div class="custom-control custom-radio mb-5">
                                                <input type="radio" id="customRadio5_1" name="ChoixRQ5" class="custom-control-input @error('ChoixRQ5') is-invalid @enderror" value="A"/>
                                                <label class="custom-control-label" for="customRadio5_1">{{$questionnaire->que_q5r1}}</label>
                                                @error('ChoixRQ5')
                                                    <span class="text-danger">{{$message}}</span>
                                                @enderror
                                            </div>
                                            @endif
                                            @if($questionnaire->que_nbrerepq5>=2)
                                            <div class="custom-control custom-radio mb-5">    
                                                <input type="radio" id="customRadio5_2" name="ChoixRQ5" class="custom-control-input @error('ChoixRQ5') is-invalid @enderror" value="B"/>
                                                <label class="custom-control-label" for="customRadio5_2">{{$questionnaire->que_q5r2}}</label>
                                                @error('ChoixRQ5')
                                                    <span class="text-danger">{{$message}}</span>
                                                @enderror
                                            </div>
                                            @endif
                                            @if($questionnaire->que_nbrerepq5>=3)
                                            <div class="custom-control custom-radio mb-5">    
                                                <input type="radio" id="customRadio5_3" name="ChoixRQ5" class="custom-control-input @error('ChoixRQ5') is-invalid @enderror" value="C"/>
                                                <label class="custom-control-label" for="customRadio5_3">{{$questionnaire->que_q5r3}}</label>
                                                @error('ChoixRQ5')
                                                    <span class="text-danger">{{$message}}</span>
                                                @enderror
                                            </div>
                                            @endif
                                            @if($questionnaire->que_nbrerepq5>=4)  
                                            <div class="custom-control custom-radio mb-5">    
                                                <input type="radio" id="customRadio5_4" name="ChoixRQ5" class="custom-control-input @error('ChoixRQ5') is-invalid @enderror" value="D"/>
                                                <label class="custom-control-label" for="customRadio5_4">{{$questionnaire->que_q5r4}}</label>
                                                @error('ChoixRQ5')
                                                    <span class="text-danger">{{$message}}</span>
                                                @enderror
                                            </div> 
                                            @endif
                                        @endif

                                        @if($questionnaire->que_choixrepq5==2)
                                            @if($questionnaire->que_nbrerepq5>=1)
                                            <div class="custom-control custom-checkbox mb-5">
                                                <input type="checkbox" class="custom-control-input @error('CheckRQ5_1') is-invalid @enderror" id="customCheck5_1" name="CheckRQ5_1" value="A"/>
                                                <label class="custom-control-label" for="customCheck5_1">{{$questionnaire->que_q5r1}}</label>
                                                @error('CheckRQ5_1')
                                                    <span class="text-danger">{{$message}}</span>
                                                @enderror
                                            </div>
                                            @endif
                                            @if($questionnaire->que_nbrerepq5>=2)
                                            <div class="custom-control custom-checkbox mb-5">
                                                <input type="checkbox" class="custom-control-input @error('CheckRQ5_2') is-invalid @enderror" id="customCheck5_2" name="CheckRQ5_2" value="B"/>
                                                <label class="custom-control-label" for="customCheck5_2">{{$questionnaire->que_q5r2}}</label> 
                                                @error('CheckRQ5_2')
                                                    <span class="text-danger">{{$message}}</span>
                                                @enderror       
                                            </div>
                                            @endif
                                            @if($questionnaire->que_nbrerepq5>=3)
                                            <div class="custom-control custom-checkbox mb-5">
                                                <input type="checkbox" class="custom-control-input @error('CheckRQ5_3') is-invalid @enderror" id="customCheck5_3" name="CheckRQ5_3" value="C"/>
                                                <label class="custom-control-label" for="customCheck5_3">{{$questionnaire->que_q5r3}}</label>
                                                @error('CheckRQ5_3')
                                                    <span class="text-danger">{{$message}}</span>
                                                @enderror         
                                            </div>
                                            @endif
                                            @if($questionnaire->que_nbrerepq5>=4)
                                            <div class="custom-control custom-checkbox mb-5">
                                                <input type="checkbox" class="custom-control-input @error('CheckRQ5_4') is-invalid @enderror" id="customCheck5_4" name="CheckRQ5_4" value="D"/>
                                                <label class="custom-control-label" for="customCheck5_4">{{$questionnaire->que_q5r4}}</label> 
                                                @error('CheckRQ5_4')
                                                    <span class="text-danger">{{$message}}</span>
                                                @enderror  
                                            </div> 
                                            @endif
                                        @endif

                                        @if($questionnaire->que_choixrepq5==3)
                                        <div class="form-group row m-2">
                                            <textarea class="form-control @error('txtq5') is-invalid @enderror" id="txtq5" name="txtq5" >{{ old('txtq5')}}</textarea>
                                            @error('txtq5')
                                                <span class="text-danger">{{$message}}</span>
                                            @enderror
                                        </div>
                                        @endif
                                    </div>                                    
                            </div>
                            <div class="progress mt-5" style="height: 25px">
                                <div
                                    class="progress-bar bg-info"
                                    role="progressbar"
                                    style="width: {{round(5/$questionnaire->que_nbreques*100)}}%"
                                    aria-valuenow="6"
                                    aria-valuemin="0"
                                    aria-valuemax="100">
                                    {{round(5/$questionnaire->que_nbreques*100)}}%
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif
                    @if($questionnaire->que_nbreques>=6)
                    <div class="row" id="Q6">
                        <div class="col-sm-12">
                            <div class="mb-0 h-75">

                                <h6 class="text-center">{{$questionnaire->que_q6theme}}</h6>
                                <hr>                          
                                <h5 class="mb-4"><span class="badge bg-secondary w-100">Question 6 / {{$questionnaire->que_nbreques}}</span></h5>
                                <hr>
                                <h6 class="text-sm-left m-2">
                                    <strong>6°) </strong>{{$questionnaire->que_q6}}
                                </h6>
                                    <div class="mt-2">
                                        <input type="hidden" name="choixrepq6" id="choixrepq6" value="{{$questionnaire->que_choixrepq6}}">
                                        <input type="hidden" name="nbrerepq6" id="nbrerepq6" value="{{$questionnaire->que_nbrerepq6}}">

                                        @if($questionnaire->que_choixrepq6==1)
                                            @if($questionnaire->que_nbrerepq6>=1)
                                            <div class="custom-control custom-radio mb-5">
                                                <input type="radio" id="customRadio6_1" name="ChoixRQ6" class="custom-control-input @error('ChoixRQ6') is-invalid @enderror" value="A"/>
                                                <label class="custom-control-label" for="customRadio6_1">{{$questionnaire->que_q6r1}}</label>
                                                @error('ChoixRQ6')
                                                    <span class="text-danger">{{$message}}</span>
                                                @enderror
                                            </div>
                                            @endif
                                            @if($questionnaire->que_nbrerepq6>=2)
                                            <div class="custom-control custom-radio mb-5">    
                                                <input type="radio" id="customRadio6_2" name="ChoixRQ6" class="custom-control-input @error('ChoixRQ6') is-invalid @enderror" value="B"/>
                                                <label class="custom-control-label" for="customRadio6_2">{{$questionnaire->que_q6r2}}</label>
                                                @error('ChoixRQ6')
                                                    <span class="text-danger">{{$message}}</span>
                                                @enderror
                                            </div>
                                            @endif
                                            @if($questionnaire->que_nbrerepq6>=3)
                                            <div class="custom-control custom-radio mb-5">    
                                                <input type="radio" id="customRadio6_3" name="ChoixRQ6" class="custom-control-input @error('ChoixRQ6') is-invalid @enderror" value="C"/>
                                                <label class="custom-control-label" for="customRadio6_3">{{$questionnaire->que_q6r3}}</label>
                                                @error('ChoixRQ6')
                                                    <span class="text-danger">{{$message}}</span>
                                                @enderror
                                            </div>
                                            @endif
                                            @if($questionnaire->que_nbrerepq6>=4)  
                                            <div class="custom-control custom-radio mb-5">    
                                                <input type="radio" id="customRadio6_4" name="ChoixRQ6" class="custom-control-input @error('ChoixRQ6') is-invalid @enderror" value="D"/>
                                                <label class="custom-control-label" for="customRadio6_4">{{$questionnaire->que_q6r4}}</label>
                                                @error('ChoixRQ6')
                                                    <span class="text-danger">{{$message}}</span>
                                                @enderror
                                            </div> 
                                            @endif
                                        @endif

                                        @if($questionnaire->que_choixrepq6==2)
                                            @if($questionnaire->que_nbrerepq6>=1)
                                            <div class="custom-control custom-checkbox mb-5">
                                                <input type="checkbox" class="custom-control-input @error('CheckRQ6_1') is-invalid @enderror" id="customCheck6_1" name="CheckRQ6_1" value="A"/>
                                                <label class="custom-control-label" for="customCheck6_1">{{$questionnaire->que_q6r1}}</label>
                                                @error('CheckRQ6_1')
                                                    <span class="text-danger">{{$message}}</span>
                                                @enderror
                                            </div>
                                            @endif
                                            @if($questionnaire->que_nbrerepq6>=2)
                                            <div class="custom-control custom-checkbox mb-5">
                                                <input type="checkbox" class="custom-control-input @error('CheckRQ6_2') is-invalid @enderror" id="customCheck6_2" name="CheckRQ6_2" value="B"/>
                                                <label class="custom-control-label" for="customCheck6_2">{{$questionnaire->que_q6r2}}</label> 
                                                @error('CheckRQ6_2')
                                                    <span class="text-danger">{{$message}}</span>
                                                @enderror       
                                            </div>
                                            @endif
                                            @if($questionnaire->que_nbrerepq6>=3)
                                            <div class="custom-control custom-checkbox mb-5">
                                                <input type="checkbox" class="custom-control-input @error('CheckRQ6_3') is-invalid @enderror" id="customCheck6_3" name="CheckRQ6_3" value="C"/>
                                                <label class="custom-control-label" for="customCheck6_3">{{$questionnaire->que_q6r3}}</label>
                                                @error('CheckRQ6_3')
                                                    <span class="text-danger">{{$message}}</span>
                                                @enderror         
                                            </div>
                                            @endif
                                            @if($questionnaire->que_nbrerepq6>=4)
                                            <div class="custom-control custom-checkbox mb-5">
                                                <input type="checkbox" class="custom-control-input @error('CheckRQ6_4') is-invalid @enderror" id="customCheck6_4" name="CheckRQ6_4" value="D"/>
                                                <label class="custom-control-label" for="customCheck6_4">{{$questionnaire->que_q6r4}}</label> 
                                                @error('CheckRQ6_4')
                                                    <span class="text-danger">{{$message}}</span>
                                                @enderror  
                                            </div> 
                                            @endif
                                        @endif

                                        @if($questionnaire->que_choixrepq6==3)
                                        <div class="form-group row m-2">
                                            <textarea class="form-control @error('txtq6') is-invalid @enderror" id="txtq6" name="txtq6" >{{ old('txtq6')}}</textarea>
                                            @error('txtq6')
                                                <span class="text-danger">{{$message}}</span>
                                            @enderror
                                        </div>
                                        @endif
                                    </div>                                    
                            </div>
                            <div class="progress mt-5" style="height: 25px">
                                <div
                                    class="progress-bar bg-info"
                                    role="progressbar"
                                    style="width: {{round(6/$questionnaire->que_nbreques*100)}}%"
                                    aria-valuenow="6"
                                    aria-valuemin="0"
                                    aria-valuemax="100">
                                    {{round(6/$questionnaire->que_nbreques*100)}}%
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif
                    @if($questionnaire->que_nbreques>=7)
                    <div class="row" id="Q7">
                        <div class="col-sm-12">
                            <div class="mb-0 h-75">

                                <h6 class="text-center">{{$questionnaire->que_q7theme}}</h6>
                                <hr>                          
                                <h5 class="mb-4"><span class="badge bg-secondary w-100">Question 7 / {{$questionnaire->que_nbreques}}</span></h5>
                                <hr>
                                <h6 class="text-sm-left m-2">
                                    <strong>7°) </strong>{{$questionnaire->que_q7}}
                                </h6>
                                    <div class="mt-2">
                                        <input type="hidden" name="choixrepq7" id="choixrepq7" value="{{$questionnaire->que_choixrepq7}}">
                                        <input type="hidden" name="nbrerepq7" id="nbrerepq7" value="{{$questionnaire->que_nbrerepq7}}">

                                        @if($questionnaire->que_choixrepq7==1)
                                            @if($questionnaire->que_nbrerepq7>=1)
                                            <div class="custom-control custom-radio mb-5">
                                                <input type="radio" id="customRadio7_1" name="ChoixRQ7" class="custom-control-input @error('ChoixRQ7') is-invalid @enderror" value="A"/>
                                                <label class="custom-control-label" for="customRadio7_1">{{$questionnaire->que_q7r1}}</label>
                                                @error('ChoixRQ7')
                                                    <span class="text-danger">{{$message}}</span>
                                                @enderror
                                            </div>
                                            @endif
                                            @if($questionnaire->que_nbrerepq7>=2)
                                            <div class="custom-control custom-radio mb-5">    
                                                <input type="radio" id="customRadio7_2" name="ChoixRQ7" class="custom-control-input @error('ChoixRQ7') is-invalid @enderror" value="B"/>
                                                <label class="custom-control-label" for="customRadio7_2">{{$questionnaire->que_q7r2}}</label>
                                                @error('ChoixRQ7')
                                                    <span class="text-danger">{{$message}}</span>
                                                @enderror
                                            </div>
                                            @endif
                                            @if($questionnaire->que_nbrerepq7>=3)
                                            <div class="custom-control custom-radio mb-5">    
                                                <input type="radio" id="customRadio7_3" name="ChoixRQ7" class="custom-control-input @error('ChoixRQ7') is-invalid @enderror" value="C"/>
                                                <label class="custom-control-label" for="customRadio7_3">{{$questionnaire->que_q7r3}}</label>
                                                @error('ChoixRQ7')
                                                    <span class="text-danger">{{$message}}</span>
                                                @enderror
                                            </div>
                                            @endif
                                            @if($questionnaire->que_nbrerepq7>=4)  
                                            <div class="custom-control custom-radio mb-5">    
                                                <input type="radio" id="customRadio7_4" name="ChoixRQ7" class="custom-control-input @error('ChoixRQ7') is-invalid @enderror" value="D"/>
                                                <label class="custom-control-label" for="customRadio7_4">{{$questionnaire->que_q7r4}}</label>
                                                @error('ChoixRQ7')
                                                    <span class="text-danger">{{$message}}</span>
                                                @enderror
                                            </div> 
                                            @endif
                                        @endif

                                        @if($questionnaire->que_choixrepq7==2)
                                            @if($questionnaire->que_nbrerepq7>=1)
                                            <div class="custom-control custom-checkbox mb-5">
                                                <input type="checkbox" class="custom-control-input @error('CheckRQ7_1') is-invalid @enderror" id="customCheck7_1" name="CheckRQ7_1" value="A"/>
                                                <label class="custom-control-label" for="customCheck7_1">{{$questionnaire->que_q7r1}}</label>
                                                @error('CheckRQ7_1')
                                                    <span class="text-danger">{{$message}}</span>
                                                @enderror
                                            </div>
                                            @endif
                                            @if($questionnaire->que_nbrerepq7>=2)
                                            <div class="custom-control custom-checkbox mb-5">
                                                <input type="checkbox" class="custom-control-input @error('CheckRQ7_2') is-invalid @enderror" id="customCheck7_2" name="CheckRQ7_2" value="B"/>
                                                <label class="custom-control-label" for="customCheck7_2">{{$questionnaire->que_q7r2}}</label> 
                                                @error('CheckRQ7_2')
                                                    <span class="text-danger">{{$message}}</span>
                                                @enderror       
                                            </div>
                                            @endif
                                            @if($questionnaire->que_nbrerepq7>=3)
                                            <div class="custom-control custom-checkbox mb-5">
                                                <input type="checkbox" class="custom-control-input @error('CheckRQ7_3') is-invalid @enderror" id="customCheck7_3" name="CheckRQ7_3" value="C"/>
                                                <label class="custom-control-label" for="customCheck7_3">{{$questionnaire->que_q7r3}}</label>
                                                @error('CheckRQ7_3')
                                                    <span class="text-danger">{{$message}}</span>
                                                @enderror         
                                            </div>
                                            @endif
                                            @if($questionnaire->que_nbrerepq7>=4)
                                            <div class="custom-control custom-checkbox mb-5">
                                                <input type="checkbox" class="custom-control-input @error('CheckRQ7_4') is-invalid @enderror" id="customCheck7_4" name="CheckRQ7_4" value="D"/>
                                                <label class="custom-control-label" for="customCheck7_4">{{$questionnaire->que_q7r4}}</label> 
                                                @error('CheckRQ7_4')
                                                    <span class="text-danger">{{$message}}</span>
                                                @enderror  
                                            </div> 
                                            @endif
                                        @endif

                                        @if($questionnaire->que_choixrepq7==3)
                                        <div class="form-group row m-2">
                                            <textarea class="form-control @error('txtq7') is-invalid @enderror" id="txtq7" name="txtq7" >{{ old('txtq7')}}</textarea>
                                            @error('txtq7')
                                                <span class="text-danger">{{$message}}</span>
                                            @enderror
                                        </div>
                                        @endif
                                    </div>                                    
                            </div>
                            <div class="progress mt-5" style="height: 25px">
                                <div
                                    class="progress-bar bg-info"
                                    role="progressbar"
                                    style="width: {{round(7/$questionnaire->que_nbreques*100)}}%"
                                    aria-valuenow="6"
                                    aria-valuemin="0"
                                    aria-valuemax="100">
                                    {{round(7/$questionnaire->que_nbreques*100)}}%
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif
                    @if($questionnaire->que_nbreques>=8)
                    <div class="row" id="Q8">
                        <div class="col-sm-12">
                            <div class="mb-0 h-75">

                                <h6 class="text-center">{{$questionnaire->que_q8theme}}</h6>
                                <hr>                          
                                <h5 class="mb-4"><span class="badge bg-secondary w-100">Question 8 / {{$questionnaire->que_nbreques}}</span></h5>
                                <hr>
                                <h6 class="text-sm-left m-2">
                                    <strong>8°) </strong>{{$questionnaire->que_q8}}
                                </h6>
                                    <div class="mt-2">
                                        <input type="hidden" name="choixrepq8" id="choixrepq8" value="{{$questionnaire->que_choixrepq8}}">
                                        <input type="hidden" name="nbrerepq8" id="nbrerepq8" value="{{$questionnaire->que_nbrerepq8}}">

                                        @if($questionnaire->que_choixrepq8==1)
                                            @if($questionnaire->que_nbrerepq8>=1)
                                            <div class="custom-control custom-radio mb-5">
                                                <input type="radio" id="customRadio8_1" name="ChoixRQ8" class="custom-control-input @error('ChoixRQ8') is-invalid @enderror" value="A"/>
                                                <label class="custom-control-label" for="customRadio8_1">{{$questionnaire->que_q8r1}}</label>
                                                @error('ChoixRQ8')
                                                    <span class="text-danger">{{$message}}</span>
                                                @enderror
                                            </div>
                                            @endif
                                            @if($questionnaire->que_nbrerepq8>=2)
                                            <div class="custom-control custom-radio mb-5">    
                                                <input type="radio" id="customRadio8_2" name="ChoixRQ8" class="custom-control-input @error('ChoixRQ8') is-invalid @enderror" value="B"/>
                                                <label class="custom-control-label" for="customRadio8_2">{{$questionnaire->que_q8r2}}</label>
                                                @error('ChoixRQ8')
                                                    <span class="text-danger">{{$message}}</span>
                                                @enderror
                                            </div>
                                            @endif
                                            @if($questionnaire->que_nbrerepq8>=3)
                                            <div class="custom-control custom-radio mb-5">    
                                                <input type="radio" id="customRadio8_3" name="ChoixRQ8" class="custom-control-input @error('ChoixRQ8') is-invalid @enderror" value="C"/>
                                                <label class="custom-control-label" for="customRadio8_3">{{$questionnaire->que_q8r3}}</label>
                                                @error('ChoixRQ8')
                                                    <span class="text-danger">{{$message}}</span>
                                                @enderror
                                            </div>
                                            @endif
                                            @if($questionnaire->que_nbrerepq8>=4)  
                                            <div class="custom-control custom-radio mb-5">    
                                                <input type="radio" id="customRadio8_4" name="ChoixRQ8" class="custom-control-input @error('ChoixRQ8') is-invalid @enderror" value="D"/>
                                                <label class="custom-control-label" for="customRadio8_4">{{$questionnaire->que_q8r4}}</label>
                                                @error('ChoixRQ8')
                                                    <span class="text-danger">{{$message}}</span>
                                                @enderror
                                            </div> 
                                            @endif
                                        @endif

                                        @if($questionnaire->que_choixrepq8==2)
                                            @if($questionnaire->que_nbrerepq8>=1)
                                            <div class="custom-control custom-checkbox mb-5">
                                                <input type="checkbox" class="custom-control-input @error('CheckRQ8_1') is-invalid @enderror" id="customCheck8_1" name="CheckRQ8_1" value="A"/>
                                                <label class="custom-control-label" for="customCheck8_1">{{$questionnaire->que_q8r1}}</label>
                                                @error('CheckRQ8_1')
                                                    <span class="text-danger">{{$message}}</span>
                                                @enderror
                                            </div>
                                            @endif
                                            @if($questionnaire->que_nbrerepq8>=2)
                                            <div class="custom-control custom-checkbox mb-5">
                                                <input type="checkbox" class="custom-control-input @error('CheckRQ8_2') is-invalid @enderror" id="customCheck8_2" name="CheckRQ8_2" value="B"/>
                                                <label class="custom-control-label" for="customCheck8_2">{{$questionnaire->que_q8r2}}</label> 
                                                @error('CheckRQ8_2')
                                                    <span class="text-danger">{{$message}}</span>
                                                @enderror       
                                            </div>
                                            @endif
                                            @if($questionnaire->que_nbrerepq8>=3)
                                            <div class="custom-control custom-checkbox mb-5">
                                                <input type="checkbox" class="custom-control-input @error('CheckRQ8_3') is-invalid @enderror" id="customCheck8_3" name="CheckRQ8_3" value="C"/>
                                                <label class="custom-control-label" for="customCheck8_3">{{$questionnaire->que_q8r3}}</label>
                                                @error('CheckRQ8_3')
                                                    <span class="text-danger">{{$message}}</span>
                                                @enderror         
                                            </div>
                                            @endif
                                            @if($questionnaire->que_nbrerepq8>=4)
                                            <div class="custom-control custom-checkbox mb-5">
                                                <input type="checkbox" class="custom-control-input @error('CheckRQ8_4') is-invalid @enderror" id="customCheck8_4" name="CheckRQ8_4" value="D"/>
                                                <label class="custom-control-label" for="customCheck8_4">{{$questionnaire->que_q8r4}}</label> 
                                                @error('CheckRQ8_4')
                                                    <span class="text-danger">{{$message}}</span>
                                                @enderror  
                                            </div> 
                                            @endif
                                        @endif

                                        @if($questionnaire->que_choixrepq8==3)
                                        <div class="form-group row m-2">
                                            <textarea class="form-control @error('txtq8') is-invalid @enderror" id="txtq8" name="txtq8" >{{ old('txtq8')}}</textarea>
                                            @error('txtq8')
                                                <span class="text-danger">{{$message}}</span>
                                            @enderror
                                        </div>
                                        @endif
                                    </div>                                    
                            </div>
                            <div class="progress mt-5" style="height: 25px">
                                <div
                                    class="progress-bar bg-info"
                                    role="progressbar"
                                    style="width: {{round(8/$questionnaire->que_nbreques*100)}}%"
                                    aria-valuenow="6"
                                    aria-valuemin="0"
                                    aria-valuemax="100">
                                    {{round(8/$questionnaire->que_nbreques*100)}}%
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif
                    @if($questionnaire->que_nbreques>=9)
                    <div class="row" id="Q9">
                        <div class="col-sm-12">
                            <div class="mb-0 h-75">

                                <h6 class="text-center">{{$questionnaire->que_q9theme}}</h6>
                                <hr>                          
                                <h5 class="mb-4"><span class="badge bg-secondary w-100">Question 9 / {{$questionnaire->que_nbreques}}</span></h5>
                                <hr>
                                <h6 class="text-sm-left m-2">
                                    <strong>9°) </strong>{{$questionnaire->que_q9}}
                                </h6>
                                    <div class="mt-2">
                                        <input type="hidden" name="choixrepq9" id="choixrepq9" value="{{$questionnaire->que_choixrepq9}}">
                                        <input type="hidden" name="nbrerepq9" id="nbrerepq9" value="{{$questionnaire->que_nbrerepq9}}">

                                        @if($questionnaire->que_choixrepq9==1)
                                            @if($questionnaire->que_nbrerepq9>=1)
                                            <div class="custom-control custom-radio mb-5">
                                                <input type="radio" id="customRadio9_1" name="ChoixRQ9" class="custom-control-input @error('ChoixRQ9') is-invalid @enderror" value="A"/>
                                                <label class="custom-control-label" for="customRadio9_1">{{$questionnaire->que_q9r1}}</label>
                                                @error('ChoixRQ9')
                                                    <span class="text-danger">{{$message}}</span>
                                                @enderror
                                            </div>
                                            @endif
                                            @if($questionnaire->que_nbrerepq9>=2)
                                            <div class="custom-control custom-radio mb-5">    
                                                <input type="radio" id="customRadio9_2" name="ChoixRQ9" class="custom-control-input @error('ChoixRQ9') is-invalid @enderror" value="B"/>
                                                <label class="custom-control-label" for="customRadio9_2">{{$questionnaire->que_q9r2}}</label>
                                                @error('ChoixRQ9')
                                                    <span class="text-danger">{{$message}}</span>
                                                @enderror
                                            </div>
                                            @endif
                                            @if($questionnaire->que_nbrerepq9>=3)
                                            <div class="custom-control custom-radio mb-5">    
                                                <input type="radio" id="customRadio9_3" name="ChoixRQ9" class="custom-control-input @error('ChoixRQ9') is-invalid @enderror" value="C"/>
                                                <label class="custom-control-label" for="customRadio9_3">{{$questionnaire->que_q9r3}}</label>
                                                @error('ChoixRQ9')
                                                    <span class="text-danger">{{$message}}</span>
                                                @enderror
                                            </div>
                                            @endif
                                            @if($questionnaire->que_nbrerepq9>=4)  
                                            <div class="custom-control custom-radio mb-5">    
                                                <input type="radio" id="customRadio9_4" name="ChoixRQ9" class="custom-control-input @error('ChoixRQ9') is-invalid @enderror" value="D"/>
                                                <label class="custom-control-label" for="customRadio9_4">{{$questionnaire->que_q9r4}}</label>
                                                @error('ChoixRQ9')
                                                    <span class="text-danger">{{$message}}</span>
                                                @enderror
                                            </div> 
                                            @endif
                                        @endif

                                        @if($questionnaire->que_choixrepq9==2)
                                            @if($questionnaire->que_nbrerepq9>=1)
                                            <div class="custom-control custom-checkbox mb-5">
                                                <input type="checkbox" class="custom-control-input @error('CheckRQ9_1') is-invalid @enderror" id="customCheck9_1" name="CheckRQ9_1" value="A"/>
                                                <label class="custom-control-label" for="customCheck9_1">{{$questionnaire->que_q9r1}}</label>
                                                @error('CheckRQ9_1')
                                                    <span class="text-danger">{{$message}}</span>
                                                @enderror
                                            </div>
                                            @endif
                                            @if($questionnaire->que_nbrerepq9>=2)
                                            <div class="custom-control custom-checkbox mb-5">
                                                <input type="checkbox" class="custom-control-input @error('CheckRQ9_2') is-invalid @enderror" id="customCheck9_2" name="CheckRQ9_2" value="B"/>
                                                <label class="custom-control-label" for="customCheck9_2">{{$questionnaire->que_q9r2}}</label> 
                                                @error('CheckRQ9_2')
                                                    <span class="text-danger">{{$message}}</span>
                                                @enderror       
                                            </div>
                                            @endif
                                            @if($questionnaire->que_nbrerepq9>=3)
                                            <div class="custom-control custom-checkbox mb-5">
                                                <input type="checkbox" class="custom-control-input @error('CheckRQ9_3') is-invalid @enderror" id="customCheck9_3" name="CheckRQ9_3" value="C"/>
                                                <label class="custom-control-label" for="customCheck9_3">{{$questionnaire->que_q9r3}}</label>
                                                @error('CheckRQ9_3')
                                                    <span class="text-danger">{{$message}}</span>
                                                @enderror         
                                            </div>
                                            @endif
                                            @if($questionnaire->que_nbrerepq9>=4)
                                            <div class="custom-control custom-checkbox mb-5">
                                                <input type="checkbox" class="custom-control-input @error('CheckRQ9_4') is-invalid @enderror" id="customCheck9_4" name="CheckRQ9_4" value="D"/>
                                                <label class="custom-control-label" for="customCheck9_4">{{$questionnaire->que_q9r4}}</label> 
                                                @error('CheckRQ9_4')
                                                    <span class="text-danger">{{$message}}</span>
                                                @enderror  
                                            </div> 
                                            @endif
                                        @endif

                                        @if($questionnaire->que_choixrepq9==3)
                                        <div class="form-group row m-2">
                                            <textarea class="form-control @error('txtq9') is-invalid @enderror" id="txtq9" name="txtq9" >{{ old('txtq9')}}</textarea>
                                            @error('txtq9')
                                                <span class="text-danger">{{$message}}</span>
                                            @enderror
                                        </div>
                                        @endif
                                    </div>                                    
                            </div>
                            <div class="progress mt-5" style="height: 25px">
                                <div
                                    class="progress-bar bg-info"
                                    role="progressbar"
                                    style="width: {{round(9/$questionnaire->que_nbreques*100)}}%"
                                    aria-valuenow="6"
                                    aria-valuemin="0"
                                    aria-valuemax="100">
                                    {{round(9/$questionnaire->que_nbreques*100)}}%
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif
                    @if($questionnaire->que_nbreques>=10)
                    <div class="row" id="Q10">
                        <div class="col-sm-12">
                            <div class="mb-0 h-75">

                                <h6 class="text-center">{{$questionnaire->que_q10theme}}</h6>
                                <hr>                          
                                <h5 class="mb-4"><span class="badge bg-secondary w-100">Question 10 / {{$questionnaire->que_nbreques}}</span></h5>
                                <hr>
                                <h6 class="text-sm-left m-2">
                                    <strong>10°) </strong>{{$questionnaire->que_q10}}
                                </h6>
                                    <div class="mt-2">
                                        <input type="hidden" name="choixrepq10" id="choixrepq10" value="{{$questionnaire->que_choixrepq10}}">
                                        <input type="hidden" name="nbrerepq10" id="nbrerepq10" value="{{$questionnaire->que_nbrerepq10}}">

                                        @if($questionnaire->que_choixrepq10==1)
                                            @if($questionnaire->que_nbrerepq10>=1)
                                            <div class="custom-control custom-radio mb-5">
                                                <input type="radio" id="customRadio10_1" name="ChoixRQ10" class="custom-control-input @error('ChoixRQ10') is-invalid @enderror" value="A"/>
                                                <label class="custom-control-label" for="customRadio10_1">{{$questionnaire->que_q10r1}}</label>
                                                @error('ChoixRQ10')
                                                    <span class="text-danger">{{$message}}</span>
                                                @enderror
                                            </div>
                                            @endif
                                            @if($questionnaire->que_nbrerepq10>=2)
                                            <div class="custom-control custom-radio mb-5">    
                                                <input type="radio" id="customRadio10_2" name="ChoixRQ10" class="custom-control-input @error('ChoixRQ10') is-invalid @enderror" value="B"/>
                                                <label class="custom-control-label" for="customRadio10_2">{{$questionnaire->que_q10r2}}</label>
                                                @error('ChoixRQ10')
                                                    <span class="text-danger">{{$message}}</span>
                                                @enderror
                                            </div>
                                            @endif
                                            @if($questionnaire->que_nbrerepq10>=3)
                                            <div class="custom-control custom-radio mb-5">    
                                                <input type="radio" id="customRadio10_3" name="ChoixRQ10" class="custom-control-input @error('ChoixRQ10') is-invalid @enderror" value="C"/>
                                                <label class="custom-control-label" for="customRadio10_3">{{$questionnaire->que_q10r3}}</label>
                                                @error('ChoixRQ10')
                                                    <span class="text-danger">{{$message}}</span>
                                                @enderror
                                            </div>
                                            @endif
                                            @if($questionnaire->que_nbrerepq10>=4)  
                                            <div class="custom-control custom-radio mb-5">    
                                                <input type="radio" id="customRadio10_4" name="ChoixRQ10" class="custom-control-input @error('ChoixRQ10') is-invalid @enderror" value="D"/>
                                                <label class="custom-control-label" for="customRadio10_4">{{$questionnaire->que_q10r4}}</label>
                                                @error('ChoixRQ10')
                                                    <span class="text-danger">{{$message}}</span>
                                                @enderror
                                            </div> 
                                            @endif
                                        @endif

                                        @if($questionnaire->que_choixrepq10==2)
                                            @if($questionnaire->que_nbrerepq10>=1)
                                            <div class="custom-control custom-checkbox mb-5">
                                                <input type="checkbox" class="custom-control-input @error('CheckRQ10_1') is-invalid @enderror" id="customCheck10_1" name="CheckRQ10_1" value="A"/>
                                                <label class="custom-control-label" for="customCheck10_1">{{$questionnaire->que_q10r1}}</label>
                                                @error('CheckRQ10_1')
                                                    <span class="text-danger">{{$message}}</span>
                                                @enderror
                                            </div>
                                            @endif
                                            @if($questionnaire->que_nbrerepq10>=2)
                                            <div class="custom-control custom-checkbox mb-5">
                                                <input type="checkbox" class="custom-control-input @error('CheckRQ10_2') is-invalid @enderror" id="customCheck10_2" name="CheckRQ10_2" value="B"/>
                                                <label class="custom-control-label" for="customCheck10_2">{{$questionnaire->que_q10r2}}</label> 
                                                @error('CheckRQ10_2')
                                                    <span class="text-danger">{{$message}}</span>
                                                @enderror       
                                            </div>
                                            @endif
                                            @if($questionnaire->que_nbrerepq10>=3)
                                            <div class="custom-control custom-checkbox mb-5">
                                                <input type="checkbox" class="custom-control-input @error('CheckRQ10_3') is-invalid @enderror" id="customCheck10_3" name="CheckRQ10_3" value="C"/>
                                                <label class="custom-control-label" for="customCheck10_3">{{$questionnaire->que_q10r3}}</label>
                                                @error('CheckRQ10_3')
                                                    <span class="text-danger">{{$message}}</span>
                                                @enderror         
                                            </div>
                                            @endif
                                            @if($questionnaire->que_nbrerepq10>=4)
                                            <div class="custom-control custom-checkbox mb-5">
                                                <input type="checkbox" class="custom-control-input @error('CheckRQ10_4') is-invalid @enderror" id="customCheck10_4" name="CheckRQ10_4" value="D"/>
                                                <label class="custom-control-label" for="customCheck10_4">{{$questionnaire->que_q10r4}}</label> 
                                                @error('CheckRQ10_4')
                                                    <span class="text-danger">{{$message}}</span>
                                                @enderror  
                                            </div> 
                                            @endif
                                        @endif

                                        @if($questionnaire->que_choixrepq10==3)
                                        <div class="form-group row m-2">
                                            <textarea class="form-control @error('txtq10') is-invalid @enderror" id="txtq10" name="txtq10" >{{ old('txtq10')}}</textarea>
                                            @error('txtq10')
                                                <span class="text-danger">{{$message}}</span>
                                            @enderror
                                        </div>
                                        @endif
                                    </div>                                    
                            </div>
                            <div class="progress mt-5" style="height: 25px">
                                <div
                                    class="progress-bar bg-info"
                                    role="progressbar"
                                    style="width: {{round(10/$questionnaire->que_nbreques*100)}}%"
                                    aria-valuenow="6"
                                    aria-valuemin="0"
                                    aria-valuemax="100">
                                    {{round(10/$questionnaire->que_nbreques*100)}}%
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif
                    @if($questionnaire->que_nbreques>=11)
                    <div class="row" id="Q11">
                        <div class="col-sm-12">
                            <div class="mb-0 h-75">

                                <h6 class="text-center">{{$questionnaire->que_q11theme}}</h6>
                                <hr>                          
                                <h5 class="mb-4"><span class="badge bg-secondary w-100">Question 11 / {{$questionnaire->que_nbreques}}</span></h5>
                                <hr>
                                <h6 class="text-sm-left m-2">
                                    <strong>11°) </strong>{{$questionnaire->que_q11}}
                                </h6>
                                    <div class="mt-2">
                                        <input type="hidden" name="choixrepq11" id="choixrepq11" value="{{$questionnaire->que_choixrepq11}}">
                                        <input type="hidden" name="nbrerepq11" id="nbrerepq11" value="{{$questionnaire->que_nbrerepq11}}">

                                        @if($questionnaire->que_choixrepq11==1)
                                            @if($questionnaire->que_nbrerepq11>=1)
                                            <div class="custom-control custom-radio mb-5">
                                                <input type="radio" id="customRadio11_1" name="ChoixRQ11" class="custom-control-input @error('ChoixRQ11') is-invalid @enderror" value="A"/>
                                                <label class="custom-control-label" for="customRadio11_1">{{$questionnaire->que_q11r1}}</label>
                                                @error('ChoixRQ11')
                                                    <span class="text-danger">{{$message}}</span>
                                                @enderror
                                            </div>
                                            @endif
                                            @if($questionnaire->que_nbrerepq11>=2)
                                            <div class="custom-control custom-radio mb-5">    
                                                <input type="radio" id="customRadio11_2" name="ChoixRQ11" class="custom-control-input @error('ChoixRQ11') is-invalid @enderror" value="B"/>
                                                <label class="custom-control-label" for="customRadio11_2">{{$questionnaire->que_q11r2}}</label>
                                                @error('ChoixRQ11')
                                                    <span class="text-danger">{{$message}}</span>
                                                @enderror
                                            </div>
                                            @endif
                                            @if($questionnaire->que_nbrerepq11>=3)
                                            <div class="custom-control custom-radio mb-5">    
                                                <input type="radio" id="customRadio11_3" name="ChoixRQ11" class="custom-control-input @error('ChoixRQ11') is-invalid @enderror" value="C"/>
                                                <label class="custom-control-label" for="customRadio11_3">{{$questionnaire->que_q11r3}}</label>
                                                @error('ChoixRQ11')
                                                    <span class="text-danger">{{$message}}</span>
                                                @enderror
                                            </div>
                                            @endif
                                            @if($questionnaire->que_nbrerepq11>=4)  
                                            <div class="custom-control custom-radio mb-5">    
                                                <input type="radio" id="customRadio11_4" name="ChoixRQ11" class="custom-control-input @error('ChoixRQ11') is-invalid @enderror" value="D"/>
                                                <label class="custom-control-label" for="customRadio11_4">{{$questionnaire->que_q11r4}}</label>
                                                @error('ChoixRQ11')
                                                    <span class="text-danger">{{$message}}</span>
                                                @enderror
                                            </div> 
                                            @endif
                                        @endif

                                        @if($questionnaire->que_choixrepq11==2)
                                            @if($questionnaire->que_nbrerepq11>=1)
                                            <div class="custom-control custom-checkbox mb-5">
                                                <input type="checkbox" class="custom-control-input @error('CheckRQ11_1') is-invalid @enderror" id="customCheck11_1" name="CheckRQ11_1" value="A"/>
                                                <label class="custom-control-label" for="customCheck11_1">{{$questionnaire->que_q11r1}}</label>
                                                @error('CheckRQ11_1')
                                                    <span class="text-danger">{{$message}}</span>
                                                @enderror
                                            </div>
                                            @endif
                                            @if($questionnaire->que_nbrerepq11>=2)
                                            <div class="custom-control custom-checkbox mb-5">
                                                <input type="checkbox" class="custom-control-input @error('CheckRQ11_2') is-invalid @enderror" id="customCheck11_2" name="CheckRQ11_2" value="B"/>
                                                <label class="custom-control-label" for="customCheck11_2">{{$questionnaire->que_q11r2}}</label> 
                                                @error('CheckRQ11_2')
                                                    <span class="text-danger">{{$message}}</span>
                                                @enderror       
                                            </div>
                                            @endif
                                            @if($questionnaire->que_nbrerepq11>=3)
                                            <div class="custom-control custom-checkbox mb-5">
                                                <input type="checkbox" class="custom-control-input @error('CheckRQ11_3') is-invalid @enderror" id="customCheck11_3" name="CheckRQ11_3" value="C"/>
                                                <label class="custom-control-label" for="customCheck11_3">{{$questionnaire->que_q11r3}}</label>
                                                @error('CheckRQ11_3')
                                                    <span class="text-danger">{{$message}}</span>
                                                @enderror         
                                            </div>
                                            @endif
                                            @if($questionnaire->que_nbrerepq11>=4)
                                            <div class="custom-control custom-checkbox mb-5">
                                                <input type="checkbox" class="custom-control-input @error('CheckRQ11_4') is-invalid @enderror" id="customCheck11_4" name="CheckRQ11_4" value="D"/>
                                                <label class="custom-control-label" for="customCheck11_4">{{$questionnaire->que_q11r4}}</label> 
                                                @error('CheckRQ11_4')
                                                    <span class="text-danger">{{$message}}</span>
                                                @enderror  
                                            </div> 
                                            @endif
                                        @endif

                                        @if($questionnaire->que_choixrepq11==3)
                                        <div class="form-group row m-2">
                                            <textarea class="form-control @error('txtq11') is-invalid @enderror" id="txtq11" name="txtq11" >{{ old('txtq11')}}</textarea>
                                            @error('txtq11')
                                                <span class="text-danger">{{$message}}</span>
                                            @enderror
                                        </div>
                                        @endif
                                    </div>                                    
                            </div>
                            <div class="progress mt-5" style="height: 25px">
                                <div
                                    class="progress-bar bg-info"
                                    role="progressbar"
                                    style="width: {{round(11/$questionnaire->que_nbreques*100)}}%"
                                    aria-valuenow="6"
                                    aria-valuemin="0"
                                    aria-valuemax="100">
                                    {{round(11/$questionnaire->que_nbreques*100)}}%
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif
                    @if($questionnaire->que_nbreques>=12)
                    <div class="row" id="Q12">
                        <div class="col-sm-12">
                            <div class="mb-0 h-75">

                                <h6 class="text-center">{{$questionnaire->que_q12theme}}</h6>
                                <hr>                          
                                <h5 class="mb-4"><span class="badge bg-secondary w-100">Question 12 / {{$questionnaire->que_nbreques}}</span></h5>
                                <hr>
                                <h6 class="text-sm-left m-2">
                                    <strong>12°) </strong>{{$questionnaire->que_q12}}
                                </h6>
                                    <div class="mt-2">
                                        <input type="hidden" name="choixrepq12" id="choixrepq12" value="{{$questionnaire->que_choixrepq12}}">
                                        <input type="hidden" name="nbrerepq12" id="nbrerepq12" value="{{$questionnaire->que_nbrerepq12}}">

                                        @if($questionnaire->que_choixrepq12==1)
                                            @if($questionnaire->que_nbrerepq12>=1)
                                            <div class="custom-control custom-radio mb-5">
                                                <input type="radio" id="customRadio12_1" name="ChoixRQ12" class="custom-control-input @error('ChoixRQ12') is-invalid @enderror" value="A"/>
                                                <label class="custom-control-label" for="customRadio12_1">{{$questionnaire->que_q12r1}}</label>
                                                @error('ChoixRQ12')
                                                    <span class="text-danger">{{$message}}</span>
                                                @enderror
                                            </div>
                                            @endif
                                            @if($questionnaire->que_nbrerepq12>=2)
                                            <div class="custom-control custom-radio mb-5">    
                                                <input type="radio" id="customRadio12_2" name="ChoixRQ12" class="custom-control-input @error('ChoixRQ12') is-invalid @enderror" value="B"/>
                                                <label class="custom-control-label" for="customRadio12_2">{{$questionnaire->que_q12r2}}</label>
                                                @error('ChoixRQ12')
                                                    <span class="text-danger">{{$message}}</span>
                                                @enderror
                                            </div>
                                            @endif
                                            @if($questionnaire->que_nbrerepq12>=3)
                                            <div class="custom-control custom-radio mb-5">    
                                                <input type="radio" id="customRadio12_3" name="ChoixRQ12" class="custom-control-input @error('ChoixRQ12') is-invalid @enderror" value="C"/>
                                                <label class="custom-control-label" for="customRadio12_3">{{$questionnaire->que_q12r3}}</label>
                                                @error('ChoixRQ12')
                                                    <span class="text-danger">{{$message}}</span>
                                                @enderror
                                            </div>
                                            @endif
                                            @if($questionnaire->que_nbrerepq12>=4)  
                                            <div class="custom-control custom-radio mb-5">    
                                                <input type="radio" id="customRadio12_4" name="ChoixRQ12" class="custom-control-input @error('ChoixRQ12') is-invalid @enderror" value="D"/>
                                                <label class="custom-control-label" for="customRadio12_4">{{$questionnaire->que_q12r4}}</label>
                                                @error('ChoixRQ12')
                                                    <span class="text-danger">{{$message}}</span>
                                                @enderror
                                            </div> 
                                            @endif
                                        @endif

                                        @if($questionnaire->que_choixrepq12==2)
                                            @if($questionnaire->que_nbrerepq12>=1)
                                            <div class="custom-control custom-checkbox mb-5">
                                                <input type="checkbox" class="custom-control-input @error('CheckRQ12_1') is-invalid @enderror" id="customCheck12_1" name="CheckRQ12_1" value="A"/>
                                                <label class="custom-control-label" for="customCheck12_1">{{$questionnaire->que_q12r1}}</label>
                                                @error('CheckRQ12_1')
                                                    <span class="text-danger">{{$message}}</span>
                                                @enderror
                                            </div>
                                            @endif
                                            @if($questionnaire->que_nbrerepq12>=2)
                                            <div class="custom-control custom-checkbox mb-5">
                                                <input type="checkbox" class="custom-control-input @error('CheckRQ12_2') is-invalid @enderror" id="customCheck12_2" name="CheckRQ12_2" value="B"/>
                                                <label class="custom-control-label" for="customCheck12_2">{{$questionnaire->que_q12r2}}</label> 
                                                @error('CheckRQ12_2')
                                                    <span class="text-danger">{{$message}}</span>
                                                @enderror       
                                            </div>
                                            @endif
                                            @if($questionnaire->que_nbrerepq12>=3)
                                            <div class="custom-control custom-checkbox mb-5">
                                                <input type="checkbox" class="custom-control-input @error('CheckRQ12_3') is-invalid @enderror" id="customCheck12_3" name="CheckRQ12_3" value="C"/>
                                                <label class="custom-control-label" for="customCheck12_3">{{$questionnaire->que_q12r3}}</label>
                                                @error('CheckRQ12_3')
                                                    <span class="text-danger">{{$message}}</span>
                                                @enderror         
                                            </div>
                                            @endif
                                            @if($questionnaire->que_nbrerepq12>=4)
                                            <div class="custom-control custom-checkbox mb-5">
                                                <input type="checkbox" class="custom-control-input @error('CheckRQ12_4') is-invalid @enderror" id="customCheck12_4" name="CheckRQ12_4" value="D"/>
                                                <label class="custom-control-label" for="customCheck12_4">{{$questionnaire->que_q12r4}}</label> 
                                                @error('CheckRQ12_4')
                                                    <span class="text-danger">{{$message}}</span>
                                                @enderror  
                                            </div> 
                                            @endif
                                        @endif

                                        @if($questionnaire->que_choixrepq12==3)
                                        <div class="form-group row m-2">
                                            <textarea class="form-control @error('txtq12') is-invalid @enderror" id="txtq12" name="txtq12" >{{ old('txtq12')}}</textarea>
                                            @error('txtq12')
                                                <span class="text-danger">{{$message}}</span>
                                            @enderror
                                        </div>
                                        @endif
                                    </div>                                    
                            </div>
                            <div class="progress mt-5" style="height: 25px">
                                <div
                                    class="progress-bar bg-info"
                                    role="progressbar"
                                    style="width: {{round(12/$questionnaire->que_nbreques*100)}}%"
                                    aria-valuenow="6"
                                    aria-valuemin="0"
                                    aria-valuemax="100">
                                    {{round(12/$questionnaire->que_nbreques*100)}}%
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif
                    @if($questionnaire->que_nbreques>=13)
                    <div class="row" id="Q13">
                        <div class="col-sm-12">
                            <div class="mb-0 h-75">

                                <h6 class="text-center">{{$questionnaire->que_q13theme}}</h6>
                                <hr>                          
                                <h5 class="mb-4"><span class="badge bg-secondary w-100">Question 13 / {{$questionnaire->que_nbreques}}</span></h5>
                                <hr>
                                <h6 class="text-sm-left m-2">
                                    <strong>13°) </strong>{{$questionnaire->que_q13}}
                                </h6>
                                    <div class="mt-2">
                                        <input type="hidden" name="choixrepq13" id="choixrepq13" value="{{$questionnaire->que_choixrepq13}}">
                                        <input type="hidden" name="nbrerepq13" id="nbrerepq13" value="{{$questionnaire->que_nbrerepq13}}">

                                        @if($questionnaire->que_choixrepq13==1)
                                            @if($questionnaire->que_nbrerepq13>=1)
                                            <div class="custom-control custom-radio mb-5">
                                                <input type="radio" id="customRadio13_1" name="ChoixRQ13" class="custom-control-input @error('ChoixRQ13') is-invalid @enderror" value="A"/>
                                                <label class="custom-control-label" for="customRadio13_1">{{$questionnaire->que_q13r1}}</label>
                                                @error('ChoixRQ13')
                                                    <span class="text-danger">{{$message}}</span>
                                                @enderror
                                            </div>
                                            @endif
                                            @if($questionnaire->que_nbrerepq13>=2)
                                            <div class="custom-control custom-radio mb-5">    
                                                <input type="radio" id="customRadio13_2" name="ChoixRQ13" class="custom-control-input @error('ChoixRQ13') is-invalid @enderror" value="B"/>
                                                <label class="custom-control-label" for="customRadio13_2">{{$questionnaire->que_q13r2}}</label>
                                                @error('ChoixRQ13')
                                                    <span class="text-danger">{{$message}}</span>
                                                @enderror
                                            </div>
                                            @endif
                                            @if($questionnaire->que_nbrerepq13>=3)
                                            <div class="custom-control custom-radio mb-5">    
                                                <input type="radio" id="customRadio13_3" name="ChoixRQ13" class="custom-control-input @error('ChoixRQ13') is-invalid @enderror" value="C"/>
                                                <label class="custom-control-label" for="customRadio13_3">{{$questionnaire->que_q13r3}}</label>
                                                @error('ChoixRQ13')
                                                    <span class="text-danger">{{$message}}</span>
                                                @enderror
                                            </div>
                                            @endif
                                            @if($questionnaire->que_nbrerepq13>=4)  
                                            <div class="custom-control custom-radio mb-5">    
                                                <input type="radio" id="customRadio13_4" name="ChoixRQ13" class="custom-control-input @error('ChoixRQ13') is-invalid @enderror" value="D"/>
                                                <label class="custom-control-label" for="customRadio13_4">{{$questionnaire->que_q13r4}}</label>
                                                @error('ChoixRQ13')
                                                    <span class="text-danger">{{$message}}</span>
                                                @enderror
                                            </div> 
                                            @endif
                                        @endif

                                        @if($questionnaire->que_choixrepq13==2)
                                            @if($questionnaire->que_nbrerepq13>=1)
                                            <div class="custom-control custom-checkbox mb-5">
                                                <input type="checkbox" class="custom-control-input @error('CheckRQ13_1') is-invalid @enderror" id="customCheck13_1" name="CheckRQ13_1" value="A"/>
                                                <label class="custom-control-label" for="customCheck13_1">{{$questionnaire->que_q13r1}}</label>
                                                @error('CheckRQ13_1')
                                                    <span class="text-danger">{{$message}}</span>
                                                @enderror
                                            </div>
                                            @endif
                                            @if($questionnaire->que_nbrerepq13>=2)
                                            <div class="custom-control custom-checkbox mb-5">
                                                <input type="checkbox" class="custom-control-input @error('CheckRQ13_2') is-invalid @enderror" id="customCheck13_2" name="CheckRQ13_2" value="B"/>
                                                <label class="custom-control-label" for="customCheck13_2">{{$questionnaire->que_q13r2}}</label> 
                                                @error('CheckRQ13_2')
                                                    <span class="text-danger">{{$message}}</span>
                                                @enderror       
                                            </div>
                                            @endif
                                            @if($questionnaire->que_nbrerepq13>=3)
                                            <div class="custom-control custom-checkbox mb-5">
                                                <input type="checkbox" class="custom-control-input @error('CheckRQ13_3') is-invalid @enderror" id="customCheck13_3" name="CheckRQ13_3" value="C"/>
                                                <label class="custom-control-label" for="customCheck13_3">{{$questionnaire->que_q13r3}}</label>
                                                @error('CheckRQ13_3')
                                                    <span class="text-danger">{{$message}}</span>
                                                @enderror         
                                            </div>
                                            @endif
                                            @if($questionnaire->que_nbrerepq13>=4)
                                            <div class="custom-control custom-checkbox mb-5">
                                                <input type="checkbox" class="custom-control-input @error('CheckRQ13_4') is-invalid @enderror" id="customCheck13_4" name="CheckRQ13_4" value="D"/>
                                                <label class="custom-control-label" for="customCheck13_4">{{$questionnaire->que_q13r4}}</label> 
                                                @error('CheckRQ13_4')
                                                    <span class="text-danger">{{$message}}</span>
                                                @enderror  
                                            </div> 
                                            @endif
                                        @endif

                                        @if($questionnaire->que_choixrepq13==3)
                                        <div class="form-group row m-2">
                                            <textarea class="form-control @error('txtq13') is-invalid @enderror" id="txtq13" name="txtq13" >{{ old('txtq13')}}</textarea>
                                            @error('txtq13')
                                                <span class="text-danger">{{$message}}</span>
                                            @enderror
                                        </div>
                                        @endif
                                    </div>                                    
                            </div>
                            <div class="progress mt-5" style="height: 25px">
                                <div
                                    class="progress-bar bg-info"
                                    role="progressbar"
                                    style="width: {{round(13/$questionnaire->que_nbreques*100)}}%"
                                    aria-valuenow="6"
                                    aria-valuemin="0"
                                    aria-valuemax="100">
                                    {{round(13/$questionnaire->que_nbreques*100)}}%
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif
                    @if($questionnaire->que_nbreques>=14)
                    <div class="row" id="Q14">
                        <div class="col-sm-12">
                            <div class="mb-0 h-75">

                                <h6 class="text-center">{{$questionnaire->que_q14theme}}</h6>
                                <hr>                          
                                <h5 class="mb-4"><span class="badge bg-secondary w-100">Question 14 / {{$questionnaire->que_nbreques}}</span></h5>
                                <hr>
                                <h6 class="text-sm-left m-2">
                                    <strong>14°) </strong>{{$questionnaire->que_q14}}
                                </h6>
                                    <div class="mt-2">
                                        <input type="hidden" name="choixrepq14" id="choixrepq14" value="{{$questionnaire->que_choixrepq14}}">
                                        <input type="hidden" name="nbrerepq14" id="nbrerepq14" value="{{$questionnaire->que_nbrerepq14}}">

                                        @if($questionnaire->que_choixrepq14==1)
                                            @if($questionnaire->que_nbrerepq14>=1)
                                            <div class="custom-control custom-radio mb-5">
                                                <input type="radio" id="customRadio14_1" name="ChoixRQ14" class="custom-control-input @error('ChoixRQ14') is-invalid @enderror" value="A"/>
                                                <label class="custom-control-label" for="customRadio14_1">{{$questionnaire->que_q14r1}}</label>
                                                @error('ChoixRQ14')
                                                    <span class="text-danger">{{$message}}</span>
                                                @enderror
                                            </div>
                                            @endif
                                            @if($questionnaire->que_nbrerepq14>=2)
                                            <div class="custom-control custom-radio mb-5">    
                                                <input type="radio" id="customRadio14_2" name="ChoixRQ14" class="custom-control-input @error('ChoixRQ14') is-invalid @enderror" value="B"/>
                                                <label class="custom-control-label" for="customRadio14_2">{{$questionnaire->que_q14r2}}</label>
                                                @error('ChoixRQ14')
                                                    <span class="text-danger">{{$message}}</span>
                                                @enderror
                                            </div>
                                            @endif
                                            @if($questionnaire->que_nbrerepq14>=3)
                                            <div class="custom-control custom-radio mb-5">    
                                                <input type="radio" id="customRadio14_3" name="ChoixRQ14" class="custom-control-input @error('ChoixRQ14') is-invalid @enderror" value="C"/>
                                                <label class="custom-control-label" for="customRadio14_3">{{$questionnaire->que_q14r3}}</label>
                                                @error('ChoixRQ14')
                                                    <span class="text-danger">{{$message}}</span>
                                                @enderror
                                            </div>
                                            @endif
                                            @if($questionnaire->que_nbrerepq14>=4)  
                                            <div class="custom-control custom-radio mb-5">    
                                                <input type="radio" id="customRadio14_4" name="ChoixRQ14" class="custom-control-input @error('ChoixRQ14') is-invalid @enderror" value="D"/>
                                                <label class="custom-control-label" for="customRadio14_4">{{$questionnaire->que_q14r4}}</label>
                                                @error('ChoixRQ14')
                                                    <span class="text-danger">{{$message}}</span>
                                                @enderror
                                            </div> 
                                            @endif
                                        @endif

                                        @if($questionnaire->que_choixrepq14==2)
                                            @if($questionnaire->que_nbrerepq14>=1)
                                            <div class="custom-control custom-checkbox mb-5">
                                                <input type="checkbox" class="custom-control-input @error('CheckRQ14_1') is-invalid @enderror" id="customCheck14_1" name="CheckRQ14_1" value="A"/>
                                                <label class="custom-control-label" for="customCheck14_1">{{$questionnaire->que_q14r1}}</label>
                                                @error('CheckRQ14_1')
                                                    <span class="text-danger">{{$message}}</span>
                                                @enderror
                                            </div>
                                            @endif
                                            @if($questionnaire->que_nbrerepq14>=2)
                                            <div class="custom-control custom-checkbox mb-5">
                                                <input type="checkbox" class="custom-control-input @error('CheckRQ14_2') is-invalid @enderror" id="customCheck14_2" name="CheckRQ14_2" value="B"/>
                                                <label class="custom-control-label" for="customCheck14_2">{{$questionnaire->que_q14r2}}</label> 
                                                @error('CheckRQ14_2')
                                                    <span class="text-danger">{{$message}}</span>
                                                @enderror       
                                            </div>
                                            @endif
                                            @if($questionnaire->que_nbrerepq14>=3)
                                            <div class="custom-control custom-checkbox mb-5">
                                                <input type="checkbox" class="custom-control-input @error('CheckRQ14_3') is-invalid @enderror" id="customCheck14_3" name="CheckRQ14_3" value="C"/>
                                                <label class="custom-control-label" for="customCheck14_3">{{$questionnaire->que_q14r3}}</label>
                                                @error('CheckRQ14_3')
                                                    <span class="text-danger">{{$message}}</span>
                                                @enderror         
                                            </div>
                                            @endif
                                            @if($questionnaire->que_nbrerepq14>=4)
                                            <div class="custom-control custom-checkbox mb-5">
                                                <input type="checkbox" class="custom-control-input @error('CheckRQ14_4') is-invalid @enderror" id="customCheck14_4" name="CheckRQ14_4" value="D"/>
                                                <label class="custom-control-label" for="customCheck14_4">{{$questionnaire->que_q14r4}}</label> 
                                                @error('CheckRQ14_4')
                                                    <span class="text-danger">{{$message}}</span>
                                                @enderror  
                                            </div> 
                                            @endif
                                        @endif

                                        @if($questionnaire->que_choixrepq14==3)
                                        <div class="form-group row m-2">
                                            <textarea class="form-control @error('txtq14') is-invalid @enderror" id="txtq14" name="txtq14" >{{ old('txtq14')}}</textarea>
                                            @error('txtq14')
                                                <span class="text-danger">{{$message}}</span>
                                            @enderror
                                        </div>
                                        @endif
                                    </div>                                    
                            </div>
                            <div class="progress mt-5" style="height: 25px">
                                <div
                                    class="progress-bar bg-info"
                                    role="progressbar"
                                    style="width: {{round(14/$questionnaire->que_nbreques*100)}}%"
                                    aria-valuenow="6"
                                    aria-valuemin="0"
                                    aria-valuemax="100">
                                    {{round(14/$questionnaire->que_nbreques*100)}}%
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif
                    @if($questionnaire->que_nbreques>=15)
                    <div class="row" id="Q15">
                        <div class="col-sm-12">
                            <div class="mb-0 h-75">

                                <h6 class="text-center">{{$questionnaire->que_q15theme}}</h6>
                                <hr>                          
                                <h5 class="mb-4"><span class="badge bg-secondary w-100">Question 15 / {{$questionnaire->que_nbreques}}</span></h5>
                                <hr>
                                <h6 class="text-sm-left m-2">
                                    <strong>15°) </strong>{{$questionnaire->que_q15}}
                                </h6>
                                    <div class="mt-2">
                                        <input type="hidden" name="choixrepq15" id="choixrepq15" value="{{$questionnaire->que_choixrepq15}}">
                                        <input type="hidden" name="nbrerepq15" id="nbrerepq15" value="{{$questionnaire->que_nbrerepq15}}">

                                        @if($questionnaire->que_choixrepq15==1)
                                            @if($questionnaire->que_nbrerepq15>=1)
                                            <div class="custom-control custom-radio mb-5">
                                                <input type="radio" id="customRadio15_1" name="ChoixRQ15" class="custom-control-input @error('ChoixRQ15') is-invalid @enderror" value="A"/>
                                                <label class="custom-control-label" for="customRadio15_1">{{$questionnaire->que_q15r1}}</label>
                                                @error('ChoixRQ15')
                                                    <span class="text-danger">{{$message}}</span>
                                                @enderror
                                            </div>
                                            @endif
                                            @if($questionnaire->que_nbrerepq15>=2)
                                            <div class="custom-control custom-radio mb-5">    
                                                <input type="radio" id="customRadio15_2" name="ChoixRQ15" class="custom-control-input @error('ChoixRQ15') is-invalid @enderror" value="B"/>
                                                <label class="custom-control-label" for="customRadio15_2">{{$questionnaire->que_q15r2}}</label>
                                                @error('ChoixRQ15')
                                                    <span class="text-danger">{{$message}}</span>
                                                @enderror
                                            </div>
                                            @endif
                                            @if($questionnaire->que_nbrerepq15>=3)
                                            <div class="custom-control custom-radio mb-5">    
                                                <input type="radio" id="customRadio15_3" name="ChoixRQ15" class="custom-control-input @error('ChoixRQ15') is-invalid @enderror" value="C"/>
                                                <label class="custom-control-label" for="customRadio15_3">{{$questionnaire->que_q15r3}}</label>
                                                @error('ChoixRQ15')
                                                    <span class="text-danger">{{$message}}</span>
                                                @enderror
                                            </div>
                                            @endif
                                            @if($questionnaire->que_nbrerepq15>=4)  
                                            <div class="custom-control custom-radio mb-5">    
                                                <input type="radio" id="customRadio15_4" name="ChoixRQ15" class="custom-control-input @error('ChoixRQ15') is-invalid @enderror" value="D"/>
                                                <label class="custom-control-label" for="customRadio15_4">{{$questionnaire->que_q15r4}}</label>
                                                @error('ChoixRQ15')
                                                    <span class="text-danger">{{$message}}</span>
                                                @enderror
                                            </div> 
                                            @endif
                                        @endif

                                        @if($questionnaire->que_choixrepq15==2)
                                            @if($questionnaire->que_nbrerepq15>=1)
                                            <div class="custom-control custom-checkbox mb-5">
                                                <input type="checkbox" class="custom-control-input @error('CheckRQ15_1') is-invalid @enderror" id="customCheck15_1" name="CheckRQ15_1" value="A"/>
                                                <label class="custom-control-label" for="customCheck15_1">{{$questionnaire->que_q15r1}}</label>
                                                @error('CheckRQ15_1')
                                                    <span class="text-danger">{{$message}}</span>
                                                @enderror
                                            </div>
                                            @endif
                                            @if($questionnaire->que_nbrerepq15>=2)
                                            <div class="custom-control custom-checkbox mb-5">
                                                <input type="checkbox" class="custom-control-input @error('CheckRQ15_2') is-invalid @enderror" id="customCheck15_2" name="CheckRQ15_2" value="B"/>
                                                <label class="custom-control-label" for="customCheck15_2">{{$questionnaire->que_q15r2}}</label> 
                                                @error('CheckRQ15_2')
                                                    <span class="text-danger">{{$message}}</span>
                                                @enderror       
                                            </div>
                                            @endif
                                            @if($questionnaire->que_nbrerepq15>=3)
                                            <div class="custom-control custom-checkbox mb-5">
                                                <input type="checkbox" class="custom-control-input @error('CheckRQ15_3') is-invalid @enderror" id="customCheck15_3" name="CheckRQ15_3" value="C"/>
                                                <label class="custom-control-label" for="customCheck15_3">{{$questionnaire->que_q15r3}}</label>
                                                @error('CheckRQ15_3')
                                                    <span class="text-danger">{{$message}}</span>
                                                @enderror         
                                            </div>
                                            @endif
                                            @if($questionnaire->que_nbrerepq15>=4)
                                            <div class="custom-control custom-checkbox mb-5">
                                                <input type="checkbox" class="custom-control-input @error('CheckRQ15_4') is-invalid @enderror" id="customCheck15_4" name="CheckRQ15_4" value="D"/>
                                                <label class="custom-control-label" for="customCheck15_4">{{$questionnaire->que_q15r4}}</label> 
                                                @error('CheckRQ15_4')
                                                    <span class="text-danger">{{$message}}</span>
                                                @enderror  
                                            </div> 
                                            @endif
                                        @endif

                                        @if($questionnaire->que_choixrepq15==3)
                                        <div class="form-group row m-2">
                                            <textarea class="form-control @error('txtq15') is-invalid @enderror" id="txtq15" name="txtq15" >{{ old('txtq15')}}</textarea>
                                            @error('txtq15')
                                                <span class="text-danger">{{$message}}</span>
                                            @enderror
                                        </div>
                                        @endif
                                    </div>                                    
                            </div>
                            <div class="progress mt-5" style="height: 25px">
                                <div
                                    class="progress-bar bg-info"
                                    role="progressbar"
                                    style="width: {{round(15/$questionnaire->que_nbreques*100)}}%"
                                    aria-valuenow="6"
                                    aria-valuemin="0"
                                    aria-valuemax="100">
                                    {{round(15/$questionnaire->que_nbreques*100)}}%
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif
                    @if($questionnaire->que_nbreques>=16)
                    <div class="row" id="Q16">
                        <div class="col-sm-12">
                            <div class="mb-0 h-75">

                                <h6 class="text-center">{{$questionnaire->que_q16theme}}</h6>
                                <hr>                          
                                <h5 class="mb-4"><span class="badge bg-secondary w-100">Question 16 / {{$questionnaire->que_nbreques}}</span></h5>
                                <hr>
                                <h6 class="text-sm-left m-2">
                                    <strong>16°) </strong>{{$questionnaire->que_q16}}
                                </h6>
                                    <div class="mt-2">
                                        <input type="hidden" name="choixrepq16" id="choixrepq16" value="{{$questionnaire->que_choixrepq16}}">
                                        <input type="hidden" name="nbrerepq16" id="nbrerepq16" value="{{$questionnaire->que_nbrerepq16}}">

                                        @if($questionnaire->que_choixrepq16==1)
                                            @if($questionnaire->que_nbrerepq16>=1)
                                            <div class="custom-control custom-radio mb-5">
                                                <input type="radio" id="customRadio16_1" name="ChoixRQ16" class="custom-control-input @error('ChoixRQ16') is-invalid @enderror" value="A"/>
                                                <label class="custom-control-label" for="customRadio16_1">{{$questionnaire->que_q16r1}}</label>
                                                @error('ChoixRQ16')
                                                    <span class="text-danger">{{$message}}</span>
                                                @enderror
                                            </div>
                                            @endif
                                            @if($questionnaire->que_nbrerepq16>=2)
                                            <div class="custom-control custom-radio mb-5">    
                                                <input type="radio" id="customRadio16_2" name="ChoixRQ16" class="custom-control-input @error('ChoixRQ16') is-invalid @enderror" value="B"/>
                                                <label class="custom-control-label" for="customRadio16_2">{{$questionnaire->que_q16r2}}</label>
                                                @error('ChoixRQ16')
                                                    <span class="text-danger">{{$message}}</span>
                                                @enderror
                                            </div>
                                            @endif
                                            @if($questionnaire->que_nbrerepq16>=3)
                                            <div class="custom-control custom-radio mb-5">    
                                                <input type="radio" id="customRadio16_3" name="ChoixRQ16" class="custom-control-input @error('ChoixRQ16') is-invalid @enderror" value="C"/>
                                                <label class="custom-control-label" for="customRadio16_3">{{$questionnaire->que_q16r3}}</label>
                                                @error('ChoixRQ16')
                                                    <span class="text-danger">{{$message}}</span>
                                                @enderror
                                            </div>
                                            @endif
                                            @if($questionnaire->que_nbrerepq16>=4)  
                                            <div class="custom-control custom-radio mb-5">    
                                                <input type="radio" id="customRadio16_4" name="ChoixRQ16" class="custom-control-input @error('ChoixRQ16') is-invalid @enderror" value="D"/>
                                                <label class="custom-control-label" for="customRadio16_4">{{$questionnaire->que_q16r4}}</label>
                                                @error('ChoixRQ16')
                                                    <span class="text-danger">{{$message}}</span>
                                                @enderror
                                            </div> 
                                            @endif
                                        @endif

                                        @if($questionnaire->que_choixrepq16==2)
                                            @if($questionnaire->que_nbrerepq16>=1)
                                            <div class="custom-control custom-checkbox mb-5">
                                                <input type="checkbox" class="custom-control-input @error('CheckRQ16_1') is-invalid @enderror" id="customCheck16_1" name="CheckRQ16_1" value="A"/>
                                                <label class="custom-control-label" for="customCheck16_1">{{$questionnaire->que_q16r1}}</label>
                                                @error('CheckRQ16_1')
                                                    <span class="text-danger">{{$message}}</span>
                                                @enderror
                                            </div>
                                            @endif
                                            @if($questionnaire->que_nbrerepq16>=2)
                                            <div class="custom-control custom-checkbox mb-5">
                                                <input type="checkbox" class="custom-control-input @error('CheckRQ16_2') is-invalid @enderror" id="customCheck16_2" name="CheckRQ16_2" value="B"/>
                                                <label class="custom-control-label" for="customCheck16_2">{{$questionnaire->que_q16r2}}</label> 
                                                @error('CheckRQ16_2')
                                                    <span class="text-danger">{{$message}}</span>
                                                @enderror       
                                            </div>
                                            @endif
                                            @if($questionnaire->que_nbrerepq16>=3)
                                            <div class="custom-control custom-checkbox mb-5">
                                                <input type="checkbox" class="custom-control-input @error('CheckRQ16_3') is-invalid @enderror" id="customCheck16_3" name="CheckRQ16_3" value="C"/>
                                                <label class="custom-control-label" for="customCheck16_3">{{$questionnaire->que_q16r3}}</label>
                                                @error('CheckRQ16_3')
                                                    <span class="text-danger">{{$message}}</span>
                                                @enderror         
                                            </div>
                                            @endif
                                            @if($questionnaire->que_nbrerepq16>=4)
                                            <div class="custom-control custom-checkbox mb-5">
                                                <input type="checkbox" class="custom-control-input @error('CheckRQ16_4') is-invalid @enderror" id="customCheck16_4" name="CheckRQ16_4" value="D"/>
                                                <label class="custom-control-label" for="customCheck16_4">{{$questionnaire->que_q16r4}}</label> 
                                                @error('CheckRQ16_4')
                                                    <span class="text-danger">{{$message}}</span>
                                                @enderror  
                                            </div> 
                                            @endif
                                        @endif

                                        @if($questionnaire->que_choixrepq16==3)
                                        <div class="form-group row m-2">
                                            <textarea class="form-control @error('txtq16') is-invalid @enderror" id="txtq16" name="txtq16" >{{ old('txtq16')}}</textarea>
                                            @error('txtq16')
                                                <span class="text-danger">{{$message}}</span>
                                            @enderror
                                        </div>
                                        @endif
                                    </div>                                    
                            </div>
                            <div class="progress mt-5" style="height: 25px">
                                <div
                                    class="progress-bar bg-info"
                                    role="progressbar"
                                    style="width: {{round(16/$questionnaire->que_nbreques*100)}}%"
                                    aria-valuenow="6"
                                    aria-valuemin="0"
                                    aria-valuemax="100">
                                    {{round(16/$questionnaire->que_nbreques*100)}}%
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif
                    @if($questionnaire->que_nbreques>=17)
                    <div class="row" id="Q17">
                        <div class="col-sm-12">
                            <div class="mb-0 h-75">

                                <h6 class="text-center">{{$questionnaire->que_q17theme}}</h6>
                                <hr>                          
                                <h5 class="mb-4"><span class="badge bg-secondary w-100">Question 17 / {{$questionnaire->que_nbreques}}</span></h5>
                                <hr>
                                <h6 class="text-sm-left m-2">
                                    <strong>17°) </strong>{{$questionnaire->que_q17}}
                                </h6>
                                    <div class="mt-2">
                                        <input type="hidden" name="choixrepq17" id="choixrepq17" value="{{$questionnaire->que_choixrepq17}}">
                                        <input type="hidden" name="nbrerepq17" id="nbrerepq17" value="{{$questionnaire->que_nbrerepq17}}">

                                        @if($questionnaire->que_choixrepq17==1)
                                            @if($questionnaire->que_nbrerepq17>=1)
                                            <div class="custom-control custom-radio mb-5">
                                                <input type="radio" id="customRadio17_1" name="ChoixRQ17" class="custom-control-input @error('ChoixRQ17') is-invalid @enderror" value="A"/>
                                                <label class="custom-control-label" for="customRadio17_1">{{$questionnaire->que_q17r1}}</label>
                                                @error('ChoixRQ17')
                                                    <span class="text-danger">{{$message}}</span>
                                                @enderror
                                            </div>
                                            @endif
                                            @if($questionnaire->que_nbrerepq17>=2)
                                            <div class="custom-control custom-radio mb-5">    
                                                <input type="radio" id="customRadio17_2" name="ChoixRQ17" class="custom-control-input @error('ChoixRQ17') is-invalid @enderror" value="B"/>
                                                <label class="custom-control-label" for="customRadio17_2">{{$questionnaire->que_q17r2}}</label>
                                                @error('ChoixRQ17')
                                                    <span class="text-danger">{{$message}}</span>
                                                @enderror
                                            </div>
                                            @endif
                                            @if($questionnaire->que_nbrerepq17>=3)
                                            <div class="custom-control custom-radio mb-5">    
                                                <input type="radio" id="customRadio17_3" name="ChoixRQ17" class="custom-control-input @error('ChoixRQ17') is-invalid @enderror" value="C"/>
                                                <label class="custom-control-label" for="customRadio17_3">{{$questionnaire->que_q17r3}}</label>
                                                @error('ChoixRQ17')
                                                    <span class="text-danger">{{$message}}</span>
                                                @enderror
                                            </div>
                                            @endif
                                            @if($questionnaire->que_nbrerepq17>=4)  
                                            <div class="custom-control custom-radio mb-5">    
                                                <input type="radio" id="customRadio17_4" name="ChoixRQ17" class="custom-control-input @error('ChoixRQ17') is-invalid @enderror" value="D"/>
                                                <label class="custom-control-label" for="customRadio17_4">{{$questionnaire->que_q17r4}}</label>
                                                @error('ChoixRQ17')
                                                    <span class="text-danger">{{$message}}</span>
                                                @enderror
                                            </div> 
                                            @endif
                                        @endif

                                        @if($questionnaire->que_choixrepq17==2)
                                            @if($questionnaire->que_nbrerepq17>=1)
                                            <div class="custom-control custom-checkbox mb-5">
                                                <input type="checkbox" class="custom-control-input @error('CheckRQ17_1') is-invalid @enderror" id="customCheck17_1" name="CheckRQ17_1" value="A"/>
                                                <label class="custom-control-label" for="customCheck17_1">{{$questionnaire->que_q17r1}}</label>
                                                @error('CheckRQ17_1')
                                                    <span class="text-danger">{{$message}}</span>
                                                @enderror
                                            </div>
                                            @endif
                                            @if($questionnaire->que_nbrerepq17>=2)
                                            <div class="custom-control custom-checkbox mb-5">
                                                <input type="checkbox" class="custom-control-input @error('CheckRQ17_2') is-invalid @enderror" id="customCheck17_2" name="CheckRQ17_2" value="B"/>
                                                <label class="custom-control-label" for="customCheck17_2">{{$questionnaire->que_q17r2}}</label> 
                                                @error('CheckRQ17_2')
                                                    <span class="text-danger">{{$message}}</span>
                                                @enderror       
                                            </div>
                                            @endif
                                            @if($questionnaire->que_nbrerepq17>=3)
                                            <div class="custom-control custom-checkbox mb-5">
                                                <input type="checkbox" class="custom-control-input @error('CheckRQ17_3') is-invalid @enderror" id="customCheck17_3" name="CheckRQ17_3" value="C"/>
                                                <label class="custom-control-label" for="customCheck17_3">{{$questionnaire->que_q17r3}}</label>
                                                @error('CheckRQ17_3')
                                                    <span class="text-danger">{{$message}}</span>
                                                @enderror         
                                            </div>
                                            @endif
                                            @if($questionnaire->que_nbrerepq17>=4)
                                            <div class="custom-control custom-checkbox mb-5">
                                                <input type="checkbox" class="custom-control-input @error('CheckRQ17_4') is-invalid @enderror" id="customCheck17_4" name="CheckRQ17_4" value="D"/>
                                                <label class="custom-control-label" for="customCheck17_4">{{$questionnaire->que_q17r4}}</label> 
                                                @error('CheckRQ17_4')
                                                    <span class="text-danger">{{$message}}</span>
                                                @enderror  
                                            </div> 
                                            @endif
                                        @endif

                                        @if($questionnaire->que_choixrepq17==3)
                                        <div class="form-group row m-2">
                                            <textarea class="form-control @error('txtq17') is-invalid @enderror" id="txtq17" name="txtq17" >{{ old('txtq17')}}</textarea>
                                            @error('txtq17')
                                                <span class="text-danger">{{$message}}</span>
                                            @enderror
                                        </div>
                                        @endif
                                    </div>                                    
                            </div>
                            <div class="progress mt-5" style="height: 25px">
                                <div
                                    class="progress-bar bg-info"
                                    role="progressbar"
                                    style="width: {{round(17/$questionnaire->que_nbreques*100)}}%"
                                    aria-valuenow="6"
                                    aria-valuemin="0"
                                    aria-valuemax="100">
                                    {{round(17/$questionnaire->que_nbreques*100)}}%
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif
                    @if($questionnaire->que_nbreques>=18)
                    <div class="row" id="Q18">
                        <div class="col-sm-12">
                            <div class="mb-0 h-75">

                                <h6 class="text-center">{{$questionnaire->que_q18theme}}</h6>
                                <hr>                          
                                <h5 class="mb-4"><span class="badge bg-secondary w-100">Question 18 / {{$questionnaire->que_nbreques}}</span></h5>
                                <hr>
                                <h6 class="text-sm-left m-2">
                                    <strong>18°) </strong>{{$questionnaire->que_q18}}
                                </h6>
                                    <div class="mt-2">
                                        <input type="hidden" name="choixrepq18" id="choixrepq18" value="{{$questionnaire->que_choixrepq18}}">
                                        <input type="hidden" name="nbrerepq18" id="nbrerepq18" value="{{$questionnaire->que_nbrerepq18}}">

                                        @if($questionnaire->que_choixrepq18==1)
                                            @if($questionnaire->que_nbrerepq18>=1)
                                            <div class="custom-control custom-radio mb-5">
                                                <input type="radio" id="customRadio18_1" name="ChoixRQ18" class="custom-control-input @error('ChoixRQ18') is-invalid @enderror" value="A"/>
                                                <label class="custom-control-label" for="customRadio18_1">{{$questionnaire->que_q18r1}}</label>
                                                @error('ChoixRQ18')
                                                    <span class="text-danger">{{$message}}</span>
                                                @enderror
                                            </div>
                                            @endif
                                            @if($questionnaire->que_nbrerepq18>=2)
                                            <div class="custom-control custom-radio mb-5">    
                                                <input type="radio" id="customRadio18_2" name="ChoixRQ18" class="custom-control-input @error('ChoixRQ18') is-invalid @enderror" value="B"/>
                                                <label class="custom-control-label" for="customRadio18_2">{{$questionnaire->que_q18r2}}</label>
                                                @error('ChoixRQ18')
                                                    <span class="text-danger">{{$message}}</span>
                                                @enderror
                                            </div>
                                            @endif
                                            @if($questionnaire->que_nbrerepq18>=3)
                                            <div class="custom-control custom-radio mb-5">    
                                                <input type="radio" id="customRadio18_3" name="ChoixRQ18" class="custom-control-input @error('ChoixRQ18') is-invalid @enderror" value="C"/>
                                                <label class="custom-control-label" for="customRadio18_3">{{$questionnaire->que_q18r3}}</label>
                                                @error('ChoixRQ18')
                                                    <span class="text-danger">{{$message}}</span>
                                                @enderror
                                            </div>
                                            @endif
                                            @if($questionnaire->que_nbrerepq18>=4)  
                                            <div class="custom-control custom-radio mb-5">    
                                                <input type="radio" id="customRadio18_4" name="ChoixRQ18" class="custom-control-input @error('ChoixRQ18') is-invalid @enderror" value="D"/>
                                                <label class="custom-control-label" for="customRadio18_4">{{$questionnaire->que_q18r4}}</label>
                                                @error('ChoixRQ18')
                                                    <span class="text-danger">{{$message}}</span>
                                                @enderror
                                            </div> 
                                            @endif
                                        @endif

                                        @if($questionnaire->que_choixrepq18==2)
                                            @if($questionnaire->que_nbrerepq18>=1)
                                            <div class="custom-control custom-checkbox mb-5">
                                                <input type="checkbox" class="custom-control-input @error('CheckRQ18_1') is-invalid @enderror" id="customCheck18_1" name="CheckRQ18_1" value="A"/>
                                                <label class="custom-control-label" for="customCheck18_1">{{$questionnaire->que_q18r1}}</label>
                                                @error('CheckRQ18_1')
                                                    <span class="text-danger">{{$message}}</span>
                                                @enderror
                                            </div>
                                            @endif
                                            @if($questionnaire->que_nbrerepq18>=2)
                                            <div class="custom-control custom-checkbox mb-5">
                                                <input type="checkbox" class="custom-control-input @error('CheckRQ18_2') is-invalid @enderror" id="customCheck18_2" name="CheckRQ18_2" value="B"/>
                                                <label class="custom-control-label" for="customCheck18_2">{{$questionnaire->que_q18r2}}</label> 
                                                @error('CheckRQ18_2')
                                                    <span class="text-danger">{{$message}}</span>
                                                @enderror       
                                            </div>
                                            @endif
                                            @if($questionnaire->que_nbrerepq18>=3)
                                            <div class="custom-control custom-checkbox mb-5">
                                                <input type="checkbox" class="custom-control-input @error('CheckRQ18_3') is-invalid @enderror" id="customCheck18_3" name="CheckRQ18_3" value="C"/>
                                                <label class="custom-control-label" for="customCheck18_3">{{$questionnaire->que_q18r3}}</label>
                                                @error('CheckRQ18_3')
                                                    <span class="text-danger">{{$message}}</span>
                                                @enderror         
                                            </div>
                                            @endif
                                            @if($questionnaire->que_nbrerepq18>=4)
                                            <div class="custom-control custom-checkbox mb-5">
                                                <input type="checkbox" class="custom-control-input @error('CheckRQ18_4') is-invalid @enderror" id="customCheck18_4" name="CheckRQ18_4" value="D"/>
                                                <label class="custom-control-label" for="customCheck18_4">{{$questionnaire->que_q18r4}}</label> 
                                                @error('CheckRQ18_4')
                                                    <span class="text-danger">{{$message}}</span>
                                                @enderror  
                                            </div> 
                                            @endif
                                        @endif

                                        @if($questionnaire->que_choixrepq18==3)
                                        <div class="form-group row m-2">
                                            <textarea class="form-control @error('txtq18') is-invalid @enderror" id="txtq18" name="txtq18" >{{ old('txtq18')}}</textarea>
                                            @error('txtq18')
                                                <span class="text-danger">{{$message}}</span>
                                            @enderror
                                        </div>
                                        @endif
                                    </div>                                    
                            </div>
                            <div class="progress mt-5" style="height: 25px">
                                <div
                                    class="progress-bar bg-info"
                                    role="progressbar"
                                    style="width: {{round(18/$questionnaire->que_nbreques*100)}}%"
                                    aria-valuenow="6"
                                    aria-valuemin="0"
                                    aria-valuemax="100">
                                    {{round(18/$questionnaire->que_nbreques*100)}}%
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif 
                    @if($questionnaire->que_nbreques>=19)
                    <div class="row" id="Q19">
                        <div class="col-sm-12">
                            <div class="mb-0 h-75">

                                <h6 class="text-center">{{$questionnaire->que_q19theme}}</h6>
                                <hr>                          
                                <h5 class="mb-4"><span class="badge bg-secondary w-100">Question 19 / {{$questionnaire->que_nbreques}}</span></h5>
                                <hr>
                                <h6 class="text-sm-left m-2">
                                    <strong>19°) </strong>{{$questionnaire->que_q19}}
                                </h6>
                                    <div class="mt-2">
                                        <input type="hidden" name="choixrepq19" id="choixrepq19" value="{{$questionnaire->que_choixrepq19}}">
                                        <input type="hidden" name="nbrerepq19" id="nbrerepq19" value="{{$questionnaire->que_nbrerepq19}}">

                                        @if($questionnaire->que_choixrepq19==1)
                                            @if($questionnaire->que_nbrerepq19>=1)
                                            <div class="custom-control custom-radio mb-5">
                                                <input type="radio" id="customRadio19_1" name="ChoixRQ19" class="custom-control-input @error('ChoixRQ19') is-invalid @enderror" value="A"/>
                                                <label class="custom-control-label" for="customRadio19_1">{{$questionnaire->que_q19r1}}</label>
                                                @error('ChoixRQ19')
                                                    <span class="text-danger">{{$message}}</span>
                                                @enderror
                                            </div>
                                            @endif
                                            @if($questionnaire->que_nbrerepq19>=2)
                                            <div class="custom-control custom-radio mb-5">    
                                                <input type="radio" id="customRadio19_2" name="ChoixRQ19" class="custom-control-input @error('ChoixRQ19') is-invalid @enderror" value="B"/>
                                                <label class="custom-control-label" for="customRadio19_2">{{$questionnaire->que_q19r2}}</label>
                                                @error('ChoixRQ19')
                                                    <span class="text-danger">{{$message}}</span>
                                                @enderror
                                            </div>
                                            @endif
                                            @if($questionnaire->que_nbrerepq19>=3)
                                            <div class="custom-control custom-radio mb-5">    
                                                <input type="radio" id="customRadio19_3" name="ChoixRQ19" class="custom-control-input @error('ChoixRQ19') is-invalid @enderror" value="C"/>
                                                <label class="custom-control-label" for="customRadio19_3">{{$questionnaire->que_q19r3}}</label>
                                                @error('ChoixRQ19')
                                                    <span class="text-danger">{{$message}}</span>
                                                @enderror
                                            </div>
                                            @endif
                                            @if($questionnaire->que_nbrerepq19>=4)  
                                            <div class="custom-control custom-radio mb-5">    
                                                <input type="radio" id="customRadio19_4" name="ChoixRQ19" class="custom-control-input @error('ChoixRQ19') is-invalid @enderror" value="D"/>
                                                <label class="custom-control-label" for="customRadio19_4">{{$questionnaire->que_q19r4}}</label>
                                                @error('ChoixRQ19')
                                                    <span class="text-danger">{{$message}}</span>
                                                @enderror
                                            </div> 
                                            @endif
                                        @endif

                                        @if($questionnaire->que_choixrepq19==2)
                                            @if($questionnaire->que_nbrerepq19>=1)
                                            <div class="custom-control custom-checkbox mb-5">
                                                <input type="checkbox" class="custom-control-input @error('CheckRQ19_1') is-invalid @enderror" id="customCheck19_1" name="CheckRQ19_1" value="A"/>
                                                <label class="custom-control-label" for="customCheck19_1">{{$questionnaire->que_q19r1}}</label>
                                                @error('CheckRQ19_1')
                                                    <span class="text-danger">{{$message}}</span>
                                                @enderror
                                            </div>
                                            @endif
                                            @if($questionnaire->que_nbrerepq19>=2)
                                            <div class="custom-control custom-checkbox mb-5">
                                                <input type="checkbox" class="custom-control-input @error('CheckRQ19_2') is-invalid @enderror" id="customCheck19_2" name="CheckRQ19_2" value="B"/>
                                                <label class="custom-control-label" for="customCheck19_2">{{$questionnaire->que_q19r2}}</label> 
                                                @error('CheckRQ19_2')
                                                    <span class="text-danger">{{$message}}</span>
                                                @enderror       
                                            </div>
                                            @endif
                                            @if($questionnaire->que_nbrerepq19>=3)
                                            <div class="custom-control custom-checkbox mb-5">
                                                <input type="checkbox" class="custom-control-input @error('CheckRQ19_3') is-invalid @enderror" id="customCheck19_3" name="CheckRQ19_3" value="C"/>
                                                <label class="custom-control-label" for="customCheck19_3">{{$questionnaire->que_q19r3}}</label>
                                                @error('CheckRQ19_3')
                                                    <span class="text-danger">{{$message}}</span>
                                                @enderror         
                                            </div>
                                            @endif
                                            @if($questionnaire->que_nbrerepq19>=4)
                                            <div class="custom-control custom-checkbox mb-5">
                                                <input type="checkbox" class="custom-control-input @error('CheckRQ19_4') is-invalid @enderror" id="customCheck19_4" name="CheckRQ19_4" value="D"/>
                                                <label class="custom-control-label" for="customCheck19_4">{{$questionnaire->que_q19r4}}</label> 
                                                @error('CheckRQ19_4')
                                                    <span class="text-danger">{{$message}}</span>
                                                @enderror  
                                            </div> 
                                            @endif
                                        @endif

                                        @if($questionnaire->que_choixrepq19==3)
                                        <div class="form-group row m-2">
                                            <textarea class="form-control @error('txtq19') is-invalid @enderror" id="txtq19" name="txtq19" >{{ old('txtq19')}}</textarea>
                                            @error('txtq19')
                                                <span class="text-danger">{{$message}}</span>
                                            @enderror
                                        </div>
                                        @endif
                                    </div>                                    
                            </div>
                            <div class="progress mt-5" style="height: 25px">
                                <div
                                    class="progress-bar bg-info"
                                    role="progressbar"
                                    style="width: {{round(19/$questionnaire->que_nbreques*100)}}%"
                                    aria-valuenow="6"
                                    aria-valuemin="0"
                                    aria-valuemax="100">
                                    {{round(19/$questionnaire->que_nbreques*100)}}%
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif
                    @if($questionnaire->que_nbreques>=20)
                    <div class="row" id="Q20">
                        <div class="col-sm-12">
                            <div class="mb-0 h-75">

                                <h6 class="text-center">{{$questionnaire->que_q20theme}}</h6>
                                <hr>                          
                                <h5 class="mb-4"><span class="badge bg-secondary w-100">Question 20 / {{$questionnaire->que_nbreques}}</span></h5>
                                <hr>
                                <h6 class="text-sm-left m-2">
                                    <strong>20°) </strong>{{$questionnaire->que_q20}}
                                </h6>
                                    <div class="mt-2">
                                        <input type="hidden" name="choixrepq20" id="choixrepq20" value="{{$questionnaire->que_choixrepq20}}">
                                        <input type="hidden" name="nbrerepq20" id="nbrerepq20" value="{{$questionnaire->que_nbrerepq20}}">

                                        @if($questionnaire->que_choixrepq20==1)
                                            @if($questionnaire->que_nbrerepq20>=1)
                                            <div class="custom-control custom-radio mb-5">
                                                <input type="radio" id="customRadio20_1" name="ChoixRQ20" class="custom-control-input @error('ChoixRQ20') is-invalid @enderror" value="{{old('ChoixRQ20')? 'checked' : ''}}"/>
                                                <label class="custom-control-label" for="customRadio20_1">{{$questionnaire->que_q20r1}}</label>
                                                @error('ChoixRQ20')
                                                    <span class="text-danger">{{$message}}</span>
                                                @enderror
                                            </div>
                                            @endif
                                            @if($questionnaire->que_nbrerepq20>=2)
                                            <div class="custom-control custom-radio mb-5">    
                                                <input type="radio" id="customRadio20_2" name="ChoixRQ20" class="custom-control-input @error('ChoixRQ20') is-invalid @enderror" value="{{old('ChoixRQ20')? 'checked' : ''}}"/>
                                                <label class="custom-control-label" for="customRadio20_2">{{$questionnaire->que_q20r2}}</label>
                                                @error('ChoixRQ20')
                                                    <span class="text-danger">{{$message}}</span>
                                                @enderror
                                            </div>
                                            @endif
                                            @if($questionnaire->que_nbrerepq20>=3)
                                            <div class="custom-control custom-radio mb-5">    
                                                <input type="radio" id="customRadio20_3" name="ChoixRQ20" class="custom-control-input @error('ChoixRQ20') is-invalid @enderror" value="{{old('ChoixRQ20')? 'checked' : ''}}"/>
                                                <label class="custom-control-label" for="customRadio20_3">{{$questionnaire->que_q20r3}}</label>
                                                @error('ChoixRQ20')
                                                    <span class="text-danger">{{$message}}</span>
                                                @enderror
                                            </div>
                                            @endif
                                            @if($questionnaire->que_nbrerepq20>=4)  
                                            <div class="custom-control custom-radio mb-5">    
                                                <input type="radio" id="customRadio20_4" name="ChoixRQ20" class="custom-control-input @error('ChoixRQ20') is-invalid @enderror" value="{{old('ChoixRQ20')? 'checked' : ''}}"/>
                                                <label class="custom-control-label" for="customRadio20_4">{{$questionnaire->que_q20r4}}</label>
                                                @error('ChoixRQ20')
                                                    <span class="text-danger">{{$message}}</span>
                                                @enderror
                                            </div> 
                                            @endif
                                        @endif

                                        @if($questionnaire->que_choixrepq20==2)
                                            @if($questionnaire->que_nbrerepq20>=1)
                                            <div class="custom-control custom-checkbox mb-5">
                                                <input type="checkbox" class="custom-control-input @error('CheckRQ20_1') is-invalid @enderror" id="customCheck20_1" name="CheckRQ20_1" value="{{old('CheckRQ20_1')? 'checked' : ''}}"/>
                                                <label class="custom-control-label" for="customCheck20_1">{{$questionnaire->que_q20r1}}</label>
                                                @error('CheckRQ20_1')
                                                    <span class="text-danger">{{$message}}</span>
                                                @enderror
                                            </div>
                                            @endif
                                            @if($questionnaire->que_nbrerepq20>=2)
                                            <div class="custom-control custom-checkbox mb-5">
                                                <input type="checkbox" class="custom-control-input @error('CheckRQ20_2') is-invalid @enderror" id="customCheck20_2" name="CheckRQ20_2" value="{{old('CheckRQ20_2')? 'checked' : ''}}"/>
                                                <label class="custom-control-label" for="customCheck20_2">{{$questionnaire->que_q20r2}}</label> 
                                                @error('CheckRQ20_2')
                                                    <span class="text-danger">{{$message}}</span>
                                                @enderror       
                                            </div>
                                            @endif
                                            @if($questionnaire->que_nbrerepq20>=3)
                                            <div class="custom-control custom-checkbox mb-5">
                                                <input type="checkbox" class="custom-control-input @error('CheckRQ20_3') is-invalid @enderror" id="customCheck20_3" name="CheckRQ20_3" value="{{old('CheckRQ20_3')? 'checked' : ''}}"/>
                                                <label class="custom-control-label" for="customCheck20_3">{{$questionnaire->que_q20r3}}</label>
                                                @error('CheckRQ20_3')
                                                    <span class="text-danger">{{$message}}</span>
                                                @enderror         
                                            </div>
                                            @endif
                                            @if($questionnaire->que_nbrerepq20>=4)
                                            <div class="custom-control custom-checkbox mb-5">
                                                <input type="checkbox" class="custom-control-input @error('CheckRQ20_4') is-invalid @enderror" id="customCheck20_4" name="CheckRQ20_4" value="{{old('CheckRQ20_4')? 'checked' : ''}}"/>
                                                <label class="custom-control-label" for="customCheck20_4">{{$questionnaire->que_q20r4}}</label> 
                                                @error('CheckRQ20_4')
                                                    <span class="text-danger">{{$message}}</span>
                                                @enderror  
                                            </div> 
                                            @endif
                                        @endif

                                        @if($questionnaire->que_choixrepq20==3)
                                        <div class="form-group row m-2">
                                            <textarea class="form-control @error('txtq20') is-invalid @enderror" id="txtq20" name="txtq20" >{{ old('txtq20')}}</textarea>
                                            @error('txtq20')
                                                <span class="text-danger">{{$message}}</span>
                                            @enderror
                                        </div>
                                        @endif
                                    </div>                                    
                            </div>
                            <div class="progress mt-5" style="height: 25px">
                                <div
                                    class="progress-bar bg-info"
                                    role="progressbar"
                                    style="width: {{round(20/$questionnaire->que_nbreques*100)}}%"
                                    aria-valuenow="6"
                                    aria-valuemin="0"
                                    aria-valuemax="100">
                                    {{round(20/$questionnaire->que_nbreques*100)}}%
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif
                    <div class="row mt-3">
                        <div class="col-sm-12 d-flex justify-content-between">
                            <button type="submit" class="btn btn-success btn-lg mr-5 w-50" id="BtnPrev" >Previous</button>
                            <button type="submit" class="btn btn-outline-primary btn-lg ml-4 w-25" id="BtnNext" >Next</button>
                        </div>
                    </div> 
                    @endif                             
                <!--</form>-->
            </div>
        </div>
    </div>
</div>
<div id="showChoise">
    <div class="page-header mt-1">
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="title text-center">
                    <h4>Visualisation</h4>
                </div>
            </div>
        </div>
    </div>

@if(!@empty($questionnaire) && @isset($questionnaire) && !@empty($questionnaire->que_nbreques) && @isset($questionnaire->que_nbreques))
    @if($questionnaire->que_nbreques>=1)  
    <div class="card-box pb-10">          
        <table class="data-table table nowrap">
            <tbody>
                <!-- 1°) -->
                <tr>
                    <td id="t1">
                        1- {{$questionnaire->que_q1}}
                    </td>
                </tr>
                @if($questionnaire->que_nbrerepq1>=1)
                <tr>    
                    <td  id="t1_1">
                        {{$questionnaire->que_q1r1}}
                        <span id="tQ1_1" hidden>A</span>
                    </td>
                    <td class="text-center" rowspan="3" width="200px">
                            <a href="#" class="btnhref"  id="btnQ" data-color="#265ed7" data-id="1"
                                ><i class="icon-copy dw dw-edit2"></i
                            ></a>
                    </td>                    
                </tr>
                @endif
                @if($questionnaire->que_nbrerepq1>=2)
                <tr>
                    <td id="t1_2">
                        {{$questionnaire->que_q1r2}}
                        <span id="tQ1_2" hidden>B</span>
                    </td>
                </tr>
                @endif
                @if($questionnaire->que_nbrerepq1>=3)
                <tr>
                    <td id="t1_3">
                        {{$questionnaire->que_q1r3}}
                        <span id="tQ1_3" hidden>C</span>
                    </td>
                </tr>
                @endif
                @if($questionnaire->que_nbrerepq1>=4)         
                <tr>
                    <td id="t1_4">
                        {{$questionnaire->que_q1r4}}
                        <span id="tQ1_4" hidden>D</span>
                    </td>
                </tr>
                @endif               
            </tbody>
        </table>   
    </div>
    @endif 

    <!-- 2°) -->
    @if($questionnaire->que_nbreques>=2)
    <div class="card-box pb-10 mt-2">
        <table class="data-table table nowrap">
            <tbody>
                <!-- 2°) -->
                <tr>
                    <td id="t2">
                        2- {{$questionnaire->que_q2}}
                    </td>
                </tr>
                @if($questionnaire->que_nbrerepq2>=1)
                <tr>    
                    <td id="t2_1">
                        {{$questionnaire->que_q2r1}}
                        <span id="tQ2_1" hidden>A</span>

                    </td>
                    <td class="text-center" rowspan="3" width="200px">
                            <a href="#" class="btnhref" id="btnQ" data-color="#265ed7" data-id="2"
                                ><i class="icon-copy dw dw-edit2"></i
                            ></a>
                    </td>                    
                </tr>
                @endif
                @if($questionnaire->que_nbrerepq2>=2)
                <tr>
                    <td id="t2_2">
                        {{$questionnaire->que_q2r2}}
                        <span id="tQ2_2" hidden>B</span>
                    </td>
                </tr>
                @endif
                @if($questionnaire->que_nbrerepq2>=3)
                <tr>
                    <td id="t2_3">
                        {{$questionnaire->que_q2r3}}
                        <span id="tQ2_3" hidden>C</span>
                    </td>
                </tr>
                @endif
                @if($questionnaire->que_nbrerepq2>=4)
                <tr>
                    <td id="t2_4">
                        {{$questionnaire->que_q2r4}}
                        <span id="tQ2_4" hidden>D</span>
                    </td>
                </tr>
                @endif                             
            </tbody>
        </table>
    </div>
    @endif

    <!-- 3°) -->
    @if($questionnaire->que_nbreques>=3)
    <div class="card-box pb-10 mt-2">
        <table class="data-table table nowrap">
            <tbody>
                <tr>
                    <td id="t3">
                        3- {{$questionnaire->que_q3}}
                    </td>
                </tr>
                @if($questionnaire->que_nbrerepq3>=1)
                <tr>    
                    <td id="t3_1">
                        {{$questionnaire->que_q3r1}}
                        <span id="tQ3_1" hidden>A</span>
                    </td>
                    <td class="text-center" rowspan="3" width="200px">
                            <a href="#" class="btnhref" id="btnQ3" data-color="#265ed7"  data-id="3"
                                ><i class="icon-copy dw dw-edit2"></i
                            ></a>
                    </td>                    
                </tr>
                @endif
                @if($questionnaire->que_nbrerepq3>=2)
                <tr>
                    <td id="t3_2">
                        {{$questionnaire->que_q3r2}}
                        <span id="tQ3_2" hidden>B</span>
                    </td>
                </tr>
                @endif
                @if($questionnaire->que_nbrerepq3>=3)
                <tr>
                    <td id="t3_3">
                        {{$questionnaire->que_q3r3}}
                        <span id="tQ3_3" hidden>C</span>
                    </td>
                </tr>
                @endif
                @if($questionnaire->que_nbrerepq3>=4)
                <tr>
                    <td id="t3_4">
                        {{$questionnaire->que_q3r4}}
                        <span id="tQ3_4" hidden>D</span>
                    </td>
                </tr>
                @endif                             
            </tbody>
        </table>
    </div> 
    @endif

    <!-- 4°) -->
    @if($questionnaire->que_nbreques>=4)
    <div class="card-box pb-10 mt-2">
        <table class="data-table table nowrap">
            <tbody>
                <tr>
                    <td id="t4">
                        4- {{$questionnaire->que_q4}}
                    </td>
                </tr>
                @if($questionnaire->que_nbrerepq4>=1)
                <tr>    
                    <td id="t4_1">
                        {{$questionnaire->que_q4r1}}
                        <span id="tQ4_1" hidden>A</span>
                    </td>
                    <td class="text-center" rowspan="3" width="200px">
                            <a href="#" class="btnhref" id="btnQ4" data-color="#265ed7"  data-id="4"
                                ><i class="icon-copy dw dw-edit2"></i
                            ></a>
                    </td>                    
                </tr>
                @endif
                @if($questionnaire->que_nbrerepq4>=2)
                <tr>
                    <td id="t4_2">
                        {{$questionnaire->que_q4r2}}
                        <span id="tQ4_2" hidden>B</span>
                    </td>
                </tr>
                @endif
                @if($questionnaire->que_nbrerepq4>=3)
                <tr>
                    <td id="t4_3">
                        {{$questionnaire->que_q4r3}}
                        <span id="tQ4_3" hidden>C</span>
                    </td>
                </tr>
                @endif
                @if($questionnaire->que_nbrerepq4>=4)
                <tr>
                    <td id="t4_4">
                        {{$questionnaire->que_q4r4}}
                        <span id="tQ4_4" hidden>D</span>
                    </td>
                </tr> 
                @endif                            
            </tbody>
        </table>
    </div>   
    @endif

    <!-- 5°) -->
    @if($questionnaire->que_nbreques>=5)
    <div class="card-box pb-10 mt-2">
        <table class="data-table table nowrap">
            <tbody>
                <tr>
                    <td id="t5">
                        5- {{$questionnaire->que_q5}}
                    </td>
                </tr>
                @if($questionnaire->que_nbrerepq5>=1)
                <tr>    
                    <td id="t5_1">
                        {{$questionnaire->que_q5r1}}
                        <span id="tQ5_1" hidden>A</span>
                    </td>
                    <td class="text-center" rowspan="3" width="200px">
                            <a href="#" class="btnhref" id="btnQ5" data-color="#265ed7"  data-id="5"
                                ><i class="icon-copy dw dw-edit2"></i
                            ></a>
                    </td>                    
                </tr>
                @endif
                @if($questionnaire->que_nbrerepq5>=2)
                <tr>
                    <td id="t5_2">
                        {{$questionnaire->que_q5r2}}
                        <span id="tQ5_2" hidden>B</span>
                    </td>
                </tr>
                @endif
                @if($questionnaire->que_nbrerepq5>=3)
                <tr>
                    <td id="t5_3">
                        {{$questionnaire->que_q5r3}}
                        <span id="tQ5_3" hidden>C</span>
                    </td>
                </tr>
                @endif
                @if($questionnaire->que_nbrerepq5>=4)
                <tr>
                    <td id="t5_4">
                        {{$questionnaire->que_q5r4}}
                        <span id="tQ5_4" hidden>D</span>
                    </td>
                </tr>
                @endif                             
            </tbody>
        </table>
    </div>    
    @endif

    <!-- 6°) -->
    @if($questionnaire->que_nbreques>=6)
    <div class="card-box pb-10 mt-2">
        <table class="data-table table nowrap">
            <tbody>
                <tr>
                    <td id="t6">
                        6- {{$questionnaire->que_q6}}
                    </td>
                </tr>
                @if($questionnaire->que_nbrerepq6>=1)
                <tr>    
                    <td id="t6_1">
                        {{$questionnaire->que_q6r1}}
                        <span id="tQ6_1" hidden>A</span>
                    </td>
                    <td class="text-center" rowspan="3" width="200px">
                            <a href="#" class="btnhref" id="btnQ6" data-color="#265ed7"  data-id="6"
                                ><i class="icon-copy dw dw-edit2"></i
                            ></a>
                    </td>                    
                </tr>
                @endif
                @if($questionnaire->que_nbrerepq6>=2)
                <tr>
                    <td id="t6_2">
                        {{$questionnaire->que_q6r2}}
                        <span id="tQ6_2" hidden>B</span>
                    </td>
                </tr>
                @endif
                @if($questionnaire->que_nbrerepq6>=3)
                <tr>
                    <td id="t6_3">
                        {{$questionnaire->que_q6r3}}
                        <span id="tQ6_3" hidden>C</span>
                    </td>
                </tr>
                @endif
                @if($questionnaire->que_nbrerepq6>=4)
                <tr>
                    <td id="t6_4">
                        {{$questionnaire->que_q6r4}}
                        <span id="tQ6_4" hidden>D</span>
                    </td>
                </tr>
                @endif                             
            </tbody>
        </table>
    </div>  
    @endif

    <!-- 7°) -->
    @if($questionnaire->que_nbreques>=7)
    <div class="card-box pb-10 mt-2">
        <table class="data-table table nowrap">
            <tbody>
                <tr>
                    <td id="t7">
                        7- {{$questionnaire->que_q7}}
                    </td>
                </tr>
                @if($questionnaire->que_nbrerepq7>=1)
                <tr>    
                    <td id="t7_1">
                        {{$questionnaire->que_q7r1}}
                        <span id="tQ7_1" hidden>A</span>
                    </td>
                    <td class="text-center" rowspan="3" width="200px">
                            <a href="#" class="btnhref" id="btnQ7" data-color="#265ed7"  data-id="7"
                                ><i class="icon-copy dw dw-edit2"></i
                            ></a>
                    </td>                    
                </tr>
                @endif
                @if($questionnaire->que_nbrerepq7>=2)
                <tr>
                    <td id="t7_2">
                        {{$questionnaire->que_q7r2}}  
                        <span id="tQ7_2" hidden>B</span>
                    </td>
                </tr>
                @endif
                @if($questionnaire->que_nbrerepq7>=3)
                <tr>
                    <td id="t7_3">
                        {{$questionnaire->que_q7r3}}
                        <span id="tQ7_3" hidden>C</span>
                    </td>
                </tr>
                @endif
                @if($questionnaire->que_nbrerepq7>=4)
                <tr>
                    <td id="t7_4">
                        {{$questionnaire->que_q7r4}}
                        <span id="tQ7_4" hidden>D</span>
                    </td>
                </tr>
                @endif                             
            </tbody>
        </table>
    </div> 
    @endif

    <!-- 8°) -->
    @if($questionnaire->que_nbreques>=8)
    <div class="card-box pb-10 mt-2">
        <table class="data-table table nowrap">
            <tbody>
                <tr>
                    <td id="t8">
                        8- {{$questionnaire->que_q8}}
                    </td>
                </tr>

                @if($questionnaire->que_nbrerepq8>=1)
                <tr>    
                    <td id="t8_1">
                        {{$questionnaire->que_q8r1}}
                        <span id="tQ8_1" hidden>A</span>
                    </td>
                    <td class="text-center" rowspan="3" width="200px">
                            <a href="#" class="btnhref" id="btnQ8" data-color="#265ed7"  data-id="8"
                                ><i class="icon-copy dw dw-edit2"></i
                            ></a>
                    </td>                    
                </tr>
                @endif
                @if($questionnaire->que_nbrerepq8>=2)
                <tr>
                    <td id="t8_2">
                        {{$questionnaire->que_q8r2}}  
                        <span id="tQ8_2" hidden>B</span>
                    </td>
                </tr>
                @endif
                @if($questionnaire->que_nbrerepq8>=3)
                <tr>
                    <td id="t8_3">
                        {{$questionnaire->que_q8r3}}
                        <span id="tQ8_3" hidden>C</span>
                    </td>
                </tr>
                @endif
                @if($questionnaire->que_nbrerepq8>=4)
                <tr>
                    <td id="t8_4">
                        {{$questionnaire->que_q8r4}}
                        <span id="tQ8_4" hidden>D</span>
                    </td>
                </tr>
                @endif                             
            </tbody>
        </table>
    </div> 
    @endif

    <!-- 9°) -->
    @if($questionnaire->que_nbreques>=9)
    <div class="card-box pb-10 mt-2">
        <table class="data-table table nowrap">
            <tbody>
                <tr>
                    <td id="t9">
                        9- {{$questionnaire->que_q9}}
                    </td>
                </tr>
                @if($questionnaire->que_nbrerepq9>=1)
                <tr>    
                    <td id="t9_1">
                        {{$questionnaire->que_q9r1}}
                        <span id="tQ9_1" hidden>A</span>
                    </td>
                    <td class="text-center" rowspan="3" width="200px">
                            <a href="#" class="btnhref" id="btnQ9" data-color="#265ed7"  data-id="9"
                                ><i class="icon-copy dw dw-edit2"></i
                            ></a>
                    </td>                    
                </tr>
                @endif
                @if($questionnaire->que_nbrerepq9>=2)
                <tr>
                    <td id="t9_2">
                        {{$questionnaire->que_q9r2}}  
                        <span id="tQ9_2" hidden>B</span>
                    </td>
                </tr>
                @endif
                @if($questionnaire->que_nbrerepq9>=3)
                <tr>
                    <td id="t9_3">
                        {{$questionnaire->que_q9r3}}
                        <span id="tQ9_3" hidden>C</span>
                    </td>
                </tr>
                @endif
                @if($questionnaire->que_nbrerepq9>=4)
                <tr>
                    <td id="t9_4">
                        {{$questionnaire->que_q9r4}}
                        <span id="tQ9_4" hidden>D</span>
                    </td>
                </tr>
                @endif                             
            </tbody>
        </table>
    </div> 
    @endif

    <!-- 10°) -->
    @if($questionnaire->que_nbreques>=10)
    <div class="card-box pb-10 mt-2">
        <table class="data-table table nowrap">
            <tbody>
                <tr>
                    <td id="t10">
                        10- {{$questionnaire->que_q10}} 
                    </td>
                </tr>
                @if($questionnaire->que_nbrerepq10>=1)
                <tr>    
                    <td id="t10_1">
                        {{$questionnaire->que_q10r1}}
                        <span id="tQ10_1" hidden>A</span>
                    </td>
                    <td class="text-center" rowspan="3" width="200px">
                            <a href="#" class="btnhref" id="btnQ10" data-color="#265ed7"  data-id="10"
                                ><i class="icon-copy dw dw-edit2"></i
                            ></a>
                    </td>                    
                </tr>
                @endif
                @if($questionnaire->que_nbrerepq10>=2)
                <tr>
                    <td id="t10_2">
                        {{$questionnaire->que_q10r2}}  
                        <span id="tQ10_2" hidden>B</span>
                    </td>
                </tr>
                @endif
                @if($questionnaire->que_nbrerepq10>=3)
                <tr>
                    <td id="t10_3">
                        {{$questionnaire->que_q10r3}}
                        <span id="tQ10_3" hidden>C</span>
                    </td>
                </tr>
                @endif
                @if($questionnaire->que_nbrerepq10>=4)
                <tr>
                    <td id="t10_4">
                        {{$questionnaire->que_q10r4}}
                        <span id="tQ10_4" hidden>D</span>
                    </td>
                </tr> 
                @endif                            
            </tbody>
        </table>
    </div>  
    @endif

    <!-- 11°) -->
    @if($questionnaire->que_nbreques>=11)
    <div class="card-box pb-10 mt-2">
        <table class="data-table table nowrap">
            <tbody>
                <tr>
                    <td id="t11">
                        11- {{$questionnaire->que_q11}} 
                    </td>
                </tr>
                @if($questionnaire->que_nbrerepq11>=1)
                <tr>    
                    <td id="t11_1">
                        {{$questionnaire->que_q11r1}}
                        <span id="tQ11_1" hidden>A</span>
                    </td>
                    <td class="text-center" rowspan="3" width="200px">
                            <a href="#" class="btnhref" id="btnQ11" data-color="#265ed7"  data-id="11"
                                ><i class="icon-copy dw dw-edit2"></i
                            ></a>
                    </td>                    
                </tr>
                @endif
                @if($questionnaire->que_nbrerepq11>=2)
                <tr>
                    <td id="t11_2">
                        {{$questionnaire->que_q11r2}}  
                        <span id="tQ11_2" hidden>B</span>
                    </td>
                </tr>
                @endif
                @if($questionnaire->que_nbrerepq11>=3)
                <tr>
                    <td id="t11_3">
                        {{$questionnaire->que_q11r3}}
                        <span id="tQ11_3" hidden>C</span>
                    </td>
                </tr>
                @endif
                @if($questionnaire->que_nbrerepq11>=4)
                <tr>
                    <td id="t11_4">
                        {{$questionnaire->que_q11r4}}
                        <span id="tQ11_4" hidden>D</span>
                    </td>
                </tr>
                @endif                             
            </tbody>
        </table>
    </div> 
    @endif

    <!-- 12°) -->
    @if($questionnaire->que_nbreques>=12)
    <div class="card-box pb-10 mt-2">
        <table class="data-table table nowrap">
            <tbody>
                <tr>
                    <td id="t12">
                        12- {{$questionnaire->que_q12}} 
                    </td>
                </tr>
                @if($questionnaire->que_nbrerepq12>=1)
                <tr>    
                    <td id="t12_1">
                        {{$questionnaire->que_q12r1}}
                        <span id="tQ12_1" hidden>A</span>
                    </td>
                    <td class="text-center" rowspan="3" width="200px">
                            <a href="#" class="btnhref" id="btnQ12" data-color="#265ed7"  data-id="12"
                                ><i class="icon-copy dw dw-edit2"></i
                            ></a>
                    </td>                    
                </tr>
                @endif
                @if($questionnaire->que_nbrerepq12>=2)
                <tr>
                    <td id="t12_2">
                        {{$questionnaire->que_q12r2}}  
                        <span id="tQ12_2" hidden>B</span>
                    </td>
                </tr>
                @endif
                @if($questionnaire->que_nbrerepq12>=3)
                <tr>
                    <td id="t12_3">
                        {{$questionnaire->que_q12r3}}
                        <span id="tQ12_3" hidden>C</span>
                    </td>
                </tr>
                @endif
                @if($questionnaire->que_nbrerepq12>=4)
                <tr>
                    <td id="t12_4">
                        {{$questionnaire->que_q12r4}}
                        <span id="tQ12_4" hidden>D</span>
                    </td>
                </tr>
                @endif                             
            </tbody>
        </table>
    </div>  
    @endif

    <!-- 13°) -->
    @if($questionnaire->que_nbreques>=13)
    <div class="card-box pb-10 mt-2">
        <table class="data-table table nowrap">
            <tbody>
                <tr>
                    <td id="t13">
                        13- {{$questionnaire->que_q13}} 
                    </td>
                </tr>
                @if($questionnaire->que_nbrerepq13>=1)
                <tr>    
                    <td id="t13_1">
                        {{$questionnaire->que_q13r1}}
                        <span id="tQ13_1" hidden>A</span>
                    </td>
                    <td class="text-center" rowspan="3" width="200px">
                            <a href="#" class="btnhref" id="btnQ13" data-color="#265ed7"  data-id="13"
                                ><i class="icon-copy dw dw-edit2"></i
                            ></a>
                    </td>                    
                </tr>
                @endif
                @if($questionnaire->que_nbrerepq13>=2)
                <tr>
                    <td id="t13_2">
                        {{$questionnaire->que_q13r2}}  
                        <span id="tQ13_2" hidden>B</span>
                    </td>
                </tr>
                @endif
                @if($questionnaire->que_nbrerepq13>=3)
                <tr>
                    <td id="t13_3">
                        {{$questionnaire->que_q13r3}}
                        <span id="tQ13_3" hidden>C</span>
                    </td>
                </tr>
                @endif
                @if($questionnaire->que_nbrerepq13>=4)
                <tr>
                    <td id="t13_4">
                        {{$questionnaire->que_q13r4}}
                        <span id="tQ13_4" hidden>D</span>
                    </td>
                </tr>
                @endif                             
            </tbody>
        </table>
    </div>
    @endif

    <!-- 14°) -->
    @if($questionnaire->que_nbreques>=14)
    <div class="card-box pb-10 mt-2">
        <table class="data-table table nowrap">
            <tbody>
                <tr>
                    <td id="t14">
                        14- {{$questionnaire->que_q14}}
                    </td>
                </tr>
                @if($questionnaire->que_nbrerepq14>=1)
                <tr>    
                    <td id="t14_1">
                        {{$questionnaire->que_q14r1}}
                        <span id="tQ14_1" hidden>A</span>
                    </td>
                    <td class="text-center" rowspan="3" width="200px">
                            <a href="#" class="btnhref" id="btnQ14" data-color="#265ed7"  data-id="14"
                                ><i class="icon-copy dw dw-edit2"></i
                            ></a>
                    </td>                    
                </tr>
                @endif
                @if($questionnaire->que_nbrerepq14>=2)
                <tr>
                    <td id="t14_2">
                        {{$questionnaire->que_q14r2}}  
                        <span id="tQ14_2" hidden>B</span>
                    </td>
                </tr>
                @endif
                @if($questionnaire->que_nbrerepq14>=3)
                <tr>
                    <td id="t14_3">
                        {{$questionnaire->que_q14r3}}
                        <span id="tQ14_3" hidden>C</span>
                    </td>
                </tr>
                @endif
                @if($questionnaire->que_nbrerepq14>=4)
                <tr>
                    <td id="t14_4">
                        {{$questionnaire->que_q14r4}}
                        <span id="tQ14_4" hidden>D</span>
                    </td>
                </tr>
                @endif                             
            </tbody>
        </table>
    </div>  
    @endif

    <!-- 15°) -->
    @if($questionnaire->que_nbreques>=15)
    <div class="card-box pb-10 mt-2">
        <table class="data-table table nowrap">
            <tbody>
                <tr>
                    <td id="t15">
                        15- {{$questionnaire->que_q15}}
                    </td>
                </tr>
                @if($questionnaire->que_nbrerepq15>=1)
                <tr>    
                    <td id="t15_1">
                        {{$questionnaire->que_q15r1}}
                        <span id="tQ15_1" hidden>A</span>
                    </td>
                    <td class="text-center" rowspan="3" width="200px">
                            <a href="#" class="btnhref" id="btnQ15" data-color="#265ed7"  data-id="15"
                                ><i class="icon-copy dw dw-edit2"></i
                            ></a>
                    </td>                    
                </tr>
                @endif
                @if($questionnaire->que_nbrerepq15>=2)
                <tr>
                    <td id="t15_2">
                        {{$questionnaire->que_q15r2}}  
                        <span id="tQ15_2" hidden>B</span>
                    </td>
                </tr>
                @endif
                @if($questionnaire->que_nbrerepq15>=3)
                <tr>
                    <td id="t15_3">
                        {{$questionnaire->que_q15r3}}
                        <span id="tQ15_3" hidden>C</span>
                    </td>
                </tr>
                @endif
                @if($questionnaire->que_nbrerepq15>=4)
                <tr>
                    <td id="t15_4">
                        {{$questionnaire->que_q15r4}}
                        <span id="tQ15_4" hidden>D</span>
                    </td>
                </tr>
                @endif                             
            </tbody>
        </table>
    </div> 
    @endif

    <!-- 16°) -->
    @if($questionnaire->que_nbreques>=16)
    <div class="card-box pb-10 mt-2">
        <table class="data-table table nowrap">
            <tbody>
                <tr>
                    <td id="t16">
                        16- {{$questionnaire->que_q16}}
                    </td>
                </tr>
                @if($questionnaire->que_nbrerepq16>=1)
                <tr>    
                    <td id="t16_1">
                        {{$questionnaire->que_q16r1}}
                        <span id="tQ16_1" hidden>A</span>
                    </td>
                    <td class="text-center" rowspan="3" width="200px">
                            <a href="#" class="btnhref" id="btnQ16" data-color="#265ed7"  data-id="16"
                                ><i class="icon-copy dw dw-edit2"></i
                            ></a>
                    </td>                    
                </tr>
                @endif
                @if($questionnaire->que_nbrerepq16>=2)
                <tr>
                    <td id="t16_2">
                        {{$questionnaire->que_q16r2}}  
                        <span id="tQ16_2" hidden>B</span>
                    </td>
                </tr>
                @endif
                @if($questionnaire->que_nbrerepq16>=3)
                <tr>
                    <td id="t16_3">
                        {{$questionnaire->que_q16r3}}
                        <span id="tQ16_3" hidden>C</span>
                    </td>
                </tr>
                @endif
                @if($questionnaire->que_nbrerepq16>=4)
                <tr>
                    <td id="t16_4">
                        {{$questionnaire->que_q16r4}}
                        <span id="tQ16_4" hidden>D</span>
                    </td>
                </tr>
                @endif                             
            </tbody>
        </table>
    </div>   
    @endif

    <!-- 17°) -->
    @if($questionnaire->que_nbreques>=17)
    <div class="card-box pb-10 mt-2">
        <table class="data-table table nowrap">
            <tbody>
                <tr>
                    <td id="t17">
                        17- {{$questionnaire->que_q17}}
                    </td>
                </tr>
                @if($questionnaire->que_nbrerepq17>=1)
                <tr>    
                    <td id="t17_1">
                        {{$questionnaire->que_q17r1}}
                        <span id="tQ17_1" hidden>A</span>
                    </td>
                    <td class="text-center" rowspan="3" width="200px">
                            <a href="#" class="btnhref" id="btnQ17" data-color="#265ed7"  data-id="17"
                                ><i class="icon-copy dw dw-edit2"></i
                            ></a>
                    </td>                    
                </tr>
                @endif
                @if($questionnaire->que_nbrerepq17>=2)
                <tr>
                    <td id="t17_2">
                        {{$questionnaire->que_q17r2}}  
                        <span id="tQ17_2" hidden>B</span>
                    </td>
                </tr>
                @endif
                @if($questionnaire->que_nbrerepq17>=3)
                <tr>
                    <td id="t17_3">
                        {{$questionnaire->que_q17r3}}
                        <span id="tQ17_3" hidden>C</span>
                    </td>
                </tr>
                @endif
                @if($questionnaire->que_nbrerepq17>=4)
                <tr>
                    <td id="t17_4">
                        {{$questionnaire->que_q17r4}}
                        <span id="tQ17_4" hidden>D</span>
                    </td>
                </tr>
                @endif                             
            </tbody>
        </table>
    </div>
    @endif 

    <!-- 18°) -->
    @if($questionnaire->que_nbreques>=18)
    <div class="card-box pb-10 mt-2">
        <table class="data-table table nowrap">
            <tbody>
                <tr>
                    <td id="t18">
                        18- {{$questionnaire->que_q18}}
                    </td>
                </tr>
                @if($questionnaire->que_nbrerepq18>=1)
                <tr>    
                    <td id="t18_1">
                        {{$questionnaire->que_q18r1}}
                        <span id="tQ18_1" hidden>A</span>
                    </td>
                    <td class="text-center" rowspan="3" width="200px">
                            <a href="#" class="btnhref" id="btnQ18" data-color="#265ed7"  data-id="18"
                                ><i class="icon-copy dw dw-edit2"></i
                            ></a>
                    </td>                    
                </tr>
                @endif
                @if($questionnaire->que_nbrerepq18>=2)
                <tr>
                    <td id="t18_2">
                        {{$questionnaire->que_q18r2}}  
                        <span id="tQ18_2" hidden>B</span>
                    </td>
                </tr>
                @endif
                @if($questionnaire->que_nbrerepq18>=3)
                <tr>
                    <td id="t18_3">
                        {{$questionnaire->que_q18r3}}
                        <span id="tQ18_3" hidden>C</span>
                    </td>
                </tr>
                @endif
                @if($questionnaire->que_nbrerepq18>=4)
                <tr>
                    <td id="t18_4">
                        {{$questionnaire->que_q18r4}}
                        <span id="tQ18_4" hidden>D</span>
                    </td>
                </tr>
                @endif                             
            </tbody>
        </table>
    </div> 
    @endif

    <!-- 19°) -->
    @if($questionnaire->que_nbreques>=19)
    <div class="card-box pb-10 mt-2">
        <table class="data-table table nowrap">
            <tbody>
                <tr>
                    <td id="t19">
                        19- {{$questionnaire->que_q19}}
                    </td>
                </tr>
                @if($questionnaire->que_nbrerepq19>=1)
                <tr>    
                    <td id="t19_1">
                        {{$questionnaire->que_q19r1}}
                        <span id="tQ19_1" hidden>A</span>
                    </td>
                    <td class="text-center" rowspan="3" width="200px">
                            <a href="#" class="btnhref" id="btnQ19" data-color="#265ed7"  data-id="19"
                                ><i class="icon-copy dw dw-edit2"></i
                            ></a>
                    </td>                    
                </tr>
                @endif
                @if($questionnaire->que_nbrerepq19>=2)
                <tr>
                    <td id="t19_2">
                        {{$questionnaire->que_q19r2}}  
                        <span id="tQ19_2" hidden>B</span>
                    </td>
                </tr>
                @endif
                @if($questionnaire->que_nbrerepq19>=3)
                <tr>
                    <td id="t19_3">
                        {{$questionnaire->que_q19r3}}
                        <span id="tQ19_3" hidden>C</span>
                    </td>
                </tr>
                @endif
                @if($questionnaire->que_nbrerepq19>=4)
                <tr>
                    <td id="t19_4">
                        {{$questionnaire->que_q19r4}}
                        <span id="tQ19_4" hidden>D</span>
                    </td>
                </tr>
                @endif                             
            </tbody>
        </table>
    </div> 
    @endif

    <!-- 20°) -->
    @if($questionnaire->que_nbreques>=20)
    <div class="card-box pb-10 mt-2">
        <table class="data-table table nowrap">
            <tbody>
                <tr>
                    <td id="t20">
                        20- {{$questionnaire->que_q20}}
                    </td>
                </tr>
                @if($questionnaire->que_nbrerepq20>=1)
                <tr>    
                    <td id="t20_1">
                        {{$questionnaire->que_q20r1}}
                        <span id="tQ20_1" hidden>A</span>
                    </td>
                    <td class="text-center" rowspan="3" width="200px">
                            <a href="#" class="btnhref" id="btnQ20" data-color="#265ed7"  data-id="20"
                                ><i class="icon-copy dw dw-edit2"></i
                            ></a>
                    </td>                    
                </tr>
                @endif
                @if($questionnaire->que_nbrerepq20>=2)
                <tr>
                    <td id="t20_2">
                        {{$questionnaire->que_q20r2}}  
                        <span id="tQ20_2" hidden>B</span>
                    </td>
                </tr>
                @endif
                @if($questionnaire->que_nbrerepq20>=3)
                <tr>
                    <td id="t20_3">
                        {{$questionnaire->que_q20r3}}
                        <span id="tQ20_3" hidden>C</span>
                    </td>
                </tr>
                @endif
                @if($questionnaire->que_nbrerepq20>=4)
                <tr>
                    <td id="t20_4">
                        {{$questionnaire->que_q20r4}}
                        <span id="tQ20_4" hidden>D</span>
                    </td>
                </tr>
                @endif                             
            </tbody>
        </table>
    </div>              
    @endif
@endif
    <div class="page-header mt-1">
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="title d-flex justify-content-between"> 
                    <button type="submit" class="btn btn-success btn-lg mr-5 w-25" id="BtnPrev2" >Previous</button>
                    <button type="submit" class="btn btn-outline-primary btn-lg ml-4 w-25" id="BtnSave" >Save</button>                            
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')

<script type="text/javascript">
  $(document).ready(function() {

    //$('#divtimer').show();
    $('#divdate').hide();

    var nbreQuestions=0;
    nbreQuestions=parseInt($("#nbreQ").val());
    var nbreReponsesParQuestion=4;
     
    $("#showQuestions").show();
    $("#showChoise").hide();


   initFields();
    CurrentQuestion="Q1";
    $("#Q1").show();
    $("#BtnPrev").hide();
     function initFields()
     {

        for (var i=1;i<=nbreQuestions;i++){
          $("#Q"+parseInt(i)).hide();  
        }

        /*for (var i=1;i<=nbreQuestions;i++){
          $("#t"+parseInt(i)).hide();  
        }*/

        // $("#showChoise").hide();
        /*
         $("#Q1").hide();
         $("#Q2").hide();
         $("#Q3").hide();
         $("#Q4").hide();
         $("#Q5").hide();
         $("#Q6").hide();
         $("#Q7").hide();
         $("#Q8").hide();
         $("#Q9").hide();
         $("#Q10").hide();
         $("#Q11").hide();
         $("#Q12").hide();
         $("#Q13").hide();
         $("#Q14").hide();
         $("#Q15").hide();
         $("#Q16").hide();
         $("#Q17").hide();
         $("#Q18").hide();
         $("#Q19").hide();
         $("#Q20").hide();
         */

    }


        function BtnNext()
        {
            var index=parseInt(CurrentQuestion.substr(1,2));
            var note;
            //alert(index);
            //alert(nbreQuestions);
            switch(CurrentQuestion)
                {
                    case "Q"+index:
                        CurrentQuestion="Q"+parseInt(index+1);//Q2
                        PrevQuestion="Q"+parseInt(index+1);//Q2

                        if($('input:radio[name=ChoixRQ'+parseInt(index)+']:checked').val())    
                        {
                            //alert($('input:radio[name=ChoixRQ'+parseInt(index)+']:checked').val());
                            //alert("#Q"+parseInt(index+1));
                            if(index==nbreQuestions)
                            {
                                showChoise();
                                $("#showQuestions").hide();
                                $("#showChoise").show();
                            }else{
                                $("#Q"+index).hide();//Q1
                                $("#Q"+parseInt(index+1)).show();//Q2
                                $("#BtnPrev").show();
                           }
                        }
                        else 
                        {
                           alert("Merci de choisir une note SVP !, Attention vérifier... ");
                            CurrentQuestion="Q"+index;//Q1
                        }
                    break;             

                }
        }

        function BtnPrev()
        {
            var index=parseInt(PrevQuestion.substr(1,2));
            //alert(index);
            var note; 
            initFields();
            $("#BtnNext").text('Next');
             switch(PrevQuestion)
                {
                    case "Q"+index://Q2
                        CurrentQuestion="Q"+parseInt(index-1);//Q1;
                        PrevQuestion="Q"+parseInt(index-1);//Q1;
                            $("#Q"+index).hide();//Q2
                            $("#Q"+parseInt(index-1)).show();//Q1
                            if(index==2) $("#BtnPrev").hide();
                            if(index>2) $("#BtnPrev").show();
                    break; 
                }           

        }        


         $('#BtnNext').on('click', function() { 
            BtnNext(); 
        });  

         $('#BtnPrev').on('click', function() { 
            BtnPrev(); 
        }); 

        //var duree = 60;
         /*
        var duree = localStorage.getItem('duree');
        if (duree == null) {
          duree = 60;
          localStorage.setItem('duree', duree);
        }
        else{
          //duree = duree;
        }
*/
        if(localStorage.getItem("duree")){
            var duree = localStorage.getItem("duree");
        } else {
            var duree = 3600;
        }

        var t;
        timedCount();

        function timedCount() {

            var hours = parseInt( duree / 3600 ) % 24;
            var minutes = parseInt( duree / 60 ) % 60;
            var seconds = duree % 60;

            var result = (hours < 10 ? "0" + hours : hours) + ":" + (minutes < 10 ? "0" + minutes : minutes) + ":" + (seconds  < 10 ? "0" + seconds : seconds);

            
            $('#timer').html(result);
            if(parseInt(duree) == 0 ){   
                setConfirmUnload(false);
                //$("#quiz_form").submit();
                localStorage.removeItem('duree');
               // window.location="{{route('home')}}";
            } else {
            duree = duree - 1;
            setTimeout(function(){ timedCount() }, 1000);
            localStorage.setItem("duree",duree);
           // setTimeout("countDownTimer()",1000);
            //t = setTimeout(function(){ timedCount() }, 1000);
            }
        }


    // Prevent accidental navigation away
    setConfirmUnload(true);
    function setConfirmUnload(on)
    {
        window.onbeforeunload = on ? unloadMessage : null;
    }
    function unloadMessage()
    {
        return 'Your Answered Questions are resetted zero, Please select stay on page to continue your Quiz';
    }

    $(document).on('click', 'button:submit',function(){
        setConfirmUnload(false);
    });


     function showChoise()   
     {

        for (var i=1; i<=nbreQuestions; i++)
        {   

            var val="";
            var nbreRep;



            if($('#choixrepq'+parseInt(i)).val()==2)//(i== 1 || i== 3 || i== 6 || i== 20)
            {
                //nbreRep=5;

                for (x=1;x<=parseInt($('#nbrerepq'+parseInt(i)).val());x++)
                {
                    //alert(document.getElementById('tQ'+parseInt(i)+'_'+parseInt(x)).innerHTML);

                    if($('input[name=CheckRQ'+parseInt(i)+'_'+parseInt(x)+']:checked').val()== document.getElementById('tQ'+parseInt(i)+'_'+parseInt(x)).innerHTML)
                    {
                    document.getElementById('t'+parseInt(i)+'_'+parseInt(x)).style.color = "blue";
                    document.getElementById('t'+parseInt(i)+'_'+parseInt(x)).style.fontWeight = "bold";
                    } else{
                     document.getElementById('t'+parseInt(i)+'_'+parseInt(x)).style.color = "black";
                     document.getElementById('t'+parseInt(i)+'_'+parseInt(x)).style.fontWeight = "normal";
                    }



                }
            }else if($('#choixrepq'+parseInt(i)).val()==1 && $('input:radio[name=ChoixRQ'+parseInt(i)+']:checked').val())
               {  
                    //for (var y=1; y<=nbreReponsesParQuestion; y++)
                    //alert($('input:radio[name=ChoixRQ'+parseInt(i)+']:checked').length);

                    for (var y=1; y<=$('input:radio[name=ChoixRQ'+parseInt(i)+']').length; y++)    
                    {                               
                        
                        if($('input:radio[name=ChoixRQ'+parseInt(i)+']:checked').val()== document.getElementById('tQ'+parseInt(i)+'_'+parseInt(y)).innerHTML)
                        {
                        document.getElementById('t'+parseInt(i)+'_'+parseInt(y)).style.color = "blue";
                        document.getElementById('t'+parseInt(i)+'_'+parseInt(y)).style.fontWeight = "bold";
                        } else{
                         document.getElementById('t'+parseInt(i)+'_'+parseInt(y)).style.color = "black";
                         document.getElementById('t'+parseInt(i)+'_'+parseInt(y)).style.fontWeight = "normal";
                        }
                    }
               }else if($('#choixrepq'+parseInt(i)).val()==3)
               {  
                           
                        document.getElementById('t'+parseInt(i)+'_'+parseInt(y)).style.color = "blue";
                        document.getElementById('t'+parseInt(i)+'_'+parseInt(y)).style.fontWeight = "bold";
                }
               else{
                         document.getElementById('t'+parseInt(i)+'_'+parseInt(y)).style.color = "black";
                         document.getElementById('t'+parseInt(i)+'_'+parseInt(y)).style.fontWeight = "normal";                
               }



            }

        
     }



     function showChoiseold()   
     {

        for (var i=1; i<=nbreQuestions; i++)
        {            
           if($('input:radio[name=ChoixRQ'+parseInt(i)+']:checked').val())
           {  
                for (var y=1; y<=nbreReponsesParQuestion; y++)
                {                               
                    
                    if($('input:radio[name=ChoixRQ'+parseInt(i)+']:checked').val()== document.getElementById('tQ'+parseInt(i)+'_'+parseInt(y)).innerHTML)
                    {
                    document.getElementById('t'+parseInt(i)+'_'+parseInt(y)).style.color = "blue";
                    document.getElementById('t'+parseInt(i)+'_'+parseInt(y)).style.fontWeight = "bold";
                    } else{
                     document.getElementById('t'+parseInt(i)+'_'+parseInt(y)).style.color = "black";
                     document.getElementById('t'+parseInt(i)+'_'+parseInt(y)).style.fontWeight = "normal";
                    }
                }
           } else{
            //document.getElementById('tQ'+i).innerHTML = $('#txtQ'+i).val();
           }
        }
        
     }



    $('#BtnPrev2').on('click', function() {      

            $("#showChoise").hide();
            $("#showQuestions").show();

        for (var i=1; i<=nbreQuestions; i++)
        {            
           if(i=nbreQuestions)
           {
             CurrentQuestion="Q"+i;
             PrevQuestion="Q"+i; 
             $("#Q"+i).show();   
           } else{
             $("#Q"+i).hide();            
           }
        }            
    }); 

        $(".btnhref").on('click', function(event) {
            event.preventDefault();

        var id = $(this).attr("data-id");

            initFields();
            $("#showChoise").hide();
            $("#showQuestions").show();
            CurrentQuestion="Q"+parseInt(id);
            PrevQuestion="Q"+parseInt(id);
            $("#Q"+parseInt(id)).show();
        });


    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $("#BtnSave").click(function(e){
    
        e.preventDefault();

        var quizz_id,campagne,semaine,annee,duree,Q1,Q2,Q3,Q4,Q5,Q6,Q7,Q8,Q9,Q2,Q10,Q11,Q12,Q13,Q14,Q15,Q16,Q17,Q18,Q19,Q20;

        quizz_id= $('#que_id').val();
        campagne= $('#campagne').val();
        semaine= $('#semaine').val(); 
        annee= $('#annee').val();
        duree= $('#duree').val();
        Q1 =reponseSelected(1);Q2 =reponseSelected(2);Q3 =reponseSelected(3);
        Q4 =reponseSelected(4);Q5 =reponseSelected(5);Q6 =reponseSelected(6);
        Q7 =reponseSelected(7);Q8 =reponseSelected(8);Q9 =reponseSelected(9);
        Q10 =reponseSelected(10);Q11 =reponseSelected(11);Q12 =reponseSelected(12);
        Q13 =reponseSelected(13);Q14 =reponseSelected(14);Q15 =reponseSelected(15);
        Q16 =reponseSelected(16);Q17 =reponseSelected(17);Q18 =reponseSelected(18);
        Q19 =reponseSelected(19);Q20 =reponseSelected(20);

        //alert(quizz_id);
        //alert(campagne);
        //alert(semaine);
        //alert(annee);
        //alert(duree);



        /*
        var Q1 = $('input:radio[name=ChoixRQ1]:checked').val();
        var Q2 = $('input:radio[name=ChoixRQ2]:checked').val();
        var Q3 = $('input:radio[name=ChoixRQ3]:checked').val();
        var Q4 = $('input:radio[name=ChoixRQ4]:checked').val();
        var Q5 = $('input:radio[name=ChoixRQ5]:checked').val();
        var Q6 = $('input:radio[name=ChoixRQ6]:checked').val();
        var Q7 = $('input:radio[name=ChoixRQ7]:checked').val();
        var Q8 = $('input:radio[name=ChoixRQ8]:checked').val();
        var Q9 = $('input:radio[name=ChoixRQ9]:checked').val();
        var Q10 = $('input:radio[name=ChoixRQ10]:checked').val();
        var Q11 = $('input:radio[name=ChoixRQ11]:checked').val();
        var Q12 = $('input:radio[name=ChoixRQ12]:checked').val();
        var Q13 = $('input:radio[name=ChoixRQ13]:checked').val();
        var Q14 = $('input:radio[name=ChoixRQ14]:checked').val();
        var Q15 = $('input:radio[name=ChoixRQ15]:checked').val();
        var Q16 = $('input:radio[name=ChoixRQ16]:checked').val();
        var Q17 = $('input:radio[name=ChoixRQ17]:checked').val();
        var Q18 = $('input:radio[name=ChoixRQ18]:checked').val();
        var Q19 = $('input:radio[name=ChoixRQ19]:checked').val();
        var Q20 = $('input:radio[name=ChoixRQ20]:checked').val();*/
       //alert(Q1);
        $.ajax({
           type:'POST',
           url:"{{ route('EvalMensuelles.store') }}",
           data:{quizz_id:quizz_id,campagne:campagne,semaine:semaine,annee:annee,duree:duree,Q1:Q1,Q2:Q2,Q3:Q3,Q4:Q4,Q5:Q5,Q6:Q6,Q7:Q7,Q8:Q8,Q9:Q9,Q10:Q10,Q11:Q11,Q12:Q12,Q13:Q13,Q14:Q14,Q15:Q15,Q16:Q16,Q17:Q17,Q18:Q18,Q19:Q19,Q20:Q20
                },
           success:function(data){
                //alert(data);
                //window.location = '/home';
                //window.location = '{{ route("home") }}';
                
                if($.isEmptyObject(data.error)){
                    alert(data.success);
                    //location.reload();
                    //window.location ='{{ route("home") }}';
                    window.location ='{{ route("deconnexion") }}';
                }else{
                    alert(data.error);
                    //printErrorMsg(data.error);
                }
           }
        });
    
    });            


    function reponseSelected(num)
    {
        var reponse;
        if (parseInt(num)<=parseInt($("#nbreQ").val()))
        {
            if(parseInt($('#choixrepq'+parseInt(num)).val())==1)
            {
                reponse = $('input:radio[name=ChoixRQ'+parseInt(num)+']:checked').val();
            } else if(parseInt($('#choixrepq'+parseInt(num)).val())==3)
            {
                reponse = $('#txtq'+parseInt(num)).val();
            } else if(parseInt($('#choixrepq'+parseInt(num)).val())==2)
            {
                switch(parseInt($('#nbrerepq'+parseInt(num)).val())) {
                  case 1:
                     reponse = $('input[name=CheckRQ'+parseInt(num)+'_1]:checked').val();
                    break;
                  case 2:
                     reponse = $('input[name=CheckRQ'+parseInt(num)+'_1]:checked').val()+'-'+$('input[name=CheckRQ'+parseInt(num)+'_2]:checked').val();
                    break;
                  case 3:
                     reponse = $('input[name=CheckRQ'+parseInt(num)+'_1]:checked').val()+'-'+$('input[name=CheckRQ'+parseInt(num)+'_2]:checked').val()+$('input[name=CheckRQ'+parseInt(num)+'_3]:checked').val();
                    break; 
                  case 4:
                     reponse = $('input[name=CheckRQ'+parseInt(num)+'_1]:checked').val()+'-'+$('input[name=CheckRQ'+parseInt(num)+'_2]:checked').val()+$('input[name=CheckRQ'+parseInt(num)+'_3]:checked').val()+$('input[name=CheckRQ'+parseInt(num)+'_4]:checked').val();
                    break;                               
                  default:
                    reponse ="Pas de ";
                }
            }
        }
        return reponse;
    }



  } );  
</script>
@endsection