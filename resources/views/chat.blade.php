@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="offset-4 col-4" >

    </div>
  <li class="list-group-item" style="color:white; background-color:black; font-size:15;"><center>All RoomChat</li>
  <li class="badge badge-pill badge-primary">@{{typing}}</li>
    <ul class="list-group" v-chat-scroll>
  <message v-for="value,index in chat.message" :key= value.index   :user = chat.user[index] :color = chat.color[index] :time = chat.time[index]>@{{value}}</message>
</ul>
  <input type="text" class="form-control" placeholder="input text here...." v-model="message" @keyup.enter="send">
  </div>
@endsection
<style>
    .list-group{
        overflow-y:scroll;
        height:400px;
    }
</style>
