<?php

function stringToArray($string){

    $components = preg_split("/[|]/", $string);

    $array = [];

    foreach( $components as $component ){

        $arrayItem = preg_split("/[:]/", $component);

        $array[$arrayItem[0]] = $arrayItem[1];

    }

    return $array;

}

function ArrayToString($array){

    $string = "";

    foreach( $array as $key => $value ){

        $string .= $key.":".$value."|";

    }

    $string = substr($string, 0, -1);

    return $string;

}

$stringArray = "transaction_id:1|token:7FdOhDGseBjxovTUyv56oXKOw8QIAA"; 

$array = [
    "transaction_id" => 1, 
    "token" => "7FdOhDGseBjxovTUyv56oXKOw8QIAA"
];

echo "<h4>String to Array</h4>";

print_r(stringToArray($stringArray));

echo "<br><br>";

echo "<h4>Array to String</h4>";

print_r(ArrayToString($array));