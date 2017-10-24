<?php

require_once 'konstrak.php';

$laptop = new laptop('Pawit', 'Asus', '15 inci');
echo "Nama pemilik = ".$laptop->get_pemilik().'<br>';
echo "Merk laptop = ".$laptop->get_merk().'<br>';
echo "Ukuran laptop = ".$laptop->get_ukuran().'<br>';

?>