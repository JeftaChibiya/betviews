<script>
    export default {
        // props: ['oddsdata'],

        data() {
            return {
                // new quiz
                title: '',
                desc: '',
                questions: [
                    {
                        title: '',
                        imgoption:
                        {
                            src: '',
                            caption: ''
                        },
                        textoption:
                        {
                            name: '',
                        },                        
                    }
                ],
                view: ''          
            }
        }, 
        
        components: {
            'v-a': {
                template: 
                `
                <div>
                    <div class="columns is-multiline">
                        <div class="column" v-for="option in this.questions.imgoption">
                            <figure class="image is-48x48">
                                <img src="img_placeholder">
                                <input type="hidden" v-model="img_src">
                                <input type="text" class="input" v-model="caption" placeholder="Caption"> 
                            </figure>                                                
                        </div>
                    </div>                   
                </div>
                `
            },
            'v-b': {
                template:
                `
                <div>
                    <div class="columns">
                        <div class="column" v-for="n in 4">
                            <input type="text" class="input" v-model="text_opt" placeholder="text">                                                                                             
                        </div>
                    </div>
                </div>                
                `
            }
        },  
        watch: {
            // view: function(){
            //     if(this.view == 'v-a'){
            //         this.imgoptions.push({
            //             src: '',
            //             caption: ''
            //         }, 5)                       
            //     }
            // }
            // multiply option templates: https://stackoverflow.com/questions/12503146/create-an-array-with-same-element-repeated-multiple-times
        },
        computed: {
            imgs: function() {
                // return Array(1 * 4).fill(this.imgoptions) 
            }
        },
        methods: {                    
            // Add Image options x 1
            newQuestion() {                       
                this.questions.push({
                    title: '',
                    options: []
                })                                                
            },
            removeQuestion(index) {                       
                this.questions.splice(index, 1)                                                
            },

            addImage() {                       
                this.imgoptions.push({
                    src: '',
                    caption: ''
                })                                                            
            },                                
            addTexts() {                       
                this.textoptions.push({
                    name: ''
                })                                                             
            },
            removeImg(index) {                       
                this.imgoptions.splice(index, 1)                                                
            },               
            removeText(index) {                       
                this.textoptions.splice(index, 1)                                                
            },         

           onSubmit(){
               let formInput = new FormData();
                // tip
            //    formInput.append('tip_intro', this.tip_intro);
            //    axios.post('/tip.store', formInput);
           }            
        }             
    }

    // Credits
    // Dynamic Form with vue.js
    // https://www.youtube.com/watch?v=Efr7SUrBUQw
</script>


<style lang="css">

    .fade-enter-active, .fade-leave-active {
        transition: opacity .5s;
    }
    .fade-enter, .fade-leave-to /* .fade-leave-active below version 2.1.8 */ {
        opacity: 0;
    }   

    .component-fade-enter-active, .component-fade-leave-active {
        transition: opacity .3s ease;
    }
    .component-fade-enter, .component-fade-leave-to
    /* .component-fade-leave-active below version 2.1.8 */ {
        opacity: 0;
    }       
</style>