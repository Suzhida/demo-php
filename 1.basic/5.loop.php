<?php
/**
 * 循环
 * User: jeromembp
 * Date: 2018/3/29
 * Time: 08:18
 */

for ($i = 0; $i < 10; $i++) {
    echo 'hello ' . $i . '<br>';

    if ($i == 5){
        // 跳出循环
        break;
        // 忽略下面代码然后重新开始循环
        //continue;
    }
}

$i = 0;
while ($i < 10) {
    echo 'hello ' . $i . '<br>';
    $i++;
}


$i = 0;
do {
    echo 'hello ' . $i . '<br>';
    $i++;
} while ($i < 10);