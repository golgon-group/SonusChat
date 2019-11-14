

<?php $__env->startSection('content'); ?>
  <div class="container">
    <div class="offset-4 col-4" >

    </div>
  <li class="list-group-item" style="background-color:green; color:white;"><center/>Medan Fm</li>
  <li class="badge badge-pill badge-primary">{{typing}}</li>
    <ul class="list-group" v-chat-scroll>
  <medan v-for="value,index in chat.message2" :key=value.index :user = chat.user[index] :time = chat.time[index]>{{value}}</medan>
</ul>
  <input type="text" class="form-control" placeholder="input text here...." v-model="message2" @keyup.enter="sendmedan">
  </div>
<?php $__env->stopSection(); ?>
<style>
    .list-group{
        overflow-y:scroll;
        height:450px;
    }
</style>
    
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /usr/local/var/www/SonusChat/resources/views/medan.blade.php ENDPATH**/ ?>