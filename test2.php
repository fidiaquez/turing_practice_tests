<?php

$input= "{} {} []";
$input= str_replace(",","",$input);
$output=array();
$output = str_split($input);
$i=0;
$value="OK";


   
    while($i<=count($output)-2){
        
        if($output[$i]<>"(" && $output[$i]<>"[" && $output[$i]<>"{"  ){
            //echo $output[$i];
            $value="Error";
            break;
        }
        else{
            if($output[$i]=="(" && $output[$i+1]<>")"){
                $value="Error"; break;
            }   
            else if($output[$i]=="[" && $output[$i+1]<>"]"){
                $value="Error"; break;
            }   
            else if($output[$i]=="{" && $output[$i+1]<>"}"){
                $value="Error"; break;
            } 
           
        }
        echo $i." ".$output[$i]." ".$output[$i+1];
        $i=$i+3; 
      
    }

 
echo $value;

?>