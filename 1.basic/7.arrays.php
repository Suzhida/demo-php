<?php
/**
 * 数组
 * User: jeromembp
 * Date: 2018/3/29
 * Time: 08:44
 */

// 声明赋值
$arr2 = array(0 => 'hello', 1 => 1, 2 => 3.14, 'h' => 'hello', 'w' => 'world');

// 等同于如下写法
$arr = array();
$arr[0] = 'hello';
$arr[1] = 1;
$arr[2] = 3.14;
array_push($arr, 3);

$arr['h'] = 'hello';
$arr['w'] = 'world';

print_r($arr);
print_r($arr[2]);
print_r($arr['w']);
