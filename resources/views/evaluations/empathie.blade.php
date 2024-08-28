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
                </div>
                <!--<form method="POST"  id="quiz_form" action="{{--route('home')--}}">-->
                    <!--@csrf-->
                    <!-- Objectifs de l'action -->
                    
                    <div class="row" id="Q1">
                        <div class="col-sm-12">
                            <div class="mb-0 h-75">
                                <h6 class="text-center">TESTEZ VOTRE EMPATHIE</h6>
                                <hr>                          
                                <h5 class="mb-4"><span class="badge bg-secondary w-100">Question 1 / 20</span></h5>
                                <hr>
                                <h6 class="text-sm-left">
                                    <strong>1°) </strong>Cherchez-vous en général à comprendre la réaction d’autrui ?
                                </h6>
                                    <div class="mt-2">
                                        <div class="custom-control custom-radio mb-5">
                                            <input type="radio" id="customRadio1" name="ChoixRQ1" class="custom-control-input" value="A"/>
                                            <label class="custom-control-label" for="customRadio1">A. Toujours</label>
                                        </div>
                                        <div class="custom-control custom-radio mb-5">    
                                            <input type="radio" id="customRadio2" name="ChoixRQ1" class="custom-control-input" value="B"/>
                                            <label class="custom-control-label" for="customRadio2">B. Souvent</label>
                                        </div>
                                        <div class="custom-control custom-radio mb-5">    
                                            <input type="radio" id="customRadio3" name="ChoixRQ1" class="custom-control-input" value="C"/>
                                            <label class="custom-control-label" for="customRadio3">C. Parfois</label>
                                        </div>  
                                        <div class="custom-control custom-radio mb-5">    
                                            <input type="radio" id="customRadio4" name="ChoixRQ1" class="custom-control-input" value="D"/>
                                            <label class="custom-control-label" for="customRadio4">D. Jamais</label>
                                        </div>                                                              
                                    </div>                                    
                            </div>
                            <div class="progress mt-5" style="height: 25px">
                                <div
                                    class="progress-bar bg-info"
                                    role="progressbar"
                                    style="width: 5%"
                                    aria-valuenow="6"
                                    aria-valuemin="0"
                                    aria-valuemax="100">
                                    5%
                                </div>
                            </div>
                        </div>
                    </div>
            
                    <div class="row" id="Q2">
                        <div class="col-sm-12">
                            <div class="mb-0 h-75">
                                <h6 class="text-center">TESTEZ VOTRE EMPATHIE</h6>
                                <hr>                         
                                <h5 class="mb-4"><span class="badge bg-secondary w-100">Question 2 / 20</span></h5>
                                <hr>
                                <h6 class="text-sm-left">
                                    <strong>2°) </strong>Observez vous le comportement des autres ?
                                </h6>
                                <div class="mt-2">
                                <div class="custom-control custom-radio mb-5">
                                    <input type="radio" id="customRadio5" name="ChoixRQ2" class="custom-control-input" value="A"/>
                                    <label class="custom-control-label" for="customRadio5">A. Toujours</label>
                                </div>
                                <div class="custom-control custom-radio mb-5">    
                                    <input type="radio" id="customRadio6" name="ChoixRQ2" class="custom-control-input" value="B"/>
                                    <label class="custom-control-label" for="customRadio6">B. Souvent</label>
                                </div>
                                <div class="custom-control custom-radio mb-5">
                                    <input type="radio" id="customRadio7" name="ChoixRQ2" class="custom-control-input" value="C"/>
                                    <label class="custom-control-label" for="customRadio7">C. Parfois</label>
                                </div> 
                                <div class="custom-control custom-radio mb-5">
                                    <input type="radio" id="customRadio8" name="ChoixRQ2" class="custom-control-input" value="D"/>
                                    <label class="custom-control-label" for="customRadio8">D. Jamais</label>
                                </div>                                   
                                </div>                                    
                                </div>
                                <div class="progress mt-5" style="height: 25px">
                                    <div
                                        class="progress-bar bg-info"
                                        role="progressbar"
                                        style="width: 10%"
                                        aria-valuenow="6"
                                        aria-valuemin="0"
                                        aria-valuemax="100">
                                        10%
                                    </div>
                                </div>
                            </div>
                    </div>           

                    <div class="row" id="Q3">
                        <div class="col-sm-12">
                            <div class="mb-0 h-75">
                                <h6 class="text-center">TESTEZ VOTRE EMPATHIE</h6>
                                <hr>                          
                                <h5 class="mb-4"><span class="badge bg-secondary w-100">Question 3 / 20</span></h5>
                                <hr>
                                <h6 class="text-sm-left">
                                    <strong>3°)</strong>Vous mettez-vous spontanément à la place des autres ? 
                                </h6>
                                <div class="mt-2">
                                    <div class="custom-control custom-radio mb-5">
                                        <input type="radio" id="customRadio9" name="ChoixRQ3" class="custom-control-input" value="A"/>
                                        <label class="custom-control-label" for="customRadio9">A. Toujours</label>
                                    </div>
                                    <div class="custom-control custom-radio mb-5">
                                        <input type="radio" id="customRadio10" name="ChoixRQ3" class="custom-control-input" value="B"/>
                                        <label class="custom-control-label" for="customRadio10">B. Souvent</label>
                                    </div>
                                    <div class="custom-control custom-radio mb-5">
                                        <input type="radio" id="customRadio12" name="ChoixRQ3" class="custom-control-input" value="C"/>
                                        <label class="custom-control-label" for="customRadio12">C. Parfois</label>
                                    </div>
                                    <div class="custom-control custom-radio mb-5">
                                        <input type="radio" id="customRadio11" name="ChoixRQ3" class="custom-control-input" value="D"/>
                                        <label class="custom-control-label" for="customRadio11">D. Jamais</label>
                                    </div>                  
                                </div>                                    
                                </div>
                                <div class="progress mt-5" style="height: 25px">
                                    <div
                                        class="progress-bar bg-info"
                                        role="progressbar"
                                        style="width: 15%"
                                        aria-valuenow="6"
                                        aria-valuemin="0"
                                        aria-valuemax="100">
                                        15%
                                    </div>
                                </div>
                            </div>
                    </div>

                    <div class="row" id="Q4">
                        <div class="col-sm-12">
                            <div class="mb-0 h-75">
                                <h6 class="text-center">TESTEZ VOTRE EMPATHIE</h6>
                                <hr>                           
                                <h5 class="mb-4"><span class="badge bg-secondary w-100">Question 4 / 20</span></h5>
                                <hr>
                                <h6 class="text-sm-left">
                                    <strong>4°)</strong>Cherchez à comprendre ce que l’autre ressent ?
                                </h6>
                                <div class="mt-2">
                                <div class="custom-control custom-radio mb-5">
                                    <input type="radio" id="customRadio13" name="ChoixRQ4" class="custom-control-input" value="A"/>
                                    <label class="custom-control-label" for="customRadio13">A. Toujours</label>
                                </div>
                                <div class="custom-control custom-radio mb-5">
                                    <input type="radio" id="customRadio14" name="ChoixRQ4" class="custom-control-input" value="B"/>
                                    <label class="custom-control-label" for="customRadio14">B. Souvent</label>
                                </div>
                                <div class="custom-control custom-radio mb-5">
                                    <input type="radio" id="customRadio15" name="ChoixRQ4" class="custom-control-input" value="C"/>
                                    <label class="custom-control-label" for="customRadio15">C. Parfois</label>
                                </div> 
                                <div class="custom-control custom-radio mb-5">
                                    <input type="radio" id="customRadio16" name="ChoixRQ4" class="custom-control-input" value="D"/>
                                    <label class="custom-control-label" for="customRadio16">D. Jamais</label>
                                </div>                                                                                            
                                </div>                                    
                                </div>
                                <div class="progress mt-5" style="height: 25px">
                                    <div
                                        class="progress-bar bg-info"
                                        role="progressbar"
                                        style="width: 20%"
                                        aria-valuenow="6"
                                        aria-valuemin="0"
                                        aria-valuemax="100">
                                        20%
                                    </div>
                                </div>
                            </div>
                    </div>

                    <div class="row" id="Q5">
                        <div class="col-sm-12">
                            <div class="mb-0 h-75">
                                <h6 class="text-center">TESTEZ VOTRE EMPATHIE</h6>
                                <hr>                          
                                <h5 class="mb-4"><span class="badge bg-secondary w-100">Question 5 / 20</span></h5>
                                <hr>
                                <h6 class="text-sm-left">
                                    <strong>5°) </strong>Avez–vous  envie de savoir ce que les autres vivent  ou ressentent intérieurement ? 
                                </h6>
                                <div class="mt-2">
                                <div class="custom-control custom-radio mb-5">
                                    <input type="radio" id="customRadio17" name="ChoixRQ5" class="custom-control-input" value="A"/>
                                    <label class="custom-control-label" for="customRadio17">A. Toujours</label>
                                </div>
                                <div class="custom-control custom-radio mb-5">
                                    <input type="radio" id="customRadio18" name="ChoixRQ5" class="custom-control-input" value="B"/>
                                    <label class="custom-control-label" for="customRadio18">B. Souvent</label>
                                </div>
                                <div class="custom-control custom-radio mb-5">    
                                    <input type="radio" id="customRadio19" name="ChoixRQ5" class="custom-control-input" value="C"/>
                                    <label class="custom-control-label" for="customRadio19">C. Parfois</label>
                                </div>
                                <div class="custom-control custom-radio mb-5">    
                                    <input type="radio" id="customRadio20" name="ChoixRQ5" class="custom-control-input" value="D"/>
                                    <label class="custom-control-label" for="customRadio20">D. Jamais</label>
                                </div>                                
                                </div>                                    
                                </div>
                                <div class="progress mt-5" style="height: 25px">
                                    <div
                                        class="progress-bar bg-info"
                                        role="progressbar"
                                        style="width: 25%"
                                        aria-valuenow="6"
                                        aria-valuemin="0"
                                        aria-valuemax="100">
                                        25%
                                    </div>
                                </div>
                            </div>
                    </div>

                    <div class="row" id="Q6">
                        <div class="col-sm-12">
                            <div class="mb-0 h-75">
                                <h6 class="text-center">TESTEZ VOTRE EMPATHIE</h6>
                                <hr>                         
                                <h5 class="mb-4"><span class="badge bg-secondary w-100">Question 6 / 20</span></h5>
                                <hr>
                                <h6 class="text-sm-left">
                                    <strong>6°) </strong>Avez–vous tendance à aborder les échanges de fond ?
                                </h6>
                                <div class="mt-2">
                                <div class="custom-control custom-radio mb-5">
                                    <input type="radio" id="customRadio21" name="ChoixRQ6" class="custom-control-input" value="A"/>
                                    <label class="custom-control-label" for="customRadio21">A. Toujours</label>
                                </div>
                                <div class="custom-control custom-radio mb-5">
                                    <input type="radio" id="customRadio22" name="ChoixRQ6" class="custom-control-input" value="B"/>
                                    <label class="custom-control-label" for="customRadio22">B. Souvent</label>
                                </div>
                                <div class="custom-control custom-radio mb-5">
                                    <input type="radio" id="customRadio23" name="ChoixRQ6" class="custom-control-input" value="C"/>
                                    <label class="custom-control-label" for="customRadio23">C. Parfois</label>
                                </div>
                                <div class="custom-control custom-radio mb-5">
                                    <input type="radio" id="customRadio24" name="ChoixRQ6" class="custom-control-input" value="D"/>
                                    <label class="custom-control-label" for="customRadio24">D. Jamais</label>
                                </div>                                
                                </div>                                    
                                </div>
                                <div class="progress mt-5" style="height: 25px">
                                    <div
                                        class="progress-bar bg-info"
                                        role="progressbar"
                                        style="width: 30%"
                                        aria-valuenow="6"
                                        aria-valuemin="0"
                                        aria-valuemax="100">
                                        30%
                                    </div>
                                </div>
                            </div>
                    </div>

                    <div class="row" id="Q7">
                        <div class="col-sm-12">
                            <div class="mb-0 h-75">
                                <h6 class="text-center">TESTEZ VOTRE EMPATHIE</h6>
                                <hr>                          
                                <h5 class="mb-4"><span class="badge bg-secondary w-100">Question 7 / 20</span></h5>
                                <hr>
                                <h6 class="text-sm-left">
                                    <strong>7°) </strong>Vous arrive-t-il de passer du temps à écouter les  autres ?
                                </h6>
                                <div class="mt-2">
                                <div class="custom-control custom-radio mb-5">
                                    <input type="radio" id="customRadio25" name="ChoixRQ7" class="custom-control-input" value="A"/>
                                    <label class="custom-control-label" for="customRadio25">A. Toujours</label>
                                </div>
                                <div class="custom-control custom-radio mb-5">
                                    <input type="radio" id="customRadio26" name="ChoixRQ7" class="custom-control-input" value="B"/>
                                    <label class="custom-control-label" for="customRadio26">B. Souvent</label>
                                </div>
                                <div class="custom-control custom-radio mb-5">
                                    <input type="radio" id="customRadio27" name="ChoixRQ7" class="custom-control-input" value="C"/>
                                    <label class="custom-control-label" for="customRadio27">C. Parfois</label>
                                </div>
                                <div class="custom-control custom-radio mb-5">
                                    <input type="radio" id="customRadio28" name="ChoixRQ7" class="custom-control-input" value="D"/>
                                    <label class="custom-control-label" for="customRadio28">D. Jamais</label>
                                </div>                                
                                </div>                                    
                                </div>
                                <div class="progress mt-5" style="height: 25px">
                                    <div
                                        class="progress-bar bg-info"
                                        role="progressbar"
                                        style="width: 35%"
                                        aria-valuenow="6"
                                        aria-valuemin="0"
                                        aria-valuemax="100">
                                        35%
                                    </div>
                                </div>
                            </div>
                    </div>

                    <div class="row" id="Q8">
                        <div class="col-sm-12">
                            <div class="mb-0 h-75">
                                <h6 class="text-center">TESTEZ VOTRE EMPATHIE</h6>
                                <hr>                          
                                <h5 class="mb-4"><span class="badge bg-secondary w-100">Question 8 / 20</span></h5>
                                <hr>
                                <h6 class="text-sm-left">
                                    <strong>8°) </strong>Pouvez–vous acceptez de modifier facilement l’organisation que vous avez prévue ?
                                </h6>
                                <div class="mt-2">
                                <div class="custom-control custom-radio mb-5">
                                    <input type="radio" id="customRadio29" name="ChoixRQ8" class="custom-control-input" value="A"/>
                                    <label class="custom-control-label" for="customRadio29">A. Toujours</label>
                                </div>
                                <div class="custom-control custom-radio mb-5">
                                    <input type="radio" id="customRadio30" name="ChoixRQ8" class="custom-control-input" value="B"/>
                                    <label class="custom-control-label" for="customRadio30">B. Souvent</label>
                                </div>
                                <div class="custom-control custom-radio mb-5">
                                    <input type="radio" id="customRadio31" name="ChoixRQ8" class="custom-control-input" value="C"/>
                                    <label class="custom-control-label" for="customRadio31">C. Parfois</label>
                                </div>
                                <div class="custom-control custom-radio mb-5">
                                    <input type="radio" id="customRadio32" name="ChoixRQ8" class="custom-control-input" value="D"/>
                                    <label class="custom-control-label" for="customRadio32">D. Jamais</label>
                                </div>                                
                                </div>                                    
                                </div>
                                <div class="progress mt-5" style="height: 25px">
                                    <div
                                        class="progress-bar bg-info"
                                        role="progressbar"
                                        style="width: 40%"
                                        aria-valuenow="6"
                                        aria-valuemin="0"
                                        aria-valuemax="100">
                                        40%
                                    </div>
                                </div>
                            </div>
                    </div>

                    <div class="row" id="Q9">
                        <div class="col-sm-12">
                            <div class="mb-0 h-75">
                                <h6 class="text-center">TESTEZ VOTRE EMPATHIE</h6>
                                <hr>                          
                                <h5 class="mb-4"><span class="badge bg-secondary w-100">Question 9 / 20</span></h5>
                                <hr>
                                <h6 class="text-sm-left">
                                    <strong>9°) </strong>Etes-vous tolérant ?
                                </h6>
                                <div class="mt-2">
                                <div class="custom-control custom-radio mb-5">
                                    <input type="radio" id="customRadio33" name="ChoixRQ9" class="custom-control-input" value="A"/>
                                    <label class="custom-control-label" for="customRadio33">A. Toujours</label>
                                </div>
                                <div class="custom-control custom-radio mb-5">
                                    <input type="radio" id="customRadio34" name="ChoixRQ9" class="custom-control-input" value="B"/>
                                    <label class="custom-control-label" for="customRadio34">B. Souvent</label>
                                </div>
                                <div class="custom-control custom-radio mb-5">
                                    <input type="radio" id="customRadio35" name="ChoixRQ9" class="custom-control-input" value="C"/>
                                    <label class="custom-control-label" for="customRadio35">C. Parfois</label>
                                </div>
                                <div class="custom-control custom-radio mb-5">
                                    <input type="radio" id="customRadio36" name="ChoixRQ9" class="custom-control-input" value="D"/>
                                    <label class="custom-control-label" for="customRadio36">D. Jamais</label>
                                </div>                                
                                </div>                                    
                                </div>
                                <div class="progress mt-5" style="height: 25px">
                                    <div
                                        class="progress-bar bg-info"
                                        role="progressbar"
                                        style="width: 45%"
                                        aria-valuenow="6"
                                        aria-valuemin="0"
                                        aria-valuemax="100">
                                        45%
                                    </div>
                                </div>
                            </div>
                    </div>

                    <div class="row" id="Q10">
                        <div class="col-sm-12">
                            <div class="mb-0 h-75">
                                <h6 class="text-center">TESTEZ VOTRE EMPATHIE</h6>
                                <hr>                          
                                <h5 class="mb-4"><span class="badge bg-secondary w-100">Question 10 / 20</span></h5>
                                <hr>
                                <h6 class="text-sm-left">
                                    <strong>10°) </strong>Remarquez-souvent la tristesse, la peur, la joie de quelqu’un ?
                                </h6>
                                <div class="mt-2">
                                <div class="custom-control custom-radio mb-5">
                                    <input type="radio" id="customRadio37" name="ChoixRQ10" class="custom-control-input" value="A"/>
                                    <label class="custom-control-label" for="customRadio37">A. Toujours</label>
                                </div>
                                <div class="custom-control custom-radio mb-5">
                                    <input type="radio" id="customRadio38" name="ChoixRQ10" class="custom-control-input" value="B"/>
                                    <label class="custom-control-label" for="customRadio38">B. Souvent</label>
                                </div>
                                <div class="custom-control custom-radio mb-5">
                                    <input type="radio" id="customRadio39" name="ChoixRQ10" class="custom-control-input" value="C"/>
                                    <label class="custom-control-label" for="customRadio39">C. Parfois</label>
                                </div>
                                <div class="custom-control custom-radio mb-5">
                                    <input type="radio" id="customRadio40" name="ChoixRQ10" class="custom-control-input" value="D"/>
                                    <label class="custom-control-label" for="customRadio40">D. Jamais</label>
                                </div>                                
                                </div>                                    
                                </div>
                                <div class="progress mt-5" style="height: 25px">
                                    <div
                                        class="progress-bar bg-info"
                                        role="progressbar"
                                        style="width: 50%"
                                        aria-valuenow="6"
                                        aria-valuemin="0"
                                        aria-valuemax="100">
                                        50%
                                    </div>
                                </div>
                            </div>
                    </div>

                    <div class="row" id="Q11">
                        <div class="col-sm-12">
                            <div class="mb-0 h-75">
                                <h6 class="text-center">TESTEZ VOTRE EMPATHIE</h6>
                                <hr>                          
                                <h5 class="mb-4"><span class="badge bg-secondary w-100">Question 11 / 20</span></h5>
                                <hr>
                                <h6 class="text-sm-left">
                                    <strong>11°) </strong>Trouvez–vous les autres dignes d’intérêt ?
                                </h6>
                                <div class="mt-2">
                                <div class="custom-control custom-radio mb-5">
                                    <input type="radio" id="customRadio41" name="ChoixRQ11" class="custom-control-input" value="A"/>
                                    <label class="custom-control-label" for="customRadio41">A. Toujours</label>
                                </div>
                                <div class="custom-control custom-radio mb-5">
                                    <input type="radio" id="customRadio42" name="ChoixRQ11" class="custom-control-input" value="B"/>
                                    <label class="custom-control-label" for="customRadio42">B. Souvent</label>
                                </div>
                                <div class="custom-control custom-radio mb-5">
                                    <input type="radio" id="customRadio43" name="ChoixRQ11" class="custom-control-input" value="C"/>
                                    <label class="custom-control-label" for="customRadio43">C. Parfois</label>
                                </div>
                                <div class="custom-control custom-radio mb-5">
                                    <input type="radio" id="customRadio44" name="ChoixRQ11" class="custom-control-input" value="D"/>
                                    <label class="custom-control-label" for="customRadio44">D. Jamais</label>
                                </div>                                
                                </div>                                    
                                </div>
                                <div class="progress mt-5" style="height: 25px">
                                    <div
                                        class="progress-bar bg-info"
                                        role="progressbar"
                                        style="width: 55%"
                                        aria-valuenow="6"
                                        aria-valuemin="0"
                                        aria-valuemax="100">
                                        55%
                                    </div>
                                </div>
                            </div>
                    </div>

                    <div class="row" id="Q12">
                        <div class="col-sm-12">
                            <div class="mb-0 h-75">
                                <h6 class="text-center">TESTEZ VOTRE EMPATHIE</h6>
                                <hr>                          
                                <h5 class="mb-4"><span class="badge bg-secondary w-100">Question 12 / 20</span></h5>
                                <hr>
                                <h6 class="text-sm-left">
                                    <strong>12°) </strong>Cherchez-vous les similitudes entre vous et autrui ?
                                </h6>
                                <div class="mt-2">
                                <div class="custom-control custom-radio mb-5">
                                    <input type="radio" id="customRadio45" name="ChoixRQ12" class="custom-control-input" value="A"/>
                                    <label class="custom-control-label" for="customRadio45">A. Toujours</label>
                                </div>
                                <div class="custom-control custom-radio mb-5">
                                    <input type="radio" id="customRadio46" name="ChoixRQ12" class="custom-control-input" value="B"/>
                                    <label class="custom-control-label" for="customRadio46">B. Souvent</label>
                                </div>
                                <div class="custom-control custom-radio mb-5">
                                    <input type="radio" id="customRadio47" name="ChoixRQ12" class="custom-control-input" value="C"/>
                                    <label class="custom-control-label" for="customRadio47">C. Parfois</label>
                                </div>
                                <div class="custom-control custom-radio mb-5">
                                    <input type="radio" id="customRadio48" name="ChoixRQ12" class="custom-control-input" value="D"/>
                                    <label class="custom-control-label" for="customRadio48">D. Jamais</label>
                                </div>                                
                                </div>                                    
                                </div>
                                <div class="progress mt-5" style="height: 25px">
                                    <div
                                        class="progress-bar bg-info"
                                        role="progressbar"
                                        style="width: 60%"
                                        aria-valuenow="6"
                                        aria-valuemin="0"
                                        aria-valuemax="100">
                                        60%
                                    </div>
                                </div>
                            </div>
                    </div>

                    <div class="row" id="Q13">
                        <div class="col-sm-12">
                            <div class="mb-0 h-75">
                                <h6 class="text-center">TESTEZ VOTRE EMPATHIE</h6>
                                <hr>                          
                                <h5 class="mb-4"><span class="badge bg-secondary w-100">Question 13 / 20</span></h5>
                                <hr>
                                <h6 class="text-sm-left">
                                    <strong>13°)</strong>Dit-on de vous que vous êtes affectif ?
                                </h6>
                                <div class="mt-2">
                                <div class="custom-control custom-radio mb-5">
                                    <input type="radio" id="customRadio49" name="ChoixRQ13" class="custom-control-input" value="A"/>
                                    <label class="custom-control-label" for="customRadio49">A. Toujours</label>
                                </div>
                                <div class="custom-control custom-radio mb-5">
                                    <input type="radio" id="customRadio50" name="ChoixRQ13" class="custom-control-input" value="B"/>
                                    <label class="custom-control-label" for="customRadio50">B. Souvent</label>
                                </div>
                                <div class="custom-control custom-radio mb-5">
                                    <input type="radio" id="customRadio51" name="ChoixRQ13" class="custom-control-input" value="C"/>
                                    <label class="custom-control-label" for="customRadio51">C. Parfois</label>
                                </div>
                                <div class="custom-control custom-radio mb-5">
                                    <input type="radio" id="customRadio52" name="ChoixRQ13" class="custom-control-input" value="D"/>
                                    <label class="custom-control-label" for="customRadio52">D. Jamais</label>
                                </div>                                
                                </div>                                    
                                </div>
                                <div class="progress mt-5" style="height: 25px">
                                    <div
                                        class="progress-bar bg-info"
                                        role="progressbar"
                                        style="width: 65%"
                                        aria-valuenow="6"
                                        aria-valuemin="0"
                                        aria-valuemax="100">
                                        65%
                                    </div>
                                </div>
                            </div>
                    </div>

                    <div class="row" id="Q14">
                        <div class="col-sm-12">
                            <div class="mb-0 h-75">
                                <h6 class="text-center">TESTEZ VOTRE EMPATHIE</h6>
                                <hr>                          
                                <h5 class="mb-4"><span class="badge bg-secondary w-100">Question 14 / 20</span></h5>
                                <hr>
                                <h6 class="text-sm-left">
                                    <strong>14°) </strong>Avez–vous besoin de partager avec l’autre le même vécu émotionnel ou affectif ?
                                </h6>
                                <div class="mt-2">
                                <div class="custom-control custom-radio mb-5">
                                    <input type="radio" id="customRadio53" name="ChoixRQ14" class="custom-control-input" value="A"/>
                                    <label class="custom-control-label" for="customRadio53">A. Toujours</label>
                                </div>
                                <div class="custom-control custom-radio mb-5">
                                    <input type="radio" id="customRadio54" name="ChoixRQ14" class="custom-control-input" value="B"/>
                                    <label class="custom-control-label" for="customRadio54">B. Souvent</label>
                                </div>
                                <div class="custom-control custom-radio mb-5">
                                    <input type="radio" id="customRadio55" name="ChoixRQ14" class="custom-control-input" value="C"/>
                                    <label class="custom-control-label" for="customRadio55">C. Parfois</label>
                                </div>
                                <div class="custom-control custom-radio mb-5">
                                    <input type="radio" id="customRadio56" name="ChoixRQ14" class="custom-control-input" value="D"/>
                                    <label class="custom-control-label" for="customRadio56">D. Jamais</label>
                                </div>                                
                                </div>                                    
                                </div>
                                <div class="progress mt-5" style="height: 25px">
                                    <div
                                        class="progress-bar bg-info"
                                        role="progressbar"
                                        style="width: 70%"
                                        aria-valuenow="6"
                                        aria-valuemin="0"
                                        aria-valuemax="100">
                                        70%
                                    </div>
                                </div>
                            </div>
                    </div>

                    <div class="row" id="Q15">
                        <div class="col-sm-12">
                            <div class="mb-0 h-75">
                                <h6 class="text-center">TESTEZ VOTRE EMPATHIE</h6>
                                <hr>                          
                                <h5 class="mb-4"><span class="badge bg-secondary w-100">Question 15 / 20</span></h5>
                                <hr>
                                <h6 class="text-sm-left">
                                    <strong>15°) </strong>Etes–vous conscient de votre vos propres croyances, jugements ?
                                </h6>
                                <div class="mt-2">
                                <div class="custom-control custom-radio mb-5">
                                    <input type="radio" id="customRadio57" name="ChoixRQ15" class="custom-control-input" value="A"/>
                                    <label class="custom-control-label" for="customRadio57">A. Toujours</label>
                                </div>
                                <div class="custom-control custom-radio mb-5">
                                    <input type="radio" id="customRadio58" name="ChoixRQ15" class="custom-control-input" value="B"/>
                                    <label class="custom-control-label" for="customRadio58">B. Souvent</label>
                                </div>
                                <div class="custom-control custom-radio mb-5">
                                    <input type="radio" id="customRadio59" name="ChoixRQ15" class="custom-control-input" value="C"/>
                                    <label class="custom-control-label" for="customRadio59">C. Parfois</label>
                                </div>
                                <div class="custom-control custom-radio mb-5">
                                    <input type="radio" id="customRadio60" name="ChoixRQ15" class="custom-control-input" value="D"/>
                                    <label class="custom-control-label" for="customRadio60">D. Jamais</label>
                                </div>                                
                                </div>                                    
                                </div>
                                <div class="progress mt-5" style="height: 25px">
                                    <div
                                        class="progress-bar bg-info"
                                        role="progressbar"
                                        style="width: 75%"
                                        aria-valuenow="6"
                                        aria-valuemin="0"
                                        aria-valuemax="100">
                                        75%
                                    </div>
                                </div>
                            </div>
                    </div>

                    <div class="row" id="Q16">
                        <div class="col-sm-12">
                            <div class="mb-0 h-75">
                                <h6 class="text-center">TESTEZ VOTRE EMPATHIE</h6>
                                <hr>                          
                                <h5 class="mb-4"><span class="badge bg-secondary w-100">Question 16 / 20</span></h5>
                                <hr>
                                <h6 class="text-sm-left">
                                    <strong>16°) </strong>Etes-vous quelqu’un d’indifférent ?
                                </h6>
                                <div class="mt-2">
                                <div class="custom-control custom-radio mb-5">
                                    <input type="radio" id="customRadio61" name="ChoixRQ16" class="custom-control-input" value="A"/>
                                    <label class="custom-control-label" for="customRadio61">A. Toujours</label>
                                </div>
                                <div class="custom-control custom-radio mb-5">
                                    <input type="radio" id="customRadio62" name="ChoixRQ16" class="custom-control-input" value="B"/>
                                    <label class="custom-control-label" for="customRadio62">B. Souvent</label>
                                </div>
                                <div class="custom-control custom-radio mb-5">
                                    <input type="radio" id="customRadio63" name="ChoixRQ16" class="custom-control-input" value="C"/>
                                    <label class="custom-control-label" for="customRadio63">C. Parfois</label>
                                </div>
                                <div class="custom-control custom-radio mb-5">
                                    <input type="radio" id="customRadio64" name="ChoixRQ16" class="custom-control-input" value="D"/>
                                    <label class="custom-control-label" for="customRadio64">D. Jamais</label>
                                </div>                                
                                </div>                                    
                                </div>
                                <div class="progress mt-5" style="height: 25px">
                                    <div
                                        class="progress-bar bg-info"
                                        role="progressbar"
                                        style="width: 80%"
                                        aria-valuenow="6"
                                        aria-valuemin="0"
                                        aria-valuemax="100">
                                        80%
                                    </div>
                                </div>
                            </div>
                    </div>

                    <div class="row" id="Q17">
                        <div class="col-sm-12">
                            <div class="mb-0 h-75">
                                <h6 class="text-center">TESTEZ VOTRE EMPATHIE</h6>
                                <hr>                          
                                <h5 class="mb-4"><span class="badge bg-secondary w-100">Question 17 / 20</span></h5>
                                <hr>
                                <h6 class="text-sm-left">
                                    <strong>17°) </strong>Avez-vous tendance à vous considérer supérieur aux autres ?
                                </h6>
                                <div class="mt-2">
                                <div class="custom-control custom-radio mb-5">
                                    <input type="radio" id="customRadio65" name="ChoixRQ17" class="custom-control-input" value="A"/>
                                    <label class="custom-control-label" for="customRadio65">A. Toujours</label>
                                </div>
                                <div class="custom-control custom-radio mb-5">
                                    <input type="radio" id="customRadio66" name="ChoixRQ17" class="custom-control-input" value="B"/>
                                    <label class="custom-control-label" for="customRadio66">B. Souvent</label>
                                </div>
                                <div class="custom-control custom-radio mb-5">
                                    <input type="radio" id="customRadio67" name="ChoixRQ17" class="custom-control-input" value="C"/>
                                    <label class="custom-control-label" for="customRadio67">C. Parfois</label>
                                </div>
                                <div class="custom-control custom-radio mb-5">
                                    <input type="radio" id="customRadio68" name="ChoixRQ17" class="custom-control-input" value="D"/>
                                    <label class="custom-control-label" for="customRadio68">D. Jamais</label>
                                </div>                                
                                </div>                                    
                                </div>
                                <div class="progress mt-5" style="height: 25px">
                                    <div
                                        class="progress-bar bg-info"
                                        role="progressbar"
                                        style="width: 85%"
                                        aria-valuenow="6"
                                        aria-valuemin="0"
                                        aria-valuemax="100">
                                        85%
                                    </div>
                                </div>
                            </div>
                    </div>

                    <div class="row" id="Q18">
                        <div class="col-sm-12">
                            <div class="mb-0 h-75">
                                <h6 class="text-center">TESTEZ VOTRE EMPATHIE</h6>
                                <hr>                          
                                <h5 class="mb-4"><span class="badge bg-secondary w-100">Question 18 / 20</span></h5>
                                <hr>
                                <h6 class="text-sm-left">
                                    <strong>18°) </strong>Avez-vous tendance à rechercher l’approbation des autres ?
                                </h6>
                                <div class="mt-2">
                                <div class="custom-control custom-radio mb-5">
                                    <input type="radio" id="customRadio69" name="ChoixRQ18" class="custom-control-input" value="A"/>
                                    <label class="custom-control-label" for="customRadio69">A. Toujours</label>
                                </div>
                                <div class="custom-control custom-radio mb-5">
                                    <input type="radio" id="customRadio70" name="ChoixRQ18" class="custom-control-input" value="B"/>
                                    <label class="custom-control-label" for="customRadio70">B. Souvent</label>
                                </div>
                                <div class="custom-control custom-radio mb-5">
                                    <input type="radio" id="customRadio71" name="ChoixRQ18" class="custom-control-input" value="C"/>
                                    <label class="custom-control-label" for="customRadio71">C. Parfois</label>
                                </div>
                                <div class="custom-control custom-radio mb-5">
                                    <input type="radio" id="customRadio72" name="ChoixRQ18" class="custom-control-input" value="D"/>
                                    <label class="custom-control-label" for="customRadio72">D. Jamais</label>
                                </div>                                
                                </div>                                    
                                </div>
                                <div class="progress mt-5" style="height: 25px">
                                    <div
                                        class="progress-bar bg-info"
                                        role="progressbar"
                                        style="width: 90%"
                                        aria-valuenow="6"
                                        aria-valuemin="0"
                                        aria-valuemax="100">
                                        90%
                                    </div>
                                </div>
                            </div>
                    </div> 

                    <div class="row" id="Q19">
                        <div class="col-sm-12">
                            <div class="mb-0 h-75">
                                <h6 class="text-center">TESTEZ VOTRE EMPATHIE</h6>
                                <hr>                          
                                <h5 class="mb-4"><span class="badge bg-secondary w-100">Question 19 / 20</span></h5>
                                <hr>
                                <h6 class="text-sm-left">
                                    <strong>19°) </strong>Avez–vous besoin de partager avec l’autre le même vécu émotionnel ou affectif ?
                                </h6>
                                <div class="mt-2">
                                <div class="custom-control custom-radio mb-5">
                                    <input type="radio" id="customRadio73" name="ChoixRQ19" class="custom-control-input" value="A"/>
                                    <label class="custom-control-label" for="customRadio73">A. Toujours</label>
                                </div>
                                <div class="custom-control custom-radio mb-5">
                                    <input type="radio" id="customRadio74" name="ChoixRQ19" class="custom-control-input" value="B"/>
                                    <label class="custom-control-label" for="customRadio74">B. Souvent</label>
                                </div>
                                <div class="custom-control custom-radio mb-5">
                                    <input type="radio" id="customRadio75" name="ChoixRQ19" class="custom-control-input" value="C"/>
                                    <label class="custom-control-label" for="customRadio75">C. Parfois</label>
                                </div>
                                <div class="custom-control custom-radio mb-5">
                                    <input type="radio" id="customRadio76" name="ChoixRQ19" class="custom-control-input" value="D"/>
                                    <label class="custom-control-label" for="customRadio76">D. Jamais</label>
                                </div>                                
                                </div>                                    
                                </div>
                                <div class="progress mt-5" style="height: 25px">
                                    <div
                                        class="progress-bar bg-info"
                                        role="progressbar"
                                        style="width: 95%"
                                        aria-valuenow="6"
                                        aria-valuemin="0"
                                        aria-valuemax="100">
                                        95%
                                    </div>
                                </div>
                            </div>
                    </div>

                    <div class="row" id="Q20">
                        <div class="col-sm-12">
                            <div class="mb-0 h-75">
                                <h6 class="text-center">TESTEZ VOTRE EMPATHIE</h6>
                                <hr>                          
                                <h5 class="mb-4"><span class="badge bg-secondary w-100">Question 20 / 20</span></h5>
                                <hr>
                                <h6 class="text-sm-left">
                                    <strong>20°) </strong>Avez-vous besoin que l’autre perçoive les choses comme vous ?
                                </h6>
                                <div class="mt-2">
                                <div class="custom-control custom-radio mb-5">
                                    <input type="radio" id="customRadio77" name="ChoixRQ20" class="custom-control-input" value="A"/>
                                    <label class="custom-control-label" for="customRadio77">A. Toujours</label>
                                </div>
                                <div class="custom-control custom-radio mb-5">
                                    <input type="radio" id="customRadio78" name="ChoixRQ20" class="custom-control-input" value="B"/>
                                    <label class="custom-control-label" for="customRadio78">B. Souvent</label>
                                </div>
                                <div class="custom-control custom-radio mb-5">
                                    <input type="radio" id="customRadio79" name="ChoixRQ20" class="custom-control-input" value="C"/>
                                    <label class="custom-control-label" for="customRadio79">C. Parfois</label>
                                </div>
                                <div class="custom-control custom-radio mb-5">
                                    <input type="radio" id="customRadio80" name="ChoixRQ20" class="custom-control-input" value="D"/>
                                    <label class="custom-control-label" for="customRadio80">D. Jamais</label>
                                </div>                                
                                </div>                                    
                                </div>
                                <div class="progress mt-5" style="height: 25px">
                                    <div
                                        class="progress-bar bg-info"
                                        role="progressbar"
                                        style="width: 100%"
                                        aria-valuenow="6"
                                        aria-valuemin="0"
                                        aria-valuemax="100">
                                        100%
                                    </div>
                                </div>
                            </div>
                    </div>


                    <div class="row mt-3">
                        <div class="col-sm-12 d-flex justify-content-between">
                            <button type="submit" class="btn btn-success btn-lg mr-5 w-50" id="BtnPrev" >Previous</button>
                            <button type="submit" class="btn btn-outline-primary btn-lg ml-4 w-25" id="BtnNext" >Next</button>                            
                        </div>
                    </div>                              
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
    <div class="card-box pb-10">
        <table class="data-table table nowrap">
            <tbody>

                <!-- 1°) -->
                <tr>
                    <td>
                        1- Cherchez-vous en général à comprendre la réaction d’autrui ?
                    </td>
                </tr>
                <tr>    
                    <td  id="t1_1">
                        A. Toujours
                        <span id="tQ1_1" hidden>A</span>
                    </td>
                    <td class="text-center" rowspan="3" width="200px">
                            <a href="#" class="btnhref"  id="btnQ" data-color="#265ed7" data-id="1"
                                ><i class="icon-copy dw dw-edit2"></i
                            ></a>
                    </td>                    
                </tr>
                <tr>
                    <td id="t1_2">
                        B. Souvent
                        <span id="tQ1_2" hidden>B</span>
                    </td>
                </tr>
                <tr>
                    <td id="t1_3">
                        C. Parfois
                        <span id="tQ1_3" hidden>C</span>
                    </td>
                </tr>         
                <tr>
                    <td id="t1_4">
                        D. Jamais
                        <span id="tQ1_4" hidden>D</span>
                    </td>
                </tr>                
            </tbody>
        </table>
    </div>

    <div class="card-box pb-10 mt-2">
        <table class="data-table table nowrap">
            <tbody>
                <!-- 2°) -->
                <tr>
                    <td>
                        2- Observez-vous le comportement des autres ?
                    </td>
                </tr>
                <tr>    
                    <td id="t2_1">
                        A. Toujours
                        <span id="tQ2_1" hidden>A</span>

                    </td>
                    <td class="text-center" rowspan="3" width="200px">
                            <a href="#" class="btnhref" id="btnQ" data-color="#265ed7" data-id="2"
                                ><i class="icon-copy dw dw-edit2"></i
                            ></a>
                    </td>                    
                </tr>
                <tr>
                    <td id="t2_2">
                        B. Souvent
                        <span id="tQ2_2" hidden>B</span>
                    </td>
                </tr>
                <tr>
                    <td id="t2_3">
                        C. Parfois
                        <span id="tQ2_3" hidden>C</span>
                    </td>
                </tr>
                <tr>
                    <td id="t2_4">
                        D. Jamais
                        <span id="tQ2_4" hidden>D</span>
                    </td>
                </tr>                             
            </tbody>
        </table>
    </div>

    <!-- 3°) -->
    <div class="card-box pb-10 mt-2">
        <table class="data-table table nowrap">
            <tbody>
                <tr>
                    <td>
                        3- Vous mettez-vous spontanément à la place des autres ?
                    </td>
                </tr>
                <tr>    
                    <td id="t3_1">
                        A. Toujours
                        <span id="tQ3_1" hidden>A</span>
                    </td>
                    <td class="text-center" rowspan="3" width="200px">
                            <a href="#" class="btnhref" id="btnQ" data-color="#265ed7"  data-id="3"
                                ><i class="icon-copy dw dw-edit2"></i
                            ></a>
                    </td>                    
                </tr>
                <tr>
                    <td id="t3_2">
                        B. Souvent
                        <span id="tQ3_2" hidden>B</span>
                    </td>
                </tr>
                <tr>
                    <td id="t3_3">
                        C. RParfois
                        <span id="tQ3_3" hidden>C</span>
                    </td>
                </tr>
                <tr>
                    <td id="t3_4">
                        D. Jamais
                        <span id="tQ3_4" hidden>D</span>
                    </td>
                </tr>                             
            </tbody>
        </table>
    </div> 

    <!-- 4°) -->
    <div class="card-box pb-10 mt-2">
        <table class="data-table table nowrap">
            <tbody>
                <tr>
                    <td>
                        4- Cherchez à comprendre ce que l’autre ressent ?
                    </td>
                </tr>
                <tr>    
                    <td id="t4_1">
                        A. Toujours
                        <span id="tQ4_1" hidden>A</span>
                    </td>
                    <td class="text-center" rowspan="3" width="200px">
                            <a href="#" class="btnhref" id="btnQ4" data-color="#265ed7"  data-id="4"
                                ><i class="icon-copy dw dw-edit2"></i
                            ></a>
                    </td>                    
                </tr>
                <tr>
                    <td id="t4_2">
                        B. Souvent
                        <span id="tQ4_2" hidden>B</span>
                    </td>
                </tr>
                <tr>
                    <td id="t4_3">
                        C. Parfois
                        <span id="tQ4_3" hidden>C</span>
                    </td>
                </tr>
                <tr>
                    <td id="t4_4">
                        D. Jamais
                        <span id="tQ4_4" hidden>D</span>
                    </td>
                </tr>                             
            </tbody>
        </table>
    </div>   

    <!-- 5°) -->
    <div class="card-box pb-10 mt-2">
        <table class="data-table table nowrap">
            <tbody>
                <tr>
                    <td>
                        5- Avez–vous envie de savoir ce que les autres vivent ou ressentent intérieurement ?
                    </td>
                </tr>
                <tr>    
                    <td id="t5_1">
                        A. Toujours
                        <span id="tQ5_1" hidden>A</span>
                    </td>
                    <td class="text-center" rowspan="3" width="200px">
                            <a href="#" class="btnhref" id="btnQ5" data-color="#265ed7"  data-id="5"
                                ><i class="icon-copy dw dw-edit2"></i
                            ></a>
                    </td>                    
                </tr>
                <tr>
                    <td id="t5_2">
                        B. Souvent
                        <span id="tQ5_2" hidden>B</span>
                    </td>
                </tr>
                <tr>
                    <td id="t5_3">
                        C. Parfois
                        <span id="tQ5_3" hidden>C</span>
                    </td>
                </tr>
                <tr>
                    <td id="t5_4">
                        D. Jamais
                        <span id="tQ5_4" hidden>D</span>
                    </td>
                </tr>                             
            </tbody>
        </table>
    </div>    

    <!-- 6°) -->
    <div class="card-box pb-10 mt-2">
        <table class="data-table table nowrap">
            <tbody>
                <tr>
                    <td>
                        6- Avez–vous tendance à aborder les échanges de fond ?
                    </td>
                </tr>
                <tr>    
                    <td id="t6_1">
                        A. Toujours
                        <span id="tQ6_1" hidden>A</span>
                    </td>
                    <td class="text-center" rowspan="3" width="200px">
                            <a href="#" class="btnhref" id="btnQ6" data-color="#265ed7"  data-id="6"
                                ><i class="icon-copy dw dw-edit2"></i
                            ></a>
                    </td>                    
                </tr>
                <tr>
                    <td id="t6_2">
                        B. Souvent
                        <span id="tQ6_2" hidden>B</span>
                    </td>
                </tr>
                <tr>
                    <td id="t6_3">
                        C. Parfois
                        <span id="tQ6_3" hidden>C</span>
                    </td>
                </tr>
                <tr>
                    <td id="t6_4">
                        D. Jamais
                        <span id="tQ6_4" hidden>D</span>
                    </td>
                </tr>                             
            </tbody>
        </table>
    </div>  

    <!-- 7°) -->
    <div class="card-box pb-10 mt-2">
        <table class="data-table table nowrap">
            <tbody>
                <tr>
                    <td>
                        7- Vous arrive-t-il de passer du temps à écouter les autres ?
                    </td>
                </tr>
                <tr>    
                    <td id="t7_1">
                        A. Toujours
                        <span id="tQ7_1" hidden>A</span>
                    </td>
                    <td class="text-center" rowspan="3" width="200px">
                            <a href="#" class="btnhref" id="btnQ7" data-color="#265ed7"  data-id="7"
                                ><i class="icon-copy dw dw-edit2"></i
                            ></a>
                    </td>                    
                </tr>
                <tr>
                    <td id="t7_2">
                        B. Souvent  
                        <span id="tQ7_2" hidden>B</span>
                    </td>
                </tr>
                <tr>
                    <td id="t7_3">
                        C. Parfois
                        <span id="tQ7_3" hidden>C</span>
                    </td>
                </tr>
                <tr>
                    <td id="t7_4">
                        D. Jamais
                        <span id="tQ7_4" hidden>D</span>
                    </td>
                </tr>                             
            </tbody>
        </table>
    </div> 

    <!-- 8°) -->
    <div class="card-box pb-10 mt-2">
        <table class="data-table table nowrap">
            <tbody>
                <tr>
                    <td>
                        8- Pouvez–vous acceptez de modifier facilement l’organisation que vous avez prévue ?
                    </td>
                </tr>
                <tr>    
                    <td id="t8_1">
                        A. Toujours
                        <span id="tQ8_1" hidden>A</span>
                    </td>
                    <td class="text-center" rowspan="3" width="200px">
                            <a href="#" class="btnhref" id="btnQ8" data-color="#265ed7"  data-id="8"
                                ><i class="icon-copy dw dw-edit2"></i
                            ></a>
                    </td>                    
                </tr>
                <tr>
                    <td id="t8_2">
                        B. Souvent  
                        <span id="tQ8_2" hidden>B</span>
                    </td>
                </tr>
                <tr>
                    <td id="t8_3">
                        C. Parfois
                        <span id="tQ8_3" hidden>C</span>
                    </td>
                </tr>
                <tr>
                    <td id="t8_4">
                        D. Jamais
                        <span id="tQ8_4" hidden>D</span>
                    </td>
                </tr>                             
            </tbody>
        </table>
    </div> 

    <!-- 9°) -->
    <div class="card-box pb-10 mt-2">
        <table class="data-table table nowrap">
            <tbody>
                <tr>
                    <td>
                        9- Etes-vous tolérant ?
                    </td>
                </tr>
                <tr>    
                    <td id="t9_1">
                        A. Toujours
                        <span id="tQ9_1" hidden>A</span>
                    </td>
                    <td class="text-center" rowspan="3" width="200px">
                            <a href="#" class="btnhref" id="btnQ9" data-color="#265ed7"  data-id="9"
                                ><i class="icon-copy dw dw-edit2"></i
                            ></a>
                    </td>                    
                </tr>
                <tr>
                    <td id="t9_2">
                        B. Souvent  
                        <span id="tQ9_2" hidden>B</span>
                    </td>
                </tr>
                <tr>
                    <td id="t9_3">
                        C. Parfois
                        <span id="tQ9_3" hidden>C</span>
                    </td>
                </tr>
                <tr>
                    <td id="t9_4">
                        D. Jamais
                        <span id="tQ9_4" hidden>D</span>
                    </td>
                </tr>                             
            </tbody>
        </table>
    </div> 

    <!-- 10°) -->
    <div class="card-box pb-10 mt-2">
        <table class="data-table table nowrap">
            <tbody>
                <tr>
                    <td>
                        10- Remarquez-souvent la tristesse, la peur, la joie de quelqu’un ? 
                    </td>
                </tr>
                <tr>    
                    <td id="t10_1">
                        A. Toujours
                        <span id="tQ10_1" hidden>A</span>
                    </td>
                    <td class="text-center" rowspan="3" width="200px">
                            <a href="#" class="btnhref" id="btnQ10" data-color="#265ed7"  data-id="10"
                                ><i class="icon-copy dw dw-edit2"></i
                            ></a>
                    </td>                    
                </tr>
                <tr>
                    <td id="t10_2">
                        B. Souvent  
                        <span id="tQ10_2" hidden>B</span>
                    </td>
                </tr>
                <tr>
                    <td id="t10_3">
                        C. Parfois
                        <span id="tQ10_3" hidden>C</span>
                    </td>
                </tr>
                <tr>
                    <td id="t10_4">
                        D. Jamais
                        <span id="tQ10_4" hidden>D</span>
                    </td>
                </tr>                             
            </tbody>
        </table>
    </div>  

    <!-- 11°) -->
    <div class="card-box pb-10 mt-2">
        <table class="data-table table nowrap">
            <tbody>
                <tr>
                    <td>
                        11- Trouvez–vous les autres dignes d’intérêt ? 
                    </td>
                </tr>
                <tr>    
                    <td id="t11_1">
                        A. Toujours
                        <span id="tQ11_1" hidden>A</span>
                    </td>
                    <td class="text-center" rowspan="3" width="200px">
                            <a href="#" class="btnhref" id="btnQ11" data-color="#265ed7"  data-id="11"
                                ><i class="icon-copy dw dw-edit2"></i
                            ></a>
                    </td>                    
                </tr>
                <tr>
                    <td id="t11_2">
                        B. Souvent  
                        <span id="tQ11_2" hidden>B</span>
                    </td>
                </tr>
                <tr>
                    <td id="t11_3">
                        C. Parfois
                        <span id="tQ11_3" hidden>C</span>
                    </td>
                </tr>
                <tr>
                    <td id="t11_4">
                        D. Jamais
                        <span id="tQ11_4" hidden>D</span>
                    </td>
                </tr>                             
            </tbody>
        </table>
    </div> 

    <!-- 12°) -->
    <div class="card-box pb-10 mt-2">
        <table class="data-table table nowrap">
            <tbody>
                <tr>
                    <td>
                        12- Cherchez-vous les similitudes entre vous et autrui ? 
                    </td>
                </tr>
                <tr>    
                    <td id="t12_1">
                        A. Toujours
                        <span id="tQ12_1" hidden>A</span>
                    </td>
                    <td class="text-center" rowspan="3" width="200px">
                            <a href="#" class="btnhref" id="btnQ12" data-color="#265ed7"  data-id="12"
                                ><i class="icon-copy dw dw-edit2"></i
                            ></a>
                    </td>                    
                </tr>
                <tr>
                    <td id="t12_2">
                        B. Souvent  
                        <span id="tQ12_2" hidden>B</span>
                    </td>
                </tr>
                <tr>
                    <td id="t12_3">
                        C. Parfois
                        <span id="tQ12_3" hidden>C</span>
                    </td>
                </tr>
                <tr>
                    <td id="t12_4">
                        D. Jamais
                        <span id="tQ12_4" hidden>D</span>
                    </td>
                </tr>                             
            </tbody>
        </table>
    </div>  

    <!-- 13°) -->
    <div class="card-box pb-10 mt-2">
        <table class="data-table table nowrap">
            <tbody>
                <tr>
                    <td>
                        13- Dit-on de vous que vous êtes affectif ? 
                    </td>
                </tr>
                <tr>    
                    <td id="t13_1">
                        A. Toujours
                        <span id="tQ13_1" hidden>A</span>
                    </td>
                    <td class="text-center" rowspan="3" width="200px">
                            <a href="#" class="btnhref" id="btnQ13" data-color="#265ed7"  data-id="13"
                                ><i class="icon-copy dw dw-edit2"></i
                            ></a>
                    </td>                    
                </tr>
                <tr>
                    <td id="t13_2">
                        B. Souvent  
                        <span id="tQ13_2" hidden>B</span>
                    </td>
                </tr>
                <tr>
                    <td id="t13_3">
                        C. Parfois
                        <span id="tQ13_3" hidden>C</span>
                    </td>
                </tr>
                <tr>
                    <td id="t13_4">
                        D. Jamais
                        <span id="tQ13_4" hidden>D</span>
                    </td>
                </tr>                             
            </tbody>
        </table>
    </div>

    <!-- 14°) -->
    <div class="card-box pb-10 mt-2">
        <table class="data-table table nowrap">
            <tbody>
                <tr>
                    <td>
                        14- Avez–vous besoin de partager avec l’autre le même vécu émotionnel ou affectif ? 
                    </td>
                </tr>
                <tr>    
                    <td id="t14_1">
                        A. Toujours
                        <span id="tQ14_1" hidden>A</span>
                    </td>
                    <td class="text-center" rowspan="3" width="200px">
                            <a href="#" class="btnhref" id="btnQ14" data-color="#265ed7"  data-id="14"
                                ><i class="icon-copy dw dw-edit2"></i
                            ></a>
                    </td>                    
                </tr>
                <tr>
                    <td id="t14_2">
                        B. Souvent  
                        <span id="tQ14_2" hidden>B</span>
                    </td>
                </tr>
                <tr>
                    <td id="t14_3">
                        C. Parfois
                        <span id="tQ14_3" hidden>C</span>
                    </td>
                </tr>
                <tr>
                    <td id="t14_4">
                        D. Jamais
                        <span id="tQ14_4" hidden>D</span>
                    </td>
                </tr>                             
            </tbody>
        </table>
    </div>  

    <!-- 15°) -->
    <div class="card-box pb-10 mt-2">
        <table class="data-table table nowrap">
            <tbody>
                <tr>
                    <td>
                        15- Etes–vous conscient de votre vos propres croyances, jugements ?
                    </td>
                </tr>
                <tr>    
                    <td id="t15_1">
                        A. Toujours
                        <span id="tQ15_1" hidden>A</span>
                    </td>
                    <td class="text-center" rowspan="3" width="200px">
                            <a href="#" class="btnhref" id="btnQ15" data-color="#265ed7"  data-id="15"
                                ><i class="icon-copy dw dw-edit2"></i
                            ></a>
                    </td>                    
                </tr>
                <tr>
                    <td id="t15_2">
                        B. Souvent  
                        <span id="tQ15_2" hidden>B</span>
                    </td>
                </tr>
                <tr>
                    <td id="t15_3">
                        C. Parfois
                        <span id="tQ15_3" hidden>C</span>
                    </td>
                </tr>
                <tr>
                    <td id="t15_4">
                        D. Jamais
                        <span id="tQ15_4" hidden>D</span>
                    </td>
                </tr>                             
            </tbody>
        </table>
    </div> 

    <!-- 16°) -->
    <div class="card-box pb-10 mt-2">
        <table class="data-table table nowrap">
            <tbody>
                <tr>
                    <td>
                        16- Etes-vous quelqu’un d’indifférent ?
                    </td>
                </tr>
                <tr>    
                    <td id="t16_1">
                        A. Toujours
                        <span id="tQ16_1" hidden>A</span>
                    </td>
                    <td class="text-center" rowspan="3" width="200px">
                            <a href="#" class="btnhref" id="btnQ16" data-color="#265ed7"  data-id="16"
                                ><i class="icon-copy dw dw-edit2"></i
                            ></a>
                    </td>                    
                </tr>
                <tr>
                    <td id="t16_2">
                        B. Souvent  
                        <span id="tQ16_2" hidden>B</span>
                    </td>
                </tr>
                <tr>
                    <td id="t16_3">
                        C. Parfois
                        <span id="tQ16_3" hidden>C</span>
                    </td>
                </tr>
                <tr>
                    <td id="t16_4">
                        D. Jamais
                        <span id="tQ16_4" hidden>D</span>
                    </td>
                </tr>                             
            </tbody>
        </table>
    </div>   

    <!-- 17°) -->
    <div class="card-box pb-10 mt-2">
        <table class="data-table table nowrap">
            <tbody>
                <tr>
                    <td>
                        17- Avez-vous tendance à vous considérer supérieur aux autres ?
                    </td>
                </tr>
                <tr>    
                    <td id="t17_1">
                        A. Toujours
                        <span id="tQ17_1" hidden>A</span>
                    </td>
                    <td class="text-center" rowspan="3" width="200px">
                            <a href="#" class="btnhref" id="btnQ17" data-color="#265ed7"  data-id="17"
                                ><i class="icon-copy dw dw-edit2"></i
                            ></a>
                    </td>                    
                </tr>
                <tr>
                    <td id="t17_2">
                        B. Souvent  
                        <span id="tQ17_2" hidden>B</span>
                    </td>
                </tr>
                <tr>
                    <td id="t17_3">
                        C. Parfois
                        <span id="tQ17_3" hidden>C</span>
                    </td>
                </tr>
                <tr>
                    <td id="t17_4">
                        D. Jamais
                        <span id="tQ17_4" hidden>D</span>
                    </td>
                </tr>                             
            </tbody>
        </table>
    </div> 

    <!-- 18°) -->
    <div class="card-box pb-10 mt-2">
        <table class="data-table table nowrap">
            <tbody>
                <tr>
                    <td>
                        18- Avez-vous tendance à rechercher l’approbation des autres ?
                    </td>
                </tr>
                <tr>    
                    <td id="t18_1">
                        A. Toujours
                        <span id="tQ18_1" hidden>A</span>
                    </td>
                    <td class="text-center" rowspan="3" width="200px">
                            <a href="#" class="btnhref" id="btnQ18" data-color="#265ed7"  data-id="18"
                                ><i class="icon-copy dw dw-edit2"></i
                            ></a>
                    </td>                    
                </tr>
                <tr>
                    <td id="t18_2">
                        B. Souvent  
                        <span id="tQ18_2" hidden>B</span>
                    </td>
                </tr>
                <tr>
                    <td id="t18_3">
                        C. Parfois
                        <span id="tQ18_3" hidden>C</span>
                    </td>
                </tr>
                <tr>
                    <td id="t18_4">
                        D. Jamais
                        <span id="tQ18_4" hidden>D</span>
                    </td>
                </tr>                             
            </tbody>
        </table>
    </div> 

    <!-- 19°) -->
    <div class="card-box pb-10 mt-2">
        <table class="data-table table nowrap">
            <tbody>
                <tr>
                    <td>
                        19- Avez–vous besoin de partager avec l’autre le même vécu émotionnel ou affectif ?
                    </td>
                </tr>
                <tr>    
                    <td id="t19_1">
                        A. Toujours
                        <span id="tQ19_1" hidden>A</span>
                    </td>
                    <td class="text-center" rowspan="3" width="200px">
                            <a href="#" class="btnhref" id="btnQ19" data-color="#265ed7"  data-id="19"
                                ><i class="icon-copy dw dw-edit2"></i
                            ></a>
                    </td>                    
                </tr>
                <tr>
                    <td id="t19_2">
                        B. Souvent  
                        <span id="tQ19_2" hidden>B</span>
                    </td>
                </tr>
                <tr>
                    <td id="t19_3">
                        C. Parfois
                        <span id="tQ19_3" hidden>C</span>
                    </td>
                </tr>
                <tr>
                    <td id="t19_4">
                        D. Jamais
                        <span id="tQ19_4" hidden>D</span>
                    </td>
                </tr>                             
            </tbody>
        </table>
    </div> 

    <!-- 20°) -->
    <div class="card-box pb-10 mt-2">
        <table class="data-table table nowrap">
            <tbody>
                <tr>
                    <td>
                        20- Avez-vous besoin que l’autre perçoive les choses comme vous ?
                    </td>
                </tr>
                <tr>    
                    <td id="t20_1">
                        A. Toujours
                        <span id="tQ20_1" hidden>A</span>
                    </td>
                    <td class="text-center" rowspan="3" width="200px">
                            <a href="#" class="btnhref" id="btnQ20" data-color="#265ed7"  data-id="20"
                                ><i class="icon-copy dw dw-edit2"></i
                            ></a>
                    </td>                    
                </tr>
                <tr>
                    <td id="t20_2">
                        B. Souvent  
                        <span id="tQ20_2" hidden>B</span>
                    </td>
                </tr>
                <tr>
                    <td id="t20_3">
                        C. Parfois
                        <span id="tQ20_3" hidden>C</span>
                    </td>
                </tr>
                <tr>
                    <td id="t20_4">
                        D. Jamais
                        <span id="tQ20_4" hidden>D</span>
                    </td>
                </tr>                             
            </tbody>
        </table>
    </div>              

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

    $('#divdate').hide();
    var nbreQuestions=20;
    var nbreReponsesParQuestion=4;
     
    $("#showQuestions").show();
    $("#showChoise").hide();


    initFields();
    CurrentQuestion="Q1";
    $("#Q1").show();
    $("#BtnPrev").hide();
     function initFields()
     {

        // $("#showChoise").hide();
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

    }


        function BtnNext()
        {
            var index=parseInt(CurrentQuestion.substr(1,2));
            var note;
            //alert(index);
            switch(CurrentQuestion)
                {
                    case "Q"+index:
                        CurrentQuestion="Q"+parseInt(index+1);//Q2
                        PrevQuestion="Q"+parseInt(index+1);//Q2

                       // alert("#Q"+parseInt(index+1));

                        //alert($('input:radio[name=ChoixRQ'+parseInt(index)+']:checked').val());    

                        //alert(index);
                        //if($('#NoteQ'+parseInt(index)).val())
                        if($('input:radio[name=ChoixRQ'+parseInt(index)+']:checked').val())    
                        {

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
        //timedCount();

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
        var Q20 = $('input:radio[name=ChoixRQ20]:checked').val();
       //alert(Q1);
        $.ajax({
           type:'POST',
           url:"{{ route('TestDisponibilites.store') }}",
           data:{Q1:Q1,Q2:Q2,Q3:Q3,Q4:Q4,Q5:Q5,Q6:Q6,Q7:Q7,Q8:Q8,Q9:Q9,Q10:Q10
                 Q11:Q11,Q12:Q12,Q13:Q13,Q14:Q14,Q15:Q15,Q16:Q16,Q17:Q17,Q18:Q18,Q19:Q19,Q20:Q20
                },
           success:function(data){
                //alert(data);
                //window.location = '/home';
                //window.location = '{{ route("home") }}';
                
                if($.isEmptyObject(data.error)){
                    alert(data.success);
                    //location.reload();
                    window.location ='{{ route("home") }}';
                }else{
                    alert(data.error);
                    //printErrorMsg(data.error);
                }
           }
        });
    
    });            


  } );  
</script>
@endsection