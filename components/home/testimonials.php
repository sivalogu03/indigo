<div class="our-testimonials">
    <div class="container">
        <div class="row">
            <div class="col-lg-9">
                <div class="section-title">
                    <br><br><br>
                    <h3 class="wow fadeInUp">Indigo Interiors</h3>
                    <h2 class="text-anime-style-2" data-cursor="-opaque"><span>Our </span>Customer Review</h2>
                </div>
                </div>
        </div>

        <div class="row g-4">
            <?php for($i=1; $i<=6; $i++): ?>
            <div class="col-lg-4 col-md-6">
                <div class="card shadow border-0">
                    <img src="assets/images/testimonials/review-<?php echo $i; ?>.png" class="card-img-top" alt="Customer Review">
                </div>
            </div>
            <?php endfor; ?>
        </div>

        <div class="py-4"></div> <div class="row g-4">
            <?php 
            $recent_reviews = [3, 4, 5, 6, 2, 1]; 
            foreach($recent_reviews as $num): 
            ?>
            <div class="col-lg-4 col-md-6">
                <div class="card shadow border-0">
                    <img src="assets/images/testimonials/recent-<?php echo $num; ?>.png" class="card-img-top" alt="Customer Review">
                </div>
            </div>
            <?php endforeach; ?>
        </div>
        
        <br><br>
    </div>
</div>