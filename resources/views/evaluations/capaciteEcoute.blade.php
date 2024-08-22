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
                                <h6 class="text-center">TESTEZ VOTRE CAPACITE D'ECOUTE</h6>
                                <hr>                          
                                <h5 class="mb-4"><span class="badge bg-secondary w-100">Question 1 / 7</span></h5>
                                <hr>
                                <h6 class="text-sm-left"><strong>1°) </strong>Êtes-vous attentif lorsque les autres vous parlent ?</h6>
                                    <div class="mt-2">
                                        <div class="custom-control custom-radio mb-5">
                                            <input type="radio" id="customRadio1" name="ChoixRQ1" class="custom-control-input" value="A"/>
                                            <label class="custom-control-label" for="customRadio1">A. Toujours</label>
                                        </div>
                                        <div class="custom-control custom-radio mb-5">    
                                            <input type="radio" id="customRadio2" name="ChoixRQ1" class="custom-control-input" value="B"/>
                                            <label class="custom-control-label" for="customRadio2">B. Normalement</label>
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
                                    style="width: 14%"
                                    aria-valuenow="6"
                                    aria-valuemin="0"
                                    aria-valuemax="100">
                                    14%
                                </div>
                            </div>
                        </div>
                    </div>
            
                    <div class="row" id="Q2">
                        <div class="col-sm-12">
                            <div class="mb-0 h-75">
                                <h6 class="text-center">TESTEZ VOTRE CAPACITE D'ECOUTE</h6>
                                <hr>                         
                                <h5 class="mb-4"><span class="badge bg-secondary w-100">Question 2 / 7</span></h5>
                                <hr>
                                <h6 class="text-sm-left"><strong>2°) </strong>Aimez-vous observer les autres ?</h6>
                                <div class="mt-2">
                                <div class="custom-control custom-radio mb-5">
                                    <input type="radio" id="customRadio5" name="ChoixRQ2" class="custom-control-input" value="A"/>
                                    <label class="custom-control-label" for="customRadio5">A. Toujours</label>
                                </div>
                                <div class="custom-control custom-radio mb-5">    
                                    <input type="radio" id="customRadio6" name="ChoixRQ2" class="custom-control-input" value="B"/>
                                    <label class="custom-control-label" for="customRadio6">B. Normalement</label>
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
                                        style="width: 29%"
                                        aria-valuenow="6"
                                        aria-valuemin="0"
                                        aria-valuemax="100">
                                        29%
                                    </div>
                                </div>
                            </div>
                    </div>           

                    <div class="row" id="Q3">
                        <div class="col-sm-12">
                            <div class="mb-0 h-75">
                                <h6 class="text-center">TESTEZ VOTRE CAPACITE D'ECOUTE</h6>
                                <hr>                          
                                <h5 class="mb-4"><span class="badge bg-secondary w-100">Question 3 / 7</span></h5>
                                <hr>
                                <h6 class="text-sm-left">
                                    <strong>3°)</strong>Donnez-vous un feedback non verbal lorsque votre interlocuteur s'adresse à vous ?(ex.:hochement de tête,sourire,etc.) 
                                </h6>
                                <div class="mt-2">
                                    <div class="custom-control custom-radio mb-5">
                                        <input type="radio" id="customRadio9" name="ChoixRQ3" class="custom-control-input" value="A"/>
                                        <label class="custom-control-label" for="customRadio9">A. Toujours</label>
                                    </div>
                                    <div class="custom-control custom-radio mb-5">
                                        <input type="radio" id="customRadio10" name="ChoixRQ3" class="custom-control-input" value="B"/>
                                        <label class="custom-control-label" for="customRadio10">B. Normalement</label>
                                    </div>
                                    <div class="custom-control custom-radio mb-5">
                                        <input type="radio" id="customRadio12" name="ChoixRQ3" class="custom-control-input" value="D"/>
                                        <label class="custom-control-label" for="customRadio12">C. Parfois</label>
                                    </div>
                                    <div class="custom-control custom-radio mb-5">
                                        <input type="radio" id="customRadio11" name="ChoixRQ3" class="custom-control-input" value="C"/>
                                        <label class="custom-control-label" for="customRadio11">D. Jamais</label>
                                    </div>                  
                                </div>                                    
                                </div>
                                <div class="progress mt-5" style="height: 25px">
                                    <div
                                        class="progress-bar bg-info"
                                        role="progressbar"
                                        style="width: 43%"
                                        aria-valuenow="6"
                                        aria-valuemin="0"
                                        aria-valuemax="100">
                                        43%
                                    </div>
                                </div>
                            </div>
                    </div>

                    <div class="row" id="Q4">
                        <div class="col-sm-12">
                            <div class="mb-0 h-75">
                                <h6 class="text-center">TESTEZ VOTRE CAPACITE D'ECOUTE</h6>
                                <hr>                           
                                <h5 class="mb-4"><span class="badge bg-secondary w-100">Question 4 / 7</span></h5>
                                <hr>
                                <h6 class="text-sm-left">
                                    <strong>4°)</strong>Prenez-vous des notes lorsque quelqu'un vous fournit des indications de la plus haute importance ? 
                                </h6>
                                <div class="mt-2">
                                <div class="custom-control custom-radio mb-5">
                                    <input type="radio" id="customRadio13" name="ChoixRQ4" class="custom-control-input" value="A"/>
                                    <label class="custom-control-label" for="customRadio13">A. Toujours</label>
                                </div>
                                <div class="custom-control custom-radio mb-5">
                                    <input type="radio" id="customRadio14" name="ChoixRQ4" class="custom-control-input" value="B"/>
                                    <label class="custom-control-label" for="customRadio14">B. Normalement</label>
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
                                        style="width: 57%"
                                        aria-valuenow="6"
                                        aria-valuemin="0"
                                        aria-valuemax="100">
                                        57%
                                    </div>
                                </div>
                            </div>
                    </div>

                    <div class="row" id="Q5">
                        <div class="col-sm-12">
                            <div class="mb-0 h-75">
                                <h6 class="text-center">TESTEZ VOTRE CAPACITE D'ECOUTE</h6>
                                <hr>                          
                                <h5 class="mb-4"><span class="badge bg-secondary w-100">Question 5 / 7</span></h5>
                                <hr>
                                <h6 class="text-sm-left">
                                    <strong>5°) </strong>Laissez-vous les autres finir d'exposer leur point de vue avant de commencer à imposer le vôtre ? 
                                </h6>
                                <div class="mt-2">
                                <div class="custom-control custom-radio mb-5">
                                    <input type="radio" id="customRadio17" name="ChoixRQ5" class="custom-control-input" value="A"/>
                                    <label class="custom-control-label" for="customRadio17">A. Toujours</label>
                                </div>
                                <div class="custom-control custom-radio mb-5">
                                    <input type="radio" id="customRadio18" name="ChoixRQ5" class="custom-control-input" value="B"/>
                                    <label class="custom-control-label" for="customRadio18">B. Normalement</label>
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
                                        style="width: 71%"
                                        aria-valuenow="6"
                                        aria-valuemin="0"
                                        aria-valuemax="100">
                                        71%
                                    </div>
                                </div>
                            </div>
                    </div>

                    <div class="row" id="Q6">
                        <div class="col-sm-12">
                            <div class="mb-0 h-75">
                                <h6 class="text-center">TESTEZ VOTRE CAPACITE D'ECOUTE</h6>
                                <hr>                         
                                <h5 class="mb-4"><span class="badge bg-secondary w-100">Question 6 / 7</span></h5>
                                <hr>
                                <h6 class="text-sm-left">
                                    <strong>6°) </strong>Vous en tenez-vous au sujet ou avez-vous tendance à bifurquer constamment ?
                                </h6>
                                <div class="mt-2">
                                <div class="custom-control custom-radio mb-5">
                                    <input type="radio" id="customRadio21" name="ChoixRQ6" class="custom-control-input" value="A"/>
                                    <label class="custom-control-label" for="customRadio21">A. Toujours</label>
                                </div>
                                <div class="custom-control custom-radio mb-5">
                                    <input type="radio" id="customRadio22" name="ChoixRQ6" class="custom-control-input" value="B"/>
                                    <label class="custom-control-label" for="customRadio22">B. Normalement</label>
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
                                        style="width: 86%"
                                        aria-valuenow="6"
                                        aria-valuemin="0"
                                        aria-valuemax="100">
                                        86%
                                    </div>
                                </div>
                            </div>
                    </div>

                    <div class="row" id="Q7">
                        <div class="col-sm-12">
                            <div class="mb-0 h-75">
                                <h6 class="text-center">TESTEZ VOTRE CAPACITE D'ECOUTE</h6>
                                <hr>                          
                                <h5 class="mb-4"><span class="badge bg-secondary w-100">Question 7 / 7</span></h5>
                                <hr>
                                <h6 class="text-sm-left">
                                    <strong>7°) </strong>Êtes-vous ouvert au point de vue qu'émet votre interlocuteur ?
                                </h6>
                                <div class="mt-2">
                                <div class="custom-control custom-radio mb-5">
                                    <input type="radio" id="customRadio25" name="ChoixRQ7" class="custom-control-input" value="A"/>
                                    <label class="custom-control-label" for="customRadio25">A. Toujours</label>
                                </div>
                                <div class="custom-control custom-radio mb-5">
                                    <input type="radio" id="customRadio26" name="ChoixRQ7" class="custom-control-input" value="B"/>
                                    <label class="custom-control-label" for="customRadio26">B. Normalement</label>
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
                        1- Êtes-vous attentif lorsque les autres vous parlent ?
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
                        B. Normalement
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
                        2- Aimez-vous observer les autres ?
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
                        B. Normalement
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
                        3- Donnez-vous un "feedback" non verbal lorsque votre interlocuteur s'adresse à vous ?(ex.:hochement de tête,sourire,etc.)
                    </td>
                </tr>
                <tr>    
                    <td id="t3_1">
                        A. Toujours
                        <span id="tQ3_1" hidden>A</span>
                    </td>
                    <td class="text-center" rowspan="3" width="200px">
                            <a href="#" class="btnhref" id="btnQ3" data-color="#265ed7"  data-id="3"
                                ><i class="icon-copy dw dw-edit2"></i
                            ></a>
                    </td>                    
                </tr>
                <tr>
                    <td id="t3_2">
                        B. Normalement
                        <span id="tQ3_2" hidden>B</span>
                    </td>
                </tr>
                <tr>
                    <td id="t3_3">
                        C. Parfois
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
                        4- Prenez-vous des notes lorsque quelqu'un vous fournit des indications de la plus haute importance ?
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
                        B. Normalement
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
                        5- Laissez-vous les autres finir d'exposer leur point de vue avant de commencer à imposer le vôtre ?
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
                        B. Normalement
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
                        6- Vous en tenez-vous au sujet ou avez-vous tendance à bifurquer constamment ?
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
                        B. Normalement
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
                        7- Êtes-vous ouvert au point de vue qu'émet votre interlocuteur ?
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
                        B. Normalement
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
    var nbreQuestions=7;
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
       //alert(Q1);
        $.ajax({
           type:'POST',
           url:"{{ route('TestCapaciteEcoutes.store') }}",
           data:{Q1:Q1,Q2:Q2,Q3:Q3,Q4:Q4,Q5:Q5,Q6:Q6,Q7:Q7},
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