<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<section class="service-breadcrumbs text-center">
    <div class="container">
        <h1 class="bc-title-main text-uppercase text-white fw-bold">Why Choose Us</h1>
        <div class="bc-divider-wrap d-flex align-items-center justify-content-center gap-3 my-3">
            <span class="bc-divider-line"></span>
            <div class="bc-icon-hexagon">
                <i class="bi bi-hexagon-fill hex-bg"></i>
                <i class="bi bi-patch-check-fill hex-icon"></i>
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
            <span class="bc-current-pill text-white bg-danger font-weight-bold">Why Choose Us</span>
        </div>
    </div>
</section>

<section class="service-details-section mb-5 pb-5">
    <div class="container">
        <div class="row">

            <div class="col-lg-8">
                <div class="service-main-content">

                    <h2 class="service-section-title">The Difference We Make</h2>
                    <div class="about-service-text">
                        <p>
                            Relocation is not just about moving boxes; it's about moving lives, memories, and valuable assets. At <strong><?= $company3 ?></strong>, we are committed to making your transition seamless, safe, and stress-free. Over our 30+ year journey, we have refined our processes to become India's most trusted name in packers and movers.
                        </p>
                        <p>
                            We employ only seasoned packing professionals, utilize superior packing materials, and possess a vast fleet of specialized transport carriers. Our transparent pricing structure and pan-India presence ensure you receive high-quality service at the most reasonable prices, with no hidden surprises.
                        </p>
                    </div>

                    <h2 class="service-section-title mt-5">Our Key Pillars of Trust</h2>
                    <div class="row mt-4">
                        <div class="col-md-6 mb-4">
                            <div class="card h-100 border-0 shadow-sm rounded-3 p-4 bg-light text-center about-choose-transition-hover">
                                <div class="icon-box text-success mb-3 about-icon-box-lg">
                                    <i class="bi bi-shield-lock-fill"></i>
                                </div>
                                <h5 class="fw-bold">100% Safe Shifting</h5>
                                <p class="small text-muted mb-0">
                                    We use heavy-duty multi-layered bubble wraps, customized crates, and premium carton sheets. Your belongings are guarded against impact, moisture, and dust during the entire journey.
                                </p>
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="card h-100 border-0 shadow-sm rounded-3 p-4 bg-light text-center about-choose-transition-hover">
                                <div class="icon-box text-success mb-3 about-icon-box-lg">
                                    <i class="bi bi-truck"></i>
                                </div>
                                <h5 class="fw-bold">Specialized Vehicle Carriers</h5>
                                <p class="small text-muted mb-0">
                                    Our cars and bikes are moved inside covered, enclosed container carriers to ensure they are shielded from road debris, weather, and external damage, providing door-to-door delivery.
                                </p>
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="card h-100 border-0 shadow-sm rounded-3 p-4 bg-light text-center about-choose-transition-hover">
                                <div class="icon-box text-success mb-3 about-icon-box-lg">
                                    <i class="bi bi-tags-fill"></i>
                                </div>
                                <h5 class="fw-bold">Transparent Fair Pricing</h5>
                                <p class="small text-muted mb-0">
                                    No hidden costs. We provide a detailed itemized breakdown of expenses upfront so you know exactly what you are paying for, eliminating any post-move disputes.
                                </p>
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="card h-100 border-0 shadow-sm rounded-3 p-4 bg-light text-center about-choose-transition-hover">
                                <div class="icon-box text-success mb-3 about-icon-box-lg">
                                    <i class="bi bi-clock-history"></i>
                                </div>
                                <h5 class="fw-bold">Punctual &amp; Prompt Delivery</h5>
                                <p class="small text-muted mb-0">
                                    Time is crucial. We carefully map logistics routes, utilize advanced tracking systems, and plan departures to guarantee your items arrive precisely when expected.
                                </p>
                            </div>
                        </div>
                    </div>

                    <h2 class="service-section-title mt-4">Industry Credentials</h2>
                    <div class="about-service-text">
                        <p>
                            <strong><?= $company3 ?></strong> is fully accredited with major relocation and standard certifications. Our logistics team operates on the highest standards of safety guidelines.
                        </p>
                        <ul>
                            <li><strong>ISO Certified Quality Systems</strong>: Complies with strict international standards of service management.</li>
                            <li><strong>IBA Approved Transporters</strong>: Offering official, bank-approved billing and shifting options for corporate and government employee relocations.</li>
                            <li><strong>Full Transit Insurance Options</strong>: Offering peace of mind with complete cargo valuation and swift claim settlements.</li>
                        </ul>
                    </div>

                    <div class="p-4 bg-light border-start border-5 border-success rounded-3 mt-5">
                        <h5 class="fw-bold text-success mb-2">Our Quality Commitment</h5>
                        <p class="mb-0 text-muted small">
                            "We believe that a satisfied client is our greatest advertisement. Every single move receives the absolute dedication of our branch managers, supervisors, packing experts, and customer care executives."
                        </p>
                    </div>

                </div>
            </div>

            <div class="col-lg-4">
                <?php $this->load->view('about/company_sidebar', ['active_link' => 'why-choose-us']); ?>
            </div>
        </div>
    </div>
</section>

