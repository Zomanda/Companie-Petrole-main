@extends('template')

@section('contenu')


<h1> Page marché international </h1>
@if (count($marches))
    @foreach ($marches as $marche)
        <p style="color: yellow"><a href="{{ route('MarcheInternational.edit', [$marche->nomCompagnie]) }}">{{ $marche->nomCompagnie }}</a></p>
        <p style="color: white">Capacité estimée : {{ $marche->prixBaril }}</p>
        <p style="color: white">Capacité confirmé : {{ $marche->quantite }}</p>
        <br>
    @endforeach
@else
    <p> Oops ! Il semble n'y avoir rien pour le moment ;-( <p>
@endif

@endsection