<?php
/**
 * Template Name: Service: Digital Marketing Tools + CRO
 *
 * @package Hashbox_Studio
 */

get_header();

$page_url   = get_permalink();
$page_title = 'Digital Marketing Tools + CRO — เครื่องมือที่เปลี่ยน Traffic เป็นลูกค้า';
$page_desc  = 'ติดตั้งเครื่องมือ Marketing ครบวงจร พร้อมรัน CRO Sprint รายเดือนที่เพิ่ม Conversion วัดผลด้วย Looker Studio Real-time';

$page_faqs = array(
    array(
        'q' => 'CRO คืออะไร แตกต่างจาก SEO ยังไง?',
        'a' => 'SEO = ทำให้คนเข้าเว็บ · CRO (Conversion Rate Optimization) = ทำให้คนที่เข้ามาแปลงเป็นลูกค้า การมี Traffic เยอะแต่ Conversion ต่ำ = เสียโอกาส CRO เพิ่ม Output ต่อ Traffic เท่าเดิม ROI สูงกว่าไล่ Traffic เพิ่มอย่างเดียว',
    ),
    array(
        'q' => 'เครื่องมือที่ติดตั้งให้มีอะไรบ้าง?',
        'a' => 'GA4 + GSC สำหรับ Analytics · Microsoft Clarity / Hotjar สำหรับ Heatmap + Session Recording · GrowthBook / VWO สำหรับ A/B Testing · Looker Studio สำหรับ Dashboard · Server-side GTM สำหรับ Tracking ที่แม่นยำ · Consent Mode v2 สำหรับ PDPA',
    ),
    array(
        'q' => 'CRO Sprint ทำอะไรในแต่ละเดือน?',
        'a' => 'Week 1: Hypothesize — ดู Data จาก Heatmap/GA4 หา Friction Point · Week 2: Prioritize (ICE Score) + Build Test · Week 3: Run A/B Test (Sample size + Statistical Significance) · Week 4: Measure + Report + Ship Winner ทำต่อเนื่องทุกเดือน',
    ),
    array(
        'q' => 'ใช้ A/B Tool ตัวไหน ทำไมไม่ใช้ Optimize ของ Google?',
        'a' => 'Google Optimize ปิดบริการตั้งแต่ Sep 2023 ทำให้ตลาดเปลี่ยน เราใช้ GrowthBook (Open Source) เป็นหลักเพราะ Self-host ได้ ไม่มี Limit, Privacy-friendly · VWO สำหรับลูกค้าที่ต้องการ GUI + Support · PostHog สำหรับ Product-led Companies',
    ),
    array(
        'q' => 'PDPA Compliant ทำยังไง?',
        'a' => 'ติดตั้ง Cookie Consent Banner + Consent Mode v2 ที่ GA4/GTM อ่าน Consent State ก่อน Fire Pixel ลูกค้าที่ไม่ยินยอม = ไม่ Track ระดับ Personal Data แต่ยังได้ Aggregate Modeling จาก Google Consent Mode v2',
    ),
    array(
        'q' => 'ราคาและรูปแบบงาน?',
        'a' => 'Setup เครื่องมือครั้งเดียว เริ่ม 80,000 บาท · Retainer รายเดือนเริ่ม 50,000 บาท (Light: Dashboard + Monthly Report) ถึง 150,000 บาท (Full: CRO Sprint + Implementation) · Enterprise Custom Pricing',
    ),
);
?>

