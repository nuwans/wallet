<?php

/* $config['protocol'] = 'mail';
$config['charset'] = 'utf8';
$config['mailtype'] = 'html';
$config['wordwrap'] = TRUE; */

// Uncomment the code below and delete the previous one to use the SMTP

 //SMTP mail
$config['protocol'] = 'smtp';
$config['smtp_host'] = 'ssl://smtp.googlemail.com';
$config['smtp_port'] = '465';
$config['smtp_user'] = 'tradeseasy742@gmail.com';
$config['smtp_pass'] = 'easyadmin';
$config['charset'] = 'utf8';
$config['mailtype'] = 'html';
$config['wordwrap'] = TRUE;

/* $config = Array(
    'protocol' => 'smtp',
    'smtp_host' => 'ssl://smtp.googlemail.com',
    'smtp_port' => 465,
    'smtp_user' => 'xxx',
    'smtp_pass' => 'xxx',
    'mailtype'  => 'html', 
    'charset'   => 'iso-8859-1'
); */
?>