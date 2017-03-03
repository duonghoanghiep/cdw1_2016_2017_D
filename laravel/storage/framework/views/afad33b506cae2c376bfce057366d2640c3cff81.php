
<?php if( ! $slides->isEmpty() ): ?>
<table class="table table-hover">
    <thead>
        <tr>
            <td style='width:5%'><?php echo e(trans('sample::slide_admin.order')); ?></td>
            <th style='width:10%'>Faq ID</th>
            <th style='width:10%'>Faq Title</th>
            <th style='width:10%'>Faq ND</th>
            <th style='width:20%'><?php echo e(trans('sample::slide_admin.operations')); ?></th>
        </tr>
    </thead>
    <tbody>
        <?php
            $nav = $slides->toArray();
            $counter = ($nav['current_page'] - 1) * $nav['per_page'] + 1;
        ?>
        <?php $__currentLoopData = $slides; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $slide): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
        <tr>
            <td>
                <?php echo $counter; $counter++ ?>
            </td>
            <td><?php echo $slide->slide_id; ?></td>
            <td><?php echo $slide->slide_title; ?></td>
            <td><?php echo $slide->slide_nd; ?></td>
            <td>
                <a href="<?php echo URL::route('admin_slide.edit', ['id' => $slide->slide_id]); ?>"><i class="fa fa-edit fa-2x"></i></a>
                <a href="<?php echo URL::route('admin_slide.delete',['id' =>  $slide->slide_id, '_token' => csrf_token()]); ?>" class="margin-left-5 delete"><i class="fa fa-trash-o fa-2x"></i></a>
                <span class="clearfix"></span>
            </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
    </tbody>
</table>
<?php else: ?>
<span class="text-warning"><h5>No results found.</h5></span>
<?php endif; ?>


