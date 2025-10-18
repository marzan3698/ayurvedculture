@extends('frontend.layouts.master')
@section('title', 'Ayurved Culture Testimonials')
@push('styles')
    <style>
        /* --- Testimonial Grid & Card Styling --- */
        .testimonial-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(320px, 1fr));
            gap: 30px;
        }

        .testimonial-card {
            background-color: #fff;
            border: 1px solid #eee;
            border-radius: 12px;
            padding: 30px;
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.07);
            position: relative;
            /* For the quote icon */
        }

        .testimonial-header {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
        }

        .testimonial-header img {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            object-fit: cover;
            margin-right: 15px;
        }

        .author-info h4 {
            margin: 0 0 4px 0;
            font-size: 16px;
            color: #222;
        }

        .author-info p {
            margin: 0;
            font-size: 14px;
            color: #777;
        }

        .testimonial-text {
            font-size: 16px;
            line-height: 1.7;
            color: #555;
            font-style: italic;
        }

        /* The decorative quote icon */
        .testimonial-card .quote-icon {
            position: absolute;
            top: 20px;
            right: 20px;
            font-size: 40px;
            color: #f0f0f0;
            z-index: -1;
        }
    </style>
@endpush
@section('content')
    <section class="testimonials-section">
        <div class="testimonials-content container">
            <h2 class="section-title">What Our Patients Say</h2>

            <div class="testimonial-grid">
                <div class="testimonial-card">
                    <i class="fas fa-quote-right quote-icon"></i>
                    <div class="testimonial-header">
                        <img src="https://placehold.co/100x100/e8eaf6/283593" alt="Patient photo">
                        <div class="author-info">
                            <h4>Rahim Islam</h4>
                            <p>Dhaka, Bangladesh</p>
                        </div>
                    </div>
                    <p class="testimonial-text">"After years of struggling with digestive issues, the treatment here has
                        been life-changing. I feel healthier and more energetic than ever before. Highly recommended!"</p>
                </div>

                <div class="testimonial-card">
                    <i class="fas fa-quote-right quote-icon"></i>
                    <div class="testimonial-header">
                        <img src="https://placehold.co/100x100/fce4ec/ad1457" alt="Patient photo">
                        <div class="author-info">
                            <h4>Anika Chowdhury</h4>
                            <p>Chittagong, Bangladesh</p>
                        </div>
                    </div>
                    <p class="testimonial-text">"The consultation was thorough and the doctors were incredibly patient. The
                        Ayurvedic formulas they provided for my back pain worked wonders where nothing else did."</p>
                </div>

                <div class="testimonial-card">
                    <i class="fas fa-quote-right quote-icon"></i>
                    <div class="testimonial-header">
                        <img src="https://placehold.co/100x100/dcedc8/689f38" alt="Patient photo">
                        <div class="author-info">
                            <h4>Kamal Ahmed</h4>
                            <p>Rajbari, Bangladesh</p>
                        </div>
                    </div>
                    <p class="testimonial-text">"I was skeptical at first, but the results speak for themselves. The focus
                        on natural healing and overall wellness is exactly what I needed. Thank you for the excellent care."
                    </p>
                </div>


                <div class="testimonial-card">
                    <i class="fas fa-quote-right quote-icon"></i>
                    <div class="testimonial-header">
                        <img src="https://placehold.co/100x100/e8eaf6/283593" alt="Patient photo">
                        <div class="author-info">
                            <h4>Rahim Islam</h4>
                            <p>Dhaka, Bangladesh</p>
                        </div>
                    </div>
                    <p class="testimonial-text">"After years of struggling with digestive issues, the treatment here has
                        been life-changing. I feel healthier and more energetic than ever before. Highly recommended!"</p>
                </div>

                <div class="testimonial-card">
                    <i class="fas fa-quote-right quote-icon"></i>
                    <div class="testimonial-header">
                        <img src="https://placehold.co/100x100/fce4ec/ad1457" alt="Patient photo">
                        <div class="author-info">
                            <h4>Anika Chowdhury</h4>
                            <p>Chittagong, Bangladesh</p>
                        </div>
                    </div>
                    <p class="testimonial-text">"The consultation was thorough and the doctors were incredibly patient. The
                        Ayurvedic formulas they provided for my back pain worked wonders where nothing else did."</p>
                </div>

                <div class="testimonial-card">
                    <i class="fas fa-quote-right quote-icon"></i>
                    <div class="testimonial-header">
                        <img src="https://placehold.co/100x100/dcedc8/689f38" alt="Patient photo">
                        <div class="author-info">
                            <h4>Kamal Ahmed</h4>
                            <p>Rajbari, Bangladesh</p>
                        </div>
                    </div>
                    <p class="testimonial-text">"I was skeptical at first, but the results speak for themselves. The focus
                        on natural healing and overall wellness is exactly what I needed. Thank you for the excellent care."
                    </p>
                </div>


                <div class="testimonial-card">
                    <i class="fas fa-quote-right quote-icon"></i>
                    <div class="testimonial-header">
                        <img src="https://placehold.co/100x100/e8eaf6/283593" alt="Patient photo">
                        <div class="author-info">
                            <h4>Rahim Islam</h4>
                            <p>Dhaka, Bangladesh</p>
                        </div>
                    </div>
                    <p class="testimonial-text">"After years of struggling with digestive issues, the treatment here has
                        been life-changing. I feel healthier and more energetic than ever before. Highly recommended!"</p>
                </div>

                <div class="testimonial-card">
                    <i class="fas fa-quote-right quote-icon"></i>
                    <div class="testimonial-header">
                        <img src="https://placehold.co/100x100/fce4ec/ad1457" alt="Patient photo">
                        <div class="author-info">
                            <h4>Anika Chowdhury</h4>
                            <p>Chittagong, Bangladesh</p>
                        </div>
                    </div>
                    <p class="testimonial-text">"The consultation was thorough and the doctors were incredibly patient. The
                        Ayurvedic formulas they provided for my back pain worked wonders where nothing else did."</p>
                </div>

                <div class="testimonial-card">
                    <i class="fas fa-quote-right quote-icon"></i>
                    <div class="testimonial-header">
                        <img src="https://placehold.co/100x100/dcedc8/689f38" alt="Patient photo">
                        <div class="author-info">
                            <h4>Kamal Ahmed</h4>
                            <p>Rajbari, Bangladesh</p>
                        </div>
                    </div>
                    <p class="testimonial-text">"I was skeptical at first, but the results speak for themselves. The focus
                        on natural healing and overall wellness is exactly what I needed. Thank you for the excellent care."
                    </p>
                </div>

                <span style="padding: 10px"></span>
            </div>
        </div>
    </section>


@endsection
