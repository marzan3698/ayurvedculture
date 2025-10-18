@extends('frontend.layouts.master')
@section('title', 'FAQ of Ayurved Culture')\
@push('styles')
    <style>
        /* --- Main Section Styles --- */
        .faq-section {
            padding: 60px 0;
        }

        .section-title {
            text-align: center;
            font-size: 24px;
            color: #555;
            text-transform: uppercase;
            font-weight: bold;
            letter-spacing: 1px;
            margin-bottom: 40px;
        }

        /* --- FAQ Layout --- */
        .faq-container {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
        }

        /* --- Individual FAQ Item --- */
        .faq-item {
            border-radius: 12px;
            overflow: hidden;
            /* Important for the border-radius on children */
            border: 1px solid #e0e0e0;
        }

        /* The clickable question part */
        .faq-question {
            display: flex;
            justify-content: space-between;
            align-items: center;
            width: 100%;
            padding: 20px;
            background-color: #f1f1f1;
            /* Default gray color */
            border: none;
            text-align: left;
            font-size: 16px;
            font-weight: bold;
            color: #333;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .faq-question i {
            transition: transform 0.3s ease-in-out;
        }

        /* The answer part (hidden by default) */
        .faq-answer {
            background-color: #fff;
            padding: 0 20px;
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.4s ease-in-out, padding 0.4s ease-in-out;
        }

        .faq-answer p {
            font-size: 15px;
            line-height: 1.7;
            color: #555;
            margin: 0;
            /* Reset margin */
        }

        /* --- Active/Open State --- */
        .faq-item.active .faq-question {
            background-color: #e9e9e9;
        }

        .faq-item.active .faq-question i {
            transform: rotate(45deg);
            /* Rotates the '+' to an 'x' */
        }

        .faq-item.active .faq-answer {
            max-height: 500px;
            /* Adjust if you have very long answers */
            padding: 20px 20px;
        }

        /* --- Color Variations from Image --- */
        .faq-item:nth-child(4n+2) .faq-question,
        .faq-item:nth-child(4n+3) .faq-question {
            background-color: #fffbe6;
            /* Light yellow color */
        }

        .faq-item:nth-child(4n+2).active .faq-question,
        .faq-item:nth-child(4n+3).active .faq-question {
            background-color: #fff6d0;
        }

        /* --- Responsive Adjustments --- */
        @media (max-width: 768px) {
            .faq-container {
                grid-template-columns: 1fr;
                /* Stack to a single column on mobile */
            }
        }
    </style>
@endpush
@section('content')
    <section class="faq-section">
        <div class="container">
            <h2 class="section-title">Frequently Asked Questions</h2>

            <div class="faq-container">
                <div class="faq-item">
                    <button class="faq-question">
                        <span>Q. How effective is Ayurveda?</span>
                        <i class="fas fa-plus"></i>
                    </button>
                    <div class="faq-answer">
                        <p><strong>A.</strong> Ayurveda is a very effective system of health that is being more and more
                            recognized in the West. It is one of the primary systems of health care in India, and has been
                            used for thousands of years for all sorts of ailments and disorders. Its full effectiveness will
                            depend on various considerations, including the age and state of health of the individual.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <button class="faq-question">
                        <span>Q. Can Ayurveda help me prevent acute and chronic diseases?</span>
                        <i class="fas fa-plus"></i>
                    </button>
                    <div class="faq-answer">
                        <p><strong>A.</strong> Please remember that Ayurveda does not claim to treat, prevent or cure
                            diseases, but only to restore balance to the physiology. When balance is restored, many diseases
                            and disorders are often automatically prevented or health is restored. This is the beauty of
                            Ayurvedic lifestyle and food choices.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <button class="faq-question">
                        <span>Q. Do I have to be a vegetarian to follow an Ayurvedic lifestyle?</span>
                        <i class="fas fa-plus"></i>
                    </button>
                    <div class="faq-answer">
                        <p><strong>A.</strong> No not at all. Ayurveda recommends foods that are ideal for your body and
                            mind. While Ayurveda sings praises of a healthy seasonal vegetarian diet, it similarly
                            prescribes meats of several animals, fishes and birds. What you eat should / will depend on
                            which food serves your health and energy needs best.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <button class="faq-question">
                        <span>Q. Can Ayurveda help me lose weight?</span>
                        <i class="fas fa-plus"></i>
                    </button>
                    <div class="faq-answer">
                        <p><strong>A.</strong> Yes, and very successfully. Obesity is caused mainly due to a disbalance in
                            the Cough dosh. When Ayurvedic wisdom is applied to the life of an obese person, they can learn
                            about how they can take back control of their increasing Cough by balancing foods, specialized
                            exercises, and gentle detoxification.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @push('scripts')
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const faqItems = document.querySelectorAll('.faq-item');

                faqItems.forEach(item => {
                    const questionButton = item.querySelector('.faq-question');

                    questionButton.addEventListener('click', () => {
                        const isOpen = item.classList.contains('active');

                        // First, close all other items
                        faqItems.forEach(otherItem => {
                            otherItem.classList.remove('active');
                            // Reset icon for other items
                            const otherIcon = otherItem.querySelector('.faq-question i');
                            if (otherIcon) {
                                otherIcon.classList.remove('fa-times');
                                otherIcon.classList.add('fa-plus');
                            }
                        });

                        // If the clicked item was not already open, open it
                        if (!isOpen) {
                            item.classList.add('active');
                            // Change icon for the clicked item
                            const icon = questionButton.querySelector('i');
                            if (icon) {
                                icon.classList.remove('fa-plus');
                                icon.classList.add('fa-times');
                            }
                        }
                    });
                });
            });
        </script>
    @endpush
@endsection
