<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="icon" type="image/ico" href="http://www.colt-green.com/_images/favicon2.ico">
<title>Colt-Green Construction Services, LLC</title>
<meta http-Equiv="Cache-Control" Content="no-cache" />
<meta http-Equiv="Pragma" Content="no-cache" />
<meta http-Equiv="Expires" Content="0" />
<link href="_css/under_construction_styles.css" rel="stylesheet" type="text/css" />

<script language="Javascript">
<!--
function validateEmail(emailStr) {
var emailPat=/^(.+)@(.+)$/
var specialChars="\\(\\)<>@,;:\\\\\\\"\\.\\[\\]"
var validChars="\[^\\s" + specialChars + "\]"
var quotedUser="(\"[^\"]*\")"
var ipDomainPat=/^\[(\d{1,3})\.(\d{1,3})\.(\d{1,3})\.(\d{1,3})\]$/
var atom=validChars + '+'
var word="(" + atom + "|" + quotedUser + ")"
var userPat=new RegExp("^" + word + "(\\." + word + ")*$")
var domainPat=new RegExp("^" + atom + "(\\." + atom +")*$")
var matchArray=emailStr.match(emailPat)
if (document.forms[0].email.value == "")
      {
      alert("\nThe e-mail field is blank.\n\nPlease enter your e-mail address.")
      document.forms[0].email.focus()
      return false
}
if (matchArray==null) {
  /* Too many/few @'s or something; basically, this address doesn't
     even fit the general mould of a valid e-mail address. */
  alert("_____________________________\n\nYour e-mail address seems incorrect. Please check the following\n\n1. Did you include the \"@\" and the \" . \" (dot)?\n2. Did you include anything other than a \"@\" & \" . \"?\n\nPlease re-enter your e-mail address.\n_____________________________")
  document.forms[0].email.select();
    document.forms[0].email.focus();
  return false
}
var user=matchArray[1]
var domain=matchArray[2]
if (user.match(userPat)==null) {
    // user is not valid
    alert("_____________________________\n\nThe username does not seem to be valid.\n\nPlease check the following:\n\n1. That you entered your e-mail address correctly.\n\nThank you.\n_____________________________")
    document.forms[0].email.select();
    document.forms[0].email.focus();
    return false
}
var IPArray=domain.match(ipDomainPat)
if (IPArray!=null) {
    // this is an IP address
    for (var i=1;i<=4;i++) {
      if (IPArray[i]>255) {
          alert("_____________________________\n\nThe destination IP address you entered is invalid.\n\nPlease check your e-mail address and make the necessary corrections.\n\nThank you.\n_____________________________")
          document.forms[0].email.select();
      document.forms[0].email.focus();
    return false
      }
    }
    return true
}
var domainArray=domain.match(domainPat)
if (domainArray==null) {
  alert("_____________________________\n\nAre you making stuff up now?\n\nThe e-mail address portion of this form is not something to scoff at.\n\nI've been placed here in  your computer to make sure your information is valid. You\nneed to enter your real e-mail address or successfully fake me out to proceed.\n\nThank you.\n_____________________________")
  document.forms[0].email.select();
  document.forms[0].email.focus();
    return false
}
var atomPat=new RegExp(atom,"g")
var domArr=domain.match(atomPat)
var len=domArr.length
if (domArr[domArr.length-1].length<2 ||
    domArr[domArr.length-1].length>3) {
   // the address must end in a two letter or three letter word.
   alert("_____________________________\n\nYour e-mail address must end in a three-letter domain, or two letter country.\n\n_____________________________")
   document.forms[0].email.select();
   document.forms[0].email.focus();
   return false
}
if (len<2) {
   var errStr="_____________________________\n\nYour e-mail address is missing either a username, a hostname or a domain.\nAn e-mail address should include these three basic components:\n\n1. A username - (e.g., YOURNAME@yahoo.com, YOURNAME@mho.net)\n2. A host - (e.g., yourname@YAHOO.com, yourname@MHO.net)\n3. A domain - (e.g., yourname@yahoo.COM, yourname@mho.NET)\n\nPlease make the necessary corrections and press \"Send\".\n-- Thank you, The unforgiving script validating this e-mail field.\n\n_____________________________"
   alert(errStr)
   document.forms[0].email.select();
   document.forms[0].email.focus();
   return false
}
return true;
}

function rUSure() {
	if (confirm("Are you sure you want to delete all of the information you have entered?")) {
		document.forms[0].reset();
		document.forms[0].name.focus();
}	else	{

			}
}
//-->
</script>
</head>

<body onload="document.forms[0].name.focus();">
<div id="page">

    <div id="header"><img src="drafts/_images/header_01.jpg" width="980" height="206" /></div>
    
  	<div id="leftContent">
        <h2>Construction and Program Management</h2>
        <p class="under_construction">Colt-Green Construction Services, LLC specializes in Construction and Program Management for residential, industrial and commercial projects with experience ranging from $200M A+++ offices to high-end residential homes.</p>
      
  	</div>
    
  	<div id="rightContent">While this site is being built please call or <a href="mailto:stewart@colt-green.com">email</a> for any additional information.<br /><br />

    <form action="formmail.php" method="post" id="contactForm" onSubmit="return validateEmail(document.forms[0].email.value);">
        
    <ul>
        <li>
          <label class="text" for="name">Name</label>
          <input name="name" type="text" id="name" tabindex="10" />
        </li>
        <li>
          <label class="text" for="email">Email</label>
          <input name="email" type="email" id="email" tabindex="20" />
        </li>
        <li>
          <label class="text" for="comments">Comments</label>
          <textarea name="comments" id="comments" tabindex="30"></textarea>
        </li>
        <li>
            <input id="send" type="submit" value="Send" tabindex="40" /><input id="clear" type="button" value="Clear" onClick="rUSure()" tabindex="50" />
        </li>
        
    </ul> 
    
    </form>

    </div>
    
  	<div id="footer"><span class="spacing first">Colt-Green Construction Services, LLC</span> <span class="spacing">5021 Ortega Cove Circle, Jacksonville, Florida 32244</span> <span class="spacing">CGC-1514753</span> <span class="spacing">Phone: 904.233.1158</span></div>
  </div><!-- #page -->

</body>
</html>