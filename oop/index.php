<?php
class BangunDatar
{
  public float $luas = 0;
  public float $keliling = 0;
  public int $enlarge = 0;
  public int $shrink = 0;
}

class Lingkaran extends BangunDatar
{
  public function area($r)
  {
    $this->luas = ($r * $r * 3.14);
  }

  public function circumference($r)
  {
    $this->keliling = ($r * 2 * 3.14);
  }
}

class Persegi extends BangunDatar
{
  public function area($s)
  {
    $this->luas = ($s * $s);
  }

  public function circumference($s)
  {
    $this->keliling = ($s * 4);
  }
}

class PersegiPanjang extends BangunDatar
{
  public function area($p, $l)
  {
    $this->luas = ($p * $l);
  }

  public function circumference($p, $l)
  {
    if ($p != 0 && $l != 0) {
      $this->keliling = (($p + $l) * 2);
    } else {
      $this->keliling = 0;
    }
  }
}

class Descriptor extends BangunDatar
{
  public function describe($name, $a, $b = 0)
  {
    if (strtolower($name) == 'lingkaran') {
      $lingkaran = new Lingkaran();
      $lingkaran->area($a);
      $lingkaran->circumference($a);
      $message = "Bangun datar ini adalah $name dengan luas $lingkaran->luas dan keliling $lingkaran->keliling";
      echo $message;
    } else if (strtolower($name) == 'persegi') {
      $persegi = new Persegi();
      $persegi->area($a);
      $persegi->circumference($a);
      $message = "Bangun datar ini adalah $name dengan luas $persegi->luas dan keliling $persegi->keliling";
      echo $message;
    } else {
      $persegiPanjang = new PersegiPanjang();
      $persegiPanjang->area($a, $b);
      $persegiPanjang->circumference($a, $b);
      $message = "Bangun datar ini adalah $name dengan luas $persegiPanjang->luas dan keliling $persegiPanjang->keliling";
      echo $message;
    }
  }
}

$describe = new Descriptor();
$describe->describe("persegi panjang", 5);
