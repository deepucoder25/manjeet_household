<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<?php $this->load->view('template/breadcrumb', array('breadcrumb_title' => 'Why Choose Us', 'breadcrumb_icon' => 'bi-patch-check-fill')); ?>

<section class="service-details-section mb-5 pb-5">
    <div class="container">
        <div class="row">

            <div class="col-lg-8">
                <div class="service-main-content">

                    <h2 class="service-section-title">The Difference We Make</h2>
                    <div class="about-service-text mb-5">
                        <p class="lead">
                            Relocation is not just about moving boxes; it's about moving lives, memories, and valuable assets. At <strong><?= $company3 ?></strong>, we are committed to making your transition seamless, safe, and stress-free.
                        </p>
                        <p>
                            Over our long journey in the relocation industry, we have refined our processes to become India's most trusted name in packers and movers. We employ only seasoned packing professionals, utilize superior packing materials, and possess a vast fleet of specialized transport carriers. Our transparent pricing structure and pan-India presence ensure you receive high-quality service at the most reasonable prices, with no hidden surprises.
                        </p>
                    </div>

                    <h2 class="service-section-title">Our Key Pillars of Trust</h2>
                    <div class="row mt-4 g-4 mb-5">
                        <div class="col-md-6">
                            <div class="card h-100 p-4 border-0 shadow-sm rounded-4 about-card-hover">
                                <div class="about-icon-box-lg">
                                    <i class="bi bi-shield-lock-fill"></i>
                                </div>
                                <h5 class="fw-bold text-dark">100% Safe Shifting</h5>
                                <p class="small text-muted mb-0">
                                    We use heavy-duty multi-layered bubble wraps, customized wooden crates, and premium carton sheets to guard your belongings against impact, moisture, and dust during the entire journey.
                                </p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card h-100 p-4 border-0 shadow-sm rounded-4 about-card-hover">
                                <div class="about-icon-box-lg">
                                    <i class="bi bi-truck"></i>
                                </div>
                                <h5 class="fw-bold text-dark">Specialized Covered Carriers</h5>
                                <p class="small text-muted mb-0">
                                    Our cars and bikes are moved inside enclosed container carriers to ensure they are shielded from road debris, weather, and external damage, providing door-to-door delivery.
                                </p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card h-100 p-4 border-0 shadow-sm rounded-4 about-card-hover">
                                <div class="about-icon-box-lg">
                                    <i class="bi bi-tags-fill"></i>
                                </div>
                                <h5 class="fw-bold text-dark">Transparent Fair Pricing</h5>
                                <p class="small text-muted mb-0">
                                    No hidden costs. We provide a detailed itemized breakdown of expenses upfront so you know exactly what you are paying for, eliminating any post-move disputes.
                                </p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card h-100 p-4 border-0 shadow-sm rounded-4 about-card-hover">
                                <div class="about-icon-box-lg">
                                    <i class="bi bi-clock-history"></i>
                                </div>
                                <h5 class="fw-bold text-dark">Punctual &amp; Prompt Delivery</h5>
                                <p class="small text-muted mb-0">
                                    Time is crucial. We carefully map logistics routes, utilize advanced tracking systems, and plan departures to guarantee your items arrive precisely when expected.
                                </p>
                            </div>
                        </div>
                    </div>

                    <h2 class="service-section-title">Industry Credentials</h2>
                    <div class="about-service-text mb-5">
                        <p>
                            <strong><?= $company3 ?></strong> is fully accredited with major relocation and standard certifications. Our logistics team operates on the highest standards of safety guidelines.
                        </p>
                        <div class="p-3 border rounded-3 bg-light mt-3">
                            <ul class="about-tip-list mb-0">
                                <li><strong>ISO Certified Quality Systems</strong>: Complies with strict international standards of service management.</li>
                                <li><strong>IBA Approved Transporters</strong>: Offering official, bank-approved billing and shifting options for corporate and government relocations.</li>
                                <li><strong>Full Transit Insurance Options</strong>: Offering peace of mind with complete cargo valuation and swift claim settlements.</li>
                            </ul>
                        </div>
                    </div>

                    <div class="p-4 bg-light border-start border-5 border-danger rounded-3">
                        <h5 class="fw-bold text-danger mb-2">Our Quality Commitment</h5>
                        <p class="mb-0 text-muted small italic">
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
