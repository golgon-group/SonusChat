<?php $__env->startSection('content'); ?>
  <div class="container">
    <div class="offset-4 col-4" >

    </div>
  <li class="list-group-item" style="background-color:green; color:white;"><center/>Medan Fm</li>
  <li class="badge badge-pill badge-primary">{{typing}}</li>
    <ul class="list-group" v-chat-scroll>
  <medan v-for="value,index in chat.message2" :key=value.index>{{value}}</medan>
</ul>
  <input type="text" class="form-control" placeholder="input text here...." v-model="message2" @keyup.enter="sendmedan">
    <div class="delete">
      Delete All Chat
    </div>
  </div>
<?php $__env->stopSection(); ?>
<style>
    .list-group{
        overflow-y:scroll;
        height:450px;
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