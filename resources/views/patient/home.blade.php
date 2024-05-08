@extends('layout')
@section('content')
    @auth
        <a href="{{ route('patient.create') }}"><button class="btn btn-secondary btn-sm">Add patient</button></a>
        <a href="{{ route('consultation.create') }}"><button class="btn btn-secondary btn-sm">Add consultation</button></a>
    @endauth

    <div class="container">
        <div class="row">
            <div class="col">
                <table class="table table-hover">
                    <tr>
                        <th>ID</th>
                        <th>nom</th>
                        <th>prenom</th>
                        <th>age</th>
                        <th>email</th>
                        <th>CIN</th>
                        <th>tel</th>
                        <th>address</th>
                        <th>Action</th>
                    </tr>
                    @foreach ($patients as $patient)
                        <tr>
                            <td>{{ $patient->id }}</td>
                            <td>{{ $patient->nom }}</td>
                            <td>{{ $patient->prenom }}</td>
                            <td>{{ $patient->age }}</td>
                            <td>{{ $patient->email }}</td>
                            <td>{{ $patient->CIN }}</td>
                            <td>{{ $patient->tel }}</td>
                            <td>{{ $patient->address }}</td>
                            <td>
                                @auth
                                    <a href="{{ route('patient.show', $patient) }}"><button class="btn btn-success"><i
                                                class="bi bi-eye"></i></button></a>
                                    <a href="{{ route('patient.edit', $patient) }}"><button class="btn btn-info"><i
                                                class="bi bi-arrow-clockwise"></i></button></a>
                                    <form action="{{ route('patient.destroy', $patient) }}" method="post">
                                        @csrf
                                        @method('delete')
                                        <button class="btn btn-danger"><i class="bi bi-trash3"></i></button>
                                    </form>
                                @endauth

                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
            <div class="col">

            </div>
        </div>
    </div>
@endsection
