<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<?php $this->load->view('template/breadcrumb', array('breadcrumb_title' => 'Moving Tips', 'breadcrumb_icon' => 'bi-lightbulb')); ?>

<section class="service-details-section mb-5 pb-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="service-main-content">
                    <h2 class="service-section-title">Essential Tips for a Hassle-Free Relocation</h2>
                    <div class="about-service-text mb-5">
                        <p class="lead">
                            Relocating to a new home can be overwhelming. Planning ahead and staying organized is the key to a stress-free transition. Our relocation experts at <strong><?= $company3 ?></strong> have compiled these expert tips to help you prepare.
                        </p>
                    </div>

                    <!-- Tips Grid -->
                    <div class="row g-4">
                        <!-- Card 1: Pre-Move -->
                        <div class="col-12">
                            <div class="card p-4 border-0 shadow-sm rounded-4 about-card-hover">
                                <span class="about-tip-badge about-tip-badge-pre">Phase 1: Pre-Move Planning</span>
                                <h4 class="fw-bold text-dark mb-3"><i class="bi bi-calendar-check text-danger me-2"></i>Preparation &amp; Decluttering</h4>
                                <ul class="about-tip-list">
                                    <li><strong>Start Planning Early (4-6 Weeks)</strong>: Secure your move date and book trusted packers and movers well in advance to avoid last-minute rush pricing.</li>
                                    <li><strong>Declutter and Donate</strong>: Sort through items and discard, donate, or sell things you no longer use. This significantly reduces your shipment volume, lowering your overall shifting cost.</li>
                                    <li><strong>Inventory List</strong>: Make a detailed list of items being shipped, categorizing them room by room.</li>
                                </ul>
                            </div>
                        </div>

                        <!-- Card 2: Packing Day -->
                        <div class="col-12">
                            <div class="card p-4 border-0 shadow-sm rounded-4 about-card-hover">
                                <span class="about-tip-badge about-tip-badge-during">Phase 2: Packing &amp; Shifting Day</span>
                                <h4 class="fw-bold text-dark mb-3"><i class="bi bi-box-seam text-danger me-2"></i>Moving Day Coordination</h4>
                                <ul class="about-tip-list">
                                    <li><strong>Prepare an "Essential Bag"</strong>: Pack daily essentials like toiletries, medications, change of clothes, phone chargers, laptop, and snacks. Carry this bag yourself.</li>
                                    <li><strong>Keep Documents Safe</strong>: Never pack jewelry, cash, properties deeds, birth certificates, or checkbooks in shifting boxes. Keep them in your personal custody.</li>
                                    <li><strong>Defrost Refrigerator</strong>: Defrost your fridge at least 24 hours before shifting day. Empty water pipes from wash machines, geysers, and water purifiers to avoid leaks.</li>
                                    <li><strong>Label Boxes</strong>: Clearly write room names and brief lists of contents on the side of each box for easy unpacking later.</li>
                                </ul>
                            </div>
                        </div>

                        <!-- Card 3: Post-Move -->
                        <div class="col-12">
                            <div class="card p-4 border-0 shadow-sm rounded-4 about-card-hover">
                                <span class="about-tip-badge about-tip-badge-post">Phase 3: Post-Move Settling In</span>
                                <h4 class="fw-bold text-dark mb-3"><i class="bi bi-house-check text-danger me-2"></i>Welcome to Your New Home</h4>
                                <ul class="about-tip-list">
                                    <li><strong>Verify the Inventory</strong>: Cross-check delivered boxes against your original list before the moving crew departs.</li>
                                    <li><strong>Inspect Delicate Items First</strong>: Unpack glass, electronic appliances, and high-value items first to verify safe transit status.</li>
                                    <li><strong>Clean Before Unpacking</strong>: Sweep and sanitize cabinets, closets, and floors in your new home before unloading your items onto them.</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-lg-4">
                <?php $this->load->view('about/company_sidebar', ['active_link' => 'moving-tips']); ?>
            </div>
        </div>
    </div>
</section>
