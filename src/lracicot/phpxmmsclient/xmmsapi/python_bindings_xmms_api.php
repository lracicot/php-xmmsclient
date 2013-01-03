<?php

namespace lracicot\phpxmmsclient\xmmsapi;
require_once('xmmsapi.php');

define('XMMSPATH', substr(PHPXMMSCLIENT_PATH, 0, strrpos(PHPXMMSCLIENT_PATH, PHPXMMSCLIENT_DIR)+strlen(PHPXMMSCLIENT_DIR)).'/Resources/python/xmms2/');

class python_bindings_xmms_api implements xmmsapi
{
	function xmms2_playback_play()
	{
		return shell_exec('python '. XMMSPATH .'play.py'); 
	}

	function xmms2_playback_pause()
	{
		return shell_exec('python '. XMMSPATH .'pause.py');
	}

	function xmms2_playback_stop()
	{
		return shell_exec('python '. XMMSPATH .'stop.py'); 
	}

	function xmms2_playback_prev()
	{
		throw new Exception("Not implemented yet.", 1);
	}

	function xmms2_playback_next()
	{
		throw new Exception("Not implemented yet.", 1);
	}

	function xmms2_playback_jump()
	{
		throw new Exception("Not implemented yet.", 1);
	}

	function xmms2_playback_status()
	{
		return (bool)(int)shell_exec('python '. XMMSPATH .'status.py');
	}
}