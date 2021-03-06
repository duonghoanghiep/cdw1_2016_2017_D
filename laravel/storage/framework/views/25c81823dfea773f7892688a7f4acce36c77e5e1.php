<?php $__env->startSection('title'); ?>
Admin login
<?php $__env->stopSection(); ?>
<?php $__env->startSection('container'); ?>
    <div class="row centered-form">
        <div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4">
            <div class="panel panel-info">
                <div class="panel-heading">
                    <h3 class="panel-title bariol-thin">Login to <?php echo Config::get('acl_base.app_name'); ?></h3>
                </div>
                <?php $message = Session::get('message'); ?>
                <?php if( isset($message) ): ?>
                <div class="alert alert-success"><?php echo e($message); ?></div>
                <?php endif; ?>
                <?php if($errors && ! $errors->isEmpty() ): ?>
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                <div class="alert alert-danger"><?php echo e($error); ?></div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                <?php endif; ?>
                <div class="panel-body">
                    <?php echo Form::open(array('url' => URL::route("user.login.process"), 'method' => 'post') ); ?>

                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                    <?php echo Form::email('email', '', ['id' => 'email', 'class' => 'form-control', 'placeholder' => 'Email address', 'required', 'autocomplete' => 'off']); ?>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                                    <?php echo Form::password('password', ['id' => 'password', 'class' => 'form-control', 'placeholder' => 'Password', 'required', 'autocomplete' => 'off']); ?>

                                </div>
                            </div>
                        </div>
                    </div>
                    <?php echo Form::label('remember','Remember me'); ?>

                    <?php echo Form::checkbox('remember'); ?>

                    <input type="submit" value="Login" class="btn btn-info btn-block">
                    <?php echo Form::close(); ?>

                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 margin-top-10">
                            <?php echo link_to_route('user.reminder.process','Forgot password?'); ?>

                       </div>
                   </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('laravel-authentication-acl::admin.layouts.baseauth', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>