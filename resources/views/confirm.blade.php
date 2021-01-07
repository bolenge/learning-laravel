@extends('templates.layout')

@section('title')
    Confirmation envoi
@endsection

@section('content')
    <br>
	<div class="offset-3 col-sm-6">
		<div class="card card-info">
			<div class="card-heading">Contactez-moi</div>
			<div class="card-body"> 
				Merci. Votre message a été transmis à l'administrateur du site. Vous recevrez une réponse rapidement.
			</div>
		</div>

		<a href="/contact" class="btn btn-primary"><- Retour</a>
	</div>
@endsection