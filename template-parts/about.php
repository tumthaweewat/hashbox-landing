<?php
/**
 * Template Part: About Section
 *
 * @package Hashbox_Studio
 */
?>
<!-- ============ SECTION 6 — ABOUT ============ -->
<section id="about" class="section-padding section-surface about-section" aria-labelledby="about-h2">
    <!-- Ambient glow -->
    <div class="about-glow about-glow-blue"></div>
    <div class="about-glow about-glow-cyan"></div>

    <div class="container">
        <!-- Section header -->
        <div class="about-header">
            <span class="section-label">ABOUT US</span>
            <h2 id="about-h2" class="section-title about-title">เรารวม 3 ศาสตร์<br><span class="about-title-accent">ไว้ในทีมเดียว</span></h2>
            <p class="about-subtitle">ที่ Hashbox เราเชื่อว่าเว็บไซต์ที่ดีต้องผ่านมาตรฐานทางเทคนิคที่วัดได้ ไม่ใช่แค่สวยงาม ทีมงานเรามีรากฐานทั้งจาก Agency ขนาดใหญ่ราว 7 ปี และจาก In-house Corporate อีกราว 10 ปี รวมแล้วเคยดูแลแบรนด์ไทยและต่างประเทศมาแล้วกว่า 300 ราย</p>
        </div>

        <!-- Bento grid -->
        <div class="about-bento">
            <!-- Card 1: Mission statement — spans 2 cols -->
            <div class="about-bento-card about-bento-wide reveal-up">
                <div class="about-bento-inner">
                    <div class="about-mission-icon">
                        <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                            <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/>
                        </svg>
                    </div>
                    <h3 class="about-bento-title">Our Mission</h3>
                    <p class="about-bento-text">เราเชื่อว่าเว็บไซต์ที่ดีต้องวัดผลได้ตั้งแต่วันแรก ทุกโปรเจกต์ที่ออกจากทีมเราจึงต้องผ่าน Build Gate ที่เข้มงวด ทั้ง Lighthouse 100 ทั้ง 4 หมวด Core Web Vitals เขียวทุก URL และ Schema Markup ที่ครบทุกหน้า — ไม่ใช่คำพูดสวยงามใน Slide แต่เป็นมาตรฐานที่บังคับใช้จริงใน CI Pipeline ของเรา</p>
                </div>
                <div class="about-bento-line about-bento-line-blue"></div>
            </div>

            <!-- Card 2: SEO-Ready Build -->
            <div class="about-bento-card about-bento-feature reveal-up" style="--delay: 100ms">
                <div class="about-bento-inner">
                    <div class="about-feature-icon about-feature-icon-blue">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="16 18 22 12 16 6"/>
                            <polyline points="8 6 2 12 8 18"/>
                            <line x1="14" y1="4" x2="10" y2="20"/>
                        </svg>
                    </div>
                    <h4 class="about-feature-title">SEO-Ready Website</h4>
                    <p class="about-feature-desc">เว็บที่พร้อมติด Google ตั้งแต่วันเปิดตัว ผ่านมาตรฐาน Lighthouse 100, Core Web Vitals เขียว และ Schema Markup ครบ พร้อมระบบ hreflang สำหรับเว็บหลายภาษา และ Sitemap ที่ส่งให้ Google และ Bing ทันทีหลัง Deploy</p>
                </div>
                <div class="about-bento-line about-bento-line-blue"></div>
            </div>

            <!-- Card 3: Marketing Tools + CRO -->
            <div class="about-bento-card about-bento-feature reveal-up" style="--delay: 200ms">
                <div class="about-bento-inner">
                    <div class="about-feature-icon about-feature-icon-cyan">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M3 3v18h18"/>
                            <path d="M7 14l4-4 4 4 5-5"/>
                            <circle cx="20" cy="9" r="1.5"/>
                        </svg>
                    </div>
                    <h4 class="about-feature-title">Marketing Tools + CRO</h4>
                    <p class="about-feature-desc">ติดตั้ง GA4, Search Console, Heatmap และระบบ A/B Testing ครบวงจร พร้อม Looker Studio Dashboard ที่ลูกค้าดูได้แบบ Real-time และรัน CRO Sprint รายเดือนเพื่อเพิ่ม Conversion อย่างต่อเนื่อง</p>
                </div>
                <div class="about-bento-line about-bento-line-cyan"></div>
            </div>

            <!-- Card 4: AI Expert Consulting -->
            <div class="about-bento-card about-bento-feature reveal-up" style="--delay: 300ms">
                <div class="about-bento-inner">
                    <div class="about-feature-icon about-feature-icon-amber">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M12 2a4 4 0 0 1 4 4c0 1.95-1.4 3.58-3.25 3.93"/>
                            <path d="M12 2a4 4 0 0 0-4 4c0 1.95 1.4 3.58 3.25 3.93"/>
                            <circle cx="12" cy="14" r="3"/>
                            <path d="M7 20.662V19a2 2 0 0 1 2-2h6a2 2 0 0 1 2 2v1.662"/>
                        </svg>
                    </div>
                    <h4 class="about-feature-title">AI Expert Consulting</h4>
                    <p class="about-feature-desc">ทีมเราออกแบบและส่งมอบ AI Workforce ที่ใช้ได้จริงใน Production ตั้งแต่ LINE Bot ตอบลูกค้า 24/7 ไปจนถึง Sales GPT ที่เชื่อมกับฐานข้อมูลของลูกค้า ลด Manual Work ของทีมได้เฉลี่ย 40% ขึ้นไป</p>
                </div>
                <div class="about-bento-line about-bento-line-amber"></div>
            </div>

            <!-- Card 5: Stats row — spans full width -->
            <div class="about-bento-card about-bento-stats reveal-up" style="--delay: 400ms">
                <div class="about-stats">
                    <div class="about-stat">
                        <div class="about-stat-value">
                            <span class="about-stat-num" data-target="17">17</span><span class="about-stat-suffix"></span>
                        </div>
                        <span class="about-stat-label">ปี ประสบการณ์รวม<br><small>(Agency 7 + Corporate 10)</small></span>
                    </div>
                    <div class="about-stat-divider"></div>
                    <div class="about-stat">
                        <div class="about-stat-value">
                            <span class="about-stat-num" data-target="300">300</span><span class="about-stat-suffix">+</span>
                        </div>
                        <span class="about-stat-label">แบรนด์ที่ดูแล</span>
                    </div>
                    <div class="about-stat-divider"></div>
                    <div class="about-stat">
                        <div class="about-stat-value">
                            <span class="about-stat-num" data-target="100">100</span><span class="about-stat-suffix"></span>
                        </div>
                        <span class="about-stat-label">Lighthouse Score</span>
                    </div>
                    <div class="about-stat-divider"></div>
                    <div class="about-stat">
                        <div class="about-stat-value">
                            <span class="about-stat-num" data-target="90">90</span><span class="about-stat-suffix"></span>
                        </div>
                        <span class="about-stat-label">วัน เห็นผล SEO</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
