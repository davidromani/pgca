<?php
/*
 * 	This is a php file, yet it contains css
 * 	This is normal for Elgg, it's part of the views system
 * 	Simply add your css rules to this file
 * 	Remember to clear your cache, or you may not see the changes right away
 * 	Cache can be cleared using the button on the administration page
 * 	or by visiting <your_url>/upgrade.php
 * 
 * 	For your reference, the full elgg default css is included
 * 	in views/default/customize_css/reference
 * 
 * 	It is spread over a number of php files, but they are structured by what
 * 	the css is affecting.
 * 
 * 	Remember that themes and other plugins also override the default css
 * 	if you find that your changes aren't working check the order of the plugins
 * 	and check your $priority setting in start.php
 * 
 * 	(also check that you're creating/modifying the correct rules)
 */
?>

.elgg-walledgarden-double > .elgg-head {
	background: none !important;
	height: 0 !important;
}
.elgg-walledgarden-double > .elgg-body {
background: none !important;
}
.elgg-walledgarden-double > .elgg-foot {
background: none !important;
}
.elgg-walledgarden-single > .elgg-head {
background: none !important;
}
.elgg-walledgarden-single > .elgg-body {
background: none !important;
}
.elgg-walledgarden-single > .elgg-foot {
background: none !important;
height: 0 !important;
}