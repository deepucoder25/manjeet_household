<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<?php $this->load->view('template/breadcrumb', array('breadcrumb_title' => 'Bike Transportation', 'breadcrumb_icon' => 'bi-bicycle')); ?>

<section class="service-details-section mb-5 pb-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="service-main-content">
                    <!-- Hero Image Banner -->
                    <div class="service-details-hero">
                        <img loading="lazy" src="<?= base_url('assets/images/home_modules/car.jpg') ?>" class="service-details-img" alt="Bike Transportation Services">
                        <div class="service-details-overlay"></div>
                    </div>

                    <h2 class="service-section-title">Secure Bike Shifting Services</h2>
                    <div class="about-service-text mb-5">
                        <p class="lead">
                            Your motorcycle, scooter, or sports bike is one of your most prized possessions. We move it with complete safety and care.
                        </p>
                        <p>
                            At <strong><?= $company3 ?></strong>, we specialize in offering safe, scratch-free, and timely bike shifting services across Indore, Bhopal, and the rest of India. We utilize a dedicated wrapping approach, using foam padding and bubble sheets to isolate handles, indicators, and mirrors before transit.
                        </p>
                        <p>
                            Once loaded into our container carriers, each bike is firmly locked using wheel chocks and safety straps, preventing any lateral movement or tipping over during transit on the highway.
                        </p>
                    </div>

                    <!-- Standards Highlights Cards -->
                    <h3 class="service-section-title">Our Shifting Features</h3>
                    <div class="row g-4 mb-5">
                        <div class="col-md-6">
                            <div class="card p-4 border-0 shadow-sm rounded-4 service-feature-card h-100">
                                <div class="service-icon-wrap">
                                    <i class="bi bi-box-seam"></i>
                                </div>
                                <h5 class="fw-bold text-dark mb-2">Thick Multi-Layer Wrap</h5>
                                <p class="small text-muted mb-0">High-grade bubble wrapping around mirrors, indicators, exhaust pipelines, and metallic frame components.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card p-4 border-0 shadow-sm rounded-4 service-feature-card h-100">
                                <div class="service-icon-wrap">
                                    <i class="bi bi-layers-half"></i>
                                </div>
                                <h5 class="fw-bold text-dark mb-2">Wheel Chock Anchors</h5>
                                <p class="small text-muted mb-0">Bikes are locked to custom floor plates using heavy nylon straps to prevent vibrations or tipping over.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card p-4 border-0 shadow-sm rounded-4 service-feature-card h-100">
                                <div class="service-icon-wrap">
                                    <i class="bi bi-truck"></i>
                                </div>
                                <h5 class="fw-bold text-dark mb-2">Closed Auto Carriers</h5>
                                <p class="small text-muted mb-0">Transported inside weatherproof enclosed containers to safeguard vehicles from rain, dust, and highway accidents.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card p-4 border-0 shadow-sm rounded-4 service-feature-card h-100">
                                <div class="service-icon-wrap">
                                    <i class="bi bi-shield-check"></i>
                                </div>
                                <h5 class="fw-bold text-dark mb-2">Full Transit Cover</h5>
                                <p class="small text-muted mb-0">Complete transit insurance options protecting against any unforeseen road incidents during highway haulage.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Steps Timeline -->
                    <h3 class="service-section-title">The Bike Shifting Process</h3>
                    <div class="row g-4">
                        <div class="col-md-4">
                            <div class="process-step-card h-100">
                                <div class="process-step-number">1</div>
                                <h6 class="fw-bold">Inspection &amp; Empty</h6>
                                <p class="small text-muted mb-0">Auditing body status and emptying extra fuel from the fuel tank.</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="process-step-card h-100">
                                <div class="process-step-number">2</div>
                                <h6 class="fw-bold">Foam &amp; Bubble Wrap</h6>
                                <p class="small text-muted mb-0">Padding fragile handle grips, brakes, and headlights.</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="process-step-card h-100">
                                <div class="process-step-number">3</div>
                                <h6 class="fw-bold">Deck Tie-Down</h6>
                                <p class="small text-muted mb-0">Ramping up, locking the wheels, and securing straps.</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-lg-4">
                <?php $this->load->view('services/service_sidebar', ['active_service' => 'bike-transportation']); ?>
            </div>
        </div>
    </div>
</section>
