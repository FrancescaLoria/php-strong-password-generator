<?php
    function passGenerator(){
        $generatedPass = "";
        $passLength = $_GET["pwd"];
        $chars = [];
         $chars = array_merge(range("a","z"),range("A", "Z"),range(0,9));
        $chars[] = "?";  
        $chars[] = "!";
        $chars[] = "%";
        

        while (strlen($generatedPass) < $passLength ) {
           $randomNum = rand(0, count($chars));

           $generatedPass = $generatedPass . $chars[$randomNum];
        }

        return $generatedPass;
    }


?>