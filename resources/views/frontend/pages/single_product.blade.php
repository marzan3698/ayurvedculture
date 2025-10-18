@extends('frontend.layouts.master')
@section('title', 'Ayurveda Culture Product')

@push('styles')
    <style>
        .product-details-section {
            max-width: 1200px;
            margin: 40px auto;
            padding: 20px;
        }

        .breadcrumb {
            font-size: 12px;
            color: #888;
            text-transform: uppercase;
            margin-bottom: 20px;
        }

        .product-main-layout {
            display: grid;
            grid-template-columns: 1fr 1.2fr;
            gap: 40px;
            position: relative;
        }

        .product-gallery .main-image img {
            width: 100%;
            border: 1px solid #eee;
            border-radius: 8px;
        }

        .thumbnail-images {
            display: flex;
            gap: 10px;
            margin-top: 10px;
        }

        .thumbnail-images img {
            width: 80px;
            height: 80px;
            object-fit: cover;
            border: 2px solid #eee;
            border-radius: 6px;
            cursor: pointer;
            transition: border-color 0.3s;
        }

        .thumbnail-images img.active,
        .thumbnail-images img:hover {
            border-color: #000466;
        }

        .product-info {
            position: relative;
        }

        .product-info h1 {
            font-size: 28px;
            margin: 0 0 5px 0;
            font-weight: 600;
        }

        .product-meta {
            font-size: 14px;
            color: #777;
            margin-bottom: 20px;
        }

        .product-pricing {
            display: flex;
            align-items: center;
            gap: 15px;
            margin-bottom: 25px;
            justify-content: flex-start;
            /* Add this line to align left */
        }

        .current-price {
            font-size: 24px;
            font-weight: bold;
        }

        .original-price {
            font-size: 16px;
            color: #aaa;
            text-decoration: line-through;
        }

        .discount-info {
            font-size: 14px;
            color: #28a745;
            font-weight: bold;
        }

        .product-actions {
            display: flex;
            gap: 10px;
            margin-bottom: 25px;
        }

        .quantity-selector {
            display: flex;
            border: 1px solid #ccc;
            border-radius: 6px;
        }

        .quantity-selector input {
            width: 40px;
            text-align: center;
            border: none;
            outline: none;
            font-size: 16px;
        }

        .quantity-selector button {
            background: #f5f5f5;
            border: none;
            padding: 0 12px;
            cursor: pointer;
        }

        .btn {
            padding: 12px 20px;
            border: none;
            border-radius: 6px;
            font-size: 14px;
            font-weight: bold;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .btn-primary {
            background-color: #e0e0e0;
            border: 1px solid #ccc;
            color: #333;
        }

        .btn-primary:hover {
            background-color: #d1d1d1;
        }

        .btn-secondary {
            background-color: #000466;
            color: #fff;
        }

        .btn-secondary:hover {
            background-color: #e6a82a;
        }

        .product-info-panel {
            background-color: #f9f9f9;
            padding: 20px;
            border-radius: 8px;
        }

        .language-tabs {
            display: flex;
            margin-bottom: 20px;
        }

        .language-tabs button {
            background: none;
            border: none;
            padding: 8px 15px;
            cursor: pointer;
            font-size: 14px;
            font-weight: 600;
            color: #888;
            border-bottom: 2px solid transparent;
        }

        .language-tabs button.active {
            color: #333;
            border-bottom: 2px solid #f7b731;
        }

        .product-benefits ul {
            list-style: none;
            padding-left: 0;
            margin: 0;
        }

        .product-benefits li {
            padding-left: 20px;
            position: relative;
            margin-bottom: 15px;
            font-size: 14px;
            line-height: 1.6;
        }

        .product-benefits li::before {
            content: '•';
            position: absolute;
            left: 0;
            color: #f7b731;
            font-weight: bold;
            font-size: 18px;
        }

        .product-benefits li strong {
            display: block;
            color: #333;
        }

        .consultation-box {
            position: absolute;
            top: 0;
            right: 0;
            text-align: right;
            font-size: 14px;
        }

        .consultation-box p {
            font-weight: bold;
            color: #555;
            margin: 0 0 5px 0;
        }

        .product-description-full {
            margin-top: 40px;
            padding-top: 20px;
            border-top: 1px solid #eee;
        }

        .product-description-full .language-tabs {
            margin-bottom: 20px;
        }

        .product-description-full p {
            font-size: 15px;
            line-height: 1.7;
            color: #555;
        }

        /* --- NEW: CSS for Tab Content --- */
        .tab-content .content-panel {
            display: none;
            /* Hide all content panels by default */
        }

        .tab-content .content-panel.active {
            display: block;
            /* Show only the active panel */
        }

        @media (max-width: 992px) {
            .product-main-layout {
                grid-template-columns: 1fr;
            }

            .consultation-box {
                position: static;
                text-align: left;
                margin-top: 20px;
                padding: 15px;
                border: 1px solid #eee;
                border-radius: 8px;
            }
        }

        @media (max-width: 480px) {
            .product-info h1 {
                font-size: 24px;
            }

            .product-actions {
                flex-direction: column;
            }

            .product-actions .btn {
                width: 100%;
                text-align: center;
            }

            .quantity-selector {
                justify-content: space-between;
            }
        }
    </style>
@endpush

@section('content')
    <main class="product-details-section">
        <p class="breadcrumb">FOR WEIGHT GAIN</p>
        <div class="product-main-layout">
            {{-- Left Column: Image Gallery --}}
            <div class="product-gallery">
                <div class="main-image">
                    <img id="mainProductImage" src="{{ asset('frontend/asset/ss.webp') }}" alt="Sanyasi Sehat Tablet">
                </div>
                <div class="thumbnail-images">
                    <img src="{{ asset('frontend/asset/product/5.webp') }}" alt="Thumbnail 1" class="thumbnail active">
                    <img src="{{ asset('frontend/asset/product/6.webp') }}" alt="Thumbnail 2" class="thumbnail">
                    <img src="{{ asset('frontend/asset/product/7.webp') }}" alt="Thumbnail 3" class="thumbnail">
                    <img src="{{ asset('frontend/asset/product/8.webp') }}" alt="Thumbnail 4" class="thumbnail">
                </div>
            </div>

            {{-- Right Column: Product Information --}}
            <div class="product-info">
                <aside class="consultation-box">
                    <p>Free Consultation</p>
                    <span><i class="fas fa-phone-alt"></i> 011 45454545</span><br>
                    <span><i class="fas fa-phone-alt"></i> 0120 4789789</span>
                </aside>

                <h1>Sanyasi Sehat Tablet</h1>
                <p class="product-meta">Type: Ayurvedic Medicine, Pack Qty: 120 Tab.</p>
                <div class="product-pricing">
                    <span class="current-price">₹ 699</span>
                    <del class="original-price">₹ 900</del>
                    <span class="discount-info">₹ 201 off</span>
                </div>
                <div class="product-actions">
                    <div class="quantity-selector">
                        <button>-</button>
                        <input type="text" value="1" readonly>
                        <button>+</button>
                    </div>
                    <button class="btn btn-primary">Add to Cart</button>
                    <button class="btn btn-secondary">Buy Now</button>
                </div>

                {{-- MODIFIED: Added data attributes and content panels for tabs --}}
                <div class="product-info-panel tab-container">
                    <div class="language-tabs">
                        <button class="active" data-lang="eng">English</button>
                        <button data-lang="hin">Bangla</button>
                    </div>
                    <div class="tab-content">
                        <div class="product-benefits content-panel active" data-lang="eng">
                            <ul>
                                <li><strong>Weight and Muscle Gainer:</strong> Helps to increase Weight and Muscle...</li>
                                <li><strong>Improves Digestive System:</strong> Sanyasi Sehat tablet helps...</li>
                                <li><strong>Appetite Increase:</strong> Helps to increase appetite so that...</li>
                                <li><strong>Blood Booster:</strong> Sanyasi sehat tablet helps to increase blood...</li>
                            </ul>
                        </div>
                        <div class="product-benefits content-panel" data-lang="hin">
                            <p>(Bangla content for product benefits would go here.)</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- MODIFIED: Added data attributes and content panels for tabs --}}
        <div class="product-description-full tab-container">
            <div class="language-tabs">
                <button class="active" data-lang="eng">English</button>
                <button data-lang="hin">Bangla</button>
            </div>
            <div class="tab-content">
                <div class="content-panel active" data-lang="eng">
                    <p>At times, one eats a lot, but there is no visible impact on their body...</p>
                    <p>Keeping all these concerns in mind, Sanyasi Ayurveda has formulated...</p>
                    <p><strong>People between the age group of 18 to 45 can consume these tablets.</strong></p>
                </div>
                <div class="content-panel" data-lang="hin">
                    <p>(Full Bangla description for the product would go here.)</p>
                </div>
            </div>
        </div>
    </main>
