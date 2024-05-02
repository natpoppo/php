<?php
// ファイル名　＝　クラス名　が基本
// どちらも頭大文字が基本

// 4/24 今日は(class:設計書みたいなもの)を作ってみよう
// *vehicle=乗り物
class Vehicle {
    // method: クラスの中にある関数をメソッドという
    // 機能ごとの処理のまとまり

    // プロパティ変数(フィールド変数)
    public int $count;

    // 初期化する：コンストラクタ__
    // newしたときに実行される特殊なメソッド
    function __constract() {
        echo 'newされました';
        $this->count = 0;
    }

    // メッセージを出力するメソッド
    // function showMessage() {
    //     echo '車を作りました。';
    // }

    // function showMessageForBike() {
    //     echo 'バイクを作りました。';
    // }


    // 生産台数をセットする
    function setCount($count) {
        // $this->count = $this->count + $count;
        $this->count += $count;
    }

    // "何を"だけ変えると何個もメソッド作らなくていい
    function showMessage($Vehicle) {
        echo $Vehicle.'を'.$this->count.'台作りました。';
    }
}