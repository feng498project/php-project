<!DOCTYPE html>
<html>
<head>
    <title>Contact Form</title>
</head>
<body>
    <h1>Contact Us</h1>
    <form method="POST" action="submit.php">
        <label>Name:</label><br>
        <input type="text" name="name" required><br><br>

        <label>Email:</label><br>
        <input type="email" name="email" required><br><br>

        <label>Message:</label><br>
        <textarea name="message" rows="5" required></textarea><br><br>

        <input type="submit" value="Send">
    </form>
</body>
</html>
