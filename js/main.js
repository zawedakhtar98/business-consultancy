document.addEventListener("DOMContentLoaded", function() {
    // Sticky Navigation
    const navbar = document.querySelector('.navbar');
    
    window.addEventListener('scroll', function() {
        if (window.scrollY > 50) {
            navbar.classList.add('shadow-sm');
            navbar.style.background = 'rgba(255, 255, 255, 0.95)';
        } else {
            navbar.classList.remove('shadow-sm');
            navbar.style.background = '#ffffff';
        }
    });

    // Smooth Desktop Dropdown Hover with buffer margin
    const dropdownElements = document.querySelectorAll('.navbar .nav-item.dropdown');
    dropdownElements.forEach(dropdown => {
        let hoverTimeout;
        const menu = dropdown.querySelector('.dropdown-menu');
        const toggle = dropdown.querySelector('.dropdown-toggle');

        dropdown.addEventListener('mouseenter', function() {
            if (window.innerWidth >= 1200) {
                clearTimeout(hoverTimeout);
                dropdown.classList.add('show');
                if (menu) menu.classList.add('show');
                if (toggle) toggle.setAttribute('aria-expanded', 'true');
            }
        });

        dropdown.addEventListener('mouseleave', function() {
            if (window.innerWidth >= 1200) {
                hoverTimeout = setTimeout(() => {
                    dropdown.classList.remove('show');
                    if (menu) menu.classList.remove('show');
                    if (toggle) toggle.setAttribute('aria-expanded', 'false');
                }, 120); // 120ms buffer prevents accidental closures when cursor moves
            }
        });
    });

    // Smooth Scrolling for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const targetId = this.getAttribute('href');
            if (targetId === '#') return;
            
            const targetElement = document.querySelector(targetId);
            if (targetElement) {
                const navHeight = document.querySelector('.navbar').offsetHeight;
                const targetPosition = targetElement.getBoundingClientRect().top + window.pageYOffset - navHeight;
                
                window.scrollTo({
                    top: targetPosition,
                    behavior: 'smooth'
                });
            }
        });
    });

    // Form Validation (if contact form exists)
    const contactForm = document.getElementById('contactForm');
    if (contactForm) {
        contactForm.addEventListener('submit', function(e) {
            e.preventDefault();
            // Basic validation
            let isValid = true;
            const requiredFields = contactForm.querySelectorAll('[required]');
            
            requiredFields.forEach(field => {
                if (!field.value.trim()) {
                    isValid = false;
                    field.classList.add('is-invalid');
                } else {
                    field.classList.remove('is-invalid');
                }
            });

            if (isValid) {
                // Placeholder for actual submission logic
                alert('Thank you for your message. Our team will get back to you shortly.');
                contactForm.reset();
            }
        });
    }

    // Timeline Animation (Scrolling Animated Step)
    const timelineSteps = document.querySelectorAll('.timeline-step');
    if (timelineSteps.length > 0) {
        const observerOptions = {
            threshold: 0.5,
            rootMargin: "0px 0px -100px 0px"
        };
        
        const timelineObserver = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('active');
                }
            });
        }, observerOptions);

        timelineSteps.forEach(step => {
            timelineObserver.observe(step);
        });
    }

    // Animated Countable Number Counters (Count up on scroll)
    const statCounters = document.querySelectorAll('.stat-number');
    if (statCounters.length > 0) {
        const animateCounter = (el) => {
            const target = parseInt(el.getAttribute('data-target'), 10);
            if (isNaN(target)) return;

            const duration = 1800; // 1.8 seconds duration
            const startTime = performance.now();

            const updateCount = (now) => {
                const elapsed = now - startTime;
                const progress = Math.min(elapsed / duration, 1);

                // Smooth easeOutQuad function: 1 - (1 - progress) * (1 - progress)
                const easeOut = 1 - (1 - progress) * (1 - progress);
                const current = Math.floor(easeOut * target);

                el.textContent = current;

                if (progress < 1) {
                    requestAnimationFrame(updateCount);
                } else {
                    el.textContent = target;
                }
            };

            requestAnimationFrame(updateCount);
        };

        if ('IntersectionObserver' in window) {
            const counterObserver = new IntersectionObserver((entries, observer) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        animateCounter(entry.target);
                        observer.unobserve(entry.target);
                    }
                });
            }, {
                threshold: 0.2,
                rootMargin: "0px 0px -40px 0px"
            });

            statCounters.forEach(counter => {
                counterObserver.observe(counter);
            });
        } else {
            // Fallback for legacy browsers without IntersectionObserver
            statCounters.forEach(counter => animateCounter(counter));
        }
    }

    // Hero Carousel Touch Swipe Gesture Handling (Touch to change slides)
    const heroCarousel = document.getElementById('heroCarousel');
    if (heroCarousel) {
        let touchStartX = 0;
        let touchEndX = 0;
        let touchStartY = 0;
        let touchEndY = 0;
        const minSwipeThreshold = 40; // minimum horizontal px distance to count as swipe

        heroCarousel.addEventListener('touchstart', function(e) {
            touchStartX = e.changedTouches[0].clientX;
            touchStartY = e.changedTouches[0].clientY;
        }, { passive: true });

        heroCarousel.addEventListener('touchend', function(e) {
            touchEndX = e.changedTouches[0].clientX;
            touchEndY = e.changedTouches[0].clientY;
            handleTouchSwipe();
        }, { passive: true });

        function handleTouchSwipe() {
            const deltaX = touchEndX - touchStartX;
            const deltaY = touchEndY - touchStartY;

            // Only trigger if horizontal swipe is dominant (prevents interrupting normal page scrolling)
            if (Math.abs(deltaX) > Math.abs(deltaY) && Math.abs(deltaX) > minSwipeThreshold) {
                if (typeof bootstrap !== 'undefined' && bootstrap.Carousel) {
                    const carousel = bootstrap.Carousel.getOrCreateInstance(heroCarousel);
                    if (deltaX < 0) {
                        carousel.next(); // Swiped left -> next slide
                    } else {
                        carousel.prev(); // Swiped right -> previous slide
                    }
                }
            }
        }
    }
});
