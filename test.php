<?php
/**
 * File: test.php.
 * User: Eric.Guo
 * Date: 2019.07.17
 * Time: 18:06
 */
require('autoload.php');
use Jwt\GuoJwt;
$payload=array('sub'=>'1234567890','name'=>'Guo','iat'=>1516239022);
$jwt=new GuoJwt();
$token=$jwt->getToken($payload);
var_dump($token);

$jwt2=new GuoJwt('GuoShiXin');
$getPayload=$jwt2->verifyToken($token);
var_dump($getPayload);