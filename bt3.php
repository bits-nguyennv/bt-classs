<?php
    class human {
        public $name ='nguyên';
        public function sleep(){
        return $this->name;
        }
    }
    $ten = new human();
    echo $ten->name;
?>
