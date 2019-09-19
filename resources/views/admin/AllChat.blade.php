<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Super Admiin</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
     <style>
.kiri{
    background-color:red;
    width:400px;
    height:auto;
}
h1{
    text-align:center;
}

.kanan{
    background-color:yellow;
    width:500px;
}

.container{
    width:900px;
    margin-left:200px;
}
     </style>
    </head>
    <body>
       <div class="container">
            <div class="kiri" style="float:left;">
                <h1/>AllChatRoom
                <h1/>CityRadio
                <h1/>Medan Fm
            </div>
            <div class="kanan" style="float:right;">
            @include('chat')
            </div>
       </div>
    </body>
</html>
