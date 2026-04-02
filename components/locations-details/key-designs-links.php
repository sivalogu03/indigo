<!-- Key Designs Links Start -->
<div class="key-designs-section py-5">
    <div class="container">
        <div class="row mb-5">
            <div class="col-lg-12">
                <div class="section-title text-center">
                    <h3 class="wow fadeInUp">Featured Categories</h3>
                    <h2 class="text-anime-style-2" data-cursor="-opaque">Popular Design <span>Services</span></h2>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-3 col-md-6 mb-4">
                <a href="service-details.php?service=kitchen" class="design-link-card wow fadeInUp" data-wow-delay="0.1s">
                    <div class="design-link-image">
                        <img src="assets/images/services/kitchen.jpg" alt="Kitchen Design">
                        <div class="overlay"></div>
                    </div>
                    <div class="design-link-content">
                        <h5>Modular Kitchen</h5>
                        <p>Explore our kitchen design portfolio</p>
                        <span class="link-arrow"><i class="fas fa-arrow-right"></i></span>
                    </div>
                </a>
            </div>

            <div class="col-lg-3 col-md-6 mb-4">
                <a href="service-details.php?service=bedroom" class="design-link-card wow fadeInUp" data-wow-delay="0.2s">
                    <div class="design-link-image">
                        <img src="assets/images/services/bedroom.jpg" alt="Bedroom Design">
                        <div class="overlay"></div>
                    </div>
                    <div class="design-link-content">
                        <h5>Bedroom Design</h5>
                        <p>Explore our bedroom design portfolio</p>
                        <span class="link-arrow"><i class="fas fa-arrow-right"></i></span>
                    </div>
                </a>
            </div>

            <div class="col-lg-3 col-md-6 mb-4">
                <a href="service-details.php?service=bathroom" class="design-link-card wow fadeInUp" data-wow-delay="0.3s">
                    <div class="design-link-image">
                        <img src="assets/images/services/bathroom.jpg" alt="Bathroom Design">
                        <div class="overlay"></div>
                    </div>
                    <div class="design-link-content">
                        <h5>Bathroom Design</h5>
                        <p>Explore our bathroom design portfolio</p>
                        <span class="link-arrow"><i class="fas fa-arrow-right"></i></span>
                    </div>
                </a>
            </div>

            <div class="col-lg-3 col-md-6 mb-4">
                <a href="service-details.php?service=living-room" class="design-link-card wow fadeInUp" data-wow-delay="0.4s">
                    <div class="design-link-image">
                        <img src="assets/images/services/living-room.jpg" alt="Living Room Design">
                        <div class="overlay"></div>
                    </div>
                    <div class="design-link-content">
                        <h5>Living Room Design</h5>
                        <p>Explore our living room design portfolio</p>
                        <span class="link-arrow"><i class="fas fa-arrow-right"></i></span>
                    </div>
                </a>
            </div>

            <div class="col-lg-3 col-md-6 mb-4">
                <a href="service-details.php?service=dining" class="design-link-card wow fadeInUp" data-wow-delay="0.5s">
                    <div class="design-link-image">
                        <img src="assets/images/services/dining.jpg" alt="Dining Room Design">
                        <div class="overlay"></div>
                    </div>
                    <div class="design-link-content">
                        <h5>Dining Room Design</h5>
                        <p>Explore our dining room design portfolio</p>
                        <span class="link-arrow"><i class="fas fa-arrow-right"></i></span>
                    </div>
                </a>
            </div>

            <div class="col-lg-3 col-md-6 mb-4">
                <a href="service-details.php?service=office" class="design-link-card wow fadeInUp" data-wow-delay="0.6s">
                    <div class="design-link-image">
                        <img src="assets/images/services/office.jpg" alt="Office Design">
                        <div class="overlay"></div>
                    </div>
                    <div class="design-link-content">
                        <h5>Office Design</h5>
                        <p>Explore our office design portfolio</p>
                        <span class="link-arrow"><i class="fas fa-arrow-right"></i></span>
                    </div>
                </a>
            </div>

            <div class="col-lg-3 col-md-6 mb-4">
                <a href="service-details.php?service=commercial" class="design-link-card wow fadeInUp" data-wow-delay="0.7s">
                    <div class="design-link-image">
                        <img src="assets/images/services/commercial.jpg" alt="Commercial Design">
                        <div class="overlay"></div>
                    </div>
                    <div class="design-link-content">
                        <h5>Commercial Design</h5>
                        <p>Explore our commercial design portfolio</p>
                        <span class="link-arrow"><i class="fas fa-arrow-right"></i></span>
                    </div>
                </a>
            </div>

            <div class="col-lg-3 col-md-6 mb-4">
                <a href="gallery.php" class="design-link-card wow fadeInUp" data-wow-delay="0.8s">
                    <div class="design-link-image">
                        <img src="assets/images/services/gallery.jpg" alt="View All Gallery">
                        <div class="overlay"></div>
                    </div>
                    <div class="design-link-content">
                        <h5>View All Gallery</h5>
                        <p>See all our completed projects</p>
                        <span class="link-arrow"><i class="fas fa-arrow-right"></i></span>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>
<!-- Key Designs Links End -->

<style>
.key-designs-section {
    background-color: #f9f9f9;
}

.design-link-card {
    position: relative;
    display: block;
    overflow: hidden;
    border-radius: 8px;
    text-decoration: none;
    height: 300px;
    box-shadow: 0 2px 8px rgba(0,0,0,0.05);
    transition: all 0.3s ease;
}

.design-link-card:hover {
    transform: translateY(-8px);
    box-shadow: 0 5px 20px rgba(0,0,0,0.15);
}

.design-link-image {
    position: relative;
    width: 100%;
    height: 100%;
    overflow: hidden;
}

.design-link-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.3s ease;
}

.design-link-card:hover .design-link-image img {
    transform: scale(1.1);
}

.design-link-image .overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: linear-gradient(135deg, rgba(0,0,0,0.3) 0%, rgba(0,0,0,0.6) 100%);
    transition: all 0.3s ease;
}

.design-link-card:hover .design-link-image .overlay {
    background: linear-gradient(135deg, rgba(255,107,53,0.4) 0%, rgba(0,0,0,0.7) 100%);
}

.design-link-content {
    position: absolute;
    bottom: 0;
    left: 0;
    right: 0;
    padding: 25px;
    color: white;
    transition: all 0.3s ease;
}

.design-link-content h5 {
    font-size: 18px;
    font-weight: 700;
    color: white;
    margin: 0 0 8px 0;
    transition: all 0.3s ease;
}

.design-link-content p {
    font-size: 13px;
    color: rgba(255,255,255,0.9);
    margin: 0;
    transition: all 0.3s ease;
}

.design-link-card:hover .design-link-content {
    padding-bottom: 35px;
}

.design-link-card:hover .design-link-content h5 {
    color: #ff6b35;
}

.link-arrow {
    position: absolute;
    right: 25px;
    bottom: 25px;
    width: 40px;
    height: 40px;
    background-color: #ff6b35;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
    font-size: 16px;
    opacity: 0;
    transform: translate(20px, 20px);
    transition: all 0.3s ease;
}

.design-link-card:hover .link-arrow {
    opacity: 1;
    transform: translate(0, 0);
}
</style>
