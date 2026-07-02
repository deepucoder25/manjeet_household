<?php 
if (!defined('BASEPATH')) exit('No direct script access allowed'); 

if (!function_exists('format_stat_with_span')) {
    function format_stat_with_span($val) {
        if (preg_match('/^(\d+)(.*)$/', $val, $matches)) {
            return $matches[1] . '<span class="about-stat-suffix">' . $matches[2] . '</span>';
        }
        return $val;
    }
}
?>

<?php $this->load->view('template/breadcrumb', array('breadcrumb_title' => 'About Us', 'breadcrumb_icon' => 'bi-people-fill')); ?>

<section class="service-details-section mb-5 pb-5">
    <div class="container">
        <div class="row">

            <div class="col-lg-8">
                <div class="service-main-content">
                    <!-- Heading -->
                    <h2 class="service-section-title">Who We Are</h2>
                    
                    <div class="about-service-text mb-4">
                        <p class="lead">
                            For over three decades, <strong><?= $company3 ?></strong> has set the benchmark for secure, efficient, and seamless relocation services across India.
                        </p>
                        <p>
                            What started as a single-truck operation has grown into one of the country's most respected logistics and packing companies. Today, we handle household goods shifting, corporate relocation, vehicle carrier shipping, and warehousing storage options with the utmost care and professional precision.
                        </p>
                    </div>

                    <!-- Stats Dashboard Grid -->
                    <div class="row g-4 mb-5">
                        <div class="col-sm-6 col-md-3">
                            <div class="about-stat-card">
                                <div class="about-stat-number"><?= $yearsExperience ?></div>
                                <div class="about-stat-label">Years Legacy</div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <div class="about-stat-card">
                                <div class="about-stat-number"><?= $successfulMoves ?></div>
                                <div class="about-stat-label">Safe Moves</div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <div class="about-stat-card">
                                <div class="about-stat-number"><?= $happyClients ?></div>
                                <div class="about-stat-label">Happy Clients</div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <div class="about-stat-card">
                                <div class="about-stat-number"><?= $statesCovered ?></div>
                                <div class="about-stat-label">States Covered</div>
                            </div>
                        </div>
                    </div>

                    <!-- Core Vision and Mission -->
                    <div class="row g-4 mb-5">
                        <div class="col-md-6">
                            <div class="about-vision-card h-100 shadow-sm">
                                <div class="about-vision-icon">
                                    <i class="bi bi-eye-fill"></i>
                                </div>
                                <h4 class="fw-bold mb-3">Our Vision</h4>
                                <p class="text-muted small mb-0">
                                    To establish ourselves as India's ultimate logistics and relocation provider by delivering modern, tech-enabled, safe, and transparent shifting services to every corner of the nation.
                                </p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="about-vision-card h-100 shadow-sm">
                                <div class="about-vision-icon">
                                    <i class="bi bi-briefcase-fill"></i>
                                </div>
                                <h4 class="fw-bold mb-3">Our Mission</h4>
                                <p class="text-muted small mb-0">
                                    To provide peace of mind during shifting processes by employing skilled packing professionals, using premium materials, offering honest pricing, and maintaining strict safety standards.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Core Values -->
                    <h2 class="service-section-title">Our Core Values</h2>
                    <div class="about-service-text mb-4">
                        <p>
                            At the heart of our operations are four pillars that guide our team's daily interactions with clients, partners, and each other:
                        </p>
                    </div>
                    <div class="row g-4">
                        <div class="col-md-6">
                            <div class="d-flex align-items-start gap-3 p-4 border rounded-4 shadow-sm about-card-hover">
                                <div class="fs-3 text-danger about-icon-box-lg m-0"><i class="bi bi-patch-check-fill"></i></div>
                                <div>
                                    <h5 class="fw-bold mb-1">Absolute Integrity</h5>
                                    <p class="text-muted small mb-0">Transparent billing, verified transport agreements, and zero surprise hidden costs.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="d-flex align-items-start gap-3 p-4 border rounded-4 shadow-sm about-card-hover">
                                <div class="fs-3 text-danger about-icon-box-lg m-0"><i class="bi bi-award-fill"></i></div>
                                <div>
                                    <h5 class="fw-bold mb-1">Quality Without Compromise</h5>
                                    <p class="text-muted small mb-0">Heavy duty multi-layered bubbles and customized robust wooden crates for delicate goods.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="d-flex align-items-start gap-3 p-4 border rounded-4 shadow-sm about-card-hover">
                                <div class="fs-3 text-danger about-icon-box-lg m-0"><i class="bi bi-person-fill-check"></i></div>
                                <div>
                                    <h5 class="fw-bold mb-1">Customer First Approach</h5>
                                    <p class="text-muted small mb-0">Dedicated support coordinators, custom package allocations, and easy claim resolution.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="d-flex align-items-start gap-3 p-4 border rounded-4 shadow-sm about-card-hover">
                                <div class="fs-3 text-danger about-icon-box-lg m-0"><i class="bi bi-speedometer2"></i></div>
                                <div>
                                    <h5 class="fw-bold mb-1">Speed and Safety</h5>
                                    <p class="text-muted small mb-0">Optimal route mappings, specialized container trucks, and punctual delivery guarantees.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="col-lg-4">
                <?php $this->load->view('about/company_sidebar', ['active_link' => 'about-us']); ?>
            </div>
        </div>
    </div>
</section>
