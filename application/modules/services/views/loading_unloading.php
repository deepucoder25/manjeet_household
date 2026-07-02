<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<?php $this->load->view('template/breadcrumb', array('breadcrumb_title' => 'Loading & Unloading Service', 'breadcrumb_icon' => 'bi-arrow-down-up')); ?>

<section class="service-details-section mb-5 pb-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="service-main-content">
                    <!-- Hero Image Banner -->
                    <div class="service-details-hero">
                        <img src="<?= base_url('assets/images/home_modules/loading.jpg') ?>" class="service-details-img" alt="Loading and Unloading Services">
                        <div class="service-details-overlay"></div>
                    </div>

                    <h2 class="service-section-title">Safe Loading &amp; Unloading Services</h2>
                    <div class="about-service-text mb-5">
                        <p class="lead">
                            Loading and unloading require physical coordination, specialized safety gear, and strategic planning.
                        </p>
                        <p>
                            At <strong><?= $company3 ?></strong>, we employ a highly trained crew that understands the physics of stack weight, balance, and cargo safety. We use modern tools such as hydraulic hand trolleys, heavy lifting straps, safety sliders, and ramps to transition items efficiently.
                        </p>
                        <p>
                            Upon arrival, our team unloads your cargo systematically, placing each box and furniture item in their respective designated rooms as directed. Our process guarantees zero scratches or impacts to your new home's walls, stairs, and doorways.
                        </p>
                    </div>

                    <!-- Standards Highlights Cards -->
                    <h3 class="service-section-title">Our Safety Measures</h3>
                    <div class="row g-4 mb-5">
                        <div class="col-md-6">
                            <div class="card p-4 border-0 shadow-sm rounded-4 service-feature-card h-100">
                                <div class="service-icon-wrap">
                                    <i class="bi bi-stack"></i>
                                </div>
                                <h5 class="fw-bold text-dark mb-2">Weight Distribution</h5>
                                <p class="small text-muted mb-0">Heavy wooden boxes and metal containers are loaded first and placed at the bottom, while light cardboard boxes stack on top to avoid crushing.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card p-4 border-0 shadow-sm rounded-4 service-feature-card h-100">
                                <div class="service-icon-wrap">
                                    <i class="bi bi-bezier2"></i>
                                </div>
                                <h5 class="fw-bold text-dark mb-2">Cargo Lashing</h5>
                                <p class="small text-muted mb-0">We lock everything in place with high-tensile safety straps and nets inside our containment vehicles to ensure goods remain static during bumps.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card p-4 border-0 shadow-sm rounded-4 service-feature-card h-100">
                                <div class="service-icon-wrap">
                                    <i class="bi bi-shield-lock"></i>
                                </div>
                                <h5 class="fw-bold text-dark mb-2">Wall &amp; Floor Protection</h5>
                                <p class="small text-muted mb-0">We use corner guards, floor runners, and padded wrapping templates to protect both your inventory and the building interiors from damage.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card p-4 border-0 shadow-sm rounded-4 service-feature-card h-100">
                                <div class="service-icon-wrap">
                                    <i class="bi bi-tools"></i>
                                </div>
                                <h5 class="fw-bold text-dark mb-2">Hydraulic Elevators</h5>
                                <p class="small text-muted mb-0">Specialized hand lifts, ramps, and hydraulic platform dock systems are utilized to smoothly lift extremely heavy appliances and boxes.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Steps Timeline -->
                    <h3 class="service-section-title">The Loading &amp; Unloading Process</h3>
                    <div class="row g-4">
                        <div class="col-md-4">
                            <div class="process-step-card h-100">
                                <div class="process-step-number">1</div>
                                <h6 class="fw-bold">Pre-Load Scan</h6>
                                <p class="small text-muted mb-0">Verifying weight limits and preparing high-value items.</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="process-step-card h-100">
                                <div class="process-step-number">2</div>
                                <h6 class="fw-bold">Secure Stacking</h6>
                                <p class="small text-muted mb-0">Arranging goods tightly inside the container vehicle.</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="process-step-card h-100">
                                <div class="process-step-number">3</div>
                                <h6 class="fw-bold">Unload &amp; Place</h6>
                                <p class="small text-muted mb-0">Systematic drop-off in designated rooms at destination.</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-lg-4">
                <?php $this->load->view('services/service_sidebar', ['active_service' => 'loading-unloading']); ?>
            </div>
        </div>
    </div>
</section>
