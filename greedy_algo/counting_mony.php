<?php
function findMin($denomination,$num){
   $len=count($denomination);
   $arr=[];
    for($i=0;$len>$i;$i++){
    while ($num>=$denomination[$i]){

        $num=$num-$denomination[$i];
        $arr[]=$denomination[$i];

    }}
  return $arr;
}
$arr=[100,50,20,10,5,1,.5,.25,.20,.1,.05,.01];
print_r( findMin($arr,8.67));