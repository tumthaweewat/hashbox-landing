<?php
/**
 * Hashbox Studio Theme Functions
 *
 * @package Hashbox_Studio
 * @version 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * Theme setup
 */
function hashbox_theme_setup() {
    // Let WordPress manage the document title
    add_theme_support( 'title-tag' );

    // HTML5 support for search form, comment form, etc.
    add_theme_support( 'html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'style',
        'script',
    ) );

    // Register navigation menus
    register_nav_menus( array(
        'primary' => __( 'Primary Navigation', 'hashbox-studio' ),
    ) );
}
add_action( 'after_setup_theme', 'hashbox_theme_setup' );

/**
 * Add meta description for About page
 */
function hashbox_about_meta_description() {
    if ( is_page_template( 'page-about.php' ) ) {
        echo '<meta name="description" content="Hashbox Studio is a Website Craft Agency + Digital Workforce Studio combining technical web development with AI workflow consulting. Led by a Fullstack Developer with 19 years of experience and 300+ brands managed.">' . "\n";
    }
}
add_action( 'wp_head', 'hashbox_about_meta_description', 1 );

/**
 * Custom title tag for About page
 */
function hashbox_about_title( $title ) {
    if ( is_page_template( 'page-about.php' ) ) {
        return 'About Us — Hashbox Studio | Website Craft + Digital Workforce';
    }
    return $title;
}
add_filter( 'pre_get_document_title', 'hashbox_about_title' );

/**
 * Add favicon and app icons
 */
function hashbox_add_favicon() {
    // Remove default WordPress favicon
    remove_action('wp_head', 'wp_site_icon', 99);
}
add_action('init', 'hashbox_add_favicon');

/**
 * Enqueue styles and scripts
 */
function hashbox_enqueue_assets() {
    // Google Fonts: Space Grotesk + DM Sans
    wp_enqueue_style(
        'hashbox-google-fonts',
        'https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@400;500;600;700&family=DM+Sans:wght@300;400;500;600&display=swap',
        array(),
        null
    );

    // Preconnect hints for Google Fonts
    add_filter( 'wp_resource_hints', 'hashbox_resource_hints', 10, 2 );

    // Theme stylesheet
    wp_enqueue_style(
        'hashbox-style',
        get_stylesheet_uri(),
        array( 'hashbox-google-fonts' ),
        wp_get_theme()->get( 'Version' )
    );

    // Theme script
    wp_enqueue_script(
        'hashbox-script',
        get_template_directory_uri() . '/js/script.js',
        array(),
        wp_get_theme()->get( 'Version' ),
        true
    );
}
add_action( 'wp_enqueue_scripts', 'hashbox_enqueue_assets' );

/**
 * Add preconnect resource hints for Google Fonts
 */
function hashbox_resource_hints( $urls, $relation_type ) {
    if ( 'preconnect' === $relation_type ) {
        $urls[] = array(
            'href' => 'https://fonts.googleapis.com',
            'crossorigin' => false,
        );
        $urls[] = array(
            'href' => 'https://fonts.gstatic.com',
            'crossorigin' => 'anonymous',
        );
    }
    return $urls;
}

/**
 * Fallback menu callback — renders static nav links when no WP menu is assigned
 */
function hashbox_fallback_menu() {
    $home = esc_url( home_url( '/' ) );
    ?>
    <ul>
        <li><a href="<?php echo esc_url( home_url( '/services/' ) ); ?>" class="nav-link">Services</a></li>
        <li><a href="<?php echo esc_url( home_url( '/work/' ) ); ?>" class="nav-link">Work</a></li>
        <li><a href="<?php echo $home; ?>#insights" class="nav-link">Insights</a></li>
        <li><a href="<?php echo esc_url( home_url( '/about/' ) ); ?>" class="nav-link">About</a></li>
        <li><a href="<?php echo $home; ?>#contact" class="nav-link">Contact</a></li>
    </ul>
    <?php
}

/**
 * Fallback mobile menu callback
 */
function hashbox_fallback_mobile_menu() {
    $home = esc_url( home_url( '/' ) );
    ?>
    <ul>
        <li><a href="<?php echo esc_url( home_url( '/services/' ) ); ?>" class="mobile-link">Services</a></li>
        <li><a href="<?php echo esc_url( home_url( '/work/' ) ); ?>" class="mobile-link">Work</a></li>
        <li><a href="<?php echo $home; ?>#insights" class="mobile-link">Insights</a></li>
        <li><a href="<?php echo esc_url( home_url( '/about/' ) ); ?>" class="mobile-link">About</a></li>
        <li><a href="<?php echo $home; ?>#contact" class="mobile-link">Contact</a></li>
    </ul>
    <?php
}

/**
 * Portfolio Page Functionality
 */

