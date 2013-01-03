<?php

namespace lracicot\phpxmmsclient\xmmsapi;

interface xmmsapi
{
	function xmms2_playback_play();
	function xmms2_playback_pause();
	function xmms2_playback_stop();
	function xmms2_playback_prev();
	function xmms2_playback_next();
	function xmms2_playback_jump();
	function xmms2_playback_status();
}