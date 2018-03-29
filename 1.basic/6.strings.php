<?php
/**
 * 字符串
 * User: jeromembp
 * Date: 2018/3/29
 * Time: 08:31
 */

$str = "hello php";

// 查找字符串所在的位置
echo strpos($str, 'ph');

// 截取字符串
echo substr($str, 2, 3);

// 字符串分割
// 根据长度分割
print_r(str_split($str, 2));
// 根据字符分割
print_r(explode(' ', $str));

// 字符串拼接
$num = 100;
echo $str . '<br>java' . $num;
// 也可以直接用如下""方式
echo "$str<br>java$num";