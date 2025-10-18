@extends('frontend.layouts.master')
@section('title', 'Ayurved Culture Disease')
@push('styles')
    <style>
        /* --- Main Section Styles --- */
        .diseases-section {
            text-align: center;
        }

        .diseases-section .section-title {
            font-size: 24px;
            color: #555;
            text-transform: uppercase;
            font-weight: bold;
            letter-spacing: 1px;
            margin-bottom: 30px;
        }

        /* --- Alphabetical Filter --- */
        .alpha-filter {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 15px;
            margin-bottom: 40px;
        }

        .alpha-filter .filter-btn {
            background: none;
            border: none;
            font-size: 16px;
            font-weight: 600;
            color: #aaa;
            cursor: pointer;
            padding: 5px;
            transition: color 0.3s;
        }

        .alpha-filter .filter-btn:hover {
            color: #c58c43;
        }

        .alpha-filter .filter-btn.active {
            color: #333;
        }

        /* --- Category Grid --- */
        .category-grid {
            display: grid;
            /* This creates a fully responsive grid that adjusts columns automatically */
            grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
            gap: 15px;
        }

        .category-item {
            display: block;
            background-color: #f5eeda;
            padding: 12px 15px;
            border-radius: 8px;
            border: 1px solid #e0d9cf;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.05);
            text-align: center;
            text-decoration: none;
            color: #555;
            font-weight: 600;
            font-size: 14px;
            transition: transform 0.2s, box-shadow 0.2s;
        }

        .category-item:hover {
            transform: translateY(-3px);
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }
    </style>
@endpush
@section('content')
    <section class="diseases-section">
        <div class="container">
            <h2 class="section-title">Diseases</h2>

            <nav class="alpha-filter" id="alpha-filter">
                <button class="filter-btn active" data-letter="ALL">ALL</button>
                <button class="filter-btn" data-letter="A">A</button>
                <button class="filter-btn" data-letter="B">B</button>
                <button class="filter-btn" data-letter="C">C</button>
                <button class="filter-btn" data-letter="D">D</button>
                <button class="filter-btn" data-letter="E">E</button>
                <button class="filter-btn" data-letter="F">F</button>
                <button class="filter-btn" data-letter="G">G</button>
                <button class="filter-btn" data-letter="H">H</button>
                <button class="filter-btn" data-letter="I">I</button>
                <button class="filter-btn" data-letter="J">J</button>
                <button class="filter-btn" data-letter="K">K</button>
                <button class="filter-btn" data-letter="L">L</button>
                <button class="filter-btn" data-letter="M">M</button>
                <button class="filter-btn" data-letter="N">N</button>
                <button class="filter-btn" data-letter="O">O</button>
                <button class="filter-btn" data-letter="P">P</button>
                <button class="filter-btn" data-letter="Q">Q</button>
                <button class="filter-btn" data-letter="R">R</button>
                <button class="filter-btn" data-letter="S">S</button>
                <button class="filter-btn" data-letter="T">T</button>
                <button class="filter-btn" data-letter="U">U</button>
                <button class="filter-btn" data-letter="V">V</button>
                <button class="filter-btn" data-letter="W">W</button>
                <button class="filter-btn" data-letter="X">X</button>
                <button class="filter-btn" data-letter="Y">Y</button>
                <button class="filter-btn" data-letter="Z">Z</button>
            </nav>

            <div class="category-grid" id="category-grid">
                <a href="#" class="category-item" data-category-name="ACIDITY">ACIDITY</a>
                <a href="#" class="category-item" data-category-name="ACIDITY (HINDI)">ACIDITY (HINDI)</a>
                <a href="#" class="category-item" data-category-name="ARTHRITIS">ARTHRITIS</a>
                <a href="#" class="category-item" data-category-name="ARTHRITIS (HINDI)">ARTHRITIS (HINDI)</a>
                <a href="#" class="category-item" data-category-name="ASTHMA">ASTHMA</a>
                <a href="#" class="category-item" data-category-name="ASTHMA (HINDI)">ASTHMA (HINDI)</a>
                <a href="#" class="category-item" data-category-name="BACK PAIN">BACK PAIN</a>
                <a href="#" class="category-item" data-category-name="BELLY FAT">BELLY FAT</a>
                <a href="#" class="category-item" data-category-name="BLOCKED NOSE">BLOCKED NOSE</a>
                <a href="#" class="category-item" data-category-name="BLOOD IN STOOL">BLOOD IN STOOL</a>
                <a href="#" class="category-item" data-category-name="BODY ODOR">BODY ODOR</a>
                <a href="#" class="category-item" data-category-name="BOOST IMMUNITY">BOOST IMMUNITY</a>
                <a href="#" class="category-item" data-category-name="BREAST MILK">BREAST MILK</a>
                <a href="#" class="category-item" data-category-name="CERVICAL PAIN">CERVICAL PAIN</a>
                <a href="#" class="category-item" data-category-name="CHOLESTEROL">CHOLESTEROL</a>
                <a href="#" class="category-item" data-category-name="CONJUNCTIVITIS">CONJUNCTIVITIS</a>
                <a href="#" class="category-item" data-category-name="CONSTIPATION">CONSTIPATION</a>
                <a href="#" class="category-item" data-category-name="COUGH">COUGH</a>
                <a href="#" class="category-item" data-category-name="COUGH & COLD">COUGH & COLD</a>
                <a href="#" class="category-item" data-category-name="DANDRUFF">DANDRUFF</a>
                <a href="#" class="category-item" data-category-name="DELAY IN PERIODS">DELAY IN PERIODS</a>
                <a href="#" class="category-item" data-category-name="DENGUE">DENGUE</a>
                <a href="#" class="category-item" data-category-name="DIABETES">DIABETES</a>
                <a href="#" class="category-item" data-category-name="DIARRHOEA">DIARRHOEA</a>
                <a href="#" class="category-item" data-category-name="DRY COUGH">DRY COUGH</a>
                <a href="#" class="category-item" data-category-name="DRY SKIN">DRY SKIN</a>
                <a href="#" class="category-item" data-category-name="ECZEMA">ECZEMA</a>
                <a href="#" class="category-item" data-category-name="EYE CARE">EYE CARE</a>
                <a href="#" class="category-item" data-category-name="FACE GLOW">FACE GLOW</a>
            </div>
        </div>
    </section>


    @push('scripts')
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const filterContainer = document.getElementById('alpha-filter');
                const categoryItems = document.querySelectorAll('.category-item');

                filterContainer.addEventListener('click', function(event) {
                    // Check if a filter button was clicked
                    if (event.target.tagName !== 'BUTTON') {
                        return;
                    }

                    const clickedButton = event.target;
                    const selectedLetter = clickedButton.getAttribute('data-letter');

                    // Update the active state on buttons
                    filterContainer.querySelector('.active').classList.remove('active');
                    clickedButton.classList.add('active');

                    // Loop through all category items to show/hide them
                    categoryItems.forEach(item => {
                        const categoryName = item.getAttribute('data-category-name');

                        if (selectedLetter === 'ALL' || categoryName.startsWith(selectedLetter)) {
                            item.style.display = 'block';
                        } else {
                            item.style.display = 'none';
                        }
                    });
                });
            });
        </script>
    @endpush

@endsection
