@extends('layouts.main')
@section('title', 'Support')

@section('content')

<div class="container">          
    <section class="section">
        <div class="margin-down">
            <p class="title is-size-2-desktop is-size-4-mobile has-text-centered"><b>Have a Question?</b></p>            
        </div>

        <div class="margin-down">
            <p class="subtitle is-size-5-desktop is-size-6-mobile has-text-centered">
                Write us your question or concern, and we'll reply within 48 hours.
            </p>              
        </div>

        <div class="margin-down">
        <div class="columns">
            <div class="column"></div>
            <div class="column is-6">
                <div class="field">
                    <div class="control">
                        <input class="input is-medium" type="text" placeholder="What's your name?">
                    </div>
                </div>

                <div class="field">
                    <div class="control has-icons-left has-icons-right">
                        <input class="input is-medium" type="email" placeholder="What email should we respond to?" value="">
                        <span class="icon is-small is-left">
                        <i class="fas fa-envelope"></i>
                        </span>
                    </div>
                </div>

                <div class="field">
                    <div class="control">
                        <textarea class="textarea is-medium lined-up" placeholder="Okay, what's your question?"></textarea>
                    </div>
                </div>

                <div class="field">
                    <div class="control">
                        <input class="input is-medium" type="text" placeholder="What's 2 + 3?">
                    </div>
                </div>                

                <div class="field is-grouped">
                    <div class="control">
                        <button class="button is-dark">SEND</button>
                    </div>
                </div>                
            </div>
            <div class="column"></div>
        </div>            
        </div>               
    </section>
</div>   

    <div class="margin-down">
        <div class="container">
        <p class="title is-size-2-desktop is-size-4-mobile has-text-centered">
            <b>Before you hit send ...</b>
        </p>               
        </div>         
    </div>         
    <div class="margin-down">
        <div class="container">
            <p class="subtitle is-size-5-desktop is-size-6-mobile has-text-centered">
                Does your question sound similar to these FAQs below?
            </p>     
            
<div class="tile is-ancestor">
  <div class="tile is-half is-vertical is-parent">
    <div class="tile is-child box">
      <p class="title is-5">My account has been cancelled, how do I resume it?</p>
      <p>
          Stress not! Login into account & enter your payment details. 
          If the last payment from your account was made within the last 30 days, 
          your account will be resumed right away. 
      </p>
    </div>
    <div class="tile is-child box">
      <p class="title is-5">What time do you post new tips?</p>
      <p>
        We aim to publish new tips on the site by 5pm every weekday, & by 12pm on Saturdays     
      </p>
    </div>
  </div>
  <div class="tile is-half is-vertical is-parent">
  <div class="tile is-child box">
      <p class="title is-5">Can I get tips via email or SMS?</p>
      <p>Not at this time, but you will be able to in the near future</p>
    </div>
    <div class="tile is-child box">
      <p class="title is-5">How much do charge for membership?</p>
      <p>
          £4.99 per month. In the event of you leaving us, 
          we will keep your account active for the rest of the month from the time you've requested to cancel your account
      </p>
    </div>
  </div>
</div>            
        </div>                        
    </div> 

@endsection