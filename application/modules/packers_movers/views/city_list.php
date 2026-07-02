<?php
$st = strtolower(str_replace(" ", "-", $state));
include "data/$st.php";
$state = ucwords($state);
?>

<?php $this->load->view('template/breadcrumb', array('breadcrumb_title' => 'Packers and Movers in ' . $state, 'breadcrumb_icon' => 'bi-geo-alt-fill', 'breadcrumb_current' => $state, 'breadcrumb_parent_name' => 'Our Branches', 'breadcrumb_parent_url' => site_url('our-branches'))); ?>
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

