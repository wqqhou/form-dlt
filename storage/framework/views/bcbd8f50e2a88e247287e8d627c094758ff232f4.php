<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="jumbotron">
        <h1>學習資源</h1>
        

    <?php if(config('app.textbook_resource') == 'DB'): ?>

        <?php $__currentLoopData = $textbook_types; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $textbook_type): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <p><?php echo e($textbook_type); ?></p>
            <?php $__currentLoopData = $textbooks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $textbook): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if($textbook['type'] == $textbook_type): ?>
                <ul>
                    <li><a href="<?php echo e(config('app.url').'/textbooklink/'.$textbook['hashlink']->hashlink); ?>" target='_blank'><?php echo e($textbook['title']); ?></a></li>
                </ul>
                <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php else: ?>
        <iframe src="<?php echo e(config('app.textbook_resource')); ?>" style="height:60vh;width:100%;"></iframe>
    <?php endif; ?>
    </div>
</div>



<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>