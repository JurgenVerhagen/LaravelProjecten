

<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card card-primary">
                <div class="card card-header"><?php echo e(__( $posts->title )); ?></div>
                <div class="card-body">
                    <h5><?php echo e($posts->slug); ?></h5></br>
                    <p><?php echo e($posts->artikel); ?></p>
                    <i>Geplaatst door: <?php echo e($posts->name); ?> op <?php echo e($posts->created_at); ?></i>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\Xampp\htdocs\Project\blogSchool\resources\views/single.blade.php ENDPATH**/ ?>