@extends('base', ['title'  => 'Liste etudiant'])

@section('vitrine')
<h1>Lisle des etudiant</h1>
<ul>
@foreach ($etudiants as  $etudiant)
<li>{{$etudiant->prenom}} {{$etudiant->nom}} </li>

@endforeach
</ul>
@stop
