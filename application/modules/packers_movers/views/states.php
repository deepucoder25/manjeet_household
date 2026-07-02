<?php $this->load->view('template/breadcrumb', array('breadcrumb_title' => 'Our Branches', 'breadcrumb_icon' => 'bi-map-fill')); ?>

<?php
$state = [
    [
        "image" => "madhya-pradesh.jpg",
        "category" => "Madhya Pradesh",
        "link" => "madhya-pradesh"
    ],
];
?>

<section class="pm-states-section py-5">
    <div class="container">

        <div class="pm-states-header text-center mb-5">
            <span class="pm-states-badge">Branch Network</span>
            <h2 class="fw-bold mt-2">
                Our Presence Across <span class="pm-states-title-span">India</span>
            </h2>
            <div class="pm-states-divider mx-auto my-3"></div>
            <p class="text-muted col-lg-6 mx-auto mb-0">
                <?= $company3 ?> offers reliable, safe, and professional shifting services across major cities and states. Select a state to view local branches.
            </p>
        </div>

        <div class="row g-4 justify-content-center">

            <?php foreach ($state as $item): ?>

                <div class="col-6 col-sm-4 col-md-3 col-lg-3">
                    <a href="<?= site_url($item['link']) ?>" class="text-decoration-none d-block h-100">
                        <div class="pm-states-card h-100">
                            <span class="pm-states-card-badge">
                                <i class="bi bi-geo-alt-fill"></i> Active
                            </span>
                            <div class="pm-states-img-wrap">
                                <img class="img-fluid w-100"
                                     src="<?= base_url('assets/images/state/' . $item['image']) ?>"
                                     alt="<?= htmlspecialchars($item['category']) ?> Relocation Services"
                                     loading="lazy">
                            </div>
                            <div class="pm-states-info">
                                <div class="pm-states-card-details">
                                    <h3 class="pm-states-card-title">
                                        <?= htmlspecialchars($item['category']) ?>
                                    </h3>
                                    <p class="pm-states-card-sub">Explore Branches</p>
                                </div>
                                <div class="pm-states-arrow-btn" aria-hidden="true">
                                    <i class="bi bi-arrow-up-right"></i>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

            <?php endforeach; ?>

        </div>
    </div>
</section>

