<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<?php $this->load->view('template/breadcrumb', array('breadcrumb_title' => 'Household Shifting', 'breadcrumb_icon' => 'bi-house-heart-fill')); ?>

<section class="service-details-section mb-5 pb-5">
    <div class="container">
        <div class="row">

            <div class="col-lg-8">
                <div class="service-main-content">
                    <!-- Hero Image Banner -->
                    <div class="service-details-hero">
                        <img src="<?= base_url('assets/images/home_modules/household.jpg') ?>" class="service-details-img" alt="Household Shifting Services">
                        <div class="service-details-overlay"></div>
                    </div>

                    <h2 class="service-section-title">Hassle-Free Household Shifting</h2>
                    <div class="about-service-text mb-5">
                        <p class="lead">
                            Relocating your home is a major milestone, and at <strong><?= $company3 ?></strong>, we make it completely stress-free.
                        </p>
                        <p>
                            We offer door-to-door shifting solutions tailored in response to your requirements. From disassembling double beds and heavy wardrobes to packing fragile crockery in customized safety sheets, our skilled crew manages everything. We utilize secure container trucks to protect your inventory during long-distance highway hauls.
                        </p>
                        <p>
                            Additionally, we provide live GPS updates so you remain informed during transit, delivering complete peace of mind.
                        </p>
                    </div>

                    <!-- Steps Timeline -->
                    <h3 class="service-section-title">Our Household Shifting Process</h3>
                    <div class="row g-4 mb-5">
                        <div class="col-md-3">
                            <div class="process-step-card h-100">
                                <div class="process-step-number">1</div>
                                <h6 class="fw-bold">Survey &amp; Plan</h6>
                                <p class="small text-muted mb-0">Assessing volume and mapping the logistics.</p>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="process-step-card h-100">
                                <div class="process-step-number">2</div>
                                <h6 class="fw-bold">Dismantle &amp; Wrap</h6>
                                <p class="small text-muted mb-0">Securing furniture and packing items.</p>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="process-step-card h-100">
                                <div class="process-step-number">3</div>
                                <h6 class="fw-bold">Safe Highway Transit</h6>
                                <p class="small text-muted mb-0">GPS-tracked container transport.</p>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="process-step-card h-100">
                                <div class="process-step-number">4</div>
                                <h6 class="fw-bold">Unload &amp; Setup</h6>
                                <p class="small text-muted mb-0">Reassembling beds and tables on-site.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Why Choose Us Grid -->
                    <h3 class="service-section-title">Why Choose Us</h3>
                    <div class="row g-4 mb-5">
                        <div class="col-md-6">
                            <div class="card p-4 border-0 shadow-sm rounded-4 service-feature-card h-100">
                                <div class="service-icon-wrap">
                                    <i class="bi bi-box-seam-fill"></i>
                                </div>
                                <h5 class="fw-bold text-dark mb-2">Premium Packing</h5>
                                <p class="small text-muted mb-0">We use high-grade double bubble sheets, robust foam blocks, and customized card cartons.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card p-4 border-0 shadow-sm rounded-4 service-feature-card h-100">
                                <div class="service-icon-wrap">
                                    <i class="bi bi-tools"></i>
                                </div>
                                <h5 class="fw-bold text-dark mb-2">Furniture Reassembly</h5>
                                <p class="small text-muted mb-0">Expert dismantling and clean setup of large wardrobes, double beds, and dining sets.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card p-4 border-0 shadow-sm rounded-4 service-feature-card h-100">
                                <div class="service-icon-wrap">
                                    <i class="bi bi-people-fill"></i>
                                </div>
                                <h5 class="fw-bold text-dark mb-2">Trained Movers</h5>
                                <p class="small text-muted mb-0">Polite, background-verified professionals who handle your possessions with caution.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card p-4 border-0 shadow-sm rounded-4 service-feature-card h-100">
                                <div class="service-icon-wrap">
                                    <i class="bi bi-cash-stack"></i>
                                </div>
                                <h5 class="fw-bold text-dark mb-2">No Hidden Charges</h5>
                                <p class="small text-muted mb-0">Completely transparent shifting bills covering packaging, tolls, and loading costs upfront.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Custom Slice Testimonial -->
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
                            <h6 class="fw-bold text-dark mb-2">Flawless Shifting!</h6>
                            <p class="small text-muted mb-0">
                                "Excellent service! I relocated my household items locally. The crew packed everything with double layers of bubble wrap. Nothing got damaged, and they reassembled our bed perfectly. Highly recommended!"
                            </p>
                        </div>
                        <div class="about-testimonial-card-meta">
                            <div class="about-testimonial-avatar">S</div>
                            <div>
                                <h6 class="about-testimonial-author-name">Sneha Roy</h6>
                                <span class="about-testimonial-author-city">Household Shifting Client</span>
                            </div>
                        </div>
                    </div>

                    <!-- Accordion FAQs -->
                    <h3 class="service-section-title">Frequently Asked Questions</h3>
                    <div class="accordion about-custom-faq-accordion mb-4" id="homeShiftingFaq">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="faqHeading1">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse1" aria-expanded="true" aria-controls="faqCollapse1">
                                    Do you dismantle and reassemble double beds and wardrobes?
                                </button>
                            </h2>
                            <div id="faqCollapse1" class="accordion-collapse collapse show" aria-labelledby="faqHeading1" data-bs-parent="#homeShiftingFaq">
                                <div class="accordion-body">
                                    Yes. Our packing crew is equipped with the necessary tools (screwdrivers, wrenches, hammers) to carefully disassemble large beds, wardrobes, and tables, and reassemble them at your new home.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="faqHeading2">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse2" aria-expanded="false" aria-controls="faqCollapse2">
                                    What items are NOT packed or transported?
                                </button>
                            </h2>
                            <div id="faqCollapse2" class="accordion-collapse collapse" aria-labelledby="faqHeading2" data-bs-parent="#homeShiftingFaq">
                                <div class="accordion-body">
                                    For safety and legal reasons, we do not transport hazardous materials, cylinders, gasoline, paint thinners, fireworks, jewelry, gold, cash, or important personal deeds and legal documents.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="faqHeading3">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse3" aria-expanded="false" aria-controls="faqCollapse3">
                                    Do you offer packing-only or loading-only services?
                                </button>
                            </h2>
                            <div id="faqCollapse3" class="accordion-collapse collapse" aria-labelledby="faqHeading3" data-bs-parent="#homeShiftingFaq">
                                <div class="accordion-body">
                                    We offer complete, end-to-end relocation packages (packing, loading, transport, unloading, unpacking) to ensure safety. However, we can customize a plan based on your request.
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="col-lg-4">
                <?php $this->load->view('services/service_sidebar', ['active_service' => 'home-shifting']); ?>
            </div>
        </div>
    </div>
</section>
