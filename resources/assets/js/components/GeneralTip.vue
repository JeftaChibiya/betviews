<script>
    export default {

        data() {
            return {
                // tip
                tip_intro: '',              
                cover_image: null,
                tip_body: ''
            }
        }, 
        
        watch: {
            
        },

        methods: {
            onChange(e) {                       
                                  
                this.cover_image = e.target.files[0];
                // see more on: https://laracasts.com/series/lets-build-a-forum-with-laravel/episodes/65                
            },

           onSubmit(){
               let formInput = new FormData();

                // tip
               formInput.append('tip_intro', this.tip_intro);
               formInput.append('cover_image', this.cover_image, this.cover_image.name);                                                          
               formInput.append('tip_body', this.tip_body);

               axios.post('/tip.store', formInput);
           }            
        }             
    }
</script>
