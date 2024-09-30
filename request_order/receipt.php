<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    $order = $_POST['order'];
    $quantity = (int)$_POST['quantity'];
    $cash = (float)$_POST['cash'];

    
    $prices = [
        'Burger' => 50,
        'Fries' => 75,
        'Steak' => 150
    ];

    
    $pricePerItem = $prices[$order];
    $totalPrice = $pricePerItem * $quantity;

    
    $change = $cash - $totalPrice;

    
    $date = date('Y/m/d H:i:s');

    
    if ($change < 0) {
        echo "<h2>Not enough cash! You need " . abs($change) . " more.</h2>";
    } else {
        
        echo "<h2>Receipt</h2>";
        echo "<p>Total Price: $$totalPrice</p>";
        echo "<p>Cash Paid: $$cash</p>";
        echo "<p>Change: $$change</p>";
        echo "<p>$date</p>";
    }
} else {
    echo "<h2>Invalid Request</h2>";
}

?>
