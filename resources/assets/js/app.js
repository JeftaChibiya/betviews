
/** Project's JavaScript dependencies */
require('./bootstrap');



/** Vue.js */

Vue.component('dummy', require('./components/Dummy.vue'));
Vue.component('betting-tip', require('./components/BettingTip.vue'));
Vue.component('general-tip', require('./components/GeneralTip.vue'));
Vue.component('register-user', require('./components/RegisterUser.vue'));
Vue.component('flash', require('./components/Flash.vue'));
Vue.component('paginator', require('./components/Paginator.vue'));
Vue.component('user-notifications', require('./components/UserNotifications.vue'));
// Vue.component('avatar-form', require('./components/AvatarForm.vue'));
Vue.component('wysiwyg', require('./components/Wysiwyg.vue'));
Vue.component('show-tip', require('./components/ShowTip.vue'));


Vue.filter('capitalize', function(value) {
    if (!value) return ''
    value = value.toString()
    return value.charAt(0).toUpperCase() + value.slice(1)
});

Vue.filter('formatDate', function(value) {
    if (value) {
      return moment.unix(value).format('dddd Do MMMM YYYY, h:mm:ss a')
    }
});


const app = new Vue({
    el: '#app'
});
