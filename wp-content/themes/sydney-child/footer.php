<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Sydney
 */
?>


	<?php do_action('sydney_before_footer'); ?>

	<?php if ( is_active_sidebar( 'footer-1' ) ) : ?>
		<?php get_sidebar('footer'); ?>
	<?php endif; ?>

	<?php $container 	= get_theme_mod( 'footer_credits_container', 'container' ); ?>
	<?php $credits 		= sydney_footer_credits(); ?>

	<footer id="costumFooter" class="footerRuudster">
		<div class="footer-inhoud">
			<div class="footer-c1">
				<?php if ( have_rows( 'titels-footer-c1', 'option' ) ) : ?>
					<?php while ( have_rows( 'titels-footer-c1', 'option' ) ) : the_row(); ?>
						<h2 class="titel-c1-footer"><?php the_sub_field( 'titel-footer-c1_1' ); ?><span class="oranjeLetter"><?php the_sub_field( 'titel-footer-c1_2' ); ?></h2></span>
					<?php endwhile; ?>
					<?php if ( have_rows( 'menu_items-footer-c1', 'option' ) ) : ?>
					<?php while ( have_rows( 'menu_items-footer-c1', 'option' ) ) : the_row(); ?>
						<?php $menu_item_footer_c1 = get_sub_field( 'menu_item-footer-c1' ); ?>
						<?php if ( $menu_item_footer_c1 ) : ?>
							<a class="menu-item-footer-c1" href="<?php echo esc_url( $menu_item_footer_c1['url'] ); ?>" target="<?php echo esc_attr( $menu_item_footer_c1['target'] ); ?>"><?php echo esc_html( $menu_item_footer_c1['title'] ); ?></a>
						<?php endif; ?>
					<?php endwhile; ?>
				<?php else : ?>
					<?php // No rows found ?>
				<?php endif; ?>
				<?php endif; ?>
			</div>
			<div class="footer-c2">
				<h2 class="titel-footer-c2"><?php the_field( 'titel-footer-c2', 'option' ); ?></h2>
				<div class="menu-items-footer-c2">
				<?php if ( have_rows( 'menu_items-footer-c2', 'option' ) ) : ?>
					<?php while ( have_rows( 'menu_items-footer-c2', 'option' ) ) : the_row(); ?>
						<div class="div-menuItems">
							<h3 class="titel-menu-items-c2"><?php the_sub_field( 'titel-footer-c2-menu-items' ); ?></h3>
							<?php if ( have_rows( 'menu_item_kolom-footer-c2' ) ) : ?>
								<?php while ( have_rows( 'menu_item_kolom-footer-c2' ) ) : the_row(); ?>
									<?php if ( have_rows( 'menu_items-footer-items-c2' ) ) : ?>
										<div class="linkMenuC2">
											<?php while ( have_rows( 'menu_items-footer-items-c2' ) ) : the_row(); ?>
												<?php $menu_item_footer_c2_menu_item = get_sub_field( 'menu_item-footer-c2-menu-item' ); ?>
												<?php if ( $menu_item_footer_c2_menu_item ) : ?>
													<a class="menu-items-c2" href="<?php echo esc_url( $menu_item_footer_c2_menu_item['url'] ); ?>" target="<?php echo esc_attr( $menu_item_footer_c2_menu_item['target'] ); ?>"><?php echo esc_html( $menu_item_footer_c2_menu_item['title'] ); ?></a>
												<?php endif; ?>
											<?php endwhile; ?>
										</div>
									<?php else : ?>
										<?php // No rows found ?>
									<?php endif; ?>
								<?php endwhile; ?>
							<?php endif; ?>
						</div>
					<?php endwhile; ?>
				<?php else : ?>
					<?php // No rows found ?>
				<?php endif; ?>
				</div>
			</div>
			<div class="footer-c3">
				<?php if ( have_rows( 'titels-footer-c3', 'option' ) ) : ?>
					<?php while ( have_rows( 'titels-footer-c3', 'option' ) ) : the_row(); ?>
						<h2 class="titel-footer-c3"><?php the_sub_field( 'titel-footer-c3_1' ); ?><span class="oranjeLetter"><?php the_sub_field( 'oranje_letter-footer-c3_2' ); ?></span></h2>
					<?php endwhile; ?>
				<?php endif; ?>
				<h4 class="titelKlein-footer-c3"><?php the_field( 'titel_klein-footer-c3', 'option' ); ?></h4>
				<h2 class="adres_1-footer-c3"><?php the_field( 'adres_1-footer-c3', 'option' ); ?></h2>
				<h2 class="adres_2-footer-c3"><?php the_field( 'adres_2-footer-c3', 'option' ); ?></h2>
				<?php $telefoonnummer_footer_c3 = get_field( 'telefoonnummer-footer-c3', 'option' ); ?>
				<?php if ( $telefoonnummer_footer_c3 ) : ?>
					<a class="linkTelefoonnummer-footer-c3" href="<?php echo esc_url( $telefoonnummer_footer_c3['url'] ); ?>" target="<?php echo esc_attr( $telefoonnummer_footer_c3['target'] ); ?>"><?php echo esc_html( $telefoonnummer_footer_c3['title'] ); ?></a>
				<?php endif; ?>
				<?php $mail_footer_c3 = get_field( 'mail-footer-c3', 'option' ); ?>
				<?php if ( $mail_footer_c3 ) : ?>
					<a class="linkMail-footer-c3" href="<?php echo esc_url( $mail_footer_c3['url'] ); ?>" target="<?php echo esc_attr( $mail_footer_c3['target'] ); ?>"><?php echo esc_html( $mail_footer_c3['title'] ); ?></a>
				<?php endif; ?>
			</div>
		</div>
	</footer><!-- #colophon -->

	<div class="creditsFooter">
		<div class="creditsFooter-inhoud">
			<?php echo wp_kses_post( $credits ); ?>
		</div>
	</div>

	<?php do_action('sydney_after_footer'); ?>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
