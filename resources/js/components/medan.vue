<template>
<div class="header">
<div class="yo">
   <div class="user">{{user}}</div>
   <li class="list-group-item" style="display:inlne-block; font-size:15px;"><slot></slot></li>
    <div class="float-right">{{time}}</div>
    </div>
  </div>
   </template>

   <script>
      export default {
         props:[
            'user',
            'time'
         ],
      }
   </script>

   <style>
      .yo{
         border:1px solid lightgrey;
         display:inline-block;
         margin:15px;
         border-radius:15px;
      }

      .user{
         border:1px solid none ;
         background-color:black;
         color:white;
         border-radius:3px;
      }
   </style>

