@extends('adminlte::master')

@php( $dashboard_url = View::getSection('dashboard_url') ?? config('adminlte.dashboard_url', 'home') )

@if (config('adminlte.use_route_url', false))
    @php( $dashboard_url = $dashboard_url ? route($dashboard_url) : '' )
@else
    @php( $dashboard_url = $dashboard_url ? url($dashboard_url) : '' )
@endif

@section('adminlte_css')
    @stack('css')
    @yield('css')
@stop

@section('classes_body'){{ ($auth_type ?? 'login') . '-page' }}@stop

@section('body')
    <div class="container">
        <img src="{{ url('/image/logo.png') }}" width="20%" alt="" class="d-block mx-auto pb-3">
       
        <div class="row">
            <div class="col-md-12">
                        {{-- Card Box --}}
                <div class="card {{ config('adminlte.classes_auth_card', 'card-outline card-primary') }}">

                    {{-- Card Header --}}
                
                        <div class="card-header {{ config('adminlte.classes_auth_header', '') }}">
                            <h3 class="card-title float-none text-center">
                               <b>Registro de nueva empresa</b>
                            </h3>
                        </div>
                   

                    {{-- Card Body --}}
                    <div class="card-body {{ $auth_type ?? 'login' }}-card-body {{ config('adminlte.classes_auth_body', '') }}">
                        <div class="form">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group m-0">
                                        <label for="formFile" class="form-label">Logo de la empresa</label>
                                        <input class="form-control" type="file" id="formFile">
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    {{--Inicio fila--}}
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="pais">Pais</label>
                                                <select name="" id="pais" class="form-control">
                                                    <option value="Colombia">Colombia</option>
                                                    <option value="España">España</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="nombre">Nombre de la empresa</label>
                                                <input type="text" class="form-control" id="nombre" placeholder="Nombre de la empresa">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="tipo">Tipo de empresa</label>
                                                <input type="text" class="form-control" id="tipo" placeholder="Tipo de empresa">
                                            </div>
                                        </div>
                                    </div>
                                    {{--Fin fila--}}
                                    {{--Inicio fila--}}
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="nit">NIT</label>
                                                <input type="text" class="form-control" id="nit" placeholder="NIT">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="phone">Telefono</label>
                                                <input type="text" class="form-control" id="phone" placeholder="Telefono">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="tipo">Correo electronico</label>
                                                <input type="email" class="form-control" id="tipo" placeholder="Correoelectronico">
                                            </div>
                                        </div>
                                    </div>
                                     {{--Fin fila--}}
                                     {{--Inicio fila--}}
                                     <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="cantidad_impuesto">Cantidad de impuesto</label>
                                                    <input type="number" class="form-control" id="cantidad_impuesto">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="nombre_impuesto">Nombre del Impuesto</label>
                                                    <input type="text" class="form-control" id="nombre_impuesto" placeholder="Nombre del impuesto">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="moneda">Moneda</label>
                                                    <select name="moneda" id="moneda" class="form-control">
                                                        <option value="USD">Dolar</option>
                                                        <option value="COP">Peso</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    {{--Fin fila--}}
                                    {{--Inicio fila--}}
                                     <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="direccion">Direccion</label>
                                                    <input type="address" class="form-control" id="direccion" placeholder="Direccion">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="ciudad">Ciudad</label>
                                                    <input type="text" class="form-control" id="ciudad" placeholder="Ciudad">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="departamento">Departamento</label>
                                                    <input type="text" class="form-control" id="departamento" placeholder="Departamento">
                                                </div>
                                            </div>
                                        </div>
                                    {{--Fin fila--}}
                                    {{--Inicio fila--}}
                                     <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="codigo_postal">Codigo postal</label>
                                                    <input type="number" class="form-control" id="direccion" placeholder="Codigo postal">
                                                </div>
                                            </div>

                                        </div>
                                    {{--Fin fila--}}
                                </div> {{--fin del col-md-8--}}
                            </div>
                        </div>
                    </div>

                    {{-- Card Footer --}}
                    @hasSection('auth_footer')
                        <div class="card-footer {{ config('adminlte.classes_auth_footer', '') }}">
                            @yield('auth_footer')
                        </div>
                    @endif

                </div>
            </div>
        </div>

        

    </div>
@stop

@section('adminlte_js')
    @stack('js')
    @yield('js')
@stop
