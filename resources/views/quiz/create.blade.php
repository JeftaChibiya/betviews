@extends('layouts.admin')

@section('content')


<new-quiz inline-template>
    <div>
        <br/>
        <!-- quiz.create -->
        <div class="container">   
            <div class="columns">
                <div class="column"></div>
                <div class="column is-8">
                    <div class="card no_box_shadow">
                        <div class="card-content">
                            <br/>

                            <!-- Example: http://www.bbc.co.uk/programmes/articles/16bRZmJV2HtQRGjtXHL9L0C/a-question-of-sport-quiz -->
                            

                            <form method="POST" @submit.prevent="onSubmit" autocomplete="off">
                                {{ csrf_field() }}                           

                                <div class="field flat_input">
                                    <input type="text" name="title" class="input is-large" placeholder="Untitled Quiz">
                                </div>
                                <div class="field flat_input">
                                    <textarea name="desc" id="" class="textarea" rows="2" placeholder="Description...sourced from Question of Sport"></textarea>
                                </div>                         

                                <hr/>

                                <div class="field">
                                    <button class="button is-light with_ripple" @click="newQuestion">ADD QUESTION</button>
                                </div>

                                <div class="notification is-light" v-for="(question, index) in questions" :key="index" v-show="true">
                                    <button class="delete" @click="removeQuestion"></button>
                                    <div class="field flat_input">
                                        <input type="text" class="input" placeholder="Question">                                
                                    </div>  
                                    <div class="field">
                                        <div class="level is-mobile">
                                            <div class="level-left">
                                                <div class="level-item">Add Options:</div>
                                                <div class="level-item"><a @click="view = 'v-a'" class="is_link"> Images</a></div>
                                                <div class="level-item"><a @click="view = 'v-b'" class="is_link"> Text</a></div>
                                            </div>
                                        </div>

                                        <!-- Options: images or text -->
                                        <transition name="component-fade" mode="out-in">
                                            <component v-bind:is="view"></component>
                                        </transition>  

                                        @{{ imgs }}

                                    </div>       
                                </div>                          

                                <br/>

                                <div class="field">
                                    <a href="/question/create" class="button is-dark is-medium with_ripple">SAVE</a>
                                </div>
                            </form>                     
                        </div>
                    </div>
                </div>
                <div class="column"></div>
            </div>
        </div>    
    </div>
</new-quiz>


@endsection