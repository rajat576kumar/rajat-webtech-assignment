<?php
$totalOrderAmount = 1200; 
if ($totalOrderAmount > 1000) {
    echo "Congratulations! You qualify for a discount.\n";
    echo "Discount will be applied to your order.\n";
}
 else {
    echo "Sorry, no discount available for orders under Rs. 1000.\n";
}

?>