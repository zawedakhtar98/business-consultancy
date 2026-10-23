<?php
$page_title = "Contact WorkForce2047 | Apprenticeship & Workforce Consultants India";
$page_desc = "Get in touch with WorkForce2047 Partners LLP. Consult our NAPS/NATS implementation and contract staffing experts for customized workforce solutions.";
$page_keywords = "Contact WorkForce2047, NAPS consultant for companies, NATS implementation partner contact, workforce consulting enquiry, hire apprentices India, apprenticeship consultation India";
include 'header.php';
?>
<main>
    <!-- Page Header -->
    <section class="position-relative page-header-banner" style="height: 380px;">
        <img src="images/contact-header.png" alt="Contact Us" class="w-100 h-100 object-fit-cover page-header-img" style="filter: brightness(0.35); object-position: center 15%;">
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
                    <p class="text-muted mb-4"> A member of our workforce consulting team will contact you within 24 hours to commence your initial needs assessment.</p>

                    <form id="contactForm" action="contact-email-action.php" method="POST" class="needs-validation" novalidate>
                        <div id="contactAlert" class="alert d-none mb-4" role="alert"></div>
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label for="name" class="form-label fw-bold">Full Name *</label>
                                <input type="text" class="form-control form-control-lg" id="name" name="name" placeholder="John Doe" required>
                                <div class="invalid-feedback">Please provide your name.</div>
                            </div>
                            <div class="col-md-6">
                                <label for="company" class="form-label fw-bold">Company Name *</label>
                                <input type="text" class="form-control form-control-lg" id="company" name="company" placeholder="Organization Pvt Ltd" required>
                                <div class="invalid-feedback">Please provide your company name.</div>
                            </div>
                            <div class="col-md-6">
                                <label for="email" class="form-label fw-bold">Business Email *</label>
                                <input type="email" class="form-control form-control-lg" id="email" name="email" placeholder="john@company.com" required>
                                <div class="invalid-feedback" id="emailFeedback">Please provide a valid email address.</div>
                            </div>
                            <div class="col-md-6">
                                <label for="phone" class="form-label fw-bold">Mobile Number *</label>
                                <input type="tel" class="form-control form-control-lg" id="phone" name="phone" placeholder="Enter 10-digit mobile number" maxlength="10" minlength="10" pattern="[0-9]{10}" inputmode="numeric" required>
                                <div class="invalid-feedback" id="phoneFeedback">Please enter a valid 10-digit mobile number (numbers only).</div>
                            </div>

                            <div class="col-12">
                                <label for="message" class="form-label fw-bold">Message / Specific Requirements</label>
                                <textarea class="form-control" id="message" name="message" rows="4" placeholder="Tell us about your industry, locations, and workforce objectives..."></textarea>
                            </div>
                            <div class="col-12 mt-4">
                                <button type="submit" id="submitBtn" class="btn btn-primary w-100 py-3 fw-bold fs-5 d-flex align-items-center justify-content-center">
                                    <span class="btn-text">Submit Request</span>
                                    <span class="spinner-border spinner-border-sm ms-2 d-none" role="status" aria-hidden="true"></span>
                                </button>
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
                                <p class="mb-0"><a href="mailto:info@workforce2047partners.com" class="text-decoration-none text-dark fw-semibold">info@workforce2047partners.com</a></p>
                            </div>
                        </div>

                        <div class="d-flex mb-4">
                            <div class="text-accent-gold me-3 fs-3"><i class="fas fa-map-marker-alt"></i></div>
                            <div>
                                <h6 class="mb-1 text-primary-navy fw-bold">Corporate Offices</h6>
                                <p class="text-muted mb-0">Bengaluru (HO)</p>
                            </div>
                        </div>
                        <hr class="my-4">
                        <div class="social-icons d-flex gap-3 justify-content-center">
                            <!-- <a href="#" class="text-primary-navy fs-4"><i class="fab fa-linkedin"></i></a>
                            <a href="#" class="text-primary-navy fs-4"><i class="fab fa-twitter"></i></a> -->
                            <a href="https://www.linkedin.com/company/workforce2047-partners/" target="_blank" rel="noopener noreferrer" class="btn btn-linkedin rounded-pill d-inline-flex align-items-center shadow-sm text-decoration-none">
                                <i class="fab fa-linkedin fs-5 me-2"></i> Follow us on LinkedIn
                            </a>
                        </div>
                        <div class="d-flex justify-content-center align-items-center mt-4">
                            <img src="images/workforcelinkedin-scanner.jpeg" alt="MSME" class="rounded-3 bg-white p-1 shadow-sm border img-fluid flex-shrink-0" style="max-height: 170px;">
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