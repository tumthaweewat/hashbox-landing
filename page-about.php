<?php
/**
 * Template Name: About Page
 *
 * Standalone About Us page for Hashbox Studio.
 *
 * @package Hashbox_Studio
 */

get_header();
?>

<!-- ============ SECTION 1 — HERO ============ -->
<section class="about-hero">
    <div class="container about-hero-container">
        <span class="section-label">ABOUT US</span>
        <h1 class="about-hero-headline">We build websites that <span class="accent-word">perform</span><br>and AI workforce that delivers</h1>
        <p class="about-hero-body">Hashbox Studio is a Website Craft Agency + Digital Workforce Studio that combines technical web expertise with AI workflow consulting under one roof.</p>
        <p class="about-hero-founder">Led by Thaweewat (Tum) Sriaroonthip — Fullstack Developer with 19 years of experience, former Tech Evangelist at an award-winning SEO agency managing 300+ brands across Thailand and internationally.</p>
        <div class="about-hero-actions">
            <a href="<?php echo esc_url( home_url( '/#contact' ) ); ?>" class="btn btn-cta btn-lg">Book a Free Consultation</a>
            <a href="<?php echo esc_url( home_url( '/portfolio' ) ); ?>" class="btn btn-outline btn-lg">View Our Work</a>
        </div>
        <div class="about-hero-badges">
            <span class="about-hero-badge">Website Development</span>
            <span class="about-hero-badge">Technical SEO &amp; Performance</span>
            <span class="about-hero-badge">Digital Workforce Studio</span>
            <span class="about-hero-badge">E-commerce</span>
        </div>
    </div>
</section>

<!-- ============ SECTION 2 — WHY HASHBOX ============ -->
<section class="about-section about-surface">
    <div class="container">
        <div class="section-header">
            <h2 class="section-label">WHY HASHBOX</h2>
        </div>
        <div class="about-why-grid">
            <div class="about-why-card about-why-problem">
                <h3 class="about-why-card-title">The Problem We See Repeatedly</h3>
                <ul class="about-why-list">
                    <li class="about-why-item about-why-item-bad">
                        <span class="about-why-icon about-why-icon-bad">✕</span>
                        <span>Hire a web agency — looks great but loads slow</span>
                    </li>
                    <li class="about-why-item about-why-item-bad">
                        <span class="about-why-icon about-why-icon-bad">✕</span>
                        <span>Hire an SEO agency — great advice but can't touch code</span>
                    </li>
                    <li class="about-why-item about-why-item-bad">
                        <span class="about-why-icon about-why-icon-bad">✕</span>
                        <span>Hire an AI consultant — big promises but no real implementation</span>
                    </li>
                </ul>
                <p class="about-why-footer">3 teams that don't talk to each other = disconnected results</p>
            </div>
            <div class="about-why-card about-why-solution">
                <h3 class="about-why-card-title">How Hashbox Solves This</h3>
                <ul class="about-why-list">
                    <li class="about-why-item about-why-item-good">
                        <span class="about-why-icon about-why-icon-good">✓</span>
                        <span>Web + SEO + AI under one team</span>
                    </li>
                    <li class="about-why-item about-why-item-good">
                        <span class="about-why-icon about-why-icon-good">✓</span>
                        <span>Developers who understand SEO and ship code directly</span>
                    </li>
                    <li class="about-why-item about-why-item-good">
                        <span class="about-why-icon about-why-icon-good">✓</span>
                        <span>AI that actually works in production with measurable ROI</span>
                    </li>
                </ul>
                <p class="about-why-footer">Website Craft Agency + Digital Workforce Studio</p>
            </div>
        </div>
    </div>
</section>

