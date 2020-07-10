<?php

//Load StyleSheets
function loadCSS() {
    wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), false, 'all');
    wp_enqueue_style('bootstrap');

    wp_register_style('main', get_template_directory_uri() . '/css/main.css', array(), false, 'all');
    wp_enqueue_style('main');
}
add_action('wp_enqueue_scripts', 'loadCSS');

//Load Google Fonts
function loadGoogleFonts() {
    wp_register_style('googlefonts1', 'https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&display=swap', true);
    wp_enqueue_style('googlefonts1');
    wp_register_style('googlefonts2', 'https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;700&display=swap', true);
    wp_enqueue_style('googlefonts2');
}
add_action('wp_enqueue_scripts', 'loadGoogleFonts');

//Load Javascript
function loadJS() {
    
    wp_enqueue_script( 'boot2','https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js', array('jquery'));
    wp_enqueue_script( 'boot3','https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js', array('jquery'));
    wp_enqueue_script( 'main-js', get_template_directory_uri() . '/js/scripts.js', array('jquery'));
}
add_action('wp_enqueue_scripts', 'loadJS');

//Fix for Screen Options
function fixOptions() {
    wp_register_script('scripts-js', get_template_directory_uri() . '/js/scripts.js', 'jquery', false, true);
    wp_enqueue_script('scripts-js');
}

add_action('admin_enqueue_scripts', 'fixOptions');

//Theme Options
add_theme_support('menus');
add_theme_support('post-thumbnails');
add_theme_support('widgets');

//Menus
register_nav_menus(
    array(
        'top-menu' => 'Top Menu Location',
    )
);

//CUSTOMIZER SET UP
include_once( dirname( __FILE__ ) . '/includes/kirki/kirki.php' );

function eventstheme_kirki_configuration() {
    return array( 'url_path'     => get_stylesheet_directory_uri() . '/includes/kirki/' );
}
add_filter( 'kirki/config', 'eventstheme_kirki_configuration' );


function eventstheme_kirki_sections( $wp_customize ) {
	/**
	 * Add panels
	 */
    $wp_customize->add_panel( 'sections', array(
		'priority'    => 20,
		'title'       => __( 'Front Page Sections', 'kirki' ),
    ) );

    $wp_customize->add_panel( 'pages', array(
		'priority'    => 30,
		'title'       => __( 'Additional Pages', 'kirki' ),
    ) );

	/**
	 * Add sections
	 */
     $wp_customize->add_section( 'header_background', array(
 		'title'       => __( 'Header Section', 'kirki' ),
         'priority'    => 10,
         'panel'       => 'sections',
     ) );
     
     $wp_customize->add_section( 'pages_settings', array(
        'title'       => __( 'Pages Settings', 'kirki' ),
        'priority'    => 10,
        'panel'       => 'pages',
    ) );

     $wp_customize->add_section( 'main_background', array(
 		'title'       => __( 'Main Background', 'kirki' ),
 		'priority'    => 20,
 		'panel'       => 'backgrounds',
 	) );

     
     $wp_customize->add_section( 'about_section', array(
        'title'       => __( 'About Section', 'kirki' ),
        'priority'    => 30,
        'panel'       => 'sections',
    ) );

    $wp_customize->add_section( 'vip_speakers_section', array(
        'title'       => __( 'VIP Speakers Section', 'kirki' ),
        'priority'    => 40,
        'panel'       => 'sections',
    ) );

    $wp_customize->add_section( 'parallax_section', array(
        'title'       => __( 'Parallax Section', 'kirki' ),
        'priority'    => 50,
        'panel'       => 'sections',
    ) );

    $wp_customize->add_section( 'photos_section', array(
        'title'       => __( 'Photogallery Section', 'kirki' ),
        'priority'    => 60,
        'panel'       => 'sections',
    ) );

    $wp_customize->add_section( 'sponsors_section', array(
        'title'       => __( 'Sponsors Section', 'kirki' ),
        'priority'    => 80,
        'panel'       => 'sections',
    ) );

    $wp_customize->add_section( 'map_section', array(
        'title'       => __( 'Map Section', 'kirki' ),
        'priority'    => 80,
        'panel'       => 'sections',
    ) );

    $wp_customize->add_section( 'footer_section', array(
        'title'       => __( 'Footer Section', 'kirki' ),
        'priority'    => 90,
        'panel'       => 'sections',
    ) );

    $wp_customize->add_section( 'social_media', array(
        'title'       => __( 'Social Media', 'kirki' ),
        'priority'    => 90,
        'panel'       => '',
    ) );

}
add_action( 'customize_register', 'eventstheme_kirki_sections' );

