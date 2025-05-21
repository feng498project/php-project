<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);
    $message = htmlspecialchars($_POST["message"]);

    echo "<h2>Thank you, $name!</h2>";
    echo "<p>We have received your message:</p>";
    echo "<pre>$message</pre>";
    echo "<p>We will reply to: $email</p>";
} else {
    echo "<p>Invalid request.</p>";
}
?>
