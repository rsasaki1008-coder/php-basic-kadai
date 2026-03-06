<?php
// Foodクラスの定義
class Food {
    // プロパティを定義
    public $name;
    public $price;

    // コンストラクタ
    public function __construct(string $name, int $price) {
        $this->name = $name;
        $this->price = $price;
    }

    // メソッド
    public function show_price() {
        echo $this->price . '<br>';
    }
}

// Animalクラスの定義
class Animal {
    // プロパティを定義
    public $name;
    public $height;
    public $weight;

    // コンストラクタ
    public function __construct(string $name, int $height, int $weight) {
        $this->name = $name;
        $this->height = $height;
        $this->weight = $weight;
    }

    // メソッド
    public function show_height() {
        echo $this->height . '<br>';
    }
}

// インスタンスを作成し、引数を渡す
$potato = new Food('ポテト', 250);
$dog = new Animal('いぬ', 60, 5000);

// インスタンスの中身を出力
print_r($potato);
echo '<br>';
print_r($dog);
echo '<br>';

// メソッドにアクセスして実行
$potato->show_price();
$dog->show_height();
?>