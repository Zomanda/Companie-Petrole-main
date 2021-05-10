@extends('template')

@section('contenu')

    <p style="color: yellow">{{ $gisement->pays }}</p>
    <p style="color: white">Capacité estimée : {{ $gisement->capaciteEstimee }}</p>
    <p style="color: white">Capacité confirmé : {{ $gisement->capaciteConfirmee }}</p>
    <p style="color: white">Composition : {{ $gisement->composition }}</p>

@if (isset($gisement))
    <form method="POST" action="{{ route('gisements.update', [$gisement->noGisement]) }}">
        @csrf
        @method('PATCH')
            <div class="form-group">
                <label for="paysGisement">Pays du gisement</label>
                <input type="text" class="form-control" id="pays" placeholder="Pays du gisement" name="pays">
            </div>
            <div class="form-group">
                <label for="capaciteEstimeeGisement">Capacité estimée du gisement</label>
                <input type="text" class="form-control" id="capaciteEstimee" placeholder="Capacité estimée du gisement" name="capaciteEstimee">
            </div>
            <div class="form-group">
                <label for="capaciteConfirmeeGisement">Capacité confirmée du gisement</label>
                <input type="text" class="form-control" id="capaciteConfirmee" placeholder="Capacité confirmée du gisement" name="capaciteConfirmee">
            </div>
            <div class="form-group">
                <label for="compositionGisement">Composition du gisement</label>
                <input type="text" class="form-control" id="composition" placeholder="Composition du gisement" name="composition">
            </div>
        <button type="submit" class="btn btn-secondary">Modifier</button>
    </form>
    <form method="POST" action="{{route('gisements.destroy', [$gisement->noGisement]) }}">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Supprimer</button>
    </form>
@else
    <p>Gisement inexistant !</p>
@endif
@endsection