<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<aside class="service-sidebar">
    <!-- Services Navigation Menu -->
    <div class="sidebar-widget widget-services mb-4">
        <div class="sidebar-widget-header-new d-flex align-items-start gap-3 mb-4">
            <div class="sidebar-header-icon-wrap">
                <i class="bi bi-grid-3x3-gap-fill text-danger"></i>
            </div>
            <div class="sidebar-header-text-wrap">
                <h3 class="sidebar-widget-title-new fw-bold mb-1">Our Services</h3>
                <p class="sidebar-widget-subtitle-new text-muted mb-0">Comprehensive relocation solutions</p>
            </div>
        </div>
        <ul class="sidebar-services-list-new" id="sidebarServiceList">
            <?php
            $sidebar_services = [
                ['slug' => 'packing-unpacking',    'name' => 'Packing & Unpacking',  'icon' => 'bi-box'],
                ['slug' => 'loading-unloading',    'name' => 'Loading & Unloading',  'icon' => 'bi-arrow-down-up'],
                ['slug' => 'home-shifting',        'name' => 'Household Shifting',   'icon' => 'bi-house-heart'],
                ['slug' => 'office-shifting',      'name' => 'Office Shifting',      'icon' => 'bi-building-gear'],
                ['slug' => 'industrial-shifting',  'name' => 'Industrial Shifting',  'icon' => 'bi-briefcase'],
                ['slug' => 'local-shifting',       'name' => 'Local Shifting',       'icon' => 'bi-geo-alt'],
                ['slug' => 'car-transportation',   'name' => 'Car Transportation',   'icon' => 'bi-car-front'],
                ['slug' => 'bike-transportation',  'name' => 'Bike Transportation',  'icon' => 'bi-bicycle'],
                ['slug' => 'general-insurance',    'name' => 'General Insurance',    'icon' => 'bi-shield-check'],
            ];

            foreach ($sidebar_services as $index => $s):
                $is_active = ($active_service === $s['slug']) ? 'active' : '';
            ?>
                <li>
                    <a href="<?= site_url($s['slug']) ?>" class="sidebar-service-link-new d-flex align-items-center gap-2 <?= $is_active ?>">
                        <i class="bi <?= $s['icon'] ?> service-icon"></i>
                        <span class="service-name"><?= $s['name'] ?></span>
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
                        <a href="<?= $indore_phonehtml ?>" class="btn-branch-num">
                            <i class="bi bi-telephone-fill"></i> <?= $indore_phone ?>
                        </a>   
                        <span class="cta-btn-separator">|</span>
                        <a href="<?= $indore_phonehtml1 ?>" class="btn-branch-num">
                            <?= $indore_phone1 ?>
                        </a>
                    </div>
                </div>
                
                <a href="<?= $bhopal_phonehtml ?>" class="btn-cta-branch call-bhopal">
                    <span class="btn-branch-label">Call Bhopal Office</span>
                    <span class="btn-branch-num"><i class="bi bi-telephone-fill"></i> <?= $bhopal_phone ?></span>
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
