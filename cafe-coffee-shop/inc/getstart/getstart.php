<?php
//about theme info
add_action( 'admin_menu', 'cafe_coffee_shop_gettingstarted' );
function cafe_coffee_shop_gettingstarted() {
	add_theme_page( esc_html__('About Cafe Coffee Shop', 'cafe-coffee-shop'), esc_html__('Theme Demo Import', 'cafe-coffee-shop'), 'edit_theme_options', 'cafe_coffee_shop_guide', 'cafe_coffee_shop_mostrar_guide');
}

// Add a Custom CSS file to WP Admin Area
function cafe_coffee_shop_admin_theme_style() {
   wp_enqueue_style('cafe-coffee-shop-custom-admin-style', esc_url(get_theme_file_uri()) . '/inc/getstart/getstart.css');
   wp_enqueue_script('cafe-coffee-shop-tabs', esc_url(get_theme_file_uri()) . '/inc/getstart/js/tab.js');
}
add_action('admin_enqueue_scripts', 'cafe_coffee_shop_admin_theme_style');

//guidline for about theme
function cafe_coffee_shop_mostrar_guide() { 
	//custom function about theme customizer
	$return = add_query_arg( array()) ;
	$cafe_coffee_shop_theme = wp_get_theme( 'cafe-coffee-shop' );
?>

<div class="wrapper-info">  
	<div id="tc-header">
		<div class="tc-container">
			<a class="tc-logo">
				<img role="img" src="<?php echo esc_url(get_theme_file_uri()); ?>/inc/getstart/images/logo.png" alt="" />
			</a>
			<span class="tc-header-action">
			<a target="_blank" href="<?php echo esc_url( admin_url('customize.php') ); ?>"><?php esc_html_e('Customize', 'cafe-coffee-shop'); ?></a>
			<a href="<?php echo esc_url( CAFE_COFFEE_SHOP_FREE_THEME_DOC ); ?>" target="_blank"> <?php esc_html_e( 'Documentation', 'cafe-coffee-shop' ); ?></a>
			<a href="<?php echo esc_url( CAFE_COFFEE_SHOP_BUY_NOW ); ?>" target="_blank"> <?php esc_html_e( 'Get Premium', 'cafe-coffee-shop' ); ?></a>
			<a href="<?php echo esc_url( CAFE_COFFEE_SHOP_THEME_BUNDLE_BUY_NOW ); ?>" target="_blank" class="bundle-btn"> <?php esc_html_e( 'Bundle Of 220+ Themes at $99', 'cafe-coffee-shop' ); ?></a>
			</span>
		</div>
	</div>
	<div class="tc-container">
		<div class="tc-tabs">
			<ul>
				<li class="tablinks home active" onclick="cafe_coffee_shop_openCity(event, 'tc_demo')">
					<a href="#">
						<?php esc_html_e( 'Theme Demo Import', 'cafe-coffee-shop' ); ?>
					</a>
				</li>
				<li class="tablinks" onclick="cafe_coffee_shop_openCity(event, 'tc_index')">
					<a href="#">
						<?php esc_html_e( 'Free Theme Information', 'cafe-coffee-shop' ); ?>
					</a>
				</li>
				<li class="tablinks" onclick="cafe_coffee_shop_openCity(event, 'tc_pro')">
					<a href="#">
						<?php esc_html_e( 'Premium Theme Information', 'cafe-coffee-shop' ); ?>
					</a>
				</li>
				<li class="tablinks" onclick="cafe_coffee_shop_openCity(event, 'tc_create')">
					<a href="#">
						<?php esc_html_e( 'Theme Support', 'cafe-coffee-shop' ); ?>
					</a>
				</li>
			</ul>
		</div><!-- END .tc-tabs -->
	</div>

	<div class="tc-container">
		<div class="tc-section">
			<div  id="tc_demo" class="tabcontent">
				<h2><?php esc_html_e( 'Welcome to Cafe Coffee Shop', 'cafe-coffee-shop' ); ?> <span class="version">Version: <?php echo esc_html($cafe_coffee_shop_theme['Version']);?></span></h2>
				<hr>
				<div class="demo">
					<h4><?php esc_html_e( 'Click the "Run Importer" button below to load demo content for Cafe Coffee Shop', 'cafe-coffee-shop' ); ?></h4>
					<?php /* Demo Import */ require get_theme_file_path( '/inc/getstart/demo-content.php' );?>
				</div>
			</div><!-- END .tc-section -->
		</div>
	</div>

	<div class="tc-container">
		<div class="tc-section">
			<div  id="tc_index" class="tabcontent">
				<h2><?php esc_html_e( 'Welcome to Cafe Coffee Shop Theme', 'cafe-coffee-shop' ); ?> <span class="version">Version: <?php echo esc_html($cafe_coffee_shop_theme['Version']);?></span></h2>
				<hr>
				<div class="info-link">
					<a href="<?php echo esc_url( CAFE_COFFEE_SHOP_FREE_THEME_DOC ); ?>" target="_blank"> <?php esc_html_e( 'Documentation', 'cafe-coffee-shop' ); ?></a>
					<a target="_blank" href="<?php echo esc_url( admin_url('customize.php') ); ?>"><?php esc_html_e('Customizing', 'cafe-coffee-shop'); ?></a>
					<a class="get-pro" href="<?php echo esc_url( CAFE_COFFEE_SHOP_BUY_NOW ); ?>" target="_blank"><?php esc_html_e('Get Pro', 'cafe-coffee-shop'); ?></a>
				</div>
				<div class="col-tc-6">
					<img role="img" src="<?php echo esc_url(get_theme_file_uri()); ?>/inc/getstart/images/screenshot.png" alt="" />
				</div>
				<div class="col-tc-6">
					<P><?php esc_html_e( 'Welcome to Cafe Coffee Shop, a free WordPress theme specifically crafted for coffee shops, cafes, bistros, and anyone passionate about coffee culture. This elegantly designed multipurpose theme is ideal not only for cafeterias and coffee shops but also for restaurants and eateries. With a professional and intuitive design shaped by expert developers, Cafe Coffee Shop offers a clean and sophisticated look that attracts visitors to your establishment. Perfect for a variety of food-related businesses such as Coffee Kiosks, Bakeries, Fine Dining restaurants, and Vegan Cafes, its minimalist style ensures fast loading times to keep your audience engaged. The customizable footer menu allows for typography adjustments, and features like CTAs and contact forms enhance interactivity, making it easier for clients to connect with you. Showcase your menu offerings with customizable sections for your signature drinks and delicious treats, all managed from an intuitive admin panel that requires no coding. Stunning CSS animations breathe life into your site, while the retina-ready design ensures vibrant content and images. Promote your business effortlessly with social media icons and benefit from optimized codes, including WPML compatibility, SEO optimization, built-in shortcodes, and much more. Elevate your cafe\'s online presence with the Cafe Coffee Shop WordPress theme and create an unforgettable digital experience today. Start brewing success for your cafe for free! Demo: https://preview.themescaliber.com/tc-cafe-pro/.', 'cafe-coffee-shop' ); ?></P>
				</div>
			</div>
		</div><!-- END .tc-section -->
	</div>

	<div class="tc-container">
		<div class="tc-section">
			<div id="tc_pro" class="tabcontent">
				<h3><?php esc_html_e( 'Cafe Coffee Shop Theme Information', 'cafe-coffee-shop' ); ?></h3>
				<hr>
				<div class="info-link-pro">
					<a href="<?php echo esc_url( CAFE_COFFEE_SHOP_BUY_NOW ); ?>" target="_blank"> <?php esc_html_e( 'Buy Now', 'cafe-coffee-shop' ); ?></a>
					<a href="<?php echo esc_url( CAFE_COFFEE_SHOP_LIVE_DEMO ); ?>" target="_blank"> <?php esc_html_e( 'Live Demo', 'cafe-coffee-shop' ); ?></a>
					<a href="<?php echo esc_url( CAFE_COFFEE_SHOP_PRO_DOC ); ?>" target="_blank"> <?php esc_html_e( 'Pro Documentation', 'cafe-coffee-shop' ); ?></a>
				</div>
				<div class="pro-image">
					<img role="img" src="<?php echo esc_url(get_theme_file_uri()); ?>/inc/getstart/images/Cafe-Coffee-Shop-Responsive.png" alt="" />
				</div>
			<div class="col-pro-5">
				<h4><?php esc_html_e( 'Cafe Coffee Shop Pro Theme', 'cafe-coffee-shop' ); ?></h4>
				<p><?php esc_html_e( 'Cafe WordPress theme is well suited for coffee shop websites and you do not need to hire a coder or designer for this. You do not need to start from scratch and this WP theme has the background image option and is integrated with the current font awesome. It is good for all businesses that are directly or indirectly related to the hospitality industry and the main reason is that it is multipurpose. With the WordPress cafe theme, you have the demo kit and this is predefined for utilization out of the box. You have the option to customize and fine-tune the look as per your choice and suitability. It has the web custom elements and is compatible with plugins like contact form 7 and WooCommerce. It has a global color option and is responsive. You can craft your own dream page. It has a social media feature and slider with unlimited slides.', 'cafe-coffee-shop' ); ?></P>		
			</div>
			<div class="col-pro-6">				
				<h4><?php esc_html_e( 'Theme Features', 'cafe-coffee-shop' ); ?></h4>
				<ul>
					<li><?php esc_html_e( 'Theme Customization', 'cafe-coffee-shop' ); ?></li>
					<li><?php esc_html_e( 'Responsive Design', 'cafe-coffee-shop' ); ?></li>
					<li><?php esc_html_e( 'Logo Upload', 'cafe-coffee-shop' ); ?></li>
					<li><?php esc_html_e( 'Social Media Links, Title and Tagline Customization', 'cafe-coffee-shop' ); ?></li>
					<li><?php esc_html_e( 'Banner Settings', 'cafe-coffee-shop' ); ?></li>
					<li><?php esc_html_e( 'Template Pages', 'cafe-coffee-shop' ); ?></li>
					<li><?php esc_html_e( 'Home Page Template', 'cafe-coffee-shop' ); ?></li>
					<li><?php esc_html_e( 'Theme sections', 'cafe-coffee-shop' ); ?></li>
					<li><?php esc_html_e( 'Contact us Page Template / Support Templates', 'cafe-coffee-shop' ); ?></li>
					<li><?php esc_html_e( 'Blog Templates & Layout', 'cafe-coffee-shop' ); ?></li>
					<li><?php esc_html_e( 'Page Templates & Layout', 'cafe-coffee-shop' ); ?></li>
					<li><?php esc_html_e( 'Color Pallete For Particular Sections', 'cafe-coffee-shop' ); ?></li>
					<li><?php esc_html_e( 'Global Color Option ', 'cafe-coffee-shop' ); ?></li>
					<li><?php esc_html_e( 'Section Reordering', 'cafe-coffee-shop' ); ?></li>
					<li><?php esc_html_e( 'Demo Importer', 'cafe-coffee-shop' ); ?></li>
					<li><?php esc_html_e( 'Allow To Set Site Title, Tagline, Logo', 'cafe-coffee-shop' ); ?></li>
					<li><?php esc_html_e( 'Enable Disable Options On All Sections, Logo', 'cafe-coffee-shop' ); ?></li>
					<li><?php esc_html_e( 'Full Documentation', 'cafe-coffee-shop' ); ?></li>
					<li><?php esc_html_e( 'Latest WordPress Compatibility', 'cafe-coffee-shop' ); ?></li>
					<li><?php esc_html_e( 'Support 3rd Party Plugins', 'cafe-coffee-shop' ); ?></li>
					<li><?php esc_html_e( 'Secure and Optimized Code', 'cafe-coffee-shop' ); ?></li>
					<li><?php esc_html_e( 'Exclusive Functionalities', 'cafe-coffee-shop' ); ?></li>
					<li><?php esc_html_e( 'Social Media Feature', 'cafe-coffee-shop' ); ?></li>
					<li><?php esc_html_e( 'Section Google Font Choices', 'cafe-coffee-shop' ); ?></li>
					<li><?php esc_html_e( 'Video Gallery', 'cafe-coffee-shop' ); ?></li>
					<li><?php esc_html_e( 'Simple & Mega Menu Option', 'cafe-coffee-shop' ); ?></li>
					<li><?php esc_html_e( 'Support to add custom CSS / JS', 'cafe-coffee-shop' ); ?></li>
					<li><?php esc_html_e( 'Shortcodes', 'cafe-coffee-shop' ); ?></li>
					<li><?php esc_html_e( 'Custom Background, Colors, Header, Logo & Menu', 'cafe-coffee-shop' ); ?></li>
					<li><?php esc_html_e( 'Premium Membership', 'cafe-coffee-shop' ); ?></li>
					<li><?php esc_html_e( 'Budget Friendly Value', 'cafe-coffee-shop' ); ?></li>
					<li><?php esc_html_e( 'Priority Error Fixing', 'cafe-coffee-shop' ); ?></li>
					<li><?php esc_html_e( 'Custom Feature Addition', 'cafe-coffee-shop' ); ?></li>
					<li><?php esc_html_e( 'All Access Theme Pass', 'cafe-coffee-shop' ); ?></li>
					<li><?php esc_html_e( 'Seamless Customer Support', 'cafe-coffee-shop' ); ?></li>
					<li><?php esc_html_e( 'Summer Camp', 'cafe-coffee-shop' ); ?></li>
					<li><?php esc_html_e( 'Detail Services', 'cafe-coffee-shop' ); ?></li>
					<li><?php esc_html_e( 'About Business Page', 'cafe-coffee-shop' ); ?></li>
					<li><?php esc_html_e( 'Team Member Page', 'cafe-coffee-shop' ); ?></li>
					<li><?php esc_html_e( 'Project Description Page', 'cafe-coffee-shop' ); ?></li>
					<li><?php esc_html_e( 'Support Page', 'cafe-coffee-shop' ); ?></li>
				</ul>			
			</div>	
		</div><!-- END .tc-section -->
	</div>

	<div class="tc-container">
		<div class="tc-section">
			<div id="tc_create" class="tabcontent">
				<div class="tab-cont">
					<h4><?php esc_html_e( 'Need Support?', 'cafe-coffee-shop' ); ?></h4>				
					<div class="info-link-support">
						<P><?php esc_html_e( 'Our team is obliged to help you in every way possible whenever you face any type of difficulties and doubts.', 'cafe-coffee-shop' ); ?></P>
						<a href="<?php echo esc_url( CAFE_COFFEE_SHOP_SUPPORT ); ?>" target="_blank"> <?php esc_html_e( 'Support Forum', 'cafe-coffee-shop' ); ?></a>
					</div>
				</div>
				<div class="tab-cont">	
					<h4><?php esc_html_e('Reviews', 'cafe-coffee-shop'); ?></h4>				
					<div class="info-link-support">
						<P><?php esc_html_e( 'It is commendable to have such a theme inculcated with amazing features and robust functionalities. I feel grateful to recommend this theme to one and all.', 'cafe-coffee-shop' ); ?></P>
						<a href="<?php echo esc_url( CAFE_COFFEE_SHOP_REVIEW ); ?>" target="_blank"><?php esc_html_e('Reviews', 'cafe-coffee-shop'); ?></a>
					</div>
				</div>

				<div class="tc-section large-section">
					<h2>Let‘s customize your website</h2>
					<p>There are many changes you can make to customize your website. Explore customization options and make it unique.</p>
					<div class="tc-buttons">
						<a target="_blank" href="<?php echo esc_url( admin_url('customize.php') ); ?>" class="tc-btn primary large-button"><?php esc_html_e('Start Customizing', 'cafe-coffee-shop'); ?></a>
					</div><!-- END .tc-buttons -->
				</div>
			</div>
		</div><!-- END .tc-section -->
	</div>
</div>
<?php } ?>