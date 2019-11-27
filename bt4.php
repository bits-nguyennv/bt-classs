<?php
class tinh_giai_thua  
{  
  protected $n;  
  public function __construct($n)  
    {  
          if (!is_int($n))  
          {  
               echo ('Không phải tham số!');  
          }  
          $this->set_n = $n;  
    }  
  public function result()  
    {  
          $giai_thua = 1;  
          for ($i = 1; $i <= $this->set_n; $i++)  
          {  
               $giai_thua *= $i;  
          }  
          return $giai_thua;  
     }  
}  
$ket_qua = New tinh_giai_thua(5);  
echo $ket_qua->result();




?>