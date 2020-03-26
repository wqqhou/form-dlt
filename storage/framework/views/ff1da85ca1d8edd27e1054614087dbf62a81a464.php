<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="jumbotron">
            <h1>測驗</h1>
            <iframe width="560" height="315" src="https://www.youtube.com/embed/6q7GjSCKPW0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <p>準備好了嗎~開始答題吧！</p>
            <?php echo Form::open(['url' => '/test']); ?>

            <div class="row form-horizontal">
                <?php echo Form::label('tag_list','請選擇範圍：',['class'=>'col-lg-2 control-label ']); ?>

                <div class="col-lg-2" >
                    <?php if(!$tags): ?>
                    <label class='control-label'>沒有選項</label>
                    <?php else: ?>
                    <?php echo Form::select('tag_list', $tags, 0, ['id'=>'totalnumber','class' => 'form-control']); ?>

                    <?php endif; ?>
                </div>

                <?php echo Form::label('totalnumber','請選擇題量：',['class'=>'col-lg-2 control-label ']); ?>

                <div class="col-lg-2" >
                    <?php echo Form::select('totalnumber', [5=>5,10=>10,15=>15,20=>20], 0, ['id'=>'totalnumber','class' => 'form-control']); ?>

                </div>

                <?php echo Form::label('testtype','開始測驗：',['class'=>'col-lg-2 control-label ']); ?>

                <div class="col-lg-2" >
                        <?php echo Form::submit('START', ['class' => 'btn btn-primary form-control']); ?>

                </div>
            </div>
            <br/>
            <?php echo Form::close(); ?>

        </div>
    </div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>