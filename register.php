<?php include('includes/header.php'); ?>
<div class="container">
    <h1>Register</h1>
    <?php
    include('includes/db.php');
    include('includes/functions.php');

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        register_user($name, $email, $password);
    } else {
        echo "<form method='post' action=''>
                <label for='name'>Name</label>
                <input type='text' name='name' required>
                <label for='email'>Email</label>
                <input type='email' name='email' required>
                <label for='password'>Password</label>
                <input type='password' name='password' required>
                <input type='submit' value='Register'>
            </form>";
    }
    ?>
</div>
<?php include('includes/footer.php'); ?>
