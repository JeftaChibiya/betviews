@extends('layouts.admin')

@section('content')

<dummy  inline-template>
    <section class="section">
        <p class="title is-4 has-text-centered">New Tip</p>    
        <div class="columns">
            <div class="column"></div>
            <div class="column is-6">

              <form method="POST" @submit.prevent="onSubmit">
                  <p class="subtitle is-4">Tip Details</p>
                    <div class="field">
                    <label class="label">Select Match (API)</label>
                        <div class="control">
                            <div class="select">
                                <select v-model="match_title">
                                    <option value="">Please select event</option>
                                    <!-- <option v-for="(event, key) in oddsdata['data']['events']" :value="key">
                                        @{{ event.participants[0] }} & @{{ event.participants[1] }}
                                    </option>                                        -->
                                </select>
                            </div>
                        </div>            
                    </div>                    
                    <div class="field">
                        <label class="label">Intro</label>
                        <div class="control">
                            <input class="input" type="text" v-model="tip_intro" placeholder="Text input">
                        </div>
                    </div>

                    <div class="field">
                        <label class="label">Cover image</label>
                        <div class="control">
                            <input type="file" accept="image/*" @change="onChange" class="input">
                        </div>
                    </div>

                    <br/>

                    <p class="subtitle is-4">Add Stakes</p> 


                    <div class="columns">
                    <div class="column">
                        <label class="label">Market</label>              
                        <div class="select">
                            <select v-model="bet_market">
                                <option>Select market</option>                            
                                <option>Head to Head</option>
                                <option>Actual Score</option>                      
                            </select>
                        </div>
                    </div>
                     <div class="column">
                        <label class="label">Bookmaker</label>              
                        <div class="select">
                            <select>
                                <option value="">Select bookmaker</option>
                                <!-- <option v-for="(site, key) in sites" :value="key"> 
                                    @{{ key | capitalize }}                                                                    
                                </option> -->
                            </select>
                        </div>
                       </div>                    
                        <div class="column">
                            <label class="label">odds from </label>
                                <div class="select is-fullwidth">
                                    <select>
                                        <option value="">Select bookmaker</option>
                                        <!-- <option v-for="odd in odds" :value="odd"> 
                                            @{{ odd['h2h'][0] }}, 
                                            @{{ odd['h2h'][1] }}, 
                                            @{{ odd['h2h'][2] }}                                                                         
                                        </option> -->
                                    </select>
                                </div>
                        </div>               
                    </div>

                    <br/>

                    <div class="field">
                        <label class="label">Stake Analysis</label>            
                        <textarea v-model="stake_analysis" class="input textarea" placeholder="Why do you recommend this stake"></textarea>
                    </div>                                        
                    
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
        </div>
    </section>
</dummy>

@endsection