<?php
$page_title = "Our Leadership | WorkForce2047 Partners LLP";
$page_desc = "Meet the leadership and advisory experts driving workforce excellence, compliance, and skilling innovation at WorkForce2047 Partners LLP.";
$page_keywords = "WorkForce2047 leadership, workforce leaders India, apprenticeship advisors, workforce consultants India";
include 'header.php';
?>
<main>
    <!-- Page Header -->
    <section class="position-relative page-header-banner" style="height: 380px;">
        <img src="images/team-header.png" alt="Our Leaders" class="w-100 h-100 object-fit-cover page-header-img" style="filter: brightness(0.35); object-position: center 18%;">
        <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center">
            <div class="container mt-4">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-2">
                        <li class="breadcrumb-item"><a href="index.php" class="text-white-50 text-decoration-none">Home</a></li>
                        <li class="breadcrumb-item active text-white" aria-current="page">Our Leaders</li>
                    </ol>
                </nav>
                <h1 class="display-4 fw-bold text-white mb-3">Our Leaders</h1>
                <p class="lead text-white-50" style="max-width: 600px;">Meet the experts driving workforce excellence</p>
            </div>
        </div>
    </section>

    <!-- Team Section -->
    <div class="bg-light-gray">
        <?php include 'team_section.php'; ?>
    </div>
</main>
<?php include 'footer.php'; ?>