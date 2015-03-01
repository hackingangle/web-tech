<?php
/**
 * namespace作用
 * 允许相同的方法名，出现在同一个脚本里
 * 当然他们必须都有一个所属的命名空间
 * 适用于多项目代码合并或多个子产品合并
 * 
 * using:
 * 分别调用了两个namespace下的相同名称的方法
 */
require_once 'Demo1.class.php';
require_once 'Demo2.class.php';

Pkg1\hi();
Pkg2\hi();