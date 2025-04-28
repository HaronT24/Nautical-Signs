<?php include('includes/header.php'); ?>

<style>
    /* Gallery Page Styles */
    .gallery-hero {
        position: relative;
        height: 50vh;
        display: flex;
        justify-content: center;
        align-items: center;
        text-align: center;
        margin: 20px;
        border-radius: 15px;
        box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        background-image: url('includes/images/gallery-bg.jpg');
        background-size: cover;
        background-position: center;
        color: white;
        overflow: hidden;
    }

    .gallery-hero::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: rgba(0, 98, 255, 0.7);
        z-index: 1;
    }

    .gallery-hero-content {
        max-width: 800px;
        padding: 20px;
        position: relative;
        z-index: 2;
    }

    .gallery-hero h1 {
        font-size: 42px;
        margin-bottom: 15px;
        text-shadow: 2px 2px 4px rgba(0,0,0,0.3);
    }

    .gallery-hero p {
        font-size: 18px;
        margin-bottom: 25px;
        text-shadow: 1px 1px 2px rgba(0,0,0,0.3);
    }

    .gallery-section {
        padding: 60px 20px;
        background-color: #f8f9fa;
    }

    .gallery-container {
        max-width: 1400px;
        margin: 0 auto;
    }

    .gallery-filter {
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

    .gallery-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
        gap: 25px;
    }

    .gallery-item {
        position: relative;
        border-radius: 10px;
        overflow: hidden;
        box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        transition: transform 0.3s ease;
        aspect-ratio: 1/1;
    }

    .gallery-item:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 25px rgba(0, 98, 255, 0.2);
    }

    .gallery-img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.5s ease;
    }

    .gallery-item:hover .gallery-img {
        transform: scale(1.05);
    }

    .gallery-caption {
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        background: linear-gradient(to top, rgba(0,0,0,0.8), transparent);
        color: white;
        padding: 20px;
        transform: translateY(100%);
        transition: transform 0.3s ease;
    }

    .gallery-item:hover .gallery-caption {
        transform: translateY(0);
    }

    .gallery-caption h3 {
        font-size: 18px;
        margin-bottom: 5px;
    }

    .gallery-caption p {
        font-size: 14px;
        opacity: 0.9;
    }

    /* Lightbox Styles */
    .lightbox {
        display: none;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0,0,0,0.9);
        z-index: 1000;
        justify-content: center;
        align-items: center;
    }

    .lightbox-content {
        max-width: 90%;
        max-height: 90%;
    }

    .lightbox-img {
        max-width: 100%;
        max-height: 90vh;
        border-radius: 5px;
    }

    .lightbox-caption {
        color: white;
        text-align: center;
        margin-top: 15px;
    }

    .close-lightbox {
        position: absolute;
        top: 30px;
        right: 30px;
        color: white;
        font-size: 30px;
        cursor: pointer;
    }

    .nav-lightbox {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        color: white;
        font-size: 30px;
        cursor: pointer;
        background: rgba(0, 98, 255, 0.5);
        width: 50px;
        height: 50px;
        display: flex;
        justify-content: center;
        align-items: center;
        border-radius: 50%;
    }

    .prev {
        left: 30px;
    }

    .next {
        right: 30px;
    }

    @media (max-width: 768px) {
        .gallery-hero {
            height: 40vh;
        }
        
        .gallery-hero h1 {
            font-size: 32px;
        }
        
        .gallery-grid {
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
        }
        
        .gallery-filter {
            justify-content: flex-start;
            padding: 0 15px;
        }
    }
</style>

<section class="gallery-hero">
    <div class="gallery-hero-content">
        <h1>Our Signage Portfolio</h1>
        <p>Explore our collection of completed projects showcasing craftsmanship and innovation</p>
    </div>
</section>

