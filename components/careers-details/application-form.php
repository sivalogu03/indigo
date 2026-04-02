<!-- Job Application Form Start -->
<div class="application-form-section py-5" id="application-form">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <div class="form-wrapper">
                    <div class="section-title text-center mb-5">
                        <h3 class="wow fadeInUp">Apply Now</h3>
                        <h2 class="text-anime-style-2" data-cursor="-opaque">Submit Your <span>Application</span></h2>
                        <p class="wow fadeInUp" data-wow-delay="0.2s">Join our team of creative professionals. Fill out the form below to apply.</p>
                    </div>

                    <form id="application-form" class="form-content wow fadeInUp" data-wow-delay="0.3s">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <label for="app_name">Full Name *</label>
                                    <input type="text" id="app_name" name="name" class="form-control" placeholder="John Doe" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <label for="app_email">Email Address *</label>
                                    <input type="email" id="app_email" name="email" class="form-control" placeholder="john@example.com" required>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <label for="app_phone">Phone Number *</label>
                                    <input type="tel" id="app_phone" name="phone" class="form-control" placeholder="+91 XXXXX XXXXX" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <label for="app_experience">Years of Experience *</label>
                                    <select id="app_experience" name="experience" class="form-control" required>
                                        <option value="">Select Experience</option>
                                        <option value="8-10">8-10 Years</option>
                                        <option value="10-15">10-15 Years</option>
                                        <option value="15-20">15-20 Years</option>
                                        <option value="20+">20+ Years</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="form-group mb-3">
                            <label for="app_location">Current Location *</label>
                            <input type="text" id="app_location" name="location" class="form-control" placeholder="City, Country" required>
                        </div>

                        <div class="form-group mb-3">
                            <label for="app_company">Current/Previous Company</label>
                            <input type="text" id="app_company" name="company" class="form-control" placeholder="Company Name">
                        </div>

                        <div class="form-group mb-3">
                            <label for="app_designation">Current/Previous Designation</label>
                            <input type="text" id="app_designation" name="designation" class="form-control" placeholder="e.g., Senior Designer">
                        </div>

                        <div class="form-group mb-3">
                            <label for="app_specialization">Specialization/Focus Area *</label>
                            <select id="app_specialization" name="specialization" class="form-control" required>
                                <option value="">Select Specialization</option>
                                <option value="residential">Residential Design</option>
                                <option value="commercial">Commercial Design</option>
                                <option value="hospitality">Hospitality Design</option>
                                <option value="mixed">Mixed (Residential & Commercial)</option>
                                <option value="other">Other</option>
                            </select>
                        </div>

                        <div class="form-group mb-3">
                            <label for="app_skills">Key Skills *</label>
                            <textarea id="app_skills" name="skills" class="form-control" rows="3" placeholder="e.g., AutoCAD, SketchUp, 3D Rendering, Space Planning..." required></textarea>
                        </div>

                        <div class="form-group mb-3">
                            <label for="app_cv">Upload Your CV/Resume *</label>
                            <input type="file" id="app_cv" name="cv" class="form-control" accept=".pdf,.doc,.docx" required>
                            <small class="text-muted">PDF, DOC or DOCX (Max 5MB)</small>
                        </div>

                        <div class="form-group mb-3">
                            <label for="app_portfolio">Portfolio Link (Optional)</label>
                            <input type="url" id="app_portfolio" name="portfolio" class="form-control" placeholder="https://yourportfolio.com">
                        </div>

                        <div class="form-group mb-3">
                            <label for="app_notice">Notice Period *</label>
                            <select id="app_notice" name="notice" class="form-control" required>
                                <option value="">Select Notice Period</option>
                                <option value="immediate">Immediate</option>
                                <option value="15-days">15 Days</option>
                                <option value="30-days">30 Days</option>
                                <option value="60-days">60 Days</option>
                                <option value="90-days">90 Days</option>
                            </select>
                        </div>

                        <div class="form-group mb-3">
                            <label for="app_salary">Expected Salary (LPA) *</label>
                            <input type="number" id="app_salary" name="salary" class="form-control" placeholder="e.g., 8" required>
                        </div>

                        <div class="form-group mb-3">
                            <label for="app_message">Why do you want to join Indigo Interiors?</label>
                            <textarea id="app_message" name="message" class="form-control" rows="4" placeholder="Tell us about yourself and why you're interested in this position..."></textarea>
                        </div>

                        <div class="form-group mb-3">
                            <div class="form-check">
                                <input type="checkbox" id="app_agree" name="agree" class="form-check-input" required>
                                <label class="form-check-label" for="app_agree">
                                    I agree to the terms and conditions and privacy policy *
                                </label>
                            </div>
                        </div>

                        <div class="form-group mb-3">
                            <div class="form-check">
                                <input type="checkbox" id="app_subscribe" name="subscribe" class="form-check-input">
                                <label class="form-check-label" for="app_subscribe">
                                    Subscribe to our newsletter for updates about other opportunities
                                </label>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary w-100">Submit Application</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Job Application Form End -->

<style>
.application-form-section {
    background-color: #f9f9f9;
}

.form-wrapper {
    background-color: white;
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
}

.form-content .form-control {
    padding: 10px 15px;
    border: 1px solid #ddd;
    border-radius: 6px;
    font-size: 14px;
}

.form-content .form-control:focus {
    border-color: #ff6b35;
    box-shadow: 0 0 0 0.2rem rgba(255, 107, 53, 0.25);
}

.form-content textarea.form-control {
    resize: vertical;
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
}

.btn-primary:hover {
    background-color: #e55a23;
    border-color: #e55a23;
}

.text-muted {
    font-size: 12px;
}
</style>
