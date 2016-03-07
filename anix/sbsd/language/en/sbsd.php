<?php
/**
*
* @package phpBB Extension - Simple Board Starting Date
* @copyright (c) 2015 Neculai Anisor
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

$lang = array_merge($lang, array(
    'BOARD_STARTED_DATE_TXT'    => 'Board started on',
    'BOARD_ONLINE_FOR'          => 'We are online for',
    'ONLINEFOR_AND'             => ' and ',
    'ONLINEFOR_YRS'             => 'years',
    'ONLINEFOR_MONTHS'          => 'months',
    'ONLINEFOR_DAYS'            => 'days',
    'ONLINEFOR_HOURS'           => 'hours',
    'ONLINEFOR_MINUTES'         => 'minutes',
    'ONLINEFOR_SECONDS'         => 'seconds',
));
