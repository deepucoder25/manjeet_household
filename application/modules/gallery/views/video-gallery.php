<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<?php $this->load->view('template/breadcrumb', array('breadcrumb_title' => 'Video Gallery', 'breadcrumb_icon' => 'bi-play-btn-fill')); ?>

<section class="service-details-section mb-5 pb-5">
    <div class="container">
        <div class="row">

            <div class="col-lg-8">
                <div class="service-main-content">

                    <h2 class="service-section-title">Relocation Process Videos</h2>
                    <div class="about-service-text mb-4">
                        <p>
                            At <strong><?= $company3 ?></strong>, we maintain complete transparency in our relocation operations. Watch our field videos to see how our trained professionals handle packing, heavy-duty cargo loading, and safe transportation to ensure a worry-free shifting experience.
                        </p>
                    </div>

                    <div class="row">

                        <div class="col-md-6 mb-4">
                            <div class="card h-100 border-0 shadow-sm rounded-3 overflow-hidden gallery-video-card">
                                <div class="ratio ratio-16x9">
                                    <iframe src="https://www.youtube.com/embed/zH0uYvK_3_g" title="Household Shifting &amp; Premium Packing Demo" allowfullscreen class="border-0"></iframe>
                                </div>
                                <div class="card-body p-3">
                                    <span class="badge gallery-bg-success-soft text-success mb-2 gallery-badge-sm">Household Shifting</span>
                                    <h5 class="fw-bold mb-1 gallery-title-sm">Premium Packing &amp; Moving Demo</h5>
                                    <p class="small text-muted mb-0">
                                        Watch our team pack fragile items, electronics, and heavy furniture using multi-layer bubble wrap, foam, and specialized cartons.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 mb-4">
                            <div class="card h-100 border-0 shadow-sm rounded-3 overflow-hidden gallery-video-card">
                                <div class="ratio ratio-16x9">
                                    <iframe src="https://www.youtube.com/embed/5Nco02r6vDk" title="Car Carrier Loading &amp; Safe Transport" allowfullscreen class="border-0"></iframe>
                                </div>
                                <div class="card-body p-3">
                                    <span class="badge gallery-bg-success-soft text-success mb-2 gallery-badge-sm">Vehicle Shifting</span>
                                    <h5 class="fw-bold mb-1 gallery-title-sm">Car Carrier Loading Process</h5>
                                    <p class="small text-muted mb-0">
                                        See how we load passenger vehicles onto our double-deck enclosed car carriers, securing them safely for long-distance transport.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 mb-4">
                            <div class="card h-100 border-0 shadow-sm rounded-3 overflow-hidden gallery-video-card">
                                <div class="ratio ratio-16x9">
                                    <iframe src="https://www.youtube.com/embed/q6C_9eKkH9Q" title="Office Relocation &amp; IT Shifting" allowfullscreen class="border-0"></iframe>
                                </div>
                                <div class="card-body p-3">
                                    <span class="badge gallery-bg-success-soft text-success mb-2 gallery-badge-sm">Office Relocation</span>
                                    <h5 class="fw-bold mb-1 gallery-title-sm">Commercial Office Shifting</h5>
                                    <p class="small text-muted mb-0">
                                        Watch our specialized IT relocations crew package servers, workstations, and office records for minimal downtime.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 mb-4">
                            <div class="card h-100 border-0 shadow-sm rounded-3 overflow-hidden gallery-video-card">
                                <div class="ratio ratio-16x9">
                                    <iframe src="https://www.youtube.com/embed/FwVn02gC21A" title="Warehousing &amp; Self Storage" allowfullscreen class="border-0"></iframe>
                                </div>
                                <div class="card-body p-3">
                                    <span class="badge gallery-bg-success-soft text-success mb-2 gallery-badge-sm">Storage Facility</span>
                                    <h5 class="fw-bold mb-1 gallery-title-sm">Warehouse &amp; Storage Walkthrough</h5>
                                    <p class="small text-muted mb-0">
                                        Take a tour of our clean, moisture-controlled, fire-safe, and 24/7 CCTV-monitored warehouse and storage facilities.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="p-4 bg-light border-start border-5 border-success rounded-3 mt-4">
                        <h5 class="fw-bold text-success mb-2">Our Video Guidelines</h5>
                        <p class="mb-0 text-muted small">
                            All video clips shown are recorded on-site during actual shifting operations. We do not use simulated or stock footage, ensuring that what you see represents the true quality of service you will receive.
                        </p>
                    </div>

                </div>
            </div>

            <div class="col-lg-4">
                <?php $this->load->view('about/company_sidebar', ['active_link' => 'video-gallery']); ?>
            </div>
        </div>
    </div>
</section>

