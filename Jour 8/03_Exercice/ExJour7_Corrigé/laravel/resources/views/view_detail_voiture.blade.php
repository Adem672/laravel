@extends('template')

@section('contenu')
<div class="col-sm-offset-4 col-sm-4">
    <br>
    <div class="panel panel-primary">
        <div class="panel-heading">Fiche de la voiture</div>
        <div class="panel-body">
            <p>Marque : {{$voiture->marque}}</p>
            <p>Type : {{$voiture->type}}</p>
            <p>Couleur : {{$voiture->couleur}}</p>
            <p>Cylindrée : {{$voiture->cylindree}}</p>
        </div>
    </div>
    <a href="javascript:history.back()" class="btn btn-primary">
        <span class="glyphicon glyphicon-circle-arrow-left"></span>Retour
    </a>
</div>
@endsection