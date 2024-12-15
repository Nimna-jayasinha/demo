<?php
/**
 * Theme About Page
 *
 * @package Vinowine
 * @since 1.0
 */

function vinowine_theme_page_admin_style( $hook ) {
	if ( 'appearance_page_vinowine-theme' === $hook ) {
		// Register theme stylesheet.
		$theme_version = wp_get_theme()->get( 'Version' );

		$version_string = is_string( $theme_version ) ? $theme_version : false;
		wp_enqueue_style(
			'vinowine-theme-admin-style',
			get_theme_file_uri( 'resource/css/about-admin.css' ),
			array(),
			$version_string
		);
	}
}
add_action( 'admin_enqueue_scripts', 'vinowine_theme_page_admin_style' );

/**
 * Add theme page
 */
function vinowine_menu() {
	add_theme_page( esc_html__( 'Vinowine', 'vinowine' ), esc_html__( 'Vinowine', 'vinowine' ), 'edit_theme_options', 'vinowine-theme', 'vinowine_theme_page_display' );
}
add_action( 'admin_menu', 'vinowine_menu' );

/**
 * Display About page
 */
function vinowine_theme_page_display() {
	$theme = wp_get_theme();
	
	if ( is_child_theme() ) {
		$theme = wp_get_theme()->parent();
	}
	?>
	
	<div id="welcome-panel" class="welcome-panel">
		<div class="welcome-panel-content">
			<div class="welcome-panel-header">
				<h2><?php echo esc_html( $theme->Name ); ?></h2>
				<p><?php esc_html_e( 'By Nordic WP Theme', 'vinowine' ); ?></p>
			</div>
			
			<div class="welcome-panel-column-container">
				<div class="container-wrap">
					<div class="welcome-panel-column two-columns">
						<!-- <div class="welcome-panel-icon-pages"></div> -->
						<div class="welcome-panel-column-content">
							<h3><?php esc_html_e( 'Welcome to the Vinowine - Premium WordPress Themes', 'vinowine' ); ?></h3>
							<p><?php esc_html_e( 'Vinowine Store is a sleek and sophisticated WordPress theme, fully integrated with WooCommerce, designed for those who want to create an online wine store. Its modern and flexible design ensures a smooth user experience, allowing you to easily manage the website without any coding knowledge. Whether you are showcasing wine collections or other products, the theme lets your content shine. With our One-click demo import, powered by Elementor, you can quickly set up a stunning site. Compatible with the latest WordPress version, this theme is ideal for any wine-related business, providing a clean and elegant framework for your online store.', 'vinowine' ); ?></p>
							<a target="_blank" href="https://www.nordicwptheme.com/Documentation/"><?php esc_html_e( 'Theme documentation', 'vinowine' ); ?></a>
						</div>
					</div>
					
					<div class="welcome-panel-column two-columns">
						<div class="welcome-panel-column-content">
							<h3><?php esc_html_e( 'Premium Features - Vinowine Pro', 'vinowine' ); ?></h3>
							<p><?php esc_html_e( 'Including all free features, Vinowine Pro comes with 40+ advanced blocks that enhance & power up the e-commerce website. By seamlessly integrating these blocks with our ready Demo, you have the flexibility to create a wide selection of captivating online store.', 'vinowine' ); ?></p>
							<p><?php esc_html_e( 'Compatible with latest WordPress version', 'vinowine' ); ?></p>
							<p><?php esc_html_e( 'Compatibility with major browsers. Perfect on all device and platforms.', 'vinowine' ); ?></p>
							<p><?php esc_html_e( 'Import demo easily. All contents pages & homepage can be easily set up.', 'vinowine' ); ?></p>
							<p><?php esc_html_e( 'You will get free installation if you request us to install.', 'vinowine' ); ?></p>
							<a target="_blank" class="button green button-primary button-hero green" href="https://www.nordicwptheme.com/product/vinowine-pro-wordpress-theme-for-fitness/"><?php esc_html_e( 'Upgrade Vinowine Pro Version', 'vinowine' ); ?></a>
						</div>
					</div>

				</div>
				<div class="sidebar">
					<div class="welcome-panel-column important-links">
					<!-- <div class="welcome-panel-icon-pages"></div> -->
					<div class="welcome-panel-column-content">
						<h3><?php esc_html_e( 'Important Links', 'vinowine' ); ?></h3>
						<a target="_blank" href="<?php echo esc_url( $theme->get( 'ThemeURI' ) ); ?>"><?php esc_html_e( 'About Vinowine', 'vinowine' ); ?></a>
						<a  target="_blank" href="<?php echo esc_url( $theme->get( 'ThemeURI' ) . '/#theme-instructions' ); ?>"><?php esc_html_e( 'Theme Instructions', 'vinowine' ); ?></a>
						<a target="_blank" href="https://nordicwptheme.se/vinowine/"><?php esc_html_e( 'View Demo', 'vinowine' ); ?></a>
					</div>
				</div>

				<div class="welcome-panel-column review">
					<!-- <div class="welcome-panel-icon-pages"></div> -->
					<div class="welcome-panel-column-content">
						<h3><?php esc_html_e( 'Create a Ticket', 'vinowine' ); ?></h3>
						<p><?php esc_html_e( 'We do not provide any support via email, comments, phone call, Skype or any other means.', 'vinowine' ); ?></p>
						<a target="_blank" href="https://www.nordicwptheme.com/contact/" class="button button-primary button-hero" style="text-decoration: none;" target="_blank"><?php esc_html_e( 'Create a Ticket', 'vinowine' ); ?></a>
					</div>
				</div>
				<div class="welcome-panel-column review">
					<!-- <div class="welcome-panel-icon-pages"></div> -->
					<div class="welcome-panel-column-content">
						<h3><?php esc_html_e( 'Leave us a review', 'vinowine' ); ?></h3>
						<p><?php esc_html_e( 'Loved Vinowine Blocks? Feel free to leave your feedback. Your opinion helps us reach more audiences!', 'vinowine' ); ?></p>
						<a target="_blank" href="https://wordpress.org/support/theme/vinowine/reviews/" class="button button-primary button-hero" style="text-decoration: none;" target="_blank"><?php esc_html_e( 'Review', 'vinowine' ); ?></a>
					</div>
				</div>
				</div>
			</div>
		</div>
	</div>
	<?php
}
