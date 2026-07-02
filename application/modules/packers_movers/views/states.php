<?php $this->load->view('template/breadcrumb', array('breadcrumb_title' => 'Our Branches', 'breadcrumb_icon' => 'bi-map-fill')); ?>

<?php
$state = [
    [
        "image" => "maharashtra.jpg",
        "category" => "Maharashtra",
        "link" => "maharashtra"
    ],
    [
        "image" => "bangalore.jpg",
        "category" => "Bangalore",
        "link" => "bangalore"
    ],

    [
        "image" => "west-bengal.jpg",
        "category" => "West Bengal",
        "link" => "west-bengal"
    ],
    [
        "image" => "uttar-pradesh.jpg",
        "category" => "Uttar Pradesh",
        "link" => "uttar-pradesh"
    ],
];
?>

<section class="portfolio-area py-5 bg-light">
    <div class="container">

        <div class="text-center mb-5">
            <h2 class="fw-bold">
                Our Presence Across <span class="pm-states-title-span">India</span>
            </h2>
            <p class="text-muted">
                Reliable packing and moving services available in major states.
            </p>
        </div>

        <div class="row g-4">

            <?php foreach ($state as $item): ?>

                <div class="col-12 col-sm-6 col-md-4 col-lg-3">

                    <div class="pm-states-card bg-white rounded-4 overflow-hidden shadow-sm h-100">

                        <div class="pm-states-img position-relative overflow-hidden">
                            <img class="img-fluid w-100"
                                src="<?= base_url() ?>/assets/images/state/<?= $item['image'] ?>"
                                alt="<?= $item['category'] ?>">

                            <div class="pm-states-overlay">
                                <a href="<?= site_url($item['link']) ?>" class="btn btn-warning btn-sm rounded-pill px-3">
                                    View
                                </a>
                            </div>
                        </div>

                        <div class="p-3 text-start d-flex align-items-center gap-2">
                            <span class="pm-states-yellow-dash"></span>
                            <h6 class="fw-semibold mb-0">
                                <a href="<?= site_url($item['link']) ?>"
                                    class="text-dark text-decoration-none">
                                    <?= htmlspecialchars($item['category']) ?>
                                </a>
                            </h6>
                        </div>

                    </div>

                </div>

            <?php endforeach; ?>

        </div>
    </div>
</section>

