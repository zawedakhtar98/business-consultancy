document.addEventListener("DOMContentLoaded", function () {
    // Sticky Navigation
    const navbar = document.querySelector('.navbar');

    window.addEventListener('scroll', function () {
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

        dropdown.addEventListener('mouseenter', function () {
            if (window.innerWidth >= 1200) {
                clearTimeout(hoverTimeout);
                dropdown.classList.add('show');
                if (menu) menu.classList.add('show');
                if (toggle) toggle.setAttribute('aria-expanded', 'true');
            }
        });

        dropdown.addEventListener('mouseleave', function () {
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

    // Contact Form AJAX Submission with Validation & Feedback
    const contactForm = document.getElementById('contactForm');
    if (contactForm) {
        const phoneInput = document.getElementById('phone');
        const emailInput = document.getElementById('email');

        const emailRegex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
        const phoneRegex = /^[0-9]{10}$/;

        // Restrict phone input to numbers only and maximum 10 digits
        if (phoneInput) {
            // Prevent typing non-numeric characters
            phoneInput.addEventListener('keydown', function (e) {
                // Allow control keys: Backspace, Delete, Tab, Escape, Enter, Arrow keys, Home, End
                const allowedKeys = ['Backspace', 'Delete', 'Tab', 'Escape', 'Enter', 'ArrowLeft', 'ArrowRight', 'ArrowUp', 'ArrowDown', 'Home', 'End'];
                if (allowedKeys.includes(e.key) || e.ctrlKey || e.metaKey) {
                    return;
                }
                // Block any key that is not a numeric digit 0-9
                if (!/^[0-9]$/.test(e.key)) {
                    e.preventDefault();
                }
            });

            // Sanitize pasted or typed input to digits only & max 10 digits
            phoneInput.addEventListener('input', function () {
                this.value = this.value.replace(/[^0-9]/g, '').slice(0, 10);
                if (this.value.length === 10) {
                    this.classList.remove('is-invalid');
                    this.classList.add('is-valid');
                } else if (this.value.length > 0) {
                    this.classList.add('is-invalid');
                    this.classList.remove('is-valid');
                } else {
                    this.classList.remove('is-invalid', 'is-valid');
                }
            });

            // Validate on blur
            phoneInput.addEventListener('blur', function () {
                const val = this.value.trim();
                if (!phoneRegex.test(val)) {
                    this.classList.add('is-invalid');
                    this.classList.remove('is-valid');
                } else {
                    this.classList.remove('is-invalid');
                    this.classList.add('is-valid');
                }
            });
        }

        // Live validation for email
        if (emailInput) {
            emailInput.addEventListener('input', function () {
                const val = this.value.trim();
                if (val.length === 0) {
                    this.classList.remove('is-invalid', 'is-valid');
                } else if (emailRegex.test(val)) {
                    this.classList.remove('is-invalid');
                    this.classList.add('is-valid');
                }
            });

            emailInput.addEventListener('blur', function () {
                const val = this.value.trim();
                if (val && !emailRegex.test(val)) {
                    this.classList.add('is-invalid');
                    this.classList.remove('is-valid');
                } else if (val && emailRegex.test(val)) {
                    this.classList.remove('is-invalid');
                    this.classList.add('is-valid');
                }
            });
        }

        contactForm.addEventListener('submit', function (e) {
            e.preventDefault();

            const alertBox = document.getElementById('contactAlert');
            const submitBtn = document.getElementById('submitBtn') || contactForm.querySelector('button[type="submit"]');
            const btnText = submitBtn ? submitBtn.querySelector('.btn-text') : null;
            const spinner = submitBtn ? submitBtn.querySelector('.spinner-border') : null;

            // Reset alert
            if (alertBox) {
                alertBox.className = 'alert d-none mb-4';
                alertBox.innerHTML = '';
            }

            // Client-side validation
            let isValid = true;
            let firstInvalidField = null;
            const requiredFields = contactForm.querySelectorAll('[required]');

            requiredFields.forEach(field => {
                const val = field.value.trim();
                let fieldValid = Boolean(val);

                if ((field.type === 'email' || field.id === 'email') && val) {
                    fieldValid = emailRegex.test(val);
                }

                if ((field.type === 'tel' || field.id === 'phone') && val) {
                    fieldValid = phoneRegex.test(val);
                }

                if (!fieldValid) {
                    isValid = false;
                    field.classList.add('is-invalid');
                    field.classList.remove('is-valid');
                    if (!firstInvalidField) firstInvalidField = field;
                } else {
                    field.classList.remove('is-invalid');
                    field.classList.add('is-valid');
                }
            });

            if (!isValid) {
                if (firstInvalidField) firstInvalidField.focus();
                return;
            }

            // Set loading state
            if (submitBtn) submitBtn.disabled = true;
            if (btnText) btnText.textContent = 'Submitting Request...';
            if (spinner) spinner.classList.remove('d-none');

            const formData = new FormData(contactForm);

            fetch('contact-email-action.php', {
                method: 'POST',
                body: formData,
                headers: {
                    'X-Requested-With': 'XMLHttpRequest'
                }
            })
                .then(async response => {
                    const data = await response.json().catch(() => null);
                    if (!response.ok) {
                        const errorMsg = (data && data.message) ? data.message : 'Server encountered an issue sending your message.';
                        throw new Error(errorMsg);
                    }
                    return data;
                })
                .then(data => {
                    if (data && data.success) {
                        if (alertBox) {
                            alertBox.className = 'alert alert-success d-flex align-items-center mb-4';
                            alertBox.innerHTML = `<i class="fas fa-check-circle fs-4 me-3 text-success"></i><div><strong>Inquiry Received!</strong><br>${data.message}</div>`;
                        }
                        contactForm.reset();
                        // Remove all validation styling
                        contactForm.querySelectorAll('.is-invalid, .is-valid').forEach(el => {
                            el.classList.remove('is-invalid', 'is-valid');
                        });
                    } else {
                        throw new Error((data && data.message) ? data.message : 'Failed to send message.');
                    }
                })
                .catch(err => {
                    if (alertBox) {
                        alertBox.className = 'alert alert-danger d-flex align-items-center mb-4';
                        alertBox.innerHTML = `<i class="fas fa-exclamation-circle fs-4 me-3 text-danger"></i><div><strong>Submission Failed:</strong><br>${err.message}</div>`;
                    } else {
                        alert('Submission Failed: ' + err.message);
                    }
                })
                .finally(() => {
                    // Restore button state
                    if (submitBtn) submitBtn.disabled = false;
                    if (btnText) btnText.textContent = 'Submit Request';
                    if (spinner) spinner.classList.add('d-none');
                });
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

        heroCarousel.addEventListener('touchstart', function (e) {
            touchStartX = e.changedTouches[0].clientX;
            touchStartY = e.changedTouches[0].clientY;
        }, { passive: true });

        heroCarousel.addEventListener('touchend', function (e) {
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

    // =========================================================================
    // Content & Source Code Protection Deterrents
    // =========================================================================

    // 1. Disable Right-Click Context Menu (except inside form inputs)
    document.addEventListener('contextmenu', function (e) {
        if (e.target.tagName === 'INPUT' || e.target.tagName === 'TEXTAREA') {
            return true;
        }
        e.preventDefault();
        return false;
    });

    // 2. Disable Keyboard Shortcuts (Ctrl+C, Ctrl+U, Ctrl+S, Ctrl+P, F12, DevTools)
    /* document.addEventListener('keydown', function(e) {
         // Allow standard actions inside form inputs
         if (e.target.tagName === 'INPUT' || e.target.tagName === 'TEXTAREA') {
             return true;
         }
 
         // Block F12 (Inspect Element / DevTools)
         if (e.key === 'F12' || e.keyCode === 123) {
             e.preventDefault();
             return false;
         }
 
         // Block Ctrl/Cmd key combinations
         if (e.ctrlKey || e.metaKey) {
             const key = e.key.toLowerCase();
             // Ctrl+U (View Source), Ctrl+S (Save Page), Ctrl+P (Print), Ctrl+C (Copy)
             if (key === 'u' || key === 's' || key === 'p' || key === 'c') {
                 e.preventDefault();
                 return false;
             }
             // Ctrl+Shift+I / J / C (DevTools & Console)
             if (e.shiftKey && (key === 'i' || key === 'j' || key === 'c')) {
                 e.preventDefault();
                 return false;
             }
         }
     });*/

    // 3. Disable Dragging of Images
    document.addEventListener('dragstart', function (e) {
        if (e.target.nodeName === 'IMG') {
            e.preventDefault();
            return false;
        }
    });

    // 4. DevTools Security Warning
    try {
        console.log("%cWorkForce2047 Partners LLP", "color: #D4A017; font-size: 24px; font-weight: bold;");
        console.log("%cProtected Intellectual Property. Unauthorized copying, scraping, or code reproduction is prohibited.", "color: #0B2E5C; font-size: 13px; font-weight: 600;");
    } catch (err) { }

});
