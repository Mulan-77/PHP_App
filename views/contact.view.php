<?php 

include "../partials/header.php"; 
 
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



<?php include "../partials/footer.php"; ?>