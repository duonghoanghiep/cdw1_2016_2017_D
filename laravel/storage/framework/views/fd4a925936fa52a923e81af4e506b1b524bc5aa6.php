
<div class="panel panel-info">
    <div class="panel-heading">
        <h3 class="panel-title bariol-thin"><i class="fa fa-search"></i><?php echo trans('tasks.task_page_search') ?></h3>
    </div>
    <div class="panel-body">

        <?php echo Form::open(['route' => 'admin_service','method' => 'get']); ?>


        <!--TITLE-->

        <?php echo Form::submit(trans('tasks.task_search').'', ["class" => "btn btn-info pull-right"]); ?>

        <?php echo Form::close(); ?>

    </div>
</div>