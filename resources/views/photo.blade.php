@extends('templates.layout')

@section('title')
    Upload du fichier
@endsection

@section('content')
    <br>
	<div class="offset-3 col-sm-6">
		<div class="card card-info">
			<div class="card-header">
                <h3 class="card-title">Envoi d'une photo</h3>
            </div>
			<div class="card-body"> 
				@if(session()->has('error'))
					<div class="alert alert-danger">{!! session('error') !!}</div>
                @endif
                
                <form action="/photo" method="post" enctype="multipart/form-data">
                    {!! csrf_field() !!}
                    <div class="form-group {!! $errors->has('image') ? 'has-error' : '' !!}">
                        <input type="file" class="form-control" name="image">
						{!! $errors->first('image', '<small class="help-block">:message</small>') !!}
                    </div>
                    
                    <button type="submit" class="btn btn-info pull-right">Envoyer !</button>
                </form>
			</div>
		</div>
	</div>
@endsection