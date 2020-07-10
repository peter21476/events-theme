<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta property="og:title" content="Events Theme" />
    <meta property="og:description" content="A custom Wordpress theme designed for event management" />
    <meta property="og:image" content="//wpevents.site/wp-content/themes/events-theme/img/eventsthemefaceboook.jpg" />
    <title>Events Theme</title>

    <?php wp_head() ?>

</head>
<body>
<div class="body-inner">
<header>
    <div class="mobile-header">
        <h1 style="color:<?php echo Kirki::get_option('eventstheme_kirki_fields', 'header_event_color'); ?>"><?php if ( Kirki::get_option('eventstheme_kirki_fields', 'header_event_title' ) ) {
        $headerOne_text = Kirki::get_option('eventstheme_kirki_fields', 'header_event_title');
        echo $headerOne_text;
        } ?></h1>
        <div class="mobile-toggler"><i class="fas fa-bars"></i></div>
    </div>
    <div class="container event-details remove-margin-padding">
        <div class="row">
            <div class="col-lg-6">
            <h1 style="color:<?php echo Kirki::get_option('eventstheme_kirki_fields', 'header_event_color'); ?>"><?php if ( Kirki::get_option('eventstheme_kirki_fields', 'header_event_title' ) ) {
                    $headerOne_text = Kirki::get_option('eventstheme_kirki_fields', 'header_event_title');
                    echo $headerOne_text;
                    } ?></h1>
            <div class="mobile-toggler"><i class="fas fa-toggle-on"></i></div>
            </div>
            <div class="col-lg-6">
            <h3 style="color:<?php echo Kirki::get_option('eventstheme_kirki_fields', 'header_event_location_color'); ?>"><i class="fas fa-map-marker-alt"></i>
                <?php
                    $subtext = Kirki::get_option('eventstheme_kirki_fields', 'header_event_location');
                    if($subtext != '') {
                        echo $subtext;
                    } else {
                        echo "Edit this by going to your...";
                    }
                ?>
            </h3>
            <h2 style="color:<?php echo Kirki::get_option('eventstheme_kirki_fields', 'header_event_date_color'); ?>"><i class="fas fa-calendar-alt"></i>
                <?php
                    $subtext = Kirki::get_option('eventstheme_kirki_fields', 'header_event_date');
                    if($subtext != '') {
                        echo $subtext;
                    } else {
                         echo "Edit this by going to your...";
                    }
                ?>
            </h2>
            <div id="countdown"></div>
            </div>
        </div>
    </div>
    <div class="container menu-container">
        <div class="row">
            <div class="col-lg-12">
            <?php 
                    wp_nav_menu (
                        array (
                            'theme_location'=> 'top-menu' ,
                            'menu_class' => 'top-bar'
                        )
                    );
                ?>
            </div>
        </div>
    </div>
    <div class="container hero-container remove-margin-padding">
        <div id="header" class="background-image">
            <div class="header-overlay"></div>
            <div class="row">
                <div class="col-lg-7 header-text-wrapper" style="color:<?php echo Kirki::get_option('eventstheme_kirki_fields', 'header_banner_text_color'); ?>">
                <?php if ( Kirki::get_option('eventstheme_kirki_fields', 'header_editor_section' ) ) {
                    $headerTwo_text = Kirki::get_option('eventstheme_kirki_fields', 'header_editor_section');
                    echo $headerTwo_text;
                    } ?>
                </div>
                <div class="col-lg-5 header-register-button">
                    <a href="https://wpevents.site/events/test-event/" class="btn btn-register" style="background-color:<?php echo Kirki::get_option('eventstheme_kirki_fields', 'header_button_background_color'); ?>; color:<?php echo Kirki::get_option('eventstheme_kirki_fields', 'header_button_text_color'); ?>"><?php if ( Kirki::get_option('eventstheme_kirki_fields', 'header_button_text' ) ) {
                    $headerButton_text = Kirki::get_option('eventstheme_kirki_fields', 'header_button_text');
                    echo $headerButton_text;
                    } ?></a>
                </div>
            </div>
            <p id="event-date"><?php
                    $date = Kirki::get_option('eventstheme_kirki_fields', 'date_setting');
                    if($date != '') {
                        echo $date;
                    } else {
                        echo "Edit this by going to your...";
                    }
                ?></p>
        </div>
    </div>
</header>