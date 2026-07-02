<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<?php $this->load->view('template/breadcrumb', array('breadcrumb_title' => 'General Insurance', 'breadcrumb_icon' => 'bi-shield-check')); ?>

<section class="service-details-section mb-5 pb-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="service-main-content">
                    <h2 class="service-section-title">Comprehensive Transit &amp; General Insurance</h2>
                    <div class="about-service-text">
                        <p>
                            Relocation involves moving valuable belongings over long distances, which carries inherent transit risks. At <strong><?= $company3 ?></strong>, we prioritize the safety of your goods above all else, which is why we offer comprehensive transit insurance cover for all domestic shifting services.
                        </p>
                        <p>
                            Our transit insurance covers accidental damages, fires, collisions, road hazards, and unforeseen natural events during transportation. We assist you with complete documentation, asset valuation, and invoice generation, making sure every item is accounted for.
                        </p>
                        <p>
                            In case of any damage, our claim settlement process is fast, transparent, and hassle-free. We work with leading national insurance partners to ensure your claims are approved and processed quickly, offering complete peace of mind.
                        </p>
                    </div>

                    <h2 class="service-section-title mt-5">Our Insurance Benefits</h2>
                    <ul class="list-unstyled d-flex flex-column gap-2 text-muted">
                        <li><i class="bi bi-check-circle-fill text-danger me-2"></i> Comprehensive protection against transit collision and road hazards.</li>
                        <li><i class="bi bi-check-circle-fill text-danger me-2"></i> Easy valuation sheets for appliances and high-value furniture.</li>
                        <li><i class="bi bi-check-circle-fill text-danger me-2"></i> Collaborations with leading national transit insurance providers.</li>
                        <li><i class="bi bi-check-circle-fill text-danger me-2"></i> Quick claim processing and transparent settlement evaluations.</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4">
                <?php $this->load->view('services/service_sidebar', ['active_service' => 'general-insurance']); ?>
            </div>
        </div>
    </div>
</section>
