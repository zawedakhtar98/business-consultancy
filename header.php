<?php
// Output Buffer HTML Minifier & Source Obfuscator
if (!ob_get_level()) {
    ob_start(function ($buffer) {
        // Strip normal HTML comments (keep conditional comments and structured data)
        $buffer = preg_replace('/<!--(?!\s*(?:\[if [^\]]+]|<!|>))(?:(?!-->).)*-->/s', '', $buffer);
        // Collapse whitespace and multiple newlines into a single line
        $buffer = preg_replace('/\s+/', ' ', $buffer);
        $buffer = preg_replace('/> </', '><', $buffer);

        $notice = "<!--\n" .
            "================================================================================\n" .
            "  COPYRIGHT & INTELLECTUAL PROPERTY NOTICE - WORKFORCE2047 PARTNERS LLP\n" .
            "  All site design, structure, content and assets are protected by copyright law.\n" .
            "  Unauthorized scraping, copying, reproduction or redistribution is prohibited.\n" .
            "================================================================================\n" .
            "-->\n";
        return $notice . trim($buffer);
    });
}

$current_page_file = basename($_SERVER['PHP_SELF'] ?? '');
$protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || (isset($_SERVER['SERVER_PORT']) && $_SERVER['SERVER_PORT'] == 443)) ? "https://" : "http://";
$host = $_SERVER['HTTP_HOST'] ?? 'workforce2047.com';
$raw_dir = dirname($_SERVER['PHP_SELF'] ?? '');
$script_dir = trim(str_replace('\\', '/', $raw_dir), '/.');
$base_path = !empty($script_dir) ? '/' . $script_dir : '';
$canonical_url = $protocol . $host . $base_path . '/' . ($current_page_file == 'index.php' || empty($current_page_file) ? '' : $current_page_file);
$og_image_url = $protocol . $host . $base_path . '/images/logo/logo.png';

// Default SEO values
$site_name = "WorkForce2047 Partners LLP";
$default_title = "WorkForce2047 Partners | Apprenticeship & Workforce Management Solutions India";
$default_desc = "WorkForce2047 is India's premier workforce advisory and apprenticeship consulting partner. End-to-end NAPS & NATS implementation, contract staffing, labour compliance, and payroll solutions.";
$default_keywords = "Apprenticeship Management Services, Apprenticeship Consulting Services India, NAPS Implementation Services, NATS Implementation Services, End-to-End Apprenticeship Solutions, Workforce Management Solutions India, Apprenticeship Compliance Services, Workforce Strategy Consulting, Contract Staffing Services India, Government Apprenticeship Scheme Consultant";

$seo_title = !empty($page_title) ? $page_title : $default_title;
$seo_desc = !empty($page_desc) ? $page_desc : $default_desc;
$seo_keywords = !empty($page_keywords) ? $page_keywords : $default_keywords;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($seo_title) ?></title>
    <meta name="description" content="<?= htmlspecialchars($seo_desc) ?>">
    <meta name="keywords" content="<?= htmlspecialchars($seo_keywords) ?>">
    <meta name="author" content="WorkForce2047 Partners LLP">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="<?= htmlspecialchars($canonical_url) ?>">
    <link rel="icon" type="image/png" href="images/favicon-180.png">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="WorkForce2047 Partners LLP">
    <meta property="og:title" content="<?= htmlspecialchars($seo_title) ?>">
    <meta property="og:description" content="<?= htmlspecialchars($seo_desc) ?>">
    <meta property="og:url" content="<?= htmlspecialchars($canonical_url) ?>">
    <meta property="og:image" content="<?= htmlspecialchars($og_image_url) ?>">

    <!-- Twitter Cards -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?= htmlspecialchars($seo_title) ?>">
    <meta name="twitter:description" content="<?= htmlspecialchars($seo_desc) ?>">
    <meta name="twitter:image" content="<?= htmlspecialchars($og_image_url) ?>">

    <!-- Schema.org JSON-LD Structured Data -->
    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "ProfessionalService",
            "name": "WorkForce2047 Partners LLP",
            "alternateName": "WorkForce 2047",
            "url": "https://workforce2047.com",
            "logo": "https://workforce2047.com/images/logo/logo.png",
            "description": "Leading Indian workforce advisory, contract staffing, and government apprenticeship scheme consulting firm offering NAPS, NATS, compliance, and payroll management.",
            "telephone": "+91-9988220023",
            "priceRange": "$$",
            "address": {
                "@type": "PostalAddress",
                "addressCountry": "IN"
            },
            "areaServed": "IN",
            "sameAs": [
                "https://www.linkedin.com/company/workforce2047-partners-llp"
            ]
        }
    </script>

    <!-- Google Fonts (Local) -->
    <link rel="stylesheet" href="vendor/google-fonts/google-fonts.css">

    <!-- Bootstrap 5 CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome for Icons (Local) -->
    <link rel="stylesheet" href="vendor/fontawesome/css/all.min.css">

    <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-xl navbar-light bg-white sticky-top">
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