@extends('layouts.app')

@section('content')
    <form id="pay">
        <input type="text" name="number" class="card-number">
        <input type="number" name="exp_month" class="card-expiry-month">
        <input type="number" name="exp_year" class="card-expiry-year">
        <input type="text" name="cvc" class="card-cvc">
        <input type="submit" name="aaa" id="submit">
    </form>

    <form id="payment-form" url="{{ url('order') }}" method="post">
        {{ csrf_field() }}
    </form>
    <div class="payment-errors"></div>
@endsection

@section('script')
    <script type="text/javascript" src="https://js.stripe.com/v2/"></script>
    <script type="text/javascript">
        Stripe.setPublishableKey('pk_test_4MAOtgmmrKnX7XN1oTWwOuIl');
        $('#submit').on('click', function (e) {
            e.preventDefault();
            var card_number = $('.card-number').val();
            var card_cvc = $('.card-cvc').val();
            var card_expiry_month = $('.card-expiry-month').val();
            var card_expiry_year = $('.card-expiry-year').val();
            Stripe.card.createToken({
                number: card_number,
                cvc: card_cvc,
                exp_month: card_expiry_month,
                exp_year: card_expiry_year,
            }, function (status, response) {

                console.log(response);
                //return false;

                var $form = $('#payment-form');

                if (response.error) { // Problem!

                    // Show the errors on the form
                    $form.find('.payment-errors').text(response.error.message);
                    $form.find('button').prop('disabled', false); // Re-enable submission

                } else { // Token was created!
                    // Get the token ID:
                    var token = response.id;

                    // Insert the token into the form so it gets submitted to the server:
                    $form.append($('<input type="hidden" name="stripeToken" />').val(token));

                    // Submit the form:
//                    $form.get(0).submit();

                }
            })
        });


    </script>

@endsection