<?php
add_action( 'wp_enqueue_scripts', 'enqueue_parent_styles' );

function enqueue_parent_styles() {
   wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );
}


add_filter( 'the_title', 'vv_modify_post_title',99 );
function vv_modify_post_title( $title ) {
    $replace = array(
        // 'WORD TO REPLACE' => 'REPLACE WORD WITH THIS'
        'ALERT' => '¯\_(ツ)_/¯',
    );
    $title = str_replace(array_keys($replace), $replace, $title);
    return $title;
}

function replace_text_wps($text){
    $replace = array(
        // 'WORD TO REPLACE' => 'REPLACE WORD WITH THIS'
        'ALERT' => '¯\_(ツ)_/¯',
    );
    $text = str_replace(array_keys($replace), $replace, $text);
    return $text;
}

add_filter('the_content', 'replace_text_wps',99);

?>