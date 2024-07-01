<?php
class PersegiPanjang {
    // Variabel panjang dan lebar
    private $panjang;
    private $lebar;
    
    // Constructor untuk menginisialisasi panjang dan lebar
    public function __construct($panjang, $lebar) {
        $this->panjang = $panjang;
        $this->lebar = $lebar;
    }
    
    // Method untuk mengembalikan luas persegi panjang
    public function luas() {
        return $this->panjang * $this->lebar;
    }
    
    // Method untuk mengembalikan keliling persegi panjang
    public function keliling() {
        return 2 * ($this->panjang + $this->lebar);
    }
}
?>
