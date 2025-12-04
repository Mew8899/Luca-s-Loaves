<?php
// Processes/processShoppingCart.php

session_start();

/*
 * This file expects these files to exist:
 *   Processes/dbConnect.php          -> function dbConnect() returns mysqli connection
 *   Processes/OrderItem.php          -> class OrderItem (you already have)
 *   Processes/lucasLoavesFunctions.php
 *        -> functions:
 *             addItemsToOrder($dbc)
 *             recordOrderItem($orderItem)
 */

require_once 'dbConnect.php';
require_once 'OrderItem.php';
require_once 'lucasLoavesFunctions.php';

// 1. Connect to database
$dbc = dbConnect();   // change if your function name is different

// 2. Make sure the cart array exists in the session
if (!isset($_SESSION['ARRAY_ORDERS']) || !is_array($_SESSION['ARRAY_ORDERS'])) {
    $_SESSION['ARRAY_ORDERS'] = [];
}

// 3. Only process if the request came from a valid form
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // This covers both:
    //  - JOIN_CLASS button (bread making class)
    //  - SHOPPINGCART button (product details page)
    if (isset($_POST['SHOPPINGCART']) || isset($_POST['JOIN_CLASS'])) {

        // Add the item from the form into the ARRAY_ORDERS session
        addItemsToOrder($dbc);

        // Get the last added item so JS / totals can be updated
        $lastItem = end($_SESSION['ARRAY_ORDERS']);

        if ($lastItem instanceof OrderItem) {
            // Build JS string + GRAND_TOTAL etc.
            recordOrderItem($lastItem);

            // Store number of items in cart (for the badge on navbar)
            $_SESSION['NUMBER_OF_ITEMS_BOUGHT'] = count($_SESSION['ARRAY_ORDERS']);
        }
    }
}

// 4. Close DB connection (optional but good practice)
if ($dbc instanceof mysqli) {
    mysqli_close($dbc);
}

// 5. Redirect user to the Shopping Cart page
//    from /Processes/ up one level to /shoppingCart.php
header('Location: ../shoppingCart.php');
exit;
