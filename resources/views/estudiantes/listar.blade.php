@extends('layouts.base')

<div class="Container mt-1">
    @section('title', 'User List')

    @section('content')

        <div  class="row justify-content-center">
            <div class="col-md-10">

                <h2 class="text-center mb-5">Lista de Registro de Estudiantes</h2>

                <table class="table table-bordered table-striped text-center  ">
                    <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Email</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($students as $student)
                    <tr>
                        <td>{{ $student->nombre }}</td>
                        <td>{{ $student->apellido }}</td>
                        <td>{{ $student->email }}</td>
                    <tr>
                    @endforeach
                    </tbody>

                </table>

            </div>

        </div>

    @endsection
</div>
