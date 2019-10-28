/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

import Vue from 'vue'

import VueChatScroll from 'vue-chat-scroll'
import { timingSafeEqual } from 'crypto';
Vue.use(VueChatScroll)

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i);
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default));

Vue.component('message', require('./components/message.vue').default);
Vue.component('cityradio',require('./components/cityradio.vue').default);
Vue.component('medan',require('./components/medan.vue').default);
Vue.component('addroom',require('./components/addroom.vue').default);
Vue.component('newroom',require('./components/newroom.vue').default);
Vue.component('chatbox',require('./components/chatbox.vue').default);
/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */ 

const app = new Vue({
    el: '#app', 
   data:{
       message_newroom:'',
       message:'',
       message1:'',/* for CityRadio  */
       message2:'',
       users:[],
       chat:{ 
           message_newroom:[],
           message:[],
           message1:[],/* for City Radio */
           message2:[],
           user:[],//unutk membuat nama user
           color:[],
           time:[]//variabel untk wwaktu na
       },
       typing:''
    },
    watch:{
        message(){
            Echo.private('chat')
            .whisper('typing', {
                name:this.message
            })
        },

        created(){
            Echo.join('liveuser')
            .here ((users)=>{
                this.users = users
            })
            .joining((user)=>{
                this.users = user
            })
            .leaving((user)=>{
                console.log(user.name);
            });
        },

        //unutk City Radio
        message1(){
            Echo.private('chat')
            .whisper('typing',{
                name:this.message1
            })
        }
    },
    methods: {
        send(){ 
            if (this.message.length != 0) {
              this.chat.message.push(this.message);//message na
              this.chat.user.push('you');//pendeklarasian user na
              this.chat.color.push('success');//warna
              this.chat.time.push(this.getTime());//waktu na  
              axios.post('/send',{
                  message: this.message,
                  chat:this.chat
              })
              .then(response => {
                  console.log(response);
                  this.message = ''                                                                                                                                                                                                                                                                          
              })
              .catch(error => {
                  console.log(error);
              });
            }
        },

        //unutk mengirim ke city radio
        sendcity(){
            if(this.message1.length != 0){
                this.chat.message1.push(this.message1);
                this.chat.user.push('you');
                this.chat.time.push(this.getTime());
                axios.post('/sendcity',{
                    message1: this.message1,
                    chat:this.chat
                })
                .then(response => {
                    console.log(response);
                    this.message1 = ''
                })
                .catch(error => {
                    console.log(error);
                });
            }
        },

        //untuk mengirmkan ke sendmedan
        sendmedan(){
            if(this.message2.length !=0){
                this.chat.message2.push(this.message2);
                this.chat.user.push('you');
                this.chat.time.push(this.getTime());
                axios.post('/sendmedan',{
                    message2:this.message2,
                    chat:this.chat
                })
                .then(response => {
                    console.log(response);
                    this.message2= ''
                })
                .catch(error =>{
                    console.log(error);
                })
            }
        },

        //unutk mengirimkan ke newroom
        sendnewroom(){
            if(this.message_newroom.length !=0){
                this.chat.message_newroom.push(this.message_newroom);
                this.chat.user.push('you');
                this.chat.time.push(this.getTime());
                axios.post('/sendnewroom',{
                    message_newroom:this.message_newroom,
                    chat:this.chat
                })
                .then(response => {
                    console.log(response);
                    this.message_newroom= ''
                })
                .catch(error =>{
                    console.log(error);
                })
            }
        },

            //untuk membuat waktu (time)
        getTime(){
            let time = new Date();
            return time.getHours()+':'+time.getMinutes();
        },
        getOldMessages(){//unutk membuat agar bisa session dan di tahan teks na atw chat na
            axios.post('/getOldMessage')
            .then(response => {
                console.log(response);
                if(response.data !='') {
                    this.chat = response.data; 
                }
            })
            .catch(error =>{
                console.log(error);
            });
        }
    },
    // listener for event and connect to pusher
    mounted(){
        this.getOldMessages();
        Echo.private('chat')
        .listen('ChatEvent',(e) =>{
           this.chat.message.push(e.message);
           this.chat.user.push(e.user);//untuk membuat realtime na user 
           this.chat.color.push('danger');//untuk warna chat na
           this.chat.time.push(this.getTime());
           axios.post('/stillsave',{
               chat:this.chat
           })
           .then(response => { 
           })
           .catch(error =>{
               console.log(error);
           });
           // console.log(e);
        })
        Echo.private('chat')
        .listen('CityRadioEvent',(e)=>{
            this.chat.message1.push(e.message1);
            this.chat.user.push(e.user);
            this.chat.time.push(this.getTime());
        })

        Echo.private('chat')
        .listen('MedanFmEvent',(e)=>{
            this.chat.message2.push(e.message2);
            this.chat.user.push(e.user);
            this.chat.time.push(this.getTime());
        })

        Echo.private('chat')// untk room ChatDetailNewRoomCityRadio
        .listen('NewRoomEvent',(e)=>{
            this.chat.message_newroom.push(e.message_newroom);
            this.chat.user.push(e.user);
            this.chat.time.push(this.getTime());
        })

        .listenForWhisper('typing', (e)=> {//untuk membuat ada baccan typing ketka ketik chat
            if(e.name !='') {
           this.typing = 'Sedang Mengetik...'//text untuk jika diketik keluat di layout
            }else{
               this.typing = ''
            }
        });
    }
});