<section class="gallery-section">
    <div class="gallery-container">
        <div class="gallery-filter">
            <button class="filter-btn active" data-filter="all">All Projects</button>
            <button class="filter-btn" data-filter="neon">Neon Signs</button>
            <button class="filter-btn" data-filter="3d">3D Signs</button>
            <button class="filter-btn" data-filter="channel">Channel Letters</button>
            <button class="filter-btn" data-filter="pylon">Pylon Signs</button>
            <button class="filter-btn" data-filter="digital">Digital Signs</button>
        </div>

        <div class="gallery-grid">
            <!-- Neon Sign 1 -->
            <div class="gallery-item" data-category="neon">
                <img src="includes/images/gallery/neon-bar-sign.jpg" alt="Custom Neon Bar Sign" class="gallery-img">
                <div class="gallery-caption">
                    <h3>The Blue Note Bar</h3>
                    <p>Custom neon sign with vintage aesthetic</p>
                </div>
            </div>

            <!-- 3D Sign 1 -->
            <div class="gallery-item" data-category="3d">
                <img src="includes/images/gallery/3d-lobby-sign.jpg" alt="3D Lobby Sign" class="gallery-img">
                <div class="gallery-caption">
                    <h3>TechGlobal Headquarters</h3>
                    <p>Backlit acrylic 3D lobby signage</p>
                </div>
            </div>

            <!-- Channel Letters 1 -->
            <div class="gallery-item" data-category="channel">
                <img src="includes/images/gallery/channel-letters-storefront.jpg" alt="Channel Letters Storefront" class="gallery-img">
                <div class="gallery-caption">
                    <h3>Urban Dental</h3>
                    <p>Illuminated channel letters with halo lighting</p>
                </div>
            </div>

            <!-- Pylon Sign 1 -->
            <div class="gallery-item" data-category="pylon">
                <img src="includes/images/gallery/pylon-gas-station.jpg" alt="Gas Station Pylon Sign" class="gallery-img">
                <div class="gallery-caption">
                    <h3>QuickFill Gas Station</h3>
                    <p>Double-sided LED pylon sign</p>
                </div>
            </div>

            <!-- Digital Sign 1 -->
            <div class="gallery-item" data-category="digital">
                <img src="includes/images/gallery/digital-menu-board.jpg" alt="Digital Menu Board" class="gallery-img">
                <div class="gallery-caption">
                    <h3>BurgerHouse</h3>
                    <p>Interactive digital menu board system</p>
                </div>
            </div>

            <!-- Neon Sign 2 -->
            <div class="gallery-item" data-category="neon">
                <img src="includes/images/gallery/neon-open-sign.jpg" alt="Neon Open Sign" class="gallery-img">
                <div class="gallery-caption">
                    <h3>Boutique Elegance</h3>
                    <p>Classic "OPEN" neon sign with custom colors</p>
                </div>
            </div>

            <!-- 3D Sign 2 -->
            <div class="gallery-item" data-category="3d">
                <img src="includes/images/gallery/3d-facade.jpg" alt="3D Facade Sign" class="gallery-img">
                <div class="gallery-caption">
                    <h3>Summit Financial</h3>
                    <p>Dimensional metal facade signage</p>
                </div>
            </div>

            <!-- Channel Letters 2 -->
            <div class="gallery-item" data-category="channel">
                <img src="includes/images/gallery/raceway-channel.jpg" alt="Raceway Channel Letters" class="gallery-img">
                <div class="gallery-caption">
                    <h3>EcoSolutions</h3>
                    <p>Raceway mounted channel letters</p>
                </div>
            </div>

            <!-- Pylon Sign 2 -->
            <div class="gallery-item" data-category="pylon">
                <img src="includes/images/gallery/monument-sign.jpg" alt="Monument Sign" class="gallery-img">
                <div class="gallery-caption">
                    <h3>Grand Theater</h3>
                    <p>Illuminated monument sign with stone base</p>
                </div>
            </div>

            <!-- Digital Sign 2 -->
            <div class="gallery-item" data-category="digital">
                <img src="includes/images/gallery/window-display.jpg" alt="Window Digital Display" class="gallery-img">
                <div class="gallery-caption">
                    <h3>TrendMart Stores</h3>
                    <p>Transparent LCD window display</p>
                </div>
            </div>

            <!-- Neon Sign 3 -->
            <div class="gallery-item" data-category="neon">
                <img src="includes/images/gallery/led-neon-flex.jpg" alt="LED Neon Flex Sign" class="gallery-img">
                <div class="gallery-caption">
                    <h3>Sweet Treats Bakery</h3>
                    <p>Custom LED neon flex signage</p>
                </div>
            </div>

            <!-- 3D Sign 3 -->
            <div class="gallery-item" data-category="3d">
                <img src="includes/images/gallery/wood-3d-sign.jpg" alt="Wood 3D Sign" class="gallery-img">
                <div class="gallery-caption">
                    <h3>Rustic Cabin Lodge</h3>
                    <p>Reclaimed wood dimensional sign</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Lightbox HTML -->
