<?php
/**
 * Template Name: About Page
 *
 * Standalone About Us page for Hashbox Studio (V2 org-led narrative).
 *
 * @package Hashbox_Studio
 */

get_header();
$page_url = get_permalink();
?>

<!-- ============ SECTION 1 — HERO ============ -->
<section class="about-hero" aria-labelledby="about-h1">
    <div class="about-hero-orb about-hero-orb-blue"></div>
    <div class="about-hero-orb about-hero-orb-cyan"></div>
    <div class="about-hero-grid-bg"></div>

    <div class="container about-hero-container">
        <nav class="breadcrumb" aria-label="Breadcrumb">
            <ol style="display:flex;gap:.5rem;list-style:none;padding:0;margin:0 0 1rem;font-size:.875rem;opacity:.7;">
                <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a></li>
                <li>›</li>
                <li aria-current="page">About</li>
            </ol>
        </nav>

        <span class="section-label">ABOUT US</span>
        <h1 id="about-h1" class="about-hero-headline">เรารวม Web · SEO · AI<br>ไว้ใน <span class="accent-gradient">ทีมเดียวที่รับผิดชอบผลรวม</span></h1>
        <p class="about-hero-body">Hashbox Studio รวม Technical Web Development, Digital Marketing + CRO และ AI Workforce Consulting ไว้ในทีมเดียว เพื่อให้ลูกค้าได้ผลลัพธ์ที่วัดได้ ภายใต้ KPI ชุดเดียวกัน</p>
        <p class="about-hero-founder">ทีมงานเรามีรากฐานจากทั้งวงการ <strong>Agency 7 ปี</strong> และ <strong>Corporate 10 ปี</strong> สะสมงานกับแบรนด์มากกว่า <strong>300+ แบรนด์</strong> ในอุตสาหกรรม Banking, Real Estate, Mobile App, E-commerce และ HR-Tech</p>
        <div class="about-hero-actions">
            <a href="<?php echo esc_url( home_url( '/#contact' ) ); ?>" class="btn btn-cta btn-lg">รับ SEO Audit ฟรี</a>
            <a href="<?php echo esc_url( home_url( '/portfolio/' ) ); ?>" class="btn btn-outline btn-lg">ดูผลงานที่ผ่านมา</a>
        </div>
        <div class="about-hero-badges">
            <span class="about-hero-badge">
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><rect x="2" y="3" width="20" height="14" rx="2"/><line x1="8" y1="21" x2="16" y2="21"/><line x1="12" y1="17" x2="12" y2="21"/></svg>
                SEO-Ready Website
            </span>
            <span class="about-hero-badge">
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M3 3v18h18"/><path d="M7 14l4-4 4 4 5-5"/></svg>
                Marketing Tools + CRO
            </span>
            <span class="about-hero-badge">
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><circle cx="12" cy="12" r="3"/><circle cx="5" cy="6" r="2"/><circle cx="19" cy="6" r="2"/></svg>
                AI Expert Consulting
            </span>
        </div>
    </div>
</section>

