<?php
$name = "yukiya";

if ($name = "yukiya"){
  echo "私はyukiyaです";
}else {
    echo "yukiyaではありません";
}

// $1が0から始まり10000まで繰り返す
$total = 0;
for($i = 0; $i <= 10000; $i++){
  $total += $i;
}
echo $total;


$fruits = array("orange","apple","banana","grape","peach");

foreach($fruits as $fruits){
    echo $fruits;
    echo "\n";
}

/*for文の始めの値を定義する */
$start = 1;
/* for文の終わりの値を定義する */
$end = 100;

for($i = $start; $i <= $end; $i++){
  
  //5で割り切れたら{}内を実行する
  if($i % 5 ==0){
    echo $i;
    echo "\n";
  }
}



