<?php
/**
*
* @package phpBB Extension - Simple Board Starting Date
* @copyright (c) 2016 Animo - http://phpbbdev.ro
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace anix\sbsd\event;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;

class listener implements EventSubscriberInterface
{
	/** @var \phpbb\template\template */
	protected $template;
	
	/** @var \phpbb\config\config */
	protected $config;
	
	/** @var \phpbb\user */
	protected $user;

	public function __construct(\phpbb\template\template $template, \phpbb\config\config $config, \phpbb\user $user)
	{
		$this->template = $template;
		$this->config = $config;
		$this->user = $user;
	}

	static public function getSubscribedEvents()
	{
		return array(
			'core.page_header_after'	=> 'page_header_after',
		);
	}

	public function page_header_after($event)
	{
		// add lang file
		$this->user->add_lang_ext('anix/sbsd', 'sbsd');
		
		$start_date = $this->user->format_date($this->config['board_startdate']);
		$online_for = $this->user->format_date($this->config['board_startdate'], 'd M Y, H:i:s');

		$this->template->assign_vars(array(
			'START_DATE'	=> $start_date,
			'ONLINE_FOR'	=> $online_for,
		));
	}
}
