<div class="theme-offer">
	<?php 
        // Check if the demo import has been completed
        $vw_food_corner_demo_import_completed = get_option('vw_food_corner_demo_import_completed', false);

        // If the demo import is completed, display the "View Site" button
        if ($vw_food_corner_demo_import_completed) {
        echo '<p class="notice-text">' . esc_html__('Your demo import has been completed successfully.', 'vw-food-corner') . '</p>';
        echo '<span><a href="' . esc_url(home_url()) . '" class="button button-primary site-btn" target="_blank">' . esc_html__('View Site', 'vw-food-corner') . '</a></span>';
        }

		//POST and update the customizer and other related data 
        if (isset($_POST['submit'])) {

            // Check if ibtana visual editor is installed and activated
            if (!is_plugin_active('ibtana-visual-editor/plugin.php')) {
              // Install the plugin if it doesn't exist
              $vw_food_corner_plugin_slug = 'ibtana-visual-editor';
              $vw_food_corner_plugin_file = 'ibtana-visual-editor/plugin.php';

              // Check if plugin is installed
              $vw_food_corner_installed_plugins = get_plugins();
              if (!isset($vw_food_corner_installed_plugins[$vw_food_corner_plugin_file])) {
                  include_once(ABSPATH . 'wp-admin/includes/plugin-install.php');
                  include_once(ABSPATH . 'wp-admin/includes/file.php');
                  include_once(ABSPATH . 'wp-admin/includes/misc.php');
                  include_once(ABSPATH . 'wp-admin/includes/class-wp-upgrader.php');

                  // Install the plugin
                  $vw_food_corner_upgrader = new Plugin_Upgrader();
                  $vw_food_corner_upgrader->install('https://downloads.wordpress.org/plugin/ibtana-visual-editor.latest-stable.zip');
              }
              // Activate the plugin
              activate_plugin($vw_food_corner_plugin_file);
            }

            // ------- Create Nav Menu --------
            $vw_food_corner_menuname = 'Main Menus';
            $vw_food_corner_bpmenulocation = 'primary';
            $vw_food_corner_menu_exists = wp_get_nav_menu_object($vw_food_corner_menuname);

            if (!$vw_food_corner_menu_exists) {
                $vw_food_corner_menu_id = wp_create_nav_menu($vw_food_corner_menuname);

                // Create Home Page
                $vw_food_corner_home_title = 'Home';
                $vw_food_corner_home = array(
                    'post_type' => 'page',
                    'post_title' => $vw_food_corner_home_title,
                    'post_content' => '',
                    'post_status' => 'publish',
                    'post_author' => 1,
                    'post_slug' => 'home'
                );
                $vw_food_corner_home_id = wp_insert_post($vw_food_corner_home);
                // Assign Home Page Template
                add_post_meta($vw_food_corner_home_id, '_wp_page_template', 'page-template/custom-home-page.php');
                // Update options to set Home Page as the front page
                update_option('page_on_front', $vw_food_corner_home_id);
                update_option('show_on_front', 'page');
                // Add Home Page to Menu
                wp_update_nav_menu_item($vw_food_corner_menu_id, 0, array(
                    'menu-item-title' => __('Home', 'vw-food-corner'),
                    'menu-item-classes' => 'home',
                    'menu-item-url' => home_url('/'),
                    'menu-item-status' => 'publish',
                    'menu-item-object-id' => $vw_food_corner_home_id,
                    'menu-item-object' => 'page',
                    'menu-item-type' => 'post_type'
                ));

                // Create Pages Page with Dummy Content
                $vw_food_corner_pages_title = 'Pages';
                $vw_food_corner_pages_content = '
                <p>Explore all the pages we have on our website. Find information about our services, company, and more.</p>

                 Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960 with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.<br> 

                  All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.';
                $vw_food_corner_pages = array(
                    'post_type' => 'page',
                    'post_title' => $vw_food_corner_pages_title,
                    'post_content' => $vw_food_corner_pages_content,
                    'post_status' => 'publish',
                    'post_author' => 1,
                    'post_slug' => 'pages'
                );
                $vw_food_corner_pages_id = wp_insert_post($vw_food_corner_pages);
                // Add Pages Page to Menu
                wp_update_nav_menu_item($vw_food_corner_menu_id, 0, array(
                    'menu-item-title' => __('Pages', 'vw-food-corner'),
                    'menu-item-classes' => 'pages',
                    'menu-item-url' => home_url('/pages/'),
                    'menu-item-status' => 'publish',
                    'menu-item-object-id' => $vw_food_corner_pages_id,
                    'menu-item-object' => 'page',
                    'menu-item-type' => 'post_type'
                ));

                // Create About Us Page with Dummy Content
                $vw_food_corner_about_title = 'About Us';
                $vw_food_corner_about_content = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam...<br>

                         Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960 with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.<br> 

                            There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which dont look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isnt anything embarrassing hidden in the middle of text.<br> 

                            All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.';
                $vw_food_corner_about = array(
                    'post_type' => 'page',
                    'post_title' => $vw_food_corner_about_title,
                    'post_content' => $vw_food_corner_about_content,
                    'post_status' => 'publish',
                    'post_author' => 1,
                    'post_slug' => 'about-us'
                );
                $vw_food_corner_about_id = wp_insert_post($vw_food_corner_about);
                // Add About Us Page to Menu
                wp_update_nav_menu_item($vw_food_corner_menu_id, 0, array(
                    'menu-item-title' => __('About Us', 'vw-food-corner'),
                    'menu-item-classes' => 'about-us',
                    'menu-item-url' => home_url('/about-us/'),
                    'menu-item-status' => 'publish',
                    'menu-item-object-id' => $vw_food_corner_about_id,
                    'menu-item-object' => 'page',
                    'menu-item-type' => 'post_type'
                ));

                // Set the menu location if it's not already set
                if (!has_nav_menu($vw_food_corner_bpmenulocation)) {
                    $locations = get_theme_mod('nav_menu_locations'); // Use 'nav_menu_locations' to get locations array
                    if (empty($locations)) {
                        $locations = array();
                    }
                    $locations[$vw_food_corner_bpmenulocation] = $vw_food_corner_menu_id;
                    set_theme_mod('nav_menu_locations', $locations);
                }               
        }

         
            // Set the demo import completion flag
    		update_option('vw_food_corner_demo_import_completed', true);
    		// Display success message and "View Site" button
    		echo '<p class="notice-text">' . esc_html__('Your demo import has been completed successfully.', 'vw-food-corner') . '</p>';
    		echo '<span><a href="' . esc_url(home_url()) . '" class="button button-primary site-btn" target="_blank">' . esc_html__('View Site', 'vw-food-corner') . '</a></span>';
            //end 


            // Top Bar //
            set_theme_mod( 'vw_restaurant_lite_cont_phone_icon', 'fa fa-phone' );  
            set_theme_mod( 'vw_restaurant_lite_contact', '+00 123 456 7890' );
            set_theme_mod( 'vw_restaurant_lite_cont_email_icon', 'fa fa-envelope' );  
            set_theme_mod( 'vw_restaurant_lite_email', 'support@example.com' ); 


            // slider section start //  
            set_theme_mod( 'vw_food_corner_designation_small_text_section', 'WELCOME TO' );
            set_theme_mod( 'vw_restaurant_lite_slider_button_text', 'READ MORE' );    
            set_theme_mod( 'vw_restaurant_lite_slider_button_link', '#' );

            for($vw_restaurant_lite_i=1;$vw_restaurant_lite_i<=3;$vw_restaurant_lite_i++){
               $vw_restaurant_lite_slider_title = 'Lorem Ipsum is simply dummy text of the printing';
               $vw_restaurant_lite_slider_content = 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500, when an unknown printer took a galley of type and scrambled it to make a type specimen book.';
                  // Create post object
               $my_post = array(
               'post_title'    => wp_strip_all_tags( $vw_restaurant_lite_slider_title ),
               'post_content'  => $vw_restaurant_lite_slider_content,
               'post_status'   => 'publish',
               'post_type'     => 'page',
               );

               // Insert the post into the database
               $vw_restaurant_lite_post_id = wp_insert_post( $my_post );

               if ($vw_restaurant_lite_post_id) {
                 // Set the theme mod for the slider page
                 set_theme_mod('vw_restaurant_lite_slider_page' . $vw_restaurant_lite_i, $vw_restaurant_lite_post_id);

                  $vw_restaurant_lite_image_url = get_theme_file_uri().'/images/slider'.$vw_restaurant_lite_i.'.png';

                $vw_restaurant_lite_image_id = media_sideload_image($vw_restaurant_lite_image_url, $vw_restaurant_lite_post_id, null, 'id');

                    if (!is_wp_error($vw_restaurant_lite_image_id)) {
                        // Set the downloaded image as the post's featured image
                        set_post_thumbnail($vw_restaurant_lite_post_id, $vw_restaurant_lite_image_id);
                    }
                }
            } 
            

            // We Believe Section //
            set_theme_mod( 'vw_restaurant_lite_about_button_text', 'ABOUT US' );

            // Define post title and content
             $vw_restaurant_lite_post_title = 'Lorem Ipsum Dolor';
             $vw_restaurant_lite_post_content = 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960 with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.';
 
             // Create post object
             $vw_restaurant_lite_my_post = array(
                 'post_title'    => wp_strip_all_tags($vw_restaurant_lite_post_title),
                 'post_content'  => $vw_restaurant_lite_post_content,
                 'post_status'   => 'publish',
                 'post_type'     => 'post',
             );
 
             // Insert the post into the database
             $vw_restaurant_lite_post_id = wp_insert_post($vw_restaurant_lite_my_post);
 
             // Check if the post was successfully created
             if (!is_wp_error($vw_restaurant_lite_post_id)) {
                // Set the theme mod for the post ID
                set_theme_mod('vw_restaurant_lite_belive_post_setting', $vw_restaurant_lite_post_id);

                // Fetch the image URL
                 $vw_restaurant_lite_image_url = get_template_directory_uri() . '/images/about.png';
 
                 // Media sideload the image
                 $vw_restaurant_lite_image_id = media_sideload_image($vw_restaurant_lite_image_url, $vw_restaurant_lite_post_id, null, 'id');
 
                 // Check if the image was successfully uploaded
                 if (!is_wp_error($vw_restaurant_lite_image_id)) {
                     // Set the downloaded image as the post's featured image
                     set_post_thumbnail($vw_restaurant_lite_post_id, $vw_restaurant_lite_image_id);
                 } else {
                     // Handle the error if the image upload failed
                     error_log('Image upload failed: ' . $vw_restaurant_lite_image_id->get_error_message());
                 }
                
             } else {
                 // Handle the error if the post creation failed
                 error_log('Post creation failed: ' . $vw_restaurant_lite_post_id->get_error_message());             
            }

  
            // Look Our Services
            set_theme_mod( 'vw_food_corner_service_title', 'Look Our' );
            set_theme_mod( 'vw_food_corner_service_text_line', 'SERVICES' );


            $vw_food_corner_banner_title_array = array("ONLINE BOOKING","FREE PARKING","FREE WIFI","CONFERENCE HALL" );

            for ($vw_food_corner_i = 0; $vw_food_corner_i <= 3; $vw_food_corner_i++) {

                
                $vw_food_corner_banner_title = $vw_food_corner_banner_title_array[$vw_food_corner_i];

                $vw_food_corner_banner_content = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. ';

                // Create post object
                $my_post = array(
                'post_title'    => wp_strip_all_tags($vw_food_corner_banner_title),
                'post_content'  => $vw_food_corner_banner_content,
                'post_status'   => 'publish',
                'post_type'     => 'page',
                );

                // Insert the post into the database
                $vw_food_corner_post_id = wp_insert_post( $my_post );

                if ($vw_food_corner_post_id) {
                    // Set the theme mod for the slider page
                set_theme_mod('vw_food_corner_service_page' . $vw_food_corner_i, $vw_food_corner_post_id);

                $vw_food_corner_image_url = get_theme_file_uri().'/images/service'.$vw_food_corner_i.'.png';


                $vw_food_corner_image_id = media_sideload_image($vw_food_corner_image_url, $vw_food_corner_post_id, null, 'id');

                    if (!is_wp_error($vw_food_corner_image_id)) {
                        // Set the downloaded image as the post's featured image
                        set_post_thumbnail($vw_food_corner_post_id, $vw_food_corner_image_id);
                    }
                }


            }    

            //Copyright Text
            set_theme_mod( 'vw_food_corner_footer_text', 'By VWThemes' );  
     
        }
    ?>


    <p><?php esc_html_e('Please back up your website if it’s already live with data. This importer will overwrite your existing settings with the new customizer values for VW Food Corner', 'vw-food-corner'); ?></p>
    <form action="<?php echo esc_url(home_url()); ?>/wp-admin/themes.php?page=vw_food_corner_guide" method="POST" onsubmit="return validate(this);">
        <?php if (!get_option('vw_food_corner_demo_import_completed')) : ?>
            <input class="run-import" type="submit" name="submit" value="<?php esc_attr_e('Run Importer', 'vw-food-corner'); ?>" class="button button-primary button-large">
        <?php endif; ?>
        <div id="spinner" style="display:none;">         
            <img src="<?php echo esc_url(get_theme_file_uri()); ?>/images/spinner.png" alt="" />
        </div>
    </form>
    <script type="text/javascript">
        function validate(form) {
            if (confirm("Do you really want to import the theme demo content?")) {
                // Show the spinner
                document.getElementById('spinner').style.display = 'block';
                // Allow the form to be submitted
                return true;
            } 
            else {
                return false;
            }
        }
    </script>
</div>