//SETTINGS FOR THE COUNTDOWN TIMER
function eventstheme_kirki_fields( $fields ) {
    $fields[] = array(
        'type'        => 'date',
        'settings'    => 'date_setting',
        'label'       => __( 'Countdown Timer', 'kirki' ),
        'description' => __( 'This is where you select your event date', 'kirki' ),
        'section'     => 'header_background',
        'priority'    => 11,
        'default'     => ''
    );


    //HEADER
    $fields[] = array(
        'type'        => 'background',
        'settings'    => 'header_background',
        'label'       => __( 'Choose your header background', 'kirki' ),
        'description' => __( 'The header background you specify here will apply to the header area, including your menus and your branding.', 'kirki' ),
        'section'     => 'header_background',
        'default'     => array(
            'color'    => 'rgba(25,170,141,0.7)',
            'image'    => '',
            'repeat'   => 'no-repeat',
            'size'     => 'cover',
            'attach'   => 'fixed',
            'position' => 'left-top',
        ),
        'priority'    => 10,
        'output'      => '#header'
    );

    $fields[] = array(
        'type'        => 'text',
        'settings'    => 'header_event_title',
        'label'       => __( 'Type your Event Title', 'kirki' ),
        'description' => __( 'This is where you add your Event Title', 'kirki' ),
        'section'     => 'header_background',
        'priority'    => 11,
        'default'     => ''
    );

    $fields[] = array(
        'type'        => 'color',
        'settings'    => 'header_event_color',
        'label'       => __( 'Choose the color for your event title', 'kirki' ),
        'description' => __( 'Pick Up Your Color', 'kirki' ),
        'section'     => 'header_background',
        'priority'    => 12,
        'default'     => '#000000'
    );

    $fields[] = array(
        'type'        => 'text',
        'settings'    => 'header_event_date',
        'label'       => __( 'Type your Event Date', 'kirki' ),
        'description' => __( 'This is where you add your Event Date', 'kirki' ),
        'section'     => 'header_background',
        'priority'    => 13,
        'default'     => ''
    );

    $fields[] = array(
        'type'        => 'color',
        'settings'    => 'header_event_date_color',
        'label'       => __( 'Choose the color for your event date', 'kirki' ),
        'description' => __( 'Pick Up Your Color', 'kirki' ),
        'section'     => 'header_background',
        'priority'    => 14,
        'default'     => '#000000'
    );

    $fields[] = array(
        'type'        => 'text',
        'settings'    => 'header_event_location',
        'label'       => __( 'Type your Event Location', 'kirki' ),
        'description' => __( 'This is where you add your Event Location', 'kirki' ),
        'section'     => 'header_background',
        'priority'    => 15,
        'default'     => ''
    );

    $fields[] = array(
        'type'        => 'color',
        'settings'    => 'header_event_location_color',
        'label'       => __( 'Choose the color for your event location', 'kirki' ),
        'description' => __( 'Pick Up Your Color', 'kirki' ),
        'section'     => 'header_background',
        'priority'    => 16,
        'default'     => '#000000'
    );

    $fields[] = array(
        'type'        => 'editor',
        'settings'    => 'header_editor_section',
        'label'       => __( 'Type your content', 'kirki' ),
        'description' => __( 'This is where you add your content being displayed inside the banner', 'kirki' ),
        'section'     => 'header_background',
        'priority'    => 17,
        'default'     => ''
    );

    $fields[] = array(
        'type'        => 'color',
        'settings'    => 'header_banner_text_color',
        'label'       => __( 'Choose the color for your text inside the banner', 'kirki' ),
        'description' => __( 'Pick Up Your Color', 'kirki' ),
        'section'     => 'header_background',
        'priority'    => 18,
        'default'     => '#000000'
    );

    $fields[] = array(
        'type'        => 'text',
        'settings'    => 'header_button_text',
        'label'       => __( 'Button Text', 'kirki' ),
        'description' => __( 'This is where you type the button text', 'kirki' ),
        'section'     => 'header_background',
        'priority'    => 19,
        'default'     => ''
    );

    $fields[] = array(
        'type'        => 'color',
        'settings'    => 'header_button_background_color',
        'label'       => __( 'Choose the color for the button background color', 'kirki' ),
        'description' => __( 'Pick Up Your Color', 'kirki' ),
        'section'     => 'header_background',
        'priority'    => 20,
        'default'     => '#000000'
    );

    $fields[] = array(
        'type'        => 'color',
        'settings'    => 'header_button_text_color',
        'label'       => __( 'Choose the color for your button text color', 'kirki' ),
        'description' => __( 'Pick Up Your Color', 'kirki' ),
        'section'     => 'header_background',
        'priority'    => 20,
        'default'     => '#000000'
    );

    //ABOUT SECTION
    $fields[] = array(
        'type'        => 'select',
        'settings'    => 'about_select',
        'label'       => __( 'To be Displayed', 'kirki' ),
        'description' => __( 'Here you can choose to display or not this section', 'kirki' ),
        'section'     => 'about_section',
        'priority'    => 8,
        'default'     => 'option-1',
        'multiple'    => 1,
        'choices'     => [
            'option-1' => esc_html__('Yes', 'kirki'),
            'option-2' => esc_html__('No', 'kirki'),
        ]
    );

    $fields[] = array(
        'type'        => 'text',
        'settings'    => 'about_headline_section',
        'label'       => __( 'Type your Headline', 'kirki' ),
        'description' => __( 'This is where you add your headline', 'kirki' ),
        'section'     => 'about_section',
        'priority'    => 9,
        'default'     => ''
    );

    $fields[] = array(
        'type'        => 'editor',
        'settings'    => 'about_editor_section',
        'label'       => __( 'Type your content', 'kirki' ),
        'description' => __( 'This is where you add your content', 'kirki' ),
        'section'     => 'about_section',
        'priority'    => 10,
        'default'     => ''
    );

    $fields[] = array(
        'type'        => 'image',
        'settings'    => 'about_section_image',
        'label'       => __( 'Choose Your Photo for this section', 'kirki' ),
        'description' => __( 'Upload Your Image', 'kirki' ),
        'section'     => 'about_section',
        'priority'    => 12,
        'default'     => ''
    );

    $fields[] = array(
        'type'        => 'color',
        'settings'    => 'about_headers_color',
        'label'       => __( 'Choose the color for the header color', 'kirki' ),
        'description' => __( 'Pick Up Your Color', 'kirki' ),
        'section'     => 'about_section',
        'priority'    => 11,
        'default'     => '#000000'
    );

    $fields[] = array(
        'type'        => 'color',
        'settings'    => 'about_text_color',
        'label'       => __( 'Choose the color for the text color', 'kirki' ),
        'description' => __( 'Pick Up Your Color', 'kirki' ),
        'section'     => 'about_section',
        'priority'    => 11,
        'default'     => '#000000'
    );

    $fields[] = array(
        'type'        => 'background',
        'settings'    => 'about_background',
        'label'       => __( 'Choose the background for this section', 'kirki' ),
        'description' => __( 'The background you specify here will apply to this section area.', 'kirki' ),
        'section'     => 'about_section',
        'default'     => array(
            'color'    => 'rgba(25,170,141,0.7)',
            'image'    => '',
            'repeat'   => 'no-repeat',
            'size'     => 'cover',
            'attach'   => 'fixed',
            'position' => 'left-top',
        ),
        'priority'    => 13,
        'output'      => '#about-section'
    );

    //VIP SPEAKERS SECTION
    $fields[] = array(
        'type'        => 'select',
        'settings'    => 'vip_speakers_select',
        'label'       => __( 'To be Displayed', 'kirki' ),
        'description' => __( 'Here you can choose to display or not this section', 'kirki' ),
        'section'     => 'vip_speakers_section',
        'priority'    => 8,
        'default'     => 'option-1',
        'multiple'    => 1,
        'choices'     => [
            'option-1' => esc_html__('Yes', 'kirki'),
            'option-2' => esc_html__('No', 'kirki'),
        ]
    );

    $fields[] = array(
        'type'        => 'text',
        'settings'    => 'vip_speakers_headline_section',
        'label'       => __( 'Type your Headline', 'kirki' ),
        'description' => __( 'This is where you add your headline', 'kirki' ),
        'section'     => 'vip_speakers_section',
        'priority'    => 9,
        'default'     => ''
    );

    $fields[] = array(
        'type'        => 'editor',
        'settings'    => 'vip_speakers_editor_section',
        'label'       => __( 'Type your content', 'kirki' ),
        'description' => __( 'This is where you add your content', 'kirki' ),
        'section'     => 'vip_speakers_section',
        'priority'    => 10,
        'default'     => ''
    );

    $fields[] = array(
        'type'        => 'color',
        'settings'    => 'vip_speakers_headers_color',
        'label'       => __( 'Choose the color for the header', 'kirki' ),
        'description' => __( 'Pick Up Your Color', 'kirki' ),
        'section'     => 'vip_speakers_section',
        'priority'    => 11,
        'default'     => '#000000'
    );

    $fields[] = array(
        'type'        => 'color',
        'settings'    => 'vip_speakers_text_color',
        'label'       => __( 'Choose the color for this section text', 'kirki' ),
        'description' => __( 'Pick Up Your Color', 'kirki' ),
        'section'     => 'vip_speakers_section',
        'priority'    => 11,
        'default'     => '#000000'
    );

    $fields[] = array(
        'type'        => 'background',
        'settings'    => 'vip_speakers_background',
        'label'       => __( 'Choose the background for this section', 'kirki' ),
        'description' => __( 'The background you specify here will apply to this section area.', 'kirki' ),
        'section'     => 'vip_speakers_section',
        'default'     => array(
            'color'    => 'rgba(25,170,141,0.7)',
            'image'    => '',
            'repeat'   => 'no-repeat',
            'size'     => 'cover',
            'attach'   => 'fixed',
            'position' => 'left-top',
        ),
        'priority'    => 13,
        'output'      => '#vip-speakers-section'
    );

    //PARALLAX SECTION
    $fields[] = array(
        'type'        => 'select',
        'settings'    => 'parallax_select',
        'label'       => __( 'To be Displayed', 'kirki' ),
        'description' => __( 'Here you can choose to display or not this section', 'kirki' ),
        'section'     => 'parallax_section',
        'priority'    => 8,
        'default'     => 'option-1',
        'multiple'    => 1,
        'choices'     => [
            'option-1' => esc_html__('Yes', 'kirki'),
            'option-2' => esc_html__('No', 'kirki'),
        ]
    );

    $fields[] = array(
        'type'        => 'background',
        'settings'    => 'parallax_background',
        'label'       => __( 'Choose the background for this section', 'kirki' ),
        'description' => __( 'The background you specify here will apply to this section area.', 'kirki' ),
        'section'     => 'parallax_section',
        'default'     => array(
            'color'    => 'rgba(25,170,141,0.7)',
            'image'    => '',
            'repeat'   => 'no-repeat',
            'size'     => 'cover',
            'attach'   => 'fixed',
            'position' => 'left-top',
        ),
        'priority'    => 9,
        'output'      => '#parallax-section'
    );

    $fields[] = array(
        'type'        => 'text',
        'settings'    => 'parallax_headline_section',
        'label'       => __( 'Type your Headline', 'kirki' ),
        'description' => __( 'This is where you add your headline', 'kirki' ),
        'section'     => 'parallax_section',
        'priority'    => 10,
        'default'     => ''
    );

    $fields[] = array(
        'type'        => 'editor',
        'settings'    => 'parallax_editor_section',
        'label'       => __( 'Type your content', 'kirki' ),
        'description' => __( 'This is where you add your content', 'kirki' ),
        'section'     => 'parallax_section',
        'priority'    => 11,
        'default'     => ''
    );

    $fields[] = array(
        'type'        => 'color',
        'settings'    => 'parallax_text_color',
        'label'       => __( 'Choose the color for this section text', 'kirki' ),
        'description' => __( 'Pick Up Your Color', 'kirki' ),
        'section'     => 'parallax_section',
        'priority'    => 12,
        'default'     => '#000000'
    );

    $fields[] = array(
        'type'        => 'background',
        'settings'    => 'parallax_text_background_color',
        'label'       => __( 'Choose the color for the background of your text', 'kirki' ),
        'description' => __( 'Pick Up Your Color', 'kirki' ),
        'section'     => 'parallax_section',
        'priority'    => 13,
        'default'     => [
            'background-color'      => 'rgba(255,255,255,.8)',
            'background-image'      => '',
            'background-repeat'     => 'repeat',
            'background-position'   => 'center center',
            'background-size'       => 'cover',
            'background-attachment' => 'scroll',
        ],
        'output'      => '#parallax-text'
    );

    $fields[] = array(
        'type'        => 'image',
        'settings'    => 'parallax_section_image',
        'label'       => __( 'Choose Your Photo for this section', 'kirki' ),
        'description' => __( 'Upload Your Image', 'kirki' ),
        'section'     => 'parallax_section',
        'priority'    => 14,
        'default'     => ''
    );

    //PHOTOGALLERY SECTION
    $fields[] = array(
        'type'        => 'select',
        'settings'    => 'photos_select',
        'label'       => __( 'To be Displayed', 'kirki' ),
        'description' => __( 'Here you can choose to display or not this section', 'kirki' ),
        'section'     => 'photos_section',
        'priority'    => 8,
        'default'     => 'option-1',
        'multiple'    => 1,
        'choices'     => [
            'option-1' => esc_html__('Yes', 'kirki'),
            'option-2' => esc_html__('No', 'kirki'),
        ]
    );

    $fields[] = array(
        'type'        => 'background',
        'settings'    => 'photogallery_background_color',
        'label'       => __( 'Choose the color for the background of your text', 'kirki' ),
        'description' => __( 'Pick Up Your Color', 'kirki' ),
        'section'     => 'photos_section',
        'priority'    => 13,
        'default'     => [
            'background-color'      => 'rgba(255,255,255,.8)',
            'background-image'      => '',
            'background-repeat'     => 'repeat',
            'background-position'   => 'center center',
            'background-size'       => 'cover',
            'background-attachment' => 'scroll',
        ],
        'output'      => '#photos-section'
    );

    $fields[] = array(
        'type'        => 'text',
        'settings'    => 'photos_headline_section',
        'label'       => __( 'Type your Headline', 'kirki' ),
        'description' => __( 'This is where you add your headline', 'kirki' ),
        'section'     => 'photos_section',
        'priority'    => 14,
        'default'     => ''
    );

    $fields[] = array(
        'type'        => 'color',
        'settings'    => 'photos_text_color',
        'label'       => __( 'Choose the color for this section text', 'kirki' ),
        'description' => __( 'Pick Up Your Color', 'kirki' ),
        'section'     => 'photos_section',
        'priority'    => 15,
        'default'     => '#000000'
    );



//SPONSOR SECTION
    $fields[] = array(
        'type'        => 'select',
        'settings'    => 'sponsors_select',
        'label'       => __( 'To be Displayed', 'kirki' ),
        'description' => __( 'Here you can choose to display or not this section', 'kirki' ),
        'section'     => 'sponsors_section',
        'priority'    => 8,
        'default'     => 'option-1',
        'multiple'    => 1,
        'choices'     => [
            'option-1' => esc_html__('Yes', 'kirki'),
            'option-2' => esc_html__('No', 'kirki'),
        ]
    );

    $fields[] = array(
        'type'        => 'text',
        'settings'    => 'sponsors_headline_section',
        'label'       => __( 'Type your Headline', 'kirki' ),
        'description' => __( 'This is where you add your headline', 'kirki' ),
        'section'     => 'sponsors_section',
        'priority'    => 9,
        'default'     => ''
    );

    $fields[] = array(
        'type'        => 'editor',
        'settings'    => 'sponsors_editor_section',
        'label'       => __( 'Type your content', 'kirki' ),
        'description' => __( 'This is where you add your content', 'kirki' ),
        'section'     => 'sponsors_section',
        'priority'    => 10,
        'default'     => ''
    );

    $fields[] = array(
        'type'        => 'color',
        'settings'    => 'sponsors_headers_color',
        'label'       => __( 'Choose the color for the header', 'kirki' ),
        'description' => __( 'Pick Up Your Color', 'kirki' ),
        'section'     => 'sponsors_section',
        'priority'    => 11,
        'default'     => '#000000'
    );

    $fields[] = array(
        'type'        => 'color',
        'settings'    => 'sponsors_text_color',
        'label'       => __( 'Choose the color for this section text', 'kirki' ),
        'description' => __( 'Pick Up Your Color', 'kirki' ),
        'section'     => 'sponsors_section',
        'priority'    => 11,
        'default'     => '#000000'
    );

    $fields[] = array(
        'type'        => 'background',
        'settings'    => 'sponsors_background',
        'label'       => __( 'Choose the background for this section', 'kirki' ),
        'description' => __( 'The background you specify here will apply to this section area.', 'kirki' ),
        'section'     => 'sponsors_section',
        'default'     => array(
            'color'    => 'rgba(25,170,141,0.7)',
            'image'    => '',
            'repeat'   => 'no-repeat',
            'size'     => 'cover',
            'attach'   => 'fixed',
            'position' => 'left-top',
        ),
        'priority'    => 13,
        'output'      => '#sponsors-section'
    );



    //MAP SECTION
    $fields[] = array(
        'type'        => 'select',
        'settings'    => 'map_select',
        'label'       => __( 'To be Displayed', 'kirki' ),
        'description' => __( 'Here you can choose to display or not this section', 'kirki' ),
        'section'     => 'map_section',
        'priority'    => 8,
        'default'     => 'option-1',
        'multiple'    => 1,
        'choices'     => [
            'option-1' => esc_html__('Yes', 'kirki'),
            'option-2' => esc_html__('No', 'kirki'),
        ]
    );

    $fields[] = array(
        'type'        => 'text',
        'settings'    => 'map_editor_section',
        'label'       => __( 'Type the vue Address', 'kirki' ),
        'description' => __( 'This is where you add your event address', 'kirki' ),
        'section'     => 'map_section',
        'priority'    => 10,
        'default'     => ''
    );

    //FOOTER SECTION
    $fields[] = array(
        'type'        => 'select',
        'settings'    => 'footer_select',
        'label'       => __( 'To be Displayed', 'kirki' ),
        'description' => __( 'Here you can choose to display or not this section', 'kirki' ),
        'section'     => 'footer_section',
        'priority'    => 8,
        'default'     => 'option-1',
        'multiple'    => 1,
        'choices'     => [
            'option-1' => esc_html__('Yes', 'kirki'),
            'option-2' => esc_html__('No', 'kirki'),
        ]
    );

    $fields[] = array(
        'type'        => 'editor',
        'settings'    => 'footer_editor_section',
        'label'       => __( 'Type your content', 'kirki' ),
        'description' => __( 'This is where you add your content', 'kirki' ),
        'section'     => 'footer_section',
        'priority'    => 10,
        'default'     => ''
    );

    $fields[] = array(
        'type'        => 'color',
        'settings'    => 'footer_text_color',
        'label'       => __( 'Choose the color for this section text', 'kirki' ),
        'description' => __( 'Pick Up Your Color', 'kirki' ),
        'section'     => 'footer_section',
        'priority'    => 11,
        'default'     => '#000000'
    );

    $fields[] = array(
        'type'        => 'background',
        'settings'    => 'footer_background',
        'label'       => __( 'Choose the background for this section', 'kirki' ),
        'description' => __( 'The background you specify here will apply to this section area.', 'kirki' ),
        'section'     => 'footer_section',
        'default'     => array(
            'color'    => 'rgba(25,170,141,0.7)',
            'image'    => '',
            'repeat'   => 'no-repeat',
            'size'     => 'cover',
            'attach'   => 'fixed',
            'position' => 'left-top',
        ),
        'priority'    => 13,
        'output'      => '#footer-section'
    );

    //SOCIAL MEDIA

    $fields[] = array(
        'type'        => 'multicheck',
        'settings'    => 'social_media_checks',
        'label'       => __( 'Social Media to be displayed in the footer', 'kirki' ),
        'description' => __( 'Pick Up Your Social Media', 'kirki' ),
        'section'     => 'social_media',
        'priority'    => 11,
        'default'     => '',
        'choices'     => [
            'facebook' => esc_html__( 'Facebook', 'kirki' ),
            'twitter' => esc_html__( 'Twitter', 'kirki' ),
            'instagram' => esc_html__( 'Instagram', 'kirki' ),
            'pinterest' => esc_html__( 'Pinterest', 'kirki' ),
            'youtube' => esc_html__( 'Youtube', 'kirki' ),
        ],
    );

    $fields[] = array(
        'type'        => 'text',
        'settings'    => 'facebook_link',
        'label'       => __( 'Type your Facebook Link', 'kirki' ),
        'description' => __( 'This is where you add your facebook link', 'kirki' ),
        'section'     => 'social_media',
        'priority'    => 12,
        'default'     => ''
    );

    $fields[] = array(
        'type'        => 'text',
        'settings'    => 'twitter_link',
        'label'       => __( 'Type your Twitter Link', 'kirki' ),
        'description' => __( 'This is where you add your Twitter link', 'kirki' ),
        'section'     => 'social_media',
        'priority'    => 13,
        'default'     => ''
    );

    $fields[] = array(
        'type'        => 'text',
        'settings'    => 'instagram_link',
        'label'       => __( 'Type your Instagram Link', 'kirki' ),
        'description' => __( 'This is where you add your Instagram link', 'kirki' ),
        'section'     => 'social_media',
        'priority'    => 14,
        'default'     => ''
    );

    $fields[] = array(
        'type'        => 'text',
        'settings'    => 'pinterest_link',
        'label'       => __( 'Type your Pinterest Link', 'kirki' ),
        'description' => __( 'This is where you add your Pinterest link', 'kirki' ),
        'section'     => 'social_media',
        'priority'    => 15,
        'default'     => ''
    );

    $fields[] = array(
        'type'        => 'text',
        'settings'    => 'youtube_link',
        'label'       => __( 'Type your Youtube Link', 'kirki' ),
        'description' => __( 'This is where you add your Youtube link', 'kirki' ),
        'section'     => 'social_media',
        'priority'    => 15,
        'default'     => ''
    );

    $fields[] = array(
        'type'        => 'background',
        'settings'    => 'pages_background',
        'label'       => __( 'Choose the background for all pages (except front page)', 'kirki' ),
        'description' => __( 'The background you specify here will apply to all pages except the front page.', 'kirki' ),
        'section'     => 'pages_settings',
        'default'     => array(
            'color'    => 'rgba(25,170,141,0.7)',
            'image'    => '',
            'repeat'   => 'no-repeat',
            'size'     => 'cover',
            'attach'   => 'fixed',
            'position' => 'left-top',
        ),
        'priority'    => 13,
        'output'      => '#pages'
    );
    return $fields;

}
add_filter( 'kirki/fields', 'eventstheme_kirki_fields' );


add_action( 'init', function() {
    remove_post_type_support( 'spaekers_list', 'editor' );
    remove_post_type_support( 'agenda_module', 'editor' );
    remove_post_type_support( 'sponsors', 'editor' );
}, 99);

// Enqueue Theme JS w React Dependency
add_action( 'wp_enqueue_scripts', 'my_enqueue_theme_js' );
function my_enqueue_theme_js() {
  wp_enqueue_script(
    'my-theme-frontend',
    get_stylesheet_directory_uri() . '/build/index.js',
    ['wp-element'],
    time(), // Change this to null for production
    true
  );
}

add_filter( 'FHEE__EED_Event_Single__template_include__allow_custom_selected_template', '__return_true' );