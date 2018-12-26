<?php
/**
*
* @package phpBB Extension - Header Banner
* @copyright (c) 2015 HiFiKabin
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
	'ACP_HEADERBANNER_CONFIG_EXPLAIN'				=> 'Dit is de configuratie pagina voor de Header Banner extensie',
	'ACP_HEADERBANNER_CONFIG_SET'					=> 'Configuratie',

	'HEADERBANNER_CONFIG'							=> 'Header Banner Instellingen',
	'HEADERBANNER_SAVED'							=> 'Header Banner instellingen opgeslagen',

	'HEADERBANNER'									=> 'Volledige breedte van de header banner URL',
	'HEADERBANNER_EXPLAIN'							=> 'Deze banner wordt weergegeven op volledig formaat apparaten.',
	'HEADERBANNER_RESPONSIVE'						=> 'Banner URL voor mobiele apparaten',
	'HEADERBANNER_RESPONSIVE_EXPLAIN'				=> 'Deze banner wordt weergegeven op mobiele apparaten.',
	'HEADERBANNER_PLACEHOLDER'						=> 'https://mijnsite.be/images/banner.jpg',
	'HEADERBANNER_SELECT'							=> 'Wilt u de Header Banner extensie activeren?',

	'HEADERBANNER_MOBILE'							=> 'Wilt u een alternatieve banner voor kleine schermen?',

	'HEADERBANNER_CORNER'							=> 'Hoekradius',
	'HEADERBANNER_CORNER_EXPLAIN'					=> 'Wilt u de hoek van de bovenstaande afbeelding ombuigen?',
	'HEADERBANNER_PX'								=> 'px',

	'HEADERBANNER_BACKGROUND'						=> 'Wilt u de achtergrondkleur van de header verbergen??',

	'HEADERBANNER_SIZE'								=> 'Volledige breedte banner.',
	'HEADERBANNER_RESPONSIVE_SIZE'					=> 'Banner breedte voor mobiel apparaat.',
	'HEADERBANNER_SIZE_EXPLAIN'						=> 'Uw banner wordt weergegeven op de breedte van de forum header of de breedte van de banner (wat het kleinst is). Wilt u een maximale breedte instellen, dan kunt u dat hier doen. Standaard 1500px.',
	'HEADERBANNER_RESPONSIVE_SIZE_EXPLAIN'			=> 'Uw banner wordt weergegeven op de breedte van de forum header of de breedte van de banner (wat het kleinst is). Wilt u een maximale breedte instellen, dan kunt u dat hier doen. Standaard 700px.',
	'HEADERBANNER_REQUIRED'							=> 'Verplicht',

	'HEADERBANNER_SEARCH'							=> 'Waar wilt u dat de zoek functie wordt getoond?',
	'HEADERBANNER_SEARCH_HEADER_TOP_LEFT'			=> 'Header bovenaan links',
	'HEADERBANNER_SEARCH_HEADER_TOP_RIGHT'			=> 'Header bovenaan rechts',
	'HEADERBANNER_SEARCH_HEADER_BOTTOM_LEFT'		=> 'Header onderaan links',
	'HEADERBANNER_SEARCH_HEADER_BOTTOM_RIGHT'		=> 'Header onderaan rechts',
	'HEADERBANNER_SEARCH_HEADER_BOTTOM_MIDDLE'		=> 'Header midden onderaan',
	'HEADERBANNER_SEARCH_NAVBAR'					=> 'Navigatie bar',
	'HEADERBANNER_SEARCH_REMOVE'					=> 'Nergens',

	'HEADERBANNER_REQUIRE_3.1.0'					=> 'Deze extensie is alleen voor phpBB 3.1.x. Deze werkt niet met phpBB 3.2.x',
	'HEADERBANNER_REQUIRE_3.2.0'					=> 'Deze extensie is alleen voor phpBB 3.2.x. Deze werkt niet met phpBB 3.1.x',
));
