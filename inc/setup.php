<?php

function coffin_setup(){

}

add_theme_support( 'title-tag' );

add_theme_support( 'post-thumbnails' );

register_nav_menus( array(
    'top'    => 'Top Menu',
) );

add_theme_support( 'html5', array(
    'comment-form',
    'comment-list',
    'gallery',
    'caption',
) );
