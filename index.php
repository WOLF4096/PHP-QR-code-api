<?php
include "phpqrcode.php";

$t = isset($_GET["t"]) ? $_GET["t"] : 'https://blog.wolf4096.top/'; //$url二维码内容
$e = isset($_GET["e"]) ? $_GET["e"] : 'L'; //$errorLevel容错级别 默认L
$p = isset($_GET["p"]) ? $_GET["p"] : '10'; //$PointSize二维码尺寸 默认5
$m = isset($_GET["m"]) ? $_GET["m"] : '1'; //$margin二维码白边框尺寸 默认2

//二维码生成函数
function getqrcode($value,$errorCorrectionLevel,$matrixPointSize,$margin) {
    QRcode::png($value, false, $errorCorrectionLevel, $matrixPointSize, $margin);
}
getqrcode($t, $e, $p, $m);
?>
