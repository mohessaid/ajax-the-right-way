(function($) {
    $(document).ready(function() {
        $(document).on('submit', 'my-form-id', function(e) {
            console.log("heloo")
            // Add this line.
            e.preventDefault();

            var product_id = $("#product_id").val();
            var user_id = $("#user_id").val();
            var comment = $("#comment_input").val();
            var rating = $("#rating").val();

            var data = {
               product_id: product_id,
               user_id: user_id,
               comment: comment,
               rating: rating
            };

            if (product_id == '' || user_id == '' || comment == '' || rating == '') {
                alert('Please Give Valid Details');
            }
            else {
                $.ajax({
                    type: "POST",
                    url: "api.php",
                    data: data,
                    cache: false,
                    success: function(html) {
                        console.log(html);
                        $("ol#comment").append(html);
                        $("ol#comment li:last").fadeIn("slow");
                    }

                });
            }
        });
    });

})(window.jQuery);
