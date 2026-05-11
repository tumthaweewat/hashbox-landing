<?php
/**
 * Template Name: Service: SEO-Ready Website
 *
 * @package Hashbox_Studio
 */

get_header();

$page_url   = get_permalink();
$page_title = 'รับทำเว็บไซต์ SEO-Ready — Lighthouse 100 + Core Web Vitals เขียว';
$page_desc  = 'เราเชื่อว่าเว็บไซต์ที่ดีต้องพร้อมติด Google ตั้งแต่วันเปิดตัว ทุกโปรเจกต์ของทีมเราจึงผ่านมาตรฐาน Lighthouse 100, Core Web Vitals เขียว, Schema Markup ครบ พร้อมระบบ hreflang และ Sitemap ที่ส่งให้ Search Engine ทันที — ลูกค้าส่วนใหญ่เริ่มเห็น Ranking ขยับภายใน 60 ถึง 90 วัน';

$page_faqs = array(
    array(
        'q' => 'ทำไมต้องเลือก SEO-Ready Website แทนเว็บทั่วไป?',
        'a' => 'เว็บทั่วไปส่วนใหญ่ต้องทำ Technical SEO Audit หลังเปิดตัว 2-3 รอบกว่าจะติด Google ของเราผ่าน Build Gate ตั้งแต่ก่อน Deploy: Lighthouse 100, CWV เขียว, Schema ครบ Googlebot Index ได้ตั้งแต่ Crawl แรก ลูกค้าไม่ต้องเสียเวลา 6 เดือนแรก',
    ),
    array(
        'q' => 'ใช้ Tech Stack อะไร เลือกได้มั้ย?',
        'a' => 'เลือกได้ตามโจทย์ Next.js + Headless WordPress = Performance สูงสุด + ทีมแก้ Content เองได้ · WordPress Custom Theme = แก้เนื้อหาเองคล่อง + Performance ดี · Static (Astro/11ty) = Marketing Site เน้น Speed สูงสุด เราแนะนำ Stack ที่เหมาะ ไม่ Lock-in',
    ),
    array(
        'q' => 'มาตรฐาน Lighthouse 100 ทำได้จริงทุกเคสหรือ?',
        'a' => 'Performance + SEO + Accessibility + Best Practices ทั้ง 4 หมวด เราการันตี 95+ ทุกเคส และ 100/100/100/100 ในเคสที่ Stack ของเราควบคุมได้ทั้งหมด (Next.js/Astro บน Vercel/Cloudflare) WordPress + Heavy Plugins อาจอยู่ที่ 92-98 ขึ้นกับ Plugin Stack',
    ),
    array(
        'q' => 'Schema Markup ที่ติดตั้งให้มีอะไรบ้าง?',
        'a' => 'Organization, ProfessionalService, WebSite, BreadcrumbList ทุกหน้า · Article + Person บนบทความ · Service บนหน้าบริการ · FAQPage บนทุกหน้าที่มี FAQ · Product/Offer สำหรับ E-commerce · LocalBusiness ถ้ามี Physical Office · validate ผ่าน Schema.org + Rich Results Test',
    ),
    array(
        'q' => 'ใช้เวลานานเท่าไหร่?',
        'a' => 'Landing Page 2-3 สัปดาห์ · Corporate Site 4-6 สัปดาห์ · E-commerce 6-10 สัปดาห์ · ระบบซับซ้อน (Multi-vendor, Multi-tenant) 8-14 สัปดาห์ Discovery + Audit ฟรีก่อนเริ่มเสมอ',
    ),
    array(
        'q' => 'ราคาเริ่มต้น?',
        'a' => 'Landing Page เริ่ม 80,000 บาท · Corporate Site เริ่ม 200,000 บาท · E-commerce เริ่ม 350,000 บาท · Enterprise Custom 500,000+ บาท ทุก Quote เริ่มหลัง Audit ฟรีและ Scope Sign-off',
    ),
);
?>

