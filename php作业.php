<?php
class School{
   public static $name;
   public static $address;
   public static $zip;
   public $headmaster;
   public function __construct($n,$a,$z,$h){
       self::$name=$n;
       self::$address=$a;
       self::$zip=$z;
       $this->headmaster=$h;
   }
   public static function OutputSchool(){
       echo self::$name."<br/>".self::$address."<br/>".self::$zip."<be/>";
   }
   public function __toString(){
       return "校名：".self::$name."地址：".self::$address."邮政编码：".self::$zip."校长：".$this->headmaster;"<br/>";
   }
}
$a=new School("温州","高科路58号"."325035","谢");
School::OutputSchool();
echo $a->__toString();

?>