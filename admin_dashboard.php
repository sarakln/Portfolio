<?php
session_start();

if (!isset($_SESSION['admin_logged_in']) || $_SESSION['admin_logged_in'] !== true) {
    header("Location: index.php");
    exit;
}

$host = 'localhost'; 
$dbname = 'portfolio_db';
$username = 'root';
$password = '';

try {
    $pdo = new PDO("mysql:host=$host;port=3307;dbname=$dbname;charset=utf8", $username, $password);
} catch (PDOException $e) {
    die("Database error!");
}

$stmt = $pdo->query("SELECT * FROM messages ORDER BY id DESC");
$messages = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Admin Dashboard | C:\SYSTEM</title>
    <style>
        body { 
            background: #fdfaf3; 
            font-family: 'Courier New', monospace; 
            color: #4a5441; 
            padding: 40px; 
            margin: 0;
        }
        .dashboard-container {
            max-width: 900px;
            margin: 0 auto;
        }
        .header { 
            display: flex; 
            justify-content: space-between; 
            align-items: center; 
            border-bottom: 2px dashed #78866b; 
            padding-bottom: 20px; 
            margin-bottom: 30px; 
        }
        h1 { color: #d97736; margin: 0; font-weight: 900; }
        .logout-btn { 
            background: #78866b; 
            color: white; 
            padding: 10px 20px; 
            text-decoration: none; 
            border-radius: 4px; 
            font-weight: bold;
            box-shadow: 2px 2px 0px rgba(120, 134, 107, 0.3);
            transition: transform 0.1s;
        }
        .logout-btn:hover { transform: translateY(2px); box-shadow: none; }
        table { 
            width: 100%; 
            border-collapse: collapse; 
            background: white; 
            border: 2px solid #d4cbb3;
            box-shadow: 6px 6px 0px rgba(120, 134, 107, 0.15); 
        }
        th, td { padding: 15px; border-bottom: 1px dashed #e8e3d3; text-align: left; }
        th { background: #e8e3d3; color: #d97736; font-size: 16px; border-bottom: 2px solid #d4cbb3;}
        tr:hover { background-color: #fffcf5; }
    </style>
</head>
<body>

<div class="dashboard-container">
    <div class="header">
        <h1>> SYSTEM_DASHBOARD</h1>
        <div style="display:flex; align-items:center; gap: 20px;">
            <span style="font-weight:bold;">Welcome, <?= htmlspecialchars($_SESSION['admin_user']) ?>_</span>
            <a href="logout.php" class="logout-btn">LOGOUT</a>
        </div>
    </div>
    
    <h3 style="color: #78866b;">📁 INBOX (Contact Messages)</h3>
    
    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Message</th>
            <th>Date</th>
        </tr>
        <?php if(count($messages) > 0): ?>
            <?php foreach($messages as $msg): ?>
            <tr>
                <td style="font-weight: bold; color: #d97736;">#<?= $msg['id'] ?></td>
                <td><?= htmlspecialchars($msg['name']) ?></td>
                <td><?= htmlspecialchars($msg['email']) ?></td>
                <td><?= htmlspecialchars($msg['message']) ?></td>
                <td style="font-size: 12px; color: #999;"><?= $msg['created_at'] ?></td>
            </tr>
            <?php endforeach; ?>
        <?php else: ?>
            <tr>
                <td colspan="5" style="text-align:center; padding: 30px; color: #999;">No messages found in the database.</td>
            </tr>
        <?php endif; ?>
    </table>
</div>

</body>
</html>