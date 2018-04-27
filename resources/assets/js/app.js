
/** Project's JavaScript dependencies */
require('./bootstrap');



/** Vue.js */

Vue.component('create-tip', require('./components/CreateTip.vue'));
Vue.component('register-user', require('./components/RegisterUser.vue'));
Vue.component('flash', require('./components/Flash.vue'));
Vue.component('paginator', require('./components/Paginator.vue'));
Vue.component('user-notifications', require('./components/UserNotifications.vue'));
// Vue.component('avatar-form', require('./components/AvatarForm.vue'));
Vue.component('wysiwyg', require('./components/Wysiwyg.vue'));

Vue.filter('capitalize', function(value) {
    if (!value) return ''
    value = value.toString()
    return value.charAt(0).toUpperCase() + value.slice(1)
});

const app = new Vue({
    el: '#app'
});
