<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NAUTICAL Signs - 3D Signage Solutions</title>
    <link rel="icon" href="includes/images/logo.png" type="image/png">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
            color: #333;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        /* Header Styles */
        header {
            display: flex;
            justify-content: center;
            padding: 15px 40px;
            background: #ffffff;
            position: sticky;
            top: 0;
            z-index: 1000;
            border-bottom: 1px solid #e0e0e0;
        }

        .header-container {
            display: flex;
            align-items: center;
            justify-content: space-between;
            width: 100%;
            max-width: 1200px;
        }

        .logo-nav-wrapper {
            display: flex;
            align-items: center;
            gap: 50px;
            margin: 0 auto;
        }

        .logo {
            display: flex;
            align-items: center;
            gap: 10px;
            font-size: 24px;
            font-weight: bold;
        }

        .NAUTICAL-text {
            color: #000000;
        }

        .signs-text {
            background: linear-gradient(to bottom, #00f2ff, #0062ff);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .logo img {
            height: 40px;
            width: auto;
        }

        nav {
            display: flex;
            gap: 25px;
        }

        nav a {
            color: #000000;
            text-decoration: none;
            font-size: 18px;
            transition: color 0.3s ease;
            position: relative;
            white-space: nowrap;
        }

        nav a:hover {
            color: #555555;
        }

        nav a::after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            background: #000000;
            bottom: -5px;
            left: 0;
            transition: width 0.3s ease;
        }

        nav a:hover::after {
            width: 100%;
        }

        .hamburger {
            display: none;
            font-size: 24px;
            cursor: pointer;
            color: #000000;
        }

        .hamburger-menu {
            display: none;
            flex-direction: column;
            background-color: #ffffff;
            position: absolute;
            top: 70px;
            right: 20px;
            padding: 15px;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            text-align: left;
            border: 1px solid #e0e0e0;
            z-index: 1001;
        }
        
        .hamburger-menu.open {
            display: flex;
        }
        .hamburger-menu a {
            color: #000000;
            text-decoration: none;
            font-size: 1rem;
            margin: 10px 0;
            padding: 8px 12px;
            display: block;
        }

        .hamburger-menu a:hover {
            color: #555555;
            background-color: #f5f5f5;
            border-radius: 5px;
        }

        @media (max-width: 992px) {
            .logo-nav-wrapper {
                gap: 30px;
            }
            nav {
                gap: 15px;
            }
        }

        @media (max-width: 768px) {
            .header-container {
                justify-content: center;
            }
            .logo-nav-wrapper {
                gap: 0;
            }
            nav {
                display: none;
            }
            .hamburger {
                display: block;
                position: absolute;
                right: 20px;
            }
        }

        /* Hero Section */
        .hero {
            position: relative;
            height: 85vh;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
            margin-bottom: 30px;
            background-color: #fff;
            border-radius: 15px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            margin: 20px;
        }

        .hero h1 {
            font-size: 50px;
            background: linear-gradient(90deg, #0062ff, #0062ff);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            margin-bottom: 20px;
        }

        .hero p {
            font-size: 20px;
            margin-bottom: 30px;
            max-width: 700px;
            color: #555;
        }

        /* Button Styles */
        .btn {
            padding: 15px 30px;
            background: linear-gradient(90deg, #0062ff, #0062ff);
            border: none;
            color: #fff;
            font-size: 20px;
            cursor: pointer;
            transition: 0.3s;
            border-radius: 30px;
            text-decoration: none;
            display: inline-block;
        }

        .btn:hover {
            transform: scale(1.1);
            box-shadow: 0 0 20px rgba(0, 242, 255, 0.5);
        }

        /* Products Section */
        .products-title {
            font-size: 36px;
            margin: 60px 0 30px;
            background: linear-gradient(90deg, #0062ff, #0062ff);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            text-align: center;
            width: 100%;
        }

        .products {
            display: flex;
            justify-content: center;
            gap: 20px;
            padding: 20px;
            flex-wrap: wrap;
            margin-bottom: 50px;
        }

        .product-card {
            background: #fff;
            padding: 20px;
            border-radius: 15px;
            width: 250px;
            text-align: center;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }

        .product-card:hover {
            transform: scale(1.05);
            box-shadow: 0 0 20px rgba(0, 242, 255, 0.5);
        }

        .product-card img {
            width: 100%;
            border-radius: 10px;
            margin-bottom: 15px;
            height: 150px;
            object-fit: cover;
        }

        .product-card h2 {
            font-size: 22px;
            margin-bottom: 10px;
            color: #333;
        }

        .product-card p {
            font-size: 16px;
            margin-bottom: 15px;
            color: #666;
        }

        /* Featured Work */
        .featured-work {
            background: #fff;
            padding: 30px;
            border-radius: 15px;
            margin: 40px auto;
            max-width: 900px;
            display: flex;
            align-items: center;
            gap: 40px;
            text-align: left;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }

        .featured-work img {
            width: 350px;
            border-radius: 10px;
            flex-shrink: 0;
            height: auto;
        }

        .featured-work h2 {
            font-size: 28px;
            margin-bottom: 15px;
            background: linear-gradient(90deg, #0062ff, #0062ff);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .featured-work p {
            font-size: 18px;
            margin-bottom: 25px;
            line-height: 1.6;
            color: #555;
        }

        @media (max-width: 768px) {
            .featured-work {
                flex-direction: column;
                text-align: center;
                padding: 20px;
            }

            .featured-work img {
                width: 100%;
                max-width: 300px;
                margin-bottom: 20px;
            }

            .featured-work h2 {
                font-size: 24px;
            }

            .featured-work p {
                font-size: 16px;
            }
        }

        /* Carousel */
        .carousel {
            position: relative;
            height: 84vh;
            overflow: hidden;
            margin-bottom: 40px;
            border-radius: 15px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            margin: 20px;
        }

        .carousel-inner {
            display: flex;
            transition: transform 0.5s ease;
            height: 100%;
        }

        .carousel-item {
            min-width: 100%;
            height: 100%;
            position: relative;
        }

        .carousel-item img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .carousel-caption {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
            color: white;
            width: 80%;
            max-width: 800px;
        }

        .carousel-caption h1 {
            font-size: 3rem;
            background: linear-gradient(90deg, #0062ff, #0062ff);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            margin-bottom: 20px;
        }

        .carousel-caption p {
            font-size: 1.5rem;
            margin-bottom: 30px;
        }

        .carousel-control {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            background: rgba(0, 0, 0, 0.5);
            color: white;
            border: none;
            padding: 15px;
            cursor: pointer;
            font-size: 2rem;
            z-index: 10;
            border-radius: 50%;
            width: 60px;
            height: 60px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .carousel-control.prev {
            left: 30px;
        }

        .carousel-control.next {
            right: 30px;
        }

        @media (max-width: 768px) {
            .carousel-caption h1 {
                font-size: 2rem;
            }

            .carousel-caption p {
                font-size: 1rem;
            }

            .carousel-control {
                font-size: 1.5rem;
                width: 50px;
                height: 50px;
                padding: 10px;
            }
        }

                /* Back to Top Button */
                #back-to-top {
            display: none;
            position: fixed;
            bottom: 30px;
            right: 30px;
            background: linear-gradient(90deg, #0062ff, #0062ff);
            color: white;
            border: none;
            border-radius: 50%;
            width: 60px;
            height: 60px;
            font-size: 24px;
            cursor: pointer;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.3);
            transition: transform 0.3s ease;
            z-index: 1001;
            align-items: center;
            justify-content: center;
            padding: 0;
        }
        
        #back-to-top:hover {
            transform: scale(1.1);
        }
        /* Footer */
        footer {
            padding: 40px 50px 20px;
            background: #333;
            text-align: center;
            color: #fff;
        }

        .footer-links {
            margin: 25px 0;
            display: flex;
            justify-content: center;
            gap: 30px;
            flex-wrap: wrap;
        }

        .footer-links a {
            color: #fff;
            text-decoration: none;
            font-size: 16px;
            transition: color 0.3s ease, text-shadow 0.3s ease;
        }

        .footer-links a:hover {
            color: #00f2ff;
            text-shadow: 0 0 10px #00f2ff;
        }

        .social-icons {
            margin: 25px 0;
            display: flex;
            justify-content: center;
            gap: 25px;
        }

        .social-icons a {
            color: #fff;
            font-size: 22px;
            transition: color 0.3s;
            width: 45px;
            height: 45px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            background: rgba(255, 255, 255, 0.1);
            flex-shrink: 0;
        }

        .social-icons a:hover {
            color: #00f2ff;
            background: rgba(0, 242, 255, 0.2);
        }

        .copyright {
            margin-top: 20px;
            font-size: 14px;
            color: #aaa;
        }
    </style>
</head>
<body>
    <header>
        <div class="header-container">
            <div class="logo-nav-wrapper">
                <div class="logo">
                    <img src="includes/images/logo.png" alt="NAUTICAL Signs Logo">
                    <span class="NAUTICAL-text">NAUTICAL</span> <span class="signs-text">SIGNS</span>
                </div>
                <nav id="desktop-nav">
                    <a href="index.php">Home</a>
                    <a href="services.php">Services</a>
                    <a href="products.php">Products</a>
                    <a href="gallery.php">Gallery</a>
                    <a href="about-us.php">About Us</a>
                    <a href="contact-us.php">Contact Us</a>
                    <a href="faqs.php">FAQs</a>
                </nav>
            </div>
            <div class="hamburger" onclick="toggleMenu()">
                <i class="fas fa-bars"></i>
            </div>
            <div class="hamburger-menu" id="hamburger-menu">
                <a href="index.php"><i class="fas fa-home"></i> Home</a>
                <a href="services.php"><i class="fas fa-cogs"></i> Services</a>
                <a href="products.php"><i class="fas fa-box-open"></i> Products</a>
                <a href="gallery.php"><i class="fas fa-images"></i> Gallery</a>
                <a href="about-us.php"><i class="fas fa-info-circle"></i> About Us</a>
                <a href="contact-us.php"><i class="fas fa-envelope"></i> Contact Us</a>
                <a href="faqs.php"><i class="fas fa-question-circle"></i> FAQs</a>
            </div>
        </div>
    </header>

    <button id="back-to-top" title="Go to top">↑</button>

<script> 
// Back to top button
        const backToTopButton = document.getElementById('back-to-top');
    
        window.addEventListener('scroll', () => {
            if (window.scrollY > 300) {
                backToTopButton.style.display = 'flex';
            } else {
                backToTopButton.style.display = 'none';
            }
        });
    
        backToTopButton.addEventListener('click', (e) => {
            e.preventDefault();
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });</script>