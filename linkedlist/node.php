<?php
namespace mylinked\node;
class node{
    private $data;
    private $next;
    public  function __construct($data)
    {
        $this->data=$data;
        $this->next=null;
    }
    public function get_data(){
        return $this->data;
    }
    public function get_next(){
        return $this->next;
    }
    public  function set_data($newDate){
        $this->data=$newDate;
    }
    public function set_next($newNext){
        $this->next=$newNext;
    }
}
