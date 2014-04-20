<?php if ($_GET['s'] == 'success') { ?>
  <p>Thank you. Your message has been sent successfully!</p>
<?php } else if ($_GET['s'] == 'error') { ?>
  <p>Error. Your message was not sent! Make sure you type in the proper verification numbers. <a href="contact.php">Click here to try again</a>. If issues persist please send an email to site admin (site admin email here).</p>
<?php } else { ?>
 
  <!-- Contact Form -->
  <form action="mailer.php" method="post">
 
    <label for="fullname">Name</label>
    <span id="fullname-error" class="error">must be more than two characters.</span>
    <input type="text" id="fullname" name="fullname" placeholder="your name">
 
    <label for="email">Email</label>
    <span id="email-error" class="error">must be a valid email.</span>
    <input type="text" id="email" name="email" placeholder="your email">
          
    <label for="phone">Phone</label>
    <input type="tel" id="phone" name="phone" placeholder="your phone (optional)">
          
    <label for="message">Message</label>
    <span id="message-error" class="error">can not be left blank.</span>
    <textarea id="message" name="message" rows="8"></textarea>
 
    <input type="text" name="verify" class="verify-box" placeholder="verify you're human">
    <img class="verify-img" src="verificationimage.php?<?php echo rand(0,9999);?>" alt="verification image">
          
    <input type="submit" value="send">
  </form>
 
<?php } ?>
 
<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
<script src="contact.js"></script>