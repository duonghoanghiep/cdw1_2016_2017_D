<div class="panel panel-info">
    <div class="panel-heading">
        <h3 class="panel-title bariol-thin"><i class="fa fa-search"></i> Group search</h3>
    </div>
    <div class="panel-body">
        <?php echo Form::open(['route' => 'groups.list','method' => 'get']); ?>

        <!-- name text field -->
        <div class="form-group">
            <?php echo Form::label('name','Name:'); ?>

            <?php echo Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'group name']); ?>

        </div>
        <span class="text-danger"><?php echo $errors->first('name'); ?></span>
        <?php echo Form::submit('Search', ["class" => "btn btn-info pull-right"]); ?>

        <?php echo Form::close(); ?>

    </div>
</div>