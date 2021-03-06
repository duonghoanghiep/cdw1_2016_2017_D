<?php $__env->startSection('title'); ?>
Admin area: <?php echo e(trans('sample::slide_admin.page_edit')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col-md-12">

        <div class="col-md-8">
            <div class="panel panel-info">
                <div class="panel-heading">
                    <h3 class="panel-title bariol-thin">
                        <?php echo !empty($slide->slide_id) ? '<i class="fa fa-pencil"></i>'.trans('sample::slide_admin.form_edit') : '<i class="fa fa-users"></i>'.trans('sample::slide_admin.form_add'); ?>

                    </h3>
                </div>

                
                <?php if($errors->has('slide_img') ): ?>
                    <div class="alert alert-danger"><?php echo $errors->first('slide_img'); ?></div>
                <?php endif; ?>
                

                <?php if($errors->has('name_unvalid_length') ): ?>
                    <div class="alert alert-danger"><?php echo $errors->first('name_unvalid_length'); ?></div>
                <?php endif; ?>

                
                <?php $message = Session::get('message'); ?>
                <?php if( isset($message) ): ?>
                <div class="alert alert-success"><?php echo e($message); ?></div>
                <?php endif; ?>

                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-12 col-xs-12">
                            <h4><?php echo trans('sample::slide_admin.form_heading'); ?></h4>
                            <?php echo Form::open(['route'=>['admin_slide.post', 'id' => @$slide->slide_id],  'files'=>true, 'method' => 'post']); ?>



                            <!-- SAMPLE NAME -->
                            <div class="form-group">
    <?php echo Form::label('Product Image'); ?>

    <?php echo Form::file('image', null); ?></div>
                            
                            <!-- /SAMPLE NAME -->



                            <?php echo Form::hidden('id',@$slide->slide_id); ?>



                            <!-- DELETE BUTTON -->
                            <a href="<?php echo URL::route('admin_slide.delete',['id' => @$slide->id, '_token' => csrf_token()]); ?>"
                               class="btn btn-danger pull-right margin-left-5 delete">
                                Delete
                            </a>
                            <!-- DELETE BUTTON -->

                            <!-- SAVE BUTTON -->
                            <?php echo Form::submit('Save', array("class"=>"btn btn-info pull-right ")); ?>

                            <!-- /SAVE BUTTON -->

                            <?php echo Form::close(); ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class='col-md-4'>
            <?php echo $__env->make('sample::slide.admin.slide_search', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        </div>

    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('laravel-authentication-acl::admin.layouts.base-2cols', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>