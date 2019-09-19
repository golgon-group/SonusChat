@extends('admin.app')

@section('content')
<div class="container">
    <div class="col column">
        <div class="p">
    <p>Welcome On Page Admin<br><span>{{Auth::user()->email}}</span></p>
    <div class="welcome">
    @if ((Auth::user()->admin==11))
         {{--  @include('CityRadio') --}}
         <div class="col" >
            <div class="ahref">
                <a  style="color:black; text-decoration:none; font-size:20px; color:white; " href="{{ url('/admin.chat')}}">All ChatRoom</a> 
                <a  style="color:black; text-decoration:none; font-size:20px; color:white; " href="{{url('/admin.CityRadio')}}">City Radio</a>
             </div>                                                                                                                                                                                                                                                                                                              
        </div>
           @else
        <div class="col" >
            <div class="ahref">
                <a  style="color:black; text-decoration:none; font-size:20px; color:white; " href="{{ url('/admin.chat')}}">All ChatRoom</a> 
                <a  style="color:black; text-decoration:none; font-size:20px; color:white; " href="{{url('/admin.medan')}}">Medan Fm</a>
             </div>                                                                                                                                                                                                                                                                                                              
        </div>
     @endif
   
  {{--  <div class="dropdown">
    <button onclick="show_hide()" class="button">Menu Admin</button> --}}
    {{-- buat drop content jika d clik maka akan keluar pilihan na --}}
        {{-- <div style="display:none;" id="drop-content">
            <a href="#">City Radio</a>
            <a href="#">MedanFm</a>
        </div>
   </div> --}}
  {{--  <form action="#" method="">
<select name="approve">
<option>For Admin</option>
<option value="11">City Radio</option>
<option value="22">Medan Fm</option>
</select>
<input type="submit" value="simpan">
</form> --}}
    </div>
        </div>
    </div>
</div>
{{-- <h2>Your log in: {{Auth::user()->name}}</h2>
</div>

</div>
 --}}@endsection

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
