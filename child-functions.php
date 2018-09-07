add_action( 'wp_enqueue_scripts', 'ido_enqueue_parent_styles' );

function enqueue_parent_styles() {
   wp_enqueue_style( 'parent-style', get_template_directory_uri().'/bkup.css' );
}

add_action( 'wp_enqueue_scripts', 'ido_enqueue_parent_styles' );

function enqueue_parent_styles() {
   wp_enqueue_style( 'parent-style', get_template_directory_uri().'/fancybox.css' );
}

add_action( 'wp_enqueue_scripts', 'ido_enqueue_parent_styles' );

function enqueue_parent_styles() {
   wp_enqueue_style( 'parent-style', get_template_directory_uri().'/flexslider.css' );
}

add_action( 'wp_enqueue_scripts', 'ido_enqueue_parent_styles' );

function enqueue_parent_styles() {
   wp_enqueue_style( 'parent-style', get_template_directory_uri().'/foundation-responsive.css' );
}

add_action( 'wp_enqueue_scripts', 'ido_enqueue_parent_styles' );

function enqueue_parent_styles() {
   wp_enqueue_style( 'parent-style', get_template_directory_uri().'/ie7-style.css' );
}

add_action( 'wp_enqueue_scripts', 'ido_enqueue_parent_styles' );

function enqueue_parent_styles() {
   wp_enqueue_style( 'parent-style', get_template_directory_uri().'/jquery.fancybox-thumbs.css' );
}

add_action( 'wp_enqueue_scripts', 'ido_enqueue_parent_styles' );

function enqueue_parent_styles() {
   wp_enqueue_style( 'parent-style', get_template_directory_uri().'/nivoslider.css' );
}

add_action( 'wp_enqueue_scripts', 'ido_enqueue_parent_styles' );

function enqueue_parent_styles() {
   wp_enqueue_style( 'parent-style', get_template_directory_uri().'/superfish.css' );
}
