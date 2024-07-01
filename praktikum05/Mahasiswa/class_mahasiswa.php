<?php
class Mahasiswa{
    var $nim;
    var $nama;
    var $thn_akt;
    var $prodi;
    var $ipk;
    function __construct($nim, $nama) {
        $this->nim = $nim;
        $this->nama = $nama;
        
    }

    function predikat_ipk(){
        if ($this->ipk < 2.0){
            return "Cukup";
        } else if ($this->ipk >= 2.0 && $this->ipk < 3.0){
            return "Baik";
        } else if ($this->ipk >= 3.0 && $this->ipk < 3.75){
            return "Memuaskan";
        } elseif ($this->ipk >= 3.75 && $this->ipk < 4){
            return "Cumlaude";
        }
    }
}
?>