<script>

    export default {

        props: ['roles', 'permissions'],        

        data() {
            return {
                selectedRole: '',
                showModal: false, 
                name: '',
                permissions_list: []               
            }
        },       
        
        watch: {
         
        },

        methods: {
            close(){
                this.showModal = false
            },  

            submit(){
               let formInput = new FormData();
               
               formInput.append('name', this.name);
               formInput.append('permissions', this.permissions_list);               

               axios.post('/role', formInput);
            }
        }             
    }
</script>