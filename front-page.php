<?php get_header(); ?>

<!--ABOUT SECTION-->
<?php if(Kirki::get_option('eventstheme_kirki_fields', 'about_select' ) === 'option-1') { ?>
    <section>
    <div id="about-section" class="container">
    <div class="row">
        <div class="col-md-12">
            <h2 style="color:<?php echo Kirki::get_option('eventstheme_kirki_fields', 'about_headers_color'); ?>; border-color:<?php echo Kirki::get_option('eventstheme_kirki_fields', 'about_headers_color'); ?>"><?php if ( Kirki::get_option('eventstheme_kirki_fields', 'about_headline_section' ) ) {
        $aboutus_headline = Kirki::get_option('eventstheme_kirki_fields', 'about_headline_section');
        echo $aboutus_headline;
        } ?></h2>
        </div>
    </div>
    <div class="row">
    <?php if(Kirki::get_option('eventstheme_kirki_fields', 'about_section_image')): ?>
         <div class="col-lg-6">
        <img src="<?php echo Kirki::get_option('eventstheme_kirki_fields', 'about_section_image'); ?>" class="img-fluid" />
        </div>
        <div class="col-lg-6 fix-text" style="color:<?php echo Kirki::get_option('eventstheme_kirki_fields', 'about_text_color'); ?>">
        <?php if ( Kirki::get_option('eventstheme_kirki_fields', 'about_editor_section' ) ) {
        $aboutus_editor_text = Kirki::get_option('eventstheme_kirki_fields', 'about_editor_section');
        echo $aboutus_editor_text;
        } ?>
        </div>
    <?php endif; ?>
    <?php if(Kirki::get_option('eventstheme_kirki_fields', 'about_section_image') === ''): ?>
        <div class="col-lg-12 fix-text" style="color:<?php echo Kirki::get_option('eventstheme_kirki_fields', 'about_text_color'); ?>">
        <?php if ( Kirki::get_option('eventstheme_kirki_fields', 'about_editor_section' ) ) {
        $aboutus_editor_text = Kirki::get_option('eventstheme_kirki_fields', 'about_editor_section');
        echo $aboutus_editor_text;
        } ?>
        </div>
    <?php endif; ?>
    </div>
    </div>
</section>
        <?php } ?>



<!--VIP SPEAKERS SECTION-->
<?php if(Kirki::get_option('eventstheme_kirki_fields', 'vip_speakers_select' ) === 'option-1') { ?>
    <section>
    <div id="vip-speakers-section" class="container">
    <div class="row">
        <div class="col-md-12">
            <h2 style="color:<?php echo Kirki::get_option('eventstheme_kirki_fields', 'vip_speakers_headers_color'); ?>"><?php if ( Kirki::get_option('eventstheme_kirki_fields', 'vip_speakers_headline_section' ) ) {
        $vip_headline = Kirki::get_option('eventstheme_kirki_fields', 'vip_speakers_headline_section');
        echo $vip_headline;
        } ?></h2>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 fix-text" style="color:<?php echo Kirki::get_option('eventstheme_kirki_fields', 'vip_speakers_text_color'); ?>">
        <?php if ( Kirki::get_option('eventstheme_kirki_fields', 'vip_speakers_editor_section' ) ) {
        $vip_editor_text = Kirki::get_option('eventstheme_kirki_fields', 'vip_speakers_editor_section');
        echo $vip_editor_text;
        } ?>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
        
        </div>
    </div>
    <div id="react-app"></div><!-- #react-app -->
    </div>

</section>
        <?php } ?>


