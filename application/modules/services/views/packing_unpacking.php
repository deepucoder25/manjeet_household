<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<?php $this->load->view('template/breadcrumb', array('breadcrumb_title' => 'Packing & Unpacking Service', 'breadcrumb_icon' => 'bi-box')); ?>

<section class="service-details-section mb-5 pb-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="service-main-content">
                    <!-- Hero Image Banner -->
                    <div class="service-details-hero">
                        <img src="<?= base_url('assets/images/home_modules/packing.jpg') ?>" class="service-details-img" alt="Packing and Unpacking Services">
                        <div class="service-details-overlay"></div>
                    </div>

                    <h2 class="service-section-title">Premium Packing &amp; Unpacking Services</h2>
                    <div class="about-service-text mb-5">
                        <p class="lead">
                            At <strong><?= $company3 ?></strong>, we believe that high-quality packing is the absolute foundation of any successful relocation.
                        </p>
                        <p>
                            Our professional packing crew ensures that your household belongings, delicate electronics, fine glassware, and heavy assets are wrapped and protected with absolute precision. We utilize a multi-layered packing standard, including premium air-bubble wraps, waterproof corrugated sheets, heavy-duty cartons, stretch wrap, and thermocol padding.
                        </p>
                        <p>
                            Once we reach your destination, our trained crew executes structured unpacking services. We unpack every item carefully, help arrange your furniture, and clear away all empty packaging debris so you can settle into your new home instantly.
                        </p>
                    </div>

                    <!-- Material Highlights Cards -->
                    <h3 class="service-section-title">Our Packaging Standards</h3>
                    <div class="row g-4 mb-5">
                        <div class="col-md-6">
                            <div class="card p-4 border-0 shadow-sm rounded-4 service-feature-card h-100">
                                <div class="service-icon-wrap">
                                    <i class="bi bi-box-seam"></i>
                                </div>
                                <h5 class="fw-bold text-dark mb-2">Heavy-Duty Cartons</h5>
                                <p class="small text-muted mb-0">We use robust 5-ply corrugated cardboard boxes for heavy items like books, pantry goods, and kitchenware to prevent box sagging or collapse.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card p-4 border-0 shadow-sm rounded-4 service-feature-card h-100">
                                <div class="service-icon-wrap">
                                    <i class="bi bi-shield-check"></i>
                                </div>
                                <h5 class="fw-bold text-dark mb-2">Anti-Static Bubble Wrap</h5>
                                <p class="small text-muted mb-0">Delicate electronics, computer components, crystal glassware, and heritage pottery are layered in shock-absorbent anti-static bubbles.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card p-4 border-0 shadow-sm rounded-4 service-feature-card h-100">
                                <div class="service-icon-wrap">
                                    <i class="bi bi-layers"></i>
                                </div>
                                <h5 class="fw-bold text-dark mb-2">Stretch Wrap Protection</h5>
                                <p class="small text-muted mb-0">Couches, mattresses, and fabric-upholstered furniture are wrapped in clear stretch film to guard against dust, grime, and dampness.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card p-4 border-0 shadow-sm rounded-4 service-feature-card h-100">
                                <div class="service-icon-wrap">
                                    <i class="bi bi-cloud-rain"></i>
                                </div>
                                <h5 class="fw-bold text-dark mb-2">Waterproof Lamination</h5>
                                <p class="small text-muted mb-0">Laminated plastic film coatings are applied during monsoon moves to guarantee rain and humidity do not impact cardboard boxes.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Steps Timeline -->
                    <h3 class="service-section-title">The Shifting Process</h3>
                    <div class="row g-4">
                        <div class="col-md-4">
                            <div class="process-step-card h-100">
                                <div class="process-step-number">1</div>
                                <h6 class="fw-bold">Sorting &amp; Tagging</h6>
                                <p class="small text-muted mb-0">Categorizing goods by room and labeling fragile items.</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="process-step-card h-100">
                                <div class="process-step-number">2</div>
                                <h6 class="fw-bold">Premium Wrap</h6>
                                <p class="small text-muted mb-0">Applying customized bubble and carton sheets layers.</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="process-step-card h-100">
                                <div class="process-step-number">3</div>
                                <h6 class="fw-bold">Careful Unpack</h6>
                                <p class="small text-muted mb-0">Unwrapping and settling your items at the destination.</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-lg-4">
                <?php $this->load->view('services/service_sidebar', ['active_service' => 'packing-unpacking']); ?>
            </div>
        </div>
    </div>
</section>
