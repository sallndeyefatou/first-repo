@extends('layouts.master-lg')
@section('head-top')
   <div class="row">
    <form action="{{route('quizz.show',['quizz1_id'/*$quizz->id*/])}}" method="GET">
		<div class="col-md-8 col-sm-12">
			<div class="title">
				<div class="visit">
					<h6>QUIZZ : <span class="text-info">{{-- $quizz->nomquizz --}}</span></h6>
				</div>
				<div class="visit mt-2">
				    <span class="font-weight-bold">Nombre de questions :</span> 
                    <span class="badge badge-pill badge-warning">{{-- $quizz->questions->count() --}}</span>	
				</div>
			</div>
		</div>
		<div class="col-md-4 col-sm-12 mt-2 text-right">
			<div class="title">
				<div class="visit">
				    <span class="font-weight-bold">Durée :</span> 
                    <span class="badge badge-pill badge-info">{{-- $quizz->duree --}} minutes</span>	
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
                    <h5 class="text-center mb-4">Questions du Quizz</h5>
					<!--foreach($quizz->questions as $index => $question*/)-->
						<div class="mb-4">
							<h6>Question {{-- $index + 1 }} : {{ $question->intitule --}}</h6>
							<p><strong>Type :</strong> {{-- ucfirst($question->type) --}}</p>
							<p><strong>Note :</strong> {{-- $question->note }}/{{ $quizz->totalPoints --}}</p>
							<p><strong>Réponses :</strong></p>
							<ul class="list-unstyled">
								<!--foreach(/*$question->reponses as $reponse*/)-->
									<li>{{-- $reponse->text --}} 
										<!--if(/*$reponse->is_correct*/)-->
											<span class="badge badge-success">Correct</span>
										<!--endif-->
									</li>
								<!--endforeach-->
							</ul>
						</div>
					<!--endforeach-->
				</div>
			</div>
		</div>
    </form>
	</div>
@endsection

@section('script')
	<script>
		// Ajouter des scripts JavaScript si nécessaire
	</script>
@endsection
