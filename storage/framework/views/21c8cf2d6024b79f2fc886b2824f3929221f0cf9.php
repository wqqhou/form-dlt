<input type="hidden" name="qtype_id" value="1">
<div class="form-group">
    <?php $__currentLoopData = explode("\r\n",$options); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $option): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    	<?php if(strlen($option)): ?>
	        <label class="radio ">
	            <input type="radio" data-toggle="radio" name="answer" required="required" value=<?php echo e(substr($option,0,1)); ?> data-radiocheck-toggle="radio" >
	            <p class="lead"><?php echo $option; ?></p>
	        </label>
        <?php endif; ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

</div>