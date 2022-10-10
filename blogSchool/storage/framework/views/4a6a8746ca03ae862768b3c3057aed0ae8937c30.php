<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card card-primary">
                <div class="card card-header"><?php echo e(__('Dashboard')); ?></div>
                <div class="card-body">
                    <?php if(session('status')): ?>
                    <div class="alert alert-success" role="alert">
                        <?php echo e(session('status')); ?>

                    </div>
                    <?php endif; ?>
                    <div class="row justify-content-center">
                        <div class="col-md-10">
                            <div class="card card-primary">
                                <div class="card card-header"><?php echo e(__('Blogs')); ?></div>
                                <?php echo $__env->make('partials._read', [ 'posts' => $posts], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <?php echo $__env->make('partials._create', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\Xampp\htdocs\Project\blogSchool\resources\views/dashboard.blade.php ENDPATH**/ ?>