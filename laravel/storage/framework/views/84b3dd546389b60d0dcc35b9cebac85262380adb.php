<?php $__env->startSection('title'); ?>
Admin area: <?php echo e(trans('sample::faq_admin.page_edit')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col-md-12">

        <div class="col-md-8">
            <div class="panel panel-info">
                <div class="panel-heading">
                    <h3 class="panel-title bariol-thin">
                        <?php echo !empty($faq->faq_id) ? '<i class="fa fa-pencil"></i>'.trans('sample::faq_admin.form_edit') : '<i class="fa fa-users"></i>'.trans('sample::faq_admin.form_add'); ?>

                    </h3>
                </div>

                
                <?php if($errors->has('faq_title') ): ?>
                    <div class="alert alert-danger"><?php echo $errors->first('faq_title'); ?></div>
                <?php endif; ?>
                <?php if($errors->has('faq_nd') ): ?>
                    <div class="alert alert-danger"><?php echo $errors->first('faq_nd'); ?></div>
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
                            <h4><?php echo trans('sample::faq_admin.form_heading'); ?></h4>
                            <?php echo Form::open(['route'=>['admin_faq.post', 'id' => @$faq->faq_id],  'files'=>true, 'method' => 'post']); ?>



                            <!-- SAMPLE NAME -->
                            <div class="form-group">
                                <?php $faq_title= $request->get('faq_titlename')?$request->get('faq_title'):@$faq->faq_title ?>
                                <?php echo Form::label('faq_title', trans('sample::faq_admin.title').':'); ?>

                                <?php echo Form::text('faq_title', $faq_title, ['class' => 'form-control', 'placeholder' => trans('sample::faq_admin.title').'']); ?>

                            </div>
                            <div class="form-group">
                                <?php $faq_nd= $request->get('faq_titlename')?$request->get('faq_nd'):@$faq->faq_nd ?>
                                <?php echo Form::label('faq_nd', trans('sample::faq_admin.nd').':'); ?>

                                <?php echo Form::text('faq_nd', $faq_nd, ['class' => 'form-control', 'placeholder' => trans('sample::faq_admin.nd').'']); ?>

                            </div>
                            <!-- /SAMPLE NAME -->



                            <?php echo Form::hidden('id',@$faq->faq_id); ?>



                            <!-- DELETE BUTTON -->
                            <a href="<?php echo URL::route('admin_faq.delete',['id' => @$faq->id, '_token' => csrf_token()]); ?>"
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
            <?php echo $__env->make('sample::faq.admin.faq_search', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        </div>

    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('laravel-authentication-acl::admin.layouts.base-2cols', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>