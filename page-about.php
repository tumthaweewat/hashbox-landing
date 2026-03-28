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
    <div class="about-hero-orb about-hero-orb-blue"></div>
    <div class="about-hero-orb about-hero-orb-cyan"></div>
    <div class="about-hero-dot-grid"></div>

    <div class="container about-hero-container">
        <span class="section-label">ABOUT US</span>
        <h1 class="about-hero-headline">เราทำเว็บที่ perform<br>และสร้าง AI workforce ที่วัดผลได้</h1>
        <p class="about-hero-body">Hashbox Studio คือ Website Craft Agency + Digital Workforce Studio ที่รวม web expertise ระดับ technical กับ AI workflow consulting ไว้ในทีมเดียว</p>
        <p class="about-hero-founder">นำทีมโดย Thaweewat (Tum) Sriaroonthip — Fullstack Developer 19 ปี, อดีต Tech Evangelist ที่ award-winning SEO agency ดูแลมากกว่า 300 แบรนด์ทั้งในไทยและต่างประเทศ</p>
        <div class="about-hero-actions">
            <a href="<?php echo esc_url( home_url( '/#contact' ) ); ?>" class="btn btn-cta btn-lg">นัดปรึกษาฟรี</a>
            <a href="<?php echo esc_url( home_url( '/portfolio' ) ); ?>" class="btn btn-outline btn-lg">ดูผลงาน</a>
        </div>
    </div>
</section>

<!-- ============ SECTION 2 — ทำไมต้อง HASHBOX ============ -->
<section class="about-section about-surface">
    <div class="container">
        <div class="section-header">
            <h2 class="section-label">ทำไมต้อง HASHBOX</h2>
        </div>
        <div class="about-why-grid">
            <div class="about-why-card about-why-problem">
                <h3 class="about-why-card-title about-why-problem-title">ปัญหาที่เจอซ้ำๆ</h3>
                <ul class="about-why-list">
                    <li class="about-why-item about-why-item-bad">
                        <span class="about-why-icon about-why-icon-bad">✕</span>
                        <span>จ้างบริษัททำเว็บ — สวยแต่ช้า</span>
                    </li>
                    <li class="about-why-item about-why-item-bad">
                        <span class="about-why-icon about-why-icon-bad">✕</span>
                        <span>จ้างบริษัททำ SEO — แนะนำได้แต่แก้ code ไม่เป็น</span>
                    </li>
                    <li class="about-why-item about-why-item-bad">
                        <span class="about-why-icon about-why-icon-bad">✕</span>
                        <span>จ้างบริษัททำ AI — ขายฝันแต่ implement ไม่ได้</span>
                    </li>
                </ul>
                <p class="about-why-footer">3 ทีมที่ไม่คุยกัน = ผลลัพธ์ที่ไม่ต่อกัน</p>
            </div>
            <div class="about-why-card about-why-solution">
                <h3 class="about-why-card-title about-why-solution-title">Hashbox แก้ปัญหานี้</h3>
                <ul class="about-why-list">
                    <li class="about-why-item about-why-item-good">
                        <span class="about-why-icon about-why-icon-good">✓</span>
                        <span>Web + SEO + AI ในทีมเดียว</span>
                    </li>
                    <li class="about-why-item about-why-item-good">
                        <span class="about-why-icon about-why-icon-good">✓</span>
                        <span>Developer ที่เข้าใจ SEO เขียน code ได้เลย</span>
                    </li>
                    <li class="about-why-item about-why-item-good">
                        <span class="about-why-icon about-why-icon-good">✓</span>
                        <span>AI ที่ implement ได้จริง วัด ROI ได้</span>
                    </li>
                </ul>
                <p class="about-why-footer">Website Craft Agency + Digital Workforce Studio</p>
            </div>
        </div>
    </div>
</section>

<!-- ============ SECTION 3 — สิ่งที่เราทำ ============ -->
<section class="about-section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-label">สิ่งที่เราทำ</h2>
        </div>
        <div class="about-services-grid">
            <div class="about-service-card" data-accent="blue">
                <div class="about-service-accent accent-blue"></div>
                <h3 class="about-service-title">Website Development</h3>
                <p class="about-service-desc">สร้างเว็บไซต์ Corporate, Brand, E-commerce ด้วย tech stack ที่เหมาะสม — Next.js, WordPress, หรือ WordPress Headless โดยทุกโปรเจคมี Performance &amp; SEO built-in ตั้งแต่โครงสร้าง</p>
                <a href="<?php echo esc_url( home_url( '/#services' ) ); ?>" class="about-service-link">ดูบริการ &rarr;</a>
            </div>
            <div class="about-service-card" data-accent="cyan">
                <div class="about-service-accent accent-cyan"></div>
                <h3 class="about-service-title">Technical SEO &amp; Performance</h3>
                <p class="about-service-desc">บริการ SEO audit, Core Web Vitals optimization, Schema Markup และ site architecture จากทีมที่เป็นทั้ง developer และ SEO specialist</p>
                <a href="<?php echo esc_url( home_url( '/#services' ) ); ?>" class="about-service-link">ดูบริการ &rarr;</a>
            </div>
            <div class="about-service-card" data-accent="amber">
                <div class="about-service-accent accent-amber"></div>
                <h3 class="about-service-title">Digital Workforce Studio</h3>
                <p class="about-service-desc">ออกแบบ AI assistant, workflow automation และ chatbot สำหรับธุรกิจ ลดงาน manual ลดค่าใช้จ่าย วัด ROI ได้จริง</p>
                <a href="<?php echo esc_url( home_url( '/#services' ) ); ?>" class="about-service-link">ดูบริการ &rarr;</a>
            </div>
            <div class="about-service-card" data-accent="blue">
                <div class="about-service-accent accent-blue"></div>
                <h3 class="about-service-title">E-commerce</h3>
                <p class="about-service-desc">เว็บขายของออนไลน์ที่ออกแบบเพื่อ conversion พร้อม payment gateway ไทยและ SEO สำหรับ e-commerce โดยเฉพาะ</p>
                <a href="<?php echo esc_url( home_url( '/#services' ) ); ?>" class="about-service-link">ดูบริการ &rarr;</a>
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
                <h2 class="section-label">AI TOOLS ที่สร้างเอง</h2>
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

