<?php


echo '1.プログラミング問題(PHP）</br>';

echo '<br><br>';


//*********************************************************
echo '<hr>';
echo '１－１.FizzBuzz';
echo '<hr>';
echo '<br>';

    for($i=1; $i<=100; $i++){
        if($i%3===0 && $i%5===0 ){
            echo 'FizzBuzz';
            echo '<br>';

        } else if ($i%3===0){
                echo 'Fizz ';
                echo '<br>';
        } else if ($i%5===0){
        echo 'Buzz';
        echo '<br>';
        }else {
            echo $i.' ';
            echo '<br>';
        }}
    echo '<br><br>';


//*********************************************************
echo '<hr>';
echo '１－２.素数算出';
echo '<hr>';
echo '<br>';


for ($i = 1; $i <= 1000; $i++) {

    $point = 0;
  
    for ($j = 1; $j <= $i; $j++) {
      if ($i % $j == 0) {
        $point += 1;
      }
    }
  
    if ($point == 2) {
        echo $i ;
        //echo $i . "\n";
        echo '<br>';
    }
  
  }
  echo '<br><br>';


//*********************************************************
echo '<hr>';
echo '１－３.5次元配列';
echo '<hr>';
echo '<br>';


$member1 = ['id' => '1', 'name' => 'kudou', 'gender' => '女', 'age' => '30代', 'email' =>'kudo@gmail.com'];
$member2 = ['id' => '2', 'name' => 'nagashima', 'gender' => '男', 'age' => '50代', 'email' =>'nagashima@gmail.com'];
$member3 = ['id' => '3', 'name' => 'suzuki', 'gender' => '女', 'age' => '40代', 'email' =>'suzuki@gmail.com'];
$member4 = ['id' => '4', 'name' => 'mizutani', 'gender' => '女', 'age' => '40代', 'email' =>'mizutani@gmail.com'];

$all_member = [$member1, $member2 ,$member3 ,$member4];
var_dump ($all_member);

echo '<br><br>';

foreach ($all_member as $array){
    echo $array['id'];
    echo ' ';
    echo $array['name'];
    echo ' ';
    echo $array['gender'];
    echo ' ';
    echo $array['age'];
    echo ' ';
    echo $array['email'];
    echo '<br><br>';
}

echo '<br><br>';



// for($i=1; $i<=100; $i++){
//     if($i%3===0){
//         echo 'Fizz ';
//         echo '<br>';
//     }else{
//         echo $i.' ';
//         echo '<br>';
//     }}
// echo '<br><br>';

?>
