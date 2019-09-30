@extends('admin.app')

@section('content')
    <div class="container">{{-- container awal --}}
    <div class="kiri">{{-- awal kiri --}}
    <div class="offset-4 col-4" >

    </div>
  <li class="list-group-item" style="background-color:green; color:white; width:750px;"><center/>Medan Fm</li>
  <li class="badge badge-pill badge-primary">@{{typing}}</li>
    <ul class="list-group" v-chat-scroll>
  <medan v-for="value,index in chat.message2" :key=value.index>@{{value}}</medan>
</ul>
  <input  style="width:750px; "type="text" class="form-control" placeholder="input text here...." v-model="message2" @keyup.enter="sendmedan">
    </div>{{-- akhir kiri --}}

    <div class="kanan">{{-- awal kanan --}}

      @if(Auth::check())
  <center/><div style="background-color:lightgrey; height:49px;"><h4/ style="color:white;"><center/>Online User</div>
    @foreach($users as $user)
        @if($user->isOnline())
     <h3/> {{$user->name}}
        @endif
    @endforeach
@else
nothing
@endif

    </div>{{-- akhir kanan --}}
  </div>{{-- container akhir --}}
@endsection
<style>
    .container1{
      width:900px;
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
    margin-right:10px;
    float:right;
    overflow-y:scroll hidden;
    height:535px;
    }

    .list-group{
        overflow-y:scroll ;
        height:450px;
        width:750px;
        
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
    