﻿<?php
// 変数に値を代入し、
// その値が50より大きければ
// 「50より大きい」
// 50より小さければ
// 「50より小さい」
// 50と同値であれば
// 「50です」
// という文字列を出力してください。

// また最低限どういう値でテストすればいいか
// 確認したテスト値をコメントアウトですべて示してください。

$x = 21;
if($x > 50){
    echo '50より大きい';
}elseif($x == 50){
    echo '50です';
}else{
    echo '50より小さい';
}

//50より上、50、50より下でテスト
//テスト一回目：78、テスト二回目：50、テスト三回目：21

?>

