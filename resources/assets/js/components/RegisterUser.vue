<script>
    export default {

        data() {
            return {    
                view: 'v-a'
            }
        }, 

        components: {
            'v-a': {
                template: '<div></div>'
            },
            'v-b': {
                template:
                `
                <div id="stripeobj" onload="myFunction()">                  
                    <div class="cell example example3">
                    <p class="subtitle is-6 has-text-centered">Add Debit / Credit Card</p>                   
                        <div class="fieldset">
                            <div id="example3-card-number" class="field empty"></div>
                            <div id="example3-card-expiry" class="field empty half-width"></div>
                            <div id="example3-card-cvc" class="field empty half-width"></div> 
                            <input type="hidden">               
                        </div>
                    </div>                 
                </div>
                `
            }
        },                

        methods: {
           onSubmit(){

           }            
        }  
        
                   
    }
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
