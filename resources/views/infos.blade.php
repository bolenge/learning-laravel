@extends('templates.layout')

@section('title')
    Bienvenue sur Mon Site
@endsection

@section('content')
    <form action="users" method="post">
        {!! csrf_field() !!}
        <label for="nom">Entrez votre nom : </label>
        <input type="text" name="nom" id="nom">
        <button type="submit">Valider</button>
    </form>

    <p><a href="/">Go Home</a></p>
@endsection