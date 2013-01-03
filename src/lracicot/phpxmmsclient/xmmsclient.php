<?php

namespace lracicot\phpxmmsclient;

require_once('constant.php');
require_once('playback.php');
require_once('xmmsapi/python_bindings_xmms_api.php');

class xmmsclient
{
	public $playback;

	function __construct($apiType = 'python')
	{
		exec('xmms2-launcher');

		switch ($apiType) {
			case 'ptyhon':
			default:
				$api = new xmmsapi\python_bindings_xmms_api();
				break;
		}

		$this->playback = new Playback($api);
	}
}