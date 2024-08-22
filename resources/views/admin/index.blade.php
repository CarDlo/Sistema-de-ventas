@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Bienvenido {{$empresa->nombre_empresa}}</h1>
@stop

@section('content')
    <p></p>
@stop

@section('css')
    {{-- Add here extra stylesheets --}}
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')
   @if((($mensaje = Session::get('mensaje')) && ($icono = Session::get('icono'))))
   <script>
    Swal.fire({
        position: "center",
        icon: "{{$icono}}",
        title: "{{$mensaje}}",
        showConfirmButton: false,
        timer: 3000
    });
    </script>
   @endif

@stop