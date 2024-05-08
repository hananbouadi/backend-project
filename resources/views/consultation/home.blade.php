@extends('layout')
@section('content')
<h1 class="title text-success d-flex justify-content-center">Consultation</h1>
<a href="{{route('patient.index')}}"><button class="btn btn-secondary btn-sm"><i class="bi bi-arrow-90deg-left"></i></button></a>
<form action="{{route('consultation.index')}}" method="get">
    <input type="text" placeholder="search" name="search">
    <button class="btn btn-secondary btn-sm"><i class="bi bi-search"></i></button>
</form>
<table class="table table-hover d-flex justify-content-center">
    <tr>
        <th>ID consultation</th>
        <th>ID patient</th>
        <th>Date</th>
        <th>Type</th>
        <th>Action</th>
    </tr>
    @foreach ($consultations as $consultation)
        <tr>
           <td>{{$consultation->id_c}}</td>
           <td>{{$consultation->id_p}}</td>
           <td>{{$consultation->date}}</td>
           <td>{{$consultation->type}}</td>
           <td>
            <a href="{{ route('consultation.show', $consultation) }}"><button class="btn btn-success"><i class="bi bi-eye"></i></button></a>

            <a href="{{route('consultation.edit' , $consultation)}}"><button class="btn btn-info"><i class="bi bi-arrow-clockwise"></i></button></a>
            <form action="{{route('consultation.destroy' , $consultation)}}" method="post">
                @csrf
                @method('delete')
                <button class="btn btn-danger"><i class="bi bi-trash3"></i></button>
            </form>
           </td>
        </tr>
    @endforeach
    
</table>
@endsection