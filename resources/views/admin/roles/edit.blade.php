@extends('adminlte::page')


@section('content_header')
    <h1>Modificar rol</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-md-4">
            <div class="card card-outline card-success">
                    <div class="card-header">
                        <h3 class="card-title">Ingrese los datos</h3>
                    </div>
                
                    <div class="card-body">
                        <form action="{{ url('/admin/roles', $role->id) }}" method="post">
                            @csrf
                            @method('put')
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="name">Nombre del rol</label>
                                        <input value="{{$role->name}}"  name="name" type="text" class="form-control" id="name" required>
                                        @error('name')
                                        <small style="">{{ $message }}</small>
                                        @enderror
                                    </div>{{-- cierre formgroup --}}
                                </div>{{-- cierre col-12 --}}
                            </div>{{-- cierre row --}}
                            <hr>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-success">Modificar</button>
                                    </div>{{-- cierre formgroup --}}
                                </div>{{-- cierre col-12 --}}
                            </div>{{-- cierre row --}}

                        </form>
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