<?php
$log_directory = 'your_dir_name_here';

$results_array = array();

if (is_dir($log_directory))
{
        if ($handle = opendir($log_directory))
        {
                //Notice the parentheses I added:
                while(($file = readdir($handle)) !== FALSE)
                {
                        $results_array[] = $file;
                }
                closedir($handle);
        }
}

//Output findings
foreach($results_array as $value)
{
    echo $value . '<br />';
}

?>