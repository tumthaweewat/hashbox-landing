<?php
/**
 * Template Name: Service: AI Expert Consulting
 *
 * @package Hashbox_Studio
 */

get_header();

$page_url   = get_permalink();
$page_title = 'AI Expert Consulting — AI Workforce ที่ทำงานได้จริงใน Production';
$page_desc  = 'ทีมเราเป็นที่ปรึกษา AI ที่ลงมือเขียนโค้ดและส่งมอบของจริงให้ลูกค้าใช้งานใน Production ไม่ใช่จบที่ Slide ทุกโปรเจกต์เริ่มต้นด้วยการคำนวณ AI ROI ก่อน ถ้าผลตอบแทนคุ้มค่าจึงจะลงมือ Implement พร้อม Knowledge Transfer ให้ทีมลูกค้าดูแลต่อเองได้';

$page_faqs = array(
    array(
        'q' => 'AI Consulting ของ Hashbox ต่างจาก AI Consultancy ทั่วไปยังไง?',
        'a' => 'AI Consultancy ทั่วไปจบที่ Slide + Strategy Document ลูกค้าต้องไปจ้าง Dev อีกบริษัทมา Implement เราทำทั้ง 2 = ออกแบบ + ลงมือเขียน Code + Deploy + Train ทีม ทุกโปรเจกต์ออกจาก Hashbox ต้องวิ่งใน Production จริง',
    ),
    array(
        'q' => 'AI Workforce 4 ประเภทที่ทำให้ มีอะไรบ้าง?',
        'a' => '1) Customer Support AI — LINE Bot / Web Chat ตอบ 24/7 TH/EN · 2) Sales GPT + RAG — AI ที่รู้ Product, Pricing, Policy ของลูกค้า · 3) Internal Workflow Automation — เชื่อม Tools ผ่าน n8n/Make ลด Manual · 4) Content Operations AI — Assistant เขียน SEO Content, Schema, Meta',
    ),
    array(
        'q' => 'AI ROI Framework ทำงานยังไง?',
        'a' => 'ก่อนเริ่มเราคำนวณ Hours saved/week × Avg Hourly Rate × Team size − Cost ของ AI/month เคสที่ ROI < 3x ใน 6 เดือนเราแนะนำให้ไม่ทำ ทำเฉพาะที่ Payback ภายใน Q2',
    ),
    array(
        'q' => 'ใช้ Model ไหน OpenAI หรือ Claude หรือ Local?',
        'a' => 'แล้วแต่ Use Case — OpenAI GPT-4.1/o-series สำหรับ General + Function Calling · Claude Sonnet/Opus สำหรับ Long Context + Reasoning · Llama 3.3 หรือ Qwen 2.5 (Local) สำหรับเคส PDPA-strict ที่ส่งข้อมูลออกนอกไม่ได้ เราเลือกตาม Trade-off ของ Cost / Latency / Privacy',
    ),
    array(
        'q' => 'LINE Bot + OpenAI ทำได้ทั้ง Push และ Reply Auto?',
        'a' => 'ได้ทั้ง 2 — Reply (User ถาม Bot ตอบ) + Push (Bot ส่ง Broadcast/Notification) + Rich Menu + Flex Message + Quick Reply + Tax-compliant Log Storage รวมถึง LINE Login → Authenticated Conversation',
    ),
    array(
        'q' => 'ราคาและรูปแบบ Engagement?',
        'a' => 'AI ROI Discovery (1 สัปดาห์) — 30,000 บาท · Build + Deploy (3-8 สัปดาห์) เริ่ม 150,000 บาท สำหรับ Single Bot ถึง 500,000+ บาท สำหรับ Multi-system · Retainer รายเดือนเริ่ม 50,000 บาท (Monitoring + Iteration)',
    ),
);
?>

