<?php $__env->startSection('content'); ?>
  <div class="container">
  <div class="kiri">
    <div class="offset-4 col-8">
    
    </div>
  <li class="list-group-item" style="background-color:red; font-size:15; color:white; width:750px;"><center>City Radio</li>
  <li class="badge badge-pill badge-primary">{{typing}}</li>
    <ul class="list-group" v-chat-scroll>
  <cityradio  v-for="value,index in chat.message1" :key= value.index   :user = chat.user[index]  :time = chat.time[index]>{{value}}</cityradio>
</ul>
  <input style="width:750px;" type="text" class="form-control" placeholder="input text here...." v-model="message1" @keyup.enter="sendcity">
   
 
  </div>
      <div class="kanan">

  <center/><div  class="kotak" style="background-color:lightgrey; height:49px;"><h4/ style="color:white;"><center/>Online User</div>
  <div class="isi">
      <?php if(Auth::check()): ?>
    <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php if($user->isOnline()): ?>
    <a href="/admin.UserCity/<?php echo e($user->id); ?>"> <h3/> <?php echo e($user->name); ?></a>

        <?php endif; ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php else: ?>
nothing
<?php endif; ?>
  </div>
    </div>
     </div>
<?php $__env->stopSection(); ?>
<style>

 .container1{
      width:900px;
    }

    .isi{
      height:435px;
      overflow-y:scroll;
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
    height:400px;
    }

   
    .list-group{
        overflow-y:scroll;
        height:400px;
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
    
<?php echo $__env->make('admin.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\koment\resources\views/admin/CityRadio.blade.php ENDPATH**/ ?>