<div class="lightbox" id="lightbox">
    <span class="close-lightbox">&times;</span>
    <div class="lightbox-content">
        <img src="" alt="" class="lightbox-img" id="lightbox-img">
        <div class="lightbox-caption" id="lightbox-caption"></div>
    </div>
    <span class="nav-lightbox prev" id="prev">&#10094;</span>
    <span class="nav-lightbox next" id="next">&#10095;</span>
</div>

<script>
    // Gallery Filtering
    const filterBtns = document.querySelectorAll('.filter-btn');
    const galleryItems = document.querySelectorAll('.gallery-item');

    filterBtns.forEach(btn => {
        btn.addEventListener('click', () => {
            // Update active button
            filterBtns.forEach(btn => btn.classList.remove('active'));
            btn.classList.add('active');
            
            const filter = btn.dataset.filter;
            
            // Filter gallery items
            galleryItems.forEach(item => {
                if (filter === 'all' || item.dataset.category === filter) {
                    item.style.display = 'block';
                } else {
                    item.style.display = 'none';
                }
            });
        });
    });

    // Lightbox functionality
    const lightbox = document.getElementById('lightbox');
    const lightboxImg = document.getElementById('lightbox-img');
    const lightboxCaption = document.getElementById('lightbox-caption');
    const closeBtn = document.querySelector('.close-lightbox');
    const prevBtn = document.getElementById('prev');
    const nextBtn = document.getElementById('next');
    const galleryImages = document.querySelectorAll('.gallery-img');
    
    let currentIndex = 0;
    
    // Open lightbox
    galleryImages.forEach((img, index) => {
        img.addEventListener('click', () => {
            currentIndex = index;
            updateLightbox();
            lightbox.style.display = 'flex';
            document.body.style.overflow = 'hidden';
        });
    });
    
    // Close lightbox
    closeBtn.addEventListener('click', () => {
        lightbox.style.display = 'none';
        document.body.style.overflow = 'auto';
    });
    
    // Navigation
    prevBtn.addEventListener('click', () => {
        currentIndex = (currentIndex - 1 + galleryImages.length) % galleryImages.length;
        updateLightbox();
    });
    
    nextBtn.addEventListener('click', () => {
        currentIndex = (currentIndex + 1) % galleryImages.length;
        updateLightbox();
    });
    
    // Keyboard navigation
    document.addEventListener('keydown', (e) => {
        if (lightbox.style.display === 'flex') {
            if (e.key === 'ArrowLeft') {
                currentIndex = (currentIndex - 1 + galleryImages.length) % galleryImages.length;
                updateLightbox();
            } else if (e.key === 'ArrowRight') {
                currentIndex = (currentIndex + 1) % galleryImages.length;
                updateLightbox();
            } else if (e.key === 'Escape') {
                lightbox.style.display = 'none';
                document.body.style.overflow = 'auto';
            }
        }
    });
    
    function updateLightbox() {
        const activeImg = galleryImages[currentIndex];
        lightboxImg.src = activeImg.src;
        lightboxCaption.innerHTML = activeImg.alt;
    }
</script>

<?php include('includes/footer.php'); ?>