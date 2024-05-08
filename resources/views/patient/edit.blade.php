@extends('layout')
@section('content')
<form action="{{route('patient.update' ,$patient)}}" method="post">
    @csrf
    @method('put')
    <input type="text" name="nom" placeholder="nom" value="{{$patient->nom}}">
    <input type="text" name="prenom" placeholder="prenom" value="{{$patient->prenom}}">
    <input type="text" name="age" placeholder="age" value="{{$patient->age}}">
    <input type="text" name="email" placeholder="email" value="{{$patient->email}}">
    <input type="text" name="CIN" placeholder="CIN" value="{{$patient->CIN}}">
    <input type="text" name="tel" placeholder="tel" value="{{$patient->tel}}">
    <input type="text" name="address" placeholder="address" value="{{$patient->address}}">
    <button>update</button>
</form>
@endsection