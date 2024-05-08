@extends('layout')
@section('content')
<a href="{{route('patient.index')}}"><button class="btn btn-secondary btn-sm"><i class="bi bi-arrow-90deg-left"></i></button></a>
    <ul>
        <li>{{$consultation->id_c}}</li>
        <li>{{$consultation->id_p}}</li>
        <li>{{$consultation->date}}</li>
        <li>{{$consultation->type}}</li>
    </ul>
@endsection