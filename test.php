<?php

$input= array(10,5,2,"D","D","+");
$output=array();

$count = count($input);

for($i=0; $i<$count;$i++){
     
    if($input[$i]<>"C" && $input[$i]<>"D" && $input[$i]<>"+"){
        array_push($output,$input[$i]);
    }
    else if($input[$i]=="C"){
       unset($output[count($output)-1]);
    }
    else if($input[$i]=="D"){
        array_push($output,end($output)*2);
    //echo $output[$i];
    }
    else if($input[$i]=="+"){
        array_push($output,end($output)+prev($output));
    }
    // echo " ,". $input[$i];

    
}

$count=count($output);
foreach($output as $item){
   echo " ".$item;

}

// foreach($input as $item){
//     echo " ,". $item;
    
//     if($item<>"C" && $item<>"D" && $item<>"+"){
//         array_push($output,$item);
//     }
//     else if($item="C"){
//         unset
//     }
    









?>