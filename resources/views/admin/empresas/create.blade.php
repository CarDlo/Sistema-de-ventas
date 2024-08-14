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
                                    <div class="form-group">
                                        <label for="formFile" class="form-label">Logo de la empresa</label>
                                        <input class="form-control" type="file" id="formFile" onchange="archivos(event)">
                                        <div id="list" class="mx-auto w-100"></div>
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
                                                <input type="text" class="form-control" id="nombre" placeholder="Nombre de la empresa">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="nit">NIT</label>
                                                <input type="text" class="form-control" id="nit" placeholder="NIT">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="tipo">Tipo de empresa</label>
                                                <input type="text" class="form-control" id="tipo" placeholder="Tipo de empresa">
                                            </div>
                                        </div>

                                    </div> {{--Fin fila--}}

                                    {{--Inicio fila--}}
                                    <div class="row">

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
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="moneda">Moneda</label>
                                                <select name="moneda" id="moneda" class="form-control">
                                                    @foreach ($monedas as $moneda)
                                                        <option value="{{ $moneda->id }}">{{ $moneda->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                     {{--Fin fila--}}
                                     {{--Inicio fila--}}
                                     <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="nombre_impuesto">Nombre del Impuesto</label>
                                                <input type="text" class="form-control" id="nombre_impuesto" placeholder="Nombre del impuesto">
                                            </div>
                                        </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="cantidad_impuesto">Cantidad de impuesto</label>
                                                    <input type="number" class="form-control" id="cantidad_impuesto">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="codigo_postal">Codigo postal</label>
                                                    <select name="" id="pais" class="form-control">
                                                        @foreach ($paises as $pais)
                                                            <option value="{{ $pais->phone_code }}">{{ $pais->phone_code }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>

                                        </div>
                                    {{--Fin fila--}}
                                    {{--Inicio fila--}}
                                     <div class="row">

                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="pais">Pais</label>
                                                    <select name="" id="select_pais" class="form-control">
                                                        @foreach ($paises as $pais)
                                                            <option value="{{ $pais->id }}">{{ $pais->name }}</option>
                                                        @endforeach
                                                    </select>

                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="departamento">Departamento</label>
                                                    <div id="respuesta_pais">

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="ciudad">Ciudad</label>
                                                    <select name="" id="ciudad" class="form-control">
                                                        {{-- @foreach ($ciudades as $ciudad)
                                                            <option value="{{ $ciudad->id }}">{{ $ciudad->name }}</option>
                                                        @endforeach --}}
                                                    </select>
                                                </div>
                                            </div>


                                        </div>
                                    {{--Fin fila--}}
                                    {{--Inicio fila--}}
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="direccion">Direccion</label>
                                                <input id="pac-input" class="form-control" name="direccion" type="text" placeholder="Buscar..." required>
                                                <br>
                                                <div id="map" style="width: 100%;height: 400px"></div>
                                            </div>
                                        </div>{{--Fin fila--}}

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
        <script>
        $('#select_pais').on('change', function() {
             var id_pais =  $('#select_pais').val();   
             if (id_pais) {
                 $.ajax({
                     type: "GET",
                     url: "{{url('/crear-empresas')}}/"+id_pais,
                     success: function (data) {
                         $('#respuesta_pais').html(data);
                     }
                 })
             }else{
                 
             }                                        
         })
         </script>
@stop
