<?php

// path to remote file
$remote_file = 'somefile.txt';
$local_file = 'localfile.txt';

// open some file to write to
$handle = fopen($local_file, 'w');

// set up basic connection
$conn_id = ftp_connect($ftp_server);

// login with username and password
$login_result = ftp_login($conn_id, $ftp_user_name, $ftp_user_pass);

// try to download $remote_file and save it to $handle
if (ftp_fget($conn_id, $handle, $remote_file, FTP_ASCII, 0)) {
 echo "successfully written to $local_file\n";
} else {
 echo "There was a problem while downloading $remote_file to $local_file\n";
}

// close the connection and the file handler
ftp_close($conn_id);
fclose($handle);
?>