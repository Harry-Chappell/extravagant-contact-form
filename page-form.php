<?php
/*
 Template Name: Extravagant Contact Form
 *
 * This is your custom page template. You can create as many of these as you need.
 * Simply name is "page-whatever.php" and in add the "Template Name" title at the
 * top, the same way it is here.
 *
 * When you create your page, you can just select the template and viola, you have
 * a custom page template to call your very own. Your mother would be so proud.
 *
 * For more info: http://codex.wordpress.org/Page_Templates
*/
?>

<?php get_header(); ?>

<div id="content">

	<div id="inner-content" class="">

		<main id="main" class="" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

			<h1 class="page-title wrap" itemprop="headline"><?php the_title(); ?></h1>

			<form action="#" method="GET" class="contendia-form hide">
							
				<label for="fname">First name:</label>
				<input type="text" id="fname" name="fname" placeholder="John" minlength="2" maxlength="8">
				
				<label for="lname">Last name:</label>
				<input type="text" id="lname" name="lname" placeholder="Doe" minlength="3" maxlength="12">
				
				<label for="email">Email*:</label>
				<input type="email" id="email" name="email" placeholder="johndoe@gmail.com" required="">
				
				<label for="money">How much money would you like?</label>
				<span class="poundsign"><input type="number" id="money" name="money" step="0.01" placeholder="--.--" max="100"></span>
				
				<label for="sport">Sport of Choice:</label>
				<select name="sport" id="cars">
				<option value="" class="placeholder" selected="" disabled="" hidden="">Select</option>
				<option value="football">Football</option>
				<option value="hockey">Hockey</option>
				<option value="cycling">Cycling</option>
				<option value="swimming">Swimming</option>
				</select>

				<fieldset class="turtles d-1of2 t-1of2 m-all">
					<legend>Best Turtle</legend>
					
					<div>
						<input class="blue" type="radio" id="leonardo" name="turtle" value="leonardo" checked="">
						<label for="leonardo">Leonardo</label>
					</div>
					
					<div>
						<input class="orange" type="radio" id="michelangelo" name="turtle" value="michelangelo">
						<label for="michelangelo">Michelangelo</label>
					</div>

					<div>
						<input class="purple" type="radio" id="donatello" name="turtle" value="donatello">
						<label for="donatello">Donatello</label>
					</div>
					
					<div>
					<input class="red" type="radio" id="raphael" name="turtle" value="raphael">
					<label for="raphael">Raphael</label>
					</div>
				</fieldset>
				
				<fieldset class="Audio Prefrences d-1of2 t-1of2 m-all">
					<legend>Audio Prefrences</legend>
					
					<div>
						<label for="quality">Quality</label>
						<input type="range" id="quality" name="quality" min="0" max="10" oninput="this.nextElementSibling.value = this.value">
						<output></output>
					</div>

					<div>
						<label for="rudeness">Rudeness</label>
						<input type="range" id="rudeness" name="rudeness" min="0" max="10" oninput="this.nextElementSibling.value = this.value">
						<output></output>
					</div>

					<div>
						<label for="humour">Humour</label>
						<input type="range" id="humour" name="humour" min="0" max="10" oninput="this.nextElementSibling.value = this.value">
						<output></output>
					</div>

					<div>
						<label for="decade">Decade</label>
						<input type="range" step="10" id="decade" name="decade" min="1920" max="2020" value="1980" list="tickmarks-decade" oninput="this.nextElementSibling.value = this.value">
						<output>1980</output>
						<datalist id="tickmarks-decade">
							<option value="1920" label="20s"></option>
							<option value="1930"></option>
							<option value="1940" label="40s"></option>
							<option value="1950"></option>
							<option value="1960" label="60s"></option>
							<option value="1970"></option>
							<option value="1980" label="80s"></option>
							<option value="1990"></option>
							<option value="2000" label="00s"></option>
							<option value="2010"></option>
							<option value="2020" label="20s"></option>
						</datalist>
					</div>
					
				</fieldset>

				<label for="appt">When would you like your bedtime?</label>
				<input type="time" id="appt" name="appt" min="19:00" max="23:59">

				<label for="week">Holiday (must be a week in the summer holidays):</label>
				<input type="week" name="week" id="camp-week" min="2022-W29" max="2022-W35">
				
				<label for="url">Enter an https:// URL:</label>
					
					<input type="url" name="url" id="url" placeholder="https://example.com" pattern="https://.*" size="30">
					
					<input type="submit" value="Submit" class="button medium">
					
				</form>
				
				<form action="#" method="get">
					
					<section id="who-are-you" 	class="wrap background-yellow">
						<h2 class="font-prisma color-black">Who are you?</h2>
						
					<label for="full-name" class="hide">Full Name</label>
					<input type="text" id="full-name" name="full-name" placeholder="Slim Shady" class="font-besom">
					
					<img class="image-my-name-is" src="/wp-content/uploads/my-name-is-min.png" alt="Hello my name is...">
					<img class="image-my-name-is" src="/wp-content/uploads/my-name-is-min.png" alt="Hello my name is...">
					<img class="image-my-name-is" src="/wp-content/uploads/my-name-is-min.png" alt="Hello my name is...">
					<img class="image-my-name-is" src="/wp-content/uploads/my-name-is-min.png" alt="Hello my name is...">
					<img class="image-my-name-is" src="/wp-content/uploads/my-name-is-min.png" alt="Hello my name is...">
					<img class="image-my-name-is" src="/wp-content/uploads/my-name-is-min.png" alt="Hello my name is...">
					<img class="image-my-name-is" src="/wp-content/uploads/my-name-is-min.png" alt="Hello my name is...">
					
				</section>
				
				<section id="contact" 		class="wrap background-red">
					<h2 class="font-abril-fatface color-yellow">How do we contact you?</h2>
					
					<div class="contact-options-control">
						<div class="contact-options-control--phone phone" onclick="contactActivate('phone')" href=""><i class="fa-solid fa-phone"></i></div>
						<div class="contact-options-control--email email" onclick="contactActivate('email')" href=""><i class="fa-solid fa-envelope"></i></div>
						<div class="contact-options-control--whatsapp whatsapp" onclick="contactActivate('whatsapp')" href=""><i class="fa-brands fa-whatsapp"></i></div>
						<div class="contact-options-control--messenger messenger" onclick="contactActivate('messenger')" href=""><i class="fa-brands fa-facebook-messenger"></i></i></div>
						<div class="contact-options-control--linkedin linkedin" onclick="contactActivate('linkedin')" href=""><i class="fa-brands fa-linkedin"></i></div>
						<div class="contact-options-control--snapchat snapchat" onclick="contactActivate('snapchat')" href=""><i class="fa-brands fa-snapchat"></i></div>
					</div>

					<script>
						function contactActivate(value) {
							let nodes = document.getElementsByClassName(value);
							for (let i = 0; i < nodes.length; i++) {
								nodes[i].classList.toggle('active');
							}
						}
					</script>
					
					<div class="contact-options-inputs">
						<label id ="contact-phone-label" class="phone" for="phone">Phone Number</label>
						<input id ="contact-phone-input" class="phone" type="phone" name="phone">
						<label id ="contact-email-label" class="email" for="email">Email Address</label>
						<input id ="contact-email-input" class="email" type="email" name="email">
						<label id ="contact-whatsapp-label" class="whatsapp" for="whatsapp">Whatsapp</label>
						<input id ="contact-whatsapp-input" class="whatsapp" type="url" name="whatsapp">
						<label id ="contact-messenger-label" class="messenger" for="messenger">Messenger</label>
						<input id ="contact-messenger-input" class="messenger" type="url" name="messenger">
						<label id ="contact-linkedin-label" class="linkedin" for="linkedin">Linkedin</label>
						<input id ="contact-linkedin-input" class="linkedin" type="url" name="linkedin">
						<label id ="contact-snapchat-label" class="snapchat" for="snapchat">Snapchat</label>
						<input id ="contact-snapchat-input" class="snapchat" type="url" name="snapchat">
					</div>

				</section>

				<section id="sport-shirt" 	class="wrap background-blue">
					<h2 class="font-rush-brush color-dark-blue">What's your desired sport and shirt number?</h2>
				</section>

				<section id="audio" 		class="wrap background-purple">
					<h2 class="font-leira color-white">What're your audio prefrences?</h2>
				</section>

				<section id="turtles" 		class="wrap background-green">
					<h2 class="font-awery color-white">Which is the best turtle?</h2>
				</section>

				<section id="wakeup-alarm" 	class="wrap background-midnight">
					<h2 class="font-krungthep color-white">When would you like your wakeup alarm set?</h2>
				</section>

				<button class="submit font-budmo-jigglish background-pink color-white">Submit</button>
			</form>

		</main>

	</div>

</div>

<?php get_footer(); ?>