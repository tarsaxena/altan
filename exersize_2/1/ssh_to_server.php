ssh2_connect() – Connect to a remote server
ssh2_scp_send() – Send a file via SSH
ssh2_exec() – Execute a command on a remote server

Install libssh2 and then install PECL SSH2 extension for PHP.

Example:   
<?php

$ip = "192.168.2.101";
$username = "test";
$port = 22;
$public_ssh_key = "/var/www/html/ssh_keys/id_dsa.pub";
$private_ssh_key = "/var/www/html/ssh_keys/id_dsa";
 
if(function_exists("ssh2_connect")) {
$ssh_conn = ssh2_connect($ip, $port);
if($ssh_conn) {
//Validate your username with ssh keys
if(ssh2_auth_pubkey_file($ssh_conn, $username, $public_ssh_key, $private_ssh_key, 'secret')) {
 
// Check file list
$stream = ssh2_exec($ssh_conn, 'ls -l /home/test/');
if($stream) {
stream_set_blocking($stream, true);
while ($buf = fread($stream,4096)) {
flush(); // comment this line
$data.=$buf;
print_r($buf); // comment this line
}
fclose($stream);
}
 
// send file from one server to another
ssh2_scp_send($ssh_conn, '/path/from/file.ext', '/home/test/file.ext', 0777);
 
}
else {
die("SSH validation failed using Username: ".$username." (specify valid SSH keys or check your SSH key path)");
}
}
else {
die("SSH validation failed for IP: ".$ip);
}
}
else {
die("'ssh2_connect()' doesn't exists. Install libssh2 with PECL SSH2 extension");
}

?>