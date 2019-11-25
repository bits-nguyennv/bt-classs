<?php
class MyCalculator {  
    private $_fval, $_sval;  
    
    public function __construct( $fval, $sval ) {  
      $this->_fval = $fval;  
      $this->_sval = $sval;  
    }  
    
    public function add() {  
      return $this->_fval + $this->_sval;  
    }  
    
    public function subtract() {  
      return $this->_fval - $this->_sval;  
    }  
    
    public function multiply() {  
      return $this->_fval * $this->_sval;  
    }  
  
    public function divide() {  
      return $this->_fval / $this->_sval;  
    }  
  }  
  $mycalc = new MyCalculator(12, 6);   
  echo $mycalc-> add(); 
  echo "<br>";
  echo $mycalc-> multiply(); 
  echo "<br>";
  echo $mycalc-> subtract(); 
  echo "<br>";
  echo $mycalc-> divide();
?>
