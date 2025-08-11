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
                echo '昇順にソートします。<br>';
                sort($array); // 昇順
            } else {
                echo '降順にソートします。<br>';
                rsort($array); // 降順
            }
        
            foreach ($array as $num) {
                echo $num . "<br>";
            }
        }
    
        // ソート順の指定（TRUE:昇順, FALSE:降順）
        $order = TRUE; 
        $Asc= sort_2way($nums, $order);

        $order = FALSE; 
        $Des = sort_2way($nums, $order);    

        ?>
    </p>
</body>

</html>