@extends('layout')
@section('content')
<ul>
    <li>Nom : {{$patient->nom}}</li>
    <li>Prenom : {{$patient->prenom}}</li>
    <li>Age : {{$patient->age}}</li>
    <li>Email : {{$patient->email}}</li>
    <li>CIN : {{$patient->CIN}}</li>
    <li>tel : {{$patient->tel}}</li>
    <li>Address : {{$patient->address}}</li>
</ul>
@endsection