<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP_kadai_016</title>
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
  public function __construct(string $name, int $price) {
    $this->name = $name;
$this->price = $price;
  }
}
// インスタンス化する
$food=new Food('potato',250);
// インスタンス$userの各プロパティ の値を出力する
print_r($food);
echo '<br>';


// クラスを定義する
class Animal {
  // プロパティを定義する
  private $name;
  private $height;
  private $weight;

  // コンストラクタを定義する
  public function __construct(string $name, int $height, int $weight) {
    $this->name = $name;
$this->height = $height;
$this->weight = $weight;
  }
}
// インスタンス化する
$animal=new Animal('dog',60, 5000);
// インスタンス$animalの各プロパティの値を出力する
print_r($animal);
echo  '<br>';

?>

      <?php
      // クラスを定義する
      class Foods {
        // プロパティを定義する
        public $name;
          //  private $name;

        // メソッドを定義する
        public function set_name(int $price) {
          $this->name = $price;
        }
        public function show_price() {
          echo $this->name . '<br>';
        } 
      }
      // インスタンス化する
      $potato= new Foods();

      // メソッドにアクセスして実行する
      $potato->set_name(250);
      $potato->show_price();
      ?>

<?php
      // クラスを定義する
      class Animals {
        // プロパティを定義する
        public $name;
          //  private $name;

        // メソッドを定義する
        public function set_name(int $height) {
          $this->name = $height;
        }
        public function show_height() {
          echo $this->name . '<br>';
        } 
      }
      // インスタンス化する
      $dog= new Animals();

      // メソッドにアクセスして実行する
      $dog->set_name(60);
      $dog->show_height();
      ?>
    </p>
</body>
</html>