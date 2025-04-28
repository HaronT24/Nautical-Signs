<?php include('includes/header.php'); ?>

<style>
    /* FAQ Page Styles */
    .faq-hero {
        position: relative;
        height: 50vh;
        display: flex;
        justify-content: center;
        align-items: center;
        text-align: center;
        margin: 20px;
        border-radius: 15px;
        box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        background-image: url('includes/images/faq-bg.jpg');
        background-size: cover;
        background-position: center;
        color: white;
        overflow: hidden;
    }

    .faq-hero::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: rgba(0, 98, 255, 0.7);
        z-index: 1;
    }

    .faq-hero-content {
        max-width: 800px;
        padding: 20px;
        position: relative;
        z-index: 2;
    }

    .faq-hero h1 {
        font-size: 42px;
        margin-bottom: 15px;
        text-shadow: 2px 2px 4px rgba(0,0,0,0.3);
    }

    .faq-hero p {
        font-size: 18px;
        margin-bottom: 25px;
        text-shadow: 1px 1px 2px rgba(0,0,0,0.3);
    }

    .faq-section {
        padding: 60px 20px;
        background-color: #f8f9fa;
    }

    .faq-container {
        max-width: 800px;
        margin: 0 auto;
    }

    .faq-categories {
        display: flex;
        justify-content: center;
        flex-wrap: wrap;
        gap: 15px;
        margin-bottom: 40px;
    }

    .category-btn {
        padding: 10px 20px;
        background: white;
        border: 2px solid #0062ff;
        color: #0062ff;
        border-radius: 30px;
        cursor: pointer;
        transition: all 0.3s ease;
        font-weight: bold;
    }

    .category-btn:hover, .category-btn.active {
        background: #0062ff;
        color: white;
    }

    .faq-accordion {
        margin-bottom: 40px;
    }

    .faq-item {
        background: white;
        border-radius: 10px;
        margin-bottom: 15px;
        box-shadow: 0 3px 10px rgba(0,0,0,0.05);
        overflow: hidden;
    }

    .faq-question {
        padding: 20px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        cursor: pointer;
        font-weight: 600;
        font-size: 18px;
        color: #333;
        transition: all 0.3s ease;
    }

    .faq-question:hover {
        color: #0062ff;
    }

    .faq-question::after {
        content: '+';
        font-size: 24px;
        color: #0062ff;
        transition: transform 0.3s ease;
    }

    .faq-item.active .faq-question::after {
        content: '-';
    }

    .faq-answer {
        padding: 0 20px;
        max-height: 0;
        overflow: hidden;
        transition: max-height 0.3s ease, padding 0.3s ease;
        color: #555;
        line-height: 1.6;
    }

    .faq-item.active .faq-answer {
        padding: 0 20px 20px;
        max-height: 500px;
    }

    .cta-section {
        text-align: center;
        padding: 40px;
        background: white;
        border-radius: 15px;
        box-shadow: 0 5px 15px rgba(0,0,0,0.05);
    }

    .cta-section h2 {
        font-size: 28px;
        margin-bottom: 20px;
        color: #0062ff;
    }

    .cta-section p {
        color: #666;
        margin-bottom: 25px;
        max-width: 600px;
        margin-left: auto;
        margin-right: auto;
    }

    @media (max-width: 768px) {
        .faq-hero {
            height: 40vh;
        }
        
        .faq-hero h1 {
            font-size: 32px;
        }
        
        .faq-question {
            font-size: 16px;
            padding: 15px;
        }
        
        .cta-section {
            padding: 30px 20px;
        }
    }
</style>

<section class="faq-hero">
    <div class="faq-hero-content">
        <h1>Frequently Asked Questions</h1>
        <p>Find answers to common questions about our signage products and services</p>
    </div>
</section>

