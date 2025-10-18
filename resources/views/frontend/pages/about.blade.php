@extends('frontend.layouts.master')
@section('title', 'About Ayurved Culture')

@push('styles')
    <style>
        .about-us-section {
            padding: 60px 0;
            background-color: #fff;
            text-align: center;
        }

        .section-subtitle {
            color: #666;
            font-weight: bold;
            font-size: 18px;
            text-transform: uppercase;
            letter-spacing: 1px;
            margin-bottom: 30px;
        }

        /* This creates a stylized version of the banner */

        .about-banner h1 {
            font-size: 48px;
            color: #558b2f;
            /* Dark green color */
            margin: 5px 0 10px 0;
            font-weight: bold;
        }

        .about-banner .leaves-icon {
            width: 60px;
            height: auto;
        }

        .about-content {
            max-width: 800px;
            margin: 0 auto;
            text-align: left;
        }

        .about-content p {
            font-size: 16px;
            line-height: 1.7;
            color: #555;
            margin-bottom: 20px;
        }

        .about-content p strong {
            color: #333;
        }

        /* Responsive adjustments */
        @media (max-width: 768px) {
            .about-banner h1 {
                font-size: 36px;
            }
        }
    </style>
@endpush

@section('content')

    <section class="about-us-section">
        <div class="container">
            <h2 class="section-subtitle">QUALITY BY TRADITION</h2>

            <div class="about-banner">
                <img src="{{ asset('frontend/asset/ext/about.png') }}" alt="">
                <p class="brand-name">Ayurved Culture</p>

            </div>

            <div class="about-content">
                <p><strong>Ayurved Culture</strong>, having a history of over <strong>70 years</strong> was considered to
                    be one of the Best and Oldest Ayurvedic Clinic in India. Ayurved Culture was started with a keen effort
                    of the <strong>Sanyasi ved ji</strong> in 1947 to treat poor and needy patients with the aid of safe,
                    effective and affordable Ayurvedic medicines.</p>
                <p><strong>Sanyasi Ved ji</strong> is famous for practicing Ayurveda, Yoga and other performing Arts. The
                    name and fame of Ayurveda was synonymous with India's heritage and culture. Legendaries from all over
                    the world and has giving Ayurvedic Treatment by Oldest and best Ayurvedic Formulas.</p>
                <p>The <strong>Ayurved Culture</strong> is famous for its Oldest And Effective Style of Ayurvedic Formulas.
                    Ayurved Culture's name and fame continue, and it has contributed in its own way in preserving and
                    nurturing the tremendous and rich heritage which is unique to India.</p>
                <p>Ayurveda is a 5000 year old Science of health care and herbal treatment with the help of ayurvedic
                    medicine. Ayurveda, is highly effective in common and complicated ailments, assures long term relief and
                    has no side effects. Ayurvedic treatment is practiced here for time immemorial and millions of people
                    have availed this facility. Ayurvedic treatment is carried out in a special and authentic style called
                    "<strong>Ayurved Culture</strong>".</p>
            </div>
        </div>
    </section>

@endsection
