<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="col column">
        <div class="p">
    <p>Welcome On Page Admin<br><span><?php echo e(Auth::user()->email); ?></span></p>
    <div class="welcome">
    <?php if((Auth::user()->admin==11)): ?>
         
         <div class="col" >
            <div class="ahref">
                <a  style="color:black; text-decoration:none; font-size:20px; color:white; " href="<?php echo e(url('/admin.chat')); ?>">All ChatRoom</a> 
                <a  style="color:black; text-decoration:none; font-size:20px; color:white; " href="<?php echo e(url('/admin.CityRadio')); ?>">City Radio</a>
             </div>                                                                                                                                                                                                                                                                                                              
        </div>
           <?php else: ?>
        <div class="col" >
            <div class="ahref">
                <a  style="color:black; text-decoration:none; font-size:20px; color:white; " href="<?php echo e(url('/admin.chat')); ?>">All ChatRoom</a> 
                <a  style="color:black; text-decoration:none; font-size:20px; color:white; " href="<?php echo e(url('/admin.medan')); ?>">Medan Fm</a>
             </div>                                                                                                                                                                                                                                                                                                              
        </div>
     <?php endif; ?>
   
  
    
        
  
    </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

 <script>
    function show_hide(){
        var click = document.getElementById("drop-content");
        if(click.style.display === "none"){
            click.style.display = "block";
        }else{
            click.style.display ="none";
        }
    }
 </script>

 <style>
 .welcome{
     background-color:red;
     border-radius:0px 0px 15px 15px;
 }

 .p {
     background-color:black;
     border-radius:20px;
 }

 p{
     color:white;
     font-size:25px;
     text-align:center;
 }

 .dropdown{
position:relative;
display:inline-block;
 }

 .button{
     padding:5px 37px;
     font-size:20px;
 }

 #drop-content a{
     display:block;
     font-size:20px;
     background:#dfdfdf;
     color:black;
     text-decoration:none;
     margin-top:2px;
     padding:0px 50px;
 }

 #drop-content{
     position:absolute;
     z-index:1;
 }

 .ahref {
     display:flex;
     flex-direction:column;
 }
 </style>

<?php echo $__env->make('admin.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\koment\resources\views/admin/index.blade.php ENDPATH**/ ?>