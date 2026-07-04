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
                                    Are you just involved in shifting households?
                                </button>
                            </h2>
                            <div id="faq-collapse-1" class="accordion-collapse collapse show" aria-labelledby="faq-heading-1" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                   No. In addition to household shifting, we offer shifting of offices, cars and motorcycles transportation, packing, loading, unloading, storage, and long distance shifting all across India.
                                </div>
                            </div>
                        </div>

                        <!-- Item 2 -->
                        <div class="accordion-item shadow-sm">
                            <h2 class="accordion-header" id="faq-heading-2">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-collapse-2" aria-expanded="false" aria-controls="faq-collapse-2">
                                   Will you do the packing for me?
                                </button>
                            </h2>
                            <div id="faq-collapse-2" class="accordion-collapse collapse" aria-labelledby="faq-heading-2" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                  Yes. All the required packing material is carried by our staff to pack your furniture, appliances, kitchen wares and other things prior to the loading process.
                                </div>
                            </div>
                        </div>

                        <!-- Item 3 -->
                        <div class="accordion-item shadow-sm">
                            <h2 class="accordion-header" id="faq-heading-3">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-collapse-3" aria-expanded="false" aria-controls="faq-collapse-3">
                                   Is my furniture going to be safe during the shifting process?
                                </button>
                            </h2>
                            <div id="faq-collapse-3" class="accordion-collapse collapse" aria-labelledby="faq-heading-3" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                  Yes, safety of your goods is our primary concern. Your items will be packed in the right way and handled with due care during the entire transportation period to minimize the risk of any kind of damage.
                                </div>
                            </div>
                        </div>

                        <!-- Item 4 -->
                        <div class="accordion-item shadow-sm">
                            <h2 class="accordion-header" id="faq-heading-4">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-collapse-4" aria-expanded="false" aria-controls="faq-collapse-4">
                                    Do you do local and outstation shifting?
                                </button>
                            </h2>
                            <div id="faq-collapse-4" class="accordion-collapse collapse" aria-labelledby="faq-heading-4" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Yes. You can rely on us for doing your local shifting as well as outstation shifting from one city to another in India.
                                </div>
                            </div>
                        </div>

                        <!-- Item 5 -->
                        <div class="accordion-item shadow-sm">
                            <h2 class="accordion-header" id="faq-heading-5">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-collapse-5" aria-expanded="false" aria-controls="faq-collapse-5">
                                    Do you transport cars and bikes?
                                </button>
                            </h2>
                            <div id="faq-collapse-5" class="accordion-collapse collapse" aria-labelledby="faq-heading-5" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                   Yes, our staff provides you with a dedicated transportation service for shifting of cars or motorcycles.
                                </div>
                            </div>
                        </div>

                        <!-- Item 6 -->
                        <div class="accordion-item shadow-sm">
                            <h2 class="accordion-header" id="faq-heading-6">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-collapse-6" aria-expanded="false" aria-controls="faq-collapse-6">
                                    Is transit insurance provided?
                                </button>
                            </h2>
                            <div id="faq-collapse-6" class="accordion-collapse collapse" aria-labelledby="faq-heading-6" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Yes. In case of requirement, we can help you arrange a transit insurance for your goods.
                                </div>
                            </div>
                        </div>

                        <!-- Item 7 -->
                        <div class="accordion-item shadow-sm">
                            <h2 class="accordion-header" id="faq-heading-7">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-collapse-7" aria-expanded="false" aria-controls="faq-collapse-7">
                                    When should I book my shift?
                                </button>
                            </h2>
                            <div id="faq-collapse-7" class="accordion-collapse collapse" aria-labelledby="faq-heading-7" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    The earlier the better. A few days ahead is fine enough so that we can make a plan for your shift and book your desired date.
                                </div>
                            </div>
                        </div>

                        <!-- Item 8 -->
                        <div class="accordion-item shadow-sm">
                            <h2 class="accordion-header" id="faq-heading-8">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-collapse-8" aria-expanded="false" aria-controls="faq-collapse-8">
                                   Why should I opt for <?= $company3 ?>?
                                </button>
                            </h2>
                            <div id="faq-collapse-8" class="accordion-collapse collapse" aria-labelledby="faq-heading-8" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    We consider that quality services start with a proper planning, fair pricing and true care of your belongings.
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
