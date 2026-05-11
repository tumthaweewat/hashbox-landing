    </main>

    <!-- ============ FOOTER ============ -->
    <footer class="site-footer" id="footer">
        <div class="container">
            <div class="footer-grid">
                <div class="footer-col footer-brand">
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="logo footer-logo">
                        <span class="logo-icon"></span>
                        <span class="logo-text">HASHBOX<span class="logo-accent">.STUDIO</span></span>
                    </a>
                    <p class="footer-desc">เอเจนซีที่รวม Web Development, Digital Marketing + CRO และ AI Consulting ไว้ในทีมเดียว ส่งมอบเว็บที่ผ่าน Lighthouse 100 และ AI Workforce ที่ใช้ได้จริง</p>
                    <div class="social-links footer-socials">
                        <a href="https://www.instagram.com/hashboxstudio" class="social-pill" aria-label="Instagram" target="_blank" rel="noopener noreferrer">IG</a>
                        <a href="https://www.facebook.com/hashboxstudio" class="social-pill" aria-label="Facebook" target="_blank" rel="noopener noreferrer">FB</a>
                        <a href="https://www.linkedin.com/company/hashbox-studio" class="social-pill" aria-label="LinkedIn" target="_blank" rel="noopener noreferrer">LI</a>
                        <a href="https://lin.ee/Xagx6i4" class="social-pill" aria-label="LINE" target="_blank" rel="noopener noreferrer">LINE</a>
                    </div>
                </div>
                <div class="footer-col">
                    <h4 class="footer-heading">Services</h4>
                    <ul>
                        <li><a href="<?php echo esc_url( home_url( '/services/seo-ready-website/' ) ); ?>">SEO-Ready Website</a></li>
                        <li><a href="<?php echo esc_url( home_url( '/services/digital-marketing-tools/' ) ); ?>">Marketing Tools + CRO</a></li>
                        <li><a href="<?php echo esc_url( home_url( '/services/ai-consulting/' ) ); ?>">AI Expert Consulting</a></li>
                        <li><a href="<?php echo esc_url( home_url( '/services/' ) ); ?>">All Services</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4 class="footer-heading">Company</h4>
                    <ul>
                        <li><a href="<?php echo esc_url( home_url( '/about/' ) ); ?>">About</a></li>
                        <li><a href="<?php echo esc_url( home_url( '/work/' ) ); ?>">Case Studies</a></li>
                        <li><a href="<?php echo esc_url( home_url( '/portfolio/' ) ); ?>">Portfolio</a></li>
                        <li><a href="<?php echo esc_url( home_url( '/#insights' ) ); ?>">Insights</a></li>
                        <li><a href="<?php echo esc_url( home_url( '/#contact' ) ); ?>">Contact</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4 class="footer-heading">Contact</h4>
                    <ul>
                        <li><a href="mailto:hello@hashbox.co.th">hello@hashbox.co.th</a></li>
                        <li><a href="tel:+6622666222">02 266 6222</a></li>
                        <li><a href="https://lin.ee/Xagx6i4" target="_blank" rel="noopener noreferrer">LINE: @hashboxstudio</a></li>
                        <li>จันทร์-ศุกร์ 9:00-18:00</li>
                        <li>139 Pan Rd, Si Lom, Bang Rak, Bangkok 10500</li>
                    </ul>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; <?php echo esc_html( date( 'Y' ) ); ?> Hashbox Studio. All rights reserved.</p>
                <div class="footer-legal">
                    <a href="<?php echo esc_url( home_url( '/privacy-policy/' ) ); ?>">Privacy Policy</a>
                    <a href="<?php echo esc_url( home_url( '/privacy-policy/' ) ); ?>">Terms</a>
                </div>
            </div>
        </div>
    </footer>

    <?php wp_footer(); ?>
</body>

</html>
