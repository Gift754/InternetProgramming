<?php
require 'classautoload.php';

$mailCnt = [
    'name_from' => 'Joseph Kabetu',
    'mail_from' => 'kabetujoseph@gmail.com',
    'name_to' => 'Gift',
    'mail_to' => 'kabetug1@gmail.com',
    'subject' => 'Hello From ICS 2B',
    'body' => 'Welcome to my first PHP project this semester! <br> Internet Programming is fun.'
];

$Objsendmail->sendmail($conf, $mailCnt);

