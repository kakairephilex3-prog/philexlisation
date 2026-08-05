<?php include 'includes/header.php'; ?>
<?php include 'includes/navbar.php'; ?>

<main>
    <h1>Create an Account</h1>

    <form action="" method="POST">
        <label>Full Name</label><br>
        <input type="text" name="fullname" required><br><br>

        <label>Email</label><br>
        <input type="email" name="email" required><br><br>

        <label>Password</label><br>
        <input type="password" name="password" required><br><br>

        <label>Confirm Password</label><br>
        <input type="password" name="confirm_password" required><br><br>

        <button type="submit">Register</button>
    </form>

    <p>Already have an account? <a href="login.php">Login here</a>.</p>
</main>

<?php include 'includes/footer.php'; ?>
