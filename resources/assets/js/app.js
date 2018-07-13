
/** Project's JavaScript dependencies */
require('./bootstrap');



/** Vue.js */

// Vue directive: v-select
Vue.directive('select', {
    twoWay: true,
    bind: function (el, binding, vnode) {
        $(el).select2().on("select2:select", (e) => {
        // v-model looks for
        //  - an event named "change"
        //  - a value with property path "$event.target.value"
        el.dispatchEvent(new Event('change', { target: e.target }));
        });
    },
});
// Filter: Captilize the first letter of word
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


// Components
Vue.component('dummy', require('./components/Dummy.vue'));
Vue.component('betting-tip', require('./components/BettingTip.vue'));
Vue.component('general-tip', require('./components/GeneralTip.vue'));
Vue.component('flash', require('./components/Flash.vue'));
Vue.component('paginator', require('./components/Paginator.vue'));
Vue.component('user-notifications', require('./components/UserNotifications.vue'));
Vue.component('wysiwyg', require('./components/Wysiwyg.vue'));
Vue.component('show-tip', require('./components/ShowTip.vue'));
Vue.component('roles-index', require('./components/RolesIndex.vue'));
Vue.component('modal', require('./components/Modal.vue'));
Vue.component('right-drawer', require('./components/RightDrawer.vue'));
Vue.component('tips-display', require('./components/TipsDisplay.vue'));
Vue.component('new-quiz', require('./components/NewQuiz.vue'));



new Vue({
    el: '#app',

});
