<?php
// 独自のソート関数を定義
function sort_2way($array, $order) {
    if ($order === TRUE) {
        echo '昇順にソートします。<br>';
        sort($array); // 昇順ソート（キーを維持しない）
    } else {
        echo '降順にソートします。<br>';
        rsort($array); // 降順ソート（キーを維持しない）
    }

    // ソート結果を1つずつ表示
    foreach ($array as $num) {
        echo $num . '<br>';
    }
}

// ソートする配列を宣言
$nums = [15, 4, 18, 23, 10];

// 昇順ソートの呼び出し
sort_2way($nums, TRUE);

// 降順ソートの呼び出し
sort_2way($nums, FALSE);
?>