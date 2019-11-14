

<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="kiri">
           <li class="list-group-item" style="background-color:red; font-size:15; color:white; width:750px;"><center/><h5/><?php echo e($newroom->name); ?></li>
           <li class="badge badge-pill badge-primary">{{typing}}</li>
    <ul class="list-group" v-chat-scroll>
    <newroom v-for="value,index in chat.message_newroom" :key= value.index :user= chat.user[index]>{{value}}</newroom>
  
</ul>
  <input style="width:750px;" type="text" class="form-control" placeholder="input text here...." v-model="message_newroom" @keyup.enter="sendnewroom">
  
  </div>

    <div class="kanan">
         <center/><div  class="kotak" style="background-color:black; height:49px;"><h4/ style="color:white;"><center/><h2/>Online User</div>
    </div>

        </div>
    </div>


<?php $__env->stopSection(); ?>

<style>
.kotak_user{
  margin-top:10px;
    border:1px solid white;
    border-radius:70px 10px 70px 10px;
    width:300px;
}

.kotak_user a{
  color:black;
  text-decoration:none !important;
}

 .container1{
      width:900px;
    }

    .isi{
      height:435px;
      overflow-y:auto ;
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
    border:0px solid black;
    margin-right:10px;
    float:right;
    height:485px;
    background-color:lightgrey;
    }

   
    .list-group{
        overflow-y:scroll;
        height:400px;
        width:750px;
        background-color:lightgrey;
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
    



<?php echo $__env->make('admin.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /usr/local/var/www/SonusChat/resources/views/admin/ChatDetailNewRoomCityRadio.blade.php ENDPATH**/ ?>