@endsection

@push('scripts')
    <script>
        // --- Image Gallery Script (Working) ---
        const mainImage = document.getElementById('mainProductImage');
        const thumbnails = document.querySelectorAll('.thumbnail');

        thumbnails.forEach(thumb => {
            thumb.addEventListener('click', function() {
                const newSrc = this.src.replace('100x100', '600x600');
                mainImage.src = newSrc;
                mainImage.alt = this.alt;
                document.querySelector('.thumbnail.active').classList.remove('active');
                this.classList.add('active');
            });
        });

        // --- NEW: Tab Switching Script ---
        const tabContainers = document.querySelectorAll('.tab-container');

        tabContainers.forEach(container => {
            const tabs = container.querySelectorAll('.language-tabs button');
            const contentPanels = container.querySelectorAll('.tab-content .content-panel');

            tabs.forEach(tab => {
                tab.addEventListener('click', () => {
                    // Get the language from the clicked tab's data-lang attribute
                    const targetLang = tab.getAttribute('data-lang');

                    // Deactivate all tabs and panels within this container
                    tabs.forEach(t => t.classList.remove('active'));
                    contentPanels.forEach(p => p.classList.remove('active'));

                    // Activate the clicked tab
                    tab.classList.add('active');

                    // Activate the corresponding content panel
                    const targetPanel = container.querySelector(
                        `.content-panel[data-lang="${targetLang}"]`);
                    if (targetPanel) {
                        targetPanel.classList.add('active');
                    }
                });
            });
        });
    </script>
@endpush
