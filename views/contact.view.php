<?php 

include "../partials/header.php"; 

// On requiert notre fichier php_mailer.php qui contient les constantes pour la configuration du serveur SMTP
// ainsi que autoload.php qui permet de charger les classes PHPMailer
require_once '../config/php_mailer.php';
require_once '../vendor/autoload.php';

?>

<h1>Page de contact</h1>

<section id="contact">

 <form action="">
    <div id="message">
        
        <label for="email">Email</label>
        <input type="email" name="email" type="email" placeholder="example@gmail.com" required>

        <label for="subject">Subject</label>
        <input type="subject" name="subject" type="text" placeholder="What is it about" required>

        <label for="message">Your message</label>
        <textarea id="name" cols="30" rows="10" placeholder="Write something.."></textarea>

    
        <input class=submit type="submit" value="Submit">
    </div>
    </form>
</section>

    <!-- Si $error existe, on l'affiche dans un <p> -->
    <?php if (isset($error)) : ?>
        <p class="error"><?= $error ?></p>
    <?php endif ?>

<?php

require_once '../controllers/contact.php';

include "../partials/footer.php"; ?>