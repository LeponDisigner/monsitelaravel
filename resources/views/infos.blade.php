@extends('form')

@section('contenu')
    <form action="{{ url('/users') }}" method="post">
        @csrf
        <label for="nom">Entrez votre nom:</label>
        <input type="text" name="nom" id="nom">
        <input type="submit" value="Envoyer">
    </form>
@endsection