<section class="faq-section">
    <div class="faq-container">
        <div class="faq-categories">
            <button class="category-btn active" data-category="all">All Questions</button>
            <button class="category-btn" data-category="products">Products</button>
            <button class="category-btn" data-category="installation">Installation</button>
            <button class="category-btn" data-category="maintenance">Maintenance</button>
            <button class="category-btn" data-category="ordering">Ordering</button>
        </div>

        <div class="faq-accordion">
            <!-- Product FAQs -->
            <div class="faq-item" data-category="products">
                <div class="faq-question">
                    What types of signage materials do you work with?
                </div>
                <div class="faq-answer">
                    <p>We specialize in a wide range of materials including acrylic, aluminum, stainless steel, neon glass, LED flex, and reclaimed wood. Each material is chosen based on your specific needs for durability, visibility, and aesthetic appeal. Our team can recommend the best material for your project during the consultation.</p>
                </div>
            </div>

            <div class="faq-item" data-category="products">
                <div class="faq-question">
                    How long do neon signs typically last?
                </div>
                <div class="faq-answer">
                    <p>Traditional glass neon signs last between 8-15 years with proper maintenance. Our LED neon alternatives have a lifespan of 50,000+ hours (about 15 years with normal use) and come with a 5-year warranty. We use premium transformers and high-quality materials to ensure maximum longevity.</p>
                </div>
            </div>

            <!-- Installation FAQs -->
            <div class="faq-item" data-category="installation">
                <div class="faq-question">
                    Do you handle sign installation?
                </div>
                <div class="faq-answer">
                    <p>Yes, we provide professional installation services for all types of signage. Our certified installers handle everything from permits and structural assessments to electrical connections and final adjustments. We serve commercial and residential clients throughout our service area.</p>
                </div>
            </div>

            <div class="faq-item" data-category="installation">
                <div class="faq-question">
                    How long does installation usually take?
                </div>
                <div class="faq-answer">
                    <p>Installation time varies by project complexity:
                    <ul>
                        <li>Channel letters: 2-4 hours</li>
                        <li>Neon signs: 1-3 hours</li>
                        <li>Pylon signs: 4-8 hours</li>
                        <li>Digital signage: 2-6 hours</li>
                    </ul>
                    We'll provide a detailed timeline during your project consultation.</p>
                </div>
            </div>

            <!-- Maintenance FAQs -->
            <div class="faq-item" data-category="maintenance">
                <div class="faq-question">
                    How should I clean my exterior signage?
                </div>
                <div class="faq-answer">
                    <p>For most signs, we recommend:
                    <ul>
                        <li>Mild soap and water solution</li>
                        <li>Soft cloth or sponge (no abrasives)</li>
                        <li>Gentle rinsing with clean water</li>
                        <li>Bi-annual professional cleaning for illuminated signs</li>
                    </ul>
                    Avoid harsh chemicals and pressure washers. We provide specific cleaning instructions for each sign type upon installation.</p>
                </div>
            </div>

            <div class="faq-item" data-category="maintenance">
                <div class="faq-question">
                    What's included in your maintenance services?
                </div>
                <div class="faq-answer">
                    <p>Our maintenance plans include:
                    <ul>
                        <li>LED bulb replacement</li>
                        <li>Electrical system checks</li>
                        <li>Structural integrity inspection</li>
                        <li>Cleaning and polishing</li>
                        <li>Emergency repair response</li>
                    </ul>
                    We offer annual contracts or one-time service calls to keep your signage looking its best.</p>
                </div>
            </div>

            <!-- Ordering FAQs -->
            <div class="faq-item" data-category="ordering">
                <div class="faq-question">
                    What's your typical production timeline?
                </div>
                <div class="faq-answer">
                    <p>Production times vary by sign type:
                    <ul>
                        <li>Channel letters: 2-3 weeks</li>
                        <li>Neon signs: 3-4 weeks</li>
                        <li>3D signs: 2-4 weeks</li>
                        <li>Digital signage: 1-2 weeks (standard models)</li>
                    </ul>
                    Rush services are available for most projects (additional fees apply). We'll provide a precise timeline after finalizing your design.</p>
                </div>
            </div>

            <div class="faq-item" data-category="ordering">
                <div class="faq-question">
                    Do you offer design services?
                </div>
                <div class="faq-answer">
                    <p>Absolutely! Our design team provides:
                    <ul>
                        <li>Custom sign concepts</li>
                        <li>3D renderings</li>
                        <li>Material samples</li>
                        <li>Brand-consistent designs</li>
                        <li>ADA compliance consulting</li>
                    </ul>
                    Design services are included with all our signage projects at no extra cost. We'll work with you until the design is perfect.</p>
                </div>
            </div>

            <!-- General FAQs -->
            <div class="faq-item" data-category="all">
                <div class="faq-question">
                    Are your signs weatherproof?
                </div>
                <div class="faq-answer">
                    <p>All our exterior signs are built to withstand local weather conditions. We use:
                    <ul>
                        <li>IP65-rated components for water resistance</li>
                        <li>UV-protected finishes</li>
                        <li>Corrosion-resistant hardware</li>
                        <li>Impact-resistant materials where needed</li>
                    </ul>
                    Our signs are engineered to last in rain, snow, and extreme temperatures with proper maintenance.</p>
                </div>
            </div>

            <div class="faq-item" data-category="all">
                <div class="faq-question">
                    What warranties do you offer?
                </div>
                <div class="faq-answer">
                    <p>We stand behind our work with comprehensive warranties:
                    <ul>
                        <li>Materials: 5 years</li>
                        <li>Workmanship: 3 years</li>
                        <li>LED components: 5 years</li>
                        <li>Neon transformers: 2 years</li>
                    </ul>
                    Warranty details are provided with your final invoice. Extended warranty options are available for commercial clients.</p>
                </div>
            </div>
        </div>

        <div class="cta-section">
            <h2>Still Have Questions?</h2>
            <p>Our signage experts are ready to help with any additional questions you may have about our products and services.</p>
            <div class="cta-buttons">
                <a href="contact-us.php" class="btn">Contact Us</a>
                <a href="tel:+254 716 132 861" class="btn btn-outline">
                    <i class="fas fa-phone"></i> Call Now
                </a>
            </div>
        </div>
    </div>
</section>

<script>
    // FAQ Accordion Functionality
    const faqItems = document.querySelectorAll('.faq-item');
    const categoryBtns = document.querySelectorAll('.category-btn');
    
    // Toggle FAQ items
    faqItems.forEach(item => {
        const question = item.querySelector('.faq-question');
        
        question.addEventListener('click', () => {
            const isActive = item.classList.contains('active');
            
            // Close all items first
            faqItems.forEach(i => i.classList.remove('active'));
            
            // Open current if wasn't active
            if (!isActive) {
                item.classList.add('active');
            }
        });
    });
    
    // Filter by category
    categoryBtns.forEach(btn => {
        btn.addEventListener('click', () => {
            // Update active button
            categoryBtns.forEach(b => b.classList.remove('active'));
            btn.classList.add('active');
            
            const category = btn.dataset.category;
            
            // Filter FAQ items
            faqItems.forEach(item => {
                if (category === 'all' || item.dataset.category === category) {
                    item.style.display = 'block';
                } else {
                    item.style.display = 'none';
                    item.classList.remove('active');
                }
            });
        });
    });
</script>

<?php include('includes/footer.php'); ?>