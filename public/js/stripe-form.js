// $(document).ready(checkDiv);
$( window ).on( "load", checkDiv );

function checkDiv () {
    'use strict';
  
    if($('#stripeobj').is(':visible')){
    var stripe = Stripe('pk_test_11NZ6bs5wmE09dpSwxbaMGmR');      

    var elements = stripe.elements({
          fonts: [{ cssSrc: 'https://fonts.googleapis.com/css?family=Quicksand' },],
          locale: window.__exampleLocale,
    });
  
    var elementStyles = {
      base: {
        color: '#505050',
        fontWeight: 600,
        fontFamily: 'Quicksand, Open Sans, Segoe UI, sans-serif',
        fontSize: '16px',
        fontSmoothing: 'antialiased',
  
        ':focus': {
          color: '#424770',
        },
  
        '::placeholder': {
          color: '#9BACC8',
        },
  
        ':focus::placeholder': {
          color: '#CFD7DF',
        },
      },
      invalid: {
        color: '#fff',
        ':focus': {
          color: '#FA755A',
        },
        '::placeholder': {
          color: '#FFCCA5',
        },
      },
    };
  
    var elementClasses = {
      focus: 'focus',
      empty: 'empty',
      invalid: 'invalid',
    };
    
    // card number
    var cardNumber = elements.create('cardNumber', {
      style: elementStyles,
      classes: elementClasses,
    });
    cardNumber.mount('#example3-card-number');
  
    // card expiry date
    var cardExpiry = elements.create('cardExpiry', {
      style: elementStyles,
      classes: elementClasses,
    });
    cardExpiry.mount('#example3-card-expiry');
    
    // card cvc number
    var cardCvc = elements.create('cardCvc', {
      style: elementStyles,
      classes: elementClasses,
    });
    cardCvc.mount('#example3-card-cvc');

      // Handle real-time validation errors from the card Element.
      cardNumber.addEventListener('change', function(event) {
        var displayError = document.getElementById('card-errors');
        if (event.error) {
          displayError.textContent = event.error.message;
        } else {
          displayError.textContent = '';
        }
      });    
  

    cardExpiry.addEventListener('change', function(event) {
      var displayError = document.getElementById('card-expiry-errors');
      if (event.error) {
        displayError.textContent = event.error.message;
      } else {
        displayError.textContent = '';
      }
    }); 

    cardCvc.addEventListener('change', function(event) {
      var displayError = document.getElementById('card-cvc-errors');
      if (event.error) {
        displayError.textContent = event.error.message;
      } else {
        displayError.textContent = '';
      }
    }); 

    // Handle form submission.
    var form = document.getElementById('stripe-form');
    form.addEventListener('submit', function(event) {
      event.preventDefault();

      stripe.createToken(cardNumber).then(function(result) {
        if (result.error) {
          // Inform the user if there was an error.
          var errorElement = document.getElementById('card-errors');
          errorElement.textContent = result.error.message;
        } else {
          // Send the token to your server.
          stripeTokenHandler(result.token);
        }
      });
    });

   function stripeTokenHandler(token) {
      // Insert the token ID into the form so it gets submitted to the server
      var form = document.getElementById('stripe-form');
      var hiddenInput = document.createElement('input');
      hiddenInput.setAttribute('type', 'hidden');
      hiddenInput.setAttribute('name', 'stripeToken');
      hiddenInput.setAttribute('value', token.id);
      form.appendChild(hiddenInput);

      // Submit the form
      form.submit();
    }
  }
  else {
    setTimeout(checkDiv, 0); 
}
}
