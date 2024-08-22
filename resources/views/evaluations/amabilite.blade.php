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
                                <h6 class="text-center">TESTEZ VOTRE AMABILITE</h6>
                                <hr>                          
                                <h5 class="mb-4"><span class="badge bg-secondary w-100">Question 1 / 10</span></h5>
                                <hr>
                                <h6 class="text-sm-left"><strong>1°) </strong>Un couple de touristes complètement perdu vous arrête pour vous demander son chemin. Vous...</h6>
                                    <div class="mt-2">
                                        <div class="custom-control custom-radio mb-5">
                                            <input type="radio" id="customRadio1" name="ChoixRQ1" class="custom-control-input" value="A"/>
                                            <label class="custom-control-label" for="customRadio1">a- Proposez de les accompagner jusqu’à leur point de chute.</label>
                                        </div>
                                        <div class="custom-control custom-radio mb-5">    
                                            <input type="radio" id="customRadio2" name="ChoixRQ1" class="custom-control-input" value="B"/>
                                            <label class="custom-control-label" for="customRadio2">b- Leur indiquez avec précision le chemin à suivre.</label>
                                        </div>
                                        <div class="custom-control custom-radio mb-5">    
                                            <input type="radio" id="customRadio3" name="ChoixRQ1" class="custom-control-input" value="C"/>
                                            <label class="custom-control-label" for="customRadio3">c- Leur dites que vous êtes pressé(e) et leur conseillez d’arrêter quelqu’un d’autre.</label>
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
            
                    <div class="row" id="Q2">
                        <div class="col-sm-12">
                            <div class="mb-0 h-75">
                                <h6 class="text-center">TESTEZ VOTRE AMABILITE</h6>
                                <hr>                         
                                <h5 class="mb-4"><span class="badge bg-secondary w-100">Question 2 / 10</span></h5>
                                <hr>
                                <h6 class="text-sm-left"><strong>2°) </strong>Pour les traditionnelles bonnes actions de fin d’année, vous...</h6>
                                <div class="mt-2">
                                <div class="custom-control custom-radio mb-5">
                                    <input type="radio" id="customRadio4" name="ChoixRQ2" class="custom-control-input" value="A"/>
                                    <label class="custom-control-label" for="customRadio4">a- Donnez un peu à tout le monde. Vous ne savez pas dire non.</label>
                                </div>
                                <div class="custom-control custom-radio mb-5">    
                                    <input type="radio" id="customRadio5" name="ChoixRQ2" class="custom-control-input" value="B"/>
                                    <label class="custom-control-label" for="customRadio5">b- Donnez en fonction de votre budget.</label>
                                </div>
                                <div class="custom-control custom-radio mb-5">
                                    <input type="radio" id="customRadio6" name="ChoixRQ2" class="custom-control-input" value="C"/>
                                    <label class="custom-control-label" for="customRadio6">c- Ne donnez rien, comme tout le reste de l’année.</label>
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

                    <div class="row" id="Q3">
                        <div class="col-sm-12">
                            <div class="mb-0 h-75">
                                <h6 class="text-center">TESTEZ VOTRE AMABILITE</h6>
                                <hr>                          
                                <h5 class="mb-4"><span class="badge bg-secondary w-100">Question 3 / 10</span></h5>
                                <hr>
                                <h6 class="text-sm-left"><strong>3°) </strong>Vous êtes dans un magasin. Le client juste devant vous oublie son portefeuille sur la caisse. Vous…</h6>
                                <div class="mt-2">
                                <div class="custom-control custom-radio mb-5">
                                    <input type="radio" id="customRadio7" name="ChoixRQ3" class="custom-control-input" value="A"/>
                                    <label class="custom-control-label" for="customRadio7">a- Lui courez après pour le lui rendre.</label>
                                </div>
                                <div class="custom-control custom-radio mb-5">
                                    <input type="radio" id="customRadio8" name="ChoixRQ3" class="custom-control-input" value="B"/>
                                    <label class="custom-control-label" for="customRadio8">b- Remettez le portefeuille  au client . </label>
                                </div>
                                <div class="custom-control custom-radio mb-5">
                                    <input type="radio" id="customRadio9" name="ChoixRQ3" class="custom-control-input" value="C"/>
                                    <label class="custom-control-label" for="customRadio9">c- Le glissez subrepticement dans votre poche.</label>
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

                    <div class="row" id="Q4">
                        <div class="col-sm-12">
                            <div class="mb-0 h-75">
                                <h6 class="text-center">TESTEZ VOTRE AMABILITE</h6>
                                <hr>                           
                                <h5 class="mb-4"><span class="badge bg-secondary w-100">Question 4 / 10</span></h5>
                                <hr>
                                <h6 class="text-sm-left"><strong>4°) </strong>C’est l’été. Le mercure ne cesse de grimper. Votre voisin du dessus est très âgé. Vous...</h6>
                                <div class="mt-2">
                                <div class="custom-control custom-radio mb-5">
                                    <input type="radio" id="customRadio10" name="ChoixRQ4" class="custom-control-input" value="A"/>
                                    <label class="custom-control-label" for="customRadio10">a- Lui rendez visite plusieurs fois par jour pour vous assurer qu’il va bien et qu’il n’a besoin de rien.</label>
                                </div>
                                <div class="custom-control custom-radio mb-5">
                                    <input type="radio" id="customRadio11" name="ChoixRQ4" class="custom-control-input" value="B"/>
                                    <label class="custom-control-label" for="customRadio11">b- Lui laissez votre numéro de téléphone en cas d’urgence.</label>
                                </div>
                                <div class="custom-control custom-radio mb-5">
                                    <input type="radio" id="customRadio12" name="ChoixRQ4" class="custom-control-input" value="C"/>
                                    <label class="custom-control-label" for="customRadio12">c- Ne songez pas une seconde à lui.</label>
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

                    <div class="row" id="Q5">
                        <div class="col-sm-12">
                            <div class="mb-0 h-75">
                                <h6 class="text-center">TESTEZ VOTRE AMABILITE</h6>
                                <hr>                          
                                <h5 class="mb-4"><span class="badge bg-secondary w-100">Question 5 / 10</span></h5>
                                <hr>
                                <h6 class="text-sm-left"><strong>5°) </strong>Un collègue de travail, dont la mère est à l’hôpital, vous demande si vous seriez d’accord pour, le temps d’une semaine, permuter avec lui vos horaires. Vous...</h6>
                                <div class="mt-2">
                                <div class="custom-control custom-radio mb-5">
                                    <input type="radio" id="customRadio13" name="ChoixRQ5" class="custom-control-input" value="A"/>
                                    <label class="custom-control-label" for="customRadio13">a- Acceptez volontiers. Du moment qu’on peut rendre service !</label>
                                </div>
                                <div class="custom-control custom-radio mb-5">
                                    <input type="radio" id="customRadio14" name="ChoixRQ5" class="custom-control-input" value="B"/>
                                    <label class="custom-control-label" for="customRadio14">b- N’acceptez que si c’est un collègue avec qui vous êtes en bon terme.</label>
                                </div>
                                <div class="custom-control custom-radio mb-5">    
                                    <input type="radio" id="customRadio15" name="ChoixRQ5" class="custom-control-input" value="C"/>
                                    <label class="custom-control-label" for="customRadio15">c- Refusez tout net. C’est son problème et pas le vôtre !</label>
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

                    <div class="row" id="Q6">
                        <div class="col-sm-12">
                            <div class="mb-0 h-75">
                                <h6 class="text-center">TESTEZ VOTRE AMABILITE</h6>
                                <hr>                         
                                <h5 class="mb-4"><span class="badge bg-secondary w-100">Question 6 / 10</span></h5>
                                <hr>
                                <h6 class="text-sm-left"><strong>6°) </strong>Les vieux jouets des enfants, les meubles et objets qui n’ont plus d’utilité pour vous, les vêtements que vous avez fini de porter, vous...</h6>
                                <div class="mt-2">
                                <div class="custom-control custom-radio mb-5">
                                    <input type="radio" id="customRadio16" name="ChoixRQ6" class="custom-control-input" value="A"/>
                                    <label class="custom-control-label" for="customRadio16">a- Les offrez généreusement à des associations, histoire de leur donner une seconde vie et surtout de faire des heureux.</label>
                                </div>
                                <div class="custom-control custom-radio mb-5">
                                    <input type="radio" id="customRadio17" name="ChoixRQ6" class="custom-control-input" value="B"/>
                                    <label class="custom-control-label" for="customRadio17">b- Les vendez lors d’un vide grenier, afin d’en tirer quelques sous.</label>
                                </div>
                                <div class="custom-control custom-radio mb-5">
                                    <input type="radio" id="customRadio18" name="ChoixRQ6" class="custom-control-input" value="C"/>
                                    <label class="custom-control-label" for="customRadio18">c- Les jetez à la poubelle. L’important, c’est de vous débarrasser.</label>
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

                    <div class="row" id="Q7">
                        <div class="col-sm-12">
                            <div class="mb-0 h-75">
                                <h6 class="text-center">TESTEZ VOTRE AMABILITE</h6>
                                <hr>                          
                                <h5 class="mb-4"><span class="badge bg-secondary w-100">Question 7 / 10</span></h5>
                                <hr>
                                <h6 class="text-sm-left"><strong>7°) </strong>Vous êtes à la caisse du supermarché. Votre caddy est plein à craquer. Derrière vous, deux personnes avec un seul produit en main. Vous...</h6>
                                <div class="mt-2">
                                <div class="custom-control custom-radio mb-5">
                                    <input type="radio" id="customRadio19" name="ChoixRQ7" class="custom-control-input" value="A"/>
                                    <label class="custom-control-label" for="customRadio19">a- Leur cédez votre tour.</label>
                                </div>
                                <div class="custom-control custom-radio mb-5">
                                    <input type="radio" id="customRadio20" name="ChoixRQ7" class="custom-control-input" value="B"/>
                                    <label class="custom-control-label" for="customRadio20">b- Laissez passer uniquement le premier.</label>
                                </div>
                                <div class="custom-control custom-radio mb-5">
                                    <input type="radio" id="customRadio21" name="ChoixRQ7" class="custom-control-input" value="C"/>
                                    <label class="custom-control-label" for="customRadio21">c- Faites celui qui n’a rien vu.</label>
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

                    <div class="row" id="Q8">
                        <div class="col-sm-12">
                            <div class="mb-0 h-75">
                                <h6 class="text-center">TESTEZ VOTRE AMABILITE</h6>
                                <hr>                          
                                <h5 class="mb-4"><span class="badge bg-secondary w-100">Question 8 / 10</span></h5>
                                <hr>
                                <h6 class="text-sm-left"><strong>8°) </strong>La chienne d’une de vos collègues vient d’avoir une portée. Votre collègue refuse de garder les petits. Elle souhaite  les faire piquer. Vous...</h6>
                                <div class="mt-2">
                                <div class="custom-control custom-radio mb-5">
                                    <input type="radio" id="customRadio22" name="ChoixRQ8" class="custom-control-input" value="A"/>
                                    <label class="custom-control-label" for="customRadio22">a- Les adoptez tous, malgré vos 20 m2 et votre emploi du temps de ministre.</label>
                                </div>
                                <div class="custom-control custom-radio mb-5">
                                    <input type="radio" id="customRadio23" name="ChoixRQ8" class="custom-control-input" value="B"/>
                                    <label class="custom-control-label" for="customRadio23">b- Demandez à toutes vos connaissances si elles ne voudraient pas d’un chien.</label>
                                </div>
                                <div class="custom-control custom-radio mb-5">
                                    <input type="radio" id="customRadio24" name="ChoixRQ8" class="custom-control-input" value="C"/>
                                    <label class="custom-control-label" for="customRadio24">c- Restez insensible à la situation. Pas question pour vous d’avoir un animal!</label>
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

                    <div class="row" id="Q9">
                        <div class="col-sm-12">
                            <div class="mb-0 h-75">
                                <h6 class="text-center">TESTEZ VOTRE AMABILITE</h6>
                                <hr>                          
                                <h5 class="mb-4"><span class="badge bg-secondary w-100">Question 9 / 10</span></h5>
                                <hr>
                                <h6 class="text-sm-left"><strong>9°) </strong>Votre patron, qui habite à l’opposé de chez vous, vient de tomber en panne de voiture. Vous proposez de le raccompagner chez lui...</h6>
                                <div class="mt-2">
                                <div class="custom-control custom-radio mb-5">
                                    <input type="radio" id="customRadio25" name="ChoixRQ9" class="custom-control-input" value="A"/>
                                    <label class="custom-control-label" for="customRadio25">a- Sans aucune arrière-pensée, comme vous le feriez pour n’importe qui d’autre.</label>
                                </div>
                                <div class="custom-control custom-radio mb-5">
                                    <input type="radio" id="customRadio26" name="ChoixRQ9" class="custom-control-input" value="B"/>
                                    <label class="custom-control-label" for="customRadio26">b- Par pur intérêt, histoire de vous faire bien voir et, pourquoi pas, d’obtenir une promo ou une augmentation.</label>
                                </div>
                                <div class="custom-control custom-radio mb-5">
                                    <input type="radio" id="customRadio27" name="ChoixRQ9" class="custom-control-input" value="C"/>
                                    <label class="custom-control-label" for="customRadio27">c- Même pas en rêve !</label>
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

                    <div class="row" id="Q10">
                        <div class="col-sm-12">
                            <div class="mb-0 h-75">
                                <h6 class="text-center">TESTEZ VOTRE AMABILITE</h6>
                                <hr>                          
                                <h5 class="mb-4"><span class="badge bg-secondary w-100">Question 10 / 10</span></h5>
                                <hr>
                                <h6 class="text-sm-left"><strong>10°) </strong>Au chômage depuis quelques mois, vous avez enfin décroché un entretien d’embauche, lorsque votre sœur vous appelle, en larmes. Son mari a eu un accident et elle a absolument besoin de votre aide pour aller chercher ses enfants à l’école. Vous...</h6>
                                <div class="mt-2">
                                <div class="custom-control custom-radio mb-5">
                                    <input type="radio" id="customRadio28" name="ChoixRQ10" class="custom-control-input" value="A"/>
                                    <label class="custom-control-label" for="customRadio28">a- Annulez votre rendez-vous, pour pouvoir lui rendre service.</label>
                                </div>
                                <div class="custom-control custom-radio mb-5">
                                    <input type="radio" id="customRadio29" name="ChoixRQ10" class="custom-control-input" value="B"/>
                                    <label class="custom-control-label" for="customRadio29">b- Essayez de remettre votre rendez-vous et, seulement dans ce cas, vous lui rendrez service.</label>
                                </div>
                                <div class="custom-control custom-radio mb-5">
                                    <input type="radio" id="customRadio30" name="ChoixRQ10" class="custom-control-input" value="C"/>
                                    <label class="custom-control-label" for="customRadio30">c- Lui expliquez clairement que c’est impossible.</label>
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
                        1- Un couple de touristes complètement perdu vous arrête pour vous demander son chemin. Vous...
                    </td>
                </tr>
                <tr>    
                    <td  id="t1_1">
                        a- Proposez de les accompagner jusqu’à leur point de chute.
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
                        b- Leur indiquez avec précision le chemin à suivre.
                        <span id="tQ1_2" hidden>B</span>
                    </td>
                </tr>
                <tr>
                    <td id="t1_3">
                        c- Leur dites que vous êtes pressé(e) et leur conseillez d’arrêter quelqu’un d’autre.
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
                        2- Pour les traditionnelles bonnes actions de fin d’année, vous...
                    </td>
                </tr>
                <tr>    
                    <td id="t2_1">
                        a- Donnez un peu à tout le monde. Vous ne savez pas dire "non".
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
                        b- Donnez en fonction de votre budget.
                        <span id="tQ2_2" hidden>B</span>
                    </td>
                </tr>
                <tr>
                    <td id="t2_3">
                        c- Ne donnez rien, comme tout le reste de l’année.
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
                        3-Vous êtes dans un magasin. Le client juste devant vous oublie son portefeuille sur la caisse. Vous...
                    </td>
                </tr>
                <tr>    
                    <td id="t3_1">
                        a- Lui courez après pour le lui rendre.
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
                        b- Remettez le portefeuille  au caissier.
                        <span id="tQ3_2" hidden>B</span>
                    </td>
                </tr>
                <tr>
                    <td id="t3_3">
                        c- Le glissez subrepticement dans votre poche.
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
                        4- C’est l’été. Le mercure ne cesse de grimper. Votre voisin du dessus est très âgé. Vous...
                    </td>
                </tr>
                <tr>    
                    <td id="t4_1">
                        a- Lui rendez visite plusieurs fois par jour pour vous assurer qu’il va bien et qu’il n’a besoin de rien.
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
                        b- Lui laissez votre numéro de téléphone en cas d’urgence.
                        <span id="tQ4_2" hidden>B</span>
                    </td>
                </tr>
                <tr>
                    <td id="t4_3">
                        c- Ne songez pas une seconde à lui.
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
                        5- Un collègue de travail, dont la mère est à l’hôpital, vous demande si vous seriez d’accord pour, le temps d’une semaine, permuter avec lui vos horaires. Vous...
                    </td>
                </tr>
                <tr>    
                    <td id="t5_1">
                        a- Acceptez volontiers. Du moment qu’on peut rendre service !
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
                        c- N’acceptez que si c’est un collègue avec qui vous êtes en bon terme.
                        <span id="tQ5_2" hidden>B</span>
                    </td>
                </tr>
                <tr>
                    <td id="t5_3">
                        b- Refusez tout net. C’est son problème et pas le vôtre !
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
                        6- Les vieux jouets des enfants, les meubles et objets qui n’ont plus d’utilité pour vous, les vêtements que vous avez fini de porter, vous...
                    </td>
                </tr>
                <tr>    
                    <td id="t6_1">
                        a- Les offrez généreusement à des associations, histoire de leur donner une seconde vie et surtout de faire des heureux.
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
                        b- Les vendez lors d’un vide grenier, afin d’en tirer quelques sous.
                        <span id="tQ6_2" hidden>B</span>
                    </td>
                </tr>
                <tr>
                    <td id="t6_3">
                        c- Les jetez à la poubelle. L’important, c’est de vous débarrasser.
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
                        7- Vous êtes à la caisse du supermarché. Votre caddy est plein à craquer. Derrière vous, deux personnes avec un seul produit en main. Vous...
                    </td>
                </tr>
                <tr>    
                    <td id="t7_1">
                        a- Leur cédez votre tour.
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
                        b- Laissez passer uniquement le premier.
                        <span id="tQ7_2" hidden>B</span>
                    </td>
                </tr>
                <tr>
                    <td id="t7_3">
                        c- Faites celui qui n’a rien vu.
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
                        8- La chienne d’une de vos collègues vient d’avoir une portée. Votre collègue refuse de garder les petits. Elle souhaite  les faire piquer. Vous...
                    </td>
                </tr>
                <tr>    
                    <td id="t8_1">
                        a- Les adoptez tous, malgré vos 20 m2 et votre emploi du temps de ministre.
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
                        b- Demandez à toutes vos connaissances si elles ne voudraient pas d’un chien.
                        <span id="tQ8_2" hidden>B</span>
                    </td>
                </tr>
                <tr>
                    <td id="t8_3">
                        c- Restez insensible à la situation. Pas question pour vous d’avoir un animal !
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
                        9- Votre patron, qui habite à l’opposé de chez vous, vient de tomber en panne de voiture. Vous proposez de le raccompagner chez lui...
                    </td>
                </tr>
                <tr>    
                    <td id="t9_1">
                        a- Sans aucune arrière-pensée, comme vous le feriez pour n’importe qui d’autre.
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
                        b- Par pur intérêt, histoire de vous faire bien voir et, pourquoi pas, d’obtenir une promo ou une augmentation.
                        <span id="tQ9_2" hidden>B</span>
                    </td>
                </tr>
                <tr>
                    <td id="t9_3">
                        c- Même pas en rêve !
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
                        10- Au chômage depuis quelques mois, vous avez enfin décroché un entretien d’embauche, lorsque votre sœur vous appelle, en larmes. Son mari a eu un accident et elle a absolument besoin de votre aide pour aller chercher ses enfants à l’école. Vous...
                    </td>
                </tr>
                <tr>    
                    <td id="t10_1">
                        a- Annulez votre rendez-vous, pour pouvoir lui rendre service.
                        <span id="tQ10_1" hidden>A</span>  
                    </td>
                    <td class="text-center" rowspan="3" width="200px">
                            <a href="#" class="btnhref"  id="btnQ10" data-color="#265ed7"  data-id="10"
                                ><i class="icon-copy dw dw-edit2"></i
                            ></a>
                    </td>                    
                </tr>
                <tr>
                    <td id="t10_2">
                        b- Essayez de remettre votre rendez-vous et, seulement dans ce cas, vous lui rendrez service.
                        <span id="tQ10_2" hidden>B</span> 
                    </td>
                </tr>
                <tr>
                    <td id="t10_3">
                        c- Lui expliquez clairement que c’est impossible.
                        <span id="tQ10_3" hidden>C</span> 
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

                            if(index==10)
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

        for (var i=1; i<=10; i++)
        {            
           if($('input:radio[name=ChoixRQ'+parseInt(i)+']:checked').val())
           {  
                for (var y=1; y<=3; y++)
                {                               
                    

                    if($('input:radio[name=ChoixRQ'+parseInt(i)+']:checked').val()== document.getElementById('tQ'+parseInt(i)+'_'+parseInt(y)).innerHTML)
                    {

                    document.getElementById('t'+parseInt(i)+'_'+parseInt(y)).style.color = "blue";
                    document.getElementById('t'+parseInt(i)+'_'+parseInt(y)).style.fontWeight = "bold";
                    } else{

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

        for (var i=1; i<=10; i++)
        {            
           if(i=10)
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
       //alert(Q1);
        $.ajax({
           type:'POST',
           url:"{{ route('TestAmabilites.store') }}",
           data:{Q1:Q1,Q2:Q2,Q3:Q3,Q4:Q4,Q5:Q5,Q6:Q6,Q7:Q7,Q8:Q8,Q9:Q9,Q10:Q10},
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