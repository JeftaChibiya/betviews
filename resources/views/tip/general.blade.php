@extends('layouts.admin')

@section('content')

<general-tip inline-template>
    <section class="section">
        <p class="title is-4 has-text-centered">New General Tip</p>    
        <div class="columns">
            <div class="column"></div>
            <div class="column is-6">

              <form method="POST" @submit.prevent="onSubmit">
                  <p class="subtitle is-4">Tip Details</p>

                  <div id="mygallery"></div>

                    <div class="field">
                        <label class="label">Title</label>
                        <div class="control">
                            <input type="text" class="input" v-model="tip_intro" placeholder="World Cup 2018: Group A tips" :should-clear="completed">
                        </div>            
                    </div>
                    
                    <div class="field">
                        <label class="label">Topic</label>
                            <select id="select2multiple" v-model="selected" @change="onSelected($event.target.value)" multiple="multiple" style="width: 100%">                              
                                @foreach($tags as $id => $name)
                                    <option :value="{{ $id }}">{{ $name }}</option>
                                @endforeach
                            </select>                        
                    </div>

                    <div class="field">
                        <label class="label">Cover image</label>
                        <div class="control">
                            <input type="file" accept="image/*" @change="onChange" class="input">
                        </div>
                    </div>

                    <div class="field">
                    <label class="label">Subtitle</label>
                        <div class="control">
                            <input type="text" class="input" v-model="subtitle" placeholder="We take a look at Group A and provide our best insight">
                        </div>            
                    </div>                     

                    <div class="field">
                        <label class="label">Content</label>                        
                        <wysiwyg :name="tip_body" v-model="tip_body" placeholder="So here is the thing..." :should-clear="completed"></wysiwyg>

                        <!-- <div class="control">
                            <textarea class="textarea" type="text" v-model="tip_body" placeholder="Some explanation..."></textarea>
                        </div> -->
                    </div>                    

                    <br/>                                       
                    
                    <div class="field is-grouped">
                        <div class="control">
                            <button type="submit" class="button is-link">Save</button>
                        </div>
                        <div class="control">
                            <button class="button is-text">Cancel</button>
                        </div>
                    </div>                
                </form>            
            </div>
            <div class="column"></div>
            <vue-up></vue-up>              
        </div> 
    </section>
</general-tip>

@endsection