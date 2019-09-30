<?php $__env->startSection('content'); ?>
    <div class="container">
    <div class="kiri">
    <div class="offset-4 col-4" >

    </div>
  <li class="list-group-item" style="background-color:green; color:white; width:750px;"><center/>Medan Fm</li>
  <li class="badge badge-pill badge-primary">{{typing}}</li>
    <ul class="list-group" v-chat-scroll>
  <medan v-for="value,index in chat.message2" :key=value.index>{{value}}</medan>
</ul>
  <input  style="width:750px; "type="text" class="form-control" placeholder="input text here...." v-model="message2" @keyup.enter="sendmedan">
    </div>

    <div class="kanan">

      <?php if(Auth::check()): ?>
  <center/><div style="background-color:lightgrey; height:49px;"><h4/ style="color:white;"><center/>Online User</div>
    <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php if($user->isOnline()): ?>
     <h3/> <?php echo e($user->name); ?>

        <?php endif; ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php else: ?>
nothing
<?php endif; ?>

    </div>
  </div>
<?php $__env->stopSection(); ?>
<style>
    .container1{
      width:900px;
    }

    .kiri{ 
    width:410px;
    height:590px;
    border-radius:10px 0px 0px 10px;
    float:left;
    }

    .kanan{ 
    width:350px;
    border-radius:0px 6px 10px 0px;
    margin-right:10px;
    float:right;
    overflow-y:scroll hidden;
    height:535px;
    }

    .list-group{
        overflow-y:scroll ;
        height:450px;
        width:750px;
        
    }

    .delete {
       background-color:blue;
        width:150px;;
        border-radius:0px 10px; 
        margin-top:10px;   
        color:white;
        font-size:17px;
        text-align:center;
    }
</style>
    
<?php echo $__env->make('admin.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\koment\resources\views/admin/medan.blade.php ENDPATH**/ ?>