<!-- ============ SECTION 2 — WHY HASHBOX ============ -->
<section class="about-section about-surface" aria-labelledby="problem-h2">
    <div class="container">
        <div class="section-header">
            <span class="section-label">THE PROBLEM &amp; OUR FIX</span>
            <h2 id="problem-h2" class="section-title">ปัญหาที่เห็นซ้ำ ๆ ใน SME ไทย</h2>
        </div>
        <div class="about-why-grid">
            <div class="about-why-card about-why-problem">
                <h3 class="about-why-card-title">3 ปัญหาที่เกิดเป็นประจำ</h3>
                <ul class="about-why-list">
                    <li class="about-why-item about-why-item-bad">
                        <span class="about-why-icon about-why-icon-bad">
                            <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" aria-hidden="true"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/></svg>
                        </span>
                        <span>จ้าง Web Agency — เว็บสวยแต่ติด Google ไม่ได้</span>
                    </li>
                    <li class="about-why-item about-why-item-bad">
                        <span class="about-why-icon about-why-icon-bad">
                            <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" aria-hidden="true"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/></svg>
                        </span>
                        <span>จ้าง SEO Agency — แนะนำดี แต่แตะ Code ไม่ได้</span>
                    </li>
                    <li class="about-why-item about-why-item-bad">
                        <span class="about-why-icon about-why-icon-bad">
                            <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" aria-hidden="true"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/></svg>
                        </span>
                        <span>จ้าง AI Consultant — Slide ดี แต่ไม่เคย Implement จริง</span>
                    </li>
                </ul>
                <p class="about-why-footer">3 ทีม 3 KPI ที่ไม่คุยกัน = ผลลัพธ์ที่ไม่เชื่อมโยง ไม่มีใครรับผิดชอบผลรวม</p>
            </div>
            <div class="about-why-card about-why-solution">
                <h3 class="about-why-card-title">วิธีที่ Hashbox แก้</h3>
                <ul class="about-why-list">
                    <li class="about-why-item about-why-item-good">
                        <span class="about-why-icon about-why-icon-good">
                            <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" aria-hidden="true"><polyline points="20 6 9 17 4 12"/></svg>
                        </span>
                        <span>Web + Marketing + AI อยู่ใต้ทีมเดียวกัน</span>
                    </li>
                    <li class="about-why-item about-why-item-good">
                        <span class="about-why-icon about-why-icon-good">
                            <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" aria-hidden="true"><polyline points="20 6 9 17 4 12"/></svg>
                        </span>
                        <span>Developer ที่เข้าใจ SEO + Marketing Analyst ที่อ่าน Code ได้</span>
                    </li>
                    <li class="about-why-item about-why-item-good">
                        <span class="about-why-icon about-why-icon-good">
                            <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" aria-hidden="true"><polyline points="20 6 9 17 4 12"/></svg>
                        </span>
                        <span>AI ที่ใช้ได้จริงใน Production พร้อม ROI Framework</span>
                    </li>
                </ul>
                <p class="about-why-footer">SEO-Ready Website + Marketing Tools + AI Expert Consulting</p>
            </div>
        </div>
    </div>
</section>

