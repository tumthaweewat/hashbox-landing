<?php
/**
 * Template Name: Work: Hub
 *
 * Lists all 6 case studies at /work/.
 *
 * @package Hashbox_Studio
 */

get_header();
$page_url = get_permalink();

$cases = array(
    array(
        'slug'     => 'nexus-corp',
        'name'     => 'Nexus Corp',
        'industry' => 'Enterprise Software',
        'metric'   => '+540% Users',
        'desc'     => 'Headless WordPress + Next.js corporate site with full SEO and analytics integration',
        'tag'      => 'Corporate Website',
        'bg'       => 'linear-gradient(135deg, #1D4ED8, #2563EB)',
    ),
    array(
        'slug'     => 'flow-store',
        'name'     => 'Flow Store',
        'industry' => 'E-commerce',
        'metric'   => '3× Conversion',
        'desc'     => 'Next.js storefront with TH payment + CRO sprint that 3xed conversion rate in 6 months',
        'tag'      => 'E-commerce',
        'bg'       => 'linear-gradient(135deg, #0369A1, #06B6D4)',
    ),
    array(
        'slug'     => 'rank-project',
        'name'     => 'Rank Project',
        'industry' => 'HR-Tech',
        'metric'   => '+2,200% Impressions',
        'desc'     => 'Full technical SEO + 12-month content programme for HR-Tech platform',
        'tag'      => 'SEO Recovery',
        'bg'       => 'linear-gradient(135deg, #1E3A5F, #2563EB)',
    ),
    array(
        'slug'     => 'autobot-line',
        'name'     => 'AutoBot LINE',
        'industry' => 'On-demand Services',
        'metric'   => '−60% Support Cost',
        'desc'     => 'LINE OA bot + OpenAI integration handling Thai customer support 24/7',
        'tag'      => 'AI Workforce',
        'bg'       => 'linear-gradient(135deg, #064E3B, #059669)',
    ),
    array(
        'slug'     => 'gold-brand',
        'name'     => 'Gold Brand',
        'industry' => 'Luxury Retail',
        'metric'   => '+180% Branded Search',
        'desc'     => 'Brand identity refresh paired with high-performance corporate site launch',
        'tag'      => 'Brand + Web',
        'bg'       => 'linear-gradient(135deg, #78350F, #F59E0B)',
    ),
    array(
        'slug'     => 'pitch-deck',
        'name'     => 'Pitch Deck',
        'industry' => 'SaaS Startup',
        'metric'   => 'Series A Closed',
        'desc'     => 'High-impact investor microsite + data viz; helped client close Series A',
        'tag'      => 'Investor Web',
        'bg'       => 'linear-gradient(135deg, #312E81, #7C3AED)',
    ),
);
?>

<main id="content" class="work-hub-page">

    <nav class="breadcrumb container" aria-label="Breadcrumb">
        <ol>
            <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a></li>
            <li aria-current="page">Work</li>
        </ol>
    </nav>

    <section class="work-hub-hero section-padding" aria-labelledby="work-h1">
        <div class="container">
            <span class="section-label">CASE STUDIES</span>
            <h1 id="work-h1" class="section-title">งานจริงที่เราภูมิใจ — 6 เคสที่ผลลัพธ์วัดได้ทุกตัวเลข</h1>
            <p class="section-sub" style="max-width:56rem;">
                ทุกเคสด้านล่างมาจากงานจริงที่ทีมเราทำให้ลูกค้าใน 4 อุตสาหกรรมหลัก ตั้งแต่ HR-Tech, E-commerce, On-demand Service ไปจนถึง SaaS ผลลัพธ์ที่แสดงล้วนมาจาก Google Analytics 4 และ Search Console จริง ไม่ใช่ตัวเลขประมาณ และทีมที่ Lead งานทุกเคสคือ Senior Engineer และ Designer โดยตรง ไม่ใช่ Junior PM ที่ส่งต่อ
            </p>
        </div>
    </section>

    <section class="work-grid-section section-padding">
        <div class="container">
            <div class="work-grid">
                <?php foreach ( $cases as $case ) : ?>
                    <a href="<?php echo esc_url( home_url( '/work/' . $case['slug'] . '/' ) ); ?>" class="work-card" style="--card-bg: <?php echo esc_attr( $case['bg'] ); ?>;" aria-label="<?php echo esc_attr( $case['name'] . ' case study' ); ?>">
                        <span class="work-tag tag-blue"><?php echo esc_html( $case['tag'] ); ?></span>
                        <div class="work-overlay">
                            <h2 class="work-name" style="font-size:1.4rem;"><?php echo esc_html( $case['name'] ); ?></h2>
                            <p class="work-industry" style="opacity:.75;font-size:.85rem;"><?php echo esc_html( $case['industry'] ); ?></p>
                            <p class="work-metric"><strong><?php echo esc_html( $case['metric'] ); ?></strong></p>
                            <p class="work-desc"><?php echo esc_html( $case['desc'] ); ?></p>
                            <span class="work-cta">อ่าน Case Study →</span>
                        </div>
                    </a>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <section class="work-cta section-padding section-surface">
        <div class="container" style="text-align:center;">
            <h2 class="section-title">เคสของคุณคือเคสถัดไป</h2>
            <p style="max-width:48rem;margin:0 auto 2rem;">รับ SEO + Performance Audit ฟรี 15-20 หน้า ก่อนตัดสินใจเริ่มงาน</p>
            <a href="<?php echo esc_url( home_url( '/#contact' ) ); ?>" class="btn btn-cta btn-lg">เริ่มต้นกับเรา &rarr;</a>
        </div>
    </section>

</main>

<?php
// ItemList of cases + BreadcrumbList
$item_list = array();
foreach ( $cases as $idx => $case ) {
    $item_list[] = array(
        '@type'    => 'ListItem',
        'position' => $idx + 1,
        'url'      => home_url( '/work/' . $case['slug'] . '/' ),
        'name'     => $case['name'],
    );
}
hashbox_jsonld( array(
    '@context' => 'https://schema.org',
    '@type'    => 'CollectionPage',
    '@id'      => $page_url . '#collection',
    'url'      => $page_url,
    'name'     => 'Hashbox Studio — Case Studies',
    'description' => '6 case studies from Hashbox Studio team across SEO, Web Development, CRO and AI Workforce',
    'hasPart'  => array(
        '@type'           => 'ItemList',
        'itemListElement' => $item_list,
    ),
) );

hashbox_jsonld( array(
    '@context' => 'https://schema.org',
    '@type'    => 'BreadcrumbList',
    'itemListElement' => array(
        array( '@type' => 'ListItem', 'position' => 1, 'name' => 'Home', 'item' => home_url( '/' ) ),
        array( '@type' => 'ListItem', 'position' => 2, 'name' => 'Work', 'item' => $page_url ),
    ),
) );

get_footer();