<!--PARALLAX SECTION-->
<?php if(Kirki::get_option('eventstheme_kirki_fields', 'parallax_select' ) === 'option-1') { ?>
    <section>
<div id="parallax-section" class="container">
    <div id="parallax-text">
    <div class="row">
        <div class="col-md-12">
            <h2 style="color:<?php echo Kirki::get_option('eventstheme_kirki_fields', 'parallax_text_color'); ?>"><?php if ( Kirki::get_option('eventstheme_kirki_fields', 'parallax_headline_section' ) ) {
        $parallax_headline = Kirki::get_option('eventstheme_kirki_fields', 'parallax_headline_section');
        echo $parallax_headline;
        } ?></h2>
        </div>
    </div>
    <div class="row">
    <?php if(Kirki::get_option('eventstheme_kirki_fields', 'parallax_section_image')): ?>
         <div class="col-lg-6">
        <img src="<?php echo Kirki::get_option('eventstheme_kirki_fields', 'parallax_section_image'); ?>" class="img-fluid" />
        </div>
        <div class="col-lg-6 fix-text" style="color:<?php echo Kirki::get_option('eventstheme_kirki_fields', 'parallax_text_color'); ?>">
        <?php if ( Kirki::get_option('eventstheme_kirki_fields', 'parallax_editor_section' ) ) {
        $parallax_editor_text = Kirki::get_option('eventstheme_kirki_fields', 'parallax_editor_section');
        echo $parallax_editor_text;
        } ?>
        </div>
    <?php endif; ?>
    <?php if(Kirki::get_option('eventstheme_kirki_fields', 'parallax_section_image') === ''): ?>
        <div class="col-lg-12 fix-text" style="color:<?php echo Kirki::get_option('eventstheme_kirki_fields', 'parallax_text_color'); ?>">
        <?php if ( Kirki::get_option('eventstheme_kirki_fields', 'parallax_editor_section' ) ) {
        $parallax_editor_text = Kirki::get_option('eventstheme_kirki_fields', 'parallax_editor_section');
        echo $parallax_editor_text;
        } ?>
        </div>
    <?php endif; ?>
    </div>
    </div>
    </div>
</section>
        <?php } ?>



<!--PHOTOGALLERY SECTION-->
<?php if(Kirki::get_option('eventstheme_kirki_fields', 'photos_select' ) === 'option-1') { ?>
    <section>
    <div id="photos-section" class="container">
    <div class="row">
        <div class="col-md-12">
            <h2 style="color:<?php echo Kirki::get_option('eventstheme_kirki_fields', 'photos_text_color'); ?>"><?php if ( Kirki::get_option('eventstheme_kirki_fields', 'photos_headline_section' ) ) {
        $photos_headline = Kirki::get_option('eventstheme_kirki_fields', 'photos_headline_section');
        echo $photos_headline;
        } ?></h2>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
        <?php if ( function_exists( 'envira_gallery' ) ) { envira_gallery( 'event-gallery', 'slug' ); } ?>
        </div>
    </div>
    </div>
</section>
        <?php } ?>



<!--SPONSORS-->
<?php if(Kirki::get_option('eventstheme_kirki_fields', 'sponsors_select' ) === 'option-1') { ?>
    <section>
    <div id="sponsors-section" class="container">
    <div class="row">
        <div class="col-md-12">
            <h2 style="color:<?php echo Kirki::get_option('eventstheme_kirki_fields', 'sponsors_headers_color'); ?>"><?php if ( Kirki::get_option('eventstheme_kirki_fields', 'sponsors_headline_section' ) ) {
        $sponsors_headline = Kirki::get_option('eventstheme_kirki_fields', 'sponsors_headline_section');
        echo $sponsors_headline;
        } ?></h2>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 fix-text" style="color:<?php echo Kirki::get_option('eventstheme_kirki_fields', 'sponsors_text_color'); ?>">
        <?php if ( Kirki::get_option('eventstheme_kirki_fields', 'sponsors_editor_section' ) ) {
        $sponsors_text = Kirki::get_option('eventstheme_kirki_fields', 'sponsors_editor_section');
        echo $sponsors_text;
        } ?>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
        
        </div>
    </div>
    <div id="sponsors-app"></div><!-- #react-app -->
    </div>

</section>
        <?php } ?>

<!--MAP SECTION-->
<?php if(Kirki::get_option('eventstheme_kirki_fields', 'map_select' ) === 'option-1') { ?>
    <section>
    <div id="map-section" class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="mapouter">
                <div class="gmap_canvas">
                    <iframe src="https://maps.google.com/maps?q=<?php echo Kirki::get_option('eventstheme_kirki_fields', 'map_editor_section'); ?>&t=&z=13&ie=UTF8&iwloc=&output=embed" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>
                    </div>
        </div>
    </div>
    </div>
</section>
        <?php } ?>


<?php get_footer(); ?>