<?php include('includes/header.php'); ?>
<div class="container">
    <h1>Checkout</h1>
    <?php
    session_start();
    include('includes/functions.php');

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $name = $_POST['name'];
        $address = $_POST['address'];
        $payment = $_POST['payment'];
        process_order($name, $address, $payment);
        echo "<p>Order processed successfully!</p>";
    } else {
        echo "<form method='post' action=''>
                <label for='name'>Name</label>
                <input type='text' name='name' required>
                <label for='address'>Address</label>
                <input type='text' name='address' required>
                <label for='payment'>Payment Method</label>
                <select name='payment'>
                    <option value='credit'>Credit Card</option>
                    <option value='paypal'>PayPal</option>
                </select>
                <input type='submit' value='Place Order'>
            </form>";
    }
    ?>
</div>
<?php include('includes/footer.php'); ?>
