<form id="entry-form">
  <input type="text" name="name" placeholder="Enter name" required>
  <button type="submit">Submit</button>
</form>
<?php

function add_wp_ajax_function(){
//DO whatever you want with data posted
//To send back a response you have to echo the result!
echo $_POST['name'];
//echo "success";
wp_die(); // ajax call must die to avoid trailing 0 in your response
}
add_action( "wp_ajax_add_wp_ajax_function", "add_wp_ajax_function" );
add_action( "wp_ajax_nopriv_add_wp_ajax_function", "add_wp_ajax_function" );
    ?>