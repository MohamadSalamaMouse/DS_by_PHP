<?php
class queue{
    private $rear;
    private $front;
    private $size;
    private $count;
    private $arr=[];
    public function __construct($size)
    {
        $this->size=$size;
        $this->front=0;
        $this->rear=$size-1;
        $this->count=0;

    }
    public function isEmpty(){
        return $this->count==0;
    }
    public function isFull(){
        return $this->count==$this->size;
    }
    public function enqueue($element){
        if($this->isFull()){
            echo "queue is full";
        }else{
            $this->rear=($this->rear+1)%$this->size;
            $this->arr[$this->rear]=$element;
            $this->count++;
        }
    }
    public function dequeue(){
        if($this->isEmpty()){
            echo "queue is empty";
        }else
        {
            $this->front=($this->front+1)%$this->size;
            $this->count--;
        }

    }


    public function frontQueue()
    {
        if($this->isEmpty()){
            return "is empty";
        }
        else
        return $this->arr [$this->front];
    }

    public function RearQueue()
    {

        return $this->arr[ $this->rear];
    }
    public function printQueue()
    {
        $f = $this->front;
        $r = $this->rear;

        while (true) {
            echo "Index: $f, Value: " . $this->arr[$f];
            echo "\n";
            $f = ($f + 1) % $this->size;

            if ($f == (($r + 1) % $this->size))
                break;
        }
    }

}
$q=new queue(4);
//echo $q->isEmpty();
//echo $q->isFull();
$q->enqueue('mohamed');
$q->enqueue('salama');
$q->enqueue('mousa');
//$q->dequeue();
//echo $q->frontQueue();
//echo $q->RearQueue();
$q->printQueue();
