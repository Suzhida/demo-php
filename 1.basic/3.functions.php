<?php
/**
 * 函数
 * User: jeromembp
 * Date: 2018/3/28
 * Time: 20:46
 */

// 声明函数
function test()
{
    echo "hello func<br>";
}

// 函数调用
//test();
// 函数调用
$func = "test";
$func();

// 函数传参
function strs($a, $b)
{
//    return "a = " . $a . " b = " . $b;
    return $a . $b;
}

echo strs("apple", "orange");