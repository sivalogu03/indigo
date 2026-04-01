<?php
// Dynamically fetch related services from the database based on Category Name matching
$related_services = [];
if (!empty($blog['category_name'])) {
    $cat_name = $conn->real_escape_string($blog['category_name']);
    
    // Find services in a category with the same name as the blog category
    $rel_service_sql = "SELECT s.title, s.slug, s.intro_image, sc.name as cat_name 
                         FROM services s 
                         JOIN service_categories sc ON s.category_id = sc.id 
                         WHERE sc.name = '$cat_name' AND s.published_status = 'published' 
                         ORDER BY s.id DESC LIMIT 6";
    
    $rel_res = $conn->query($rel_service_sql);
    while($rs = $rel_res->fetch_assoc()) {
        $related_services[] = $rs;
    }
}

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
                            <a href="service-details.php?slug=<?php echo htmlspecialchars($rs['slug']); ?>" class="btn btn-outline-primary rounded-pill btn-sm py-2 px-4 fw-bold mt-auto stretched-link">
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
