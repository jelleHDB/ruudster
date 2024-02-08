<?php
/*
Template Name: Contact
*/

get_header(); ?>

<div class="slider-overOns">
    <div class="slider-overOns-inner">
        <div class="slider-overOns-c1" style="background-image: linear-gradient( rgb(0 0 0 / 5%), rgb(0 0 0 / 5%) ), url(<?php the_field('afbeeldingSlider-contact'); ?>)">
            <?php if ( get_field( 'titelSlider-contact' ) ) : ?>
                <h1 class="tekst_in_slider-overOns"><?php the_field( 'titelSlider-contact' ); ?></h1>
            <?php endif ?>
        </div>
        <div class="slider-overOns-c2">
            <div class="extra-border">
                <h2 class="titelInformatieSlider-contact"><?php the_field( 'titelInformatieSlider-contact' ); ?></h2>
                <?php if ( have_rows( 'adresSlider-contact' ) ) : ?>
                    <?php while ( have_rows( 'adresSlider-contact' ) ) : the_row(); ?>
                    <div class="adresTitelsSlider-contact">
                        <h3 class="titelAdresSlider-contact"><?php the_sub_field( 'adresSliderTekst-contact_1' ); ?></h3>
                        <h3 class="titelAdresSlider-contact"><?php the_sub_field( 'adresSliderTekst-contact_2' ); ?></h3>
                    </div>
                    <?php endwhile; ?>
                <?php endif; ?>
                <?php if ( have_rows( 'telefoonnummerEmailSlider-contact' ) ) : ?>
                    <?php while ( have_rows( 'telefoonnummerEmailSlider-contact' ) ) : the_row(); ?>
                        <div class="mailTelSliderDiv-contact">
                            <?php $telefoonnummerSlider_contact = get_sub_field( 'telefoonnummerSlider-contact' ); ?>
                            <?php if ( $telefoonnummerSlider_contact ) : ?>
                                <a class="telefoonnummerContactSlider" href="<?php echo esc_url( $telefoonnummerSlider_contact['url'] ); ?>" target="<?php echo esc_attr( $telefoonnummerSlider_contact['target'] ); ?>"><i class="fa fa-phone" aria-hidden="true"></i><?php echo esc_html( $telefoonnummerSlider_contact['title'] ); ?></a>
                            <?php endif; ?>
                            <?php $mailadresSlider_contact = get_sub_field( 'mailadresSlider-contact' ); ?>
                            <?php if ( $mailadresSlider_contact ) : ?>
                                <a class="mailContactSlider" href="<?php echo esc_url( $mailadresSlider_contact['url'] ); ?>" target="<?php echo esc_attr( $mailadresSlider_contact['target'] ); ?>"><i class="fa fa-envelope" aria-hidden="true"></i><?php echo esc_html( $mailadresSlider_contact['title'] ); ?></a>
                            <?php endif; ?>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
<div class="googlemaps-contact">
    <div class="googlemaps-contact-inner">
        <span class="googleMapsSpan"><?php the_field( 'googlemaps-contact' ); ?></span>
    </div>
</div>


<?php get_footer(); ?>

