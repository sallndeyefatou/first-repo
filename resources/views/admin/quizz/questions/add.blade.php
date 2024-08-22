@extends('layouts.master-lg')
@section('head-top')
   <div class="row">
		<div class="col-md-8 col-sm-12">
			<div class="title">
				<div class="visit">
				<h6>QUIZZ : <span class="text-info">{{--Quizz1::nomquizz--}}</span></h6>
				</div>
				<div class="visit mt-2">
				    <span class="font-weight-bold">Questions :</span> <span class="badge badge-pill badge-warning">{{--$quizzs->nbques--}}</span>	
				</div>
			</div>
		</div>
		<div class="col-md-4 col-sm-12 mt-2 text-right">
			<div class="title">
			<!--<h6>Durée : <span class="badge badge-pill badge-info">3600</span></h6>-->
				<div class="visit">
				    <span class="font-weight-bold">Durée :</span> <span class="badge badge-pill badge-info">{{--$quizz->duree--}}</span>	
				</div>				
			</div>
		</div>
  </div>
@endsection
@section('content')
	<div class="row">
		<div class="col-md-12 col-sm-12">

			<div class="card-box mb-0">
				<div class="pb-0">
					<form method="POST" action="{{route('quizz-add-question',$quizz->quizz_id)}}" >
						@csrf
						<div class="form-group">
							<select class="form-control">
								<!--foreach ($request->nbques as $q)-->
								<option>Choisir une question...</option>
								<option>QUESTION N°1</option>
								<option>QUESTION N°2</option>
								<option>QUESTION N°3</option>
								<option>QUESTION N°4</option>
									
								<!--endforeach-->
								
							</select>
						</div>
						<div class="form-group">
							<input class="form-control" type="text" placeholder="Thème de la question"/>
						</div>	
						<div class="form-group">
						   <textarea class="form-control h-25" placeholder="Saisir la question"></textarea>
						</div>
						<div class="form-group row">
							<div class="col-md-6">
							<select class="form-control">
								<option>Choisir le type de la question ...</option>
								<option>Choix unique</option>
								<option>Choix multiple</option>
								<option>Choix ouvert</option>
							</select>
						</div>
						<!--</div>-->						
						<!--<div class="form-group">-->
							<div class="col-md-6">
							<select class="form-control">
								<option>Choisir le nombre de réponses ...</option>
								<option>01</option>
								<option>02</option>
								<option>03</option>
								<option>04</option>
							</select>
						</div>
						</div>
						<div class="form-group row">
						   <div class="col-11">
						  	 <textarea class="form-control h-25" placeholder="Saisir la réponse n°1"></textarea>
						   </div>
							<!--<div class="col-1">
								<div class="custom-control custom-checkbox text-right">
									<input type="checkbox" class="custom-control-input" id="customCheck1"/>
									 <label class="custom-control-label" for="customCheck1">True</label>
								</div>
								<div class="custom-control custom-checkbox text-right">
									<input type="checkbox" class="custom-control-input" id="customCheck1"/>
									 <label class="custom-control-label" for="customCheck1">False</label>
								</div>							
							</div>-->
						</div>
						<div class="form-group row">
						   <div class="col-11">
						  	 <textarea class="form-control h-25" placeholder="Saisir la réponse n°2"></textarea>
						   </div>
							<!--<div class="col-1">
								<div class="custom-control custom-checkbox text-right">
									<input type="checkbox" class="custom-control-input" id="customCheck2"/>
									 <label class="custom-control-label" for="customCheck2">True</label>
								</div>
								<div class="custom-control custom-checkbox text-right">
									<input type="checkbox" class="custom-control-input" id="customCheck1"/>
									 <label class="custom-control-label" for="customCheck1">False</label>
								</div>														
							</div>-->
						</div>
						<div class="form-group row">
						   <div class="col-11">
						  	 <textarea class="form-control h-25" placeholder="Saisir la réponse n°3"></textarea>
						   </div>
							<!--<div class="col-1">
								<div class="custom-control custom-checkbox text-right">
									<input type="checkbox" class="custom-control-input" id="customCheck3"/>
									 <label class="custom-control-label" for="customCheck3">True</label>
								</div>
								<div class="custom-control custom-checkbox text-right">
									<input type="checkbox" class="custom-control-input" id="customCheck1"/>
									 <label class="custom-control-label" for="customCheck1">False</label>
								</div>													
							</div>-->
						</div>
						<div class="form-group row">
						   <div class="col-11">
						  	 <textarea class="form-control h-25" placeholder="Saisir la réponse n°4"></textarea>
						   </div>
							<!--<div class="col-1">
								<div class="custom-control custom-checkbox text-right">
									<input type="checkbox" class="custom-control-input" id="customCheck4"/>
									 <label class="custom-control-label" for="customCheck4"> True</label>
								</div>
								<div class="custom-control custom-checkbox text-right">
									<input type="checkbox" class="custom-control-input" id="customCheck1"/>
									 <label class="custom-control-label" for="customCheck1">False</label>
								</div>															
							</div>-->
						</div>
						<div class="form-group row">
							<div class="col-11">
								<textarea class="form-control h-25" placeholder="Saisir la bonne réponse"></textarea>
							</div>
						</div>

						<div class="form-group">
							<select class="form-control">
								<option>Choisir une note ...</option>
								<option>01</option>
								<option>02</option>
								<option>03</option>
								<option>04</option>
								<option>05</option>
							</select>
						</div>
		                <div class="form-group">
		                    <a class="btn btn-info btn-lg btn-block"
		                        href="{{route('quizz-list')}}">Ajouter</a>
		                </div>						
					</form>
				</div>
			</div>
		</div>
	</div>
@endsection