<main id="content" class="service-detail-page">

    <nav class="breadcrumb container" aria-label="Breadcrumb">
        <ol>
            <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a></li>
            <li><a href="<?php echo esc_url( home_url( '/services/' ) ); ?>">Services</a></li>
            <li aria-current="page">SEO-Ready Website</li>
        </ol>
    </nav>

    <article class="service-detail">

        <header class="service-hero section-padding">
            <div class="container">
                <span class="section-label">SERVICE 01 / 03</span>
                <h1 class="section-title"><?php echo esc_html( $page_title ); ?></h1>
                <p class="section-sub" style="max-width: 56rem;"><?php echo esc_html( $page_desc ); ?></p>
                <div class="hero-actions" style="margin-top: 2rem;">
                    <a href="<?php echo esc_url( home_url( '/#contact' ) ); ?>" class="btn btn-cta btn-lg">รับ SEO Audit ฟรี</a>
                    <a href="<?php echo esc_url( home_url( '/work/' ) ); ?>" class="btn btn-outline btn-lg">ดูผลงานที่ผ่านมา</a>
                </div>
            </div>
        </header>

        <section class="service-section section-padding section-surface">
            <div class="container">
                <h2>"SEO-Ready" หมายถึงอะไรในมาตรฐานของเรา</h2>
                <p>เว็บที่ออกจาก Hashbox ทุกตัวต้องผ่าน Build Gate ก่อน Deploy ขึ้น Production ประกอบด้วยเช็คลิสต์ 12 ข้อ:</p>
                <ul class="check-list">
                    <li>Lighthouse Performance 90+ (Mobile) / 95+ (Desktop)</li>
                    <li>Lighthouse SEO 100/100</li>
                    <li>Lighthouse Best Practices 95+</li>
                    <li>Core Web Vitals เขียวทั้ง LCP / INP / CLS</li>
                    <li>Schema.org Validator ผ่านทุก Type ที่ Inject</li>
                    <li>Robots.txt + Sitemap.xml auto-submit ไป GSC + Bing Webmaster</li>
                    <li>HTTPS + Security Headers (HSTS, CSP, X-Frame, Referrer, Permissions) เกรด A+</li>
                    <li>Canonical URL ทุกหน้า + Open Graph + Twitter Card</li>
                    <li>Hreflang สำหรับเว็บ Multilingual</li>
                    <li>Mobile-First Responsive (320px ถึง 1920px+)</li>
                    <li>Accessibility WCAG 2.1 AA</li>
                    <li>PDPA-Compliant Cookie Consent + Consent Mode v2</li>
                </ul>
                <p>เช็คลิสต์นี้บังคับใน CI Pipeline ของเรา (GitHub Actions + Lighthouse CI) ไม่ผ่าน = ไม่ Deploy</p>
            </div>
        </section>

        <section class="service-section section-padding">
            <div class="container">
                <h2>Tech Stack ที่เราใช้</h2>
                <div class="tech-stack-grid">
                    <div>
                        <h3>Frontend Framework</h3>
                        <ul>
                            <li><strong>Next.js</strong> — Default สำหรับเว็บที่ต้องการ Performance สูงสุด, App Router, Server Components</li>
                            <li><strong>WordPress + Custom Theme</strong> — เลือกเมื่อทีมลูกค้าต้องแก้ Content เองคล่อง</li>
                            <li><strong>Astro / 11ty</strong> — สำหรับ Marketing Site / Docs Site เน้น Speed</li>
                        </ul>
                    </div>
                    <div>
                        <h3>CMS / Content</h3>
                        <ul>
                            <li><strong>Headless WordPress</strong> — Backend ที่ทีมไทยคุ้นเคย + REST/GraphQL</li>
                            <li><strong>Sanity</strong> — Real-time Editing + Structured Content</li>
                            <li><strong>Contentful</strong> — Enterprise-grade + Multi-region</li>
                            <li><strong>Strapi</strong> — Self-hosted Open Source</li>
                        </ul>
                    </div>
                    <div>
                        <h3>Hosting / Edge</h3>
                        <ul>
                            <li><strong>Vercel</strong> — Default สำหรับ Next.js, Edge Functions, ISR</li>
                            <li><strong>Cloudflare Pages + Workers</strong> — Global Edge + DDoS</li>
                            <li><strong>WP Engine / Kinsta</strong> — WordPress Managed Hosting</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <section class="service-section section-padding section-surface">
            <div class="container">
                <h2>Core Web Vitals มาตรฐานของเรา vs Industry</h2>
                <table class="cwv-table">
                    <thead>
                        <tr><th>Metric</th><th>Industry Average</th><th>Hashbox Target</th><th>Hashbox Achieves</th></tr>
                    </thead>
                    <tbody>
                        <tr><td>LCP</td><td>3.5-5.0s</td><td>&lt;2.5s</td><td>1.2-1.8s</td></tr>
                        <tr><td>INP</td><td>250-400ms</td><td>&lt;200ms</td><td>80-150ms</td></tr>
                        <tr><td>CLS</td><td>0.15-0.35</td><td>&lt;0.1</td><td>0.0-0.05</td></tr>
                        <tr><td>FCP</td><td>2.5-3.5s</td><td>&lt;1.5s</td><td>0.6-1.1s</td></tr>
                        <tr><td>TBT</td><td>400-800ms</td><td>&lt;200ms</td><td>50-150ms</td></tr>
                    </tbody>
                </table>
            </div>
        </section>

        <section class="service-section section-padding">
            <div class="container">
                <h2>ครอบคลุมอะไรบ้างใน Deliverables</h2>
                <ul class="check-list">
                    <li>Design System + Component Library (Figma/Storybook ถ้าจำเป็น)</li>
                    <li>Code Repository (GitHub) + CI/CD Pipeline</li>
                    <li>Staging Environment + Production Environment</li>
                    <li>Schema Markup Spec + Validation Report</li>
                    <li>Performance Budget + Lighthouse CI Config</li>
                    <li>Sitemap + robots.txt + hreflang Configuration</li>
                    <li>Analytics Setup (GA4 + GSC + Optional Tag Manager)</li>
                    <li>30-Day Post-Launch Support</li>
                    <li>Documentation + Runbook สำหรับทีมลูกค้า</li>
                </ul>
            </div>
        </section>

        <section class="service-section section-padding section-surface">
            <div class="container">
                <h2>คำถามที่พบบ่อย</h2>
                <div class="faq-container">
                    <?php foreach ( $page_faqs as $i => $faq ) : ?>
                        <div class="faq-item">
                            <button class="faq-question" aria-expanded="false" type="button">
                                <span><?php echo esc_html( $faq['q'] ); ?></span>
                                <svg class="faq-icon" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true">
                                    <line x1="12" y1="5" x2="12" y2="19"></line>
                                    <line x1="5" y1="12" x2="19" y2="12"></line>
                                </svg>
                            </button>
                            <div class="faq-answer"><p><?php echo esc_html( $faq['a'] ); ?></p></div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>

        <section class="service-cta section-padding">
            <div class="container" style="text-align:center;">
                <h2>เริ่มด้วย Audit ฟรี</h2>
                <p style="max-width:48rem;margin:0 auto 2rem;">รับ SEO + Performance Audit Report 15-20 หน้า ภายใน 3 วันทำการ</p>
                <a href="<?php echo esc_url( home_url( '/#contact' ) ); ?>" class="btn btn-cta btn-lg">รับ Audit ฟรี &rarr;</a>
            </div>
        </section>

    </article>
