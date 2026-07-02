<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<aside class="service-sidebar">
    <!-- Company Navigation Menu -->
    <div class="sidebar-widget widget-services mb-4">
        <div class="sidebar-widget-header-new d-flex align-items-start gap-3 mb-4">
            <div class="sidebar-header-icon-wrap">
                <i class="bi bi-grid-3x3-gap-fill text-danger"></i>
            </div>
            <div class="sidebar-header-text-wrap">
                <h3 class="sidebar-widget-title-new fw-bold mb-1">About Company</h3>
                <p class="sidebar-widget-subtitle-new text-muted mb-0">Learn more about our services</p>
            </div>
        </div>
        <ul class="sidebar-services-list-new">
            <?php
            $sidebar_links = [
                ['slug' => 'about-us',              'name' => 'About Us',              'icon' => 'bi-info-circle'],
                ['slug' => 'why-choose-us',         'name' => 'Why Choose Us',         'icon' => 'bi-patch-question'],
                ['slug' => 'faqs',                  'name' => 'FAQ',                   'icon' => 'bi-chat-left-text'],
                ['slug' => 'moving-tips',           'name' => 'Moving Tips',           'icon' => 'bi-lightbulb'],
                ['slug' => 'testimonials',          'name' => 'Testimonial',           'icon' => 'bi-chat-quote'],
                ['slug' => 'reviews',               'name' => 'Customer Reviews',      'icon' => 'bi-star-half'],
                ['slug' => 'photo-gallery',         'name' => 'Photo Gallery',         'icon' => 'bi-images'],
                ['slug' => 'blog',                  'name' => 'Blog',                  'icon' => 'bi-newspaper'],
                ['slug' => 'terms-and-conditions',  'name' => 'Terms & Conditions',    'icon' => 'bi-file-earmark-ruled'],
                ['slug' => 'privacy-policy',        'name' => 'Privacy Policy',        'icon' => 'bi-shield-check'],
            ];

            foreach ($sidebar_links as $link):
                $is_active = ($active_link === $link['slug']) ? 'active' : '';
            ?>
                <li>
                    <a href="<?= site_url($link['slug']) ?>" class="sidebar-service-link-new d-flex align-items-center gap-2 <?= $is_active ?>">
                        <i class="bi <?= $link['icon'] ?> service-icon"></i>
                        <span class="service-name"><?= $link['name'] ?></span>
                    </a>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>

    <!-- Contact & Action CTA Widget -->
    <div class="sidebar-widget widget-contact-cta-new mb-4 text-center">
        <div class="cta-inner-card-new">
            <div class="cta-icon-box-new">
                <i class="bi bi-telephone-outbound-fill"></i>
            </div>
            <h3 class="cta-title-new">Need Urgent Shifting?</h3>
            <p class="cta-desc-new">Get in touch with our moving experts for a fast and free quotation.</p>
            
            <div class="cta-buttons-new d-flex flex-column gap-3">
                <div class="btn-cta-branch call-indore">
                    <span class="btn-branch-label">Call Indore Office</span>
                    <div class="d-flex flex-row flex-wrap justify-content-center align-items-center gap-2 mt-1">
                        <a href="<?= !empty($indore_phonehtml) ? $indore_phonehtml : 'tel:+919893701992' ?>" class="btn-branch-num">
                            <i class="bi bi-telephone-fill"></i> <?= !empty($indore_phone) ? $indore_phone : '+91 98937 01992' ?>
                        </a>
                        <span style="color: rgba(255,255,255,0.45); font-weight: 500;">|</span>
                        <a href="<?= !empty($indore_phonehtml1) ? $indore_phonehtml1 : 'tel:+919111111593' ?>" class="btn-branch-num">
                            <?= !empty($indore_phone1) ? $indore_phone1 : '+91 91111 11593' ?>
                        </a>
                    </div>
                </div>
                
                <a href="tel:+919713314455" class="btn-cta-branch call-bhopal">
                    <span class="btn-branch-label">Call Bhopal Office</span>
                    <span class="btn-branch-num"><i class="bi bi-telephone-fill"></i> +91 97133 14455</span>
                </a>
                
                <div class="cta-secondary-row d-flex gap-2">
                    <a href="<?= $whatsapphtml ?>" target="_blank" rel="noopener" class="btn-cta-action whatsapp-action w-50">
                        <i class="bi bi-whatsapp me-1"></i> WhatsApp
                    </a>
                    <button type="button" class="btn-cta-action quote-action w-50" data-bs-toggle="modal" data-bs-target="#qteModal">
                        <i class="bi bi-file-earmark-text me-1"></i> Get Quote
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Trusted Badge Widget -->
    <div class="sidebar-widget widget-trusted-badges">
        <div class="timeline-header">
            <span class="timeline-eyebrow">Why Choose</span>
            <h4 class="timeline-title"><?= $company3 ?>?</h4>
            <div class="timeline-title-underline"></div>
        </div>
        
        <div class="timeline-container">
            <div class="timeline-line"></div>
            
            <div class="timeline-items">
                <!-- Item 1 -->
                <div class="timeline-item">
                    <div class="timeline-dot-container">
                        <div class="timeline-dot">
                            <span class="timeline-dot-inner"></span>
                        </div>
                    </div>
                    <div class="timeline-card">
                        <div class="timeline-icon-box">
                            <i class="bi bi-award"></i>
                        </div>
                        <div class="timeline-content">
                            <strong class="timeline-item-title"><?= $yearsExperience ?> Years Experience</strong>
                            <span class="timeline-item-desc">Relocating since <?= $startYear ?>.</span>
                        </div>
                    </div>
                </div>

                <!-- Item 2 -->
                <div class="timeline-item">
                    <div class="timeline-dot-container">
                        <div class="timeline-dot">
                            <span class="timeline-dot-inner"></span>
                        </div>
                    </div>
                    <div class="timeline-card">
                        <div class="timeline-icon-box">
                            <i class="bi bi-people-fill"></i>
                        </div>
                        <div class="timeline-content">
                            <strong class="timeline-item-title"><?= $happyClients ?> Happy Clients</strong>
                            <span class="timeline-item-desc">Trusted by families and businesses.</span>
                        </div>
                    </div>
                </div>

                <!-- Item 3 -->
                <div class="timeline-item">
                    <div class="timeline-dot-container">
                        <div class="timeline-dot">
                            <span class="timeline-dot-inner"></span>
                        </div>
                    </div>
                    <div class="timeline-card">
                        <div class="timeline-icon-box">
                            <i class="bi bi-shield-check"></i>
                        </div>
                        <div class="timeline-content">
                            <strong class="timeline-item-title">Verified &amp; Licensed</strong>
                            <span class="timeline-item-desc">ISO certified packers and movers.</span>
                        </div>
                    </div>
                </div>

                <!-- Item 4 -->
                <div class="timeline-item">
                    <div class="timeline-dot-container">
                        <div class="timeline-dot">
                            <span class="timeline-dot-inner"></span>
                        </div>
                    </div>
                    <div class="timeline-card">
                        <div class="timeline-icon-box">
                            <i class="bi bi-lock-fill"></i>
                        </div>
                        <div class="timeline-content">
                            <strong class="timeline-item-title"><?= $secureShifting ?> Secure Shifting</strong>
                            <span class="timeline-item-desc">Complete transit insurance options.</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</aside>
