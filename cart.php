<?php
class cart
{
    private $list; //$list => array , $list['product id']= quantity;
    function __construct(){
        $this->list = array();
    }
    function addproduct($pid, $qty){
        if (!key_exists($pid, $this->list)) {
            $this->list[$pid] = $qty;
        }
    }
    function modifyproduct($pid, $qty){
        if (key_exists($pid, $this->list)) {
            $this->list[$pid] = $qty;
        }
    }
    function removeproduct($pid){
        if (!key_exists($pid, $this->list)) {
            unset($this->list[$pid]);
        }
    }
    function clearall(){
        $this->list = array();
    }
    function getall(){ 
        return $this->list;
    }
    function getitemqty($pid){ 
        $ret = -1;
        if (key_exists($pid, $this->list)) {
           $ret = $this->list[$pid];
        }
        return $ret;
    }
}
