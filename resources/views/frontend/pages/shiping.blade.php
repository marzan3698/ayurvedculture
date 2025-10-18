@extends('frontend.layouts.master')
@section('title', 'Shipping & Cancellation')
@push('styles')
    <style>
        .policy-section {
            background-color: #fff;
            padding: 60px 0;
        }

        .section-header {
            text-align: center;
            margin-bottom: 40px;
        }

        .section-header h2 {
            font-size: 28px;
            font-weight: bold;
            text-transform: uppercase;
            color: #333;
            margin: 0 0 10px 0;
        }

        .section-header .last-updated {
            font-size: 14px;
            color: #888;
            font-style: italic;
        }

        .policy-block {
            margin-bottom: 40px;
        }

        .policy-block h3 {
            font-size: 22px;
            color: #000466;
            /* Theme color */
            margin-bottom: 20px;
            padding-bottom: 10px;
            border-bottom: 2px solid #f0f0f0;
        }

        .policy-block h4 {
            font-size: 18px;
            color: #333;
            margin-bottom: 10px;
        }

        .policy-block p,
        .policy-block ul {
            font-size: 16px;
            line-height: 1.8;
            margin-bottom: 20px;
        }

        .policy-block ul {
            padding-left: 20px;
        }

        .policy-block li {
            margin-bottom: 8px;
        }
    </style>
@endpush
@section('content')
    <section class="policy-section">
        <div class="container">
            <div class="section-header">
                <h2>Shipping & Cancellation Policy</h2>
                <p class="last-updated">Last Updated: September 7, 2025</p>
            </div>

            <div class="policy-block">
                <h3>Shipping Policy</h3>

                <h4>Order Processing</h4>
                <p>All orders are processed within 1-2 business days after receiving your order confirmation. You will
                    receive another notification when your order has been shipped.</p>

                <h4>Shipping Partners & Delivery</h4>
                <p>We partner with renowned local courier services to ensure reliable delivery across Bangladesh, including
                    **Sundarban Courier Service, SA Paribahan, Pathao, and RedX**.</p>

                <h4>Estimated Delivery Times</h4>
                <ul>
                    <li><strong>Inside Dhaka Division:</strong> 1-3 business days</li>
                    <li><strong>Other Major Cities/Districts:</strong> 3-5 business days</li>
                    <li><strong>Remote/Thana Level Areas:</strong> 5-7 business days</li>
                </ul>
                <p>Please note that delivery times may vary due to public holidays, weather conditions, or other unforeseen
                    circumstances.</p>

                <h4>Shipping Costs</h4>
                <p>Shipping charges for your order will be calculated and displayed at checkout. We offer a flat shipping
                    rate for deliveries across Bangladesh.</p>
            </div>

            <div class="policy-block">
                <h3>Cancellation & Return Policy</h3>

                <h4>Order Cancellation</h4>
                <p>You can cancel your order at any time before it has been dispatched from our warehouse. To cancel, please
                    call our customer support at <strong>+880XX-XXXXXXX</strong> with your Order ID.</p>

                <h4>Returns and Refunds</h4>
                <p>We only accept returns if you have received a damaged, defective, or incorrect product. Please follow the
                    steps below:</p>
                <ol>
                    <li>Contact our customer service within <strong>24 hours</strong> of receiving the item.</li>
                    <li>Provide your Order ID and a clear photo or video of the damaged/incorrect product.</li>
                    <li>Once your return request is approved, we will arrange for the item to be picked up.</li>
                </ol>
                <p>To be eligible for a return, the item must be unused, in its original packaging, and in the same
                    condition that you received it.</p>
                <p>After we receive and inspect the returned item, your refund will be processed within 7-10 business days
                    to your original payment method or through a mobile financial service (MFS) like bKash or Nagad.</p>
            </div>
        </div>
    </section>
@endsection
