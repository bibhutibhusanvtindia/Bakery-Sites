<?php
//about theme info
add_action( 'admin_menu', 'vw_bakery_gettingstarted' );
function vw_bakery_gettingstarted() {    	
	add_theme_page( esc_html__('About VW Bakery', 'vw-bakery'), esc_html__('Theme Demo Import', 'vw-bakery'), 'edit_theme_options', 'vw_bakery_guide', 'vw_bakery_mostrar_guide');   
}

// Add a Custom CSS file to WP Admin Area
function vw_bakery_admin_theme_style() {
   wp_enqueue_style('vw-bakery-custom-admin-style', esc_url(get_template_directory_uri()) . '/inc/getstarted/getstarted.css');
   wp_enqueue_script('vw-bakery-tabs', esc_url(get_template_directory_uri()) . '/inc/getstarted/js/tab.js');
}
add_action('admin_enqueue_scripts', 'vw_bakery_admin_theme_style');

//guidline for about theme
function vw_bakery_mostrar_guide() { 
	//custom function about theme customizer
	$return = add_query_arg( array()) ;
	$theme = wp_get_theme( 'vw-bakery' );
?>

<div class="wrapper-info">
    <div class="col-left sshot-section">
    	<h2><?php esc_html_e( 'Welcome to VW Bakery Theme', 'vw-bakery' ); ?> <span class="version">Version: <?php echo esc_html($theme['Version']);?></span></h2>
    	<p><?php esc_html_e('All our WordPress themes are modern, minimalist, 100% responsive, seo-friendly,feature-rich, and multipurpose that best suit designers, bloggers and other professionals who are working in the creative fields.','vw-bakery'); ?></p>
    </div>
    <div class="col-right coupen-section">
    	<div class="logo-section">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/screenshot.png" alt="" />
		</div>
		<div class="logo-right">			
			<div class="update-now">
				<div class="theme-info">
					<div class="theme-info-left">
						<h2><?php esc_html_e('TRY PREMIUM','vw-bakery'); ?></h2>
						<h4><?php esc_html_e('VW BAKERY THEME','vw-bakery'); ?></h4>
					</div>	
					<div class="theme-info-right"></div>
				</div>	
				<div class="dicount-row">
					<div class="disc-sec">	
						<h5 class="disc-text"><?php esc_html_e('GET THE FLAT DISCOUNT OF','vw-bakery'); ?></h5>
						<h1 class="disc-per"><?php esc_html_e('20%','vw-bakery'); ?></h1>	
					</div>
					<div class="coupen-info">
						<h5 class="coupen-code"><?php esc_html_e('"VWPRO20"','vw-bakery'); ?></h5>
						<h5 class="coupen-text"><?php esc_html_e('USE COUPON CODE','vw-bakery'); ?></h5>
						<div class="info-link">						
							<a href="<?php echo esc_url( VW_BAKERY_BUY_NOW ); ?>" target="_blank"> <?php esc_html_e( 'UPGRADE TO PRO', 'vw-bakery' ); ?></a>
						</div>	
					</div>	
				</div>				
			</div>
		</div> 
		
    </div>

    <div class="tab-sec">
		<div class="tab">
		   <button class="tablinks" onclick="vw_bakery_open_tab(event, 'theme_offer')"><?php esc_html_e( 'Demo Importer', 'vw-bakery' ); ?></button>
			<button class="tablinks" onclick="vw_bakery_open_tab(event, 'lite_theme')"><?php esc_html_e( 'Setup With Customizer', 'vw-bakery' ); ?></button>
			
			<button class="tablinks" onclick="vw_bakery_open_tab(event, 'pro_theme')"><?php esc_html_e( 'Get Premium', 'vw-bakery' ); ?></button>
			<button class="tablinks" onclick="vw_bakery_open_tab(event, 'lite_pro')"><?php esc_html_e( 'Free vs Premimum', 'vw-bakery' ); ?></button>
			<button class="tablinks" onclick="vw_bakery_open_tab(event, 'get_bundle')"><?php esc_html_e( 'Get 500+ Themes Bundle at $119', 'vw-bakery' ); ?></button>
		</div>

		<?php 
			$vw_bakery_plugin_custom_css = '';
			if(class_exists('Ibtana_Visual_Editor_Menu_Class')){
				$vw_bakery_plugin_custom_css ='display: block';
			}
		?>

		<div id="theme_offer" class="tabcontent open">
			<div class="demo-content">
				<h3><?php esc_html_e( 'Click the below run importer button to import demo content', 'vw-bakery' ); ?></h3>
				<?php
				/* Get Started. */
				require get_parent_theme_file_path( '/inc/getstarted/demo-content.php' );
			 	?>
			</div>
		</div>

		<div id="lite_theme" class="tabcontent">
			<?php  if(!class_exists('Ibtana_Visual_Editor_Menu_Class')){ 
				$plugin_ins = VW_Bakery_Plugin_Activation_Settings::get_instance();
				$vw_bakery_actions = $plugin_ins->recommended_actions;
				?>
				<div class="vw-bakery-recommended-plugins">
				    <div class="vw-bakery-action-list">
				        <?php if ($vw_bakery_actions): foreach ($vw_bakery_actions as $key => $vw_bakery_actionValue): ?>
				                <div class="vw-bakery-action" id="<?php echo esc_attr($vw_bakery_actionValue['id']);?>">
			                        <div class="action-inner">
			                            <h3 class="action-title"><?php echo esc_html($vw_bakery_actionValue['title']); ?></h3>
			                            <div class="action-desc"><?php echo esc_html($vw_bakery_actionValue['desc']); ?></div>
			                            <?php echo wp_kses_post($vw_bakery_actionValue['link']); ?>
			                            <a class="ibtana-skip-btn" get-start-tab-id="lite-theme-tab" href="javascript:void(0);"><?php esc_html_e('Skip','vw-bakery'); ?></a>
			                        </div>
				                </div>
				            <?php endforeach;
				        endif; ?>
				    </div>
				</div>
			<?php } ?>
			<div class="lite-theme-tab" style="<?php echo esc_attr($vw_bakery_plugin_custom_css); ?>">
				<h3><?php esc_html_e( 'Lite Theme Information', 'vw-bakery' ); ?></h3>
				<hr class="h3hr">
		  		<p><?php esc_html_e('VW Bakery is a beautifully designed WordPress theme that perfectly caters to a variety of food businesses, including bakeries, cake and pastry shops, cafes, coffee houses, sweet shops, and more. Its sleek and charming layout makes it versatile enough for any brand in the food industry, whether you\'re selling fresh juices, smoothies, gourmet baked goods, or even operating an organic or vegan bakery. This theme works wonderfully for businesses like cupcake shops, donut shops, candy stores, and ice cream parlors. It also suits establishments offering baking classes, sugar-free cakes, and creative desserts like macarons and fruit cakes. Whether you run a small food joint, a high-end patisserie, or a bustling cafe, VW Bakery provides a visually appealing platform to showcase your unique offerings. With its responsive design, the theme ensures an optimal viewing experience on any device. Use eye-catching images of your delectable cakes, pastries, and shakes in the gallery to entice visitors, supported by customizable sliders and banners that enhance the site\'s aesthetic. Plus, the theme is equipped with essential features like multilingual support, various post formats, and RTL writing capabilities, making it accessible to a broader audience. For those looking to customize their site further, VW Bakery offers a range of options that allow the theme to reflect your brand\'s personality whether you prefer a feminine touch or a bold, dark theme suitable for cafeterias, catering businesses, or fast food outlets. Integration with social media icons helps expand your bakery\'s reach, while its search engine optimization ensures that your website attracts relevant traffic. The clean and secure coding protects your site from potential breaches and enhances its performance.','vw-bakery'); ?></p>
			  	<div class="col-left-inner">
			  		<h4><?php esc_html_e( 'Theme Documentation', 'vw-bakery' ); ?></h4>
					<p><?php esc_html_e( 'If you need any assistance regarding setting up and configuring the Theme, our documentation is there.', 'vw-bakery' ); ?></p>
					<div class="info-link">
						<a href="<?php echo esc_url( VW_BAKERY_FREE_THEME_DOC ); ?>" target="_blank"> <?php esc_html_e( 'Documentation', 'vw-bakery' ); ?></a>
					</div>
					<hr>
					<h4><?php esc_html_e('Theme Customizer', 'vw-bakery'); ?></h4>
					<p> <?php esc_html_e('To begin customizing your website, start by clicking "Customize".', 'vw-bakery'); ?></p>
					<div class="info-link">
						<a target="_blank" href="<?php echo esc_url( admin_url('customize.php') ); ?>"><?php esc_html_e('Customizing', 'vw-bakery'); ?></a>
					</div>
					<hr>				
					<h4><?php esc_html_e('Having Trouble, Need Support?', 'vw-bakery'); ?></h4>
					<p> <?php esc_html_e('Our dedicated team is well prepared to help you out in case of queries and doubts regarding our theme.', 'vw-bakery'); ?></p>
					<div class="info-link">
						<a href="<?php echo esc_url(VW_BAKERY_SUPPORT ); ?>" target="_blank"><?php esc_html_e('Support Forum', 'vw-bakery'); ?></a>
					</div>
					<hr>
					<h4><?php esc_html_e('Reviews & Testimonials', 'vw-bakery'); ?></h4>
					<p> <?php esc_html_e('All the features and aspects of this WordPress Theme are phenomenal. I\'d recommend this theme to all.', 'vw-bakery'); ?>  </p>
					<div class="info-link">
						<a href="<?php echo esc_url( VW_BAKERY_REVIEW ); ?>" target="_blank"><?php esc_html_e('Reviews', 'vw-bakery'); ?></a>
					</div>
			  		<div class="link-customizer">
						<h3><?php esc_html_e( 'Link to customizer', 'vw-bakery' ); ?></h3>
						<hr class="h3hr">
						<div class="first-row">
							<div class="row-box">
								<div class="row-box1">
									<span class="dashicons dashicons-buddicons-buddypress-logo"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[control]=custom_logo') ); ?>" target="_blank"><?php esc_html_e('Upload your logo','vw-bakery'); ?></a>
								</div>
								<div class="row-box2">
									<span class="dashicons dashicons-slides"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=vw_bakery_slidersettings') ); ?>" target="_blank"><?php esc_html_e('Slider Settings','vw-bakery'); ?></a>
								</div>
							</div>
							<div class="row-box">
								<div class="row-box1">
									<span class="dashicons dashicons-welcome-write-blog"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=vw_bakery_topbar') ); ?>" target="_blank"><?php esc_html_e('Topbar Section','vw-bakery'); ?></a>
								</div>
								<div class="row-box2">
									<span class="dashicons dashicons-products"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=vw_bakery_product_section') ); ?>" target="_blank"><?php esc_html_e('Bakery Product Section','vw-bakery'); ?></a>
								</div>
							</div>
							<div class="row-box">
								<div class="row-box1">
									<span class="dashicons dashicons-menu"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[panel]=nav_menus') ); ?>" target="_blank"><?php esc_html_e('Menus','vw-bakery'); ?></a>
								</div>
								<div class="row-box2">
									<span class="dashicons dashicons-screenoptions"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[panel]=widgets') ); ?>" target="_blank"><?php esc_html_e('Footer Widget','vw-bakery'); ?></a>
								</div>
							</div>

							<div class="row-box">
								<div class="row-box1">
									<span class="dashicons dashicons-format-gallery"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=vw_bakery_post_settings') ); ?>" target="_blank"><?php esc_html_e('Post settings','vw-bakery'); ?></a>
								</div>
								 <div class="row-box2">
									<span class="dashicons dashicons-align-center"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=vw_bakery_woocommerce_section') ); ?>" target="_blank"><?php esc_html_e('WooCommerce Layout','vw-bakery'); ?></a>
								</div> 
							</div>
							
							<div class="row-box">
								<div class="row-box1">
									<span class="dashicons dashicons-admin-generic"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=vw_bakery_left_right') ); ?>" target="_blank"><?php esc_html_e('General Settings','vw-bakery'); ?></a>
								</div>
								<div class="row-box2">
									<span class="dashicons dashicons-text-page"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=vw_bakery_footer') ); ?>" target="_blank"><?php esc_html_e('Footer Text','vw-bakery'); ?></a>
								</div>
							</div>
						</div>
					</div>
			  	</div>
				<div class="col-right-inner">
					<h3 class="page-template"><?php esc_html_e('How to set up Home Page Template','vw-bakery'); ?></h3>
				  	<hr class="h3hr">
					<p><?php esc_html_e('Follow these instructions to setup Home page.','vw-bakery'); ?></p>
	                <ul>
	                  	<p><span class="strong"><?php esc_html_e('1. Create a new page :','vw-bakery'); ?></span><?php esc_html_e(' Go to ','vw-bakery'); ?>
					  	<b><?php esc_html_e(' Dashboard >> Pages >> Add New Page','vw-bakery'); ?></b></p>

	                  	<p><?php esc_html_e('Name it as "Home" then select the template "Custom Home Page".','vw-bakery'); ?></p>
	                  	<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getstarted/images/home-page-template.png" alt="" />
	                  	<p><span class="strong"><?php esc_html_e('2. Set the front page:','vw-bakery'); ?></span><?php esc_html_e(' Go to ','vw-bakery'); ?>
					  	<b><?php esc_html_e(' Settings >> Reading ','vw-bakery'); ?></b></p>
					  	<p><?php esc_html_e('Select the option of Static Page, now select the page you created to be the homepage, while another page to be your default page.','vw-bakery'); ?></p>
	                  	<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getstarted/images/set-front-page.png" alt="" />
	                  	<p><?php esc_html_e(' Once you are done with this, then follow the','vw-bakery'); ?> <a class="doc-links" href="https://preview.vwthemesdemo.com/docs/free-vw-bakery/" target="_blank"><?php esc_html_e('Documentation','vw-bakery'); ?></a></p>
	                </ul>
			  	</div>
		  	</div>
		</div>


		<div id="pro_theme" class="tabcontent">
		  	<h3><?php esc_html_e( 'Premium Theme Information', 'vw-bakery' ); ?></h3>
			<hr class="h3hr">
		    <div class="col-left-pro">
		    	<p><?php esc_html_e('This bakery WordPress theme is charming, youthful, energetic, reliable and fresh looking with a feminine touch to its design which is given by the choice of bright colours and stylish fonts. It is great to be used for bakery shops, cakes, pastry and chocolate house, coffee shops, sweet shops, juice and shake centres and other relevant food and beverages joint. It has so many eye-catching features and advanced functionality that this bakery WP theme is sure to give your competitors a tough fight in all respects. You can choose from the unlimited colours to change its bright and lively colours into the one that suits your brand. Its flexible layout can be changed from boxed to full-width with the option to club it with sidebars. Its user-friendly interface of front end caters smooth navigation. The theme can be used by a novice with no coding knowledge and a webmaster with equal efficiency to design a beautiful website.','vw-bakery'); ?></p>
		    </div>
		    <div class="col-right-pro">
			   <div class="pro-links">
			    	<a href="<?php echo esc_url( VW_BAKERY_LIVE_DEMO ); ?>" target="_blank"><?php esc_html_e('Live Demo', 'vw-bakery'); ?></a>
					<a href="<?php echo esc_url( VW_BAKERY_BUY_NOW ); ?>" target="_blank"><?php esc_html_e('Buy Pro', 'vw-bakery'); ?></a>
					<a href="<?php echo esc_url( VW_BAKERY_PRO_DOC ); ?>" target="_blank"><?php esc_html_e('Pro Documentation', 'vw-bakery'); ?></a>
					<a href="<?php echo esc_url( VW_BAKERY_THEME_BUNDLE_BUY_NOW ); ?>" target="_blank"><?php esc_html_e('Get 500+ Themes Bundle at $119', 'vw-bakery'); ?></a>
				</div>
		    	<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getstarted/images/responsive.png" alt="" />
		    </div>
		</div>

		<div id="lite_pro" class="tabcontent">
		<div class="featurebox">
			    <h3><?php esc_html_e( 'Theme Features', 'vw-bakery' ); ?></h3>
				<hr class="h3hr">
				<div class="table-image">
					<table class="tablebox">
						<thead>
							<tr>
								<th></th>
								<th><?php esc_html_e('Free Themes', 'vw-bakery'); ?></th>
								<th><?php esc_html_e('Premium Themes', 'vw-bakery'); ?></th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td><?php esc_html_e('Theme Customization', 'vw-bakery'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Responsive Design', 'vw-bakery'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Logo Upload', 'vw-bakery'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Social Media Links', 'vw-bakery'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Slider Settings', 'vw-bakery'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Number of Slides', 'vw-bakery'); ?></td>
								<td class="table-img"><?php esc_html_e('4', 'vw-bakery'); ?></td>
								<td class="table-img"><?php esc_html_e('Unlimited', 'vw-bakery'); ?></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Template Pages', 'vw-bakery'); ?></td>
								<td class="table-img"><?php esc_html_e('3', 'vw-bakery'); ?></td>
								<td class="table-img"><?php esc_html_e('6', 'vw-bakery'); ?></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Home Page Template', 'vw-bakery'); ?></td>
								<td class="table-img"><?php esc_html_e('1', 'vw-bakery'); ?></td>
								<td class="table-img"><?php esc_html_e('1', 'vw-bakery'); ?></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Theme sections', 'vw-bakery'); ?></td>
								<td class="table-img"><?php esc_html_e('2', 'vw-bakery'); ?></td>
								<td class="table-img"><?php esc_html_e('12', 'vw-bakery'); ?></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Contact us Page Template', 'vw-bakery'); ?></td>
								<td class="table-img">0</td>
								<td class="table-img"><?php esc_html_e('1', 'vw-bakery'); ?></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Blog Templates & Layout', 'vw-bakery'); ?></td>
								<td class="table-img">0</td>
								<td class="table-img"><?php esc_html_e('3(Full width/Left/Right Sidebar)', 'vw-bakery'); ?></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Page Templates & Layout', 'vw-bakery'); ?></td>
								<td class="table-img">0</td>
								<td class="table-img"><?php esc_html_e('2(Left/Right Sidebar)', 'vw-bakery'); ?></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Color Pallete For Particular Sections', 'vw-bakery'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Global Color Option', 'vw-bakery'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Section Reordering', 'vw-bakery'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Demo Importer', 'vw-bakery'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Allow To Set Site Title, Tagline, Logo', 'vw-bakery'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Enable Disable Options On All Sections, Logo', 'vw-bakery'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Full Documentation', 'vw-bakery'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Latest WordPress Compatibility', 'vw-bakery'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Woo-Commerce Compatibility', 'vw-bakery'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Support 3rd Party Plugins', 'vw-bakery'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Secure and Optimized Code', 'vw-bakery'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Exclusive Functionalities', 'vw-bakery'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Section Enable / Disable', 'vw-bakery'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Section Google Font Choices', 'vw-bakery'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Gallery', 'vw-bakery'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Simple & Mega Menu Option', 'vw-bakery'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Support to add custom CSS / JS ', 'vw-bakery'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Shortcodes', 'vw-bakery'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Custom Background, Colors, Header, Logo & Menu', 'vw-bakery'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Premium Membership', 'vw-bakery'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Budget Friendly Value', 'vw-bakery'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Priority Error Fixing', 'vw-bakery'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Custom Feature Addition', 'vw-bakery'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('All Access Theme Pass', 'vw-bakery'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Seamless Customer Support', 'vw-bakery'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td></td>
								<td class="table-img"></td>
								<td class="update-link"><a href="<?php echo esc_url( VW_BAKERY_BUY_NOW ); ?>" target="_blank"><?php esc_html_e('Upgrade to Pro', 'vw-bakery'); ?></a></td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>

		<div id="get_bundle" class="tabcontent">		  	
		   <div class="col-left-pro">
		   	<h3><?php esc_html_e( 'WP Theme Bundle', 'vw-bakery' ); ?></h3>
		    	<p><?php esc_html_e('Enhance your website effortlessly with our WP Theme Bundle. Get access to 500+ premium WordPress themes and 5+ powerful plugins, all designed to meet diverse business needs. Enjoy seamless integration with any plugins, ultimate customization flexibility, and regular updates to keep your site current and secure. Plus, benefit from our dedicated customer support, ensuring a smooth and professional web experience.','vw-bakery'); ?></p>
		    	<div class="feature">
		    		<h4><?php esc_html_e( 'Features:', 'vw-bakery' ); ?></h4>
		    		<p><?php esc_html_e('500+ Premium Themes & 5+ Plugins.', 'vw-bakery'); ?></p>
		    		<p><?php esc_html_e('Seamless Integration.', 'vw-bakery'); ?></p>
		    		<p><?php esc_html_e('Customization Flexibility.', 'vw-bakery'); ?></p>
		    		<p><?php esc_html_e('Regular Updates.', 'vw-bakery'); ?></p>
		    		<p><?php esc_html_e('Dedicated Support.', 'vw-bakery'); ?></p>
		    	</div>
		    	<p><?php esc_html_e('Upgrade now and give your website the professional edge it deserves, all at an unbeatable price of $119!', 'vw-bakery'); ?></p>
		    	<div class="pro-links">
					<a href="<?php echo esc_url( VW_BAKERY_THEME_BUNDLE_BUY_NOW ); ?>" target="_blank"><?php esc_html_e('Buy Now', 'vw-bakery'); ?></a>
					<a href="<?php echo esc_url( VW_BAKERY_THEME_BUNDLE_DOC ); ?>" target="_blank"><?php esc_html_e('Documentation', 'vw-bakery'); ?></a>
				</div>
		   </div>
		   <div class="col-right-pro">
		    	<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getstarted/images/bundle.png" alt="" />
		   </div>		    
		</div>

	</div>
</div>

<?php } ?>