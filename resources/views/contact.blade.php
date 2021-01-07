@extends('templates.layout')

@section('title')
    Laissez-nous un message
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-6 offset-3 mt-5">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Contactez-nous</h3>
                </div>
                <div class="card-body">
                    <form action="/contact" method="post">
                        {!! csrf_field() !!}

                        <div class="form-group {!! $errors->has('nom') ? 'has-error' : '' !!}">
                            <input type="text" name="nom" id="nom" placeholder="Votre nom" class="form-control">
                            {!! $errors->first('nom', '<small class="help-block">:message</small>') !!}
                        </div>

                        <div class="form-group {!! $errors->has('email') ? 'has-error' : '' !!}">
                            <input type="text" name="email" id="email" placeholder="Votre email" class="form-control">
                            {!! $errors->first('email', '<small class="help-block">:message</small>') !!}
                        </div>

                        <div class="form-group {!! $errors->has('texte') ? 'has-error' : '' !!}">
                            <textarea name="texte" id="texte" placeholder="Votre message" class="form-control"></textarea>
                            {!! $errors->first('texte', '<small class="help-block">:texte</small>') !!}
                        </div>

                        <button type="submit" class="btn btn-info pull-right">Envoyer !</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection