<?php
$page_title = "Apprenticeship Savings Calculator | NAPS Cost Optimization India";
$page_desc = "Calculate your corporate cost savings with our Apprenticeship Cost Calculator. Compare regular employee wages with NAPS stipends and government reimbursements.";
$page_keywords = "Apprenticeship cost calculator, NAPS stipend calculator, apprenticeship stipend reimbursement support, workforce cost optimization calculator, NAPS savings calculator India, benefits of apprenticeship programs for MSMEs";
include 'header.php';
?>
<main>
    <!-- Page Header -->
    <section class="position-relative page-header-banner" style="height: 360px;">
        <img src="images/service_apprenticeship_1789541853019.jpg" alt="Apprenticeship Savings Calculator" class="w-100 h-100 object-fit-cover page-header-img" style="filter: brightness(0.35);">
        <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center">
            <div class="container mt-4">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-2">
                        <li class="breadcrumb-item"><a href="index.php" class="text-white-50 text-decoration-none">Home</a></li>
                        <li class="breadcrumb-item"><a href="service-apprenticeship.php" class="text-white-50 text-decoration-none">Apprenticeship Solutions</a></li>
                        <li class="breadcrumb-item active text-white" aria-current="page">Apprenticeship Calculator</li>
                    </ol>
                </nav>
                <h1 class="display-4 fw-bold text-white mb-2">Apprenticeship Savings Calculator</h1>
                <p class="lead text-white-50" style="max-width: 700px;">Calculate your organization's projected cost savings, DBT reimbursements, and wage bill advantages.</p>
            </div>
        </div>
    </section>

    <!-- Apprenticeship Calculator Section -->
    <section id="calculator" class="section-padding" style="background-color: #f4f7fb;">
        <div class="container">
            <div class="text-center mb-5">
                <span class="text-accent-gold fw-bold text-uppercase tracking-wide">Interactive ROI Tool</span>
                <h2 class="text-primary-navy fw-bold display-6">Apprenticeship Cost Benefit Calculator</h2>
                <p class="text-muted mx-auto" style="max-width: 650px;">Estimate your organization's annual cost savings and government stipend recoveries under NAPS.</p>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="calc-card">
                        <div class="calc-header text-center">
                            <h3 class="fw-bold mb-2">Estimate Your Workforce Cost Advantage</h3>
                            <p class="text-white-50 mb-0">Under NAPS DBT scheme, establishments lower wage bills by up to 22% with zero PF/ESI burden.</p>
                        </div>
                        <div class="calc-body">
                            <div class="row g-4 align-items-center">
                                <div class="col-lg-6">
                                    <form id="savingsCalculator" onsubmit="return false;">
                                        <div class="mb-4">
                                            <label for="workforceSize" class="form-label fw-bold text-primary-navy">
                                                Total Workforce (Regular + Contract)
                                            </label>
                                            <input type="number" class="form-control form-control-lg" id="workforceSize" value="200" min="30" max="50000" step="10">
                                            <small class="text-muted">Mandatory compliance applies for 30+ workers</small>
                                        </div>

                                        <div class="mb-4">
                                            <div class="d-flex justify-content-between align-items-center mb-2">
                                                <label for="apprenticePercent" class="form-label fw-bold text-primary-navy mb-0">
                                                    Apprentice Engagement Percentage: <span id="percentDisplay" class="text-accent-gold fw-bold">10%</span>
                                                </label>
                                                <span class="badge bg-primary">Mandatory: 2.5% - 15%</span>
                                            </div>
                                            <input type="range" class="form-range" id="apprenticePercent" min="2.5" max="15" step="0.5" value="10">
                                        </div>

                                        <div class="mb-4">
                                            <label for="monthlyStipend" class="form-label fw-bold text-primary-navy">
                                                Average Monthly Stipend per Apprentice (₹)
                                            </label>
                                            <input type="number" class="form-control form-control-lg" id="monthlyStipend" value="12000" min="7000" max="35000" step="500">
                                            <small class="text-muted">Govt DBT subsidizes up to ₹1,500/month</small>
                                        </div>
                                    </form>
                                </div>

                                <div class="col-lg-6">
                                    <div class="calc-result-box shadow-sm">
                                        <span class="text-muted fw-bold text-uppercase tracking-wide small">Estimated Annual Organization Savings</span>
                                        <div class="calc-savings-number mt-2 mb-2" id="totalSavingsDisplay">₹ 9,96,000</div>
                                        <span class="badge bg-success px-3 py-2 fs-6 mb-4">Approx. 22% Net Cost Reduction</span>

                                        <div class="text-start bg-white p-3 rounded-3 border mb-3">
                                            <div class="d-flex justify-content-between py-1 border-bottom">
                                                <span class="text-muted small">Total Apprentices Engaged:</span>
                                                <strong class="text-primary-navy" id="apprenticeCountDisplay">20</strong>
                                            </div>
                                            <div class="d-flex justify-content-between py-1 border-bottom">
                                                <span class="text-muted small">Annual Govt DBT Reimbursement:</span>
                                                <strong class="text-success" id="dbtReimbursementDisplay">₹ 3,60,000</strong>
                                            </div>
                                            <div class="d-flex justify-content-between py-1 border-bottom">
                                                <span class="text-muted small">Annual PF &amp; ESI Exemption Savings:</span>
                                                <strong class="text-primary-navy" id="statutorySavingsDisplay">₹ 6,36,000</strong>
                                            </div>
                                            <div class="d-flex justify-content-between py-1">
                                                <span class="text-muted small">Net Monthly Savings:</span>
                                                <strong class="text-accent-gold" id="monthlySavingsDisplay">₹ 83,000</strong>
                                            </div>
                                        </div>

                                        <a href="contact.php" class="btn btn-primary w-100 py-3 fw-bold">Request Formal ROI Audit</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Calculate With Us -->
    <section class="section-padding bg-white">
        <div class="container">
            <div class="row g-4 align-items-center">
                <div class="col-lg-6 pe-lg-5">
                    <span class="text-accent-gold fw-bold text-uppercase tracking-wide">Strategic Impact</span>
                    <h3 class="text-primary-navy fw-bold mb-3">Turning Statutory Obligation into a Balance Sheet Advantage</h3>
                    <p class="text-muted mb-4" style="line-height: 1.8;">
                        Many establishments view the Apprentices Act solely as a compliance requirement. WorkForce2047 Partners helps enterprises realize up to 22% wage bill savings, eliminate PF/ESI liability for trainees, and build a customized, loyal talent pipeline.
                    </p>
                    <div class="d-flex gap-3">
                        <a href="service-apprenticeship.php" class="btn btn-outline-primary">Explore Apprenticeship Programs</a>
                        <a href="contact.php#questions" class="btn btn-outline-secondary">View Apprenticeship Questions</a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="bg-light-gray p-4 p-md-5 rounded-4 border">
                        <h5 class="text-primary-navy fw-bold mb-3"><i class="fas fa-check-circle text-accent-gold me-2"></i> How Savings Are Derived:</h5>
                        <ul class="sector-list mb-0">
                            <li><strong>Government DBT Stipend:</strong> Under NAPS, the Central Government reimburses 25% of the stipend up to ₹1,500/month per apprentice directly to their bank account.</li>
                            <li><strong>Zero PF / ESI Liability:</strong> Trainees are exempt from Provident Fund (~12%), ESI (~3.25%), Bonus, and Gratuity.</li>
                            <li><strong>Pre-screened Mobilization:</strong> Reduced recruitment costs and shortened time-to-productivity on shop-floors and back-office roles.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Band -->
    <section class="cta-band">
        <div class="container text-center">
            <h2>Ready to Deploy an <span>Apprenticeship Program?</span></h2>
            <p class="lead mb-4 opacity-75">Connect with our IIM alumni team to conduct a complimentary workforce audit for your enterprise.</p>
            <a href="contact.php" class="btn btn-accent btn-lg px-5 py-3 shadow">Schedule a Consultation</a>
        </div>
    </section>
</main>

<script>
// Live Apprenticeship Calculator Logic
function calculateSavings() {
    const workforceSize = Math.max(30, parseInt(document.getElementById('workforceSize').value) || 0);
    const percent = parseFloat(document.getElementById('apprenticePercent').value) || 10;
    const stipend = Math.max(5000, parseFloat(document.getElementById('monthlyStipend').value) || 12000);

    document.getElementById('percentDisplay').innerText = percent + '%';

    // Total apprentices
    const apprenticeCount = Math.round(workforceSize * (percent / 100));

    // Govt DBT subsidy: 25% of stipend or up to ₹1,500/month per apprentice
    const dbtPerApprentice = Math.min(1500, stipend * 0.25);
    const annualDbtReimbursement = apprenticeCount * dbtPerApprentice * 12;

    // Statutory savings (PF ~12% employer + ESI ~3.25% + admin ~0.5% = ~15.75% of pay that is exempt for apprentices)
    const annualStatutorySavings = apprenticeCount * (stipend * 0.1575) * 12;

    const totalAnnualSavings = Math.round(annualDbtReimbursement + annualStatutorySavings);
    const monthlySavings = Math.round(totalAnnualSavings / 12);

    document.getElementById('apprenticeCountDisplay').innerText = apprenticeCount;
    document.getElementById('totalSavingsDisplay').innerText = '₹ ' + totalAnnualSavings.toLocaleString('en-IN');
    document.getElementById('dbtReimbursementDisplay').innerText = '₹ ' + Math.round(annualDbtReimbursement).toLocaleString('en-IN');
    document.getElementById('statutorySavingsDisplay').innerText = '₹ ' + Math.round(annualStatutorySavings).toLocaleString('en-IN');
    document.getElementById('monthlySavingsDisplay').innerText = '₹ ' + monthlySavings.toLocaleString('en-IN');
}

document.addEventListener('DOMContentLoaded', function() {
    const inputs = ['workforceSize', 'apprenticePercent', 'monthlyStipend'];
    inputs.forEach(id => {
        const el = document.getElementById(id);
        if (el) {
            el.addEventListener('input', calculateSavings);
        }
    });
    calculateSavings();
});
</script>

<?php include 'footer.php'; ?>