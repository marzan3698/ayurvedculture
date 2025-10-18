<header>
    <div class="header-top">
        <div class="contact-info">
            <span><i class="fas fa-envelope"></i> info@ayurvedculture.com</span>
            <span><i class="fas fa-phone-alt"></i> 011-45454545, 0120-4789789</span>
        </div>
        <div class="user-actions">
            <a href="#"><i class="fas fa-search"></i> Login / Register</a>
            <a href="#">Contact us</a>
            <div class="social-icons">
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-youtube"></i></a>
                <a href="#"><i class="fab fa-whatsapp"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
            </div>
        </div>
    </div>
    <div class="header-main">
        <div class="logo">
            <a href="/">
                <img src="{{ asset('frontend/asset/logo/aurvedaculture logo.png') }}" alt="Sanyas Ayurveda Logo">
            </a>
        </div>
        <div class="search-bar">
            <input type="text" placeholder="Search for...">
            <button type="submit"><i class="fas fa-search"></i></button>
        </div>
        <div class="cart-info">
            <span>0 item(s) of ₹0</span>
            <i class="fas fa-shopping-cart"></i>
        </div>
    </div>

    <nav class="header-nav">
        <ul id="main-menu">
            <li><a href="/">Home</a></li>
            <li><a href="/about">Ayurved Culture</a></li>
            <li><a href="/allproduct">Products</a></li>
            <li><a href="/all">Marketing Area</a></li>
            <li><a href="/diseases">Diseases</a></li>
            <li><a href="/testimonial">Testimonials</a></li>
            <li><a href="/career">Careers</a></li>
            <li><a href="/faq">FAQ</a></li>
        </ul>

        <span class="opening-hours">Sat-Thu 10am to 6pm</span>

        <button class="menu-toggle" id="menu-toggle-btn">
            <i class="fas fa-bars"></i>
        </button>
    </nav>
</header>
