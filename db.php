<?php
// localhost yerine 127.0.0.1 kullanıyoruz
$host = '127.0.0.1'; 
$dbname = 'portfolio_db'; // Kendi oluşturduğun veritabanı adı
$username = 'root';       // XAMPP varsayılan kullanıcı adı
$password = '';           // XAMPP varsayılan şifresi boştur (tırnak içi boş kalacak)

try {
    $pdo = new PDO("mysql:host=$host;port=3307;dbname=$dbname;charset=utf8", $username, $password);
    // Hata modunu açıyoruz ki bir sorun olursa detayını görebilelim
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Veritabanı bağlantı hatası: " . $e->getMessage());
}
?>