// Enqueue portfolio assets on portfolio page
function hashbox_enqueue_portfolio_assets() {
    if (is_page_template('page-portfolio.php')) {
        wp_enqueue_script(
            'hashbox-portfolio',
            get_template_directory_uri() . '/js/portfolio.js',
            array(),
            '1.0.0',
            true
        );
        
        // Localize script for AJAX
        wp_localize_script('hashbox-portfolio', 'portfolioAjax', array(
            'ajaxurl' => admin_url('admin-ajax.php'),
            'nonce' => wp_create_nonce('portfolio_nonce')
        ));
    }
}
add_action('wp_enqueue_scripts', 'hashbox_enqueue_portfolio_assets');

// Enqueue about page assets
function hashbox_enqueue_about_assets() {
    if (is_page_template('page-about.php')) {
        wp_enqueue_style(
            'hashbox-about-css',
            get_template_directory_uri() . '/css/about-page.css',
            array('hashbox-style'),
            '1.0.0'
        );

        wp_enqueue_script(
            'hashbox-about-js',
            get_template_directory_uri() . '/js/about.js',
            array(),
            '1.0.0',
            true
        );
    }
}
add_action('wp_enqueue_scripts', 'hashbox_enqueue_about_assets');

// Portfolio authentication AJAX handler
function handle_portfolio_auth() {
    check_ajax_referer('portfolio_nonce', 'nonce');
    
    $password = sanitize_text_field($_POST['password']);
    $correct_password = get_option('portfolio_password', 'hashbox2026');
    
    if ($password === $correct_password) {
        wp_send_json_success();
    } else {
        wp_send_json_error('รหัสผ่านไม่ถูกต้อง');
    }
}
add_action('wp_ajax_portfolio_auth', 'handle_portfolio_auth');
add_action('wp_ajax_nopriv_portfolio_auth', 'handle_portfolio_auth');

// Get portfolio data AJAX handler
function get_portfolio_data() {
    check_ajax_referer('portfolio_nonce', 'nonce');
    
    $refresh = isset($_POST['refresh']) && $_POST['refresh'] === '1';
    
    // Check for cached data
    $cache_key = 'benjanard_portfolio_data';
    $cached_data = get_transient($cache_key);
    
    if (!$refresh && $cached_data) {
        wp_send_json_success($cached_data);
        return;
    }
    
    // Try to get fresh data from external API or use mock data
    $portfolio_data = fetch_benjanard_portfolio();
    
    if ($portfolio_data) {
        // Cache for 5 minutes
        set_transient($cache_key, $portfolio_data, 5 * MINUTE_IN_SECONDS);
        wp_send_json_success($portfolio_data);
    } else {
        wp_send_json_error('Failed to load portfolio data');
    }
}
add_action('wp_ajax_get_portfolio_data', 'get_portfolio_data');
add_action('wp_ajax_nopriv_get_portfolio_data', 'get_portfolio_data');

