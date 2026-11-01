<div class="theme-import">
	<?php 
        // Check if the demo import has been completed
        $cafe_coffee_shop_demo_import_completed = get_option('cafe_coffee_shop_demo_import_completed', false);

        // If the demo import is completed, display the "View Site" button
        if ($cafe_coffee_shop_demo_import_completed) {
        echo '<p class="notice-text">' . esc_html__('Your demo import has been completed successfully.', 'cafe-coffee-shop') . '</p>';
        echo '<span><a href="' . esc_url(home_url()) . '" class="run-import view-site" target="_blank">' . esc_html__('View Site', 'cafe-coffee-shop') . '</a></span>';
        }

		//POST and update the customizer and other related data 
        if (isset($_POST['submit'])) {

            // ------- Create Nav Menu --------
            // Define menu names and locations
                $cafe_coffee_shop_menuname_left = 'Primary Left Menu';
                $cafe_coffee_shop_bpmenulocation_left = 'primary-left';
                $cafe_coffee_shop_menuname_right = 'Primary Right Menu';
                $cafe_coffee_shop_bpmenulocation_right = 'primary-right';

                // Check if the left menu exists
                $cafe_coffee_shop_left_menu_exists = wp_get_nav_menu_object($cafe_coffee_shop_menuname_left);

                if (!$cafe_coffee_shop_left_menu_exists) {
                    $cafe_coffee_shop_left_menu_id = wp_create_nav_menu($cafe_coffee_shop_menuname_left);

                    // Create Home Page
                    $cafe_coffee_shop_home_title = 'Home';
                    $cafe_coffee_shop_home = array(
                        'post_type' => 'page',
                        'post_title' => $cafe_coffee_shop_home_title,
                        'post_content' => '',
                        'post_status' => 'publish',
                        'post_author' => 1,
                        'post_slug' => 'home'
                    );
                    $cafe_coffee_shop_home_id = wp_insert_post($cafe_coffee_shop_home);
                    add_post_meta($cafe_coffee_shop_home_id, '_wp_page_template', 'page-template/custom-home-page.php');
                    update_option('page_on_front', $cafe_coffee_shop_home_id);
                    update_option('show_on_front', 'page');

                    // Add Home Page to Left Menu
                    wp_update_nav_menu_item($cafe_coffee_shop_left_menu_id, 0, array(
                        'menu-item-title' => __('Home', 'cafe-coffee-shop'),
                        'menu-item-classes' => 'home',
                        'menu-item-url' => home_url('/'),
                        'menu-item-status' => 'publish',
                        'menu-item-object-id' => $cafe_coffee_shop_home_id,
                        'menu-item-object' => 'page',
                        'menu-item-type' => 'post_type'
                    ));

                    // Add 'Pages' to Left Menu
                    $cafe_coffee_shop_pages_title = 'Pages';
                    $cafe_coffee_shop_pages_content = '...'; // Your dummy content
                    $cafe_coffee_shop_pages = array(
                        'post_type' => 'page',
                        'post_title' => $cafe_coffee_shop_pages_title,
                        'post_content' => $cafe_coffee_shop_pages_content,
                        'post_status' => 'publish',
                        'post_author' => 1,
                        'post_slug' => 'pages'
                    );
                    $cafe_coffee_shop_pages_id = wp_insert_post($cafe_coffee_shop_pages);
                    wp_update_nav_menu_item($cafe_coffee_shop_left_menu_id, 0, array(
                        'menu-item-title' => __('Pages', 'cafe-coffee-shop'),
                        'menu-item-classes' => 'pages',
                        'menu-item-url' => home_url('/pages/'),
                        'menu-item-status' => 'publish',
                        'menu-item-object-id' => $cafe_coffee_shop_pages_id,
                        'menu-item-object' => 'page',
                        'menu-item-type' => 'post_type'
                    ));

                    // Add 'About Us' to Left Menu
                    $cafe_coffee_shop_about_title = 'About Us';
                    $cafe_coffee_shop_about_content = '...'; // Your dummy content
                    $cafe_coffee_shop_about = array(
                        'post_type' => 'page',
                        'post_title' => $cafe_coffee_shop_about_title,
                        'post_content' => $cafe_coffee_shop_about_content,
                        'post_status' => 'publish',
                        'post_author' => 1,
                        'post_slug' => 'about-us'
                    );
                    $cafe_coffee_shop_about_id = wp_insert_post($cafe_coffee_shop_about);
                    wp_update_nav_menu_item($cafe_coffee_shop_left_menu_id, 0, array(
                        'menu-item-title' => __('About Us', 'cafe-coffee-shop'),
                        'menu-item-classes' => 'about-us',
                        'menu-item-url' => home_url('/about-us/'),
                        'menu-item-status' => 'publish',
                        'menu-item-object-id' => $cafe_coffee_shop_about_id,
                        'menu-item-object' => 'page',
                        'menu-item-type' => 'post_type'
                    ));

                    // Assign Left Menu to its location
                    if (!has_nav_menu($cafe_coffee_shop_bpmenulocation_left)) {
                        $locations = get_theme_mod('nav_menu_locations');
                        if (empty($locations)) {
                            $locations = array();
                        }
                        $locations[$cafe_coffee_shop_bpmenulocation_left] = $cafe_coffee_shop_left_menu_id;
                        set_theme_mod('nav_menu_locations', $locations);
                    }
                }

                // Check if the right menu exists
                $cafe_coffee_shop_right_menu_exists = wp_get_nav_menu_object($cafe_coffee_shop_menuname_right);

                if (!$cafe_coffee_shop_right_menu_exists) {
                    $cafe_coffee_shop_right_menu_id = wp_create_nav_menu($cafe_coffee_shop_menuname_right);

                    // Add Home Page to Right Menu (can be the same page or different logic if needed)
                    wp_update_nav_menu_item($cafe_coffee_shop_right_menu_id, 0, array(
                        'menu-item-title' => __('Home', 'cafe-coffee-shop'),
                        'menu-item-classes' => 'home',
                        'menu-item-url' => home_url('/'),
                        'menu-item-status' => 'publish',
                        'menu-item-object-id' => $cafe_coffee_shop_home_id, // Reuse the same home ID
                        'menu-item-object' => 'page',
                        'menu-item-type' => 'post_type'
                    ));

                    // Add 'Pages' to Right Menu
                    wp_update_nav_menu_item($cafe_coffee_shop_right_menu_id, 0, array(
                        'menu-item-title' => __('Pages', 'cafe-coffee-shop'),
                        'menu-item-classes' => 'pages',
                        'menu-item-url' => home_url('/pages/'),
                        'menu-item-status' => 'publish',
                        'menu-item-object-id' => $cafe_coffee_shop_pages_id, // Reuse the same page ID
                        'menu-item-object' => 'page',
                        'menu-item-type' => 'post_type'
                    ));

                    // Add 'About Us' to Right Menu
                    wp_update_nav_menu_item($cafe_coffee_shop_right_menu_id, 0, array(
                        'menu-item-title' => __('About Us', 'cafe-coffee-shop'),
                        'menu-item-classes' => 'about-us',
                        'menu-item-url' => home_url('/about-us/'),
                        'menu-item-status' => 'publish',
                        'menu-item-object-id' => $cafe_coffee_shop_about_id, // Reuse the same about ID
                        'menu-item-object' => 'page',
                        'menu-item-type' => 'post_type'
                    ));

                    // Assign Right Menu to its location
                    if (!has_nav_menu($cafe_coffee_shop_bpmenulocation_right)) {
                        $locations = get_theme_mod('nav_menu_locations');
                        if (empty($locations)) {
                            $locations = array();
                        }
                        $locations[$cafe_coffee_shop_bpmenulocation_right] = $cafe_coffee_shop_right_menu_id;
                        set_theme_mod('nav_menu_locations', $locations);
                    }
                }
         
            // Set the demo import completion flag
    		update_option('cafe_coffee_shop_demo_import_completed', true);
    		// Display success message and "View Site" button
    		echo '<p class="notice-text">' . esc_html__('Your demo import has been completed successfully.', 'cafe-coffee-shop') . '</p>';
    		echo '<span><a href="' . esc_url(home_url()) . '" class="run-import view-site" target="_blank">' . esc_html__('View Site', 'cafe-coffee-shop') . '</a></span>';
            //end 


            // Top Bar //
            set_theme_mod( 'vw_bakery_phone_icon', 'fas fa-phone' );
            set_theme_mod( 'vw_bakery_call_us', 'Contact Us On' );
            set_theme_mod( 'vw_bakery_call_no', '+00 987 654 1230' );
            set_theme_mod( 'vw_bakery_email_icon', 'far fa-envelope' );
            set_theme_mod( 'vw_bakery_email_us', 'Mail Us On' );
            set_theme_mod( 'vw_bakery_email_address', 'support@example.com' );

            // slider section start //
            set_theme_mod( 'cafe_coffee_shop_designation_text', 'LOREM IPSUM DOLOR SIT' );

            for($vw_bakery_i=1;$vw_bakery_i<=3;$vw_bakery_i++){
               $vw_bakery_slider_title = 'Lorem ipsum dolor sit amet, consectetur';
               
                // Create post object
               $my_post = array(
               'post_title'    => wp_strip_all_tags( $vw_bakery_slider_title ),
               'post_status'   => 'publish',
               'post_type'     => 'page',
               );

               // Insert the post into the database
               $vw_bakery_post_id = wp_insert_post( $my_post );

               if ($vw_bakery_post_id) {
                 // Set the theme mod for the slider page
                 set_theme_mod('vw_bakery_slider_page' . $vw_bakery_i, $vw_bakery_post_id);

                  $vw_bakery_image_url = get_theme_file_uri().'/images/slider'.$vw_bakery_i.'.png';

                $vw_bakery_image_id = media_sideload_image($vw_bakery_image_url, $vw_bakery_post_id, null, 'id');

                    if (!is_wp_error($vw_bakery_image_id)) {
                        // Set the downloaded image as the post's featured image
                        set_post_thumbnail($vw_bakery_post_id, $vw_bakery_image_id);
                    }
                }
            }


            // About us Section
            set_theme_mod( 'cafe_coffee_shop_section_title', 'OUR STORY' );

            $cafe_coffee_shop_banner_title = 'Lorem ipsum dolor sit amet consectetur';
            $cafe_coffee_shop_banner_content = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500, when an unknown printer took a.

                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam… Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500, when an unknown printer.';

            // Create post object
            $my_post = array(
            'post_title'    => wp_strip_all_tags( $cafe_coffee_shop_banner_title ),
            'post_content'  => $cafe_coffee_shop_banner_content,
            'post_status'   => 'publish',
            'post_type'     => 'page',
            );

            // Insert the post into the database
            $cafe_coffee_shop_post_id = wp_insert_post( $my_post );

            if ($cafe_coffee_shop_post_id) {
                // Set the theme mod for the slider page
            set_theme_mod('cafe_coffee_shop_about_page', $cafe_coffee_shop_post_id);

            $cafe_coffee_shop_image_url = get_theme_file_uri().'/images/about.png';

            $cafe_coffee_shop_image_id = media_sideload_image($cafe_coffee_shop_image_url, $cafe_coffee_shop_post_id, null, 'id');

                if (!is_wp_error($cafe_coffee_shop_image_id)) {
                    // Set the downloaded image as the post's featured image
                    set_post_thumbnail($cafe_coffee_shop_post_id, $cafe_coffee_shop_image_id);
                }
            }
            
     
        }
    ?>


    <form action="<?php echo esc_url(home_url()); ?>/wp-admin/themes.php?page=cafe_coffee_shop_guide" method="POST" onsubmit="return validate(this);">
         <?php if (!get_option('cafe_coffee_shop_demo_import_completed')) : ?>
             <form method="post">
             <p><?php esc_html_e('Please back up your website if it’s already live with data. This importer will overwrite your existing settings with the new customizer values for Cafe Coffee Shop','cafe-coffee-shop'); ?></p>
                 <input class= "run-import" type="submit" name="submit" value="<?php esc_attr_e('Run Importer','cafe-coffee-shop'); ?>" class="button button-primary button-large">
             </form>
         <?php endif; ?>
     </form>
    <script type="text/javascript">
        function validate(valid) {
                if(confirm("Do you really want to import the theme demo content?")){
                    document.forms[0].submit();
                }
            else {
                    return false;
            }
        }
    </script>
</div>