<!-- ============ SECTION 5 — สิ่งที่เราเชื่อ + ตัวเลข ============ -->
<section class="about-section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-label">สิ่งที่เราเชื่อ</h2>
        </div>
        <div class="about-values-grid">
            <div class="about-value-card about-value-blue">
                <h3 class="about-value-title">Technical Excellence</h3>
                <p class="about-value-desc">เราไม่ตัดมุม ทุกโปรเจคต้องผ่านมาตรฐาน Core Web Vitals ต้องมี SEO built-in และต้อง test อย่างครบถ้วนก่อน launch</p>
            </div>
            <div class="about-value-card about-value-cyan">
                <h3 class="about-value-title">Measurable Results</h3>
                <p class="about-value-desc">เราไม่ขายความรู้สึก ทุกสิ่งที่ทำต้องวัดผลได้ ไม่ว่าจะเป็น PageSpeed score, organic traffic, หรือ cost reduction จาก AI</p>
            </div>
            <div class="about-value-card about-value-amber">
                <h3 class="about-value-title">Transparency</h3>
                <p class="about-value-desc">ราคาชัดเจน ไม่มีค่าใช้จ่ายซ่อนเร้น timeline ที่ realistic ไม่สัญญาในสิ่งที่ทำไม่ได้</p>
            </div>
        </div>
        <div class="about-stats-bar">
            <div class="about-stat about-stat-blue">
                <span class="about-stat-num" data-target="19">0</span>
                <span class="about-stat-suffix"> ปี</span>
                <p class="about-stat-label">ประสบการณ์ด้าน development</p>
            </div>
            <div class="about-stat about-stat-cyan">
                <span class="about-stat-num" data-target="300">0</span>
                <span class="about-stat-suffix">+</span>
                <p class="about-stat-label">แบรนด์ที่เคยดูแล</p>
            </div>
            <div class="about-stat about-stat-amber">
                <span class="about-stat-num" data-target="90">0</span>
                <span class="about-stat-suffix">+</span>
                <p class="about-stat-label">คะแนน Core Web Vitals Desktop</p>
            </div>
            <div class="about-stat about-stat-blue">
                <span class="about-stat-num" data-target="6">0</span>
                <span class="about-stat-suffix"></span>
                <p class="about-stat-label">AI tools ที่สร้างขึ้นมาเอง</p>
            </div>
        </div>
    </div>
</section>

<!-- ============ SECTION 6 — ประสบการณ์ ============ -->
<section class="about-section about-surface">
    <div class="container">
        <div class="section-header">
            <h2 class="section-label">ประสบการณ์ที่หล่อหลอมเรา</h2>
            <p class="section-sub">ผลงาน SEO ที่ Tum มีส่วนร่วมในช่วงที่เป็น Tech Evangelist ที่ award-winning SEO agency ดูแลมากกว่า 300 แบรนด์</p>
        </div>
        <div class="about-cases-grid">
            <div class="about-case-card about-case-blue">
                <h3 class="about-case-title">โปรเจค HR Tech Platform</h3>
                <p class="about-case-desc">Full technical SEO overhaul — optimize Core Web Vitals, แก้ crawlability issues, ใส่ Schema Markup ครบ, restructure site architecture ภายใน 12 เดือน</p>
                <div class="about-case-metrics">
                    <span class="about-metric about-metric-blue">+2,200% impressions</span>
                    <span class="about-metric about-metric-cyan">+700% organic traffic</span>
                    <span class="about-metric about-metric-amber">+540% users</span>
                </div>
            </div>
            <div class="about-case-card about-case-cyan">
                <h3 class="about-case-title">โปรเจค Home Service App</h3>
                <p class="about-case-desc">Technical SEO + Core Web Vitals optimization + SEO content strategy ที่ผสานกับ site structure ภายใน 6 เดือน</p>
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
        <h2 class="about-cta-title">พร้อมคุยกับเรา?</h2>
        <p class="about-cta-sub">นัดหมายปรึกษาฟรี 30 นาที</p>
        <div class="about-cta-info">
            <span>Email: project@hashbox.co.th</span>
            <span class="about-cta-divider">&middot;</span>
            <span>โทร: 02 266 6222</span>
            <span class="about-cta-divider">&middot;</span>
            <span>LINE: @hashboxstudio</span>
        </div>
        <p class="about-cta-address">139 Pan Rd, Si Lom, Bang Rak, Bangkok 10500 &middot; จันทร์ - ศุกร์ 9:00 - 18:00</p>
        <div class="about-cta-actions">
            <a href="<?php echo esc_url( home_url( '/#contact' ) ); ?>" class="btn btn-cta btn-lg">นัดปรึกษาฟรี &rarr;</a>
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
