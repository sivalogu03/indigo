<?php
// Static related services data
$related_services = [
    [
        'title' => 'Interior Design Consultation',
        'slug' => 'interior-design-consultation',
        'intro_image' => 'service-1.jpg',
        'cat_name' => 'Design'
    ],
    [
        'title' => 'Space Planning & Layout Design',
        'slug' => 'space-planning',
        'intro_image' => 'service-2.jpg',
        'cat_name' => 'Design'
    ],
    [
        'title' => 'Color & Material Selection',
        'slug' => 'color-material-selection',
        'intro_image' => 'service-3.jpg',
        'cat_name' => 'Design'
    ],
    [
        'title' => 'Lighting Design Solutions',
        'slug' => 'lighting-design',
        'intro_image' => 'service-4.jpg',
        'cat_name' => 'Design'
    ],
    [
        'title' => 'Furniture & Decor Styling',
        'slug' => 'furniture-styling',
        'intro_image' => 'service-5.jpg',
        'cat_name' => 'Styling'
    ],
    [
        'title' => 'Renovation & Remodeling',
        'slug' => 'renovation-remodeling',
        'intro_image' => 'service-6.jpg',
        'cat_name' => 'Renovation'
    ]
];

if (!empty($related_services)):
?>
<div class="related-services-section mt-5 pt-4">
    <div class="section-title mb-4 d-flex align-items-center justify-content-between">
        <div>
            <span class="badge bg-primary-subtle text-primary mb-2 text-uppercase fw-bold shadow-sm px-3 py-2 rounded-pill">Service Solutions</span>
            <h2 class="fw-bold font-outfit mb-0 h3">Related Services for You</h2>
        </div>
        <div class="swiper-navigation-buttons d-none d-md-flex gap-2">
            <div class="swiper-button-prev-svc btn btn-outline-primary rounded-circle shadow-sm" style="width: 40px; height: 40px; display: grid; place-items: center; cursor: pointer;">
                <i class="fas fa-chevron-left small"></i>
            </div>
            <div class="swiper-button-next-svc btn btn-outline-primary rounded-circle shadow-sm" style="width: 40px; height: 40px; display: grid; place-items: center; cursor: pointer;">
                <i class="fas fa-chevron-right small"></i>
            </div>
        </div>
    </div>

    <!-- Related Services Carousel -->
    <div class="swiper-container related-services-swiper overflow-hidden pb-4">
        <div class="swiper-wrapper">
            <?php foreach ($related_services as $rs): ?>
                <div class="swiper-slide h-auto">
                    <div class="card h-100 border-0 rounded-4 shadow-sm overflow-hidden transition-up bg-white">
                        <div class="position-relative overflow-hidden" style="height: 220px;">
                            <img src="assets/images/services/<?php echo !empty($rs['intro_image']) ? $rs['intro_image'] : 'placeholder.jpg'; ?>" 
                                 class="card-img-top h-100 w-100 object-fit-cover transition-scale" 
                                 alt="<?php echo htmlspecialchars($rs['title']); ?>">
                            <div class="position-absolute top-0 end-0 m-3">
                                <span class="badge bg-white text-primary fw-bold shadow-sm px-3 py-2 rounded-pill small">
                                    <?php echo htmlspecialchars($rs['cat_name']); ?>
                                </span>
                            </div>
                        </div>
                        <div class="card-body p-4 d-flex flex-column text-center">
                            <h5 class="card-title fw-bold font-outfit mb-3 lh-sm text-dark">
                                <?php echo htmlspecialchars($rs['title']); ?>
                            </h5>
                            <a href="service-details.php?id=<?php echo htmlspecialchars($rs['slug']); ?>" class="btn btn-outline-primary rounded-pill btn-sm py-2 px-4 fw-bold mt-auto stretched-link">
                                Explore Service <i class="fas fa-arrow-right ms-2 transition-arrow"></i>
                            </a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        <!-- Pagination for mobile -->
        <div class="swiper-pagination-svc position-relative mt-4 d-md-none text-center"></div>
    </div>
</div>

<style>
    .transition-scale {
        transition: transform 0.5s ease;
    }
    .card:hover .transition-scale {
        transform: scale(1.1);
    }
    .transition-arrow {
        transition: transform 0.3s ease;
    }
    .card:hover .transition-arrow {
        transform: translateX(5px);
    }
    .related-services-swiper .swiper-slide {
        padding: 10px 5px;
    }
    .bg-primary-subtle {
        background-color: #e7f1ff;
    }
</style>

<script>
    // Initialize Swiper for Related Services
    window.addEventListener('load', function() {
        if (typeof Swiper !== 'undefined') {
            const svcSwiper = new Swiper('.related-services-swiper', {
                slidesPerView: 1.2,
                spaceBetween: 20,
                grabCursor: true,
                loop: false,
                navigation: {
                    nextEl: '.swiper-button-next-svc',
                    prevEl: '.swiper-button-prev-svc',
                },
                pagination: {
                    el: '.swiper-pagination-svc',
                    clickable: true,
                },
                breakpoints: {
                    640: {
                        slidesPerView: 2.2,
                        spaceBetween: 25,
                    },
                    1024: {
                        slidesPerView: 3,
                        spaceBetween: 30,
                    }
                }
            });
        }
    });
</script>
<?php endif; ?>
