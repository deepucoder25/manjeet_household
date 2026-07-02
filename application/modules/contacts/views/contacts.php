<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<?php $this->load->view('template/breadcrumb', array('breadcrumb_title' => 'Contact Us', 'breadcrumb_icon' => 'bi-telephone-fill')); ?>

<section class="contact-section py-5 mb-5 pb-5">
    <div class="container">
        
        <!-- Two Office Info Boxes on Top -->
        <div class="row g-4 mb-5">
            <!-- Box 1: Indore Head Office -->
            <div class="col-md-6">
                <div class="contact-office-card shadow-sm h-100 p-4 border rounded-4">
                    <div class="d-flex align-items-center mb-3">
                        <div class="contact-circle-icon me-3">
                            <i class="bi bi-building-fill"></i>
                        </div>
                        <div>
                            <span class="contact-office-badge contact-office-badge-head">Office</span>
                            <h3 class="contact-office-name">Indore Branch</h3>
                        </div>
                    </div>
                    <div class="contact-office-details">
                        <p class="mb-2"><i class="bi bi-geo-alt-fill me-2 text-danger"></i><?= $indore_address ?></p>
                        <p class="mb-2">
                            <i class="bi bi-telephone-fill me-2 text-danger"></i>
                            <a href="<?= $indore_phonehtml ?>" class="text-decoration-none fw-bold"><?= $indore_phone ?></a>
                            <span class="mx-2 text-muted">|</span>
                            <a href="<?= $indore_phonehtml1 ?>" class="text-decoration-none fw-bold"><?= $indore_phone1 ?></a>
                        </p>
                        <p class="mb-0"><i class="bi bi-envelope-fill me-2 text-danger"></i><a href="<?= $mailhtml ?>" class="text-decoration-none"><?= $mail ?></a></p>
                    </div>
                </div>
            </div>

            <!-- Box 2: Bhopal Branch Office -->
            <div class="col-md-6">
                <div class="contact-office-card shadow-sm h-100 p-4 border rounded-4">
                    <div class="d-flex align-items-center mb-3">
                        <div class="contact-circle-icon me-3">
                            <i class="bi bi-building"></i>
                        </div>
                        <div>
                            <span class="contact-office-badge contact-office-badge-branch">Office</span>
                            <h3 class="contact-office-name">Bhopal Branch</h3>
                        </div>
                    </div>
                    <div class="contact-office-details">
                        <p class="mb-2"><i class="bi bi-geo-alt-fill me-2 text-danger"></i><?= $bhopal_address ?></p>
                        <p class="mb-2">
                            <i class="bi bi-telephone-fill me-2 text-danger"></i>
                            <a href="<?= $bhopal_phonehtml ?>" class="text-decoration-none fw-bold"><?= $bhopal_phone ?></a>
                        </p>
                        <p class="mb-0"><i class="bi bi-envelope-fill me-2 text-danger"></i><a href="<?= $mailhtml ?>" class="text-decoration-none"><?= $mail ?></a></p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row g-5">
            <!-- Left Info Panel (SEO Optimized & Accessible) -->
            <div class="col-lg-5">
                <div class="contact-info-panel pe-lg-4">
                    <h2 class="fw-extrabold mb-3 text-dark">Relocate Stress-Free With India's Shifting Experts</h2>
                    <p class="text-muted mb-4">
                        At <strong><?= $company3 ?></strong>, we are committed to making your home, office, or vehicle relocation completely seamless. Reach out to our customer coordinators for any queries, instant booking assists, or custom logistical plans.
                    </p>
                    
                    <div class="p-4 bg-light rounded-4 border-start border-danger border-4 mb-4">
                        <h5 class="fw-bold text-danger mb-2"><i class="bi bi-clock-fill me-2"></i>Business Hours</h5>
                        <p class="text-muted mb-1">Monday - Sunday: 24 Hours Operational</p>
                        <p class="text-muted mb-0">Customer Helpline: 09:00 AM to 09:00 PM</p>
                    </div>

                    <div class="d-flex gap-3">
                        <a href="<?= $whatsapphtml ?>" target="_blank" rel="noopener" class="btn btn-outline-success rounded-pill px-4 py-2 fw-semibold">
                            <i class="bi bi-whatsapp me-2"></i> WhatsApp Support
                        </a>
                    </div>
                </div>
            </div>

            <!-- Right Contact Message Form -->
            <div class="col-lg-7">
                <div class="contact-modern-form-card shadow-sm p-4 p-md-5 border rounded-4">
                    <h2 class="fw-bold mb-2 text-dark">Send Us a Direct Query</h2>
                    <p class="text-muted mb-4">Fields marked with asterisk (*) are mandatory for verification.</p>
                    
                    <form id="contactform" class="ajax-form" data-url="<?php echo site_url('contacts/contact') ?>" data-result="contactformresults" onsubmit="return false;">
                        <div class="row g-4">
                            <div class="col-md-6">
                                <label for="contact_name" class="form-label fw-bold text-dark mb-1">Your Full Name *</label>
                                <div class="contact-custom-input-group">
                                    <span class="input-group-icon"><i class="bi bi-person"></i></span>
                                    <input type="text" name="name" id="contact_name" class="form-control" placeholder="e.g. Amit Sharma" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="contact_phone" class="form-label fw-bold text-dark mb-1">Mobile Phone Number *</label>
                                <div class="contact-custom-input-group">
                                    <span class="input-group-icon"><i class="bi bi-telephone"></i></span>
                                    <input type="tel" name="phone" id="contact_phone" class="form-control" placeholder="e.g. 9893701992" pattern="[0-9]{10}" required>
                                </div>
                            </div>
                            <div class="col-12">
                                <label for="contact_email" class="form-label fw-bold text-dark mb-1">Email Address</label>
                                <div class="contact-custom-input-group">
                                    <span class="input-group-icon"><i class="bi bi-envelope"></i></span>
                                    <input type="email" name="email" id="contact_email" class="form-control" placeholder="e.g. amit@example.com">
                                </div>
                            </div>
                            <div class="col-12">
                                <label for="contact_message" class="form-label fw-bold text-dark mb-1">Describe Shifting Requirements</label>
                                <div class="contact-custom-input-group align-items-start">
                                    <span class="input-group-icon"><i class="bi bi-pencil-square"></i></span>
                                    <textarea name="message" id="contact_message" class="form-control" rows="4" placeholder="Write your shifting requirements, moving items list, or any question here..."></textarea>
                                </div>
                            </div>
                            <div class="col-12 mt-4">
                                <button type="submit" class="btn btn-danger w-100 py-3 rounded-pill fw-bold shadow-sm contact-submit-btn">
                                    <i class="bi bi-send-fill me-2"></i> Send Query Message
                                </button>
                            </div>
                        </div>
                        <div id="contactformresults" class="mt-3"></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
