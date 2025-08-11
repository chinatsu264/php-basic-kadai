<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php
        // ここにコードを書いていく
        $nums = [15, 4, 18, 23, 10 ];

        function sort_2way($array, $order) {
        if ($order === TRUE) {
            sort($array); // 昇順
        } else {
            rsort($array); // 降順
        }
        return $array; // 並び替えた配列を返す

        }
    
        // ソート順の指定（TRUE:昇順, FALSE:降順）
        $order = FALSE; // または FALSE

        if ($order === TRUE) {
            echo '昇順にソートします。<br>';
        } elseif ($order === FALSE) {
            echo '降順にソートします。<br>';
        }

        $result = sort_2way($nums, $order);

        foreach ($result as $num) {
            echo $num . "<br>";
        }



        ?>
    </p>
</body>

</html>