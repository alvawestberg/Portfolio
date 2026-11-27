<?php
	 //PHP-kod för att ta emot formulärdata


     // Sparar namn, e-post, ämne och meddelande
$name = $_POST["name"] ?? "";
$email = $_POST["email"] ?? "";
$subject = $_POST["subject"] ?? "";
$message = $_POST["message"] ?? "";

?>
<!--HTML-dokumentets grundstruktur-->

<!DOCTYPE html>
<html lang="sv">
<!-- Sidans inställningar och CSS-länk -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank you | Johanna Andersson</title>
    <link rel="stylesheet" href="style.css">
</head>
<!-- Sidhuvud med logotyp och navigeringsmeny -->
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
<!-- Huvudinnehåll med tackmeddelande -->
    <main class="contact">
        <h1 class="contact__title" data-js-target="thank-you-message">Thank you!</h1>

        <p>Hello <?php echo htmlspecialchars($name); ?>!</p>
        <!-- Rubrik som tackar besökaren -->

        <p>Thank you for contacting me.</p>
        <!-- Visar besökarens kontaktuppgifter och svar -->

        <p>Your email: <?php echo htmlspecialchars($email); ?></p>

        <p>Subject: <?php echo htmlspecialchars($subject); ?></p>

        <p>Your message: <?php echo htmlspecialchars($message); ?></p>

    <!-- Länk tillbaka till startsidan -->
        <a href="index.html">Back to home</a>
    </main>
    
   <!-- Footer -->
    <footer class="footer">
        <p>Johanna Andersson</p>
        <p>© 2026 / Portfolio</p>
    </footer>

</body>
</html>