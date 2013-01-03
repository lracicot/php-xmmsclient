<?php

namespace lracicot\phpxmmsclient;

class Playback
{
	private $xmms;

	function __construct(xmmsapi\xmmsapi $api)
	{
		$this->xmms = $api;
	}

	public function play($track_id = false)
	{
		if ($track_id !== false)
			return $this->xmms->xmms2_playback_jump($track_id);

		return $this->xmms->xmms2_playback_play();
	}

	public function stop()
	{
		return $this->xmms->xmms2_playback_stop();
	}

	public function pause()
	{ 
		return $this->xmms->xmms2_playback_pause();
	}

	public function isPlaying()
	{
		return $this->xmms->xmms2_playback_status();
	}
}