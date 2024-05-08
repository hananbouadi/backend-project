@extends('layout')
@section('content')
<a href="{{route('patient.index')}}"><button class="btn btn-secondary btn-sm"><i class="bi bi-arrow-90deg-left"></i></button></a>
 <div class="position-relative d-flex justify-content-center">
    <form action="{{ route('consultation.store') }}" method="post" >
        @csrf
        <div class="mb-3 position-absolute top-50 start-0">
            <label class="form-label">ID patient</label>
            <input type="text" name="id_p" placeholder="ID patient" class="form-control">
            <label class="form-label">date</label>
            <input type="text" name="date" placeholder="date" class="form-control">
            <label class="form-label">type</label>
            <input type="text" name="type" placeholder="type" class="form-control">
           
            <button class="btn btn-success mt-3">confirm</button>
        </div>

    </form>
 </div>
 
@endsection