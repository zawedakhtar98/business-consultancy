<?php include 'header.php'; ?>
<main>
    <!-- Hero Slider Section -->
    <div id="heroCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <!-- Slide 1 -->
            <div class="carousel-item active">
                <div class="hero-slide" style="background-image: url('images/slide1.jpg');">
                    <div class="hero-overlay"></div>
                    <div class="container hero-content">
                        <div class="row align-items-center">
                            <div class="col-lg-8">
                                <h1 class="hero-headline">Workforce Solutions Designed for <span>Modern Businesses</span></h1>
                                <p class="hero-subheadline">Organizations today face increasing pressure to attract skilled talent, control workforce costs, and maintain statutory compliance. WorkForce2047 Partners bridges this gap by delivering practical workforce solutions backed by deep industry expertise and IIM alumni leadership.</p>
                                <div class="d-flex gap-3 flex-wrap">
                                    <a href="contact.php" class="btn btn-accent btn-lg px-4 py-3">Talk to Our Experts</a>
                                    <a href="#services" class="btn btn-outline-light btn-lg px-4 py-3 border-2">Explore Our Services</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Slide 2 -->
            <div class="carousel-item">
                <div class="hero-slide" style="background-image: url('images/slide2.jpg');">
                    <div class="hero-overlay"></div>
                    <div class="container hero-content">
                        <div class="row align-items-center">
                            <div class="col-lg-8">
                                <h1 class="hero-headline">Empowering the <span>Manufacturing</span> Sector</h1>
                                <p class="hero-subheadline">Robust apprenticeship programmes and compliant contract staffing tailored for heavy engineering, automotive, and emerging industries across India.</p>
                                <div class="d-flex gap-3 flex-wrap">
                                    <a href="sectors.php#manufacturing" class="btn btn-accent btn-lg px-4 py-3">View Sector Expertise</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Slide 3 -->
            <div class="carousel-item">
                <div class="hero-slide" style="background-image: url('images/slide3.jpg');">
                    <div class="hero-overlay"></div>
                    <div class="container hero-content">
                        <div class="row align-items-center">
                            <div class="col-lg-8">
                                <h1 class="hero-headline">100% <span>Statutory Compliance</span></h1>
                                <p class="hero-subheadline">Mitigate risk with our rigorous statutory and regulatory management. We navigate India's complex labor laws so you can focus on growth.</p>
                                <div class="d-flex gap-3 flex-wrap">
                                    <a href="services.php#payroll" class="btn btn-accent btn-lg px-4 py-3">Explore Compliance Services</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <!-- About Us Section -->
    <section id="about" class="section-padding bg-light-gray">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-5 mb-lg-0">
                    <h2 class="mb-4">Driving Productivity Through <span class="text-accent-gold">Strategic Compliance</span></h2>
                    <p class="lead mb-4">We help organizations across manufacturing, engineering, retail, healthcare, logistics, IT, renewable energy, aerospace, and emerging industries leverage workforce development programs that enhance productivity while ensuring full regulatory compliance.</p>
                    <p class="mb-4">Our approach combines strategic workforce planning with seamless execution, enabling businesses to focus on growth while we manage the complexities of workforce administration.</p>
                    <a href="about.php" class="btn btn-outline-primary mt-2">Learn More About Us <i class="fas fa-arrow-right ms-2"></i></a>
                </div>
                <div class="col-lg-6">
                    <div class="row g-4">
                        <div class="col-sm-6">
                            <div class="bg-white p-4 rounded shadow-sm text-center stat-item">
                                <h3>20+</h3>
                                <p>Combined Years Expertise</p>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="bg-white p-4 rounded shadow-sm text-center stat-item">
                                <h3>5+</h3>
                                <p>Core Sectors Served</p>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="bg-white p-4 rounded shadow-sm text-center stat-item">
                                <h3>100+</h3>
                                <p>Active Professionals</p>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="bg-white p-4 rounded shadow-sm text-center stat-item">
                                <h3>100%</h3>
                                <p>Compliance Focus</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="section-padding">
        <div class="container">
            <div class="text-center mb-5">
                <span class="text-accent-gold fw-bold text-uppercase tracking-wide">Our Expertise</span>
                <h2 class="mt-2 mb-3">Strategic Human Capital Services</h2>
                <p class="text-muted mx-auto" style="max-width: 600px;">Comprehensive solutions tailored to streamline your operations, reduce risk, and build a resilient workforce.</p>
            </div>

            <div class="row g-4">
                <!-- Service 1 -->
                <div class="col-md-6">
                    <div class="service-card" onclick="window.location.href='service-apprenticeship.php'">
                        <div class="icon-wrapper"><i class="fas fa-arrow-right"></i></div>
                        <h4>Government Apprenticeship & Skilling Programme Implementation</h4>
                        <p>End-to-end management of NAPS and NATS programs to build a skilled talent pipeline while leveraging government incentives.</p>
                    </div>
                </div>

                <!-- Service 2 -->
                <div class="col-md-6">
                    <div class="service-card" onclick="window.location.href='service-consulting.php'">
                        <div class="icon-wrapper"><i class="fas fa-arrow-right"></i></div>
                        <h4>Corporate Consulting</h4>
                        <p>Leveraging government programs and strategic workplace solutions for organizational efficiency and structured growth.</p>
                    </div>
                </div>

                <!-- Service 3 -->
                <div class="col-md-6">
                    <div class="service-card" onclick="window.location.href='service-staffing.php'">
                        <div class="icon-wrapper"><i class="fas fa-arrow-right"></i></div>
                        <h4>Contract Staffing</h4>
                        <p>Flexible workforce solutions providing pre-screened, qualified personnel for short-term projects or long-term operational needs.</p>
                    </div>
                </div>

                <!-- Service 4 -->
                <div class="col-md-6">
                    <div class="service-card" onclick="window.location.href='service-payroll.php'">
                        <div class="icon-wrapper"><i class="fas fa-arrow-right"></i></div>
                        <h4>Payroll & Statutory Compliance Management</h4>
                        <p>Accurate, timely payroll processing integrated with rigorous adherence to all labor laws and statutory regulations.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Sectors Section -->
    <section id="sectors" class="section-padding bg-light-gray">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="mb-3">Proven Results Across Sectors</h2>
                <p class="text-muted mx-auto" style="max-width: 700px;">We possess deep cross-industry experience, enabling us to tailor our workforce strategies to the unique regulatory and operational demands of your specific sector.</p>
            </div>

            <div class="row g-4 pt-3">
                <div class="col-lg-4 col-md-6">
                    <div class="sector-card">
                        <div class="sector-badge">1</div>
                        <h5 class="text-primary-navy mt-2">Manufacturing Sector</h5>
                        <p>Implemented apprenticeship programmes across designated and optional trades in automotive and engineering units.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="sector-card">
                        <div class="sector-badge">2</div>
                        <h5 class="text-primary-navy mt-2">IT Services</h5>
                        <p>Managed technical apprentices for software development support functions and IT infrastructure roles.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="sector-card">
                        <div class="sector-badge">3</div>
                        <h5 class="text-primary-navy mt-2">Retail Operations</h5>
                        <p>Apprentices for pickers, packers, loaders, unloaders, store operations, and customer service roles — our most enrolled category.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="sector-card">
                        <div class="sector-badge">4</div>
                        <h5 class="text-primary-navy mt-2">Financial Services</h5>
                        <p>Highest-adopting sector (BFSI). We provide tailored staffing and compliance solutions for banks and NBFCs.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="sector-card">
                        <div class="sector-badge">5</div>
                        <h5 class="text-primary-navy mt-2">Sunrise Sectors</h5>
                        <p>Leading apprenticeship adoption in the Drone Industry (UAV pilots), EV & Mobility, and Solar & Green Energy.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="sector-card">
                        <div class="sector-badge">6</div>
                        <h5 class="text-primary-navy mt-2">Other Sectors</h5>
                        <p>Comprehensive coverage across ITES, Logistics, Ecommerce, EdTech, Hospitality, and more.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Process Section -->
    <section class="section-padding bg-white">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="mb-3">How We Work</h2>
                <p class="text-muted">A streamlined, risk-free approach to workforce optimization.</p>
            </div>
            <div class="row pt-4">
                <div class="col-md-3">
                    <div class="process-step">
                        <div class="step-number">1</div>
                        <h5>Assess</h5>
                        <p class="text-muted small">We analyze your current workforce, compliance gaps, and talent needs.</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="process-step">
                        <div class="step-number">2</div>
                        <h5>Design Program</h5>
                        <p class="text-muted small">Develop a tailored strategy leveraging apprenticeships or staffing solutions.</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="process-step">
                        <div class="step-number">3</div>
                        <h5>Implement & Staff</h5>
                        <p class="text-muted small">Source, screen, and onboard the right talent seamlessly into your operations.</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="process-step">
                        <div class="step-number">4</div>
                        <h5>Ensure Compliance</h5>
                        <p class="text-muted small">Ongoing management of payroll, statutory filings, and program regulations.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Team Section -->
    <?php include 'team_section.php'; ?>

    <!-- Why Choose Us -->
    <section class="section-padding bg-light-gray">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="mb-5 display-6 fw-bold text-dark">Why <span class="text-primary-navy">WorkForce</span><span class="text-accent-gold">2047</span> <span class="text-primary-navy">Partners?</span></h2>
            </div>
            <div class="row align-items-center">
                <div class="col-lg-7 pe-lg-5">

                    <div class="mb-4">
                        <h4 class="text-dark fw-bold mb-2">IIM Alumni Leadership</h4>
                        <p class="text-muted" style="font-size: 1.05rem;">Strategic direction from IIM graduates combines academic excellence with ground-level implementation expertise across diverse sectors.</p>
                    </div>

                    <div class="mb-4">
                        <h4 class="text-dark fw-bold mb-2">Multisector Experience</h4>
                        <p class="text-muted" style="font-size: 1.05rem;">Proven track record serving manufacturing, IT services, retail, banking, hospitality sectors etc with customised solutions.</p>
                    </div>

                    <div class="mb-4">
                        <h4 class="text-dark fw-bold mb-2">Geographic Coverage</h4>
                        <p class="text-muted" style="font-size: 1.05rem;">PAN India Service. Ensures local presence with national standards &amp; seamless delivery across Bengaluru, Pune, Mumbai, and Goa.</p>
                    </div>

                    <div class="mb-4">
                        <h4 class="text-dark fw-bold mb-2">Compliance-First Approach</h4>
                        <p class="text-muted" style="font-size: 1.05rem;">We ensure every workforce solution adheres to applicable statutory regulations and apprenticeship guidelines. Our structured processes minimize compliance risks while enabling seamless workforce operations.</p>
                    </div>

                    <div class="mb-4">
                        <h4 class="text-dark fw-bold mb-2">Transparent Reporting &amp; Governance</h4>
                        <p class="text-muted" style="font-size: 1.05rem;">We provide accurate, timely, and transparent reporting to keep you informed at every stage of the workforce lifecycle. Our governance framework ensures accountability, visibility, and informed decision-making.</p>
                    </div>

                </div>
                <div class="col-lg-5 mt-5 mt-lg-0">
                    <img src="images/why_us_indian_handshake_1789535515706.jpg" alt="Why Choose Us" class="img-fluid rounded-4 shadow-sm">
                </div>
            </div>
        </div>
    </section>

    <!-- Cities Section -->
    <?php include 'cities_section.php'; ?>

    <!-- CTA Band -->
    <section class="cta-band">
        <div class="container">
            <h2>Ready to Build a Compliant, <span>Future-Ready Workforce?</span></h2>
            <p class="lead mb-4 opacity-75">Connect with our corporate consultants today to discuss your organization's needs.</p>
            <a href="contact.php" class="btn btn-accent btn-lg px-5 py-3 shadow">Schedule a Free Consultation</a>
        </div>
    </section>
</main>
<?php include 'footer.php'; ?>