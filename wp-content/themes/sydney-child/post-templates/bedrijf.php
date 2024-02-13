<?php
/*
Template Name: Bedrijf
Template Post Type: post, projects, employees
*/

get_header(); ?>

	<div class="bedrijfDiv">
		<div class="bedrijfDivInner">

		<?php
		while ( have_posts() ) : the_post(); ?>

			<div class="sliderBedrijf" style="background-image: linear-gradient( rgb(0 0 0 / 50%), rgb(0 0 0 / 50%) ), url(<?php the_field('afbeeldingSlider-bedrijf'); ?>)">
				<h2 class="titelSliderTemplate"><?php the_field('titelSlider-bedrijf'); ?></h2>
			</div>
			<span class="infoOnderSliderBedrijf"><?php the_field( 'informatie_onder_slider-bedrijf' ); ?></span>

			<div class="meerInformatieBedrijf">
				<?php if ( have_rows( 'informatie_over_bedrijfHerhaler-bedrijf' ) ) : ?>
					<?php while ( have_rows( 'informatie_over_bedrijfHerhaler-bedrijf' ) ) : the_row(); ?>
						<h2 class="titelMeerInfoBedrijf"><?php the_sub_field( 'titelBedrijfHerhaler-bedrijf' ); ?><span class="oranjePuntContactBedrijf">.</span></h2>
						<span class="infoMeerInfoBedrijf"><?php the_sub_field( 'informatieBedrijfHerhaler-bedrijf' ); ?></span>
					<?php endwhile; ?>
				<?php else : ?>
					<?php // No rows found ?>
				<?php endif; ?>
			</div>

			<div class="meerInfoOfContact">
				<?php if( get_field('titelMeerContact-bedrijf') ): ?>
					<hr class="grijzeStreepMeerInfoBedrijf">
					<h2 class="titelMeerInfoOfContact"><?php the_field( 'titelMeerContact-bedrijf' ); ?><span class="oranjePuntContactBedrijf">.</span></h2>
				<?php endif; ?>
				<?php $buttonMeerContact = get_field( 'buttonMeerContact' ); ?>
				<?php if ( $buttonMeerContact ) : ?>
					<a class="buttonVraagMeerInfoAan-template" href="<?php echo esc_url( $buttonMeerContact['url'] ); ?>" target="<?php echo esc_attr( $buttonMeerContact['target'] ); ?>"><?php echo esc_html( $buttonMeerContact['title'] ); ?></a>
				<?php endif; ?>
			</div>

		<?php endwhile; // End of the loop.
		?>

		</div>
	</div>

<?php
get_footer();
