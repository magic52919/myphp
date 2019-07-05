<?php
class bike
{   //private 外部  子都不能繼承
    //protected 子可以繼承
    protected $speed = 0;
    function upspeed()
    {
        $this->speed = $this->speed < 1 ? 1 : $this->speed * 1.2;
    }
    function downspeed()
    {
        $this->speed = $this->speed < 1 ? 0 : $this->speed * 0.7;
    }
    function getspeed()
    {
        return $this->speed;
    }
}
class scooter extends bike
{
    private $gear = 0;
    function chGear($gear)
    {
        $this->gear = $gear;
    }
    function upspeed()
    //override
    {
        parent::upspeed(); //父類別的呼叫

    }
    function upspeedv2()
    {
        $this->speed = $this->speed < 1 ? 1 : $this->speed * ($this->gear * 2);
    }
}
class person
{
    private $mybike;
    private $myscoore;
    private $myname;
    //建構式 建構子 建構方法 有定義該方法會直接被呼叫 =>物件的初始化程序 (最初)
    function __construct($name)
    { 
        $this->mybike = new bike;
        $this->myscoore = new scooter;
        $this->myname = $name;
    }
    //解構式
    function __destruct()
    {
        
    }
}
$b1 = new bike;
$b2 = new bike;
$b1->upspeed();
$b1->upspeed();
$b1->upspeed();
$b1->upspeed();
$b1->downspeed();
$b2->upspeed();
$b2->downspeed();
echo $b1->getspeed() . '<br>';
$s1 = new scooter;
$s1->upspeed();
$s1->upspeed();
echo '<hr>';
echo $s1->getspeed() . '<br>';
$s1->chGear(4);
$s1->upspeedv2();
$s1->upspeedv2();
echo $s1->getspeed() . '<br>';
echo '<hr>';
$p1 = new person('magic');
var_dump($p1);
