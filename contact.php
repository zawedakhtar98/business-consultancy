<?php include 'header.php'; ?>
<main>
    <!-- Page Header -->
    <section class="position-relative" style="height: 350px;">
        <img src="images/why_us_handshake_1789535126651.jpg" alt="Contact Us" class="w-100 h-100 object-fit-cover" style="filter: brightness(0.35);">
        <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center">
            <div class="container mt-4">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-2">
                        <li class="breadcrumb-item"><a href="index.php" class="text-white-50 text-decoration-none">Home</a></li>
                        <li class="breadcrumb-item active text-white" aria-current="page">Contact Us</li>
                    </ol>
                </nav>
                <h1 class="display-4 fw-bold text-white mb-3">Contact Us</h1>
                <p class="lead text-white-50" style="max-width: 600px;">We're here to help you optimize your workforce strategy.</p>
            </div>
        </div>
    </section>

    <section class="section-padding">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6">
                    <h2 class="text-primary-navy mb-4">Get in Touch</h2>
                    <p class="text-muted mb-5">Fill out the form below and one of our workforce consultants will reach out to you within 24 hours to discuss how we can support your organization's goals.</p>

                    <form id="contactForm" class="needs-validation" novalidate>
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label for="name" class="form-label fw-bold">Full Name *</label>
                                <input type="text" class="form-control" id="name" required>
                                <div class="invalid-feedback">Please provide your name.</div>
                            </div>
                            <div class="col-md-6">
                                <label for="company" class="form-label fw-bold">Company Name *</label>
                                <input type="text" class="form-control" id="company" required>
                                <div class="invalid-feedback">Please provide your company name.</div>
                            </div>
                            <div class="col-md-6">
                                <label for="email" class="form-label fw-bold">Business Email *</label>
                                <input type="email" class="form-control" id="email" required>
                                <div class="invalid-feedback">Please provide a valid email.</div>
                            </div>
                            <div class="col-md-6">
                                <label for="phone" class="form-label fw-bold">Phone Number</label>
                                <input type="tel" class="form-control" id="phone">
                            </div>
                            <div class="col-12">
                                <label for="service" class="form-label fw-bold">Service Interested In *</label>
                                <select class="form-select" id="service" required>
                                    <option value="" selected disabled>Choose...</option>
                                    <option value="apprenticeship">Apprenticeship & Skilling</option>
                                    <option value="consulting">Corporate Consulting</option>
                                    <option value="staffing">Contract Staffing</option>
                                    <option value="payroll">Payroll & Compliance</option>
                                    <option value="other">Other / General Inquiry</option>
                                </select>
                                <div class="invalid-feedback">Please select a service.</div>
                            </div>
                            <div class="col-12">
                                <label for="message" class="form-label fw-bold">Message</label>
                                <textarea class="form-control" id="message" rows="4"></textarea>
                            </div>
                            <div class="col-12 mt-4">
                                <button type="submit" class="btn btn-primary w-100 py-3">Submit Request</button>
                            </div>
                        </div>
                    </form>
                </div>

                <div class="col-lg-5 offset-lg-1">
                    <div class="bg-light-gray p-5 rounded h-100">
                        <h3 class="text-primary-navy mb-4">Corporate Office</h3>
                        <div class="d-flex mb-4">
                            <div class="text-accent-gold me-3"><i class="fas fa-map-marker-alt fa-2x"></i></div>
                            <div>
                                <h5 class="mb-1">Headquarters</h5>
                                <!-- <p class="text-muted mb-0">Business Hub Tower, Level 14<br>New Delhi, 110001<br>India</p> -->
                                <p>Mumbai,Banglore</p>
                            </div>
                        </div>
                        <div class="d-flex mb-4">
                            <div class="text-accent-gold me-3"><i class="fas fa-phone-alt fa-2x"></i></div>
                            <div>
                                <h5 class="mb-1">Call Us</h5>
                                <p class="text-muted mb-0">+91 9999990000<br>Mon-Sat, 9:00 AM - 6:00 PM</p>
                            </div>
                        </div>
                        <div class="d-flex mb-4">
                            <div class="text-accent-gold me-3"><i class="fas fa-envelope fa-2x"></i></div>
                            <div>
                                <h5 class="mb-1">Email Us</h5>
                                <p class="text-muted mb-0">consult@workforce2047.com<br>info@workforce2047.com</p>
                            </div>
                        </div>

                        <hr class="my-4">
                        <h5 class="text-primary-navy mb-3">Connect With Us</h5>
                        <div class="social-icons d-flex gap-3">
                            <a href="#" class="text-primary-navy fs-4"><i class="fab fa-linkedin"></i></a>
                            <a href="#" class="text-primary-navy fs-4"><i class="fab fa-twitter"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<?php include 'footer.php'; ?>