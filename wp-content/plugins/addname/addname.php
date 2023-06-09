<?php
/*
Plugin Name: Addname
Description: This plugin used to add data in the database.
Author: Kaur's World
Author URI: https://kaursworld.com
Plugin URI: https://kaursworld.com/about/
Version: 1.0
*/

//If file called directly, abort
if(!defined('WPINC')){
    die;
}
//Constants Defined
if(!defined('ADDNAME_VERSION')){
    define('ADDNAME_VERSION', '1.0.0');
}
if(!defined('ADDNAME_PATH')){
    define('ADDNAME_PATH', plugin_dir_path( __FILE__ ));
}
register_activation_hook(__FILE__, 'addnamefunc_active');
register_deactivation_hook(__FILE__, 'addnamefunc_deactivate');
function addnamefunc_active(){
    global $wpdb;
    global $table_prefix;
    $tablename = $table_prefix.'addname';
    $sql = "CREATE TABLE $tablename (`id` INT NOT NULL AUTO_INCREMENT , `name` VARCHAR(500) NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;";
   $wpdb->query($sql);
}
function addnamefunc_deactivate(){
    global $wpdb;
    global $table_prefix;
    $tablename = $table_prefix.'addname';
    $sql = "DROP TABLE $tablename";
   $wpdb->query($sql);
}
include( plugin_dir_path( __FILE__ ) . 'enqueuefiles.php');

include( plugin_dir_path( __FILE__ ) . 'showtable.php');


