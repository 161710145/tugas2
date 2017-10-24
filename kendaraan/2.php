<?php
require_once '1.php';
$motor = new motor ('suzuki','2007','250cc','biru');
echo"<h3>motor</h3>";
echo "nama :".$motor->get_nama().'<br>';
echo "keluaran :".$motor->get_keluaran().'<br>';
echo "kelas :".$motor->get_kelas().'<br>';
echo "warna :".$motor->get_warna().'<br>';
?>