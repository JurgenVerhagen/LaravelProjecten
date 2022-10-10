

<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col col-md-8">
            <div class="card card-primary">
                <div class="card card-header"><?php echo e(__('Edit')); ?></div>
                <div class="card-body">
                    <form method="POST" action="<?php echo e(route('update', ['post'=>$post->id])); ?>">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('PUT'); ?>
                        <table class="table">
                            <tr>
                                <td><?php echo e(__('Title')); ?></td>
                                <td><input type="text" class="input-field" name="title" value="<?php echo e($post->title); ?>" /></td>
                            </tr>
                            <tr>
                                <td><?php echo e(__('Slug')); ?></td>
                                <td><input type="text" class="input-field" name="slug" value="<?php echo e($post->slug); ?>" /></td>
                            </tr>
                            <tr>
                                <td><?php echo e(__('Article')); ?></td>
                                <td><textarea type="text" name="artikel" class="input-field" cols="50" rows="10" value="<?php echo e($post->artikel); ?>"></textarea></td>
                            </tr>
                            <tr>
                                <td colspan='2'>
                                    <input type="submit" class="btn btn-colour-primary" value="<?php echo e(__('Update Blog')); ?>" />
                                </td>
                            </tr>
                        </table>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\Xampp\htdocs\Project\blogSchool\resources\views/partials\_edit.blade.php ENDPATH**/ ?>