<template>
<div>
    <div class="header">
        <div class="yo">
            <div class="user">{{user}}</div>
            <li class="list-group-item" style="display:inline-block; font-size:15px;"><slot></slot></li>
            <div class="float-right">{{time}}</div>
        </div>
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