

//stripe_key = 'pk_test_GEYtYKqzMWA0c0XFLEPdPOUN00ARp2uihb';
stripe_key = 'pk_live_fbrA70Miz7CAyCIEnxceMDes007Uhhv2d7';




// Dédié normal
(function() {

  var stripe = Stripe(stripe_key);

  var checkoutButton = document.getElementById('dedicated_normal');
  checkoutButton.addEventListener('click', function () {
    // When the customer clicks on the button, redirect
    // them to Checkout.
    stripe.redirectToCheckout({
      items: [{plan: 'plan_HCjSGiP34NX1YP', quantity: 1}],

      // Do not rely on the redirect to the successUrl for fulfilling
      // purchases, customers may not always reach the success_url after
      // a successful payment.
      // Instead use one of the strategies described in
      // https://stripe.com/docs/payments/checkout/fulfillment
      successUrl: 'https://agorakit.org/fr/success.php',
      cancelUrl: 'https://agorakit.org/fr/canceled.php',
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




// Dédié sponsor
(function() {

  var stripe = Stripe(stripe_key);

  var checkoutButton = document.getElementById('dedicated_sponsor');
  checkoutButton.addEventListener('click', function () {
    // When the customer clicks on the button, redirect
    // them to Checkout.
    stripe.redirectToCheckout({
      items: [{plan: 'plan_HCjTr5IjE1mLg4', quantity: 1}],

      // Do not rely on the redirect to the successUrl for fulfilling
      // purchases, customers may not always reach the success_url after
      // a successful payment.
      // Instead use one of the strategies described in
      // https://stripe.com/docs/payments/checkout/fulfillment
      successUrl: 'https://agorakit.org/fr/success.php',
      cancelUrl: 'https://agorakit.org/fr/canceled.php',
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
