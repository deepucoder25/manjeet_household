<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<section class="service-breadcrumbs text-center">
    <div class="container">
        <h1 class="bc-title-main text-uppercase text-white fw-bold">Moving Tips</h1>
        <div class="bc-divider-wrap d-flex align-items-center justify-content-center gap-3 my-3">
            <span class="bc-divider-line"></span>
            <div class="bc-icon-hexagon">
                <i class="bi bi-hexagon-fill hex-bg"></i>
                <i class="bi bi-lightbulb hex-icon"></i>
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
            <span class="bc-current-pill text-white bg-danger font-weight-bold">Moving Tips</span>
        </div>
    </div>
</section>

<section class="service-details-section mb-5 pb-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="service-main-content">
                    <h2 class="service-section-title">Essential Tips for a Hassle-Free Relocation</h2>
                    <p class="text-muted mb-4">
                        Relocating to a new home can be overwhelming. Planning ahead and staying organized is the key to a stress-free transition. Our relocation experts at <?= $company3 ?> have compiled these essential tips to help you prepare for a smooth move.
                    </p>

                    <div class="moving-tips-accordion">
                        <div class="faq-card mb-3">
                            <div class="faq-card-header d-flex align-items-center" data-bs-toggle="collapse" data-bs-target="#tip-1" aria-expanded="true" role="button">
                                <i class="bi bi-calendar-check-fill faq-card-icon"></i>
                                <span class="flex-grow-1 fw-bold">1. Start Planning Early (4-6 Weeks Before)</span>
                                <i class="bi bi-plus faq-toggle-icon"></i>
                            </div>
                            <div id="tip-1" class="collapse show">
                                <div class="faq-card-body text-muted">
                                    Don't leave everything to the last week. Begin sorting your belongings, finalizing your move date, and booking trusted packers and movers at least 4 to 6 weeks in advance to ensure slot availability.
                                </div>
                            </div>
                        </div>

                        <div class="faq-card mb-3">
                            <div class="faq-card-header d-flex align-items-center collapsed" data-bs-toggle="collapse" data-bs-target="#tip-2" aria-expanded="false" role="button">
                                <i class="bi bi-trash-fill faq-card-icon"></i>
                                <span class="flex-grow-1 fw-bold">2. Declutter and Sell Unwanted Items</span>
                                <i class="bi bi-plus faq-toggle-icon"></i>
                            </div>
                            <div id="tip-2" class="collapse">
                                <div class="faq-card-body text-muted">
                                    Moving is the perfect time to declutter. Sort through items and discard, donate, or sell things you no longer use. This significantly reduces your moving volume, which lowers your shifting cost.
                                </div>
                            </div>
                        </div>

                        <div class="faq-card mb-3">
                            <div class="faq-card-header d-flex align-items-center collapsed" data-bs-toggle="collapse" data-bs-target="#tip-3" aria-expanded="false" role="button">
                                <i class="bi bi-box-seam-fill faq-card-icon"></i>
                                <span class="flex-grow-1 fw-bold">3. Prepare an "Essential Bag"</span>
                                <i class="bi bi-plus faq-toggle-icon"></i>
                            </div>
                            <div id="tip-3" class="collapse">
                                <div class="faq-card-body text-muted">
                                    Pack a separate bag containing daily essentials such as toiletries, medications, change of clothes, phone chargers, important keys, laptop, and some snacks. Carry this bag yourself during the move.
                                </div>
                            </div>
                        </div>

                        <div class="faq-card mb-3">
                            <div class="faq-card-header d-flex align-items-center collapsed" data-bs-toggle="collapse" data-bs-target="#tip-4" aria-expanded="false" role="button">
                                <i class="bi bi-file-earmark-lock-fill faq-card-icon"></i>
                                <span class="flex-grow-1 fw-bold">4. Keep Important Documents Safe</span>
                                <i class="bi bi-plus faq-toggle-icon"></i>
                            </div>
                            <div id="tip-4" class="collapse">
                                <div class="faq-card-body text-muted">
                                    Never pack cash, jewelry, expensive watches, birth certificates, deeds, or banking papers inside regular moving boxes. Keep them locked in a bag and transport them in your personal custody.
                                </div>
                            </div>
                        </div>

                        <div class="faq-card mb-3">
                            <div class="faq-card-header d-flex align-items-center collapsed" data-bs-toggle="collapse" data-bs-target="#tip-5" aria-expanded="false" role="button">
                                <i class="bi bi-plug-fill faq-card-icon"></i>
                                <span class="flex-grow-1 fw-bold">5. Defrost Fridge & Prepare Appliances</span>
                                <i class="bi bi-plus faq-toggle-icon"></i>
                            </div>
                            <div id="tip-5" class="collapse">
                                <div class="faq-card-body text-muted">
                                    Defrost your refrigerator at least 24 hours before the moving crew arrives. Disconnect wash machines, geysers, and AC units, making sure all water lines are completely drained to prevent leakage during transit.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <?php $this->load->view('about/company_sidebar', ['active_link' => 'moving-tips']); ?>
            </div>
        </div>
    </div>
</section>