// Fetch portfolio data (Benjanard's real projects)
function fetch_benjanard_portfolio() {
    // Real project data from Benjanard's portfolio
    return array(
        'projects' => array(
            array(
                'title' => 'Robinhood Super App 4.0',
                'subtitle' => 'App Revamp - Thailand\'s First Super App',
                'description' => 'Thailand\'s first Super App for food-delivery, ride-hailing, shopping, express and travel with 6 Million base users. Mobile app revamp focused on improving interface efficiency, enhancing convenience and accessibility, making user journey simpler.',
                'websiteUrl' => '',
                'category' => 'mobile',
                'image' => get_template_directory_uri() . '/assets/portfolio-images/robinhood-app.jpg',
                'imageAlt' => 'Robinhood Super App 4.0 mobile interface design',
                'responsibilities' => array('UX/UI Design', 'Visual Design', 'Design System', 'UX Writing', 'Competitor Analysis', 'Graphic Design'),
                'features' => array('Payment Shortcut', 'Search Landing', 'Save Address', 'Onboarding Improvement', 'Filter & Sort', 'Suggest Items'),
                'tags' => array('Super App', 'Mobile Design', 'UX/UI', 'Food Delivery', 'Payment System'),
                'year' => '2024',
                'client' => 'Robinhood',
                'status' => 'featured'
            ),
            array(
                'title' => 'Krungthai Bank',
                'subtitle' => 'Web Application Revamp',
                'description' => 'Complete website revamp focusing on user-friendly interface and visually appealing design to enhance customer experience. Emphasis on modern banking digital experience.',
                'websiteUrl' => '',
                'category' => 'web',
                'image' => get_template_directory_uri() . '/assets/portfolio-images/krungthai-bank.jpg',
                'imageAlt' => 'Krungthai Bank web application interface design',
                'responsibilities' => array('Style Guide', 'Design Concepts', 'Visual Design', 'Key Visual', 'User Interface', 'CI Website Guidelines'),
                'features' => array('Modern Interface', 'User Experience', 'Visual Design', 'Brand Guidelines'),
                'tags' => array('Banking', 'Web Design', 'Financial Services', 'Corporate'),
                'year' => '2024',
                'client' => 'Krungthai Bank',
                'status' => 'featured'
            ),
            array(
                'title' => 'Singha Estate Corporate',
                'subtitle' => 'Website Redesign',
                'description' => 'International real estate developer website redesign with improved information architecture and user interface. Visual storytelling format showcasing grand and luxurious brand image with focus on sustainability.',
                'websiteUrl' => '',
                'category' => 'web',
                'image' => get_template_directory_uri() . '/assets/portfolio-images/singha-estate.jpg',
                'imageAlt' => 'Singha Estate corporate website design',
                'responsibilities' => array('Style Guide', 'Design Concepts', 'Story Telling', 'Design System', 'User Interface', 'Prototype'),
                'features' => array('Visual Storytelling', 'Luxury Design', 'Sustainability Focus', 'Information Architecture'),
                'tags' => array('Real Estate', 'Corporate', 'Luxury Brand', 'Storytelling'),
                'year' => '2024',
                'client' => 'Singha Estate',
                'status' => 'featured'
            ),
            array(
                'title' => 'Electrolux Thailand',
                'subtitle' => 'Virtual Shop Campaign',
                'description' => 'Shop-in-shop concept microsite to boost kitchen appliance sales. User journey with filtering steps for food preferences and product categories, including sustainability information leading to e-commerce purchases.',
                'websiteUrl' => '',
                'category' => 'ecommerce',
                'image' => get_template_directory_uri() . '/assets/portfolio-images/electrolux-shop.jpg',
                'imageAlt' => 'Electrolux virtual shop campaign interface',
                'responsibilities' => array('Creative Ideas', 'User Flow', 'User Interface', 'Prototype', 'Visual Design', 'Retouch', 'Story Telling'),
                'features' => array('Shop-in-Shop', 'User Journey', 'Product Filtering', 'Sustainability Info'),
                'tags' => array('E-commerce', 'Campaign', 'Kitchen Appliances', 'Microsite'),
                'year' => '2024',
                'client' => 'Electrolux Thailand',
                'status' => 'regular'
            ),
            array(
                'title' => 'THE WISDOM - KBank',
                'subtitle' => '24-hour Personal Assistant via LINE',
                'description' => '24-hour personal assistant service integrated with LINE messaging platform for Kasikorn Bank customers. Focus on user interface and information architecture for seamless banking assistance.',
                'websiteUrl' => '',
                'category' => 'mobile',
                'image' => get_template_directory_uri() . '/assets/portfolio-images/wisdom-kbank.jpg',
                'imageAlt' => 'THE WISDOM KBank LINE assistant interface',
                'responsibilities' => array('User Interface', 'Information Architecture', 'Prototype', 'Visualization'),
                'features' => array('24/7 Service', 'LINE Integration', 'Banking Assistant', 'Chat Interface'),
                'tags' => array('Banking', 'Chatbot', 'LINE', 'Customer Service'),
                'year' => '2023',
                'client' => 'Kasikorn Bank',
                'status' => 'regular'
            ),
            array(
                'title' => 'KTC Mobile App',
                'subtitle' => 'App Store Preview Design',
                'description' => 'KTC (Krungthai Card) mobile app preview design for App Store. Concept focused on "easy, complete, and comprehensive for every moment" user experience.',
                'websiteUrl' => '',
                'category' => 'mobile',
                'image' => get_template_directory_uri() . '/assets/portfolio-images/ktc-mobile.jpg',
                'imageAlt' => 'KTC Mobile app preview design',
                'responsibilities' => array('Creative Ideas', 'Visual Design', 'Graphic Design'),
                'features' => array('App Store Preview', 'Mobile Banking', 'Card Management', 'User Experience'),
                'tags' => array('Mobile App', 'Banking', 'Credit Card', 'App Store'),
                'year' => '2023',
                'client' => 'KTC (Krungthai Card)',
                'status' => 'regular'
            ),
            array(
                'title' => 'Block Trade - Yuanta Securities',
                'subtitle' => 'Single Stock Futures Website',
                'description' => 'Created webpage for "Single stock futures block trade" under Yuanta Securities website. Focus on financial trading interface and user experience for securities trading.',
                'websiteUrl' => 'https://www.yuanta.co.th',
                'category' => 'web',
                'responsibilities' => array('User Interface', 'Visual Design', 'Illustration'),
                'features' => array('Trading Interface', 'Financial Data', 'Securities Trading', 'Block Trade'),
                'tags' => array('Finance', 'Trading', 'Securities', 'Web Design'),
                'year' => '2023',
                'client' => 'Yuanta Securities',
                'status' => 'regular'
            ),
            array(
                'title' => 'D Health Plus - KBank',
                'subtitle' => 'Health Insurance Website',
                'description' => 'Health insurance landing page responsive website design under Kasikorn Bank. Focus on health insurance products and user-friendly insurance application process.',
                'websiteUrl' => 'https://www.kasikornbank.com',
                'category' => 'web',
                'responsibilities' => array('User Interface', 'Illustration'),
                'features' => array('Health Insurance', 'Responsive Design', 'Insurance Application', 'Landing Page'),
                'tags' => array('Insurance', 'Healthcare', 'Banking', 'Landing Page'),
                'year' => '2023',
                'client' => 'Kasikorn Bank',
                'status' => 'regular'
            ),
            array(
                'title' => 'Isuzu Thailand Website',
                'subtitle' => 'Website Revamp',
                'description' => 'Isuzu Thailand website revamp project demonstrating enhanced design and structure. Utilized Di-cut techniques to create striking visuals that stand out from frame cards.',
                'websiteUrl' => '',
                'category' => 'web',
                'responsibilities' => array('Web Design', 'Visual Design', 'Creative Direction'),
                'features' => array('Di-cut Techniques', 'Visual Enhancement', 'Automotive Design', 'Brand Identity'),
                'tags' => array('Automotive', 'Corporate', 'Website Revamp', 'Visual Design'),
                'year' => '2023',
                'client' => 'Isuzu Thailand',
                'status' => 'showcase'
            ),
            array(
                'title' => 'Peppermint Field',
                'subtitle' => 'Product Website',
                'description' => 'Product website showcasing product functions with animated videos and images. Focus on making the product presentation more interesting and appealing to potential customers.',
                'websiteUrl' => '',
                'category' => 'web',
                'responsibilities' => array('Web Design', 'Animation', 'Product Presentation'),
                'features' => array('Animated Videos', 'Product Showcase', 'Interactive Elements', 'Visual Appeal'),
                'tags' => array('Product Design', 'Animation', 'E-commerce', 'Interactive'),
                'year' => '2023',
                'client' => 'Peppermint Field',
                'status' => 'showcase'
            )
        ),
        'scrapedAt' => current_time('mysql'),
        'totalProjects' => 10,
        'designer' => array(
            'name' => 'Benjanard',
            'title' => 'UX/UI Designer',
            'description' => 'Experienced UX/UI designer with a strong background in creating visually appealing and user-friendly interfaces for web and mobile applications.',
            'contact' => array(
                'email' => 'benjanard@example.com',
                'phone' => '095-4799860',
                'linkedin' => 'https://linkedin.com/in/benjanard'
            )
        )
    );
}

