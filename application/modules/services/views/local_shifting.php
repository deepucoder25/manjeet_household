<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<section class="service-breadcrumbs text-center">
    <div class="container">
        <h1 class="bc-title-main text-uppercase text-white fw-bold">Local Shifting</h1>
        <div class="bc-divider-wrap d-flex align-items-center justify-content-center gap-3 my-3">
            <span class="bc-divider-line"></span>
            <div class="bc-icon-hexagon">
                <i class="bi bi-hexagon-fill hex-bg"></i>
                <i class="bi bi-geo-alt hex-icon"></i>
            </div>
            <span class="bc-divider-line"></span>
        </div>
        <div class="bc-capsule-container d-inline-flex align-items-center justify-content-between p-1 bg-white border border-danger shadow-sm">
            <div class="d-flex align-items-center gap-2">
                <div class="bc-home-icon-wrap">
                    <i class="bi bi-house-door-fill"></i>
                </div>
                <div class="bc-links d-flex align-items-center gap-2 text-dark font-weight-bold">
                    <a href="<?= site_url() ?>" class="text-decoration-none text-dark">Home</a>
                    <i class="bi bi-chevron-right text-muted small"></i>
                </div>
            </div>
            <span class="bc-current-pill text-white bg-danger font-weight-bold">Local Shifting</span>
        </div>
    </div>
</section>

<section class="service-details-section mb-5 pb-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="service-main-content">
                    <h2 class="service-section-title">Fast Local Shifting Services</h2>
                    <div class="about-service-text">
                        <p>
                            Moving locally within a city should be fast, simple, and affordable. At <strong><?= $company3 ?></strong>, we provide same-day local shifting services in Indore, Bhopal, and adjacent regions.
                        </p>
                        <p>
                            Our team arrives on-schedule with a dedicated carrier vehicle suited for city streets. We pack your goods carefully using compact box wrappers, load them swiftly, and transport them via the shortest transit routes to avoid city traffic.
                        </p>
                        <p>
                            We handle complete door-to-door execution. We disassembly basic beds or wardrobes, transport everything securely, and reassemble them at your new location, so you can settle in comfortably.
                        </p>
                    </div>

                    <h2 class="service-section-title mt-5">Why Choose Us for Local Shifting</h2>
                    <ul class="list-unstyled d-flex flex-column gap-2 text-muted">
                        <li><i class="bi bi-check-circle-fill text-danger me-2"></i> Same-day packing, moving, and delivery services.</li>
                        <li><i class="bi bi-check-circle-fill text-danger me-2"></i> Dedicated mini-trucks and carriers for fast urban transport.</li>
                        <li><i class="bi bi-check-circle-fill text-danger me-2"></i> Experienced local crew familiar with Indore/Bhopal routes.</li>
                        <li><i class="bi bi-check-circle-fill text-danger me-2"></i> Affordable flat rates with no hidden city toll or extra charges.</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4">
                <?php $this->load->view('services/service_sidebar', ['active_service' => 'local-shifting']); ?>
            </div>
        </div>
    </div>
</section>
