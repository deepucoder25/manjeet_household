<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<?php $this->load->view('template/breadcrumb', array('breadcrumb_title' => 'Industrial Shifting', 'breadcrumb_icon' => 'bi-briefcase')); ?>

<section class="service-details-section mb-5 pb-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="service-main-content">
                    <!-- Hero Image Banner -->
                    <div class="service-details-hero">
                        <img src="<?= base_url('assets/images/home_modules/industrial.jpg') ?>" class="service-details-img" alt="Industrial Shifting Services">
                        <div class="service-details-overlay"></div>
                    </div>

                    <h2 class="service-section-title">Heavy Industrial Shifting</h2>
                    <div class="about-service-text mb-5">
                        <p class="lead">
                            Moving industrial units, factory machinery, and heavy warehousing inventory is a massive project requiring special logistics, planning, and cranes.
                        </p>
                        <p>
                            At <strong><?= $company3 ?></strong>, we have specialized tools and certified crane operators to move heavy machinery safely. We provide comprehensive industrial relocations, including assembly lines, heavy CNC machines, manufacturing tools, laboratory setups, and complete stock reserves.
                        </p>
                        <p>
                            Our heavy transportation fleet includes flatbed trucks, low-bed heavy carriers, and customized trailers designed to transport oversized loads safely over long highway routes.
                        </p>
                    </div>

                    <!-- Standards Highlights Cards -->
                    <h3 class="service-section-title">Industrial Shifting Features</h3>
                    <div class="row g-4 mb-5">
                        <div class="col-md-6">
                            <div class="card p-4 border-0 shadow-sm rounded-4 service-feature-card h-100">
                                <div class="service-icon-wrap">
                                    <i class="bi bi-truck-flatbed"></i>
                                </div>
                                <h5 class="fw-bold text-dark mb-2">Heavy Fleet Carriers</h5>
                                <p class="small text-muted mb-0">Flatbeds, low-bed multi-axle pullers, and containerized structures designed for industrial weights.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card p-4 border-0 shadow-sm rounded-4 service-feature-card h-100">
                                <div class="service-icon-wrap">
                                    <i class="bi bi-shield-check"></i>
                                </div>
                                <h5 class="fw-bold text-dark mb-2">Transit Insurance</h5>
                                <p class="small text-muted mb-0">High-valuation commercial insurance covering heavy machineries, CNC blocks, and raw stocks during moves.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card p-4 border-0 shadow-sm rounded-4 service-feature-card h-100">
                                <div class="service-icon-wrap">
                                    <i class="bi bi-diagram-3"></i>
                                </div>
                                <h5 class="fw-bold text-dark mb-2">Production Scheduling</h5>
                                <p class="small text-muted mb-0">Meticulous phase-by-phase relocation layouts designed to keep factory production downtimes as low as possible.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card p-4 border-0 shadow-sm rounded-4 service-feature-card h-100">
                                <div class="service-icon-wrap">
                                    <i class="bi bi-gear-fill"></i>
                                </div>
                                <h5 class="fw-bold text-dark mb-2">Rigging &amp; Lifting Crane</h5>
                                <p class="small text-muted mb-0">Hydraulic lifters, specialized heavy forklifts, and chain-pulleys operated by certified, insured staff.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Steps Timeline -->
                    <h3 class="service-section-title">The Industrial Shifting Process</h3>
                    <div class="row g-4">
                        <div class="col-md-4">
                            <div class="process-step-card h-100">
                                <div class="process-step-number">1</div>
                                <h6 class="fw-bold">Plant Assessment</h6>
                                <p class="small text-muted mb-0">Measuring dimensions, weights, and load parameters.</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="process-step-card h-100">
                                <div class="process-step-number">2</div>
                                <h6 class="fw-bold">Rigging &amp; Anchor</h6>
                                <p class="small text-muted mb-0">Unbolting machinery, lifting, and locking onto flatbeds.</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="process-step-card h-100">
                                <div class="process-step-number">3</div>
                                <h6 class="fw-bold">Delivery &amp; Re-bolt</h6>
                                <p class="small text-muted mb-0">Unloading and aligning machinery inside the new plant.</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-lg-4">
                <?php $this->load->view('services/service_sidebar', ['active_service' => 'industrial-shifting']); ?>
            </div>
        </div>
    </div>
</section>
