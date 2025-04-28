<?php include('includes/header.php'); ?>

<style>
    /* Contact Page Specific Styles */
    .contact-hero {
        position: relative;
        height: 50vh;
        display: flex;
        justify-content: center;
        align-items: center;
        text-align: center;
        margin: 20px;
        border-radius: 15px;
        box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        background-image: url('includes/images/contact-bg.jpg');
        background-size: cover;
        background-position: center;
        color: white;
        overflow: hidden;
    }

    .contact-hero::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: rgba(0, 98, 255, 0.7);
        z-index: 1;
    }

    .contact-hero-content {
        max-width: 800px;
        padding: 20px;
        position: relative;
        z-index: 2;
    }

    .contact-hero h1 {
        font-size: 42px;
        margin-bottom: 15px;
        text-shadow: 2px 2px 4px rgba(0,0,0,0.3);
    }

    .contact-hero p {
        font-size: 18px;
        margin-bottom: 25px;
        text-shadow: 1px 1px 2px rgba(0,0,0,0.3);
    }

    .contact-section {
        padding: 60px 20px;
        background-color: #f8f9fa;
    }

    .contact-container {
        max-width: 1200px;
        margin: 0 auto;
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 40px;
    }

    .contact-info {
        background: white;
        padding: 40px;
        border-radius: 15px;
        box-shadow: 0 5px 15px rgba(0,0,0,0.05);
    }

    .contact-info h2 {
        font-size: 32px;
        color: #0062ff;
        margin-bottom: 20px;
    }

    .contact-info p {
        color: #555;
        line-height: 1.8;
        margin-bottom: 30px;
    }

    .contact-details {
        margin-top: 30px;
    }

    .contact-item {
        display: flex;
        align-items: flex-start;
        margin-bottom: 25px;
    }

    .contact-icon {
        font-size: 24px;
        color: #0062ff;
        margin-right: 20px;
        min-width: 30px;
        text-align: center;
    }

    .contact-text h3 {
        font-size: 18px;
        margin-bottom: 5px;
        color: #333;
    }

    .contact-text p, .contact-text a {
        color: #666;
        line-height: 1.6;
        text-decoration: none;
        transition: color 0.3s ease;
    }

    .contact-text a:hover {
        color: #0062ff;
    }

    .contact-form {
        background: white;
        padding: 40px;
        border-radius: 15px;
        box-shadow: 0 5px 15px rgba(0,0,0,0.05);
    }

    .contact-form h2 {
        font-size: 32px;
        color: #0062ff;
        margin-bottom: 20px;
    }

    .form-group {
        margin-bottom: 20px;
    }

    .form-group label {
        display: block;
        margin-bottom: 8px;
        font-weight: 600;
        color: #333;
    }

    .form-control {
        width: 100%;
        padding: 12px 15px;
        border: 1px solid #ddd;
        border-radius: 8px;
        font-size: 16px;
        transition: border-color 0.3s ease;
    }

    .form-control:focus {
        outline: none;
        border-color: #0062ff;
        box-shadow: 0 0 0 3px rgba(0, 98, 255, 0.1);
    }

    textarea.form-control {
        min-height: 150px;
        resize: vertical;
    }

    .btn-submit {
        background: #0062ff;
        color: white;
        border: none;
        padding: 12px 30px;
        border-radius: 30px;
        font-size: 16px;
        font-weight: 600;
        cursor: pointer;
        transition: all 0.3s ease;
    }

    .btn-submit:hover {
        background: #004ec4;
        transform: translateY(-2px);
        box-shadow: 0 5px 15px rgba(0, 98, 255, 0.2);
    }

    .map-container {
        grid-column: span 2;
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

    .business-hours {
        margin-top: 30px;
    }

    .business-hours h3 {
        font-size: 20px;
        margin-bottom: 15px;
        color: #333;
    }

    .hours-table {
        width: 100%;
        border-collapse: collapse;
    }

    .hours-table tr {
        border-bottom: 1px solid #eee;
    }

    .hours-table tr:last-child {
        border-bottom: none;
    }

    .hours-table td {
        padding: 10px 0;
        color: #555;
    }

    .hours-table td:first-child {
        font-weight: 600;
    }

    @media (max-width: 768px) {
        .contact-container {
            grid-template-columns: 1fr;
        }
        
        .map-container {
            grid-column: span 1;
            height: 300px;
        }
        
        .contact-hero {
            height: 40vh;
        }
        
        .contact-hero h1 {
            font-size: 32px;
        }
        
        .contact-info h2, .contact-form h2 {
            font-size: 28px;
        }
    }
</style>

<section class="contact-hero">
    <div class="contact-hero-content">
        <h1>Get in Touch</h1>
        <p>We're here to help with all your signage needs. Contact us today for a free consultation.</p>
    </div>
</section>

<section class="contact-section">
    <div class="contact-container">
        <div class="contact-info">
            <h2>Contact Information</h2>
            <p>Have questions about our signage services? Reach out to our team—we're happy to help!</p>
            
            <div class="contact-details">
                <div class="contact-item">
                    <div class="contact-icon">
                        <i class="fas fa-map-marker-alt"></i>
                    </div>
                    <div class="contact-text">
                        <h3>Our Location</h3>
                        <p>123 Signage Way, Creative District<br>New York, NY 10001</p>
                    </div>
                </div>
                
                <div class="contact-item">
                    <div class="contact-icon">
                        <i class="fas fa-phone"></i>
                    </div>
                    <div class="contact-text">
                        <h3>Phone Number</h3>
                        <p><a href="tel:+254 716 132 861">+254 716 132 861</a></p>
                    </div>
                </div>
                
                <div class="contact-item">
                    <div class="contact-icon">
                        <i class="fas fa-envelope"></i>
                    </div>
                    <div class="contact-text">
                        <h3>Email Address</h3>
                        <p><a href="mailto:info@signcraft.com">nauticalsigns@gmail.com</a></p>
                    </div>
                </div>
                
                <div class="business-hours">
                    <h3>Business Hours</h3>
                    <table class="hours-table">
                        <tr>
                            <td>Monday - Friday</td>
                            <td>8:00 AM - 6:00 PM</td>
                        </tr>
                        <tr>
                            <td>Saturday</td>
                            <td>9:00 AM - 2:00 PM</td>
                        </tr>
                        <tr>
                            <td>Sunday</td>
                            <td>Closed</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        
        <div class="contact-form">
    <h2>Send Us a Message</h2>
    <form action="https://web3forms.com/api/v1/submit" method="POST">
        <input type="hidden" name="access_key" value="827ccb0eea8a706c4c34a16891f84e7b">

                <div class="form-group">
                    <label for="name">Your Name</label>
                    <input type="text" id="name" name="name" class="form-control" required>
                </div>
                
                <div class="form-group">
                    <label for="email">Email Address</label>
                    <input type="email" id="email" name="email" class="form-control" required>
                </div>
                
                <div class="form-group">
                    <label for="phone">Phone Number</label>
                    <input type="tel" id="phone" name="phone" class="form-control">
                </div>
                
                <div class="form-group">
                    <label for="subject">Subject</label>
                    <select id="subject" name="subject" class="form-control" required>
                        <option value="">Select a subject</option>
                        <option value="General Inquiry">General Inquiry</option>
                        <option value="Quote Request">Quote Request</option>
                        <option value="Design Consultation">Design Consultation</option>
                        <option value="Existing Project">Existing Project</option>
                        <option value="Technical Support">Technical Support</option>
                    </select>
                </div>
                
                <div class="form-group">
                    <label for="message">Your Message</label>
                    <textarea id="message" name="message" class="form-control" required></textarea>
                </div>
                
                <button type="submit" class="btn-submit">Send Message</button>
            </form>
        </div>
        
        <div class="map-container">
        <iframe src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d5503.367876899148!2d36.82165526865251!3d-1.2803411219441296!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zMcKwMTYnNDcuNCJTIDM2wrA0OSczMC42IkU!5e0!3m2!1ssw!2ske!4v1745873904629!5m2!1ssw!2ske" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>        </div>
    </div>
</section>

<?php include('includes/footer.php'); ?>