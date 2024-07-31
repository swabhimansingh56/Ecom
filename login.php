<?php include('includes/header.php'); ?>
<div class="container">
    <h1>Login</h1>
    <?php
    session_start();
    include('includes/db.php');
    include('includes/functions.php');

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $email = $_POST['email'];
        $password = $_POST['password'];
        login_user($email, $password);
    } else {
        echo "<form method='post' action=''>
                <label for='email'>Email</label>
                <input type='email' name='email' required>
                <label for='password'>Password</label>
                <input type='password' name='password' required>
                <input type='submit' value='Login'>
            </form>";
    }
    ?>
</div>
<?php include('includes/footer.php'); ?>
