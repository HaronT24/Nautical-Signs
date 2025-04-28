<?php include('includes/header.php'); ?>

<style>
    /* Services Page Specific Styles */
    .services-hero {
        position: relative;
        height: 50vh;
        display: flex;
        justify-content: center;
        align-items: center;
        text-align: center;
        margin: 20px;
        border-radius: 15px;
        box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        background-image: url('includes/images/services-bg.jpg');
        background-size: cover;
        background-position: center;
        color: white;
        overflow: hidden;
    }

    .services-hero::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: rgba(0, 98, 255, 0.7);
        z-index: 1;
    }

    .services-hero-content {
        max-width: 800px;
        padding: 20px;
        position: relative;
        z-index: 2;
    }

    .services-hero h1 {
        font-size: 42px;
        margin-bottom: 15px;
        text-shadow: 2px 2px 4px rgba(0,0,0,0.3);
        color: white;
    }

    .services-hero p {
        font-size: 18px;
        margin-bottom: 25px;
        color: white;
        text-shadow: 1px 1px 2px rgba(0,0,0,0.3);
    }

    .services-section {
        padding: 60px 20px;
        background-color: #f8f9fa;
    }

    .services-container {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
        gap: 30px;
        max-width: 1200px;
        margin: 0 auto;
    }

    .service-card {
        background: #fff;
        border-radius: 15px;
        overflow: hidden;
        box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        transition: transform 0.3s ease;
    }

    .service-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 10px 25px rgba(0, 98, 255, 0.2);
    }

    .service-image {
        height: 200px;
        overflow: hidden;
    }

    .service-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.5s ease;
    }

    .service-card:hover .service-image img {
        transform: scale(1.05);
    }

    .service-content {
        padding: 25px;
    }

    .service-icon {
        font-size: 40px;
        color: #0062ff;
        margin-bottom: 15px;
    }

    .service-card h2 {
        font-size: 24px;
        margin-bottom: 15px;
        color: #333;
    }

    .service-card p {
        color: #666;
        margin-bottom: 20px;
        line-height: 1.6;
    }

    .service-features {
        list-style-type: none;
        padding: 0;
        margin: 0;
    }

    .service-features li {
        padding: 8px 0;
        border-bottom: 1px solid #eee;
        color: #555;
        display: flex;
        align-items: center;
    }

    .service-features li:before {
        content: "✓";
        color: #0062ff;
        margin-right: 10px;
        font-weight: bold;
    }

    .service-features li:last-child {
        border-bottom: none;
    }

    .process-section {
        padding: 80px 20px;
        text-align: center;
        background: linear-gradient(135deg, #0062ff, #00f2ff);
        color: white;
    }

    .section-title {
        font-size: 36px;
        margin-bottom: 60px;
        color: white;
        text-shadow: 1px 1px 3px rgba(0,0,0,0.3);
    }

    .process-steps {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 30px;
        max-width: 1200px;
        margin: 0 auto;
    }

    .process-step {
        background: rgba(255,255,255,0.1);
        border-radius: 15px;
        padding: 30px;
        backdrop-filter: blur(10px);
    }

    .step-number {
        width: 60px;
        height: 60px;
        background: white;
        color: #0062ff;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 24px;
        font-weight: bold;
        margin: 0 auto 20px;
        box-shadow: 0 4px 8px rgba(0,0,0,0.1);
    }

    .process-step h3 {
        font-size: 22px;
        margin-bottom: 15px;
        text-shadow: 1px 1px 2px rgba(0,0,0,0.2);
    }

    .process-step p {
        line-height: 1.6;
        opacity: 0.9;
    }

    .cta-section {
        text-align: center;
        padding: 80px 20px;
        background-color: #fff;
    }

    .cta-section h2 {
        font-size: 36px;
        margin-bottom: 20px;
        background: linear-gradient(90deg, #0062ff, #0062ff);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }

    .cta-section p {
        font-size: 18px;
        color: #666;
        max-width: 700px;
        margin: 0 auto 30px;
    }

    .cta-buttons {
        display: flex;
        justify-content: center;
        gap: 20px;
        flex-wrap: wrap;
    }

    .btn-outline {
        background: transparent;
        border: 2px solid #0062ff;
        color: #0062ff;
    }

    .btn-outline:hover {
        background: #0062ff;
        color: white;
    }

    @media (max-width: 768px) {
        .services-hero {
            height: 60vh;
        }
        .services-hero h1 {
            font-size: 32px;
        }
        .services-hero p {
            font-size: 16px;
        }
        .services-container {
            grid-template-columns: 1fr;
        }
        .service-image {
            height: 180px;
        }
        .process-steps {
            grid-template-columns: 1fr;
        }
        .cta-buttons {
            flex-direction: column;
            align-items: center;
        }
        .cta-section h2 {
            font-size: 28px;
        }
    }
</style>

<section class="services-hero">
    <div class="services-hero-content">
        <h1>Our Comprehensive Signage Services</h1>
        <p>Professional solutions to elevate your brand visibility and customer experience</p>
        <a href="contact-us.php" class="btn">Get a Free Consultation</a>
    </div>
</section>

<section class="services-section">
    <div class="services-container">
        <!-- Service 1 -->
        <div class="service-card">
            <div class="service-image">
                <img src="includes/images/3d-signage.jpg" alt="3D Signage">
            </div>
            <div class="service-content">
                <div class="service-icon">
                    <i class="fas fa-cube"></i>
                </div>
                <h2>3D Sign Design & Fabrication</h2>
                <p>Custom dimensional signage that makes your brand stand out with depth and shadow effects.</p>
                <ul class="service-features">
                    <li>CNC routed letters</li>
                    <li>Layered dimensional signs</li>
                    <li>Illuminated options</li>
                    <li>Various material choices</li>
                </ul>
            </div>
        </div>

        <!-- Service 2 -->
        <div class="service-card">
            <div class="service-image">
                <img src="includes/images/neon-signage.jpg" alt="Neon Signage">
            </div>
            <div class="service-content">
                <div class="service-icon">
                    <i class="fas fa-lightbulb"></i>
                </div>
                <h2>Neon & LED Signage</h2>
                <p>Vibrant, eye-catching neon and LED signs that bring your brand to life day and night.</p>
                <ul class="service-features">
                    <li>Traditional glass neon</li>
                    <li>LED neon alternatives</li>
                    <li>Custom shapes and colors</li>
                    <li>Energy efficient options</li>
                </ul>
            </div>
        </div>

        <!-- Service 3 -->
        <div class="service-card">
            <div class="service-image">
                <img src="includes/images/channel-letters.jpg" alt="Channel Letters">
            </div>
            <div class="service-content">
                <div class="service-icon">
                    <i class="fas fa-building"></i>
                </div>
                <h2>Channel Letter Signs</h2>
                <p>Professional illuminated channel letters for maximum visibility and brand recognition.</p>
                <ul class="service-features">
                    <li>Front-lit, back-lit, or halo-lit</li>
                    <li>Various mounting options</li>
                    <li>Weather-resistant materials</li>
                    <li>Energy efficient LED lighting</li>
                </ul>
            </div>
        </div>

        <!-- Service 4 -->
        <div class="service-card">
            <div class="service-image">
                <img src="includes/images/wayfinding.jpg" alt="Wayfinding Signage">
            </div>
            <div class="service-content">
                <div class="service-icon">
                    <i class="fas fa-map-signs"></i>
                </div>
                <h2>Wayfinding & Interior Signs</h2>
                <p>Clear, attractive signage systems to guide customers through your space.</p>
                <ul class="service-features">
                    <li>Directory signs</li>
                    <li>ADA compliant signage</li>
                    <li>Room identification</li>
                    <li>Custom branding elements</li>
                </ul>
            </div>
        </div>

        <!-- Service 5 -->
        <div class="service-card">
            <div class="service-image">
                <img src="includes/images/installation.jpg" alt="Sign Installation">
            </div>
            <div class="service-content">
                <div class="service-icon">
                    <i class="fas fa-truck"></i>
                </div>
                <h2>Sign Installation</h2>
                <p>Professional installation services for all types of signage.</p>
                <ul class="service-features">
                    <li>Permit assistance</li>
                    <li>Structural assessments</li>
                    <li>Electrical connections</li>
                    <li>Maintenance services</li>
                </ul>
            </div>
        </div>

        <!-- Service 6 -->
        <div class="service-card">
            <div class="service-image">
                <img src="includes/images/design.jpg" alt="Sign Design">
            </div>
            <div class="service-content">
                <div class="service-icon">
                    <i class="fas fa-paint-brush"></i>
                </div>
                <h2>Custom Design Services</h2>
                <p>Creative design solutions to perfectly represent your brand.</p>
                <ul class="service-features">
                    <li>Brand-consistent designs</li>
                    <li>3D renderings</li>
                    <li>Material samples</li>
                    <li>Prototype development</li>
                </ul>
            </div>
        </div>

        <!-- Service 7 -->
        <div class="service-card">
            <div class="service-image">
                <img src="includes/images/pylon.jpg" alt="Pylon Signs">
            </div>
            <div class="service-content">
                <div class="service-icon">
                    <i class="fas fa-flag"></i>
                </div>
                <h2>Pylon & Monument Signs</h2>
                <p>Freestanding landmark signage for maximum visibility.</p>
                <ul class="service-features">
                    <li>Single or double-sided</li>
                    <li>Illuminated options</li>
                    <li>Structural engineering</li>
                    <li>Custom height options</li>
                </ul>
            </div>
        </div>

        <!-- Service 8 -->
        <div class="service-card">
            <div class="service-image">
                <img src="includes/images/digital.jpg" alt="Digital Signage">
            </div>
            <div class="service-content">
                <div class="service-icon">
                    <i class="fas fa-tv"></i>
                </div>
                <h2>Digital Signage Solutions</h2>
                <p>Dynamic digital displays for engaging content delivery.</p>
                <ul class="service-features">
                    <li>LED video walls</li>
                    <li>Interactive kiosks</li>
                    <li>Content management</li>
                    <li>Scheduled programming</li>
                </ul>
            </div>
        </div>

        <!-- Service 9 -->
        <div class="service-card">
            <div class="service-image">
                <img src="includes/images/vehicle.jpg" alt="Vehicle Wraps">
            </div>
            <div class="service-content">
                <div class="service-icon">
                    <i class="fas fa-car"></i>
                </div>
                <h2>Vehicle Wraps & Graphics</h2>
                <p>Mobile advertising solutions that turn heads.</p>
                <ul class="service-features">
                    <li>Full or partial wraps</li>
                    <li>High-quality vinyl</li>
                    <li>Professional installation</li>
                    <li>Removal services</li>
                </ul>
            </div>
        </div>

        <!-- Service 10 -->
        <div class="service-card">
            <div class="service-image">
                <img src="includes/images/window.jpg" alt="Window Graphics">
            </div>
            <div class="service-content">
                <div class="service-icon">
                    <i class="fas fa-store"></i>
                </div>
                <h2>Window Graphics & Lettering</h2>
                <p>Enhance storefront visibility with custom window solutions.</p>
                <ul class="service-features">
                    <li>Perforated window film</li>
                    <li>Frosted designs</li>
                    <li>Vinyl lettering</li>
                    <li>Removable options</li>
                </ul>
            </div>
        </div>

        <!-- Service 11 -->
        <div class="service-card">
            <div class="service-image">
                <img src="includes/images/awning.jpg" alt="Awning Signs">
            </div>
            <div class="service-content">
                <div class="service-icon">
                    <i class="fas fa-umbrella-beach"></i>
                </div>
                <h2>Awning Signs</h2>
                <p>Functional and attractive signage solutions.</p>
                <ul class="service-features">
                    <li>Retractable options</li>
                    <li>Illuminated awnings</li>
                    <li>Weather-resistant materials</li>
                    <li>Custom shapes/sizes</li>
                </ul>
            </div>
        </div>

        <!-- Service 12 -->
        <div class="service-card">
            <div class="service-image">
                <img src="includes/images/lightbox.jpg" alt="Lightbox Signs">
            </div>
            <div class="service-content">
                <div class="service-icon">
                    <i class="fas fa-lightbulb"></i>
                </div>
                <h2>Lightbox Signs</h2>
                <p>Bright, illuminated displays for high visibility.</p>
                <ul class="service-features">
                    <li>LED backlighting</li>
                    <li>Front or rear access</li>
                    <li>Durable face materials</li>
                    <li>Energy efficient</li>
                </ul>
            </div>
        </div>

        <!-- Service 13 -->
        <div class="service-card">
            <div class="service-image">
                <img src="includes/images/event.jpg" alt="Event Signage">
            </div>
            <div class="service-content">
                <div class="service-icon">
                    <i class="fas fa-calendar-alt"></i>
                </div>
                <h2>Event & Temporary Signage</h2>
                <p>Solutions for trade shows, promotions, and special events.</p>
                <ul class="service-features">
                    <li>Banner stands</li>
                    <li>Pop-up displays</li>
                    <li>Step-and-repeat backdrops</li>
                    <li>Modular systems</li>
                </ul>
            </div>
        </div>

        <!-- Service 14 -->
        <div class="service-card">
            <div class="service-image">
                <img src="includes/images/restoration.jpg" alt="Sign Restoration">
            </div>
            <div class="service-content">
                <div class="service-icon">
                    <i class="fas fa-hammer"></i>
                </div>
                <h2>Sign Restoration</h2>
                <p>Bring vintage and historic signs back to their original glory.</p>
                <ul class="service-features">
                    <li>Neon tube repair</li>
                    <li>Paint restoration</li>
                    <li>Structural repairs</li>
                    <li>LED retrofitting</li>
                </ul>
            </div>
        </div>

        <!-- Service 15 -->
        <div class="service-card">
            <div class="service-image">
                <img src="includes/images/maintenance.jpg" alt="Sign Maintenance">
            </div>
            <div class="service-content">
                <div class="service-icon">
                    <i class="fas fa-tools"></i>
                </div>
                <h2>Sign Maintenance & Repair</h2>
                <p>Keep your signage looking great and functioning properly.</p>
                <ul class="service-features">
                    <li>Routine inspections</li>
                    <li>Bulb replacement</li>
                    <li>Electrical repairs</li>
                    <li>Cleaning services</li>
                </ul>
            </div>
        </div>

        <!-- Service 16 -->
<div class="service-card">
    <div class="service-image">
        <img src="includes/images/ada-signage.jpg" alt="ADA Compliant Signage">
    </div>
    <div class="service-content">
        <div class="service-icon">
            <i class="fas fa-universal-access"></i>
        </div>
        <h2>ADA-Compliant Signage</h2>
        <p>Regulatory-compliant signage solutions for accessibility requirements.</p>
        <ul class="service-features">
            <li>Braille and tactile elements</li>
            <li>Visual contrast standards</li>
            <li>Custom compliant designs</li>
            <li>Installation certification</li>
        </ul>
    </div>
</div>

<!-- Service 17 -->
<div class="service-card">
    <div class="service-image">
        <img src="includes/images/dimensional-logos.jpg" alt="Dimensional Logo Signs">
    </div>
    <div class="service-content">
        <div class="service-icon">
            <i class="fas fa-registered"></i>
        </div>
        <h2>Dimensional Logo Signs</h2>
        <p>Premium corporate logo reproductions with depth and impact.</p>
        <ul class="service-features">
            <li>3D brand representations</li>
            <li>Precision CNC routing</li>
            <li>Illuminated options</li>
            <li>Lobby centerpieces</li>
        </ul>
    </div>
</div>

<!-- Service 18 -->
<div class="service-card">
    <div class="service-image">
        <img src="includes/images/real-estate-signs.jpg" alt="Real Estate Signage">
    </div>
    <div class="service-content">
        <div class="service-icon">
            <i class="fas fa-home"></i>
        </div>
        <h2>Real Estate Development Signage</h2>
        <p>Complete signage solutions for property developments.</p>
        <ul class="service-features">
            <li>Construction site signage</li>
            <li>Leasing center displays</li>
            <li>Community wayfinding</li>
            <li>Temporary-to-permanent solutions</li>
        </ul>
    </div>
</div>

<!-- Service 19 -->
<div class="service-card">
    <div class="service-image">
        <img src="includes/images/trade-show.jpg" alt="Trade Show Displays">
    </div>
    <div class="service-content">
        <div class="service-icon">
            <i class="fas fa-bullhorn"></i>
        </div>
        <h2>Trade Show & Exhibit Displays</h2>
        <p>Attention-grabbing displays for events and exhibitions.</p>
        <ul class="service-features">
            <li>Modular booth systems</li>
            <li>Backlit graphic walls</li>
            <li>Portable displays</li>
            <li>Interactive elements</li>
        </ul>
    </div>
</div>

<!-- Service 20 -->
<div class="service-card">
    <div class="service-image">
        <img src="includes/images/architectural.jpg" alt="Architectural Signage">
    </div>
    <div class="service-content">
        <div class="service-icon">
            <i class="fas fa-archway"></i>
        </div>
        <h2>Architectural Signage Systems</h2>
        <p>Integrated signage solutions for built environments.</p>
        <ul class="service-features">
            <li>Building identification</li>
            <li>Donor recognition</li>
            <li>Environmental graphics</li>
            <li>Coordinated system design</li>
        </ul>
    </div>
</div>

<!-- Service 21 -->
<div class="service-card">
    <div class="service-image">
        <img src="includes/images/smart-digital.jpg" alt="Smart Digital Signage">
    </div>
    <div class="service-content">
        <div class="service-icon">
            <i class="fas fa-robot"></i>
        </div>
        <h2>Smart Digital Signage</h2>
        <p>Next-generation intelligent display solutions.</p>
        <ul class="service-features">
            <li>AI-powered content</li>
            <li>Interactive touchscreens</li>
            <li>Real-time data integration</li>
            <li>Cloud management</li>
        </ul>
    </div>
</div>
    </div>
</section>

<section class="process-section">
    <h2 class="section-title">Our Signage Process</h2>
    <div class="process-steps">
        <div class="process-step">
            <div class="step-number">1</div>
            <h3>Consultation</h3>
            <p>We discuss your needs, budget, and vision to create the perfect signage solution.</p>
        </div>
        <div class="process-step">
            <div class="step-number">2</div>
            <h3>Design</h3>
            <p>Our designers create custom concepts with 3D renderings for your approval.</p>
        </div>
        <div class="process-step">
            <div class="step-number">3</div>
            <h3>Fabrication</h3>
            <p>Our craftsmen build your sign using premium materials and precise techniques.</p>
        </div>
        <div class="process-step">
            <div class="step-number">4</div>
            <h3>Installation</h3>
            <p>We professionally install your signage, ensuring perfect placement and operation.</p>
        </div>
    </div>
</section>

<section class="cta-section">
    <h2>Ready to Transform Your Business with Premium Signage?</h2>
    <p>Contact us today for a free consultation and quote.</p>
    <div class="cta-buttons">
        <a href="contact-us.php" class="btn">Get a Quote</a>
        <a href="tel:+254 716 132 861" class="btn btn-outline">
            <i class="fas fa-phone"></i> Call Us: +254 716 132 861
        </a>
    </div>
</section>

<?php include('includes/footer.php'); ?>