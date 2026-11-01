<div class="theme-offer">
	<?php
        // Check if the demo import has been completed
        $vw_bakery_demo_import_completed = get_option('vw_bakery_demo_import_completed', false);

        // If the demo import is completed, display the "View Site" button
        if ($vw_bakery_demo_import_completed) {
        echo '<p class="notice-text">' . esc_html__('Your demo import has been completed successfully.', 'vw-bakery') . '</p>';
        echo '<span><a href="' . esc_url(home_url()) . '" class="button button-primary site-btn" target="_blank">' . esc_html__('View Site', 'vw-bakery') . '</a></span>';
        }

		//POST and update the customizer and other related data of POLITICAL CAMPAIGN
        if (isset($_POST['submit'])) {
            // Check if ibtana visual editor is installed and activated
            if (!is_plugin_active('ibtana-visual-editor/plugin.php')) {
              // Install the plugin if it doesn't exist
              $vw_bakery_plugin_slug = 'ibtana-visual-editor';
              $vw_bakery_plugin_file = 'ibtana-visual-editor/plugin.php';

              // Check if plugin is installed
              $vw_bakery_installed_plugins = get_plugins();
              if (!isset($vw_bakery_installed_plugins[$vw_bakery_plugin_file])) {
                  include_once(ABSPATH . 'wp-admin/includes/plugin-install.php');
                  include_once(ABSPATH . 'wp-admin/includes/file.php');
                  include_once(ABSPATH . 'wp-admin/includes/misc.php');
                  include_once(ABSPATH . 'wp-admin/includes/class-wp-upgrader.php');

                  // Install the plugin
                  $vw_bakery_upgrader = new Plugin_Upgrader();
                  $vw_bakery_upgrader->install('https://downloads.wordpress.org/plugin/ibtana-visual-editor.latest-stable.zip');
              }
              // Activate the plugin
              activate_plugin($vw_bakery_plugin_file);
            }
            
            // Check if Contact Form 7 is installed and activated
            if (!is_plugin_active('woocommerce/woocommerce.php')) {
              // Install the plugin if it doesn't exist
              $plugin_slug = 'woocommerce';
              $plugin_file = 'woocommerce/woocommerce.php';

              // Check if plugin is installed
              $installed_plugins = get_plugins();
              if (!isset($installed_plugins[$plugin_file])) {
                  include_once(ABSPATH . 'wp-admin/includes/plugin-install.php');
                  include_once(ABSPATH . 'wp-admin/includes/file.php');
                  include_once(ABSPATH . 'wp-admin/includes/misc.php');
                  include_once(ABSPATH . 'wp-admin/includes/class-wp-upgrader.php');

                  // Install the plugin
                  $upgrader = new Plugin_Upgrader();
                  $upgrader->install('https://downloads.wordpress.org/plugin/woocommerce.latest-stable.zip');
              }
              // Activate the plugin
              activate_plugin($plugin_file);
            }

            // ------- Create Nav Menu --------
            // Define menu names and locations
                $vw_bakery_menuname_left = 'Primary Left Menu';
                $vw_bakery_bpmenulocation_left = 'primary-left';
                $vw_bakery_menuname_right = 'Primary Right Menu';
                $vw_bakery_bpmenulocation_right = 'primary-right';

                // Check if the left menu exists
                $vw_bakery_left_menu_exists = wp_get_nav_menu_object($vw_bakery_menuname_left);

                if (!$vw_bakery_left_menu_exists) {
                    $vw_bakery_left_menu_id = wp_create_nav_menu($vw_bakery_menuname_left);

                    // Create Home Page
                    $vw_bakery_home_title = 'Home';
                    $vw_bakery_home = array(
                        'post_type' => 'page',
                        'post_title' => $vw_bakery_home_title,
                        'post_content' => '',
                        'post_status' => 'publish',
                        'post_author' => 1,
                        'post_slug' => 'home'
                    );
                    $vw_bakery_home_id = wp_insert_post($vw_bakery_home);
                    add_post_meta($vw_bakery_home_id, '_wp_page_template', 'page-template/custom-home-page.php');
                    update_option('page_on_front', $vw_bakery_home_id);
                    update_option('show_on_front', 'page');

                    // Add Home Page to Left Menu
                    wp_update_nav_menu_item($vw_bakery_left_menu_id, 0, array(
                        'menu-item-title' => __('Home', 'vw-bakery'),
                        'menu-item-classes' => 'home',
                        'menu-item-url' => home_url('/'),
                        'menu-item-status' => 'publish',
                        'menu-item-object-id' => $vw_bakery_home_id,
                        'menu-item-object' => 'page',
                        'menu-item-type' => 'post_type'
                    ));

                    // Add 'Pages' to Left Menu
                    $vw_bakery_pages_title = 'Pages';
                    $vw_bakery_pages_content = '...'; // Your dummy content
                    $vw_bakery_pages = array(
                        'post_type' => 'page',
                        'post_title' => $vw_bakery_pages_title,
                        'post_content' => $vw_bakery_pages_content,
                        'post_status' => 'publish',
                        'post_author' => 1,
                        'post_slug' => 'pages'
                    );
                    $vw_bakery_pages_id = wp_insert_post($vw_bakery_pages);
                    wp_update_nav_menu_item($vw_bakery_left_menu_id, 0, array(
                        'menu-item-title' => __('Pages', 'vw-bakery'),
                        'menu-item-classes' => 'pages',
                        'menu-item-url' => home_url('/pages/'),
                        'menu-item-status' => 'publish',
                        'menu-item-object-id' => $vw_bakery_pages_id,
                        'menu-item-object' => 'page',
                        'menu-item-type' => 'post_type'
                    ));

                    // Add 'About Us' to Left Menu
                    $vw_bakery_about_title = 'About Us';
                    $vw_bakery_about_content = '...'; // Your dummy content
                    $vw_bakery_about = array(
                        'post_type' => 'page',
                        'post_title' => $vw_bakery_about_title,
                        'post_content' => $vw_bakery_about_content,
                        'post_status' => 'publish',
                        'post_author' => 1,
                        'post_slug' => 'about-us'
                    );
                    $vw_bakery_about_id = wp_insert_post($vw_bakery_about);
                    wp_update_nav_menu_item($vw_bakery_left_menu_id, 0, array(
                        'menu-item-title' => __('About Us', 'vw-bakery'),
                        'menu-item-classes' => 'about-us',
                        'menu-item-url' => home_url('/about-us/'),
                        'menu-item-status' => 'publish',
                        'menu-item-object-id' => $vw_bakery_about_id,
                        'menu-item-object' => 'page',
                        'menu-item-type' => 'post_type'
                    ));

                    // Assign Left Menu to its location
                    if (!has_nav_menu($vw_bakery_bpmenulocation_left)) {
                        $locations = get_theme_mod('nav_menu_locations');
                        if (empty($locations)) {
                            $locations = array();
                        }
                        $locations[$vw_bakery_bpmenulocation_left] = $vw_bakery_left_menu_id;
                        set_theme_mod('nav_menu_locations', $locations);
                    }
                }

                // Check if the right menu exists
                $vw_bakery_right_menu_exists = wp_get_nav_menu_object($vw_bakery_menuname_right);

                if (!$vw_bakery_right_menu_exists) {
                    $vw_bakery_right_menu_id = wp_create_nav_menu($vw_bakery_menuname_right);

                    // Add Home Page to Right Menu (can be the same page or different logic if needed)
                    wp_update_nav_menu_item($vw_bakery_right_menu_id, 0, array(
                        'menu-item-title' => __('Home', 'vw-bakery'),
                        'menu-item-classes' => 'home',
                        'menu-item-url' => home_url('/'),
                        'menu-item-status' => 'publish',
                        'menu-item-object-id' => $vw_bakery_home_id, // Reuse the same home ID
                        'menu-item-object' => 'page',
                        'menu-item-type' => 'post_type'
                    ));

                    // Add 'Pages' to Right Menu
                    wp_update_nav_menu_item($vw_bakery_right_menu_id, 0, array(
                        'menu-item-title' => __('Pages', 'vw-bakery'),
                        'menu-item-classes' => 'pages',
                        'menu-item-url' => home_url('/pages/'),
                        'menu-item-status' => 'publish',
                        'menu-item-object-id' => $vw_bakery_pages_id, // Reuse the same page ID
                        'menu-item-object' => 'page',
                        'menu-item-type' => 'post_type'
                    ));

                    // Add 'About Us' to Right Menu
                    wp_update_nav_menu_item($vw_bakery_right_menu_id, 0, array(
                        'menu-item-title' => __('About Us', 'vw-bakery'),
                        'menu-item-classes' => 'about-us',
                        'menu-item-url' => home_url('/about-us/'),
                        'menu-item-status' => 'publish',
                        'menu-item-object-id' => $vw_bakery_about_id, // Reuse the same about ID
                        'menu-item-object' => 'page',
                        'menu-item-type' => 'post_type'
                    ));

                    // Assign Right Menu to its location
                    if (!has_nav_menu($vw_bakery_bpmenulocation_right)) {
                        $locations = get_theme_mod('nav_menu_locations');
                        if (empty($locations)) {
                            $locations = array();
                        }
                        $locations[$vw_bakery_bpmenulocation_right] = $vw_bakery_right_menu_id;
                        set_theme_mod('nav_menu_locations', $locations);
                    }
                }
                        
        


            // Set the demo import completion flag
    		update_option('vw_bakery_demo_import_completed', true);
    		// Display success message and "View Site" button
    		echo '<p class="notice-text">' . esc_html__('Your demo import has been completed successfully.', 'vw-bakery') . '</p>';
    		echo '<span><a href="' . esc_url(home_url()) . '" class="button button-primary site-btn" target="_blank">' . esc_html__('View Site', 'vw-bakery') . '</a></span>';
            //end

            // Top Bar //
            set_theme_mod( 'vw_bakery_opening_time', 'Saturday: 8AM to 4PM Sunday: Closed' );
            set_theme_mod( 'vw_bakery_call_us', 'Call us for knew todays\'s menu' );

            set_theme_mod( 'vw_bakery_call_no', '+123 456 7890' );
            set_theme_mod( 'vw_bakery_location', 'Dummy Street, Australia' );
            set_theme_mod( 'vw_bakery_timing_icon', 'far fa-clock' );
            set_theme_mod( 'vw_bakery_phone_icon', 'fas fa-phone' );
            set_theme_mod( 'vw_bakery_opening_text', 'Opening Hours: Monday to Friday - 8 AM to 8 PM' );

            set_theme_mod( 'vw_bakery_email_icon', 'far fa-envelope' );
            set_theme_mod( 'vw_bakery_email_us', 'Or chat with us to knew todays\'s menu' );

            set_theme_mod( 'vw_bakery_email_address', 'bakery@gmail.com' );
            set_theme_mod( 'vw_bakery_contact_button_text', 'CONTACT US' );

            set_theme_mod( 'vw_bakery_contact_link', '#' );
            set_theme_mod( 'vw_bakery_cart_icon', 'fas fa-shopping-cart' );

            // slider section start //
           
            for($vw_bakery_i=1;$vw_bakery_i<=4;$vw_bakery_i++){
               $vw_bakery_slider_title = 'Welcome To The Bakery';
               $vw_bakery_slider_content = 'Lorem ipsum simply dolar sit emit Te obtinuit ut adepto satis somno. Aliisque institoribus iter deliciae vivet vita.';
                  // Create post object
               $my_post = array(
               'post_title'    => wp_strip_all_tags( $vw_bakery_slider_title ),
               'post_content'  => $vw_bakery_slider_content,
               'post_status'   => 'publish',
               'post_type'     => 'page',
               );

               // Insert the post into the database
               $vw_bakery_post_id = wp_insert_post( $my_post );

               if ($vw_bakery_post_id) {
                 // Set the theme mod for the slider page
                 set_theme_mod('vw_bakery_slider_page' . $vw_bakery_i, $vw_bakery_post_id);

                  $vw_bakery_image_url = get_template_directory_uri().'/assets/images/slider'.$vw_bakery_i.'.png';

                $vw_bakery_image_id = media_sideload_image($vw_bakery_image_url, $vw_bakery_post_id, null, 'id');

                    if (!is_wp_error($vw_bakery_image_id)) {
                        // Set the downloaded image as the post's featured image
                        set_post_thumbnail($vw_bakery_post_id, $vw_bakery_image_id);
                    }
                }
            }

            // products
            $vw_bakery_title_array = array(
                array("Product Name 1",
                      "Product Name 2", 
                      "Product Name 3",
                      "Product Name 4")
                );
            foreach ($vw_bakery_title_array as $vw_bakery_titles) {
                // Loop to create only 3 products
                for ($vw_bakery_i = 0; $vw_bakery_i < 4; $vw_bakery_i++) {
                    // Create product content
                    $vw_bakery_title = $vw_bakery_titles[$vw_bakery_i];
                    $vw_bakery_content = 'Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.';

                    // Create product post object
                    $vw_bakery_my_post = array(
                        'post_title'    => wp_strip_all_tags($vw_bakery_title),
                        'post_content'  => $vw_bakery_content,
                        'post_status'   => 'publish',
                        'post_type'     => 'product',
                    );
                    set_theme_mod('vw_bakery_bestseller_product_page', esc_url($vw_bakery_post_id));                                                                                                                                                                                                        
                    // Insert the product into the database
                    $vw_bakery_post_id = wp_insert_post($vw_bakery_my_post);

                    if (is_wp_error($vw_bakery_post_id)) {
                        error_log('Error creating product: ' . $vw_bakery_post_id->get_error_message());
                        continue; // Skip to the next product if creation fails
                    }

                    // Add product meta (price, etc.)
                    
                    update_post_meta($vw_bakery_post_id, '_sale_price', '04.69'); // Sale price
                    update_post_meta($vw_bakery_post_id, '_price', '04.69'); // Active price

                    // Handle the featured image using media_sideload_image
                    $vw_bakery_image_url = get_template_directory_uri() . '/assets/images/product' . ($vw_bakery_i + 1) . '.png';
                    $vw_bakery_image_id = media_sideload_image($vw_bakery_image_url, $vw_bakery_post_id, null, 'id');

                    if (is_wp_error($vw_bakery_image_id)) {
                        error_log('Error downloading image: ' . $vw_bakery_image_id->get_error_message());
                        continue; // Skip to the next product if image download fails
                    }

                    // Assign featured image to product
                    set_post_thumbnail($vw_bakery_post_id, $vw_bakery_image_id);
                }
            }

           // Check if the 'Products' page already exists
            $vw_bakery_page_query = new WP_Query(array(
                'post_type'      => 'page',
                'title'          => 'Products',
                'post_status'    => 'publish',
                'posts_per_page' => 1
            ));

            if (!$vw_bakery_page_query->have_posts()) {
                $vw_bakery_page_title = 'Our Popular Bakery Products';
                $productpage = '[products limit="4" columns="4"]';

                // Append the WooCommerce products shortcode to the content
                $vw_bakery_content = '';
                $vw_bakery_content .= do_shortcode($productpage);

                // Create the new page
                $vw_bakery_page = array(
                    'post_type'    => 'page',
                    'post_title'   => $vw_bakery_page_title,
                    'post_content' => $vw_bakery_content,
                    'post_status'  => 'publish',
                    'post_author'  => 1,
                    'post_slug'    => 'products'
                );

                // Insert the page and get its ID
                $vw_bakery_page_id = wp_insert_post($vw_bakery_page);

                // Store the page ID in theme mod for future reference
                if (!is_wp_error($vw_bakery_page_id)) {
                    set_theme_mod('vw_bakery_product_settings', $vw_bakery_page_id);
                }
            }

            echo "<script>window.location.href='" . admin_url('themes.php?page=vw_bakery_guide') . "';</script>";
            //Copyright Text
            set_theme_mod( 'vw_bakery_footer_text', 'By VWThemes' );

        }
    ?>

	<p><?php esc_html_e('Please back up your website if it’s already live with data. This importer will overwrite your existing settings with the new customizer values for VW Bakery', 'vw-bakery'); ?></p>
    <form action="<?php echo esc_url(home_url()); ?>/wp-admin/themes.php?page=vw_bakery_guide" method="POST" onsubmit="return validate(this);">
        <?php if (!get_option('vw_bakery_demo_import_completed')) : ?>
            <input class="run-import" type="submit" name="submit" value="<?php esc_attr_e('Run Importer', 'vw-bakery'); ?>" class="button button-primary button-large">
        <?php endif; ?>
        <div id="spinner" style="display:none;">         
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/spinner.png" alt="" />
        </div>
    </form>
    <script type="text/javascript">
        function validate(form){
            if (confirm("Do you really want to import the theme demo content?")) {
                // Show the spinner
                document.getElementById('spinner').style.display = 'block';
                // Allow the form to be submitted
                return true;
            } 
            else{
                return false;
            }
        }
    </script>
</div>
