

# ps -eo pid,ppid,cmd,%mem,%cpu --sort=-%mem | head




Sample Output
PID  	PPID 	CMD                      	%MEM 	%CPU
2591	2113 	/usr/lib/firefox/firefox    7.3 	43.5
2549   2520 	/usr/lib/virtualbox/Virtual 3.4  	8.2
2288       1 	/home/gacanepa/.dropbox-dis	1.4	0.3
1889   1543	c:\TeamViewer\TeamViewer.ex	1.0	0.2
2113	1801	/usr/bin/cinnamon		0.9	3.5
2254	2252	python /usr/bin/linuxmint/m	0.3	0.0
2245	1801	nautilus -n			0.3	0.1
1645	1595	/usr/bin/X :0 -audit 0 -aut	0.3	2.5