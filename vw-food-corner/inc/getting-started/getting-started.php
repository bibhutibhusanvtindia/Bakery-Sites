<?php
//about theme info
add_action( 'admin_menu', 'vw_food_corner_gettingstarted' );
function vw_food_corner_gettingstarted() {    	
	add_theme_page( esc_html__('About VW Food Corner', 'vw-food-corner'), esc_html__('Theme Demo Import', 'vw-food-corner'), 'edit_theme_options', 'vw_food_corner_guide', 'vw_food_corner_mostrar_guide');   
}

// Add a Custom CSS file to WP Admin Area
function vw_food_corner_admin_theme_style() {
   wp_enqueue_style('vw-food-corner-custom-admin-style', esc_url(get_theme_file_uri()) . '/inc/getting-started/getting-started.css');
   wp_enqueue_script('vw-food-corner-tabs', esc_url(get_theme_file_uri()) . '/inc/getting-started/js/tab.js');
}
add_action('admin_enqueue_scripts', 'vw_food_corner_admin_theme_style');

//guidline for about theme
function vw_food_corner_mostrar_guide() { 
	//custom function about theme customizer
	$return = add_query_arg( array()) ;
	$theme = wp_get_theme( 'vw-food-corner' );
?>

<div class="wrapper-info">
    <div class="col-left  sshot-section">
    	<h2><?php esc_html_e( 'Welcome to VW Food Corner Theme', 'vw-food-corner' ); ?> <span class="version">Version: <?php echo esc_html($theme['Version']);?></span></h2>
    	<p><?php esc_html_e('All our WordPress themes are modern, minimalist, 100% responsive, seo-friendly,feature-rich, and multipurpose that best suit designers, bloggers and other professionals who are working in the creative fields.','vw-food-corner'); ?></p>
    </div>
    <div class="col-right coupen-section">
    	<div class="logo-section">
			<img src="<?php echo esc_url(get_theme_file_uri()); ?>/screenshot.png" alt="" />
		</div>
		<div class="logo-right">			
			<div class="update-now">
				<div class="theme-info">
					<div class="theme-info-left">
						<h2><?php esc_html_e('TRY PREMIUM','vw-restaurant-lite'); ?></h2>
						<h4><?php esc_html_e('VW FOOD CORNER THEME','vw-restaurant-lite'); ?></h4>
					</div>	
					<div class="theme-info-right"></div>
				</div>	
				<div class="dicount-row">
					<div class="disc-sec">	
						<h5 class="disc-text"><?php esc_html_e('GET THE FLAT DISCOUNT OF','vw-restaurant-lite'); ?></h5>
						<h1 class="disc-per"><?php esc_html_e('20%','vw-restaurant-lite'); ?></h1>	
					</div>
					<div class="coupen-info">
						<h5 class="coupen-code"><?php esc_html_e('"VWPRO20"','vw-restaurant-lite'); ?></h5>
						<h5 class="coupen-text"><?php esc_html_e('USE COUPON CODE','vw-restaurant-lite'); ?></h5>
						<div class="info-link">						
							<a href="<?php echo esc_url( VW_RESTAURANT_LITE_BUY_NOW ); ?>" target="_blank"> <?php esc_html_e( 'UPGRADE TO PRO', 'vw-restaurant-lite' ); ?></a>
						</div>	
					</div>	
				</div>				
			</div>
		</div>
		
    </div>


    <div class="tab-sec">
		<div class="tab">
			<button class="tablinks" onclick="vw_food_corner_open_tab(event, 'theme_offer')"><?php esc_html_e( 'Demo Importer', 'vw-food-corner' ); ?></button>
		  	<button class="tablinks" onclick="vw_food_corner_open_tab(event, 'lite_theme')"><?php esc_html_e( 'Setup With Customizer', 'vw-food-corner' ); ?></button>
		  	
		  	<button class="tablinks" onclick="vw_food_corner_open_tab(event, 'theme_pro')"><?php esc_html_e( 'Get Premium', 'vw-food-corner' ); ?></button>
		  	<button class="tablinks" onclick="vw_food_corner_open_tab(event, 'free_pro')"><?php esc_html_e( 'Free Vs Premium', 'vw-food-corner' ); ?></button>
		  	<button class="tablinks" onclick="vw_food_corner_open_tab(event, 'get_bundle')"><?php esc_html_e( 'Get 350+ Themes Bundle at $99', 'vw-food-corner' ); ?></button>
		</div>
		
		<?php 
			$vw_food_corner_plugin_custom_css = '';
			if(class_exists('Ibtana_Visual_Editor_Menu_Class')){
				$vw_food_corner_plugin_custom_css ='display: block';
			}
		?>

		<div id="theme_offer" class="tabcontent open">
			<div class="demo-content">
				<h3><?php esc_html_e( 'Click the below run importer button to import demo content', 'vw-food-corner' ); ?></h3>
				<?php 
				/* Get Started. */ 
				require get_theme_file_path( '/inc/getting-started/demo-content.php' );
			 	?>
			</div> 	
		</div>

		<div id="lite_theme" class="tabcontent">
			<?php if(!class_exists('Ibtana_Visual_Editor_Menu_Class')){ 
				$plugin_ins = VW_Food_Corner_Plugin_Activation_Settings::get_instance();
				$vw_food_corner_actions = $plugin_ins->recommended_actions;
				?>
				<div class="vw-food-corner-recommended-plugins">
				    <div class="vw-food-corner-action-list">
				        <?php if ($vw_food_corner_actions): foreach ($vw_food_corner_actions as $key => $vw_food_corner_actionValue): ?>
				                <div class="vw-food-corner-action" id="<?php echo esc_attr($vw_food_corner_actionValue['id']);?>">
			                        <div class="action-inner">
			                            <h3 class="action-title"><?php echo esc_html($vw_food_corner_actionValue['title']); ?></h3>
			                            <div class="action-desc"><?php echo esc_html($vw_food_corner_actionValue['desc']); ?></div>
			                            <?php echo wp_kses_post($vw_food_corner_actionValue['link']); ?>
			                            <a class="ibtana-skip-btn" get-start-tab-id="lite-theme-tab" href="javascript:void(0);"><?php esc_html_e('Skip','vw-food-corner'); ?></a>
			                        </div>
				                </div>
				            <?php endforeach;
				        endif; ?>
				    </div>
				</div>
			<?php } ?>
			<div class="lite-theme-tab" style="<?php echo esc_attr($vw_food_corner_plugin_custom_css); ?>">
				<h3><?php esc_html_e( 'Lite Theme Information', 'vw-food-corner' ); ?></h3>
				<hr class="h3hr">
			  	<p><?php esc_html_e('VW Food Corner is a child theme of VW Restaurant, It is stylish and eye-catching WordPress theme for all the food lovers out there. You can find its application if you run a restaurant, cafe, coffee house, hotel, motel, bakery shop, eatery, food joint, lodge, eating house, hashery, hotdog stand, eating place, fast-food place, greasy spoon, burger stand, barbeque, grill house, cafeteria, cloud kitchen, fine dining, food truck, fast casual, Restaurant, Catering, Bistro, Food Truck, Cafe, diner, dining room, luncheonette, soda fountain, inn, outlet, canteen, chophouse, pizza parlour or a fast food centre or serves multiple cuisine like Italian, Chinese, Thai food, healthy food, drive-in, hideaway, lunchroom, pizzeria, cafe, doughtnut shop booking a table, cake and Asian cuisine restaurant etc. You can use it for a hospitality business or if you are a food blogger or food critic. Explore the WP Theme Bundle from VW Themes, featuring 420+ premium WordPress themes built for different businesses and niche markets. This theme has powerful customizer to change its colour, background, images etc. The elegant design of the theme will surely attract people to explore the site. You can personalize this multipurpose theme to use as a blog, professional website or portfolio of food photography. It is fully responsive, cross-browser compatible and translation ready theme which has various slides for different look on every page. It is SEO-friendly and enhances page loading speed. The theme comes with banner, call to action (CTA) button and social media icons integration. The clean and secure code makes it more reliable. The VW Food theme implements short codes which makes it lighter to load and highly customizable.','vw-food-corner'); ?></p>
			  	<div class="col-left-inner">
			  		<h4><?php esc_html_e( 'Theme Documentation', 'vw-food-corner' ); ?></h4>
					<p><?php esc_html_e( 'If you need any assistance regarding setting up and configuring the Theme, our documentation is there.', 'vw-food-corner' ); ?></p>
					<div class="info-link">
						<a href="<?php echo esc_url( VW_RESTAURANT_LITE_FREE_THEME_DOC ); ?>" target="_blank"> <?php esc_html_e( 'Documentation', 'vw-food-corner' ); ?></a>
					</div>
					<hr>
					<h4><?php esc_html_e('Theme Customizer', 'vw-food-corner'); ?></h4>
					<p> <?php esc_html_e('To begin customizing your website, start by clicking "Customize".', 'vw-food-corner'); ?></p>
					<div class="info-link">
						<a target="_blank" href="<?php echo esc_url( admin_url('customize.php') ); ?>"><?php esc_html_e('Customizing', 'vw-food-corner'); ?></a>
					</div>
					<hr>				
					<h4><?php esc_html_e('Having Trouble, Need Support?', 'vw-food-corner'); ?></h4>
					<p> <?php esc_html_e('Our dedicated team is well prepared to help you out in case of queries and doubts regarding our theme.', 'vw-food-corner'); ?></p>
					<div class="info-link">
						<a href="<?php echo esc_url( VW_RESTAURANT_LITE_SUPPORT ); ?>" target="_blank"><?php esc_html_e('Support Forum', 'vw-food-corner'); ?></a>
					</div>
					<hr>
					<h4><?php esc_html_e('Reviews & Testimonials', 'vw-food-corner'); ?></h4>
					<p> <?php esc_html_e('All the features and aspects of this WordPress Theme are phenomenal. I\'d recommend this theme to all.', 'vw-food-corner'); ?>  </p>
					<div class="info-link">
						<a href="<?php echo esc_url( VW_RESTAURANT_LITE_REVIEW ); ?>" target="_blank"><?php esc_html_e('Reviews', 'vw-food-corner'); ?></a>
					</div>
			  		<div class="link-customizer">
						<h3><?php esc_html_e( 'Link to customizer', 'vw-food-corner' ); ?></h3>
						<hr class="h3hr">
						<div class="first-row">
							<div class="row-box">
								<div class="row-box1">
									<span class="dashicons dashicons-buddicons-buddypress-logo"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[control]=custom_logo') ); ?>" target="_blank"><?php esc_html_e('Upload your logo','vw-food-corner'); ?></a>
								</div>
								<div class="row-box2">
									<span class="dashicons dashicons-slides"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=vw_restaurant_lite_slidersettings') ); ?>" target="_blank"><?php esc_html_e('Slider Settings','vw-food-corner'); ?></a>
								</div>
							</div>
							<div class="row-box">
								<div class="row-box1">
									<span class="dashicons dashicons-welcome-write-blog"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=vw_restaurant_lite_topbar_icon') ); ?>" target="_blank"><?php esc_html_e('Topbar Settings','vw-food-corner'); ?></a>
								</div>
								<div class="row-box2">
									<span class="dashicons dashicons-editor-table"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=vw_restaurant_lite_belive') ); ?>" target="_blank"><?php esc_html_e('We Believe','vw-food-corner'); ?></a>
								</div>
							</div>
							<div class="row-box">
								<div class="row-box1">
									<span class="dashicons dashicons-menu"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[panel]=nav_menus') ); ?>" target="_blank"><?php esc_html_e('Menus','vw-food-corner'); ?></a>
								</div>
								<div class="row-box2">
									<span class="dashicons dashicons-screenoptions"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[panel]=widgets') ); ?>" target="_blank"><?php esc_html_e('Footer Widget','vw-food-corner'); ?></a>
								</div>
							</div>

							<div class="row-box">
								<div class="row-box1">
									<span class="dashicons dashicons-format-gallery"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=vw_restaurant_lite_post_settings') ); ?>" target="_blank"><?php esc_html_e('Post settings','vw-food-corner'); ?></a>
								</div>
								 <div class="row-box2">
									<span class="dashicons dashicons-align-center"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=vw_restaurant_lite_woocommerce_section') ); ?>" target="_blank"><?php esc_html_e('WooCommerce Layout','vw-food-corner'); ?></a>
								</div> 
							</div>
							
							<div class="row-box">
								<div class="row-box1">
									<span class="dashicons dashicons-admin-generic"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=vw_restaurant_lite_left_right') ); ?>" target="_blank"><?php esc_html_e('General Settings','vw-food-corner'); ?></a>
								</div>
								<div class="row-box2">
									<span class="dashicons dashicons-text-page"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=vw_restaurant_lite_footer_section') ); ?>" target="_blank"><?php esc_html_e('Footer Text','vw-food-corner'); ?></a>
								</div>
							</div>
						</div>
					</div>
			  	</div>
				<div class="col-right-inner">
					<h3 class="page-template"><?php esc_html_e('How to set up Home Page Template','vw-food-corner'); ?></h3>
				  	<hr class="h3hr">
					<p><?php esc_html_e('Follow these instructions to setup Home page.','vw-food-corner'); ?></p>
	                <ul>
	                  	<p><span class="strong"><?php esc_html_e('1. Create a new page :','vw-food-corner'); ?></span><?php esc_html_e(' Go to ','vw-food-corner'); ?>
					  	<b><?php esc_html_e(' Dashboard >> Pages >> Add New Page','vw-food-corner'); ?></b></p>

	                  	<p><?php esc_html_e('Name it as "Home" then select the template "Custom Home Page".','vw-food-corner'); ?></p>
	                  	<img src="<?php echo esc_url(get_theme_file_uri()); ?>/inc/getting-started/images/home-page-template.png" alt="" />
	                  	<p><span class="strong"><?php esc_html_e('2. Set the front page:','vw-food-corner'); ?></span><?php esc_html_e(' Go to ','vw-food-corner'); ?>
					  	<b><?php esc_html_e(' Settings >> Reading ','vw-food-corner'); ?></b></p>
					  	<p><?php esc_html_e('Select the option of Static Page, now select the page you created to be the homepage, while another page to be your default page.','vw-food-corner'); ?></p>
	                  	<img src="<?php echo esc_url(get_theme_file_uri()); ?>/inc/getting-started/images/set-front-page.png" alt="" />
	                  	<p><?php esc_html_e(' Once you are done with this, then follow the','vw-food-corner'); ?> <a class="doc-links" href="https://preview.vwthemesdemo.com/docs/free-vw-food-corner/" target="_blank"><?php esc_html_e('Documentation','vw-food-corner'); ?></a></p>
	                </ul>
			  	</div>
			</div>
		</div>

	
		<div id="theme_pro" class="tabcontent">
		  	<h3><?php esc_html_e( 'Premium Theme Information', 'vw-food-corner' ); ?></h3>
			<hr class="h3hr">
		    <div class="col-left-pro">
		    	<p><?php esc_html_e('Our premium restaurant WordPress theme has a majestic design, perfect for restaurant and fine dining based industries. This premium Restaurant WordPress theme is clean & systematic. It caters to the needs of restaurant owners belonging to this sector. No business can survive without satisfying their customers and negligence in such a critical area can lead to failure. So it becomes important to not only have a perfect looking restaurant but also have a well-built website and a theme that can portray all that you have to offer in a beautiful manner Cleanliness, majestic design & assured superior customer experience is all Jam-packed in this theme. Make that first impression on your customers an impactful one, so-as-to assure the customers return to your website and restaurant.','vw-food-corner'); ?></p>
		    </div>
		    <div class="col-right-pro">
		    	<div class="pro-links">
			    	<a href="<?php echo esc_url( VW_RESTAURANT_LITE_LIVE_DEMO ); ?>" target="_blank"><?php esc_html_e('Live Demo', 'vw-food-corner'); ?></a>
					<a href="<?php echo esc_url( VW_RESTAURANT_LITE_BUY_NOW ); ?>" target="_blank"><?php esc_html_e('Buy Pro', 'vw-food-corner'); ?></a>
					<a href="<?php echo esc_url( VW_RESTAURANT_LITE_PRO_DOC ); ?>" target="_blank"><?php esc_html_e('Pro Documentation', 'vw-food-corner'); ?></a>
					<a href="<?php echo esc_url( VW_RESTAURANT_LITE_THEME_BUNDLE_BUY_NOW ); ?>" target="_blank"><?php esc_html_e('Get 350+ Themes Bundle at $99', 'vw-food-corner'); ?></a>
				</div>
		    	<img src="<?php echo esc_url(get_theme_file_uri()); ?>/inc/getting-started/images/responsive.png" alt="" />
		    </div>
		</div>

		<div id="free_pro" class="tabcontent">
		  	<div class="featurebox">
			    <h3><?php esc_html_e( 'Theme Features', 'vw-food-corner' ); ?></h3>
				<hr class="h3hr">
				<div class="table-image">
					<table class="tablebox">
						<thead>
							<tr>
								<th></th>
								<th><?php esc_html_e('Free Themes', 'vw-food-corner'); ?></th>
								<th><?php esc_html_e('Premium Themes', 'vw-food-corner'); ?></th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td><?php esc_html_e('Theme Customization', 'vw-food-corner'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Responsive Design', 'vw-food-corner'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Logo Upload', 'vw-food-corner'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Social Media Links', 'vw-food-corner'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Slider Settings', 'vw-food-corner'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Number of Slides', 'vw-food-corner'); ?></td>
								<td class="table-img"><?php esc_html_e('4', 'vw-food-corner'); ?></td>
								<td class="table-img"><?php esc_html_e('Unlimited', 'vw-food-corner'); ?></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Template Pages', 'vw-food-corner'); ?></td>
								<td class="table-img"><?php esc_html_e('3', 'vw-food-corner'); ?></td>
								<td class="table-img"><?php esc_html_e('6', 'vw-food-corner'); ?></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Home Page Template', 'vw-food-corner'); ?></td>
								<td class="table-img"><?php esc_html_e('1', 'vw-food-corner'); ?></td>
								<td class="table-img"><?php esc_html_e('1', 'vw-food-corner'); ?></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Theme sections', 'vw-food-corner'); ?></td>
								<td class="table-img"><?php esc_html_e('2', 'vw-food-corner'); ?></td>
								<td class="table-img"><?php esc_html_e('14', 'vw-food-corner'); ?></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Contact us Page Template', 'vw-food-corner'); ?></td>
								<td class="table-img">0</td>
								<td class="table-img"><?php esc_html_e('1', 'vw-food-corner'); ?></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Blog Templates & Layout', 'vw-food-corner'); ?></td>
								<td class="table-img">0</td>
								<td class="table-img"><?php esc_html_e('3(Full width/Left/Right Sidebar)', 'vw-food-corner'); ?></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Page Templates & Layout', 'vw-food-corner'); ?></td>
								<td class="table-img">0</td>
								<td class="table-img"><?php esc_html_e('2(Left/Right Sidebar)', 'vw-food-corner'); ?></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Color Pallete For Particular Sections', 'vw-food-corner'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Global Color Option', 'vw-food-corner'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Section Reordering', 'vw-food-corner'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Demo Importer', 'vw-food-corner'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Allow To Set Site Title, Tagline, Logo', 'vw-food-corner'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Enable Disable Options On All Sections, Logo', 'vw-food-corner'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Full Documentation', 'vw-food-corner'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Latest WordPress Compatibility', 'vw-food-corner'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Woo-Commerce Compatibility', 'vw-food-corner'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Support 3rd Party Plugins', 'vw-food-corner'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Secure and Optimized Code', 'vw-food-corner'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Exclusive Functionalities', 'vw-food-corner'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Section Enable / Disable', 'vw-food-corner'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Section Google Font Choices', 'vw-food-corner'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Gallery', 'vw-food-corner'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Simple & Mega Menu Option', 'vw-food-corner'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Support to add custom CSS / JS ', 'vw-food-corner'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Shortcodes', 'vw-food-corner'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Custom Background, Colors, Header, Logo & Menu', 'vw-food-corner'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Premium Membership', 'vw-food-corner'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Budget Friendly Value', 'vw-food-corner'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Priority Error Fixing', 'vw-food-corner'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Custom Feature Addition', 'vw-food-corner'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('All Access Theme Pass', 'vw-food-corner'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Seamless Customer Support', 'vw-food-corner'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td></td>
								<td class="table-img"></td>
								<td class="update-link"><a href="<?php echo esc_url( VW_RESTAURANT_LITE_BUY_NOW ); ?>" target="_blank"><?php esc_html_e('Upgrade to Pro', 'vw-food-corner'); ?></a></td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>

		<div id="get_bundle" class="tabcontent">		  	
		   <div class="col-left-pro">
		   	<h3><?php esc_html_e( 'WP Theme Bundle', 'vw-food-corner' ); ?></h3>
		    	<p><?php esc_html_e('Enhance your website effortlessly with our WP Theme Bundle. Get access to 350+ premium WordPress themes and 5+ powerful plugins, all designed to meet diverse business needs. Enjoy seamless integration with any plugins, ultimate customization flexibility, and regular updates to keep your site current and secure. Plus, benefit from our dedicated customer support, ensuring a smooth and professional web experience.','vw-food-corner'); ?></p>
		    	<div class="feature">
		    		<h4><?php esc_html_e( 'Features:', 'vw-food-corner' ); ?></h4>
		    		<p><?php esc_html_e('350+ Premium Themes & 5+ Plugins.', 'vw-food-corner'); ?></p>
		    		<p><?php esc_html_e('Seamless Integration.', 'vw-food-corner'); ?></p>
		    		<p><?php esc_html_e('Customization Flexibility.', 'vw-food-corner'); ?></p>
		    		<p><?php esc_html_e('Regular Updates.', 'vw-food-corner'); ?></p>
		    		<p><?php esc_html_e('Dedicated Support.', 'vw-food-corner'); ?></p>
		    	</div>
		    	<p>Upgrade now and give your website the professional edge it deserves, all at an unbeatable price of $99!</p>
		    	<div class="pro-links">
					<a href="<?php echo esc_url( VW_RESTAURANT_LITE_THEME_BUNDLE_BUY_NOW ); ?>" target="_blank"><?php esc_html_e('Buy Now', 'vw-food-corner'); ?></a>
					<a href="<?php echo esc_url( VW_RESTAURANT_LITE_THEME_BUNDLE_DOC ); ?>" target="_blank"><?php esc_html_e('Documentation', 'vw-food-corner'); ?></a>
				</div>
		   </div>
		   <div class="col-right-pro">
		    	<img src="<?php echo esc_url(get_theme_file_uri()); ?>/inc/getting-started/images/bundle.png" alt="" />
		   </div>		    
		</div>

	</div>
</div>
<?php } ?>