<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<?php $this->load->view('template/breadcrumb', array('breadcrumb_title' => 'Car Transportation', 'breadcrumb_icon' => 'bi-car-front-fill')); ?>

<section class="service-details-section mb-5 pb-5">
    <div class="container">
        <div class="row">

            <div class="col-lg-8">
                <div class="service-main-content">
                    <!-- Hero Image Banner -->
                    <div class="service-details-hero">
                        <img src="<?= base_url('assets/images/home_modules/car.jpg') ?>" class="service-details-img" alt="Car Transportation Services">
                        <div class="service-details-overlay"></div>
                    </div>

                    <h2 class="service-section-title">Car Transportation Excellence</h2>
                    <div class="about-service-text mb-5">
                        <p class="lead">
                            Your luxury sedan, SUV, or family car is one of your most valuable assets. We transport it with absolute security and care.
                        </p>
                        <p>
                            At <strong><?= $company3 ?></strong>, we are a leading auto transport provider in India. We employ specialized open-car carriers and fully enclosed container trucks to move your vehicle without exposing it to road debris, dust, or adverse weather conditions. Our drivers are trained extensively in handling vehicle freight.
                        </p>
                        <p>
                            We offer door-to-door pickup and delivery services. From auditing tire status before loading to securing the wheels with professional chocks, we maintain strict safety checklists.
                        </p>
                    </div>

                    <!-- Steps Timeline -->
                    <h3 class="service-section-title">Our Car Relocation Process</h3>
                    <div class="row g-4 mb-5">
                        <div class="col-md-3">
                            <div class="process-step-card h-100">
                                <div class="process-step-number">1</div>
                                <h6 class="fw-bold">Pre-Move Audit</h6>
                                <p class="small text-muted mb-0">Inspecting engine parameters and noting scratches.</p>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="process-step-card h-100">
                                <div class="process-step-number">2</div>
                                <h6 class="fw-bold">Body Wrapping</h6>
                                <p class="small text-muted mb-0">Padding mirrors and spoiler parts with foam.</p>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="process-step-card h-100">
                                <div class="process-step-number">3</div>
                                <h6 class="fw-bold">Deck Anchor</h6>
                                <p class="small text-muted mb-0">Locking wheels tightly inside the carrier.</p>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="process-step-card h-100">
                                <div class="process-step-number">4</div>
                                <h6 class="fw-bold">Door Delivery</h6>
                                <p class="small text-muted mb-0">Safe unloading at destination coordinates.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Why Choose Us Grid -->
                    <h3 class="service-section-title">Why Choose Us</h3>
                    <div class="row g-4 mb-5">
                        <div class="col-md-6">
                            <div class="card p-4 border-0 shadow-sm rounded-4 service-feature-card h-100">
                                <div class="service-icon-wrap">
                                    <i class="bi bi-shield-fill-check"></i>
                                </div>
                                <h5 class="fw-bold text-dark mb-2">Safety-First Loading</h5>
                                <p class="small text-muted mb-0">Heavy-duty wheel lock straps and safety belt bindings prevent any vehicle sliding inside the deck.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card p-4 border-0 shadow-sm rounded-4 service-feature-card h-100">
                                <div class="service-icon-wrap">
                                    <i class="bi bi-truck-flatbed"></i>
                                </div>
                                <h5 class="fw-bold text-dark mb-2">Modern Carriers</h5>
                                <p class="small text-muted mb-0">Well-maintained double-deck trailers and single-car carriers optimized for interstate transports.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card p-4 border-0 shadow-sm rounded-4 service-feature-card h-100">
                                <div class="service-icon-wrap">
                                    <i class="bi bi-geo-alt-fill"></i>
                                </div>
                                <h5 class="fw-bold text-dark mb-2">GPS Tracking</h5>
                                <p class="small text-muted mb-0">Follow your vehicle's transit movement in real-time with automatic transit reports.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card p-4 border-0 shadow-sm rounded-4 service-feature-card h-100">
                                <div class="service-icon-wrap">
                                    <i class="bi bi-person-fill-check"></i>
                                </div>
                                <h5 class="fw-bold text-dark mb-2">Licensed Staff</h5>
                                <p class="small text-muted mb-0">Experienced commercial trailer operators who understand highway regulations and route safety.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Testimonial Slice -->
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
                            <h6 class="fw-bold text-dark mb-2">Scratchless Vehicle Delivery!</h6>
                            <p class="small text-muted mb-0">
                                "I shipped my Hyundai Creta. The process was super smooth, they updated me every day with transit locations, and the vehicle was delivered scratch-free. Highly recommended!"
                            </p>
                        </div>
                        <div class="about-testimonial-card-meta">
                            <div class="about-testimonial-avatar">P</div>
                            <div>
                                <h6 class="about-testimonial-author-name">Priya Mehta</h6>
                                <span class="about-testimonial-author-city">Car Shifting Client</span>
                            </div>
                        </div>
                    </div>

                    <!-- Accordion FAQs -->
                    <h3 class="service-section-title">Frequently Asked Questions</h3>
                    <div class="accordion about-custom-faq-accordion mb-4" id="carTransportationFaq">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="faqHeading1">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse1" aria-expanded="true" aria-controls="faqCollapse1">
                                    Can I keep personal goods inside the car during transit?
                                </button>
                            </h2>
                            <div id="faqCollapse1" class="accordion-collapse collapse show" aria-labelledby="faqHeading1" data-bs-parent="#carTransportationFaq">
                                <div class="accordion-body">
                                    No. Packing personal items, luggage, or valuables inside the vehicle is strictly prohibited due to transit regulations and weight policies. This also prevents internal items from shifting and causing damage.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="faqHeading2">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse2" aria-expanded="false" aria-controls="faqCollapse2">
                                    How much fuel should be left in the car tank?
                                </button>
                            </h2>
                            <div id="faqCollapse2" class="accordion-collapse collapse" aria-labelledby="faqHeading2" data-bs-parent="#carTransportationFaq">
                                <div class="accordion-body">
                                    We recommend keeping the fuel level at around one-quarter (1/4) of the tank capacity. This is sufficient for driving the car during loading, unloading, and local delivery while minimizing extra weight and hazard risks.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="faqHeading3">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse3" aria-expanded="false" aria-controls="faqCollapse3">
                                    How long does it take to ship a car to another state?
                                </button>
                            </h2>
                            <div id="faqCollapse3" class="accordion-collapse collapse" aria-labelledby="faqHeading3" data-bs-parent="#carTransportationFaq">
                                <div class="accordion-body">
                                    The delivery timeline varies based on distance. Usually, local intercity deliveries take 2-3 days, while long-distance state-to-state relocations can take 5-8 days.
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="col-lg-4">
                <?php $this->load->view('services/service_sidebar', ['active_service' => 'car-transportation']); ?>
            </div>
        </div>
    </div>
</section>
