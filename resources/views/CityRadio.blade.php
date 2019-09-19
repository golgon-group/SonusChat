@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="offset-4 col-8" >

    </div>
  <li class="list-group-item" style="background-color:red; font-size:15; color:white;"><center>City Radio</li>
  <li class="badge badge-pill badge-primary">@{{typing}}</li>
    <ul class="list-group" v-chat-scroll>
  <cityradio  v-for="value,index in chat.message1" :key= value.index   :user = chat.user[index] {{-- :color = chat.color[index] --}} :time = chat.time[index]>@{{value}}</cityradio>
</ul>
  <input type="text" class="form-control" placeholder="input text here...." v-model="message1" @keyup.enter="sendcity">
  </div>
@endsection
<style>
    .list-group{
        overflow-y:scroll;
        height:400px;
    }
</style>
    