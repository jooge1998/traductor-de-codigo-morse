<?php

class traductor{

    private $morse = [
        "a" => ".-", "b" => "-...", "c" => "-.-.", "d" => "-..", "e" => ".",
        "f" => "..-.", "g" => "--.", "h" => "....", "i" => "..", "j" => ".---",
        "k" => "-.-", "l" => ".-..", "m" => "--", "n" => "-.", "o" => "---",
        "p" => ".--.", "q" => "--.-", "r" => ".-.", "s" => "...", "t" => "-",
        "u" => "..-", "v" => "...-", "w" => ".--", "x" => "-..-", "y" => "-.--",
        "z" => "--.."
    ];

    // una sola funcion para ambas
    function traducto($palabra, $op){

        $pal = (!strcmp($op, "morse")) ? explode(" ", $palabra) : str_split($palabra);      // operador ternario

        $total = "";
        $con = true;
        $i = 0;

        while ($con) {
            foreach ($this->morse as $key => $value) {

                if (!strcmp($retVal = (!strcmp($op, "morse")) ? $value : $key
                , $pal[$i])) {

                    $total = $total . " " . $ret = (!strcmp($op, "morse")) ? $key : $value ;

                    if ($i < count($pal) - 1) {
                        $i++;
                    } else {
                        $con = false;
                    }
                }
            }
        }

        $total = (!strcmp($op, "morse")) ? str_replace(' ', '', $total): $total ;
    
        echo "Texto resultado: <br>";
        echo "<div class='alert alert-success mt-2' role='alert'>
             $total
    </div> ";
    }

    // traduce de codigo morse a texto
    function morseTxt($palabra){

        $pal = explode(" ", $palabra); // divide una palabra en caracteres     
        $total = "";
        $con = true;
        $i = 0;

        while ($con) {
            foreach ($this->morse as $key => $value) {

                if (!strcmp($value, $pal[$i])) {    // comparar 2 cadena de texto

                    $total = $total . " " . $key;

                    if ($i < count($pal) - 1) {
                        $i++;
                    } else {
                        $con = false;
                    }
                }
            }
        }

        $total = str_replace(' ', '', $total);  // elimina los espacios

        echo "Texto resultado: <br>";
        echo "<div class='alert alert-success mt-2' role='alert'>
             $total
            </div> ";
    }

    // traduce de texto a codigo morse
    function txtMorse($palabra){

        $pal = str_split($palabra); // convierte string a array
        $total = "";
        $con = true;
        $i = 0;

        while ($con) {

            foreach ($this->morse as $key => $value) {

                if (!strcmp($key, $pal[$i])) {

                    $total = $total . " " . $value;

                    if ($i < count($pal) - 1) {

                        $i++;
                    } else {
                        $con = false;
                    }
                }
            }
        }

        echo "Texto resultado: <br>";
        echo "<div class='alert alert-success mt-2' role='alert'>
             $total
    </div> ";
    }
}
