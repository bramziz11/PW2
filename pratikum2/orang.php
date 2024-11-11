<?php
class orang {
    // property
    public $nama;
    public $tgllahir;
    public $selamat;

    // constructor
    public function __construct()
    {
        $this->nama = " Anomim ";
    }


    //method
    public function ucapsalam(){
        echo "<h2> Hallo, perkenalkan nama saya" . $this->nama . "</h2>";
    }

    // destructor
    public function __destruct()
    {
        echo "Ini adalah destructor dari" . $this->nama . "<br>";
    }
}
