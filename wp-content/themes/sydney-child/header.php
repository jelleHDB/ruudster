<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Sydney
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
<script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> <?php sydney_do_schema( 'html' ); ?>>

<span id="toptarget"></span>

<?php wp_body_open(); ?>

<?php do_action('sydney_before_site'); //Hooked: sydney_preloader() ?>

<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'sydney' ); ?></a>

	<?php do_action('sydney_before_header'); //Hooked: sydney_header_clone() ?>	

	<?php do_action( 'sydney_header' ); ?>

	<?php do_action('sydney_after_header'); ?>

	<div class="sydney-hero-area">
		<?php sydney_slider_template(); ?>
		<div class="header-image">
			<?php sydney_header_overlay(); ?>
			<?php if ( ( get_theme_mod('front_header_type','nothing') == 'image' && is_front_page() ) || (get_theme_mod('site_header_type') == 'image' && !is_front_page() ) ) : ?>
				<?php $shop_thumb = get_the_post_thumbnail_url( get_option( 'woocommerce_shop_page_id' )); ?>
				<?php if ( class_exists( 'Woocommerce' ) && is_shop() && !$shop_thumb  ) : ?>
					<img class="header-inner" src="<?php header_image(); ?>" width="<?php echo esc_attr( get_custom_header()->width ); ?>" alt="<?php bloginfo('name'); ?>" title="<?php bloginfo('name'); ?>">
				<?php endif; ?>
			<?php endif; ?>
		</div>
		<?php sydney_header_video(); ?>

		<?php do_action('sydney_inside_hero'); ?>
	</div>

	<?php do_action('sydney_after_hero'); ?>

<div class="header-costum">
	<div class="header-costum-inner">
		<div class="header-costum-c1">
			<?php $telefoonnummer_header = get_field( 'telefoonnummer-header', 'option' ); ?>
			<?php if ( $telefoonnummer_header ) : ?>
				<a href="<?php echo esc_url( $telefoonnummer_header['url'] ); ?>" target="<?php echo esc_attr( $telefoonnummer_header['target'] ); ?>"><i style="margin-right: 10px;" class="fa fa-phone" aria-hidden="true"></i><?php echo esc_html( $telefoonnummer_header['title'] ); ?></a>
			<?php endif; ?>
		</div>
		<div class="header-costum-c2">
			<div class="topnav" id="myTopnav">
				<?php if ( have_rows( 'menu_items-header', 'option' ) ) : ?>
					<?php while ( have_rows( 'menu_items-header', 'option' ) ) : the_row(); ?>
						<?php $menu_item_header = get_sub_field( 'menu_item_header' ); ?>
						<?php if ( $menu_item_header ) : ?>
							<a class="costum-linkHeader" href="<?php echo esc_url( $menu_item_header['url'] ); ?>" target="<?php echo esc_attr( $menu_item_header['target'] ); ?>"><?php echo esc_html( $menu_item_header['title'] ); ?></a>
						<?php endif; ?>
					<?php endwhile; ?>
				<?php else : ?>
					<?php // No rows found ?>
				<?php endif; ?>
				<a href="javascript:void(0);" class="icon" onclick="myFunction()">
					<i class="fa fa-bars"></i>
				</a>
			</div>
		</div>
		<script>
			function myFunction() {
				var x = document.getElementById("myTopnav");
				if (x.className === "topnav") {
					x.className += " responsive";
				} else {
					x.className = "topnav";
				}
			}
		</script>
	</div>
</div>

