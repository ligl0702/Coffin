<?php

function coffin_enqueue_scripts() {
    global $wp_styles,$pagenow,$wp_query;;

    $timer = @filemtime(TEMPLATEPATH .'/build/css/app.css');
    $jstimer = @filemtime(TEMPLATEPATH .'/build/js/application.js');
    wp_enqueue_style('app', get_template_directory_uri() . '/build/css/app.css' , array(), $timer , 'screen');
    //wp_enqueue_script( 'app', '/_/fp/js/application.js' , array(), $jstimer , true );

    $this_user = wp_get_current_user();

    wp_localize_script('app', 'obvInit', array(
        'api' => get_rest_url(),
        'nonce' =>wp_create_nonce('wp_rest'),
        'user' => $this_user->ID,
        'permalink' => get_permalink(),
        'id' => get_the_ID(),
        'single' => is_single(),
        'preview' => is_preview(),
        // 'webp' => fa_is_support_webp(),
        'hash' => COOKIEHASH,
    ));

}
add_action( 'wp_enqueue_scripts', 'coffin_enqueue_scripts' );