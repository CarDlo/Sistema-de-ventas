@extends('adminlte::page')


@section('content_header')
    <h1>Roles de usuario</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-md-6">
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
                            @forEach($roles as $role)
                            <tr>
                                <th style="text-align: center" scope="row">{{ $loop->iteration }}</th>
                                <td>{{ $role->name }}</td>
                                <td style="text-align: center">
                                    <div class="btn-group" role="group" aria-label="Basic example">
                                        <a href="{{ url('/admin/roles', $role->id) }}" class="btn btn-info btn-sm"><i class="fas fa-eye"></i></a>
                                        <a href="{{ url('/admin/roles/'.$role->id.'/edit') }}" class="btn btn-success btn-sm"><i class="fas fa-edit"></i></a>
                                        <button type="button" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></button>
                                    </div>
                                </td>

                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    
                    
                    
                </div>

            
            </div>
            
        </div>
        <div class="col-md-6">

            <div class="card card-outline card-primary">
                <div class="card-header">
                <h3 class="card-title">Collapsible Accordion</h3>
                </div>
                
                <div class="card-body">
                
                <div id="accordion">
                <div class="card card-primary">
                <div class="card-header">
                <h4 class="card-title w-100">
                <a class="d-block w-100 collapsed" data-toggle="collapse" href="#collapseOne" aria-expanded="false">
                Collapsible Group Item #1
                </a>
                </h4>
                </div>
                <div id="collapseOne" class="collapse" data-parent="#accordion" style="">
                <div class="card-body">
                    <div class="form-group">
                        <div class="custom-control custom-checkbox">
                        <input class="custom-control-input" type="checkbox" id="customCheckbox1" value="option1">
                        <label for="customCheckbox1" class="custom-control-label">Custom Checkbox</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                        <input class="custom-control-input" type="checkbox" id="customCheckbox2" checked="" disabled="">
                        <label for="customCheckbox2" class="custom-control-label">Custom Checkbox checked</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                        <input class="custom-control-input" type="checkbox" id="customCheckbox3" disabled="">
                        <label for="customCheckbox3" class="custom-control-label">Custom Checkbox disabled</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                        <input class="custom-control-input custom-control-input-danger" type="checkbox" id="customCheckbox4" checked="">
                        <label for="customCheckbox4" class="custom-control-label">Custom Checkbox with custom color</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                        <input class="custom-control-input custom-control-input-danger custom-control-input-outline" type="checkbox" id="customCheckbox5" checked="">
                        <label for="customCheckbox5" class="custom-control-label">Custom Checkbox with custom color outline</label>
                        </div>
                        </div>
                </div>
                </div>
                </div>
                <div class="card card-danger">
                <div class="card-header">
                <h4 class="card-title w-100">
                <a class="d-block w-100" data-toggle="collapse" href="#collapseTwo" aria-expanded="true">
                Collapsible Group Danger
                </a>
                </h4>
                </div>
                <div id="collapseTwo" class="collapse show" data-parent="#accordion" style="">
                <div class="card-body">
                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid.
                3
                wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt
                laborum
                eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee
                nulla
                assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred
                nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft
                beer
                farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus
                labore sustainable VHS.
                </div>
                </div>
                </div>
                <div class="card card-success">
                <div class="card-header">
                <h4 class="card-title w-100">
                <a class="d-block w-100" data-toggle="collapse" href="#collapseThree">
                Collapsible Group Success
                </a>
                </h4>
                </div>
                <div id="collapseThree" class="collapse" data-parent="#accordion">
                <div class="card-body">
                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid.
                3
                wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt
                laborum
                eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee
                nulla
                assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred
                nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft
                beer
                farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus
                labore sustainable VHS.
                </div>
                </div>
                </div>
                </div>
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