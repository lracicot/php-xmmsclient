<?php

namespace lracicot\phpxmmsclient;

class Playback
{	
	public function play($track_id = 0)
	{
		return shell_exec('python '. XMMSPATH .'play.py'); 
	}

	public function stop()
	{
		return shell_exec('python '. XMMSPATH .'stop.py'); 
	}

	public function pause()
	{
		return shell_exec('python '. XMMSPATH .'pause.py'); 
	}

	public function isPlaying()
	{
		return (bool)shell_exec('python '. XMMSPATH .'status.py'); 
	}
}