#!/usr/bin/env python
import xmmsclient
import os
import sys

xmms = xmmsclient.XMMS("lrpyxmms")

try:
	xmms.connect(os.getenv("XMMS_PATH"))
except IOError, detail:
	print "Connection failed:", detail
	sys.exit(1)

result = xmms.playback_pause()

result.wait()

if result.iserror():
	print "playback start returned error, %s" % result.get_error()
else:
	sys.exit(0)