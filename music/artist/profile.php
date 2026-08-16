<?php
session_start();

if (!isset($_SESSION["user_id"])) {
    header("Location: ../../login.php");
    exit;
}

include '../../includes/header.php';
include '../../includes/navbar.php';
?>

<main>
    <h1>Artist Profile</h1>

    <p>
        Welcome,
        <strong>
            <?php echo htmlspecialchars($_SESSION["fullname"]); ?>
        </strong>!
    </p>

    <h2>Artist Dashboard</h2>

    <ul>
        <li><a href="profile.php">My Profile</a></li>
        <li><a href="upload.php">Upload Music</a></li>
        <li><a href="my-music.php">My Music</a></li>
        <li><a href="subscription.php">My Subscription</a></li>
        <li><a href="earnings.php">My Earnings</a></li>
        <li><a href="payout.php">Payout Account</a></li>
    </ul>
</main>

<?php include '../../includes/footer.php'; ?>
