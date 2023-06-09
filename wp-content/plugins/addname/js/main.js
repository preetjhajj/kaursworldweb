jQuery(document).ready(function($){
    $("#entry-form").submit(function(e){
        e.preventDefault();
        var formData = $(this).serialize();
        console.log(formData);
        $.ajax({
            type: 'POST',
            dataType: "json",
            url: ajaxurl,
            data: {
                action: 'add_wp_ajax_function',
                data: formData
              },
            success: function(response) {
                // Handle the response from the server
                console.log(response); // You can customize this based on your needs
              },
              error: function(xhr, status, error) {
                // Handle any errors that occur during the AJAX request
                console.error(error); // You can customize this based on your needs
              }
        })
    })
})