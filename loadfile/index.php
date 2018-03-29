<?php
/**
 * Created by PhpStorm.
 * User: jeromembp
 * Date: 2018/3/29
 * Time: 08:58
 */

// 差别：require的文件如果不存在页面是打印错误的信息，include不存在打印的是警告级别的信息。
// require表示依赖，include表示包含。它们的功能是一样的。
require 'lib.php';
//include 'lib.php';

// 如果多次引用会报错，所以可以使用*_once只引入一次，所以一般都是使用*_once。
//require_once 'lib.php';
//include_once 'lib.php';

sayHello();