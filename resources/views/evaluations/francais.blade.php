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
                    <!-- ORTHOGRAPHE -->
                    <div class="row" id="Q1">
                        <div class="col-sm-12">
                            <div class="mb-0 h-75">
                                <h6 class="text-center mt-3">TEST CAPACITE REDACTIONNELLE</h6>
                                <hr>
                                <h5 class="mb-0"><span class="badge bg-transparent w-100">1.&nbsp&nbsp ORTHOGRAPHE</span></h5>
                                <hr>                          
                                <h5 class="mt-0"><span class="badge bg-secondary w-100">Question 1 / 20</span></h5>
                                <hr>
                                <h6 class="text-sm-left">
                                    <strong>1°) </strong>Cochez la ou les cases incorrectement orthographiées.
                                </h6>
                                    <div class="mt-2">
                                        <div class="custom-control custom-checkbox mb-5">
                                            <input type="checkbox" class="custom-control-input" id="customCheck1_1" name="CheckRQ1_1" value="A"/>
                                            <label class="custom-control-label" for="customCheck1_1">A. Ils se sont succédé à la porte du Directeur</label>                      
                                        </div>
                                        <div class="custom-control custom-checkbox mb-5">
                                            <input type="checkbox" class="custom-control-input"
                                                id="customCheck1_2" name="CheckRQ1_2" value="B"/>
                                            <label class="custom-control-label" for="customCheck1_2">B. Ma famille, je l'ai faite venir.</label>
                                        </div> 
                                        <div class="custom-control custom-checkbox mb-5">
                                            <input type="checkbox" class="custom-control-input"
                                                id="customCheck1_3"  name="CheckRQ1_3" value="C"/>
                                            <label class="custom-control-label" for="customCheck1_3">C. L'expérience avait réussi au delà de mes espérances</label>
                                        </div>
                                        <div class="custom-control custom-checkbox mb-5">
                                            <input type="checkbox" class="custom-control-input"
                                                id="customCheck1_4"  name="CheckRQ1_4" value="D"/>
                                            <label class="custom-control-label" for="customCheck1_4">D. Après avoir bien mangé, ils se sont couchés</label>
                                        </div>
                                        <div class="custom-control custom-checkbox mb-5">
                                            <input type="checkbox" class="custom-control-input"
                                                id="customCheck1_5" name="CheckRQ1_5" value="E"/>
                                            <label class="custom-control-label" for="customCheck1_5">E. Je lui ai donné des fleurs, elle les a toutes jetés</label>
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
                                <h6 class="text-center mt-3">TEST CAPACITE REDACTIONNELLE</h6>
                                <hr>
                                <h5 class="mb-0"><span class="badge bg-transparent w-100">1.&nbsp&nbsp ORTHOGRAPHE</span></h5>
                                <hr>                          
                                <h5 class="mt-0"><span class="badge bg-secondary w-100">Question 2 / 20</span></h5>
                                <hr>
                                <h6 class="text-sm-left">
                                    <strong>2°) </strong>Quelle est la forme correcte ?
                                </h6>
                                <div class="mt-2">
                                <div class="custom-control custom-radio mb-5">
                                    <input type="radio" id="customRadio2_1" name="ChoixRQ2" class="custom-control-input" value="A"/>
                                    <label class="custom-control-label" for="customRadio2_1">A. Je souhaite qu’il conclue rapidement</label>
                                </div>
                                <div class="custom-control custom-radio mb-5">    
                                    <input type="radio" id="customRadio2_2" name="ChoixRQ2" class="custom-control-input" value="B"/>
                                    <label class="custom-control-label" for="customRadio2_2">B. Je souhaite qu’il conclut rapidement</label>
                                </div>
                                <div class="custom-control custom-radio mb-5">
                                    <input type="radio" id="customRadio2_3" name="ChoixRQ2" class="custom-control-input" value="C"/>
                                    <label class="custom-control-label" for="customRadio2_3">C. Je souhaite qu’il conclût rapidement</label>
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
                                <h6 class="text-center mt-3">TEST CAPACITE REDACTIONNELLE</h6>
                                <hr>
                                <h5 class="mb-0"><span class="badge bg-transparent w-100">1.&nbsp&nbsp ORTHOGRAPHE</span></h5>
                                <hr>                          
                                <h5 class="mt-0"><span class="badge bg-secondary w-100">Question 3 / 20</span></h5>
                                <hr>
                                <h6 class="text-sm-left">
                                    <strong>3°)</strong>Cochez la ou les cases correspondantes aux phrases correctement orthographiées. 
                                </h6>
                                <div class="mt-2">
                                        <div class="custom-control custom-checkbox mb-5">
                                            <input type="checkbox" class="custom-control-input" id="customCheck3_1" name="CheckRQ3_1" value="A"/>
                                            <label class="custom-control-label" for="customCheck3_1">A. Voilà les domaines que s'étaient attribué le roi et sa suite.</label>                      
                                        </div>
                                        <div class="custom-control custom-checkbox mb-5">
                                            <input type="checkbox" class="custom-control-input"
                                                id="customCheck3_2" name="CheckRQ3_2" value="B"/>
                                            <label class="custom-control-label" for="customCheck3_2">B. Ils se sont longuement attaqués à la bête.</label>
                                        </div> 
                                        <div class="custom-control custom-checkbox mb-5">
                                            <input type="checkbox" class="custom-control-input"
                                                id="customCheck3_3" name="CheckRQ3_3" value="C"/>
                                            <label class="custom-control-label" for="customCheck3_3">C. Durant les années qu'il avait vécu dans cette ville, il avait noué de solides amitiés.</label>
                                        </div>
                                        <div class="custom-control custom-checkbox mb-5">
                                            <input type="checkbox" class="custom-control-input"
                                                id="customCheck3_4" name="CheckRQ3_4" value="D"/>
                                            <label class="custom-control-label" for="customCheck3_4">D. Les allées qu'il avait eues à tracer lui avait donné bien du souci.</label>
                                        </div>
                                        <div class="custom-control custom-checkbox mb-5">
                                            <input type="checkbox" class="custom-control-input"
                                                id="customCheck3_5" name="CheckRQ3_5" value="E"/>
                                            <label class="custom-control-label" for="customCheck3_5">E. Nul ne pouvait dire les sommes que ce palais avait coûté.</label>
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
                                <h6 class="text-center mt-3">TEST CAPACITE REDACTIONNELLE</h6>
                                <hr>
                                <h5 class="mb-0"><span class="badge bg-transparent w-100">1.&nbsp&nbsp ORTHOGRAPHE</span></h5>
                                <hr>                          
                                <h5 class="mt-0"><span class="badge bg-secondary w-100">Question 4 / 20</span></h5>
                                <hr>
                                <h6 class="text-sm-left">
                                    <strong>4°)</strong>Quelle est la forme correcte ?
                                </h6>
                                <div class="mt-2">
                                <div class="custom-control custom-radio mb-5">
                                    <input type="radio" id="customRadio4_1" name="ChoixRQ4" class="custom-control-input" value="A"/>
                                    <label class="custom-control-label" for="customRadio4_1">A. Ces deux discours nous ont plus</label>
                                </div>
                                <div class="custom-control custom-radio mb-5">
                                    <input type="radio" id="customRadio4_2" name="ChoixRQ4" class="custom-control-input" value="B"/>
                                    <label class="custom-control-label" for="customRadio4_2">B. Ces deux discours nous ont plu</label>
                                </div>
                                <div class="custom-control custom-radio mb-5">
                                    <input type="radio" id="customRadio4_3" name="ChoixRQ4" class="custom-control-input" value="C"/>
                                    <label class="custom-control-label" for="customRadio4_3">C. Ces deux discours nous sont plus</label>
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
                                <h6 class="text-center mt-3">TEST CAPACITE REDACTIONNELLE</h6>
                                <hr>
                                <h5 class="mb-0"><span class="badge bg-transparent w-100">1.&nbsp&nbsp ORTHOGRAPHE</span></h5>
                                <hr>                          
                                <h5 class="mt-0"><span class="badge bg-secondary w-100">Question 5 / 20</span></h5>
                                <hr>
                                <h6 class="text-sm-left">
                                    <strong>5°) </strong>Choisir une définition pour le mot «acception»: 
                                </h6>
                                <div class="mt-2">
                                    <div class="custom-control custom-radio mb-5">
                                        <input type="radio" id="customRadio5_1" name="ChoixRQ5" class="custom-control-input" value="A"/>
                                        <label class="custom-control-label" for="customRadio5_1">A. Signification</label>
                                    </div>
                                    <div class="custom-control custom-radio mb-5">
                                        <input type="radio" id="customRadio5_2" name="ChoixRQ5" class="custom-control-input" value="B"/>
                                        <label class="custom-control-label" for="customRadio5_2">B. Accentuation</label>
                                    </div>
                                    <div class="custom-control custom-radio mb-5">    
                                        <input type="radio" id="customRadio5_3" name="ChoixRQ5" class="custom-control-input" value="C"/>
                                        <label class="custom-control-label" for="customRadio5_3">C. Accord</label>
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
                                <h6 class="text-center mt-3">TEST CAPACITE REDACTIONNELLE</h6>
                                <hr>
                                <h5 class="mb-0"><span class="badge bg-transparent w-100">1.&nbsp&nbsp ORTHOGRAPHE</span></h5>
                                <hr>                          
                                <h5 class="mt-0"><span class="badge bg-secondary w-100">Question 6 / 20</span></h5>
                                <hr>
                                <h6 class="text-sm-left">
                                    <strong>6°) </strong>Cochez la ou les cases correspondantes aux phrases incorrectement orthographiées
                                </h6>
                                <div class="mt-2">
                                        <div class="custom-control custom-checkbox mb-5">
                                            <input type="checkbox" class="custom-control-input" id="customCheck6_1" name="CheckRQ6_1" value="A"/>
                                            <label class="custom-control-label" for="customCheck6_1">A. Sans s'être parlées, elles arrivèrent au tournant du chemin</label>                      
                                        </div>
                                        <div class="custom-control custom-checkbox mb-5">
                                            <input type="checkbox" class="custom-control-input"
                                                id="customCheck6_2" name="CheckRQ6_2" value="B"/>
                                            <label class="custom-control-label" for="customCheck6_2">B. Je regrette les deux cents francs que ce livre m'a coutés</label>
                                        </div> 
                                        <div class="custom-control custom-checkbox mb-5">
                                            <input type="checkbox" class="custom-control-input"
                                                id="customCheck6_3" name="CheckRQ6_3" value="C"/>
                                            <label class="custom-control-label" for="customCheck6_3">C. Elle rapporte un des livres que vous lui avez prêtée</label>
                                        </div>
                                        <div class="custom-control custom-checkbox mb-5">
                                            <input type="checkbox" class="custom-control-input"
                                                id="customCheck6_4" name="CheckRQ6_4" value="D"/>
                                            <label class="custom-control-label" for="customCheck6_4">D. Toutes les brindilles sèches s'étaient détachées.</label>
                                        </div>
                                        <div class="custom-control custom-checkbox mb-5">
                                            <input type="checkbox" class="custom-control-input"
                                                id="customCheck6_5" name="CheckRQ6_5" value="E"/>
                                            <label class="custom-control-label" for="customCheck6_5">E. La piste que nous nous étions frayée avait disparu.</label>
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
                                <h6 class="text-center mt-3">TEST CAPACITE REDACTIONNELLE</h6>
                                <hr>
                                <h5 class="mb-0"><span class="badge bg-transparent w-100">1.&nbsp&nbsp ORTHOGRAPHE</span></h5>
                                <hr>                          
                                <h5 class="mt-0"><span class="badge bg-secondary w-100">Question 7 / 20</span></h5>
                                <hr>
                                <h6 class="text-sm-left">
                                    <strong>7°) </strong>Complétez la phrase suivante:«…la copie de la lettre»
                                </h6>
                                <div class="mt-2">
                                    <div class="custom-control custom-radio mb-5">
                                        <input type="radio" id="customRadio7_1" name="ChoixRQ7" class="custom-control-input" value="A"/>
                                        <label class="custom-control-label" for="customRadio7_1">A. ci-jointe</label>
                                    </div>
                                    <div class="custom-control custom-radio mb-5">
                                        <input type="radio" id="customRadio7_2" name="ChoixRQ7" class="custom-control-input" value="B"/>
                                        <label class="custom-control-label" for="customRadio7_2">B. ci-joint</label>
                                    </div>
                                    <div class="custom-control custom-radio mb-5">
                                        <input type="radio" id="customRadio7_3" name="ChoixRQ7" class="custom-control-input" value="C"/>
                                        <label class="custom-control-label" for="customRadio7_3">C. ci-joins</label>
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
                                <h6 class="text-center mt-3">TEST CAPACITE REDACTIONNELLE</h6>
                                <hr>
                                <h5 class="mb-0"><span class="badge bg-transparent w-100">1.&nbsp&nbsp ORTHOGRAPHE</span></h5>
                                <hr>                          
                                <h5 class="mt-0"><span class="badge bg-secondary w-100">Question 8 / 20</span></h5>
                                <hr>
                                <h6 class="text-sm-left">
                                    <strong>8°) </strong>Cochez la ou les cases correctement orthographiées.
                                </h6>
                                <div class="mt-2">
                                    <div class="custom-control custom-radio mb-5">
                                        <input type="radio" id="customRadio8_1" name="ChoixRQ8" class="custom-control-input" value="A"/>
                                        <label class="custom-control-label" for="customRadio8_1">A. Je pense aux rois qui se sont succédés sur le trône.</label>
                                    </div>
                                    <div class="custom-control custom-radio mb-5">
                                        <input type="radio" id="customRadio8_2" name="ChoixRQ8" class="custom-control-input" value="B"/>
                                        <label class="custom-control-label" for="customRadio8_2">B. Ils se sont extasié sur la beauté des lieux.</label>
                                    </div>
                                    <div class="custom-control custom-radio mb-5">
                                        <input type="radio" id="customRadio8_3" name="ChoixRQ8" class="custom-control-input" value="C"/>
                                        <label class="custom-control-label" for="customRadio8_3">C. Ce sont les musiciens que j'ai entendu jouer.</label>
                                    </div>
                                    <div class="custom-control custom-radio mb-5">
                                        <input type="radio" id="customRadio8_4" name="ChoixRQ8" class="custom-control-input" value="D"/>
                                        <label class="custom-control-label" for="customRadio8_4">D. La mauvaise humeur qu'il a laissée voir est surprenante.</label>
                                    </div>
                                    <div class="custom-control custom-radio mb-5">
                                        <input type="radio" id="customRadio8_5" name="ChoixRQ8" class="custom-control-input" value="E"/>
                                        <label class="custom-control-label" for="customRadio8_5">E. Je regrette les suspicions qu'elle a faites naître.</label>
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
                                <h6 class="text-center mt-3">TEST CAPACITE REDACTIONNELLE</h6>
                                <hr>
                                <h5 class="mb-0"><span class="badge bg-transparent w-100">1.&nbsp&nbsp ORTHOGRAPHE</span></h5>
                                <hr>                          
                                <h5 class="mt-0"><span class="badge bg-secondary w-100">Question 9 / 20</span></h5>
                                <hr>
                                <h6 class="text-sm-left">
                                    <strong>9°) </strong>Trouvez quel mot est mal orthographié
                                </h6>
                                <div class="mt-2">
                                    <div class="custom-control custom-radio mb-5">
                                        <input type="radio" id="customRadio9_1" name="ChoixRQ9" class="custom-control-input" value="A"/>
                                        <label class="custom-control-label" for="customRadio9_1">A. Bizarerie</label>
                                    </div>
                                    <div class="custom-control custom-radio mb-5">
                                        <input type="radio" id="customRadio9_2" name="ChoixRQ9" class="custom-control-input" value="B"/>
                                        <label class="custom-control-label" for="customRadio9_2">B. Inaltérable</label>
                                    </div>
                                    <div class="custom-control custom-radio mb-5">
                                        <input type="radio" id="customRadio9_3" name="ChoixRQ9" class="custom-control-input" value="C"/>
                                        <label class="custom-control-label" for="customRadio9_3">C. Typhon</label>
                                    </div>
                                    <div class="custom-control custom-radio mb-5">
                                        <input type="radio" id="customRadio9_4" name="ChoixRQ9" class="custom-control-input" value="D"/>
                                        <label class="custom-control-label" for="customRadio9_4">D. Acolyte</label>
                                    </div>
                                    <div class="custom-control custom-radio mb-5">
                                        <input type="radio" id="customRadio9_5" name="ChoixRQ9" class="custom-control-input" value="E"/>
                                        <label class="custom-control-label" for="customRadio9_5">E. Zonard</label>
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
                                <h6 class="text-center mt-3">TEST CAPACITE REDACTIONNELLE</h6>
                                <hr>
                                <h5 class="mb-0"><span class="badge bg-transparent w-100">1.&nbsp&nbsp ORTHOGRAPHE</span></h5>
                                <hr>                          
                                <h5 class="mt-0"><span class="badge bg-secondary w-100">Question 10 / 20</span></h5>
                                <hr>
                                <h6 class="text-sm-left">
                                    <strong>10°) </strong>Trouvez quel mot est mal orthographié
                                </h6>
                                <div class="mt-2">
                                    <div class="custom-control custom-radio mb-5">
                                        <input type="radio" id="customRadio10_1" name="ChoixRQ10" class="custom-control-input" value="A"/>
                                        <label class="custom-control-label" for="customRadio10_1">A. Martyriser</label>
                                    </div>
                                    <div class="custom-control custom-radio mb-5">
                                        <input type="radio" id="customRadio10_2" name="ChoixRQ10" class="custom-control-input" value="B"/>
                                        <label class="custom-control-label" for="customRadio10_2">B. Sinode</label>
                                    </div>
                                    <div class="custom-control custom-radio mb-5">
                                        <input type="radio" id="customRadio10_3" name="ChoixRQ10" class="custom-control-input" value="C"/>
                                        <label class="custom-control-label" for="customRadio10_3">C. Frelater</label>
                                    </div>
                                    <div class="custom-control custom-radio mb-5">
                                        <input type="radio" id="customRadio10_4" name="ChoixRQ10" class="custom-control-input" value="D"/>
                                        <label class="custom-control-label" for="customRadio10_4">D. Collusion</label>
                                    </div>
                                    <div class="custom-control custom-radio mb-5">
                                        <input type="radio" id="customRadio10_5" name="ChoixRQ10" class="custom-control-input" value="E"/>
                                        <label class="custom-control-label" for="customRadio10_5">E. Imputrescible</label>
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
                                <h6 class="text-center mt-3">TEST CAPACITE REDACTIONNELLE</h6>
                                <hr>
                                <h5 class="mb-0"><span class="badge bg-transparent w-100">1.&nbsp&nbsp ORTHOGRAPHE</span></h5>
                                <hr>                          
                                <h5 class="mt-0"><span class="badge bg-secondary w-100">Question 11 / 20</span></h5>
                                <hr>
                                <h6 class="text-sm-left">
                                    <strong>11°) </strong>Quelle est la forme correcte ?
                                </h6>
                                <div class="mt-2">
                                    <div class="custom-control custom-radio mb-5">
                                        <input type="radio" id="customRadio11_1" name="ChoixRQ11" class="custom-control-input" value="A"/>
                                        <label class="custom-control-label" for="customRadio11_1">A. Quelques soient les conséquences</label>
                                    </div>
                                    <div class="custom-control custom-radio mb-5">
                                        <input type="radio" id="customRadio11_2" name="ChoixRQ11" class="custom-control-input" value="B"/>
                                        <label class="custom-control-label" for="customRadio11_2">B. Quelles que soient les conséquences</label>
                                    </div>
                                    <div class="custom-control custom-radio mb-5">
                                        <input type="radio" id="customRadio11_3" name="ChoixRQ11" class="custom-control-input" value="C"/>
                                        <label class="custom-control-label" for="customRadio11_3">C. Quel que soit les conséquences</label>
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
                                <h6 class="text-center mt-3">TEST CAPACITE REDACTIONNELLE</h6>
                                <hr>
                                <h5 class="mb-0"><span class="badge bg-transparent w-100">1.&nbsp&nbsp ORTHOGRAPHE</span></h5>
                                <hr>                          
                                <h5 class="mt-0"><span class="badge bg-secondary w-100">Question 12 / 20</span></h5>
                                <hr>
                                <h6 class="text-sm-left">
                                    <strong>12°) </strong>Quelle est la forme correcte ?
                                </h6>
                                <div class="mt-2">
                                    <div class="custom-control custom-radio mb-5">
                                        <input type="radio" id="customRadio12_1" name="ChoixRQ12" class="custom-control-input" value="A"/>
                                        <label class="custom-control-label" for="customRadio12_1">A. Huit cent millions deux cent quatre-vingt mille six cents euros</label>
                                    </div>
                                    <div class="custom-control custom-radio mb-5">
                                        <input type="radio" id="customRadio12_2" name="ChoixRQ12" class="custom-control-input" value="B"/>
                                        <label class="custom-control-label" for="customRadio12_2">B. Huit cents millions deux cent quatre vingts mille six cents euros</label>
                                    </div>
                                    <div class="custom-control custom-radio mb-5">
                                        <input type="radio" id="customRadio12_3" name="ChoixRQ12" class="custom-control-input" value="C"/>
                                        <label class="custom-control-label" for="customRadio12_3">C. Huit cent millions deux cent quatre-vingt milles six cent euros</label>
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
                                <h6 class="text-center mt-3">TEST CAPACITE REDACTIONNELLE</h6>
                                <hr>
                                <h5 class="mb-0"><span class="badge bg-transparent w-100">1.&nbsp&nbsp ORTHOGRAPHE</span></h5>
                                <hr>                          
                                <h5 class="mt-0"><span class="badge bg-secondary w-100">Question 13 / 20</span></h5>
                                <hr>
                                <h6 class="text-sm-left">
                                    <strong>13°) </strong>Trouvez quel mot est mal orthographié
                                </h6>
                                <div class="mt-2">
                                    <div class="custom-control custom-radio mb-5">
                                        <input type="radio" id="customRadio13_1" name="ChoixRQ13" class="custom-control-input" value="A"/>
                                        <label class="custom-control-label" for="customRadio13_1">A. Tzigane</label>
                                    </div>
                                    <div class="custom-control custom-radio mb-5">
                                        <input type="radio" id="customRadio13_2" name="ChoixRQ13" class="custom-control-input" value="B"/>
                                        <label class="custom-control-label" for="customRadio13_2">B. Instantané</label>
                                    </div>
                                    <div class="custom-control custom-radio mb-5">
                                        <input type="radio" id="customRadio13_3" name="ChoixRQ13" class="custom-control-input" value="C"/>
                                        <label class="custom-control-label" for="customRadio13_3">C. Eflorescence</label>
                                    </div>
                                    <div class="custom-control custom-radio mb-5">
                                        <input type="radio" id="customRadio13_4" name="ChoixRQ13" class="custom-control-input" value="D"/>
                                        <label class="custom-control-label" for="customRadio13_4">D. Malhonnête</label>
                                    </div>
                                    <div class="custom-control custom-radio mb-5">
                                        <input type="radio" id="customRadio13_5" name="ChoixRQ13" class="custom-control-input" value="E"/>
                                        <label class="custom-control-label" for="customRadio13_5">E. Imprudemment</label>
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
                                <h6 class="text-center mt-3">TEST CAPACITE REDACTIONNELLE</h6>
                                <hr>
                                <h5 class="mb-0"><span class="badge bg-transparent w-100">1.&nbsp&nbsp ORTHOGRAPHE</span></h5>
                                <hr>                          
                                <h5 class="mt-0"><span class="badge bg-secondary w-100">Question 14 / 20</span></h5>
                                <hr>
                                <h6 class="text-sm-left">
                                    <strong>14°) </strong>Trouvez quel mot est mal orthographié
                                </h6>
                                <div class="mt-2">
                                    <div class="custom-control custom-radio mb-5">
                                        <input type="radio" id="customRadio14_1" name="ChoixRQ14" class="custom-control-input" value="A"/>
                                        <label class="custom-control-label" for="customRadio14_1">A. Bivouac</label>
                                    </div>
                                    <div class="custom-control custom-radio mb-5">
                                        <input type="radio" id="customRadio14_2" name="ChoixRQ14" class="custom-control-input" value="B"/>
                                        <label class="custom-control-label" for="customRadio14_2">B. Afable</label>
                                    </div>
                                    <div class="custom-control custom-radio mb-5">
                                        <input type="radio" id="customRadio14_3" name="ChoixRQ14" class="custom-control-input" value="C"/>
                                        <label class="custom-control-label" for="customRadio14_3">C. Animosité</label>
                                    </div>
                                    <div class="custom-control custom-radio mb-5">
                                        <input type="radio" id="customRadio14_4" name="ChoixRQ14" class="custom-control-input" value="D"/>
                                        <label class="custom-control-label" for="customRadio14_4">D. Zeppelin</label>
                                    </div>
                                    <div class="custom-control custom-radio mb-5">
                                        <input type="radio" id="customRadio14_5" name="ChoixRQ14" class="custom-control-input" value="E"/>
                                        <label class="custom-control-label" for="customRadio14_5">E. Terrifier</label>
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
                                <h6 class="text-center mt-3">TEST CAPACITE REDACTIONNELLE</h6>
                                <hr>
                                <h5 class="mb-0"><span class="badge bg-transparent w-100">1.&nbsp&nbsp ORTHOGRAPHE</span></h5>
                                <hr>                          
                                <h5 class="mt-0"><span class="badge bg-secondary w-100">Question 15 / 20</span></h5>
                                <hr>
                                <h6 class="text-sm-left">
                                    <strong>15°) </strong>Quelle est la forme correcte ?
                                </h6>
                                <div class="mt-2">
                                    <div class="custom-control custom-radio mb-5">
                                        <input type="radio" id="customRadio15_1" name="ChoixRQ15" class="custom-control-input" value="A"/>
                                        <label class="custom-control-label" for="customRadio15_1">A. Nous nous sommes dit au revoir</label>
                                    </div>
                                    <div class="custom-control custom-radio mb-5">
                                        <input type="radio" id="customRadio15_2" name="ChoixRQ15" class="custom-control-input" value="B"/>
                                        <label class="custom-control-label" for="customRadio15_2">B. Nous nous sommes dits au revoir</label>
                                    </div>
                                    <div class="custom-control custom-radio mb-5">
                                        <input type="radio" id="customRadio15_3" name="ChoixRQ15" class="custom-control-input" value="C"/>
                                        <label class="custom-control-label" for="customRadio15_3">C. Nous nous sommes dis au revoir</label>
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
                                <h6 class="text-center mt-3">TEST CAPACITE REDACTIONNELLE</h6>
                                <hr>
                                <h5 class="mb-0"><span class="badge bg-transparent w-100">1.&nbsp&nbsp ORTHOGRAPHE</span></h5>
                                <hr>                          
                                <h5 class="mt-0"><span class="badge bg-secondary w-100">Question 16 / 20</span></h5>
                                <hr>
                                <h6 class="text-sm-left">
                                    <strong>16°) </strong>Quelle est la forme correcte ?
                                </h6>
                                <div class="mt-2">
                                    <div class="custom-control custom-radio mb-5">
                                        <input type="radio" id="customRadio16_1" name="ChoixRQ16" class="custom-control-input" value="A"/>
                                        <label class="custom-control-label" for="customRadio16_1">A. Intercomunalité</label>
                                    </div>
                                    <div class="custom-control custom-radio mb-5">
                                        <input type="radio" id="customRadio16_2" name="ChoixRQ16" class="custom-control-input" value="B"/>
                                        <label class="custom-control-label" for="customRadio16_2">B. Intercommunnalité</label>
                                    </div>
                                    <div class="custom-control custom-radio mb-5">
                                        <input type="radio" id="customRadio16_3" name="ChoixRQ16" class="custom-control-input" value="C"/>
                                        <label class="custom-control-label" for="customRadio16_3">C. Intercommunalité</label>
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
                                <h6 class="text-center mt-3">TEST CAPACITE REDACTIONNELLE</h6>
                                <hr>
                                <h5 class="mb-0"><span class="badge bg-transparent w-100">1.&nbsp&nbsp ORTHOGRAPHE</span></h5>
                                <hr>                          
                                <h5 class="mt-0"><span class="badge bg-secondary w-100">Question 17 / 20</span></h5>
                                <hr>
                                <h6 class="text-sm-left">
                                    <strong>17°) </strong>Quelle est la forme incorrecte ?
                                </h6>
                                <div class="mt-2">
                                    <div class="custom-control custom-radio mb-5">
                                        <input type="radio" id="customRadio17_1" name="ChoixRQ17" class="custom-control-input" value="A"/>
                                        <label class="custom-control-label" for="customRadio17_1">A. Voici la liste des gens auxquels vous devez téléphoner</label>
                                    </div>
                                    <div class="custom-control custom-radio mb-5">
                                        <input type="radio" id="customRadio17_2" name="ChoixRQ17" class="custom-control-input" value="B"/>
                                        <label class="custom-control-label" for="customRadio17_2">B. Est-ce bien de votre projet dont il est question dans ce rapport ?</label>
                                    </div>
                                    <div class="custom-control custom-radio mb-5">
                                        <input type="radio" id="customRadio17_3" name="ChoixRQ17" class="custom-control-input" value="C"/>
                                        <label class="custom-control-label" for="customRadio17_3">C. Le candidat pour lequel nous avons voté semble compétent</label>
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
                                <h6 class="text-center mt-3">TEST CAPACITE REDACTIONNELLE</h6>
                                <hr>
                                <h5 class="mb-0"><span class="badge bg-transparent w-100">1.&nbsp&nbsp ORTHOGRAPHE</span></h5>
                                <hr>                          
                                <h5 class="mt-0"><span class="badge bg-secondary w-100">Question 18 / 20</span></h5>
                                <hr>
                                <h6 class="text-sm-left">
                                    <strong>18°) </strong>Quelle est la forme correcte ?
                                </h6>
                                <div class="mt-2">
                                    <div class="custom-control custom-radio mb-5">
                                        <input type="radio" id="customRadio18_1" name="ChoixRQ18" class="custom-control-input" value="A"/>
                                        <label class="custom-control-label" for="customRadio18_1">A. Un épilogue, un épithète, une épitaphe</label>
                                    </div>
                                    <div class="custom-control custom-radio mb-5">
                                        <input type="radio" id="customRadio18_2" name="ChoixRQ18" class="custom-control-input" value="B"/>
                                        <label class="custom-control-label" for="customRadio18_2">B. Un épilogue, une épithète, une épitaphe</label>
                                    </div>
                                    <div class="custom-control custom-radio mb-5">
                                        <input type="radio" id="customRadio18_3" name="ChoixRQ18" class="custom-control-input" value="C"/>
                                        <label class="custom-control-label" for="customRadio18_3">C. Une épilogue, une épithète, une épitaphe</label>
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
                                <h6 class="text-center mt-3">TEST CAPACITE REDACTIONNELLE</h6>
                                <hr>
                                <h5 class="mb-0"><span class="badge bg-transparent w-100">1.&nbsp&nbsp ORTHOGRAPHE</span></h5>
                                <hr>                          
                                <h5 class="mt-0"><span class="badge bg-secondary w-100">Question 19 / 20</span></h5>
                                <hr>
                                <h6 class="text-sm-left">
                                    <strong>19°) </strong>Quelle est la forme correcte ?
                                </h6>
                                <div class="mt-2">
                                    <div class="custom-control custom-radio mb-5">
                                        <input type="radio" id="customRadio19_1" name="ChoixRQ19" class="custom-control-input" value="A"/>
                                        <label class="custom-control-label" for="customRadio19_1">A. Les conclusions que la Commission a adoptées</label>
                                    </div>
                                    <div class="custom-control custom-radio mb-5">
                                        <input type="radio" id="customRadio19_2" name="ChoixRQ19" class="custom-control-input" value="B"/>
                                        <label class="custom-control-label" for="customRadio19_2">B. Les conclusions que la Commission a adoptée</label>
                                    </div>
                                    <div class="custom-control custom-radio mb-5">
                                        <input type="radio" id="customRadio19_3" name="ChoixRQ19" class="custom-control-input" value="C"/>
                                        <label class="custom-control-label" for="customRadio19_3">C. Les conclusions que la Commission a adopté</label>
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
                                <h6 class="text-center mt-3">TEST CAPACITE REDACTIONNELLE</h6>
                                <hr>
                                <h5 class="mb-0"><span class="badge bg-transparent w-100">1.&nbsp&nbsp ORTHOGRAPHE</span></h5>
                                <hr>                          
                                <h5 class="mt-0"><span class="badge bg-secondary w-100">Question 20 / 20</span></h5>
                                <hr>
                                <h6 class="text-sm-left">
                                    <strong>20°) </strong>Cochez la ou les cases correspondant aux phrases incorrectement orthographiées.
                                </h6>
                                <div class="mt-2">
                                        <div class="custom-control custom-checkbox mb-5">
                                            <input type="checkbox" class="custom-control-input" id="customCheck20_1" name="CheckRQ20_1" value="A"/>
                                            <label class="custom-control-label" for="customCheck20_1">A. Les quatre coups de fusils s'étaient succédé avec une rapidité incroyable</label>                      
                                        </div>
                                        <div class="custom-control custom-checkbox mb-5">
                                            <input type="checkbox" class="custom-control-input"
                                                id="customCheck20_2" name="CheckRQ20_2" value="B"/>
                                            <label class="custom-control-label" for="customCheck20_2">B. Leurs cravates se roulaient en cordes aussitôt qu'ils se les étaient attachées.</label>
                                        </div> 
                                        <div class="custom-control custom-checkbox mb-5">
                                            <input type="checkbox" class="custom-control-input"
                                                id="customCheck20_3" name="CheckRQ20_3" value="C"/>
                                            <label class="custom-control-label" for="customCheck20_3">C. Désespérément, ils se sont jetés à la mer.</label>
                                        </div>
                                        <div class="custom-control custom-checkbox mb-5">
                                            <input type="checkbox" class="custom-control-input"
                                                id="customCheck20_4" name="CheckRQ20_4" value="D"/>
                                            <label class="custom-control-label" for="customCheck20_4">D. Les maîtres se sont arrogés le droit de disposer d'autres êtres humains.</label>
                                        </div>
                                        <div class="custom-control custom-checkbox mb-5">
                                            <input type="checkbox" class="custom-control-input"
                                                id="customCheck20_5" name="CheckRQ20_5" value="E"/>
                                            <label class="custom-control-label" for="customCheck20_5">E. La fillette s'était laissée glisser sur la pente.</label>
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

                    <!-- GRAMMAIRE -->

                    <div class="row" id="Q21">
                        <div class="col-sm-12">
                            <div class="mb-0 h-75">
                                <h6 class="text-center mt-3">TEST CAPACITE REDACTIONNELLE</h6>
                                <hr>
                                <h5 class="mb-0"><span class="badge bg-transparent w-100">2.&nbsp&nbsp GRAMMAIRE</span></h5>
                                <hr>                          
                                <h5 class="mt-0"><span class="badge bg-secondary w-100">Question 1 / 20</span></h5>
                                <hr>
                                <h6 class="text-sm-left">
                                    <strong>1°) </strong>C’est toi qui...le meilleur
                                </h6>
                                    <div class="mt-2">
                                        <div class="custom-control custom-radio mb-5">
                                            <input type="radio" id="customRadio1" name="ChoixRQ21" class="custom-control-input" value="A"/>
                                            <label class="custom-control-label" for="customRadio1">A. Es</label>
                                        </div>
                                        <div class="custom-control custom-radio mb-5">    
                                            <input type="radio" id="customRadio2" name="ChoixRQ21" class="custom-control-input" value="B"/>
                                            <label class="custom-control-label" for="customRadio2">B. Est</label>
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
            
                    <div class="row" id="Q22">
                        <div class="col-sm-12">
                            <div class="mb-0 h-75">
                                <h6 class="text-center mt-3">TEST CAPACITE REDACTIONNELLE</h6>
                                <hr>
                                <h5 class="mb-0"><span class="badge bg-transparent w-100">2.&nbsp&nbsp GRAMMAIRE</span></h5>
                                <hr>                          
                                <h5 class="mt-0"><span class="badge bg-secondary w-100">Question 2 / 20</span></h5>
                                <hr>
                                <h6 class="text-sm-left">
                                    <strong>2°) </strong>La centaine d’euros qui me...
                                </h6>
                                <div class="mt-2">
                                <div class="custom-control custom-radio mb-5">
                                    <input type="radio" id="customRadio5" name="ChoixRQ22" class="custom-control-input" value="A"/>
                                    <label class="custom-control-label" for="customRadio5">A. Manque</label>
                                </div>
                                <div class="custom-control custom-radio mb-5">    
                                    <input type="radio" id="customRadio6" name="ChoixRQ22" class="custom-control-input" value="B"/>
                                    <label class="custom-control-label" for="customRadio6">B. Manquent</label>
                                </div>
                                <div class="custom-control custom-radio mb-5">
                                    <input type="radio" id="customRadio7" name="ChoixRQ22" class="custom-control-input" value="C"/>
                                    <label class="custom-control-label" for="customRadio7">C. Manque/manquent</label>
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

                    <div class="row" id="Q23">
                        <div class="col-sm-12">
                            <div class="mb-0 h-75">
                                <h6 class="text-center mt-3">TEST CAPACITE REDACTIONNELLE</h6>
                                <hr>
                                <h5 class="mb-0"><span class="badge bg-transparent w-100">2.&nbsp&nbsp GRAMMAIRE</span></h5>
                                <hr>                          
                                <h5 class="mt-0"><span class="badge bg-secondary w-100">Question 3 / 20</span></h5>
                                <hr>
                                <h6 class="text-sm-left">
                                    <strong>3°)</strong>Une foule de badauds 
                                </h6>
                                <div class="mt-2">
                                    <div class="custom-control custom-radio mb-5">
                                        <input type="radio" id="customRadio9" name="ChoixRQ23" class="custom-control-input" value="A"/>
                                        <label class="custom-control-label" for="customRadio9">A. S’est précipitée</label>
                                    </div>
                                    <div class="custom-control custom-radio mb-5">
                                        <input type="radio" id="customRadio10" name="ChoixRQ23" class="custom-control-input" value="B"/>
                                        <label class="custom-control-label" for="customRadio10">B. Se sont précipités</label>
                                    </div>
                                    <div class="custom-control custom-radio mb-5">
                                        <input type="radio" id="customRadio12" name="ChoixRQ23" class="custom-control-input" value="C"/>
                                        <label class="custom-control-label" for="customRadio12">C. S’est précipitée/ Se sont précipités</label>
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

                    <div class="row" id="Q24">
                        <div class="col-sm-12">
                            <div class="mb-0 h-75">
                                <h6 class="text-center mt-3">TEST CAPACITE REDACTIONNELLE</h6>
                                <hr>
                                <h5 class="mb-0"><span class="badge bg-transparent w-100">2.&nbsp&nbsp GRAMMAIRE</span></h5>
                                <hr>                          
                                <h5 class="mt-0"><span class="badge bg-secondary w-100">Question 4 / 20</span></h5>
                                <hr>
                                <h6 class="text-sm-left">
                                    <strong>4°)</strong>Sélectionnez la bonne forme conjuguée avec e ou t au subjonctif présent. Qu’il...
                                </h6>
                                <div class="mt-2">
                                <div class="custom-control custom-radio mb-5">
                                    <input type="radio" id="customRadio13" name="ChoixRQ24" class="custom-control-input" value="A"/>
                                    <label class="custom-control-label" for="customRadio13">A. Aie</label>
                                </div>
                                <div class="custom-control custom-radio mb-5">
                                    <input type="radio" id="customRadio14" name="ChoixRQ24" class="custom-control-input" value="B"/>
                                    <label class="custom-control-label" for="customRadio14">B. Ait</label>
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

                    <div class="row" id="Q25">
                        <div class="col-sm-12">
                            <div class="mb-0 h-75">
                                <h6 class="text-center mt-3">TEST CAPACITE REDACTIONNELLE</h6>
                                <hr>
                                <h5 class="mb-0"><span class="badge bg-transparent w-100">2.&nbsp&nbsp GRAMMAIRE</span></h5>
                                <hr>                          
                                <h5 class="mt-0"><span class="badge bg-secondary w-100">Question 5 / 20</span></h5>
                                <hr>
                                <h6 class="text-sm-left">
                                    <strong>5°) </strong>Sélectionnez la bonne forme conjuguée avec e ou t au subjonctif présent. Qu’il... 
                                </h6>
                                <div class="mt-2">
                                    <div class="custom-control custom-radio mb-5">
                                        <input type="radio" id="customRadio17" name="ChoixRQ25" class="custom-control-input" value="A"/>
                                        <label class="custom-control-label" for="customRadio17">A. Acquiert</label>
                                    </div>
                                    <div class="custom-control custom-radio mb-5">
                                        <input type="radio" id="customRadio18" name="ChoixRQ25" class="custom-control-input" value="B"/>
                                        <label class="custom-control-label" for="customRadio18">B. Acquierre</label>
                                    </div>
                                    <div class="custom-control custom-radio mb-5">    
                                        <input type="radio" id="customRadio19" name="ChoixRQ25" class="custom-control-input" value="C"/>
                                        <label class="custom-control-label" for="customRadio19">C. Acquière</label>
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

                    <div class="row" id="Q26">
                        <div class="col-sm-12">
                            <div class="mb-0 h-75">
                                <h6 class="text-center mt-3">TEST CAPACITE REDACTIONNELLE</h6>
                                <hr>
                                <h5 class="mb-0"><span class="badge bg-transparent w-100">2.&nbsp&nbsp GRAMMAIRE</span></h5>
                                <hr>                          
                                <h5 class="mt-0"><span class="badge bg-secondary w-100">Question 6 / 20</span></h5>
                                <hr>
                                <h6 class="text-sm-left">
                                    <strong>6°) </strong>Sélectionnez la bonne forme conjuguée avec ou sans e au futur. Il...
                                </h6>
                                <div class="mt-2">
                                    <div class="custom-control custom-radio mb-5">
                                        <input type="radio" id="customRadio21" name="ChoixRQ26" class="custom-control-input" value="A"/>
                                        <label class="custom-control-label" for="customRadio21">A. Concluera</label>
                                    </div>
                                    <div class="custom-control custom-radio mb-5">
                                        <input type="radio" id="customRadio22" name="ChoixRQ26" class="custom-control-input" value="B"/>
                                        <label class="custom-control-label" for="customRadio22">B. Conclura</label>
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

                    <div class="row" id="Q27">
                        <div class="col-sm-12">
                            <div class="mb-0 h-75">
                                <h6 class="text-center mt-3">TEST CAPACITE REDACTIONNELLE</h6>
                                <hr>
                                <h5 class="mb-0"><span class="badge bg-transparent w-100">2.&nbsp&nbsp GRAMMAIRE</span></h5>
                                <hr>                          
                                <h5 class="mt-0"><span class="badge bg-secondary w-100">Question 7 / 20</span></h5>
                                <hr>
                                <h6 class="text-sm-left">
                                    <strong>7°) </strong>Sélectionnez la bonne forme conjuguée avec ou sans e au futur. Il...
                                </h6>
                                <div class="mt-2">
                                    <div class="custom-control custom-radio mb-5">
                                        <input type="radio" id="customRadio25" name="ChoixRQ27" class="custom-control-input" value="A"/>
                                        <label class="custom-control-label" for="customRadio25">A. Créra</label>
                                    </div>
                                    <div class="custom-control custom-radio mb-5">
                                        <input type="radio" id="customRadio26" name="ChoixRQ27" class="custom-control-input" value="B"/>
                                        <label class="custom-control-label" for="customRadio26">B. Créera</label>
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

                    <div class="row" id="Q28">
                        <div class="col-sm-12">
                            <div class="mb-0 h-75">
                                <h6 class="text-center mt-3">TEST CAPACITE REDACTIONNELLE</h6>
                                <hr>
                                <h5 class="mb-0"><span class="badge bg-transparent w-100">2.&nbsp&nbsp GRAMMAIRE</span></h5>
                                <hr>                          
                                <h5 class="mt-0"><span class="badge bg-secondary w-100">Question 8 / 20</span></h5>
                                <hr>
                                <h6 class="text-sm-left">
                                    <strong>8°) </strong>Sélectionnez la bonne forme conjuguée avec ou sans i au subjonctif présent que nous...
                                </h6>
                                <div class="mt-2">
                                    <div class="custom-control custom-radio mb-5">
                                        <input type="radio" id="customRadio29" name="ChoixRQ28" class="custom-control-input" value="A"/>
                                        <label class="custom-control-label" for="customRadio29">A. Copiions</label>
                                    </div>
                                    <div class="custom-control custom-radio mb-5">
                                        <input type="radio" id="customRadio30" name="ChoixRQ28" class="custom-control-input" value="B"/>
                                        <label class="custom-control-label" for="customRadio30">B.Copions</label>
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

                    <div class="row" id="Q29">
                        <div class="col-sm-12">
                            <div class="mb-0 h-75">
                                <h6 class="text-center mt-3">TEST CAPACITE REDACTIONNELLE</h6>
                                <hr>
                                <h5 class="mb-0"><span class="badge bg-transparent w-100">2.&nbsp&nbsp GRAMMAIRE</span></h5>
                                <hr>                          
                                <h5 class="mt-0"><span class="badge bg-secondary w-100">Question 9 / 20</span></h5>
                                <hr>
                                <h6 class="text-sm-left">
                                    <strong>9°) </strong>Sélectionnez la bonne forme conjuguée avec ou sans i au subjonctif présent que nous...
                                </h6>
                                <div class="mt-2">
                                    <div class="custom-control custom-radio mb-5">
                                        <input type="radio" id="customRadio33" name="ChoixRQ29" class="custom-control-input" value="A"/>
                                        <label class="custom-control-label" for="customRadio33">A. Gagnions</label>
                                    </div>
                                    <div class="custom-control custom-radio mb-5">
                                        <input type="radio" id="customRadio34" name="ChoixRQ29" class="custom-control-input" value="B"/>
                                        <label class="custom-control-label" for="customRadio34">B. Gagnons</label>
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

                    <div class="row" id="Q30">
                        <div class="col-sm-12">
                            <div class="mb-0 h-75">
                                <h6 class="text-center mt-3">TEST CAPACITE REDACTIONNELLE</h6>
                                <hr>
                                <h5 class="mb-0"><span class="badge bg-transparent w-100">2.&nbsp&nbsp GRAMMAIRE</span></h5>
                                <hr>                          
                                <h5 class="mt-0"><span class="badge bg-secondary w-100">Question 10 / 20</span></h5>
                                <hr>
                                <h6 class="text-sm-left">
                                    <strong>10°) </strong>Sélectionnez la bonne forme conjuguée. Vous...
                                </h6>
                                <div class="mt-2">
                                    <div class="custom-control custom-radio mb-5">
                                        <input type="radio" id="customRadio37" name="ChoixRQ30" class="custom-control-input" value="A"/>
                                        <label class="custom-control-label" for="customRadio37">A. Metteriez</label>
                                    </div>
                                    <div class="custom-control custom-radio mb-5">
                                        <input type="radio" id="customRadio38" name="ChoixRQ30" class="custom-control-input" value="B"/>
                                        <label class="custom-control-label" for="customRadio38">B. Mettriez</label>
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

                    <div class="row" id="Q31">
                        <div class="col-sm-12">
                            <div class="mb-0 h-75">
                                <h6 class="text-center mt-3">TEST CAPACITE REDACTIONNELLE</h6>
                                <hr>
                                <h5 class="mb-0"><span class="badge bg-transparent w-100">2.&nbsp&nbsp GRAMMAIRE</span></h5>
                                <hr>                          
                                <h5 class="mt-0"><span class="badge bg-secondary w-100">Question 11 / 20</span></h5>
                                <hr>
                                <h6 class="text-sm-left">
                                    <strong>11°) </strong>Je parle à Jean et à Pierre en même temps.
                                </h6>
                                <div class="mt-2">
                                    <div class="custom-control custom-radio mb-5">
                                        <input type="radio" id="customRadio41" name="ChoixRQ31" class="custom-control-input" value="A"/>
                                        <label class="custom-control-label" for="customRadio41">A. lui</label>
                                    </div>
                                    <div class="custom-control custom-radio mb-5">
                                        <input type="radio" id="customRadio42" name="ChoixRQ31" class="custom-control-input" value="B"/>
                                        <label class="custom-control-label" for="customRadio42">B. le</label>
                                    </div>
                                    <div class="custom-control custom-radio mb-5">
                                        <input type="radio" id="customRadio43" name="ChoixRQ31" class="custom-control-input" value="C"/>
                                        <label class="custom-control-label" for="customRadio43">C. les</label>
                                    </div>
                                    <div class="custom-control custom-radio mb-5">
                                        <input type="radio" id="customRadio44" name="ChoixRQ31" class="custom-control-input" value="D"/>
                                        <label class="custom-control-label" for="customRadio44">D. leur</label>
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

                    <div class="row" id="Q32">
                        <div class="col-sm-12">
                            <div class="mb-0 h-75">
                                <h6 class="text-center mt-3">TEST CAPACITE REDACTIONNELLE</h6>
                                <hr>
                                <h5 class="mb-0"><span class="badge bg-transparent w-100">2.&nbsp&nbsp GRAMMAIRE</span></h5>
                                <hr>                          
                                <h5 class="mt-0"><span class="badge bg-secondary w-100">Question 12 / 20</span></h5>
                                <hr>
                                <h6 class="text-sm-left">
                                    <strong>12°) </strong>Il m’achètera <u>ce dictionnaire</u>.
                                </h6>
                                <div class="mt-2">
                                <div class="custom-control custom-radio mb-5">
                                    <input type="radio" id="customRadio45" name="ChoixRQ32" class="custom-control-input" value="A"/>
                                    <label class="custom-control-label" for="customRadio45">A. le m’</label>
                                </div>
                                <div class="custom-control custom-radio mb-5">
                                    <input type="radio" id="customRadio46" name="ChoixRQ32" class="custom-control-input" value="B"/>
                                    <label class="custom-control-label" for="customRadio46">B. me l’</label>
                                </div>
                                <div class="custom-control custom-radio mb-5">
                                    <input type="radio" id="customRadio47" name="ChoixRQ32" class="custom-control-input" value="C"/>
                                    <label class="custom-control-label" for="customRadio47">C. lui m’</label>
                                </div>
                                <div class="custom-control custom-radio mb-5">
                                    <input type="radio" id="customRadio48" name="ChoixRQ32" class="custom-control-input" value="D"/>
                                    <label class="custom-control-label" for="customRadio48">D. me lui</label>
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

                    <div class="row" id="Q33">
                        <div class="col-sm-12">
                            <div class="mb-0 h-75">
                                <h6 class="text-center mt-3">TEST CAPACITE REDACTIONNELLE</h6>
                                <hr>
                                <h5 class="mb-0"><span class="badge bg-transparent w-100">2.&nbsp&nbsp GRAMMAIRE</span></h5>
                                <hr>                          
                                <h5 class="mt-0"><span class="badge bg-secondary w-100">Question 13 / 20</span></h5>
                                <hr>
                                <h6 class="text-sm-left">
                                    <strong>13°) </strong>Vous avez réfléchi à <u>ce problème</u>.
                                </h6>
                                <div class="mt-2">
                                    <div class="custom-control custom-radio mb-5">
                                        <input type="radio" id="customRadio49" name="ChoixRQ33" class="custom-control-input" value="A"/>
                                        <label class="custom-control-label" for="customRadio49">A. vous lui avez réfléchi</label>
                                    </div>
                                    <div class="custom-control custom-radio mb-5">
                                        <input type="radio" id="customRadio50" name="ChoixRQ33" class="custom-control-input" value="B"/>
                                        <label class="custom-control-label" for="customRadio50">B. vous y avez réfléchi</label>
                                    </div>
                                    <div class="custom-control custom-radio mb-5">
                                        <input type="radio" id="customRadio51" name="ChoixRQ33" class="custom-control-input" value="C"/>
                                        <label class="custom-control-label" for="customRadio51">C. vous avez lui réfléchi</label>
                                    </div>
                                    <div class="custom-control custom-radio mb-5">
                                        <input type="radio" id="customRadio52" name="ChoixRQ33" class="custom-control-input" value="D"/>
                                        <label class="custom-control-label" for="customRadio52">D. vous avez y réfléchi</label>
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

                    <div class="row" id="Q34">
                        <div class="col-sm-12">
                            <div class="mb-0 h-75">
                                <h6 class="text-center mt-3">TEST CAPACITE REDACTIONNELLE</h6>
                                <hr>
                                <h5 class="mb-0"><span class="badge bg-transparent w-100">2.&nbsp&nbsp GRAMMAIRE</span></h5>
                                <hr>                          
                                <h5 class="mt-0"><span class="badge bg-secondary w-100">Question 14 / 20</span></h5>
                                <hr>
                                <h6 class="text-sm-left">
                                    <strong>14°) </strong>Passez-moi, s’il vous plaît, <u>mes lunettes</u>.
                                </h6>
                                <div class="mt-2">
                                    <div class="custom-control custom-radio mb-5">
                                        <input type="radio" id="customRadio53" name="ChoixRQ34" class="custom-control-input" value="A"/>
                                        <label class="custom-control-label" for="customRadio53">A. Les passez-moi</label>
                                    </div>
                                    <div class="custom-control custom-radio mb-5">
                                        <input type="radio" id="customRadio54" name="ChoixRQ34" class="custom-control-input" value="B"/>
                                        <label class="custom-control-label" for="customRadio54">B. Passez-moi-les</label>
                                    </div>
                                    <div class="custom-control custom-radio mb-5">
                                        <input type="radio" id="customRadio55" name="ChoixRQ34" class="custom-control-input" value="C"/>
                                        <label class="custom-control-label" for="customRadio55">C. Me les passez</label>
                                    </div>
                                    <div class="custom-control custom-radio mb-5">
                                        <input type="radio" id="customRadio56" name="ChoixRQ34" class="custom-control-input" value="D"/>
                                        <label class="custom-control-label" for="customRadio56">D. Passez-les-moi</label>
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

                    <div class="row" id="Q35">
                        <div class="col-sm-12">
                            <div class="mb-0 h-75">
                                <h6 class="text-center mt-3">TEST CAPACITE REDACTIONNELLE</h6>
                                <hr>
                                <h5 class="mb-0"><span class="badge bg-transparent w-100">2.&nbsp&nbsp GRAMMAIRE</span></h5>
                                <hr>                          
                                <h5 class="mt-0"><span class="badge bg-secondary w-100">Question 15 / 20</span></h5>
                                <hr>
                                <h6 class="text-sm-left">
                                    <strong>15°) </strong>Nous allons reconduire <u>nos amis à l’hôtel</u>.
                                </h6>
                                <div class="mt-2">
                                    <div class="custom-control custom-radio mb-5">
                                        <input type="radio" id="customRadio57" name="ChoixRQ35" class="custom-control-input" value="A"/>
                                        <label class="custom-control-label" for="customRadio57">A. Nous allons les y reconduire.</label>
                                    </div>
                                    <div class="custom-control custom-radio mb-5">
                                        <input type="radio" id="customRadio58" name="ChoixRQ35" class="custom-control-input" value="B"/>
                                        <label class="custom-control-label" for="customRadio58">B. Nous les y allons reconduire.</label>
                                    </div>
                                    <div class="custom-control custom-radio mb-5">
                                        <input type="radio" id="customRadio59" name="ChoixRQ35" class="custom-control-input" value="C"/>
                                        <label class="custom-control-label" for="customRadio59">C. Nous les lui allons reconduire.</label>
                                    </div>
                                    <div class="custom-control custom-radio mb-5">
                                        <input type="radio" id="customRadio60" name="ChoixRQ35" class="custom-control-input" value="D"/>
                                        <label class="custom-control-label" for="customRadio60">D. Nous allons y les reconduire.</label>
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

                    <div class="row" id="Q36">
                        <div class="col-sm-12">
                            <div class="mb-0 h-75">
                                <h6 class="text-center mt-3">TEST CAPACITE REDACTIONNELLE</h6>
                                <hr>
                                <h5 class="mb-0"><span class="badge bg-transparent w-100">2.&nbsp&nbsp GRAMMAIRE</span></h5>
                                <hr>                          
                                <h5 class="mt-0"><span class="badge bg-secondary w-100">Question 16 / 20</span></h5>
                                <hr>
                                <h6 class="text-sm-left">
                                    <strong>16°) </strong>Pourquoi ne vous êtes-vous pas adressés <u>à cet homme</u> ?
                                </h6>
                                <div class="mt-2">
                                    <div class="custom-control custom-radio mb-5">
                                        <input type="radio" id="customRadio61" name="ChoixRQ36" class="custom-control-input" value="A"/>
                                        <label class="custom-control-label" for="customRadio61">A. Pourquoi ne vous lui êtes-vous pas adressés ?</label>
                                    </div>
                                    <div class="custom-control custom-radio mb-5">
                                        <input type="radio" id="customRadio62" name="ChoixRQ36" class="custom-control-input" value="B"/>
                                        <label class="custom-control-label" for="customRadio62">B. Pourquoi ne lui vous êtes-vous pas adressés ?</label>
                                    </div>
                                    <div class="custom-control custom-radio mb-5">
                                        <input type="radio" id="customRadio63" name="ChoixRQ36" class="custom-control-input" value="C"/>
                                        <label class="custom-control-label" for="customRadio63">C. Pourquoi ne vous êtes-vous pas adressés à lui ?</label>
                                    </div>
                                    <div class="custom-control custom-radio mb-5">
                                        <input type="radio" id="customRadio64" name="ChoixRQ36" class="custom-control-input" value="D"/>
                                        <label class="custom-control-label" for="customRadio64">D. Pourquoi ne vous êtes-vous-lui pas adressés ?</label>
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

                    <div class="row" id="Q37">
                        <div class="col-sm-12">
                            <div class="mb-0 h-75">
                                <h6 class="text-center mt-3">TEST CAPACITE REDACTIONNELLE</h6>
                                <hr>
                                <h5 class="mb-0"><span class="badge bg-transparent w-100">2.&nbsp&nbsp GRAMMAIRE</span></h5>
                                <hr>                          
                                <h5 class="mt-0"><span class="badge bg-secondary w-100">Question 17 / 20</span></h5>
                                <hr>
                                <h6 class="text-sm-left">
                                    <strong>17°) </strong>Ne lisez pas <u>cette lettre à sa mère</u>.
                                </h6>
                                <div class="mt-2">
                                    <div class="custom-control custom-radio mb-5">
                                        <input type="radio" id="customRadio65" name="ChoixRQ37" class="custom-control-input" value="A"/>
                                        <label class="custom-control-label" for="customRadio65">A. Ne lisez-la-lui pas</label>
                                    </div>
                                    <div class="custom-control custom-radio mb-5">
                                        <input type="radio" id="customRadio66" name="ChoixRQ37" class="custom-control-input" value="B"/>
                                        <label class="custom-control-label" for="customRadio66">B. Ne lui la lisez pas</label>
                                    </div>
                                    <div class="custom-control custom-radio mb-5">
                                        <input type="radio" id="customRadio67" name="ChoixRQ37" class="custom-control-input" value="C"/>
                                        <label class="custom-control-label" for="customRadio67">C. Ne lisez-lui-la pas</label>
                                    </div>
                                    <div class="custom-control custom-radio mb-5">
                                        <input type="radio" id="customRadio68" name="ChoixRQ37" class="custom-control-input" value="D"/>
                                        <label class="custom-control-label" for="customRadio68">D. Ne la lui lisez pas</label>
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

                    <div class="row" id="Q38">
                        <div class="col-sm-12">
                            <div class="mb-0 h-75">
                                <h6 class="text-center mt-3">TEST CAPACITE REDACTIONNELLE</h6>
                                <hr>
                                <h5 class="mb-0"><span class="badge bg-transparent w-100">2.&nbsp&nbsp GRAMMAIRE</span></h5>
                                <hr>                          
                                <h5 class="mt-0"><span class="badge bg-secondary w-100">Question 18 / 20</span></h5>
                                <hr>
                                <h6 class="text-sm-left">
                                    <strong>18°) </strong>Tu peux très bien te passer de cette visite.
                                </h6>
                                <div class="mt-2">
                                    <div class="custom-control custom-radio mb-5">
                                        <input type="radio" id="customRadio69" name="ChoixRQ38" class="custom-control-input" value="A"/>
                                        <label class="custom-control-label" for="customRadio69">A. Tu peux très bien t'en passer.</label>
                                    </div>
                                    <div class="custom-control custom-radio mb-5">
                                        <input type="radio" id="customRadio70" name="ChoixRQ38" class="custom-control-input" value="B"/>
                                        <label class="custom-control-label" for="customRadio70">B. Tu en peux très bien te passer.</label>
                                    </div>
                                    <div class="custom-control custom-radio mb-5">
                                        <input type="radio" id="customRadio71" name="ChoixRQ38" class="custom-control-input" value="C"/>
                                        <label class="custom-control-label" for="customRadio71">C. Tu peux très bien te passer d'en.</label>
                                    </div>
                                    <div class="custom-control custom-radio mb-5">
                                        <input type="radio" id="customRadio72" name="ChoixRQ38" class="custom-control-input" value="D"/>
                                        <label class="custom-control-label" for="customRadio72">D. Tu peux très bien en te passer.</label>
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

                    <div class="row" id="Q39">
                        <div class="col-sm-12">
                            <div class="mb-0 h-75">
                                <h6 class="text-center mt-3">TEST CAPACITE REDACTIONNELLE</h6>
                                <hr>
                                <h5 class="mb-0"><span class="badge bg-transparent w-100">2.&nbsp&nbsp GRAMMAIRE</span></h5>
                                <hr>                          
                                <h5 class="mt-0"><span class="badge bg-secondary w-100">Question 19 / 20</span></h5>
                                <hr>
                                <h6 class="text-sm-left">
                                    <strong>19°) </strong>Elle s’est abonnée à <u>deux journaux</u>.
                                </h6>
                                <div class="mt-2">
                                <div class="custom-control custom-radio mb-5">
                                    <input type="radio" id="customRadio73" name="ChoixRQ39" class="custom-control-input" value="A"/>
                                    <label class="custom-control-label" for="customRadio73">A. Elle se lui est abonnée.</label>
                                </div>
                                <div class="custom-control custom-radio mb-5">
                                    <input type="radio" id="customRadio74" name="ChoixRQ39" class="custom-control-input" value="B"/>
                                    <label class="custom-control-label" for="customRadio74">B. Elle y s’est abonnée</label>
                                </div>
                                <div class="custom-control custom-radio mb-5">
                                    <input type="radio" id="customRadio75" name="ChoixRQ39" class="custom-control-input" value="C"/>
                                    <label class="custom-control-label" for="customRadio75">C. Elle s’y est abonnée.</label>
                                </div>
                                <div class="custom-control custom-radio mb-5">
                                    <input type="radio" id="customRadio76" name="ChoixRQ39" class="custom-control-input" value="D"/>
                                    <label class="custom-control-label" for="customRadio76">D. Elle se lui est abonnée.</label>
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

                    <div class="row" id="Q40">
                        <div class="col-sm-12">
                            <div class="mb-0 h-75">
                                <h6 class="text-center mt-3">TEST CAPACITE REDACTIONNELLE</h6>
                                <hr>
                                <h5 class="mb-0"><span class="badge bg-transparent w-100">2.&nbsp&nbsp GRAMMAIRE</span></h5>
                                <hr>                          
                                <h5 class="mt-0"><span class="badge bg-secondary w-100">Question 20 / 20</span></h5>
                                <hr>
                                <h6 class="text-sm-left">
                                    <strong>20°) </strong>C’est à <u>Marie</u> que je m’adresse et non pas à <u>Jacques</u>.
                                </h6>
                                <div class="mt-2">
                                <div class="custom-control custom-radio mb-5">
                                    <input type="radio" id="customRadio77" name="ChoixRQ40" class="custom-control-input" value="A"/>
                                    <label class="custom-control-label" for="customRadio77">A. C’est à lui que je m’adresse et non pas à lui.</label>
                                </div>
                                <div class="custom-control custom-radio mb-5">
                                    <input type="radio" id="customRadio78" name="ChoixRQ40" class="custom-control-input" value="B"/>
                                    <label class="custom-control-label" for="customRadio78">B. C’est à elle que je m’adresse et non pas à elle.</label>
                                </div>
                                <div class="custom-control custom-radio mb-5">
                                    <input type="radio" id="customRadio79" name="ChoixRQ40" class="custom-control-input" value="C"/>
                                    <label class="custom-control-label" for="customRadio79">C. C’est à elle que je m’adresse et non pas à lui.</label>
                                </div>
                                <div class="custom-control custom-radio mb-5">
                                    <input type="radio" id="customRadio80" name="ChoixRQ40" class="custom-control-input" value="D"/>
                                    <label class="custom-control-label" for="customRadio80">D. C’est à elle que je me lui adresse et non pas.</label>
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
    <-- 1. ORTHOGRAPHE -->
    <div class="page-header mt-1">
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="title text-center">
                    <h4>1. Orthographe</h4>
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
                        1- Cochez la ou les cases incorrectement orthographiées.
                    </td>
                </tr>
                <tr>    
                    <td  id="t1_1">
                        A. Ils se sont succédé à la porte du Directeur
                        <span id="tQ1_1" hidden>A</span>
                    </td>
                    <td class="text-center" rowspan="4" width="200px">
                            <a href="#" class="btnhref"  id="btnQ" data-color="#265ed7" data-id="1"
                                ><i class="icon-copy dw dw-edit2"></i
                            ></a>
                    </td>                    
                </tr>
                <tr>
                    <td id="t1_2">
                        B. Ma famille, je l'ai faite venir.
                        <span id="tQ1_2" hidden>B</span>
                    </td>
                </tr>
                <tr>
                    <td id="t1_3">
                        C. L'expérience avait réussi au delà de mes espérances
                        <span id="tQ1_3" hidden>C</span>
                    </td>
                </tr>         
                <tr>
                    <td id="t1_4">
                        D. Après avoir bien mangé, ils se sont couchés
                        <span id="tQ1_4" hidden>D</span>
                    </td>
                </tr>
                <tr>
                    <td id="t1_5">
                        E. Je lui ai donné des fleurs, elle les a toutes jetés.
                        <span id="tQ1_5" hidden>E</span>
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
                        2- Quelle est la forme correcte ?
                    </td>
                </tr>
                <tr>    
                    <td id="t2_1">
                        A. Je souhaite qu’il conclue rapidement
                        <span id="tQ2_1" hidden>A</span>

                    </td>
                    <td class="text-center" rowspan="2" width="200px">
                            <a href="#" class="btnhref" id="btnQ" data-color="#265ed7" data-id="2"
                                ><i class="icon-copy dw dw-edit2"></i
                            ></a>
                    </td>                    
                </tr>
                <tr>
                    <td id="t2_2">
                        B. Je souhaite qu’il conclut rapidement
                        <span id="tQ2_2" hidden>B</span>
                    </td>
                </tr>                
                <tr>
                    <td id="t2_3">
                        C. Je souhaite qu’il conclût rapidement
                        <span id="tQ2_3" hidden>C</span>
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
                        3- Cochez la ou les cases correspondantes aux phrases correctement orthographiées.
                    </td>
                </tr>
                <tr>    
                    <td id="t3_1">
                        A. Voilà les domaines que s'étaient attribué le roi et sa suite.
                        <span id="tQ3_1" hidden>A</span>
                    </td>
                    <td class="text-center" rowspan="4" width="200px">
                            <a href="#" class="btnhref" id="btnQ" data-color="#265ed7"  data-id="3"
                                ><i class="icon-copy dw dw-edit2"></i
                            ></a>
                    </td>                    
                </tr>
                <tr>
                    <td id="t3_2">
                        B. Ils se sont longuement attaqués à la bête.
                        <span id="tQ3_2" hidden>B</span>
                    </td>
                </tr>
                <tr>
                    <td id="t3_3">
                        C. Durant les années qu'il avait vécu dans cette ville, il avait noué de solides amitiés.
                        <span id="tQ3_3" hidden>C</span>
                    </td>
                </tr>
                <tr>
                    <td id="t3_4">
                        D. Les allées qu'il avait eues à tracer lui avait donné bien du souci.
                        <span id="tQ3_4" hidden>D</span>
                    </td>
                </tr>
                <tr>
                    <td id="t3_5">
                        E. Nul ne pouvait dire les sommes que ce palais avait coûté.
                        <span id="tQ3_5" hidden>E</span>
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
                        4- Quelle est la forme correcte ?
                    </td>
                </tr>
                <tr>    
                    <td id="t4_1">
                        A. Ces deux discours nous ont plus
                        <span id="tQ4_1" hidden>A</span>
                    </td>
                    <td class="text-center" rowspan="2" width="200px">
                            <a href="#" class="btnhref" id="btnQ4" data-color="#265ed7"  data-id="4"
                                ><i class="icon-copy dw dw-edit2"></i
                            ></a>
                    </td>                    
                </tr>
                <tr>
                    <td id="t4_2">
                        B. Ces deux discours nous ont plu
                        <span id="tQ4_2" hidden>B</span>
                    </td>
                </tr>
                <tr>
                    <td id="t4_3">
                        C. Ces deux discours nous sont plus
                        <span id="tQ4_3" hidden>C</span>
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
                        5- Choisir une définition pour le mot «acception» :
                    </td>
                </tr>
                <tr>    
                    <td id="t5_1">
                        A. Signification
                        <span id="tQ5_1" hidden>A</span>
                    </td>
                    <td class="text-center" rowspan="2" width="200px">
                            <a href="#" class="btnhref" id="btnQ5" data-color="#265ed7"  data-id="5"
                                ><i class="icon-copy dw dw-edit2"></i
                            ></a>
                    </td>                    
                </tr>
                <tr>
                    <td id="t5_2">
                        B. Accentuation
                        <span id="tQ5_2" hidden>B</span>
                    </td>
                </tr>
                <tr>
                    <td id="t5_3">
                        C. Accord
                        <span id="tQ5_3" hidden>C</span>
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
                        6- Cochez la ou les cases correspondantes aux phrases incorrectement orthographiées.
                    </td>
                </tr>
                <tr>    
                    <td id="t6_1">
                        A. Sans s'être parlées, elles arrivèrent au tournant du chemin
                        <span id="tQ6_1" hidden>A</span>
                    </td>
                    <td class="text-center" rowspan="4" width="200px">
                            <a href="#" class="btnhref" id="btnQ6" data-color="#265ed7"  data-id="6"
                                ><i class="icon-copy dw dw-edit2"></i
                            ></a>
                    </td>                    
                </tr>
                <tr>
                    <td id="t6_2">
                        B. Je regrette les deux cents francs que ce livre m'a coutés
                        <span id="tQ6_2" hidden>B</span>
                    </td>
                </tr>
                <tr>
                    <td id="t6_3">
                        C. Elle rapporte un des livres que vous lui avez prêtée
                        <span id="tQ6_3" hidden>C</span>
                    </td>
                </tr>
                <tr>
                    <td id="t6_4">
                        D. Toutes les brindilles sèches s'étaient détachées.
                        <span id="tQ6_4" hidden>D</span>
                    </td>
                </tr> 
                <tr>
                    <td id="t6_5">
                        E. La piste que nous nous étions frayée avait disparu.
                        <span id="tQ6_5" hidden>E</span>
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
                        7- Complétez la phrase suivante : «...la copie de la lettre»
                    </td>
                </tr>
                <tr>    
                    <td id="t7_1">
                        A. ci-jointe
                        <span id="tQ7_1" hidden>A</span>
                    </td>
                    <td class="text-center" rowspan="2" width="200px">
                            <a href="#" class="btnhref" id="btnQ7" data-color="#265ed7"  data-id="7"
                                ><i class="icon-copy dw dw-edit2"></i
                            ></a>
                    </td>                    
                </tr>
                <tr>
                    <td id="t7_2">
                        B. ci-joint  
                        <span id="tQ7_2" hidden>B</span>
                    </td>
                </tr>
                <tr>
                    <td id="t7_3">
                        C. ci-joins
                        <span id="tQ7_3" hidden>C</span>
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
                        8- Cochez la ou les cases correctement orthographiées.
                    </td>
                </tr>
                <tr>    
                    <td id="t8_1">
                        A. Je pense aux rois qui se sont succédés sur le trône.
                        <span id="tQ8_1" hidden>A</span>
                    </td>
                    <td class="text-center" rowspan="4" width="200px">
                            <a href="#" class="btnhref" id="btnQ8" data-color="#265ed7"  data-id="8"
                                ><i class="icon-copy dw dw-edit2"></i
                            ></a>
                    </td>                    
                </tr>
                <tr>
                    <td id="t8_2">
                        B. Ils se sont extasié sur la beauté des lieux.  
                        <span id="tQ8_2" hidden>B</span>
                    </td>
                </tr>
                <tr>
                    <td id="t8_3">
                        C. Ce sont les musiciens que j'ai entendu jouer.
                        <span id="tQ8_3" hidden>C</span>
                    </td>
                </tr>
                <tr>
                    <td id="t8_4">
                        D. La mauvaise humeur qu'il a laissée voir est surprenante.
                        <span id="tQ8_4" hidden>D</span>
                    </td>
                </tr> 
                <tr>
                    <td id="t8_5">
                        E. Je regrette les suspicions qu'elle a faites naître.
                        <span id="tQ8_5" hidden>E</span>
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
                        9- Trouvez quel mot est mal orthographié
                    </td>
                </tr>
                <tr>    
                    <td id="t9_1">
                        A. Bizarerie
                        <span id="tQ9_1" hidden>A</span>
                    </td>
                    <td class="text-center" rowspan="4" width="200px">
                            <a href="#" class="btnhref" id="btnQ9" data-color="#265ed7"  data-id="9"
                                ><i class="icon-copy dw dw-edit2"></i
                            ></a>
                    </td>                    
                </tr>
                <tr>
                    <td id="t9_2">
                        B. Inaltérable  
                        <span id="tQ9_2" hidden>B</span>
                    </td>
                </tr>
                <tr>
                    <td id="t9_3">
                        C. Typhon
                        <span id="tQ9_3" hidden>C</span>
                    </td>
                </tr>
                <tr>
                    <td id="t9_4">
                        D. Acolyte
                        <span id="tQ9_4" hidden>D</span>
                    </td>
                </tr> 
                <tr>
                    <td id="t9_5">
                        E. Zonard
                        <span id="tQ9_5" hidden>E</span>
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
                        10- Trouvez quel mot est mal orthographié 
                    </td>
                </tr>
                <tr>    
                    <td id="t10_1">
                        A. Martyriser
                        <span id="tQ10_1" hidden>A</span>
                    </td>
                    <td class="text-center" rowspan="4" width="200px">
                            <a href="#" class="btnhref" id="btnQ10" data-color="#265ed7"  data-id="10"
                                ><i class="icon-copy dw dw-edit2"></i
                            ></a>
                    </td>                    
                </tr>
                <tr>
                    <td id="t10_2">
                        B. Sinode  
                        <span id="tQ10_2" hidden>B</span>
                    </td>
                </tr>
                <tr>
                    <td id="t10_3">
                        C. Frelater
                        <span id="tQ10_3" hidden>C</span>
                    </td>
                </tr>
                <tr>
                    <td id="t10_4">
                        D. Collusion
                        <span id="tQ10_4" hidden>D</span>
                    </td>
                </tr>
                <tr>
                    <td id="t10_5">
                        E. Imputrescible
                        <span id="tQ10_5" hidden>E</span>
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
                        11- Quelle est la forme correcte ? 
                    </td>
                </tr>
                <tr>    
                    <td id="t11_1">
                        A. Quelques soient les conséquences
                        <span id="tQ11_1" hidden>A</span>
                    </td>
                    <td class="text-center" rowspan="2" width="200px">
                            <a href="#" class="btnhref" id="btnQ11" data-color="#265ed7"  data-id="11"
                                ><i class="icon-copy dw dw-edit2"></i
                            ></a>
                    </td>                    
                </tr>
                <tr>
                    <td id="t11_2">
                        B. Quelles que soient les conséquences  
                        <span id="tQ11_2" hidden>B</span>
                    </td>
                </tr>
                <tr>
                    <td id="t11_3">
                        C. Quel que soit les conséquences
                        <span id="tQ11_3" hidden>C</span>
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
                        12- Quelle est la forme correcte ? 
                    </td>
                </tr>
                <tr>    
                    <td id="t12_1">
                        A. Huit cent millions deux cent quatre-vingt mille six cents euros
                        <span id="tQ12_1" hidden>A</span>
                    </td>
                    <td class="text-center" rowspan="2" width="200px">
                            <a href="#" class="btnhref" id="btnQ12" data-color="#265ed7"  data-id="12"
                                ><i class="icon-copy dw dw-edit2"></i
                            ></a>
                    </td>                    
                </tr>
                <tr>
                    <td id="t12_2">
                        B. Huit cents millions deux cent quatre vingts mille six cents euros  
                        <span id="tQ12_2" hidden>B</span>
                    </td>
                </tr>
                <tr>
                    <td id="t12_3">
                        C. Huit cent millions deux cent quatre-vingt milles six cent euros
                        <span id="tQ12_3" hidden>C</span>
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
                        13- Trouvez quel mot est mal orthographié 
                    </td>
                </tr>
                <tr>    
                    <td id="t13_1">
                        A. Tzigane
                        <span id="tQ13_1" hidden>A</span>
                    </td>
                    <td class="text-center" rowspan="4" width="200px">
                            <a href="#" class="btnhref" id="btnQ13" data-color="#265ed7"  data-id="13"
                                ><i class="icon-copy dw dw-edit2"></i
                            ></a>
                    </td>                    
                </tr>
                <tr>
                    <td id="t13_2">
                        B. Instantané  
                        <span id="tQ13_2" hidden>B</span>
                    </td>
                </tr>
                <tr>
                    <td id="t13_3">
                        C. Eflorescence
                        <span id="tQ13_3" hidden>C</span>
                    </td>
                </tr>
                <tr>
                    <td id="t13_4">
                        D. Malhonnête
                        <span id="tQ13_4" hidden>D</span>
                    </td>
                </tr>
                <tr>
                    <td id="t13_5">
                        E. Imprudemment
                        <span id="tQ13_5" hidden>E</span>
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
                        14- Trouvez quel mot est mal orthographié
                    </td>
                </tr>
                <tr>    
                    <td id="t14_1">
                        A. Bivouac
                        <span id="tQ14_1" hidden>A</span>
                    </td>
                    <td class="text-center" rowspan="4" width="200px">
                            <a href="#" class="btnhref" id="btnQ14" data-color="#265ed7"  data-id="14"
                                ><i class="icon-copy dw dw-edit2"></i
                            ></a>
                    </td>                    
                </tr>
                <tr>
                    <td id="t14_2">
                        B. Afable  
                        <span id="tQ14_2" hidden>B</span>
                    </td>
                </tr>
                <tr>
                    <td id="t14_3">
                        C. Animosité
                        <span id="tQ14_3" hidden>C</span>
                    </td>
                </tr>
                <tr>
                    <td id="t14_4">
                        D. Zeppelin
                        <span id="tQ14_4" hidden>D</span>
                    </td>
                </tr> 
                <tr>
                    <td id="t14_5">
                        E. Terrifier
                        <span id="tQ14_5" hidden>E</span>
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
                        15- Quelle est la forme correcte ?
                    </td>
                </tr>
                <tr>    
                    <td id="t15_1">
                        A. Nous nous sommes dit au revoir
                        <span id="tQ15_1" hidden>A</span>
                    </td>
                    <td class="text-center" rowspan="2" width="200px">
                            <a href="#" class="btnhref" id="btnQ15" data-color="#265ed7"  data-id="15"
                                ><i class="icon-copy dw dw-edit2"></i
                            ></a>
                    </td>                    
                </tr>
                <tr>
                    <td id="t15_2">
                        B. Nous nous sommes dits au revoir  
                        <span id="tQ15_2" hidden>B</span>
                    </td>
                </tr>
                <tr>
                    <td id="t15_3">
                        C. Nous nous sommes dis au revoir
                        <span id="tQ15_3" hidden>C</span>
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
                        16- Quelle est la forme correcte ?
                    </td>
                </tr>
                <tr>    
                    <td id="t16_1">
                        A. Intercomunalité
                        <span id="tQ16_1" hidden>A</span>
                    </td>
                    <td class="text-center" rowspan="2" width="200px">
                            <a href="#" class="btnhref" id="btnQ16" data-color="#265ed7"  data-id="16"
                                ><i class="icon-copy dw dw-edit2"></i
                            ></a>
                    </td>                    
                </tr>
                <tr>
                    <td id="t16_2">
                        B. Intercommunnalité  
                        <span id="tQ16_2" hidden>B</span>
                    </td>
                </tr>
                <tr>
                    <td id="t16_3">
                        C. Intercommunalité
                        <span id="tQ16_3" hidden>C</span>
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
                        17- Quelle est la forme incorrecte ?
                    </td>
                </tr>
                <tr>    
                    <td id="t17_1">
                        A. Voici la liste des gens auxquels vous devez téléphoner
                        <span id="tQ17_1" hidden>A</span>
                    </td>
                    <td class="text-center" rowspan="2" width="200px">
                            <a href="#" class="btnhref" id="btnQ17" data-color="#265ed7"  data-id="17"
                                ><i class="icon-copy dw dw-edit2"></i
                            ></a>
                    </td>                    
                </tr>
                <tr>
                    <td id="t17_2">
                        B. Est-ce bien de votre projet dont il est question dans ce rapport ?  
                        <span id="tQ17_2" hidden>B</span>
                    </td>
                </tr>
                <tr>
                    <td id="t17_3">
                        C. Le candidat pour lequel nous avons voté semble compétent
                        <span id="tQ17_3" hidden>C</span>
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
                        18- Quelle est la forme correcte ?
                    </td>
                </tr>
                <tr>    
                    <td id="t18_1">
                        A. Un épilogue, un épithète, une épitaphe
                        <span id="tQ18_1" hidden>A</span>
                    </td>
                    <td class="text-center" rowspan="2" width="200px">
                            <a href="#" class="btnhref" id="btnQ18" data-color="#265ed7"  data-id="18"
                                ><i class="icon-copy dw dw-edit2"></i
                            ></a>
                    </td>                    
                </tr>
                <tr>
                    <td id="t18_2">
                        B. Un épilogue, une épithète, une épitaphe  
                        <span id="tQ18_2" hidden>B</span>
                    </td>
                </tr>
                <tr>
                    <td id="t18_3">
                        C. Une épilogue, une épithète, une épitaphe
                        <span id="tQ18_3" hidden>C</span>
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
                        19- Quelle est la forme correcte ?
                    </td>
                </tr>
                <tr>    
                    <td id="t19_1">
                        A. Les conclusions que la Commission a adoptées
                        <span id="tQ19_1" hidden>A</span>
                    </td>
                    <td class="text-center" rowspan="2" width="200px">
                            <a href="#" class="btnhref" id="btnQ19" data-color="#265ed7"  data-id="19"
                                ><i class="icon-copy dw dw-edit2"></i
                            ></a>
                    </td>                    
                </tr>
                <tr>
                    <td id="t19_2">
                        B. Les conclusions que la Commission a adoptée  
                        <span id="tQ19_2" hidden>B</span>
                    </td>
                </tr>
                <tr>
                    <td id="t19_3">
                        C. Les conclusions que la Commission a adopté
                        <span id="tQ19_3" hidden>C</span>
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
                        20- Cochez la ou les cases correspondant aux phrases incorrectement orthographiées.
                    </td>
                </tr>
                <tr>    
                    <td id="t20_1">
                        A. Les quatre coups de fusils s'étaient succédé avec une rapidité incroyable.
                        <span id="tQ20_1" hidden>A</span>
                    </td>
                    <td class="text-center" rowspan="4" width="200px">
                            <a href="#" class="btnhref" id="btnQ20" data-color="#265ed7"  data-id="20"
                                ><i class="icon-copy dw dw-edit2"></i
                            ></a>
                    </td>                    
                </tr>
                <tr>
                    <td id="t20_2">
                        B. Leurs cravates se roulaient en cordes aussitôt qu'ils se les étaient attachées.  
                        <span id="tQ20_2" hidden>B</span>
                    </td>
                </tr>
                <tr>
                    <td id="t20_3">
                        C. Désespérément, ils se sont jetés à la mer.
                        <span id="tQ20_3" hidden>C</span>
                    </td>
                </tr>
                <tr>
                    <td id="t20_4">
                        D. Les maîtres se sont arrogés le droit de disposer d'autres êtres humains.
                        <span id="tQ20_4" hidden>D</span>
                    </td>
                </tr>
                <tr>
                    <td id="t20_5">
                        E. La fillette s'était laissée glisser sur la pente.
                        <span id="tQ20_5" hidden>E</span>
                    </td>
                </tr>                                             
            </tbody>
        </table>
    </div>              


    <-- 2. GRAMMAIRE -->
    <div class="page-header mt-1">
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="title text-center">
                    <h4>2. Grammaire</h4>
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
                        1- C’est toi qui...le meilleur
                    </td>
                </tr>
                <tr>    
                    <td  id="t21_1">
                        A. Es
                        <span id="tQ21_1" hidden>A</span>
                    </td>
                    <td class="text-center" rowspan="4" width="200px">
                            <a href="#" class="btnhref"  id="btnQ" data-color="#265ed7" data-id="21"
                                ><i class="icon-copy dw dw-edit2"></i
                            ></a>
                    </td>                    
                </tr>
                <tr>
                    <td id="t21_2">
                        B. Est
                        <span id="tQ21_2" hidden>B</span>
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
                        2- La centaine d’euros qui me...
                    </td>
                </tr>
                <tr>    
                    <td id="t22_1">
                        A. Manque
                        <span id="tQ22_1" hidden>A</span>

                    </td>
                    <td class="text-center" rowspan="2" width="200px">
                            <a href="#" class="btnhref" id="btnQ" data-color="#265ed7" data-id="22"
                                ><i class="icon-copy dw dw-edit2"></i
                            ></a>
                    </td>                    
                </tr>
                <tr>
                    <td id="t22_2">
                        B. Manquent
                        <span id="tQ22_2" hidden>B</span>
                    </td>
                </tr>                
                <tr>
                    <td id="t22_3">
                        C. Manque/manquent
                        <span id="tQ22_3" hidden>C</span>
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
                        3- Une foule de badauds
                    </td>
                </tr>
                <tr>    
                    <td id="t23_1">
                        A. S’est précipitée
                        <span id="tQ23_1" hidden>A</span>
                    </td>
                    <td class="text-center" rowspan="4" width="200px">
                            <a href="#" class="btnhref" id="btnQ" data-color="#265ed7"  data-id="23"
                                ><i class="icon-copy dw dw-edit2"></i
                            ></a>
                    </td>                    
                </tr>
                <tr>
                    <td id="t23_2">
                        B. Se sont précipités
                        <span id="tQ23_2" hidden>B</span>
                    </td>
                </tr>
                <tr>
                    <td id="t23_3">
                        C. S’est précipitée/ Se sont précipités
                        <span id="tQ23_3" hidden>C</span>
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
                        4- Sélectionnez la bonne forme conjuguée avec e ou t au subjonctif présent. Qu’il ...
                    </td>
                </tr>
                <tr>    
                    <td id="t24_1">
                        A. Aie
                        <span id="tQ24_1" hidden>A</span>
                    </td>
                    <td class="text-center" rowspan="2" width="200px">
                            <a href="#" class="btnhref" id="btnQ" data-color="#265ed7"  data-id="24"
                                ><i class="icon-copy dw dw-edit2"></i
                            ></a>
                    </td>                    
                </tr>
                <tr>
                    <td id="t24_2">
                        B. Ait
                        <span id="tQ24_2" hidden>B</span>
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
                        5- Sélectionnez la bonne forme conjuguée avec e ou t au subjonctif présent. Qu’il ...
                    </td>
                </tr>
                <tr>    
                    <td id="t25_1">
                        A. Acquiert
                        <span id="tQ25_1" hidden>A</span>
                    </td>
                    <td class="text-center" rowspan="2" width="200px">
                            <a href="#" class="btnhref" id="btnQ" data-color="#265ed7"  data-id="25"
                                ><i class="icon-copy dw dw-edit2"></i
                            ></a>
                    </td>                    
                </tr>
                <tr>
                    <td id="t25_2">
                        B. Acquierre
                        <span id="tQ25_2" hidden>B</span>
                    </td>
                </tr>
                <tr>
                    <td id="t25_3">
                        C. Acquière
                        <span id="tQ25_3" hidden>C</span>
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
                        6- Sélectionnez la bonne forme conjuguée avec ou sans e au futur. Il...
                    </td>
                </tr>
                <tr>    
                    <td id="t26_1">
                        A. Concluera
                        <span id="tQ26_1" hidden>A</span>
                    </td>
                    <td class="text-center" rowspan="4" width="200px">
                            <a href="#" class="btnhref" id="btnQ6" data-color="#265ed7"  data-id="26"
                                ><i class="icon-copy dw dw-edit2"></i
                            ></a>
                    </td>                    
                </tr>
                <tr>
                    <td id="t26_2">
                        B. Conclura
                        <span id="tQ26_2" hidden>B</span>
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
                        7- Sélectionnez la bonne forme conjuguée avec ou sans e au futur. Il...
                    </td>
                </tr>
                <tr>    
                    <td id="t27_1">
                        A. Créra
                        <span id="tQ27_1" hidden>A</span>
                    </td>
                    <td class="text-center" rowspan="2" width="200px">
                            <a href="#" class="btnhref" id="btnQ" data-color="#265ed7"  data-id="27"
                                ><i class="icon-copy dw dw-edit2"></i
                            ></a>
                    </td>                    
                </tr>
                <tr>
                    <td id="t27_2">
                        B. Créera  
                        <span id="tQ27_2" hidden>B</span>
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
                        8- Sélectionnez la bonne forme conjuguée avec ou sans i au subjonctif présent que nous....
                    </td>
                </tr>
                <tr>    
                    <td id="t28_1">
                        A. Copiions
                        <span id="tQ28_1" hidden>A</span>
                    </td>
                    <td class="text-center" rowspan="4" width="200px">
                            <a href="#" class="btnhref" id="btnQ" data-color="#265ed7"  data-id="28"
                                ><i class="icon-copy dw dw-edit2"></i
                            ></a>
                    </td>                    
                </tr>
                <tr>
                    <td id="t28_2">
                        B. Copions  
                        <span id="tQ28_2" hidden>B</span>
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
                        9- Sélectionnez la bonne forme conjuguée avec ou sans i au subjonctif présent que nous....
                    </td>
                </tr>
                <tr>    
                    <td id="t29_1">
                        A. Gagnions
                        <span id="tQ29_1" hidden>A</span>
                    </td>
                    <td class="text-center" rowspan="4" width="200px">
                            <a href="#" class="btnhref" id="btnQ" data-color="#265ed7"  data-id="29"
                                ><i class="icon-copy dw dw-edit2"></i
                            ></a>
                    </td>                    
                </tr>
                <tr>
                    <td id="t29_2">
                        B. Gagnons  
                        <span id="tQ29_2" hidden>B</span>
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
                        10- Sélectionnez la bonne forme conjuguée. Vous .... 
                    </td>
                </tr>
                <tr>    
                    <td id="t30_1">
                        A. Metteriez
                        <span id="tQ30_1" hidden>A</span>
                    </td>
                    <td class="text-center" rowspan="4" width="200px">
                            <a href="#" class="btnhref" id="btnQ" data-color="#265ed7"  data-id="30"
                                ><i class="icon-copy dw dw-edit2"></i
                            ></a>
                    </td>                    
                </tr>
                <tr>
                    <td id="t30_2">
                        B. Mettriez  
                        <span id="tQ30_2" hidden>B</span>
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
                        11- Je parle à Jean et <u>à Pierre</u> en même temps. 
                    </td>
                </tr>
                <tr>    
                    <td id="t31_1">
                        A. lui
                        <span id="tQ31_1" hidden>A</span>
                    </td>
                    <td class="text-center" rowspan="2" width="200px">
                            <a href="#" class="btnhref" id="btnQ" data-color="#265ed7"  data-id="31"
                                ><i class="icon-copy dw dw-edit2"></i
                            ></a>
                    </td>                    
                </tr>
                <tr>
                    <td id="t31_2">
                        B. le  
                        <span id="tQ31_2" hidden>B</span>
                    </td>
                </tr>
                <tr>
                    <td id="t31_3">
                        C. les
                        <span id="tQ31_3" hidden>C</span>
                    </td>
                </tr>  
                <tr>
                    <td id="t31_4">
                        D. leur
                        <span id="tQ31_4" hidden>D</span>
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
                        12- Il m’achètera <u>ce dictionnaire</u>. 
                    </td>
                </tr>
                <tr>    
                    <td id="t32_1">
                        A. le m’
                        <span id="tQ32_1" hidden>A</span>
                    </td>
                    <td class="text-center" rowspan="2" width="200px">
                            <a href="#" class="btnhref" id="btnQ" data-color="#265ed7"  data-id="32"
                                ><i class="icon-copy dw dw-edit2"></i
                            ></a>
                    </td>                    
                </tr>
                <tr>
                    <td id="t32_2">
                        B. me l’  
                        <span id="tQ32_2" hidden>B</span>
                    </td>
                </tr>
                <tr>
                    <td id="t32_3">
                        C. lui m’
                        <span id="tQ32_3" hidden>C</span>
                    </td>
                </tr>  
                <tr>
                    <td id="t32_4">
                        D. me lui
                        <span id="tQ32_4" hidden>D</span>
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
                        13- Vous avez réfléchi <u>à ce problème</u>. 
                    </td>
                </tr>
                <tr>    
                    <td id="t33_1">
                        A. vous lui avez réfléchi
                        <span id="tQ33_1" hidden>A</span>
                    </td>
                    <td class="text-center" rowspan="4" width="200px">
                            <a href="#" class="btnhref" id="btnQ" data-color="#265ed7"  data-id="33"
                                ><i class="icon-copy dw dw-edit2"></i
                            ></a>
                    </td>                    
                </tr>
                <tr>
                    <td id="t33_2">
                        B. vous y avez réfléchi  
                        <span id="tQ33_2" hidden>B</span>
                    </td>
                </tr>
                <tr>
                    <td id="t33_3">
                        C. vous avez lui réfléchi
                        <span id="tQ33_3" hidden>C</span>
                    </td>
                </tr>
                <tr>
                    <td id="t33_4">
                        D. vous avez y réfléchi
                        <span id="tQ33_4" hidden>D</span>
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
                        14- Passez-moi, s’il vous plaît, <u>mes lunettes</u>.
                    </td>
                </tr>
                <tr>    
                    <td id="t34_1">
                        A. Les passez-moi
                        <span id="tQ34_1" hidden>A</span>
                    </td>
                    <td class="text-center" rowspan="4" width="200px">
                            <a href="#" class="btnhref" id="btnQ" data-color="#265ed7"  data-id="34"
                                ><i class="icon-copy dw dw-edit2"></i
                            ></a>
                    </td>                    
                </tr>
                <tr>
                    <td id="t34_2">
                        B. Passez-moi-les  
                        <span id="tQ34_2" hidden>B</span>
                    </td>
                </tr>
                <tr>
                    <td id="t34_3">
                        C. Me les passez
                        <span id="tQ34_3" hidden>C</span>
                    </td>
                </tr>
                <tr>
                    <td id="t34_4">
                        D. Passez-les-moi
                        <span id="tQ34_4" hidden>D</span>
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
                        15- Nous allons reconduire <u>nos amis à l’hôtel</u>.
                    </td>
                </tr>
                <tr>    
                    <td id="t35_1">
                        A. Nous allons les y reconduire.
                        <span id="tQ35_1" hidden>A</span>
                    </td>
                    <td class="text-center" rowspan="2" width="200px">
                            <a href="#" class="btnhref" id="btnQ" data-color="#265ed7"  data-id="35"
                                ><i class="icon-copy dw dw-edit2"></i
                            ></a>
                    </td>                    
                </tr>
                <tr>
                    <td id="t35_2">
                        B. Nous les y allons reconduire.  
                        <span id="tQ35_2" hidden>B</span>
                    </td>
                </tr>
                <tr>
                    <td id="t35_3">
                        C. Nous les lui allons reconduire.
                        <span id="tQ35_3" hidden>C</span>
                    </td>
                </tr>  
                <tr>
                    <td id="t35_4">
                        D. Nous allons y les reconduire.
                        <span id="tQ35_4" hidden>D</span>
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
                        16- Pourquoi ne vous êtes-vous pas adressés <u>à cet homme</u> ?
                    </td>
                </tr>
                <tr>    
                    <td id="t36_1">
                        A. Pourquoi ne vous lui êtes-vous pas adressés ?
                        <span id="tQ36_1" hidden>A</span>
                    </td>
                    <td class="text-center" rowspan="2" width="200px">
                            <a href="#" class="btnhref" id="btnQ" data-color="#265ed7"  data-id="36"
                                ><i class="icon-copy dw dw-edit2"></i
                            ></a>
                    </td>                    
                </tr>
                <tr>
                    <td id="t36_2">
                        B. Pourquoi ne lui vous êtes-vous pas adressés ?  
                        <span id="tQ36_2" hidden>B</span>
                    </td>
                </tr>
                <tr>
                    <td id="t36_3">
                        C. Pourquoi ne vous êtes-vous pas adressés à lui ?
                        <span id="tQ36_3" hidden>C</span>
                    </td>
                </tr> 
                <tr>
                    <td id="t36_4">
                        D. Pourquoi ne vous êtes-vous-lui pas adressés ?
                        <span id="tQ36_4" hidden>D</span>
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
                        17- Ne lisez pas <u>cette lettre à sa mère</u>.
                    </td>
                </tr>
                <tr>    
                    <td id="t37_1">
                        A. Ne lisez-la-lui pas
                        <span id="tQ37_1" hidden>A</span>
                    </td>
                    <td class="text-center" rowspan="2" width="200px">
                            <a href="#" class="btnhref" id="btnQ" data-color="#265ed7"  data-id="37"
                                ><i class="icon-copy dw dw-edit2"></i
                            ></a>
                    </td>                    
                </tr>
                <tr>
                    <td id="t37_2">
                        B. Ne lui la lisez pas  
                        <span id="tQ37_2" hidden>B</span>
                    </td>
                </tr>
                <tr>
                    <td id="t37_3">
                        C. Ne lisez-lui-la pas
                        <span id="tQ37_3" hidden>C</span>
                    </td>
                </tr>
                <tr>
                    <td id="t37_4">
                        D. Ne la lui lisez pas
                        <span id="tQ37_4" hidden>D</span>
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
                        18- Tu peux très bien te passer <u>de cette visite</u>.
                    </td>
                </tr>
                <tr>    
                    <td id="t38_1">
                        A. Tu peux très bien t'en passer.
                        <span id="tQ38_1" hidden>A</span>
                    </td>
                    <td class="text-center" rowspan="2" width="200px">
                            <a href="#" class="btnhref" id="btnQ" data-color="#265ed7"  data-id="38"
                                ><i class="icon-copy dw dw-edit2"></i
                            ></a>
                    </td>                    
                </tr>
                <tr>
                    <td id="t38_2">
                        B. Tu en peux très bien te passer.  
                        <span id="tQ38_2" hidden>B</span>
                    </td>
                </tr>
                <tr>
                    <td id="t38_3">
                        C. Tu peux très bien te passer d'en.
                        <span id="tQ38_3" hidden>C</span>
                    </td>
                </tr>  
                <tr>
                    <td id="t38_4">
                        D. Tu peux très bien en te passer.
                        <span id="tQ38_4" hidden>D</span>
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
                        19- Elle s’est abonnée <u>à deux journaux</u>.
                    </td>
                </tr>
                <tr>    
                    <td id="t39_1">
                        A. Elle se lui est abonnée.
                        <span id="tQ39_1" hidden>A</span>
                    </td>
                    <td class="text-center" rowspan="2" width="200px">
                            <a href="#" class="btnhref" id="btnQ" data-color="#265ed7"  data-id="39"
                                ><i class="icon-copy dw dw-edit2"></i
                            ></a>
                    </td>                    
                </tr>
                <tr>
                    <td id="t39_2">
                        B. Elle y s’est abonnée  
                        <span id="tQ39_2" hidden>B</span>
                    </td>
                </tr>
                <tr>
                    <td id="t39_3">
                        C. Elle s’y est abonnée.
                        <span id="tQ39_3" hidden>C</span>
                    </td>
                </tr> 
                <tr>
                    <td id="t39_4">
                        D. Elle se lui est abonnée.
                        <span id="tQ39_4" hidden>D</span>
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
                        20- C’est à <u>Marie</u> que je m’adresse et non pas à <u>Jacques</u>.
                    </td>
                </tr>
                <tr>    
                    <td id="t40_1">
                        A. C’est à lui que je m’adresse et non pas à lui.
                        <span id="tQ40_1" hidden>A</span>
                    </td>
                    <td class="text-center" rowspan="4" width="200px">
                            <a href="#" class="btnhref" id="btnQ" data-color="#265ed7"  data-id="40"
                                ><i class="icon-copy dw dw-edit2"></i
                            ></a>
                    </td>                    
                </tr>
                <tr>
                    <td id="t40_2">
                        B. C’est à elle que je m’adresse et non pas à elle.  
                        <span id="tQ40_2" hidden>B</span>
                    </td>
                </tr>
                <tr>
                    <td id="t40_3">
                        C. C’est à elle que je m’adresse et non pas à lui.
                        <span id="tQ40_3" hidden>C</span>
                    </td>
                </tr>
                <tr>
                    <td id="t40_4">
                        D. C’est à elle que je me lui adresse et non pas.
                        <span id="tQ40_4" hidden>D</span>
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
    var nbreQuestions=40;
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
            switch(CurrentQuestion)
                {
                    case "Q"+index:
                        CurrentQuestion="Q"+parseInt(index+1);//Q2
                        PrevQuestion="Q"+parseInt(index+1);//Q2

                       // alert("#Q"+parseInt(index+1));

                        //alert($('input:radio[name=ChoixRQ'+parseInt(index)+']:checked').val());    

                        //alert(index);
                        //if($('#NoteQ'+parseInt(index)).val())
                        //CheckRQ1_1
                        var itemval="";
                        if(index== 1 || index== 3 || index== 6 || index== 20)
                        {
                            for (x=1;x<=5;x++)
                            {
                                if($('input[name=CheckRQ'+parseInt(index)+'_'+parseInt(x)+']:checked').val())   
                                {
                                    itemval=$('input[name=CheckRQ'+parseInt(index)+'_'+parseInt(x)+']:checked').val();
                                }                                
                            }
                        }else
                        {
                            itemval=$('input:radio[name=ChoixRQ'+parseInt(index)+']:checked').val();
                        }

                        //alert(itemval);

                        //if($('input:radio[name=ChoixRQ'+parseInt(index)+']:checked').val())
                        if(itemval)    
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

            var val="";
            var nbreRep;

            if(i== 1 || i== 3 || i== 6 || i== 20)
            {
                //nbreRep=5;

                for (x=1;x<=5;x++)
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
            }else if($('input:radio[name=ChoixRQ'+parseInt(i)+']:checked').val())
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
               } else{
                         document.getElementById('t'+parseInt(i)+'_'+parseInt(y)).style.color = "black";
                         document.getElementById('t'+parseInt(i)+'_'+parseInt(y)).style.fontWeight = "normal";                
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
        //var Q1 = $('input:radio[name=ChoixRQ1]:checked').val();
        var Q1 = $('input[name=CheckRQ1_1]:checked').val()+'-'+$('input[name=CheckRQ1_2]:checked').val()+$('input[name=CheckRQ1_3]:checked').val()+$('input[name=CheckRQ1_4]:checked').val()+$('input[name=CheckRQ1_5]:checked').val();
        var Q2 = $('input:radio[name=ChoixRQ2]:checked').val();
        //var Q3 = $('input:radio[name=ChoixRQ3]:checked').val();
        var Q3 = $('input[name=CheckRQ3_1]:checked').val()+'-'+$('input[name=CheckRQ3_2]:checked').val()+$('input[name=CheckRQ3_3]:checked').val()+$('input[name=CheckRQ3_4]:checked').val()+$('input[name=CheckRQ3_5]:checked').val();
        var Q4 = $('input:radio[name=ChoixRQ4]:checked').val();
        var Q5 = $('input:radio[name=ChoixRQ5]:checked').val();
        //var Q6 = $('input:radio[name=ChoixRQ6]:checked').val();
        var Q6 = $('input[name=CheckRQ6_1]:checked').val()+'-'+$('input[name=CheckRQ6_2]:checked').val()+$('input[name=CheckRQ6_3]:checked').val()+$('input[name=CheckRQ6_4]:checked').val()+$('input[name=CheckRQ6_5]:checked').val();
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
        //var Q20 = $('input:radio[name=ChoixRQ20]:checked').val();
        var Q20 = $('input[name=CheckRQ20_1]:checked').val()+'-'+$('input[name=CheckRQ20_2]:checked').val()+$('input[name=CheckRQ20_3]:checked').val()+$('input[name=CheckRQ20_4]:checked').val()+$('input[name=CheckRQ20_5]:checked').val();
        var Q21 = $('input:radio[name=ChoixRQ21]:checked').val();
        var Q22 = $('input:radio[name=ChoixRQ22]:checked').val();
        var Q23 = $('input:radio[name=ChoixRQ23]:checked').val();
        var Q24 = $('input:radio[name=ChoixRQ24]:checked').val();
        var Q25 = $('input:radio[name=ChoixRQ25]:checked').val();
        var Q26 = $('input:radio[name=ChoixRQ26]:checked').val();
        var Q27 = $('input:radio[name=ChoixRQ27]:checked').val();
        var Q28 = $('input:radio[name=ChoixRQ28]:checked').val();
        var Q29 = $('input:radio[name=ChoixRQ29]:checked').val();
        var Q30 = $('input:radio[name=ChoixRQ30]:checked').val();
        var Q31 = $('input:radio[name=ChoixRQ31]:checked').val();
        var Q32 = $('input:radio[name=ChoixRQ32]:checked').val();
        var Q33 = $('input:radio[name=ChoixRQ33]:checked').val();
        var Q34 = $('input:radio[name=ChoixRQ34]:checked').val();
        var Q35 = $('input:radio[name=ChoixRQ35]:checked').val();
        var Q36 = $('input:radio[name=ChoixRQ36]:checked').val();
        var Q37 = $('input:radio[name=ChoixRQ37]:checked').val();
        var Q38 = $('input:radio[name=ChoixRQ38]:checked').val();
        var Q39 = $('input:radio[name=ChoixRQ39]:checked').val();
        var Q40 = $('input:radio[name=ChoixRQ40]:checked').val();
       //alert(Q1);
        $.ajax({
           type:'POST',
           url:"{{ route('TestStress.store') }}",
           data:{Q1:Q1,Q2:Q2,Q3:Q3,Q4:Q4,Q5:Q5,Q6:Q6,Q7:Q7,Q8:Q8,Q9:Q9,Q10:Q10
                 Q11:Q11,Q12:Q12,Q13:Q13,Q14:Q14,Q15:Q15,Q16:Q16,Q17:Q17,Q18:Q18,Q19:Q19,Q20:Q20
                 ,Q21:Q21,Q22:Q22,Q23:Q23,Q24:Q24,Q25:Q25,Q26:Q26,Q27:Q27,Q28:Q28,Q29:Q29,Q30:Q30,Q31:Q31,Q32:Q32,Q33:Q33,Q34:Q34,Q35:Q35,Q36:Q36,Q37:Q37,Q38:Q38,Q39:Q39,Q40:Q40
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