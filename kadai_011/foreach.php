<!DOCTYPE html>
<html lang="ja">

<head>
   <meta charset="UTF-8">
   <title>PHP基礎編</title>
</head>

<body>
    <p>
    <?php
    $product_info = ['名前' => '玉ねぎ', '値段' => 200, '産地' => '北海道'];

    foreach ($product_info as $key => $info) {
        echo "{$key}：{$info}" . '<br>';
    }
    ?>
    </P>

</body>

</html>