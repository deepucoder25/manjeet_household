<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<?php $this->load->view('template/breadcrumb', array('breadcrumb_title' => 'Loading & Unloading Service', 'breadcrumb_icon' => 'bi-arrow-down-up')); ?>

<section class="service-details-section mb-5 pb-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="service-main-content">
                    <h2 class="service-section-title">Safe Loading &amp; Unloading Services</h2>
                    <div class="about-service-text">
                        <p>
                            Loading and unloading require strength, skill, and specialized equipment to prevent damages. At <strong><?= $company3 ?></strong>, we employ a highly trained crew that understands the physics of stack weight, balance, and cargo safety during transit.
                        </p>
                        <p>
                            We use modern tools such as hydraulic hand trolleys, heavy lifting straps, sliders, and loading ramps. Heavy home appliances (refrigerators, washing machines) and bulky furniture items are handled with absolute care to ensure scratch-free loading into our containment trucks.
                        </p>
                        <p>
                            Upon arrival, our team unloads your cargo systematically, placing each box and furniture item in their respective designated rooms as directed. Our process guarantees zero damage to your walls, stairs, or doorways during execution.
                        </p>
                    </div>

                    <h2 class="service-section-title mt-5">Our Loading Standards</h2>
                    <ul class="list-unstyled d-flex flex-column gap-2 text-muted">
                        <li><i class="bi bi-check-circle-fill text-danger me-2"></i> Heavy boxes stacked at the bottom, light/fragile boxes on top.</li>
                        <li><i class="bi bi-check-circle-fill text-danger me-2"></i> Complete cargo lashing with heavy ropes inside the container truck.</li>
                        <li><i class="bi bi-check-circle-fill text-danger me-2"></i> Furniture padded and locked against truck walls to prevent shifts.</li>
                        <li><i class="bi bi-check-circle-fill text-danger me-2"></i> Specialized sliders for scratch-free floor-to-truck transition.</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4">
                <?php $this->load->view('services/service_sidebar', ['active_service' => 'loading-unloading']); ?>
            </div>
        </div>
    </div>
</section>
