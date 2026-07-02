<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<?php $this->load->view('template/breadcrumb', array('breadcrumb_title' => 'FAQ\'s', 'breadcrumb_icon' => 'bi-question-circle', 'breadcrumb_current' => 'Frequently Asked Questions')); ?>

<section class="service-details-section mb-5 pb-5">
    <div class="container">
        <div class="row">

            <div class="col-lg-8">
                <div class="service-main-content">

                    <h2 class="service-section-title">Answers to Common Shifting Queries</h2>
                    <div class="about-service-text mb-4">
                        <p>
                            Shifting your home or vehicle can feel overwhelming, and it's completely normal to have questions about safety, packaging, timelines, and insurance. Here are answers to the questions we are asked most frequently by our clients.
                        </p>
                    </div>

                    <div class="accordion accordion-flush about-custom-faq-accordion" id="faqAccordion">

                        <!-- Item 1 -->
                        <div class="accordion-item shadow-sm">
                            <h2 class="accordion-header" id="faq-heading-1">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq-collapse-1" aria-expanded="true" aria-controls="faq-collapse-1">
                                    What services does <?= $company3 ?> provide?
                                </button>
                            </h2>
                            <div id="faq-collapse-1" class="accordion-collapse collapse show" aria-labelledby="faq-heading-1" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    We offer complete, end-to-end relocation services across India including household shifting, office relocation, vehicle (car/bike) carrier transport, warehouse storage, domestic shifting, corporate movements, international relocations, and pet relocations.
                                </div>
                            </div>
                        </div>

                        <!-- Item 2 -->
                        <div class="accordion-item shadow-sm">
                            <h2 class="accordion-header" id="faq-heading-2">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-collapse-2" aria-expanded="false" aria-controls="faq-collapse-2">
                                    How are the packing and moving charges calculated?
                                </button>
                            </h2>
                            <div id="faq-collapse-2" class="accordion-collapse collapse" aria-labelledby="faq-heading-2" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Relocation costs depend on several key factors: the total volume of goods, the amount of packing material needed (e.g. bubble wraps, boxes, custom wooden crates), travel distance, the floor levels of the locations, access to lifts, and additional options like warehousing or transit insurance.
                                </div>
                            </div>
                        </div>

                        <!-- Item 3 -->
                        <div class="accordion-item shadow-sm">
                            <h2 class="accordion-header" id="faq-heading-3">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-collapse-3" aria-expanded="false" aria-controls="faq-collapse-3">
                                    Do you provide insurance for my household goods during transit?
                                </button>
                            </h2>
                            <div id="faq-collapse-3" class="accordion-collapse collapse" aria-labelledby="faq-heading-3" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Yes, we provide full transit insurance options. We strongly advise taking transit insurance as it covers financial liability for any damage arising due to unexpected road conditions, weather events, or traffic accidents. Our customer service team handles claims smoothly and quickly.
                                </div>
                            </div>
                        </div>

                        <!-- Item 4 -->
                        <div class="accordion-item shadow-sm">
                            <h2 class="accordion-header" id="faq-heading-4">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-collapse-4" aria-expanded="false" aria-controls="faq-collapse-4">
                                    How much time will it take to relocate my goods?
                                </button>
                            </h2>
                            <div id="faq-collapse-4" class="accordion-collapse collapse" aria-labelledby="faq-heading-4" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Local shifting within a city is usually completed in a single day (typically taking 4 to 8 hours depending on size). For intercity shifting, transit times depend on the distance, route conditions, and checkpoint regulations, usually ranging between 2 to 7 business days.
                                </div>
                            </div>
                        </div>

                        <!-- Item 5 -->
                        <div class="accordion-item shadow-sm">
                            <h2 class="accordion-header" id="faq-heading-5">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-collapse-5" aria-expanded="false" aria-controls="faq-collapse-5">
                                    Can I track my shipment during transit?
                                </button>
                            </h2>
                            <div id="faq-collapse-5" class="accordion-collapse collapse" aria-labelledby="faq-heading-5" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Yes. We supply tracking options and maintain a dedicated support desk. The branch manager coordinating your shifting will remain in direct contact to provide regular status updates on where the vehicle is and its estimated arrival time.
                                </div>
                            </div>
                        </div>

                        <!-- Item 6 -->
                        <div class="accordion-item shadow-sm">
                            <h2 class="accordion-header" id="faq-heading-6">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-collapse-6" aria-expanded="false" aria-controls="faq-collapse-6">
                                    What items are restricted or not loaded for transit?
                                </button>
                            </h2>
                            <div id="faq-collapse-6" class="accordion-collapse collapse" aria-labelledby="faq-heading-6" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    For safety reasons, we do not transport hazardous materials, inflammable substances (gas cylinders, fuel), contraband, perishables, jewelry, cash, and highly valuable documents. We advise clients to carry jewelry, cash, and documents personally.
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>

            <div class="col-lg-4">
                <?php $this->load->view('about/company_sidebar', ['active_link' => 'faqs']); ?>
            </div>
        </div>
    </div>
</section>
