@extends('frontend.layouts.master')
@section('title', 'Career on Ayurved Culture')

@push('styles')
    <style>
        /* --- Animated Title --- */
        .animated-title {
            text-align: center;
            font-size: 32px;
            font-weight: bold;
            color: #333;
            margin-bottom: 10px;
            text-transform: uppercase;
        }

        .animated-title span {
            display: inline-block;
            opacity: 0;
            transform: translateY(20px);
            animation: fadeInLetter 0.5s forwards;
        }

        @keyframes fadeInLetter {
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* --- News Ticker --- */
        .news-ticker {
            width: 100%;
            background-color: #333;
            color: #fff;
            padding: 10px 0;
            overflow: hidden;
            white-space: nowrap;
            margin-bottom: 30px;
        }

        .news-ticker-content {
            display: inline-block;
            animation: scrollTicker 20s linear infinite;
        }

        .news-ticker-content span {
            margin-right: 50px;
        }

        @keyframes scrollTicker {
            from {
                transform: translateX(100%);
            }

            to {
                transform: translateX(-100%);
            }
        }

        /* --- Job Filters --- */
        .job-filters {
            display: flex;
            gap: 20px;
            margin-bottom: 30px;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.05);
        }

        .job-filters select {
            width: 100%;
            padding: 12px;
            border: 1px solid #ddd;
            border-radius: 6px;
            font-size: 16px;
        }

        /* --- Job Listings --- */
        .job-card {
            background-color: #fff;
            border-radius: 8px;
            padding: 25px;
            margin-bottom: 20px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.08);
            border-left: 5px solid #c58c43;
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .job-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.1);
        }

        .job-card h3 {
            margin: 0 0 15px 0;
        }

        .job-meta {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 10px;
            font-size: 14px;
            color: #666;
            margin-bottom: 15px;
        }

        .job-meta div {
            display: flex;
            align-items: center;
        }

        .job-meta i {
            margin-right: 8px;
            color: #c58c43;
        }

        .job-description {
            font-size: 15px;
            line-height: 1.6;
            color: #555;
            margin-bottom: 20px;
        }

        .apply-btn {
            background-color: #c58c43;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 6px;
            font-weight: bold;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .apply-btn:hover {
            background-color: #a06d2d;
        }

        /* --- Popup Modal --- */
        .modal-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.6);
            z-index: 1000;
            display: flex;
            justify-content: center;
            align-items: center;
            opacity: 0;
            visibility: hidden;
            transition: opacity 0.3s, visibility 0.3s;
        }

        .modal-overlay.open {
            opacity: 1;
            visibility: visible;
        }

        .apply-modal {
            background: #fff;
            padding: 30px;
            border-radius: 8px;
            width: 90%;
            max-width: 500px;
            transform: translateY(-20px);
            transition: transform 0.3s;
        }

        .modal-overlay.open .apply-modal {
            transform: translateY(0);
        }

        .modal-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }

        .modal-header h2 {
            margin: 0;
        }

        .modal-header .close-btn {
            font-size: 28px;
            cursor: pointer;
            background: none;
            border: none;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-group label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        .form-group input {
            width: 100%;
            padding: 12px;
            border: 1px solid #ddd;
            border-radius: 6px;
        }

        .form-group small {
            font-size: 12px;
            color: #888;
        }

        .form-actions {
            display: flex;
            gap: 10px;
            justify-content: flex-end;
            margin-top: 20px;
        }

        /* --- Responsive --- */
        @media (max-width: 768px) {
            .job-filters {
                flex-direction: column;
            }

            .job-meta {
                grid-template-columns: 1fr;
            }
        }
    </style>
@endpush
@section('content')
    <section class="careers-section">
        <div class="container">
            <h2 class="animated-title" id="animated-title">Join Our Team</h2>

            <div class="news-ticker">
                <div class="news-ticker-content">
                    <span>Now hiring for multiple locations!</span>
                    <span>We offer competitive salaries and benefits.</span>
                    <span>New opening for a Marketing Manager posted on Sep 07, 2025.</span>
                </div>
            </div>

            <div class="job-filters">
                <select id="location-filter">
                    <option value="all">All Locations</option>
                    <option value="delhi">Delhi</option>
                    <option value="gwalior">Gwalior</option>
                </select>
                <select id="type-filter">
                    <option value="all">All Types</option>
                    <option value="full-time">Full Time</option>
                    <option value="freelance">Freelance</option>
                </select>
            </div>

            <div class="job-listings" id="job-listings">
                <div class="job-card" data-location="delhi" data-type="freelance">
                    <h3>Website Developer</h3>
                    <div class="job-meta">
                        <div><i class="fas fa-map-marker-alt"></i> Location: Greater Kailash-1, Delhi-110048</div>
                        <div><i class="fas fa-briefcase"></i> Experience: 02-05 year</div>
                        <div><i class="fas fa-clock"></i> Employment Type: Full Time / Freelance</div>
                        <div><i class="fas fa-graduation-cap"></i> Qualification: Bachelor's degree</div>
                    </div>
                    <p class="job-description">We are seeking a talented and detail-oriented Website Developer to design,
                        build, and maintain high-quality websites that meet client needs and support business goals.</p>
                    <button class="apply-btn" data-job-title="Website Developer">Apply Now</button>
                </div>

                <div class="job-card" data-location="gwalior" data-type="full-time">
                    <h3>Call Center / BPO Executive</h3>
                    <div class="job-meta">
                        <div><i class="fas fa-map-marker-alt"></i> Location: Gwalior, MP</div>
                        <div><i class="fas fa-briefcase"></i> Experience: 0-1 year</div>
                        <div><i class="fas fa-clock"></i> Employment Type: Full Time</div>
                        <div><i class="fas fa-graduation-cap"></i> Qualification: 12th Pass</div>
                    </div>
                    <p class="job-description">We require Call Center / BPO Executive for our inbound Hindi Call Center to
                        attend incoming calls and assist customers with their queries.</p>
                    <button class="apply-btn" data-job-title="Call Center / BPO Executive">Apply Now</button>
                </div>
            </div>
        </div>
    </section>

    <div class="modal-overlay" id="apply-modal-overlay">
        <div class="apply-modal">
            <div class="modal-header">
                <h2 id="modal-job-title">Apply for Job</h2>
                <button class="close-btn" id="modal-close-btn">&times;</button>
            </div>
            <form>
                <div class="form-group">
                    <label for="name">Full Name</label>
                    <input type="text" id="name" required>
                </div>
                <div class="form-group">
                    <label for="phone">Phone Number</label>
                    <input type="tel" id="phone" required>
                </div>
                <div class="form-group">
                    <label for="email">Email ID</label>
                    <input type="email" id="email" required>
                </div>
                <div class="form-group">
                    <label for="resume">Resume File*</label>
                    <input type="file" id="resume" accept=".pdf,.doc,.docx" required>
                    <small>pdf, .doc, .docx files allowed</small>
                </div>
                <div class="form-group">
                    <label for="captcha">17 + 8 = ?</label>
                    <input type="number" id="captcha" required>
                </div>
                <div class="form-actions">
                    <button type="button" class="apply-btn" style="background-color: #888;">Close</button>
                    <button type="submit" class="apply-btn">Apply Now</button>
                </div>
            </form>
        </div>
    </div>

    @push('scripts')
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                // --- Animated Title ---
                const title = document.getElementById('animated-title');
                const text = title.innerText;
                title.innerHTML = '';
                text.split('').forEach((char, index) => {
                    const span = document.createElement('span');
                    span.textContent = char === ' ' ? '\u00A0' : char;
                    span.style.animationDelay = `${index * 0.05}s`;
                    title.appendChild(span);
                });

                // --- Popup Modal Logic ---
                const applyBtns = document.querySelectorAll('.apply-btn[data-job-title]');
                const modalOverlay = document.getElementById('apply-modal-overlay');
                const modalJobTitle = document.getElementById('modal-job-title');
                const closeBtns = document.querySelectorAll('.close-btn, .form-actions button[type="button"]');

                applyBtns.forEach(btn => {
                    btn.addEventListener('click', () => {
                        const jobTitle = btn.getAttribute('data-job-title');
                        modalJobTitle.textContent = `Apply for ${jobTitle}`;
                        modalOverlay.classList.add('open');
                    });
                });

                closeBtns.forEach(btn => {
                    btn.addEventListener('click', () => {
                        modalOverlay.classList.remove('open');
                    });
                });

                // --- Job Filter Logic ---
                const locationFilter = document.getElementById('location-filter');
                const typeFilter = document.getElementById('type-filter');
                const jobCards = document.querySelectorAll('.job-card');

                function filterJobs() {
                    const selectedLocation = locationFilter.value;
                    const selectedType = typeFilter.value;

                    jobCards.forEach(card => {
                        const cardLocation = card.getAttribute('data-location');
                        const cardType = card.getAttribute('data-type');

                        const locationMatch = selectedLocation === 'all' || cardLocation === selectedLocation;
                        const typeMatch = selectedType === 'all' || cardType === selectedType || (cardType ===
                            'freelance' && selectedType === 'full-time'
                            ); // Special case for Full Time / Freelance

                        if (locationMatch && typeMatch) {
                            card.style.display = 'block';
                        } else {
                            card.style.display = 'none';
                        }
                    });
                }

                locationFilter.addEventListener('change', filterJobs);
                typeFilter.addEventListener('change', filterJobs);
            });
        </script>
    @endpush
@endsection
