<script>
    import Wysiwyg from '../components/Wysiwyg.vue';
    import vSelect from 'vue-select';

    // https://jsfiddle.net/dux6q43p/

    export default {

        props: ['tags'],

        data() {
            return {
                // tip
                tip_intro: '', 
                subtitle: '',                              
                cover_image: null,
                tip_body: '',
                completed: false,
                selected: [],
            }
        }, 

        components: {
            vSelect
        },

        computed: {

        },        
        
        watch: {
            selected () { return this.value }       
        },

        methods: {

            // Create new tag
            // createOption: {
            //     type: Function,
            //     default(newOption) {
            //         if (typeof this.mutableOptions[0] === 'object') {
            //             newOption = {[this.label]: newOption}
            //         }
            //         this.$emit('option:created', newOption)
            //         return newOption
            //     }
            // },

            onChange(e) {                       
                                  
                this.cover_image = e.target.files[0];
                // see more on: https://laracasts.com/series/lets-build-a-forum-with-laravel/episodes/65                
            },

            onSelected(e) {                       
                                  
                this.selected = e.target;
                // see more on: https://laracasts.com/series/lets-build-a-forum-with-laravel/episodes/65                
            },            

           onSubmit(){
               let formInput = new FormData();

                // tip
               formInput.append('tip_intro', this.tip_intro);
               formInput.append('subtitle', this.subtitle);               
               formInput.append('cover_image', this.cover_image, this.cover_image.name);                                                          
               formInput.append('tip_body', this.tip_body);
               formInput.append('tags', JSON.stringify(this.selected));

               axios.post('/tip.store', formInput)
                  .then(                      
                    this.$popup({ 
                       message: 'Tip Added!',
                        color           : '#ffd480',
                        backgroundColor : 'rgba(0, 0, 0, 0.6)',
                        delay           : 20                    
                    },
                        this.completed = true
                    ));
                //    .then(function(response) {
                //         window.location.href = 'http://localhost:3000/tip.index';                       
                //    });
           }            
        }                    
    }
</script>

<style>

</style>