<!-- ============ SECTION 3 — WHAT WE DO ============ -->
<section class="about-section" aria-labelledby="services-h2">
    <div class="container">
        <div class="section-header">
            <span class="section-label">WHAT WE DO</span>
            <h2 id="services-h2" class="section-title">3 บริการหลัก</h2>
        </div>
        <div class="about-services-grid">
            <div class="about-service-card">
                <div class="about-service-icon about-service-icon-blue">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                        <rect x="2" y="3" width="20" height="14" rx="2"/>
                        <line x1="8" y1="21" x2="16" y2="21"/>
                        <line x1="12" y1="17" x2="12" y2="21"/>
                        <polyline points="7 8 10 11 7 14"/>
                        <line x1="13" y1="14" x2="17" y2="14"/>
                    </svg>
                </div>
                <span class="about-service-num">01</span>
                <h3 class="about-service-title">SEO-Ready Website</h3>
                <p class="about-service-desc">เว็บไซต์ Corporate, Brand, E-commerce บน Next.js / WordPress / Headless ทุกโปรเจกต์ผ่าน Build Gate: Lighthouse 100, CWV เขียว, Schema ครบ</p>
                <a href="<?php echo esc_url( home_url( '/services/seo-ready-website/' ) ); ?>" class="about-service-link">รายละเอียด &rarr;</a>
            </div>
            <div class="about-service-card">
                <div class="about-service-icon about-service-icon-cyan">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                        <path d="M3 3v18h18"/>
                        <path d="M7 14l4-4 4 4 5-5"/>
                        <circle cx="20" cy="9" r="1.5"/>
                    </svg>
                </div>
                <span class="about-service-num">02</span>
                <h3 class="about-service-title">Digital Marketing + CRO</h3>
                <p class="about-service-desc">ติดตั้ง GA4, GSC, Heatmap, A/B Testing พร้อมรัน CRO Sprint รายเดือน ลูกค้าเห็น Conversion เพิ่มต่อเนื่องทุก Sprint</p>
                <a href="<?php echo esc_url( home_url( '/services/digital-marketing-tools/' ) ); ?>" class="about-service-link">รายละเอียด &rarr;</a>
            </div>
            <div class="about-service-card">
                <div class="about-service-icon about-service-icon-amber">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                        <circle cx="12" cy="12" r="3"/>
                        <circle cx="5" cy="6" r="2"/><circle cx="19" cy="6" r="2"/>
                        <circle cx="5" cy="18" r="2"/><circle cx="19" cy="18" r="2"/>
                        <line x1="9.5" y1="10" x2="6.5" y2="7.5"/>
                        <line x1="14.5" y1="10" x2="17.5" y2="7.5"/>
                        <line x1="9.5" y1="14" x2="6.5" y2="16.5"/>
                        <line x1="14.5" y1="14" x2="17.5" y2="16.5"/>
                    </svg>
                </div>
                <span class="about-service-num">03</span>
                <h3 class="about-service-title">AI Expert Consulting</h3>
                <p class="about-service-desc">ออกแบบและ Implement AI Workforce: LINE Bot, Sales GPT + RAG, Workflow Automation ลด Manual Work ของทีม 40%+ พร้อม ROI Framework</p>
                <a href="<?php echo esc_url( home_url( '/services/ai-consulting/' ) ); ?>" class="about-service-link">รายละเอียด &rarr;</a>
            </div>
            <div class="about-service-card">
                <div class="about-service-icon about-service-icon-blue">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                        <path d="M6 2L3 6v14a2 2 0 002 2h14a2 2 0 002-2V6l-3-4z"/>
                        <line x1="3" y1="6" x2="21" y2="6"/>
                        <path d="M16 10a4 4 0 01-8 0"/>
                    </svg>
                </div>
                <span class="about-service-num">04</span>
                <h3 class="about-service-title">E-commerce</h3>
                <p class="about-service-desc">ร้านค้าออนไลน์ที่ออกแบบเพื่อ Conversion เชื่อม Payment Gateway ไทย พร้อม E-commerce SEO + CRO ภายในแพ็กเกจ</p>
                <a href="<?php echo esc_url( home_url( '/services/' ) ); ?>" class="about-service-link">รายละเอียด &rarr;</a>
            </div>
        </div>
    </div>
</section>

<!-- ============ SECTION 4 — TEAM BACKGROUND ============ -->
<section class="about-section about-surface" aria-labelledby="team-h2">
    <div class="container">
        <div class="section-header">
            <span class="section-label">OUR TEAM BACKGROUND</span>
            <h2 id="team-h2" class="section-title">ภูมิหลังทีมงาน</h2>
            <p class="section-sub">Corporate-grade craft ส่งมอบด้วย Agency speed</p>
        </div>
        <div class="about-why-grid">
            <div class="about-why-card">
                <h3 class="about-why-card-title">Agency Experience — 7 ปี</h3>
                <ul class="about-why-list">
                    <li>ดูแลโปรเจกต์ Brand + Web ครอบคลุม Banking, E-commerce, Real Estate, FMCG</li>
                    <li>เข้าใจ Brand Tone, Visual Direction และ Campaign Integration</li>
                    <li>คุ้นเคยกับ Speed-to-Market และ Iteration Cycle สั้น</li>
                    <li>เคยทำงานกับ Award-winning Creative Studios ในกรุงเทพฯ</li>
                </ul>
            </div>
            <div class="about-why-card">
                <h3 class="about-why-card-title">Corporate Experience — 10 ปี</h3>
                <ul class="about-why-list">
                    <li>ทำงาน In-house ที่องค์กรขนาดใหญ่ ผ่าน Scale Constraint จริง</li>
                    <li>เชี่ยวชาญ Performance Budget, Security Policy, PDPA Compliance</li>
                    <li>เข้าใจ Multi-stakeholder Engineering + Governance Process</li>
                    <li>คุ้นเคยกับ Enterprise Architecture และ Multi-region Deployment</li>
                </ul>
            </div>
        </div>
        <p style="text-align:center;margin-top:2rem;max-width:48rem;margin-left:auto;margin-right:auto;font-size:1.05rem;opacity:.85;">
            ผลรวม: ทีมที่ <strong>Code เร็วแบบ Agency</strong> แต่ <strong>คุณภาพแบบ Corporate</strong>
        </p>
    </div>
