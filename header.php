<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WorkForce2047 Partners | Professional Workforce Solutions</title>
    <meta name="description" content="Workforce solutions consultancy with deep industry expertise. We deliver practical workforce solutions, contract staffing, and compliance management.">
    <meta property="og:title" content="WorkForce2047 Partners | Professional Workforce Solutions">
    <meta property="og:description" content="Workforce solutions consultancy with deep industry expertise. We deliver practical workforce solutions, contract staffing, and compliance management.">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600&family=Poppins:wght@500;600;700;800&display=swap" rel="stylesheet">

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome for Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white sticky-top">
        <div class="container">
            <a class="navbar-brand" href="index.php">
                <!-- User's provided logo should be placed here -->
                <img src="images/logo/logo.jpeg" alt="WorkForce2047 Partners Logo" onerror="this.outerHTML='<h3 class=\'text-primary-navy mb-0 font-weight-bold\'>WorkForce<span class=\'text-accent-gold\'>2047</span> Partners&trade; LLP</h3>'">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <?php
                $current_page = basename($_SERVER['PHP_SELF']);
                $is_services = ($current_page == 'services.php' || strpos($current_page, 'service-') === 0);
                ?>
                <ul class="navbar-nav ms-auto align-items-center">
                    <li class="nav-item">
                        <a class="nav-link <?= ($current_page == 'index.php' || $current_page == '') ? 'active' : '' ?>" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= ($current_page == 'about.php') ? 'active' : '' ?>" href="about.php">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= ($current_page == 'team.php') ? 'active' : '' ?>" href="team.php">Our Leaders</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= $is_services ? 'active' : '' ?>" href="services.php">
                            Services
                        </a>
                        <!-- <ul class="dropdown-menu border-0 shadow-sm" aria-labelledby="servicesDropdown">
                            <li><a class="dropdown-item" href="service-apprenticeship.php">Apprenticeship</a></li>
                            <li><a class="dropdown-item" href="service-consulting.php">Corporate Consulting</a></li>
                            <li><a class="dropdown-item" href="service-staffing.php">Contract Staffing</a></li>
                            <li><a class="dropdown-item" href="service-payroll.php">Payroll & Compliance</a></li>
                        </ul> -->
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= ($current_page == 'sectors.php') ? 'active' : '' ?>" href="sectors.php">
                            Sectors
                        </a>
                        <!-- <ul class="dropdown-menu border-0 shadow-sm" aria-labelledby="sectorsDropdown">
                            <li><a class="dropdown-item" href="sectors.php">Manufacturing</a></li>
                            <li><a class="dropdown-item" href="sectors.php">IT Services</a></li>
                            <li><a class="dropdown-item" href="sectors.php">Retail Operations</a></li>
                            <li><a class="dropdown-item" href="sectors.php">Financial Services</a></li>
                            <li><a class="dropdown-item" href="sectors.php">Sunrise Sectors</a></li>
                        </ul> -->
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= ($current_page == 'contact.php') ? 'active' : '' ?>" href="contact.php">Contact Us</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>