@extends('layouts.master')
@section('head-top')
   <div class="row">
		<div class="col-md-6 col-sm-12">
			<div class="title">
				<h4>PCCI - QUIZZ</h4>
			</div>
		</div>
		<div class="col-md-6 col-sm-12 text-right">
			<div class="title">
				<!--<a class="btn btn-secondary" href="#" data-toggle="modal" data-target="#bd-example-modal-lg"> Add new quizz</a>-->
				<h4>NOUVEAU QUIZZ</h4>
			</div>
		</div>
  </div>
@endsection
@section('head-bottom')
	<div class="row">
		<div class="col-md-12 col-sm-12">
			<div class="card-box mb-0">
				<div class="pb-0">
					<form action="{{route('quizz.store')}}" method="POST">
						@csrf
						<div class="form-group">
							<!--<label>Campagne</label>-->
							<select class="form-control" name="nomcampagne">
								<option>Choisir une campagne...</option>
								<option>EXPRESSO</option>
								<option>FREE</option>
								<option>OP</option>
								<option>AUTRES</option>
							</select>
						</div>						
						<div class="form-group">
							<!--<label>Nom du quizz</label>-->
							<input class="form-control" name="nomquizz" type="text" placeholder="FREE : QUIZ  MENSUEL OCTOBRE 2023"/>
						</div>
						<div class="form-group">
							<!--<label>Nombre de questions</label>-->
							<select class="form-control" name="nbques">
								<option>Choisir le nombre de questions...</option>
								<option>05</option>
								<option>10</option>
								<option>15</option>
								<option>20</option>
							</select>
						</div>						
						<div class="form-group">
							<!--<label>La durée du quizz(secondes)</label>-->
							<select class="form-control" name="duree">
								<option>Durée en minutes</option>
								<option>30</option>
								<option>45</option>
								<option>60</option>
								
							</select>
						</div>
						<div class="form-group">
							
							<select class="form-control" name="etat">
								<option>Actif</option>
								<option>Inactif</option>
							</select>
						</div>
		                <div class="form-group">
		                  <button class="btn btn-info btn-lg btn-block" type="submit" href="{{route('quizz-list')}}">Ajouter</button>
		                </div>						
					</form>
					
				</div>
			</div>
		</div>
	</div>
@endsection
@section('content')
    <div class="login-title">
            <div class="text-center">
                <img src="{{asset('images/logo.png')}}" style="height:50px; width:180px;" alt="" />
            </div>                 
    </div>   
    <div class="row">
       <div class="col-sm-12">
			<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
				<div class="carousel-inner">
					<div class="carousel-item active">
						<img class="d-block w-100" src="{{asset('deskapp/images-pcci/evaluation1.jpg')}}" style="height:330px;" alt="First slide">
					</div>
					<div class="carousel-item">
						<img class="d-block w-100" src="{{asset('deskapp/images-pcci/evaluation2.jpg')}}" style="height:330px;" alt="Second slide">
					</div>
					<div class="carousel-item">
						<img class="d-block w-100" src="{{asset('deskapp/images-pcci/evaluation3.jpg')}}" style="height:330px;" alt="Third slide">
					</div>
				</div>
			</div>
        </div>
    </div>
@endsection