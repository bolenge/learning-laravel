@extends('templates.layout')

@section('content')
    <br>
    <div class="offset-4 col-sm-4">
		<div class="card card-info">
			<div class="card-header">
                <h5 class="card-title text-center">Inscription à la lettre d'information</h5>
            </div>
			<div class="card-body"> 
                <form action="{{ route('storeEmail') }}" method="POST">
                    {!! csrf_field() !!}
                    <div class="form-group">
                        <input type="email" name="email" id="email" class="form-control" placeholder="Entrez votre email" />
                        {!! $errors->first('email', '<small class="help-block">:message</small>') !!}
                    </div>

                    <button type="submit" class="btn btn-info float-right">Envoyer !</button>
                </form>
			</div>
		</div>
	</div>
@endsection