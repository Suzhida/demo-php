<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>流程控制</title>
</head>
<body>

<?php
function getLevel($score)
{
//    if ($score >= 90) {
//        return '优秀';
//    }elseif ($score >= 60){
//        return '良好';
//    }else {
//        return "差";
//    }

    $result = '差';
    switch (intval($score / 10)) {
        case 10:
        case 9:
            $result = '优秀';
            // 跳出当前switch
            break;
        case 8:
            // 跳出当前方法
            return "良好";
        default:
            return "差";
    }

    return $result;
}

echo getLevel(30);
?>

</body>
</html>
