<?php
//課題1
function double($q){
    return $q * 2;
}
echo double(3);

//課題2
function add($a, $b){
    return $a + $b;
}
echo add($a=6,$b=7);

//課題3
function kakeru($arr) {
    $result = $arr[0];
    //$arrの0～4まで繰り返す
     for($i = 1; $i < count($arr); $i++ ){
         $result *= $arr[$i];
    }
    return $result ;
} 
$array = [1,3,5,7,9];
echo kakeru($array);

//課題4
function max_array($arr){
// とりあえず配列の最初の要素を一番大きい値とする
 $max_number = $arr[0];
 foreach($arr as $a){
//以下3行を記述しました
  if ($max_number < $a){
    $max_number = $a;  
  }
 }
 return $max_number;
 }

//課題5
//strip_tags　文字列から HTML および PHP タグを取り除く、指定した要素を残すこともできる
//array_push  配列の最後に指定の要素を追加する
//array_merge 配列と配列を結合する
//time, mktime 1970年1月1日からの秒数を取得する.指定の日付から1970年1月1日までの秒数を取得する
//date 現在の年月日時間分秒を取得できる


