<script>
    export default {
        // props: ['oddsdata'],

        data() {
            return {
                // tip
                match_title: [],
                sites: [],
                tip_intro: '',
                match_title: '',                
                cover_image: null,
                match_time: '',
                // stake
                bet_market: '',
                selectedBookmaker: '',
                selectedOdds: '',
                odds: '',
                stake_analysis: ''
            }
        }, 
        
        watch: {
            // match_title: function() {
            //     // Clear previously selected values
            //     this.sites = [];
            //     // Populate list of countries in the second dropdown
            //     if (this.match_title.length > 0) {
            //         this.sites = this.oddsdata['data']['events'][this.match_title]['sites']
            //     }
            // },
            // bookmaker: function() {
            //     // Clear previously selected values
            //     this.odds = [];
            //     // Populate list of countries in the second dropdown
            //     if (this.selectedBookmaker.length > 0) {
            //         this.odds = this.oddsdata['data']['events'][this.match_title]['sites'][this.selectedBookmaker]
            //     }
            // }              
        },

        methods: {
            onChange(e) {                       
                                  
                this.cover_image = e.target.files[0];

                // see more on: https://laracasts.com/series/lets-build-a-forum-with-laravel/episodes/65                
            },

           onSubmit(){
            //    this.match_time = this.oddsdata['data']['events'][this.match_title]['commence'];
               let formInput = new FormData();
                // tip
               formInput.append('tip_intro', this.tip_intro);
               formInput.append('match_title', this.match_title);
               formInput.append('cover_image', this.cover_image, this.cover_image.name);               
               formInput.append('match_time', this.match_time);               

               axios.post('/tip.store', formInput);
           }            
        }             
    }
</script>
