<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<section class="service-breadcrumbs text-center">
    <div class="container">
        <h1 class="bc-title-main text-uppercase text-white fw-bold">Packing &amp; Unpacking</h1>
        <div class="bc-divider-wrap d-flex align-items-center justify-content-center gap-3 my-3">
            <span class="bc-divider-line"></span>
            <div class="bc-icon-hexagon">
                <i class="bi bi-hexagon-fill hex-bg"></i>
                <i class="bi bi-box hex-icon"></i>
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
            <span class="bc-current-pill text-white bg-danger font-weight-bold">Packing &amp; Unpacking</span>
        </div>
    </div>
</section>

<section class="service-details-section mb-5 pb-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="service-main-content">
                    <h2 class="service-section-title">Premium Packing &amp; Unpacking Services</h2>
                    <div class="about-service-text">
                        <p>
                            At <strong><?= $company3 ?></strong>, we believe that high-quality packing is the foundation of any successful relocation. Our professional packing services ensure that your household belongings, delicate electronics, fine glassware, and heavy items are wrapped and protected with absolute precision.
                        </p>
                        <p>
                            We utilize a multi-layered packing standard, including premium air-bubble wraps, waterproof corrugated sheets, heavy-duty cartons, stretch wrap, and thermocol padding. Whether you are moving down the street or across the nation, our packaging shields your items from scratches, breakage, and moisture.
                        </p>
                        <p>
                            Once we reach your destination, our trained crew executes structured unpacking services. We unpack every item carefully, help arrange your furniture, and clear away all empty packaging debris so you can settle into your new home instantly.
                        </p>
                    </div>

                    <h2 class="service-section-title mt-5">Our Packaging Materials</h2>
                    <ul class="list-unstyled d-flex flex-column gap-2 text-muted">
                        <li><i class="bi bi-check-circle-fill text-danger me-2"></i> Heavy-duty 5-ply cartons for books and heavy items.</li>
                        <li><i class="bi bi-check-circle-fill text-danger me-2"></i> Premium bubble wrap and foam rolls for fragile glass and crockery.</li>
                        <li><i class="bi bi-check-circle-fill text-danger me-2"></i> Stretch film to protect sofas and fabric furniture from dust.</li>
                        <li><i class="bi bi-check-circle-fill text-danger me-2"></i> Waterproof laminated sheets for monsoon weather moves.</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4">
                <?php $this->load->view('services/service_sidebar', ['active_service' => 'packing-unpacking']); ?>
            </div>
        </div>
    </div>
</section>
