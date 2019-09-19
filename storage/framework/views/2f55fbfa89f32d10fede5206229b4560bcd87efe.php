<?php $__env->startSection('content'); ?>
<div class="container"><!--container unutk semua na-->
<?php 
    
    $rand = array('0', '1', '2', '3', '4', '5', '6', '7', '8', '9', 'a', 'b', 'c', 'd', 'e', 'f');
    $color = '#'.$rand[rand(0,15)].$rand[rand(0,15)].$rand[rand(0,15)].$rand[rand(0,15)].$rand[rand(0,15)].$rand[rand(0,15)];
    
?>

<div class="color" style="color: <?php echo $color; ?>;">
    <h2>Your log in: <?php echo e(Auth::user()->name); ?></h2>
</div> 
</div>
<?php $__env->stopSection(); ?>

<style>
    .color{
        border-radius:15px;

    }
    h2 {
        margin-left:10px;
    }
</style>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\koment\resources\views/home.blade.php ENDPATH**/ ?>