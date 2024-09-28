@extends('adminlte::page')


@section('content_header')
    <h1>Usuarios registrados</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-md-9">
            <div class="card card-outline card-info">
                    <div class="card-header">
                        <h3 class="card-title">Datos registrados</h3>
                    </div>
                
                    <div class="card-body">

                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="role">Nombre del rol</label>
                                        <p>{{$usuario->roles->pluck('name')->implode(', ')}}</p>        
                                    </div>{{-- cierre formgroup --}}
                                </div>{{-- cierre col-4 --}}
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="name">Nombre del usuario</label>
                                        <p>{{$usuario->name}}</p>
                                    </div>{{-- cierre formgroup --}}
                                </div>{{-- cierre col-4 --}}
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="email">Correo electronico</label>
                                        <p>{{$usuario->email}}</p>
                                    </div>{{-- cierre formgroup --}}
                                </div>{{-- cierre col-4 --}}
                            </div>{{-- cierre row --}}
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="created_at">Fecha y hora de registro</label>
                                        <p>{{$usuario->created_at}}</p>
                                    </div>{{-- cierre formgroup --}}
                                </div>{{-- cierre col-4 --}}

                            </div>{{-- cierre row --}}
                            <hr>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <a href="{{ route('admin.usuarios.index') }}" class="btn btn-secondary">Volver</a>

                                    </div>{{-- cierre formgroup --}}
                                </div>{{-- cierre col-12 --}}
                            </div>{{-- cierre row --}}

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