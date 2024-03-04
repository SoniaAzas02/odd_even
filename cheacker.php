<?php
    //$number = 1;
    //$sum = 0;
   // while($number<5)
   // {
    //    $sum =$number+$sum;
      //  echo $sum."<br>";
       // echo $number."</br>";
       // $number = $number +1;
    //}
    
    // for($i=100;$i<=100;$i--)
    // {
    //     echo $i ."<br>";
    // }
    
    $even = "";
    $odd ="";
     $n= $_GET["number"];
     
     for($i=1;$i<=$n;$i++)
    {
        $modu = $i%2;
     if($modu==0){

      $even = "" ;
         echo $even."</br>";
     }else($modu==1){

        $odd = "";
        echo $i."</br>";
    }
}
        
       
     
    // $odd = trim($even,",");

   
  
    