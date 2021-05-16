

<?php $__env->startSection('title', __('outlet.create')); ?>

<?php $__env->startSection('content'); ?>
<div class="row justify-content-center">
    <div class="col-md-6">
        <div class="card">
            <div class="card-header"><?php echo e(__('outlet.create')); ?></div>
            <form method="POST" action="<?php echo e(route('outlets.store')); ?>" accept-charset="UTF-8" enctype="multipart/form-data">
                <?php echo e(csrf_field()); ?>

                <div class="card-body">
                <div class="form-group">
                        <label for="gambar"><?php echo e(__('outlet.gambar')); ?></label>
                        <input id="gambar" type="file" class="form-control-file" name="gambar" value="<?php echo e(old('gambar')); ?>" required>
                        <?php echo $errors->first('gambar', '<span class="invalid-feedback" role="alert">:message</span>'); ?>

                    </div>
                    <div class="form-group">
                        <label for="name" class="control-label"><?php echo e(__('outlet.name')); ?></label>
                        <input id="name" type="text" class="form-control<?php echo e($errors->has('name') ? ' is-invalid' : ''); ?>" name="name" value="<?php echo e(old('name')); ?>" required>
                        <?php echo $errors->first('name', '<span class="invalid-feedback" role="alert">:message</span>'); ?>

                    </div>
                    <div class="form-group">
                        <label for="address" class="control-label"><?php echo e(__('outlet.address')); ?></label>
                        <textarea id="address" class="form-control<?php echo e($errors->has('address') ? ' is-invalid' : ''); ?>" name="address" rows="4"><?php echo e(old('address')); ?></textarea>
                        <?php echo $errors->first('address', '<span class="invalid-feedback" role="alert">:message</span>'); ?>

                    </div>
                    <div class="form-group">
                        <label for="tipe" class="control-label"><?php echo e(__('outlet.tipe')); ?></label>
                        <input id="tipe" type="text" class="form-control<?php echo e($errors->has('tipe') ? ' is-invalid' : ''); ?>" name="tipe" value="<?php echo e(old('tipe')); ?>" required>
                        <?php echo $errors->first('tipe', '<span class="invalid-feedback" role="alert">:message</span>'); ?>

                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="latitude" class="control-label"><?php echo e(__('outlet.latitude')); ?></label>
                                <input id="latitude" type="text" class="form-control<?php echo e($errors->has('latitude') ? ' is-invalid' : ''); ?>" name="latitude" value="<?php echo e(old('latitude', request('latitude'))); ?>" required>
                                <?php echo $errors->first('latitude', '<span class="invalid-feedback" role="alert">:message</span>'); ?>

                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="longitude" class="control-label"><?php echo e(__('outlet.longitude')); ?></label>
                                <input id="longitude" type="text" class="form-control<?php echo e($errors->has('longitude') ? ' is-invalid' : ''); ?>" name="longitude" value="<?php echo e(old('longitude', request('longitude'))); ?>" required>
                                <?php echo $errors->first('longitude', '<span class="invalid-feedback" role="alert">:message</span>'); ?>

                            </div>
                        </div>
                    </div>
                    <div id="mapid"></div>
                </div>
                <div class="card-footer">
                    <input type="submit" value="<?php echo e(__('outlet.create')); ?>" class="btn btn-success">
                    <a href="<?php echo e(route('outlets.index')); ?>" class="btn btn-link"><?php echo e(__('app.cancel')); ?></a>
                </div>
            </form>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('styles'); ?>
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.1/dist/leaflet.css"
    integrity="sha512-Rksm5RenBEKSKFjgI3a41vrjkw4EVPlJ3+OiI65vTjIdo9brlAacEuKOiQ5OFh7cOI1bkDwLqdLw3Zg0cRJAAQ=="
    crossorigin=""/>

<style>
    #mapid { height: 300px; }
</style>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
<script src="https://unpkg.com/leaflet@1.3.1/dist/leaflet.js"
    integrity="sha512-/Nsx9X4HebavoBvEBuyp3I7od5tA0UzAxs+j83KgC8PU0kgB4XiK4Lfe4y4cgBtaRJQEIFCW+oC506aPT2L1zw=="
    crossorigin=""></script>
<script>
    var mapCenter = [<?php echo e(request('latitude', config('leaflet.map_center_latitude'))); ?>, <?php echo e(request('longitude', config('leaflet.map_center_longitude'))); ?>];
    var map = L.map('mapid').setView(mapCenter, <?php echo e(config('leaflet.zoom_level')); ?>);

    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
    }).addTo(map);

    var marker = L.marker(mapCenter).addTo(map);
    function updateMarker(lat, lng) {
        marker
        .setLatLng([lat, lng])
        .bindPopup("Your location :  " + marker.getLatLng().toString())
        .openPopup();
        return false;
    };

    map.on('click', function(e) {
        let latitude = e.latlng.lat.toString().substring(0, 15);
        let longitude = e.latlng.lng.toString().substring(0, 15);
        $('#latitude').val(latitude);
        $('#longitude').val(longitude);
        updateMarker(latitude, longitude);
    });

    var updateMarkerByInputs = function() {
        return updateMarker( $('#latitude').val() , $('#longitude').val());
    }
    $('#latitude').on('input', updateMarkerByInputs);
    $('#longitude').on('input', updateMarkerByInputs);
</script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\praktikum_gis _coba\resources\views/outlets/create.blade.php ENDPATH**/ ?>