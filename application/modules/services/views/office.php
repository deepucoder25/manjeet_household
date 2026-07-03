<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<?php $this->load->view('template/breadcrumb', array('breadcrumb_title' => 'Office Shifting', 'breadcrumb_icon' => 'bi-briefcase-fill')); ?>

<section class="service-details-section mb-5 pb-5">
    <div class="container">
        <div class="row">

            <div class="col-lg-8">
                <div class="service-main-content">
                    <!-- Hero Image Banner -->
                    <div class="service-details-hero">
                        <img loading="lazy" src="<?= base_url('assets/images/home_modules/office.jpg') ?>" class="service-details-img" alt="Office Shifting Services">
                        <div class="service-details-overlay"></div>
                    </div>

                    <h2 class="service-section-title">Professional Office Shifting</h2>
                    <div class="about-service-text mb-5">
                        <p class="lead">
                            Relocating a business requires absolute planning, organization, and a fast, disciplined crew to minimize operational downtime.
                        </p>
                        <p>
                            At <strong><?= $company3 ?></strong>, we specialize in high-efficiency commercial shifting. We coordinate our schedules around your business hours, performing office relocations overnight or over the weekend to guarantee zero disruption. Large server frameworks, fragile desktop setups, critical filing networks, and board furniture are handled with complete technical safety.
                        </p>
                        <p>
                            We label and map every item to match your new layout blueprint, enabling seamless resume of operations on Monday morning.
                        </p>
                    </div>

                    <!-- Steps Timeline -->
                    <h3 class="service-section-title">Our Office Relocation Steps</h3>
                    <div class="row g-4 mb-5">
                        <div class="col-md-3">
                            <div class="process-step-card h-100">
                                <div class="process-step-number">1</div>
                                <h6 class="fw-bold">Layout Map</h6>
                                <p class="small text-muted mb-0">Planning placement and structural coordinates.</p>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="process-step-card h-100">
                                <div class="process-step-number">2</div>
                                <h6 class="fw-bold">Tag &amp; Pack</h6>
                                <p class="small text-muted mb-0">Labeling systems and wrapping workstations.</p>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="process-step-card h-100">
                                <div class="process-step-number">3</div>
                                <h6 class="fw-bold">Weekend Move</h6>
                                <p class="small text-muted mb-0">Rapid transit to avoid business downtime.</p>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="process-step-card h-100">
                                <div class="process-step-number">4</div>
                                <h6 class="fw-bold">Quick Boot</h6>
                                <p class="small text-muted mb-0">Reassembling desks and setting up IT networks.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Why Choose Us Grid -->
                    <h3 class="service-section-title">Why Relocate With Us</h3>
                    <div class="row g-4 mb-5">
                        <div class="col-md-6">
                            <div class="card p-4 border-0 shadow-sm rounded-4 service-feature-card h-100">
                                <div class="service-icon-wrap">
                                    <i class="bi bi-clock-history"></i>
                                </div>
                                <h5 class="fw-bold text-dark mb-2">Zero Downtime</h5>
                                <p class="small text-muted mb-0">Our night shifts and weekend relocation frameworks mean your team stays operational.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card p-4 border-0 shadow-sm rounded-4 service-feature-card h-100">
                                <div class="service-icon-wrap">
                                    <i class="bi bi-pc-display"></i>
                                </div>
                                <h5 class="fw-bold text-dark mb-2">IT Systems Support</h5>
                                <p class="small text-muted mb-0">Anti-static layering for servers, laptops, networking cables, and heavy printers.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card p-4 border-0 shadow-sm rounded-4 service-feature-card h-100">
                                <div class="service-icon-wrap">
                                    <i class="bi bi-journal-check"></i>
                                </div>
                                <h5 class="fw-bold text-dark mb-2">Item Tagging</h5>
                                <p class="small text-muted mb-0">We color-tag each department desk to match your architectural setup plans on delivery.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card p-4 border-0 shadow-sm rounded-4 service-feature-card h-100">
                                <div class="service-icon-wrap">
                                    <i class="bi bi-shield-check"></i>
                                </div>
                                <h5 class="fw-bold text-dark mb-2">Liability Protected</h5>
                                <p class="small text-muted mb-0">Comprehensive asset transit coverages available for commercial electronic equipment.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Testimonial Slice -->
                    <div class="about-testimonial-wrapper mb-5">
                        <div class="about-testimonial-quote-box shadow-sm">
                            <span class="about-quote-decorator"><i class="bi bi-quote"></i></span>
                            <div class="about-testimonial-stars">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                            </div>
                            <h6 class="fw-bold text-dark mb-2">Excellent Commercial Move!</h6>
                            <p class="small text-muted mb-0">
                                "We moved our entire office of 45 workstations, server room, and conference setup over a single weekend. The team was disciplined, organized, and professional. Monday morning we were up and running without any issue!"
                            </p>
                        </div>
                        <div class="about-testimonial-card-meta">
                            <div class="about-testimonial-avatar">R</div>
                            <div>
                                <h6 class="about-testimonial-author-name">Rajesh Agarwal</h6>
                                <span class="about-testimonial-author-city">Commercial Client</span>
                            </div>
                        </div>
                    </div>

                    <!-- Accordion FAQs -->
                    <h3 class="service-section-title">Frequently Asked Questions</h3>
                    <div class="accordion about-custom-faq-accordion mb-4" id="officeShiftingFaq">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="faqHeading1">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse1" aria-expanded="true" aria-controls="faqCollapse1">
                                    Can you move our office without disrupting operations?
                                </button>
                            </h2>
                            <div id="faqCollapse1" class="accordion-collapse collapse show" aria-labelledby="faqHeading1" data-bs-parent="#officeShiftingFaq">
                                <div class="accordion-body">
                                    Yes. We plan the relocation meticulously and execute during off-hours or weekends to ensure your daily operations are not interrupted.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="faqHeading2">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse2" aria-expanded="false" aria-controls="faqCollapse2">
                                    Do you handle server rooms and IT infrastructure?
                                </button>
                            </h2>
                            <div id="faqCollapse2" class="accordion-collapse collapse" aria-labelledby="faqHeading2" data-bs-parent="#officeShiftingFaq">
                                <div class="accordion-body">
                                    Yes. We have experience safely moving servers, UPS systems, networking equipment, and desktop workstations with proper anti-static packaging.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="faqHeading3">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse3" aria-expanded="false" aria-controls="faqCollapse3">
                                    Do you provide an inventory list of moved items?
                                </button>
                            </h2>
                            <div id="faqCollapse3" class="accordion-collapse collapse" aria-labelledby="faqHeading3" data-bs-parent="#officeShiftingFaq">
                                <div class="accordion-body">
                                    Yes. We prepare a complete labelled inventory before the move and provide you with a checklist after delivery so every item can be verified.
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="col-lg-4">
                <?php $this->load->view('services/service_sidebar', ['active_service' => 'office-shifting']); ?>
            </div>
        </div>
    </div>
</section>
