<?php
/*
Template Name: Over ons
*/

get_header(); ?>

<div class="slider-overOns">
    <div class="slider-overOns-inner">
        <div class="slider-overOns-c1" style="background-image: linear-gradient( rgb(0 0 0 / 5%), rgb(0 0 0 / 5%) ), url(<?php the_field('afbeeldingSlider-overOns'); ?>)">
            <?php if ( get_field( 'tekst_in_slider-overOns' ) ) : ?>
                <h1 class="tekst_in_slider-overOns"><?php the_field( 'tekst_in_slider-overOns' ); ?></h1>
            <?php endif ?>
        </div>
        <div class="slider-overOns-c2">
            <div class="extra-border">
                <?php if ( have_rows( 'informatie_naast_slider-overOns' ) ) : ?>
                    <?php while ( have_rows( 'informatie_naast_slider-overOns' ) ) : the_row(); ?>
                        <p class="informatieSlider-overOns"><?php the_sub_field( 'informatieSlider-overOns_1' ); ?><span class="informatieSlider-dikGedrukt-overOns"><?php the_sub_field( 'informatieSlider-overOns_2' ); ?></span><?php the_sub_field( 'informatieSlider-overOns_3' ); ?></p>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
<div class="repeater-overOns">
    <div class="repeater-overOns-inner">
        <?php if ( have_rows( 'usps_met_link-overOns' ) ) : ?>
            <?php while ( have_rows( 'usps_met_link-overOns' ) ) : the_row(); ?>
                <div class="divRepeater-overOns" style="background-image: linear-gradient( #0f4a58bd, #0f4a58ad ), url(<?php the_sub_field('afbeeldingRepeater-overOns'); ?>)">
                    <?php $linkRepeater_overOns = get_sub_field( 'linkRepeater-overOns' ); ?>
                    <?php if ( $linkRepeater_overOns ) : ?>
                        <a class="linkRepeater-overOns" href="<?php echo esc_url( $linkRepeater_overOns['url'] ); ?>" target="<?php echo esc_attr( $linkRepeater_overOns['target'] ); ?>"><?php echo esc_html( $linkRepeater_overOns['title'] ); ?></a>
                    <?php endif; ?>
                </div>
            <?php endwhile; ?>
        <?php else : ?>
            <?php // No rows found ?>
        <?php endif; ?>
    </div>
</div>
<div class="informatie-overOns">
    <div class="informatie-overOns-inner">
        <div class="informatieTitels-overOns">
            <?php if ( have_rows( 'titelsInformatie-overOns' ) ) : ?>
                <?php while ( have_rows( 'titelsInformatie-overOns' ) ) : the_row(); ?>
                    <h2 class="titelInfo-overOns"><span class="titelInfoOranje-overOns"><?php the_sub_field( 'titel_oranje-overOns' ); ?></span><span class="titelInfoZwart-overOns"><?php the_sub_field( 'titel_zwart-overOns' ); ?></span></h2>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
        <div class="informatieInfo-overOns">
            <hr class="orangeLineOverOns">
            <span class="informatieSpan-overOns"><?php the_field( 'informatie-overOns' ); ?></span>
        </div>
    </div>
</div>



<?php get_footer(); ?>