<main id="content" class="service-detail-page">

    <nav class="breadcrumb container" aria-label="Breadcrumb">
        <ol>
            <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a></li>
            <li><a href="<?php echo esc_url( home_url( '/services/' ) ); ?>">Services</a></li>
            <li aria-current="page">AI Expert Consulting</li>
        </ol>
    </nav>

    <article class="service-detail">
        <header class="service-hero section-padding">
            <div class="container">
                <span class="section-label">SERVICE 03 / 03</span>
                <h1 class="section-title"><?php echo esc_html( $page_title ); ?></h1>
                <p class="section-sub" style="max-width:56rem;"><?php echo esc_html( $page_desc ); ?></p>
                <div class="hero-actions" style="margin-top:2rem;">
                    <a href="<?php echo esc_url( home_url( '/#contact' ) ); ?>" class="btn btn-cta btn-lg">รับ AI ROI Discovery</a>
                    <a href="<?php echo esc_url( home_url( '/work/' ) ); ?>" class="btn btn-outline btn-lg">ดูเคส AI ที่ผ่านมา</a>
                </div>
            </div>
        </header>

        <section class="service-section section-padding section-surface">
            <div class="container">
                <h2>AI Workforce 4 ประเภทที่เราทำให้</h2>
                <div class="tech-stack-grid">
                    <div>
                        <h3>1. Customer Support AI</h3>
                        <p><strong>LINE / Web Chat / Email Auto-Reply</strong></p>
                        <ul>
                            <li>ตอบลูกค้า 24/7 TH/EN</li>
                            <li>เชื่อม FAQ + Knowledge Base</li>
                            <li>Escalate ไปทีมจริงเมื่อจำเป็น</li>
                            <li>Sentiment Analysis + Alert</li>
                        </ul>
                    </div>
                    <div>
                        <h3>2. Sales GPT + RAG</h3>
                        <p><strong>AI ที่รู้ Product + Pricing</strong></p>
                        <ul>
                            <li>RAG บน Product Catalog</li>
                            <li>Quote Generation อัตโนมัติ</li>
                            <li>Lead Qualification + Routing</li>
                            <li>Integration กับ CRM</li>
                        </ul>
                    </div>
                    <div>
                        <h3>3. Internal Workflow Automation</h3>
                        <p><strong>n8n / Make / Custom</strong></p>
                        <ul>
                            <li>เชื่อม Tools ภายในองค์กร</li>
                            <li>Auto Report Generation</li>
                            <li>Document Processing (OCR + AI)</li>
                            <li>Slack/LINE Notification</li>
                        </ul>
                    </div>
                    <div>
                        <h3>4. Content Operations AI</h3>
                        <p><strong>SEO + Marketing Assistant</strong></p>
                        <ul>
                            <li>SEO Content Draft + Optimize</li>
                            <li>Schema Markup Auto-generate</li>
                            <li>Meta Title / Description</li>
                            <li>Social Repurposing</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <section class="service-section section-padding">
            <div class="container">
                <h2>Stack ที่เราใช้</h2>
                <div class="tech-stack-grid">
                    <div>
                        <h3>LLM Models</h3>
                        <ul>
                            <li>OpenAI — GPT-4.1, o-series</li>
                            <li>Anthropic — Claude Sonnet, Opus</li>
                            <li>Google — Gemini Pro</li>
                            <li>Local — Llama 3.3, Qwen 2.5</li>
                        </ul>
                    </div>
                    <div>
                        <h3>Orchestration + RAG</h3>
                        <ul>
                            <li>LangChain / LlamaIndex</li>
                            <li>Flowise (Visual Builder)</li>
                            <li>Vector DB: Pinecone, Qdrant, pgvector</li>
                            <li>Embedding: OpenAI text-embedding-3-large</li>
                        </ul>
                    </div>
                    <div>
                        <h3>Channels + Automation</h3>
                        <ul>
                            <li>LINE Messaging API + LINE Login</li>
                            <li>Facebook Messenger / Instagram DM</li>
                            <li>n8n / Make.com</li>
                            <li>Slack / Microsoft Teams</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <section class="service-section section-padding section-surface">
            <div class="container">
                <h2>AI ROI Framework — คำนวณก่อนลงมือ</h2>
                <p>เราไม่เริ่ม Build จนกว่า ROI Model ผ่าน Threshold สูตรพื้นฐาน:</p>
                <pre class="roi-formula" style="background:#0f0f12;padding:1.25rem;border-radius:8px;overflow-x:auto;">
ROI/year = (Hours saved/week × 52 × Avg Hourly Cost × Team)
        − (Build Cost + AI Cost/year + Maintenance/year)

Acceptable: ROI ≥ 3× ในปีแรก
Reject:     Payback &gt; 12 เดือน → แนะนำไม่ทำ
                </pre>
                <p>ตัวอย่างเคสจริง: Customer Support AI ที่ลด Avg Response Time จาก 2h → 2min · ลด Headcount Need 2 FTE · Build 250K · AI Cost 8K/mo = ROI 4.2× ใน Year 1 ✓ ผ่าน Threshold</p>
            </div>
        </section>

        <section class="service-section section-padding">
            <div class="container">
                <h2>Engagement Process</h2>
                <ol class="process-list">
                    <li><h3>1. AI ROI Discovery (1 สัปดาห์, 30K)</h3><p>วิเคราะห์ Workflow ปัจจุบัน หา Pain Point ที่ AI ช่วยได้ ส่ง ROI Model + Roadmap</p></li>
                    <li><h3>2. Pilot Design (1-2 สัปดาห์)</h3><p>เลือก Use Case แรกที่ ROI ชัด ออกแบบ Architecture + Data Flow + Integration Spec</p></li>
                    <li><h3>3. Build + Deploy (3-8 สัปดาห์)</h3><p>Code + Integration + Testing + Staging → Production Soft Launch</p></li>
                    <li><h3>4. Train + Handover (1 สัปดาห์)</h3><p>ฝึกทีมลูกค้า ส่งมอบ Runbook, Monitoring Dashboard, Cost Alert</p></li>
                    <li><h3>5. Retainer (Optional)</h3><p>Monitor + Iterate + Expand ไป Use Case ที่ 2-3 รายเดือน</p></li>
                </ol>
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
                <h2>เริ่มด้วย AI ROI Discovery</h2>
                <p style="max-width:48rem;margin:0 auto 2rem;">1 สัปดาห์ 30,000 บาท ได้ Model ROI + Architecture + Roadmap ครบ ก่อนลงทุน Build</p>
                <a href="<?php echo esc_url( home_url( '/#contact' ) ); ?>" class="btn btn-cta btn-lg">คุยเรื่อง AI Discovery &rarr;</a>
            </div>
        </section>
    </article>
</main>

<?php
hashbox_jsonld( array(
    '@context'    => 'https://schema.org',
    '@type'       => 'Service',
    '@id'         => $page_url . '#service',
    'name'        => 'AI Expert Consulting',
    'description' => $page_desc,
    'url'         => $page_url,
    'provider'    => array( '@id' => home_url( '/#organization' ) ),
    'areaServed'  => 'Thailand',
    'serviceType' => 'AI Consulting',
) );

hashbox_jsonld( array(
    '@context' => 'https://schema.org',
    '@type'    => 'BreadcrumbList',
    'itemListElement' => array(
        array( '@type' => 'ListItem', 'position' => 1, 'name' => 'Home', 'item' => home_url( '/' ) ),
        array( '@type' => 'ListItem', 'position' => 2, 'name' => 'Services', 'item' => home_url( '/services/' ) ),
        array( '@type' => 'ListItem', 'position' => 3, 'name' => 'AI Expert Consulting', 'item' => $page_url ),
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
