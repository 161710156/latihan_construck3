<?php
class laptop{

public $pemilik, $merk, $ukuran_layar;

public function __construct($pemilik, $merk, $ukuran_layar)
{
	$this->pemilik = $pemilik;
	$this->merk = $merk;
	$this->ukuran_layar = $ukuran_layar;
}
public function get_pemilik()
{
	return $this->pemilik;
}
public function get_merk()
{
	return $this->merk;
}
public function get_ukuran()
{
	return $this->ukuran_layar;
}

}
?>