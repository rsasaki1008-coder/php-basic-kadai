<?php
// 連想配列を作成し、変数に代入
$onion_data = [
    '名前' => '玉ねぎ',
    '値段' => 200,
    '産地' => '北海道',
];

// foreach文とecho文を使い、キーと値を出力
foreach ($onion_data as $key => $value) {
    // 「キー：値」の形式で出力し、最後に改行タグを入れる
    echo $key . '：' . $value . '<br>';
}
?>