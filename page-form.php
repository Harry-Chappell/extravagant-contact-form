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

			<form action="">

				<section id="who-are-you" 	class="wrap background-yellow">
					<h2 class="font-prisma color-black">Who are you?</h2>
				</section>

				<section id="contact" 		class="wrap background-red">
					<h2 class="font-abril-fatface color-yellow">How do we contact you?</h2>
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