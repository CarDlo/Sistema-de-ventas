@extends('adminlte::page')


@section('content_header')
    <h1>Roles de usuario</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card card-outline card-primary">
                <div class="card-header">
                <h3 class="card-title">Roles registrados</h3>
                    <div class="card-tools">
                    <a class="btn btn-primary btn-sm" href="{{ route('admin.roles.create') }}">Crear nuevo</a>

                    </div>
                
                </div>
                
                <div class="card-body">
                    <table class="table table-bordered table-striped table-hover table-sm">
                        <thead class="thead-dark">
                        <tr>
                            <th scope="col">Nro</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Acciones</th>

                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>

                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Jacob</td>
                            <td>Thornton</td>

                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>Larry</td>
                            <td>the Bird</td>

                        </tr>
                        </tbody>
                    </table>
                    
                    
                </div>
            
            </div>
            
            </div>

    </div>
@stop

@section('css')
    {{-- Add here extra stylesheets --}}
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')


@stop