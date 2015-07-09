<?php
$socket = socket_create(AF_INET, SOCK_DGRAM, SOL_UDP);
 
if (!$socket) die('Unable to create socket');
if (!socket_bind($socket, "192.168.43.215", 8087)) die('Unable to bind socket');
 
    $data = @socket_read($socket, 15);
 
    echo $data . "\n";  // oder in eine Datei schreiben
?>