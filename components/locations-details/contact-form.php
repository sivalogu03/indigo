<!-- Location Contact Form Start -->
<div class="location-contact-form-section py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <div class="form-wrapper">
                    <div class="section-title text-center mb-5">
                        <h3 class="wow fadeInUp">Get In Touch</h3>
                        <h2 class="text-anime-style-2" data-cursor="-opaque">Schedule Your <span>Free Consultation</span></h2>
                        <p class="wow fadeInUp" data-wow-delay="0.2s">Visit our <?php echo ucwords(str_replace('-', ' ', $location)); ?> studio or book an online consultation with our design experts.</p>
                    </div>

                    <form id="location-contact-form" class="form-content wow fadeInUp" data-wow-delay="0.3s">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <label for="loc_name">Full Name *</label>
                                    <input type="text" id="loc_name" name="name" class="form-control" placeholder="Your Full Name" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <label for="loc_email">Email Address *</label>
                                    <input type="email" id="loc_email" name="email" class="form-control" placeholder="Your Email" required>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <label for="loc_phone">Phone Number *</label>
                                    <input type="tel" id="loc_phone" name="phone" class="form-control" placeholder="Your Phone Number" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <label for="loc_address">Property Address *</label>
                                    <input type="text" id="loc_address" name="address" class="form-control" placeholder="Your Property Address" required>
                                </div>
                            </div>
                        </div>

                        <div class="form-group mb-3">
                            <label for="loc_type">Project Type *</label>
                            <select id="loc_type" name="project_type" class="form-control" required>
                                <option value="">Select Project Type</option>
                                <option value="residential">Residential</option>
                                <option value="commercial">Commercial</option>
                                <option value="renovation">Renovation</option>
                                <option value="modular-kitchen">Modular Kitchen</option>
                                <option value="bathroom">Bathroom Design</option>
                                <option value="other">Other</option>
                            </select>
                        </div>

                        <div class="form-group mb-3">
                            <label for="loc_budget">Budget Range *</label>
                            <select id="loc_budget" name="budget" class="form-control" required>
                                <option value="">Select Budget Range</option>
                                <option value="below-1-lakh">Below ₹1 Lakh</option>
                                <option value="1-5-lakh">₹1 - ₹5 Lakh</option>
                                <option value="5-10-lakh">₹5 - ₹10 Lakh</option>
                                <option value="10-20-lakh">₹10 - ₹20 Lakh</option>
                                <option value="above-20-lakh">Above ₹20 Lakh</option>
                            </select>
                        </div>

                        <div class="form-group mb-3">
                            <label for="loc_timeline">Project Timeline *</label>
                            <select id="loc_timeline" name="timeline" class="form-control" required>
                                <option value="">Select Timeline</option>
                                <option value="1-month">Within 1 Month</option>
                                <option value="1-3-months">1-3 Months</option>
                                <option value="3-6-months">3-6 Months</option>
                                <option value="6-months+">6+ Months</option>
                                <option value="not-decided">Not Decided Yet</option>
                            </select>
                        </div>

                        <div class="form-group mb-3">
                            <label for="loc_consultation">Preferred Consultation Mode *</label>
                            <select id="loc_consultation" name="consultation_mode" class="form-control" required>
                                <option value="">Select Mode</option>
                                <option value="studio-visit">Visit Studio in <?php echo ucwords(str_replace('-', ' ', $location)); ?></option>
                                <option value="online">Online Video Consultation</option>
                                <option value="site">Site Visit at Your Property</option>
                                <option value="undecided">Undecided</option>
                            </select>
                        </div>

                        <div class="form-group mb-3">
                            <label for="loc_message">Tell us about your project *</label>
                            <textarea id="loc_message" name="message" class="form-control" rows="5" placeholder="Describe your design ideas, requirements, and preferences..." required></textarea>
                        </div>

                        <div class="form-group mb-3">
                            <div class="form-check">
                                <input type="checkbox" id="loc_agree" name="agree" class="form-check-input" required>
                                <label class="form-check-label" for="loc_agree">
                                    I agree to the terms and conditions and privacy policy *
                                </label>
                            </div>
                        </div>

                        <div class="form-group mb-3">
                            <div class="form-check">
                                <input type="checkbox" id="loc_subscribe" name="subscribe" class="form-check-input">
                                <label class="form-check-label" for="loc_subscribe">
                                    Send me updates about new designs and special offers
                                </label>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary w-100">Request Consultation</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Location Contact Form End -->

<style>
.location-contact-form-section {
    background-color: white;
}

.form-wrapper {
    background-color: #f9f9f9;
    padding: 40px;
    border-radius: 8px;
    box-shadow: 0 2px 8px rgba(0,0,0,0.05);
}

.form-content .form-group {
    margin-bottom: 20px;
}

.form-content label {
    font-weight: 600;
    color: #2a2a2a;
    margin-bottom: 8px;
    font-size: 14px;
    display: block;
}

.form-content .form-control {
    padding: 10px 15px;
    border: 1px solid #ddd;
    border-radius: 6px;
    font-size: 14px;
    background-color: white;
}

.form-content .form-control:focus {
    border-color: #ff6b35;
    box-shadow: 0 0 0 0.2rem rgba(255, 107, 53, 0.25);
}

.form-content textarea.form-control {
    resize: vertical;
    font-family: inherit;
}

.form-check-label {
    margin-bottom: 0;
    font-size: 14px;
    color: #555;
}

.btn-primary {
    background-color: #ff6b35;
    border-color: #ff6b35;
    padding: 12px 24px;
    font-weight: 600;
    transition: all 0.3s ease;
    text-decoration: none;
}

.btn-primary:hover {
    background-color: #e55a23;
    border-color: #e55a23;
    color: white;
}
</style>
