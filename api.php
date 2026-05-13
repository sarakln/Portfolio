<?php
session_start(); 


$host = 'localhost'; 
$dbname = 'portfolio_db'; 
$username = 'root';       
$password = '';           

try {
  
$pdo = new PDO("mysql:host=$host;port=3307;dbname=$dbname;charset=utf8", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Database connection error: " . $e->getMessage());
}

$action = $_POST['action'] ?? '';

if ($action === 'sendMessage') {
    $name = trim($_POST['name'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $message = trim($_POST['message'] ?? '');

    if (!empty($name) && !empty($email) && !empty($message)) {
        $stmt = $pdo->prepare("INSERT INTO messages (name, email, message) VALUES (?, ?, ?)");
        if ($stmt->execute([$name, $email, $message])) {
            echo "Your message has been sent successfully!";
        } else {
            echo "An error occurred, the message could not be saved.";
        }
    } else {
        echo "Please fill in all fields.";
    }
    exit;
}

if ($action === 'login') {
    $user = trim($_POST['username'] ?? '');
    $pass = trim($_POST['password'] ?? '');

   
    $stmt = $pdo->prepare("SELECT * FROM admin WHERE username = ? AND password = ?");
    $stmt->execute([$user, $pass]);
    $admin = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($admin) {
        $_SESSION['admin_logged_in'] = true;
        $_SESSION['admin_user'] = $admin['username'];
        
        echo "SUCCESS";
    } else {
        // GİRİŞ BAŞARISIZ
        echo "<span style='color: #d97736;'>Incorrect username or password!</span>";
    }
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'GET' && ($_GET['action'] ?? '') === 'getProjects') {
    try {
        $stmt = $pdo->query("SELECT * FROM projects ORDER BY id ASC");
        $projects = $stmt->fetchAll(PDO::FETCH_ASSOC);
        
        header('Content-Type: application/json');
        echo json_encode($projects);
    } catch (PDOException $e) {
        echo json_encode(["error" => $e->getMessage()]);
    }
    exit;
}
?>