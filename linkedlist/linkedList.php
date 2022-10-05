<?php

namespace mylinked\linkedList;
include 'node.php';
use mylinked\node\node;

class linkedList{
    private $head;

public function __construct()
{
    $this->head=null;
}
public function is_empty(){
    return $this->head==null;
}
public function addAtBeginning($item){
    $temp=new node($item);
    $temp->set_next($this->head);
    $this->head=$temp;
}
public function size(){
    $current=$this->head;
    $count=0;
    while ($current !=null){
        $count++;
        $current=$current->get_next();
    }
    return $count;
}
public function search($item){
    $current=$this->head;
    $found=false;
    while ($current !=null &&  !$found){
        if ($current->get_data()==$item){
            $found=true;

        }else{
            $current=$current->get_next();
        }
    }
    return $found;
}
public  function remove($item){
    $current=$this->head;
    $previous=null;
    $found=false;
    while (!$found){
        if($current->get_data()==$item){
            $found=true;
        }else{
            $previous=$current;
            $current=$current->get_next();

        }
    }
    if ($previous==null){
        $this->head=$current->get_next();
    }else{
        $previous->set_next($current->get_next());
    }
}
public function addATEnd($item){
    $newNode=new node($item);
    $current=$this->head;
    while ($current->get_next()!=null){
        $current=$current->get_next();
    }
    $current->set_next($newNode);
}
public function addAtPosition($item,$pos){
    if($this->size() <$pos && $pos<0){
        return null;
    }else{
        $newNode=new node($item);
        $count=0;
        $current=$this->head;
        while ($count <$pos-1){
            $count++;
            $current=$current->get_next();
        }
        $newNode->set_next($current->get_next());
        $current->set_next($newNode);
    }

}
public function clear(){
    $this->head=null;
}
public function printItems(){
    $current=$this->head;
    echo "All items in list"."<br>";
    while ($current !=null){
        echo $current->get_data()."<br>";
        $current=$current->get_next();
    }
}

}

//test
$names=new linkedList();
$names->addAtBeginning('mohamed');
$names->addAtPosition('salama',1);
echo $names->size()."<br>";
echo $names->search('salama').'<br>';
$names->addATEnd(12);

echo $names->size()."size"."<br>";
//$names->clear();
//echo $names->size()." size after clear "."<br>";
//$names->remove('salama');
//echo $names->size()."size after remove"."<br>";
$names->printItems();




