<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<section class="service-breadcrumbs text-center">
    <div class="container">
        <h1 class="bc-title-main text-uppercase text-white fw-bold">Contact Us</h1>
        <div class="bc-divider-wrap d-flex align-items-center justify-content-center gap-3 my-3">
            <span class="bc-divider-line"></span>
            <div class="bc-icon-hexagon">
                <i class="bi bi-hexagon-fill hex-bg"></i>
                <i class="bi bi-telephone-fill hex-icon"></i>
            </div>
            <span class="bc-divider-line"></span>
        </div>
        <div class="bc-capsule-container d-inline-flex align-items-center justify-content-between p-1 bg-white border border-danger shadow-sm">
            <div class="d-flex align-items-center gap-2">
                <div class="bc-home-icon-wrap">
                    <i class="bi bi-house-door-fill"></i>
                </div>
                <div class="bc-links d-flex align-items-center gap-2 text-dark font-weight-bold">
                    <a href="<?= site_url() ?>" class="text-decoration-none text-dark">Home</a>
                    <i class="bi bi-chevron-right text-muted small"></i>
                </div>
            </div>
            <span class="bc-current-pill text-white bg-danger font-weight-bold">Contact Us</span>
        </div>
    </div>
</section>

<section class="contact-section py-5 bg-light">
    <div class="container my-4">
        <div class="row g-5">

            <div class="col-lg-5">
                <div class="contact-details-box bg-white p-4 p-md-5 rounded-4 shadow-sm h-100">
                    <h2 class="fw-bold mb-4 contact-title-primary">Get In Touch</h2>
                    <p class="text-muted mb-5">Have questions or need a custom quote? Reach out to us, and our team will get back to you as soon as possible.</p>

                    <div class="d-flex align-items-center mb-4">
                        <div class="contact-icon rounded-circle d-flex justify-content-center align-items-center me-3 contact-icon-box">
                            <i class="bi bi-geo-alt-fill"></i>
                        </div>
                        <div>
                            <h6 class="fw-bold mb-1">Head Office</h6>
                            <p class="mb-0 text-muted"><?= $address ?></p>
                        </div>
                    </div>

                    <div class="d-flex align-items-center mb-4">
                        <div class="contact-icon rounded-circle d-flex justify-content-center align-items-center me-3 contact-icon-box-success">
                            <i class="bi bi-telephone-fill"></i>
                        </div>
                        <div>
                            <h6 class="fw-bold mb-1">Phone Number</h6>
                            <p class="mb-0 text-muted"><a href="<?= $phonehtml ?>" class="text-decoration-none text-muted"><?= $phone ?></a></p>
                        </div>
                    </div>

                    <div class="d-flex align-items-center mb-4">
                        <div class="contact-icon rounded-circle d-flex justify-content-center align-items-center me-3 contact-icon-box-warning">
                            <i class="bi bi-envelope-fill"></i>
                        </div>
                        <div>
                            <h6 class="fw-bold mb-1">Email Address</h6>
                            <p class="mb-0 text-muted"><a href="<?= $mailhtml ?>" class="text-decoration-none text-muted"><?= $mail ?></a></p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-7">
                <div class="contact-form-box bg-white p-4 p-md-5 rounded-4 shadow-sm h-100 border-top border-4 contact-border-warning">
                    <h2 class="fw-bold mb-4 contact-title-primary">Send Us A Message</h2>
                    <form id="contactform" class="ajax-form" data-url="<?php echo site_url('contacts/contact') ?>" data-result="contactformresults" onsubmit="return false;">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label for="contact_name" class="form-label fw-semibold text-dark">Your Name *</label>
                                <input type="text" name="name" id="contact_name" class="form-control py-2 contact-input-rounded" placeholder="John Doe">
                            </div>
                            <div class="col-md-6">
                                <label for="contact_phone" class="form-label fw-semibold text-dark">Phone Number *</label>
                                <input type="tel" name="phone" id="contact_phone" class="form-control py-2 contact-input-rounded" placeholder="Mobile Number">
                            </div>
                            <div class="col-12">
                                <label for="contact_email" class="form-label fw-semibold text-dark">Email Address</label>
                                <input type="email" name="email" id="contact_email" class="form-control py-2 contact-input-rounded" placeholder="hello@example.com">
                            </div>
                            <div class="col-12">
                                <label for="contact_message" class="form-label fw-semibold text-dark">Your Message</label>
                                <textarea name="message" id="contact_message" class="form-control py-2 contact-input-rounded" rows="5" placeholder="How can we help you?"></textarea>
                            </div>
                            <div class="col-12 mt-4">
                                <button type="submit" class="theme-btn w-100 py-3 contact-btn-rounded">
                                    <i class="bi bi-send me-2"></i> Send Message
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

