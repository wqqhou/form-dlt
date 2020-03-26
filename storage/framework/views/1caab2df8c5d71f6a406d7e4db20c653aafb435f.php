<div class="form-group <?php echo !$errors->has($errorKey) ?: 'has-error'; ?>">

    <label for="<?php echo e($id); ?>" class="col-sm-2 control-label"><?php echo e($label); ?></label>

    <div class="col-sm-8">

        <?php echo $__env->make('admin::form.error', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

        <textarea class="form-control <?php echo e($class); ?>" name="<?php echo e($name); ?>" placeholder="<?php echo e($placeholder); ?>" <?php echo $attributes; ?> ><?php echo e(old($column, $value)); ?></textarea>

        <?php echo $__env->make('admin::form.help-block', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    </div>
</div>