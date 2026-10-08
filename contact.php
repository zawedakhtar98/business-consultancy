<?php include 'header.php'; ?>
<main>
    <!-- Page Header -->
    <section class="position-relative" style="height: 360px;">
        <img src="images/why_us_handshake_1789535126651.jpg" alt="Contact Us" class="w-100 h-100 object-fit-cover" style="filter: brightness(0.35);">
        <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center">
            <div class="container mt-4">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-2">
                        <li class="breadcrumb-item"><a href="index.php" class="text-white-50 text-decoration-none">Home</a></li>
                        <li class="breadcrumb-item active text-white" aria-current="page">Contact Us</li>
                    </ol>
                </nav>
                <h1 class="display-4 fw-bold text-white mb-2">Contact Us</h1>
                <p class="lead text-white-50" style="max-width: 650px;">Connect to a Workforce Expert. We're here to assist your talent, compliance, and skilling requirements.</p>
            </div>
        </div>
    </section>

    <!-- Connect to a Workforce Expert Form & Contact Cards -->
    <section class="section-padding">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-7">
                    <span class="text-accent-gold fw-bold text-uppercase tracking-wide">Direct Consultation</span>
                    <h2 class="text-primary-navy mt-1 mb-4">Connect to a Workforce Expert</h2>
                    <p class="text-muted mb-4">Fill out the form below and one of our IIM alumni workforce consultants will reach out to you within 24 hours to conduct an initial needs assessment.</p>

                    <form id="contactForm" class="needs-validation" novalidate>
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label for="name" class="form-label fw-bold">Full Name *</label>
                                <input type="text" class="form-control form-control-lg" id="name" placeholder="John Doe" required>
                                <div class="invalid-feedback">Please provide your name.</div>
                            </div>
                            <div class="col-md-6">
                                <label for="company" class="form-label fw-bold">Company Name *</label>
                                <input type="text" class="form-control form-control-lg" id="company" placeholder="Organization Pvt Ltd" required>
                                <div class="invalid-feedback">Please provide your company name.</div>
                            </div>
                            <div class="col-md-6">
                                <label for="email" class="form-label fw-bold">Business Email *</label>
                                <input type="email" class="form-control form-control-lg" id="email" placeholder="john@company.com" required>
                                <div class="invalid-feedback">Please provide a valid email.</div>
                            </div>
                            <div class="col-md-6">
                                <label for="phone" class="form-label fw-bold">Phone Number *</label>
                                <input type="tel" class="form-control form-control-lg" id="phone" placeholder="+91 98765 43210" required>
                            </div>
                            <div class="col-12">
                                <label for="service" class="form-label fw-bold">Service Interested In *</label>
                                <select class="form-select form-select-lg" id="service" required>
                                    <option value="" selected disabled>Choose a Solution...</option>
                                    <option value="naps-nats">Apprenticeship Solutions (NAPS / NATS / State Schemes)</option>
                                    <option value="staffing">Contract Staffing</option>
                                    <option value="payroll">Payroll Management</option>
                                    <option value="compliance">Labour Compliance &amp; Audit Defense</option>
                                    <option value="licenses">Business License Support</option>
                                    <option value="advisory">Workforce Advisory (HR Policy, MDPs, Career Pathing, PMS)</option>
                                    <option value="other">Other / General Enterprise Inquiry</option>
                                </select>
                                <div class="invalid-feedback">Please select a service.</div>
                            </div>
                            <div class="col-12">
                                <label for="workforce_size" class="form-label fw-bold">Approximate Workforce Size</label>
                                <select class="form-select" id="workforce_size">
                                    <option value="1-29">Under 30 Employees</option>
                                    <option value="30-100" selected>30 - 100 Employees (Mandatory NAPS Bracket)</option>
                                    <option value="101-500">101 - 500 Employees</option>
                                    <option value="501-2000">501 - 2,000 Employees</option>
                                    <option value="2000+">2,000+ Employees</option>
                                </select>
                            </div>
                            <div class="col-12">
                                <label for="message" class="form-label fw-bold">Message / Specific Requirements</label>
                                <textarea class="form-control" id="message" rows="4" placeholder="Tell us about your industry, locations, and workforce objectives..."></textarea>
                            </div>
                            <div class="col-12 mt-4">
                                <button type="submit" class="btn btn-primary w-100 py-3 fw-bold fs-5">Submit Request to Expert Team</button>
                            </div>
                        </div>
                    </form>
                </div>

                <div class="col-lg-5">
                    <!-- Contact Information Card -->
                    <div class="bg-light-gray p-4 p-md-5 rounded-4 shadow-sm mb-4">
                        <h4 class="text-primary-navy mb-4 fw-bold">Get In Touch</h4>
                        
                        <div class="d-flex mb-4">
                            <div class="text-accent-gold me-3 fs-3"><i class="fas fa-envelope"></i></div>
                            <div>
                                <h6 class="mb-1 text-primary-navy fw-bold">Email ID</h6>
                                <p class="mb-0"><a href="mailto:consult@workforce2047.com" class="text-decoration-none text-dark fw-semibold">consult@workforce2047.com</a></p>
                                <p class="mb-0"><a href="mailto:info@workforce2047.com" class="text-decoration-none text-muted small">info@workforce2047.com</a></p>
                            </div>
                        </div>

                        <div class="d-flex mb-4">
                            <div class="text-accent-gold me-3 fs-3"><i class="fas fa-phone-alt"></i></div>
                            <div>
                                <h6 class="mb-1 text-primary-navy fw-bold">Phone Support</h6>
                                <p class="text-dark fw-semibold mb-0">+91 99999 90000</p>
                                <small class="text-muted">Mon - Sat, 9:00 AM - 6:00 PM IST</small>
                            </div>
                        </div>

                        <div class="d-flex mb-4">
                            <div class="text-accent-gold me-3 fs-3"><i class="fas fa-map-marker-alt"></i></div>
                            <div>
                                <h6 class="mb-1 text-primary-navy fw-bold">Corporate Offices</h6>
                                <p class="text-muted mb-0">Mumbai (HO) &bull; Bengaluru &bull; Pune &bull; Goa</p>
                                <small class="text-muted">PAN-India Delivery Network</small>
                            </div>
                        </div>
                    </div>

                    <!-- Workforce LinkedIn QR Card -->
                    <div class="linkedin-qr-card">
                        <div class="d-flex align-items-center justify-content-center gap-2 mb-3">
                            <i class="fab fa-linkedin text-primary-navy fs-3"></i>
                            <h5 class="text-primary-navy fw-bold mb-0">WorkForce2047 LinkedIn</h5>
                        </div>
                        <p class="text-muted small mb-3">Scan the QR code below or tap to follow our official page for statutory updates, regulatory alerts, and workforce insights.</p>
                        
                        <!-- Visual QR Code Component -->
                        <div class="qr-box">
                            <svg width="160" height="160" viewBox="0 0 200 200" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect width="200" height="200" fill="white"/>
                                <!-- QR Corner Top-Left -->
                                <rect x="20" y="20" width="50" height="50" rx="4" fill="#0B2E5C"/>
                                <rect x="30" y="30" width="30" height="30" fill="white"/>
                                <rect x="38" y="38" width="14" height="14" fill="#D4A017"/>
                                <!-- QR Corner Top-Right -->
                                <rect x="130" y="20" width="50" height="50" rx="4" fill="#0B2E5C"/>
                                <rect x="140" y="30" width="30" height="30" fill="white"/>
                                <rect x="148" y="38" width="14" height="14" fill="#D4A017"/>
                                <!-- QR Corner Bottom-Left -->
                                <rect x="20" y="130" width="50" height="50" rx="4" fill="#0B2E5C"/>
                                <rect x="30" y="140" width="30" height="30" fill="white"/>
                                <rect x="38" y="148" width="14" height="14" fill="#D4A017"/>
                                <!-- Grid patterns -->
                                <rect x="85" y="25" width="12" height="12" fill="#0B2E5C"/>
                                <rect x="105" y="25" width="12" height="12" fill="#0B2E5C"/>
                                <rect x="85" y="45" width="12" height="12" fill="#D4A017"/>
                                <rect x="105" y="45" width="12" height="12" fill="#0B2E5C"/>
                                <rect x="85" y="65" width="12" height="12" fill="#0B2E5C"/>
                                <rect x="25" y="85" width="12" height="12" fill="#0B2E5C"/>
                                <rect x="45" y="85" width="12" height="12" fill="#D4A017"/>
                                <rect x="65" y="85" width="12" height="12" fill="#0B2E5C"/>
                                <rect x="85" y="85" width="30" height="30" rx="4" fill="#0B2E5C"/>
                                <path d="M95 95h10v10H95z" fill="#D4A017"/>
                                <rect x="125" y="85" width="12" height="12" fill="#0B2E5C"/>
                                <rect x="145" y="85" width="12" height="12" fill="#0B2E5C"/>
                                <rect x="165" y="85" width="12" height="12" fill="#D4A017"/>
                                <rect x="85" y="125" width="12" height="12" fill="#0B2E5C"/>
                                <rect x="105" y="125" width="12" height="12" fill="#D4A017"/>
                                <rect x="85" y="145" width="12" height="12" fill="#D4A017"/>
                                <rect x="105" y="145" width="12" height="12" fill="#0B2E5C"/>
                                <rect x="85" y="165" width="12" height="12" fill="#0B2E5C"/>
                                <rect x="125" y="125" width="12" height="12" fill="#0B2E5C"/>
                                <rect x="145" y="125" width="12" height="12" fill="#0B2E5C"/>
                                <rect x="165" y="125" width="12" height="12" fill="#0B2E5C"/>
                                <rect x="125" y="145" width="12" height="12" fill="#D4A017"/>
                                <rect x="145" y="145" width="12" height="12" fill="#0B2E5C"/>
                                <rect x="165" y="165" width="12" height="12" fill="#0B2E5C"/>
                            </svg>
                        </div>
                        <div>
                            <a href="https://linkedin.com" target="_blank" rel="noopener noreferrer" class="btn btn-outline-primary btn-sm px-4">
                                <i class="fab fa-linkedin me-2"></i> Connect on LinkedIn
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Frequently Asked Questions / Clarifications Component -->
    <?php include 'questions.php'; ?>

    <!-- Cities Section -->
    <?php include 'cities_section.php'; ?>

</main>
<?php include 'footer.php'; ?>