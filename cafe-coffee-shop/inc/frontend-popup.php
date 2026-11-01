<?php
/**
 * Front-end promo popup for pro theme upgrade.
 *
 * Shown bottom-right on the front end to super admins only.
 * Closing it hides it for 48 hours per user (persisted via user meta).
 * The snooze is reset whenever the theme is activated or deactivated.
 *
 * @package Cafe Coffee Shop
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

define( 'CAFE_COFFEE_SHOP_POPUP_META_KEY', 'cafe_coffee_shop_popup_dismissed' );
define( 'CAFE_COFFEE_SHOP_POPUP_NONCE', 'cafe_coffee_shop_popup_dismiss' );
define( 'CAFE_COFFEE_SHOP_POPUP_SNOOZE', 2 * DAY_IN_SECONDS );
define( 'CAFE_COFFEE_SHOP_PRO_SLUG', 'cafe-wordpress-theme' );
define( 'CAFE_COFFEE_SHOP_PRO_PRICE_URL', 'https://www.themescaliber.com/products/' . CAFE_COFFEE_SHOP_PRO_SLUG . '.js' );
define( 'CAFE_COFFEE_SHOP_PRO_PRICE_TRANSIENT', 'cafe_coffee_shop_pro_price' );

/**
 * Fetch the premium theme price from the store by product slug.
 *
 * Cached for 12 hours (1 hour on failure). Returns a formatted price
 * such as "$60", or an empty string if the price could not be fetched.
 */
function cafe_coffee_shop_get_pro_price() {
	$cafe_coffee_shop_price = get_transient( CAFE_COFFEE_SHOP_PRO_PRICE_TRANSIENT );

	if ( false !== $cafe_coffee_shop_price ) {
		return $cafe_coffee_shop_price;
	}

	$cafe_coffee_shop_price    = '';
	$cafe_coffee_shop_response = wp_remote_get( CAFE_COFFEE_SHOP_PRO_PRICE_URL, array( 'timeout' => 10 ) );

	if ( ! is_wp_error( $cafe_coffee_shop_response ) && 200 === wp_remote_retrieve_response_code( $cafe_coffee_shop_response ) ) {
		$cafe_coffee_shop_product = json_decode( wp_remote_retrieve_body( $cafe_coffee_shop_response ) );

		// Store returns price in cents.
		if ( isset( $cafe_coffee_shop_product->price ) && is_numeric( $cafe_coffee_shop_product->price ) ) {
			$cafe_coffee_shop_amount = $cafe_coffee_shop_product->price / 100;
			$cafe_coffee_shop_price  = '$' . number_format_i18n( $cafe_coffee_shop_amount, floor( $cafe_coffee_shop_amount ) == $cafe_coffee_shop_amount ? 0 : 2 );
		}
	}

	set_transient( CAFE_COFFEE_SHOP_PRO_PRICE_TRANSIENT, $cafe_coffee_shop_price, '' === $cafe_coffee_shop_price ? HOUR_IN_SECONDS : 12 * HOUR_IN_SECONDS );

	return $cafe_coffee_shop_price;
}

/**
 * Whether the popup should render for the current request.
 */
function cafe_coffee_shop_popup_should_show() {
	if ( is_admin() || ! is_user_logged_in() || ! is_super_admin() ) {
		return false;
	}

	$cafe_coffee_shop_dismissed = (int) get_user_meta( get_current_user_id(), CAFE_COFFEE_SHOP_POPUP_META_KEY, true );

	return ( time() - $cafe_coffee_shop_dismissed ) >= CAFE_COFFEE_SHOP_POPUP_SNOOZE;
}

/**
 * Render popup in the front-end footer.
 */
