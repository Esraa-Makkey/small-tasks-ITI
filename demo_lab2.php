<?php
// (1) how to make \n work in browser
    $string = "Thanks for your great effort with us :\n Eng.Noha";
    echo nl2br($string);
    echo "<br>***********************************************************<br>";
// (2) 3 built-in function of a String
    //addcslashes() Function : returns a string with backslashes in front of the specified characters.
    $str = addcslashes("Hello World!","W");
    echo($str);
    echo "<br>";
    //The join() function : returns a string from the elements of an array.
    $arr = array('Hello','World!','Beautiful','Day!');
    echo join(" ",$arr);
    echo "<br>";
    //The ucwords() function : converts the first character of each word in a string to uppercase.
    echo ucwords("if you want 2022 to be your year : <br> 
                                                    go out. <br> 
                                                    make a change. <br>
                                                    smile more.<br> 
                                                    be excited.<br>
                                                    do new things<br>
                                                    show more gratitude.<br>
                                                    do things that challenge you.<br>
                                                    be brave.<br>");
// (3) Display $_SERVER in readable format.
    //var_dump($_SERVER);
     echo "<br>***********************************************************<br>";
        foreach($_SERVER as $key => $value){
            echo "<b>$key:</b> $value<br>\n";
          };
    echo "<br>***********************************************************<br>";  
/*  (4) Write a PHP script to get the sum and avg of an indexed array
with value = 45 in index =1
 with value = 12 in index =0
 with value = 25 in index =3
with value = 10 in index =2

after that sort it in a reverse order (highest to lowest). */
    
    /*function add_Function($num1 = $numbers[0], $num2 = $numbers[1],$num3 = $numbers[2],$num4 = $numbers[3] ) {
        $sum = $num1 + $num2 + $num3 +$num4;
        return $sum;
     }    
     $sum_function = add_Function();
     echo "sum of array : $sum_function";   "wrong solution" */
     // first solution:
    function add_function(){
        $numbers = [12,45,10,25];
         $sum =$numbers[0]+$numbers[1]+$numbers[2]+$numbers[3] ;
         $argv = $sum / 4 ;
        echo "sum of array :$sum <br> ";
        echo " average of array:$argv<br>";
      };
      function ascending_Array(){
        $numbers = [12,45,10,25];
        $arrlength = count($numbers);
        for($x = 0; $x < $arrlength; $x++) {
            echo $numbers[$x];
            echo "<br>";
        }
      };

     echo add_Function();
     echo "descending array is :<br>";
     echo ascending_Array();

    echo "<br>***********************************************************<br>";  
    //second solution :
        $numbers = [12,45,10,25];
        echo "sum of array : ".array_sum($numbers)."<br>";
       echo "averag of array is :".$average = array_sum($numbers) / count($numbers)."<br>";
       rsort($numbers);
       $arrlength = count($numbers);
        echo "descending array is : <br>";
        for($x = 0; $x < $arrlength; $x++) {
            echo $numbers[$x];
            echo "<br>";
        };
        echo "<br>***********************************************************<br>";    
/* (5) array("Sara"=>"31","John"=>"41","Walaa"=>"39","Ramy"=>"40") in
a) ascending order sort by value
b) ascending order sort by Key
c) descending order sorting by Value
d) descending order sorting by Key   */
        $age =  array("Sara" => 31 , "John" => 41 , "Walaa" => 39 , "Ramy" => 40);
        // descending by value
        rsort($age);
        $arrlength = count($age);
        echo "descending array by value  is : <br>";
        foreach($age as $a_value){
                echo " Value=" . $a_value;
                echo "<br>";
                };
        //descending by key
        krsort($age);
        $arrlength = count($age);
        echo "descending array by key  is : <br>";
        foreach($age as $a =>$a_value){
                echo " key=" .  $a ;
                echo "<br>";
                };
        // ascending by value
        asort($age);
         $arrlength = count($age);
        echo "ascending array by value  is : <br>";
        foreach($age as $a_value){
                echo " Value=" . $a_value;
                 echo "<br>";
                 };
        //ascending by key
        ksort($age);
        $arrlength = count($age);
        echo "descending array by key  is : <br>";
        foreach($age as $a =>$a_value){
                echo " key=" .  $a ;
                echo "<br>";
                };
echo "<br>*************************************************************************************<br>";




      
    
    