// Add portfolio password option to admin
function add_portfolio_admin_menu() {
    add_options_page(
        'Portfolio Settings',
        'Portfolio',
        'manage_options',
        'portfolio-settings',
        'portfolio_settings_page'
    );
}
add_action('admin_menu', 'add_portfolio_admin_menu');

function portfolio_settings_page() {
    if (isset($_POST['submit'])) {
        update_option('portfolio_password', sanitize_text_field($_POST['portfolio_password']));
        echo '<div class="notice notice-success"><p>Settings saved!</p></div>';
    }
    
    $current_password = get_option('portfolio_password', 'hashbox2026');
    ?>
    <div class="wrap">
        <h1>Portfolio Settings</h1>
        <form method="post" action="">
            <table class="form-table">
                <tr>
                    <th scope="row">Portfolio Password</th>
                    <td>
                        <input type="text" name="portfolio_password" value="<?php echo esc_attr($current_password); ?>" />
                        <p class="description">Password required to access the portfolio page.</p>
                    </td>
                </tr>
            </table>
            <?php submit_button(); ?>
        </form>
    </div>
    <?php
}

/* =========================================================================
 * SEO + Schema (added 2026-05-10) — Sprint 1 of CONTENT-REWRITE-SPEC.md
 * ========================================================================= */

/**
 * Force HTML lang="th" site-wide so crawlers classify the site as Thai.
 *
 * The visible content is Thai-primary; the WP locale was previously en-US which
 * mis-signalled language to Google. Override at the language_attributes filter
 * level so this works regardless of WP Settings → General locale.
 */
function hashbox_force_thai_lang_attribute( $output ) {
    return 'lang="th"';
}
add_filter( 'language_attributes', 'hashbox_force_thai_lang_attribute' );

/**
 * Default homepage meta description + og:locale.
 *
 * Rank Math handles per-page meta when set; this fills gaps for the homepage
 * if Rank Math is empty. Skip if Rank Math has already injected a description.
 */
function hashbox_homepage_meta_description() {
    if ( ! is_front_page() ) {
        return;
    }

    // Avoid double-emit if Rank Math (or another SEO plugin) is active.
    if ( defined( 'RANK_MATH_VERSION' ) ) {
        return;
    }

    $desc = 'Hashbox Studio — รับทำเว็บไซต์ที่พร้อม SEO ตั้งแต่วันแรก ติดตั้งเครื่องมือ Digital Marketing + CRO และเป็นที่ปรึกษา AI ผู้เชี่ยวชาญ ส่งมอบ Lighthouse 100, Core Web Vitals เขียว, ผลลัพธ์ใน 90 วัน';

    echo '<meta name="description" content="' . esc_attr( $desc ) . '">' . "\n";
    echo '<meta property="og:locale" content="th_TH">' . "\n";
    echo '<meta property="og:locale:alternate" content="en_US">' . "\n";
}
add_action( 'wp_head', 'hashbox_homepage_meta_description', 1 );

