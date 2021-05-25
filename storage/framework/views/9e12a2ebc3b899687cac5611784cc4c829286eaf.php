

<?php $__env->startSection('title', __('outlet.edit')); ?>

<?php $__env->startSection('content'); ?>
<div class="row justify-content-center">
    <div class="col-md-6">
        <?php if(request('action') == 'delete' && $outlet): ?>
        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('delete', $outlet)): ?>
            <div class="card">
                <div class="card-header"><?php echo e(__('outlet.delete')); ?></div>
                <div class="card-body">
                    <label class="control-label text-primary"><?php echo e(__('outlet.name')); ?></label>
                    <p><?php echo e($outlet->name); ?></p>
                    <label class="control-label text-primary"><?php echo e(__('outlet.address')); ?></label>
                    <p><?php echo e($outlet->address); ?></p>
                    <label class="control-label text-primary"><?php echo e(__('outlet.tipe')); ?></label>
                    <p><?php echo e($outlet->tipe); ?></p>
                    <label class="control-label text-primary"><?php echo e(__('outlet.latitude')); ?></label>
                    <p><?php echo e($outlet->latitude); ?></p>
                    <label class="control-label text-primary"><?php echo e(__('outlet.longitude')); ?></label>
                    <p><?php echo e($outlet->longitude); ?></p>
                    <?php echo $errors->first('outlet_id', '<span class="invalid-feedback" role="alert">:message</span>'); ?>

                </div>
                <hr style="margin:0">
                <div class="card-body text-danger"><?php echo e(__('outlet.delete_confirm')); ?></div>
                <div class="card-footer">
                    <form method="POST" action="<?php echo e(route('outlets.destroy', $outlet)); ?>" accept-charset="UTF-8" onsubmit="return confirm(&quot;<?php echo e(__('app.delete_confirm')); ?>&quot;)" class="del-form float-right" style="display: inline;">
                        <?php echo e(csrf_field()); ?> <?php echo e(method_field('delete')); ?>

                        <input name="outlet_id" type="hidden" value="<?php echo e($outlet->id); ?>">
                        <button type="submit" class="btn btn-danger"><?php echo e(__('app.delete_confirm_button')); ?></button>
                    </form>
                    <a href="<?php echo e(route('outlets.edit', $outlet)); ?>" class="btn btn-link"><?php echo e(__('app.cancel')); ?></a>
                </div>
            </div>
        <?php endif; ?>
        <?php else: ?>
        <div class="card">
            <div class="card-header"><?php echo e(__('outlet.edit')); ?></div>
            <!-- <form method="PUT" action="<?php echo e(route('outlets.update', $outlet)); ?>" accept-charset="UTF-8" enctype="multipart/form-data"> -->
            <form method="POST" action="<?php echo e(route('outlets.update', $outlet)); ?>" accept-charset="UTF-8" enctype="multipart/form-data">
            <?php echo e(csrf_field()); ?> <?php echo e(method_field('patch')); ?>

                <div class="card-body">
                    <div class="form-group">
                        <label for="gambar"><?php echo e(__('outlet.gambar')); ?></label>
                        <input id="gambar" type="file" class="form-control<?php echo e($errors->has('gambar') ? ' is-invalid' : ''); ?>" name="gambar" value="<?php echo e(old('gambar')); ?>">
                        <?php echo $errors->first('gambar', '<span class="invalid-feedback" role="alert">:message</span>'); ?>

                    </div>
                    <div class="form-group">
                        <label for="name" class="control-label"><?php echo e(__('outlet.name')); ?></label>
                        <input id="name" type="text" class="form-control<?php echo e($errors->has('name') ? ' is-invalid' : ''); ?>" name="name" value="<?php echo e(old('name', $outlet->name)); ?>" required>
                        <?php echo $errors->first('name', '<span class="invalid-feedback" role="alert">:message</span>'); ?>

                    </div>
                    <div class="form-group">
                        <label for="address" class="control-label"><?php echo e(__('outlet.address')); ?></label>
                        <textarea id="address" class="form-control<?php echo e($errors->has('address') ? ' is-invalid' : ''); ?>" name="address" rows="4"><?php echo e(old('address', $outlet->address)); ?></textarea>
                        <?php echo $errors->first('address', '<span class="invalid-feedback" role="alert">:message</span>'); ?>

                    </div>
                    <div class="form-group">
                        <label for="tipe" class="control-label"><?php echo e(__('outlet.tipe')); ?></label>
                        <input id="tipe" type="text" class="form-control<?php echo e($errors->has('tipe') ? ' is-invalid' : ''); ?>" name="tipe" value="<?php echo e(old('tipe', $outlet->tipe)); ?>" required>
                        <?php echo $errors->first('tipe', '<span class="invalid-feedback" role="alert">:message</span>'); ?>

                    </div>
                    
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="latitude" class="control-label"><?php echo e(__('outlet.latitude')); ?></label>
                                <input id="latitude" type="text" class="form-control<?php echo e($errors->has('latitude') ? ' is-invalid' : ''); ?>" name="latitude" value="<?php echo e(old('latitude', $outlet->latitude)); ?>" required>
                                <?php echo $errors->first('latitude', '<span class="invalid-feedback" role="alert">:message</span>'); ?>

                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="longitude" class="control-label"><?php echo e(__('outlet.longitude')); ?></label>
                                <input id="longitude" type="text" class="form-control<?php echo e($errors->has('longitude') ? ' is-invalid' : ''); ?>" name="longitude" value="<?php echo e(old('longitude', $outlet->longitude)); ?>" required>
                                <?php echo $errors->first('longitude', '<span class="invalid-feedback" role="alert">:message</span>'); ?>

                            </div>
                        </div>
                    </div>
                    <div id="mapid"></div>
                </div>
                <div class="card-footer">
                    <input type="submit" value="<?php echo e(__('outlet.update')); ?>" class="btn btn-success">
                    <a href="<?php echo e(route('outlets.show', $outlet)); ?>" class="btn btn-link"><?php echo e(__('app.cancel')); ?></a>
                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('delete', $outlet)): ?>
                        <a href="<?php echo e(route('outlets.edit', [$outlet, 'action' => 'delete'])); ?>" id="del-outlet-<?php echo e($outlet->id); ?>" class="btn btn-danger float-right"><?php echo e(__('app.delete')); ?></a>
                    <?php endif; ?>
                </div>
            </form>
        </div>
    </div>
</div>
<?php endif; ?>
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
    var mapCenter = [<?php echo e($outlet->latitude); ?>, <?php echo e($outlet->longitude); ?>];
    var map = L.map('mapid').setView(mapCenter, <?php echo e(config('leaflet.detail_zoom_level')); ?>);

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

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\praktikum_gis _coba\resources\views/outlets/edit.blade.php ENDPATH**/ ?>