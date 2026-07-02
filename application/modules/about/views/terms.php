<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<?php $this->load->view('template/breadcrumb', array('breadcrumb_title' => 'Terms & Conditions', 'breadcrumb_icon' => 'bi-file-earmark-ruled')); ?>

<section class="service-details-section mb-5 pb-5">
    <div class="container">
        <div class="row">

            <div class="col-lg-8">
                <div class="about-legal-card shadow-sm">
                    <p class="lead">
                        Welcome to <strong><?= $company3 ?></strong>. These Terms &amp; Conditions govern your use of our website and relocation services. By booking a move or using our services, you agree to be bound by these terms.
                    </p>

                    <div class="about-legal-section mt-4">
                        <h3 class="about-legal-title">1. Service Booking &amp; Shifting Quotes</h3>
                        <div class="about-legal-desc">
                            <p>Shifting quotes provided by us are based on the inventory list and details supplied by you.</p>
                            <p>Any change in the inventory list, travel distance, floor levels, or loading conditions will result in an adjustment of the final price.</p>
                            <p>The final service pricing is subject to taxes and other applicable duties as outlined in the invoice.</p>
                        </div>
                    </div>

                    <div class="about-legal-section">
                        <h3 class="about-legal-title">2. Excluded &amp; Restricted Items</h3>
                        <div class="about-legal-desc">
                            <p>For safety and legal reasons, we do not transport the following items:</p>
                            <ul class="about-tip-list">
                                <li>Hazardous materials, explosives, and flammable liquids (e.g., gas cylinders, fuel).</li>
                                <li>Valuables including cash, jewelry, gold, and extremely important original documents. We advise carrying these items personally.</li>
                                <li>Contraband, illegal items, or restricted substances.</li>
                                <li>Perishable goods or live plants unless special arrangements are formally agreed upon.</li>
                            </ul>
                        </div>
                    </div>

                    <div class="about-legal-section">
                        <h3 class="about-legal-title">3. Payments &amp; Billing</h3>
                        <div class="about-legal-desc">
                            <p>A booking advance may be required to confirm the shifting slot.</p>
                            <p>The remaining balance must be paid in full at the time of loading or unloading, as agreed in the service order.</p>
                            <p>Payments can be made via credit card, net banking, UPI, or other options approved by our billing desk.</p>
                        </div>
                    </div>

                    <div class="about-legal-section">
                        <h3 class="about-legal-title">4. Transit Insurance &amp; Liability</h3>
                        <div class="about-legal-desc">
                            <p>While we take utmost care of your goods, unexpected accidents or road conditions can occur. We strongly recommend choosing transit insurance.</p>
                            <p>Our liability for any damage is strictly limited to the terms of the transit insurance policy.</p>
                            <p>All damage claims must be documented and submitted within 24 hours of unloading.</p>
                        </div>
                    </div>

                    <div class="about-legal-section">
                        <h3 class="about-legal-title">5. Delivery Timeline &amp; Delays</h3>
                        <div class="about-legal-desc">
                            <p>
                                We make every effort to deliver your goods on schedule. However, we are not liable for transit delays caused by traffic accidents, road closures, strikes, bad weather, or other events beyond our reasonable control.
                            </p>
                        </div>
                    </div>

                    <div class="about-legal-section">
                        <h3 class="about-legal-title">6. Governing Law</h3>
                        <div class="about-legal-desc">
                            <p>
                                These Terms &amp; Conditions are governed by and construed in accordance with the laws of India. Any legal disputes arising from our services shall be subject to the exclusive jurisdiction of the courts near our registered office.
                            </p>
                        </div>
                    </div>

                    <div class="about-legal-section mb-0">
                        <h3 class="about-legal-title">7. Contact Us</h3>
                        <div class="about-legal-desc">
                            <p>
                                If you have any questions about our Terms &amp; Conditions, please get in touch with us:
                            </p>
                            <p class="mb-0">
                                <strong><?= $company3 ?></strong><br>
                                Email: <a href="<?= $mailhtml ?>"><?= $mail ?></a><br>
                                Phone: <a href="<?= $phonehtml ?>"><?= $phone ?></a>
                            </p>
                        </div>
                    </div>

                </div>
            </div>

            <div class="col-lg-4">
                <?php $this->load->view('about/company_sidebar', ['active_link' => 'terms-and-conditions']); ?>
            </div>
        </div>
    </div>
</section>
