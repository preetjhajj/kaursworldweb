<?php 
add_action('admin_menu', 'addname_page_menu');

function addname_page_menu(){
    add_menu_page('List of Names', 'List of Names', 'administrator', 'addnamesetting', 'addnamelist');
}
function addnamelist(){
    global $wpdb;
    global $table_prefix;
    $tablename = $table_prefix.'addname';
    $sql = "SELECT * FROM $tablename";
    $gettabledata = $wpdb->get_results($sql);
    if($gettabledata){
        echo "<h2>Database Custom Data</h2><table border='1'><tr><th>Roll Number</th><th>Name</th></tr>";
        foreach($gettabledata as $result) {
            echo "<tr><td>".$result->id."</td><td>".$result->name."</td></tr>";
        }
        echo "</table>";
        
    } else{
        echo "<p>No Data Entry</p>";
    }
    include( plugin_dir_path( __FILE__ ) . 'adddata.php');
    
    }

?>