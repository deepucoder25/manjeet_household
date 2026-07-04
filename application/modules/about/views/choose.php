<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<?php $this->load->view('template/breadcrumb', array('breadcrumb_title' => 'Why Choose Us', 'breadcrumb_icon' => 'bi-patch-check-fill')); ?>

<section class="service-details-section mb-5 pb-5">
    <div class="container">
        <div class="row">

            <div class="col-lg-8">
                <div class="service-main-content">

                    <h2 class="service-section-title">Why Choose <?= $company3 ?></h2>
                        <p>
                            Choosing a moving firm does not involve selecting some vehicle and staff alone. The selection should be made by considering those aspects that ensure that everything will be handled professionally and responsibly. The <strong><?= $company3 ?></strong> is a reliable and trusted choice because we have a great team that guarantees all relocations of your belongings are done in accordance with the highest industry standards.
                        </p>

                    <h2 class="service-section-title">Our Key Pillars of Trust</h2>
                    <div class="row mt-4 g-4 mb-5">
                        <div class="col-md-6">
                            <div class="card h-100 p-4 border-0 shadow-sm rounded-4 about-card-hover">
                                <div class="about-icon-box-lg">
                                    <i class="bi bi-shield-check"></i>
                                </div>
                                <h5 class="fw-bold text-dark">Experience of Our Professional Team</h5>
                                <p class="text-muted mb-0">
                                   The team of trained movers has practical skills and the knowledge that helps them plan the relocations carefully and efficiently. Each of the moving workers knows how to transport household goods, office equipment, fragile items, heavy furniture, cars, and other belongings properly.
                                </p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card h-100 p-4 border-0 shadow-sm rounded-4 about-card-hover">
                                <div class="about-icon-box-lg">
                                    <i class="bi bi-box-seam"></i>
                                </div>
                                <h5 class="fw-bold text-dark">Careful Packaging of Your Belongings</h5>
                                <p class="text-muted mb-0">
                                  All relocations are safe only when the belongings are transported safely. We pack each item before loading it using appropriate packaging material, including corrugated boxes, bubble wrap, foam sheets, stretch film, packing paper, and tape.
                                </p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card h-100 p-4 border-0 shadow-sm rounded-4 about-card-hover">
                                <div class="about-icon-box-lg">
                                    <i class="bi bi-calculator"></i>
                                </div>
                                <h5 class="fw-bold text-dark">Complete Transparency of Prices</h5>
                                <p class="text-muted mb-0">
                                   It is difficult to tolerate hidden charges when one books some services. At <b><?= $company3 ?></b> you will not face any unpleasant surprises because the pricing is fully transparent. Before making a quotation, we inform you about the price of the service in detail.
                                </p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card h-100 p-4 border-0 shadow-sm rounded-4 about-card-hover">
                                <div class="about-icon-box-lg">
                                    <i class="bi bi-map"></i>
                                </div>
                                <h5 class="fw-bold text-dark">Safe Transporting</h5>
                                <p class="text-muted mb-0">
                                   The transport planning involves the selection of the safest routes and vehicles. The belongings are delivered punctually and timely. We do our best to provide our customers with punctual deliveries of the belongings.
                                </p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card h-100 p-4 border-0 shadow-sm rounded-4 about-card-hover">
                                <div class="about-icon-box-lg">
                                    <i class="bi bi-list"></i>
                                </div>
                                <h5 class="fw-bold text-dark">Individual Moving Plans</h5>
                                <p class="text-muted mb-0">
                                   All clients have various needs related to their relocations. Some customers require professional packing and unpacking, some only need transportation and loading. We analyze your requirements and give recommendations regarding moving plans.
                                </p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card h-100 p-4 border-0 shadow-sm rounded-4 about-card-hover">
                                <div class="about-icon-box-lg">
                                    <i class="bi bi-headset"></i>
                                </div>
                                <h5 class="fw-bold text-dark">Customer Service</h5>
                                <p class="text-muted mb-0">
                                  Any relocation requires the cooperation of a customer with a mover. The contact of a moving company and its client should not be interrupted during the process of relocation of belongings. Good communication makes the moving experience pleasant.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="p-4 bg-light border-start border-5 border-danger rounded-3">
                        <h5 class="fw-bold text-danger mb-2">Our Guarantee</h5>
                        <p class="mb-0 text-muted">
                            "We believe that a moving company does not earn the trust due to the advertising of its services. The trust of our customers is earned when we carry out our activities responsibly and professionally. Every relocation allows providing our high-quality services."
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
