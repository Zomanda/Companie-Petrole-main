@extends('template')

@section('contenu')

<h1> Page des gisements </h1>
@if (count($gisements))
    @foreach ($gisements as $gisement)
        <p style="color: yellow"><a href="{{ route('gisements.edit', [$gisement->noGisement]) }}">{{ $gisement->pays }}</a></p>
        <p style="color: white">Capacité estimée : {{ $gisement->capaciteEstimee }}</p>
        <p style="color: white">Capacité confirmé : {{ $gisement->capaciteConfirmee }}</p>
        <p style="color: white">Composition : {{ $gisement->composition }}</p>
        <br>
    @endforeach
@else
    <p> Oops ! Il semble n'y avoir rien pour le moment ;-( <p>
@endif

@endsection