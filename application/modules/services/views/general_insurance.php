<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<?php $this->load->view('template/breadcrumb', array('breadcrumb_title' => 'General Insurance', 'breadcrumb_icon' => 'bi-shield-check')); ?>

<section class="service-details-section mb-5 pb-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="service-main-content">
                    <!-- Hero Image Banner -->
                    <div class="service-details-hero">
                        <img src="<?= base_url('assets/images/home_modules/testimonial_bg.jpg') ?>" class="service-details-img" alt="General Shifting Insurance">
                        <div class="service-details-overlay"></div>
                    </div>

                    <h2 class="service-section-title">Transit &amp; General Insurance</h2>
                    <div class="about-service-text mb-5">
                        <p class="lead">
                            Relocation involves transporting precious family assets over vast national highways, carrying inherent transit hazards.
                        </p>
                        <p>
                            At <strong><?= $company3 ?></strong>, we prioritize the complete safety of your inventory above all else, which is why we provide comprehensive transit insurance covers for all domestic shifts.
                        </p>
                        <p>
                            Our transit policy protects against accidental damage, highway collisions, fires, water leakage, and unforeseen natural events. We coordinate with you to create transparent asset valuation reports, generating clean and licensed invoices for premium items.
                        </p>
                    </div>

                    <!-- Standards Highlights Cards -->
                    <h3 class="service-section-title">Insurance Policy Benefits</h3>
                    <div class="row g-4 mb-5">
                        <div class="col-md-6">
                            <div class="card p-4 border-0 shadow-sm rounded-4 service-feature-card h-100">
                                <div class="service-icon-wrap">
                                    <i class="bi bi-shield-lock-fill"></i>
                                </div>
                                <h5 class="fw-bold text-dark mb-2">Total Transit Shield</h5>
                                <p class="small text-muted mb-0">Protects your household inventory from any accidental impacts, collision shocks, fires, or water damages.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card p-4 border-0 shadow-sm rounded-4 service-feature-card h-100">
                                <div class="service-icon-wrap">
                                    <i class="bi bi-file-earmark-spreadsheet-fill"></i>
                                </div>
                                <h5 class="fw-bold text-dark mb-2">Itemized Valuations</h5>
                                <p class="small text-muted mb-0">We assist you in building clear, itemized value declarations for high-worth furniture, appliances, and items.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card p-4 border-0 shadow-sm rounded-4 service-feature-card h-100">
                                <div class="service-icon-wrap">
                                    <i class="bi bi-heart-pulse-fill"></i>
                                </div>
                                <h5 class="fw-bold text-dark mb-2">Reputed Partners</h5>
                                <p class="small text-muted mb-0">Collaborated with India's leading national insurance agencies to guarantee secure, licensed coverage policies.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card p-4 border-0 shadow-sm rounded-4 service-feature-card h-100">
                                <div class="service-icon-wrap">
                                    <i class="bi bi-check2-circle"></i>
                                </div>
                                <h5 class="fw-bold text-dark mb-2">Quick Claims</h5>
                                <p class="small text-muted mb-0">Fast-track claim review processes and transparent evaluations to settle balances with zero hurdles.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Steps Timeline -->
                    <h3 class="service-section-title">The Insurance Claim Timeline</h3>
                    <div class="row g-4">
                        <div class="col-md-4">
                            <div class="process-step-card h-100">
                                <div class="process-step-number">1</div>
                                <h6 class="fw-bold">Declare Value</h6>
                                <p class="small text-muted mb-0">Listing items and their estimated market valuation before packing.</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="process-step-card h-100">
                                <div class="process-step-number">2</div>
                                <h6 class="fw-bold">Policy Generate</h6>
                                <p class="small text-muted mb-0">Filing the forms and activating your transit cover certificate.</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="process-step-card h-100">
                                <div class="process-step-number">3</div>
                                <h6 class="fw-bold">Hassle-Free Settlement</h6>
                                <p class="small text-muted mb-0">Filing claim documentation if any transit impact is verified.</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-lg-4">
                <?php $this->load->view('services/service_sidebar', ['active_service' => 'general-insurance']); ?>
            </div>
        </div>
    </div>
</section>
