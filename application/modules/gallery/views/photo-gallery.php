<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<section class="service-breadcrumbs text-center">
    <div class="container">
        <h1 class="bc-title-main text-uppercase text-white fw-bold">Photo Gallery</h1>
        <div class="bc-divider-wrap d-flex align-items-center justify-content-center gap-3 my-3">
            <span class="bc-divider-line"></span>
            <div class="bc-icon-hexagon">
                <i class="bi bi-hexagon-fill hex-bg"></i>
                <i class="bi bi-images hex-icon"></i>
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
            <span class="bc-current-pill text-white bg-danger font-weight-bold">Photo Gallery</span>
        </div>
    </div>
</section>

<section class="service-details-section mb-5 pb-5">
    <div class="container">
        <div class="row">

            <div class="col-lg-8">
                <div class="service-main-content">

                    <h2 class="service-section-title">Our Relocation Operations in Action</h2>
                    <div class="about-service-text mb-4">
                        <p>
                            Take a look at our on-field photos demonstrating our dedication to safety, careful packaging, and organized logistics. Our photo gallery highlights our packing standards, secure warehouse storage, and specialized fleets.
                        </p>
                    </div>

                    <div class="row">

                        <div class="col-md-6 mb-4">
                            <div class="card border-0 shadow-sm rounded-3 overflow-hidden gallery-photo-card h-100">
                                <div class="gallery-img-wrapper position-relative">
                                    <img loading="lazy" src="<?= base_url('assets/images/services_modules/home-shifting-services.webp') ?>" class="w-100 img-fluid gallery-img" alt="Household Packing and Shifting Services">
                                    <div class="gallery-hover-overlay position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center opacity-0 gallery-bg-dark-50 gallery-transition-all">
                                        <i class="bi bi-zoom-in text-white gallery-icon-lg"></i>
                                    </div>
                                </div>
                                <div class="card-body p-3">
                                    <span class="badge gallery-bg-success-soft text-success mb-2 gallery-badge-sm">Household Packing</span>
                                    <h5 class="fw-bold mb-1 gallery-title-sm">Multi-Layer Furniture Protection</h5>
                                    <p class="small text-muted mb-0">Careful packing of household furniture using bubble wrap and edge guards to prevent transit scratches.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 mb-4">
                            <div class="card border-0 shadow-sm rounded-3 overflow-hidden gallery-photo-card h-100">
                                <div class="gallery-img-wrapper position-relative">
                                    <img loading="lazy" src="<?= base_url('assets/images/services_modules/car-transportation-services.webp') ?>" class="w-100 img-fluid gallery-img" alt="Car Transportation Carriers">
                                    <div class="gallery-hover-overlay position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center opacity-0 gallery-bg-dark-50 gallery-transition-all">
                                        <i class="bi bi-zoom-in text-white gallery-icon-lg"></i>
                                    </div>
                                </div>
                                <div class="card-body p-3">
                                    <span class="badge gallery-bg-success-soft text-success mb-2 gallery-badge-sm">Car Carrier</span>
                                    <h5 class="fw-bold mb-1 gallery-title-sm">Enclosed Double-Deck Car Transport</h5>
                                    <p class="small text-muted mb-0">Loading passenger cars inside fully enclosed containers to protect them from weather and road debris.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 mb-4">
                            <div class="card border-0 shadow-sm rounded-3 overflow-hidden gallery-photo-card h-100">
                                <div class="gallery-img-wrapper position-relative">
                                    <img loading="lazy" src="<?= base_url('assets/images/services_modules/bike-transportation-services.webp') ?>" class="w-100 img-fluid gallery-img" alt="Two-Wheeler Bike Shifting">
                                    <div class="gallery-hover-overlay position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center opacity-0 gallery-bg-dark-50 gallery-transition-all">
                                        <i class="bi bi-zoom-in text-white gallery-icon-lg"></i>
                                    </div>
                                </div>
                                <div class="card-body p-3">
                                    <span class="badge gallery-bg-success-soft text-success mb-2 gallery-badge-sm">Bike Shifting</span>
                                    <h5 class="fw-bold mb-1 gallery-title-sm">Scratch-Free Two-Wheeler Packing</h5>
                                    <p class="small text-muted mb-0">Secure wheel lock straps and heavy foam sheeting applied to bikes before long-distance transport.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 mb-4">
                            <div class="card border-0 shadow-sm rounded-3 overflow-hidden gallery-photo-card h-100">
                                <div class="gallery-img-wrapper position-relative">
                                    <img loading="lazy" src="<?= base_url('assets/images/services_modules/loading.webp') ?>" class="w-100 img-fluid gallery-img" alt="Cargo Loading Operations">
                                    <div class="gallery-hover-overlay position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center opacity-0 gallery-bg-dark-50 gallery-transition-all">
                                        <i class="bi bi-zoom-in text-white gallery-icon-lg"></i>
                                    </div>
                                </div>
                                <div class="card-body p-3">
                                    <span class="badge gallery-bg-success-soft text-success mb-2 gallery-badge-sm">Cargo Loading</span>
                                    <h5 class="fw-bold mb-1 gallery-title-sm">Organized Goods Stacking &amp; Loading</h5>
                                    <p class="small text-muted mb-0">Professional loaders stacking boxes systematically inside our trucks to ensure stability during transit.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="col-lg-4">
                <?php $this->load->view('about/company_sidebar', ['active_link' => 'photo-gallery']); ?>
            </div>
        </div>
    </div>
</section>

