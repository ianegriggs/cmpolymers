<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
	<title>CM Polymers</title>
	<link rel="stylesheet" href="style.css">
</head>
<body id="crushed-bottles-background">
	<div class="wrapper">
		<header>
			<a href="index.html">		
					<img id="logo" src="images/site-logo.png" alt="CM Polymers" title="Welcome to CM Polymers"></a>
			<nav>
				<a href="for-sale.html">For Sale</a>
				<a href="#">Get a Quote</a>
				<a href="about-us.html">About Us</a>
				<a href="contact-us.html">Contact</a>
				<a class="menu-icon">&#9776;</a>
			</nav>
		</header>
	</div> <!-- WRAPPER CLOSED -->
	
	<div class="wrapper">
		
	</div> <!-- WRAPPER CLOSED -->

	<div class="wrapper">
		<br> <br>
		<h1 class="banner">Recycle Your Scrap Into Cash</h1>
		<div class="form-div">

<?php if ($_GET['s'] == 'success') { ?>
	<p>Thank you.  Your message has been successfully sent, and we will be back to you shortly with a response.</p>
<?php } else if ($_GET['s'] == 'error') { ?>
	<p>Error.  Your message was not sent.  Make sure you type in the proper verification numbers. <a href="get-a-quote.php">Click here to try again.</a>
	If issues persist, please email the webmaster at support@cmypolymers.com</p>
<?php } else { ?>


			<form action="mailer.php="mailto:ian@cmpolymers.com method="post">
				<h4 class="quote-directions">Have Some Post Industrial Plastic to Sell?<br>Good, Because We're Always Looking to Buy!<br><br>Fill out the form below and we'll get right back to you.</h4>
					<input id="fullname-enter-field" type="text" name="full-name" placeholder="Your Name" required>
					<input id="email-enter-field" type="email" name="email" placeholder="Your Email Address" required>
					<input id="phone-number-field" type="tel" name="Phone Number" placeholder="Your Phone Number">
					<input id="city" type="text" placeholder="City">
					<select required>
								<option selected="selected" disabled="disabled">Select a State</option>
								<option value="AL">Alabama</option>
								<option value="AK">Alaska</option>
								<option value="AZ">Arizona</option>
								<option value="AR">Arkansas</option>
								<option value="CA">California</option>
								<option value="CO">Colorado</option>
								<option value="CT">Connecticut</option>
								<option value="DE">Delaware</option>
								<option value="DC">District Of Columbia</option>
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
								<option value="AS">American Samoa</option>
								<option value="GU">Guam</option>
								<option value="MP">Northern Mariana Islands</option>
								<option value="PR">Puerto Rico</option>
								<option value="UM">United States Minor Outlying Islands</option>
								<option value="VI">Virgin Islands</option>
								<option value="AA">Armed Forces Americas</option>
								<option value="AP">Armed Forces Pacific</option>
								<option value="AE">Armed Forces Others</option>	
					</select>
					<p class="select-request">Please provide a detailed description below:</p>
					<textarea name="message" placeholder="Tell us a little more about each offering: type of plastic, physical properties (ie. density, melt), form, quantity, asking price, packaging, etc."rows="10"></textarea>
					<p class="select-request">Please include any product photos below:</p>
					<input class="pic" type="file" name="pic" accept="image/*">
					<input class="pic" type="file" name="pic" accept="image/*">
					<input class="pic" type="file" name="pic" accept="image/*">
					<input class="pic" type="file" name="pic" accept="image/*"> 
					<br> <br> <br>

					<input type="text" name="verify" class="verify-box" placeholder="please verify you're human"> 
					<img class="verify" src="verificationimage.php?<?php echo rand(0,9999) alt="verification image" ?>">

					<br> <br> <br>
					<input id="submit-button" type="submit" name="submit">
				</form>

				<?php } ?>
			</div> 
		</div> <!-- WRAPPER CLOSED -->

</body>
<footer>&copy; CM Polymers, Inc. 2014</footer>	
</html>