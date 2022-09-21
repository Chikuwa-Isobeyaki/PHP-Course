<?php
$today = new DateTime();
$today->setTimezone(new DateTimeZone('Asia/Tokyo'));
echo '現在は' . $today->format('G秒 i分 s秒') . 'です。';
?>