function cafe_coffee_shop_frontend_promo_popup() {

	if ( ! cafe_coffee_shop_popup_should_show() ) {
		return;
	}

	$cafe_coffee_shop_logo_url = get_stylesheet_directory_uri() . '/images/final-logo.png';
	$cafe_coffee_shop_buy_url  = defined( 'CAFE_COFFEE_SHOP_BUY_NOW' ) ? CAFE_COFFEE_SHOP_BUY_NOW : 'https://www.themescaliber.com/products/cafe-wordpress-theme';
	$cafe_coffee_shop_demo_url = defined( 'CAFE_COFFEE_SHOP_LIVE_DEMO' ) ? CAFE_COFFEE_SHOP_LIVE_DEMO : 'https://preview.themescaliber.com/tc-cafe-pro/';
	$cafe_coffee_shop_nonce    = wp_create_nonce( CAFE_COFFEE_SHOP_POPUP_NONCE );
	$cafe_coffee_shop_price    = cafe_coffee_shop_get_pro_price();
	?>
	<div class="vw-upsell-popup" role="dialog" aria-labelledby="vw-upsell-popup-title" data-nonce="<?php echo esc_attr( $cafe_coffee_shop_nonce ); ?>">
		<div class="vw-upsell-popup__inner">
			<img src="<?php echo esc_url( $cafe_coffee_shop_logo_url ); ?>" alt="<?php esc_attr_e( 'VW Themes', 'cafe-coffee-shop' ); ?>" class="vw-upsell-popup__logo" />
			<h2 id="vw-upsell-popup-title" class="vw-upsell-popup__title"><?php esc_html_e( 'Take Your Website Further with Cafe Coffee Shop Pro', 'cafe-coffee-shop' ); ?></h2>
			<p class="vw-upsell-popup__text"><?php
				if ( $cafe_coffee_shop_price ) {
					printf(
						/* translators: %s: Pro theme price. */
						esc_html__( 'Upgrade to Pro & get access to premium features, extra sections and Customizations just at %s', 'cafe-coffee-shop' ),
						'<strong>' . esc_html( $cafe_coffee_shop_price ) . '</strong>'
					);
				} else {
					esc_html_e( 'Upgrade to Pro & get access to premium features, extra sections and Customizations', 'cafe-coffee-shop' );
				}
				?>
			</p>
			<div class="vw-upsell-popup__actions">
				<a href="<?php echo esc_url( $cafe_coffee_shop_buy_url ); ?>" class="vw-upsell-popup__btn vw-upsell-popup__btn--buy" target="_blank" rel="noopener noreferrer"><?php esc_html_e( 'Get Pro Now', 'cafe-coffee-shop' ); ?></a>
				<?php if ( $cafe_coffee_shop_demo_url ) : ?>
					<a href="<?php echo esc_url( $cafe_coffee_shop_demo_url ); ?>" class="vw-upsell-popup__btn vw-upsell-popup__btn--demo" target="_blank" rel="noopener noreferrer"><?php esc_html_e( 'Live Demo', 'cafe-coffee-shop' ); ?></a>
				<?php endif; ?>
			</div>
		</div>
		<button type="button" class="vw-upsell-popup__close" aria-label="<?php esc_attr_e( 'Close', 'cafe-coffee-shop' ); ?>">
			<span aria-hidden="true">&times;</span>
		</button>
	</div>
	<?php
}
add_action( 'wp_footer', 'cafe_coffee_shop_frontend_promo_popup' );

/**
 * Enqueue popup CSS + JS on the front end.
 */
function cafe_coffee_shop_frontend_promo_popup_assets() {

	if ( ! cafe_coffee_shop_popup_should_show() ) {
		return;
	}

	$cafe_coffee_shop_version = wp_get_theme()->get( 'Version' );

	wp_enqueue_style(
		'cafe-coffee-shop-upsell-popup',
		get_stylesheet_directory_uri() . '/css/frontend-popup.css',
		array(),
		$cafe_coffee_shop_version
	);

	wp_enqueue_script(
		'cafe-coffee-shop-upsell-popup',
		get_stylesheet_directory_uri() . '/js/frontend-popup.js',
		array(),
		$cafe_coffee_shop_version,
		true
	);

	wp_localize_script(
		'cafe-coffee-shop-upsell-popup',
		'CafeCoffeeShopPopup',
		array(
			'ajaxUrl' => admin_url( 'admin-ajax.php' ),
			'action'  => 'cafe_coffee_shop_dismiss_popup',
		)
	);
}
add_action( 'wp_enqueue_scripts', 'cafe_coffee_shop_frontend_promo_popup_assets' );

/**
 * AJAX handler: snooze the popup for the current user.
 */
function cafe_coffee_shop_dismiss_popup_handler() {

	if ( ! is_super_admin() ) {
		wp_send_json_error( array( 'message' => 'forbidden' ), 403 );
	}

	check_ajax_referer( CAFE_COFFEE_SHOP_POPUP_NONCE, 'nonce' );

	update_user_meta( get_current_user_id(), CAFE_COFFEE_SHOP_POPUP_META_KEY, time() );

	wp_send_json_success();
}
add_action( 'wp_ajax_cafe_coffee_shop_dismiss_popup', 'cafe_coffee_shop_dismiss_popup_handler' );

/**
 * Reset the snooze for all users so the popup shows again
 * whenever this theme is activated (fresh install or re-activation).
 */
function cafe_coffee_shop_reset_popup_dismissal() {
	delete_metadata( 'user', 0, CAFE_COFFEE_SHOP_POPUP_META_KEY, '', true );
}
add_action( 'after_switch_theme', 'cafe_coffee_shop_reset_popup_dismissal' );

/**
 * Also clear it when switching away from this theme (deactivation).
 */
add_action( 'switch_theme', 'cafe_coffee_shop_reset_popup_dismissal' );
