<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<?php $this->load->view('template/breadcrumb', array('breadcrumb_title' => 'Local Shifting', 'breadcrumb_icon' => 'bi-geo-alt')); ?>

<section class="service-details-section mb-5 pb-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="service-main-content">
                    <!-- Hero Image Banner -->
                    <div class="service-details-hero">
                        <img loading="lazy" src="<?= base_url('assets/images/home_modules/household.jpg') ?>" class="service-details-img" alt="Local Shifting Services">
                        <div class="service-details-overlay"></div>
                    </div>

                    <h2 class="service-section-title">Same-Day Local Shifting</h2>
                    <div class="about-service-text mb-5">
                        <p class="lead">
                            Relocating within the city limits should be rapid, straightforward, and affordable.
                        </p>
                        <p>
                            At <strong><?= $company3 ?></strong>, we specialize in offering same-day local shifting services in Indore, Bhopal, and nearby regions. Our local crew arrives on schedule with a dedicated mini-carrier or container truck optimized to navigate city streets, building properties, and busy traffic routes.
                        </p>
                        <p>
                            We manage everything from packing your daily kitchenware to loading heavy furniture, ensuring the entire process completes in under 6 to 8 hours.
                        </p>
                    </div>

                    <!-- Standards Highlights Cards -->
                    <h3 class="service-section-title">Why Choose Us for Local Shifting</h3>
                    <div class="row g-4 mb-5">
                        <div class="col-md-6">
                            <div class="card p-4 border-0 shadow-sm rounded-4 service-feature-card h-100">
                                <div class="service-icon-wrap">
                                    <i class="bi bi-lightning-charge-fill"></i>
                                </div>
                                <h5 class="fw-bold text-dark mb-2">Same-Day Execution</h5>
                                <p class="small text-muted mb-0">Our packing, loading, transport, and setup processes are executed in a single seamless block.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card p-4 border-0 shadow-sm rounded-4 service-feature-card h-100">
                                <div class="service-icon-wrap">
                                    <i class="bi bi-truck"></i>
                                </div>
                                <h5 class="fw-bold text-dark mb-2">Compact Urban Fleet</h5>
                                <p class="small text-muted mb-0">We use compact container vehicles and mini-trucks designed to easily enter narrow colony lanes and basement parkings.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card p-4 border-0 shadow-sm rounded-4 service-feature-card h-100">
                                <div class="service-icon-wrap">
                                    <i class="bi bi-signpost-split-fill"></i>
                                </div>
                                <h5 class="fw-bold text-dark mb-2">Route Optimization</h5>
                                <p class="small text-muted mb-0">Our drivers are locally experienced and use real-time navigation mapping to bypass peak city congestion zones.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card p-4 border-0 shadow-sm rounded-4 service-feature-card h-100">
                                <div class="service-icon-wrap">
                                    <i class="bi bi-tags-fill"></i>
                                </div>
                                <h5 class="fw-bold text-dark mb-2">Flat Rate Shifting</h5>
                                <p class="small text-muted mb-0">No surprise hourly rates. We offer fixed-price quotes encompassing fuel, loading, and transit costs upfront.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Steps Timeline -->
                    <h3 class="service-section-title">The Local Moving Timeline</h3>
                    <div class="row g-4">
                        <div class="col-md-4">
                            <div class="process-step-card h-100">
                                <div class="process-step-number">1</div>
                                <h6 class="fw-bold">Morning Wrap</h6>
                                <p class="small text-muted mb-0">Quick packing of household goods and furniture disassembling.</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="process-step-card h-100">
                                <div class="process-step-number">2</div>
                                <h6 class="fw-bold">Midday Transit</h6>
                                <p class="small text-muted mb-0">Loading and rapid short-haul transport to your destination.</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="process-step-card h-100">
                                <div class="process-step-number">3</div>
                                <h6 class="fw-bold">Evening Setup</h6>
                                <p class="small text-muted mb-0">Unpacking, furniture positioning, and reassembly.</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-lg-4">
                <?php $this->load->view('services/service_sidebar', ['active_service' => 'local-shifting']); ?>
            </div>
        </div>
    </div>
</section>
