<?php 
if (!defined('BASEPATH')) exit('No direct script access allowed'); 

if (!function_exists('format_stat_with_span')) {
    function format_stat_with_span($val) {
        if (preg_match('/^(\d+)(.*)$/', $val, $matches)) {
            return $matches[1] . '<span class="about-stat-suffix">' . $matches[2] . '</span>';
        }
        return $val;
    }
}
?>

<?php $this->load->view('template/breadcrumb', array('breadcrumb_title' => 'About Us', 'breadcrumb_icon' => 'bi-people-fill')); ?>

<section class="service-details-section mb-5 pb-5">
    <div class="container">
        <div class="row">

            <div class="col-lg-8">
                <div class="service-main-content">
                    <!-- Heading -->
                    <h2 class="service-section-title">About <?= $company3 ?></h2>
                        <span class="fw-bold">Moving People's Life with Credibility, Professionalism, and Responsibility</span>
                        <p>When it comes to moving services at <strong><?= $company3 ?></strong> we consider every relocation to be much more than the process of transporting people's belongings. Each relocation is associated with families starting a new life, businesses entering a new stage of development, individuals getting a second chance. That is why our duty doesn't finish with packing and transporting people's belongings; we are moving people's lives forward with credibility and reliability.</p>
                        <p>For a number of years, we have established ourselves as a reliable moving company thanks to professionalism, credibility, and responsible approach to the work. Our highly experienced team takes great care in performing every project safely and punctually providing safe and comfortable moving solutions to households, offices, commercial and industrial enterprises of India.</p>
                    <span class="fs-3 fw-bold">Our History</span>
                    <p>Our history started from one idea: the moving process shouldn't become stressful. We understood that many people were concerned about the issues of damaged goods, late delivery, additional expenses, and bad communications during the process of relocation. So we decided to create a company where there would always be trust, transparency, and client care.</p>

                    <p>What started as a small moving company has been growing with time due to positive recommendations and stable relations with our clients. Instead of trying to perform a large number of moving projects, we tried to do everything in the right way, and each successful project proved to us that honesty is the best policy.</p>

                    <!-- Stats Dashboard Grid -->
                    <div class="row g-4 mb-5">
                        <div class="col-sm-6 col-md-3">
                            <div class="about-stat-card">
                                <div class="about-stat-number"><?= $yearsExperience ?></div>
                                <div class="about-stat-label">Years Legacy</div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <div class="about-stat-card">
                                <div class="about-stat-number"><?= $successfulMoves ?></div>
                                <div class="about-stat-label">Safe Moves</div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <div class="about-stat-card">
                                <div class="about-stat-number"><?= $happyClients ?></div>
                                <div class="about-stat-label">Happy Clients</div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <div class="about-stat-card">
                                <div class="about-stat-number"><?= $statesCovered ?></div>
                                <div class="about-stat-label">States Covered</div>
                            </div>
                        </div>
                    </div>

                    <!-- Core Vision and Mission -->
                    <div class="row g-4 mb-5">
                        <div class="col-md-6">
                            <div class="about-vision-card h-100 shadow-sm">
                                <div class="about-vision-icon">
                                    <i class="bi bi-eye-fill"></i>
                                </div>
                                <h4 class="fw-bold mb-3">Our Vision</h4>
                                <p class="text-muted small mb-0">
                                    Our mission is to provide the safe, cheap and reliable relocation services that will make the moving process easier for every customer. We are devoted to the performance of professional packing, secure transportation, prompt delivery, and client support while keeping the entire process of relocation completely transparent.
                                </p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="about-vision-card h-100 shadow-sm">
                                <div class="about-vision-icon">
                                    <i class="bi bi-briefcase-fill"></i>
                                </div>
                                <h4 class="fw-bold mb-3">Our Mission</h4>
                                <p class="text-muted small mb-0">
                                    Our vision is to become one of the most reputable names in packing and moving services in India by constantly providing dependable services, implementing new and better moving practices and establishing long-lasting relations with our clients based on credibility, professionalism, and excellence.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Core Values -->
                    <h2 class="service-section-title">Our Core Values</h2>
                    <div class="about-service-text mb-4">
                        <p>
                            Each decision of ours starts from one question "Is it going to improve the client's moving experience?" Your satisfaction stays our highest priority.
                        </p>
                    </div>
                    <div class="row g-4">
                        <div class="col-md-6">
                            <div class="d-flex align-items-start gap-3 p-4 border rounded-4 shadow-sm about-card-hover">
                                <div class="fs-3 text-danger about-icon-box-lg m-0"><i class="bi bi-patch-check-fill"></i></div>
                                <div>
                                    <h5 class="fw-bold mb-1">Client First</h5>
                                    <p class="text-muted small mb-0">Each decision of ours starts from one question "Is it going to improve the client's moving experience?" Your satisfaction stays our highest priority.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="d-flex align-items-start gap-3 p-4 border rounded-4 shadow-sm about-card-hover">
                                <div class="fs-3 text-danger about-icon-box-lg m-0"><i class="bi bi-award-fill"></i></div>
                                <div>
                                    <h5 class="fw-bold mb-1">Honesty and Transparency</h5>
                                    <p class="text-muted small mb-0">We believe that the trust is being created through the means of transparent communications, reasonable prices and fulfillment of all our commitments.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="d-flex align-items-start gap-3 p-4 border rounded-4 shadow-sm about-card-hover">
                                <div class="fs-3 text-danger about-icon-box-lg m-0"><i class="bi bi-person-fill-check"></i></div>
                                <div>
                                   <h5 class="fw-bold mb-1">Safety without Compromises</h5>
                                    <p class="text-muted small mb-0">From high-quality packing materials to responsible loading and secure transportation - the protection of your property remains our main responsibility.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="d-flex align-items-start gap-3 p-4 border rounded-4 shadow-sm about-card-hover">
                                <div class="fs-3 text-danger about-icon-box-lg m-0"><i class="bi bi-speedometer2"></i></div>
                                <div>
                                    <h5 class="fw-bold mb-1">Professional Excellence</h5>
                                    <p class="text-muted small mb-0">Our specially trained team of movers undertakes each task following carefully planned out steps and according to industry standards.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <h4 class="mt-4">Why Do Our Clients Choose Us?</h4>
                    <p>Our clients rely on us as a company which values such qualities as trust and reliability very much. We do not give any false promises; instead, we concentrate on proper planning, reliable services, affordable prices and fast results.</p>
                    <p>Our professional team understands that every case is unique, and listens to our clients, makes necessary plans and coordinates their actions during the whole moving process.</p>

                    <h5>Our Commitment to You</h5>
                    <p>A successful moving process isn't just about reaching the destination point. It's about feeling confident throughout the whole journey.</p>

                    <p>At <b><?= $company3 ?></b>, we are dedicated to making each relocation process smooth, well-organized and stress-free for you. No matter if you need to move your household items, office, vehicle or industrial equipment - you can be sure that we will perform each task with great care, professionalism and respect.</p>

                </div>
            </div>

            <div class="col-lg-4">
                <?php $this->load->view('about/company_sidebar', ['active_link' => 'about-us']); ?>
            </div>
        </div>
    </div>
</section>
