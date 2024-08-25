<?php 

// Register the foodifly panel
new \Kirki\Panel(
    'foodifly_panel',
    [
        'priority'    => 10,
        'title'       => esc_html__( 'Foodifly Options', 'foodifly' ),
        'description' => esc_html__( 'Foodifly Panel Description.', 'foodifly' ),
    ]
);

// Register header logo options
function foodifly_header_logo_section( ) {
    new \Kirki\Section(
        'foodifly_header_logo',
        [
            'title'       => esc_html__( 'Header Logo', 'foodifly' ),
            'description' => esc_html__( 'Foodifly Header Logo options', 'foodifly' ),
            'panel'       => 'foodifly_panel',
            'priority'    => 160,
        ]
    );

    new \Kirki\Field\Image(
        [
            'settings'    => 'logo_image_url',
            'label'       => esc_html__( 'Logo Image (URL)', 'foodifly' ),
            'description' => esc_html__( 'Change the logo image URL. The value will be the URL.', 'foodifly' ),
            'section'     => 'foodifly_header_logo',
            'default'     => get_template_directory_uri() . '/assets/images/img/logo.png',
        ]
    );
}
foodifly_header_logo_section();
// Register offcanvas menu options
// function foodifly_offcanvas_menu_section( ) {
//     new \Kirki\Section(
//         'foodifly_offcanvas_menu_section',
//         [
//             'title'       => esc_html__( 'Offcanvas Menu', 'foodifly' ),
//             'description' => esc_html__( 'Foodifly Offcanvas Menu options', 'foodifly' ),
//             'panel'       => 'foodifly_panel',
//             'priority'    => 170,
//         ]
//     );

//     new \Kirki\Field\Image(
//         [
//             'settings'    => 'offcanvas_logo_image_url',
//             'label'       => esc_html__( 'Offcanvas Logo Image (URL)', 'foodifly' ),
//             'description' => esc_html__( 'Change the offcanvas logo image URL. The value will be the URL.', 'foodifly' ),
//             'section'     => 'foodifly_offcanvas_menu_section',
//             'default'     => get_template_directory_uri() . '/assets/images/img/logo.png',
//         ]
//     );
// }
// foodifly_offcanvas_menu_section();
// Register footer Logo options
function foodifly_footer_logo_section( ) {
    new \Kirki\Section(
        'foodifly_footer_logo',
        [
            'title'       => esc_html__( 'Footer Logo', 'foodifly' ),
            'description' => esc_html__( 'Foodifly Footer Logo options', 'foodifly' ),
            'panel'       => 'foodifly_panel',
            'priority'    => 160,
        ]
    );

    new \Kirki\Field\Image(
        [
            'settings'    => 'footer_logo_image_url',
            'label'       => esc_html__( 'Logo Image (URL)', 'foodifly' ),
            'description' => esc_html__( 'Change the logo image URL. The value will be the URL.', 'foodifly' ),
            'section'     => 'foodifly_footer_logo',
            'default'     => get_template_directory_uri() . '/assets/images/img/logo-footer.png',
        ]
    );
}
foodifly_footer_logo_section();
// Register footer Social
function foodifly_footer_section( ) {
    new \Kirki\Section(
        'foodifly_footer_section',
        [
            'title'       => esc_html__( 'Footer Copyright Text', 'foodifly' ),
            'description' => esc_html__( 'Footer Section Description.', 'foodifly' ),
            'panel'       => 'foodifly_panel',
            'priority'    => 180,
        ]
    );

    new \Kirki\Field\Text(
        [
            'settings' => 'footer_copyright',
            'label'    => esc_html__( 'Footer Copyright Text', 'foodifly' ),
            'section'  => 'foodifly_footer_section',
            'default'  => esc_html__( '2021 Mezban Design By FoxCoders', 'foodifly' ),
            'priority' => 10,
        ]
    );
}
foodifly_footer_section();

function foodifly_footer_social_section() {
    
	// section 02
	new \Kirki\Section(
		'foodifly_footer_social_section',
		[
			'title'       => esc_html__( 'Footer Social', 'foodifly' ),
			'description' => esc_html__( 'My Footer Social info.', 'foodifly' ),
			'panel'       => 'foodifly_panel',
			'priority'    => 160,
		]
	);
	new \Kirki\Field\Text(
		[
			'settings' => 'footer_facebook_url',
			'label'    => esc_html__( 'Facebook URL', 'foodifly' ),
			'section'  => 'foodifly_footer_social_section',
			'default'  => esc_html__( '#', 'foodifly' ),
			'priority' => 10,
		]
	);
	new \Kirki\Field\Text(
		[
			'settings' => 'footer_twitter_url',
			'label'    => esc_html__( 'twitter URL', 'foodifly' ),
			'section'  => 'foodifly_footer_social_section',
			'default'  => esc_html__( '#', 'foodifly' ),
			'priority' => 10,
		]
	);
	new \Kirki\Field\Text(
		[
			'settings' => 'footer_linkedin_url',
			'label'    => esc_html__( 'linkedin URL', 'foodifly' ),
			'section'  => 'foodifly_footer_social_section',
			'default'  => esc_html__( '#', 'foodifly' ),
			'priority' => 10,
		]
	);
	new \Kirki\Field\Text(
		[
			'settings' => 'footer_vimeo_url',
			'label'    => esc_html__( 'vimeo URL', 'foodifly' ),
			'section'  => 'foodifly_footer_social_section',
			'default'  => esc_html__( '#', 'foodifly' ),
			'priority' => 10,
		]
	);
	}
foodifly_footer_social_section();
