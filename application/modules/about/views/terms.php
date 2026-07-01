<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<section class="service-breadcrumbs text-center">
    <div class="container">
        <h1 class="bc-title-main text-uppercase text-white fw-bold">Terms &amp; Conditions</h1>
        <div class="bc-divider-wrap d-flex align-items-center justify-content-center gap-3 my-3">
            <span class="bc-divider-line"></span>
            <div class="bc-icon-hexagon">
                <i class="bi bi-hexagon-fill hex-bg"></i>
                <i class="bi bi-file-earmark-ruled hex-icon"></i>
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
            <span class="bc-current-pill text-white bg-danger font-weight-bold">Terms &amp; Conditions</span>
        </div>
    </div>
</section>

<section class="py-5">
    <div class="container">

        <p class="lead">
            Welcome to <strong><?= $company3 ?></strong>. These Terms &amp; Conditions govern your use of our website and relocation services. By booking a move or using our services, you agree to be bound by these terms.
        </p>

        <h2 class="h4 mt-4 mb-3">1. Service Booking &amp; Shifting Quotes</h2>
        <ul>
            <li>Shifting quotes provided by us are based on the inventory list and details supplied by you.</li>
            <li>Any change in the inventory list, travel distance, floor levels, or loading conditions will result in an adjustment of the final price.</li>
            <li>The final service pricing is subject to taxes and other applicable duties as outlined in the invoice.</li>
        </ul>

        <h2 class="h4 mt-4 mb-3">2. Excluded &amp; Restricted Items</h2>
        <p>
            For safety and legal reasons, we do not transport the following items:
        </p>
        <ul>
            <li>Hazardous materials, explosives, and flammable liquids (e.g., gas cylinders, fuel).</li>
            <li>Valuables including cash, jewelry, gold, and extremely important original documents. We advise carrying these items personally.</li>
            <li>Contraband, illegal items, or restricted substances.</li>
            <li>Perishable goods or live plants unless special arrangements are formally agreed upon.</li>
        </ul>

        <h2 class="h4 mt-4 mb-3">3. Payments &amp; Billing</h2>
        <ul>
            <li>A booking advance may be required to confirm the shifting slot.</li>
            <li>The remaining balance must be paid in full at the time of loading or unloading, as agreed in the service order.</li>
            <li>Payments can be made via credit card, net banking, UPI, or other options approved by our billing desk.</li>
        </ul>

        <h2 class="h4 mt-4 mb-3">4. Transit Insurance &amp; Liability</h2>
        <ul>
            <li>While we take utmost care of your goods, unexpected accidents or road conditions can occur. We strongly recommend choosing transit insurance.</li>
            <li>Our liability for any damage is strictly limited to the terms of the transit insurance policy.</li>
            <li>All damage claims must be documented and submitted within 24 hours of unloading.</li>
        </ul>

        <h2 class="h4 mt-4 mb-3">5. Delivery Timeline &amp; Delays</h2>
        <p>
            We make every effort to deliver your goods on schedule. However, we are not liable for transit delays caused by traffic accidents, road closures, strikes, bad weather, or other events beyond our reasonable control.
        </p>

        <h2 class="h4 mt-4 mb-3">6. Governing Law</h2>
        <p>
            These Terms &amp; Conditions are governed by and construed in accordance with the laws of India. Any legal disputes arising from our services shall be subject to the exclusive jurisdiction of the courts near our registered office.
        </p>

        <h2 class="h4 mt-4 mb-3">7. Contact Us</h2>
        <p>
            If you have any questions about our Terms &amp; Conditions, please get in touch with us:
        </p>
        <p class="mb-0">
            <strong><?= $company3 ?></strong><br>
            Email: <a href="<?= $mailhtml ?>"><?= $mail ?></a><br>
            Phone: <a href="<?= $phonehtml ?>"><?= $phone ?></a>
        </p>
    </div>
</section>

