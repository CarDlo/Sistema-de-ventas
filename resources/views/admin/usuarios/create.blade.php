@extends('adminlte::page')


@section('content_header')
    <h1>Crear nuevo usuario</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-md-9">
            <div class="card card-outline card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Ingrese los datos</h3>
                    </div>
                
                    <div class="card-body">
                        <form action="{{ route('admin.usuarios.store') }}" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="role">Nombre del rol</label>
                                       <select name="role" id="role" class="form-control">
                                           @foreach ($roles as $role)
                                               <option value="{{ $role->name }}">{{ $role->name }}</option>
                                           @endforeach
                                       </select>
                                    </div>{{-- cierre formgroup --}}
                                </div>{{-- cierre col-4 --}}
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="name">Nombre del usuario</label>
                                        <input value="{{old('name')}}"  name="name" type="text" class="form-control" id="name" required>
                                        @error('name')
                                        <small style="">{{ $message }}</small>
                                        @enderror
                                    </div>{{-- cierre formgroup --}}
                                </div>{{-- cierre col-4 --}}
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="email">Correo electronico</label>
                                        <input value="{{old('email')}}"  name="email" type="email" class="form-control" id="email" required>
                                        @error('email')
                                        <small style="">{{ $message }}</small>
                                        @enderror
                                    </div>{{-- cierre formgroup --}}
                                </div>{{-- cierre col-4 --}}
                            </div>{{-- cierre row --}}
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="password">Contraseña</label>
                                        <input value="{{old('password')}}"  name="password" type="password" class="form-control" id="password" required>
                                        @error('password')
                                        <small style="">{{ $message }}</small>
                                        @enderror
                                    </div>{{-- cierre formgroup --}}
                                </div>{{-- cierre col-4 --}}
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="password_confirmation">Confirmar contraseña</label>
                                        <input value="{{old('password_confirmation')}}"  name="password_confirmation" type="password" class="form-control" id="password_confirmation" required>
                                        @error('password_confirmation')
                                        <small style="">{{ $message }}</small>
                                        @enderror
                                    </div>{{-- cierre formgroup --}}
                                </div>{{-- cierre col-4 --}}
                            </div>{{-- cierre row --}}
                            <hr>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <a href="{{ route('admin.usuarios.index') }}" class="btn btn-secondary">Cancelar</a>
                                        <button type="submit" class="btn btn-primary">Registrar</button>
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