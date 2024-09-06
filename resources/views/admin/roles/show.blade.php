@extends('adminlte::page')


@section('content_header')
    <h1>Detalle del rol</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-md-4">
            <div class="card card-outline card-info">
                    <div class="card-header">
                        <h3 class="card-title">Datos registrados</h3>
                    </div>
                
                    <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="name">Nombre del rol</label>
                                        <p>{{$role->name}}</p>
                                    </div>{{-- cierre formgroup --}}
                                </div>{{-- cierre col-12 --}}
                            </div>{{-- cierre row --}}
                            <hr>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <a href="{{ route('admin.roles.index') }}" class="btn btn-primary">Volver</a>
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