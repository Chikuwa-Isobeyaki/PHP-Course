<?php
$age = '２３';

// mb_convert_kanaで全角数字を半角に自動変換
$age = mb_convert_kana($age, 'n', 'UTF-8');

if (is_numeric($age)) {
  echo $age . '歳です';
} else {
  echo '数字で入力してください';
}
?>
