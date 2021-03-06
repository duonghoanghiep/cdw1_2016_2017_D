<div class="panel panel-info">
    <div class="panel-heading">
        <h3 class="panel-title bariol-thin"><i class="fa fa-search"></i> User search</h3>
    </div>
    <div class="panel-body">
        <?php echo Form::open(['route' => 'users.list','method' => 'get']); ?>

        <!-- email text field -->
        <div class="form-group">
            <?php echo Form::label('email','Email: '); ?>

            <?php echo Form::text('email', null, ['class' => 'form-control', 'placeholder' => 'user email']); ?>

        </div>
        <span class="text-danger"><?php echo $errors->first('email'); ?></span>
        <!-- first_name text field -->
        <div class="form-group">
            <?php echo Form::label('first_name','First name: '); ?>

            <?php echo Form::text('first_name', null, ['class' => 'form-control', 'placeholder' => 'first name']); ?>

        </div>
        <span class="text-danger"><?php echo $errors->first('first_name'); ?></span>
        <!-- last_name text field -->
        <div class="form-group">
            <?php echo Form::label('last_name','Last name:'); ?>

            <?php echo Form::text('last_name', null, ['class' => 'form-control', 'placeholder' => 'last name']); ?>

        </div>
        <span class="text-danger"><?php echo $errors->first('last_name'); ?></span>
        <!-- zip text field -->
        <div class="form-group">
            <?php echo Form::label('zip','Zip:'); ?>

            <?php echo Form::text('zip', null, ['class' => 'form-control', 'placeholder' => 'zip']); ?>

        </div>
        <span class="text-danger"><?php echo $errors->first('zip'); ?></span>
        <!-- code text field -->
        <div class="form-group">
            <?php echo Form::label('code','User code:'); ?>

            <?php echo Form::text('code', null, ['class' => 'form-control', 'placeholder' => 'user code']); ?>

        </div>
        <span class="text-danger"><?php echo $errors->first('code'); ?></span>
        <div class="form-group">
            <?php echo Form::label('activated', 'Active: '); ?>

            <?php echo Form::select('activated', ['' => 'Any', 1 => 'Yes', 0 => 'No'], $request->get('activated',''), ["class" => "form-control"]); ?>

        </div>
        <div class="form-group">
            <?php echo Form::label('banned', 'Banned: '); ?>

            <?php echo Form::select('banned', ['' => 'Any', 1 => 'Yes', 0 => 'No'], $request->get('banned',''), ["class" => "form-control"]); ?>

        </div>
        <div class="form-group">
            <?php echo Form::label('group_id', 'Group: '); ?>

            <?php $group_values[""] = "Any"; ?>
            <?php echo Form::select('group_id', $group_values, $request->get('group_id',''), ["class" => "form-control"]); ?>

        </div>
        <?php echo $__env->make('laravel-authentication-acl::admin.user.partials.sorting', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <div class="form-group">
            <a href="<?php echo URL::route('users.list'); ?>" class="btn btn-default search-reset">Reset</a>
            <?php echo Form::submit('Search', ["class" => "btn btn-info", "id" => "search-submit"]); ?>

        </div>
        <?php echo Form::close(); ?>

    </div>
</div>