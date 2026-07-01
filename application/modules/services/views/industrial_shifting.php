<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<section class="service-breadcrumbs text-center">
    <div class="container">
        <h1 class="bc-title-main text-uppercase text-white fw-bold">Industrial Shifting</h1>
        <div class="bc-divider-wrap d-flex align-items-center justify-content-center gap-3 my-3">
            <span class="bc-divider-line"></span>
            <div class="bc-icon-hexagon">
                <i class="bi bi-hexagon-fill hex-bg"></i>
                <i class="bi bi-briefcase hex-icon"></i>
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
            <span class="bc-current-pill text-white bg-danger font-weight-bold">Industrial Shifting</span>
        </div>
    </div>
</section>

<section class="service-details-section mb-5 pb-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="service-main-content">
                    <h2 class="service-section-title">Heavy Industrial Shifting &amp; Machinery Transport</h2>
                    <div class="about-service-text">
                        <p>
                            Moving an industrial unit, factory machinery, or heavy corporate inventory is a massive project requiring special logistics and planning. At <strong><?= $company3 ?></strong>, we have specialized tools and certified operators to move heavy machinery safely.
                        </p>
                        <p>
                            We provide comprehensive industrial relocations, including assembly lines, heavy CNC machines, manufacturing tools, laboratory equipment, and complete warehouse inventories. We coordinate closely with plant managers to build a detailed transition schedule, minimizing production downtime.
                        </p>
                        <p>
                            Our transportation fleet includes flatbed trucks, heavy-duty container carriers, and custom trailers designed to move oversized loads. Every machine is secured with heavy-grade straps and lashing chains to guarantee safety across long transit distances.
                        </p>
                    </div>

                    <h2 class="service-section-title mt-5">Industrial Shifting Features</h2>
                    <ul class="list-unstyled d-flex flex-column gap-2 text-muted">
                        <li><i class="bi bi-check-circle-fill text-danger me-2"></i> Custom crane, forklift, and loading equipment layout.</li>
                        <li><i class="bi bi-check-circle-fill text-danger me-2"></i> Transit lashing and heavy cargo packaging options.</li>
                        <li><i class="bi bi-check-circle-fill text-danger me-2"></i> Structured scheduling to minimize downtime and work losses.</li>
                        <li><i class="bi bi-check-circle-fill text-danger me-2"></i> Fully insured transit to protect expensive factory machinery.</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4">
                <?php $this->load->view('services/service_sidebar', ['active_service' => 'industrial-shifting']); ?>
            </div>
        </div>
    </div>
</section>
