<?php
// 関数の宣言
function myFunc(int $val)
{
    // $iの値を2倍にする
    $val *= 2;
    // 値を確認する
    echo "in myFunc, i is {$val} \n";
}

// 変数への代入
$i = 10;
// 関数の実行
myFunc($i);
// 変数 i の中身の確認
echo "i is {$i} \n";