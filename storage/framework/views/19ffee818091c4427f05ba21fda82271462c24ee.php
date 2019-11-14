

<?php $__env->startSection('content'); ?>
  <div class="container">
    <div class="offset-4 col-4" >

    </div>
  <li class="list-group-item" style="color:white; background-color:black; font-size:15;"><center>All RoomChat</li>
  <li class="badge badge-pill badge-primary">{{typing}}</li>
    <ul class="list-group" v-chat-scroll>
  <message v-for="value,index in chat.message" :key= value.index   :user = chat.user[index] :color = chat.color[index] :time = chat.time[index]>{{value}}</message>
</ul>
  <input type="text" class="form-control" placeholder="input text here...." v-model="message" @keyup.enter="send">
   <div class="allchat">
      Delete All Chat
    </div> untuk menghapus(teteapi saaat ini belum digunakan )
  </div>
<?php $__env->stopSection(); ?>
<style>
    .list-group{
        overflow-y:scroll;
        height:400px;
    }

  .chat-right{
    color:red;
  }

  .allchat {
     background-color:blue;
        width:150px;;
        border-radius:0px 10px; 
        margin-top:10px;   
        color:white;
        font-size:17px;
        text-align:center;
  }
</style>
    
<?php echo $__env->make('admin.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /usr/local/var/www/SonusChat/resources/views/admin/chat.blade.php ENDPATH**/ ?>