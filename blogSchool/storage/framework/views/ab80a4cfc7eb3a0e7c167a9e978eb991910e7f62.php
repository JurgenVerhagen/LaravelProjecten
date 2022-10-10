<div class="card-body">
    <table class="table">
        <tr>
            <th><?php echo e(__('User')); ?></th>
            <th><?php echo e(__('Title')); ?></th>
            <th><?php echo e(__('Slug')); ?></th>
            <th><?php echo e(__('Created_at')); ?></th>
            <th><?php echo e(__('Updated_at')); ?></th>
            <th><?php echo e(__('Edit')); ?></th>
            <th><?php echo e(__('Delete')); ?></th>
        </tr>
        <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($post->name); ?></td>
            <td><?php echo e($post->title); ?></td>
            <td><?php echo e($post->slug); ?></td>
            <td><?php echo e($post->created_at); ?></td>
            <td><?php echo e($post->updated_at); ?></td>
            <td>
                <a href="<?php echo e(route('edit', ['post'=>$post->id])); ?>" class="btn btn-colour-primary"> <?php echo e(__('Edit')); ?> </a>
            </td>
            <form method="POST" action="<?php echo e(route('destroy', ['post'=>$post->id])); ?>" id="delete-post-form">
                <?php echo csrf_field(); ?>
                <?php echo method_field('delete'); ?>
                <td>
                    <button class="btn btn-colour-primary"> <?php echo e(__('Delete')); ?> </button>
                </td>
            </form>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>
</div><?php /**PATH F:\Xampp\htdocs\Project\blogSchool\resources\views/partials/_read.blade.php ENDPATH**/ ?>