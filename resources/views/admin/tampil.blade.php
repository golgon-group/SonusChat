<div class="container">
    <div class="teks">
        <div class="back"><a style="text-decoration:none; color:white;" href="{{('admin.index')}}">Back</a></div>
            <h1>Your New Room</h1>
          <div class="isi">
    {{-- isi dari kotak na  --}}
   @foreach ( $newroom as $new )
        <table class="table ">
             <td><a style="text-decoration:none; color:black; margin-left:10px; color:white;" href="/admin.ChatDetailNewRoomCityRadio/{{$new->id}}"><h2/>{{$new->name}}</a></td>
            <br>
    @endforeach
         </div>{{-- akhir isi --}}
    </div>{{-- akhir teks --}}
</div>{{-- akhir container --}}

<style>
    .back{
        margin-right:1300px;
    }

    .isi{
        background-color:lightgrey;
        height:470px;
        overflow-y:auto;
    }

    .teks{
        color:white;
        margin-bottom:10px;  
        text-align:center;
        background-color:black;
        border-radius:10px;
    }

    .table{
        border:1px solid black;
        width:500px;
        margin-left:450px;
        border-radius:10px;
        margin-bottom:10px; 
        background-color:red;
       
    }
</style>


