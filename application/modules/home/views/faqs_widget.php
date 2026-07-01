<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

$faqs = [
    [
        'question' => '1. What cities do you cover for relocation?',
        'answer' => 'We provide complete packaging and moving services across all major cities in India, with dedicated corporate offices in Indore and Bhopal, Madhya Pradesh.',
        'icon' => 'bi-geo-alt'
    ],
    [
        'question' => '2. How do you calculate the moving charges?',
        'answer' => 'Our pricing is determined by the total volume of goods, type of packaging material required, distance between locations, and specific transit insurance choices.',
        'icon' => 'bi-cash-coin'
    ],
    [
        'question' => '3. Do you provide transit insurance for household goods?',
        'answer' => 'Yes, we offer comprehensive transit insurance coverage to protect your valuable household goods and electronics against any unforeseen damage during transit.',
        'icon' => 'bi-shield-check'
    ],
    [
        'question' => '4. What packing materials do you use for delicate items?',
        'answer' => 'We use premium multi-layered packing including high-density bubble wraps, corrugated cartons, foam sheets, waterproof stretch wraps, and custom wooden crates for fragile goods.',
        'icon' => 'bi-box-seam'
    ],
    [
        'question' => '5. How much time will it take to relocate my goods?',
        'answer' => 'Local shifting within Indore or Bhopal is completed within 24 hours. Domestic long-distance moves take between 3 to 7 days depending on the travel distance.',
        'icon' => 'bi-clock'
    ],
    [
        'question' => '6. Can I move my car or bike along with my household items?',
        'answer' => 'Yes, we specialize in vehicle logistics. We transport cars and bikes safely across India using customized open or closed carrier trucks with hydraulic lifts.',
        'icon' => 'bi-truck'
    ],
    [
        'question' => '7. Are there any items that cannot be loaded on the truck?',
        'answer' => 'For safety reasons, we do not transport hazardous materials, inflammable liquids, gas cylinders, fireworks, perishable food, plants, cash, jewellery, or critical documents.',
        'icon' => 'bi-exclamation-triangle'
    ],
    [
        'question' => '8. Is there a charge for getting an on-site moving survey?',
        'answer' => 'No, we provide a 100% free, no-obligation on-site or virtual survey to accurately assess your volume of goods and give you a detailed quotation.',
        'icon' => 'bi-clipboard-check'
    ]
];
?>

<section class="faq-section py-5">
    <div class="faq-decor decor-top-left"></div>
    <div class="faq-decor decor-bottom-right"></div>

    <div class="container position-relative about-z2">
        
        <!-- Section Header -->
        <div class="services-header-new text-center mb-5">
          <div class="services-pill-badge d-inline-flex align-items-center gap-2 mb-3">
            <span class="pill-line"></span>
            <span class="pill-text text-danger fw-bold">FAQ</span>
            <span class="pill-line"></span>
          </div>
          <h2 class="services-main-title fw-bold text-dark">
            FREQUENTLY ASKED <span class="text-danger position-relative d-inline-block">QUESTIONS<span class="title-accent-line-new"></span></span>
          </h2>
          <p class="services-subtitle text-muted mx-auto mt-3">
            Find answers to common questions about our moving and transportation services.
          </p>
        </div>

        <!-- Accordion Grid -->
        <div class="row g-3 align-items-start" id="faq-accordion-group">
            <?php foreach ($faqs as $index => $faq): ?>
                <div class="col-lg-6 col-12">
                    <div class="faq-card">
                        <div class="faq-card-header collapsed" 
                             data-bs-toggle="collapse" 
                             data-bs-target="#faq-collapse-<?= $index ?>" 
                             aria-expanded="false" 
                             role="button">
                            
                            <div class="faq-icon-wrap d-flex align-items-center justify-content-center">
                                <i class="bi <?= $faq['icon'] ?> faq-card-icon"></i>
                            </div>
                            
                            <div class="faq-question-wrap flex-grow-1">
                                <h3 class="faq-question m-0"><?= htmlspecialchars($faq['question']) ?></h3>
                            </div>
                            
                            <div class="faq-toggle-btn d-flex align-items-center justify-content-center">
                                <i class="bi bi-plus faq-toggle-icon"></i>
                            </div>
                        </div>
                        
                        <div id="faq-collapse-<?= $index ?>" class="collapse" data-bs-parent="#faq-accordion-group">
                            <div class="faq-card-body">
                                <p class="faq-answer m-0">
                                    <?= htmlspecialchars($faq['answer']) ?>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
