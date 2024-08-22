@extends('auth.layouts.app')
@section('content')
<div id="showQuestions">
    <div class="row align-items-center">
        <div class="col-md-6 col-lg-7">
            <img src="{{asset('deskapp/vendors/images/login-page-img.png')}}" alt="" />
        </div>
        <div class="col-md-6 col-lg-5">
            <div class="login-box bg-white box-shadow border-radius-10">
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
                                <h6 class="text-center">EVALUATIONS PAR LE STAGIAIRE</h6>
                                <hr>
                                <h5 class="text-left mt-2">Objectifs de l'action</h5>
                                <hr>                            
                                <h5 class="mb-4"><span class="badge bg-secondary w-100">Question 1 / 19</span></h5>
                                <h6 class="text-sm-left"><strong>1°) </strong>Les objectifs annoncés par l’animateur ont ils été atteints ?</h6>
                                <div class="mt-2">
                                <select class="custom-select2 form-control" id="NoteQ1" name="NoteQ1" style="width: 100%; height: 38px">
                                        <option value=""></option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
                                        <option value="NSP">NSP</option>
                                </select>
                                </div>
                                <div class="progress mt-4" style="height: 25px">
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
                    </div>
                                
                    <div class="row" id="Q2">
                        <div class="col-sm-12">
                            <div class="mb-0 h-75">
                                <h6 class="text-center">EVALUATIONS PAR LE STAGIAIRE</h6>
                                <hr>
                                <h5 class="text-left mt-2">Objectifs de l'action</h5>
                                <hr>                            
                                <h5 class="mb-4"><span class="badge bg-secondary w-100">Question 2 / 19</span></h5>
                                <h6 class="text-sm-left"><strong>2°) </strong>Les objectifs correspondent à mes attentes</h6>
                                <div class="mt-2">
                                <select class="custom-select2 form-control" id="NoteQ2" name="NoteQ2" style="width: 100%; height: 38px">
                                        <option value=""></option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
                                        <option value="NSP">NSP</option>
                                </select>
                                </div>
                                <div class="progress mt-4" style="height: 25px">
                                    <div
                                        class="progress-bar bg-info"
                                        role="progressbar"
                                        style="width: 11%"
                                        aria-valuenow="6"
                                        aria-valuemin="0"
                                        aria-valuemax="100">
                                        11%
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>             
                    
                    <div class="row" id="Q3">
                        <div class="col-sm-12">
                            <div class="mb-0 h-75">
                                <h6 class="text-center">EVALUATIONS PAR LE STAGIAIRE</h6>
                                <hr>
                                <h5 class="text-left mt-2">Objectifs de l'action</h5>
                                <hr>                            
                                <h5 class="mb-4"><span class="badge bg-secondary w-100">Question 3 / 19</span></h5>
                                <h6 class="text-sm-left"><strong>3°) </strong>Tous les thèmes abordés sont utiles</h6>
                                <div class="mt-2">
                                <select class="custom-select2 form-control" id="NoteQ3" name="NoteQ3" style="width: 100%; height: 38px">
                                        <option value=""></option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
                                        <option value="NSP">NSP</option>
                                </select>
                                </div>
                                <div class="progress mt-4" style="height: 25px">
                                    <div
                                        class="progress-bar bg-info"
                                        role="progressbar"
                                        style="width: 16%"
                                        aria-valuenow="6"
                                        aria-valuemin="0"
                                        aria-valuemax="100">
                                        16%
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>             
                    
                    <!-- Méthodes et contenus -->
                    
                    <div class="row" id="Q4">
                        <div class="col-sm-12">
                            <div class="mb-0 h-75">
                                <h6 class="text-center">EVALUATIONS PAR LE STAGIAIRE</h6>
                                <hr>
                                <h5 class="text-left mt-2">Méthodes et contenus</h5>
                                <hr>                            
                                <h5 class="mb-4"><span class="badge bg-secondary w-100">Question 4 / 19</span></h5>
                                <h6 class="text-sm-left"><strong>4°) </strong>La durée de la formation est adaptée</h6>
                                <div class="mt-2">
                                <select class="custom-select2 form-control" id="NoteQ4" name="NoteQ4" style="width: 100%; height: 38px">
                                        <option value=""></option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
                                        <option value="NSP">NSP</option>
                                </select>
                                </div>
                                <div class="progress mt-4" style="height: 25px">
                                    <div
                                        class="progress-bar bg-info"
                                        role="progressbar"
                                        style="width: 21%"
                                        aria-valuenow="6"
                                        aria-valuemin="0"
                                        aria-valuemax="100">
                                        21%
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>          
                    
                    <div class="row" id="Q5">
                        <div class="col-sm-12">
                            <div class="mb-0 h-75">
                                <h6 class="text-center">EVALUATIONS PAR LE STAGIAIRE</h6>
                                <hr>
                                <h5 class="text-left mt-2">Méthodes et contenus</h5>
                                <hr>                            
                                <h5 class="mb-4"><span class="badge bg-secondary w-100">Question 5 / 19</span></h5>
                                <h6 class="text-sm-left"><strong>5°) </strong>Les techniques d’animation sont pertinentes</h6>
                                <div class="mt-2">
                                <select class="custom-select2 form-control" id="NoteQ5" name="NoteQ5" style="width: 100%; height: 38px">
                                        <option value=""></option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
                                        <option value="NSP">NSP</option>
                                </select>
                                </div>
                                <div class="progress mt-4" style="height: 25px">
                                    <div
                                        class="progress-bar bg-info"
                                        role="progressbar"
                                        style="width: 26%"
                                        aria-valuenow="6"
                                        aria-valuemin="0"
                                        aria-valuemax="100">
                                        26%
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>                  
                    
                    <div class="row" id="Q6">
                        <div class="col-sm-12">
                            <div class="mb-0 h-75">
                                <h6 class="text-center">EVALUATIONS PAR LE STAGIAIRE</h6>
                                <hr>
                                <h5 class="text-left mt-2">Méthodes et contenus</h5>
                                <hr>                            
                                <h5 class="mb-4"><span class="badge bg-secondary w-100">Question 6 / 19</span></h5>
                                <h6 class="text-sm-left"><strong>6°) </strong>Les exercices sont cohérents avec notre réalité professionnelle</h6>
                                <div class="mt-2">
                                <select class="custom-select2 form-control" id="NoteQ6" name="NoteQ6" style="width: 100%; height: 38px">
                                        <option value=""></option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
                                        <option value="NSP">NSP</option>
                                </select>
                                </div>
                                <div class="progress mt-4" style="height: 25px">
                                    <div
                                        class="progress-bar bg-info"
                                        role="progressbar"
                                        style="width: 32%"
                                        aria-valuenow="6"
                                        aria-valuemin="0"
                                        aria-valuemax="100">
                                        32%
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>   

                    <!-- Animation -->                
                    <div class="row" id="Q7">
                        <div class="col-sm-12">
                            <div class="mb-0 h-75">
                                <h6 class="text-center">EVALUATIONS PAR LE STAGIAIRE</h6>
                                <hr>
                                <h5 class="text-left mt-2">Méthodes et contenus</h5>
                                <hr>                            
                                <h5 class="mb-4"><span class="badge bg-secondary w-100">Question 7 / 19</span></h5>
                                <h6 class="text-sm-left"><strong>7°) </strong>Le formateur est compétent</h6>
                                <div class="mt-2">
                                <select class="custom-select2 form-control" id="NoteQ7" name="NoteQ7" style="width: 100%; height: 38px">
                                        <option value=""></option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
                                        <option value="NSP">NSP</option>
                                </select>
                                </div>
                                <div class="progress mt-4" style="height: 25px">
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
                    </div>                
                    
                    <div class="row" id="Q8">
                        <div class="col-sm-12">
                            <div class="mb-0 h-75">
                                <h6 class="text-center">EVALUATIONS PAR LE STAGIAIRE</h6>
                                <hr>
                                <h5 class="text-left mt-2">Animation</h5>
                                <hr>                            
                                <h5 class="mb-4"><span class="badge bg-secondary w-100">Question 8 / 19</span></h5>
                                <h6 class="text-sm-left"><strong>8°) </strong>Ses exposés sont structurés</h6>
                                <div class="mt-2">
                                <select class="custom-select2 form-control" id="NoteQ8" name="NoteQ8" style="width: 100%; height: 38px">
                                        <option value=""></option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
                                        <option value="NSP">NSP</option>
                                </select>
                                </div>
                                <div class="progress mt-4" style="height: 25px">
                                    <div
                                        class="progress-bar bg-info"
                                        role="progressbar"
                                        style="width: 42%"
                                        aria-valuenow="6"
                                        aria-valuemin="0"
                                        aria-valuemax="100">
                                        42%
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> 
     
                    <div class="row" id="Q9">
                        <div class="col-sm-12">
                            <div class="mb-0 h-75">
                                <h6 class="text-center">EVALUATIONS PAR LE STAGIAIRE</h6>
                                <hr>
                                <h5 class="text-left mt-2">Animation</h5>
                                <hr>                            
                                <h5 class="mb-4"><span class="badge bg-secondary w-100">Question 9 / 19</span></h5>
                                <h6 class="text-sm-left"><strong>9°) </strong>Il ou elle fait de bonnes synthèses</h6>
                                <div class="mt-2">
                                <select class="custom-select2 form-control" id="NoteQ9" name="NoteQ9" style="width: 100%; height: 38px">
                                        <option value=""></option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
                                        <option value="NSP">NSP</option>
                                </select>
                                </div>
                                <div class="progress mt-4" style="height: 25px">
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
                    </div> 
                   
                    <div class="row" id="Q10">
                        <div class="col-sm-12">
                            <div class="mb-0 h-75">
                                <h6 class="text-center">EVALUATIONS PAR LE STAGIAIRE</h6>
                                <hr>
                                <h5 class="text-left mt-2">Animation</h5>
                                <hr>                            
                                <h5 class="mb-4"><span class="badge bg-secondary w-100">Question 10 / 19</span></h5>
                                <h6 class="text-sm-left"><strong>10°) </strong>Il ou elle fait participer tout le monde</h6>
                                <div class="mt-2">
                                <select class="custom-select2 form-control" id="NoteQ10" name="NoteQ10" style="width: 100%; height: 38px">
                                        <option value=""></option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
                                        <option value="NSP">NSP</option>
                                </select>
                                </div>
                                <div class="progress mt-4" style="height: 25px">
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
                    </div>

                    <!-- Compétence acquise -->
                    <div class="row" id="Q11">
                        <div class="col-sm-12">
                            <div class="mb-0 h-75">
                                <h6 class="text-center">EVALUATIONS PAR LE STAGIAIRE</h6>
                                <hr>
                                <h5 class="text-left mt-2">Animation</h5>
                                <hr>                            
                                <h5 class="mb-4"><span class="badge bg-secondary w-100">Question 11 / 19</span></h5>
                                <h6 class="text-sm-left"><strong>11°) </strong>Le stage sera directement utilisable dans ma vie professionnelle</h6>
                                <div class="mt-2">
                                <select class="custom-select2 form-control" id="NoteQ11" name="NoteQ11" style="width: 100%; height: 38px">
                                        <option value=""></option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
                                        <option value="NSP">NSP</option>
                                </select>
                                </div>
                                <div class="progress mt-4" style="height: 25px">
                                    <div
                                        class="progress-bar bg-info"
                                        role="progressbar"
                                        style="width: 58%"
                                        aria-valuenow="6"
                                        aria-valuemin="0"
                                        aria-valuemax="100">
                                        58%
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                                
                    <div class="row" id="Q12">
                        <div class="col-sm-12">
                            <div class="mb-0 h-75">
                                <h6 class="text-center">EVALUATIONS PAR LE STAGIAIRE</h6>
                                <hr>
                                <h5 class="text-left mt-2">Compétence acquise</h5>
                                <hr>                            
                                <h5 class="mb-4"><span class="badge bg-secondary w-100">Question 12 / 19</span></h5>
                                <h6 class="text-sm-left"><strong>12°) </strong>Je maîtrise compétences ou comportement travaillés </h6>
                                <div class="mt-2">
                                <select class="custom-select2 form-control" id="NoteQ12" name="NoteQ12" style="width: 100%; height: 38px">
                                        <option value=""></option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
                                        <option value="NSP">NSP</option>
                                </select>
                                </div>
                                <div class="progress mt-4" style="height: 25px">
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
                    </div>                        
                    
                    <div class="row" id="Q13">
                        <div class="col-sm-12">
                            <div class="mb-0 h-75">
                                <h6 class="text-center">EVALUATIONS PAR LE STAGIAIRE</h6>
                                <hr>
                                <h5 class="text-left mt-2">Compétence acquise</h5>
                                <hr>                            
                                <h5 class="mb-4"><span class="badge bg-secondary w-100">Question 13 / 19</span></h5>
                                <h6 class="text-sm-left"><strong>13°) </strong>J’ai un plan d’action à mettre en œuvre</h6>
                                <div class="mt-2">
                                <select class="custom-select2 form-control" id="NoteQ13" name="NoteQ13" style="width: 100%; height: 38px">
                                        <option value=""></option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
                                        <option value="NSP">NSP</option>
                                </select>
                                </div>
                                <div class="progress mt-4" style="height: 25px">
                                    <div
                                        class="progress-bar bg-info"
                                        role="progressbar"
                                        style="width: 68%"
                                        aria-valuenow="6"
                                        aria-valuemin="0"
                                        aria-valuemax="100">
                                        68%
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Organisation -->                                
                    <div class="row" id="Q14">
                        <div class="col-sm-12">
                            <div class="mb-0 h-75">
                                <h6 class="text-center">EVALUATIONS PAR LE STAGIAIRE</h6>
                                <hr>
                                <h5 class="text-left mt-2">Compétence acquise</h5>
                                <hr>                            
                                <h5 class="mb-4"><span class="badge bg-secondary w-100">Question 14 / 19</span></h5>
                                <h6 class="text-sm-left"><strong>14°) </strong>Les conditions matérielles sont correctes</h6>
                                <div class="mt-2">
                                <select class="custom-select2 form-control" id="NoteQ14" name="NoteQ14" style="width: 100%; height: 38px">
                                        <option value=""></option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
                                        <option value="NSP">NSP</option>
                                </select>
                                </div>
                                <div class="progress mt-4" style="height: 25px">
                                    <div
                                        class="progress-bar bg-info"
                                        role="progressbar"
                                        style="width: 74%"
                                        aria-valuenow="6"
                                        aria-valuemin="0"
                                        aria-valuemax="100">
                                        74%
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                                    
                    <div class="row" id="Q15">
                        <div class="col-sm-12">
                            <div class="mb-0 h-75">
                                <h6 class="text-center">EVALUATIONS PAR LE STAGIAIRE</h6>
                                <hr>
                                <h5 class="text-left mt-2">Compétence acquise</h5>
                                <hr>                            
                                <h5 class="mb-4"><span class="badge bg-secondary w-100">Question 15 / 19</span></h5>
                                <h6 class="text-sm-left"><strong>15°) </strong>Le matériel pédagogiques est adapté</h6>
                                <div class="mt-2">
                                <select class="custom-select2 form-control" id="NoteQ15" name="NoteQ15" style="width: 100%; height: 38px">
                                        <option value=""></option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
                                        <option value="NSP">NSP</option>
                                </select>
                                </div>
                                <div class="progress mt-4" style="height: 25px">
                                    <div
                                        class="progress-bar bg-info"
                                        role="progressbar"
                                        style="width: 79%"
                                        aria-valuenow="6"
                                        aria-valuemin="0"
                                        aria-valuemax="100">
                                        79%
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                                    
                    <div class="row" id="Q16">
                        <div class="col-sm-12">
                            <div class="mb-0 h-75">
                                <h6 class="text-center">EVALUATIONS PAR LE STAGIAIRE</h6>
                                <hr>
                                <h5 class="text-left mt-2">Organisation</h5>
                                <hr>                            
                                <h5 class="mb-4"><span class="badge bg-secondary w-100">Question 16 / 19</span></h5>
                                <h6 class="text-sm-left"><strong>16°) </strong>La planification et les horaires sont respectés</h6>
                                <div class="mt-2">
                                <select class="custom-select2 form-control" id="NoteQ16" name="NoteQ16" style="width: 100%; height: 38px">
                                        <option value=""></option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
                                        <option value="NSP">NSP</option>
                                </select>
                                </div>
                                <div class="progress mt-4" style="height: 25px">
                                    <div
                                        class="progress-bar bg-info"
                                        role="progressbar"
                                        style="width: 84%"
                                        aria-valuenow="6"
                                        aria-valuemin="0"
                                        aria-valuemax="100">
                                        84%
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- VOTRE APPRECIATION GENERALE POUR CETTE FORMATION -->
                    
                    <div class="row" id="Q17">
                        <div class="col-sm-12">
                            <div class="mb-0 h-75">
                                <h6 class="text-center">EVALUATIONS PAR LE STAGIAIRE</h6>
                                <hr>
                                <h5 class="text-left mt-2">APPRECIATION GENERALE</h5>
                                <hr>                            
                                <h5 class="mb-4"><span class="badge bg-secondary w-100">Question 17 / 19</span></h5>
                                <h6 class="text-sm-left"><strong>17°) </strong>VOTRE APPRECIATION GENERALE POUR CETTE FORMATION</h6>
                                <div class="mt-2">
                                <select class="custom-select2 form-control" id="NoteQ17" name="NoteQ17" style="width: 100%; height: 38px">
                                        <option value=""></option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
                                        <option value="NSP">NSP</option>
                                </select>
                                </div>
                                <div class="progress mt-4" style="height: 25px">
                                    <div
                                        class="progress-bar bg-info"
                                        role="progressbar"
                                        style="width: 89%"
                                        aria-valuenow="6"
                                        aria-valuemin="0"
                                        aria-valuemax="100">
                                        89%
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- VOS REMARQUES ET COMMENTAIRES  -->                                           
                    <div class="row" id="Q18">
                        <div class="col-sm-12">
                            <div class="mb-0 h-75">
                                <h6 class="text-center">EVALUATIONS PAR LE STAGIAIRE</h6>
                                <hr>
                                <h5 class="text-left mt-2">REMARQUES ET COMMENTAIRES </h5>
                                <hr>                            
                                <h5 class="mb-4"><span class="badge bg-secondary w-100">Question 18 / 19</span></h5>
                                <h6 class="text-sm-left"><strong>18°) </strong>Pour les points les moins positifs:</h6>
                                <div class="mt-2">
                                <textarea id="txtQ18" name="txtQ18" rows="5" style="width: 100%;"></textarea>    
                                </div>                            
                                <div class="progress mt-4" style="height: 25px">
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
                    </div>

                    <div class="row" id="Q19">
                        <div class="col-sm-12">
                            <div class="mb-0 h-75">
                                <h6 class="text-center">EVALUATIONS PAR LE STAGIAIRE</h6>
                                <hr>
                                <h5 class="text-left mt-2">REMARQUES ET COMMENTAIRES </h5>
                                <hr>                            
                                <h5 class="mb-4"><span class="badge bg-secondary w-100">Question 19 / 19</span></h5>
                                <h6 class="text-sm-left"><strong>19°) </strong>Pour les points les plus positif:</h6>
                                <div class="mt-2">
                                <textarea id="txtQ19" name="txtQ19" rows="5" style="width: 100%;"></textarea>    
                                </div>                           
                                <div class="progress mt-4" style="height: 25px">
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
                    </div>                                         
                    <div class="row mt-2">
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
        <!--<div class="h4 pd-20 mb-0 text-center">Récapitulation sur les choix que vous venez d'effectuer</div>-->
        <table class="data-table table nowrap">
            <thead>
                <tr>
                    <th class="table-plus">Thèmes</th>
                    <th>Questions</th>
                    <th>Notes</th>
                    <th class="datatable-nosort">Actions</th>
                </tr>
            </thead>
            <tbody>
                <!-- Objectifs de l'action -->
                <tr>
                    <td class="weight-600" rowspan="3">Objectifs de l'action</td>
                    <td>Les objectifs annoncés par l’animateur ont ils été atteints</td>
                    <td id="tQ1"></td>
                    <td>
                        <div class="table-actions">
                            <a href="#"  id="btnQ1" data-color="#265ed7"
                                ><i class="icon-copy dw dw-edit2"></i
                            ></a>
                            <!--<a href="#" data-color="#e95959"
                                ><i class="icon-copy dw dw-delete-3"></i
                            ></a>-->
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>Les objectifs correspondent à mes attentes</td>
                    <td id="tQ2"></td>
                    <td>
                        <div class="table-actions">
                            <a href="#" data-color="#265ed7"
                                ><i class="icon-copy dw dw-edit2"></i
                            ></a>
                            <!--<a href="#" data-color="#e95959"
                                ><i class="icon-copy dw dw-delete-3"></i
                            ></a>-->
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>Tous les thèmes abordés sont utiles</td>
                    <td id="tQ3"></td>
                    <td>
                        <div class="table-actions">
                            <a href="#" data-color="#265ed7"
                                ><i class="icon-copy dw dw-edit2"></i
                            ></a>
                            <!--<a href="#" data-color="#e95959"
                                ><i class="icon-copy dw dw-delete-3"></i
                            ></a>-->
                        </div>
                    </td>
                </tr>                                                        
                <!-- Méthodes et contenus -->
                <tr>
                    <td class="weight-600" rowspan="3">Méthodes et contenus</td>
                    <td>La durée de la formation est adaptée</td>
                    <td id="tQ4"></td>
                    <td>
                        <div class="table-actions">
                            <a href="#" data-color="#265ed7"
                                ><i class="icon-copy dw dw-edit2"></i
                            ></a>
                            <!--<a href="#" data-color="#e95959"
                                ><i class="icon-copy dw dw-delete-3"></i
                            ></a>-->
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>Les techniques d’animation sont pertinentes</td>
                    <td id="tQ5"></td>
                    <td>
                        <div class="table-actions">
                            <a href="#" data-color="#265ed7"
                                ><i class="icon-copy dw dw-edit2"></i
                            ></a>
                            <!--<a href="#" data-color="#e95959"
                                ><i class="icon-copy dw dw-delete-3"></i
                            ></a>-->
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>Les exercices sont cohérents avec notre réalité professionnelle</td>
                    <td id="tQ6"></td>
                    <td>
                        <div class="table-actions">
                            <a href="#" data-color="#265ed7"
                                ><i class="icon-copy dw dw-edit2"></i
                            ></a>
                            <!--<a href="#" data-color="#e95959"
                                ><i class="icon-copy dw dw-delete-3"></i
                            ></a>-->
                        </div>
                    </td>
                </tr>
                <!-- Animation -->
                <tr>
                    <td class="weight-600" rowspan="4">Animation</td>
                    <td>Le formateur est compétent</td>
                    <td id="tQ7"></td>
                    <td>
                        <div class="table-actions">
                            <a href="#" data-color="#265ed7"
                                ><i class="icon-copy dw dw-edit2"></i
                            ></a>
                            <!--<a href="#" data-color="#e95959"
                                ><i class="icon-copy dw dw-delete-3"></i
                            ></a>-->
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>Ses exposés sont structurés</td>
                    <td id="tQ8"></td>
                    <td>
                        <div class="table-actions">
                            <a href="#" data-color="#265ed7"
                                ><i class="icon-copy dw dw-edit2"></i
                            ></a>
                            <!--<a href="#" data-color="#e95959"
                                ><i class="icon-copy dw dw-delete-3"></i
                            ></a>-->
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>Il ou elle fait de bonnes synthèses</td>
                    <td id="tQ9"></td>
                    <td>
                        <div class="table-actions">
                            <a href="#" data-color="#265ed7"
                                ><i class="icon-copy dw dw-edit2"></i
                            ></a>
                            <!--<a href="#" data-color="#e95959"
                                ><i class="icon-copy dw dw-delete-3"></i
                            ></a>-->
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>Il ou elle fait participer tout le monde</td>
                    <td id="tQ10"></td>
                    <td>
                        <div class="table-actions">
                            <a href="#" data-color="#265ed7"
                                ><i class="icon-copy dw dw-edit2"></i
                            ></a>
                            <!--<a href="#" data-color="#e95959"
                                ><i class="icon-copy dw dw-delete-3"></i
                            ></a>-->
                        </div>
                    </td>
                </tr>
                <!-- Compétence acquise -->
                <tr>
                    <td class="weight-600" rowspan="3">Compétence acquise</td>
                    <td>Le stage sera directement utilisable dans ma vie professionnelle</td>
                    <td id="tQ11"></td>
                    <td>
                        <div class="table-actions">
                            <a href="#" data-color="#265ed7"
                                ><i class="icon-copy dw dw-edit2"></i
                            ></a>
                            <!--<a href="#" data-color="#e95959"
                                ><i class="icon-copy dw dw-delete-3"></i
                            ></a>-->
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>Je maîtrise compétences ou comportement travaillés </td>
                    <td id="tQ12"></td>
                    <td>
                        <div class="table-actions">
                            <a href="#" data-color="#265ed7"
                                ><i class="icon-copy dw dw-edit2"></i
                            ></a>
                            <!--<a href="#" data-color="#e95959"
                                ><i class="icon-copy dw dw-delete-3"></i
                            ></a>-->
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>J’ai un plan d’action à mettre en œuvre</td>
                    <td id="tQ13"></td>
                    <td>
                        <div class="table-actions">
                            <a href="#" data-color="#265ed7"
                                ><i class="icon-copy dw dw-edit2"></i
                            ></a>
                            <!--<a href="#" data-color="#e95959"
                                ><i class="icon-copy dw dw-delete-3"></i
                            ></a>-->
                        </div>
                    </td>
                </tr>                            
                <!-- Organisation -->
                <tr>
                    <td class="weight-600" rowspan="3">Organisation</td>
                    <td>Les conditions matérielles sont correctes</td>
                    <td id="tQ14"></td>
                    <td>
                        <div class="table-actions">
                            <a href="#" data-color="#265ed7"
                                ><i class="icon-copy dw dw-edit2"></i
                            ></a>
                            <!--<a href="#" data-color="#e95959"
                                ><i class="icon-copy dw dw-delete-3"></i
                            ></a>-->
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>Le matériel pédagogiques est adapté</td>
                    <td id="tQ15"></td>
                    <td>
                        <div class="table-actions">
                            <a href="#" data-color="#265ed7"
                                ><i class="icon-copy dw dw-edit2"></i
                            ></a>
                            <!--<a href="#" data-color="#e95959"
                                ><i class="icon-copy dw dw-delete-3"></i
                            ></a>-->
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>La planification et les horaires sont respectés</td>
                    <td id="tQ16"></td>
                    <td>
                        <div class="table-actions">
                            <a href="#" data-color="#265ed7"
                                ><i class="icon-copy dw dw-edit2"></i
                            ></a>
                            <!--<a href="#" data-color="#e95959"
                                ><i class="icon-copy dw dw-delete-3"></i
                            ></a>-->
                        </div>
                    </td>
                </tr> 
                <tr>
                    <td colspan="2">VOTRE APPRECIATION GENERALE POUR CETTE FORMATION</td>
                    <td id="tQ17"></td>
                    <td>
                        <div class="table-actions">
                            <a href="#" data-color="#265ed7"
                                ><i class="icon-copy dw dw-edit2"></i
                            ></a>
                            <!--<a href="#" data-color="#e95959"
                                ><i class="icon-copy dw dw-delete-3"></i
                            ></a>-->
                        </div>
                    </td>
                </tr>                 
            </tbody>
        </table>
    </div>
    <div class="blog-detail card-box overflow-hidden mb-30 mt-2">
        <!-- APPRECIATION GENERALE -->
        <div class="blog-caption">
            <!--
            <h4 class="mb-10">
                VOTRE APPRECIATION GENERALE POUR CETTE FORMATION
            </h4>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing
                elit, sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua. Ut enim ad minim veniam, quis
                nostrud exercitation ullamco laboris nisi ut aliquip ex
                ea commodo
            </p>
            -->
            <h4 class="mb-10 mt-4">
                VOS REMARQUES ET COMMENTAIRES
            </h4>
            <h5 class="mb-10 ml-4">
                Pour les points les moins positifs:
            </h5>                                            
            <p class="ml-4" id="tQ18">
                <!--Lorem ipsum dolor sit amet, consectetur adipisicing
                elit, sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua. Ut enim ad minim veniam, quis
                nostrud exercitation ullamco laboris nisi ut aliquip ex
                ea commodo consequat. Duis aute irure dolor in
                reprehenderit in voluptate velit esse cillum dolore eu
                fugiat nulla pariatur. Excepteur sint occaecat cupidatat
                non proident, sunt in culpa qui officia deserunt mollit
                anim id est laborum.-->
            </p>
            <h5 class="mb-10 ml-4">
                Pour les points les plus positif:
            </h5>                                            
            <p class="ml-4" id="tQ19">
                <!--Lorem ipsum dolor sit amet, consectetur adipisicing
                elit, sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua. Ut enim ad minim veniam, quis
                nostrud exercitation ullamco laboris nisi ut aliquip ex
                ea commodo consequat. Duis aute irure dolor in
                reprehenderit in voluptate velit esse cillum dolore eu
                fugiat nulla pariatur. Excepteur sint occaecat cupidatat
                non proident, sunt in culpa qui officia deserunt mollit
                anim id est laborum.-->
            </p>
        </div>
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
    initFields();
    CurrentQuestion="Q1";
    $("#Q1").show();
    $("#BtnPrev").hide();
     function initFields()
     {
         //CurrentQuestion="Q1";
         $("#showChoise").hide();
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

                        if(($('#NoteQ'+parseInt(index)).val()) && (index<18) || ($('#txtQ'+parseInt(index)).val()) && (index>17))
                        {

                            if(index==19)
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
       // $('#tQ1').val($('#NoteQ1').val());
        for (var i=1; i<20; i++)
        {            
           if(i<18)
           {                      
            document.getElementById('tQ'+i).innerHTML = $('#NoteQ'+i).val();
           } else{
            document.getElementById('tQ'+i).innerHTML = $('#txtQ'+i).val();
           }
        }
        
     }

         $('#BtnPrev2').on('click', function() { 
           // BtnNext(); 

            $("#showChoise").hide();
            $("#showQuestions").show();

        for (var i=1; i<20; i++)
        {            
           if(i=19)
           {
             CurrentQuestion="Q"+i;
             PrevQuestion="Q"+i; 
             $("#Q"+i).show();   
           } else{
             $("#Q"+i).hide();            
           }
        }            
            

        }); 



        var indexQuestion=CurrentQuestion.substr(1,1);

        $("#btnQ1").on('click', function(event) {
            event.preventDefault();
            initFields();
            $("#showQuestions").show();
            CurrentQuestion="Q1";
            $("#Q1").show();
        });


    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $("#BtnSave").click(function(e){
    
        e.preventDefault();
       //alert( $("#NoteQ1").val());
        var NoteQ1 = $("#NoteQ1").val();
        var NoteQ2 = $("#NoteQ2").val();
        var NoteQ3 = $("#NoteQ3").val();
        var NoteQ4 = $("#NoteQ4").val();
        var NoteQ5 = $("#NoteQ5").val();
        var NoteQ6 = $("#NoteQ6").val();
        var NoteQ7 = $("#NoteQ7").val();
        var NoteQ8 = $("#NoteQ8").val();
        var NoteQ9 = $("#NoteQ9").val();
        var NoteQ10 = $("#NoteQ10").val();
        var NoteQ11 = $("#NoteQ11").val();
        var NoteQ12 = $("#NoteQ12").val();
        var NoteQ13 = $("#NoteQ13").val();
        var NoteQ14 = $("#NoteQ14").val();
        var NoteQ15 = $("#NoteQ15").val();
        var NoteQ16 = $("#NoteQ16").val();
        var NoteQ17 = $("#NoteQ17").val();
        var txtQ18 = $("#txtQ18").val();
        var txtQ19 = $("#txtQ19").val();
     
        $.ajax({
           type:'POST',
           url:"{{ route('EvalStagiaires.store') }}",
           data:{NoteQ1:NoteQ1,NoteQ2:NoteQ2,NoteQ3:NoteQ3,NoteQ4:NoteQ4,NoteQ5:NoteQ5,
                 NoteQ6:NoteQ6,NoteQ7:NoteQ7,NoteQ8:NoteQ8,NoteQ9:NoteQ9,NoteQ10:NoteQ10,
                 NoteQ11:NoteQ11,NoteQ12:NoteQ12,NoteQ13:NoteQ13,NoteQ14:NoteQ14,
                 NoteQ15:NoteQ15,NoteQ16:NoteQ16,NoteQ17:NoteQ17,txtQ18:txtQ18,txtQ19:txtQ19},
           success:function(data){
                //alert(data);
                //window.location = '/home';
                //window.location = '{{ route("home") }}';
                
                if($.isEmptyObject(data.error)){
                    alert(data.success);
                    //location.reload();
                    window.location = '{{ route("home") }}';
                }else{
                    alert(data.error);
                    //printErrorMsg(data.error);
                }
           }
        });
    
    });            

/*
    function printErrorMsg (msg) {
        $(".print-error-msg").find("ul").html('');
        $(".print-error-msg").css('display','block');
        $.each( msg, function( key, value ) {
            $(".print-error-msg").find("ul").append('<li>'+value+'</li>');
        });
    }
*/

  } );  
</script>
@endsection