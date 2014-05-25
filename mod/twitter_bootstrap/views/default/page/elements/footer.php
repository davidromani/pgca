<?php
/**
 * Elgg footer
 * The standard HTML footer that displays across the site
 *
 * @package Elgg
 * @subpackage Core
 *
 */

//bootstrap
echo '<hr>';

$powered_url = elgg_get_site_url() . "_graphics/powered_by_elgg_badge_drk_bckgnd.gif";

echo '<div class="span6">';
echo <<<HTML

Página web allotjada a <a target="_blank" href="http://www.flux.cat">flux.cat</a>

HTML;

echo '</div><!-- /span6 -->';

echo '<div class="mts clearfloat float-alt span4 offset2">';
echo elgg_view_menu('footer', array('sort_by' => 'priority', 'class' => 'elgg-menu-hz pull-right'));
echo elgg_view('output/url', array(
	'href' => 'http://elgg.org',
	'text' => "<img src=\"$powered_url\" alt=\"Powered by Elgg\" width=\"106\" height=\"15\" />",
	'class' => 'pull-right',
	'is_trusted' => true,
));
echo '</div>';
