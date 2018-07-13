<template>
        <div>
        	<!-- links to a tab: Tabs -->
            <div class="custom_tab">
                <ul>
                    <li v-bind="tab in tabs" :class="{'is-active': tab.isActive } . custom_tab_link">
                        <a :href="tab.href" @click="selectTab(tab)">{{ tab.name | capitalize }}</a>
                    </li>
                </ul>
            </div>

            <!-- child goes here: Tab.vue -->
            <div class="tabcontent">
                <slot></slot>
            </div>
            
        </div>	
</template>

<style>
/* Style the tab */
.custom_tab {
    float: left;
    border: 1px solid #ccc;
    background-color: #f1f1f1;
    width: 30%;
    height: 300px;
}

/* Style the buttons inside the custom_tab */
.custom_tab button {
    display: block;
    background-color: inherit;
    color: black;
    padding: 22px 16px;
    width: 100%;
    border: none;
    outline: none;
    text-align: left;
    cursor: pointer;
    transition: 0.3s;
    font-size: 17px;
}

/* Change background color of buttons on hover */
.custom_tab button:hover {
    background-color: #ddd;
}

/* Create an active/current "custom_tab button" class */
.custom_tab button.active {
    background-color: #ccc;
}

/* Style the tab content */
.tabcontent {
    float: left;
    padding: 0px 12px;
    border: 1px solid #ccc;
    width: 70%;
    border-left: none;
    height: 300px;
}
</style>


<script>
	export default{
		
		data() {
	        return { tabs: [] }
	    },

	    created() {
	        this.tabs = this.$children
	    },

	    methods: {
	        selectTab(selectedTab) {
	            this.tabs.forEach(tab => {
	                tab.isActive = (tab.href == selectedTab.href);
	            });
	        }
	    }		
    }
</script>