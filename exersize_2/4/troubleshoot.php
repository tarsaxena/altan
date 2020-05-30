<?php
To use the ping program on Microsoft Windows, follow these steps:

1: Open a DOS command window. To do this, click Start, click Run, type cmd, and then press Enter.
2: At the command prompt, type the following command. Replace example.com with the domain that you want to test:
"ping example.com"

Interpret the output from ping:

3: If the remote host is active and configured to respond to ping requests, responses appear. For example, the following output shows ping responses from an A2 Hosting server:

C:\Documents and Settings\user>ping a2s78.a2hosting.com

Pinging a2s78.a2hosting.com [216.119.143.98] with 32 bytes of data:

Reply from 216.119.143.98: bytes=32 time=46ms TTL=54
Reply from 216.119.143.98: bytes=32 time=45ms TTL=54
Reply from 216.119.143.98: bytes=32 time=47ms TTL=54

Ping statistics for 216.119.143.98:
    Packets: Sent = 3, Received = 3, Lost = 0 (0% loss),
Approximate round trip times in milli-seconds:
    Minimum = 45ms, Maximum = 47ms, Average = 46ms
Alternatively, if the remote host is down, or not configured to respond to ping requests, you do not see any responses.

Firewalls can be configured to block packets from ping. If a remote host does not respond to ping requests, it is possible that it is up and running normally, but ignoring ping requests.


?>