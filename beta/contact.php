<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="icon" type="image/ico" href="http://www.colt-green.com/_images/favicon2.ico">
	<meta http-equiv="cache-control" content="no-cache">
	<meta http-equiv="pragma" content="no-cache">
	<meta http-equiv="expires" content="0">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Colt-Green Construction</title>
	<link rel="stylesheet" href="_css/styles.css?<?php echo time(); ?>" type="text/css" />
	
  <script src="_scripts/scripts.js"></script>
  <script src='https://www.google.com/recaptcha/api.js'></script>
   <script>
    function recaptchaCallback() {
        $('#confirm').addClass('display');
        $('#send').removeAttr('disabled');
        $('#send').removeClass('display');
    };
  </script> 
</head>
<body class="non-index" onload="document.forms[0].name.focus();">

	<div class="wrapper cf">
    <header>
      <a href="index.php"><img class="colt-green-logo" src="_images/colt-green-construction-logo-sm.jpg" border="0" width="77" height="76"></a>
      <p class="logo-text">Colt-Green Construction</p><p class="login-txt large"><!-- <a href="login.php">Login</a> &nbsp;&nbsp;|&nbsp;&nbsp; --> <a href="contact.php">Contact</a></p>
    </header>

<?php include "_includes/nav.php" ?>

<article id="contact">
    <p>Stewart Green<br>
    Phone: 904.233.1158<br/>
    <a href="mailto:stewart@colt-green.com">stewart@colt-green.com</a></p>
            
    <form action="thank_you.php" method="post" id="contactForm" onSubmit="return validateEmail(document.forms[0].email.value);">
    <ul>
        <li class="contact_pg">
          <label class="text" for="name">Name</label>
          <input name="name" type="text" id="name" tabindex="10" />
        </li>
        <li class="contact_pg">
          <label class="text" for="email">Email</label>
          <input name="email" type="email" id="email" tabindex="20" />
        </li>
        <li class="contact_pg">
          <label class="text" for="comments">Comments</label>
          <textarea name="comments" id="comments" tabindex="30"></textarea>
        </li>

        <!-- <li class="contact_pg">
            <input id="send" type="submit" value="Send" tabindex="40" /><input id="clear" type="button" value="Clear" onClick="rUSure()" tabindex="50" />
        </li> -->

        <li class="contact_pg">
          <div class="g-recaptcha" data-callback="recaptchaCallback" data-sitekey="6LfIrz8UAAAAAGBWfjJbpFRn-zSDQShDNl689Qb3"></div>
        </li>
        <li class="contact_pg">
            <button id="confirm" disabled>Check Captcha above to enable Send</button>
            <button id="send" class="display" disabled>Send</button>
            <!-- <input id="send" type="submit" value="Send" tabindex="40" disabled /> -->
        </li>

        
    </ul> 
    </form>   
             
</article><!-- article -->

<?php include "_includes/footer.php" ?>
	</div>

<script src="_scripts/respond.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script src="_scripts/nav.js"></script>
<script src="_scripts/scripts.js"></script>
<script src="http://localhost:35729/livereload.js"></script>
</body>
</html>