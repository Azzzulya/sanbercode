<?php
// MAIN CLASS

// CLASS FIGHT
trait Fight {
  public $attackPower, $defendPower, $attackPower1;

  public function serang($lawan){
    $this->lawan = $lawan;
    $serang= "{$this->nama} sedang menyerang {$this->lawan}";
    return $serang;
  }

  public function diserang($attack){
    $this->attack = $attack;
    $darahBerkurang = $this->darah - ($this->attack / $this->defendPower);
    $diserang = "{$this->nama} sedang diserang, darah berkurang menjadi {$darahBerkurang}";
    return $diserang;
  }

  // // HEWAN BERKELAHI
  // public function animalFight(){
  //   $darahBerkurang = $this->darah - ( $this->attackPower / $this->defendPower);
  //   return "Darah {$this->nama} berkurang menjadi {$darahBerkurang}";
  // }
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
echo $harimau1->diserang(10);
echo "<br>";
// HARIMAU ATRAKSI
echo $harimau1->atraksi();
echo "<br>";


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
echo $elang1->diserang(7);
echo "<br>";
//ELANG ATRAKSI
echo $elang1->atraksi();
echo "<br>";