</main>

<?php
// Service schema
hashbox_jsonld( array(
    '@context'    => 'https://schema.org',
    '@type'       => 'Service',
    '@id'         => $page_url . '#service',
    'name'        => 'SEO-Ready Website Build',
    'description' => $page_desc,
    'url'         => $page_url,
    'provider'    => array( '@id' => home_url( '/#organization' ) ),
    'areaServed'  => 'Thailand',
    'serviceType' => 'Web Development',
) );

// Breadcrumb
hashbox_jsonld( array(
    '@context' => 'https://schema.org',
    '@type'    => 'BreadcrumbList',
    'itemListElement' => array(
        array( '@type' => 'ListItem', 'position' => 1, 'name' => 'Home', 'item' => home_url( '/' ) ),
        array( '@type' => 'ListItem', 'position' => 2, 'name' => 'Services', 'item' => home_url( '/services/' ) ),
        array( '@type' => 'ListItem', 'position' => 3, 'name' => 'SEO-Ready Website', 'item' => $page_url ),
    ),
) );

// FAQ schema
$faq_entities = array();
foreach ( $page_faqs as $faq ) {
    $faq_entities[] = array(
        '@type'          => 'Question',
        'name'           => $faq['q'],
        'acceptedAnswer' => array( '@type' => 'Answer', 'text' => $faq['a'] ),
    );
}
hashbox_jsonld( array(
    '@context'   => 'https://schema.org',
    '@type'      => 'FAQPage',
    '@id'        => $page_url . '#faq',
    'mainEntity' => $faq_entities,
) );

get_footer();
