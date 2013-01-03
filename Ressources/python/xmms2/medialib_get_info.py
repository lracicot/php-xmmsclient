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

id = int(sys.argv[1])

if id == 0:
	sys.exit(1)

result = xmms.medialib_get_info(id)
result.wait()

if result.iserror():
	print "medialib get info returns error, %s" % result.get_error()
	sys.exit(1)

minfo = result.value()

for key in minfo.keys():
	print key[1],",",minfo[key]

sys.exit(0)
