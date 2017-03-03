
<?php if( ! $faqs->isEmpty() ): ?>
<table class="table table-hover">
    <thead>
        <tr>
            <td style='width:5%'><?php echo e(trans('sample::faq_admin.order')); ?></td>
            <th style='width:10%'>Faq ID</th>
            <th style='width:10%'>Faq Title</th>
            <th style='width:10%'>Faq ND</th>
            <th style='width:20%'><?php echo e(trans('sample::faq_admin.operations')); ?></th>
        </tr>
    </thead>
    <tbody>
        <?php
            $nav = $faqs->toArray();
            $counter = ($nav['current_page'] - 1) * $nav['per_page'] + 1;
        ?>
        <?php $__currentLoopData = $faqs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $faq): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
        <tr>
            <td>
                <?php echo $counter; $counter++ ?>
            </td>
            <td><?php echo $faq->faq_id; ?></td>
            <td><?php echo $faq->faq_title; ?></td>
            <td><?php echo $faq->faq_nd; ?></td>
            <td>
                <a href="<?php echo URL::route('admin_faq.edit', ['id' => $faq->faq_id]); ?>"><i class="fa fa-edit fa-2x"></i></a>
                <a href="<?php echo URL::route('admin_faq.delete',['id' =>  $faq->faq_id, '_token' => csrf_token()]); ?>" class="margin-left-5 delete"><i class="fa fa-trash-o fa-2x"></i></a>
                <span class="clearfix"></span>
            </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
    </tbody>
</table>
<?php else: ?>
<span class="text-warning"><h5>No results found.</h5></span>
<?php endif; ?>


