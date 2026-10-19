<?php
$page_title = "Industry Workforce & Apprenticeship Solutions | WorkForce2047";
$page_desc = "Customized workforce and apprenticeship solutions for Manufacturing, GCCs, BFSI, Retail, Logistics, Healthcare, Aerospace, Drones, and Semiconductor industries.";
$page_keywords = "Apprenticeship solutions for manufacturing companies, Hiring apprentices for IT and service sector, GCC workforce solutions India, BFSI apprenticeship staffing, logistics workforce management, retail staffing solutions India, semiconductor talent solutions, drone industry workforce, sector specific staffing India";
include 'header.php';
?>
<main>
    <!-- Page Header -->
    <section class="position-relative page-header-banner" style="height: 380px;">
        <img src="images/team-header.png" alt="Sectors" class="w-100 h-100 object-fit-cover page-header-img" style="filter: brightness(0.32); object-position: center 18%;">
        <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center">
            <div class="container mt-4">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-2">
                        <li class="breadcrumb-item"><a href="index.php" class="text-white-50 text-decoration-none">Home</a></li>
                        <li class="breadcrumb-item active text-white" aria-current="page">Sectors</li>
                    </ol>
                </nav>
                <h1 class="display-4 fw-bold text-white mb-2">Industry-Specific Workforce Solutions</h1>
                <p class="lead text-white-50" style="max-width: 750px;">Tailored workforce programs for every sector. One trusted partner.</p>
            </div>
        </div>
    </section>

    <!-- Intro Overview -->
    <section class="section-padding bg-white pb-0">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12 text-justify mb-5">
                    <p class="text-accent-gold fw-bold text-uppercase tracking-wide text-center">Multi-Sector Expertise</p>
                    <h2 class="text-primary-navy mt-2 mb-4 fw-bold text-center">Disciplined Workforce Planning &amp; Execution</h2>
                    <p class="lead text-dark mb-4" style="line-height: 1.8;">
                        Each industry faces its own workforce demands, skill gaps, operating models, and regulatory requirements. <strong>WorkForce2047 Partners</strong>, founded and led by <strong>IIM alumni</strong>, brings a disciplined, data-informed approach to workforce planning and execution. We work with organizations to design and manage apprenticeship-led workforce programs, backed by end-to-end labour compliance, payroll and flexible staffing support, all aligned to your business objectives.
                    </p>
                    <p class="text-muted mb-4" style="line-height: 1.8;">
                        We turn workforce administration into a measurable cost advantage. Structured, government-backed programs enable organizations to <strong>lower their wage bill by up to 22%</strong> while recovering eligible stipend costs through Central/State Government schemes. From registration to reimbursement, we handle every step.
                    </p>
                    <p class="text-muted mb-0" style="line-height: 1.8;">
                        Across retail, BFSI, manufacturing, EV, healthcare, logistics, IT/ITES, sunrise sectors, and emerging technologies, we help organizations build structured, future-ready talent pipelines while simplifying workforce administration and statutory compliance.
                    </p>
                </div>
            </div>

            <!-- Quick Navigation Pills -->
            <div class="d-flex flex-wrap justify-content-center gap-2 mb-5">
                <a href="#manufacturing" class="btn btn-sm btn-outline-primary rounded-pill">Manufacturing &amp; Engineering</a>
                <a href="#automotive" class="btn btn-sm btn-outline-primary rounded-pill">Automotive &amp; EV</a>
                <a href="#renewable" class="btn btn-sm btn-outline-primary rounded-pill">Renewable Energy &amp; Solar</a>
                <a href="#it" class="btn btn-sm btn-outline-primary rounded-pill">IT / ITES / BPM</a>
                <a href="#ecommerce" class="btn btn-sm btn-outline-primary rounded-pill">E-Commerce &amp; Logistics</a>
                <a href="#retail" class="btn btn-sm btn-outline-primary rounded-pill">Retail</a>
                <a href="#healthcare" class="btn btn-sm btn-outline-primary rounded-pill">Healthcare &amp; Allied</a>
                <a href="#hospitality" class="btn btn-sm btn-outline-primary rounded-pill">Hospitality &amp; Tourism</a>
                <a href="#drone" class="btn btn-sm btn-outline-primary rounded-pill">Drone &amp; UAV</a>
                <a href="#semiconductor" class="btn btn-sm btn-outline-primary rounded-pill">Semiconductor &amp; Electronics</a>
                <a href="#aerospace" class="btn btn-sm btn-outline-primary rounded-pill">Aerospace &amp; Defence</a>
                <a href="#construction" class="btn btn-sm btn-outline-primary rounded-pill">Construction &amp; Infrastructure</a>
                <a href="#bfsi" class="btn btn-sm btn-outline-primary rounded-pill">BFSI &amp; Business Services</a>
            </div>
        </div>
    </section>

    <!-- All 13 Detailed Sectors Grid -->
    <section class="section-padding bg-light-gray" id="detailed-sectors">
        <div class="container">
            <div class="d-flex flex-column flex-md-row justify-content-between align-items-center mb-4 gap-3">
                <div>
                    <h3 class="text-primary-navy fw-bold mb-1">Detailed Industry Sectors</h3>
                    <p class="text-muted mb-0">Explore role mappings, key workforce areas, and government program advantages by sector.</p>
                </div>
                <div class="d-inline-flex gap-2">
                    <button type="button" class="btn btn-sm btn-outline-primary rounded-pill px-3 py-1" id="expandAllSectors" style="font-size: 0.82rem; border-color: rgba(11, 46, 92, 0.25); color: var(--primary-color);">
                        <i class="fas fa-expand-alt me-1"></i> Expand All
                    </button>
                    <button type="button" class="btn btn-sm btn-outline-secondary rounded-pill px-3 py-1" id="collapseAllSectors" style="font-size: 0.82rem;">
                        <i class="fas fa-compress-alt me-1"></i> Collapse All
                    </button>
                </div>
            </div>

            <div class="row g-4" id="detailedSectorsGrid">

                <!-- 1. Manufacturing & Engineering -->
                <div id="manufacturing" class="col-lg-6">
                    <div class="sector-detail-card">
                        <button class="sector-card-header collapsed d-flex justify-content-between align-items-center text-start" 
                                type="button" 
                                data-bs-toggle="collapse" 
                                data-bs-target="#collapseSectorManufacturing" 
                                aria-expanded="false" 
                                aria-controls="collapseSectorManufacturing">
                            <div class="d-flex align-items-center me-3">
                                <span class="sector-icon-badge me-3">🏭</span>
                                <div>
                                    <h4 class="text-primary-navy mb-1 fw-bold">Manufacturing &amp; Engineering</h4>
                                    <div class="sector-subheading">Building a Skilled Shop-Floor Workforce</div>
                                </div>
                            </div>
                            <span class="sector-toggle-icon" aria-hidden="true">
                                <i class="fas fa-chevron-down"></i>
                            </span>
                        </button>
                        <div class="collapse" id="collapseSectorManufacturing">
                            <div class="sector-card-body pt-3 mt-3">
                                <p class="text-muted">Manufacturing businesses need a steady pipeline of technically trained talent across production, quality, maintenance, assembly and machine operations. Our apprenticeship-led workforce solutions help manufacturers develop role-ready talent while managing the administrative requirements associated with apprenticeship programs.</p>
                                <h6 class="fw-bold text-primary-navy mt-3 mb-2">Key workforce areas:</h6>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <ul class="sector-list">
                                            <li>Production &amp; Assembly</li>
                                            <li>CNC / Machine Operations</li>
                                            <li>Electrical &amp; Mechanical Maintenance</li>
                                            <li>Quality Control</li>
                                        </ul>
                                    </div>
                                    <div class="col-sm-6">
                                        <ul class="sector-list">
                                            <li>Welding &amp; Fabrication</li>
                                            <li>Tool &amp; Die</li>
                                            <li>Stores &amp; Inventory</li>
                                            <li>Industrial Automation</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="sector-highlight-box">
                                    <strong>WorkForce2047 Advantage:</strong>
                                    NAPS/NATS implementation, trade/job-role mapping, onboarding, contract management, portal administration, stipend coordination, DBT support and ongoing reporting.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- 2. Automotive & EV -->
                <div id="automotive" class="col-lg-6">
                    <div class="sector-detail-card">
                        <button class="sector-card-header collapsed d-flex justify-content-between align-items-center text-start" 
                                type="button" 
                                data-bs-toggle="collapse" 
                                data-bs-target="#collapseSectorAutomotive" 
                                aria-expanded="false" 
                                aria-controls="collapseSectorAutomotive">
                            <div class="d-flex align-items-center me-3">
                                <span class="sector-icon-badge me-3">🚗</span>
                                <div>
                                    <h4 class="text-primary-navy mb-1 fw-bold">Automotive &amp; EV</h4>
                                    <div class="sector-subheading">Preparing the Workforce for the Mobility Revolution</div>
                                </div>
                            </div>
                            <span class="sector-toggle-icon" aria-hidden="true">
                                <i class="fas fa-chevron-down"></i>
                            </span>
                        </button>
                        <div class="collapse" id="collapseSectorAutomotive">
                            <div class="sector-card-body pt-3 mt-3">
                                <p class="text-muted">The transition towards electric mobility is creating demand for new technical capabilities across vehicle manufacturing, battery systems, electronics, service and component manufacturing. WorkForce2047 helps automotive and EV businesses develop apprenticeship programs aligned with emerging workforce requirements.</p>
                                <h6 class="fw-bold text-primary-navy mt-3 mb-2">Potential workforce areas:</h6>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <ul class="sector-list">
                                            <li>EV Assembly</li>
                                            <li>Battery Manufacturing</li>
                                            <li>Battery Testing &amp; Maintenance</li>
                                            <li>Auto Electrical</li>
                                            <li>Electronics</li>
                                        </ul>
                                    </div>
                                    <div class="col-sm-6">
                                        <ul class="sector-list">
                                            <li>Vehicle Diagnostics</li>
                                            <li>Production &amp; Quality</li>
                                            <li>Mechanical Maintenance</li>
                                            <li>CNC &amp; Component Manufacturing</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="sector-highlight-box">
                                    <strong>WorkForce2047 Advantage:</strong>
                                    Build structured apprenticeship pathways that help organizations develop talent for both today's automotive operations and tomorrow's mobility ecosystem.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- 3. Renewable Energy & Solar -->
                <div id="renewable" class="col-lg-6">
                    <div class="sector-detail-card">
                        <button class="sector-card-header collapsed d-flex justify-content-between align-items-center text-start" 
                                type="button" 
                                data-bs-toggle="collapse" 
                                data-bs-target="#collapseSectorRenewable" 
                                aria-expanded="false" 
                                aria-controls="collapseSectorRenewable">
                            <div class="d-flex align-items-center me-3">
                                <span class="sector-icon-badge me-3">☀️</span>
                                <div>
                                    <h4 class="text-primary-navy mb-1 fw-bold">Renewable Energy &amp; Solar</h4>
                                    <div class="sector-subheading">Developing Talent for India's Clean Energy Future</div>
                                </div>
                            </div>
                            <span class="sector-toggle-icon" aria-hidden="true">
                                <i class="fas fa-chevron-down"></i>
                            </span>
                        </button>
                        <div class="collapse" id="collapseSectorRenewable">
                            <div class="sector-card-body pt-3 mt-3">
                                <p class="text-muted">India's renewable energy expansion is creating opportunities across solar manufacturing, installation, electrical systems, operations and maintenance. We help organizations build apprenticeship programs for technical and operational roles across the renewable-energy value chain.</p>
                                <h6 class="fw-bold text-primary-navy mt-3 mb-2">Workforce areas include:</h6>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <ul class="sector-list">
                                            <li>Solar PV Installation</li>
                                            <li>Electrical Systems</li>
                                            <li>Panel Manufacturing</li>
                                            <li>Solar Operations &amp; Maintenance</li>
                                        </ul>
                                    </div>
                                    <div class="col-sm-6">
                                        <ul class="sector-list">
                                            <li>Electrical Maintenance</li>
                                            <li>Quality &amp; Testing</li>
                                            <li>Field Operations</li>
                                            <li>Equipment Maintenance</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="sector-highlight-box">
                                    <strong>WorkForce2047 Advantage:</strong>
                                    Structured apprenticeship management from establishment registration through onboarding, stipend administration, DBT coordination and reporting.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- 4. IT / ITES / BPM -->
                <div id="it" class="col-lg-6">
                    <div class="sector-detail-card">
                        <button class="sector-card-header collapsed d-flex justify-content-between align-items-center text-start" 
                                type="button" 
                                data-bs-toggle="collapse" 
                                data-bs-target="#collapseSectorIt" 
                                aria-expanded="false" 
                                aria-controls="collapseSectorIt">
                            <div class="d-flex align-items-center me-3">
                                <span class="sector-icon-badge me-3">💻</span>
                                <div>
                                    <h4 class="text-primary-navy mb-1 fw-bold">IT / ITES / BPM</h4>
                                    <div class="sector-subheading">Building the Next Generation of Digital Talent</div>
                                </div>
                            </div>
                            <span class="sector-toggle-icon" aria-hidden="true">
                                <i class="fas fa-chevron-down"></i>
                            </span>
                        </button>
                        <div class="collapse" id="collapseSectorIt">
                            <div class="sector-card-body pt-3 mt-3">
                                <p class="text-muted">Technology and business-process organizations require scalable talent across customer operations, technical support, data, digital processes and business services. Apprenticeships can provide organizations with a structured pathway to develop entry-level talent around their specific processes.</p>
                                <h6 class="fw-bold text-primary-navy mt-3 mb-2">Potential roles:</h6>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <ul class="sector-list">
                                            <li>Customer Support</li>
                                            <li>Technical Support</li>
                                            <li>Data Operations</li>
                                            <li>Back-Office Operations</li>
                                        </ul>
                                    </div>
                                    <div class="col-sm-6">
                                        <ul class="sector-list">
                                            <li>IT Support</li>
                                            <li>Digital Operations</li>
                                            <li>Process Associates</li>
                                            <li>Business Operations</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="sector-highlight-box">
                                    <strong>WorkForce2047 Advantage:</strong>
                                    Help organizations structure apprenticeship programs, manage documentation and portal activities, and simplify ongoing administration.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- 5. E-Commerce & Logistics -->
                <div id="ecommerce" class="col-lg-6">
                    <div class="sector-detail-card">
                        <button class="sector-card-header collapsed d-flex justify-content-between align-items-center text-start" 
                                type="button" 
                                data-bs-toggle="collapse" 
                                data-bs-target="#collapseSectorEcommerce" 
                                aria-expanded="false" 
                                aria-controls="collapseSectorEcommerce">
                            <div class="d-flex align-items-center me-3">
                                <span class="sector-icon-badge me-3">📦</span>
                                <div>
                                    <h4 class="text-primary-navy mb-1 fw-bold">E-Commerce &amp; Logistics</h4>
                                    <div class="sector-subheading">Building the Workforce Behind India's Supply Chain</div>
                                </div>
                            </div>
                            <span class="sector-toggle-icon" aria-hidden="true">
                                <i class="fas fa-chevron-down"></i>
                            </span>
                        </button>
                        <div class="collapse" id="collapseSectorEcommerce">
                            <div class="sector-card-body pt-3 mt-3">
                                <p class="text-muted">India's e-commerce and logistics ecosystem requires large and continuously evolving workforce capabilities across warehouses, fulfilment centres, transportation and last-mile operations. WorkForce2047 helps organizations create structured apprenticeship opportunities across operational and support functions.</p>
                                <h6 class="fw-bold text-primary-navy mt-3 mb-2">Workforce areas:</h6>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <ul class="sector-list">
                                            <li>Warehouse Operations</li>
                                            <li>Inventory Management</li>
                                            <li>Picking &amp; Packing</li>
                                            <li>Dispatch Operations</li>
                                        </ul>
                                    </div>
                                    <div class="col-sm-6">
                                        <ul class="sector-list">
                                            <li>Supply Chain Operations</li>
                                            <li>Logistics Coordination</li>
                                            <li>Data &amp; Documentation</li>
                                            <li>Customer Operations</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="sector-highlight-box">
                                    <strong>WorkForce2047 Advantage:</strong>
                                    Use apprenticeship programs to create a structured pipeline of trained operational talent while reducing administrative complexity.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- 6. Retail -->
                <div id="retail" class="col-lg-6">
                    <div class="sector-detail-card">
                        <button class="sector-card-header collapsed d-flex justify-content-between align-items-center text-start" 
                                type="button" 
                                data-bs-toggle="collapse" 
                                data-bs-target="#collapseSectorRetail" 
                                aria-expanded="false" 
                                aria-controls="collapseSectorRetail">
                            <div class="d-flex align-items-center me-3">
                                <span class="sector-icon-badge me-3">🏪</span>
                                <div>
                                    <h4 class="text-primary-navy mb-1 fw-bold">Retail</h4>
                                    <div class="sector-subheading">Creating Job-Ready Talent for Modern Retail</div>
                                </div>
                            </div>
                            <span class="sector-toggle-icon" aria-hidden="true">
                                <i class="fas fa-chevron-down"></i>
                            </span>
                        </button>
                        <div class="collapse" id="collapseSectorRetail">
                            <div class="sector-card-body pt-3 mt-3">
                                <p class="text-muted">Retail businesses need workforce flexibility across stores, customer experience, inventory, merchandising and digital commerce. We help retail organizations build structured apprenticeship programs suited to their operational requirements.</p>
                                <h6 class="fw-bold text-primary-navy mt-3 mb-2">Potential roles:</h6>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <ul class="sector-list">
                                            <li>Retail Sales</li>
                                            <li>Customer Service</li>
                                            <li>Store Operations</li>
                                            <li>Inventory Management</li>
                                        </ul>
                                    </div>
                                    <div class="col-sm-6">
                                        <ul class="sector-list">
                                            <li>Merchandising</li>
                                            <li>Billing &amp; POS Operations</li>
                                            <li>E-Commerce Operations</li>
                                            <li>Back-Office Support</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="sector-highlight-box">
                                    <strong>WorkForce2047 Advantage:</strong>
                                    Simplify apprenticeship implementation while helping businesses develop talent aligned to their store and operational processes.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- 7. Healthcare & Allied Healthcare -->
                <div id="healthcare" class="col-lg-6">
                    <div class="sector-detail-card">
                        <button class="sector-card-header collapsed d-flex justify-content-between align-items-center text-start" 
                                type="button" 
                                data-bs-toggle="collapse" 
                                data-bs-target="#collapseSectorHealthcare" 
                                aria-expanded="false" 
                                aria-controls="collapseSectorHealthcare">
                            <div class="d-flex align-items-center me-3">
                                <span class="sector-icon-badge me-3">🏥</span>
                                <div>
                                    <h4 class="text-primary-navy mb-1 fw-bold">Healthcare &amp; Allied Healthcare</h4>
                                    <div class="sector-subheading">Developing the Workforce Behind Healthcare Delivery</div>
                                </div>
                            </div>
                            <span class="sector-toggle-icon" aria-hidden="true">
                                <i class="fas fa-chevron-down"></i>
                            </span>
                        </button>
                        <div class="collapse" id="collapseSectorHealthcare">
                            <div class="sector-card-body pt-3 mt-3">
                                <p class="text-muted">Healthcare organizations require trained support professionals across hospitals, diagnostic centres, laboratories, pharmacies and allied healthcare services. WorkForce2047 helps organizations explore structured apprenticeship opportunities for eligible roles and workforce categories.</p>
                                <h6 class="fw-bold text-primary-navy mt-3 mb-2">Potential areas:</h6>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <ul class="sector-list">
                                            <li>Hospital Operations</li>
                                            <li>Laboratory Support</li>
                                            <li>Pharmacy Operations</li>
                                            <li>Medical Records</li>
                                        </ul>
                                    </div>
                                    <div class="col-sm-6">
                                        <ul class="sector-list">
                                            <li>Healthcare Administration</li>
                                            <li>Patient Services</li>
                                            <li>Diagnostic Support</li>
                                            <li>Allied Healthcare Roles</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="sector-highlight-box">
                                    <strong>WorkForce2047 Advantage:</strong>
                                    Combine structured workforce planning with apprenticeship administration to help healthcare organizations develop a reliable talent pipeline.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- 8. Hospitality & Tourism -->
                <div id="hospitality" class="col-lg-6">
                    <div class="sector-detail-card">
                        <button class="sector-card-header collapsed d-flex justify-content-between align-items-center text-start" 
                                type="button" 
                                data-bs-toggle="collapse" 
                                data-bs-target="#collapseSectorHospitality" 
                                aria-expanded="false" 
                                aria-controls="collapseSectorHospitality">
                            <div class="d-flex align-items-center me-3">
                                <span class="sector-icon-badge me-3">🏨</span>
                                <div>
                                    <h4 class="text-primary-navy mb-1 fw-bold">Hospitality &amp; Tourism</h4>
                                    <div class="sector-subheading">Building Service-Ready Hospitality Talent</div>
                                </div>
                            </div>
                            <span class="sector-toggle-icon" aria-hidden="true">
                                <i class="fas fa-chevron-down"></i>
                            </span>
                        </button>
                        <div class="collapse" id="collapseSectorHospitality">
                            <div class="sector-card-body pt-3 mt-3">
                                <p class="text-muted">Hotels, restaurants, resorts and tourism businesses depend on trained talent capable of delivering consistent customer experiences. Apprenticeships can provide an effective pathway for developing practical skills while exposing candidates to real operating environments.</p>
                                <h6 class="fw-bold text-primary-navy mt-3 mb-2">Workforce areas:</h6>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <ul class="sector-list">
                                            <li>Food &amp; Beverage</li>
                                            <li>Front Office</li>
                                            <li>Housekeeping</li>
                                            <li>Kitchen Operations</li>
                                        </ul>
                                    </div>
                                    <div class="col-sm-6">
                                        <ul class="sector-list">
                                            <li>Guest Relations</li>
                                            <li>Food Production</li>
                                            <li>Hospitality Operations</li>
                                            <li>Facility Services</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="sector-highlight-box">
                                    <strong>WorkForce2047 Advantage:</strong>
                                    Program implementation, onboarding, contracts, portal management, stipend coordination and ongoing administration.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- 9. Drone & UAV -->
                <div id="drone" class="col-lg-6">
                    <div class="sector-detail-card">
                        <button class="sector-card-header collapsed d-flex justify-content-between align-items-center text-start" 
                                type="button" 
                                data-bs-toggle="collapse" 
                                data-bs-target="#collapseSectorDrone" 
                                aria-expanded="false" 
                                aria-controls="collapseSectorDrone">
                            <div class="d-flex align-items-center me-3">
                                <span class="sector-icon-badge me-3 d-inline-flex align-items-center justify-content-center">
                                    <img src="images/icons/drone.png" alt="Drone &amp; UAV" style="width: 44px; height: 44px; object-fit: contain;">
                                </span>
                                <div>
                                    <h4 class="text-primary-navy mb-1 fw-bold">Drone &amp; UAV</h4>
                                    <div class="sector-subheading">Preparing Talent for India's Emerging Drone Economy</div>
                                </div>
                            </div>
                            <span class="sector-toggle-icon" aria-hidden="true">
                                <i class="fas fa-chevron-down"></i>
                            </span>
                        </button>
                        <div class="collapse" id="collapseSectorDrone">
                            <div class="sector-card-body pt-3 mt-3">
                                <p class="text-muted">The expansion of drone applications across agriculture, infrastructure, surveying, logistics, defence-related manufacturing and commercial applications is creating new workforce requirements. Organizations entering this sector need talent across technical, operational and maintenance functions.</p>
                                <h6 class="fw-bold text-primary-navy mt-3 mb-2">Potential workforce areas:</h6>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <ul class="sector-list">
                                            <li>Drone Assembly</li>
                                            <li>Electronics</li>
                                            <li>Drone Maintenance</li>
                                            <li>UAV Operations</li>
                                        </ul>
                                    </div>
                                    <div class="col-sm-6">
                                        <ul class="sector-list">
                                            <li>Component Testing</li>
                                            <li>Quality Inspection</li>
                                            <li>Technical Support</li>
                                            <li>Data &amp; Operations</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="sector-highlight-box">
                                    <strong>WorkForce2047 Advantage:</strong>
                                    Help emerging businesses develop structured apprenticeship pathways as new roles and skill requirements evolve.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- 10. Semiconductor & Electronics -->
                <div id="semiconductor" class="col-lg-6">
                    <div class="sector-detail-card">
                        <button class="sector-card-header collapsed d-flex justify-content-between align-items-center text-start" 
                                type="button" 
                                data-bs-toggle="collapse" 
                                data-bs-target="#collapseSectorSemiconductor" 
                                aria-expanded="false" 
                                aria-controls="collapseSectorSemiconductor">
                            <div class="d-flex align-items-center me-3">
                                <span class="sector-icon-badge me-3 d-inline-flex align-items-center justify-content-center">
                                    <img src="images/icons/semiconductor.png" alt="Semiconductor &amp; Electronics" style="width: 44px; height: 44px; object-fit: contain;">
                                </span>
                                <div>
                                    <h4 class="text-primary-navy mb-1 fw-bold">Semiconductor &amp; Electronics</h4>
                                    <div class="sector-subheading">Building India's Semiconductor Workforce</div>
                                </div>
                            </div>
                            <span class="sector-toggle-icon" aria-hidden="true">
                                <i class="fas fa-chevron-down"></i>
                            </span>
                        </button>
                        <div class="collapse" id="collapseSectorSemiconductor">
                            <div class="sector-card-body pt-3 mt-3">
                                <p class="text-muted">India's semiconductor and electronics ecosystem is creating demand for technically trained talent across manufacturing, assembly, testing, maintenance and quality functions. WorkForce2047 helps organizations explore apprenticeship-led workforce models for manufacturing and technical operations.</p>
                                <h6 class="fw-bold text-primary-navy mt-3 mb-2">Potential workforce areas:</h6>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <ul class="sector-list">
                                            <li>Electronics Assembly</li>
                                            <li>Semiconductor Manufacturing Support</li>
                                            <li>Testing &amp; Inspection</li>
                                            <li>Equipment Maintenance</li>
                                        </ul>
                                    </div>
                                    <div class="col-sm-6">
                                        <ul class="sector-list">
                                            <li>Quality Control</li>
                                            <li>Production Operations</li>
                                            <li>Cleanroom Operations</li>
                                            <li>Electrical &amp; Instrumentation</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="sector-highlight-box">
                                    <strong>WorkForce2047 Advantage:</strong>
                                    Develop structured workforce pathways aligned to the technical requirements of India's rapidly expanding electronics ecosystem.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- 11. Aerospace & Defence Manufacturing -->
                <div id="aerospace" class="col-lg-6">
                    <div class="sector-detail-card">
                        <button class="sector-card-header collapsed d-flex justify-content-between align-items-center text-start" 
                                type="button" 
                                data-bs-toggle="collapse" 
                                data-bs-target="#collapseSectorAerospace" 
                                aria-expanded="false" 
                                aria-controls="collapseSectorAerospace">
                            <div class="d-flex align-items-center me-3">
                                <span class="sector-icon-badge me-3">✈️</span>
                                <div>
                                    <h4 class="text-primary-navy mb-1 fw-bold">Aerospace &amp; Defence Manufacturing</h4>
                                    <div class="sector-subheading">Developing Precision-Oriented Technical Talent</div>
                                </div>
                            </div>
                            <span class="sector-toggle-icon" aria-hidden="true">
                                <i class="fas fa-chevron-down"></i>
                            </span>
                        </button>
                        <div class="collapse" id="collapseSectorAerospace">
                            <div class="sector-card-body pt-3 mt-3">
                                <p class="text-muted">Aerospace and defence manufacturing demands disciplined processes, precision manufacturing, quality systems and technically skilled personnel. Apprenticeship programs can help organizations build structured entry-level talent pipelines across manufacturing and support functions.</p>
                                <h6 class="fw-bold text-primary-navy mt-3 mb-2">Potential areas:</h6>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <ul class="sector-list">
                                            <li>Precision Machining</li>
                                            <li>CNC Operations</li>
                                            <li>Welding &amp; Fabrication</li>
                                            <li>Assembly</li>
                                        </ul>
                                    </div>
                                    <div class="col-sm-6">
                                        <ul class="sector-list">
                                            <li>Quality Inspection</li>
                                            <li>Electrical &amp; Electronics</li>
                                            <li>Maintenance</li>
                                            <li>Production Support</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="sector-highlight-box">
                                    <strong>WorkForce2047 Advantage:</strong>
                                    Support organizations in designing and administering apprenticeship programs aligned with their operational requirements.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- 12. Construction & Infrastructure -->
                <div id="construction" class="col-lg-6">
                    <div class="sector-detail-card">
                        <button class="sector-card-header collapsed d-flex justify-content-between align-items-center text-start" 
                                type="button" 
                                data-bs-toggle="collapse" 
                                data-bs-target="#collapseSectorConstruction" 
                                aria-expanded="false" 
                                aria-controls="collapseSectorConstruction">
                            <div class="d-flex align-items-center me-3">
                                <span class="sector-icon-badge me-3">🏗️</span>
                                <div>
                                    <h4 class="text-primary-navy mb-1 fw-bold">Construction &amp; Infrastructure</h4>
                                    <div class="sector-subheading">Building the Workforce Behind India's Infrastructure Growth</div>
                                </div>
                            </div>
                            <span class="sector-toggle-icon" aria-hidden="true">
                                <i class="fas fa-chevron-down"></i>
                            </span>
                        </button>
                        <div class="collapse" id="collapseSectorConstruction">
                            <div class="sector-card-body pt-3 mt-3">
                                <p class="text-muted">India's infrastructure expansion is creating sustained demand for skilled workers across construction, electrical, mechanical and project-support functions. Apprenticeship-led workforce development can help organizations create structured pathways for practical skill development.</p>
                                <h6 class="fw-bold text-primary-navy mt-3 mb-2">Potential areas:</h6>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <ul class="sector-list">
                                            <li>Electrical Work</li>
                                            <li>Plumbing</li>
                                            <li>Fabrication</li>
                                            <li>Civil Construction</li>
                                        </ul>
                                    </div>
                                    <div class="col-sm-6">
                                        <ul class="sector-list">
                                            <li>Equipment Operations</li>
                                            <li>HVAC</li>
                                            <li>Surveying Support</li>
                                            <li>Site Operations</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="sector-highlight-box">
                                    <strong>WorkForce2047 Advantage:</strong>
                                    End-to-end program governance, trade mapping, and on-site contractor compliance support across construction sites nationwide.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- 13. BFSI & Business Services -->
                <div id="bfsi" class="col-lg-12">
                    <div class="sector-detail-card">
                        <button class="sector-card-header collapsed d-flex justify-content-between align-items-center text-start" 
                                type="button" 
                                data-bs-toggle="collapse" 
                                data-bs-target="#collapseSectorBfsi" 
                                aria-expanded="false" 
                                aria-controls="collapseSectorBfsi">
                            <div class="d-flex align-items-center me-3">
                                <span class="sector-icon-badge me-3">🏦</span>
                                <div>
                                    <h4 class="text-primary-navy mb-1 fw-bold">BFSI &amp; Business Services</h4>
                                    <div class="sector-subheading">Building Talent for India's Service Economy</div>
                                </div>
                            </div>
                            <span class="sector-toggle-icon" aria-hidden="true">
                                <i class="fas fa-chevron-down"></i>
                            </span>
                        </button>
                        <div class="collapse" id="collapseSectorBfsi">
                            <div class="sector-card-body pt-3 mt-3">
                                <p class="text-muted">Banks, financial institutions, insurance companies and business-service organizations require talent across customer operations, documentation, digital processes and back-office functions. WorkForce2047 helps organizations assess suitable apprenticeship opportunities and manage the associated program administration.</p>
                                <h6 class="fw-bold text-primary-navy mt-3 mb-2">Potential areas:</h6>
                                <div class="row">
                                    <div class="col-md-3 col-sm-6">
                                        <ul class="sector-list">
                                            <li>Customer Operations</li>
                                            <li>Back-Office Processing</li>
                                        </ul>
                                    </div>
                                    <div class="col-md-3 col-sm-6">
                                        <ul class="sector-list">
                                            <li>Documentation</li>
                                            <li>Data Operations</li>
                                        </ul>
                                    </div>
                                    <div class="col-md-3 col-sm-6">
                                        <ul class="sector-list">
                                            <li>Digital Support</li>
                                            <li>Customer Service</li>
                                        </ul>
                                    </div>
                                    <div class="col-md-3 col-sm-6">
                                        <ul class="sector-list">
                                            <li>Administrative Operations</li>
                                            <li>Compliance Screening</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="sector-highlight-box">
                                    <strong>WorkForce2047 Advantage:</strong>
                                    Organizations assess suitable apprenticeship opportunities and manage the associated program administration with airtight adherence to data security and regulatory norms.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- CTA Band -->
    <section class="cta-band">
        <div class="container text-center">
            <h2>Looking for Tailored Workforce Solutions in Your Sector?</h2>
            <p class="lead mb-4 opacity-75">Connect with our industry-specialized consultants today to discuss customized workforce development.</p>
            <a href="contact.php" class="btn btn-accent btn-lg px-5 py-3 shadow">Speak With a Sector Specialist</a>
        </div>
    </section>
</main>
<?php include 'footer.php'; ?>