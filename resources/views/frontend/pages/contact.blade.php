@extends('frontend.layouts.master')
@section('title', 'Contact with Ayurved Culture')
@push('styles')
    <style>
        /* --- Main Section Styles --- */
        .contact-section {
            padding: 80px 0;
            background-color: #fff;
            overflow: hidden;
            /* Important for animations */
        }

        .section-header {
            text-align: center;
            margin-bottom: 50px;
        }

        .section-header h2 {
            font-size: 32px;
            font-weight: bold;
            text-transform: uppercase;
            color: #333;
            margin-bottom: 10px;
        }

        .section-header p {
            font-size: 16px;
            color: #777;
            max-width: 600px;
            margin: 0 auto;
        }

        /* --- Contact Layout --- */
        .contact-layout {
            display: grid;
            grid-template-columns: 1fr 1.5fr;
            gap: 50px;
            align-items: flex-start;
        }

        /* --- Left Side: Contact Info --- */
        .contact-info h3 {
            font-size: 24px;
            margin-bottom: 20px;
            color: #333;
        }

        .contact-info p {
            font-size: 16px;
            line-height: 1.7;
            color: #666;
            margin-bottom: 30px;
        }

        .contact-details {
            list-style: none;
            padding: 0;
            margin: 0 0 30px 0;
        }

        .contact-details li {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
            font-size: 16px;
        }

        .contact-details i {
            font-size: 20px;
            color: #c58c43;
            width: 30px;
        }

        .social-links a {
            color: #333;
            font-size: 24px;
            margin-right: 20px;
            transition: color 0.3s;
        }

        .social-links a:hover {
            color: #c58c43;
        }

        /* --- Right Side: Contact Form --- */
        .contact-form {
            background: #fff;
            padding: 40px;
            border-radius: 8px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        }

        .form-group {
            position: relative;
            margin-bottom: 25px;
        }

        .form-group input,
        .form-group textarea {
            width: 100%;
            padding: 15px 10px 15px 10px;
            border: 1px solid #ddd;
            border-radius: 6px;
            font-size: 16px;
            background: transparent;
        }

        .form-group textarea {
            resize: vertical;
            min-height: 120px;
        }

        .form-group label {
            position: absolute;
            top: 15px;
            left: 10px;
            color: #999;
            pointer-events: none;
            transition: all 0.3s ease;
        }

        /* Floating label effect */
        .form-group input:focus+label,
        .form-group textarea:focus+label,
        .form-group input:not(:placeholder-shown)+label,
        .form-group textarea:not(:placeholder-shown)+label {
            top: -10px;
            left: 5px;
            font-size: 12px;
            color: #c58c43;
            background: #fff;
            padding: 0 5px;
        }

        .submit-btn {
            width: 100%;
            padding: 15px;
            background-color: #c58c43;
            color: #fff;
            border: none;
            border-radius: 6px;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .submit-btn:hover {
            background-color: #a06d2d;
        }

        /* --- Scroll Animation --- */
        .animate-on-scroll {
            opacity: 0;
            transform: translateY(30px);
            transition: opacity 0.6s ease-out, transform 0.6s ease-out;
        }

        .animate-on-scroll.is-visible {
            opacity: 1;
            transform: translateY(0);
        }

        /* --- Responsive --- */
        @media (max-width: 992px) {
            .contact-layout {
                grid-template-columns: 1fr;
            }
        }
    </style>
@endpush
@section('content')
    <section class="contact-section">
        <div class="container">
            <div class="section-header animate-on-scroll">
                <h2>Contact Us</h2>
                <p>Have a question or need a consultation? We'd love to hear from you. Reach out to us and we'll get back to
                    you shortly.</p>
            </div>

            <div class="contact-layout">
                <div class="contact-info animate-on-scroll">
                    <h3>Get in Touch</h3>
                    <p>Our team is available to help with your health queries. Contact us via phone, email, or visit our
                        clinic.</p>
                    <ul class="contact-details">
                        <li><i class="fas fa-map-marker-alt"></i> Kodia Pul Chowk, Near Old Delhi Railway Station, Delhi -
                            110006</li>
                        <li><i class="fas fa-phone-alt"></i> +91 011-45454545</li>
                        <li><i class="fas fa-envelope"></i> info@ayurvedculture.com</li>
                    </ul>
                    <div class="social-links">
                        <a href="#" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                        <a href="#" aria-label="YouTube"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>

                <form class="contact-form animate-on-scroll">
                    <div class="form-group">
                        <input type="text" id="name" name="name" required placeholder=" ">
                        <label for="name">Your Name</label>
                    </div>
                    <div class="form-group">
                        <input type="email" id="email" name="email" required placeholder=" ">
                        <label for="email">Your Email</label>
                    </div>
                    <div class="form-group">
                        <input type="text" id="subject" name="subject" required placeholder=" ">
                        <label for="subject">Subject</label>
                    </div>
                    <div class="form-group">
                        <textarea id="message" name="message" required placeholder=" "></textarea>
                        <label for="message">Your Message</label>
                    </div>
                    <button type="submit" class="submit-btn">Send Message</button>
                </form>
            </div>
        </div>
    </section>
    @push('scripts')
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                // --- Scroll Animation using Intersection Observer ---
                const animatedElements = document.querySelectorAll('.animate-on-scroll');

                const observer = new IntersectionObserver((entries) => {
                    entries.forEach(entry => {
                        if (entry.isIntersecting) {
                            entry.target.classList.add('is-visible');
                            // Optional: stop observing the element once it's visible
                            observer.unobserve(entry.target);
                        }
                    });
                }, {
                    threshold: 0.1 // Trigger when 10% of the element is in view
                });

                animatedElements.forEach(element => {
                    observer.observe(element);
                });

                // --- Floating Label for inputs that have a value on page load ---
                const formInputs = document.querySelectorAll('.form-group input, .form-group textarea');
                formInputs.forEach(input => {
                    // The placeholder=" " is important for the :not(:placeholder-shown) selector to work
                    if (input.value) {
                        input.classList.add('has-value');
                    }
                });
            });
        </script>
    @endpush
@endsection
