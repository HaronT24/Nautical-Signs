<?php include('includes/header.php'); ?>

<style>
    /* Products Page Specific Styles */
    .products-hero {
        position: relative;
        height: 42vh;
        display: flex;
        justify-content: center;
        align-items: center;
        text-align: center;
        margin: 20px;
        background-color: #fff;
        border-radius: 15px;
        box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        background-image: url('includes/images/products-bg.jpg');
        background-size: cover;
        background-position: center;
        color: white;
    }

    .products-hero::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: rgba(0, 98, 255, 0.6);
        border-radius: 15px;
    }

    .products-hero-content {
        max-width: 800px;
        padding: 20px;
        position: relative;
        z-index: 1;
    }

    .products-hero h1 {
        font-size: 42px;
        color: white;
        margin-bottom: 15px;
        text-shadow: 1px 1px 3px rgba(0,0,0,0.3);
    }

    .products-hero p {
        font-size: 18px;
        margin-bottom: 25px;
        color: white;
        text-shadow: 1px 1px 2px rgba(0,0,0,0.3);
    }

    .products-section {
        padding: 60px 20px;
        background-color: #f8f9fa;
    }

    .products-container {
        max-width: 1400px;
        margin: 0 auto;
        padding: 0 20px;
    }

    .products-filter {
        margin: 0 auto 40px;
        display: flex;
        justify-content: center;
        flex-wrap: wrap;
        gap: 15px;
        max-width: 800px;
    }

    .filter-btn {
        padding: 10px 20px;
        background: white;
        border: 2px solid #0062ff;
        color: #0062ff;
        border-radius: 30px;
        cursor: pointer;
        transition: all 0.3s ease;
        font-weight: bold;
    }

    .filter-btn:hover, .filter-btn.active {
        background: #0062ff;
        color: white;
    }

    /* 4-Column Grid Layout */
    .products-grid {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 25px;
    }

    .product-card {
        background: #fff;
        border-radius: 15px;
        overflow: hidden;
        box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        transition: transform 0.3s ease;
        margin: 0 auto;
    }

    .product-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 10px 25px rgba(0, 98, 255, 0.2);
    }

    .product-image {
        height: 200px;
        overflow: hidden;
        position: relative;
    }

    .product-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.5s ease;
    }

    .product-card:hover .product-image img {
        transform: scale(1.05);
    }

    .product-badge {
        position: absolute;
        top: 15px;
        right: 15px;
        background: #0062ff;
        color: white;
        padding: 5px 15px;
        border-radius: 30px;
        font-size: 14px;
        font-weight: bold;
    }

    .product-content {
        padding: 20px;
    }

    .product-title {
        font-size: 18px;
        margin-bottom: 10px;
        color: #333;
    }

    .product-price {
        font-size: 16px;
        font-weight: bold;
        color: #0062ff;
        margin-bottom: 12px;
    }

    .product-description {
        color: #666;
        margin-bottom: 15px;
        line-height: 1.5;
        font-size: 14px;
    }

    .product-features {
        list-style-type: none;
        padding: 0;
        margin: 0 0 15px;
    }

    .product-features li {
        padding: 6px 0;
        border-bottom: 1px solid #eee;
        color: #555;
        display: flex;
        align-items: center;
        font-size: 13px;
    }

    .product-features li:before {
        content: "•";
        color: #0062ff;
        margin-right: 8px;
        font-weight: bold;
    }

    .product-features li:last-child {
        border-bottom: none;
    }

    .product-actions {
        display: flex;
        gap: 10px;
    }

    .btn-small {
        padding: 8px 15px;
        font-size: 14px;
    }

    /* Responsive Adjustments */
    @media (max-width: 1200px) {
        .products-grid {
            grid-template-columns: repeat(3, 1fr);
        }
    }

    @media (max-width: 900px) {
        .products-grid {
            grid-template-columns: repeat(2, 1fr);
        }
    }

    @media (max-width: 600px) {
        .products-grid {
            grid-template-columns: 1fr;
            max-width: 400px;
        }
        
        .product-image {
            height: 200px;
        }
        
        .products-hero {
            height: 50vh;
        }
        
        .products-hero h1 {
            font-size: 32px;
        }
        
        .products-hero p {
            font-size: 16px;
        }
    }
</style>

<section class="products-hero">
    <div class="products-hero-content">
        <h1>Our Premium Signage Products</h1>
        <p>20+ high-quality signage solutions to elevate your brand visibility</p>
        <a href="gallery.php" class="btn">See Full Catalog</a>
    </div>
