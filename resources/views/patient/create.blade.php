@extends('layout')
@section('content')
 <div class="position-relative">
    <form action="{{ route('patient.store') }}" method="post" >
        @csrf
        <div class="mb-3 position-absolute top-50 start-0">
            <label class="form-label">Nom</label>
            <input type="text" name="nom" placeholder="nom" class="form-control">
            <label class="form-label">Prenom</label>
            <input type="text" name="prenom" placeholder="prenom" class="form-control">
            <label class="form-label">Age</label>
            <input type="text" name="age" placeholder="age" class="form-control">
            <label class="form-label">Email</label>
            <input type="text" name="email" placeholder="email" class="form-control">
            <label class="form-label">CIN</label>
            <input type="text" name="CIN" placeholder="CIN" class="form-control">
            <label class="form-label">Tel</label>
            <input type="text" name="tel" placeholder="tel" class="form-control">
            <label class="form-label">Address</label>
            <input type="text" name="address" placeholder="address" class="form-control">
            <button class="btn btn-success mt-3">confirm</button>
        </div>

    </form>
 </div>
 
@endsection