<!-- ============ SECTION 3 — WHAT WE DO ============ -->
<section class="about-section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-label">WHAT WE DO</h2>
        </div>
        <div class="about-services-grid">
            <div class="about-service-card">
                <span class="about-service-num">01</span>
                <h3 class="about-service-title">Website Development</h3>
                <p class="about-service-desc">We build Corporate, Brand, and E-commerce websites with the right tech stack — Next.js, WordPress, or WordPress Headless. Every project ships with Performance &amp; SEO built-in from the ground up.</p>
                <a href="<?php echo esc_url( home_url( '/#services' ) ); ?>" class="about-service-link">View Services &rarr;</a>
            </div>
            <div class="about-service-card">
                <span class="about-service-num">02</span>
                <h3 class="about-service-title">Technical SEO &amp; Performance</h3>
                <p class="about-service-desc">SEO audits, Core Web Vitals optimization, Schema Markup, and site architecture — delivered by a team that's both developer and SEO specialist.</p>
                <a href="<?php echo esc_url( home_url( '/#services' ) ); ?>" class="about-service-link">View Services &rarr;</a>
            </div>
            <div class="about-service-card">
                <span class="about-service-num">03</span>
                <h3 class="about-service-title">Digital Workforce Studio</h3>
                <p class="about-service-desc">We design AI assistants, workflow automation, and chatbots for businesses — reducing manual work, cutting costs, with real measurable ROI.</p>
                <a href="<?php echo esc_url( home_url( '/#services' ) ); ?>" class="about-service-link">View Services &rarr;</a>
            </div>
            <div class="about-service-card">
                <span class="about-service-num">04</span>
                <h3 class="about-service-title">E-commerce</h3>
                <p class="about-service-desc">Online stores designed for conversion, with local payment gateway integration and e-commerce-specific SEO optimization.</p>
                <a href="<?php echo esc_url( home_url( '/#services' ) ); ?>" class="about-service-link">View Services &rarr;</a>
            </div>
        </div>
    </div>
</section>

<!-- ============ SECTION 4 — TECH STACK + AI TOOLS ============ -->
<section class="about-section about-surface">
    <div class="container">
        <div class="about-tech-grid">
            <div class="about-tech-col">
                <h2 class="section-label">TECH STACK</h2>
                <div class="about-tech-tags">
                    <span class="about-tech-tag about-tech-tag-blue">Next.js</span>
                    <span class="about-tech-tag about-tech-tag-blue">React</span>
                    <span class="about-tech-tag about-tech-tag-blue">Tailwind CSS</span>
                    <span class="about-tech-tag about-tech-tag-cyan">WordPress</span>
                    <span class="about-tech-tag about-tech-tag-cyan">WordPress Headless</span>
                    <span class="about-tech-tag about-tech-tag-amber">Node.js</span>
                    <span class="about-tech-tag about-tech-tag-amber">Python</span>
                </div>
            </div>
            <div class="about-tech-col">
                <h2 class="section-label">IN-HOUSE AI TOOLS</h2>
                <ul class="about-tools-list">
                    <li class="about-tool-item">
                        <span class="about-tool-dot about-tool-dot-amber"></span>
                        <span>Paid Media Alert Tool</span>
                    </li>
                    <li class="about-tool-item">
                        <span class="about-tool-dot about-tool-dot-blue"></span>
                        <span>SEO Tracker</span>
                    </li>
                    <li class="about-tool-item">
                        <span class="about-tool-dot about-tool-dot-cyan"></span>
                        <span>Asearchlab</span>
                    </li>
                    <li class="about-tool-item">
                        <span class="about-tool-dot about-tool-dot-amber"></span>
                        <span>peec.AI</span>
                    </li>
                    <li class="about-tool-item">
                        <span class="about-tool-dot about-tool-dot-blue"></span>
                        <span>Query Fan-out</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- ============ SECTION 5 — WHAT WE BELIEVE + NUMBERS ============ -->
<section class="about-section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-label">WHAT WE BELIEVE</h2>
        </div>
        <div class="about-values-grid">
            <div class="about-value-card about-value-blue">
                <h3 class="about-value-title">Technical Excellence</h3>
                <p class="about-value-desc">We never cut corners. Every project must pass Core Web Vitals standards, ship with SEO built-in, and be thoroughly tested before launch.</p>
            </div>
            <div class="about-value-card about-value-cyan">
                <h3 class="about-value-title">Measurable Results</h3>
                <p class="about-value-desc">We don't sell feelings. Everything we do must be measurable — whether it's PageSpeed scores, organic traffic, or cost reduction from AI.</p>
            </div>
            <div class="about-value-card about-value-amber">
                <h3 class="about-value-title">Transparency</h3>
                <p class="about-value-desc">Clear pricing with no hidden costs. Realistic timelines. We don't promise what we can't deliver.</p>
            </div>
        </div>
        <div class="about-stats-bar">
            <div class="about-stat about-stat-blue">
                <span class="about-stat-num" data-target="7">0</span><span class="about-stat-suffix">yrs</span>
                <p class="about-stat-label">Development experience</p>
            </div>
            <div class="about-stat about-stat-cyan">
                <span class="about-stat-num" data-target="108">0</span><span class="about-stat-suffix">+</span>
                <p class="about-stat-label">Brands managed</p>
            </div>
            <div class="about-stat about-stat-amber">
                <span class="about-stat-num" data-target="32">0</span><span class="about-stat-suffix">+</span>
                <p class="about-stat-label">Core Web Vitals Desktop score</p>
            </div>
            <div class="about-stat about-stat-blue">
                <span class="about-stat-num" data-target="6">0</span>
                <span class="about-stat-suffix"></span>
                <p class="about-stat-label">In-house AI tools built</p>
            </div>
        </div>
    </div>
