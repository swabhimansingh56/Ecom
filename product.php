<?php include('includes/header.php'); ?>
<div class="container">
    <?php
    include('includes/db.php');
    $product_id = $_GET['id'];
    $result = mysqli_query($conn, "SELECT * FROM products WHERE id = $product_id");
    $product = mysqli_fetch_assoc($result);
    ?>
    <div class="product">
        <img src="images/<?php echo $product['image']; ?>" alt="<?php echo $product['name']; ?>">
        <h2><?php echo $product['name']; ?></h2>
        <p><?php echo $product['description']; ?></p>
        <p>$<?php echo $product['price']; ?></p>
        <a href="cart.php?add=<?php echo $product['id']; ?>">Add to Cart</a>
    </div>
</div>
<?php include('includes/footer.php'); ?>
