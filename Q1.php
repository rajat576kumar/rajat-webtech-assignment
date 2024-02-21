<?php

// Sample items in the cart with their prices
$cart = array(
    'item1' => 1500,
    'item2' => 3000,
    'item3' => 2000);
$totalPrice = array_sum($cart);
if ($totalPrice > 5000) {
    $discountedPrice = $totalPrice - ($totalPrice * 0.10);
    echo "Total Price: Rs. " . $totalPrice . "\n";
    echo "Discounted Price (10% off): Rs. " . $discountedPrice . "\n";
} 
else {
    echo "Total Price: Rs. " . $totalPrice . "\n";
    echo "No discount applied.\n";
}

?>