<?php include('includes/header.php'); ?>
<div class="container">
    <h1>Products</h1>
    <div class="products">
        <?php
        include('includes/db.php');
        $result = mysqli_query($conn, "SELECT * FROM products");
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<div class='product'>
                    <img src='images/{$row['image']}' alt='{$row['name']}'>
                    <h2>{$row['name']}</h2>
                    <p>\${$row['price']}</p>
                    <a href='product.php?id={$row['id']}'>View Product</a>
                </div>";
        }
        ?>
    </div>
</div>
<?php include('includes/footer.php'); ?>
