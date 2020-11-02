<?php
// MAIN CLASS

// CLASS FIGHT
trait Fight {
  public $attackPower, $defendPower;

  public function serang($lawan){
    $this->siapa = $lawan;
    $serang= "{$this->nama} sedang menyerang {$this->siapa}";
    return $serang;
  }

  public function diserang(){
    $diserang = "{$this->nama} sedang diserang";
    return $diserang;
  }

  // HEWAN BERKELAHI
  public function animalFight(){
    $darahBerkurang = $this->darah - ( $this->attackPower / $this->defendPower);
    return "Darah {$this->nama} berkurang menjadi {$darahBerkurang}";
  }
}

// CLASS HEWAN
trait Hewan {
  public $nama, $darah = 50, $jumlahKaki, $keahlian;

  // ATRAKSI HEWAN
  public function atraksi() {
    $aksi = "{$this->nama} sedang {$this->keahlian}";
    return $aksi;
  }
}

// CLASS HARIMAU
class Harimau {
  use Fight, Hewan;

  public function __construct($nama)
  {
    $this->nama = $nama;
    $this->jumlahKaki = 4;
    $this->attackPower= 7;
    $this->defendPower = 8;
    $this->keahlian= "lari cepat";
  }

}

// CLASS ELANG
class Elang {
  use Fight, Hewan;

  public function __construct($nama)
  {
    $this->nama = $nama;
    $this->jumlahKaki = 2;
    $this->attackPower = 10;
    $this->defendPower = 5;
    $this->keahlian= "terbang tinggi";
  }

}

// HARIMAU HASIL
echo "KEGIATAN HARIMAU";
echo "<br>";
$harimau1 = new Harimau("Harimau");
// HARIMAU MENYERANG
echo $harimau1->serang("elang");
echo "<br>";
// HARIMAU DISERANG
echo $harimau1->diserang("elang");
echo "<br>";
// HARIMAU ATRAKSI
echo $harimau1->atraksi();
echo "<br>";
// HARIMAU BERKELAHI
echo $harimau1->animalFight();


echo "<br>";
echo "-------------------------------------------------------------";
echo "<br>";

// ELANG HASIL
echo "KEGIATAN ELANG";
echo "<br>";
$elang1 = new Elang("Elang");
//ELANG MENYERANG
echo $elang1->serang("elang");
echo "<br>";
//ELANG DISERANG
echo $elang1->diserang("elang");
echo "<br>";
//ELANG ATRAKSI
echo $elang1->atraksi();
echo "<br>";
//ELANG BERKELAHI
echo $elang1->animalFight();