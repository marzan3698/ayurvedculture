@extends('frontend.layouts.master')
@section('title', 'All Products')

@push('styles')
    <style>
        /* --- Main Shop Layout --- */
        .shop-layout {
            display: grid;
            grid-template-columns: 280px 1fr;
            /* Sidebar and main content */
            gap: 30px;
        }

        /* --- Filter Sidebar Styles --- */
        .filters-sidebar {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.05);
            align-self: start;
            /* Prevents sidebar from stretching */
        }

        .filter-group {
            margin-bottom: 25px;
            border-bottom: 1px solid #eee;
            padding-bottom: 25px;
        }

        .filter-group:last-child {
            border-bottom: none;
            margin-bottom: 0;
            padding-bottom: 0;
        }

        .filter-group h3 {
            font-size: 18px;
            margin: 0 0 15px 0;
            color: #333;
        }

        .filter-group ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .filter-group li {
            margin-bottom: 10px;
        }

        .filter-group label {
            cursor: pointer;
            margin-left: 8px;
            color: #555;
        }

        /* --- Main Content Area --- */
        .shop-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }

        .product-count {
            color: #777;
        }

        .sort-options select {
            padding: 8px;
            border: 1px solid #ddd;
            border-radius: 6px;
        }

        /* --- Product Grid (Reusing previous styles) --- */
        .product-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
        }

        .product-card {
            background-color: #fff;
            text-align: center;
            border: 1px solid #eee;
            padding: 15px;
            border-radius: 8px;
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .product-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.05);
        }

        .product-card img {
            max-width: 100%;
            height: 180px;
            object-fit: contain;
            margin-bottom: 15px;
        }

        .product-card h4 {
            font-size: 16px;
            color: #333;
            font-weight: 600;
            margin: 0 0 10px 0;
        }

        .product-card .price {
            font-weight: bold;
            color: #222;
        }

        /* --- Mobile-Specific Elements --- */
        .filter-toggle-btn {
            display: none;
            /* Hidden on desktop */
            width: 100%;
            padding: 12px;
            background-color: #333;
            color: #fff;
            border: none;
            border-radius: 6px;
            font-size: 16px;
            margin-bottom: 20px;
            cursor: pointer;
        }

        .sidebar-header {
            display: none;
            /* For the close button on mobile */
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }

        .sidebar-header .close-btn {
            background: none;
            border: none;
            font-size: 24px;
            cursor: pointer;
        }

        .filter-overlay {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            z-index: 998;
        }

        /* --- Responsive Design --- */
        @media (max-width: 992px) {
            .shop-layout {
                grid-template-columns: 220px 1fr;
                /* Slimmer sidebar */
            }

            .product-grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width: 768px) {
            .filter-toggle-btn {
                display: block;
            }

            .shop-layout {
                grid-template-columns: 1fr;
                /* Stack layout */
            }

            .filters-sidebar {
                position: fixed;
                top: 0;
                left: -300px;
                /* Hidden off-screen */
                width: 280px;
                height: 100%;
                z-index: 999;
                transition: left 0.3s ease-in-out;
                overflow-y: auto;
            }

            .filters-sidebar.open {
                left: 0;
                /* Slide in */
            }

            .sidebar-header {
                display: flex;
            }

            .filter-overlay.open {
                display: block;
            }
        }

        @media (max-width: 480px) {
            .product-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
@endpush

@section('content')
    <main class="container">
        <div class="page-header">
            <h1>All Products</h1>
        </div>

        <button class="filter-toggle-btn">
            <i class="fas fa-filter"></i> Show Filters
        </button>

        <div class="shop-layout">
            <aside class="filters-sidebar" id="filters-sidebar">
                <div class="sidebar-header">
                    <h3>Filters</h3>
                    <button class="close-btn" id="close-filters-btn">&times;</button>
                </div>

                <div class="filter-group">
                    <h3>Category</h3>
                    <ul id="category-filters">
                        <li><input type="checkbox" id="cat1" value="weight-gain"><label for="cat1">Weight
                                Gain</label></li>
                        <li><input type="checkbox" id="cat2" value="hair-care"><label for="cat2">Hair Care</label>
                        </li>
                        <li><input type="checkbox" id="cat3" value="digestion"><label for="cat3">Digestion</label>
                        </li>
                        <li><input type="checkbox" id="cat4" value="weight-loss"><label for="cat4">Weight
                                Loss</label></li>
                    </ul>
                </div>

                <div class="filter-group">
                    <h3>Price Range</h3>
                    <ul>
                        <li><input type="radio" name="price" id="p1"><label for="p1">All</label></li>
                        <li><input type="radio" name="price" id="p2"><label for="p2">Under ₹500</label>
                        </li>
                        <li><input type="radio" name="price" id="p3"><label for="p3">₹500 - ₹1000</label>
                        </li>
                    </ul>
                </div>
            </aside>

            <div class="main-content">
                <div class="shop-header">
                    <div class="product-count">Showing 4 products</div>
                    <div class="sort-options">
                        <select>
                            <option>Default sorting</option>
                            <option>Price: low to high</option>
                            <option>Price: high to low</option>
                        </select>
                    </div>
                </div>

                <div class="product-grid" id="product-grid">
                    <div class="product-card" data-category="weight-gain" data-price="699">
                        <img src="{{ asset('frontend/asset/ss.webp') }}" alt="Sanyasi Sehat Tablet">
                        <h4>Sanyasi Sehat Tablet</h4>
                        <p class="price">₹ 699</p>
                    </div>

                    <div class="product-card" data-category="hair-care" data-price="999">
                        <img src="{{ asset('frontend/asset/vsa.webp') }}" alt="Sanyasi Strong Hair Oil">
                        <h4>Sanyasi Strong Hair Oil</h4>
                        <p class="price">₹ 999</p>
                    </div>

                    <div class="product-card" data-category="digestion" data-price="499">
                        <img src="{{ asset('frontend/asset/product/6.webp') }}" alt="Sanyasi Hazma Tablet">
                        <h4>Sanyasi Hazma Tablet</h4>
                        <p class="price">₹ 499</p>
                    </div>

                    <div class="product-card" data-category="weight-loss" data-price="699">
                        <img src="{{ asset('frontend/asset/product/7.webp') }}" alt="Sanyasi Slimming Tablet">
                        <h4>Sanyasi Slimming Tablet</h4>
                        <p class="price">₹ 699</p>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <div class="filter-overlay" id="filter-overlay"></div>

    @push('scripts')
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                // --- Mobile Filter Sidebar Toggle ---
                const filterToggleBtn = document.querySelector('.filter-toggle-btn');
                const sidebar = document.getElementById('filters-sidebar');
                const closeBtn = document.getElementById('close-filters-btn');
                const overlay = document.getElementById('filter-overlay');

                function openSidebar() {
                    sidebar.classList.add('open');
                    overlay.classList.add('open');
                }

                function closeSidebar() {
                    sidebar.classList.remove('open');
                    overlay.classList.remove('open');
                }

                filterToggleBtn.addEventListener('click', openSidebar);
                closeBtn.addEventListener('click', closeSidebar);
                overlay.addEventListener('click', closeSidebar);

                // --- Product Filtering Logic ---
                const categoryCheckboxes = document.querySelectorAll('#category-filters input[type="checkbox"]');
                const productCards = document.querySelectorAll('.product-card');

                function filterProducts() {
                    const selectedCategories = [];
                    categoryCheckboxes.forEach(checkbox => {
                        if (checkbox.checked) {
                            selectedCategories.push(checkbox.value);
                        }
                    });

                    productCards.forEach(card => {
                        const cardCategory = card.getAttribute('data-category');

                        // Show card if no categories are selected, or if its category is in the selected list
                        if (selectedCategories.length === 0 || selectedCategories.includes(cardCategory)) {
                            card.style.display = 'block';
                        } else {
                            card.style.display = 'none';
                        }
                    });
                }

                categoryCheckboxes.forEach(checkbox => {
                    checkbox.addEventListener('change', filterProducts);
                });
            });
        </script>
    @endpush
@endsection
