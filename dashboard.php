<?php
session_start();
include 'includes/header.php';
include 'includes/navbar.php';
?>

<main>
    <h1>User Dashboard</h1>

    <p>Welcome to <strong>Philexlisation</strong>.</p>

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
</main>

<?php include 'includes/footer.php'; ?>
