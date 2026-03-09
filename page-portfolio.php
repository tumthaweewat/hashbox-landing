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

<!-- Password gate temporarily disabled -->

<div id="portfolioApp" class="portfolio-page-wrapper">
    <div class="gradient-accent"></div>

    <!-- Hero Section -->
    <section class="portfolio-hero">
        <div class="portfolio-hero-content">
            <div class="hero-badge">
                <span class="badge-text">PORTFOLIO</span>
                <div class="badge-glow"></div>
            </div>
            <h1 class="portfolio-hero-title">
                Hi, I'm Benjanard
                <span class="title-accent">👋</span>
            </h1>
            <p class="portfolio-hero-desc">
                Experienced UX/UI designer with a strong background in creating visually appealing 
                and user-friendly interfaces for web and mobile applications.
            </p>
            <div class="hero-stats">
                <div class="stat-item">
                    <span class="stat-number">10+</span>
                    <span class="stat-label">Featured Projects</span>
                </div>
                <div class="stat-item">
                    <span class="stat-number">6M+</span>
                    <span class="stat-label">App Users Reached</span>
                </div>
                <div class="stat-item">
                    <span class="stat-number">5+</span>
                    <span class="stat-label">Years Experience</span>
                </div>
            </div>
        </div>
        <div class="hero-visual">
            <div class="floating-card card-1">
                <div class="card-header"></div>
                <div class="card-content"></div>
            </div>
            <div class="floating-card card-2">
                <div class="card-header"></div>
                <div class="card-content"></div>
            </div>
            <div class="floating-card card-3">
                <div class="card-header"></div>
                <div class="card-content"></div>
            </div>
        </div>
    </section>

    <nav class="portfolio-nav">
        <a href="<?php echo home_url(); ?>" class="nav-logo">
            <span class="logo-main">HASHBOX</span><span class="logo-dot">.STUDIO</span>
        </a>
        <div class="nav-actions">
            <button id="refreshBtn" class="refresh-btn">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <polyline points="23 4 23 10 17 10"></polyline>
                    <polyline points="1 20 1 14 7 14"></polyline>
                    <path d="m20.49 9A9 9 0 0 0 5.64 5.64L1 10m22 4l-4.64 4.36A9 9 0 0 1 3.51 15"></path>
                </svg>
                Refresh
            </button>
            <a href="<?php echo home_url(); ?>#contact" class="contact-btn">
                Get In Touch
            </a>
        </div>
    </nav>

    <div id="loading" class="loading">
        <div class="loading-animation">
            <div class="loading-dots">
                <div class="dot"></div>
                <div class="dot"></div>
                <div class="dot"></div>
            </div>
            <p>Loading amazing projects...</p>
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
                    <span class="section-label">PORTFOLIO</span>
                    <h2 class="section-title">Featured Projects</h2>
                    <p class="section-description">
                        Each project represents a unique challenge solved through thoughtful design and user experience. 
                        From super apps to banking platforms, here are some highlights from my recent work.
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
                <h2 class="cta-title">Let's Work Together</h2>
                <p class="cta-description">
                    Interested in collaborating? I'm always excited to work on new projects that challenge creativity and push the boundaries of user experience.
                </p>
                <div class="cta-actions">
                    <a href="<?php echo home_url(); ?>#contact" class="btn btn-cta">
                        Get In Touch
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M5 12h14"></path>
                            <path d="m12 5 7 7-7 7"></path>
                        </svg>
                    </a>
                    <a href="<?php echo home_url(); ?>" class="btn btn-outline">
                        Back to Hashbox
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