</section>

<!-- ============ SECTION 5 — TECH STACK + AI TOOLS ============ -->
<section class="about-section" aria-labelledby="stack-h2">
    <div class="container">
        <div class="section-header">
            <span class="section-label">TOOLS</span>
            <h2 id="stack-h2" class="section-title">Tech Stack + เครื่องมือ In-House</h2>
        </div>
        <div class="about-tech-grid">
            <div class="about-tech-col">
                <h3 class="section-label" style="margin-bottom:1rem;">TECH STACK</h3>
                <div class="about-tech-tags">
                    <span class="about-tech-tag about-tech-tag-blue">Next.js</span>
                    <span class="about-tech-tag about-tech-tag-blue">React</span>
                    <span class="about-tech-tag about-tech-tag-blue">Tailwind CSS</span>
                    <span class="about-tech-tag about-tech-tag-cyan">WordPress</span>
                    <span class="about-tech-tag about-tech-tag-cyan">WordPress Headless</span>
                    <span class="about-tech-tag about-tech-tag-cyan">Sanity / Contentful</span>
                    <span class="about-tech-tag about-tech-tag-amber">Node.js</span>
                    <span class="about-tech-tag about-tech-tag-amber">Python</span>
                    <span class="about-tech-tag about-tech-tag-blue">Vercel / Cloudflare</span>
                    <span class="about-tech-tag about-tech-tag-cyan">GA4 / GSC / Looker Studio</span>
                    <span class="about-tech-tag about-tech-tag-amber">OpenAI / Claude / LangChain</span>
                    <span class="about-tech-tag about-tech-tag-amber">Flowise / n8n</span>
                </div>
            </div>
            <div class="about-tech-col">
                <h3 class="section-label" style="margin-bottom:1rem;">IN-HOUSE TOOLS</h3>
                <ul class="about-tools-list">
                    <li class="about-tool-item">
                        <span class="about-tool-dot about-tool-dot-amber"></span>
                        <span><strong>Paid Media Alert</strong> — เตือนเมื่อ Cost-per-Lead เกิน Threshold</span>
                    </li>
                    <li class="about-tool-item">
                        <span class="about-tool-dot about-tool-dot-blue"></span>
                        <span><strong>SEO Tracker</strong> — Track Keyword Position รายวันแบบ Realtime</span>
                    </li>
                    <li class="about-tool-item">
                        <span class="about-tool-dot about-tool-dot-cyan"></span>
                        <span><strong>Asearchlab</strong> — เครื่องมือ AI Visibility Audit</span>
                    </li>
                    <li class="about-tool-item">
                        <span class="about-tool-dot about-tool-dot-amber"></span>
                        <span><strong>peec.AI</strong> — AI Citation Monitor (ChatGPT/Perplexity/AIO)</span>
                    </li>
                    <li class="about-tool-item">
                        <span class="about-tool-dot about-tool-dot-blue"></span>
                        <span><strong>Query Fan-out</strong> — สร้าง Topic Cluster อัตโนมัติ</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- ============ SECTION 6 — VALUES + STATS ============ -->
