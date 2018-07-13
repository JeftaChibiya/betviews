<template>
    <div>
        <nav id="right-menu" class="slideout-menu slideout-menu-right">
            <header>
                <div class="menu-brand">
                    <p class="title is-5 is_white">New Topic</p>
                </div>                    
            </header>
            <br/>
            
            <form method="POST" @submit.prevent="onSubmit">
                <div class="field">
                    <label for="name">Name</label>
                    <input class="input" v-model="name" placeholder="Premier League"></input>
                </div>

                <div class="field">
                    <button type="submit" class="button is-light is-wide">SAVE</button>
                </div>
            </form>    
        </nav>       
    </div> 
</template>


<script>
    export default {

        data() {
            return {
                // tag
                name: '', 
            }
        }, 

        methods: {          

           onSubmit(){
               let formInput = new FormData();

                // tip
               formInput.append('name', this.name);

               axios.post('/tag.store', formInput)
                  .then(                      
                    this.$popup({ 
                       message: 'New Topic Added!',
                        color           : '#ffd480',
                        backgroundColor : 'rgba(0, 0, 0, 0.6)',
                        delay           : 20                    
                    },
                        this.completed = true
                    ));
           }            
        }                    
    }
</script>