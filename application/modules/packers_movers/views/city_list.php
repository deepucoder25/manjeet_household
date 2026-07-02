<?php
$st = strtolower(str_replace(" ", "-", $state));
include "data/$st.php";
$state = ucwords($state);
?>

<?php $this->load->view('template/breadcrumb', array('breadcrumb_title' => 'Packers and Movers in ' . $state, 'breadcrumb_icon' => 'bi-geo-alt-fill', 'breadcrumb_current' => $state, 'breadcrumb_parent_name' => 'Our Branches', 'breadcrumb_parent_url' => site_url('our-branches'))); ?>

<section class="pm-list-service-page py-5">
    <div class="container pm-list-feature-section">
        
        <div class="pm-list-header mb-5">
            <span class="pm-list-badge">Locations</span>
            <h2 class="pm-list-title fw-bold mt-2">
                Shifting Services in <span class="pm-list-title-span"><?= $state ?></span>
            </h2>
            <div class="pm-list-divider"></div>
            <p class="text-muted col-lg-6 mx-auto mb-0">
                Choose your specific city branch below to access local packers and movers contact details, services lists, maps, ratings, and instant shifting quote tools.
            </p>
        </div>

        <div class="row g-3 justify-content-center">
            <?php
            $st = str_replace(" ", "-", $state);
            foreach ($cities as $ct) :
                $link = urlencode(strtolower(str_replace(" ", "-", $ct['nm'])));
                $statename = urlencode(strtolower(str_replace(" ", "-", $st)));
            ?>
                <div class="col-lg-5-cols col-md-4 col-sm-6 col-6">
                    <a href="<?= site_url("$link-packers-movers-$statename") ?>" class="pm-list-city-card-link d-block h-100 text-decoration-none" aria-label="Packers and Movers in <?= htmlspecialchars($ct['nm']) ?>">
                        <div class="pm-list-city-card h-100">
                            <div class="card-body pm-list-card-body">

                                <div class="pm-list-icon" aria-hidden="true">
                                    <i class="bi bi-geo-alt-fill"></i>
                                </div>

                                <div class="pm-list-city-name">
                                    <h5>Packers & Movers</h5>
                                    <h5><b><?= htmlspecialchars($ct['nm']) ?></b></h5>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
</main>

