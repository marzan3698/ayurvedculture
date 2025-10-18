@extends('frontend.layouts.master')
@section('title', 'How to pay')
@push('styles')
    <style>
        /* --- Main Section Styles --- */
        .how-to-pay-section {
            padding: 60px 0;
            background-color: #f7f5f2;
            /* Light beige background */
        }

        .section-title {
            text-align: center;
            font-size: 28px;
            font-weight: bold;
            color: #333;
            margin-bottom: 15px;
            text-transform: uppercase;
        }

        .section-subtitle {
            text-align: center;
            font-size: 16px;
            color: #777;
            margin-bottom: 40px;
            max-width: 600px;
            margin-left: auto;
            margin-right: auto;
        }

        /* --- Payment Options Grid --- */
        .payment-options-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(320px, 1fr));
            gap: 30px;
        }

        .payment-option-card {
            background-color: #fff;
            border: 1px solid #e0d9cf;
            border-radius: 12px;
            padding: 30px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .payment-option-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.08);
        }

        .payment-logo {
            height: 40px;
            margin-bottom: 20px;
        }

        .payment-option-card h3 {
            margin: 0 0 15px 0;
            font-size: 20px;
        }

        .payment-instructions {
            padding-left: 20px;
            /* Indent the list */
            font-size: 15px;
            line-height: 1.7;
            color: #555;
        }

        .payment-instructions li {
            margin-bottom: 10px;
        }

        .payment-instructions strong {
            color: #d9534f;
            /* Highlight important numbers/text */
        }
    </style>
@endpush
@section('content')
    <section class="how-to-pay-section">
        <div class="container">
            <h2 class="section-title">How to Pay?</h2>
            <p class="section-subtitle">We offer multiple convenient payment methods for our customers across Bangladesh.
                Please choose the one that suits you best.</p>

            <div class="payment-options-grid">

                <div class="payment-option-card">
                    <img src="https://i.imgur.com/39gA6u7.png" alt="bKash Logo" class="payment-logo">
                    <h3>Pay with bKash</h3>
                    <ol class="payment-instructions">
                        <li>Go to your bKash App and select 'Send Money'.</li>
                        <li>Enter our bKash merchant number: <strong>017XX-XXXXXX</strong></li>
                        <li>Enter the total amount of your order.</li>
                        <li>Use your Order ID as the reference.</li>
                        <li>Confirm the transaction with your PIN.</li>
                    </ol>
                </div>

                <div class="payment-option-card">
                    <img src="https://i.imgur.com/r6T1pna.png" alt="Nagad Logo" class="payment-logo">
                    <h3>Pay with Nagad</h3>
                    <ol class="payment-instructions">
                        <li>Go to your Nagad App and select 'Send Money'.</li>
                        <li>Enter our Nagad merchant number: <strong>018XX-XXXXXX</strong></li>
                        <li>Enter the total amount of your order.</li>
                        <li>Use your Order ID as the reference.</li>
                        <li>Confirm the transaction with your PIN.</li>
                    </ol>
                </div>

                <div class="payment-option-card">
                    <img src="https://i.imgur.com/02Q865s.png" alt="Cash on Delivery Icon" class="payment-logo">
                    <h3>Cash on Delivery (COD)</h3>
                    <ul class="payment-instructions" style="list-style-type: none; padding-left: 0;">
                        <li>You can pay in cash to the delivery agent when you receive your order.</li>
                        <li>Please ensure you have the exact amount as our delivery agents may not carry change.</li>
                        <li>This service is available in all major cities of Bangladesh.</li>
                    </ul>
                </div>

                <div class="payment-option-card">
                    <img src="https://i.imgur.com/Gbe0Vpu.png" alt="Bank Icon" class="payment-logo">
                    <h3>Bank Deposit / EFTN</h3>
                    <ol class="payment-instructions">
                        <li>Deposit the total amount to our bank account below.</li>
                        <li><strong>Bank Name:</strong> The City Bank Ltd.</li>
                        <li><strong>Account Name:</strong> Sanyasi Ayurveda BD</li>
                        <li><strong>Account No:</strong> <strong>1234567890123</strong></li>
                        <li><strong>Branch:</strong> Rajbari Branch, Dhaka Division</li>
                        <li>After depositing, please call us to confirm your payment.</li>
                    </ol>
                </div>

                <div class="payment-option-card">
                    <img src="https://i.imgur.com/xve7w4B.png" alt="Visa and Mastercard Logos" class="payment-logo">
                    <h3>Debit / Credit Card</h3>
                    <ul class="payment-instructions" style="list-style-type: none; padding-left: 0;">
                        <li>We accept all local and international Visa, MasterCard, and American Express cards.</li>
                        <li>Select 'Online Payment' at checkout to pay securely through our payment gateway.</li>
                    </ul>
                </div>

                <div class="payment-option-card">
                    <img src="https://i.imgur.com/P4jI9eD.png" alt="Rocket Logo" class="payment-logo">
                    <h3>Pay with Rocket</h3>
                    <ol class="payment-instructions">
                        <li>Dial *322# from your mobile.</li>
                        <li>Select the 'Send Money' option.</li>
                        <li>Enter our Rocket account number: <strong>019XX-XXXXXX</strong></li>
                        <li>Enter the total amount and your Order ID as reference.</li>
                        <li>Confirm with your Rocket PIN.</li>
                    </ol>
                </div>

            </div>
        </div>
    </section>
@endsection
