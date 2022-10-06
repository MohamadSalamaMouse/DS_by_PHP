<?php
include "node.php";
use mylinked\node\node;
class stackByLinkedList{
    private $top;
    public function __construct()
    {
        $this->top=null;
    }

    public function push($element){
        $temp=new node($element);
        if($this->is_empty()){
            $temp->set_next(null);
        }else{
        $temp->set_next($this->top);
        }
        $this->top=$temp;

    }
public function pop(){
 if($this->is_empty()){
     return"stack is empty";
 }else{
    $delete_value= $this->top->get_data();
     $pre=$this->top->get_next();
     $this->top=$pre;
     return $delete_value;
 }
}
public function is_empty(){
return $this->top==null;
}
public function getTop(){
    if($this->is_empty()){
        return"stack is empty";
    }else{
        return $this->top->get_data();
    }

}
}
$s=new stackByLinkedList();
$s->push('salaam');
$s->push('mousa');
echo $s->getTop();