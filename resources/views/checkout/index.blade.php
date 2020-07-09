@extends('layouts.app')
@section('extra-meta')
    <meta name="csrf-token" content="{{ csrf_token() }}">
@endsection
@section('extra-script')
    <script src="https://js.stripe.com/v3/"></script>
@endsection


@section('content')
    {{ $clientSecret  }}
    <div class="flex justify-center items-center mt-5">
        <form action="{{ route('checkout.store') }}" method="POST" id="payment-form" class="w-1/5">
            @csrf
            <div id="card-element">
                <!-- Elements will create input elements here -->
            </div>

            <!-- We'll put the error messages in this element -->
            <div id="card-errors" role="alert" class="w-full text-red-500"></div>

            <button id="submit" class="bg-orange-500 text-white mt-12 w-full p-2">Pay</button>
        </form>
    </div>
@endsection

@section('extra-js')
    <script>
        var stripe = Stripe('pk_test_51H2LKjLH5WwIy3sFQmtavdopG125JguLKQPShqjgifSB9MopD6mkhnvILKMSvI1FzIzuBnqeBghqiewpi3Ngh51q00rQo7K3I1');
        var elements = stripe.elements();

        var style = {
            base: {
                color: "#32325d",
                fontFamily: '"Helvetica Neue", Helvetica, sans-serif',
                fontSmoothing: "antialiased",
                fontSize: "16px",
                "::placeholder": {
                    color: "#aab7c4"
                }
            },
            invalid: {
                color: "#fa755a",
                iconColor: "#fa755a"
            }
        };

        var card = elements.create("card", { style: style });
        card.mount("#card-element");

        card.on('change', ({error}) => {
            const displayError = document.getElementById('card-errors');
            if (error) {
                displayError.textContent = error.message;
            } else {
                displayError.textContent = '';
            }
        });

        var submitButton = document?.getElementById('submit');

        submitButton.addEventListener('click', function(ev) {
            ev.preventDefault();
            submitButton.disabled = true;

            stripe.confirmCardPayment("{{ $clientSecret }}", {
                payment_method: {
                    card: card
                }
            }).then(function(result) {
                if (result.error) {
                    // Show error to your customer (e.g., insufficient funds)
                    submitButton.disabled = false;
                    console.log(result.error.message);
                } else {
                    // The payment has been processed!
                    if (result.paymentIntent.status === 'succeeded') {
                        var paymentIntent = result.paymentIntent
                        var token = document.querySelector('meta[name=""csrf-token"]').getAttribute;
                        var form = document.getElementById('payment-form');
                        var url = form.action;
                        var redirect = '/merci';

                        fetch(url, {
                            headers: {
                                "Content-Type": "application/json",
                                "Accept": "application/json, text-plain, */*",
                                "X-Request-With": "XMLHTTPRequest",
                                "X-CSRF-TOKEN": token
                            },
                            method: 'post',
                            body: JSON.stringify({
                                paymentIntent: paymentIntent
                            })
                        }).then((data) => {
                            console.log(data)
                            // windows.location.href = redirect
                        }).catch(err => {
                            console.log(err)
                        })
                    }
                }
            });
        });
    </script>
@endsection
