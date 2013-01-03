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

result = xmms.playback_current_id()
result.wait()
if result.iserror():
	print "playback current id returns error, %s" % result.get_error()
id = result.value()

print id
	
sys.exit(0)