/**
 * Output a JSON-LD <script> tag for structured data.
 *
 * @param array $data Schema graph or single object as associative array.
 */
function hashbox_jsonld( array $data ) {
    $json = wp_json_encode( $data, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE );
    if ( false === $json ) {
        return;
    }
    echo '<script type="application/ld+json">' . $json . '</script>' . "\n";
}

/**
 * Inject Organization + ProfessionalService + WebSite schema on the homepage.
 *
 * Tied together via @id refs so AI engines can resolve the entity graph.
 * Replaces stale Article schema previously emitted on the home page.
 */
function hashbox_inject_home_schema() {
    if ( ! is_front_page() ) {
        return;
    }

    $home   = home_url( '/' );
    $logo   = get_template_directory_uri() . '/assets/favicons/apple-touch-icon.png';

    hashbox_jsonld( array(
        '@context' => 'https://schema.org',
        '@graph'   => array(
            array(
                '@type' => 'Organization',
                '@id'   => $home . '#organization',
                'name'  => 'Hashbox Studio',
                'url'   => $home,
                'logo'  => $logo,
                'sameAs' => array(
                    'https://www.linkedin.com/company/hashbox-studio',
                    'https://www.facebook.com/hashboxstudio',
                    'https://www.instagram.com/hashboxstudio',
                ),
                'contactPoint' => array(
                    '@type'             => 'ContactPoint',
                    'telephone'         => '+66-2-266-6222',
                    'email'             => 'hello@hashbox.co.th',
                    'contactType'       => 'sales',
                    'areaServed'        => 'TH',
                    'availableLanguage' => array( 'th', 'en' ),
                ),
                'address' => array(
                    '@type'           => 'PostalAddress',
                    'streetAddress'   => '139 Pan Rd, Si Lom',
                    'addressLocality' => 'Bang Rak',
                    'addressRegion'   => 'Bangkok',
                    'postalCode'      => '10500',
                    'addressCountry'  => 'TH',
                ),
            ),
            array(
                '@type'              => 'ProfessionalService',
                '@id'                => $home . '#service',
                'name'               => 'Hashbox Studio',
                'description'        => 'SEO-ready website builds, digital marketing tools, CRO, and AI consulting for Thai SMEs.',
                'url'                => $home,
                'priceRange'         => '฿฿฿',
                'areaServed'         => 'Thailand',
                'parentOrganization' => array( '@id' => $home . '#organization' ),
                'hasOfferCatalog'    => array(
                    '@type' => 'OfferCatalog',
                    'name'  => 'Services',
                    'itemListElement' => array(
                        array(
                            '@type'       => 'Offer',
                            'itemOffered' => array(
                                '@type'       => 'Service',
                                'name'        => 'SEO-Ready Website Build',
                                'description' => 'Production-ready websites that pass Lighthouse 100, green Core Web Vitals, complete schema, and rank within 60-90 days.',
                            ),
                        ),
                        array(
                            '@type'       => 'Offer',
                            'itemOffered' => array(
                                '@type'       => 'Service',
                                'name'        => 'Digital Marketing Tools + CRO',
                                'description' => 'GA4, GSC, Looker Studio, heatmaps, A/B testing, and monthly CRO sprints to compound conversion.',
                            ),
                        ),
                        array(
                            '@type'       => 'Offer',
                            'itemOffered' => array(
                                '@type'       => 'Service',
                                'name'        => 'AI Expert Consulting',
                                'description' => 'LINE bot, sales GPT, RAG knowledge base, and workflow automation that ships to production.',
                            ),
                        ),
                    ),
                ),
            ),
            array(
                '@type'      => 'WebSite',
                '@id'        => $home . '#website',
                'url'        => $home,
                'name'       => 'Hashbox Studio',
                'inLanguage' => 'th-TH',
                'publisher'  => array( '@id' => $home . '#organization' ),
                'potentialAction' => array(
                    '@type'       => 'SearchAction',
                    'target'      => array(
                        '@type'       => 'EntryPoint',
                        'urlTemplate' => $home . '?s={search_term_string}',
                    ),
                    'query-input' => 'required name=search_term_string',
                ),
            ),
        ),
    ) );
}
add_action( 'wp_head', 'hashbox_inject_home_schema', 20 );

/**
 * Source-of-truth FAQ data for the homepage.
 *
 * Defined in functions.php (not faq.php) so it loads before wp_head fires.
 * template-parts/faq.php reuses this via the function_exists() guard so the
 * visible markup and the FAQPage JSON-LD always stay in lockstep.
 */
