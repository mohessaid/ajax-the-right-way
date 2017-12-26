<?php
$product_id = $_POST['product_id'];     
$user_id = $_POST['user_id'];
$comment = $_POST['comment'];           
$rating = $_POST['rating'];

?>

<li class="box">
    <?= '<span class="email">' . $product_id. '</span>' ?>
    <?= '<span class="comment">' . $comment . '</span>' ?>
</li>