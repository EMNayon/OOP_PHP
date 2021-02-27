<?php

class Calculation{
    //Method
    function add($x, $y){
        // $c = $x + $y;
        // echo "Sumation : ".$c."<br>"; 
        echo "Sumation : ".($x + $y)."<br>"; 
        
    }
    function sub($x, $y){
        // $c = $x - $y;
        // echo "Substraction : ".$c."<br>"; 
        echo "Substraction : ".($x - $y)."<br>"; 
    }
    function mul($x, $y){
        // $c = $x * $y;
        // echo "Multiplicand : ".$c."<br>"; 
        echo "Multiplicand : ".($x * $y)."<br>"; 
    }
    function div($x, $y){
        // $c = $x / $y;
        // echo "Division : ".$c."<br>"; 
        echo "Division : ".($x / $y)."<br>"; 
    }
}

?>