</section>

<section class="products-section">
    <div class="products-container">
        <div class="products-filter">
            <button class="filter-btn active" data-filter="all">All Products</button>
            <button class="filter-btn" data-filter="3d">3D Signs</button>
            <button class="filter-btn" data-filter="neon">Neon Signs</button>
            <button class="filter-btn" data-filter="channel">Channel Letters</button>
            <button class="filter-btn" data-filter="pylon">Pylon Signs</button>
            <button class="filter-btn" data-filter="digital">Digital Signs</button>
        </div>

        <div class="products-grid">
            <!-- Product 1 -->
            <div class="product-card" data-category="3d">
                <div class="product-image">
                    <img src="includes/images/3d-facade-sign.jpg" alt="3D Facade Sign">
                    <span class="product-badge">Bestseller</span>
                </div>
                <div class="product-content">
                    <h3 class="product-title">3D Facade Sign</h3>
                    <div class="product-price">From $899</div>
                    <p class="product-description">Dimensional signage with depth effects for storefronts.</p>
                    <ul class="product-features">
                        <li>5+ year outdoor durability</li>
                        <li>LED illumination options</li>
                        <li>Custom colors & finishes</li>
                    </ul>
                    <div class="product-actions">
                        <a href="3d-facade-details.php" class="btn btn-small">Details</a>
                        <a href="contact-us.php" class="btn btn-small btn-outline">Quote</a>
                    </div>
                </div>
            </div>

            <!-- Product 2 -->
            <div class="product-card" data-category="neon">
                <div class="product-image">
                    <img src="includes/images/vintage-neon.jpg" alt="Vintage Neon Sign">
                </div>
                <div class="product-content">
                    <h3 class="product-title">Vintage Neon Sign</h3>
                    <div class="product-price">From $1,299</div>
                    <p class="product-description">Authentic glass neon with retro charm.</p>
                    <ul class="product-features">
                        <li>Hand-blown glass tubes</li>
                        <li>Custom shapes & colors</li>
                        <li>2-year warranty</li>
                    </ul>
                    <div class="product-actions">
                        <a href="vintage-neon-details.php" class="btn btn-small">Details</a>
                        <a href="contact-us.php" class="btn btn-small btn-outline">Quote</a>
                    </div>
                </div>
            </div>

            <!-- Product 3 -->
            <div class="product-card" data-category="channel">
                <div class="product-image">
                    <img src="includes/images/channel-letters.jpg" alt="Channel Letters">
                    <span class="product-badge">Popular</span>
                </div>
                <div class="product-content">
                    <h3 class="product-title">Channel Letters</h3>
                    <div class="product-price">From $1,499</div>
                    <p class="product-description">Professional dimensional letters.</p>
                    <ul class="product-features">
                        <li>Front-lit or halo-lit</li>
                        <li>Aluminum construction</li>
                        <li>Weatherproof design</li>
                    </ul>
                    <div class="product-actions">
                        <a href="channel-letters-details.php" class="btn btn-small">Details</a>
                        <a href="contact-us.php" class="btn btn-small btn-outline">Quote</a>
                    </div>
                </div>
            </div>

            <!-- Product 4 -->
            <div class="product-card" data-category="pylon">
                <div class="product-image">
                    <img src="includes/images/monument-pylon.jpg" alt="Monument Pylon Sign">
                </div>
                <div class="product-content">
                    <h3 class="product-title">Monument Pylon</h3>
                    <div class="product-price">From $3,999</div>
                    <p class="product-description">Freestanding landmark signage.</p>
                    <ul class="product-features">
                        <li>Structural steel framework</li>
                        <li>Custom height options</li>
                        <li>10+ year durability</li>
                    </ul>
                    <div class="product-actions">
                        <a href="monument-pylon-details.php" class="btn btn-small">Details</a>
                        <a href="contact-us.php" class="btn btn-small btn-outline">Quote</a>
                    </div>
                </div>
            </div>

            <!-- Product 5 -->
            <div class="product-card" data-category="3d">
                <div class="product-image">
                    <img src="includes/images/3d-lobby.jpg" alt="3D Lobby Sign">
                </div>
                <div class="product-content">
                    <h3 class="product-title">3D Lobby Sign</h3>
                    <div class="product-price">From $699</div>
                    <p class="product-description">Elegant dimensional interior signage.</p>
                    <ul class="product-features">
                        <li>Premium acrylic or metal</li>
                        <li>Backlit options</li>
                        <li>Easy installation</li>
                    </ul>
                    <div class="product-actions">
                        <a href="3d-lobby-details.php" class="btn btn-small">Details</a>
                        <a href="contact-us.php" class="btn btn-small btn-outline">Quote</a>
                    </div>
                </div>
            </div>

            <!-- Product 6 -->
            <div class="product-card" data-category="neon">
                <div class="product-image">
                    <img src="includes/images/led-neon.jpg" alt="LED Neon Flex">
                    <span class="product-badge">New</span>
                </div>
                <div class="product-content">
                    <h3 class="product-title">LED Neon Flex</h3>
                    <div class="product-price">From $799</div>
                    <p class="product-description">Modern neon alternative.</p>
                    <ul class="product-features">
                        <li>Energy efficient</li>
                        <li>16+ million colors</li>
                        <li>5-year warranty</li>
                    </ul>
                    <div class="product-actions">
                        <a href="led-neon-details.php" class="btn btn-small">Details</a>
                        <a href="contact-us.php" class="btn btn-small btn-outline">Quote</a>
                    </div>
                </div>
            </div>

            <!-- Product 7 -->
            <div class="product-card" data-category="channel">
                <div class="product-image">
                    <img src="includes/images/backlit-channel.jpg" alt="Backlit Channel Letters">
                </div>
                <div class="product-content">
                    <h3 class="product-title">Backlit Channel</h3>
                    <div class="product-price">From $1,799</div>
                    <p class="product-description">Highly visible illuminated letters.</p>
                    <ul class="product-features">
                        <li>High-output LEDs</li>
                        <li>Durable aluminum</li>
                        <li>Custom colors</li>
                    </ul>
                    <div class="product-actions">
                        <a href="backlit-channel-details.php" class="btn btn-small">Details</a>
                        <a href="contact-us.php" class="btn btn-small btn-outline">Quote</a>
                    </div>
                </div>
            </div>

            <!-- Product 8 -->
            <div class="product-card" data-category="digital">
                <div class="product-image">
                    <img src="includes/images/digital-pylon.jpg" alt="Digital Pylon Sign">
                    <span class="product-badge">Premium</span>
                </div>
                <div class="product-content">
                    <h3 class="product-title">Digital Pylon</h3>
                    <div class="product-price">From $8,999</div>
                    <p class="product-description">State-of-the-art digital signage.</p>
                    <ul class="product-features">
                        <li>Full color LED display</li>
                        <li>Remote content management</li>
                        <li>Weatherproof</li>
                    </ul>
                    <div class="product-actions">
                        <a href="digital-pylon-details.php" class="btn btn-small">Details</a>
                        <a href="contact-us.php" class="btn btn-small btn-outline">Quote</a>
                    </div>
                </div>
            </div>

            <!-- Product 9 -->
            <div class="product-card" data-category="3d">
                <div class="product-image">
                    <img src="includes/images/acrylic-3d.jpg" alt="Acrylic 3D Sign">
                </div>
                <div class="product-content">
                    <h3 class="product-title">Acrylic 3D Sign</h3>
                    <div class="product-price">From $749</div>
                    <p class="product-description">Modern illuminated acrylic signage.</p>
                    <ul class="product-features">
                        <li>1.5" thick acrylic</li>
                        <li>LED edge lighting</li>
                        <li>UV protected</li>
                    </ul>
                    <div class="product-actions">
                        <a href="acrylic-3d-details.php" class="btn btn-small">Details</a>
                        <a href="contact-us.php" class="btn btn-small btn-outline">Quote</a>
                    </div>
                </div>
            </div>

            <!-- Product 10 -->
            <div class="product-card" data-category="neon">
                <div class="product-image">
                    <img src="includes/images/neon-open.jpg" alt="Neon Open Sign">
                </div>
                <div class="product-content">
                    <h3 class="product-title">Neon Open Sign</h3>
                    <div class="product-price">From $1,099</div>
                    <p class="product-description">Classic "OPEN" neon sign.</p>
                    <ul class="product-features">
                        <li>Red or custom colors</li>
                        <li>24/7 operation</li>
                        <li>Energy efficient</li>
                    </ul>
                    <div class="product-actions">
                        <a href="neon-open-details.php" class="btn btn-small">Details</a>
                        <a href="contact-us.php" class="btn btn-small btn-outline">Quote</a>
                    </div>
                </div>
            </div>

            <!-- Product 11 -->
            <div class="product-card" data-category="channel">
                <div class="product-image">
                    <img src="includes/images/halo-channel.jpg" alt="Halo Channel Letters">
                    <span class="product-badge">Trending</span>
                </div>
                <div class="product-content">
                    <h3 class="product-title">Halo Channel Letters</h3>
                    <div class="product-price">From $1,899</div>
                    <p class="product-description">Elegant backlit signage solution.</p>
                    <ul class="product-features">
                        <li>Creates halo effect</li>
                        <li>Stainless steel returns</li>
                        <li>Low maintenance</li>
                    </ul>
                    <div class="product-actions">
                        <a href="halo-channel-details.php" class="btn btn-small">Details</a>
                        <a href="contact-us.php" class="btn btn-small btn-outline">Quote</a>
                    </div>
                </div>
            </div>

            <!-- Product 12 -->
            <div class="product-card" data-category="pylon">
                <div class="product-image">
                    <img src="includes/images/double-pylon.jpg" alt="Double-Sided Pylon">
                </div>
                <div class="product-content">
                    <h3 class="product-title">Double-Sided Pylon</h3>
                    <div class="product-price">From $4,499</div>
                    <p class="product-description">High visibility from all directions.</p>
                    <ul class="product-features">
                        <li>360° visibility</li>
                        <li>LED illuminated</li>
                        <li>Wind resistant</li>
                    </ul>
                    <div class="product-actions">
                        <a href="double-pylon-details.php" class="btn btn-small">Details</a>
                        <a href="contact-us.php" class="btn btn-small btn-outline">Quote</a>
                    </div>
                </div>
            </div>

            <!-- Product 13 -->
            <div class="product-card" data-category="digital">
                <div class="product-image">
                    <img src="includes/images/digital-menu.jpg" alt="Digital Menu Board">
                    <span class="product-badge">New</span>
                </div>
                <div class="product-content">
                    <h3 class="product-title">Digital Menu Board</h3>
                    <div class="product-price">From $2,999</div>
                    <p class="product-description">Dynamic digital menu solution.</p>
                    <ul class="product-features">
                        <li>4K UHD display</li>
                        <li>Touchscreen options</li>
                        <li>Cloud management</li>
                    </ul>
                    <div class="product-actions">
                        <a href="digital-menu-details.php" class="btn btn-small">Details</a>
                        <a href="contact-us.php" class="btn btn-small btn-outline">Quote</a>
                    </div>
                </div>
            </div>

            <!-- Product 14 -->
            <div class="product-card" data-category="3d">
                <div class="product-image">
                    <img src="includes/images/metal-3d.jpg" alt="Metal 3D Sign">
                </div>
                <div class="product-content">
                    <h3 class="product-title">Metal 3D Sign</h3>
                    <div class="product-price">From $1,199</div>
                    <p class="product-description">Industrial-chic metal signage.</p>
                    <ul class="product-features">
                        <li>Stainless steel or brass</li>
                        <li>Patina finishes available</li>
                        <li>Outdoor rated</li>
                    </ul>
                    <div class="product-actions">
                        <a href="metal-3d-details.php" class="btn btn-small">Details</a>
                        <a href="contact-us.php" class="btn btn-small btn-outline">Quote</a>
                    </div>
                </div>
            </div>

            <!-- Product 15 -->
            <div class="product-card" data-category="neon">
                <div class="product-image">
                    <img src="includes/images/neon-bar.jpg" alt="Neon Bar Sign">
                </div>
                <div class="product-content">
                    <h3 class="product-title">Neon Bar Sign</h3>
                    <div class="product-price">From $1,499</div>
                    <p class="product-description">Custom neon for bars/pubs.</p>
                    <ul class="product-features">
                        <li>Custom cocktail designs</li>
                        <li>Dimmable transformers</li>
                        <li>Indoor/outdoor options</li>
                    </ul>
                    <div class="product-actions">
                        <a href="neon-bar-details.php" class="btn btn-small">Details</a>
                        <a href="contact-us.php" class="btn btn-small btn-outline">Quote</a>
                    </div>
                </div>
            </div>

            <!-- Product 16 -->
            <div class="product-card" data-category="channel">
                <div class="product-image">
                    <img src="includes/images/raceway-channel.jpg" alt="Raceway Channel Letters">
                </div>
                <div class="product-content">
                    <h3 class="product-title">Raceway Channel Letters</h3>
                    <div class="product-price">From $1,299</div>
                    <p class="product-description">Cost-effective illuminated signage.</p>
                    <ul class="product-features">
                        <li>Integrated wiring channel</li>
                        <li>Quick installation</li>
                        <li>Maintenance friendly</li>
                    </ul>
                    <div class="product-actions">
                        <a href="raceway-channel-details.php" class="btn btn-small">Details</a>
                        <a href="contact-us.php" class="btn btn-small btn-outline">Quote</a>
                    </div>
                </div>
            </div>

            <!-- Product 17 -->
            <div class="product-card" data-category="pylon">
                <div class="product-image">
                    <img src="includes/images/illuminated-pylon.jpg" alt="Illuminated Pylon">
                    <span class="product-badge">Popular</span>
                </div>
                <div class="product-content">
                    <h3 class="product-title">Illuminated Pylon</h3>
                    <div class="product-price">From $5,499</div>
                    <p class="product-description">Bright LED pylon signage.</p>
                    <ul class="product-features">
                        <li>High-brightness LEDs</li>
                        <li>Day/night operation</li>
                        <li>15-year lifespan</li>
                    </ul>
                    <div class="product-actions">
                        <a href="illuminated-pylon-details.php" class="btn btn-small">Details</a>
                        <a href="contact-us.php" class="btn btn-small btn-outline">Quote</a>
                    </div>
                </div>
            </div>

            <!-- Product 18 -->
            <div class="product-card" data-category="digital">
                <div class="product-image">
                    <img src="includes/images/window-display.jpg" alt="Window Digital Display">
                </div>
                <div class="product-content">
                    <h3 class="product-title">Window Digital Display</h3>
                    <div class="product-price">From $1,899</div>
                    <p class="product-description">Interactive window signage.</p>
                    <ul class="product-features">
                        <li>Transparent LCD technology</li>
                        <li>Interactive content</li>
                        <li>Weatherproof</li>
                    </ul>
                    <div class="product-actions">
                        <a href="window-display-details.php" class="btn btn-small">Details</a>
                        <a href="contact-us.php" class="btn btn-small btn-outline">Quote</a>
                    </div>
                </div>
            </div>

            <!-- Product 19 -->
            <div class="product-card" data-category="3d">
                <div class="product-image">
                    <img src="includes/images/wood-3d.jpg" alt="Wood 3D Sign">
                </div>
                <div class="product-content">
                    <h3 class="product-title">Wood 3D Sign</h3>
                    <div class="product-price">From $999</div>
                    <p class="product-description">Rustic dimensional wood signage.</p>
                    <ul class="product-features">
                        <li>Reclaimed wood options</li>
                        <li>CNC carved details</li>
                        <li>Outdoor treatments</li>
                    </ul>
                    <div class="product-actions">
                        <a href="wood-3d-details.php" class="btn btn-small">Details</a>
                        <a href="contact-us.php" class="btn btn-small btn-outline">Quote</a>
                    </div>
                </div>
            </div>

            <!-- Product 20 -->
            <div class="product-card" data-category="digital">
                <div class="product-image">
                    <img src="includes/images/led-video-wall.jpg" alt="LED Video Wall">
                    <span class="product-badge">Premium</span>
                </div>
                <div class="product-content">
                    <h3 class="product-title">LED Video Wall</h3>
                    <div class="product-price">From $12,999</div>
                    <p class="product-description">Immersive large-format display.</p>
                    <ul class="product-features">
                        <li>Seamless tiling</li>
                        <li>4K resolution</li>
                        <li>Commercial grade</li>
                    </ul>
                    <div class="product-actions">
                        <a href="led-video-wall-details.php" class="btn btn-small">Details</a>
                        <a href="contact-us.php" class="btn btn-small btn-outline">Quote</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    // Product Filtering
    const filterBtns = document.querySelectorAll('.filter-btn');
    const productCards = document.querySelectorAll('.product-card');

    filterBtns.forEach(btn => {
        btn.addEventListener('click', () => {
            // Update active button
            filterBtns.forEach(btn => btn.classList.remove('active'));
            btn.classList.add('active');
            
            const filter = btn.dataset.filter;
            
            // Filter products
            productCards.forEach(card => {
                if (filter === 'all' || card.dataset.category === filter) {
                    card.style.display = 'block';
                } else {
                    card.style.display = 'none';
                }
            });
        });
    });
</script>

<?php include('includes/footer.php'); ?>