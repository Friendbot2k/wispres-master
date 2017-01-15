@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>
                <div class="panel-body">
                    @include('layouts.messages')
                    <div class="payment-errors"></div>
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}"
                          id="register">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name"
                                       value="{{ old('name') }}">

                                @if ($errors->has('name'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email"
                                       value="{{ old('email') }}">

                                @if ($errors->has('email'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password">

                                @if ($errors->has('password'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control"
                                       name="password_confirmation">

                                @if ($errors->has('password_confirmation'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('promo_code') ? ' has-error' : '' }}">
                            <label for="promo_code" class="col-md-4 control-label">Promo Code</label>

                            <div class="col-md-6">
                                <input id="promo_code" type="text" class="form-control"
                                       name="promo_code">

                                @if ($errors->has('promo_code'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('promo_code') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('status') ? ' has-error' : '' }}">
                            <label for="status" class="col-md-4 control-label">Status</label>

                            <div class="col-md-6 ">
                                <div>
                                    Gold<input id="status" type="radio" name="status" value="gold" checked="checked">
                                    Silver<input id="status" type="radio" name="status" value="silver">
                                </div>
                                @if ($errors->has('status'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('status') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('payment') ? ' has-error' : '' }}">
                            <label for="payment" class="col-md-4 control-label">Pay With </label>

                            <div class="col-md-6 ">
                                <div>
                                    PayPal<input id="paypal" type="radio" name="payment" value="paypal" checked>
                                    CreditCard<input id="card" type="radio" name="payment" value="card">
                                </div>
                                @if ($errors->has('payment'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('payment') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <button id="submit-form" type="submit" class="hidden"></button>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button id="submit" type="button" class="btn btn-primary">
                                    <i class="fa fa-btn fa-user"></i> Register
                                </button>
                            </div>
                        </div>
                    </form>

                    <button type="button" class="hidden" data-toggle="modal"
                            data-target=".bd-example-modal-sm">Small modal
                    </button>


                    <div class="modal fade bd-example-modal-sm" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    <h4 class="modal-title" id="myModalLabel">Modal title</h4>
                                </div>
                                <div class="modal-body">
                                    <form  id="pay">
                                        <input type="text" name="number" class="card-number">
                                        <input type="number" name="exp_month" class="card-expiry-month">
                                        <input type="number" name="exp_year" class="card-expiry-year">
                                        <input type="text" name="cvc" class="card-cvc">
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button id="modal-button" type="button" class="btn btn-primary" data-dismiss="modal">Save changes</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
<script type="text/javascript" src="https://js.stripe.com/v2/"></script>
<script type="text/javascript">
    Stripe.setPublishableKey('{{env('STRIPE_KEY')}}');
    $('#submit').on('click', function (e) {
        e.preventDefault();
        if ($('input#paypal').is(':checked')) {
            console.log(22);
            var $form = $('#register');
            $('#submit-form').click();
        }

        else {
            if ($('input#card').is(':checked')) {
                $('.panel-body >.hidden').click();
            }

            $('#modal-button').on('click',function () {
                stripe();
            })

        }
    });

    function openStripeModal()
    {
        $('.bd-example-modal-sm').show();
    }

    function stripe()
    {
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

            var $form = $('#register');
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
                $('#submit-form').click();

            }
        })
    }


</script>

@endsection
