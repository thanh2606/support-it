require('./bootstrap');

window.Vue = require('vue');

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('example-component', require('./components/ExampleComponent.vue').default);

Vue.component('chat-layout', require('./components/ChatLayout.vue').default);

const app = new Vue({
    el: '#app',
    data: {
        currentUserLogin: {}
    },
    created() {
        this.getCurrentUserLogin()
    },
    methods: {
        getCurrentUserLogin() {
            axios.get('/getUserLogin')
                .then(response => {
                    this.currentUserLogin = response.data
                })
        }
    }
});
