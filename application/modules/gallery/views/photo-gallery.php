<?php 
if (!defined('BASEPATH')) exit('No direct script access allowed'); 

// Define default operational photos here so it's easy to add/modify in the future!
$default_photos = array(
    array(
        'image' => 'packing.jpg',
        'alt' => 'Household packaging services with multi-layer bubble wrapping by Manjeet Packers and Movers',
        'title' => 'Multi-Layer Bubble Wrapping',
        'is_default' => true
    ),
    array(
        'image' => 'loading.jpg',
        'alt' => 'Professional loaders handling freight stacking at cargo terminal by Manjeet Packers and Movers',
        'title' => 'Organized Cargo Loading',
        'is_default' => true
    ),
    array(
        'image' => 'household.jpg',
        'alt' => 'Secure local and intercity household goods relocation delivery truck by Manjeet Packers and Movers',
        'title' => 'Household Shifting',
        'is_default' => true
    ),
    array(
        'image' => 'office.jpg',
        'alt' => 'IT servers and modular desks office relocation setup by Manjeet Packers and Movers',
        'title' => 'Office Shifting',
        'is_default' => true
    ),
    array(
        'image' => 'industrial.jpg',
        'alt' => 'Heavy duty machinery rigging and plant logistics transfer using cranes by Manjeet Packers and Movers',
        'title' => 'Industrial Shifting',
        'is_default' => true
    ),
    array(
        'image' => 'car.jpg',
        'alt' => 'Enclosed double-deck automobile shipping carrier loading passenger cars by Manjeet Packers and Movers',
        'title' => 'Car Transportation',
        'is_default' => true
    )
);

// Merge database custom uploads with default ones
$photos = !empty($db_photos) ? array_merge($db_photos, $default_photos) : $default_photos;
?>

<?php $this->load->view('template/breadcrumb', array('breadcrumb_title' => 'Photo Gallery', 'breadcrumb_icon' => 'bi-images')); ?>

<section class="gallery-section py-5 mb-5 pb-5">
    <div class="container">
        <div class="row">

            <!-- Main Content Area -->
            <div class="col-lg-8">
                <div class="gallery-main-content">
                    
                    <h1 class="fw-bold mb-3 text-dark">Our Relocation Operations in Action</h1>
                    <p class="text-muted mb-5">
                        Explore visual highlights of our packaging quality, warehouse storage, specialized container carriers, and relocation operations at <strong><?= $company3 ?></strong>.
                    </p>

                    <!-- Gallery Grid -->
                    <div class="row">
                        <?php 
                        $count = 0;
                        foreach ($photos as $i => $photo): 
                            $count++;
                            $isHidden = ($count > 4) ? 'gallery-item-hidden d-none' : '';
                            
                            // Determine the dynamic URL for the image variable
                            $photo_url = $photo['is_default'] 
                                ? base_url('assets/images/gallery/' . $photo['image']) 
                                : base_url('assets/uploads/album/' . $photo['image']);
                        ?>
                        <!-- Item <?= $count ?> -->
                        <div class="col-md-6 col-sm-6 col-12 <?= $isHidden ?>">
                            <div class="gallery-photo-card shadow-sm border-0 rounded-4 overflow-hidden">
                                <div class="gallery-img-wrapper">
                                    <img loading="lazy" src="<?= $photo_url ?>" class="gallery-img" alt="<?= htmlspecialchars($photo['alt']) ?>">
                                    <div class="gallery-hover-overlay">
                                        <button type="button" class="gallery-zoom-btn" data-bs-toggle="modal" data-bs-target="#galleryModal<?= $i ?>" aria-label="View <?= htmlspecialchars($photo['title']) ?> image">
                                            <i class="bi bi-zoom-in"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>

                    <?php if (count($photos) > 4): ?>
                    <!-- Load More Button -->
                    <div class="text-center mt-5" id="loadMoreContainer">
                        <button type="button" class="btn btn-outline-danger rounded-pill px-5 py-3 fw-bold load-more-gallery-btn" id="loadMoreBtn">
                            <i class="bi bi-arrow-clockwise me-2"></i> Load More Photos
                        </button>
                    </div>
                    <?php endif; ?>

                </div>
            </div>

            <!-- Sidebar Column -->
            <div class="col-lg-4">
                <?php $this->load->view('about/company_sidebar', ['active_link' => 'photo-gallery']); ?>
            </div>

        </div>
    </div>
</section>

<!-- Lightbox Modals for Photo Preview -->
<?php 
foreach ($photos as $i => $photo): 
    $photo_url = $photo['is_default'] 
        ? base_url('assets/images/gallery/' . $photo['image']) 
        : base_url('assets/uploads/album/' . $photo['image']);
?>
<div class="modal fade" id="galleryModal<?= $i ?>" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content border-0 rounded-4 overflow-hidden">
            <div class="modal-header border-0 bg-dark text-white py-3">
                <h5 class="modal-title fw-bold fs-6"><i class="bi bi-images me-2 text-danger"></i><?= htmlspecialchars($photo['title']) ?></h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-0 bg-black">
                <img loading="lazy" src="<?= $photo_url ?>" class="w-100 img-fluid" alt="<?= htmlspecialchars($photo['alt']) ?>">
            </div>
        </div>
    </div>
</div>
<?php endforeach; ?>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const loadMoreBtn = document.getElementById('loadMoreBtn');
    const hiddenItems = document.querySelectorAll('.gallery-item-hidden');
    const loadMoreContainer = document.getElementById('loadMoreContainer');
    
    if (loadMoreBtn && hiddenItems.length > 0) {
        loadMoreBtn.addEventListener('click', function() {
            hiddenItems.forEach(item => {
                item.classList.remove('d-none');
                item.classList.add('animate-fade-in');
            });
            loadMoreContainer.style.display = 'none';
        });
    }
});
</script>
