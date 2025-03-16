<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TechMarket</title>
    <link rel="stylesheet" href="styles.css">
    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
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
                <!-- From Uiverse.io by OnlyCodeChannel --> 
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
                    <a href="new_sign.html"><i class="fas fa-user"></i></a>
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

    <!-- Main Content -->
    <main class="main-content">
        <div class="container">
            <!-- Smartphones Section -->
            <section class="product-section">
                <h2>Smartphones:</h2>
                <div class="product-carousel-container">
                    <button class="carousel-arrow prev-arrow"><i class="fas fa-chevron-left"></i></button>
                    <div class="product-carousel">
                        <!-- Product Cards -->
                        <div class="product-card" data-product-id="samsung-galaxy-s23">
                            <a href="javascript:void(0);" class="product-link" onclick="openProductDetails('samsung-galaxy-s23')">
                                <div class="product-image">
                                    <span class="product-badge">Samsung S23</span>
                                    <img src="https://webstar-electro.com/documents/document_service_13051255_632_5_664317872.JPG" alt="Samsung Galaxy S23">
                                </div>
                                <div class="product-info">
                                    <h3>Samsung Galaxy S23 (8 Gb) (256 Gb)</h3>
                                    <div class="product-price">22,750 D.A</div>
                                    <div class="product-price-info">
                                        <span class="original-price">120,000 D.A</span>
                                        <span class="new-price">New: 22,750 D.A</span>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="product-card" data-product-id="realme-gt6">
                            <a href="javascript:void(0);" class="product-link" onclick="openProductDetails('realme-gt6')">
                                <div class="product-image">
                                    <span class="product-badge">Realme GT 6</span>
                                    <img src="https://webstar-electro.com/documents/document_service_19048571_632_5_1527526616.jpg" alt="Realme GT6">
                                </div>
                                <div class="product-info">
                                    <h3>Realme Gt6 (12 Gb) (256 Gb)</h3>
                                    <div class="product-price">42250 D.A</div>
                                    <div class="product-price-info">
                                        <span class="original-price">49000 D.A</span>
                                        <span class="new-price">New: 42,250 D.A</span>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="product-card" data-product-id="xiaomi-note-13-pro">
                            <a href="javascript:void(0);" class="product-link" onclick="openProductDetails('xiaomi-note-13-pro')">
                                <div class="product-image">
                                    <span class="product-badge">Xiaomi Note 13 Pro 4G</span>
                                    <img src="https://webstar-electro.com/documents/document_service_16484940_632_5_326591997.jpg" alt="Xiaomi Note 13 Pro">
                                </div>
                                <div class="product-info">
                                    <h3>Xiaomi Note 13 Pro 4G (6 Gb) (128Gb)</h3>
                                    <div class="product-price">42250 D.A</div>
                                    <div class="product-price-info">
                                        <span class="original-price">49000 D.A</span>
                                        <span class="new-price">New: 42,250 D.A</span>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="product-card" data-product-id="samsung-galaxy-s23-alt">
                            <a href="javascript:void(0);" class="product-link" onclick="openProductDetails('samsung-galaxy-s23-alt')">
                                <div class="product-image">
                                    <span class="product-badge">Samsung S23</span>
                                    <img src="https://webstar-electro.com/documents/document_service_13051255_632_5_664317872.JPG" alt="Galaxy S23">
                                </div>
                                <div class="product-info">
                                    <h3>Samsung Galaxy S23 (8 Gb) (256 Gb)</h3>
                                    <div class="product-price">42250 D.A</div>
                                    <div class="product-price-info">
                                        <span class="original-price">120000 D.A</span>
                                        <span class="new-price">New: 42,250 D.A</span>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="product-card" data-product-id="oppo-reno12f">
                            <a href="javascript:void(0);" class="product-link" onclick="openProductDetails('oppo-reno12f')">
                                <div class="product-image">
                                    <span class="product-badge">Oppo Reno12 F 5G</span>
                                    <img src="https://webstar-electro.com/documents/document_service_18750141_632_5_319322223.jpg" alt="Oppo Reno12 F">
                                </div>
                                <div class="product-info">
                                    <h3>Oppo Reno12 F 5G (8 Gb) (256Gb)</h3>
                                    <div class="product-price">42250 D.A</div>
                                    <div class="product-price-info">
                                        <span class="original-price">49000 D.A</span>
                                        <span class="new-price">New: 42,250 D.A</span>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="product-card" data-product-id="oppo-a18">
                            <a href="javascript:void(0);" class="product-link" onclick="openProductDetails('oppo-a18')">
                                <div class="product-image">
                                    <span class="product-badge">Oppo A18</span>
                                    <img src="https://webstar-electro.com/documents/document_service_15513398_632_5_496473733.jpg" alt="Oppo A18">
                                </div>
                                <div class="product-info">
                                    <h3>Oppo A18 (4 Gb) (128Gb)</h3>
                                    <div class="product-price">42250 D.A</div>
                                    <div class="product-price-info">
                                        <span class="original-price">49000 D.A</span>
                                        <span class="new-price">New: 42,250 D.A</span>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="product-card" data-product-id="infinix-hot-50">
                            <a href="javascript:void(0);" class="product-link" onclick="openProductDetails('infinix-hot-50')">
                                <div class="product-image">
                                    <span class="product-badge">INFINIX Hot 50</span>
                                    <img src="https://webstar-electro.com/documents/document_service_21291974_632_5_28505859.JPG" alt="INFINIX Hot 50">
                                </div>
                                <div class="product-info">
                                    <h3>INFINIX Hot 50 (8 Gb) (128Gb)</h3>
                                    <div class="product-price">42250 D.A</div>
                                    <div class="product-price-info">
                                        <span class="original-price">49000 D.A</span>
                                        <span class="new-price">New: 42,250 D.A</span>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="product-card" data-product-id="poco-x7-pro">
                            <a href="javascript:void(0);" class="product-link" onclick="openProductDetails('poco-x7-pro')">
                                <div class="product-image">
                                    <span class="product-badge">Poco X7 Pro</span>
                                    <img src="https://webstar-electro.com/documents/document_service_21252122_632_5_850451637.JPG" alt="Poco X7 Pro">
                                </div>
                                <div class="product-info">
                                    <h3>Poco X7 Pro (8 Gb) (256Gb)</h3>
                                    <div class="product-price">42250 D.A</div>
                                    <div class="product-price-info">
                                        <span class="original-price">49000 D.A</span>
                                        <span class="new-price">New: 42,250 D.A</span>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <!-- Duplicated cards to reach 15 elements -->
                        <div class="product-card" data-product-id="samsung-galaxy-s23-dup">
                            <a href="javascript:void(0);" class="product-link" onclick="openProductDetails('samsung-galaxy-s23-dup')">
                                <div class="product-image">
                                    <span class="product-badge">Samsung S23</span>
                                    <img src="https://webstar-electro.com/documents/document_service_13051255_632_5_664317872.JPG" alt="Samsung Galaxy S23">
                                </div>
                                <div class="product-info">
                                    <h3>Samsung Galaxy S23 (8 Gb) (256 Gb)</h3>
                                    <div class="product-price">22,750 D.A</div>
                                    <div class="product-price-info">
                                        <span class="original-price">120,000 D.A</span>
                                        <span class="new-price">New: 22,750 D.A</span>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="product-card" data-product-id="realme-gt6-dup">
                            <a href="javascript:void(0);" class="product-link" onclick="openProductDetails('realme-gt6-dup')">
                                <div class="product-image">
                                    <span class="product-badge">Realme GT 6</span>
                                    <img src="https://webstar-electro.com/documents/document_service_19048571_632_5_1527526616.jpg" alt="Realme GT6">
                                </div>
                                <div class="product-info">
                                    <h3>Realme Gt6 (12 Gb) (256 Gb)</h3>
                                    <div class="product-price">42250 D.A</div>
                                    <div class="product-price-info">
                                        <span class="original-price">49000 D.A</span>
                                        <span class="new-price">New: 42,250 D.A</span>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="product-card" data-product-id="xiaomi-note-13-pro-dup">
                            <a href="javascript:void(0);" class="product-link" onclick="openProductDetails('xiaomi-note-13-pro-dup')">
                                <div class="product-image">
                                    <span class="product-badge">Xiaomi Note 13 Pro 4G</span>
                                    <img src="https://webstar-electro.com/documents/document_service_16484940_632_5_326591997.jpg" alt="Xiaomi Note 13 Pro">
                                </div>
                                <div class="product-info">
                                    <h3>Xiaomi Note 13 Pro 4G (6 Gb) (128Gb)</h3>
                                    <div class="product-price">42250 D.A</div>
                                    <div class="product-price-info">
                                        <span class="original-price">49000 D.A</span>
                                        <span class="new-price">New: 42,250 D.A</span>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="product-card" data-product-id="samsung-galaxy-s23-alt-dup">
                            <a href="javascript:void(0);" class="product-link" onclick="openProductDetails('samsung-galaxy-s23-alt-dup')">
                                <div class="product-image">
                                    <span class="product-badge">Samsung S23</span>
                                    <img src="https://webstar-electro.com/documents/document_service_13051255_632_5_664317872.JPG" alt="Galaxy S23">
                                </div>
                                <div class="product-info">
                                    <h3>Samsung Galaxy S23 (8 Gb) (256 Gb)</h3>
                                    <div class="product-price">42250 D.A</div>
                                    <div class="product-price-info">
                                        <span class="original-price">120000 D.A</span>
                                        <span class="new-price">New: 42,250 D.A</span>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="product-card" data-product-id="oppo-reno12f-dup">
                            <a href="javascript:void(0);" class="product-link" onclick="openProductDetails('oppo-reno12f-dup')">
                                <div class="product-image">
                                    <span class="product-badge">Oppo Reno12 F 5G</span>
                                    <img src="https://webstar-electro.com/documents/document_service_18750141_632_5_319322223.jpg" alt="Oppo Reno12 F">
                                </div>
                                <div class="product-info">
                                    <h3>Oppo Reno12 F 5G (8 Gb) (256Gb)</h3>
                                    <div class="product-price">42250 D.A</div>
                                    <div class="product-price-info">
                                        <span class="original-price">49000 D.A</span>
                                        <span class="new-price">New: 42,250 D.A</span>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="product-card" data-product-id="oppo-a18-dup">
                            <a href="javascript:void(0);" class="product-link" onclick="openProductDetails('oppo-a18-dup')">
                                <div class="product-image">
                                    <span class="product-badge">Oppo A18</span>
                                    <img src="https://webstar-electro.com/documents/document_service_15513398_632_5_496473733.jpg" alt="Oppo A18">
                                </div>
                                <div class="product-info">
                                    <h3>Oppo A18 (4 Gb) (128Gb)</h3>
                                    <div class="product-price">42250 D.A</div>
                                    <div class="product-price-info">
                                        <span class="original-price">49000 D.A</span>
                                        <span class="new-price">New: 42,250 D.A</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <button class="carousel-arrow next-arrow"><i class="fas fa-chevron-right"></i></button>
                </div>
            </section>

            <!-- Laptops Section -->
            <section class="product-section">
                <h2>Laptops:</h2>
                <div class="product-carousel-container">
                    <button class="carousel-arrow prev-arrow"><i class="fas fa-chevron-left"></i></button>
                    <div class="product-carousel">
                        <!-- Product Cards (same structure as smartphones) -->
                        <div class="product-card" data-product-id="asus-vivobook-17">
                            <a href="javascript:void(0);" class="product-link" onclick="openProductDetails('asus-vivobook-17')">
                                <div class="product-image">
                                    <span class="product-badge">Asus Vivobook 17</span>
                                    <img src="https://m.media-amazon.com/images/I/71idDyZ-lXL._AC_SL1500_.jpg" alt="Asus Vivobook 17">
                                </div>
                                <div class="product-info">
                                    <h3>Asus Vivobook 17 S1704ZA-BX350W 17.3 Inch HD+ Laptop Intel Core i7-1255U Processor 1.7 GHz, 16GB DDR4, 512GB SSD, Intel Iris X Graphics, Windows 11 Home – AZERTY Keyboard</h3>
                                    <div class="product-price">42250 D.A</div>
                                    <div class="product-price-info">
                                        <span class="original-price">49000 D.A</span>
                                        <span class="new-price">New: 42,250 D.A</span>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="product-card" data-product-id="samsung-galaxy-book4">
                            <a href="javascript:void(0);" class="product-link" onclick="openProductDetails('samsung-galaxy-book4')">
                                <div class="product-image">
                                    <span class="product-badge">Samsung Galaxy Book4</span>
                                    <img src="https://images-na.ssl-images-amazon.com/images/I/61w-o3jyr4L._AC_SL1500_.jpg" alt="Samsung Galaxy Book4" onerror="this.src='https://via.placeholder.com/150x150?text=Image+Not+Found'">
                                </div>
                                <div class="product-info">
                                    <h3>Samsung Galaxy Book4 15.6 Inch Laptop, Intel Core 7, 16GB RAM 512GB SSD</h3>
                                    <div class="product-price">42250 D.A</div>
                                    <div class="product-price-info">
                                        <span class="original-price">120000 D.A</span>
                                        <span class="new-price">New: 42,250 D.A</span>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="product-card" data-product-id="dell-xps-16">
                            <a href="javascript:void(0);" class="product-link" onclick="openProductDetails('dell-xps-16')">
                                <div class="product-image">
                                    <span class="product-badge">Dell XPS 16 9640</span>
                                    <img src="https://images-na.ssl-images-amazon.com/images/I/81CnZADgHVL._AC_SL1500_.jpg" alt="Dell XPS 16" onerror="this.src='https://via.placeholder.com/150x150?text=Image+Not+Found'">
                                </div>
                                <div class="product-info">
                                    <h3>Dell XPS 16 9640 16.3 Inch OLED UHD+ Touch Laptop Intel Evo Edition</h3>
                                    <div class="product-price">42250 D.A</div>
                                    <div class="product-price-info">
                                        <span class="original-price">120000 D.A</span>
                                        <span class="new-price">New: 42,250 D.A</span>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="product-card" data-product-id="msi-thin-15">
                            <a href="javascript:void(0);" class="product-link" onclick="openProductDetails('msi-thin-15')">
                                <div class="product-image">
                                    <span class="product-badge">MSI Thin 15</span>
                                    <img src="https://images-na.ssl-images-amazon.com/images/I/71Fr-EEsp6L._AC_SL1500_.jpg" alt="MSI Thin 15" onerror="this.src='https://via.placeholder.com/150x150?text=Image+Not+Found'">
                                </div>
                                <div class="product-info">
                                    <h3>MSI Thin 15 B13VF-2679FR: Intel Core i5 13420H - 16GB DDR4 - SSD 512GB</h3>
                                    <div class="product-price">42250 D.A</div>
                                    <div class="product-price-info">
                                        <span class="original-price">49000 D.A</span>
                                        <span class="new-price">New: 42,250 D.A</span>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="product-card" data-product-id="asus-vivobook-15">
                            <a href="javascript:void(0);" class="product-link" onclick="openProductDetails('asus-vivobook-15')">
                                <div class="product-image">
                                    <span class="product-badge">ASUS Vivobook 15</span>
                                    <img src="https://images-na.ssl-images-amazon.com/images/I/71c0GSxtEEL._AC_SL1500_.jpg" alt="ASUS Vivobook" onerror="this.src='https://via.placeholder.com/150x150?text=Image+Not+Found'">
                                </div>
                                <div class="product-info">
                                    <h3>ASUS Vivobook 15 X1504VA-NJ327W - 15.6" FHD - Intel Core i7-1355U - RAM 16GB</h3>
                                    <div class="product-price">42250 D.A</div>
                                    <div class="product-price-info">
                                        <span class="original-price">89000 D.A</span>
                                        <span class="new-price">New: 42,250 D.A</span>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="product-card" data-product-id="lenovo-ideapad-slim-3">
                            <a href="javascript:void(0);" class="product-link" onclick="openProductDetails('lenovo-ideapad-slim-3')">
                                <div class="product-image">
                                    <span class="product-badge">Lenovo IdeaPad Slim 3</span>
                                    <img src="https://m.media-amazon.com/images/I/71XSUxht3+L._AC_SL1500_.jpg" alt="Lenovo IdeaPad" onerror="this.src='https://via.placeholder.com/150x150?text=Image+Not+Found'">
                                </div>
                                <div class="product-info">
                                    <h3>Lenovo IdeaPad Slim 3 14AMN8 - 14" FHD - AMD Ryzen 5 7520U - RAM 16GB</h3>
                                    <div class="product-price">42250 D.A</div>
                                    <div class="product-price-info">
                                        <span class="original-price">75000 D.A</span>
                                        <span class="new-price">New: 42,250 D.A</span>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="product-card" data-product-id="hp-pavilion-15">
                            <a href="javascript:void(0);" class="product-link" onclick="openProductDetails('hp-pavilion-15')">
                                <div class="product-image">
                                    <span class="product-badge">HP Pavilion 15</span>
                                    <img src="https://m.media-amazon.com/images/I/81vmaS0ZhAL._AC_SL1500_.jpg" alt="HP Pavilion" onerror="this.src='https://via.placeholder.com/150x150?text=Image+Not+Found'">
                                </div>
                                <div class="product-info">
                                    <h3>HP Pavilion 15-eh1020nf - 15.6" FHD - AMD Ryzen 7 5700U - RAM 16GB</h3>
                                    <div class="product-price">42250 D.A</div>
                                    <div class="product-price-info">
                                        <span class="original-price">82000 D.A</span>
                                        <span class="new-price">New: 42,250 D.A</span>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="product-card" data-product-id="apple-macbook-air">
                            <a href="javascript:void(0);" class="product-link" onclick="openProductDetails('apple-macbook-air')">
                                <div class="product-image">
                                    <span class="product-badge">Apple MacBook Air</span>
                                    <img src="https://images-na.ssl-images-amazon.com/images/I/71TPda7cwUL._AC_SL1500_.jpg" alt="MacBook Air" onerror="this.src='https://via.placeholder.com/150x150?text=Image+Not+Found'">
                                </div>
                                <div class="product-info">
                                    <h3>Apple MacBook Air 13" with M2 chip - 8GB RAM - 256GB SSD - 8-Core CPU</h3>
                                    <div class="product-price">42250 D.A</div>
                                    <div class="product-price-info">
                                        <span class="original-price">135000 D.A</span>
                                        <span class="new-price">New: 42,250 D.A</span>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <!-- Duplicated cards to reach 15 elements -->
                        <div class="product-card" data-product-id="asus-vivobook-17-dup">
                            <a href="javascript:void(0);" class="product-link" onclick="openProductDetails('asus-vivobook-17-dup')">
                                <div class="product-image">
                                    <span class="product-badge">Asus Vivobook 17</span>
                                    <img src="https://m.media-amazon.com/images/I/71idDyZ-lXL._AC_SL1500_.jpg" alt="Asus Vivobook 17">
                                </div>
                                <div class="product-info">
                                    <h3>Asus Vivobook 17 S1704ZA-BX350W 17.3 Inch HD+ Laptop Intel Core i7-1255U Processor 1.7 GHz, 16GB DDR4, 512GB SSD, Intel Iris X Graphics, Windows 11 Home – AZERTY Keyboard</h3>
                                    <div class="product-price">42250 D.A</div>
                                    <div class="product-price-info">
                                        <span class="original-price">49000 D.A</span>
                                        <span class="new-price">New: 42,250 D.A</span>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="product-card" data-product-id="samsung-galaxy-book4-dup">
                            <a href="javascript:void(0);" class="product-link" onclick="openProductDetails('samsung-galaxy-book4-dup')">
                                <div class="product-image">
                                    <span class="product-badge">Samsung Galaxy Book4</span>
                                    <img src="https://images-na.ssl-images-amazon.com/images/I/61w-o3jyr4L._AC_SL1500_.jpg" alt="Samsung Galaxy Book4" onerror="this.src='https://via.placeholder.com/150x150?text=Image+Not+Found'">
                                </div>
                                <div class="product-info">
                                    <h3>Samsung Galaxy Book4 15.6 Inch Laptop, Intel Core 7, 16GB RAM 512GB SSD</h3>
                                    <div class="product-price">42250 D.A</div>
                                    <div class="product-price-info">
                                        <span class="original-price">120000 D.A</span>
                                        <span class="new-price">New: 42,250 D.A</span>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="product-card" data-product-id="dell-xps-16-dup">
                            <a href="javascript:void(0);" class="product-link" onclick="openProductDetails('dell-xps-16-dup')">
                                <div class="product-image">
                                    <span class="product-badge">Dell XPS 16 9640</span>
                                    <img src="https://images-na.ssl-images-amazon.com/images/I/81CnZADgHVL._AC_SL1500_.jpg" alt="Dell XPS 16" onerror="this.src='https://via.placeholder.com/150x150?text=Image+Not+Found'">
                                </div>
                                <div class="product-info">
                                    <h3>Dell XPS 16 9640 16.3 Inch OLED UHD+ Touch Laptop Intel Evo Edition</h3>
                                    <div class="product-price">42250 D.A</div>
                                    <div class="product-price-info">
                                        <span class="original-price">120000 D.A</span>
                                        <span class="new-price">New: 42,250 D.A</span>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="product-card" data-product-id="msi-thin-15-dup">
                            <a href="javascript:void(0);" class="product-link" onclick="openProductDetails('msi-thin-15-dup')">
                                <div class="product-image">
                                    <span class="product-badge">MSI Thin 15</span>
                                    <img src="https://images-na.ssl-images-amazon.com/images/I/71Fr-EEsp6L._AC_SL1500_.jpg" alt="MSI Thin 15" onerror="this.src='https://via.placeholder.com/150x150?text=Image+Not+Found'">
                                </div>
                                <div class="product-info">
                                    <h3>MSI Thin 15 B13VF-2679FR: Intel Core i5 13420H - 16GB DDR4 - SSD 512GB</h3>
                                    <div class="product-price">42250 D.A</div>
                                    <div class="product-price-info">
                                        <span class="original-price">49000 D.A</span>
                                        <span class="new-price">New: 42,250 D.A</span>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="product-card" data-product-id="asus-vivobook-15-dup">
                            <a href="javascript:void(0);" class="product-link" onclick="openProductDetails('asus-vivobook-15-dup')">
                                <div class="product-image">
                                    <span class="product-badge">ASUS Vivobook 15</span>
                                    <img src="https://images-na.ssl-images-amazon.com/images/I/71c0GSxtEEL._AC_SL1500_.jpg" alt="ASUS Vivobook" onerror="this.src='https://via.placeholder.com/150x150?text=Image+Not+Found'">
                                </div>
                                <div class="product-info">
                                    <h3>ASUS Vivobook 15 X1504VA-NJ327W - 15.6" FHD - Intel Core i7-1355U - RAM 16GB</h3>
                                    <div class="product-price">42250 D.A</div>
                                    <div class="product-price-info">
                                        <span class="original-price">89000 D.A</span>
                                        <span class="new-price">New: 42,250 D.A</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <button class="carousel-arrow next-arrow"><i class="fas fa-chevron-right"></i></button>
                </div>
            </section>

            <!-- Accessories Section -->
            <section class="product-section">
                <h2>Accessories:</h2>
                <div class="product-carousel-container">
                    <button class="carousel-arrow prev-arrow"><i class="fas fa-chevron-left"></i></button>
                    <div class="product-carousel">
                        <!-- Product Cards (same structure as above) -->
                        <div class="product-card" data-product-id="logitech-mx-master-3s">
                            <a href="javascript:void(0);" class="product-link" onclick="openProductDetails('logitech-mx-master-3s')">
                                <div class="product-image">
                                    <span class="product-badge">Logitech MX Master 3S</span>
                                    <img src="https://images-na.ssl-images-amazon.com/images/I/61xKiCADfpL._AC_SL1500_.jpg" alt="Logitech Mouse" onerror="this.src='https://via.placeholder.com/150x150?text=Image+Not+Found'">
                                </div>
                                <div class="product-info">
                                    <h3>Logitech MX Master 3S - Wireless Performance Mouse with Ultra-fast Scrolling</h3>
                                    <div class="product-price">8750 D.A</div>
                                    <div class="product-price-info">
                                        <span class="original-price">12000 D.A</span>
                                        <span class="new-price">New: 8,750 D.A</span>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="product-card" data-product-id="sony-wh-1000xm5">
                            <a href="javascript:void(0);" class="product-link" onclick="openProductDetails('sony-wh-1000xm5')">
                                <div class="product-image">
                                    <span class="product-badge">Sony WH-1000XM5</span>
                                    <img src="https://images-na.ssl-images-amazon.com/images/I/61+btxzpfDL._AC_SL1500_.jpg" alt="Sony Headphones" onerror="this.src='https://via.placeholder.com/150x150?text=Image+Not+Found'">
                                </div>
                                <div class="product-info">
                                    <h3>Sony WH-1000XM5 Wireless Noise Cancelling Headphones with Auto Noise Cancelling Optimizer</h3>
                                    <div class="product-price">22750 D.A</div>
                                    <div class="product-price-info">
                                        <span class="original-price">45000 D.A</span>
                                        <span class="new-price">New: 22,750 D.A</span>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="product-card" data-product-id="samsung-t7-shield">
                            <a href="javascript:void(0);" class="product-link" onclick="openProductDetails('samsung-t7-shield')">
                                <div class="product-image">
                                    <span class="product-badge">Samsung T7 Shield</span>
                                    <img src="https://m.media-amazon.com/images/I/71qjKjVpV1L._AC_SL1500_.jpg" alt="Samsung SSD" onerror="this.src='https://via.placeholder.com/150x150?text=Image+Not+Found'">
                                </div>
                                <div class="product-info">
                                    <h3>Samsung T7 Shield 2TB - Portable SSD, External Solid State Drive, USB 3.2 Gen2</h3>
                                    <div class="product-price">15750 D.A</div>
                                    <div class="product-price-info">
                                        <span class="original-price">28000 D.A</span>
                                        <span class="new-price">New: 15,750 D.A</span>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="product-card" data-product-id="anker-737-power-bank">
                            <a href="javascript:void(0);" class="product-link" onclick="openProductDetails('anker-737-power-bank')">
                                <div class="product-image">
                                    <span class="product-badge">Anker 737 Power Bank</span>
                                    <img src="https://m.media-amazon.com/images/I/71Linf+GHuL._AC_SL1500_.jpg" alt="Anker Power Bank" onerror="this.src='https://via.placeholder.com/150x150?text=Image+Not+Found'">
                                </div>
                                <div class="product-info">
                                    <h3>Anker 737 Power Bank (PowerCore 24K), 24,000mAh 140W Portable Charger</h3>
                                    <div class="product-price">9750 D.A</div>
                                    <div class="product-price-info">
                                        <span class="original-price">18000 D.A</span>
                                        <span class="new-price">New: 9,750 D.A</span>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="product-card" data-product-id="logitech-mx-keys">
                            <a href="javascript:void(0);" class="product-link" onclick="openProductDetails('logitech-mx-keys')">
                                <div class="product-image">
                                    <span class="product-badge">Logitech MX Keys</span>
                                    <img src="https://resource.logitech.com/w_544,h_466,ar_7:6,c_pad,q_auto,f_auto,dpr_2.0/d_transparent.gif/content/dam/logitech/en/products/keyboards/mx-keys-s/migration-assets-for-delorean-2025/gallery/mx-keys-s-top-view-black-us.png" alt="Logitech Keyboard" onerror="this.src='https://via.placeholder.com/150x150?text=Image+Not+Found'">
                                </div>
                                <div class="product-info">
                                    <h3>Logitech MX Keys Advanced Wireless Illuminated Keyboard, Tactile Responsive Typing</h3>
                                    <div class="product-price">8250 D.A</div>
                                    <div class="product-price-info">
                                        <span class="original-price">15000 D.A</span>
                                        <span class="new-price">New: 8,250 D.A</span>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="product-card" data-product-id="apple-airpods-pro-2">
                            <a href="javascript:void(0);" class="product-link" onclick="openProductDetails('apple-airpods-pro-2')">
                                <div class="product-image">
                                    <span class="product-badge">Apple AirPods Pro 2</span>
                                    <img src="https://images-na.ssl-images-amazon.com/images/I/61SUj2aKoEL._AC_SL1500_.jpg" alt="Apple AirPods" onerror="this.src='https://via.placeholder.com/150x150?text=Image+Not+Found'">
                                </div>
                                <div class="product-info">
                                    <h3>Apple AirPods Pro (2nd Generation) with MagSafe Case (USB‑C)</h3>
                                    <div class="product-price">18750 D.A</div>
                                    <div class="product-price-info">
                                        <span class="original-price">32000 D.A</span>
                                        <span class="new-price">New: 18,750 D.A</span>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="product-card" data-product-id="lg-ultragear-monitor">
                            <a href="javascript:void(0);" class="product-link" onclick="openProductDetails('lg-ultragear-monitor')">
                                <div class="product-image">
                                    <span class="product-badge">LG UltraGear Monitor</span>
                                    <img src="https://www.lg.com/content/dam/channel/wcms/fr/images/moniteurs/27gl850-b_aeu_eefs_fr_c/gallery/large_01.jpg" alt="LG Monitor" onerror="this.src='https://via.placeholder.com/150x150?text=Image+Not+Found'">
                                </div>
                                <div class="product-info">
                                    <h3>LG UltraGear 27GP850-B 27" QHD (2560 x 1440) Nano IPS Gaming Monitor</h3>
                                    <div class="product-price">32750 D.A</div>
                                    <div class="product-price-info">
                                        <span class="original-price">55000 D.A</span>
                                        <span class="new-price">New: 32,750 D.A</span>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="product-card" data-product-id="steelseries-arctis-nova-pro">
                            <a href="javascript:void(0);" class="product-link" onclick="openProductDetails('steelseries-arctis-nova-pro')">
                                <div class="product-image">
                                    <span class="product-badge">SteelSeries Arctis Nova Pro</span>
                                    <img src="https://m.media-amazon.com/images/I/614IQytqAuL._AC_SL1500_.jpg" alt="SteelSeries Headset" onerror="this.src='https://via.placeholder.com/150x150?text=Image+Not+Found'">
                                </div>
                                <div class="product-info">
                                    <h3>SteelSeries Arctis Nova Pro Wireless Multi-System Gaming Headset</h3>
                                    <div class="product-price">22750 D.A</div>
                                    <div class="product-price-info">
                                        <span class="original-price">42000 D.A</span>
                                        <span class="new-price">New: 22,750 D.A</span>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <!-- Duplicated cards to reach 15 elements -->
                        <div class="product-card" data-product-id="logitech-mx-master-3s-dup">
                            <a href="javascript:void(0);" class="product-link" onclick="openProductDetails('logitech-mx-master-3s-dup')">
                                <div class="product-image">
                                    <span class="product-badge">Logitech MX Master 3S</span>
                                    <img src="https://images-na.ssl-images-amazon.com/images/I/61xKiCADfpL._AC_SL1500_.jpg" alt="Logitech Mouse" onerror="this.src='https://via.placeholder.com/150x150?text=Image+Not+Found'">
                                </div>
                                <div class="product-info">
                                    <h3>Logitech MX Master 3S - Wireless Performance Mouse with Ultra-fast Scrolling</h3>
                                    <div class="product-price">8750 D.A</div>
                                    <div class="product-price-info">
                                        <span class="original-price">12000 D.A</span>
                                        <span class="new-price">New: 8,750 D.A</span>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="product-card" data-product-id="sony-wh-1000xm5-dup">
                            <a href="javascript:void(0);" class="product-link" onclick="openProductDetails('sony-wh-1000xm5-dup')">
                                <div class="product-image">
                                    <span class="product-badge">Sony WH-1000XM5</span>
                                    <img src="https://images-na.ssl-images-amazon.com/images/I/61+btxzpfDL._AC_SL1500_.jpg" alt="Sony Headphones" onerror="this.src='https://via.placeholder.com/150x150?text=Image+Not+Found'">
                                </div>
                                <div class="product-info">
                                    <h3>Sony WH-1000XM5 Wireless Noise Cancelling Headphones with Auto Noise Cancelling Optimizer</h3>
                                    <div class="product-price">22750 D.A</div>
                                    <div class="product-price-info">
                                        <span class="original-price">45000 D.A</span>
                                        <span class="new-price">New: 22,750 D.A</span>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="product-card" data-product-id="samsung-t7-shield-dup">
                            <a href="javascript:void(0);" class="product-link" onclick="openProductDetails('samsung-t7-shield-dup')">
                                <div class="product-image">
                                    <span class="product-badge">Samsung T7 Shield</span>
                                    <img src="https://m.media-amazon.com/images/I/71qjKjVpV1L._AC_SL1500_.jpg" alt="Samsung SSD" onerror="this.src='https://via.placeholder.com/150x150?text=Image+Not+Found'">
                                </div>
                                <div class="product-info">
                                    <h3>Samsung T7 Shield 2TB - Portable SSD, External Solid State Drive, USB 3.2 Gen2</h3>
                                    <div class="product-price">15750 D.A</div>
                                    <div class="product-price-info">
                                        <span class="original-price">28000 D.A</span>
                                        <span class="new-price">New: 15,750 D.A</span>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="product-card" data-product-id="anker-737-power-bank-dup">
                            <a href="javascript:void(0);" class="product-link" onclick="openProductDetails('anker-737-power-bank-dup')">
                                <div class="product-image">
                                    <span class="product-badge">Anker 737 Power Bank</span>
                                    <img src="https://m.media-amazon.com/images/I/71Linf+GHuL._AC_SL1500_.jpg" alt="Anker Power Bank" onerror="this.src='https://via.placeholder.com/150x150?text=Image+Not+Found'">
                                </div>
                                <div class="product-info">
                                    <h3>Anker 737 Power Bank (PowerCore 24K), 24,000mAh 140W Portable Charger</h3>
                                    <div class="product-price">9750 D.A</div>
                                    <div class="product-price-info">
                                        <span class="original-price">18000 D.A</span>
                                        <span class="new-price">New: 9,750 D.A</span>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="product-card" data-product-id="logitech-mx-keys-dup">
                            <a href="javascript:void(0);" class="product-link" onclick="openProductDetails('logitech-mx-keys-dup')">
                                <div class="product-image">
                                    <span class="product-badge">Logitech MX Keys</span>
                                    <img src="https://resource.logitech.com/w_544,h_466,ar_7:6,c_pad,q_auto,f_auto,dpr_2.0/d_transparent.gif/content/dam/logitech/en/products/keyboards/mx-keys-s/migration-assets-for-delorean-2025/gallery/mx-keys-s-top-view-black-us.png" alt="Logitech Keyboard" onerror="this.src='https://via.placeholder.com/150x150?text=Image+Not+Found'">
                                </div>
                                <div class="product-info">
                                    <h3>Logitech MX Keys Advanced Wireless Illuminated Keyboard, Tactile Responsive Typing</h3>
                                    <div class="product-price">8250 D.A</div>
                                    <div class="product-price-info">
                                        <span class="original-price">15000 D.A</span>
                                        <span class="new-price">New: 8,250 D.A</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <button class="carousel-arrow next-arrow"><i class="fas fa-chevron-right"></i></button>
                </div>
            </section>
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

    <!-- JavaScript for infinite carousel -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Initialize all carousels
            const carousels = document.querySelectorAll('.product-carousel-container');
            
            carousels.forEach(carousel => {
                const container = carousel.querySelector('.product-carousel');
                const prevBtn = carousel.querySelector('.prev-arrow');
                const nextBtn = carousel.querySelector('.next-arrow');
                const cards = container.querySelectorAll('.product-card');
                
                // Set initial position
                let position = 0;
                const cardWidth = cards[0].offsetWidth + parseInt(window.getComputedStyle(cards[0]).marginRight);
                const visibleCards = Math.floor(container.offsetWidth / cardWidth);
                const totalWidth = cardWidth * cards.length;
                
                // Clone first set of cards and append to end for infinite scroll
                const cloneFirst = [];
                for (let i = 0; i < visibleCards; i++) {
                    cloneFirst.push(cards[i].cloneNode(true));
                }
                
                cloneFirst.forEach(clone => {
                    container.appendChild(clone);
                });
                
                // Clone last set of cards and prepend to beginning for infinite scroll
                const cloneLast = [];
                for (let i = cards.length - visibleCards; i < cards.length; i++) {
                    cloneLast.push(cards[i].cloneNode(true));
                }
                
                cloneLast.reverse().forEach(clone => {
                    container.insertBefore(clone, container.firstChild);
                });
                
                // Adjust initial position to show first set of original cards
                position = -visibleCards * cardWidth;
                container.style.transform = `translateX(${position}px)`;
                
                // Event listeners for navigation
                nextBtn.addEventListener('click', () => {
                    if (position <= -(totalWidth + visibleCards * cardWidth - container.offsetWidth)) {
                        // Jump to the beginning (without animation)
                        position = -visibleCards * cardWidth;
                        container.style.transition = 'none';
                        container.style.transform = `translateX(${position}px)`;
                        
                        // Force reflow
                        container.offsetHeight;
                        
                        // Move one card with animation
                        position -= cardWidth;
                        container.style.transition = 'transform 0.3s ease';
                        container.style.transform = `translateX(${position}px)`;
                    } else {
                        // Normal scroll
                        position -= cardWidth;
                        container.style.transition = 'transform 0.3s ease';
                        container.style.transform = `translateX(${position}px)`;
                    }
                });
                
                prevBtn.addEventListener('click', () => {
                    if (position >= -visibleCards * cardWidth + cardWidth) {
                        // Jump to the end (without animation)
                        position = -(totalWidth);
                        container.style.transition = 'none';
                        container.style.transform = `translateX(${position}px)`;
                        
                        // Force reflow
                        container.offsetHeight;
                        
                        // Move one card with animation
                        position += cardWidth;
                        container.style.transition = 'transform 0.3s ease';
                        container.style.transform = `translateX(${position}px)`;
                    } else {
                        // Normal scroll
                        position += cardWidth;
                        container.style.transition = 'transform 0.3s ease';
                        container.style.transform = `translateX(${position}px)`;
                    }
                });
                
                // Auto scroll every 5 seconds
                setInterval(() => {
                    nextBtn.click();
                }, 5000);
            });
        });

        // Function to open product details page
        function openProductDetails(productId) {
            window.location.href = `product-details.html?id=${productId}`;
        }
    </script>
</body>
</html>