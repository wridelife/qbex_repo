<?php $__env->startSection('title'); ?>
    Admin - <?php echo e(__('crud.admin.geoFencings.create')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('heading'); ?>
    <?php echo e(__('crud.admin.geoFencings.create')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
    
    <div class="w-full rounded-lg shadow-xs bg-white dark:text-gray-400 dark:bg-gray-800 mb-5">
        <div class="w-full px-5 py-5">
            <form class="form-horizontal" action="<?php echo e(route('admin.geoFencing.store')); ?>" method="POST" enctype="multipart/form-data" role="form">
                <?php echo e(csrf_field()); ?>

                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.inputs.text','data' => ['space' => 'w-full','label' => __('crud.inputs.city_name'),'name' => 'city_name','value' => ''.e(old('city_name')).'']]); ?>
<?php $component->withName('inputs.text'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['space' => 'w-full','label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('crud.inputs.city_name')),'name' => 'city_name','value' => ''.e(old('city_name')).'']); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>

                
                <div class="w-full px-4 mb-4 md:mb-0">
                    <div class="mb-6">
                        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.inputs.partials.label','data' => ['name' => 'picture','label' => __('crud.admin.geoFencings.draw')]]); ?>
<?php $component->withName('inputs.partials.label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['name' => 'picture','label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('crud.admin.geoFencings.draw'))]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                        <div id="map"></div>
                        <input type="hidden" name="ranges" class="ranges" value="">
                    </div>
                </div>
            
                <button id="clear" type="submit" class="right-0 inline-block py-1 px-4 leading-loose bg-red-500 hover:bg-red-600 text-white font-semibold rounded-lg transition duration-200 text-sm" type="submit">
                    Click here to clear map
                </button>
                <button type="submit" class="right-0 inline-block py-1 px-4 leading-loose bg-green-500 hover:bg-green-600 text-white font-semibold rounded-lg transition duration-200 text-sm" type="submit">
                    <?php echo e(__('crud.general.add')); ?> <?php echo e(__('crud.admin.geoFencings.name')); ?>

                </button>
            </form>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('endScripts'); ?>

    <script src="https://maps.googleapis.com/maps/api/js?key=<?php echo e(config('constants.map_key')); ?>&libraries=places,drawing&callback=initMap" async defer></script>
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

        function initMap() {
            var userLocation = new google.maps.LatLng(28.0236, 77.9062);
            const searchBox = new google.maps.places.SearchBox(city_name);

            map = new google.maps.Map(document.getElementById('map'), {
                center: userLocation,
                zoom: 4,
            });

            map.addListener("bounds_changed", () => {
                searchBox.setBounds(map.getBounds());
            });

            let markers = [];
            
            searchBox.addListener("places_changed", () => {
                const places = searchBox.getPlaces();

                if (places.length == 0) {
                    return;
                }
            
                // Clear out the old markers.
                markers.forEach((marker) => {
                    marker.setMap(null);
                });
                markers = [];
                
                // For each place, get the icon, name and location.
                const bounds = new google.maps.LatLngBounds();

                places.forEach((place) => {
                    if (!place.geometry || !place.geometry.location) {
                        firstCoordinates = null;
                        console.log("Returned place contains no geometry");
                        return;
                    }

                    firstCoordinates = place.geometry.location.lat() + ',' + place.geometry.location.lng();
                
                    const icon = {
                        url: place.icon,
                        size: new google.maps.Size(71, 71),
                        origin: new google.maps.Point(0, 0),
                        anchor: new google.maps.Point(17, 34),
                        scaledSize: new google.maps.Size(25, 25),
                    };
                
                    // Create a marker for each place.
                    markers.push(
                        new google.maps.Marker({
                            map,
                            icon,
                            title: place.name,
                            position: place.geometry.location,
                        })
                    );

                    if (place.geometry.viewport) {
                        // Only geocodes have viewport.
                        bounds.union(place.geometry.viewport);
                    } else {
                        bounds.extend(place.geometry.location);
                    }
                });

                map.fitBounds(bounds);
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
                            'lat': markerLat,
                            'lng': markerLng
                        };
                        bounds.push(json);                  
                    });
                    $('input.ranges').val(JSON.stringify(bounds));

                    overlayClickListener(e.overlay);
                    drawingManager.setOptions({drawingMode:null,drawingControl:false});
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
<?php $__env->stopPush(); ?>
<?php echo $__env->make('admin.layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/cab/resources/views/admin/geoFencing/create.blade.php ENDPATH**/ ?>