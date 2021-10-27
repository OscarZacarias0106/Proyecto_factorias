@extends('layouts.base')

<div class="Container mt-1">
    @section('title', 'User List')

    @section('content')

        <div  class="row justify-content-center">
            <div class="col-md-10">

                <h2 class="text-center mb-5 mt-5">Lista de Registro de Estudiantes</h2>

                <table class="table table-bordered table-striped">
                    <thead>
                    <tr class="table table-bordered table-striped text-center p-3 mb-2 bg-success text-white ">
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Email</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($Students as $Student)
                    <tr>
                        <td>{{ $Student->nombre }}</td>
                        <td>{{ $Student->apellido }}</td>
                        <td>{{ $Student->email }}</td>
                    <tr>
                    @endforeach
                    </tbody>


                </table>
                {{ $Students->links() }}
            </div>

        </div>

    @endsection
</div>
