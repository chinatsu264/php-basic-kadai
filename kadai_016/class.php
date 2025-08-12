<!--======== 前略 ========-->
<!DOCTYPE html>
<html lang="ja">

<head>
   <meta charset="UTF-8">
   <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php
        // クラスを定義する
        class Food {
            // プロパティを定義する                        
            private $name;
            private $price;

            // コンストラクタを定義する
            //newでオブジェクトを作るときに自動で実行される特別なメソッド
            public function __construct(string $name, int $price) {
                $this->name = $name; 
                $this->price = $price;
            }

            //メゾッドの定義
            //メゾッドは呼び出された時だけ実行される。
            function show_price () {
                echo $this->price .  '<br>';
            }
        }

        // クラスを定義する
        class Animal {
            // プロパティを定義する                        
            private $name;
            private $height;
            private $weight;

            // コンストラクタを定義する
            //newでオブジェクトを作るときに自動で実行される特別なメソッド
            public function __construct(string $name, int $height, int $weight) {
                $this->name = $name; 
                $this->height = $height;
                $this->weight = $weight;
            }
            
            //メゾッドの定義
            //メゾッドは呼び出された時だけ実行される。
            function show_height () {
                echo $this->height .  '<br>';
            }
        }

        //オブジェクトを定義する
        $potato = new Food (
            'potate',
            250
        );

        $dog = new Animal (
            'dog',
            60,
            5000
        );

        //出力する
        print_r($potato);
        echo '<br>';
        print_r($dog);
        echo '<br>';
        $potato->show_price(); //メゾッドの実行
        $dog->show_height(); //メゾッドの実行

        ?>
    </p>

</body>

</html>