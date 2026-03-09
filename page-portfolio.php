<?php
/**
 * Template Name: Portfolio Page
 * 
 * Custom page template for Benjanard Portfolio integration
 *
 * @package Hashbox_Studio
 */

get_header();
?>

<div id="passwordGate" class="password-gate">
    <div class="password-gate-inner">
        <a href="<?php echo home_url(); ?>" class="gate-logo">
            <span class="logo-main">HASHBOX</span><span class="logo-dot">.STUDIO</span>
        </a>
        <h2 class="gate-title">กรุณาใส่รหัสผ่าน</h2>
        <form id="passwordForm" class="password-form">
            <input type="password" id="passwordInput" class="password-input" placeholder="รหัสผ่าน" autocomplete="current-password" required>
            <p id="passwordError" class="password-error"></p>
            <button type="submit" class="password-submit">เข้าสู่ระบบ</button>
        </form>
    </div>
</div>

<div id="portfolioApp" class="portfolio-page-wrapper" style="display: none;">
    <div class="gradient-accent"></div>

    <nav class="portfolio-nav">
        <a href="<?php echo home_url(); ?>" class="nav-logo">
            <span class="logo-main">HASHBOX</span><span class="logo-dot">.STUDIO</span>
        </a>
        <button id="refreshBtn" class="refresh-btn">Refresh Data</button>
    </nav>

    <div id="loading" class="loading">
        <div class="spinner"></div>
        <p>Loading portfolio...</p>
    </div>

    <div id="error" class="error" style="display: none;">
        <h3>Something went wrong</h3>
        <p id="errorMessage"></p>
        <button onclick="loadPortfolioData()" class="retry-btn">Try again</button>
    </div>

    <main id="content" style="display: none;">
        <section class="projects-section">
            <span class="section-label">PORTFOLIO</span>
            <h2 class="section-heading">Selected Work</h2>
            <p class="section-desc">A curated glimpse into Benjanard's design projects — from enterprise apps to brand experiences.</p>
            <div id="projectsContainer" class="projects-list">
                <!-- Projects will be loaded here via JavaScript -->
            </div>
        </section>
    </main>
</div>

<?php
get_footer();
?>