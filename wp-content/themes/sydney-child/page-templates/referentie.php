<?php
/*
Template Name: Referentie
*/

get_header(); ?>

<div class="sliderTemplate">
    <div class="sliderTemplate-inner" style="background-image: linear-gradient( rgb(0 0 0 / 50%), rgb(0 0 0 / 50%) ), url(<?php the_field('afbeeldingSlider-referentie'); ?>)">
        <h2 class="titelSliderTemplate"><?php the_field('titelSlider-referentie'); ?></h2>
    </div>
</div>
<div class="informatie-referentie">
    <div class="informatie-referentie-inner">
        <h2 class="titelInformatieReferentie"><?php the_field( 'titelInformatieReferentie' ); ?><span class="oranjePuntReferentie">.</span></h2>
        <span class="informatieReferentie"><?php the_field( 'informatie-referentie' ); ?></span>
        <div class="logoBedrijvenDiv">
            <?php if ( have_rows( 'referentiesBedrijven-referentie' ) ) : ?>
                <?php while ( have_rows( 'referentiesBedrijven-referentie' ) ) : the_row(); ?>
                    <?php $link_naar_bedrijf_referentie = get_sub_field( 'link_naar_bedrijf-referentie' ); ?>
                    <?php if ( $link_naar_bedrijf_referentie ) : ?>
                        <a class="linkNaarBedrijf" href="<?php echo esc_url( $link_naar_bedrijf_referentie['url'] ); ?>" target="<?php echo esc_attr( $link_naar_bedrijf_referentie['target'] ); ?>">
                            <?php if ( get_sub_field( 'logo_bedrijfAfbeelding-referentie' ) ) : ?>
                                <img class="logo-bedrijf" src="<?php the_sub_field( 'logo_bedrijfAfbeelding-referentie' ); ?>" />
                            <?php endif ?>
                        </a>
                    <?php endif; ?>
                <?php endwhile; ?>
            <?php else : ?>
                <?php // No rows found ?>
            <?php endif; ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>

