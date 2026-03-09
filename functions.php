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
    ?>
    <ul>
        <li><a href="#services" class="nav-link">Services</a></li>
        <li><a href="#digital-workforce" class="nav-link">Digital Workforce</a></li>
        <li><a href="#portfolio" class="nav-link">Work</a></li>
        <li><a href="#about" class="nav-link">About</a></li>
        <li><a href="#contact" class="nav-link">Contact</a></li>
    </ul>
    <?php
}

/**
 * Fallback mobile menu callback
 */
function hashbox_fallback_mobile_menu() {
    ?>
    <ul>
        <li><a href="#services" class="mobile-link">Services</a></li>
        <li><a href="#digital-workforce" class="mobile-link">Digital Workforce</a></li>
        <li><a href="#portfolio" class="mobile-link">Work</a></li>
        <li><a href="#about" class="mobile-link">About</a></li>
        <li><a href="#contact" class="mobile-link">Contact</a></li>
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

// Fetch portfolio data (mock data for now)
function fetch_benjanard_portfolio() {
    // Mock data - replace with actual API call or scraping logic
    return array(
        'projects' => array(
            array(
                'title' => 'Enterprise Dashboard',
                'subtitle' => 'Data Visualization Platform',
                'description' => 'A comprehensive dashboard for enterprise data analysis with real-time updates and interactive charts.',
                'websiteUrl' => 'https://example.com/project1',
                'responsibilities' => array('UI/UX Design', 'Frontend Development'),
                'features' => array('Real-time Data', 'Interactive Charts', 'Responsive Design')
            ),
            array(
                'title' => 'E-commerce Platform',
                'subtitle' => 'Modern Shopping Experience',
                'description' => 'Full-featured e-commerce platform with payment integration and inventory management.',
                'websiteUrl' => 'https://example.com/project2',
                'responsibilities' => array('Full Stack Development', 'Payment Integration'),
                'features' => array('Payment Gateway', 'Inventory System', 'Admin Panel')
            ),
            array(
                'title' => 'Mobile Banking App',
                'subtitle' => 'Secure Financial Services',
                'description' => 'Mobile banking application with biometric authentication and real-time transactions.',
                'websiteUrl' => 'https://example.com/project3',
                'responsibilities' => array('Mobile Development', 'Security Implementation'),
                'features' => array('Biometric Auth', 'Real-time Transactions', 'Security Features')
            )
        ),
        'scrapedAt' => current_time('mysql')
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
