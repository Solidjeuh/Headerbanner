<?php
/**
*
* @package phpBB Extension - Header Banner
* @copyright (c) 2015 HiFiKabin
* Nederlandse vertaling @ Solidjeuh <https://www.muziekpromo.net>
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

if (!defined('IN_PHPBB'))
{
	exit;
}
if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang = array_merge($lang, array(
	'ACP_HEADERBANNER_CONFIG_EXPLAIN'		=> 'Dit is de configuratiepagina van de Banner Extensie',
	'ACP_HEADERBANNER_CONFIG_SET'			=> 'Configuratie',

	'HEADERBANNER_CONFIG'					=> 'Header Banner Instellingen',
	'HEADERBANNER_SAVED'					=> 'Header Banner instellingen opgeslagen',

	'HEADERBANNER'							=> 'Header Banner URL',
	'HEADERBANNER_EXPLAIN'					=> 'Voer hier de volledige URL van uw banner in.',
	'HEADERBANNER_PLACEHOLDER'				=> 'http://www.mijnwebsite.be/images/banner.jpg',
	'HEADERBANNER_SELECT'					=> 'Wilt u de Header Banner extensie activeren??',

	'HEADERBANNER_CORNER'					=> 'Hoek radius',
	'HEADERBANNER_CORNER_EXPLAIN'			=> 'Wil je de hoek ombuigen?',
	'HEADERBANNER_PX'						=> 'px',

	'HEADERBANNER_BACKGROUND'				=> 'Wilt u de header achtergrond kleur verbergen?',

	'HEADERBANNER_SIZE'						=> 'Banner breedte',
	'HEADERBANNER_SIZE_EXPLAIN'				=> 'Uw banner wordt weergegeven op de breedte van de forum header of de breedte van de banner (wat het kleinst is). Wilt u een maximale breedte instellen, dan kunt u dat hier doen.',
	'HEADERBANNER_REQUIRED'					=> 'Verplicht',

	'HEADERBANNER_SEARCH'							=> 'Waar wilt u dat de zoekbalk wordt getoond?',
	'HEADERBANNER_SEARCH_HEADER_TOP_LEFT'			=> 'Header boven links',
	'HEADERBANNER_SEARCH_HEADER_TOP_RIGHT'			=> 'Header boven rechts',
	'HEADERBANNER_SEARCH_HEADER_BOTTOM_LEFT'		=> 'Header onderaan links',
	'HEADERBANNER_SEARCH_HEADER_BOTTOM_RIGHT'		=> 'Header onderaan rechts',
	'HEADERBANNER_SEARCH_HEADER_BOTTOM_MIDDLE'		=> 'Header onderaan in het midden',
	'HEADERBANNER_SEARCH_NAVBAR'					=> 'NavBar',
	'HEADERBANNER_SEARCH_REMOVE'					=> 'Nergens',

	'HEADERBANNER_REQUIRE_3.1.0'			=> 'Deze extensie is alleen voor phpBB 3.1.x. Het zal niet werken met phpBB 3.2.x',
	'HEADERBANNER_REQUIRE_3.2.0'			=> 'Deze extensie is alleen voor phpBB 3.2.x. Het zal niet werken met phpBB 3.1.x',
));
