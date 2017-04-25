<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/page.dwt.php" codeOutsideHTMLIsLocked="false" -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
<!-- InstanceBeginEditable name="doctitle" -->
<title>ProSource Construction - Contact Us</title>
<!-- InstanceEndEditable -->
<meta name="keywords" content="construction,concrete,windows,doors,painting,drywall,Novabrik,flooring,trim,design planning,siding,garages,pole barn,patio covers,handyman services, handy man, Richmond, Eaton, Centerville, Wayne County, New Paris" />
<meta name="description" content="Wayne County Richmond Indiana construction, painting, drywall, flooring, remodelling, siding and handyman services - ProSource Construction" />
<link href="../css/css.css" rel="stylesheet" type="text/css" />
<link href="../js/lightbox/css/lightbox.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="../js/reflex/reflex.js"></script>
<script type="text/javascript" src="../js/functions.js"></script>
<script type="text/javascript" src="../js/Prototype.js"></script>
<script type="text/javascript" src="../js/scriptaculous/scriptaculous.js?load=effects"></script>
<script type="text/javascript" src="../js/lightbox/js/lightbox.js"></script>
<!-- InstanceBeginEditable name="head" --><!-- InstanceEndEditable -->
<!-- InstanceParam name="About Us Page" type="boolean" value="false" -->
<!-- InstanceParam name="Construction Services Page" type="boolean" value="false" -->
<!-- InstanceParam name="Contact Us Page" type="boolean" value="true" -->
<!-- InstanceParam name="How It Works" type="boolean" value="false" -->
<!-- InstanceParam name="Slip Proofing Page" type="boolean" value="false" -->
<!-- InstanceParam name="SplashPage" type="boolean" value="false" -->
<!-- InstanceParam name="Testimonials Page" type="boolean" value="false" -->
</head>
<body>
<div id="wrapper">
  <h1 id="header" class="swap"><span>Wayne County Richmond Indiana Construction, painting, drywall, flooring, remodelling, siding and handyman services - ProSource Construction</span></h1>
  <div id="nav"><!-- #BeginLibraryItem "/Library/nav.lbi" --><a href="../index.php" id="home_link">Home</a><a href="../about/index.php" id="about_us_link">About Us</a><a href="../construction/index.php" id="construction_link">Construction Services</a><a href="../testimonials/index.php" id="testimonials_link">Testimonials</a><a href="index.php" id="contact_link">Contact Us</a><!-- #EndLibraryItem --></div>
  
	
	<h2 id="contact_us_header" class="swap"><span>Contact Us</span></h2><script type="text/javascript">var SECTION = 'contact';</script>
	
  <div id="content">
	<div class="padding">
	<!-- InstanceBeginEditable name="page_content" -->
	<?
	
	if ($_POST["action"] == 'send') {
		$form_fields = array();
		$ERRORS = array();
		$required = explode(',',$_POST["required"]);
		foreach ($HTTP_POST_VARS as $field => $value) {
			$value = strip_tags($value);
			
			if (in_array($field,$required) && $value == '') {
				array_push($ERRORS,'The <b>'.$field.'</b> field is required but you left it blank.');
			}
			
			if (($field == 'Email' && $value !== '') && !email_good($value)) {
				array_push($ERRORS,'The <b>'.$field.'</b> address you entered doesn\'t appear to be valid...');
			}
		}
		
		if (count($ERRORS) < 1) {
			$headers  = 'MIME-Version: 1.0' . "\n";
			$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\n";
			$headers .= 'From: '.preg_replace("/[^a-zA-Z0-9s]/",'',$_POST['YourName']).' <'.$_POST['Email'].'>' . "\n";
			$headers .= 'Bcc: Evan Agee <evanagee@gmail.com>' . "\n";
			
			$message = '
			<p>Greetings, you\'ve received a message from your website!</p>
			<b>Your Name:</b> '.strip_tags(preg_replace("/[^a-zA-Z0-9s]/",'',$_POST['YourName'])).'<br />
			<b>Your E-mail:</b> '.$_POST["Email"].'<br />
			<b>Your Address:</b> '.strip_tags($_POST["Street"]).' 
			'.strip_tags($_POST["City"]).', '.strip_tags($_POST["State"]).' '.strip_tags($_POST["Zip"]).'<br />
			<b>Your Phone:</b> '.strip_tags($_POST["Phone"]).'<br />
			<b>Their Message To You:</b>
			<p>'.strip_tags($_POST["YourQuestion"]).'</p>
			';
			
			$emailed = mail('prosource@parallax.ws','ProSourceFirst.com Inquiry!',$message,$headers);
			if ($emailed == true) {
				echo "<h3 style=\"margin-bottom: 15px;\">Your message has been sent. If necessary we will<br />review your message and get back to you soon.</h3>";
			} else {
				echo "<h3 style=\"margin-bottom: 15px;\">There was a problem sending your email. Sorry for the inconvenience.</h3>";
			}
			
		} else {
			echo "<div class='error_box'><h3>Whoops...</h3><ul>";
			foreach ($ERRORS as $error) {
				echo "<li>$error</li>";
			}
			echo "</ul></div>";
		}
			
	}
	
	function email_good($email) {
			if(eregi("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$", $email)) {
				return true;
			} else {
				return false;
			}
		}
		
	?>
	
	<form id="form1" name="form1" method="post" action="<?= $PHP_SELF; ?>">
	<input name="subject" type="hidden" id="subject" value="Website Inquiry" />
			<input name="required" type="hidden" id="require" value="YourName,Email,Street,City,State,Zip,Phone,YourQuestion" />
	<p>Please enter your information into the form below. All fields are required.</p>
	  <table width="95%" border="0" cellspacing="0" cellpadding="8">
        <tr>
          <td width="120" align="right"><b>Your Name: </b></td>
          <td>
            <input name="YourName" type="text" id="realname" />
          </td>
        </tr>
        <tr>
          <td width="120" align="right"><b>E-mail Address: </b></td>
          <td>
            <input name="Email" type="text" id="email" />
          </td>
        </tr>
        <tr>
          <td width="120" align="right"><b>Street:</b></td>
          <td>
            <input name="Street" type="text" id="Street" />
          </td>
        </tr>
        <tr>
          <td align="right"><b>City:</b></td>
          <td>
            <input name="City" type="text" id="City" />
          </td>
        </tr>
        <tr>
          <td align="right"><b>State:</b></td>
          <td><select name="State" size="1">
	<option value="AL" selected="selected">Alabama</option>
	<option value="AK">Alaska</option>
	<option value="AZ">Arizona</option>
	<option value="AR">Arkansas</option>
	<option value="CA">California</option>
	<option value="CO">Colorado</option>
	<option value="CT">Connecticut</option>
	<option value="DE">Delaware</option>
	<option value="DC">Dist of Columbia</option>
	<option value="FL">Florida</option>
	<option value="GA">Georgia</option>
	<option value="HI">Hawaii</option>
	<option value="ID">Idaho</option>
	<option value="IL">Illinois</option>
	<option value="IN">Indiana</option>
	<option value="IA">Iowa</option>
	<option value="KS">Kansas</option>
	<option value="KY">Kentucky</option>
	<option value="LA">Louisiana</option>
	<option value="ME">Maine</option>
	<option value="MD">Maryland</option>
	<option value="MA">Massachusetts</option>
	<option value="MI">Michigan</option>
	<option value="MN">Minnesota</option>
	<option value="MS">Mississippi</option>
	<option value="MO">Missouri</option>
	<option value="MT">Montana</option>
	<option value="NE">Nebraska</option>
	<option value="NV">Nevada</option>
	<option value="NH">New Hampshire</option>
	<option value="NJ">New Jersey</option>
	<option value="NM">New Mexico</option>
	<option value="NY">New York</option>
	<option value="NC">North Carolina</option>
	<option value="ND">North Dakota</option>
	<option value="OH">Ohio</option>
	<option value="OK">Oklahoma</option>
	<option value="OR">Oregon</option>
	<option value="PA">Pennsylvania</option>
	<option value="RI">Rhode Island</option>
	<option value="SC">South Carolina</option>
	<option value="SD">South Dakota</option>
	<option value="TN">Tennessee</option>
	<option value="TX">Texas</option>
	<option value="UT">Utah</option>
	<option value="VT">Vermont</option>
	<option value="VA">Virginia</option>
	<option value="WA">Washington</option>
	<option value="WV">West Virginia</option>
	<option value="WI">Wisconsin</option>
	<option value="WY">Wyoming</option>
          </select></td>
        </tr>
        <tr>
          <td align="right"><b>Zip:</b></td>
          <td>
            <input name="Zip" type="text" id="Zip" size="7" maxlength="5" />
          </td>
        </tr>
        <tr>
          <td width="120" align="right"><b>Phone:</b></td>
          <td>
            <input name="Phone" type="text" id="Phone" />
          </td>
        </tr>
        <tr>
          <td width="120" align="right" valign="top"><b>Your Question(s): </b></td>
          <td>
            <textarea name="YourQuestion" cols="50" rows="10" id="YourQuestion"></textarea>
          </td>
        </tr>
        <tr>
          <td align="right" valign="top">&nbsp;</td>
          <td>
            <input name="action" type="hidden" id="action" value="send" />
            <input type="submit" name="Submit" value="Submit" />
          </td>
        </tr>
      </table>
    </form>
	<!-- InstanceEndEditable -->
	</div>
	<div id="pre_footer"></div>
  </div>
  <div id="footer"><!-- #BeginLibraryItem "/Library/nav.lbi" --><a href="../index.php" id="home_link">Home</a><a href="../about/index.php" id="about_us_link">About Us</a><a href="../construction/index.php" id="construction_link">Construction Services</a><a href="../testimonials/index.php" id="testimonials_link">Testimonials</a><a href="index.php" id="contact_link">Contact Us</a><!-- #EndLibraryItem --><br />
    Copyright &copy;
    <? $current_date = getdate(); echo $current_date['year']; ?>
    ProSource. All Rights Reserved.</div>
</div>
<div style="text-align: center; padding-top: 15px; color: #CCCCCC; padding-bottom: 15px; font-size: 12px;">website design by <a href="http://www.ageedesign.com" title="Richmond Indiana website development" target="_blank" style="color: white;">Agee Design</a></div>
<script type="text/javascript">selectSection(SECTION);</script>
<script src="http://www.google-analytics.com/urchin.js" type="text/javascript">
</script>
<script type="text/javascript">
_uacct = "UA-462426-9";
urchinTracker();
</script>
</body>
<!-- InstanceEnd --></html>