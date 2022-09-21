<?php
// タイムゾーンを設定
date_default_timezone_set('Asia/Tokyo');

// 文字列と数値は.で連結させることができる
echo '現在は、' . date('G時 i分 s秒') . 'です。';
echo '現在は、', date('G時 i分 s秒'), 'です。';
?>
