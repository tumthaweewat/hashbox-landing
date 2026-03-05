<?php
/**
 * Template Part: Contact Section
 *
 * @package Hashbox_Studio
 */
?>
<!-- ============ SECTION 8 — CONTACT ============ -->
<section id="contact" class="section-padding section-surface">
    <div class="container">
        <div class="contact-grid">
            <div class="contact-left">
                <span class="section-label">GET IN TOUCH</span>
                <h2 class="section-title contact-title">Let's Build Something That Actually Works</h2>
                <p class="contact-sub">Ready to elevate your business? We're here to listen and help with every project.</p>

                <div class="contact-items">
                    <div class="contact-item">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><rect x="2" y="4" width="20" height="16" rx="2"/><polyline points="22,4 12,13 2,4"/></svg>
                        <span>hello@hashbox.studio</span>
                    </div>
                    <div class="contact-item">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
                        <span>Mon-Fri 9:00-18:00</span>
                    </div>
                </div>

                <a href="https://lin.ee/Xagx6i4" class="btn btn-line-oa" target="_blank" rel="noopener noreferrer">LINE OA</a>

                <div class="social-links">
                    <a href="#" class="social-pill" aria-label="Instagram">IG</a>
                    <a href="#" class="social-pill" aria-label="Facebook">FB</a>
                    <a href="#" class="social-pill" aria-label="LinkedIn">LI</a>
                    <a href="https://lin.ee/Xagx6i4" class="social-pill" aria-label="LINE" target="_blank" rel="noopener noreferrer">LINE</a>
                </div>
            </div>

            <div class="contact-right">
                <form id="contactForm" class="contact-form">
                    <div class="form-group">
                        <label for="name">Full Name</label>
                        <input type="text" id="name" name="name" required placeholder="Your full name">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" required placeholder="you@company.com">
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone Number</label>
                        <input type="tel" id="phone" name="phone" placeholder="+1 (555) 000-0000">
                    </div>
                    <div class="form-group">
                        <label for="website">Website URL <span class="optional">(optional)</span></label>
                        <input type="url" id="website" name="website" placeholder="https://yoursite.com">
                    </div>
                    <div class="form-group">
                        <label for="service">Service of Interest</label>
                        <select id="service" name="service">
                            <option value="">Select a service</option>
                            <option value="web">Website Development</option>
                            <option value="ecommerce">E-commerce</option>
                            <option value="seo">Performance & SEO</option>
                            <option value="digital-workforce">Digital Workforce Studio</option>
                            <option value="consult">Not sure / Need guidance</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="message">Tell Us About Your Project</label>
                        <textarea id="message" name="message" rows="4" placeholder="Share more details about your project..."></textarea>
                    </div>
                    <button type="submit" class="btn btn-cta btn-submit">Send Message &rarr;</button>
                </form>
            </div>
        </div>
    </div>
</section>
