<?php
class sap_xep_mang  
	{  
        protected $_asort;  
            
        public function __construct($asort)  
            {  
            $this->set_asort = $asort;  
            }  
        public function ham_sap_xep()  
            {  
            $sorted = $this->set_asort;  
            sort($sorted);  
            return $sorted;  
            }  
	}  
		$sortarray = new sap_xep_mang(array(11, -2, 4, 35, 0, 8, -9));  
		print_r($sortarray->ham_sap_xep())."<br>";
?>
