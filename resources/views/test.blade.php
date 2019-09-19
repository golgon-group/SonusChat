<!--<h1>Chat Admin: {{Auth::user()->name}}</h1>-->

<!DOCTYPE html>
<html>
    <head>
        <style>
            .container{
                width:1000px;
                height:600px;
                display:block;
                margin-left:auto;
                margin-right:auto;
                border:1px solid black;
                border-radius:14px;
            }

            .room{
                background-color:rgba(255, 0, 0, 0.6);;
                border-radius:10px 10px 0px 0px;
                height:50px;
                font-size:25px;   
                text-align:center;
                padding-top:15px; 
                border:1px solid black;  
            }

            .auth{
               font-size:10px;
               text-align:center;
            }

             
            
            
            .input{
                margin-top:480px;
               
            }

            .input1{
                border:1px solid lightgrey;
                width:945px;
                height:50px;
                position:relative;
                bottom:1px;
                border-radius:0px 0px 0px 13px;
            }

            .input2{
                position:relative;
                left:3px;
                height:53px;
                bottom:1px;
                border-radius:0px 0px 14px 0px; 
            }

        </style>
    </head>
<body>
    <div class="container">
        <div class="column">
            <div class="room">
              GROUP CHAT
            </div>
            
            <div class="input">
                <form method="post" action="/store">
                @csrf <!--agar tidak dapat di hacking-->
                    <input type="text" id="fill" class="input1" name="text" placeholder="Message text...">
                    <input type="submit" value="Push" class="input2">
                </form>
            </div>
        </div>
    </div>
</body>
</html>