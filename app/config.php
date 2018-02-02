<?php


defined("DB_HOST") ? null : define("DB_HOST", "localhost");

defined("DB_USER") ? null : define("DB_USER","root");

defined("DB_PASS") ? null : define("DB_PASS", "");

defined("DB_NAME") ? null : define("DB_NAME",  "sms");


$con = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);



return $config = [

    'account_sid'=> 'AC2cd24271ad19f9a0916c72b5bb2b4ff5',
    'auth_token' => '51f7e2dce33acfa577c3af3c52414c73',
    'phone_number' => '+13252080297'


];