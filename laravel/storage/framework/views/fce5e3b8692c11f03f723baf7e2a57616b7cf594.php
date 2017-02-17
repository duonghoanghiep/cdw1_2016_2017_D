<?php if(isset($logged_user) && $logged_user->user_profile()->count()): ?>
    <img src="<?php echo $logged_user->user_profile()->first()->presenter()->avatar($size); ?>" width="<?php echo e($size); ?>">
<?php else: ?>
    <img src="<?php echo URL::asset('/packages/jacopo/laravel-authentication-acl/images/avatar.png'); ?>" width="<?php echo e($size); ?>">
<?php endif; ?>