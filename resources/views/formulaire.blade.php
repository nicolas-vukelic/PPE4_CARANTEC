@extends('template')

@section('contenu')
    <form action="{{url('teufeur')}}" method="POST">
        @csrf
        <label for="LOGIN">Entrez votre login :</label>
        <input type="text" name="LOGIN" id="LOGIN">
        <label for="MDP">Entrez votre mot de passe :</label>
        <input type="text" name="MDP" id="MDP">
        <input type="submit" value="Connexion">
    </form>
@endsection
