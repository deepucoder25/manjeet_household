<?php
$st = strtolower(str_replace(" ", "-", $state));
include "data/$st.php";
$state = ucwords($state);
?>

<section class="service-breadcrumbs text-center">
    <div class="container">
        <h1 class="bc-title-main text-uppercase text-white fw-bold">Packers and Movers in <?= $state ?></h1>
        <div class="bc-divider-wrap d-flex align-items-center justify-content-center gap-3 my-3">
            <span class="bc-divider-line"></span>
            <div class="bc-icon-hexagon">
                <i class="bi bi-hexagon-fill hex-bg"></i>
                <i class="bi bi-geo-alt-fill hex-icon"></i>
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
                    <a href="<?= site_url('our-branches') ?>" class="text-decoration-none text-dark">Our Branches</a>
                    <i class="bi bi-chevron-right text-muted small"></i>
                </div>
            </div>
            <span class="bc-current-pill text-white bg-danger font-weight-bold"><?= $state ?></span>
        </div>
    </div>
</section>
    <div class="pm-list-service-page">
    <div class="container pm-list-feature-section">
        <div class="row">
            <?php
            $st = str_replace(" ", "-", $state);
            foreach ($cities as $ct) :
                $link = urlencode(strtolower(str_replace(" ", "-", $ct['nm'])));
                $statename = urlencode(strtolower(str_replace(" ", "-", $st)));
            ?>
                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-6 mb-3">
                    <a href="<?= site_url("$link-packers-movers-$statename") ?>" class="pm-list-city-card-link d-block h-100 text-decoration-none">
                        <div class="pm-list-city-card card border-0 shadow h-100">
                            <div class="card-body pm-list-card-body">

                                <div class="pm-list-icon">
                                    <i class="bi bi-truck"></i>
                                </div>

                                <div class="pm-list-city-name">
                                    <h5>Packers and Movers <b><?= $ct['nm'] ?></b></h5>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
</main>

