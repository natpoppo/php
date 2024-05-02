<?php
class Drink {

    public int $count;
    public static int $total = 0;
    // static=静的な

    function constract() {
        echo 'newされました<br>';
        $this->count = 0;
        self::$total;
        // ↑staticを使うとselfで記述になる
    } 
    // 生産数をセット
    function setCount($count) {
        self::$total += $count;
    }

    function showMessage() {
        echo '合計'.self::$total.'個のお飲み物です';
    }
}