if ( ! function_exists( 'hashbox_get_home_faqs' ) ) {
    function hashbox_get_home_faqs() {
        return array(
            array(
                'q' => 'เว็บที่คุณทำพร้อม SEO จริงไหม ใช้เวลานานแค่ไหนถึงเห็นผล?',
                'a' => 'ใช่ ทุกเว็บผ่าน Build Gate: Lighthouse 100, Core Web Vitals เขียว, Schema Validator ผ่าน ลูกค้าส่วนใหญ่เห็น Impressions เพิ่มภายใน 30-60 วัน และ Ranking ขยับใน 60-90 วัน ทั้งนี้ขึ้นกับ Niche และ Domain Authority ปัจจุบัน',
            ),
            array(
                'q' => 'Tech Stack ที่ใช้คืออะไร?',
                'a' => 'ขึ้นกับโจทย์ — Next.js + Headless CMS สำหรับเว็บที่ต้องการ Performance สูงสุด, WordPress + Custom Theme สำหรับเว็บที่ทีมต้องแก้เนื้อหาเองได้, Cloudflare/Vercel สำหรับ CDN + Edge, GA4/GSC/Looker Studio สำหรับ Analytics',
            ),
            array(
                'q' => 'Digital Marketing Tools และ CRO ทำอะไรบ้าง?',
                'a' => 'ติดตั้งและ Configure เครื่องมือ Tracking ครบวงจร พร้อมรัน CRO Sprint รายเดือน เริ่มจาก Hypothesis → A/B Test → Measure ส่ง Report พร้อม Recommendation ลูกค้าได้ทั้งเครื่องมือและ Insight ไม่ใช่แค่ติดตั้งแล้วจบ',
            ),
            array(
                'q' => 'AI Consulting ครอบคลุมอะไรบ้าง?',
                'a' => 'เริ่มจากการประเมิน AI ROI → ออกแบบ Workflow → Implement → Train ทีม ตัวอย่างงาน: LINE Bot ตอบลูกค้า 24/7, Sales GPT ใน CRM, RAG Knowledge Base ภายใน, Workflow Automation ผ่าน n8n ลดงาน Manual ของทีม 40%+',
            ),
            array(
                'q' => 'โปรเจกต์ใช้เวลานานเท่าไหร่?',
                'a' => 'Landing Page: 2-3 สัปดาห์ · Corporate Site: 4-6 สัปดาห์ · E-commerce: 6-10 สัปดาห์ · AI Bot: 3-5 สัปดาห์ ขึ้นกับ Scope และ Integration ที่ต้องเชื่อมต่อ',
            ),
            array(
                'q' => 'ราคาเริ่มต้นเท่าไหร่?',
                'a' => 'Landing Page เริ่ม 80,000 บาท · Corporate Site เริ่ม 200,000 บาท · E-commerce เริ่ม 350,000 บาท · AI Consulting Retainer เริ่ม 50,000 บาท/เดือน — ทุก Quote เริ่มหลังการ Audit ฟรี',
            ),
            array(
                'q' => 'มี Support หลังส่งมอบไหม?',
                'a' => 'มี — เลือกได้ระหว่าง One-time Maintenance, Monthly Retainer (Performance + CRO + Content) หรือ AI Workforce Retainer ทุกแพ็กเกจมี SLA ตอบกลับและ Dashboard ให้ลูกค้าดูผลแบบ Real-time',
            ),
        );
    }
}

/**
 * Inject FAQPage schema on the homepage. Pulls the same array used by
 * template-parts/faq.php for the visible accordion, keeping content + schema
 * in sync from a single source of truth.
 */
function hashbox_inject_home_faq_schema() {
    if ( ! is_front_page() ) {
        return;
    }
    if ( ! function_exists( 'hashbox_get_home_faqs' ) ) {
        return;
    }

    $faqs = hashbox_get_home_faqs();
    if ( empty( $faqs ) ) {
        return;
    }

    $main_entity = array();
    foreach ( $faqs as $faq ) {
        $main_entity[] = array(
            '@type'          => 'Question',
            'name'           => $faq['q'],
            'acceptedAnswer' => array(
                '@type' => 'Answer',
                'text'  => $faq['a'],
            ),
        );
    }

    hashbox_jsonld( array(
        '@context'   => 'https://schema.org',
        '@type'      => 'FAQPage',
        '@id'        => home_url( '/#faq' ),
        'mainEntity' => $main_entity,
    ) );
}
add_action( 'wp_head', 'hashbox_inject_home_faq_schema', 21 );

/**
 * Contact form submission handler.
 *
 * Accepts the homepage #contact form. Validates required fields + PDPA
 * consent, sanitizes input, and emails the form to the admin address.
 * Sends a 303 redirect back to the homepage on success (no JS required).
 */
