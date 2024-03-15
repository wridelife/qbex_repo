@extends('admin.layout.app')

@section('title')
    Admin - {{ __('crud.admin.geoFencings.create') }}
@endsection

@section('heading')
    {{ __('crud.admin.geoFencings.create') }}
@endsection

@section('content')
    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
    
    <div class="w-full rounded-lg shadow-xs bg-white dark:text-gray-400 dark:bg-gray-800 mb-5">
        <div class="w-full px-5 py-5">
            <x-form action="{{route('admin.geoFencing.update', $geoFencing)}}" method="put" has-file>
                {{ csrf_field() }}
                <x-inputs.text space="mb:w-full" :label="__('crud.inputs.city_name')" name="city_name" space="w-full" value="{{ old('city_name', $geoFencing->city_name) }}"></x-inputs.text>

                <div class="w-full px-4 mb-4 md:mb-0">
                    <div class="mb-6">
                        <x-inputs.partials.label name="picture" :label="__('crud.admin.geoFencings.draw')"></x-inputs.partials.label>
                        <div id="map"></div>
                        <input type="hidden" name="ranges" class="ranges" value="{{ old('ranges', $geoFencing->ranges) }}">
                    </div>
                </div>
            
                <button id="clear" type="submit" class="right-0 inline-block py-1 px-4 leading-loose bg-red-500 hover:bg-red-600 text-white font-semibold rounded-lg transition duration-200 text-sm" type="submit">
                    Click here to clear map
                </button>
                <button type="submit" class="right-0 inline-block py-1 px-4 leading-loose bg-green-500 hover:bg-green-600 text-white font-semibold rounded-lg transition duration-200 text-sm" type="submit">
                    {{ __('crud.general.add') }} {{ __('crud.admin.geoFencings.name') }}
                </button>
            </x-form>
        </div>
    </div>
@endsection

@push('endScripts')

    <script src="https://maps.googleapis.com/maps/api/js?key={{ config('constants.map_key') }}&libraries=places,drawing&callback=initMap" async defer></script>
    <script>
        var map;
        var polygon;
        var input = document.getElementById('pac-input');
        var s_latitude = document.getElementById('latitude');
        var s_longitude = document.getElementById('longitude');
        var s_address = document.getElementById('address');
        var arr = [];
        var selectedShape;

        var old_latlng = new Array();
        var markers = new Array();

        var OldPath = JSON.parse($('input.ranges').val());
        console.log(OldPath[0]['lat']);
        function initMap() {

            var userLocation = new google.maps.LatLng(OldPath[0]['lat'], OldPath[0]['lng']);

            map = new google.maps.Map(document.getElementById('map'), {
                center: userLocation,
                zoom: 10,
            });

            var drawingManager = new google.maps.drawing.DrawingManager({
                drawingMode: google.maps.drawing.OverlayType.POLYGON,
                drawingControl: true,
                drawingControlOptions: {
                    position: google.maps.ControlPosition.TOP_CENTER,
                    drawingModes: [google.maps.drawing.OverlayType.POLYGON]
                },
                polygonOptions: {
                    editable: true, 
                    draggable: true,
                    fillColor: '#ff0000', 
                    strokeColor: '#ff0000', 
                    strokeWeight: 1
                }
            });
            drawingManager.setMap(map);

            google.maps.event.addListener(drawingManager, 'overlaycomplete', function(e){
                var bounds = [];
                var layer_bounds = [];
                var newShape = e.overlay;
                if (e.type == google.maps.drawing.OverlayType.POLYGON) {
                    var locations = e.overlay.getPath().getArray();
                    arr.push(e);
                    $.each(locations, function(index, value){
                        var markerLat = (value.lat()).toFixed(6);
                        var markerLng = (value.lng()).toFixed(6);
                        layer_bounds.push(new google.maps.LatLng((value.lat()).toFixed(6), (value.lng()).toFixed(6)));
                        json = {
                            'lat': OldPath[0]['lat'],
                            'lng': OldPath[0]['lng']
                        };
                        bounds.push(json);                  
                    });
                    $('input.ranges').val(JSON.stringify(bounds));

                    overlayClickListener(e.overlay);
                    // drawingManager.setOptions({drawingMode:null,drawingControl:false});
                    setSelection(newShape);
                }
            });

            $(document).on('click', '#clear', function(ev) {
                drawingManager.setMap(map);
                polygon.setMap(null);
                deleteSelectedShape();
                $('input.ranges').val('');
                ev.preventDefault();
                return false;
            });

            var old_polygon = [];

            $(OldPath).each(function(index, value){
                old_polygon.push(new google.maps.LatLng(value.lat, value.lng));
                old_latlng.push(new google.maps.LatLng(value.lat, value.lng));
            });
                
            polygon = new google.maps.Polygon({
                path: old_polygon,
                strokeColor: "#ff0000",
                strokeOpacity: 0.8,
                // strokeWeight: 1,
                fillColor: "#ff0000",
                fillOpacity: 0.3,
                editable: true,
                draggable: true,
            });
            //var dta = polygon.getCenter();
            //map.setCenter(dta);

            polygon.setMap(map);
        }

        function createMarker(markerOptions) {
            var marker = new google.maps.Marker(markerOptions);
            markers.push(marker);
            old_latlng.push(marker.getPosition());
            return marker;
        }

        function overlayClickListener(overlay) {
            google.maps.event.addListener(overlay, "mouseup", function(event){
                var arr_loc = [];
                var locations = overlay.getPath().getArray();
                $.each(locations, function(index, value){
                    var locLat = (value.lat()).toFixed(6);
                    var locLng = (value.lng()).toFixed(6);
                    ltlg = {
                        'lat': locLat,
                        'lng': locLng
                    };
                    arr_loc.push(ltlg);                 
                });
                $('input.ranges').val(JSON.stringify(arr_loc));
            });
        }

        function setSelection (shape) {
            if (shape.type == 'polygon') {
                clearSelection();
                shape.setEditable(true);
            }
            selectedShape = shape;
        }

        function clearSelection () {
            if (selectedShape) {
                console.log(selectedShape.type);
                if (selectedShape.type == 'polygon') {
                    selectedShape.setEditable(false);
                }
                
                selectedShape = null;
            }
        }

        function deleteSelectedShape () {
            if (selectedShape) {
                $('input.ranges').val('');
                selectedShape.setMap(null);
            }
        }
    </script>

    <style type="text/css">
        #map {
            height: 100%;
            min-height: 400px;
        }

        .controls {
            border: 1px solid transparent;
            border-radius: 2px 0 0 2px;
            box-sizing: border-box;
            -moz-box-sizing: border-box;
            height: 32px;
            outline: none;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.3);
            margin-bottom: 10px;
        }

        #pac-input {
            background-color: #fff;
            font-family: Roboto;
            font-size: 15px;
            font-weight: 300;
            padding: 0 11px 0 13px;
            text-overflow: ellipsis;
            width: 100%;
        }

        #bar {
            width: 240px;
            background-color: rgba(255, 255, 255, 0.75);
            margin: 8px;
            padding: 4px;
            border-radius: 4px;
        }
    </style>
@endpush