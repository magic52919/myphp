<?php
function isTWId($id): bool
{
    $ret = false;
    if (preg_match("/^[A-Z][12][0-9]{8}$/", $id)) {
        $letters = 'ABCDEFGHJKLMNPQRSTUVXYWZIO';
        $c1 = substr($id, 0, 1);
        $n12 = strpos($letters, $c1) + 10;
        $n1 = (int) ($n12 / 10);
        $n2 = $n12 % 10;
        $n3 = substr($id, 1, 1);
        $n4 = substr($id, 2, 1);
        $n5 = substr($id, 3, 1);
        $n6 = substr($id, 4, 1);
        $n7 = substr($id, 5, 1);
        $n8 = substr($id, 6, 1);
        $n9 = substr($id, 7, 1);
        $n10 = substr($id, 8, 1);
        $n11 = substr($id, 9, 1);
        $sum = $n1 * 1 + $n2 * 9 + $n3 * 8 + $n4 * 7 + $n5 * 6 + $n6 * 5 +
            $n7 * 4 + $n8 * 3 + $n9 * 2 + $n10 * 1 + $n11 * 1;
        $ret = $sum % 10 == 0;
    }
    return $ret;
}
function creatwid($isMale = true): string
{
    $letters = 'ABCDEFGHJKLMNPQRSTUVXYWZIO';
    $id = substr($letters, rand(0, 25), 1);
    $id .= $isMale ? '1' : '2';
    for ($i = 0; $i < 7; $i++) $id .= rand(0, 9);
    for ($i = 0; $i < 9; $i++) {
        if (isTWId($id . $i)) {
            $id .= $i;
            break;
        }
    }
    return $id;
}
class student
{
    private $ch, $en, $math;
    public function __construct($ch, $en, $math)
    {
        $this->ch = $ch;
        $this->en = $en;
        $this->math = $math;
    }
    public function sum(){
        return $this->ch+$this->en+$this->math;
    }
    public function avg(){
        return $this->sum() / 3;
    }
    public function setch($new){$this->ch = $new;}
}
