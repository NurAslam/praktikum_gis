

<?php $__env->startSection('title', __('outlet.detail')); ?>

<?php $__env->startSection('content'); ?>
<div class="row justify-content-center">
    <div class="col-md-6">
        <div class="card">
            <div class="card-header"><?php echo e(__('outlet.detail')); ?></div>
            <div class="card-body">
                <table class="table table-sm">
                    <tbody>
                        <tr><td><?php echo e(__('outlet.name')); ?></td><td><?php echo e($outlet->name); ?></td></tr>
                        <tr><td><?php echo e(__('outlet.address')); ?></td><td><?php echo e($outlet->address); ?></td></tr>
                        <tr><td><?php echo e(__('outlet.tipe')); ?></td><td><?php echo e($outlet->tipe); ?></td></tr>
                        <tr><td><?php echo e(__('outlet.gambar')); ?></td><td><img src="<?php echo e(Storage::url($outlet->gambar)); ?>" alt="" width="100px"></td></tr>
                        <tr><td><?php echo e(__('outlet.latitude')); ?></td><td><?php echo e($outlet->latitude); ?></td></tr>
                        <tr><td><?php echo e(__('outlet.longitude')); ?></td><td><?php echo e($outlet->longitude); ?></td></tr>
                    </tbody>
                </table>
            </div>
            <div class="card-footer">
                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('update', $outlet)): ?>
                    <a href="<?php echo e(route('outlets.edit', $outlet)); ?>" id="edit-outlet-<?php echo e($outlet->id); ?>" class="btn btn-warning"><?php echo e(__('outlet.edit')); ?></a>
                <?php endif; ?>
                <?php if(auth()->check()): ?>
                    <a href="<?php echo e(route('outlets.index')); ?>" class="btn btn-link"><?php echo e(__('outlet.back_to_index')); ?></a>
                <?php else: ?>
                    <a href="<?php echo e(route('outlet_map.index')); ?>" class="btn btn-link"><?php echo e(__('outlet.back_to_index')); ?></a>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="card">
            <div class="card-header"><?php echo e(trans('outlet.location')); ?></div>
            <?php if($outlet->coordinate): ?>
            <div class="card-body" id="mapid"></div>
            <?php else: ?>
            <div class="card-body"><?php echo e(__('outlet.no_coordinate')); ?></div>
            <?php endif; ?>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('styles'); ?>
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.1/dist/leaflet.css"
    integrity="sha512-Rksm5RenBEKSKFjgI3a41vrjkw4EVPlJ3+OiI65vTjIdo9brlAacEuKOiQ5OFh7cOI1bkDwLqdLw3Zg0cRJAAQ=="
    crossorigin=""/>

<style>
    #mapid { height: 400px; }
</style>
<?php $__env->stopSection(); ?>
<?php $__env->startPush('scripts'); ?>
<!-- Make sure you put this AFTER Leaflet's CSS -->
<script src="https://unpkg.com/leaflet@1.3.1/dist/leaflet.js"
    integrity="sha512-/Nsx9X4HebavoBvEBuyp3I7od5tA0UzAxs+j83KgC8PU0kgB4XiK4Lfe4y4cgBtaRJQEIFCW+oC506aPT2L1zw=="
    crossorigin=""></script>

<script>
    var map = L.map('mapid').setView([<?php echo e($outlet->latitude); ?>, <?php echo e($outlet->longitude); ?>], <?php echo e(config('leaflet.detail_zoom_level')); ?>);

    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
    }).addTo(map);

    L.marker([<?php echo e($outlet->latitude); ?>, <?php echo e($outlet->longitude); ?>]).addTo(map)
        .bindPopup('<?php echo $outlet->map_popup_content; ?>');
</script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\praktikum_gis _coba\resources\views/outlets/show.blade.php ENDPATH**/ ?>