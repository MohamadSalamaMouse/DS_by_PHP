<?php
namespace stack\stack;
class stack{
    private $top;
    private $item;
    public  function __construct()
    {
        $this->top=-1;
        $this->item=[];
    }

    public function push($element){
      $this->top++;
      $this->item[$this->top]=$element;
    }
    public function isEmpty(){
        return $this->top<0;
    }
    public function pop(){
        if($this->isEmpty()){
            return "stack isEmpty";
        }else{
            $top=$this->top;
            $this->top--;
            return $this->item[$top];
        }
    }
    public  function getTop(){
        if($this->isEmpty()){
            return "stack isEmpty";
        }else{
        return $this->item[$this->top];
        }
    }
    public function printItem(){
for ($i=$this->top;$i>=0;$i--){
    echo $this->item[$i]."<br>";
}
    }
}
$stack1=new stack();
//$stack1->push('mohamed');
//$stack1->push('salama');
//$stack1->push(1);
//echo $stack1->pop();
//echo $stack1->isEmpty();
//$stack1->printItem();