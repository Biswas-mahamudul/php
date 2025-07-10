<?php
 abstract class user{
    abstract public function getName();
    public function display(){
        echo"third";
    }
}
class wdpf extends user{
    public function getName(){
        echo"done";
    }
      public function display(){
        echo"third";
}

}
?>