<?php


function add_bootstrap_css_js() {

    wp_enqueue_style('wwwizard_css', get_theme_file_uri('/build/index.css'));
    wp_enqueue_style( 'googlefonts', 'https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap' );
    
    wp_enqueue_script( 'popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js', array('jquery'), '1.0', true );
    wp_enqueue_script( 'whatsapp', 'https://apps.elfsight.com/p/platform.js', array('jquery'), '1.0', true );
  
    wp_enqueue_script( 'particles', 'https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js', array('jquery'), '1.0', true );
    wp_enqueue_script( 'lottie', 'https://cdnjs.cloudflare.com/ajax/libs/bodymovin/5.10.2/lottie.min.js', array('jquery'), '1.0', true );
}
add_action( 'wp_enqueue_scripts', 'add_bootstrap_css_js' );



    
function arke_scripts() {
    wp_enqueue_style( 'arke-style', get_stylesheet_uri(), array(), '1.1.1' );
    
    wp_enqueue_script('wp-bootstrap-starter-bootstrapjs', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js', array(), '', true );
    wp_enqueue_style( 'wp-bootstrap-starter-bootstrap-css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css' );

    wp_enqueue_style( 'stylesheet', 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css');

    wp_enqueue_script('wwwizard-js', get_theme_file_uri('/build/index.js'), array('jquery'), '1.0', true);

   

    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
    wp_enqueue_script( 'comment-reply' );
    }
    
    }
    add_action( 'wp_enqueue_scripts', 'arke_scripts' );