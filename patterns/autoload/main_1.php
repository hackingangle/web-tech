<?php
/**
 * 创建一个人，并说一句话好了
 * 
 * using:
 * 文明的曙光
 */
function __autoload($classname) 
{
    require_once __DIR__. "/$classname.class.php";
}

$objPerson = new Person();
$objPerson->say();
