<?php
/**
 * Template Name: Service: Services Hub
 *
 * Lists 3 service pillars. Lives at /services/.
 *
 * @package Hashbox_Studio
 */

get_header();
?>

<main id="content" class="services-hub-page">

    <!-- Breadcrumb -->
    <nav class="breadcrumb container" aria-label="Breadcrumb">
        <ol>
            <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a></li>
            <li aria-current="page">Services</li>
        </ol>
    </nav>

    <!-- Hub Hero -->
    <section class="services-hub-hero section-padding" aria-labelledby="hub-h1">
        <div class="container">
            <span class="section-label">SERVICES</span>
            <h1 id="hub-h1" class="section-title">3 บริการที่ออกแบบมาให้ทำงานร่วมกัน</h1>
            <p class="section-sub" style="max-width: 56rem;">
                ทุกบริการของเราสามารถจ้างแยกได้ แต่จะให้ผลลัพธ์สูงสุดเมื่อทำงานร่วมกันใต้ทีมเดียว เริ่มจากการสร้างเว็บไซต์ที่พร้อม SEO ตั้งแต่วันแรก ติดตั้งเครื่องมือ Digital Marketing เพื่อเพิ่ม Conversion อย่างต่อเนื่อง และวาง AI Workforce ที่ลด Manual Work ให้ทีมลูกค้าได้ใช้เวลากับงานที่สำคัญกว่า ทุกอย่างใช้ KPI ชุดเดียวกันและรายงานผ่าน Dashboard ที่ลูกค้าดูได้แบบ Real-time
            </p>
        </div>
    </section>

    <!-- 3 Service Cards -->
    <section class="services-hub-grid section-padding">
        <div class="container">
            <div class="services-grid">

                <article class="service-card" data-accent="blue">
                    <div class="service-accent-bar accent-blue"></div>
                    <div class="service-icon-wrap icon-blue">
                        <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" aria-hidden="true">
                            <rect x="2" y="3" width="20" height="14" rx="2"/>
                            <polyline points="7 8 10 11 7 14"/>
                            <line x1="13" y1="14" x2="17" y2="14"/>
                        </svg>
                    </div>
                    <h2 class="service-title">SEO-Ready Website</h2>
                    <div class="service-tags">
                        <span class="tag">Next.js</span>
                        <span class="tag">WordPress Headless</span>
                        <span class="tag">Lighthouse 100</span>
                    </div>
                    <p class="service-desc">เว็บไซต์ที่ผ่าน Build Gate มาตรฐานสูงสุด ส่งมอบให้ลูกค้าพร้อม Index ตั้งแต่วันเปิดตัว Ranking ขยับใน 60-90 วัน</p>
                    <a href="/services/seo-ready-website/" class="link-arrow">รายละเอียดเพิ่มเติม <span class="arrow">&rarr;</span></a>
                </article>

                <article class="service-card" data-accent="cyan">
                    <div class="service-accent-bar accent-cyan"></div>
                    <div class="service-icon-wrap icon-cyan">
                        <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" aria-hidden="true">
                            <path d="M3 3v18h18"/>
                            <path d="M7 14l4-4 4 4 5-5"/>
                            <circle cx="20" cy="9" r="1.5"/>
                        </svg>
                    </div>
                    <h2 class="service-title">Digital Marketing Tools + CRO</h2>
                    <div class="service-tags">
                        <span class="tag">GA4 + GSC</span>
                        <span class="tag">A/B Testing</span>
                        <span class="tag">CRO Sprint</span>
                    </div>
                    <p class="service-desc">ติดตั้งเครื่องมือ Marketing ครบวงจร พร้อม CRO Sprint รายเดือนเพื่อเพิ่ม Conversion วัดผลผ่าน Looker Studio Real-time</p>
                    <a href="/services/digital-marketing-tools/" class="link-arrow">รายละเอียดเพิ่มเติม <span class="arrow">&rarr;</span></a>
                </article>

                <article class="service-card" data-accent="gradient">
                    <div class="service-accent-bar accent-gradient"></div>
                    <div class="service-icon-wrap icon-cyan">
                        <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" aria-hidden="true">
                            <circle cx="12" cy="12" r="3"/>
                            <circle cx="5" cy="6" r="2"/>
                            <circle cx="19" cy="6" r="2"/>
                            <circle cx="5" cy="18" r="2"/>
                            <circle cx="19" cy="18" r="2"/>
                            <line x1="9.5" y1="10" x2="6.5" y2="7.5"/>
                            <line x1="14.5" y1="10" x2="17.5" y2="7.5"/>
                            <line x1="9.5" y1="14" x2="6.5" y2="16.5"/>
                            <line x1="14.5" y1="14" x2="17.5" y2="16.5"/>
                        </svg>
                    </div>
                    <h2 class="service-title">AI Expert Consulting</h2>
                    <div class="service-tags">
                        <span class="tag">LINE Bot</span>
                        <span class="tag">Sales GPT + RAG</span>
                        <span class="tag">Workflow Automation</span>
                    </div>
                    <p class="service-desc">ที่ปรึกษา AI ที่ลงมือ Implement จริง ออกแบบและส่งมอบ AI Workforce ที่ลด Manual Work 40%+ พร้อม ROI Framework</p>
                    <a href="/services/ai-consulting/" class="link-arrow">รายละเอียดเพิ่มเติม <span class="arrow">&rarr;</span></a>
                </article>

            </div>
        </div>
    </section>

    <!-- Why bundle? -->
    <section class="services-bundle section-padding section-surface">
        <div class="container">
            <h2 class="section-title" style="text-align:center;">ทำไมต้องใช้ทั้ง 3 บริการรวมกัน</h2>
            <p class="section-sub" style="text-align:center; max-width: 56rem; margin: 0 auto 2.5rem;">
                Web · Marketing · AI แยกกัน = 3 KPI ที่ไม่คุยกัน รวมกัน = ทีมเดียวที่รับผิดชอบผลรวมและ Optimize ข้ามฟังก์ชันได้
            </p>
            <div class="services-bundle-grid">
                <div>
                    <h3>1 + 1 + 1 = 5</h3>
                    <p>SEO ทำให้ Traffic เข้ามา · CRO ทำให้ Convert · AI ทำให้ Scale หลังแปลงเป็นลูกค้า ผลลัพธ์ทบต้นกว่าทำแยก</p>
                </div>
                <div>
                    <h3>Data ต่อเนื่อง</h3>
                    <p>GA4 + GSC + AI Chat Log อยู่ใน Dashboard เดียว ทำให้เห็น Pattern ที่ทีมแยกไม่มีวันเห็น</p>
                </div>
                <div>
                    <h3>ราคา Bundle</h3>
                    <p>เลือก Retainer 3 บริการรวมกัน ประหยัดกว่าจ้าง 3 บริษัทแยก ~30% และคุยกับทีมเดียว</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA -->
    <section class="services-cta section-padding">
        <div class="container" style="text-align:center;">
            <h2 class="section-title">เริ่มด้วย SEO + Performance Audit ฟรี</h2>
            <p class="section-sub" style="max-width: 48rem; margin: 0 auto 2rem;">ส่งรายงาน 15-20 หน้าให้ภายใน 3 วันทำการ ก่อนตัดสินใจเริ่มงาน</p>
            <a href="<?php echo esc_url( home_url( '/#contact' ) ); ?>" class="btn btn-cta btn-lg">รับ Audit ฟรี &rarr;</a>
        </div>
    </section>

</main>

<?php
/**
 * BreadcrumbList schema for /services/.
 */
$svc_url = get_permalink();
hashbox_jsonld( array(
    '@context' => 'https://schema.org',
    '@type'    => 'BreadcrumbList',
    'itemListElement' => array(
        array(
            '@type'    => 'ListItem',
            'position' => 1,
            'name'     => 'Home',
            'item'     => home_url( '/' ),
        ),
        array(
            '@type'    => 'ListItem',
            'position' => 2,
            'name'     => 'Services',
            'item'     => $svc_url,
        ),
    ),
) );

get_footer();
