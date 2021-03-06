<?php $__env->startSection('title'); ?>
Admin area: <?php echo e(trans('sample::service_admin.page_edit')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col-md-12">

        <div class="col-md-8">
            <div class="panel panel-info">
                <div class="panel-heading">
                    <h3 class="panel-title bariol-thin">
                        <?php echo !empty($service->service_id) ? '<i class="fa fa-pencil"></i>'.trans('sample::service_admin.form_edit') : '<i class="fa fa-users"></i>'.trans('sample::service_admin.form_add'); ?>

                    </h3>
                </div>

                
                <?php if($errors->has('service_icon') ): ?>
                    <div class="alert alert-danger"><?php echo $errors->first('service_icon'); ?></div>
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
                            <h4><?php echo trans('sample::service_admin.form_heading'); ?></h4>
                            <?php echo Form::open(['route'=>['admin_service.post', 'id' => @$service->service_id],  'files'=>true, 'method' => 'post']); ?>



                            <!-- SAMPLE NAME -->
                            <div class="form-group">
                                <?php $service_icon= $request->get('service_titlename')?$request->get('service_icon'):@$service->service_icon ?>
                                <?php echo Form::label('service_icon', trans('sample::service_admin.name').':'); ?>

                                <?php echo Form::text('service_icon', $service_icon, ['class' => 'form-control', 'placeholder' => trans('sample::service_admin.name').'']); ?>

                            </div>
                            <!-- /SAMPLE NAME -->



                            <?php echo Form::hidden('id',@$service->service_id); ?>



                            <!-- DELETE BUTTON -->
                            <a href="<?php echo URL::route('admin_service.delete',['id' => @$service->id, '_token' => csrf_token()]); ?>"
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
            <?php echo $__env->make('sample::service.admin.service_search', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        </div>

    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('laravel-authentication-acl::admin.layouts.base-2cols', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>