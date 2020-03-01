<template>
    <div class="message" :class="{'is-current-user': $root.currentUserLogin.id === message.user.id}">
        <div class="message-item user-name" style="color: white">
            {{ message.user.name}}
        </div>
        <div class="message-item timestamp" style="color: white">
            | {{ message.created_at.split(' ')[1] }}:
        </div>
        <div class="message-item text-message" style="color: white">
            {{ message.content }}
        </div>
    </div>
</template>

<script>
    export default {
        props: {
            message: {
                type: Object,
                default: {}
            }
        }
    }
</script>
