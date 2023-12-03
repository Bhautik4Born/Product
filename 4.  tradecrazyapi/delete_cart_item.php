<?php

include "include/config.php";
if (isset($_POST['cart_item_id'])) {
    $cart_item_id = mysqli_real_escape_string($con, $_POST['cart_item_id']);

    $delete_query = "DELETE FROM market_cart WHERE id = $cart_item_id";

    if (mysqli_query($con, $delete_query)) {
        echo 'Cart item deleted successfully';
    } else {
        echo 'Error deleting cart item: ' . mysqli_error($con);
    }
} else {
    echo 'Invalid request';
}
mysqli_close($con);
?>
