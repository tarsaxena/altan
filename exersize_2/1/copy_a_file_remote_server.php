<?php
$remote_file_name="my name with spaces.ext"

ssh2_scp_recv($cn,$remote_file_name,$local_path."/".$remote_file_name); // ERROR

ssh2_scp_recv($cn,"\"".$remote_file_name."\"",$local_path."/".$remote_file_name); //OK

ssh2_scp_recv($cn,"\"".$remote_file_name."\"","\"".$local_path."/".$remote_file_name."\""); //ERROR
?>