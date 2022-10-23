<?php
?>

<!DOCTYPE html>

<html lang="en">

<link rel="stylesheet" type="text/css" href="style.css"/>


<title>Chelsea Johnson and Lucie Ortega</title>

<head>
    <div id = "header">
        <h1>Join the Community</h1>
    </div>
<body>

<?php
        include "navigation.php";
        include "footer.php";
    
    ?>
</body>
 </head>

<body>
   <a href="join_us.php">
       <img src="images/foodlogo.jpeg" width="50px" height="50px" alt="logofood"/>
       </a>
   <div class="inner contact">
<!-- Form Area -->
<div class="contact-form">
<!-- Form -->
<form id="contact-us" method="post" action="#">
<!-- Left Inputs -->
<div class="col-xs-6 wow animated slideInLeft" data-wow-delay=".5s">
<!-- Name -->
<input type="text" name="name" id="name" required="required" class="form" placeholder="Name" />
<!-- Email -->
<input type="email" name="mail" id="mail" required="required" class="form" placeholder="Email" />
<!-- Subject -->
<input type="text" name="subject" id="subject" required="required" class="form" placeholder="Subject" />
</div><!-- End Left Inputs -->
<!-- Right Inputs -->
<div class="col-xs-6 wow animated slideInRight" data-wow-delay=".5s">
<!-- Message -->
<textarea name="message" id="message" class="form textarea"  placeholder="Message"></textarea>
</div>
<!-- End Right Inputs -->
<!-- Send Button -->
<button type="submit" id="submit" name="submit" class="form-btn semibold" href="mailto:lucie.ortega@live.fr">Send Message</button> 
</div><!-- End Bottom Submit -->
<!-- Clear -->
<div class="clear"></div>
</form>
</div><!-- End Contact Form Area -->
</div><!-- End Inner -->


</head>
</html>
