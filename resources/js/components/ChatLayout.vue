<template>
    <div>
        <div class="chat">
            <div class="chat-title">
                <h1>Chatroom</h1>
            </div>
            <div class="messages">
                <div class="messages-content">
                    <ChatItem v-for="(message, index) in list_messages" :key="index" :message="message"></ChatItem>
                </div>
            </div>
            <div class="message-box">
                <input name="content" type="text" v-model="message" @keyup.enter="sendMessage" class="message-input" placeholder="Type message..."/>
                <button type="button" class="message-submit" @click="sendMessage">Send</button>
            </div>
        </div>
        <div class="bg"></div>
    </div>
</template>

<script>
    import ChatItem from './ChatItem.vue'
    export default {
        // prop: [
        //     'groupId'
        // ],
        components: {
            ChatItem
        },
        data() {
            return {
                // group_Id: this.groupId,
                message: '',
                list_messages: []
            }
        },
        created () {
            // console.log(this.group_Id);
            this.loadMessage();
            Echo.channel('group')
                .listen('MessagePosted', (data) => {
                    let message = data.message;
                    message.user = data.user;
                    this.list_messages.push(message)
                })
        },
        methods: {
            loadMessage() {
                axios.get('/messages/'+ groupID)
                    .then(response => {
                        this.list_messages = response.data
                    })
                    .catch(error => {
                        console.log(error)
                    })
            },
            sendMessage() {
                axios.post('/messages/'+ groupID, {
                    content: this.message
                })
                    .then(response => {
                        this.list_messages.push({
                            content: this.message,
                            created_at: new Date().toJSON().replace(/T|Z/gi, ' '),
                            user: this.$root.currentUserLogin
                        });
                        this.message = ''
                    })
                    .catch(error => {
                        console.log(error)
                    })
            }
        }
    }
</script>

<style lang="scss" scoped>
    .messages {
        height: 80%;
        overflow-y: scroll;
        padding: 0 20px;
    }
    /*--------------------
    Body
    --------------------*/
    /*--------------------
    Chat
    --------------------*/
    .chat {
        height: 80vh;
        max-height: 700px;
        z-index: 2;
        overflow: hidden;
        box-shadow: 0 5px 30px rgba(0, 0, 0, .2);
        background: rgba(0, 0, 0, .5);
        border-radius: 20px;
        display: flex;
        justify-content: space-between;
        flex-direction: column;
    }
    /*--------------------
    Chat Title
    --------------------*/
    .chat-title {
        flex: 0 1 45px;
        position: relative;
        z-index: 2;
        background: rgba(0, 0, 0, 0.2);
        color: #fff;
        text-transform: uppercase;
        text-align: left;
        padding: 10px 10px 10px 50px;

        h1, h2 {
            font-weight: normal;
            font-size: 16px;
            margin: 0;
            padding: 0;
        }
        h2 {
            color: rgba(255, 255, 255, .5);
            font-size: 8px;
            letter-spacing: 1px;
        }

        .avatar {
            position: absolute;
            z-index: 1;
            top: 8px;
            left: 9px;
            border-radius: 30px;
            width: 30px;
            height: 30px;
            overflow: hidden;
            margin: 0;
            padding: 0;
            border: 2px solid rgba(255, 255, 255, 0.24);
            img {
                width: 100%;
                height: auto;
            }
        }
    }
    /*--------------------
    Message Box
    --------------------*/
    .message-box {
        flex: 0 1 40px;
        width: 100%;
        background: rgba(0, 0, 0, 0.3);
        padding: 10px;
        position: relative;
        & .message-item {
            color: white;
        }
        & .message-input {
            background: none;
            border: none;
            outline: none!important;
            resize: none;
            color: rgba(255, 255, 255, .7);
            font-size: 11px;
            height: 17px;
            margin: 0;
            padding-right: 20px;
            width: 265px;
        }
        textarea:focus:-webkit-placeholder{
            color: transparent;
        }

        & .message-submit {
            position: absolute;
            z-index: 1;
            top: 9px;
            right: 10px;
            color: #fff;
            border: none;
            background: #248A52;
            font-size: 10px;
            text-transform: uppercase;
            line-height: 1;
            padding: 6px 10px;
            border-radius: 10px;
            outline: none!important;
            transition: background .2s ease;
            &:hover {
                background: #1D7745;
            }
        }
    }
</style>
