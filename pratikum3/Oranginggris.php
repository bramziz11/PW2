<?php

require_once "Orang.php";

class OrangInggris extends Orang{

    //override
    public function ucapsalam(){

        echo "Hello my name is" . $this->nama . "<br>";
    }

}