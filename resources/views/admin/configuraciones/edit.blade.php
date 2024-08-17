@extends('adminlte::page')


@section('content_header')
    <h1>Configuraciones</h1>
@stop

@section('content')
<div class="row">
    <div class="col-md-12">
                {{-- Card Box --}}
        <div class="card card-outline card-info">

            {{-- Card Header --}}
        
                <div class="card-header {{ config('adminlte.classes_auth_header', '') }}">
                    <h3 class="card-title float-none text-center">
                       <b>Editar empresa</b>
                    </h3>
                </div>
           

            {{-- Card Body --}}
            <div class="card-body {{ $auth_type ?? 'login' }}-card-body {{ config('adminlte.classes_auth_body', '') }}">
                <form class="form" method="post" action="{{ url('crear-empresas/create') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="logo" class="form-label">Logo de la empresa</label>
                                <input accept=".png, .jpg, .jpeg" name="logo" class="form-control" type="file" id="logo" onchange="archivos(event)" required>
                                @error('logo')
                                    <div class="alert alert-danger">Completa este campo</div>
                                @enderror
                                <div id="list" class="image-container">
                                    <img src="{{ asset('storage/'.$empresa->logo) }}" alt="logo" class="img-fluid pt-4">
                                </div>
                                <script>
                                    function archivos(event) {
                                        var file = event.target.files;
                                        document.getElementById("list").innerHTML = ""; // Limpia el contenido anterior
                                        for (var i = 0; i < file.length; i++) {
                                            var nombre = file[i].name;
                                            var ext = nombre.split('.').pop();
                                            if (ext == 'png' || ext == 'jpg' || ext == 'jpeg') {
                                                (function(file) {
                                                    var reader = new FileReader();
                                                    reader.onload = function(event) {
                                                        var img = document.createElement("img");
                                                        img.src = event.target.result;
                                                        img.style.maxWidth = "300px"; // Ajuste de tamaño
                                                        img.style.margin = "10px"; // Margen entre imágenes
                                                        document.getElementById("list").appendChild(img);
                                                    };
                                                    reader.readAsDataURL(file);
                                                })(file[i]); // Llamada a la función con el archivo actual
                                            }
                                        }
                                    }
                                </script>


                            </div>
                        </div>
                        <div class="col-md-8">
                            {{--Inicio fila--}}
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="nombre">Nombre de la empresa</label>
                                        <input value="{{$empresa->nombre_empresa}}"  name="nombre_empresa" type="text" class="form-control" id="nombre" placeholder="Nombre de la empresa" required>
                                        @error('nombre_empresa')
                                        <div class="alert alert-danger">Completa este campo</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="nit">NIT</label>
                                        <input value="{{$empresa->nit}}"  name="nit" type="text" class="form-control" id="nit" placeholder="NIT" required>
                                        @error('nit')
                                        <div class="alert alert-danger">Completa este campo</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="tipo_empresa">Tipo de empresa</label>
                                        <input value="{{$empresa->tipo_empresa}}"  name="tipo_empresa" type="text" class="form-control" id="tipo_empresa" placeholder="Tipo de empresa" required>
                                        @error('tipo_empresa')
                                        <div class="alert alert-danger">Completa este campo</div>
                                        @enderror
                                    </div>
                                </div>

                            </div> {{--Fin fila--}}

                            {{--Inicio fila--}}
                            <div class="row">

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="telefono">Telefono</label>
                                        <input value="{{$empresa->telefono}}"  name="telefono" type="text" class="form-control" id="telefono" placeholder="Telefono" required>
                                        @error('telefono')
                                        <div class="alert alert-danger">Completa este campo</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="correo">Correo electronico</label>
                                        <input value="{{$empresa->correo}}"  name="correo" type="email" class="form-control" id="correo" placeholder="Correoelectronico" required>
                                        @error('correo')
                                        <div class="alert alert-danger">Completa este campo</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="moneda">Moneda</label>
                                        <select name="moneda" id="moneda" class="form-control">
                                            @foreach ($monedas as $moneda)
                                                <option value="{{ $moneda->id }}">{{ $moneda->name }}</option>
                                            @endforeach
                                        </select>
                                        @error('moneda')
                                        <div class="alert alert-danger">Completa este campo</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                             {{--Fin fila--}}
                             {{--Inicio fila--}}
                             <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="nombre_impuesto">Nombre del Impuesto</label>
                                        <input value="{{$empresa->nombre_impuesto}}"  name="nombre_impuesto" type="text" class="form-control" id="nombre_impuesto" placeholder="Nombre del impuesto" required>
                                        @error('nombre_impuesto')
                                        <div class="alert alert-danger">Completa este campo</div>
                                        @enderror
                                    </div>
                                </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="cantidad_impuesto">Cantidad de impuesto</label>
                                            <input value="{{$empresa->cantidad_impuesto}}"  name="cantidad_impuesto" type="number" class="form-control" id="cantidad_impuesto" required>
                                            @error('cantidad_impuesto')
                                            <div class="alert alert-danger">Completa este campo</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="codigo_postal">Codigo postal</label>
                                            <select name="codigo_postal" id="pais" class="form-control">
                                                @foreach ($paises as $pais)
                                                    <option value="{{ $pais->phone_code }}">{{ $pais->phone_code }}</option>
                                                @endforeach
                                            </select>
                                            @error('codigo_postal')
                                            <div class="alert alert-danger">Completa este campo</div>
                                            @enderror
                                        </div>
                                    </div>

                                </div>
                            {{--Fin fila--}}
                            {{--Inicio fila--}}
                             <div class="row">

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="pais">Pais</label>
                                            <select name="pais" id="select_pais" class="form-control">
                                                @foreach ($paises as $pais)
                                                    <option value="{{ $pais->id }}"{{$empresa->pais == $pais->id ? 'selected' : ''}}>{{ $pais->name }}</option>
                                                @endforeach
                                            </select>
                                            @error('pais')
                                            <div class="alert alert-danger">Completa este campo</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="departamento">Departamento</label>
                                            <select name="departamento" id="select_departamento" class="form-control">
                                                @foreach ($departamentos as $departamento)
                                                    <option value="{{ $departamento->id }}"{{$empresa->departamento == $departamento->id ? 'selected' : ''}}>{{ $departamento->name }}</option>
                                                @endforeach
                                            </select>
                                            <div id="respuesta_pais">

                                            </div>
                                            @error('departamento')
                                            <div class="alert alert-danger">Completa este campo</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="ciudad">Ciudad</label>
                                            <select name="ciudad" id="select_ciudad" class="form-control">
                                                @foreach ($ciudades as $ciudad)
                                                    <option value="{{ $ciudad->id }}"{{$empresa->ciudad == $ciudad->id ? 'selected' : ''}}>{{ $ciudad->name }}</option>
                                                @endforeach
                                            </select>
                                            <div id="respuesta_estado">

                                            </div>
                                            @error('ciudad')
                                            <div class="alert alert-danger">Completa este campo</div>
                                            @enderror
                                        </div>
                                    </div>


                                </div>
                            {{--Fin fila--}}
                            {{--Inicio fila--}}
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="direccion">Direccion</label>
                                        <input value="{{$empresa->direccion}}"  id="pac-input" class="form-control" name="direccion" type="text" placeholder="Buscar..." required>
                                        @error('direccion')
                                        <div class="alert alert-danger">Completa este campo</div>
                                        @enderror
                                        <br>
                                        <div id="map" style="width: 100%;height: 400px"></div>
                                    </div>
                                </div>
                            </div>{{--Fin fila--}}
                            <hr>
                            <div class="row">
                                <div class="col-md-12 d-flex justify-content-end">
                                    <button type="submit" class="btn btn-success">Actualizar datos</button>
                                </div>
                            </div>{{--fin card body row--}}
                        </div> {{--fin del col-md-8--}}
                    </div> {{--fin card body row--}}

                </form>{{--fin form--}}
            </div> {{--fin card-body--}}

            {{-- Card Footer --}}
            @hasSection('auth_footer')
                <div class="card-footer {{ config('adminlte.classes_auth_footer', '') }}">
                    @yield('auth_footer')
                </div>
            @endif

        </div> {{--fin card--}}
    </div> {{--fin col-md-12--}}
