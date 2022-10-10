<div class="card card-primary">
    <div class="card card-header"><?php echo e(__('Add Blog')); ?></div>
    <div class="card-body">
        <form method="POST" action="<?php echo e(route('save')); ?>">
            <?php echo csrf_field(); ?>
            <table class="table">
                <tr>
                    <td><?php echo e(__('Title')); ?></td>
                    <td><input type="text" class="input-field" name="title" placeholder="<?php echo e(__('Title')); ?>" /></td>
                </tr>
                <tr>
                    <td><?php echo e(__('Slug')); ?></td>
                    <td><input type="text" class="input-field" name="slug" placeholder="<?php echo e(__('Slug')); ?>" /></td>
                </tr>
                <tr>
                    <td><?php echo e(__('Article')); ?></td>
                    <td><textarea type="text" name="artikel" class="input-field" cols="50" rows="10" placeholder="<?php echo e(__('Article')); ?>"></textarea></td>
                </tr>
                <tr>
                    <td colspan='2'>
                        <input type="submit" class="btn btn-colour-primary" value="<?php echo e(__('Add Blog')); ?>" />
                    </td>
                </tr>
            </table>
        </form>
    </div>
</div><?php /**PATH F:\Xampp\htdocs\Project\blogSchool\resources\views/partials/_create.blade.php ENDPATH**/ ?>