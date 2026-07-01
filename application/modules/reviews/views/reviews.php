<main class="main">
    <section class="service-breadcrumbs text-center">
        <div class="container">
            <h1 class="bc-title-main text-uppercase text-white fw-bold">Our Reviews</h1>
            <div class="bc-divider-wrap d-flex align-items-center justify-content-center gap-3 my-3">
                <span class="bc-divider-line"></span>
                <div class="bc-icon-hexagon">
                    <i class="bi bi-hexagon-fill hex-bg"></i>
                    <i class="bi bi-star-fill hex-icon"></i>
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
                <span class="bc-current-pill text-white bg-danger font-weight-bold">Reviews</span>
            </div>
        </div>
    </section>

    <div class="reviews-service-page reviews-feature-content-section">
        <div ng-app="reviewsApp" ng-controller="reviewsctrl">
            <br />
            <div class="container">
                <div class="d-flex justify-content-between align-items-center flex-wrap gap-3 pb-2 mb-3" class="reviews-header-wrap">
                    <h3 class="m-0" class="reviews-header-title">
                        <i class="bi bi-chat-left-quote me-2"></i>Customer Experiences
                    </h3>
                    <button class="btn btn-primary rounded-pill px-4 shadow-sm" class="reviews-write-btn" data-bs-toggle="modal" data-bs-target="#reviewModal">
                        <i class="bi bi-pencil-square me-1"></i> Write a Review
                    </button>
                    <div class="reviews-header-line"></div>
                </div>

                <div class="reviews-single-reviewr mt-4 pb-4">
                    <?php
                    if ($reviews->num_rows() == 0) {
                        echo "<p class='no-reviews-text'>No reviews yet...</p>";
                    } else {
                        foreach ($reviews->result() as $r) {
                            $pdate = explode(" ", $r->posted_date)[0];
                            $size = strlen(explode("@", $r->email)[0]) - 4;
                            $lem = substr($r->email, -12);
                            $fem = substr($r->email, 0, 4);
                            $st = str_repeat("*", $size);
                            $em = $fem . $st . $lem;
                    ?>
                            <div class="reviews-single-review">
                                <div class="reviews-review-content" itemprop="review" itemscope itemtype="https://schema.org/Review">
                                    <meta itemprop="name" content="<?= $r->r_title ?>" />
                                    <div itemprop="itemReviewed" itemscope itemtype="https://schema.org/LocalBusiness">
                                        <meta itemprop="name" content="<?= $company3 ?>" />
                                    </div>

                                    <div class="reviews-review-rating">
                                        <?php for ($i = 0; $i < $r->stars; $i++) { ?>
                                            <i class="bi bi-star-fill"></i>
                                        <?php } ?>
                                        <span class="d-none reviews-rating-value" itemprop="reviewRating" itemscope itemtype="https://schema.org/Rating">
                                            <span itemprop="ratingValue"><?= $r->stars ?></span> stars
                                        </span>
                                    </div>

                                    <p itemprop="reviewBody">"<?=$r->r_desc?>"</p>

                                    <div class="reviews-review-author">
                                        <div class="reviews-review-avatar"><?= strtoupper(substr($r->name, 0, 1)) ?></div>
                                        <div>
                                            <strong itemprop="author" itemscope itemtype="https://schema.org/Person">
                                                <span itemprop="name"><?= $r->name ?></span>
                                            </strong>
                                            <small><?= $em ?></small>
                                            <meta itemprop="datePublished" content="<?= $pdate ?>">
                                        </div>
                                    </div>
                                </div>
                            </div>
                    <?php }
                    } ?>
                    <div class="mt-4 w-100 d-flex justify-content-center">
                        <div class="pagination">
                            <?php echo $this->pagination->create_links() ?>
                        </div>
                    </div>
                </div>
            </div>
            <br>
        </div>
    </div>

</main>

