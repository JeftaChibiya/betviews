@extends('layouts.main')
@section('content')

<?php
    use \Illuminate\Support\Facades\Input;
?>

<style>
	a#braintree-paypal-button {margin-top: 48px;}
</style>

<div class="container">
    <section class="section">
        <p class="title is-4 has-text-centered">Testing 101</p> 
	@if( Input::get( 'message' ) )
	@if( Input::get( 'success', false ) )
	<div class="alert alert-success">
		@else
		<div class="alert alert-danger">
			@endif
			<?php echo urldecode(  Input::get( 'message' ) ); ?>
		</div>
		@endif

		{!! Form::open(['url' => 'subscription', 'method' => 'post', 'id' => 'checkout'])!!}

		<div class="row">
			<label for="plan">
				Choose Plan
			</label>
		</div>
		<div class="row">

			<div class="col-md-9 col-sm-12">
				<select name="plan" id="plan" class="form-control">
					<option value="1" data-price="5.00">
						Option 1
					</option>
					<option value="2" date-price="10.00" <?php if( 'two' == Input::get( 'plan', false ) ) : echo 'selected'; endif; ?> >
						Option 2
					</option>
				</select>
			</div>
			
		</div>
		<div class="row">
			<div id="paypal" class="col-sm-12 col-md-6"  aria-live="assertive" style="">

			</div>
			<a id="cc" class="col-sm-12 col-md-6 btn btn-secondary btn-green"  href="" title="Click to pay by Credit Card">
				Pay By Credit Card
			</a>
		</div>


		<div id="cc-info" style="display: none;visibility: hidden" aria-hidden="true">
			<div class="form-group">
				<label for="number">
					Credit Card Number
				</label>
				<div id="number" class="form-control"></div>
			</div>

			<div class="row">
				<div class="col-md-3 col-sm-12">
					<div class="form-group">
						<label for="expiration-date">
							Expiration Date
						</label>
						<div id="expiration-date" class="form-control"></div>
					</div>
				</div>

				<div class="col-md-3 col-sm-12">
					<div class="form-group">
						<label for="cvv">
							Secret Code (CVV)
						</label>
						<div id="cvv" class="form-control"></div>
					</div>
				</div>

				<div class="col-md-3 col-sm-12">
					<div class="form-group">
						<label>
							Postal Code
						</label>
						<div id="postal-code" class="form-control"></div>
					</div>
				</div>
			</div>
			<div class="row">
				<input type="submit" value="Sign Up" class="btn-primary btn-orange col-sm-12" />
			</div>
		</div>

		{!! Form::close() !!}
        </section>
	</div>
    <script src="https://js.braintreegateway.com/v2/braintree.js"></script>
 
 <script>
     $( '#cc' ).on( 'click', function(e) {
         $( '#cc-info' ).show().attr( 'aria-hidden', true ).css( 'visibility', 'visible' );
     });
     
     var url = "<?php echo url('subscription' ); ?>";
     var paypalEl = document.getElementById( 'paypal' );
     braintree.setup("{{ $clientToken }}", "custom", {
                 paypal: {
                     container: paypalEl,
                     singleUse: false,
                     billingAgreementDescription: 'Your agreement description',
                     locale: 'en_us',
                     enableShippingAddress: false,
                     button: {
                         type: 'checkout'
                     }
                 },
                 dataCollector: {
                     paypal: true
                 },
                 onPaymentMethodReceived: function (obj) {
                     $.ajax({
                         method: 'post',
                         url: url,
                         data: {
                             payment_method_nonce: obj.nonce,
                             plan: $( '#plan').val()
                         },
                         headers: {
                             'X-CSRF-Token': $('input[name="_token"]').val()
                         }
                     }).success( function( r ){
                         window.location = url;
                     }).error( function( r ){
                         alert( 'Error' );
                     } );
                 }
             }
     );
     braintree.setup("{{ $clientToken }}", "custom", {
                 id: "checkout",
                 hostedFields: {
                     number: {
                         selector: "#number"
                     },
                     postalCode: {
                         selector: '#postal-code'
                     },
                     expirationDate: {
                         selector: "#expiration-date",
                         placeholder: "00/00"
                     },
                     cvv: {
                         selector: "#cvv"
                     }
                 }
             }
     );
 </script>
@endsection