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

				<!-- <fieldset class="turtles d-1of2 t-1of2 m-all">
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
				</fieldset> -->
				
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
						<button type="button" class="contact-options-control--phone phone" onclick="contactActivate('phone')" href=""><i class="fa-solid fa-phone"></i></button>
						<button type="button" class="contact-options-control--email email" onclick="contactActivate('email')" href=""><i class="fa-solid fa-envelope"></i></button>
						<button type="button" class="contact-options-control--whatsapp whatsapp" onclick="contactActivate('whatsapp')" href=""><i class="fa-brands fa-whatsapp"></i></button>
						<button type="button" class="contact-options-control--messenger messenger" onclick="contactActivate('messenger')" href=""><i class="fa-brands fa-facebook-messenger"></i></i></button>
						<button type="button" class="contact-options-control--linkedin linkedin" onclick="contactActivate('linkedin')" href=""><i class="fa-brands fa-linkedin"></i></button>
						<button type="button" class="contact-options-control--snapchat snapchat" onclick="contactActivate('snapchat')" href=""><i class="fa-brands fa-snapchat"></i></button>
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
						<div class="phone">
							<label id ="contact-phone-label" for="phone">Phone Number</label>
							<input id ="contact-phone-input" type="phone" name="phone" placeholder="0123 456 7890">
						</div>
						<div class="email">
							<label id ="contact-email-label" for="email">Email Address</label>
							<input id ="contact-email-input" type="email" name="email" placeholder="email@email.address">
						</div>
						<div class="whatsapp">
							<label id ="contact-whatsapp-label" for="whatsapp">Whatsapp</label>
							<input id ="contact-whatsapp-input" type="url" name="whatsapp" placeholder="07777 111 222">
						</div>
						<div class="messenger has-prefix">
							<label id ="contact-messenger-label" for="messenger">Messenger</label>
							<span class="prefix">https://messenger.com/</span>
							<input id ="contact-messenger-input" type="url" name="messenger"  placeholder="john-doe">
						</div>
						<div class="linkedin has-prefix">
							<label id ="contact-linkedin-label" for="linkedin">Linkedin</label>
							<span class="prefix">https://linkedin.com/in/</span>
							<input id ="contact-linkedin-input" type="url" name="linkedin" placeholder="john-doe">
						</div>
						<div class="snapchat has-prefix">
							<label id ="contact-snapchat-label" for="snapchat">Snapchat</label>
							<span class="prefix">https://snapchat.com/</span>
							<input id ="contact-snapchat-input" type="url" name="snapchat" placeholder="john-doe">
						</div>
					</div>

				</section>

				<section id="sport-shirt" 	class="wrap background-blue">
					<h2 class="font-rush-brush color-dark-blue">What's your desired sport and shirt number?</h2>
					
					<label for="sport" class="hide">Sport of Choice:</label>
					<select name="sport" id="sport-select" oninput="selectClass(this.value)">
						<option value="" class="placeholder" selected disabled hidden>Select</option>
						<option value="football">Football</option>
						<option value="bowling">Bowling</option>
						<option value="baseball">Baseball</option>
						<option value="volleyball">Volleyball</option>
						<option value="basketball">Basketball</option>
					</select>
					
					<div class="shirt">
						<i class="fa-solid fa-shirt"></i>
						<label for="shirt-number" class="hide">Shirt number</label>
						<input id="shirt-number" name="shirt-number" type="number" min="1" max="99" step="1" value="1">
					</div>

					<div id="balls">
						<div class="balls bowling">
							<i class="fa-solid fa-bowling-ball"></i>
							<i class="fa-solid fa-bowling-ball"></i>
							<i class="fa-solid fa-bowling-ball"></i>
						</div>
						<div class="balls baseball">
							<i class="fa-solid fa-baseball"></i>
							<i class="fa-solid fa-baseball"></i>
							<i class="fa-solid fa-baseball"></i>
						</div>
						<div class="balls basketball">
							<i class="fa-solid fa-basketball"></i>
							<i class="fa-solid fa-basketball"></i>
							<i class="fa-solid fa-basketball"></i>
						</div>
						<div class="balls volleyball">
							<i class="fa-solid fa-volleyball"></i>
							<i class="fa-solid fa-volleyball"></i>
							<i class="fa-solid fa-volleyball"></i>
						</div>
						<div class="balls football">
							<i class="fa-solid fa-futbol"></i>
							<i class="fa-solid fa-futbol"></i>
							<i class="fa-solid fa-futbol"></i>
						</div>
					</div>
					
					<script>
						function selectClass(value) {
							document.getElementById("balls").setAttribute("class", value);
						}
					</script>
					<script>
						jQuery('<div class="quantity-nav"><div class="quantity-button quantity-up"></div><div class="quantity-button quantity-down"></div></div>').insertAfter('.shirt input');
						jQuery('.shirt').each(function() {
							var spinner = jQuery(this),
							input = spinner.find('input[type="number"]'),
							btnUp = spinner.find('.quantity-up'),
							btnDown = spinner.find('.quantity-down'),
							min = input.attr('min'),
							max = input.attr('max');

						btnUp.click(function() {
							var oldValue = parseFloat(input.val());
							if (oldValue >= max) {
								var newVal = oldValue;
							} else {
							var newVal = oldValue + 1;
							}
							spinner.find("input").val(newVal);
							spinner.find("input").trigger("change");
						});
						
						btnDown.click(function() {
							var oldValue = parseFloat(input.val());
							if (oldValue <= min) {
								var newVal = oldValue;
							} else {
								var newVal = oldValue - 1;
							}
							spinner.find("input").val(newVal);
							spinner.find("input").trigger("change");
						});
						
					});
					</script>
				</section>
				
				<section id="audio" 		class="wrap background-purple">
					<h2 class="font-leira color-white">What're your audio prefrences?</h2>
					
					<div>
						<label for="quality">Quality</label>
						<input type="range" id="quality" name="quality" value="50" min="0" max="100" oninput="this.nextElementSibling.value = this.value">
						<output id="rangevalue" class="percentage">50</output>
					</div>
					
					<div>
						<label for="rudeness">Rudeness</label>
						<input type="range" id="rudeness" name="rudeness" value="50" min="0" max="100" oninput="this.nextElementSibling.value = this.value">
						<output id="rangevalue" class="percentage">50</output>
					</div>
					
					<div>
						<label for="humour">Humour</label>
						<input type="range" id="humour" name="humour" value="50" min="0" max="100" oninput="this.nextElementSibling.value = this.value">
						<output id="rangevalue" class="percentage">50</output>
					</div>
					
					<div>
						<label for="decade">Decade</label>
						<input type="range" step="10" id="decade" name="decade" min="1920" max="2020" value="1980" list="tickmarks-decade" oninput="this.nextElementSibling.value = this.value">
						<output>1980</output>
					</div>
					
					
					<script>
						const rangeInputs = document.querySelectorAll('input[type="range"]')
						const numberInput = document.querySelector('input[type="number"]')
						
						function handleInputChange(e) {
							let target = e.target
							if (e.target.type !== 'range') {
								target = document.getElementById('range')
							} 
							const min = target.min
						const max = target.max
						const val = target.value
						
						target.style.backgroundSize = (val - min) * 100 / (max - min) + '% 100%'
					}
					
					rangeInputs.forEach(input => {
						input.addEventListener('input', handleInputChange)
					})
					
					numberInput.addEventListener('input', handleInputChange)
					</script>
					
				</section>
				
				<section id="turtles" 		class=" background-green">
					<h2 class="wrap font-awery color-white">Which is the best turtle?</h2>
					
					<div class="wrap">
						<input type="radio" id="leonardo" name="turtle" value="Leonardo">
						<label for="leonardo">Leonardo</label>
					</div>
					<div class="wrap">
						<input type="radio" id="michelangelo" name="turtle" value="Michelangelo">
						<label for="michelangelo">Michelangelo</label>
					</div>
					<div class="wrap">
						<input type="radio" id="donatello" name="turtle" value="Donatello">
						<label for="donatello">Donatello</label>
					</div>
					<div class="wrap">
						<input type="radio" id="raphael" name="turtle" value="Raphael">
						<label for="raphael">Raphael</label>
					</div>
					
				</section>
				
				<section id="wakeup-alarm" 	class="wrap background-midnight">
					<h2 class="font-krungthep color-white">When would you like your wakeup alarm set?</h2>
					
					<i class="fa-solid fa-cloud"></i>
					<i class="fa-solid fa-cloud"></i>
					<i class="fa-solid fa-cloud"></i>
					<i class="fa-solid fa-cloud"></i>
					<i class="fa-solid fa-cloud-moon"></i>
					
					<div class="alarm">
						<label for="alarm" class="hide">Alarm Time</label>
						<input type="time" id="alarm" name="alarm" class="font-ds-digital" value="06:00">
					</div>

					<h3>Every:</h3>
					<div class="week">
						<input type="checkbox" id="monday" name="monday" value="Monday">
						<label for="monday">Monday</label>
						<input type="checkbox" id="tuesday" name="tuesday" value="Tuesday">
						<label for="tuesday">Tuesday</label>
						<input type="checkbox" id="wednesday" name="wednesday" value="Wednesday">
						<label for="wednesday">Wednesday</label>
						<input type="checkbox" id="thursday" name="thursday" value="Thursday">
						<label for="thursday">Thursday</label>
						<input type="checkbox" id="friday" name="friday" value="Friday">
						<label for="friday">Friday</label>
						<input type="checkbox" id="saturday" name="saturday" value="Saturday">
						<label for="saturday">Saturday</label>
						<input type="checkbox" id="sunday" name="sunday" value="Sunday">
						<label for="sunday">Sunday</label>
					</div>
					
				</section>
				
				<button class="submit font-budmo-jigglish background-pink color-white">Submit</button>
			</form>
			
		</main>
		
	</div>

</div>

<?php get_footer(); ?>