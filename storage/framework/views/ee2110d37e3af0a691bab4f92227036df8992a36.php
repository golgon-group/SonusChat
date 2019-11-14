<div class="container">
    <div class="teks">
        <div class="back"><a style="text-decoration:none; color:white;" href="<?php echo e(('admin.index')); ?>">Back</a></div>
            <h1>Your New Room</h1>
          <div class="isi">
    
   <?php $__currentLoopData = $newroom; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $new): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <table class="table ">
             <td><a style="text-decoration:none; color:black; margin-left:10px; color:white;" href="/admin.ChatDetailNewRoomCityRadio/<?php echo e($new->id); ?>"><h2/><?php echo e($new->name); ?></a></td>
            <br>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
         </div>
    </div>
</div>

<style>
    .back{
        margin-right:1300px;
    }

    .isi{
        background-color:lightgrey;
        height:470px;
        overflow-y:auto;
    }

    .teks{
        color:white;
        margin-bottom:10px;  
        text-align:center;
        background-color:black;
        border-radius:10px;
    }

    .table{
        border:1px solid black;
        width:500px;
        margin-left:450px;
        border-radius:10px;
        margin-bottom:10px; 
        background-color:red;
       
    }
</style>


<?php /**PATH /usr/local/var/www/SonusChat/resources/views/admin/tampil.blade.php ENDPATH**/ ?>