<?php
class human {
public $name ='nguyen';
public function sleep(){
    return $this->name;
}
}
$ten = new human();
echo $ten->name;

?>