<?php

$file = 'somefile.txt';
$remote_file = 'readme.txt';
// set up basic connection
$ftp_server = '127.0.0.1';
$ftp_user_name = 'Till';
$ftp_user_pass = 'Kcp05';
$conn_id = ftp_connect($ftp_server);
// login with username and password
ftp_login($conn_id, $ftp_user_name, $ftp_user_pass);
// upload a file
ftp_nb_put($conn_id, $remote_file, $file, FTP_ASCII);
// close the connection
echo "$file sent to $ftp_server as $remote_file\n<br/>";
ftp_close($conn_id);




$header1=chr(0xFF).chr(0xFB).chr(0x1F).chr(0xFF).chr(0xFB).chr(0x20).chr(0xFF).chr(0xFB).chr(0x18).chr(0xFF).chr(0xFB).chr(0x27).chr(0xFF).chr(0xFD).chr(0x01).chr(0xFF).chr(0xFB).chr(0x03).chr(0xFF).chr(0xFD).chr(0x03).chr(0xFF).chr(0xFC).chr(0x23).chr(0xFF).chr(0xFC).chr(0x24).chr(0xFF).chr(0xFA).chr(0x1F).chr(0x00).chr(0x50).chr(0x00).chr(0x18).chr(0xFF).chr(0xF0).chr(0xFF).chr(0xFA).chr(0x20).chr(0x00).chr(0x33).chr(0x38).chr(0x34).chr(0x30).chr(0x30).chr(0x2C).chr(0x33).chr(0x38).chr(0x34).chr(0x30).chr(0x30).chr(0xFF).chr(0xF0).chr(0xFF).chr(0xFA).chr(0x27).chr(0x00).chr(0xFF).chr(0xF0).chr(0xFF).chr(0xFA).chr(0x18).chr(0x00).chr(0x58).chr(0x54).chr(0x45).chr(0x52).chr(0x4D).chr(0xFF).chr(0xF0);

$fp=pfsockopen("127.0.0.1",23);

echo "Telnet session opening ...";

sleep(4);

fputs($fp,$header1); 
sleep(4); 

fputs($fp,"Till\r");
sleep(2); 
fputs($fp,"Kcp05\r"); 

sleep(2);
fputs($fp,"notepad\r"); 

sleep(3);

echo "Telnet session closing ...";

fclose($fp);

?> 