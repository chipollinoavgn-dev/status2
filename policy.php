<?php
	require_once("template.php");
	require_once("config.php");
	Template::render_header("Privacy Policy");

	echo "<h1>" . _("Privacy Policy") . "</h2>";
	echo "<h2>" . _("Who we are") . "</h2>";
	echo WHO_WE_ARE;
	echo "<h2>" . _("Contact") . "</h2>";
	echo POLICY_NAME . "<br>";
	echo ADDRESS . "<br>";
	echo POLICY_MAIL . "<br>";
	if(defined('POLICY_PHONE') && POLICY_PHONE != ""){
		echo POLICY_PHONE . "<br>";
	}

	echo '<h2>' . _("What personal data we collect and why") . '</h2>';
	echo '<h3>' . _("General") . "</h3>";
	echo _("If you access our websites, the following information will be saved: IP-address, Date, Time, Browser queries, 
	General information about your browser, operating system and all search queries on the sites. 
	This user data will be used for anonym user statistics to recognize trends and improve our content.
	") . "<br><br>";
	echo "<h2>" . _("How we protect your data") . "</h2>";
	echo _("In collaboration with our hosting provider we try our best to protect our 
	databases against access from third parties, losses, misuse or forgery.
	") . "<br><br>";
	echo "<h2>" . _("Third party that receive your personal data") . "</h2>";
	echo "Our hosting provider can access the date we store on their server. We have a data processing agreement with them.";
	echo "<h3>" . _("Cookies") . "</h3>";
	echo _("This site uses cookies – small text files that are placed on your machine to help the site provide a better user experience. 
	In general, cookies are used to retain user preferences, store information for things like shopping carts, 
	and provide anonymised tracking data to third party applications like Google Analytics. 
	As a rule, cookies will make your browsing experience better. However, you may prefer to disable cookies on this site and on others. 
	The most effective way to do this is to disable cookies in your browser. We suggest consulting the Help section of your browser 
	or taking a look at the About Cookies website which offers guidance for all modern browsers");

	Template::render_footer();
