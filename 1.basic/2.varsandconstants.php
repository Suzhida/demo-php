<?php
/**
 * 常量和变量的使用
 * User: jeromembp
 * Date: 2018/3/27
 * Time: 17:52
 */

// 变量
$a = 10;
$a = 20;
$b = 5;
echo $a + $b;


// 常量
const THE_VALUE = 100;
// PHP4或之前的写法
//define("THE_VALUE", 200);
echo THE_VALUE;

// 差别：变量可以在运行中修改，常量不行只能被赋值一次