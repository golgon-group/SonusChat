

<?php $__env->startSection('content'); ?>
<div class="container"></div>

<h2>Your log in: <?php echo e(Auth::user()->name); ?></h2>
admin
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /usr/local/var/www/SonusChat/resources/views/admin/home.blade.php ENDPATH**/ ?>