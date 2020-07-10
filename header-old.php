<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta property="og:title" content="Events Theme" />
    <meta property="og:description" content="A custom Wordpress theme desidgned for restaurants" />
    <meta property="og:image" content="//wprestaurant.site/wp-content/themes/restaurant-theme/img/rsthemefacebook.jpg" />
    <title>Events Theme</title>

    <?php wp_head() ?>

</head>
<body>
<div class="body-inner">
<header>
    <div class="container menu-wrapper">
        <div class="row">
            <div class="col-lg-3 logo">
            <img src="<?php echo Kirki::get_option('eventstheme_kirki_fields', 'header_logo'); ?>" class="img-fluid" />
            <div class="mobile-toggler"><i class="fas fa-toggle-on"></i></div>
            </div>
            <div class="col-lg-9">
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
            <div class="header-intro">
                <div class="header-text">
                <h1><?php if ( Kirki::get_option('eventstheme_kirki_fields', 'header_event_title' ) ) {
                    $headerOne_text = Kirki::get_option('eventstheme_kirki_fields', 'header_event_title');
                    echo $headerOne_text;
                    } ?></h1>
                    <h2><?php
                    $subtext = Kirki::get_option('eventstheme_kirki_fields', 'header_event_date');
                    if($subtext != '') {
                        echo $subtext;
                    } else {
                        echo "Edit this by going to your...";
                    }
                ?>
                    </h2>
                    <h3>
                        <?php
                        $subtext = Kirki::get_option('eventstheme_kirki_fields', 'header_event_location');
                        if($subtext != '') {
                            echo $subtext;
                        } else {
                            echo "Edit this by going to your...";
                        }
                        ?>
                    </h3>

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
            <div id="countdown"></div>
        </div>
    </div>
</header>