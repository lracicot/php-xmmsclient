#!/usr/bin/env python
import xmmsclient
import os
import sys

xmms = xmmsclient.XMMS("tutorial3")
try:
	xmms.connect(os.getenv("XMMS_PATH"))
except IOError, detail:
	print "Connection failed:", detail
	sys.exit(1)

result = xmms.playback_status()
result.wait()

if result.iserror():
	print "playback get status returns error, %s" % result.get_error()
	sys.exit(1)

plstatus = result.value()
print plstatus

sys.exit(0)
