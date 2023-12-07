<?php
/*
Template Name: Home
*/

get_header(); ?>

<div class="sliderHome">
    <div class="sliderHome-inner">
        <div class="sliderHome-c1" style="background-image: linear-gradient( rgb(0 0 0 / 5%), rgb(0 0 0 / 5%) ), url(<?php the_field('afbeelding-sliderHome'); ?>)">
            <?php if ( get_field( 'afbeelding-sliderHome' ) ) : ?>
                <h1 class="titelInSliderHome"><?php the_field( 'titel_in_afbeelding-sliderHome' ); ?></h1>
            <?php endif ?>
        </div>
        <div class="sliderHome-c2">
            <div class="extra-border">
                <?php if ( have_rows( 'slogans_in_slider-sliderHome' ) ) : ?>
                    <?php while ( have_rows( 'slogans_in_slider-sliderHome' ) ) : the_row(); ?>
                        <?php if ( have_rows( 'slogan-sliderHome' ) ) : ?>
                            <?php while ( have_rows( 'slogan-sliderHome' ) ) : the_row(); ?>
                                <div class="sloganSliderHome">
                                    <h4 class="deelZin_1 deelZin"><?php the_sub_field( 'titelDeelSlogan-sliderHome_1' ); ?></h4>
                                    <h4 class="deelZin_2 deelZin"><?php the_sub_field( 'titelDeelSlogan-sliderHome_2' ); ?></h4>
                                    <h4 class="deelZin_3 deelZin"><?php the_sub_field( 'titelDeelSlogan-sliderHome_3' ); ?></h4>
                                    <h4 class="deelZin_4 deelZin"><?php the_sub_field( 'oranje_punt-sliderHome' ); ?></h4>
                                </div>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    <?php endwhile; ?>
                <?php else : ?>
                    <?php // No rows found ?>
                <?php endif; ?>
                <?php if ( get_field( 'usp-sliderHome_1' ) ) : ?>
                    <h2 class="usp-sliderHome_1 usp-sliderHome">
                        <iconify-icon class="icon-slider" icon="bx:badge-check"></iconify-icon>
                        <?php the_field( 'usp-sliderHome_1' ); ?>
                    </h2>
                <?php endif ?>
                <?php if ( get_field( 'usp-sliderHome_2' ) ) : ?>
                    <h2 class="usp-sliderHome_2 usp-sliderHome">
                        <iconify-icon class="icon-slider" icon="mdi:shield-check"></iconify-icon>
                        <?php the_field( 'usp-sliderHome_2' ); ?>
                    </h2>
                <?php endif ?>
                <?php if ( get_field( 'usp-sliderHome_3' ) ) : ?>
                    <h2 class="usp-sliderHome_3 usp-sliderHome">
                        <iconify-icon class="icon-slider" icon="carbon:sustainability"></iconify-icon>
                        <?php the_field( 'usp-sliderHome_3' ); ?>
                    </h2>
                <?php endif ?>
            </div>
        </div>
    </div>
</div>
<div class="logo-home">
    <?php $logo_logoHome = get_field( 'logo-logoHome' ); ?>
    <?php if ( $logo_logoHome ) : ?>
        <img class="logohome-logo" src="<?php echo esc_url( $logo_logoHome['url'] ); ?>" alt="<?php echo esc_attr( $logo_logoHome['alt'] ); ?>" />
    <?php endif; ?>
    <div class="logo-home-inner-1">
        <?php if ( have_rows( 'usp-logoHome_1' ) ) : ?>
            <?php while ( have_rows( 'usp-logoHome_1' ) ) : the_row(); ?>
                <div class="logo-home-c1" style="background-image: linear-gradient( #0f4a58bd, #0f4a58ad ), url(<?php the_sub_field('afbeelding-logoHome_1'); ?>)">
                    <?php $link_logoHome_1 = get_sub_field( 'link-logoHome_1' ); ?>
                    <?php if ( $link_logoHome_1 ) : ?>
                        <a class="costumLink-logo" href="<?php echo esc_url( $link_logoHome_1['url'] ); ?>" target="<?php echo esc_attr( $link_logoHome_1['target'] ); ?>"><?php echo esc_html( $link_logoHome_1['title'] ); ?></a>
                    <?php endif; ?>
                </div>
            <?php endwhile; ?>
        <?php endif; ?>
        <?php if ( have_rows( 'usp-logoHome_2' ) ) : ?>
	        <?php while ( have_rows( 'usp-logoHome_2' ) ) : the_row(); ?>
                <div class="logo-home-c2" style="background-image: linear-gradient( #0f4a58bd, #0f4a58ad ), url(<?php the_sub_field('afbeelding-logoHome_2'); ?>)">
                    <?php $link_logoHome_2 = get_sub_field( 'link-logoHome_2' ); ?>
                    <?php if ( $link_logoHome_2 ) : ?>
                        <a class="costumLink-logo" href="<?php echo esc_url( $link_logoHome_2['url'] ); ?>" target="<?php echo esc_attr( $link_logoHome_2['target'] ); ?>"><?php echo esc_html( $link_logoHome_2['title'] ); ?></a>
                    <?php endif; ?>
                </div>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>
    <div class="logo-home-inner-2">
        <?php if ( have_rows( 'usp-logoHome_3' ) ) : ?>
            <?php while ( have_rows( 'usp-logoHome_3' ) ) : the_row(); ?>     
                <div class="logo-home-c3" style="background-image: linear-gradient( #0f4a58bd, #0f4a58ad ), url(<?php the_sub_field('afbeelding-logoHome_3'); ?>)">
                    <?php $link_logoHome_3 = get_sub_field( 'link-logoHome_3' ); ?>
                    <?php if ( $link_logoHome_3 ) : ?>
                        <a class="costumLink-logo" href="<?php echo esc_url( $link_logoHome_3['url'] ); ?>" target="<?php echo esc_attr( $link_logoHome_3['target'] ); ?>"><?php echo esc_html( $link_logoHome_3['title'] ); ?></a>
                    <?php endif; ?>
                </div>
            <?php endwhile; ?>
        <?php endif; ?>
        <?php if ( have_rows( 'usp-logoHome_4' ) ) : ?>
            <?php while ( have_rows( 'usp-logoHome_4' ) ) : the_row(); ?>  
                <div class="logo-home-c4" style="background-image: linear-gradient( #0f4a58bd, #0f4a58ad ), url(<?php the_sub_field('afbeelding-logoHome_4'); ?>)">
                    <?php $link_logoHome_4 = get_sub_field( 'link-logoHome_4' ); ?>
                    <?php if ( $link_logoHome_4 ) : ?>
                        <a class="costumLink-logo" href="<?php echo esc_url( $link_logoHome_4['url'] ); ?>" target="<?php echo esc_attr( $link_logoHome_4['target'] ); ?>"><?php echo esc_html( $link_logoHome_4['title'] ); ?></a>
                    <?php endif; ?>
                </div>
            <?php endwhile; ?>
        <?php endif; ?>      
    </div>
