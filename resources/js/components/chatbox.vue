<template>
    <div class="chat_window">
        <div class="top_menu">
            <div class="buttons">
                <div class="button close">

                </div>
                    <div class="button minimize">
                    
                    </div>
                        <div class="button maximize">

                        </div>
                            <div class="title">Chat</div>
            </div>
                <ul class="message"></ul>
                    <div class="bottom_wraper clearfix">
                        <div class="message_input_wrapper">
                            <input class="message_input" placeholder="Type your message here..."/>
                        </div>
                            <div class="send_message">
                                <div class="icon"></div>
                                <div class="text">Send</div>
                            </div>
                    </div>
        </div>
            <div class="message_template">
                <li class="message">
                    <div class="avatar">
                    
                    </div>
                    <div class="text_wrapper">
                        <div class="text"></div>
                    </div>
                </li>
            </div>
    </div>
</template>

<script>
    export default{
        data(){
            return{

            }
        }
    }
</script>