<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<section class="service-breadcrumbs text-center">
    <div class="container">
        <h1 class="bc-title-main text-uppercase text-white fw-bold">Loading &amp; Unloading</h1>
        <div class="bc-divider-wrap d-flex align-items-center justify-content-center gap-3 my-3">
            <span class="bc-divider-line"></span>
            <div class="bc-icon-hexagon">
                <i class="bi bi-hexagon-fill hex-bg"></i>
                <i class="bi bi-arrow-down-up hex-icon"></i>
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
            <span class="bc-current-pill text-white bg-danger font-weight-bold">Loading &amp; Unloading</span>
        </div>
    </div>
</section>

<section class="service-details-section mb-5 pb-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="service-main-content">
                    <h2 class="service-section-title">Safe Loading &amp; Unloading Services</h2>
                    <div class="about-service-text">
                        <p>
                            Loading and unloading require strength, skill, and specialized equipment to prevent damages. At <strong><?= $company3 ?></strong>, we employ a highly trained crew that understands the physics of stack weight, balance, and cargo safety during transit.
                        </p>
                        <p>
                            We use modern tools such as hydraulic hand trolleys, heavy lifting straps, sliders, and loading ramps. Heavy home appliances (refrigerators, washing machines) and bulky furniture items are handled with absolute care to ensure scratch-free loading into our containment trucks.
                        </p>
                        <p>
                            Upon arrival, our team unloads your cargo systematically, placing each box and furniture item in their respective designated rooms as directed. Our process guarantees zero damage to your walls, stairs, or doorways during execution.
                        </p>
                    </div>

                    <h2 class="service-section-title mt-5">Our Loading Standards</h2>
                    <ul class="list-unstyled d-flex flex-column gap-2 text-muted">
                        <li><i class="bi bi-check-circle-fill text-danger me-2"></i> Heavy boxes stacked at the bottom, light/fragile boxes on top.</li>
                        <li><i class="bi bi-check-circle-fill text-danger me-2"></i> Complete cargo lashing with heavy ropes inside the container truck.</li>
                        <li><i class="bi bi-check-circle-fill text-danger me-2"></i> Furniture padded and locked against truck walls to prevent shifts.</li>
                        <li><i class="bi bi-check-circle-fill text-danger me-2"></i> Specialized sliders for scratch-free floor-to-truck transition.</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4">
                <?php $this->load->view('services/service_sidebar', ['active_service' => 'loading-unloading']); ?>
            </div>
        </div>
    </div>
</section>
