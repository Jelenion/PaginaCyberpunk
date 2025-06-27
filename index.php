<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Techwear - Cyberpunk Edgerunners Apparel</title>
    <link rel="stylesheet" href="styles.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
</head>
<body>
    <!-- Navbar -->
    <header class="navbar">
        <div class="nav-container">
            <div class="nav-logo">
                <img src="images/logo.svg" alt="Techwear Logo" class="logo-img">
                <span class="logo-text">Techwear</span>
            </div>
            <nav class="nav-menu">
                <a href="#" class="nav-link">New Arrivals</a>
                <a href="#" class="nav-link">Men</a>
                <a href="#" class="nav-link">Women</a>
                <a href="#" class="nav-link">Accessories</a>
            </nav>
            <div class="nav-actions">
                <button class="nav-btn">
                    <i class="fas fa-search"></i>
                </button>
                <button class="nav-btn">
                    <i class="fas fa-user"></i>
                </button>
                <button class="nav-btn">
                    <i class="fas fa-shopping-bag"></i>
                </button>
            </div>
        </div>
    </header>

    <main>
        <!-- Hero Section -->
        <section class="hero">
            <div class="hero-background">
                <img src="images/hero-background.png" alt="Cyberpunk Edgerunners Apparel" class="hero-img">
                <div class="hero-overlay"></div>
            </div>
            <div class="hero-content">
                <h1 class="hero-title">Cyberpunk Edgerunners Apparel</h1>
                <p class="hero-description">
                    Step into the neon-lit world of Cyberpunk Edgerunners with our exclusive apparel collection. Discover
                    designs inspired by Lucy and the crew, our t-shirts, jackets, and accessories capture the essence of their
                    rebellious spirit.
                </p>
                <button class="cta-button">Shop Now</button>
            </div>
        </section>

        <!-- Featured Apparel Section -->
        <section class="featured-section">
            <h2 class="section-title">Featured Apparel</h2>
            <div class="products-grid">
                <?php
                $featured_products = [
                    [
                        'image' => 'images/lucy-tshirt.jpg',
                        'alt' => 'Cyberpunk Edgerunners Lucy T-Shirt',
                        'title' => 'Cyberpunk Edgerunners Lucy T-Shirt',
                        'description' => 'Show your allegiance to Lucy with this stylish t-shirt.'
                    ],
                    [
                        'image' => 'images/crew-jacket.jpg',
                        'alt' => 'Cyberpunk Edgerunners Crew Jacket',
                        'title' => 'Cyberpunk Edgerunners Crew Jacket',
                        'description' => 'Stay warm and stylish with this jacket inspired by the crew.'
                    ],
                    [
                        'image' => 'images/logo-cap.jpg',
                        'alt' => 'Cyberpunk Edgerunners Logo Cap',
                        'title' => 'Cyberpunk Edgerunners Logo Cap',
                        'description' => 'Complete your look with this iconic logo cap.'
                    ]
                ];

                foreach ($featured_products as $product) {
                    echo '<div class="product-card">';
                    echo '<img src="' . $product['image'] . '" alt="' . $product['alt'] . '" class="product-image">';
                    echo '<div class="product-info">';
                    echo '<h3 class="product-title">' . $product['title'] . '</h3>';
                    echo '<p class="product-description">' . $product['description'] . '</p>';
                    echo '</div>';
                    echo '</div>';
                }
                ?>
            </div>
        </section>

        <!-- Shop by Category Section -->
        <section class="categories-section">
            <h2 class="section-title">Shop by Category</h2>
            <div class="categories-grid">
                <?php
                $categories = [
                    ['image' => 'images/tshirts-category.jpg', 'alt' => 'T-Shirts Category', 'title' => 'T-Shirts'],
                    ['image' => 'images/jackets-category.jpg', 'alt' => 'Jackets Category', 'title' => 'Jackets'],
                    ['image' => 'images/accessories-category.jpg', 'alt' => 'Accessories Category', 'title' => 'Accessories']
                ];

                foreach ($categories as $category) {
                    echo '<div class="category-card">';
                    echo '<img src="' . $category['image'] . '" alt="' . $category['alt'] . '" class="category-image">';
                    echo '<div class="category-info">';
                    echo '<h3 class="category-title">' . $category['title'] . '</h3>';
                    echo '</div>';
                    echo '</div>';
                }
                ?>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <footer class="footer">
        <nav class="footer-nav">
            <a href="#" class="footer-link">About Us</a>
            <a href="#" class="footer-link">Contact</a>
            <a href="#" class="footer-link">FAQ</a>
            <a href="#" class="footer-link">Privacy Policy</a>
            <a href="#" class="footer-link">Terms of Service</a>
        </nav>
        <div class="social-links">
            <a href="#" class="social-link">
                <i class="fab fa-twitter"></i>
            </a>
            <a href="#" class="social-link">
                <i class="fab fa-instagram"></i>
            </a>
            <a href="#" class="social-link">
                <i class="fab fa-facebook"></i>
            </a>
        </div>
        <p class="copyright">©<?php echo date('Y'); ?> Techwear. All rights reserved.</p>
    </footer>

    <script src="script.js"></script>
</body>
</html> 