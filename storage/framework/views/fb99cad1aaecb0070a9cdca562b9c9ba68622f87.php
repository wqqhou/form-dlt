<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="jumbotron">

            <div class="progress progress-striped active" style="height: 25px" >
                <div class="progress-bar " role="progressbar"
                    aria-valuemin="0" aria-valuemax="100"
                     style="width: <?php echo e(round(($question_id-1)/$total*100).'%'); ?>;">
                    <span class="sr-only"></span>
                </div>
            </div>

            <h1>第<?php echo e($question_id); ?>題</h1>
            <p><?php echo e($qtypes[$qtype_id]); ?>:<?php echo html_entity_decode($parsedown->text($title)); ?></p>

            <?php echo Form::open(['url' => "/test/$test_id/next/$question_id"]); ?>


                <?php echo $__env->make("test.show.$qtype_id", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                <button type="submit" class="btn btn-sm btn-primary" name="submit" >
                    <?php if($question_id!=$total): ?>
                        NEXT
                        <?php else: ?>
                        SUBMIT
                        <?php endif; ?>
                </button>
            <?php echo Form::close(); ?>



        </div>
    </div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>