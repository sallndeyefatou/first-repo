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
                                <h6 class="text-center">TEST STRESS</h6>
                                <hr>                          
                                <h5 class="mb-4"><span class="badge bg-secondary w-100">Question 1 / 30</span></h5>
                                <hr>
                                <h6 class="text-sm-left">
                                    <strong>1°) </strong>Quelle importance accordez-vous au succès ? 
                                </h6>
                                    <div class="mt-2">
                                        <div class="custom-control custom-radio mb-5">
                                            <input type="radio" id="customRadio1_1" name="ChoixRQ1" class="custom-control-input" value="A"/>
                                            <label class="custom-control-label" for="customRadio1_1">A. Une importance moyenne.</label>
                                        </div>
                                        <div class="custom-control custom-radio mb-5">    
                                            <input type="radio" id="customRadio1_2" name="ChoixRQ1" class="custom-control-input" value="B"/>
                                            <label class="custom-control-label" for="customRadio1_2">B.Une très grande importance.</label>
                                        </div>
                                        <div class="custom-control custom-radio mb-5">    
                                            <input type="radio" id="customRadio1_3" name="ChoixRQ1" class="custom-control-input" value="C"/>
                                            <label class="custom-control-label" for="customRadio1_3">C. Le succès ne me préoccupe pas beaucoup</label>
                                        </div>                                               
                                    </div>                                    
                            </div>
                            <div class="progress mt-5" style="height: 25px">
                                <div
                                    class="progress-bar bg-info"
                                    role="progressbar"
                                    style="width: 3%"
                                    aria-valuenow="6"
                                    aria-valuemin="0"
                                    aria-valuemax="100">
                                    3%
                                </div>
                            </div>
                        </div>
                    </div>
            
                    <div class="row" id="Q2">
                        <div class="col-sm-12">
                            <div class="mb-0 h-75">
                                <h6 class="text-center">TEST STRESS</h6>
                                <hr>                         
                                <h5 class="mb-4"><span class="badge bg-secondary w-100">Question 2 / 30</span></h5>
                                <hr>
                                <h6 class="text-sm-left">
                                    <strong>2°) </strong>Vous est-il déjà arrivé de prendre des jours de congé parce que vous étiez stressé(e) ?
                                </h6>
                                <div class="mt-2">
                                <div class="custom-control custom-radio mb-5">
                                    <input type="radio" id="customRadio2_1" name="ChoixRQ2" class="custom-control-input" value="A"/>
                                    <label class="custom-control-label" for="customRadio2_1">A. Une ou 2 fois</label>
                                </div>
                                <div class="custom-control custom-radio mb-5">    
                                    <input type="radio" id="customRadio2_2" name="ChoixRQ2" class="custom-control-input" value="B"/>
                                    <label class="custom-control-label" for="customRadio2_2">B. Plus de deux fois</label>
                                </div>
                                <div class="custom-control custom-radio mb-5">
                                    <input type="radio" id="customRadio2_3" name="ChoixRQ2" class="custom-control-input" value="C"/>
                                    <label class="custom-control-label" for="customRadio2_3">C. Jamais</label>
                                </div>                                    
                                </div>                                    
                                </div>
                                <div class="progress mt-5" style="height: 25px">
                                    <div
                                        class="progress-bar bg-info"
                                        role="progressbar"
                                        style="width: 7%"
                                        aria-valuenow="6"
                                        aria-valuemin="0"
                                        aria-valuemax="100">
                                        7%
                                    </div>
                                </div>
                            </div>
                    </div>           

                    <div class="row" id="Q3">
                        <div class="col-sm-12">
                            <div class="mb-0 h-75">
                                <h6 class="text-center">TEST STRESS</h6>
                                <hr>                          
                                <h5 class="mb-4"><span class="badge bg-secondary w-100">Question 3 / 30</span></h5>
                                <hr>
                                <h6 class="text-sm-left">
                                    <strong>3°)</strong>Vous considère-t-on comme une personne sachant conserver son sang froid en période de crise ? 
                                </h6>
                                <div class="mt-2">
                                    <div class="custom-control custom-radio mb-5">
                                        <input type="radio" id="customRadio3_1" name="ChoixRQ3" class="custom-control-input" value="A"/>
                                        <label class="custom-control-label" for="customRadio3_1">A. Parfois, mais ceux qui arrivent à garder la tête froide en période de crise n'ont généralement pas saisi la gravité de la situation.</label>
                                    </div>
                                    <div class="custom-control custom-radio mb-5">
                                        <input type="radio" id="customRadio3_2" name="ChoixRQ3" class="custom-control-input" value="B"/>
                                        <label class="custom-control-label" for="customRadio3_2">B. Pas vraiment.</label>
                                    </div>
                                    <div class="custom-control custom-radio mb-5">
                                        <input type="radio" id="customRadio3_3" name="ChoixRQ3" class="custom-control-input" value="C"/>
                                        <label class="custom-control-label" for="customRadio3_3">C. Oui, je pense être à juste titre perçu(e) ainsi.</label>
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

                    <div class="row" id="Q4">
                        <div class="col-sm-12">
                            <div class="mb-0 h-75">
                                <h6 class="text-center">TEST STRESS</h6>
                                <hr>                           
                                <h5 class="mb-4"><span class="badge bg-secondary w-100">Question 4 / 30</span></h5>
                                <hr>
                                <h6 class="text-sm-left">
                                    <strong>4°)</strong>Parmi les propositions suivantes, laquelle est la plus à même de vous détendre et de réduire votre stress après une journée particulièrement éprouvante ?
                                </h6>
                                <div class="mt-2">
                                <div class="custom-control custom-radio mb-5">
                                    <input type="radio" id="customRadio4_1" name="ChoixRQ4" class="custom-control-input" value="A"/>
                                    <label class="custom-control-label" for="customRadio4_1">A. Quelques heures de sommeil dans le canapé.</label>
                                </div>
                                <div class="custom-control custom-radio mb-5">
                                    <input type="radio" id="customRadio4_2" name="ChoixRQ4" class="custom-control-input" value="B"/>
                                    <label class="custom-control-label" for="customRadio4_2">B. Une sortie nocturne entre copains</label>
                                </div>
                                <div class="custom-control custom-radio mb-5">
                                    <input type="radio" id="customRadio4_3" name="ChoixRQ4" class="custom-control-input" value="C"/>
                                    <label class="custom-control-label" for="customRadio4_3">C. Une pause café de 15 min</label>
                                </div>                          
                                </div>                                    
                                </div>
                                <div class="progress mt-5" style="height: 25px">
                                    <div
                                        class="progress-bar bg-info"
                                        role="progressbar"
                                        style="width: 13%"
                                        aria-valuenow="6"
                                        aria-valuemin="0"
                                        aria-valuemax="100">
                                        13%
                                    </div>
                                </div>
                            </div>
                    </div>

                    <div class="row" id="Q5">
                        <div class="col-sm-12">
                            <div class="mb-0 h-75">
                                <h6 class="text-center">TEST STRESS</h6>
                                <hr>                          
                                <h5 class="mb-4"><span class="badge bg-secondary w-100">Question 5 / 30</span></h5>
                                <hr>
                                <h6 class="text-sm-left">
                                    <strong>5°) </strong>Le stress peut-il perturber l’atteinte de vos objectifs 
                                </h6>
                                <div class="mt-2">
                                <div class="custom-control custom-radio mb-5">
                                    <input type="radio" id="customRadio5_1" name="ChoixRQ5" class="custom-control-input" value="A"/>
                                    <label class="custom-control-label" for="customRadio5_1">A. Non</label>
                                </div>
                                <div class="custom-control custom-radio mb-5">
                                    <input type="radio" id="customRadio5_2" name="ChoixRQ5" class="custom-control-input" value="B"/>
                                    <label class="custom-control-label" for="customRadio5_2">B. Rarement</label>
                                </div>
                                <div class="custom-control custom-radio mb-5">    
                                    <input type="radio" id="customRadio5_3" name="ChoixRQ5" class="custom-control-input" value="C"/>
                                    <label class="custom-control-label" for="customRadio5_3">C. Oui</label>
                                </div>                               
                                </div>                                    
                                </div>
                                <div class="progress mt-5" style="height: 25px">
                                    <div
                                        class="progress-bar bg-info"
                                        role="progressbar"
                                        style="width: 17%"
                                        aria-valuenow="6"
                                        aria-valuemin="0"
                                        aria-valuemax="100">
                                        17%
                                    </div>
                                </div>
                            </div>
                    </div>

                    <div class="row" id="Q6">
                        <div class="col-sm-12">
                            <div class="mb-0 h-75">
                                <h6 class="text-center">TEST STRESS</h6>
                                <hr>                         
                                <h5 class="mb-4"><span class="badge bg-secondary w-100">Question 6 / 30</span></h5>
                                <hr>
                                <h6 class="text-sm-left">
                                    <strong>6°) </strong>Pensez-vous que la vie actuelle génère plus de stress qu'il y a 10 ans ?
                                </h6>
                                <div class="mt-2">
                                <div class="custom-control custom-radio mb-5">
                                    <input type="radio" id="customRadio6_1" name="ChoixRQ6" class="custom-control-input" value="A"/>
                                    <label class="custom-control-label" for="customRadio6_1">A. Peut-être.</label>
                                </div>
                                <div class="custom-control custom-radio mb-5">
                                    <input type="radio" id="customRadio6_2" name="ChoixRQ6" class="custom-control-input" value="B"/>
                                    <label class="custom-control-label" for="customRadio6_2">B. Oui</label>
                                </div>
                                <div class="custom-control custom-radio mb-5">
                                    <input type="radio" id="customRadio6_3" name="ChoixRQ6" class="custom-control-input" value="C"/>
                                    <label class="custom-control-label" for="customRadio6_3">C. Non</label>
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

                    <div class="row" id="Q7">
                        <div class="col-sm-12">
                            <div class="mb-0 h-75">
                                <h6 class="text-center">TEST STRESS</h6>
                                <hr>                          
                                <h5 class="mb-4"><span class="badge bg-secondary w-100">Question 7 / 30</span></h5>
                                <hr>
                                <h6 class="text-sm-left">
                                    <strong>7°) </strong>Votre sœur vous demande de garder ses trois enfants un peu turbulents pendant le week-end en raison d'une crise familiale. Comment envisagez-vous cette situation ?
                                </h6>
                                <div class="mt-2">
                                <div class="custom-control custom-radio mb-5">
                                    <input type="radio" id="customRadio7_1" name="ChoixRQ7" class="custom-control-input" value="A"/>
                                    <label class="custom-control-label" for="customRadio7_1">A. Cela m'inquiète terriblement.</label>
                                </div>
                                <div class="custom-control custom-radio mb-5">
                                    <input type="radio" id="customRadio7_2" name="ChoixRQ7" class="custom-control-input" value="B"/>
                                    <label class="custom-control-label" for="customRadio7_2">B. L'idée de garder ces trois enfants me terrifie à un point tel que je chercherai probablement un moyen d'y échapper.</label>
                                </div>
                                <div class="custom-control custom-radio mb-5">
                                    <input type="radio" id="customRadio7_3" name="ChoixRQ7" class="custom-control-input" value="C"/>
                                    <label class="custom-control-label" for="customRadio7_3">C. C'est un nouveau défi que je relèverai avec plaisir.</label>
                                </div>                                
                                </div>                                    
                                </div>
                                <div class="progress mt-5" style="height: 25px">
                                    <div
                                        class="progress-bar bg-info"
                                        role="progressbar"
                                        style="width: 23%"
                                        aria-valuenow="6"
                                        aria-valuemin="0"
                                        aria-valuemax="100">
                                        23%
                                    </div>
                                </div>
                            </div>
                    </div>

                    <div class="row" id="Q8">
                        <div class="col-sm-12">
                            <div class="mb-0 h-75">
                                <h6 class="text-center">TEST STRESS</h6>
                                <hr>                          
                                <h5 class="mb-4"><span class="badge bg-secondary w-100">Question 8 / 30</span></h5>
                                <hr>
                                <h6 class="text-sm-left">
                                    <strong>8°) </strong>Le stress vous a-t-il déjà conduit(e) à endommager des choses ?
                                </h6>
                                <div class="mt-2">
                                <div class="custom-control custom-radio mb-5">
                                    <input type="radio" id="customRadio8_1" name="ChoixRQ8" class="custom-control-input" value="A"/>
                                    <label class="custom-control-label" for="customRadio8_1">A. Non, je n'ai jamais rien fait de tel mais il m'est déjà arrivé de raccrocher brutalement le téléphone.</label>
                                </div>
                                <div class="custom-control custom-radio mb-5">
                                    <input type="radio" id="customRadio8_2" name="ChoixRQ8" class="custom-control-input" value="B"/>
                                    <label class="custom-control-label" for="customRadio8_2">B. Oui.</label>
                                </div>
                                <div class="custom-control custom-radio mb-5">
                                    <input type="radio" id="customRadio8_3" name="ChoixRQ8" class="custom-control-input" value="C"/>
                                    <label class="custom-control-label" for="customRadio8_3">C. Non.</label>
                                </div>                          
                                </div>                                    
                                </div>
                                <div class="progress mt-5" style="height: 25px">
                                    <div
                                        class="progress-bar bg-info"
                                        role="progressbar"
                                        style="width: 27%"
                                        aria-valuenow="6"
                                        aria-valuemin="0"
                                        aria-valuemax="100">
                                        27%
                                    </div>
                                </div>
                            </div>
                    </div>

                    <div class="row" id="Q9">
                        <div class="col-sm-12">
                            <div class="mb-0 h-75">
                                <h6 class="text-center">TEST STRESS</h6>
                                <hr>                          
                                <h5 class="mb-4"><span class="badge bg-secondary w-100">Question 9 / 30</span></h5>
                                <hr>
                                <h6 class="text-sm-left">
                                    <strong>9°) </strong>Vous arrive-t-il d'être ennuyé(e) par des petits riens ?
                                </h6>
                                <div class="mt-2">
                                <div class="custom-control custom-radio mb-5">
                                    <input type="radio" id="customRadio9_1" name="ChoixRQ9" class="custom-control-input" value="A"/>
                                    <label class="custom-control-label" for="customRadio9_1">A. Oui, parfois.</label>
                                </div>
                                <div class="custom-control custom-radio mb-5">
                                    <input type="radio" id="customRadio9_2" name="ChoixRQ9" class="custom-control-input" value="B"/>
                                    <label class="custom-control-label" for="customRadio9_2">B. Assez souvent.</label>
                                </div>
                                <div class="custom-control custom-radio mb-5">
                                    <input type="radio" id="customRadio9_3" name="ChoixRQ9" class="custom-control-input" value="C"/>
                                    <label class="custom-control-label" for="customRadio9_3">C. Rarement voire jamais.</label>
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

                    <div class="row" id="Q10">
                        <div class="col-sm-12">
                            <div class="mb-0 h-75">
                                <h6 class="text-center">TEST STRESS</h6>
                                <hr>                          
                                <h5 class="mb-4"><span class="badge bg-secondary w-100">Question 10 / 30</span></h5>
                                <hr>
                                <h6 class="text-sm-left">
                                    <strong>10°) </strong>Que ressentiriez-vous si vous deviez vous familiariser avec une nouvelle technologie ?
                                </h6>
                                <div class="mt-2">
                                <div class="custom-control custom-radio mb-5">
                                    <input type="radio" id="customRadio10_1" name="ChoixRQ10" class="custom-control-input" value="A"/>
                                    <label class="custom-control-label" for="customRadio10_1">A. Rien de particulier. Si je devais me familiariser avec un nouvel outil de travail pour des raisons professionnelles, je m'adapterais sans difficulté.</label>
                                </div>
                                <div class="custom-control custom-radio mb-5">
                                    <input type="radio" id="customRadio10_2" name="ChoixRQ10" class="custom-control-input" value="B"/>
                                    <label class="custom-control-label" for="customRadio10_2">B. Cela m'inquièterait un peu.</label>
                                </div>
                                <div class="custom-control custom-radio mb-5">
                                    <input type="radio" id="customRadio10_3" name="ChoixRQ10" class="custom-control-input" value="C"/>
                                    <label class="custom-control-label" for="customRadio10_3">C. J'aime apprendre des choses nouvelles, je trouve cela très intéressant.</label>
                                </div>                           
                                </div>                                    
                                </div>
                                <div class="progress mt-5" style="height: 25px">
                                    <div
                                        class="progress-bar bg-info"
                                        role="progressbar"
                                        style="width: 33%"
                                        aria-valuenow="6"
                                        aria-valuemin="0"
                                        aria-valuemax="100">
                                        33%
                                    </div>
                                </div>
                            </div>
                    </div>

                    <div class="row" id="Q11">
                        <div class="col-sm-12">
                            <div class="mb-0 h-75">
                                <h6 class="text-center">TEST STRESS</h6>
                                <hr>                          
                                <h5 class="mb-4"><span class="badge bg-secondary w-100">Question 11 / 30</span></h5>
                                <hr>
                                <h6 class="text-sm-left">
                                    <strong>11°) </strong>Quel est, à votre avis, l'objectif premier des week-ends ?
                                </h6>
                                <div class="mt-2">
                                <div class="custom-control custom-radio mb-5">
                                    <input type="radio" id="customRadio11_1" name="ChoixRQ11" class="custom-control-input" value="A"/>
                                    <label class="custom-control-label" for="customRadio11_1">A. La possibilité de passer du temps avec ses amis et sa famille.</label>
                                </div>
                                <div class="custom-control custom-radio mb-5">
                                    <input type="radio" id="customRadio11_2" name="ChoixRQ11" class="custom-control-input" value="B"/>
                                    <label class="custom-control-label" for="customRadio11_2">B. La possibilité de ne pas travailler aussi dur que durant la semaine même si je ne parviens jamais à me détendre complètement.</label>
                                </div>
                                <div class="custom-control custom-radio mb-5">
                                    <input type="radio" id="customRadio11_3" name="ChoixRQ11" class="custom-control-input" value="C"/>
                                    <label class="custom-control-label" for="customRadio11_3">C. La possibilité de se détendre et d'oublier le travail.</label>
                                </div>                           
                                </div>                                    
                                </div>
                                <div class="progress mt-5" style="height: 25px">
                                    <div
                                        class="progress-bar bg-info"
                                        role="progressbar"
                                        style="width: 37%"
                                        aria-valuenow="6"
                                        aria-valuemin="0"
                                        aria-valuemax="100">
                                        37%
                                    </div>
                                </div>
                            </div>
                    </div>

                    <div class="row" id="Q12">
                        <div class="col-sm-12">
                            <div class="mb-0 h-75">
                                <h6 class="text-center">TEST STRESS</h6>
                                <hr>                          
                                <h5 class="mb-4"><span class="badge bg-secondary w-100">Question 12 / 30</span></h5>
                                <hr>
                                <h6 class="text-sm-left">
                                    <strong>12°) </strong>Que ressentez-vous lorsque vous effectuez des travaux chez vous ?
                                </h6>
                                <div class="mt-2">
                                <div class="custom-control custom-radio mb-5">
                                    <input type="radio" id="customRadio12_1" name="ChoixRQ12" class="custom-control-input" value="A"/>
                                    <label class="custom-control-label" for="customRadio12_1">A. Cela ne me dérange pas particulièrement car c'est nécessaire.</label>
                                </div>
                                <div class="custom-control custom-radio mb-5">
                                    <input type="radio" id="customRadio12_2" name="ChoixRQ12" class="custom-control-input" value="B"/>
                                    <label class="custom-control-label" for="customRadio12_2">B. Je suis un peu tendu(e) durant les travaux car cela perturbe ma routine.</label>
                                </div>
                                <div class="custom-control custom-radio mb-5">
                                    <input type="radio" id="customRadio12_3" name="ChoixRQ12" class="custom-control-input" value="C"/>
                                    <label class="custom-control-label" for="customRadio12_3">C. Je suis très content(e) et parfois excité(e) selon la nature des travaux effectués.</label>
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

                    <div class="row" id="Q13">
                        <div class="col-sm-12">
                            <div class="mb-0 h-75">
                                <h6 class="text-center">TEST STRESS</h6>
                                <hr>                          
                                <h5 class="mb-4"><span class="badge bg-secondary w-100">Question 13 / 30</span></h5>
                                <hr>
                                <h6 class="text-sm-left">
                                    <strong>13°)</strong>Avez-vous des amis de confiance vers lesquels vous tourner en cas de difficulté ?
                                </h6>
                                <div class="mt-2">
                                <div class="custom-control custom-radio mb-5">
                                    <input type="radio" id="customRadio13_1" name="ChoixRQ13" class="custom-control-input" value="A"/>
                                    <label class="custom-control-label" for="customRadio13_1">A. Peut-être.</label>
                                </div>
                                <div class="custom-control custom-radio mb-5">
                                    <input type="radio" id="customRadio13_2" name="ChoixRQ13" class="custom-control-input" value="B"/>
                                    <label class="custom-control-label" for="customRadio13_2">B. Pas vraiment.</label>
                                </div>
                                <div class="custom-control custom-radio mb-5">
                                    <input type="radio" id="customRadio13_3" name="ChoixRQ13" class="custom-control-input" value="C"/>
                                    <label class="custom-control-label" for="customRadio13_3">C. Oui.</label>
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

                    <div class="row" id="Q14">
                        <div class="col-sm-12">
                            <div class="mb-0 h-75">
                                <h6 class="text-center">TEST STRESS</h6>
                                <hr>                          
                                <h5 class="mb-4"><span class="badge bg-secondary w-100">Question 14 / 30</span></h5>
                                <hr>
                                <h6 class="text-sm-left">
                                    <strong>14°) </strong>Avez-vous l'impression que nous vivons dans un monde encore plus compétitif qu'auparavant ?
                                </h6>
                                <div class="mt-2">
                                <div class="custom-control custom-radio mb-5">
                                    <input type="radio" id="customRadio14_1" name="ChoixRQ14" class="custom-control-input" value="A"/>
                                    <label class="custom-control-label" for="customRadio14_1">A. Le monde moderne est peut-être un peu plus compétitif que celui de nos parents ou grands-parents.</label>
                                </div>
                                <div class="custom-control custom-radio mb-5">
                                    <input type="radio" id="customRadio14_2" name="ChoixRQ14" class="custom-control-input" value="B"/>
                                    <label class="custom-control-label" for="customRadio14_2">B. Oui, j'en suis convaincu(e).</label>
                                </div>
                                <div class="custom-control custom-radio mb-5">
                                    <input type="radio" id="customRadio14_3" name="ChoixRQ14" class="custom-control-input" value="C"/>
                                    <label class="custom-control-label" for="customRadio14_3">C. Non, je pense que la compétition est restée la même.</label>
                                </div>                               
                                </div>                                    
                                </div>
                                <div class="progress mt-5" style="height: 25px">
                                    <div
                                        class="progress-bar bg-info"
                                        role="progressbar"
                                        style="width: 47%"
                                        aria-valuenow="6"
                                        aria-valuemin="0"
                                        aria-valuemax="100">
                                        47%
                                    </div>
                                </div>
                            </div>
                    </div>

                    <div class="row" id="Q15">
                        <div class="col-sm-12">
                            <div class="mb-0 h-75">
                                <h6 class="text-center">TEST STRESS</h6>
                                <hr>                          
                                <h5 class="mb-4"><span class="badge bg-secondary w-100">Question 15 / 30</span></h5>
                                <hr>
                                <h6 class="text-sm-left">
                                    <strong>15°) </strong>Vous arrive-t-il de discuter avec les autres de ce que vous ressentez ?
                                </h6>
                                <div class="mt-2">
                                <div class="custom-control custom-radio mb-5">
                                    <input type="radio" id="customRadio15_1" name="ChoixRQ15" class="custom-control-input" value="A"/>
                                    <label class="custom-control-label" for="customRadio15_1">A. Parfois.</label>
                                </div>
                                <div class="custom-control custom-radio mb-5">
                                    <input type="radio" id="customRadio15_2" name="ChoixRQ15" class="custom-control-input" value="B"/>
                                    <label class="custom-control-label" for="customRadio15_2">B. Rarement voire jamais.</label>
                                </div>
                                <div class="custom-control custom-radio mb-5">
                                    <input type="radio" id="customRadio15_3" name="ChoixRQ15" class="custom-control-input" value="C"/>
                                    <label class="custom-control-label" for="customRadio15_3">C. Assez souvent.</label>
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

                    <div class="row" id="Q16">
                        <div class="col-sm-12">
                            <div class="mb-0 h-75">
                                <h6 class="text-center">TEST STRESS</h6>
                                <hr>                          
                                <h5 class="mb-4"><span class="badge bg-secondary w-100">Question 16 / 30</span></h5>
                                <hr>
                                <h6 class="text-sm-left">
                                    <strong>16°) </strong>Pensez-vous qu'il soit nécessaire de toujours vous efforcer d'aller de l'avant ?
                                </h6>
                                <div class="mt-2">
                                <div class="custom-control custom-radio mb-5">
                                    <input type="radio" id="customRadio16_1" name="ChoixRQ16" class="custom-control-input" value="A"/>
                                    <label class="custom-control-label" for="customRadio16_1">A. Parfois.</label>
                                </div>
                                <div class="custom-control custom-radio mb-5">
                                    <input type="radio" id="customRadio16_2" name="ChoixRQ16" class="custom-control-input" value="B"/>
                                    <label class="custom-control-label" for="customRadio16_2">B. Oui, je pense que c'est la seule manière de réussir dans la vie.</label>
                                </div>
                                <div class="custom-control custom-radio mb-5">
                                    <input type="radio" id="customRadio16_3" name="ChoixRQ16" class="custom-control-input" value="C"/>
                                    <label class="custom-control-label" for="customRadio16_3">C. Non, la vie est bien trop courte.</label>
                                </div>                               
                                </div>                                    
                                </div>
                                <div class="progress mt-5" style="height: 25px">
                                    <div
                                        class="progress-bar bg-info"
                                        role="progressbar"
                                        style="width: 53%"
                                        aria-valuenow="6"
                                        aria-valuemin="0"
                                        aria-valuemax="100">
                                        53%
                                    </div>
                                </div>
                            </div>
                    </div>

                    <div class="row" id="Q17">
                        <div class="col-sm-12">
                            <div class="mb-0 h-75">
                                <h6 class="text-center">TEST STRESS</h6>
                                <hr>                          
                                <h5 class="mb-4"><span class="badge bg-secondary w-100">Question 17 / 30</span></h5>
                                <hr>
                                <h6 class="text-sm-left">
                                    <strong>17°) </strong>Travailler sur différents projets en même temps vous dérange t-il ?
                                </h6>
                                <div class="mt-2">
                                <div class="custom-control custom-radio mb-5">
                                    <input type="radio" id="customRadio17_1" name="ChoixRQ17" class="custom-control-input" value="A"/>
                                    <label class="custom-control-label" for="customRadio17_1">A. Non</label>
                                </div>
                                <div class="custom-control custom-radio mb-5">
                                    <input type="radio" id="customRadio17_2" name="ChoixRQ17" class="custom-control-input" value="B"/>
                                    <label class="custom-control-label" for="customRadio17_2">B. Oui, Je préfère me concentrer sur une chose à la fois</label>
                                </div>
                                <div class="custom-control custom-radio mb-5">
                                    <input type="radio" id="customRadio17_3" name="ChoixRQ17" class="custom-control-input" value="C"/>
                                    <label class="custom-control-label" for="customRadio17_3">C. Au contraire, je préfère cela.</label>
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

                    <div class="row" id="Q18">
                        <div class="col-sm-12">
                            <div class="mb-0 h-75">
                                <h6 class="text-center">TEST STRESS</h6>
                                <hr>                          
                                <h5 class="mb-4"><span class="badge bg-secondary w-100">Question 18 / 30</span></h5>
                                <hr>
                                <h6 class="text-sm-left">
                                    <strong>18°) </strong>Vous arrive t-il de vous en vouloir ou d’être en colère après avoir commis une erreur ou si les choses ne se déroulent pas comme prévu.
                                </h6>
                                <div class="mt-2">
                                <div class="custom-control custom-radio mb-5">
                                    <input type="radio" id="customRadio18_1" name="ChoixRQ18" class="custom-control-input" value="A"/>
                                    <label class="custom-control-label" for="customRadio18_1">A. Parfois, comme la plupart des gens, je suppose</label>
                                </div>
                                <div class="custom-control custom-radio mb-5">
                                    <input type="radio" id="customRadio18_2" name="ChoixRQ18" class="custom-control-input" value="B"/>
                                    <label class="custom-control-label" for="customRadio18_2">B. Probablement plus souvent que les autres</label>
                                </div>
                                <div class="custom-control custom-radio mb-5">
                                    <input type="radio" id="customRadio18_3" name="ChoixRQ18" class="custom-control-input" value="C"/>
                                    <label class="custom-control-label" for="customRadio18_3">C. Probablement moins souvent que la plupart des gens</label>
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

                    <div class="row" id="Q19">
                        <div class="col-sm-12">
                            <div class="mb-0 h-75">
                                <h6 class="text-center">TEST STRESS</h6>
                                <hr>                          
                                <h5 class="mb-4"><span class="badge bg-secondary w-100">Question 19 / 30</span></h5>
                                <hr>
                                <h6 class="text-sm-left">
                                    <strong>19°) </strong>Avez-vous déjà suivi un traitement, ou pris des médicaments, contre le stress ?
                                </h6>
                                <div class="mt-2">
                                <div class="custom-control custom-radio mb-5">
                                    <input type="radio" id="customRadio19_1" name="ChoixRQ19" class="custom-control-input" value="A"/>
                                    <label class="custom-control-label" for="customRadio19_1">A. Parfois</label>
                                </div>
                                <div class="custom-control custom-radio mb-5">
                                    <input type="radio" id="customRadio19_2" name="ChoixRQ19" class="custom-control-input" value="B"/>
                                    <label class="custom-control-label" for="customRadio19_2">B. Assez souvent</label>
                                </div>
                                <div class="custom-control custom-radio mb-5">
                                    <input type="radio" id="customRadio19_3" name="ChoixRQ19" class="custom-control-input" value="C"/>
                                    <label class="custom-control-label" for="customRadio19_3">C. Jamais</label>
                                </div>                                
                                </div>                                    
                                </div>
                                <div class="progress mt-5" style="height: 25px">
                                    <div
                                        class="progress-bar bg-info"
                                        role="progressbar"
                                        style="width: 63%"
                                        aria-valuenow="6"
                                        aria-valuemin="0"
                                        aria-valuemax="100">
                                        63%
                                    </div>
                                </div>
                            </div>
                    </div>

                    <div class="row" id="Q20">
                        <div class="col-sm-12">
                            <div class="mb-0 h-75">
                                <h6 class="text-center">TEST STRESS</h6>
                                <hr>                          
                                <h5 class="mb-4"><span class="badge bg-secondary w-100">Question 20 / 30</span></h5>
                                <hr>
                                <h6 class="text-sm-left">
                                    <strong>20°) </strong>Votre santé a-t-elle déjà été affectée par la mort ou la maladie d’un être proche ?
                                </h6>
                                <div class="mt-2">
                                <div class="custom-control custom-radio mb-5">
                                    <input type="radio" id="customRadio20_1" name="ChoixRQ20" class="custom-control-input" value="A"/>
                                    <label class="custom-control-label" for="customRadio20_1">A. Non, mais cela pourrait arriver dans le futur, je ne sais pas.</label>
                                </div>
                                <div class="custom-control custom-radio mb-5">
                                    <input type="radio" id="customRadio20_2" name="ChoixRQ20" class="custom-control-input" value="B"/>
                                    <label class="custom-control-label" for="customRadio20_2">B. Oui.</label>
                                </div>
                                <div class="custom-control custom-radio mb-5">
                                    <input type="radio" id="customRadio20_3" name="ChoixRQ20" class="custom-control-input" value="C"/>
                                    <label class="custom-control-label" for="customRadio20_3">C. Non, cela m’est arrivé et j’en ai beaucoup souffert comme tout un chacun mais cela n’a jamais eu de répercussions sur ma santé.</label>
                                </div>                               
                                </div>                                    
                                </div>
                                <div class="progress mt-5" style="height: 25px">
                                    <div
                                        class="progress-bar bg-info"
                                        role="progressbar"
                                        style="width: 67%"
                                        aria-valuenow="6"
                                        aria-valuemin="0"
                                        aria-valuemax="100">
                                        67%
                                    </div>
                                </div>
                            </div>
                    </div>

                    <div class="row" id="Q21">
                        <div class="col-sm-12">
                            <div class="mb-0 h-75">
                                <h6 class="text-center">TEST STRESS</h6>
                                <hr>                          
                                <h5 class="mb-4"><span class="badge bg-secondary w-100">Question 21 / 30</span></h5>
                                <hr>
                                <h6 class="text-sm-left">
                                    <strong>21°) </strong>Avez-vous déjà souffert du stress des examens ?
                                </h6>
                                <div class="mt-2">
                                <div class="custom-control custom-radio mb-5">
                                    <input type="radio" id="customRadio21_1" name="ChoixRQ21" class="custom-control-input" value="A"/>
                                    <label class="custom-control-label" for="customRadio21_1">A. Les examens me stressent un peu mais pas plus que la plupart des gens</label>
                                </div>
                                <div class="custom-control custom-radio mb-5">
                                    <input type="radio" id="customRadio21_2" name="ChoixRQ21" class="custom-control-input" value="B"/>
                                    <label class="custom-control-label" for="customRadio21_2">B. Oui</label>
                                </div>
                                <div class="custom-control custom-radio mb-5">
                                    <input type="radio" id="customRadio21_3" name="ChoixRQ21" class="custom-control-input" value="C"/>
                                    <label class="custom-control-label" for="customRadio21_3">C. Non</label>
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

                    <div class="row" id="Q22">
                        <div class="col-sm-12">
                            <div class="mb-0 h-75">
                                <h6 class="text-center">TEST STRESS</h6>
                                <hr>                          
                                <h5 class="mb-4"><span class="badge bg-secondary w-100">Question 22 / 30</span></h5>
                                <hr>
                                <h6 class="text-sm-left">
                                    <strong>22°) </strong>Pensez-vous des traitements alternatifs comme les massages pour soigner le stress ?
                                </h6>
                                <div class="mt-2">
                                <div class="custom-control custom-radio mb-5">
                                    <input type="radio" id="customRadio22_1" name="ChoixRQ22" class="custom-control-input" value="A"/>
                                    <label class="custom-control-label" for="customRadio22_1">A. Je ne sais pas trop quoi en penser. J’y viendrais peut-être si le besoin s’en fait sentir</label>
                                </div>
                                <div class="custom-control custom-radio mb-5">
                                    <input type="radio" id="customRadio22_2" name="ChoixRQ22" class="custom-control-input" value="B"/>
                                    <label class="custom-control-label" for="customRadio22_2">B. Je n’envisagerai jamais un tel traitement.</label>
                                </div>
                                <div class="custom-control custom-radio mb-5">
                                    <input type="radio" id="customRadio22_3" name="ChoixRQ22" class="custom-control-input" value="C"/>
                                    <label class="custom-control-label" for="customRadio22_3">C. Cela peut être très bénéfique.</label>
                                </div>                               
                                </div>                                    
                                </div>
                                <div class="progress mt-5" style="height: 25px">
                                    <div
                                        class="progress-bar bg-info"
                                        role="progressbar"
                                        style="width: 73%"
                                        aria-valuenow="6"
                                        aria-valuemin="0"
                                        aria-valuemax="100">
                                        73%
                                    </div>
                                </div>
                            </div>
                    </div>

                    <div class="row" id="Q23">
                        <div class="col-sm-12">
                            <div class="mb-0 h-75">
                                <h6 class="text-center">TEST STRESS</h6>
                                <hr>                          
                                <h5 class="mb-4"><span class="badge bg-secondary w-100">Question 23 / 30</span></h5>
                                <hr>
                                <h6 class="text-sm-left">
                                    <strong>23°) </strong>Vous arrive-t-il d’être stressé(e) à l’idée d’accomplir certaines corvées ménagères comme la lessive ou le ménage ?
                                </h6>
                                <div class="mt-2">
                                <div class="custom-control custom-radio mb-5">
                                    <input type="radio" id="customRadio23_1" name="ChoixRQ23" class="custom-control-input" value="A"/>
                                    <label class="custom-control-label" for="customRadio23_1">A. Non cela ne me stresse pas même si ces tâches ne sont pas particulièrement réjouissantes</label>
                                </div>
                                <div class="custom-control custom-radio mb-5">
                                    <input type="radio" id="customRadio23_2" name="ChoixRQ23" class="custom-control-input" value="B"/>
                                    <label class="custom-control-label" for="customRadio23_2">B. Oui.</label>
                                </div>
                                <div class="custom-control custom-radio mb-5">
                                    <input type="radio" id="customRadio23_3" name="ChoixRQ23" class="custom-control-input" value="C"/>
                                    <label class="custom-control-label" for="customRadio23_3">C. Jamais</label>
                                </div>                               
                                </div>                                    
                                </div>
                                <div class="progress mt-5" style="height: 25px">
                                    <div
                                        class="progress-bar bg-info"
                                        role="progressbar"
                                        style="width: 77%"
                                        aria-valuenow="6"
                                        aria-valuemin="0"
                                        aria-valuemax="100">
                                        77%
                                    </div>
                                </div>
                            </div>
                    </div>

                    <div class="row" id="Q24">
                        <div class="col-sm-12">
                            <div class="mb-0 h-75">
                                <h6 class="text-center">TEST STRESS</h6>
                                <hr>                          
                                <h5 class="mb-4"><span class="badge bg-secondary w-100">Question 24 / 30</span></h5>
                                <hr>
                                <h6 class="text-sm-left">
                                    <strong>24°) </strong>Vous est-il facile de faire le vide et de vous détendre complètement ?
                                </h6>
                                <div class="mt-2">
                                <div class="custom-control custom-radio mb-5">
                                    <input type="radio" id="customRadio24_1" name="ChoixRQ24" class="custom-control-input" value="A"/>
                                    <label class="custom-control-label" for="customRadio24_1">A. Cela dépend des moments.</label>
                                </div>
                                <div class="custom-control custom-radio mb-5">
                                    <input type="radio" id="customRadio24_2" name="ChoixRQ24" class="custom-control-input" value="B"/>
                                    <label class="custom-control-label" for="customRadio24_2">B. C’est quasiment voire carrément impossible.</label>
                                </div>
                                <div class="custom-control custom-radio mb-5">
                                    <input type="radio" id="customRadio24_3" name="ChoixRQ24" class="custom-control-input" value="C"/>
                                    <label class="custom-control-label" for="customRadio24_3">C. J’ai la chance de pouvoir assez facilement faire le vide et me détendre</label>
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

                    <div class="row" id="Q25">
                        <div class="col-sm-12">
                            <div class="mb-0 h-75">
                                <h6 class="text-center">TEST STRESS</h6>
                                <hr>                          
                                <h5 class="mb-4"><span class="badge bg-secondary w-100">Question 25 / 30</span></h5>
                                <hr>
                                <h6 class="text-sm-left">
                                    <strong>25°) </strong>Vous est-il souvent arrivé d’être sous pression et de n’arriver à combattre ce stress qu’en vous immergeant dans le travail ?
                                </h6>
                                <div class="mt-2">
                                <div class="custom-control custom-radio mb-5">
                                    <input type="radio" id="customRadio25_1" name="ChoixRQ25" class="custom-control-input" value="A"/>
                                    <label class="custom-control-label" for="customRadio25_1">A. Parfois.</label>
                                </div>
                                <div class="custom-control custom-radio mb-5">
                                    <input type="radio" id="customRadio25_2" name="ChoixRQ25" class="custom-control-input" value="B"/>
                                    <label class="custom-control-label" for="customRadio25_2">B. Plus souvent que je ne le voudrais.</label>
                                </div>
                                <div class="custom-control custom-radio mb-5">
                                    <input type="radio" id="customRadio25_3" name="ChoixRQ25" class="custom-control-input" value="C"/>
                                    <label class="custom-control-label" for="customRadio25_3">C. Rarement voire jamais.</label>
                                </div>                               
                                </div>                                    
                                </div>
                                <div class="progress mt-5" style="height: 25px">
                                    <div
                                        class="progress-bar bg-info"
                                        role="progressbar"
                                        style="width: 83%"
                                        aria-valuenow="6"
                                        aria-valuemin="0"
                                        aria-valuemax="100">
                                        83%
                                    </div>
                                </div>
                            </div>
                    </div>

                    <div class="row" id="Q26">
                        <div class="col-sm-12">
                            <div class="mb-0 h-75">
                                <h6 class="text-center">TEST STRESS</h6>
                                <hr>                          
                                <h5 class="mb-4"><span class="badge bg-secondary w-100">Question 26 / 30</span></h5>
                                <hr>
                                <h6 class="text-sm-left">
                                    <strong>26°) </strong>Vous êtes coincé(e) dans un embouteillage. Que ressentez-vous ?
                                </h6>
                                <div class="mt-2">
                                <div class="custom-control custom-radio mb-5">
                                    <input type="radio" id="customRadio26_1" name="ChoixRQ26" class="custom-control-input" value="A"/>
                                    <label class="custom-control-label" for="customRadio26_1">A. De la colère.</label>
                                </div>
                                <div class="custom-control custom-radio mb-5">
                                    <input type="radio" id="customRadio26_2" name="ChoixRQ26" class="custom-control-input" value="B"/>
                                    <label class="custom-control-label" for="customRadio26_2">B. De la frustration.</label>
                                </div>
                                <div class="custom-control custom-radio mb-5">
                                    <input type="radio" id="customRadio26_3" name="ChoixRQ26" class="custom-control-input" value="C"/>
                                    <label class="custom-control-label" for="customRadio26_3">C. De l’ennui.</label>
                                </div>                               
                                </div>                                    
                                </div>
                                <div class="progress mt-5" style="height: 25px">
                                    <div
                                        class="progress-bar bg-info"
                                        role="progressbar"
                                        style="width: 87%"
                                        aria-valuenow="6"
                                        aria-valuemin="0"
                                        aria-valuemax="100">
                                        87%
                                    </div>
                                </div>
                            </div>
                    </div>

                    <div class="row" id="Q27">
                        <div class="col-sm-12">
                            <div class="mb-0 h-75">
                                <h6 class="text-center">TEST STRESS</h6>
                                <hr>                          
                                <h5 class="mb-4"><span class="badge bg-secondary w-100">Question 27 / 30</span></h5>
                                <hr>
                                <h6 class="text-sm-left">
                                    <strong>27°) </strong>Ressentez-vous plus ou moins de pression avec l’âge ?
                                </h6>
                                <div class="mt-2">
                                <div class="custom-control custom-radio mb-5">
                                    <input type="radio" id="customRadio27_1" name="ChoixRQ27" class="custom-control-input" value="A"/>
                                    <label class="custom-control-label" for="customRadio27_1">A. A peu près pareil</label>
                                </div>
                                <div class="custom-control custom-radio mb-5">
                                    <input type="radio" id="customRadio27_2" name="ChoixRQ27" class="custom-control-input" value="B"/>
                                    <label class="custom-control-label" for="customRadio27_2">B. Plus</label>
                                </div>
                                <div class="custom-control custom-radio mb-5">
                                    <input type="radio" id="customRadio27_3" name="ChoixRQ27" class="custom-control-input" value="C"/>
                                    <label class="custom-control-label" for="customRadio27_3">C. Moins</label>
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

                    <div class="row" id="Q28">
                        <div class="col-sm-12">
                            <div class="mb-0 h-75">
                                <h6 class="text-center">TEST STRESS</h6>
                                <hr>                          
                                <h5 class="mb-4"><span class="badge bg-secondary w-100">Question 28 / 30</span></h5>
                                <hr>
                                <h6 class="text-sm-left">
                                    <strong>28°) </strong>Que ressentiriez-vous si vous deviez déménager à nouveau ?
                                </h6>
                                <div class="mt-2">
                                <div class="custom-control custom-radio mb-5">
                                    <input type="radio" id="customRadio28_1" name="ChoixRQ28" class="custom-control-input" value="A"/>
                                    <label class="custom-control-label" for="customRadio28_1">A. J’aime assez ma maison actuelle mais cela pourrait présenter certains avantages</label>
                                </div>
                                <div class="custom-control custom-radio mb-5">
                                    <input type="radio" id="customRadio28_2" name="ChoixRQ28" class="custom-control-input" value="B"/>
                                    <label class="custom-control-label" for="customRadio28_2">B. Je préfère éviter tous les tracas liés à un déménagement.</label>
                                </div>
                                <div class="custom-control custom-radio mb-5">
                                    <input type="radio" id="customRadio28_3" name="ChoixRQ28" class="custom-control-input" value="C"/>
                                    <label class="custom-control-label" for="customRadio28_3">C. Cela demande beaucoup de travail mais c’est généralement un évènement que l’on prend plaisir à planifier.</label>
                                </div>                               
                                </div>                                    
                                </div>
                                <div class="progress mt-5" style="height: 25px">
                                    <div
                                        class="progress-bar bg-info"
                                        role="progressbar"
                                        style="width: 93%"
                                        aria-valuenow="6"
                                        aria-valuemin="0"
                                        aria-valuemax="100">
                                        93%
                                    </div>
                                </div>
                            </div>
                    </div>

                    <div class="row" id="Q29">
                        <div class="col-sm-12">
                            <div class="mb-0 h-75">
                                <h6 class="text-center">TEST STRESS</h6>
                                <hr>                          
                                <h5 class="mb-4"><span class="badge bg-secondary w-100">Question 29 / 30</span></h5>
                                <hr>
                                <h6 class="text-sm-left">
                                    <strong>29°) </strong>Le stress a-t-il souvent eu des répercussions sur votre vie affective ?
                                </h6>
                                <div class="mt-2">
                                <div class="custom-control custom-radio mb-5">
                                    <input type="radio" id="customRadio29_1" name="ChoixRQ29" class="custom-control-input" value="A"/>
                                    <label class="custom-control-label" for="customRadio29_1">A. Parfois.</label>
                                </div>
                                <div class="custom-control custom-radio mb-5">
                                    <input type="radio" id="customRadio29_2" name="ChoixRQ29" class="custom-control-input" value="B"/>
                                    <label class="custom-control-label" for="customRadio29_2">B. Relativement souvent.</label>
                                </div>
                                <div class="custom-control custom-radio mb-5">
                                    <input type="radio" id="customRadio29_3" name="ChoixRQ29" class="custom-control-input" value="C"/>
                                    <label class="custom-control-label" for="customRadio29_3">C. Jamais.</label>
                                </div>                               
                                </div>                                    
                                </div>
                                <div class="progress mt-5" style="height: 25px">
                                    <div
                                        class="progress-bar bg-info"
                                        role="progressbar"
                                        style="width: 97%"
                                        aria-valuenow="6"
                                        aria-valuemin="0"
                                        aria-valuemax="100">
                                        97%
                                    </div>
                                </div>
                            </div>
                    </div>

                    <div class="row" id="Q30">
                        <div class="col-sm-12">
                            <div class="mb-0 h-75">
                                <h6 class="text-center">TEST STRESS</h6>
                                <hr>                          
                                <h5 class="mb-4"><span class="badge bg-secondary w-100">Question 30 / 30</span></h5>
                                <hr>
                                <h6 class="text-sm-left">
                                    <strong>30°) </strong>Avez-vous souffert du stress après un déménagement ou une perturbation dans votre cadre de vie ?
                                </h6>
                                <div class="mt-2">
                                <div class="custom-control custom-radio mb-5">
                                    <input type="radio" id="customRadio30_1" name="ChoixRQ30" class="custom-control-input" value="A"/>
                                    <label class="custom-control-label" for="customRadio30_1">A. Non, mis à part quelques moments de nostalgie.</label>
                                </div>
                                <div class="custom-control custom-radio mb-5">
                                    <input type="radio" id="customRadio30_2" name="ChoixRQ30" class="custom-control-input" value="B"/>
                                    <label class="custom-control-label" for="customRadio30_2">B. Oui.</label>
                                </div>
                                <div class="custom-control custom-radio mb-5">
                                    <input type="radio" id="customRadio30_3" name="ChoixRQ30" class="custom-control-input" value="C"/>
                                    <label class="custom-control-label" for="customRadio30_3">C. Non.</label>
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
                        1- Quelle importance accordez-vous au succès ?
                    </td>
                </tr>
                <tr>    
                    <td  id="t1_1">
                        A. Une importance moyenne.
                        <span id="tQ1_1" hidden>A</span>
                    </td id="t1_3">
                    <td class="text-center" rowspan="3" width="200px">
                            <a href="#" class="btnhref"  id="btnQ" data-color="#265ed7" data-id="1"
                                ><i class="icon-copy dw dw-edit2"></i
                            ></a>
                    </td>                    
                </tr>
                <tr>
                    <td id="t1_2">
                        B. Une très grande importance.
                        <span id="tQ1_2" hidden>B</span>
                    </td>
                </tr>
                <tr>
                    <td id="t1_3">
                        C. Le succès ne me préoccupe pas beaucoup
                        <span id="tQ1_3" hidden>C</span>
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
                        2- Vous est-il déjà arrivé de prendre des jours de congé parce que vous étiez stressé(e) ?
                    </td>
                </tr>
                <tr>    
                    <td id="t2_1">
                        A. Une ou 2 fois
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
                        B. Plus de deux fois
                        <span id="tQ2_2" hidden>B</span>
                    </td>
                </tr>
                <tr>
                    <td id="t2_3">
                        C. Jamais
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
                        3- Vous considère-t-on comme une personne sachant conserver son sang froid en période de crise ?
                    </td>
                </tr>
                <tr>    
                    <td id="t3_1">
                        A. Parfois, mais ceux qui arrivent à garder la tête froide en période de crise n'ont généralement pas saisi la gravité de la situation.
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
                        B. Pas vraiment.
                        <span id="tQ3_2" hidden>B</span>
                    </td>
                </tr>
                <tr>
                    <td id="t3_3">
                        C. Oui, je pense être à juste titre perçu(e) ainsi.
                        <span id="tQ3_3" hidden>C</span>
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
                        4- Parmi les propositions suivantes, laquelle est la plus à même de vous détendre et de réduire votre stress après une journée particulièrement éprouvante ?
                    </td>
                </tr>
                <tr>    
                    <td id="t4_1">
                        A. Quelques heures de sommeil dans le canapé.
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
                        B. Une sortie nocturne entre copains
                        <span id="tQ4_2" hidden>B</span>
                    </td>
                </tr>
                <tr>
                    <td id="t4_3">
                        C. Une pause café de 15 min
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
                        5- Le stress peut-il perturber l’atteinte de vos objectifs
                    </td>
                </tr>
                <tr>    
                    <td id="t5_1">
                        A. Non
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
                        B. Rarement
                        <span id="tQ5_2" hidden>B</span>
                    </td>
                </tr>
                <tr>
                    <td id="t5_3">
                        C. Oui
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
                        6- Pensez-vous que la vie actuelle génère plus de stress qu'il y a 10 ans ?
                    </td>
                </tr>
                <tr>    
                    <td id="t6_1">
                        A. Peut-être.
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
                        B. Oui
                        <span id="tQ6_2" hidden>B</span>
                    </td>
                </tr>
                <tr>
                    <td id="t6_3">
                        C. Non
                        <span id="tQ6_3" hidden>C</span>
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
                        7- Votre sœur vous demande de garder ses trois enfants un peu turbulents pendant le week-end en raison d'une crise familiale. Comment envisagez-vous cette situation ?
                    </td>
                </tr>
                <tr>    
                    <td id="t7_1">
                        A. Cela m'inquiète terriblement.
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
                        B. L'idée de garder ces trois enfants me terrifie à un point tel que je chercherai probablement un moyen d'y échapper.  
                        <span id="tQ7_2" hidden>B</span>
                    </td>
                </tr>
                <tr>
                    <td id="t7_3">
                        C. C'est un nouveau défi que je relèverai avec plaisir.
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
                        8- Le stress vous a-t-il déjà conduit(e) à endommager des choses ?
                    </td>
                </tr>
                <tr>    
                    <td id="t8_1">
                        A. Non, je n'ai jamais rien fait de tel mais il m'est déjà arrivé de raccrocher brutalement le téléphone.
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
                        B. Oui.  
                        <span id="tQ8_2" hidden>B</span>
                    </td>
                </tr>
                <tr>
                    <td id="t8_3">
                        C. Non.
                        <span id="tQ8_3" hidden>C</span>
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
                        9- Vous arrive-t-il d'être ennuyé(e) par des petits riens ?
                    </td>
                </tr>
                <tr>    
                    <td id="t9_1">
                        A. Oui, parfois.
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
                        B. Assez souvent.  
                        <span id="tQ9_2" hidden>B</span>
                    </td>
                </tr>
                <tr>
                    <td id="t9_3">
                        C. Rarement voire jamais.
                        <span id="tQ9_3" hidden>C</span>
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
                        10- Que ressentiriez-vous si vous deviez vous familiariser avec une nouvelle technologie ? 
                    </td>
                </tr>
                <tr>    
                    <td id="t10_1">
                        A. Rien de particulier. Si je devais me familiariser avec un nouvel outil de travail pour des raisons professionnelles, je m'adapterais sans difficulté.
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
                        B. Cela m'inquièterait un peu.  
                        <span id="tQ10_2" hidden>B</span>
                    </td>
                </tr>
                <tr>
                    <td id="t10_3">
                        C. J'aime apprendre des choses nouvelles, je trouve cela très intéressant.
                        <span id="tQ10_3" hidden>C</span>
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
                        11- Quel est, à votre avis, l'objectif premier des week-ends ? 
                    </td>
                </tr>
                <tr>    
                    <td id="t11_1">
                        A. La possibilité de passer du temps avec ses amis et sa famille.
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
                        B. La possibilité de ne pas travailler aussi dur que durant la semaine même si je ne parviens jamais à me détendre complètement.  
                        <span id="tQ11_2" hidden>B</span>
                    </td>
                </tr>
                <tr>
                    <td id="t11_3">
                        C. La possibilité de se détendre et d'oublier le travail.
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
                        12- Que ressentez-vous lorsque vous effectuez des travaux chez vous ? 
                    </td>
                </tr>
                <tr>    
                    <td id="t12_1">
                        A. Cela ne me dérange pas particulièrement car c'est nécessaire.
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
                        B. Je suis un peu tendu(e) durant les travaux car cela perturbe ma routine.  
                        <span id="tQ12_2" hidden>B</span>
                    </td>
                </tr>
                <tr>
                    <td id="t12_3">
                        C. Je suis très content(e) et parfois excité(e) selon la nature des travaux effectués
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
                        13- Avez-vous des amis de confiance vers lesquels vous tourner en cas de difficulté ? 
                    </td>
                </tr>
                <tr>    
                    <td id="t13_1">
                        A. Peut-être.
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
                        B. Pas vraiment.  
                        <span id="tQ13_2" hidden>B</span>
                    </td>
                </tr>
                <tr>
                    <td id="t13_3">
                        C. Oui.
                        <span id="tQ13_3" hidden>C</span>
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
                        14- Avez-vous l'impression que nous vivons dans un monde encore plus compétitif qu'auparavant ? 
                    </td>
                </tr>
                <tr>    
                    <td id="t14_1">
                        A. Le monde moderne est peut-être un peu plus compétitif que celui de nos parents ou grands-parents.
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
                        B. Oui, j'en suis convaincu(e).  
                        <span id="tQ14_2" hidden>B</span>
                    </td>
                </tr>
                <tr>
                    <td id="t14_3">
                        C. Non, je pense que la compétition est restée la même.
                        <span id="tQ14_3" hidden>C</span>
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
                        15- Vous arrive-t-il de discuter avec les autres de ce que vous ressentez ?
                    </td>
                </tr>
                <tr>    
                    <td id="t15_1">
                        A. Parfois.
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
                        B. Rarement voire jamais.  
                        <span id="tQ15_2" hidden>B</span>
                    </td>
                </tr>
                <tr>
                    <td id="t15_3">
                        C. Assez souvent.
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
                        16- Pensez-vous qu'il soit nécessaire de toujours vous efforcer d'aller de l'avant ?
                    </td>
                </tr>
                <tr>    
                    <td id="t16_1">
                        A. Parfois.
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
                        B. Oui, je pense que c'est la seule manière de réussir dans la vie.  
                        <span id="tQ16_2" hidden>B</span>
                    </td>
                </tr>
                <tr>
                    <td id="t16_3">
                        C. Non, la vie est bien trop courte.
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
                        17- Travailler sur différents projets en même temps vous dérange t-il ?
                    </td>
                </tr>
                <tr>    
                    <td id="t17_1">
                        A. Non
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
                        B. Oui, Je préfère me concentrer sur une chose à la fois  
                        <span id="tQ17_2" hidden>B</span>
                    </td>
                </tr>
                <tr>
                    <td id="t17_3">
                        C. Au contraire, je préfère cela.
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
                        18- Vous arrive t-il de vous en vouloir ou d’être en colère après avoir commis une erreur ou si les choses ne se déroulent pas comme prévu.
                    </td>
                </tr>
                <tr>    
                    <td id="t18_1">
                        A. Parfois, comme la plupart des gens, je suppose
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
                        B. Probablement plus souvent que les autres  
                        <span id="tQ18_2" hidden>B</span>
                    </td>
                </tr>
                <tr>
                    <td id="t18_3">
                        C. Probablement moins souvent que la plupart des gens
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
                        19- Avez-vous déjà suivi un traitement, ou pris des médicaments, contre le stress ?
                    </td>
                </tr>
                <tr>    
                    <td id="t19_1">
                        A. Parfois
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
                        B. Assez souvent  
                        <span id="tQ19_2" hidden>B</span>
                    </td>
                </tr>
                <tr>
                    <td id="t19_3">
                        C. Jamais
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
                        20- Votre santé a-t-elle déjà été affectée par la mort ou la maladie d’un être proche ?
                    </td>
                </tr>
                <tr>    
                    <td id="t20_1">
                        A. Non, mais cela pourrait arriver dans le futur, je ne sais pas.
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
                        B. Oui.  
                        <span id="tQ20_2" hidden>B</span>
                    </td>
                </tr>
                <tr>
                    <td id="t20_3">
                        C. Non, cela m’est arrivé et j’en ai beaucoup souffert comme tout un chacun mais cela n’a jamais eu de répercussions sur ma santé.
                        <span id="tQ20_3" hidden>C</span>
                    </td>
                </tr>                             
            </tbody>
        </table>
    </div> 

    <!-- 21°) -->
    <div class="card-box pb-10 mt-2">
        <table class="data-table table nowrap">
            <tbody>
                <tr>
                    <td>
                        21- Avez-vous déjà souffert du stress des examens ?
                    </td>
                </tr>
                <tr>    
                    <td id="t21_1">
                        A. Les examens me stressent un peu mais pas plus que la plupart des gens
                        <span id="tQ21_1" hidden>A</span>
                    </td>
                    <td class="text-center" rowspan="3" width="200px">
                            <a href="#" class="btnhref" id="btnQ21" data-color="#265ed7"  data-id="21"
                                ><i class="icon-copy dw dw-edit2"></i
                            ></a>
                    </td>                    
                </tr>
                <tr>
                    <td id="t21_2">
                        B. Oui  
                        <span id="tQ21_2" hidden>B</span>
                    </td>
                </tr>
                <tr>
                    <td id="t21_3">
                        C. Non
                        <span id="tQ21_3" hidden>C</span>
                    </td>
                </tr>                             
            </tbody>
        </table>
    </div>                  

    <!-- 22°) -->
    <div class="card-box pb-10 mt-2">
        <table class="data-table table nowrap">
            <tbody>
                <tr>
                    <td>
                        22- Pensez-vous des traitements alternatifs comme les massages pour soigner le stress ?
                    </td>
                </tr>
                <tr>    
                    <td id="t22_1">
                        A. Je ne sais pas trop quoi en penser. J’y viendrais peut-être si le besoin s’en fait sentir
                        <span id="tQ22_1" hidden>A</span>
                    </td>
                    <td class="text-center" rowspan="3" width="200px">
                            <a href="#" class="btnhref" id="btnQ22" data-color="#265ed7"  data-id="22"
                                ><i class="icon-copy dw dw-edit2"></i
                            ></a>
                    </td>                    
                </tr>
                <tr>
                    <td id="t22_2">
                        B. Je n’envisagerai jamais un tel traitement.  
                        <span id="tQ22_2" hidden>B</span>
                    </td>
                </tr>
                <tr>
                    <td id="t22_3">
                        C. Cela peut être très bénéfique.
                        <span id="tQ22_3" hidden>C</span>
                    </td>
                </tr>                             
            </tbody>
        </table>
    </div> 

    <!-- 23°) -->
    <div class="card-box pb-10 mt-2">
        <table class="data-table table nowrap">
            <tbody>
                <tr>
                    <td>
                        23- Vous arrive-t-il d’être stressé(e) à l’idée d’accomplir certaines corvées ménagères comme la lessive ou le ménage ?
                    </td>
                </tr>
                <tr>    
                    <td id="t23_1">
                        A. Non cela ne me stresse pas même si ces tâches ne sont pas particulièrement réjouissantes
                        <span id="tQ23_1" hidden>A</span>
                    </td>
                    <td class="text-center" rowspan="3" width="200px">
                            <a href="#" class="btnhref" id="btnQ23" data-color="#265ed7"  data-id="23"
                                ><i class="icon-copy dw dw-edit2"></i
                            ></a>
                    </td>                    
                </tr>
                <tr>
                    <td id="t23_2">
                        B. Oui.  
                        <span id="tQ23_2" hidden>B</span>
                    </td>
                </tr>
                <tr>
                    <td id="t23_3">
                        C. Jamais
                        <span id="tQ23_3" hidden>C</span>
                    </td>
                </tr>                             
            </tbody>
        </table>
    </div> 

    <!-- 24°) -->
    <div class="card-box pb-10 mt-2">
        <table class="data-table table nowrap">
            <tbody>
                <tr>
                    <td>
                        24- Vous est-il facile de faire le vide et de vous détendre complètement ?
                    </td>
                </tr>
                <tr>    
                    <td id="t24_1">
                        A. Cela dépend des moments.
                        <span id="tQ24_1" hidden>A</span>
                    </td>
                    <td class="text-center" rowspan="3" width="200px">
                            <a href="#" class="btnhref" id="btnQ24" data-color="#265ed7"  data-id="24"
                                ><i class="icon-copy dw dw-edit2"></i
                            ></a>
                    </td>                    
                </tr>
                <tr>
                    <td id="t24_2">
                        B. C’est quasiment voire carrément impossible.  
                        <span id="tQ24_2" hidden>B</span>
                    </td>
                </tr>
                <tr>
                    <td id="t24_3">
                        C. J’ai la chance de pouvoir assez facilement faire le vide et me détendre
                        <span id="tQ24_3" hidden>C</span>
                    </td>
                </tr>                             
            </tbody>
        </table>
    </div> 

    <!-- 25°) -->
    <div class="card-box pb-10 mt-2">
        <table class="data-table table nowrap">
            <tbody>
                <tr>
                    <td>
                        25- Vous est-il souvent arrivé d’être sous pression et de n’arriver à combattre ce stress qu’en vous immergeant dans le travail ?
                    </td>
                </tr>
                <tr>    
                    <td id="t25_1">
                        A. Parfois.
                        <span id="tQ25_1" hidden>A</span>
                    </td>
                    <td class="text-center" rowspan="3" width="200px">
                            <a href="#" class="btnhref" id="btnQ25" data-color="#265ed7"  data-id="25"
                                ><i class="icon-copy dw dw-edit2"></i
                            ></a>
                    </td>                    
                </tr>
                <tr>
                    <td id="t25_2">
                        B. Plus souvent que je ne le voudrais.  
                        <span id="tQ25_2" hidden>B</span>
                    </td>
                </tr>
                <tr>
                    <td id="t25_3">
                        C. Rarement voire jamais.
                        <span id="tQ25_3" hidden>C</span>
                    </td>
                </tr>                             
            </tbody>
        </table>
    </div>  

    <!-- 26°) -->
    <div class="card-box pb-10 mt-2">
        <table class="data-table table nowrap">
            <tbody>
                <tr>
                    <td>
                        26- Vous êtes coincé(e) dans un embouteillage. Que ressentez-vous ?
                    </td>
                </tr>
                <tr>    
                    <td id="t26_1">
                        A. De la colère.
                        <span id="tQ26_1" hidden>A</span>
                    </td>
                    <td class="text-center" rowspan="3" width="200px">
                            <a href="#" class="btnhref" id="btnQ26" data-color="#265ed7"  data-id="26"
                                ><i class="icon-copy dw dw-edit2"></i
                            ></a>
                    </td>                    
                </tr>
                <tr>
                    <td id="t26_2">
                        B. De la frustration. 
                        <span id="tQ26_2" hidden>B</span>
                    </td>
                </tr>
                <tr>
                    <td id="t26_3">
                        C. De l’ennui.
                        <span id="tQ26_3" hidden>C</span>
                    </td>
                </tr>                             
            </tbody>
        </table>
    </div>

    <!-- 27°) -->
    <div class="card-box pb-10 mt-2">
        <table class="data-table table nowrap">
            <tbody>
                <tr>
                    <td>
                        27- Ressentez-vous plus ou moins de pression avec l’âge ?
                    </td>
                </tr>
                <tr>    
                    <td id="t27_1">
                        A. A peu près pareil
                        <span id="tQ27_1" hidden>A</span>
                    </td>
                    <td class="text-center" rowspan="3" width="200px">
                            <a href="#" class="btnhref" id="btnQ27" data-color="#265ed7"  data-id="27"
                                ><i class="icon-copy dw dw-edit2"></i
                            ></a>
                    </td>                    
                </tr>
                <tr>
                    <td id="t27_2">
                        B. Plus  
                        <span id="tQ27_2" hidden>B</span>
                    </td>
                </tr>
                <tr>
                    <td id="t27_3">
                        C. Moins
                        <span id="tQ27_3" hidden>C</span>
                    </td>
                </tr>                             
            </tbody>
        </table>
    </div> 

    <!-- 28°) -->
    <div class="card-box pb-10 mt-2">
        <table class="data-table table nowrap">
            <tbody>
                <tr>
                    <td>
                        28- Que ressentiriez-vous si vous deviez déménager à nouveau ?
                    </td>
                </tr>
                <tr>    
                    <td id="t28_1">
                        A. J’aime assez ma maison actuelle mais cela pourrait présenter certains avantages
                        <span id="tQ28_1" hidden>A</span>
                    </td>
                    <td class="text-center" rowspan="3" width="200px">
                            <a href="#" class="btnhref" id="btnQ28" data-color="#265ed7"  data-id="28"
                                ><i class="icon-copy dw dw-edit2"></i
                            ></a>
                    </td>                    
                </tr>
                <tr>
                    <td id="t28_2">
                        B. Je préfère éviter tous les tracas liés à un déménagement.  
                        <span id="tQ28_2" hidden>B</span>
                    </td>
                </tr>
                <tr>
                    <td id="t28_3">
                        C. Cela demande beaucoup de travail mais c’est généralement un évènement que l’on prend plaisir à planifier.
                        <span id="tQ28_3" hidden>C</span>
                    </td>
                </tr>                             
            </tbody>
        </table>
    </div>  

    <!-- 29°) -->
    <div class="card-box pb-10 mt-2">
        <table class="data-table table nowrap">
            <tbody>
                <tr>
                    <td>
                        29- Que ressentiriez-vous si vous deviez déménager à nouveau ?
                    </td>
                </tr>
                <tr>    
                    <td id="t29_1">
                        A. J’aime assez ma maison actuelle mais cela pourrait présenter certains avantages
                        <span id="tQ29_1" hidden>A</span>
                    </td>
                    <td class="text-center" rowspan="3" width="200px">
                            <a href="#" class="btnhref" id="btnQ29" data-color="#265ed7"  data-id="29"
                                ><i class="icon-copy dw dw-edit2"></i
                            ></a>
                    </td>                    
                </tr>
                <tr>
                    <td id="t29_2">
                        B. Je préfère éviter tous les tracas liés à un déménagement.  
                        <span id="tQ29_2" hidden>B</span>
                    </td>
                </tr>
                <tr>
                    <td id="t29_3">
                        C. Cela demande beaucoup de travail mais c’est généralement un évènement que l’on prend plaisir à planifier.
                        <span id="tQ29_3" hidden>C</span>
                    </td>
                </tr>                             
            </tbody>
        </table>
    </div>         

    <!-- 30°) -->
    <div class="card-box pb-10 mt-2">
        <table class="data-table table nowrap">
            <tbody>
                <tr>
                    <td>
                        30- Que ressentiriez-vous si vous deviez déménager à nouveau ?
                    </td>
                </tr>
                <tr>    
                    <td id="t30_1">
                        A. J’aime assez ma maison actuelle mais cela pourrait présenter certains avantages
                        <span id="tQ30_1" hidden>A</span>
                    </td>
                    <td class="text-center" rowspan="3" width="200px">
                            <a href="#" class="btnhref" id="btnQ30" data-color="#265ed7"  data-id="30"
                                ><i class="icon-copy dw dw-edit2"></i
                            ></a>
                    </td>                    
                </tr>
                <tr>
                    <td id="t30_2">
                        B. Je préfère éviter tous les tracas liés à un déménagement.  
                        <span id="tQ30_2" hidden>B</span>
                    </td>
                </tr>
                <tr>
                    <td id="t30_3">
                        C. Cela demande beaucoup de travail mais c’est généralement un évènement que l’on prend plaisir à planifier.
                        <span id="tQ30_3" hidden>C</span>
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
    var nbreQuestions=30;
    var nbreReponsesParQuestion=3;
     
    $("#showQuestions").show();
    $("#showChoise").hide();


    initFields();
    CurrentQuestion="Q1";
    $("#Q1").show();
    $("#BtnPrev").hide();
     function initFields()
     {

        // $("#showChoise").hide();
        for (var i=1;i<=nbreQuestions;i++){
          $("#Q"+parseInt(i)).hide();  
        }

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
       //alert(Q1);
        $.ajax({
           type:'POST',
           url:"{{ route('TestStress.store') }}",
           data:{Q1:Q1,Q2:Q2,Q3:Q3,Q4:Q4,Q5:Q5,Q6:Q6,Q7:Q7,Q8:Q8,Q9:Q9,Q10:Q10
                 Q11:Q11,Q12:Q12,Q13:Q13,Q14:Q14,Q15:Q15,Q16:Q16,Q17:Q17,Q18:Q18,Q19:Q19,Q20:Q20
                 ,Q21:Q21,Q22:Q22,Q23:Q23,Q24:Q24,Q25:Q25,Q26:Q26,Q27:Q27,Q28:Q28,Q29:Q29,Q30:Q30
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