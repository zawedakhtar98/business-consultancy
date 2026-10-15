<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WorkForce2047 Partners | Professional Workforce Solutions</title>
    <meta name="description" content="Workforce solutions consultancy with deep industry expertise. We deliver practical workforce solutions, contract staffing, and compliance management.">
    <meta property="og:title" content="WorkForce2047 Partners | Professional Workforce Solutions">
    <meta property="og:description" content="Workforce solutions consultancy with deep industry expertise. We deliver practical workforce solutions, contract staffing, and compliance management.">

    <!-- Google Fonts (Fallbacks) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700&family=Inter:wght@300;400;500;600&display=swap" rel="stylesheet">

    <!-- Bootstrap 5 CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome for Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white sticky-top">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center" href="index.php">
                <!-- User's provided logo should be placed here -->
                <!-- <img src="images/logo/logo.jpeg" class="logo" alt="WorkForce2047 Partners Logo"> -->
                <img src="images/logo/logo.png" class="logo" alt="WorkForce2047 Partners Logo">
                <p class="text-primary-navy mb-0 logo-name">WorkForce <span class="text-accent-gold"> 2047 Partners</span><span class="text-accent-gold logo-trade">TM</span> LLP</p>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <?php
                $current_page = basename($_SERVER['PHP_SELF']);
                $is_about = ($current_page == 'about.php' || $current_page == 'team.php');
                $is_apprenticeship = ($current_page == 'service-apprenticeship.php');
                $is_workforce = ($current_page == 'service-staffing.php' || $current_page == 'service-payroll.php' || $current_page == 'service-consulting.php' || $current_page == 'services.php');
                ?>
                <ul class="navbar-nav ms-auto align-items-center">
                    <li class="nav-item">
                        <a class="nav-link <?= ($current_page == 'index.php' || $current_page == '') ? 'active' : '' ?>" href="index.php">Home</a>
                    </li>

                    <!-- About Us Dropdown -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle <?= $is_about ? 'active' : '' ?>" href="about.php" id="aboutDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            About Us
                        </a>
                        <ul class="dropdown-menu border-0 shadow" aria-labelledby="aboutDropdown">
                            <li><a class="dropdown-item" href="about.php#our-story"><i class="fas fa-book-open me-2 text-accent-gold"></i> Our Story</a></li>
                            <li><a class="dropdown-item" href="team.php"><i class="fas fa-user-tie me-2 text-accent-gold"></i> Leadership</a></li>
                            <li><a class="dropdown-item" href="about.php#why-us"><i class="fas fa-check-circle me-2 text-accent-gold"></i> Why WorkForce2047</a></li>
                        </ul>
                    </li>

                    <!-- Apprenticeship Solutions Dropdown -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle <?= $is_apprenticeship ? 'active' : '' ?>" href="service-apprenticeship.php" id="apprenticeshipDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Apprenticeship Solutions
                        </a>
                        <ul class="dropdown-menu border-0 shadow" aria-labelledby="apprenticeshipDropdown">
                            <li><a class="dropdown-item" href="service-apprenticeship.php#naps"><i class="fas fa-award me-2 text-accent-gold"></i> NAPS</a></li>
                            <li><a class="dropdown-item" href="service-apprenticeship.php#nats"><i class="fas fa-graduation-cap me-2 text-accent-gold"></i> NATS</a></li>
                            <li><a class="dropdown-item" href="service-apprenticeship.php#state-schemes"><i class="fas fa-landmark me-2 text-accent-gold"></i> State Apprenticeship Schemes</a></li>
                            <li><a class="dropdown-item" href="service-apprenticeship.php#employer-benefits"><i class="fas fa-hand-holding-usd me-2 text-accent-gold"></i> Employer Benefits</a></li>

                        </ul>
                    </li>

                    <!-- Workforce Solutions Dropdown -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle <?= $is_workforce ? 'active' : '' ?>" href="services.php" id="workforceDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Workforce Solutions
                        </a>
                        <ul class="dropdown-menu dropdown-menu-wide border-0 shadow" aria-labelledby="workforceDropdown">
                            <li>
                                <a class="dropdown-item" href="service-staffing.php">
                                    <span class="fw-bold"><i class="fas fa-users me-2 text-accent-gold"></i> Contract Staffing</span>
                                    <span class="item-desc">Flexible, compliant manpower solutions for project-based, seasonal, and ongoing requirements</span>
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="service-payroll.php">
                                    <span class="fw-bold"><i class="fas fa-file-invoice-dollar me-2 text-accent-gold"></i> Payroll Management</span>
                                    <span class="item-desc">Accurate, timely payroll processing with full statutory deductions and filings</span>
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="service-consulting.php#labour-compliance">
                                    <span class="fw-bold"><i class="fas fa-balance-scale me-2 text-accent-gold"></i> Labour Compliance</span>
                                    <span class="item-desc">End-to-end management of registrations, returns, and audits under applicable labour laws</span>
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="service-consulting.php#business-license">
                                    <span class="fw-bold"><i class="fas fa-certificate me-2 text-accent-gold"></i> Business License Support</span>
                                    <span class="item-desc">Assistance with obtaining, renewing, and maintaining the licenses your operations require</span>
                                </a>
                            </li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li>
                                <a class="dropdown-item" href="service-consulting.php#workforce-advisory">
                                    <span class="fw-bold"><i class="fas fa-lightbulb me-2 text-accent-gold"></i> Workforce Advisory</span>
                                    <span class="item-desc">HR Policy Design, MDPs, Career Pathing, PMS & Strategic Expansion</span>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link <?= ($current_page == 'sectors.php') ? 'active' : '' ?>" href="sectors.php">
                            Sectors
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= ($current_page == 'contact.php') ? 'active' : '' ?>" href="contact.php">Contact Us</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>