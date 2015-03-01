<?php
/**
 * 创建一个人，并说一句话好了
 * 
 * using:
 * 文明时代
 */
spl_autoload_register('registerAutoload');

function registerAutoload($classname) 
{
    require_once "$classname.class.php";
}

$objPerson = new Person();
$objPerson->say();
