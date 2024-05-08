@extends('layout')
@section('content')
<a href="{{route('patient.index')}}"><button class="btn btn-secondary btn-sm"><i class="bi bi-arrow-90deg-left"></i></button></a>
<form action="{{route('consultation.update' ,$consultation)}}" method="post">
    @csrf
    @method('put')
    <input type="text" name="id_p" placeholder="id patient" value="{{$consultation->id_p}}">
    <input type="text" name="date" placeholder="date" value="{{$consultation->date}}">
    <input type="text" name="type" placeholder="type" value="{{$consultation->type}}">
    
    <button>update</button>
</form>
@endsection