function hashbox_handle_contact_submit() {
    if ( ! isset( $_POST['hashbox_nonce'] ) || ! wp_verify_nonce( wp_unslash( $_POST['hashbox_nonce'] ), 'hashbox_contact' ) ) {
        wp_die( 'Invalid request token.', 'Forbidden', array( 'response' => 403 ) );
    }

    $name    = isset( $_POST['name'] )    ? sanitize_text_field( wp_unslash( $_POST['name'] ) )    : '';
    $email   = isset( $_POST['email'] )   ? sanitize_email( wp_unslash( $_POST['email'] ) )       : '';
    $phone   = isset( $_POST['phone'] )   ? sanitize_text_field( wp_unslash( $_POST['phone'] ) )   : '';
    $website = isset( $_POST['website'] ) ? esc_url_raw( wp_unslash( $_POST['website'] ) )         : '';
    $service = isset( $_POST['service'] ) ? sanitize_text_field( wp_unslash( $_POST['service'] ) ) : '';
    $message = isset( $_POST['message'] ) ? sanitize_textarea_field( wp_unslash( $_POST['message'] ) ) : '';
    $pdpa    = isset( $_POST['pdpa'] );

    if ( $name === '' || $email === '' || ! is_email( $email ) || ! $pdpa ) {
        wp_safe_redirect( add_query_arg( 'contact', 'invalid', home_url( '/#contact' ) ) );
        exit;
    }

    $to      = get_option( 'admin_email' );
    $subject = sprintf( '[Hashbox] New enquiry from %s — %s', $name, $service ?: 'unspecified' );
    $body    = sprintf(
        "Name: %s\nEmail: %s\nPhone: %s\nWebsite: %s\nService: %s\n\nMessage:\n%s\n\n— Submitted from %s",
        $name, $email, $phone, $website, $service, $message, home_url( '/' )
    );
    $headers = array(
        'Content-Type: text/plain; charset=UTF-8',
        sprintf( 'Reply-To: %s <%s>', $name, $email ),
    );

    $sent = wp_mail( $to, $subject, $body, $headers );

    wp_safe_redirect( add_query_arg( 'contact', $sent ? 'sent' : 'error', home_url( '/#contact' ) ) );
    exit;
}
add_action( 'admin_post_nopriv_hashbox_contact', 'hashbox_handle_contact_submit' );
add_action( 'admin_post_hashbox_contact',        'hashbox_handle_contact_submit' );

/**
 * Shared case-study renderer. Each /work/<slug>/ page template builds a $case
 * array and calls this helper. Keeps markup + schema generation in one place
 * so all 6 case study pages stay structurally consistent.
 *
 * Required $case keys:
 *   slug, name, industry, year, timeline, tag, headline, lede,
 *   snapshot (array of 3 {value,label}), challenge (string),
 *   approach (array of {h,p}), results (array of {value,label}),
 *   stack (array of strings), testimonial {quote,attribution} (optional)
 */
