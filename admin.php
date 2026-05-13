<?php
session_start();
require_once 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password']; 

    $stmt = $pdo->prepare("SELECT * FROM admin_users WHERE username = ? AND password = ?");
    $stmt->execute([$username, $password]);
    $user = $stmt->fetch();

    if ($user) {
        $_SESSION['admin_logged_in'] = true;
        setcookie("admin_user", $username, time() + 3600, "/");
        header("Location: admin.php");
        exit;
    } else {
        $error = "Invalid login!";
    }
}

if (isset($_GET['logout'])) {
    session_destroy();
    setcookie("admin_user", "", time() - 3600, "/");
    header("Location: admin.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head><link rel="stylesheet" href="style.css"></head>
<body style="align-items: center; justify-content: center;">
    <div class="window">
        <div class="window-header">C:\PORTFOLIO\admin</div>
        <div class="window-content">
            <?php if (isset($_SESSION['admin_logged_in']) && $_SESSION['admin_logged_in'] === true): ?>
                <h2>Welcome to the Dashboard!</h2>
                <p>Current active cookie: <?php echo $_COOKIE['admin_user'] ?? 'None'; ?></p>
                <a href="admin.php?logout=true"><button>Log Out</button></a>
                <hr>
                <p>Forms for managing projects from the database can be added here.</p>
            <?php else: ?>
                <form method="POST">
                    <h3>System Login</h3>
                    <?php if(isset($error)) echo "<p style='color:red;'>$error</p>"; ?>
                    <input type="text" name="username" placeholder="Username (admin)" required>
                    <input type="password" name="password" placeholder="Password (12345)" required>
                    <button type="submit" name="login">LOGIN</button>
                </form>
            <?php endif; ?>
        </div>
    </div>
</body>
</html>