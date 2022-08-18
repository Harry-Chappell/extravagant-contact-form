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

				<div id="who-are-you" 	class="wrap">
					<h2 class="font-prisma">Who are you?</h2>
				</div>

				<div id="contact" 		class="wrap">
					<h2 class="font-abril-fatface">How do we contact you?</h2>
				</div>

				<div id="sport-shirt" 	class="wrap">
					<h2 class="font-rush-brush">What's your desired sport and shirt number?</h2>
				</div>

				<div id="audio" 		class="wrap">
					<h2 class="font-leira">What're your audio prefrences?</h2>
				</div>

				<div id="turtles" 		class="wrap">
					<h2 class="font-awery">Which is the best turtle?</h2>
				</div>

				<div id="wakeup-alarm" 	class="wrap">
					<h2 class="font-krungthep">When would you like your wakeup alarm set?</h2>
				</div>

				<button class="submit font-budmo-jigglish">Submit</button>
			</form>

		</main>

	</div>

</div>

<?php get_footer(); ?>