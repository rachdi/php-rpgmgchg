<?php
require 'client.php';
$client1 = new Client('1','bigking3100@gmail.com',date('l'));
$client2 = new Client('2','bigking310@gmail.com',date('N'));

return [
$client1,
$client2
];

?>
