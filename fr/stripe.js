

// plan normal partagé 10€
(function() {
  //var stripe = Stripe('pk_live_fbrA70Miz7CAyCIEnxceMDes007Uhhv2d7');
  var stripe = Stripe('pk_test_GEYtYKqzMWA0c0XFLEPdPOUN00ARp2uihb');

  var checkoutButton = document.getElementById('shared_normal');
  checkoutButton.addEventListener('click', function () {
    // When the customer clicks on the button, redirect
    // them to Checkout.
    stripe.redirectToCheckout({
      items: [{plan: 'plan_H8xAR7Cw0UMIRp', quantity: 1}],

      // Do not rely on the redirect to the successUrl for fulfilling
      // purchases, customers may not always reach the success_url after
      // a successful payment.
      // Instead use one of the strategies described in
      // https://stripe.com/docs/payments/checkout/fulfillment
      successUrl: 'https://agorakit.org/success',
      cancelUrl: 'https://agorakit.org/canceled',
    })
    .then(function (result) {
      if (result.error) {
        // If `redirectToCheckout` fails due to a browser or network
        // error, display the localized error message to your customer.
        var displayError = document.getElementById('error-message');
        displayError.textContent = result.error.message;
      }
    });
  });
})();


// plan soutient partagé 20 €
(function() {

  var stripe = Stripe('pk_test_GEYtYKqzMWA0c0XFLEPdPOUN00ARp2uihb');
  
  var checkoutButton = document.getElementById('shared_sponsor');
  checkoutButton.addEventListener('click', function () {
    // When the customer clicks on the button, redirect
    // them to Checkout.
    stripe.redirectToCheckout({
      items: [{plan: 'plan_H8x8csKQj2I5SM', quantity: 1}],

      // Do not rely on the redirect to the successUrl for fulfilling
      // purchases, customers may not always reach the success_url after
      // a successful payment.
      // Instead use one of the strategies described in
      // https://stripe.com/docs/payments/checkout/fulfillment
      successUrl: 'https://agorakit.org/success',
      cancelUrl: 'https://agorakit.org/canceled',
    })
    .then(function (result) {
      if (result.error) {
        // If `redirectToCheckout` fails due to a browser or network
        // error, display the localized error message to your customer.
        var displayError = document.getElementById('error-message');
        displayError.textContent = result.error.message;
      }
    });
  });
})();
