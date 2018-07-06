
/** Project's JavaScript dependencies */
require('./bootstrap');



/** Vue.js */

Vue.component('dummy', require('./components/Dummy.vue'));
Vue.component('betting-tip', require('./components/BettingTip.vue'));
Vue.component('general-tip', require('./components/GeneralTip.vue'));
// Vue.component('register-user', require('./components/RegisterUser.vue'));
Vue.component('flash', require('./components/Flash.vue'));
Vue.component('paginator', require('./components/Paginator.vue'));
Vue.component('user-notifications', require('./components/UserNotifications.vue'));
// Vue.component('avatar-form', require('./components/AvatarForm.vue'));
Vue.component('wysiwyg', require('./components/Wysiwyg.vue'));
Vue.component('show-tip', require('./components/ShowTip.vue'));
Vue.component('roles-index', require('./components/RolesIndex.vue'));
Vue.component('modal', require('./components/Modal.vue'));


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
  

Vue.component('tabs', {
    template: `
        <div>
            <div class="custom_tab">
                <ul>
                    <li v-for="tab in tabs" :class="{ 'is-active': tab.isActive }">
                        <button :href="tab.href" @click="selectTab(tab)">{{ tab.name | capitalize }}</button>
                    </li>
                </ul>
            </div>

            <div class="tabcontent">
                <slot></slot>
            </div>
        </div>
    `,

    data() {
        return { tabs: [] };
    },

    created() {
        this.tabs = this.$children;
    },

    methods: {
        selectTab(selectedTab) {
            this.tabs.forEach(tab => {
                tab.isActive = (tab.href == selectedTab.href);
            });
        }
    }
});


Vue.component('tab', {
    template: `
        <div v-show="isActive"><slot></slot></div>
    `,

    props: {
        name: { required: true },
        selected: { default: false }
    },

    data() {
        return {
            isActive: false
        };
    },

    computed: {
        href() {
            return '#' + this.name.toLowerCase().replace(/ /g, '-');
        }
    },

    mounted() {
        this.isActive = this.selected;
    },
});



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


new Vue({
    el: '#app',
    
    data() {
        return {

        }
    }
});