<main id="content" class="service-detail-page">

    <nav class="breadcrumb container" aria-label="Breadcrumb">
        <ol>
            <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a></li>
            <li><a href="<?php echo esc_url( home_url( '/services/' ) ); ?>">Services</a></li>
            <li aria-current="page">Digital Marketing Tools + CRO</li>
        </ol>
    </nav>

    <article class="service-detail">
        <header class="service-hero section-padding">
            <div class="container">
                <span class="section-label">SERVICE 02 / 03</span>
                <h1 class="section-title"><?php echo esc_html( $page_title ); ?></h1>
                <p class="section-sub" style="max-width:56rem;"><?php echo esc_html( $page_desc ); ?></p>
                <div class="hero-actions" style="margin-top:2rem;">
                    <a href="<?php echo esc_url( home_url( '/#contact' ) ); ?>" class="btn btn-cta btn-lg">รับ Audit ฟรี</a>
                    <a href="<?php echo esc_url( home_url( '/work/' ) ); ?>" class="btn btn-outline btn-lg">ดูเคส CRO ที่ผ่านมา</a>
                </div>
            </div>
        </header>

        <section class="service-section section-padding section-surface">
            <div class="container">
                <h2>Stack ที่เราติดตั้งและ Operate ให้</h2>
                <div class="tech-stack-grid">
                    <div>
                        <h3>Analytics</h3>
                        <ul>
                            <li>Google Analytics 4 (GA4) — Event-based</li>
                            <li>Google Search Console — Search Performance</li>
                            <li>Server-side Google Tag Manager — Tracking ที่แม่นยำ ไม่ Block</li>
                            <li>Looker Studio — Dashboard รวม Realtime</li>
                        </ul>
                    </div>
                    <div>
                        <h3>Behavior + UX</h3>
                        <ul>
                            <li>Microsoft Clarity (Free) — Heatmap + Session Recording</li>
                            <li>Hotjar — Survey + Feedback Polls</li>
                            <li>Fullstory — Enterprise Session Replay</li>
                        </ul>
                    </div>
                    <div>
                        <h3>Experimentation</h3>
                        <ul>
                            <li>GrowthBook (Open Source) — Self-hosted A/B Testing</li>
                            <li>VWO — GUI-driven, Marketing Team-friendly</li>
                            <li>PostHog — Product Analytics + Feature Flags</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <section class="service-section section-padding">
            <div class="container">
                <h2>CRO Sprint Process — ใช้ทุกเดือน</h2>
                <ol class="process-list">
                    <li>
                        <h3>1. Hypothesize</h3>
                        <p>ดู Data จาก Heatmap + GA4 + Session Recording หา Friction Point ที่ Conversion Drop ตั้งสมมติฐาน "เปลี่ยน X เป็น Y จะเพิ่ม Conversion จาก A% เป็น B% เพราะ Z"</p>
                    </li>
                    <li>
                        <h3>2. Prioritize (ICE Score)</h3>
                        <p>คะแนน Impact × Confidence × Ease 1-10 เลือก Top 1-2 Tests ที่ทำใน Sprint นั้น</p>
                    </li>
                    <li>
                        <h3>3. Build</h3>
                        <p>Code Variant + Push เข้า A/B Tool · Setup Goal Tracking ใน GA4 · Define Sample Size + Confidence Level (95%)</p>
                    </li>
                    <li>
                        <h3>4. Run + Measure</h3>
                        <p>Run จน Reach Statistical Significance (ปกติ 2-4 สัปดาห์) ไม่ปิด Test ก่อนเวลา ไม่ Peek</p>
                    </li>
                    <li>
                        <h3>5. Ship + Document</h3>
                        <p>Ship Winner เข้า Production · Document Learning ใน Notion · Archive Loser พร้อม Why ของเรา</p>
                    </li>
                </ol>
            </div>
        </section>

        <section class="service-section section-padding section-surface">
            <div class="container">
                <h2>ตัวชี้วัดที่เรา Track + Optimize</h2>
                <table class="cwv-table">
                    <thead>
                        <tr><th>Metric</th><th>คืออะไร</th><th>ทำไมสำคัญ</th></tr>
                    </thead>
                    <tbody>
                        <tr><td>CR (Conversion Rate)</td><td>% ของ Visitor ที่แปลง</td><td>Core metric ของ CRO</td></tr>
                        <tr><td>Form Completion Rate</td><td>% Submit / % เริ่มกรอก</td><td>วัด Friction ในฟอร์ม</td></tr>
                        <tr><td>Bounce Rate (Engaged)</td><td>% Engaged Session (GA4)</td><td>วัด Relevance</td></tr>
                        <tr><td>LTV</td><td>Customer Lifetime Value</td><td>วัด Conversion Quality</td></tr>
                        <tr><td>ROAS</td><td>Return on Ad Spend</td><td>ROI ของ Paid Channel</td></tr>
                        <tr><td>Funnel Drop-off</td><td>% ที่หลุดในแต่ละ Step</td><td>หา Friction Point</td></tr>
                    </tbody>
                </table>
            </div>
        </section>

        <section class="service-section section-padding">
            <div class="container">
                <h2>ตัวอย่าง Experiment ที่เราเคยทำให้ลูกค้า</h2>
                <ul class="check-list">
                    <li>Hero CTA Copy A/B → "เริ่มทดลองฟรี" vs "ดูราคา" — เพิ่ม CR 23%</li>
                    <li>Form Field Reduction → ลด 8 fields เหลือ 4 — เพิ่ม Form Completion 67%</li>
                    <li>Pricing Page Reorder → ย้าย "Recommended Plan" ไปกลาง — เพิ่ม Click 41%</li>
                    <li>Mobile Sticky CTA → เพิ่ม Sticky Button ตอน Scroll — เพิ่ม Mobile CR 38%</li>
                    <li>Trust Badge Position → ย้าย Logo Customer ขึ้น Above-fold — Bounce Rate ลด 15%</li>
                </ul>
            </div>
        </section>

        <section class="service-section section-padding section-surface">
            <div class="container">
                <h2>คำถามที่พบบ่อย</h2>
                <div class="faq-container">
                    <?php foreach ( $page_faqs as $faq ) : ?>
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
                <h2>คุยกับเราเรื่อง CRO Retainer</h2>
                <p style="max-width:48rem;margin:0 auto 2rem;">เริ่มด้วย Audit ฟรี เห็น Friction Point ของเว็บปัจจุบันก่อนตัดสินใจ</p>
                <a href="<?php echo esc_url( home_url( '/#contact' ) ); ?>" class="btn btn-cta btn-lg">รับ Audit ฟรี &rarr;</a>
            </div>
        </section>
    </article>
</main>

<?php
hashbox_jsonld( array(
    '@context'    => 'https://schema.org',
    '@type'       => 'Service',
    '@id'         => $page_url . '#service',
    'name'        => 'Digital Marketing Tools + CRO',
    'description' => $page_desc,
    'url'         => $page_url,
    'provider'    => array( '@id' => home_url( '/#organization' ) ),
    'areaServed'  => 'Thailand',
    'serviceType' => 'Digital Marketing',
) );

hashbox_jsonld( array(
    '@context' => 'https://schema.org',
    '@type'    => 'BreadcrumbList',
    'itemListElement' => array(
        array( '@type' => 'ListItem', 'position' => 1, 'name' => 'Home', 'item' => home_url( '/' ) ),
        array( '@type' => 'ListItem', 'position' => 2, 'name' => 'Services', 'item' => home_url( '/services/' ) ),
        array( '@type' => 'ListItem', 'position' => 3, 'name' => 'Digital Marketing Tools + CRO', 'item' => $page_url ),
    ),
) );

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
