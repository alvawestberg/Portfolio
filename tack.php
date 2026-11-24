<?php

$name = $_POST["name"] ?? "";
$email = $_POST["email"] ?? "";
$subject = $_POST["subject"] ?? "";
$message = $_POST["message"] ?? "";

?>

<!DOCTYPE html>
<html lang="sv">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank you | Johanna Andersson</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <header class="header">
        <a class="header__logo" href="index.html">JA.</a>
        <nav class="header__nav" aria-label="Huvudmeny">
            <a href="index.html">Home page</a>
            <a href="om-mig.html" aria-current="page">About me</a>
            <a href="kompetenser.html">Competencies</a>
            <a href="projekt.html">My projects</a>
            <a href="utbildning.html">Education & Experience</a>
            <a href="karriarmal.html">Career</a>
            <a href="kontakt.html">Contact</a>
        </nav>
    </header>

    <main class="contact">
        <h1 class="contact__title">Thank you!</h1>

        <p>Hello <?php echo htmlspecialchars($name); ?>!</p>

        <p>Thank you for contacting me.</p>

        <p>Your email: <?php echo htmlspecialchars($email); ?></p>

        <p>Subject: <?php echo htmlspecialchars($subject); ?></p>

        <p>Your message: <?php echo htmlspecialchars($message); ?></p>

        <a href="index.html">Back to home</a>
    </main>

    <footer class="footer">
        <p>Johanna Andersson</p>
        <p>© 2026 / Portfolio</p>
    </footer>

</body>
</html>