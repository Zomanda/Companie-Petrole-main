@extends('template')

@section('contenu')

<form action="{{ route('MarcheInternational.store') }}" method="post">
    @csrf
        <div class="form-group">
            <label for="nomGisement">Nom du gisement</label>
            <input type="text" class="form-control" id="nomGisement" placeholder="Nom du gisement" name="nomGisement">
        </div>
        <div class="form-group">
            <label for="noGisement">Numéro du gisement</label>
            <input type="text" class="form-control" id="noGisement" placeholder="Numéro du gisement" name="noGisement">
        </div>
        <div class="form-group">
            <label for="prixBaril">Prix du baril</label>
            <input type="text" class="form-control" id="prixBaril" placeholder="Prix du baril" name="prixBaril">
        </div>
        <div class="form-group">
            <label for="quantite">Quantité du baril</label>
            <input type="text" class="form-control" id="quantite" placeholder="Quantité de baril" name="quantite">
        </div>
    <button type="submit" class="btn btn-secondary">Envoyer</button>
</form>
@endsection