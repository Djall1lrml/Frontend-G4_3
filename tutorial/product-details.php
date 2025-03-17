<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Details - TechMarket</title>
    <link rel="stylesheet" href="style/styles.css">
    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        /* Product Details Page Specific Styles */
        .product-details-container {
            padding: 30px 0;
        }

        .product-details {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 30px;
        }

        /* Product Gallery */
        .product-gallery {
            position: relative;
        }

        .main-image {
            width: 100%;
            height: 400px;
            border-radius: 8px;
            overflow: hidden;
            margin-bottom: 15px;
            border: 1px solid #eee;
        }

        .main-image img {
            width: 100%;
            height: 100%;
            object-fit: contain;
            background-color: #fff;
        }

        .thumbnail-container {
            display: flex;
            gap: 10px;
            overflow-x: auto;
            padding-bottom: 10px;
        }

        .thumbnail {
            width: 80px;
            height: 80px;
            border-radius: 4px;
            overflow: hidden;
            border: 1px solid #eee;
            cursor: pointer;
            transition: border-color 0.3s ease;
        }

        .thumbnail img {
            width: 100%;
            height: 100%;
            object-fit: contain;
            background-color: #fff;
        }

        .thumbnail.active {
            border-color: #0e2a3b;
        }

        /* Product Info */
        .product-info {
            display: flex;
            flex-direction: column;
        }

        .product-title {
            font-size: 24px;
            font-weight: bold;
            color: #0e2a3b;
            margin-bottom: 10px;
        }

        .product-brand {
            font-size: 16px;
            color: #666;
            margin-bottom: 15px;
        }

        .product-rating {
            display: flex;
            align-items: center;
            margin-bottom: 15px;
        }

        .stars {
            color: #f59e0b;
            margin-right: 10px;
        }

        .review-count {
            color: #666;
            font-size: 14px;
        }

        .product-price-container {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
        }

        .current-price {
            font-size: 28px;
            font-weight: bold;
            color: #0e2a3b;
            margin-right: 15px;
        }

        .original-price-details {
            font-size: 18px;
            text-decoration: line-through;
            color: #999;
            margin-right: 15px;
        }

        .discount {
            background-color: #22c55e;
            color: white;
            padding: 3px 8px;
            border-radius: 4px;
            font-size: 14px;
        }

        .availability {
            font-size: 14px;
            color: #22c55e;
            margin-bottom: 20px;
        }

        .product-description {
            margin-bottom: 20px;
            color: #444;
            line-height: 1.6;
        }

        .product-features {
            margin-bottom: 20px;
        }

        .product-features h3 {
            font-size: 18px;
            margin-bottom: 10px;
            color: #0e2a3b;
        }

        .features-list {
            list-style-type: none;
        }

        .features-list li {
            margin-bottom: 8px;
            display: flex;
            align-items: flex-start;
        }

        .features-list li i {
            color: #22c55e;
            margin-right: 10px;
            margin-top: 4px;
        }

        .action-buttons {
            display: flex;
            gap: 15px;
            margin-top: 20px;
        }

        .quantity-selector {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
        }

        .quantity-selector span {
            margin-right: 15px;
            font-weight: 500;
        }

        .quantity-controls {
            display: flex;
            align-items: center;
            border: 1px solid #ddd;
            border-radius: 4px;
            overflow: hidden;
        }

        .quantity-btn {
            width: 36px;
            height: 36px;
            background-color: #f5f5f5;
            border: none;
            font-size: 16px;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .quantity-input {
            width: 50px;
            height: 36px;
            border: none;
            border-left: 1px solid #ddd;
            border-right: 1px solid #ddd;
            text-align: center;
            font-size: 14px;
        }

        /* Specifications Section */
        .specifications {
            margin-top: 40px;
        }

        .specifications h2 {
            font-size: 24px;
            color: #0e2a3b;
            margin-bottom: 20px;
            padding-bottom: 10px;
            border-bottom: 1px solid #eee;
        }

        .specs-table {
            width: 100%;
            border-collapse: collapse;
        }

        .specs-table tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        .specs-table th, .specs-table td {
            padding: 12px 15px;
            text-align: left;
            border-bottom: 1px solid #eee;
        }

        .specs-table th {
            width: 30%;
            color: #666;
            font-weight: 500;
        }

        /* Related Products */
        .related-products {
            margin-top: 60px;
        }

        .related-products h2 {
            font-size: 24px;
            color: #0e2a3b;
            margin-bottom: 20px;
        }

        /* Button Styles from provided code */
        .button {
            --width: 150px;
            --height: 45px;
            --tooltip-height: 35px;
            --tooltip-width: 90px;
            --gap-between-tooltip-to-button: 18px;
            --button-color: #0e2a3b;
            --tooltip-color: #fff;
            width: var(--width);
            height: var(--height);
            background: var(--button-color);
            position: relative;
            text-align: center;
            border-radius: 0.45em;
            font-family: "Arial";
            transition: background 0.3s;
            cursor: pointer;
            border: none;
        }

        .button::before {
            position: absolute;
            content: attr(data-tooltip);
            width: var(--tooltip-width);
            height: var(--tooltip-height);
            background-color: #555;
            font-size: 0.9rem;
            color: #fff;
            border-radius: .25em;
            line-height: var(--tooltip-height);
            bottom: calc(var(--height) + var(--gap-between-tooltip-to-button) + 10px);
            left: calc(50% - var(--tooltip-width) / 2);
        }

        .button::after {
            position: absolute;
            content: '';
            width: 0;
            height: 0;
            border: 10px solid transparent;
            border-top-color: #555;
            left: calc(50% - 10px);
            bottom: calc(100% + var(--gap-between-tooltip-to-button) - 10px);
        }

        .button::after,.button::before {
            opacity: 0;
            visibility: hidden;
            transition: all 0.5s;
        }

        .text {
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .button-wrapper,.text,.icon {
            overflow: hidden;
            position: absolute;
            width: 100%;
            height: 100%;
            left: 0;
            color: #fff;
        }

        .text {
            top: 0
        }

        .text,.icon {
            transition: top 0.5s;
        }

        .icon {
            color: #fff;
            top: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .icon svg {
            width: 24px;
            height: 24px;
        }

        .button:hover {
            background: #1c3e52;
        }

        .button:hover .text {
            top: -100%;
        }

        .button:hover .icon {
            top: 0;
        }

        .button:hover:before,.button:hover:after {
            opacity: 1;
            visibility: visible;
        }

        .button:hover:after {
            bottom: calc(var(--height) + var(--gap-between-tooltip-to-button) - 20px);
        }

        .button:hover:before {
            bottom: calc(var(--height) + var(--gap-between-tooltip-to-button));
        }

        .add-to-cart {
            --button-color: #4ade80;
        }

        .add-to-cart:hover {
            background: #22c55e;
        }

        /* Responsive Styles */
        @media (max-width: 768px) {
            .product-details {
                grid-template-columns: 1fr;
            }

            .main-image {
                height: 300px;
            }

            .action-buttons {
                flex-direction: column;
            }

            .button {
                width: 100%;
            }
        }

/* Add these styles to make the related products scroll horizontally */
.related-products .product-grid {
    display: flex;
    overflow-x: auto;
    gap: 20px;
    padding: 20px 0;
    scroll-snap-type: x mandatory;
    -webkit-overflow-scrolling: touch;
    scrollbar-width: none; /* Firefox */
}

.related-products .product-grid::-webkit-scrollbar {
    display: none; /* Chrome, Safari, Edge */
}

.related-products .product-card {
    flex: 0 0 auto;
    width: 200px; /* Fixed width for each card */
    border: 1px solid #e5e5e5;
    border-radius: 8px;
    overflow: hidden;
    transition: box-shadow 0.3s ease;
    scroll-snap-align: start;
}

.related-products .product-image {
    position: relative;
    padding-top: 100%; /* Creates a 1:1 aspect ratio container */
    width: 100%;
    overflow: hidden;
}

.related-products .product-image img {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    object-fit: contain;
    object-position: center;
}

/* Add navigation buttons for the related products */
.related-products {
    position: relative;
    margin-top: 60px;
    padding: 0 40px;
}

.related-products h2 {
    font-size: 24px;
    color: #0e2a3b;
    margin-bottom: 20px;
    padding-left: 0;
}

.scroll-button {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    width: 40px;
    height: 40px;
    border-radius: 50%;
    background: rgba(255, 255, 255, 0.9);
    border: 1px solid #e5e5e5;
    cursor: pointer;
    display: flex;
    align-items: center;
    justify-content: center;
    z-index: 1;
    box-shadow: 0 2px 5px rgba(0,0,0,0.1);
}

.scroll-button.prev {
    left: 0;
}

.scroll-button.next {
    right: 0;
}

.scroll-button i {
    color: #0e2a3b;
}

.scroll-button:hover {
    background: #0e2a3b;
}

.scroll-button:hover i {
    color: white;
}

/* Add smooth scrolling behavior */
.related-products .product-grid {
    scroll-behavior: smooth;
}

@media (max-width: 768px) {
    .related-products {
        padding: 0 30px;
    }
    
    .related-products .product-card {
        width: 160px;
    }
}
    </style>
</head>
<body>
    <!-- Header -->
    <header class="header">
        <div class="container">
            <div class="header-content">
                <!-- Logo -->
                <div class="logo">
                    <i class="fas fa-shopping-cart"></i>
                    <span><span class="text-green">Tech</span>Market</span>
                </div>

                <!-- Search Bar -->
                <div class="searchBox">
                    <input class="searchInput" type="text" name="" placeholder="Search Something">
                    <button class="searchButton">
                        <svg xmlns="http://www.w3.org/2000/svg" width="29" height="29" viewBox="0 0 29 29" fill="none">
                            <g clip-path="url(#clip0_2_17)">
                                <g filter="url(#filter0_d_2_17)">
                                    <path d="M23.7953 23.9182L19.0585 19.1814M19.0585 19.1814C19.8188 18.4211 20.4219 17.5185 20.8333 16.5251C21.2448 15.5318 21.4566 14.4671 21.4566 13.3919C21.4566 12.3167 21.2448 11.252 20.8333 10.2587C20.4219 9.2653 19.8188 8.36271 19.0585 7.60242C18.2982 6.84214 17.3956 6.23905 16.4022 5.82759C15.4089 5.41612 14.3442 5.20435 13.269 5.20435C12.1938 5.20435 11.1291 5.41612 10.1358 5.82759C9.1424 6.23905 8.23981 6.84214 7.47953 7.60242C5.94407 9.13789 5.08145 11.2204 5.08145 13.3919C5.08145 15.5634 5.94407 17.6459 7.47953 19.1814C9.01499 20.7168 11.0975 21.5794 13.269 21.5794C15.4405 21.5794 17.523 20.7168 19.0585 19.1814Z" stroke="white" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" shape-rendering="crispEdges"></path>
                                </g>
                            </g>
                            <defs>
                                <filter id="filter0_d_2_17" x="-0.418549" y="3.70435" width="29.7139" height="29.7139" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                    <feFlood flood-opacity="0" result="BackgroundImageFix"></feFlood>
                                    <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"></feColorMatrix>
                                    <feOffset dy="4"></feOffset>
                                    <feGaussianBlur stdDeviation="2"></feGaussianBlur>
                                    <feComposite in2="hardAlpha" operator="out"></feComposite>
                                    <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0"></feColorMatrix>
                                    <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_2_17"></feBlend>
                                    <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_2_17" result="shape"></feBlend>
                                </filter>
                                <clipPath id="clip0_2_17">
                                    <rect width="28.0702" height="28.0702" fill="white" transform="translate(0.403503 0.526367)"></rect>
                                </clipPath>
                            </defs>
                        </svg>
                    </button>
                </div>

                <!-- Icons -->
                <div class="header-icons">
                    <a href="#"><i class="fas fa-shopping-bag"></i></a>
                    <a href="#"><i class="fas fa-globe"></i></a>
                    <a href="#"><i class="fas fa-user"></i></a>
                </div>
            </div>
        </div>
    </header>

    <!-- Category Navigation -->
    <nav class="category-nav">
        <div class="container">
            <div class="nav-items">
                <div class="nav-item">
                    <i class="fas fa-box"></i>
                    <span>New Products</span>
                </div>
                
                <div class="nav-item">
                    <i class="fas fa-check-square"></i>
                    <span>Best Sales</span>
                    <span class="badge hot">Hot</span>
                </div>
                
                <div class="nav-item">
                    <i class="fas fa-circle-check"></i>
                    <span>Special Offers</span>
                </div>
                
                <div class="nav-item">
                    <span>What's new</span>
                </div>
                
                <div class="nav-item daily-offers">
                    <i class="fas fa-sun"></i>
                    <span>Daily offers</span>
                </div>
            </div>
        </div>
    </nav>

    <!-- Breadcrumb -->
    <div class="container" style="padding-top: 20px;">
        <div style="font-size: 14px; color: #666;" id="breadcrumb">
            <a href="index.html" style="color: #0e2a3b;">Home</a> &gt; 
            <a href="#" style="color: #0e2a3b;" id="category-link">Smartphones</a> &gt; 
            <span id="product-name">Samsung Galaxy S23 (8 Gb) (256 Gb)</span>
        </div>
    </div>
    <!-- Product Details -->
    <main class="product-details-container">
        <div class="container">
            <div class="product-details">
                <!-- Product Gallery -->
                <div class="product-gallery">
                    <div class="main-image">
                        <img src="https://webstar-electro.com/documents/document_service_13051255_632_5_664317872.JPG" alt="Samsung Galaxy S23" id="main-product-image">
                    </div>
                    <div class="thumbnail-container" id="thumbnail-container">
                        <!-- Thumbnails will be dynamically generated -->
                    </div>
                </div>

                <!-- Product Info -->
                <div class="product-info">
                    <h1 class="product-title" id="product-title">Samsung Galaxy S23 (8 Gb) (256 Gb)</h1>
                    <div class="product-brand" id="product-brand">Brand: Samsung</div>
                    
                    <div class="product-rating">
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                        <div class="review-count">4.5 (128 reviews)</div>
                    </div>
                    
                    <div class="product-price-container">
                        <div class="current-price" id="current-price">22,750 D.A</div>
                        <div class="original-price-details" id="original-price">120,000 D.A</div>
                        <div class="discount" id="discount">-81%</div>
                    </div>
                    
                    <div class="availability" id="availability">
                        <i class="fas fa-check-circle"></i> In Stock (15 units)
                    </div>
                    
                    <div class="product-description" id="product-description">
                        <p>The Samsung Galaxy S23 features a sleek design with a 6.1-inch Dynamic AMOLED 2X display, Snapdragon 8 Gen 2 processor, and a triple camera system. With 8GB RAM and 256GB storage, it offers powerful performance for all your needs.</p>
                    </div>
                    
                    <div class="product-features">
                        <h3>Key Features</h3>
                        <ul class="features-list" id="features-list">
                            <!-- Features will be dynamically generated -->
                        </ul>
                    </div>
                    
                    <div class="quantity-selector">
                        <span>Quantity:</span>
                        <div class="quantity-controls">
                            <button class="quantity-btn" onclick="decrementQuantity()">-</button>
                            <input type="number" class="quantity-input" value="1" min="1" max="15" id="quantity">
                            <button class="quantity-btn" onclick="incrementQuantity()">+</button>
                        </div>
                    </div>
                    
                    <!-- Action buttons -->
                    <div class="action-buttons">
                        <!-- Add to Cart Button -->
                        <div data-tooltip="Add to your cart" class="button add-to-cart-btn" id="add-to-cart-btn">
                            <div class="button-wrapper">
                                <div class="text">Add to Cart</div>
                                <span class="icon">
                                    <svg viewBox="0 0 16 16" class="bi bi-cart-plus" fill="currentColor" height="16" width="16" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M9 5.5a.5.5 0 0 0-1 0V7H6.5a.5.5 0 0 0 0 1H8v1.5a.5.5 0 0 0 1 0V8h1.5a.5.5 0 0 0 0-1H9V5.5z"/>
                                        <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 0h7a2 2 0 1 0 0 0h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zm3.915 10L3.102 4h10.796l-1.313 7h-8.17zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z"/>
                                    </svg>
                                </span>
                            </div>
                        </div>
                        
                        <!-- Buy Now Button -->
                        <div data-tooltip="Price: 22,750 D.A" class="button buy-now-btn" id="buy-now-btn">
                            <div class="button-wrapper">
                                <div class="text">Buy Now</div>
                                <span class="icon">
                                    <svg viewBox="0 0 16 16" class="bi bi-cart2" fill="currentColor" height="16" width="16" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l1.25 5h8.22l1.25-5H3.14zM5 13a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z"></path>
                                    </svg>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Specifications -->
            <div class="specifications">
                <h2>Specifications</h2>
                <table class="specs-table" id="specs-table">
                    <!-- Specifications will be dynamically generated -->
                </table>
            </div>
            
            <!-- Related Products -->
            <div class="related-products">
                <h2>You May Also Like</h2>
                <button class="scroll-button prev">
                    <i class="fas fa-chevron-left"></i>
                </button>
                <button class="scroll-button next">
                    <i class="fas fa-chevron-right"></i>
                </button>
                <div class="product-grid" id="related-products">
                    <!-- Related products will be dynamically generated -->
                </div>
            </div>
        </div>
    </main>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="footer-grid">
                <div class="footer-column">
                    <h3>Shop</h3>
                    <ul>
                        <li><a href="#">Phones</a></li>
                        <li><a href="#">Laptops</a></li>
                        <li><a href="#">Accessories</a></li>
                        <li><a href="#">New Arrivals</a></li>
                    </ul>
                </div>
                
                <div class="footer-column">
                    <h3>Customer Service</h3>
                    <ul>
                        <li><a href="#">Contact Us</a></li>
                        <li><a href="#">Shipping Policy</a></li>
                        <li><a href="#">Returns & Exchanges</a></li>
                        <li><a href="#">FAQs</a></li>
                    </ul>
                </div>
                
                <div class="footer-column">
                    <h3>About</h3>
                    <ul>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Terms of Service</a></li>
                    </ul>
                </div>
                
                <div class="footer-column">
                    <h3>Connect With Us</h3>
                    <div class="social-icons">
                        <a href="#" aria-label="Facebook">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" aria-label="Twitter">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" aria-label="Instagram">
                            <i class="fab fa-instagram"></i>
                        </a>
                    </div>
                    
                    <div class="newsletter">
                        <h4>Subscribe to our newsletter</h4>
                        <div class="newsletter-form">
                            <input type="email" placeholder="Your email">
                            <button type="button">Subscribe</button>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="footer-bottom">
                <p>© 2024 TechMarket. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <script>
        // Product database
        const productDatabase = {
            // Smartphones
            'samsung-galaxy-s23': {
                name: 'Samsung Galaxy S23 (8 Gb) (256 Gb)',
                brand: 'Samsung',
                category: 'Smartphones',
                price: '22,750 D.A',
                originalPrice: '120,000 D.A',
                discount: '81%',
                stock: 15,
                mainImage: 'https://webstar-electro.com/documents/document_service_13051255_632_5_664317872.JPG',
                images: [
                    'https://webstar-electro.com/documents/document_service_13051255_632_5_664317872.JPG',
                    'https://images.samsung.com/is/image/samsung/p6pim/n_africa/2302/gallery/n_africa-galaxy-s23-s911-sm-s911bzgcmwd-534859896?$650_519_PNG$',
                    'https://images.samsung.com/is/image/samsung/p6pim/n_africa/2302/gallery/n_africa-galaxy-s23-s911-sm-s911bzgcmwd-534859897?$650_519_PNG$',
                    'https://images.samsung.com/is/image/samsung/p6pim/n_africa/2302/gallery/n_africa-galaxy-s23-s911-sm-s911bzgcmwd-534859898?$650_519_PNG$'
                ],
                description: 'The Samsung Galaxy S23 features a sleek design with a 6.1-inch Dynamic AMOLED 2X display, Snapdragon 8 Gen 2 processor, and a triple camera system. With 8GB RAM and 256GB storage, it offers powerful performance for all your needs.',
                features: [
                    '6.1" FHD+ Dynamic AMOLED 2X Display (2340 x 1080)',
                    'Snapdragon 8 Gen 2 Processor',
                    '8GB RAM, 256GB Storage',
                    'Triple Camera: 50MP Wide, 12MP Ultra-Wide, 10MP Telephoto',
                    '3900mAh Battery with Fast Charging'
                ],
                specifications: [
                    { name: 'Display', value: '6.1" FHD+ Dynamic AMOLED 2X, 2340 x 1080 pixels, 120Hz refresh rate' },
                    { name: 'Processor', value: 'Qualcomm Snapdragon 8 Gen 2 (4nm)' },
                    { name: 'Memory', value: '8GB RAM' },
                    { name: 'Storage', value: '256GB (non-expandable)' },
                    { name: 'Rear Camera', value: 'Triple Camera: 50MP Wide (f/1.8), 12MP Ultra-Wide (f/2.2), 10MP Telephoto (f/2.4) with 3x optical zoom' },
                    { name: 'Front Camera', value: '12MP (f/2.2)' },
                    { name: 'Battery', value: '3900mAh with 25W wired charging, 15W wireless charging' },
                    { name: 'Operating System', value: 'Android 13 with One UI 5.1' },
                    { name: 'Connectivity', value: '5G, Wi-Fi 6E, Bluetooth 5.3, NFC, USB Type-C' },
                    { name: 'Dimensions', value: '146.3 x 70.9 x 7.6 mm' },
                    { name: 'Weight', value: '168g' },
                    { name: 'Colors', value: 'Phantom Black, Cream, Green, Lavender' },
                    { name: 'Water Resistance', value: 'IP68 (water and dust resistant)' }
                ],
                relatedProducts: ['realme-gt6', 'xiaomi-note-13-pro', 'oppo-reno12f']
            },
            'realme-gt6': {
                name: 'Realme Gt6 (12 Gb) (256 Gb)',
                brand: 'Realme',
                category: 'Smartphones',
                price: '42,250 D.A',
                originalPrice: '49,000 D.A',
                discount: '14%',
                stock: 8,
                mainImage: 'https://webstar-electro.com/documents/document_service_19048571_632_5_1527526616.jpg',
                images: [
                    'https://webstar-electro.com/documents/document_service_19048571_632_5_1527526616.jpg',
                    'https://fdn2.gsmarena.com/vv/pics/realme/realme-gt6-1.jpg',
                    'https://fdn2.gsmarena.com/vv/pics/realme/realme-gt6-2.jpg',
                    'https://fdn2.gsmarena.com/vv/pics/realme/realme-gt6-3.jpg'
                ],
                description: 'The Realme GT6 is a powerful smartphone featuring a 6.78-inch AMOLED display with 120Hz refresh rate, Snapdragon 8s Gen 3 processor, and a 50MP triple camera system. With 12GB RAM and 256GB storage, it delivers exceptional performance for gaming and multitasking.',
                features: [
                    '6.78" AMOLED Display with 120Hz refresh rate',
                    'Snapdragon 8s Gen 3 Processor',
                    '12GB RAM, 256GB Storage',
                    'Triple Camera: 50MP Main, 8MP Ultra-Wide, 2MP Macro',
                    '5500mAh Battery with 120W Fast Charging'
                ],
                specifications: [
                    { name: 'Display', value: '6.78" AMOLED, 2780 x 1264 pixels, 120Hz refresh rate' },
                    { name: 'Processor', value: 'Qualcomm Snapdragon 8s Gen 3' },
                    { name: 'Memory', value: '12GB RAM' },
                    { name: 'Storage', value: '256GB (non-expandable)' },
                    { name: 'Rear Camera', value: 'Triple Camera: 50MP Main (f/1.8), 8MP Ultra-Wide (f/2.2), 2MP Macro (f/2.4)' },
                    { name: 'Front Camera', value: '16MP (f/2.5)' },
                    { name: 'Battery', value: '5500mAh with 120W SuperVOOC charging' },
                    { name: 'Operating System', value: 'Android 14 with Realme UI 5.0' },
                    { name: 'Connectivity', value: '5G, Wi-Fi 6, Bluetooth 5.3, NFC, USB Type-C' },
                    { name: 'Dimensions', value: '162.9 x 75.8 x 8.7 mm' },
                    { name: 'Weight', value: '199g' },
                    { name: 'Colors', value: 'Silver, Green, Purple' },
                    { name: 'Water Resistance', value: 'IP65 (splash resistant)' }
                ],
                relatedProducts: ['samsung-galaxy-s23', 'xiaomi-note-13-pro', 'poco-x7-pro']
            },
            'xiaomi-note-13-pro': {
                name: 'Xiaomi Note 13 Pro 4G (6 Gb) (128Gb)',
                brand: 'Xiaomi',
                category: 'Smartphones',
                price: '42,250 D.A',
                originalPrice: '49,000 D.A',
                discount: '14%',
                stock: 12,
                mainImage: 'https://webstar-electro.com/documents/document_service_16484940_632_5_326591997.jpg',
                images: [
                    'https://webstar-electro.com/documents/document_service_16484940_632_5_326591997.jpg',
                    'https://fdn2.gsmarena.com/vv/pics/xiaomi/xiaomi-redmi-note-13-pro-4g-1.jpg',
                    'https://fdn2.gsmarena.com/vv/pics/xiaomi/xiaomi-redmi-note-13-pro-4g-2.jpg',
                    'https://fdn2.gsmarena.com/vv/pics/xiaomi/xiaomi-redmi-note-13-pro-4g-3.jpg'
                ],
                description: 'The Xiaomi Note 13 Pro 4G features a stunning 6.67-inch AMOLED display, Snapdragon 7s Gen 2 processor, and an impressive 200MP main camera. With 6GB RAM and 128GB storage, it offers great performance and value.',
                features: [
                    '6.67" AMOLED Display with 120Hz refresh rate',
                    'Snapdragon 7s Gen 2 Processor',
                    '6GB RAM, 128GB Storage',
                    '200MP Main Camera with OIS',
                    '5000mAh Battery with 67W Fast Charging'
                ],
                specifications: [
                    { name: 'Display', value: '6.67" AMOLED, 2400 x 1080 pixels, 120Hz refresh rate' },
                    { name: 'Processor', value: 'Qualcomm Snapdragon 7s Gen 2' },
                    { name: 'Memory', value: '6GB RAM' },
                    { name: 'Storage', value: '128GB (expandable via microSD)' },
                    { name: 'Rear Camera', value: 'Triple Camera: 200MP Main (f/1.7) with OIS, 8MP Ultra-Wide (f/2.2), 2MP Macro (f/2.4)' },
                    { name: 'Front Camera', value: '16MP (f/2.4)' },
                    { name: 'Battery', value: '5000mAh with 67W fast charging' },
                    { name: 'Operating System', value: 'Android 13 with MIUI 14' },
                    { name: 'Connectivity', value: '4G LTE, Wi-Fi 5, Bluetooth 5.2, NFC, USB Type-C' },
                    { name: 'Dimensions', value: '161.2 x 74.3 x 8.0 mm' },
                    { name: 'Weight', value: '187g' },
                    { name: 'Colors', value: 'Black, Blue, Purple' },
                    { name: 'Water Resistance', value: 'IP54 (splash resistant)' }
                ],
                relatedProducts: ['samsung-galaxy-s23', 'realme-gt6', 'oppo-reno12f']
            },
            // Add more smartphone products here
            
            // Laptops
            'asus-vivobook-17': {
                name: 'Asus Vivobook 17 S1704ZA-BX350W 17.3 Inch HD+ Laptop',
                brand: 'Asus',
                category: 'Laptops',
                price: '42,250 D.A',
                originalPrice: '49,000 D.A',
                discount: '14%',
                stock: 5,
                mainImage: 'https://m.media-amazon.com/images/I/71idDyZ-lXL._AC_SL1500_.jpg',
                images: [
                    'https://m.media-amazon.com/images/I/71idDyZ-lXL._AC_SL1500_.jpg',
                    'https://m.media-amazon.com/images/I/71Zt5VFgYtL._AC_SL1500_.jpg',
                    'https://m.media-amazon.com/images/I/71Zt5VFgYtL._AC_SL1500_.jpg',
                    'https://m.media-amazon.com/images/I/71Zt5VFgYtL._AC_SL1500_.jpg'
                ],
                description: 'The Asus Vivobook 17 features a large 17.3-inch HD+ display, Intel Core i7-1255U processor, 16GB DDR4 RAM, and 512GB SSD storage. Perfect for productivity and entertainment with its spacious screen and powerful performance.',
                features: [
                    '17.3" HD+ Display (1600 x 900)',
                    'Intel Core i7-1255U Processor (1.7 GHz)',
                    '16GB DDR4 RAM',
                    '512GB SSD Storage',
                    'Intel Iris X Graphics'
                ],
                specifications: [
                    { name: 'Display', value: '17.3" HD+ (1600 x 900) Anti-glare' },
                    { name: 'Processor', value: 'Intel Core i7-1255U (1.7 GHz, up to 4.7 GHz with Turbo Boost)' },
                    { name: 'Memory', value: '16GB DDR4 RAM' },
                    { name: 'Storage', value: '512GB PCIe NVMe M.2 SSD' },
                    { name: 'Graphics', value: 'Intel Iris X Graphics' },
                    { name: 'Operating System', value: 'Windows 11 Home' },
                    { name: 'Keyboard', value: 'AZERTY Keyboard with Numpad' },
                    { name: 'Connectivity', value: 'Wi-Fi 6 (802.11ax), Bluetooth 5.0' },
                    { name: 'Ports', value: '1x USB 3.2 Gen 1 Type-C, 2x USB 3.2 Gen 1 Type-A, 1x USB 2.0, 1x HDMI, 1x 3.5mm Combo Audio Jack' },
                    { name: 'Battery', value: '45Wh, up to 8 hours' },
                    { name: 'Dimensions', value: '399.3 x 254.3 x 19.9 mm' },
                    { name: 'Weight', value: '2.1 kg' },
                    { name: 'Color', value: 'Silver' }
                ],
                relatedProducts: ['samsung-galaxy-book4', 'dell-xps-16', 'asus-vivobook-15']
            },
            // Add more laptop products here
            
            // Accessories
            'logitech-mx-master-3s': {
                name: 'Logitech MX Master 3S - Wireless Performance Mouse',
                brand: 'Logitech',
                category: 'Accessories',
                price: '8,750 D.A',
                originalPrice: '12,000 D.A',
                discount: '27%',
                stock: 20,
                mainImage: 'https://images-na.ssl-images-amazon.com/images/I/61xKiCADfpL._AC_SL1500_.jpg',
                images: [
                    'https://images-na.ssl-images-amazon.com/images/I/61xKiCADfpL._AC_SL1500_.jpg',
                    'https://images-na.ssl-images-amazon.com/images/I/71vb3NlghJL._AC_SL1500_.jpg',
                    'https://images-na.ssl-images-amazon.com/images/I/71Ck7dGvdyL._AC_SL1500_.jpg',
                    'https://images-na.ssl-images-amazon.com/images/I/71qOYeY0bfL._AC_SL1500_.jpg'
                ],
                description: 'The Logitech MX Master 3S is a high-performance wireless mouse with ultra-fast scrolling, quiet clicks, and an 8K DPI sensor. It works on any surface, including glass, and can connect to up to 3 devices simultaneously.',
                features: [
                    'Ultra-fast MagSpeed electromagnetic scrolling',
                    'Quiet clicks - 90% quieter than previous models',
                    '8K DPI sensor - works on any surface, including glass',
                    'Connect up to 3 devices via Bluetooth or USB receiver',
                    'Ergonomic design with thumb controls'
                ],
                specifications: [
                    { name: 'Sensor', value: '8000 DPI Darkfield high precision sensor' },
                    { name: 'Buttons', value: '7 buttons (including scroll wheel)' },
                    { name: 'Scrolling', value: 'MagSpeed electromagnetic scrolling' },
                    { name: 'Wireless', value: 'Bluetooth Low Energy or Logi Bolt USB receiver' },
                    { name: 'Battery', value: 'Rechargeable Li-Po (500 mAh) battery, up to 70 days on a full charge' },
                    { name: 'Charging', value: 'USB-C quick charging (1 minute charge = 3 hours of use)' },
                    { name: 'Compatibility', value: 'Windows, macOS, Linux, iPadOS' },
                    { name: 'Dimensions', value: '124.9 x 84.3 x 51 mm' },
                    { name: 'Weight', value: '141g' },
                    { name: 'Colors', value: 'Graphite, Pale Gray' }
                ],
                relatedProducts: ['logitech-mx-keys', 'sony-wh-1000xm5', 'apple-airpods-pro-2']
            }
            // Add more accessory products here
        };

        // Function to get product details by ID
        function getProductById(productId) {
            // Check if product exists in database
            if (productDatabase[productId]) {
                return productDatabase[productId];
            }
            
            // If product ID has a suffix like "-dup", try to get the original product
            if (productId.includes('-dup') || productId.includes('-alt')) {
                const originalId = productId.split('-dup')[0].split('-alt')[0];
                if (productDatabase[originalId]) {
                    return productDatabase[originalId];
                }
            }
            
            // Default to Samsung Galaxy S23 if product not found
            return productDatabase['samsung-galaxy-s23'];
        }

        // Function to update product details
        function updateProductDetails(productId) {
            const product = getProductById(productId);
            
            // Update page title
            document.title = `${product.name} - TechMarket`;
            
            // Update breadcrumb
            document.getElementById('product-name').textContent = product.name;
            document.getElementById('category-link').textContent = product.category;
            
            // Update product details
            document.getElementById('product-title').textContent = product.name;
            document.getElementById('product-brand').textContent = `Brand: ${product.brand}`;
            document.getElementById('current-price').textContent = product.price;
            document.getElementById('original-price').textContent = product.originalPrice;
            document.getElementById('discount').textContent = `-${product.discount}`;
            document.getElementById('availability').innerHTML = `<i class="fas fa-check-circle"></i> In Stock (${product.stock} units)`;
            document.getElementById('product-description').innerHTML = `<p>${product.description}</p>`;
            
            // Update main image
            document.getElementById('main-product-image').src = product.mainImage;
            document.getElementById('main-product-image').alt = product.name;
            
            // Update thumbnails
            const thumbnailContainer = document.getElementById('thumbnail-container');
            thumbnailContainer.innerHTML = '';
            product.images.forEach((image, index) => {
                thumbnailContainer.innerHTML += `
                    <div class="thumbnail ${index === 0 ? 'active' : ''}" onclick="changeImage(this, '${image}')">
                        <img src="${image}" alt="${product.name} - View ${index + 1}">
                    </div>
                `;
            });
            
            // Update features
            const featuresList = document.getElementById('features-list');
            featuresList.innerHTML = '';
            product.features.forEach(feature => {
                featuresList.innerHTML += `
                    <li><i class="fas fa-check"></i> ${feature}</li>
                `;
            });
            
            // Update specifications
            const specsTable = document.getElementById('specs-table');
            specsTable.innerHTML = '';
            product.specifications.forEach(spec => {
                specsTable.innerHTML += `
                    <tr>
                        <th>${spec.name}</th>
                        <td>${spec.value}</td>
                    </tr>
                `;
            });
            
            // Update related products
            const relatedProductsContainer = document.getElementById('related-products');
            relatedProductsContainer.innerHTML = '';
            
            if (product.relatedProducts && product.relatedProducts.length > 0) {
                product.relatedProducts.forEach(relatedId => {
                    const relatedProduct = getProductById(relatedId);
                    if (relatedProduct) {
                        relatedProductsContainer.innerHTML += `
                            <div class="product-card" data-product-id="${relatedId}">
                                <a href="javascript:void(0);" class="product-link" onclick="openProductDetails('${relatedId}')">
                                    <div class="product-image">
                                        <span class="product-badge">${relatedProduct.brand}</span>
                                        <img src="${relatedProduct.mainImage}" alt="${relatedProduct.name}">
                                    </div>
                                    <div class="product-info">
                                        <h3>${relatedProduct.name}</h3>
                                        <div class="product-price">${relatedProduct.price}</div>
                                        <div class="product-price-info">
                                            <span class="original-price">${relatedProduct.originalPrice}</span>
                                            <span class="new-price">New: ${relatedProduct.price}</span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        `;
                    }
                });
            }
            
            // Update buy now button tooltip
            document.getElementById('buy-now-btn').setAttribute('data-tooltip', `Price: ${product.price}`);
            
            // Update quantity input max value
            document.getElementById('quantity').setAttribute('max', product.stock);
        }

        // Function to change the main product image
        function changeImage(thumbnail, newSrc) {
            // Update main image
            document.getElementById('main-product-image').src = newSrc;
            
            // Update active thumbnail
            const thumbnails = document.querySelectorAll('.thumbnail');
            thumbnails.forEach(thumb => {
                thumb.classList.remove('active');
            });
            thumbnail.classList.add('active');
        }
        
        // Quantity functions
        function incrementQuantity() {
            const quantityInput = document.getElementById('quantity');
            const currentValue = parseInt(quantityInput.value);
            const maxValue = parseInt(quantityInput.max);
            
            if (currentValue < maxValue) {
                quantityInput.value = currentValue + 1;
            }
        }
        
        function decrementQuantity() {
            const quantityInput = document.getElementById('quantity');
            const currentValue = parseInt(quantityInput.value);
            
            if (currentValue > 1) {
                quantityInput.value = currentValue - 1;
            }
        }
        
        // Function to open product details page
        function openProductDetails(productId) {
            // If we're already on the product details page, just update the content
            updateProductDetails(productId);
            
            // Update URL without reloading the page
            const newUrl = `product-details.html?id=${productId}`;
            window.history.pushState({ productId: productId }, '', newUrl);
        }
        
        // Add event listeners for buttons
        document.addEventListener('DOMContentLoaded', function() {
            // Get product ID from URL
            const urlParams = new URLSearchParams(window.location.search);
            const productId = urlParams.get('id') || 'samsung-galaxy-s23';
            
            // Update product details
            updateProductDetails(productId);
            
            // Add event listeners for buttons
            document.getElementById('add-to-cart-btn').addEventListener('click', function() {
                const quantity = document.getElementById('quantity').value;
                const productName = document.getElementById('product-title').textContent;
                alert(`Added ${quantity} ${productName} to your cart!`);
            });
            
            document.getElementById('buy-now-btn').addEventListener('click', function() {
                const quantity = document.getElementById('quantity').value;
                const productName = document.getElementById('product-title').textContent;
                const productPrice = document.getElementById('current-price').textContent;
                
                // Store checkout information
                localStorage.setItem('checkout_product', JSON.stringify({
                    name: productName,
                    price: productPrice,
                    quantity: quantity,
                    image: document.getElementById('main-product-image').src
                }));
                
                alert(`Proceeding to checkout with ${quantity} ${productName}!`);
                window.location.href = "checkout.php";
            });
            
            // Handle browser back/forward buttons
            window.addEventListener('popstate', function(event) {
                if (event.state && event.state.productId) {
                    updateProductDetails(event.state.productId);
                } else {
                    // Default to Samsung Galaxy S23 if no state
                    updateProductDetails('samsung-galaxy-s23');
                }
            });
        });

// Add this to your existing script section
document.addEventListener('DOMContentLoaded', function() {
    // The existing code for loading product details
    
    // Add scroll functionality for related products
    const relatedProductsGrid = document.getElementById('related-products');
    const prevButton = document.querySelector('.related-products .scroll-button.prev');
    const nextButton = document.querySelector('.related-products .scroll-button.next');
    
    // Scroll amount (width of one product card plus gap)
    const scrollAmount = 220; // 200px card width + 20px gap
    
    if (prevButton && nextButton && relatedProductsGrid) {
        prevButton.addEventListener('click', () => {
            relatedProductsGrid.scrollBy({
                left: -scrollAmount,
                behavior: 'smooth'
            });
        });
        
        nextButton.addEventListener('click', () => {
            relatedProductsGrid.scrollBy({
                left: scrollAmount,
                behavior: 'smooth'
            });
        });
        
        // Hide/show scroll buttons based on scroll position
        const updateScrollButtons = () => {
            prevButton.style.display = relatedProductsGrid.scrollLeft > 0 ? 'flex' : 'none';
            nextButton.style.display = 
                relatedProductsGrid.scrollLeft < (relatedProductsGrid.scrollWidth - relatedProductsGrid.clientWidth) 
                ? 'flex' : 'none';
        };
        
        relatedProductsGrid.addEventListener('scroll', updateScrollButtons);
        window.addEventListener('resize', updateScrollButtons);
        
        // Initial check after products are loaded
        setTimeout(updateScrollButtons, 500);
    }
});
    </script>
</body>
</html>