</div> {{--fin row container--}}
@stop

@section('css')

    {{-- Add here extra stylesheets --}}
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')
<script src="https://maps.googleapis.com/maps/api/js?key={{env('MAP_KEY')}}&libraries=places&callback=initAutocomplete"
async defer></script>
<script>
    // This example adds a search box to a map, using the Google Place Autocomplete
    // feature. People can enter geographical searches. The search box will return a
    // pick list containing a mix of places and predicted search terms.

    // This example requires the Places library. Include the libraries=places
    // parameter when you first load the API. For example:
    // <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places">

    function initAutocomplete() {
        var map = new google.maps.Map(document.getElementById('map'), {
            // Coordenadas de Monterrey, N.L., México
            center: {lat: 25.685088, lng:-100.327482}, //{lat: -33.8688, lng: 151.2195},
            zoom: 13,
            mapTypeId: 'roadmap'
        });

        // Create the search box and link it to the UI element.
        var input = document.getElementById('pac-input');
        var searchBox = new google.maps.places.SearchBox(input);
        // map.controls[google.maps.ControlPosition.TOP_LEFT].push(input); // determina la posicion

        // Bias the SearchBox results towards current map's viewport.
        map.addListener('bounds_changed', function() {
            searchBox.setBounds(map.getBounds());
        });

        var markers = [];
        // Listen for the event fired when the user selects a prediction and retrieve
        // more details for that place.
        searchBox.addListener('places_changed', function() {
            var places = searchBox.getPlaces();

            if (places.length == 0) {
                return;
            }

            // Clear out the old markers.
            markers.forEach(function(marker) {
                marker.setMap(null);
            });
            markers = [];

            // For each place, get the icon, name and location.
            var bounds = new google.maps.LatLngBounds();
            /*
             * Para fines de minimizar las adecuaciones debido a que es este una demostración de adaptación mínima de código, se reemplaza forEach por some.
             */
            // places.forEach(function(place) {
            places.some(function(place) {
                if (!place.geometry) {
                    console.log("Returned place contains no geometry");
                    return;
                }
                var icon = {
                    url: place.icon,
                    size: new google.maps.Size(71, 71),
                    origin: new google.maps.Point(0, 0),
                    anchor: new google.maps.Point(17, 34),
                    scaledSize: new google.maps.Size(25, 25)
                };

                // Create a marker for each place.
                markers.push(new google.maps.Marker({
                    map: map,
                    icon: icon,
                    title: place.name,
                    position: place.geometry.location
                }));

                if (place.geometry.viewport) {
                    // Only geocodes have viewport.
                    bounds.union(place.geometry.viewport);
                } else {
                    bounds.extend(place.geometry.location);
                }
                // some interrumpe su ejecución en cuanto devuelve un valor verdadero (true)
                return true;
            });
            map.fitBounds(bounds);
        });
    }
</script>
@stop