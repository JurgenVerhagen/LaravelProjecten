

<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col-md-4">
            <div class="card card-primary">
                <div class="card card-header"><?php echo e(__( $post->title )); ?></div>
                <div class="card-body">
                    <a href="<?php echo e(route('single', ['slug'=>$post->slug])); ?>">
                        <h5><?php echo e($post->slug); ?></h5>
                    </a></br>
                    <i>Geplaatst door: <?php echo e($post->name); ?> op <?php echo e($post->created_at); ?></i>
                </div>
            </div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</div>
<div class="row justify-content-center">
    <?php echo e($posts->links()); ?>

</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\Xampp\htdocs\Project\blogSchool\resources\views/blog.blade.php ENDPATH**/ ?>