@extends('frontend.layouts.master')
@section('title', 'All Marketing Section')

@push('styles')
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f1f1f1;
            color: #333;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 40px 20px;
        }

        .city-group {
            margin-bottom: 50px;
        }

        .city-title {
            text-align: center;
            font-size: 22px;
            text-transform: uppercase;
            font-weight: bold;
            color: #333;
            margin-bottom: 30px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .city-title::before,
        .city-title::after {
            content: '';
            flex: 1;
            max-width: 100px;
            height: 2px;
            background-color: #c58c43;
            /* Gold color from image */
        }

        .city-title::before {
            margin-right: 20px;
        }

        .city-title::after {
            margin-left: 20px;
        }

        /* Reusing the grid and card styles from Part 1, but they apply here */
        .location-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 30px;
        }

        .location-card {
            background-color: #fff;
            padding: 20px;
            border-radius: 12px;
            display: flex;
            align-items: center;
            gap: 20px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.05);
        }

        .location-card img {
            width: 90px;
            height: 90px;
            border-radius: 50%;
            object-fit: cover;
            flex-shrink: 0;
        }

        .location-info h3 {
            margin: 0 0 8px 0;
            font-size: 18px;
            color: #333;
        }

        .location-info .address,
        .location-info .phone {
            font-size: 14px;
            color: #666;
            margin: 4px 0;
            line-height: 1.5;
        }

        .location-info .phone i {
            margin-right: 5px;
        }

        .direction-btn {
            display: inline-flex;
            align-items: center;
            border: 1px solid #ddd;
            padding: 6px 12px;
            border-radius: 6px;
            font-size: 13px;
            color: #555;
            text-decoration: none;
            margin-top: 10px;
        }

        .direction-btn i {
            margin-right: 5px;
        }

        .topd {
            align-items: center;
            text-align: center;
            padding: 20px 50px;

        }

        @media (max-width: 992px) {
            .location-grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width: 768px) {
            .location-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
@endpush

@section('content')

    <main class="all-locations-page">

        <div class="topd">
            <img src="{{ asset('frontend/asset/ext/ext.png') }}" alt="">

            <p>
                As we Know Ayurvedic Medicines don't have side effects but still we have different body type and with every
                body type their is a different process to curing diseases, so we have our Clinics at Various locations where
                you can visit, and our Doctors will help you, They will Check your previous Treatment History, Your Current
                Problems, and Let you know the best Way to Be Fit and Healthy. So keep this in mind when you visit our
                clinic keep you previous Treatment History with you, So that we can easily find out what treatment and
                medicines you have taken before.
            </p>
        </div>
        <div class="container">
            <div class="city-group">
                <h2 class="city-title">Dhaka</h2>
                <div class="location-grid">
                    <div class="location-card">
                        <img src="https://placehold.co/100x100/f8bbd0/c2185b?text=Mirpur" alt="Mirpur Branch">
                        <div class="location-info">
                            <h3>Mirpur Branch</h3>
                            <p class="address">123 Mirpur Road, Section 10, Dhaka 1216</p>
                            <p class="phone"><i class="fas fa-phone-alt"></i> +8801700000001</p>
                            <a href="#" class="direction-btn"><i class="fas fa-map-marker-alt"></i> View direction</a>
                        </div>
                    </div>
                    <div class="location-card">
                        <img src="https://placehold.co/100x100/f8bbd0/c2185b?text=Tejgaon" alt="Tejgaon Branch">
                        <div class="location-info">
                            <h3>Tejgaon Branch</h3>
                            <p class="address">456 Tejgaon Industrial Area, Dhaka 1208</p>
                            <p class="phone"><i class="fas fa-phone-alt"></i> +8801700000002</p>
                            <a href="#" class="direction-btn"><i class="fas fa-map-marker-alt"></i> View direction</a>
                        </div>
                    </div>
                    <div class="location-card">
                        <img src="https://placehold.co/100x100/f8bbd0/c2185b?text=Gulshan" alt="Gulshan Branch">
                        <div class="location-info">
                            <h3>Gulshan Branch</h3>
                            <p class="address">71 Gulshan Avenue, Gulshan 2, Dhaka 1212</p>
                            <p class="phone"><i class="fas fa-phone-alt"></i> +8801700000003</p>
                            <a href="#" class="direction-btn"><i class="fas fa-map-marker-alt"></i> View direction</a>
                        </div>
                    </div>
                    <div class="location-card">
                        <img src="https://placehold.co/100x100/f8bbd0/c2185b?text=Dhanmondi" alt="Dhanmondi Branch">
                        <div class="location-info">
                            <h3>Dhanmondi Branch</h3>
                            <p class="address">Road 27, Dhanmondi R/A, Dhaka 1209</p>
                            <p class="phone"><i class="fas fa-phone-alt"></i> +8801700000004</p>
                            <a href="#" class="direction-btn"><i class="fas fa-map-marker-alt"></i> View direction</a>
                        </div>
                    </div>
                    <div class="location-card">
                        <img src="https://placehold.co/100x100/f8bbd0/c2185b?text=Motijheel" alt="Motijheel Branch">
                        <div class="location-info">
                            <h3>Motijheel Branch</h3>
                            <p class="address">89 Motijheel Commercial Area, Dhaka 1000</p>
                            <p class="phone"><i class="fas fa-phone-alt"></i> +8801700000005</p>
                            <a href="#" class="direction-btn"><i class="fas fa-map-marker-alt"></i> View direction</a>
                        </div>
                    </div>
                    <div class="location-card">
                        <img src="https://placehold.co/100x100/f8bbd0/c2185b?text=Uttara" alt="Uttara Branch">
                        <div class="location-info">
                            <h3>Uttara Branch</h3>
                            <p class="address">Sector 7, Main Road, Uttara, Dhaka 1230</p>
                            <p class="phone"><i class="fas fa-phone-alt"></i> +8801700000006</p>
                            <a href="#" class="direction-btn"><i class="fas fa-map-marker-alt"></i> View direction</a>
                        </div>
                    </div>
                    <div class="location-card">
                        <img src="https://placehold.co/100x100/f8bbd0/c2185b?text=Banani" alt="Banani Branch">
                        <div class="location-info">
                            <h3>Banani Branch</h3>
                            <p class="address">Road 11, Banani, Dhaka 1213</p>
                            <p class="phone"><i class="fas fa-phone-alt"></i> +8801700000007</p>
                            <a href="#" class="direction-btn"><i class="fas fa-map-marker-alt"></i> View direction</a>
                        </div>
                    </div>
                    <div class="location-card">
                        <img src="https://placehold.co/100x100/f8bbd0/c2185b?text=Old+Dhaka" alt="Old Dhaka Branch">
                        <div class="location-info">
                            <h3>Old Dhaka Branch</h3>
                            <p class="address">Nawabpur Road, Sadarghat, Dhaka 1100</p>
                            <p class="phone"><i class="fas fa-phone-alt"></i> +8801700000008</p>
                            <a href="#" class="direction-btn"><i class="fas fa-map-marker-alt"></i> View direction</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="city-group">
                <h2 class="city-title">Khulna</h2>
                <div class="location-grid">
                    <div class="location-card">
                        <img src="https://placehold.co/100x100/dcedc8/689f38?text=Shibari" alt="Shibari Branch">
                        <div class="location-info">
                            <h3>Shibari Intersection</h3>
                            <p class="address">789 Shibari Mor, Khulna 9100</p>
                            <p class="phone"><i class="fas fa-phone-alt"></i> +8801900000001</p>
                            <a href="#" class="direction-btn"><i class="fas fa-map-marker-alt"></i> View
                                direction</a>
                        </div>
                    </div>
                    <div class="location-card">
                        <img src="https://placehold.co/100x100/dcedc8/689f38?text=Sonadanga" alt="Sonadanga Branch">
                        <div class="location-info">
                            <h3>Sonadanga Branch</h3>
                            <p class="address">Near Bus Terminal, Sonadanga, Khulna 9100</p>
                            <p class="phone"><i class="fas fa-phone-alt"></i> +8801900000002</p>
                            <a href="#" class="direction-btn"><i class="fas fa-map-marker-alt"></i> View
                                direction</a>
                        </div>
                    </div>
                    <div class="location-card">
                        <img src="https://placehold.co/100x100/dcedc8/689f38?text=Daulatpur" alt="Daulatpur Branch">
                        <div class="location-info">
                            <h3>Daulatpur Branch</h3>
                            <p class="address">Main Road, Daulatpur, Khulna 9202</p>
                            <p class="phone"><i class="fas fa-phone-alt"></i> +8801900000003</p>
                            <a href="#" class="direction-btn"><i class="fas fa-map-marker-alt"></i> View
                                direction</a>
                        </div>
                    </div>
                    <div class="location-card">
                        <img src="https://placehold.co/100x100/dcedc8/689f38?text=KDA+Ave" alt="KDA Avenue Branch">
                        <div class="location-info">
                            <h3>KDA Avenue Branch</h3>
                            <p class="address">KDA Avenue, Royal Mor, Khulna 9100</p>
                            <p class="phone"><i class="fas fa-phone-alt"></i> +8801900000004</p>
                            <a href="#" class="direction-btn"><i class="fas fa-map-marker-alt"></i> View
                                direction</a>
                        </div>
                    </div>
                    <div class="location-card">
                        <img src="https://placehold.co/100x100/dcedc8/689f38?text=Rupsha" alt="Rupsha Branch">
                        <div class="location-info">
                            <h3>Rupsha Branch</h3>
                            <p class="address">Rupsha Ferry Ghat Area, Khulna</p>
                            <p class="phone"><i class="fas fa-phone-alt"></i> +8801900000005</p>
                            <a href="#" class="direction-btn"><i class="fas fa-map-marker-alt"></i> View
                                direction</a>
                        </div>
                    </div>
                    <div class="location-card">
                        <img src="https://placehold.co/100x100/dcedc8/689f38?text=Khalishpur" alt="Khalishpur Branch">
                        <div class="location-info">
                            <h3>Khalishpur Branch</h3>
                            <p class="address">Khalishpur Industrial Area, Khulna 9203</p>
                            <p class="phone"><i class="fas fa-phone-alt"></i> +8801900000006</p>
                            <a href="#" class="direction-btn"><i class="fas fa-map-marker-alt"></i> View
                                direction</a>
                        </div>
                    </div>
                </div>
            </div>



            <div class="city-group">
                <h2 class="city-title">Sylhet</h2>
                <div class="location-grid">
                    <div class="location-card">
                        <img src="https://placehold.co/100x100/d7ccc8/5d4037?text=Zindabazar" alt="Zindabazar Branch">
                        <div class="location-info">
                            <h3>Zindabazar Branch</h3>
                            <p class="address">Central Point, Zindabazar, Sylhet 3100</p>
                            <p class="phone"><i class="fas fa-phone-alt"></i> +8801800000001</p>
                            <a href="#" class="direction-btn"><i class="fas fa-map-marker-alt"></i> View
                                direction</a>
                        </div>
                    </div>
                    <div class="location-card">
                        <img src="https://placehold.co/100x100/d7ccc8/5d4037?text=Bandar+Bazar" alt="Bandar Bazar Branch">
                        <div class="location-info">
                            <h3>Bandar Bazar Branch</h3>
                            <p class="address">Karimullah Market, Bandar Bazar, Sylhet 3100</p>
                            <p class="phone"><i class="fas fa-phone-alt"></i> +8801800000002</p>
                            <a href="#" class="direction-btn"><i class="fas fa-map-marker-alt"></i> View
                                direction</a>
                        </div>
                    </div>
                    <div class="location-card">
                        <img src="https://placehold.co/100x100/d7ccc8/5d4037?text=Amberkhana" alt="Amberkhana Branch">
                        <div class="location-info">
                            <h3>Amberkhana Branch</h3>
                            <p class="address">Amberkhana Point, Airport Road, Sylhet</p>
                            <p class="phone"><i class="fas fa-phone-alt"></i> +8801800000003</p>
                            <a href="#" class="direction-btn"><i class="fas fa-map-marker-alt"></i> View
                                direction</a>
                        </div>
                    </div>
                    <div class="location-card">
                        <img src="https://placehold.co/100x100/d7ccc8/5d4037?text=Chowhatta" alt="Chowhatta Branch">
                        <div class="location-info">
                            <h3>Chowhatta Branch</h3>
                            <p class="address">Near Sylhet Govt. Alia Madrasah, Chowhatta, Sylhet</p>
                            <p class="phone"><i class="fas fa-phone-alt"></i> +8801800000004</p>
                            <a href="#" class="direction-btn"><i class="fas fa-map-marker-alt"></i> View
                                direction</a>
                        </div>
                    </div>
                    <div class="location-card">
                        <img src="https://placehold.co/100x100/d7ccc8/5d4037?text=Uposhohor" alt="Uposhohor Branch">
                        <div class="location-info">
                            <h3>Shahjalal Uposhohor Branch</h3>
                            <p class="address">Block D, Shahjalal Uposhohor, Sylhet</p>
                            <p class="phone"><i class="fas fa-phone-alt"></i> +8801800000005</p>
                            <a href="#" class="direction-btn"><i class="fas fa-map-marker-alt"></i> View
                                direction</a>
                        </div>
                    </div>
                    <div class="location-card">
                        <img src="https://placehold.co/100x100/d7ccc8/5d4037?text=Tilagor" alt="Tilagor Branch">
                        <div class="location-info">
                            <h3>Tilagor Branch</h3>
                            <p class="address">Near MC College, Tilagor, Sylhet</p>
                            <p class="phone"><i class="fas fa-phone-alt"></i> +8801800000006</p>
                            <a href="#" class="direction-btn"><i class="fas fa-map-marker-alt"></i> View
                                direction</a>
                        </div>
                    </div>
                </div>
            </div>







            <div class="city-group">
                <h2 class="city-title">Rajshahi</h2>
                <div class="location-grid">
                    <div class="location-card">
                        <img src="https://placehold.co/100x100/ffecb3/fbc02d?text=Shaheb+Bazar" alt="Shaheb Bazar Branch">
                        <div class="location-info">
                            <h3>Shaheb Bazar Branch</h3>
                            <p class="address">RDA Market Area, Shaheb Bazar Zero Point, Rajshahi</p>
                            <p class="phone"><i class="fas fa-phone-alt"></i> +8801500000001</p>
                            <a href="#" class="direction-btn"><i class="fas fa-map-marker-alt"></i> View
                                direction</a>
                        </div>
                    </div>
                    <div class="location-card">
                        <img src="https://placehold.co/100x100/ffecb3/fbc02d?text=Station+Road" alt="Station Road Branch">
                        <div class="location-info">
                            <h3>Station Road Branch</h3>
                            <p class="address">Near Rajshahi Railway Station, Station Road, Rajshahi</p>
                            <p class="phone"><i class="fas fa-phone-alt"></i> +8801500000002</p>
                            <a href="#" class="direction-btn"><i class="fas fa-map-marker-alt"></i> View
                                direction</a>
                        </div>
                    </div>
                    <div class="location-card">
                        <img src="https://placehold.co/100x100/ffecb3/fbc02d?text=Laxmipur" alt="Laxmipur Branch">
                        <div class="location-info">
                            <h3>Laxmipur Branch</h3>
                            <p class="address">Laxmipur Mor, In front of Medical College, Rajshahi</p>
                            <p class="phone"><i class="fas fa-phone-alt"></i> +8801500000003</p>
                            <a href="#" class="direction-btn"><i class="fas fa-map-marker-alt"></i> View
                                direction</a>
                        </div>
                    </div>
                    <div class="location-card">
                        <img src="https://placehold.co/100x100/ffecb3/fbc02d?text=Kazla" alt="Kazla Branch">
                        <div class="location-info">
                            <h3>Kazla Branch</h3>
                            <p class="address">Kazla Gate, Near RUET, Rajshahi</p>
                            <p class="phone"><i class="fas fa-phone-alt"></i> +8801500000004</p>
                            <a href="#" class="direction-btn"><i class="fas fa-map-marker-alt"></i> View
                                direction</a>
                        </div>
                    </div>
                    <div class="location-card">
                        <img src="https://placehold.co/100x100/ffecb3/fbc02d?text=Talaimari" alt="Talaimari Branch">
                        <div class="location-info">
                            <h3>Talaimari Branch</h3>
                            <p class="address">Talaimari Intersection, Rajshahi-Dhaka Highway, Rajshahi</p>
                            <p class="phone"><i class="fas fa-phone-alt"></i> +8801500000005</p>
                            <a href="#" class="direction-btn"><i class="fas fa-map-marker-alt"></i> View
                                direction</a>
                        </div>
                    </div>
                    <div class="location-card">
                        <img src="https://placehold.co/100x100/ffecb3/fbc02d?text=Motihar" alt="Motihar Branch">
                        <div class="location-info">
                            <h3>Motihar Branch</h3>
                            <p class="address">Near Rajshahi University, Motihar, Rajshahi</p>
                            <p class="phone"><i class="fas fa-phone-alt"></i> +8801500000006</p>
                            <a href="#" class="direction-btn"><i class="fas fa-map-marker-alt"></i> View
                                direction</a>
                        </div>
                    </div>
                </div>
            </div>


            <div class="city-group">
                <h2 class="city-title">Barishal</h2>
                <div class="location-grid">
                    <div class="location-card">
                        <img src="https://placehold.co/100x100/b2ebf2/0097a7?text=Sadar+Road" alt="Sadar Road Branch">
                        <div class="location-info">
                            <h3>Sadar Road Branch</h3>
                            <p class="address">Near Aswini Kumar Hall, Sadar Road, Barishal</p>
                            <p class="phone"><i class="fas fa-phone-alt"></i> +8801600000001</p>
                            <a href="#" class="direction-btn"><i class="fas fa-map-marker-alt"></i> View
                                direction</a>
                        </div>
                    </div>
                    <div class="location-card">
                        <img src="https://placehold.co/100x100/b2ebf2/0097a7?text=River+Port" alt="River Port Branch">
                        <div class="location-info">
                            <h3>River Port Branch</h3>
                            <p class="address">Barishal Launch Ghat Area, Barishal</p>
                            <p class="phone"><i class="fas fa-phone-alt"></i> +8801600000002</p>
                            <a href="#" class="direction-btn"><i class="fas fa-map-marker-alt"></i> View
                                direction</a>
                        </div>
                    </div>
                    <div class="location-card">
                        <img src="https://placehold.co/100x100/b2ebf2/0097a7?text=Nathullabad" alt="Nathullabad Branch">
                        <div class="location-info">
                            <h3>Nathullabad Branch</h3>
                            <p class="address">Central Bus Terminal, Nathullabad, Barishal</p>
                            <p class="phone"><i class="fas fa-phone-alt"></i> +8801600000003</p>
                            <a href="#" class="direction-btn"><i class="fas fa-map-marker-alt"></i> View
                                direction</a>
                        </div>
                    </div>
                    <div class="location-card">
                        <img src="https://placehold.co/100x100/b2ebf2/0097a7?text=Rupatali" alt="Rupatali Branch">
                        <div class="location-info">
                            <h3>Rupatali Branch</h3>
                            <p class="address">Rupatali Bus Stand, Barishal</p>
                            <p class="phone"><i class="fas fa-phone-alt"></i> +8801600000004</p>
                            <a href="#" class="direction-btn"><i class="fas fa-map-marker-alt"></i> View
                                direction</a>
                        </div>
                    </div>
                    <div class="location-card">
                        <img src="https://placehold.co/100x100/b2ebf2/0097a7?text=Chaumatha" alt="Chaumatha Branch">
                        <div class="location-info">
                            <h3>Chaumatha Branch</h3>
                            <p class="address">Near B. M. College, Chaumatha, Barishal</p>
                            <p class="phone"><i class="fas fa-phone-alt"></i> +8801600000005</p>
                            <a href="#" class="direction-btn"><i class="fas fa-map-marker-alt"></i> View
                                direction</a>
                        </div>
                    </div>
                    <div class="location-card">
                        <img src="https://placehold.co/100x100/b2ebf2/0097a7?text=Band+Road" alt="Band Road Branch">
                        <div class="location-info">
                            <h3>Band Road Branch</h3>
                            <p class="address">Kirtonkhola River Side, Band Road, Barishal</p>
                            <p class="phone"><i class="fas fa-phone-alt"></i> +8801600000006</p>
                            <a href="#" class="direction-btn"><i class="fas fa-map-marker-alt"></i> View
                                direction</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="city-group">
                <h2 class="city-title">Chittagong</h2>
                <div class="location-grid">
                    <div class="location-card">
                        <img src="https://placehold.co/100x100/c5cae9/303f9f?text=GEC" alt="GEC Circle Branch">
                        <div class="location-info">
                            <h3>GEC Circle Branch</h3>
                            <p class="address">Near Central Plaza, GEC Intersection, Chittagong</p>
                            <p class="phone"><i class="fas fa-phone-alt"></i> +8801950000001</p>
                            <a href="#" class="direction-btn"><i class="fas fa-map-marker-alt"></i> View
                                direction</a>
                        </div>
                    </div>
                    <div class="location-card">
                        <img src="https://placehold.co/100x100/c5cae9/303f9f?text=Agrabad" alt="Agrabad Branch">
                        <div class="location-info">
                            <h3>Agrabad Branch</h3>
                            <p class="address">Agrabad Commercial Area, Chittagong 4100</p>
                            <p class="phone"><i class="fas fa-phone-alt"></i> +8801950000002</p>
                            <a href="#" class="direction-btn"><i class="fas fa-map-marker-alt"></i> View
                                direction</a>
                        </div>
                    </div>
                    <div class="location-card">
                        <img src="https://placehold.co/100x100/c5cae9/303f9f?text=Lalkhan" alt="Lalkhan Bazar Branch">
                        <div class="location-info">
                            <h3>Lalkhan Bazar Branch</h3>
                            <p class="address">Near Ispahani Mor, Lalkhan Bazar, Chittagong</p>
                            <p class="phone"><i class="fas fa-phone-alt"></i> +8801950000003</p>
                            <a href="#" class="direction-btn"><i class="fas fa-map-marker-alt"></i> View
                                direction</a>
                        </div>
                    </div>
                    <div class="location-card">
                        <img src="https://placehold.co/100x100/c5cae9/303f9f?text=New+Market" alt="New Market Branch">
                        <div class="location-info">
                            <h3>New Market Branch</h3>
                            <p class="address">Near Biponi Bitan (New Market), Chittagong</p>
                            <p class="phone"><i class="fas fa-phone-alt"></i> +8801950000004</p>
                            <a href="#" class="direction-btn"><i class="fas fa-map-marker-alt"></i> View
                                direction</a>
                        </div>
                    </div>
                    <div class="location-card">
                        <img src="https://placehold.co/100x100/c5cae9/303f9f?text=Nasirabad" alt="Nasirabad Branch">
                        <div class="location-info">
                            <h3>Nasirabad Branch</h3>
                            <p class="address">CDA Avenue, Nasirabad Housing Society, Chittagong</p>
                            <p class="phone"><i class="fas fa-phone-alt"></i> +8801950000005</p>
                            <a href="#" class="direction-btn"><i class="fas fa-map-marker-alt"></i> View
                                direction</a>
                        </div>
                    </div>
                    <div class="location-card">
                        <img src="https://placehold.co/100x100/c5cae9/303f9f?text=Bahaddarhat" alt="Bahaddarhat Branch">
                        <div class="location-info">
                            <h3>Bahaddarhat Branch</h3>
                            <p class="address">Near Bahaddarhat Bus Terminal, Chittagong</p>
                            <p class="phone"><i class="fas fa-phone-alt"></i> +8801950000006</p>
                            <a href="#" class="direction-btn"><i class="fas fa-map-marker-alt"></i> View
                                direction</a>
                        </div>
                    </div>
                </div>
            </div>








        </div>

    </main>

@endsection
