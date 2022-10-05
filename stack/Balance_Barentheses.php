<?php
include 'stack.php';
use stack\stack\stack;
function par_checker($symbol_string){
    $newStack=new stack();
    $balanced=true;
    $index=0;
    while ($balanced && $index<strlen($symbol_string)){
        $symbol=$symbol_string[$index];
        if($symbol=="("){
            $newStack->push($symbol);
        }else{
            if($newStack->isEmpty()){
                $balanced=false;
            }else{
                $newStack->pop();
            }
        }
        $index++;
    }
    if ($balanced && $newStack->isEmpty())
        return "IS Balanced";
    else
        return "Not Balanced";
}

echo par_checker("((())");

