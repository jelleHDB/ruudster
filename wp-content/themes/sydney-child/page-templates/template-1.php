<?php
/*
Template Name: Template voor ISO, RIE, BHV, etc.
*/

get_header(); ?>

<div class="sliderTemplate">
    <div class="sliderTemplate-inner" style="background-image: linear-gradient( rgb(0 0 0 / 50%), rgb(0 0 0 / 50%) ), url(<?php the_field('afbeelding_slider-template'); ?>)">
        <h2 class="titelSliderTemplate"><?php the_field( 'titelSlider-template' ); ?></h2>
    </div>
</div>
<?php if( get_field('informatie-template') ): ?>
    <div class="infoOnderTitel">
        <div class="infoOnderTitel-inner">
            <?php if ( have_rows( 'titels-template' ) ) : ?>
                <?php while ( have_rows( 'titels-template' ) ) : the_row(); ?>
                    <h3 class="titelsOnderSliderTemplate"><span class="oranjeTitelOnderSliderTemplate"><?php the_sub_field( 'titel_oranje-template' ); ?></span><span class="titelZwartOnderSliderTemplate"><?php the_sub_field( 'titel_zwart-template' ); ?></span></h3>
                <?php endwhile; ?>
            <?php endif; ?>
            <div class="informatieOnderSliderTemplateDiv">
                <hr class="oranjeLijnBovenInformatieTemplate">
                <span class="informatieOnderSliderTemplate"><?php the_field( 'informatie-template' ); ?></span>
            </div>
        </div>
    </div>
<?php endif; ?>
<?php if( get_field('grijze_blokjes-template') ): ?>
    <div class="herhalerGrijsVlak">
        <div class="herhalerGrijsVlak-inner">
            <?php if ( have_rows( 'grijze_blokjes-template' ) ) : ?>
                <?php while ( have_rows( 'grijze_blokjes-template' ) ) : the_row(); ?>
                    <div class="grijsVlakRepeater">
                        <?php if ( have_rows( 'titels_grijs_blok' ) ) : ?>
                            <?php while ( have_rows( 'titels_grijs_blok' ) ) : the_row(); ?>
                                <h6 class="titelGrijsVlakRepeater"><?php the_sub_field( 'titel_zwart-repeater-template' ); ?><span class="oranjeTitelRepeaterGrijsVlak"><?php the_sub_field( 'titel_oranje-repeater-template' ); ?></span><?php the_sub_field( 'titel_zwart-repeater-template_2' ); ?></h6>
                            <?php endwhile; ?>
                        <?php endif; ?>
                        <span class="infoGrijsVlakRepeater"><?php the_sub_field( 'informatieRepeater-template' ); ?></span>
                    </div>
                <?php endwhile; ?>
            <?php else : ?>
                <?php // No rows found ?>
            <?php endif; ?>
        </div>
    </div>
<?php endif; ?>
<div class="extraInformatie">
    <div class="extraInformatie-inner">
        <?php if ( have_rows( 'informatieRepeater-benedenTemplate' ) ) : ?>
            <?php while ( have_rows( 'informatieRepeater-benedenTemplate' ) ) : the_row(); ?>
                <?php if ( have_rows( 'titelsRepeater-benedenTemplate' ) ) : ?>
                    <?php while ( have_rows( 'titelsRepeater-benedenTemplate' ) ) : the_row(); ?>
                        <?php if( get_sub_field('titel_oranje-benedenTemplate') ): ?>
                            <h3 class="titelBenedenInfoTemplate"><span class="titelOranjeBenedenInfoTemplate"><?php the_sub_field( 'titel_oranje-benedenTemplate' ); ?></span><span class="titel_zwart-benedenTemplate"><?php the_sub_field( 'titel_zwart-benedenTemplate' ); ?></span></h3>
                            <hr class="oranjeStreepBenedenInfoTemplate">    
                        <?php endif; ?>  
                    <?php endwhile; ?>
                <?php endif; ?>
                <?php if ( have_rows( 'informatieRepeater-benedenTemplate2' ) ) : ?>
                    <?php while ( have_rows( 'informatieRepeater-benedenTemplate2' ) ) : the_row(); ?>
                        <div class="divTitelsExtraInformatie2">
                            <?php if( get_sub_field('titelOranjeLetter_benedenInformatie') ): ?>
                                <h3 class="titelOranjeBenedenInfo2"><?php the_sub_field( 'titelOranjeLetter_benedenInformatie' ); ?><span class="oranjePuntInformatieTemplate">.</span></h3>
                            <?php endif; ?>    
                            <span class="informatieBenedenInfo2"><?php the_sub_field( 'informatieoranjeletter-benedeninformatie' ); ?></span>
                        </div>
                    <?php endwhile; ?>
                <?php else : ?>
                    <?php // No rows found ?>
                <?php endif; ?>
            <?php endwhile; ?>
        <?php else : ?>
            <?php // No rows found ?>
        <?php endif; ?>
    </div>
</div>
<div class="vraagExtraInformatieAan-template">
    <div class="vraagExtraInformatieAan-template-inner">
        <hr class="grijzeStreep">
        <?php if( get_field('vraag_meer_informatie_aan_titel-template') ): ?>
            <h2 class="titelVraagMeerInfoAan-template"> <?php the_field( 'vraag_meer_informatie_aan_titel-template' ); ?><span class="oranjePunt">.</span></h2>
        <?php endif; ?>
        <span class="informatieVraagMeerInfoAan-template"><?php the_field( 'vraag_meer_informatie_aan_informatie-template' ); ?></span>
        <?php $button_vraagMeerInfoAan_template = get_field( 'button-vraagMeerInfoAan-template' ); ?>
        <?php if ( $button_vraagMeerInfoAan_template ) : ?>
            <a class="buttonVraagMeerInfoAan-template" href="<?php echo esc_url( $button_vraagMeerInfoAan_template['url'] ); ?>" target="<?php echo esc_attr( $button_vraagMeerInfoAan_template['target'] ); ?>"><?php echo esc_html( $button_vraagMeerInfoAan_template['title'] ); ?></a>
        <?php endif; ?>
    </div>
</div>

<?php get_footer(); ?>

