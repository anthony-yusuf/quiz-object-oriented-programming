<?php
    // Bangun Datar
    class BangunDatar {
        function luas(){

        }

        function keliling(){

        }
    }






    // Descriptor
    class Descriptor {
        public static function describe($namaBangunDatar, $luas, $keliling) {
            echo "Bangun datar ini adalah ".$namaBangunDatar." yang memiliki luas ".$luas." dan keliling ".$keliling;
        }
    }






    // Persegi
    class Persegi extends BangunDatar {
        private float $sisi;

        function __construct($sisi){
            $this->sisi = $sisi;
        }

        function luas(){
            echo "Luas ". get_class(). " = "."sisi"." * "."sisi";
            echo "<br>";
            echo $this->sisi." * ".$this->sisi." = ".($this->sisi * $this->sisi);
            echo "<br><br>";
        }

        function nilailuas(){
            return $this->sisi * $this->sisi;
        }

        function keliling(){
            echo "Keliling ". get_class(). " = "."4"." * "."sisi";
            echo "<br>";
            echo "4"." * ".$this->sisi." = ".(4 * $this->sisi);
            echo "<br><br>";
        }

        function nilaiKeliling(){
            return 4 * $this->sisi;
        }
    }

    $persegi = new Persegi(10);
    $persegi->luas();
    $persegi->keliling();
    Descriptor::describe("Persegi", $persegi->nilailuas(), $persegi->nilaikeliling());






    // Lingkaran
    class Lingkaran extends BangunDatar {
        private float $jari2;

        function __construct($jari2){
            $this->jari2 = $jari2;
        }
        
        function luas(){
            // echo "Luas ". get_class(). " = ".number_format(pi(),2)." * "." r "." * "." r ";
            echo "<br><br><br><br>";
            echo "Luas ". get_class(). " = "."&pi;"." * "." r "."<sup>2</sup>";
            echo "<br>";
            echo number_format(pi(),2)." * ".$this->jari2." * ".$this->jari2." = ". (number_format(pi(),2) * pow($this->jari2,2));
            echo "<br><br>";
        }

        function nilailuas(){
            return number_format(pi(),2) * pow($this->jari2,2);
        }

        function keliling(){
            echo "Keliling ". get_class(). " = "."2"." * "."&pi;"." * "." r ";
            echo "<br>";
            echo "2"." * ".number_format(pi(),2)." * ".$this->jari2." = ". (2 * number_format(pi(),2) * $this->jari2);
            echo "<br><br>";
        }

        function nilaikeliling(){
            return 2 * number_format(pi(),2) * $this->jari2;
        }
    }

    $lingkaran = new Lingkaran(10);
    $lingkaran->luas();
    $lingkaran->keliling();
    Descriptor::describe("Lingkaran", $lingkaran->nilailuas(), $lingkaran->nilaikeliling());



    


    // Persegi Panjang
    class PersegiPanjang extends BangunDatar {
        private float $panjang;
        private float $lebar;
        
        function __construct($panjang, $lebar){
            $this->panjang = $panjang;
            $this->lebar = $lebar;
        }

        function luas(){
            echo "<br><br><br><br>";
            echo "Luas Persegi Panjang"." = "."panjang"." * "."lebar";
            echo "<br>";
            echo $this->panjang." * ".$this->lebar." = ".($this->panjang*$this->lebar);
            echo "<br><br>";
        }

        function nilailuas(){
            return $this->panjang*$this->lebar;
        }

        function keliling(){
            echo "Keliling Persegi Panjang"." = "."("."2"." * "."panjang".")"." + "."("."2"." * "."lebar".")";
            echo "<br>";
            echo "("."2"." * ".$this->panjang.")"." + "."("."2"." * ".$this->lebar.")"." = ". ((2*$this->panjang) + (2*$this->lebar)). "\n";
            echo "<br><br>";
        }

        function nilaikeliling(){
            return (2*$this->panjang) + (2*$this->lebar);
        }
    }

    $persegi_panjang = new PersegiPanjang(9,6);
    $persegi_panjang->luas();
    $persegi_panjang->keliling();
    Descriptor::describe("Persegi Panjang", $persegi_panjang->nilailuas(), $persegi_panjang->nilaikeliling());

?>