<section class="about-section about-surface" aria-labelledby="values-h2">
    <div class="container">
        <div class="section-header">
            <span class="section-label">WHAT WE BELIEVE</span>
            <h2 id="values-h2" class="section-title">3 หลักการที่บังคับใช้ทุกโปรเจกต์</h2>
        </div>
        <div class="about-values-grid">
            <div class="about-value-card about-value-blue">
                <div class="about-value-icon">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                        <polyline points="16 18 22 12 16 6"/>
                        <polyline points="8 6 2 12 8 18"/>
                    </svg>
                </div>
                <h3 class="about-value-title">Technical Excellence</h3>
                <p class="about-value-desc">ไม่ทำ Shortcut ทุกโปรเจกต์ต้องผ่าน Build Gate: Lighthouse 100, Core Web Vitals เขียว, Schema Validator ผ่าน — บังคับใน CI ไม่ใช่คำพูดสวยงาม</p>
            </div>
            <div class="about-value-card about-value-cyan">
                <div class="about-value-icon">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                        <path d="M22 12h-4l-3 9L9 3l-3 9H2"/>
                    </svg>
                </div>
                <h3 class="about-value-title">Measurable Results</h3>
                <p class="about-value-desc">ทุกการตัดสินใจวัดผลได้ ไม่ว่าจะเป็น PageSpeed, Organic Traffic, Conversion Rate, หรือ Hours saved ของทีมจาก AI Workforce</p>
            </div>
            <div class="about-value-card about-value-amber">
                <div class="about-value-icon">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                        <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/>
                        <circle cx="12" cy="12" r="3"/>
                    </svg>
                </div>
                <h3 class="about-value-title">Transparency</h3>
                <p class="about-value-desc">ราคาชัด ไม่มี Hidden Cost ส่ง Audit ฟรีก่อนเริ่ม Timeline จริง ไม่สัญญาเกินสิ่งที่ทำได้</p>
            </div>
        </div>
        <div class="about-stats-bar" style="margin-top:3rem;">
            <div class="about-stat">
                <span class="about-stat-num" data-target="17">17</span><span class="about-stat-suffix"></span>
                <p class="about-stat-label">ปี ประสบการณ์รวม<br><small>(Agency 7 + Corporate 10)</small></p>
            </div>
            <div class="about-stat-bar-divider"></div>
            <div class="about-stat">
                <span class="about-stat-num" data-target="300">300</span><span class="about-stat-suffix">+</span>
                <p class="about-stat-label">แบรนด์ที่ทีมเคยดูแล</p>
            </div>
            <div class="about-stat-bar-divider"></div>
            <div class="about-stat">
                <span class="about-stat-num" data-target="100">100</span><span class="about-stat-suffix"></span>
                <p class="about-stat-label">Lighthouse Score เฉลี่ย</p>
            </div>
            <div class="about-stat-bar-divider"></div>
            <div class="about-stat">
                <span class="about-stat-num" data-target="5">5</span><span class="about-stat-suffix"></span>
                <p class="about-stat-label">เครื่องมือ In-House ที่ใช้ Production</p>
            </div>
        </div>
    </div>
</section>

