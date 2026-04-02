<!-- Location Info Start -->
<div class="location-info-section py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="info-content">
                    <h3 class="mb-4">Visit Our Studio</h3>
                    <div class="row">
                        <div class="col-md-6 mb-4">
                            <div class="info-card">
                                <i class="fas fa-map-marker-alt"></i>
                                <h5>Address</h5>
                                <p>
                                    Indigo Interiors<br>
                                    <?php echo ucwords(str_replace('-', ' ', $location)); ?> Studio<br>
                                    Bangalore, Karnataka<br>
                                    India - 560000
                                </p>
                            </div>
                        </div>

                        <div class="col-md-6 mb-4">
                            <div class="info-card">
                                <i class="fas fa-phone"></i>
                                <h5>Contact</h5>
                                <p>
                                    Phone: +91 XXXXX XXXXX<br>
                                    Email: <?php echo strtolower(str_replace(' ', '', str_replace('-', '', $location))); ?>@indigo.com<br>
                                    Toll Free: 1800 XXXX XXXX
                                </p>
                            </div>
                        </div>

                        <div class="col-md-6 mb-4">
                            <div class="info-card">
                                <i class="fas fa-clock"></i>
                                <h5>Working Hours</h5>
                                <p>
                                    Mon - Fri: 10:00 AM - 7:00 PM<br>
                                    Saturday: 11:00 AM - 6:00 PM<br>
                                    Sunday: By Appointment
                                </p>
                            </div>
                        </div>

                        <div class="col-md-6 mb-4">
                            <div class="info-card">
                                <i class="fas fa-video"></i>
                                <h5>Virtual Consultation</h5>
                                <p>
                                    Available for online consultations<br>
                                    Video meetings available<br>
                                    Book your slot online
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="info-sidebar">
                    <div class="sidebar-card">
                        <h5 class="card-title">Quick Facts</h5>
                        <ul class="facts-list">
                            <li>
                                <strong>Location:</strong>
                                <span><?php echo ucwords(str_replace('-', ' ', $location)); ?></span>
                            </li>
                            <li>
                                <strong>Specialization:</strong>
                                <span>Residential & Commercial</span>
                            </li>
                            <li>
                                <strong>Experience:</strong>
                                <span>15+ Years</span>
                            </li>
                            <li>
                                <strong>Projects Completed:</strong>
                                <span>500+</span>
                            </li>
                            <li>
                                <strong>Happy Clients:</strong>
                                <span>1000+</span>
                            </li>
                        </ul>
                    </div>

                    <div class="sidebar-card mt-4">
                        <h5 class="card-title">Why Choose Us?</h5>
                        <ul class="checklist">
                            <li><i class="fas fa-check"></i> Expert Design Team</li>
                            <li><i class="fas fa-check"></i> Quality Guaranteed</li>
                            <li><i class="fas fa-check"></i> Timely Delivery</li>
                            <li><i class="fas fa-check"></i> Competitive Pricing</li>
                            <li><i class="fas fa-check"></i> 24/7 Support</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Location Info End -->

<style>
.location-info-section {
    background-color: white;
}

.location-info-section h3 {
    font-size: 28px;
    font-weight: 700;
    color: #2a2a2a;
}

.info-card {
    background-color: #f9f9f9;
    padding: 25px;
    border-radius: 8px;
    border-left: 4px solid #ff6b35;
}

.info-card i {
    font-size: 24px;
    color: #ff6b35;
    margin-bottom: 12px;
    display: block;
}

.info-card h5 {
    font-size: 16px;
    font-weight: 700;
    color: #2a2a2a;
    margin-bottom: 10px;
}

.info-card p {
    font-size: 13px;
    color: #666;
    line-height: 1.8;
    margin: 0;
}

.sidebar-card {
    background-color: #f9f9f9;
    padding: 25px;
    border-radius: 8px;
}

.card-title {
    font-size: 18px;
    font-weight: 700;
    color: #2a2a2a;
    margin-bottom: 15px;
    border-bottom: 2px solid #ff6b35;
    padding-bottom: 10px;
}

.facts-list {
    list-style: none;
    padding: 0;
    margin: 0;
}

.facts-list li {
    display: flex;
    justify-content: space-between;
    padding: 10px 0;
    border-bottom: 1px solid #e9e9e9;
    font-size: 13px;
}

.facts-list li:last-child {
    border-bottom: none;
}

.facts-list strong {
    color: #2a2a2a;
}

.facts-list span {
    color: #ff6b35;
    font-weight: 600;
}

.checklist {
    list-style: none;
    padding: 0;
    margin: 0;
}

.checklist li {
    padding: 8px 0;
    font-size: 13px;
    color: #555;
}

.checklist i {
    color: #ff6b35;
    margin-right: 10px;
}
</style>
