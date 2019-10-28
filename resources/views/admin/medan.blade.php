@extends('admin.app')

@section('content')
    <div class="container">{{-- container awal --}}
    <div class="kiri">{{-- awal kiri --}}
    <div class="offset-4 col-4" >

    </div>
  <li class="list-group-item" style="background-color:green; color:white; width:750px;"><center/>Medan Fm</li>
  <li class="badge badge-pill badge-primary">@{{typing}}</li>
    <ul class="list-group" v-chat-scroll>
  <medan v-for="value,index in chat.message2" :key=value.index :user = chat.user[index] :time = chat.time[index]> @{{value}}</medan>
</ul>
  <input  style="width:750px; "type="text" class="form-control" placeholder="input text here...." v-model="message2" @keyup.enter="sendmedan">
    </div>{{-- akhir kiri --}}

    <div class="kanan">{{-- awal kanan --}}

      @if(Auth::check())
  <center/><div style="background-color:black; height:49px;"><h4/ style="color:white;"><center/>Online User</div>
    @foreach($users as $user)
        @if($user->isOnline())
        <div class="name_user">
        <div class="row">
          <div class="image">
            <div class="teks">
             image
             </div>
          </div>
          <div class="user_online">{{-- nama user yang online --}}
          {{-- batasan na unutk modal bostrap --}}

<!-- Button trigger modal -->
<button type="button" class="btn" style="height:40px;" data-toggle="modal" data-target="#exampleModal"  >
  <h2/> {{$user->name}}
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">User Detail</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <table border=1>
      <tr>
       {{$user->name}}
   
   </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

       {{--  <a href="/admin.UserMedan/{{$user->id}}">  <h2/> {{$user->name}}</a> --}}
          </div>
{{-- unutk batas akhir div user online  --}}

        </div>
        </div>
        @endif
    @endforeach
@else
nothing
@endif

    </div>{{-- akhir kanan --}}
  </div>{{-- container akhir --}}

 
@endsection
<style>
  .teks{
    margin-top:15px;
    color:white;
  }

    .user_online{
      margin-left:90px;
      margin-top:20px;
    }

    .image{
      border: 3px solid green;
      height:60px;
      width:60px;
      border-radius:25px;
      margin-top:4px;
      margin-left:25px;
      background-color:black;
    }

    .container1{
      width:900px;
    }

    .name_user{
      height:70px;
      border:1px solid white;
      margin-top:0px;
    }
    
    a{
      text-decoration:none !important ;
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
    overflow-y:scroll auto;
    height:535px;
    background-color:lightgrey;
    }

    .list-group{
        overflow-y:scroll ;
        height:450px;
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
    