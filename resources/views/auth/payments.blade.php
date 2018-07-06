@extends('layouts.main')

@section('content')

<!-- page title -->
<div class="register-view">
        <br><br>      

        <div class="section">
        <div class="original notice default-clear">
            <div class="container">
                <div class="columns">
                    <div class="column is-4 is-offset-4">
                        <p class="title is-7">STEP <b>2</b> OF <b>2</b></p>                         
                        <p class="title is-5"><b>Set up your payment.</b></p>                     			
                    </div>
                </div>
                <div class="columns">
                    <div class="column is-4 is-offset-4">                  
                        <p class="subtitle is-6">
                            No commitments. Cancel anytime before <b>DD/MM/YYYY</b>.
                        </p>	
                        <p class="subtitle is-6">
                            We'll email you <b>3 days</b> before your free month ends.
                        </p>	                        		
                    </div>
                </div>                
            </div>
        </div>        

        <div class="container">
        
            <form action="{{ url('/register') }}" method="POST" id="stripe-form">
                {{ csrf_field() }}

                <br/>

                <!-- Debit card -->
                <div class="columns">
                    <div class="column is-4 is-offset-4">
                        <p class="subtitle is-5"> <b>Debit / Credit Card</b> </p>   
                            <div id="stripeobj" onload="myFunction()">                  
                                <div class="cell example example3">   
                                    
                                    <div class="fieldset">
                                        <input id="example3-name" data-tid="elements_examples.form.name_label" class="field" type="text" placeholder="Name" required="" autocomplete="name">
                                        <input id="example3-email" data-tid="elements_examples.form.email_label" class="field" type="email" placeholder="Email" required="" autocomplete="email">
                                        <input id="example3-phone" data-tid="elements_examples.form.phone_label" class="field" type="tel" placeholder="Phone" required="" autocomplete="tel">
                                    </div>  

                                    <div class="fieldset">
                                        <div id="example3-card-number" class="field empty"></div>
                                        <div id="example3-card-expiry" class="field empty half-width"></div>
                                        <div id="example3-card-cvc" class="field empty half-width"></div> 
                                        <input type="hidden">               
                                    </div>
                                </div>                 
                            </div>

                            <div class="field">
                                <button type="submit" class="custom_button">
                                    <small>START MEMBERSHIP</small>
                                    <br/>
                                    <span class="subtitle is-6">PAY AFTER FREE MONTH</span>                          
                                </button>
                            </div>											

                    </div>
                </div>  

                <p class="has-text-centered">OR</p><br/>
                
                </div>                  

            </form>

                <!-- Paypal -->
                <div class="columns">
                    <div class="column is-4 is-offset-4">
                        <p class="subtitle is-5"> <b>Continue with Paypal</b> </p>   
                        <div id="paypal-button"></div>        
                        
                        <div id="dropin-container"></div>
  <button id="submit-button">Request payment method</button>
  
  <script>
    var button = document.querySelector('#submit-button');

    braintree.dropin.create({
      authorization: 'CLIENT_TOKEN_FROM_SERVER',
      container: '#dropin-container'
    }, function (createErr, instance) {
      button.addEventListener('click', function () {
        instance.requestPaymentMethod(function (err, payload) {
          // Submit payload.nonce to your server
        });
      });
    });
  </script>
                    </div>            
                </div>        
        </div>
    </div>    
</div>

@endsection