<!-- Intro Section Start -->
<div class="location-intro-section py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="intro-content">
                    <h3 class="section-subtitle wow fadeInUp">About This Location</h3>
                    <h2 class="wow fadeInUp" data-wow-delay="0.1s">Indigo Interiors in <?php echo ucwords(str_replace('-', ' ', $location)); ?></h2>
                    <p class="wow fadeInUp" data-wow-delay="0.2s">
                        Welcome to our premier design studio in <?php echo ucwords(str_replace('-', ' ', $location)); ?>. With years of experience and a team of talented designers and architects, we specialize in creating customized interior solutions for residential and commercial spaces throughout the area.
                    </p>
                    <p class="wow fadeInUp" data-wow-delay="0.3s">
                        Our <?php echo ucwords(str_replace('-', ' ', $location)); ?> studio is dedicated to understanding your unique vision and bringing it to life with innovative designs, quality craftsmanship, and exceptional service. Whether you're planning a home renovation or commercial redesign, we're here to help.
                    </p>
                    <div class="intro-highlights mt-4">
                        <div class="highlight-item wow fadeInUp" data-wow-delay="0.4s">
                            <i class="fas fa-check-circle"></i>
                            <span>Expert Design Team</span>
                        </div>
                        <div class="highlight-item wow fadeInUp" data-wow-delay="0.5s">
                            <i class="fas fa-check-circle"></i>
                            <span>Custom Solutions</span>
                        </div>
                        <div class="highlight-item wow fadeInUp" data-wow-delay="0.6s">
                            <i class="fas fa-check-circle"></i>
                            <span>Quality Guaranteed</span>
                        </div>
                        <div class="highlight-item wow fadeInUp" data-wow-delay="0.7s">
                            <i class="fas fa-check-circle"></i>
                            <span>Free Consultation</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="intro-image wow fadeInUp" data-wow-delay="0.3s">
                    <figure class="image-anime reveal">
                        <img src="assets/images/about/about-2.jpg" alt="Interior Design Studio">
                    </figure>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Intro Section End -->

<style>
.location-intro-section {
    background-color: white;
}

.intro-content h3.section-subtitle {
    color: #ff6b35;
    font-size: 14px;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 1px;
    margin-bottom: 10px;
}

.intro-content h2 {
    font-size: 36px;
    font-weight: 700;
    color: #2a2a2a;
    margin-bottom: 20px;
    line-height: 1.3;
}

.intro-content p {
    font-size: 15px;
    color: #666;
    line-height: 1.8;
    margin-bottom: 15px;
}

.intro-highlights {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 15px;
}

.highlight-item {
    display: flex;
    align-items: center;
    gap: 10px;
    font-size: 14px;
    color: #2a2a2a;
}

.highlight-item i {
    color: #ff6b35;
    font-size: 16px;
}

.intro-image {
    position: relative;
}

.intro-image img {
    width: 100%;
    border-radius: 8px;
}

@media (max-width: 768px) {
    .intro-content h2 {
        font-size: 28px;
    }

    .intro-highlights {
        grid-template-columns: 1fr;
    }
}
</style>
