@extends('template')

@section('contenu')

<div class="toast" role="alert" aria-live="assertive" aria-atomic="true" id="opeReussi" data-autohide="false">
    <div class="toast-header">
        <strong class="mr-auto">Gisement</strong>
        <small class="text-muted">Il y a 5 secondes</small>
        <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Fermer">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <div class="toast-body text-primary">
        <strong class="mr-auto text-primary">L'ajout d'un gisement vient de se terminer correctement</strong>
    </div>
</div>
<form method="POST" action="{{ route('gisements.store') }}">
    @csrf
        <div class="form-group">
            <label for="paysGisement">Pays du gisement</label>
            <input type="text" class="form-control" id="pays" placeholder="Pays du gisement" name="pays" value="{{old('pays')}}">
        </div>
        <div class="form-group">
            <label for="capaciteEstimeeGisement">Capacité estimée du gisement</label>
            <input type="text" class="form-control" id="capaciteEstimee" placeholder="Capacité estimée du gisement" name="capaciteEstimee" value="{{old('capaciteEstimee')}}">
        </div>
        <div class="form-group">
            <label for="capaciteConfirmeeGisement">Capacité confirmée du gisement</label>
            <input type="text" class="form-control" id="capaciteConfirmee" placeholder="Capacité confirmée du gisement" name="capaciteConfirmee" value="{{old('capaciteConfirmee')}}">
        </div>
        <div class="form-group">
            <label for="compositionGisement">Composition du gisement</label>
            <input type="text" class="form-control" id="composition" placeholder="Composition du gisement" name="composition" value="{{old('composition')}}">
        </div>
    <button id="submit" class="btn btn-secondary">Envoyer</button>
</form>
@endsection