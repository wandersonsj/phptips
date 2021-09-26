<?php
    
    require __DIR__."/../vendor/autoload.php";

    use Source\Models\user;

    // use CoffeeCode\DataLayer\Connect;

    // $conn = connect::getInstance();
    // $error = connect::getError();

    // if ($error) {
    //     echo $error->getMessage();
    //     die();
    // }

    // // $query = $conn->query(statement:"SELECT * FROM users");
    // // var_dump($query);

$user = new User();

$list = $user->find()->fetch(true);

echo "<pre>".
var_export($list,true).
 "</pre>";

foreach ($list as $userItens) {
  echo "<pre>".
  var_export($userItens->nome,true).
   "</pre>";
    
}

?>