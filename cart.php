<?php include('includes/header.php'); ?>
<div class="container">
    <h1>Shopping Cart</h1>
    <?php
    session_start();
    include('includes/db.php');
    include('includes/functions.php');

    if (isset($_GET['add'])) {
        $product_id = $_GET['add'];
        add_to_cart($product_id);
    }

    $cart_items = get_cart_items();
    if (count($cart_items) > 0) {
        echo "<table>
                <tr>
                    <th>Product</th>
                    <th>Quantity</th>
                    <th>Price</th>
                </tr>";
        foreach ($cart_items as $item) {
            echo "<tr>
                    <td>{$item['name']}</td>
                    <td>{$item['quantity']}</td>
                    <td>\${$item['price']}</td>
                </tr>";
        }
        echo "</table>";
        echo "<p>Total: $" . calculate_total_price($cart_items) . "</p>";
        echo "<a href='checkout.php'>Proceed to Checkout</a>";
    } else {
        echo "<p>Your cart is empty.</p>";
    }
    ?>
</div>
<?php include('includes/footer.php'); ?>
