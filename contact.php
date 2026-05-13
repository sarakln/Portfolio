<?php
include("includes/db.php");
include("includes/header.php");

if(isset($_POST['send'])){

    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    mysqli_query($conn, "INSERT INTO contacts(name,email,message)
    VALUES('$name','$email','$message')");

    echo "Message sent!";
}
?>

<h1>Contact Me</h1>

<form method="POST">
    <input type="text" name="name" placeholder="Name" required><br><br>
    <input type="email" name="email" placeholder="Email" required><br><br>
    <textarea name="message" placeholder="Message" required></textarea><br><br>
    <button type="submit" name="send">Send</button>
</form>

<?php include("includes/footer.php"); ?>