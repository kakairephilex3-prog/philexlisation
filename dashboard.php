<?php
session_start();

if (!isset($_SESSION["user_id"])) {
    header("Location: login.php");
    exit;
}

include 'includes/header.php';
include 'includes/navbar.php';
?>

<main>
    <h1>User Dashboard</h1>

    <p>
        Welcome,
        <strong>
            <?php echo htmlspecialchars($_SESSION["fullname"]); ?>
        </strong>!
    </p>

    <p>
        You are logged in as:
        <strong>
            <?php echo htmlspecialchars($_SESSION["role"]); ?>
        </strong>
    </p>

    <h2>Quick Access</h2>

    <ul>
        <li><a href="church/">Church Media</a></li>
        <li><a href="musi<?php
session_start();

if (!isset($_SESSION["user_id"])) {
    header("Location: login.php");
    exit;
}

include 'includes/header.php';
include 'includes/navbar.php';
?>

<main>
    <h1>User Dashboard</h1>

    <p>
        Welcome,
        <strong>
            <?php echo htmlspecialchars($_SESSION["fullname"]); ?>
        </strong>!
    </p>

    <p>
        You are logged in as:
        <strong>
            <?php echo htmlspecialchars($_SESSION["role"]); ?>
        </strong>
    </p>

    <h2>Quick Access</h2>

    <ul>
        <li><a href="church/">Church Media</a></li>
        <li><a href="music/">Music Platform</a></li>
        <li><a href="marketplace/">Marketplace</a></li>
        <li><a href="business/">Business Directory</a></li>
        <li><a href="academy/">ICT Academy</a></li>
        <li><a href="school/">School Management</a></li>
        <li><a href="news/">News Center</a></li>
        <li><a href="ai/">AI Assistant</a></li>
    </ul>

    <p>
        <a href="logout.php">Logout</a>
    </p>
</main>

<?php include 'includes/footer.php'; ?>c/">Music Platform</a></li>
        <li><a href="marketplace/">Marketplace</a></li>
        <li><a href="business/">Business Directory</a></li>
        <li><a href="academy/">ICT Academy</a></li>
        <li><a href="school/">School Management</a></li>
        <li><a href="news/">News Center</a></li>
        <li><a href="ai/">AI Assistant</a></li>
    </ul>

    <p>
        <a href="logout.php">Logout</a>
    </p>
</main>

<?php include 'includes/footer.php'; ?>
