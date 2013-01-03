<?php

namespace lracicot\phpxmmsclient;

require_once('constant.php');
require_once('playback.php');

class xmmsclient
{
	public $playback;

	function __construct()
	{
		exec('xmms2-launcher');

		$this->playback = new Playback();
	}
}