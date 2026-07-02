<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<?php $this->load->view('template/breadcrumb', array('breadcrumb_title' => 'Bike Transportation', 'breadcrumb_icon' => 'bi-bicycle')); ?>

<section class="service-details-section mb-5 pb-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="service-main-content">
                    <h2 class="service-section-title">Secure two-wheeler &amp; Bike Transportation Services</h2>
                    <div class="about-service-text">
                        <p>
                            Your motorcycle is one of your most prized assets. At <strong><?= $company3 ?></strong>, we specialize in offering safe, scratch-free, and timely bike shifting services across Indore, Bhopal, and the rest of India.
                        </p>
                        <p>
                            We treat every bike with utmost care. Before loading, we bubble wrap the mirrors, indicators, handles, and exhaust to shield them from scratches. The bike is then loaded onto specialized enclosed auto-carriers or secure wooden crates.
                        </p>
                        <p>
                            Once loaded into our container carriers, each bike is firmly locked using wheel chocks and safety straps, preventing any lateral movement or tipping over during transit on the highway.
                        </p>
                    </div>

                    <h2 class="service-section-title mt-5">Our Shifting Features</h2>
                    <ul class="list-unstyled d-flex flex-column gap-2 text-muted">
                        <li><i class="bi bi-check-circle-fill text-danger me-2"></i> Custom bubble wrap padding for delicate components.</li>
                        <li><i class="bi bi-check-circle-fill text-danger me-2"></i> Firm anchoring with wheel chocks and heavy lashing straps.</li>
                        <li><i class="bi bi-check-circle-fill text-danger me-2"></i> Transported via specialized closed car/bike carriers.</li>
                        <li><i class="bi bi-check-circle-fill text-danger me-2"></i> Real-time transit updates and complete transit insurance.</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4">
                <?php $this->load->view('services/service_sidebar', ['active_service' => 'bike-transportation']); ?>
            </div>
        </div>
    </div>
</section>