function hashbox_render_case_study( array $case ) {
    $page_url = get_permalink();
    $work_url = home_url( '/work/' . $case['slug'] . '/' );
    ?>

    <main id="content" class="case-study-page">

        <nav class="breadcrumb container" aria-label="Breadcrumb">
            <ol>
                <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a></li>
                <li><a href="<?php echo esc_url( home_url( '/work/' ) ); ?>">Work</a></li>
                <li aria-current="page"><?php echo esc_html( $case['name'] ); ?></li>
            </ol>
        </nav>

        <article class="case-study">

            <header class="case-hero section-padding">
                <div class="container">
                    <span class="section-label"><?php echo esc_html( $case['tag'] ); ?> · <?php echo esc_html( $case['industry'] ); ?> · <?php echo esc_html( $case['year'] ); ?></span>
                    <h1 class="section-title"><?php echo esc_html( $case['name'] ); ?></h1>
                    <p class="section-sub" style="max-width:56rem;"><?php echo esc_html( $case['headline'] ); ?></p>
                    <p style="max-width:56rem;margin-top:1rem;font-size:1.05rem;opacity:.85;"><?php echo esc_html( $case['lede'] ); ?></p>
                </div>
            </header>

            <section class="case-snapshot section-padding section-surface">
                <div class="container">
                    <h2 class="section-label" style="margin-bottom:1.5rem;">SNAPSHOT</h2>
                    <div class="about-stats-bar">
                        <?php foreach ( $case['snapshot'] as $i => $stat ) : ?>
                            <?php if ( $i > 0 ) : ?><div class="about-stat-bar-divider"></div><?php endif; ?>
                            <div class="about-stat">
                                <span class="about-stat-num"><?php echo esc_html( $stat['value'] ); ?></span>
                                <p class="about-stat-label"><?php echo esc_html( $stat['label'] ); ?></p>
                            </div>
                        <?php endforeach; ?>
                    </div>
                    <p style="margin-top:1.5rem;opacity:.75;">Industry: <?php echo esc_html( $case['industry'] ); ?> · Project duration: <?php echo esc_html( $case['timeline'] ); ?></p>
                </div>
            </section>

            <section class="case-challenge section-padding">
                <div class="container" style="max-width:64rem;">
                    <h2>โจทย์ที่ลูกค้าเข้ามา</h2>
                    <p style="font-size:1.05rem;line-height:1.75;"><?php echo esc_html( $case['challenge'] ); ?></p>
                </div>
            </section>

            <section class="case-approach section-padding section-surface">
                <div class="container">
                    <h2 style="margin-bottom:1.5rem;">วิธีที่เราแก้</h2>
                    <ol class="process-list">
                        <?php foreach ( $case['approach'] as $i => $step ) : ?>
                            <li>
                                <h3><?php echo (int) ( $i + 1 ) . '. ' . esc_html( $step['h'] ); ?></h3>
                                <p><?php echo esc_html( $step['p'] ); ?></p>
                            </li>
                        <?php endforeach; ?>
                    </ol>
                </div>
            </section>

            <section class="case-results section-padding">
                <div class="container">
                    <h2 style="margin-bottom:1.5rem;">ผลลัพธ์</h2>
                    <div class="about-cases-grid">
                        <?php foreach ( $case['results'] as $r ) : ?>
                            <div class="about-case-card" style="text-align:center;">
                                <span class="about-metric about-metric-blue" style="font-size:1.5rem;"><?php echo esc_html( $r['value'] ); ?></span>
                                <p style="margin-top:.75rem;opacity:.85;"><?php echo esc_html( $r['label'] ); ?></p>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </section>

            <section class="case-stack section-padding section-surface">
                <div class="container">
                    <h2 style="margin-bottom:1rem;">Tech Stack ที่ใช้</h2>
                    <div class="about-tech-tags">
                        <?php foreach ( $case['stack'] as $tech ) : ?>
                            <span class="about-tech-tag about-tech-tag-blue"><?php echo esc_html( $tech ); ?></span>
                        <?php endforeach; ?>
                    </div>
                </div>
            </section>

            <?php if ( ! empty( $case['testimonial']['quote'] ) ) : ?>
            <section class="case-testimonial section-padding">
                <div class="container" style="max-width:56rem;text-align:center;">
                    <blockquote style="font-size:1.25rem;line-height:1.6;font-style:italic;opacity:.95;">
                        &ldquo;<?php echo esc_html( $case['testimonial']['quote'] ); ?>&rdquo;
                    </blockquote>
                    <p style="margin-top:1rem;opacity:.75;">— <?php echo esc_html( $case['testimonial']['attribution'] ); ?></p>
                </div>
            </section>
            <?php endif; ?>

            <section class="case-cta section-padding section-surface">
                <div class="container" style="text-align:center;">
                    <h2>เคสของคุณคือเคสถัดไป</h2>
                    <p style="max-width:48rem;margin:0 auto 2rem;">รับ Audit ฟรี · เห็น Friction Point ของเว็บคุณก่อนตัดสินใจ</p>
                    <a href="<?php echo esc_url( home_url( '/#contact' ) ); ?>" class="btn btn-cta btn-lg">รับ Audit ฟรี &rarr;</a>
                </div>
            </section>

        </article>
    </main>

    <?php
    // Schema: Article (CaseStudy) + BreadcrumbList
    $results_strings = array();
    foreach ( $case['results'] as $r ) {
        $results_strings[] = $r['value'] . ' — ' . $r['label'];
    }
    hashbox_jsonld( array(
        '@context'        => 'https://schema.org',
        '@type'           => 'Article',
        '@id'             => $work_url . '#article',
        'headline'        => $case['name'] . ' — ' . $case['headline'],
        'description'     => $case['lede'],
        'url'             => $work_url,
        'datePublished'   => $case['year'] . '-01-01',
        'inLanguage'      => 'th-TH',
        'author'          => array( '@id' => home_url( '/#organization' ) ),
        'publisher'       => array( '@id' => home_url( '/#organization' ) ),
        'about'           => $case['industry'],
        'keywords'        => implode( ', ', $case['stack'] ),
        'articleSection'  => 'Case Studies',
        'articleBody'     => $case['challenge'] . ' ' . implode( ' ', array_map( fn( $a ) => $a['h'] . ': ' . $a['p'], $case['approach'] ) ) . ' Results: ' . implode( '; ', $results_strings ) . '.',
    ) );

    hashbox_jsonld( array(
        '@context' => 'https://schema.org',
        '@type'    => 'BreadcrumbList',
        'itemListElement' => array(
            array( '@type' => 'ListItem', 'position' => 1, 'name' => 'Home',  'item' => home_url( '/' ) ),
            array( '@type' => 'ListItem', 'position' => 2, 'name' => 'Work',  'item' => home_url( '/work/' ) ),
            array( '@type' => 'ListItem', 'position' => 3, 'name' => $case['name'], 'item' => $work_url ),
        ),
    ) );
}
