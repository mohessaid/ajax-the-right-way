<?php

include_once(__DIR__.'/layouts/header.php');


?>

<form method="post" id="my-form-id">
    <input type="hidden" name="product_id" id="product_id" value="random-value" >
    <input type="hidden" name="user_id" id="user_id" value="random-valuesd">

    <textarea name="comment" id="comment_input" cols="30" rows="10"></textarea>
    <input type="hidden" name="rating" id="rating">
    <input type="submit" name="c_submit" id="c_submit">
</form>
<ol id="comment"> </ol>


<?php include_once(__DIR__.'/layouts/footer.php'); ?>
