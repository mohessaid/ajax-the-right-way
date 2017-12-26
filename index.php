<?php
session_start();
if (empty($_SESSION["id"]))
    $_SESSION["id"] = md5(null);
    
include_once(__DIR__.'/layouts/header.php');


?>

<form id="info_form" class="form-horizontal">
    <input type="hidden" name="product_id" id="product_id" value="<?= md5(null); ?>" >
    <input type="hidden" name="user_id" id="user_id" value="<?= $_SESSION["id"]; ?>">

    <textarea name="comment" id="comment_input" cols="30" rows="10"></textarea>
    <input type="hidden" name="rating" id="rating" value=1>
    <input type="submit" name="c_submit" id="c_submit">
</form>
<ol id="comment"> </ol>


<?php include_once(__DIR__.'/layouts/footer.php'); ?>
