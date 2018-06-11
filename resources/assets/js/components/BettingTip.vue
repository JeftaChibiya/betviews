<script>
    import Wysiwyg from '../components/Wysiwyg.vue';
    
    export default {
        props: ['oddsdata'],

        data() {
            return {
                // tip
                sites: [],
                tip_intro: '',
                match_title: '',                
                cover_image: null,
                match_time: '',
                side_one: '',
                side_two: '',
                // stake
                bet_market: '',
                bookmaker: '',
                odds: '',
                stake_analysis: ''
            }
        }, 
        
        watch: {
            match_title: function() {
                // Clear previously selected values
                this.sites = [];
                // Populate list of sites and mactch time
                if (this.match_title.length > 0) {
                    this.sites = this.oddsdata['data']['events'][this.match_title]['sites']
                    this.match_time = this.oddsdata['data']['events'][this.match_title]['commence']
                }
            },
            bookmaker: function() {
                // Clear previously selected values
                this.selectedOdds = [];
                // Populate list of countries in the second dropdown
                if (this.bookmaker.length > 0) {
                    this.selectedOdds = this.oddsdata['data']['events'][this.match_title]['sites'][this.bookmaker]
                }
            }              
        },

        methods: {
            onChange(e) {                       
                                  
                this.cover_image = e.target.files[0];

                // see more on: https://laracasts.com/series/lets-build-a-forum-with-laravel/episodes/65                
            },

           onSubmit(){
               this.match_time = this.oddsdata['data']['events'][this.match_title]['commence'];
               let formInput = new FormData();
                // tip
               formInput.append('tip_intro', this.tip_intro);
               formInput.append('match_title', this.match_title);
               formInput.append('cover_image', this.cover_image, this.cover_image.name);               
               formInput.append('match_time', this.match_time);
               formInput.append('side_one', this.oddsdata['data']['events'][this.match_title]['participants'][0]);
               formInput.append('side_two', this.oddsdata['data']['events'][this.match_title]['participants'][1]);           
               
               // stake
               formInput.append('bookmaker', this.bookmaker);
               formInput.append('bet_market', this.bet_market);
               formInput.append('odds', this.bookmaker);   
               formInput.append('stake_analysis', this.stake_analysis);                                          

               axios.post('/tip.store', formInput);
           }            
        }             
    }
</script>
