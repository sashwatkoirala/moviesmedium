<?php

$to = 'hijodad193@hhmel.com';

$mail = mail($to, "test","hello","From: root@localhost.com");
print_r($mail);

?>