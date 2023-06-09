<?php

//echo $timeup;
function register_my_plugin_scripts() {
    $timeup = time();
    wp_register_style( 'addnamestyle', plugins_url('/css/style.css?v='.$timeup, __FILE__  ) );
    wp_register_script( 'addnamejs', plugins_url('/js/main.js?v='.$timeup, __FILE__  ) , array('jquery'), '1.0', true);
}
add_action( 'admin_enqueue_scripts', 'register_my_plugin_scripts' );
    
function load_my_plugin_scripts( $hook ) {
    if( $hook != 'toplevel_page_addnamesetting' ) {
        return;
    }
    wp_enqueue_style( 'addnamestyle' );
    wp_enqueue_script( 'addnamejs' );
    wp_localize_script( 'addnamejs', 'addnamejs_url',
            array( 'ajax_url' => admin_url( 'admin-ajax.php' ) ) );
   // wp_localize_script( 'addnamejs', 'addnamejs_url', array( 'ajax_url' => admin_url( 'admin-ajax.php' ) ) );
}
add_action( 'admin_enqueue_scripts', 'load_my_plugin_scripts' );
?>