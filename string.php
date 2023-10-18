<?php 

$myName = " My name is Paing Thura Kyaw ";

// echo strlen($myName);  //string count

// echo str_word_count($myName); // string 1 လုံးချင်းစီ count || strin word count;

// echo strtolower($myName); // all word are lower case ;

// echo strtoupper($myName); // all word are Upper case ; 

// echo ucfirst($myName); // First word is Upper case;

// echo ucwords($myName); // All First word are Upper case ;

// echo strrev($myName);  // string reverse  eg: => wayK aruhT gniaP si eman yM


// echo strpos($myName,"Paing"); // find strng || search string 


// echo str_replace("Paing","Phyu", $myName); // replace string


// echo str_shuffle($myName); // random word;

//  echo substr($myName,0 ,10); // sub cut;

// echo mb_substr($myName , 0 , 10);  //sub cut but language support!

// echo str_pad("ha",10,"0",STR_PAD_BOTH); // require string fill eg:=> 0000ha0000


// print_r(explode("n", $myName)); // string to array change || ဖြတ်ချင်တာနဲ့ဖြတ်လို့ရသေးတယ် 


echo strlen(trim($myName," Thura Kyaw "));



?>