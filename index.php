<?php
require_once __DIR__ . '/classes/Validator.php';

//var_dump(Validator::checkEmail('a@a.a'));
//var_dump(Validator::checkUrl('http://www.ietf.org/rfc/rfc2396.txt'));
//var_dump(Validator::checkUrl('www.ietf.org/rfc/rfc2396.txt'));
var_dump(Validator::checkIp('127.0.0.1'));
var_dump(Validator::checkIp('127.0.0.1.9'));