</div>
<div class="tekst-vlakken">
    <div class="tekst-vlakken-inner">
    <?php if ( have_rows( '3_tekst_vlakken-home' ) ) : ?>
        <?php while ( have_rows( '3_tekst_vlakken-home' ) ) : the_row(); ?>
            <div class="tekstVlakHome">
                <div class="extra-border-2">
                    <?php if ( have_rows( 'tekst_vlak-home' ) ) : ?>
                        <?php while ( have_rows( 'tekst_vlak-home' ) ) : the_row(); ?>
                            <h2 class="titel-tekstvlak"><?php the_sub_field( 'titel-tekstvlak' ); ?></h2>
                            <?php the_sub_field( 'informatie-tekstvlak' ); ?>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </div>
        <?php endwhile; ?>
    <?php else : ?>
        <?php // No rows found ?>
    <?php endif; ?>
    </div>
</div>
<div class="kernwaardes" style="background-image: linear-gradient( #0f4a58bd, #0f4a58ad ), url(<?php the_field('achtergrond_afbeelding-kernwaarde'); ?>)">
    <h2 class="titel-kernwaardes"><?php the_field( 'titel-kernwaarde' ); ?></h2>
    <div class="kernwaardes-inner">
        <?php if ( have_rows( '5_kernwaardes-kernwaarde' ) ) : ?>
            <?php while ( have_rows( '5_kernwaardes-kernwaarde' ) ) : the_row(); ?>
                <?php if ( have_rows( 'kernwaarde-kernwaarde' ) ) : ?>
                    <?php while ( have_rows( 'kernwaarde-kernwaarde' ) ) : the_row(); ?>
                    <div class="kernwaarde-vlak">
                        <?php if ( have_rows( 'titels-kernwaardes' ) ) : ?>
                            <?php while ( have_rows( 'titels-kernwaardes' ) ) : the_row(); ?>
                                <h2 style="display:inline-block;" class="titelKernwaarde"><?php the_sub_field( 'titel-kernwaarde' ); ?></h2>
                                <h2 style="display:inline;" class="titelKernwaardePunt"><?php the_sub_field( 'titels_punt-kernwaardes' ); ?></h2>
                            <?php endwhile; ?>
                            <?php endif; ?>
                            <?php the_sub_field( 'informatie-kernwaarde' ); ?>
                        <?php endwhile; ?>
                    </div>
                <?php endif; ?>
            <?php endwhile; ?>
        <?php else : ?>
            <?php // No rows found ?>
        <?php endif; ?>
    </div>
</div>
<div class="vlakken-informatie">
    <div class="vlakken-informatie-inner">
        <?php if ( have_rows( '2_vlakken_informatie-home' ) ) : ?>
            <?php while ( have_rows( '2_vlakken_informatie-home' ) ) : the_row(); ?>
                <?php if ( have_rows( 'informatie_vlak-2-home' ) ) : ?>
                    <?php while ( have_rows( 'informatie_vlak-2-home' ) ) : the_row(); ?>
                        <div class="informatieVlak-onder">
                            <?php if ( have_rows( 'titels-info2-home' ) ) : ?>
                                <?php while ( have_rows( 'titels-info2-home' ) ) : the_row(); ?>
                                    <h2 class="titel-infoOnder"><?php the_sub_field( 'titel-info2-home' ); ?><span class="oranje_punt"><?php the_sub_field( 'titel_info2-home-oranjepunt' ); ?></span></h2>
                                <?php endwhile; ?>
                            <?php endif; ?>
                            <?php the_sub_field( 'informatie-info2-home' ); ?>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            <?php endwhile; ?>
        <?php else : ?>
            <?php // No rows found ?>
        <?php endif; ?>
    </div>
</div>

<?php get_footer(); ?>

