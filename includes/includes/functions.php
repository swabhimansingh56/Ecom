<?php
function add_to_cart($product_id) {
    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = [];
    }
    if (isset($_SESSION['cart'][$product_id])) {
        $_SESSION['cart'][$product_id]++;
    } else {
        $_SESSION['cart'][$product_id] = 1;
    }
}

function get_cart_items() {
    global $conn;
    $cart_items = [];
    if (isset($_SESSION['cart'])) {
        foreach ($_SESSION['cart'] as $product_id => $quantity) {
            $result = mysqli_query($conn, "SELECT * FROM products WHERE id = $product_id");
            $product = mysqli_fetch_assoc($result);
            $product['quantity'] = $quantity;
            $cart_items[] = $product;
        }
    }
    return $cart_items;
}

function calculate_total_price($cart_items) {
    $total = 0;
    foreach ($cart_items as $item) {
        $total += $item['price'] * $item['quantity'];
    }
    return $total;
}

function process_order($name, $address, $payment) {
    // Process order logic (e.g., save order to database, send email, etc.)
}

function login_user($email, $password) {
    global $conn;
    $result = mysqli_query($conn, "SELECT * FROM users WHERE email = '$email'");
    $user = mysqli_fetch_assoc($result);
    if (password_verify($password, $user['password'])) {
        $_SESSION['user_id'] = $user['id'];
        header("Location: index.php");
    } else {
        echo "Invalid email or password.";
    }
}

function register_user($name, $email, $password) {
    global $conn;
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);
    mysqli_query($conn, "INSERT INTO users (name, email, password) VALUES ('$name', '$email', '$hashed_password')");
    header("Location: login.php");
}
?>
