<?php include('includes/header.php'); ?>

<style>
    /* About Us Page Styles */
    .about-hero {
        position: relative;
        height: 50vh;
        display: flex;
        justify-content: center;
        align-items: center;
        text-align: center;
        margin: 20px;
        border-radius: 15px;
        box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        background-image: url('includes/images/about-bg.jpg');
        background-size: cover;
        background-position: center;
        color: white;
        overflow: hidden;
    }

    .about-hero::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: rgba(0, 98, 255, 0.7);
        z-index: 1;
    }

    .about-hero-content {
        max-width: 800px;
        padding: 20px;
        position: relative;
        z-index: 2;
    }

    .about-hero h1 {
        font-size: 42px;
        margin-bottom: 15px;
        text-shadow: 2px 2px 4px rgba(0,0,0,0.3);
    }

    .about-hero p {
        font-size: 18px;
        margin-bottom: 25px;
        text-shadow: 1px 1px 2px rgba(0,0,0,0.3);
    }

    .about-section {
        padding: 60px 20px;
        background-color: #f8f9fa;
    }

    .about-container {
        max-width: 1200px;
        margin: 0 auto;
    }

    .about-content {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 40px;
        margin-bottom: 60px;
    }

    .about-text {
        padding: 20px;
    }

    .about-text h2 {
        font-size: 32px;
        color: #0062ff;
        margin-bottom: 20px;
    }

    .about-text p {
        color: #555;
        line-height: 1.8;
        margin-bottom: 20px;
    }

    .about-image {
        border-radius: 15px;
        overflow: hidden;
        box-shadow: 0 10px 30px rgba(0,0,0,0.1);
    }

    .about-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .mission-vision {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 30px;
        margin-bottom: 60px;
    }

    .mission-card, .vision-card {
        background: white;
        padding: 40px;
        border-radius: 15px;
        box-shadow: 0 5px 15px rgba(0,0,0,0.05);
    }

    .mission-card h3, .vision-card h3 {
        font-size: 28px;
        color: #0062ff;
        margin-bottom: 20px;
        display: flex;
        align-items: center;
    }

    .mission-card h3 i, .vision-card h3 i {
        margin-right: 15px;
        font-size: 36px;
    }

    .values-section {
        background: white;
        padding: 60px;
        border-radius: 15px;
        box-shadow: 0 5px 15px rgba(0,0,0,0.05);
        margin-bottom: 60px;
    }

    .section-title {
        text-align: center;
        font-size: 36px;
        margin-bottom: 40px;
        color: #0062ff;
    }

    .values-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 30px;
    }

    .value-card {
        background: #f8f9fa;
        border-radius: 15px;
        padding: 30px;
        text-align: center;
        transition: transform 0.3s ease;
    }

    .value-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 10px 25px rgba(0, 98, 255, 0.1);
    }

    .value-icon {
        font-size: 50px;
        color: #0062ff;
        margin-bottom: 20px;
    }

    .value-card h3 {
        font-size: 22px;
        margin-bottom: 15px;
        color: #333;
    }

    .value-card p {
        color: #666;
        line-height: 1.6;
    }

    .team-section {
        margin-bottom: 60px;
    }

    .team-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 30px;
    }

    .team-member {
        background: white;
        border-radius: 15px;
        overflow: hidden;
        box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        transition: transform 0.3s ease;
    }

    .team-member:hover {
        transform: translateY(-10px);
    }

    .team-photo {
        height: 300px;
        overflow: hidden;
    }

    .team-photo img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.5s ease;
    }

    .team-member:hover .team-photo img {
        transform: scale(1.05);
    }

    .team-info {
        padding: 20px;
        text-align: center;
    }

    .team-info h3 {
        font-size: 22px;
        margin-bottom: 5px;
        color: #333;
    }

    .team-info p.position {
        color: #0062ff;
        font-weight: bold;
        margin-bottom: 15px;
    }

    .team-info p.bio {
        color: #666;
        font-size: 14px;
        line-height: 1.6;
        margin-bottom: 15px;
    }

    .social-links {
        display: flex;
        justify-content: center;
        gap: 15px;
    }

    .social-links a {
        color: #0062ff;
        font-size: 18px;
        transition: color 0.3s ease;
    }

    .social-links a:hover {
        color: #0047b3;
    }

    .location-section {
        margin-bottom: 60px;
    }

    .location-container {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 40px;
        align-items: center;
    }

    .location-info {
        background: white;
        padding: 40px;
        border-radius: 15px;
        box-shadow: 0 5px 15px rgba(0,0,0,0.05);
    }

    .location-info h3 {
        font-size: 28px;
        color: #0062ff;
        margin-bottom: 20px;
    }

    .location-info p {
        color: #555;
        line-height: 1.8;
        margin-bottom: 20px;
    }

    .contact-details {
        margin-top: 30px;
    }

    .contact-item {
        display: flex;
        align-items: center;
        margin-bottom: 15px;
    }

    .contact-item i {
        font-size: 20px;
        color: #0062ff;
        margin-right: 15px;
        width: 30px;
        text-align: center;
    }

    .map-container {
        height: 400px;
        border-radius: 15px;
        overflow: hidden;
        box-shadow: 0 10px 30px rgba(0,0,0,0.1);
    }

    .map-container iframe {
        width: 100%;
        height: 100%;
        border: none;
    }

    .reviews-section {
        margin-bottom: 60px;
    }

    .reviews-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
        gap: 30px;
    }

    .review-card {
        background: white;
        border-radius: 15px;
        padding: 30px;
        box-shadow: 0 5px 15px rgba(0,0,0,0.05);
        position: relative;
    }

    .review-card::before {
        content: '"';
        position: absolute;
        top: 20px;
        left: 20px;
        font-size: 80px;
        color: rgba(0, 98, 255, 0.1);
        font-family: Georgia, serif;
        line-height: 1;
    }

    .review-content {
        position: relative;
        z-index: 1;
    }

    .review-text {
        font-size: 16px;
        line-height: 1.7;
        color: #555;
        margin-bottom: 20px;
        font-style: italic;
    }

    .review-author {
        display: flex;
        align-items: center;
    }

    .author-avatar {
        width: 50px;
        height: 50px;
        border-radius: 50%;
        overflow: hidden;
        margin-right: 15px;
    }

    .author-avatar img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .author-info h4 {
        font-size: 18px;
        margin-bottom: 5px;
        color: #333;
    }

    .author-info p {
        font-size: 14px;
        color: #777;
    }

    .rating {
        color: #ffc107;
        margin-top: 5px;
    }

    .cta-section {
        text-align: center;
        padding: 80px 20px;
        background: linear-gradient(135deg, #0062ff, #00f2ff);
        color: white;
        border-radius: 15px;
    }

    .cta-section h2 {
        font-size: 36px;
        margin-bottom: 20px;
        text-shadow: 1px 1px 3px rgba(0,0,0,0.3);
    }

    .cta-section p {
        font-size: 18px;
        max-width: 700px;
        margin: 0 auto 30px;
        opacity: 0.9;
    }

    @media (max-width: 768px) {
        .about-hero {
            height: 60vh;
        }
        .about-content, .mission-vision, .location-container {
            grid-template-columns: 1fr;
        }
        .about-image {
            height: 300px;
            order: -1;
        }
        .values-grid, .team-grid, .reviews-grid {
            grid-template-columns: 1fr;
        }
        .section-title {
            font-size: 28px;
        }
        .cta-section h2 {
            font-size: 28px;
        }
        .map-container {
            height: 300px;
            order: -1;
        }
    }
</style>

<section class="about-hero">
    <div class="about-hero-content">
        <h1>Our Signage Story</h1>
        <p>20+ years crafting signs that build brands and transform spaces</p>
        <a href="contact-us.php" class="btn">Get to Know Us</a>
    </div>
</section>

<section class="about-section">
    <div class="about-container">
        <div class="about-content">
            <div class="about-text">
                <h2>Who We Are</h2>
                <p>Founded in 2003, SignCraft has grown from a small workshop to a leading signage solutions provider serving businesses across the region. What began as a passion for craftsmanship has evolved into a full-service signage company combining traditional techniques with cutting-edge technology.</p>
                <p>Our team of designers, fabricators, and installers share a common commitment to quality and innovation. We don't just make signs - we create visual identities that communicate your brand's essence and connect with your audience.</p>
                <p>From concept to installation, we handle every detail to ensure your signage exceeds expectations in design, durability, and impact.</p>
            </div>
            <div class="about-image">
                <img src="includes/images/workshop.jpg" alt="Our Sign Workshop">
            </div>
        </div>

        <div class="mission-vision">
            <div class="mission-card">
                <h3><i class="fas fa-bullseye"></i> Our Mission</h3>
                <p>To empower businesses through innovative signage solutions that enhance brand visibility, improve customer experience, and create lasting impressions. We combine craftsmanship with cutting-edge technology to deliver signs that tell your story and drive results.</p>
            </div>
            <div class="vision-card">
                <h3><i class="fas fa-eye"></i> Our Vision</h3>
                <p>To be the most trusted signage partner for businesses nationwide, recognized for our design excellence, quality craftsmanship, and commitment to client success. We envision communities where every business has signage that truly represents their brand's potential.</p>
            </div>
        </div>

        <div class="values-section">
            <h2 class="section-title">Our Core Values</h2>
            <div class="values-grid">
                <div class="value-card">
                    <div class="value-icon">
                        <i class="fas fa-medal"></i>
                    </div>
                    <h3>Quality Craftsmanship</h3>
                    <p>We use premium materials and time-tested techniques to create signs built to last. Every project undergoes rigorous quality checks before delivery.</p>
                </div>
                <div class="value-card">
                    <div class="value-icon">
                        <i class="fas fa-lightbulb"></i>
                    </div>
                    <h3>Innovative Solutions</h3>
                    <p>Combining traditional skills with modern technology to develop signage that stands out while meeting functional requirements.</p>
                </div>
                <div class="value-card">
                    <div class="value-icon">
                        <i class="fas fa-hands-helping"></i>
                    </div>
                    <h3>Client Partnership</h3>
                    <p>We view every project as a collaboration, working closely with clients to understand their vision and business objectives.</p>
                </div>
                <div class="value-card">
                    <div class="value-icon">
                        <i class="fas fa-leaf"></i>
                    </div>
                    <h3>Sustainable Practices</h3>
                    <p>Committed to environmentally responsible manufacturing through energy-efficient processes and recyclable materials.</p>
                </div>
            </div>
        </div>

        <div class="team-section">
            <h2 class="section-title">Meet Our Leadership</h2>
            <div class="team-grid">
                <div class="team-member">
                    <div class="team-photo">
                        <img src="includes/images/ceo.jpg" alt="John Smith, CEO">
                    </div>
                    <div class="team-info">
                        <h3>John Smith</h3>
                        <p class="position">Founder & CEO</p>
                        <p class="bio">With 25+ years in the signage industry, John leads our company with a focus on innovation and craftsmanship.</p>
                        <div class="social-links">
                            <a href="#"><i class="fab fa-linkedin"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
                <div class="team-member">
                    <div class="team-photo">
                        <img src="includes/images/design-director.jpg" alt="Sarah Johnson, Design Director">
                    </div>
                    <div class="team-info">
                        <h3>Sarah Johnson</h3>
                        <p class="position">Design Director</p>
                        <p class="bio">Sarah's award-winning designs have helped hundreds of businesses establish memorable visual identities.</p>
                        <div class="social-links">
                            <a href="#"><i class="fab fa-linkedin"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
                <div class="team-member">
                    <div class="team-photo">
                        <img src="includes/images/operations.jpg" alt="Michael Chen, Operations Manager">
                    </div>
                    <div class="team-info">
                        <h3>Michael Chen</h3>
                        <p class="position">Operations Manager</p>
                        <p class="bio">Michael ensures every project runs smoothly from fabrication to installation with military precision.</p>
                        <div class="social-links">
                            <a href="#"><i class="fab fa-linkedin"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
                <div class="team-member">
                    <div class="team-photo">
                        <img src="includes/images/finance.jpg" alt="David Wilson, CFO">
                    </div>
                    <div class="team-info">
                        <h3>David Wilson</h3>
                        <p class="position">Chief Financial Officer</p>
                        <p class="bio">David brings 15 years of financial expertise to ensure sustainable growth and client value.</p>
                        <div class="social-links">
                            <a href="#"><i class="fab fa-linkedin"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
                <div class="team-member">
                    <div class="team-photo">
                        <img src="includes/images/tech.jpg" alt="Emily Rodriguez, CTO">
                    </div>
                    <div class="team-info">
                        <h3>Emily Rodriguez</h3>
                        <p class="position">Chief Technology Officer</p>
                        <p class="bio">Emily leads our digital transformation with cutting-edge signage technology and smart solutions.</p>
                        <div class="social-links">
                            <a href="#"><i class="fab fa-linkedin"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
                <div class="team-member">
                    <div class="team-photo">
                        <img src="includes/images/marketing.jpg" alt="Robert Kim, Marketing Director">
                    </div>
                    <div class="team-info">
                        <h3>Robert Kim</h3>
                        <p class="position">Marketing Director</p>
                        <p class="bio">Robert develops strategies that help our clients maximize the impact of their signage investments.</p>
                        <div class="social-links">
                            <a href="#"><i class="fab fa-linkedin"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="location-section">
            <h2 class="section-title">Our Location</h2>
            <div class="location-container">
                <div class="location-info">
                    <h3>Visit Our Headquarters</h3>
                    <p>Our 20,000 sq ft facility houses state-of-the-art fabrication equipment, design studios, and showroom. We welcome visitors by appointment to discuss your signage needs.</p>
                    <div class="contact-details">
                        <div class="contact-item">
                            <i class="fas fa-map-marker-alt"></i>
                            <p>123 Signage Way, Creative District<br>New York, NY 10001</p>
                        </div>
                        <div class="contact-item">
                            <i class="fas fa-phone"></i>
                            <p>+254 716 132 861</p>
                        </div>
                        <div class="contact-item">
                            <i class="fas fa-envelope"></i>
                            <p>nauticalsigns@gmail.com</p>
                        </div>
                        <div class="contact-item">
                            <i class="fas fa-clock"></i>
                            <p>Monday-Friday: 8:00 AM - 6:00 PM<br>Saturday: 9:00 AM - 2:00 PM</p>
                        </div>
                    </div>
                </div>
                <div class="map-container">
                <iframe src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d5503.367876899148!2d36.82165526865251!3d-1.2803411219441296!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zMcKwMTYnNDcuNCJTIDM2wrA0OSczMC42IkU!5e0!3m2!1ssw!2ske!4v1745873904629!5m2!1ssw!2ske" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></div>
            </div>
        </div>

        

        <div class="reviews-section">
            <h2 class="section-title">What Our Customers Say</h2>
            <div class="reviews-grid">
                <!-- Review 1 -->
                <div class="review-card">
                    <div class="review-content">
                        <div class="review-text">
                            SignCraft transformed our storefront with an incredible 3D sign. The quality is outstanding and we've received countless compliments. Their team was professional from design to installation.
                        </div>
                        <div class="review-author">
                            <div class="author-avatar">
                                <img src="includes/images/reviewer1.jpg" alt="Sarah Johnson">
                            </div>
                            <div class="author-info">
                                <h4>Sarah Johnson</h4>
                                <p>Owner, Boutique Elegance</p>
                                <div class="rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Review 2 -->
                <div class="review-card">
                    <div class="review-content">
                        <div class="review-text">
                            The neon sign they created for our bar is absolutely stunning. It's become our signature piece. Worked with us on the design until it was perfect and installed it right on schedule.
                        </div>
                        <div class="review-author">
                            <div class="author-avatar">
                                <img src="includes/images/reviewer2.jpg" alt="Michael Rodriguez">
                            </div>
                            <div class="author-info">
                                <h4>Michael Rodriguez</h4>
                                <p>Manager, The Blue Note</p>
                                <div class="rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Review 3 -->
                <div class="review-card">
                    <div class="review-content">
                        <div class="review-text">
                            Our new channel letters look amazing! The installation crew was efficient and left the site spotless. The sign is exactly what we envisioned - bright, professional, and eye-catching.
                        </div>
                        <div class="review-author">
                            <div class="author-avatar">
                                <img src="includes/images/reviewer3.jpg" alt="David Kim">
                            </div>
                            <div class="author-info">
                                <h4>David Kim</h4>
                                <p>CEO, Urban Dental</p>
                                <div class="rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Review 4 -->
                <div class="review-card">
                    <div class="review-content">
                        <div class="review-text">
                            The wayfinding system they designed for our hospital has dramatically improved patient navigation. The signs are durable, ADA-compliant, and beautifully designed to match our brand.
                        </div>
                        <div class="review-author">
                            <div class="author-avatar">
                                <img src="includes/images/reviewer4.jpg" alt="Dr. Lisa Wong">
                            </div>
                            <div class="author-info">
                                <h4>Dr. Lisa Wong</h4>
                                <p>Administrator, City Medical Center</p>
                                <div class="rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Review 5 -->
                <div class="review-card">
                    <div class="review-content">
                        <div class="review-text">
                            SignCraft's digital signage solution for our retail chain has transformed how we communicate with customers. The system is reliable and their support team is always responsive when we need help.
                        </div>
                        <div class="review-author">
                            <div class="author-avatar">
                                <img src="includes/images/reviewer5.jpg" alt="James Wilson">
                            </div>
                            <div class="author-info">
                                <h4>James Wilson</h4>
                                <p>COO, TrendMart Stores</p>
                                <div class="rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Review 6 -->
                <div class="review-card">
                    <div class="review-content">
                        <div class="review-text">
                            The monument sign they built for our corporate campus is impressive. It perfectly represents our brand and has become a landmark in the business park. The project was completed on time and within budget.
                        </div>
                        <div class="review-author">
                            <div class="author-avatar">
                                <img src="includes/images/reviewer6.jpg" alt="Jennifer Adams">
                            </div>
                            <div class="author-info">
                                <h4>Jennifer Adams</h4>
                                <p>VP Marketing, TechGlobal</p>
                                <div class="rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Review 7 -->
                <div class="review-card">
                    <div class="review-content">
                        <div class="review-text">
                            We've used SignCraft for three locations now and they consistently deliver exceptional work. Their designers understand our brand identity and create signs that reinforce our image perfectly.
                        </div>
                        <div class="review-author">
                            <div class="author-avatar">
                                <img src="includes/images/reviewer7.jpg" alt="Carlos Mendez">
                            </div>
                            <div class="author-info">
                                <h4>Carlos Mendez</h4>
                                <p>Franchise Owner, BurgerHouse</p>
                                <div class="rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Review 8 -->
                <div class="review-card">
                    <div class="review-content">
                        <div class="review-text">
                            The vehicle wraps they created for our fleet look fantastic and have held up beautifully despite daily use. The installation was flawless and we've gotten numerous compliments from customers.
                        </div>
                        <div class="review-author">
                            <div class="author-avatar">
                                <img src="includes/images/reviewer8.jpg" alt="Tina Roberts">
                            </div>
                            <div class="author-info">
                                <h4>Tina Roberts</h4>
                                <p>Director, QuickClean Services</p>
                                <div class="rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Review 9 -->
                <div class="review-card">
                    <div class="review-content">
                        <div class="review-text">
                            SignCraft restored our historic theater marquee to its original glory while updating it with modern lighting. They preserved the vintage character while making it functional for today's needs.
                        </div>
                        <div class="review-author">
                            <div class="author-avatar">
                                <img src="includes/images/reviewer9.jpg" alt="Mark Thompson">
                            </div>
                            <div class="author-info">
                                <h4>Mark Thompson</h4>
                                <p>Owner, Grand Theater</p>
                                <div class="rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Review 10 -->
                <div class="review-card">
                    <div class="review-content">
                        <div class="review-text">
                            The trade show display they created helped us stand out at the convention. It was lightweight for shipping yet durable, and their team helped us with setup instructions that made installation a breeze.
                        </div>
                        <div class="review-author">
                            <div class="author-avatar">
                                <img src="includes/images/reviewer10.jpg" alt="Susan Lee">
                            </div>
                            <div class="author-info">
                                <h4>Susan Lee</h4>
                                <p>Marketing Director, EcoSolutions</p>
                                <div class="rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Review 11 -->
                <div class="review-card">
                    <div class="review-content">
                        <div class="review-text">
                            Our lobby signage makes a powerful first impression. The backlit acrylic letters with our logo create a modern, professional look that aligns perfectly with our corporate identity.
                        </div>
                        <div class="review-author">
                            <div class="author-avatar">
                                <img src="includes/images/reviewer11.jpg" alt="Robert Chen">
                            </div>
                            <div class="author-info">
                                <h4>Robert Chen</h4>
                                <p>CFO, Summit Financial</p>
                                <div class="rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Review 12 -->
                <div class="review-card">
                    <div class="review-content">
                        <div class="review-text">
                            The window graphics they installed have dramatically increased foot traffic to our store. The design is eye-catching without being overwhelming, and the installation was quick and professional.
                        </div>
                        <div class="review-author">
                            <div class="author-avatar">
                                <img src="includes/images/reviewer12.jpg" alt="Amanda Garcia">
                            </div>
                            <div class="author-info">
                                <h4>Amanda Garcia</h4>
                                <p>Owner, Sweet Treats Bakery</p>
                                <div class="rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="cta-section">
    <h2>Ready to Bring Your Vision to Life?</h2>
    <p>Our team is ready to discuss your signage needs and create a custom solution for your business.</p>
    <div class="cta-buttons">
        <a href="contact-us.php" class="btn">Get a Free Consultation</a>
        <a href="tel:+254 716 132 861" class="btn btn-outline">
            <i class="fas fa-phone"></i> Call Us: (123) 456-7890
        </a>
    </div>
</section>

<?php include('includes/footer.php'); ?>