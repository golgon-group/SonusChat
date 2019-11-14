<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Super Admiin</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
     <style>
.kiri{
    background-color:lightgrey;
    width:410px;
    height:590px;
    border-radius:10px 0px 0px 10px;
}
h1{
    text-align:center;
}

.kanan{
    border:1px solid black;
    width:700px;
    border-radius:0px 6px 10px 0px;
}

.container{
    width:900px;
    margin-left:200px;
}


     </style>
    </head>
    <body>
       <div class="container" style="margin-top:10px;">
            <div class="kiri" style="float:left;">
            <h1/>Super Admin
            </br>
            </br>
                <a href="#"><h1/>AllChatRoom</a>
                </br>
                </br>
                <a href="#"><h1/>CityRadio</a>
                </br>
                </br>
               <a href="#"><h1/>Medan Fm</a>
            </div>
            <div class="kanan" style="float:right;">
            <?php echo $__env->make('chat', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
       </div>
    </body>
</html>
<?php /**PATH /usr/local/var/www/SonusChat/resources/views/admin/AllChat.blade.php ENDPATH**/ ?>