<!-- ============ SECTION 7 — TRACK RECORD ============ -->
<section class="about-section" aria-labelledby="cases-h2">
    <div class="container">
        <div class="section-header">
            <span class="section-label">TRACK RECORD</span>
            <h2 id="cases-h2" class="section-title">ผลลัพธ์จริงที่ทีมเคยส่งมอบ</h2>
            <p class="section-sub">เคสที่ทีมงาน Hashbox ทำผ่าน Agency / Corporate / In-house ในช่วง 17 ปีที่ผ่านมา ตัวเลขจาก GA4 + GSC จริง</p>
        </div>
        <div class="about-cases-grid">
            <div class="about-case-card">
                <span class="about-case-eyebrow">Case Study 01</span>
                <h3 class="about-case-title">HR-Tech Platform</h3>
                <p class="about-case-desc">Technical SEO overhaul ทั้งระบบ Optimize Core Web Vitals แก้ Crawlability Implement Schema Markup ครบทุกหน้า และ Restructure Site Architecture ภายใน 12 เดือน</p>
                <div class="about-case-metrics">
                    <span class="about-metric about-metric-blue">+2,200% impressions</span>
                    <span class="about-metric about-metric-cyan">+700% organic traffic</span>
                    <span class="about-metric about-metric-amber">+540% users</span>
                </div>
            </div>
            <div class="about-case-card">
                <span class="about-case-eyebrow">Case Study 02</span>
                <h3 class="about-case-title">Home Service App</h3>
                <p class="about-case-desc">Technical SEO + Core Web Vitals Optimization ผสมกับ SEO Content Strategy ที่บูรณาการกับ Site Structure ภายใน 6 เดือน</p>
                <div class="about-case-metrics">
                    <span class="about-metric about-metric-amber">50× impressions</span>
                    <span class="about-metric about-metric-blue">+300% clicks</span>
                    <span class="about-metric about-metric-cyan">+200% target audience</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ============ SECTION 8 — CTA + CONTACT ============ -->
<section class="about-section about-cta-section" aria-labelledby="cta-h2">
    <div class="about-cta-glow"></div>
    <div class="container about-cta-container">
        <span class="section-label">LET'S CONNECT</span>
        <h2 id="cta-h2" class="about-cta-title">พร้อมเริ่มงานกับเรา?</h2>
        <p class="about-cta-sub">รับ SEO + Performance Audit ฟรี 15-20 หน้า ก่อนตัดสินใจเริ่มงาน ไม่มีข้อผูกมัด</p>
        <div class="about-cta-info">
            <span><a href="mailto:hello@hashbox.co.th">hello@hashbox.co.th</a></span>
            <span class="about-cta-divider">&middot;</span>
            <span><a href="tel:+6622666222">02 266 6222</a></span>
            <span class="about-cta-divider">&middot;</span>
            <span>LINE: @hashboxstudio</span>
        </div>
        <p class="about-cta-address">139 Pan Rd, Si Lom, Bang Rak, Bangkok 10500 &middot; จันทร์-ศุกร์ 9:00-18:00</p>
        <div class="about-cta-actions">
            <a href="<?php echo esc_url( home_url( '/#contact' ) ); ?>" class="btn btn-cta">รับ Audit ฟรี &rarr;</a>
            <a href="https://lin.ee/Xagx6i4" class="btn btn-outline-cyan" target="_blank" rel="noopener noreferrer">คุยทาง LINE OA</a>
        </div>
    </div>
</section>

<?php
// AboutPage + BreadcrumbList schema. Organization graph already injected via
// functions.php on homepage; we reference @id only here (no duplicate).
hashbox_jsonld( array(
    '@context' => 'https://schema.org',
    '@type'    => 'AboutPage',
    '@id'      => $page_url . '#aboutpage',
    'url'      => $page_url,
    'name'     => 'About Hashbox Studio',
    'description' => 'Hashbox Studio รวมประสบการณ์ทีมงาน Agency 7 ปี + Corporate 10 ปี ส่งมอบ SEO-Ready Website, Marketing Tools + CRO และ AI Expert Consulting ใต้ KPI เดียวกัน',
    'inLanguage' => 'th-TH',
    'mainEntity' => array( '@id' => home_url( '/#organization' ) ),
) );

hashbox_jsonld( array(
    '@context' => 'https://schema.org',
    '@type'    => 'BreadcrumbList',
    'itemListElement' => array(
        array( '@type' => 'ListItem', 'position' => 1, 'name' => 'Home', 'item' => home_url( '/' ) ),
        array( '@type' => 'ListItem', 'position' => 2, 'name' => 'About', 'item' => $page_url ),
    ),
) );

get_footer();
