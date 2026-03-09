<?php
/**
 * Template Name: Portfolio Page
 * 
 * Custom page template for Benjanard Portfolio integration
 * Features a minimal, light-themed design
 *
 * @package Hashbox_Studio
 */

// Enqueue portfolio-specific styles
function hashbox_portfolio_styles() {
    wp_enqueue_style('portfolio-page-css', get_template_directory_uri() . '/css/portfolio-page.css', array(), '1.0.0');
}
add_action('wp_enqueue_scripts', 'hashbox_portfolio_styles');

get_header();
?>

<div id="portfolioApp" class="portfolio-page-wrapper">

    <!-- Hero Section - Minimal Design -->
    <section class="portfolio-hero">
        <div class="portfolio-hero-content">
            <h1 class="portfolio-hero-title">
                Selected Work<span class="title-accent">.</span>
            </h1>
            <p class="portfolio-hero-desc">
                A curated collection of digital experiences we've crafted for clients across industries. 
                Each project represents our commitment to thoughtful design and technical excellence.
            </p>

        </div>
    </section>

    <div id="loading" class="loading">
        <div class="loading-animation">
            <div class="loading-dots">
                <div class="dot"></div>
                <div class="dot"></div>
                <div class="dot"></div>
            </div>
            <p>Loading projects...</p>
        </div>
    </div>

    <div id="error" class="error" style="display: none;">
        <div class="error-content">
            <div class="error-icon">⚠️</div>
            <h3>Oops! Something went wrong</h3>
            <p id="errorMessage"></p>
            <button onclick="loadPortfolioData()" class="retry-btn">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <polyline points="23 4 23 10 17 10"></polyline>
                    <path d="m20.49 9A9 9 0 0 0 5.64 5.64L1 10"></path>
                </svg>
                Try Again
            </button>
        </div>
    </div>

    <main id="content" class="portfolio-content">
        <section class="projects-section">
            <div class="section-header-portfolio">
                <div class="section-intro">
                    <span class="section-label">OUR WORK</span>
                    <h2 class="section-title">Featured Projects</h2>
                    <p class="section-description">
                        Each project tells a story of innovation, creativity, and technical excellence. 
                        Here are some highlights from our recent work.
                    </p>
                </div>
                <div class="section-filters">
                    <button class="filter-btn active" data-filter="all">All Projects</button>
                    <button class="filter-btn" data-filter="web">Web Development</button>
                    <button class="filter-btn" data-filter="ecommerce">E-commerce</button>
                    <button class="filter-btn" data-filter="mobile">Mobile Apps</button>
                </div>
            </div>
            <div id="projectsContainer" class="projects-grid">
                <!-- Projects will be loaded here via JavaScript -->
            </div>
        </section>

        <!-- CTA Section -->
        <section class="portfolio-cta">
            <div class="cta-content">
                <h2 class="cta-title">Ready to Start Your Project?</h2>
                <p class="cta-description">
                    Let's discuss how we can bring your vision to life with cutting-edge technology and creative design.
                </p>
                <div class="cta-actions">
                    <a href="<?php echo home_url(); ?>#contact" class="btn btn-cta">
                        Start Your Project
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M5 12h14"></path>
                            <path d="m12 5 7 7-7 7"></path>
                        </svg>
                    </a>
                    <a href="<?php echo home_url(); ?>" class="btn btn-outline">
                        Back to Home
                    </a>
                </div>
            </div>
            <div class="cta-visual">
                <div class="cta-orb orb-1"></div>
                <div class="cta-orb orb-2"></div>
                <div class="cta-orb orb-3"></div>
            </div>
        </section>
    </main>
</div>

<?php
get_footer();
?>