</section>

<!-- ============ SECTION 6 — TRACK RECORD ============ -->
<section class="about-section about-surface">
    <div class="container">
        <div class="section-header">
            <h2 class="section-label">THE EXPERIENCE THAT SHAPED US</h2>
            <p class="section-sub">SEO results Tum contributed to as Tech Evangelist at an award-winning SEO agency, managing 300+ brands.</p>
        </div>
        <div class="about-cases-grid">
            <div class="about-case-card about-case-blue">
                <span class="about-case-eyebrow">Case Study 01</span>
                <h3 class="about-case-title">HR Tech Platform</h3>
                <p class="about-case-desc">Full technical SEO overhaul — optimized Core Web Vitals, resolved crawlability issues, implemented complete Schema Markup, and restructured site architecture within 12 months.</p>
                <div class="about-case-metrics">
                    <span class="about-metric about-metric-blue">+2,200% impressions</span>
                    <span class="about-metric about-metric-cyan">+700% organic traffic</span>
                    <span class="about-metric about-metric-amber">+540% users</span>
                </div>
            </div>
            <div class="about-case-card about-case-cyan">
                <span class="about-case-eyebrow">Case Study 02</span>
                <h3 class="about-case-title">Home Service App</h3>
                <p class="about-case-desc">Technical SEO + Core Web Vitals optimization combined with SEO content strategy integrated into site structure within 6 months.</p>
                <div class="about-case-metrics">
                    <span class="about-metric about-metric-amber">50x impressions</span>
                    <span class="about-metric about-metric-blue">+300% clicks</span>
                    <span class="about-metric about-metric-cyan">+200% target audience</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ============ SECTION 7 — CTA + CONTACT ============ -->
<section class="about-section about-cta-section">
    <div class="container about-cta-container">
        <span class="section-label">Ready to get started?</span>
        <h2 class="about-cta-title">Ready to Talk?</h2>
        <p class="about-cta-sub">Book a free 30-minute consultation, no strings attached</p>
        <div class="about-cta-info">
            <span>project@hashbox.co.th</span>
            <span class="about-cta-divider">&middot;</span>
            <span>02 266 6222</span>
            <span class="about-cta-divider">&middot;</span>
            <span>LINE: @hashboxstudio</span>
        </div>
        <p class="about-cta-address">139 Pan Rd, Si Lom, Bang Rak, Bangkok 10500 &middot; Mon - Fri 9:00 - 18:00</p>
        <div class="about-cta-actions">
            <a href="<?php echo esc_url( home_url( '/#contact' ) ); ?>" class="btn btn-cta btn-lg">Book Free Consultation &rarr;</a>
            <a href="https://lin.ee/Xagx6i4" class="btn btn-outline-cyan btn-lg" target="_blank" rel="noopener noreferrer">LINE OA</a>
        </div>
    </div>
</section>

<!-- Schema Markup -->
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@graph": [
        {
            "@type": "Organization",
            "@id": "https://hashbox.co.th/#organization",
            "name": "Hashbox Studio",
            "alternateName": "Hashbox Co., Ltd.",
            "url": "https://hashbox.co.th",
            "logo": "https://hashbox.co.th/logo.png",
            "description": "Website Craft Agency + Digital Workforce Studio",
            "address": {
                "@type": "PostalAddress",
                "streetAddress": "139 Pan Rd, Si Lom, Bang Rak",
                "addressLocality": "Bangkok",
                "postalCode": "10500",
                "addressCountry": "TH"
            },
            "contactPoint": {
                "@type": "ContactPoint",
                "telephone": "+66-2-266-6222",
                "email": "project@hashbox.co.th",
                "contactType": "customer service"
            },
            "founder": {
                "@type": "Person",
                "name": "Thaweewat Sriaroonthip",
                "jobTitle": "Co-founder & Head of Technology"
            },
            "sameAs": [
                "https://lin.ee/Xagx6i4"
            ]
        },
        {
            "@type": "AboutPage",
            "name": "About Hashbox Studio",
            "url": "https://hashbox.co.th/about",
            "mainEntity": { "@id": "https://hashbox.co.th/#organization" }
        }
    ]
}
</script>

<?php
get_footer();
