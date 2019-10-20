<?php

$restore_file  = "./respaldo/backup.sql";
$server_name   = "localhost";
$username      = "root";
$password      = "20lviva..";
$database_name = "ventas";

$cmd = "mysql -h {$server_name} -u {$username} -p{$password} {$database_name} < $restore_file";
exec($cmd);

?>