<template>
            <div class="form-group">
                <label for="name">Room Name</label>
                <input type="text" name="name"  id="name" v-model="room_name" class="form-control"/>
                     <div class="form-group">
                        <input type="submit" @click="AddRoom()" name="submit" value="add Room" class="btn btn-default"/>
                     </div>
            </div>
           
</template>
<script>
    export default{
        data(){
            return{
            room_name:""
            }
        },
    }
</script>

