<?php

class Myclass
{
    // オブジェクト定数の宣言
    const HOGE = 'string';

    // コンストラクタ
    public function __construct()
    {
        echo "コンストラクタが動いた!! \n";
    }

    // デストラクタ
    public function __destruct()
    {
        echo "デストラクタが動いた!! \n";
    }
}
// オブジェクト定数を使ってみる
var_dump(Myclass::HOGE);

// インスタンス（オブジェクト）を作成する
$obj = new Myclass();

