<?php
require_once 'config/database.php';

$message = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $fullname = trim($_POST["fullname"] ?? "");
    $email = trim($_POST["email"] ?? "");
    $password = $_POST["password"] ?? "";
    $confirm_password = $_POST["confirm_password"] ?? "";

    if ($password !== $confirm_password) {
        $message = "Passwords do not match.";
    } else {
        try {
            // Check whether email already exists
            $check = $pdo->prepare("SELECT id FROM users WHERE email = ?");
            $check->execute([$email]);

            if ($check->fetch()) {
                $message = "That email is already registered.";
            } else {
                // Securely hash the password
                $hashed_password = password_hash($password, PASSWORD_DEFAULT);

                // Save the user
                $stmt = $pdo->prepare(
                    "INSERT INTO users (fullname, email, password, role)
                     VALUES (?, ?, ?, 'visitor')"
                );

                $stmt->execute([
                    $fullname,
                    $email,
                    $hashed_password
                ]);

                $message = "Registration successful! You can now log in.";
            }

        } catch (PDOException $e) {
            $message = "Registration failed. Please try again.";
        }
    }
}
?>

<?php include 'includes/header.php'; ?>
<?php include 'includes/navbar.php'; ?>

<main>
    <h1>Create an Account</h1>

    <?php if ($message): ?>
        <p><?php echo htmlspecialchars($message); ?></p>
    <?php endif; ?>

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

    <p>
        Already have an account?
        <a href="login.php">Login here</a>.
    </p>
</main>

<?php include 'includes/footer.php'; ?>
