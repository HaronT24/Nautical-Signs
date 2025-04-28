<footer>
        <div class="footer-links">
            <a href="about-us.php">About Us</a>
            <a href="portfolio.php">Portfolio</a>
            <a href="materials.php">Materials</a>
            <a href="installation.php">Installation</a>
            <a href="careers.php">Careers</a>
            <a href="blog.php">Blog</a>
        </div>
        <div class="social-icons">
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-linkedin-in"></i></a>
            <a href="#"><i class="fab fa-pinterest"></i></a>
        </div>
        <p class="copyright">&copy; 2025 NAUTICAL Signs. All Rights Reserved.</p>
    </footer>


    <script>
        // Carousel functionality
        let currentSlide = 0;
        const slides = document.querySelectorAll('.carousel-item');
        const totalSlides = slides.length;
    
        function showSlide(index) {
            const carouselInner = document.querySelector('.carousel-inner');
            if (index >= totalSlides) currentSlide = 0;
            if (index < 0) currentSlide = totalSlides - 1;
            carouselInner.style.transform = `translateX(-${currentSlide * 100}%)`;
        }
    
        function nextSlide() {
            currentSlide++;
            showSlide(currentSlide);
        }
    
        function prevSlide() {
            currentSlide--;
            showSlide(currentSlide);
        }
    
        // Auto-advance carousel every 5 seconds
        let slideInterval = setInterval(nextSlide, 5000);
    
        // Pause carousel on hover
        const carousel = document.querySelector('.carousel');
        carousel.addEventListener('mouseenter', () => {
            clearInterval(slideInterval);
        });
        
        carousel.addEventListener('mouseleave', () => {
            slideInterval = setInterval(nextSlide, 5000);
        });
    
        // Mobile menu toggle
        function toggleMenu() {
            const menu = document.getElementById('hamburger-menu');
            menu.classList.toggle('open');
            
            // Toggle hamburger icon between bars and times
            const hamburgerIcon = document.querySelector('.hamburger i');
            if (menu.classList.contains('open')) {
                hamburgerIcon.classList.remove('fa-bars');
                hamburgerIcon.classList.add('fa-times');
            } else {
                hamburgerIcon.classList.remove('fa-times');
                hamburgerIcon.classList.add('fa-bars');
            }
        }
    
        // Close mobile menu when clicking outside or on a link
        document.addEventListener('click', function(event) {
            const hamburger = document.querySelector('.hamburger');
            const hamburgerMenu = document.getElementById('hamburger-menu');
            const isClickInsideMenu = hamburgerMenu.contains(event.target);
            const isClickOnHamburger = hamburger.contains(event.target);
            
            if (!isClickOnHamburger && !isClickInsideMenu && hamburgerMenu.classList.contains('open')) {
                hamburgerMenu.classList.remove('open');
                const hamburgerIcon = document.querySelector('.hamburger i');
                hamburgerIcon.classList.remove('fa-times');
                hamburgerIcon.classList.add('fa-bars');
            }
            
            // Close menu when clicking on a link
            if (isClickInsideMenu && event.target.tagName === 'A') {
                hamburgerMenu.classList.remove('open');
                const hamburgerIcon = document.querySelector('.hamburger i');
                hamburgerIcon.classList.remove('fa-times');
                hamburgerIcon.classList.add('fa-bars');
            }
        });
    
        
    
        // Smooth scrolling for all anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                const targetId = this.getAttribute('href');
                if (targetId === '#') return;
                
                const targetElement = document.querySelector(targetId);
                if (targetElement) {
                    targetElement.scrollIntoView({
                        behavior: 'smooth'
                    });
                }
            });
        });
    
        // Initialize the first slide as active
        if (slides.length > 0) {
            slides[0].classList.add('active');
        }
    </script>
</body>
</html>