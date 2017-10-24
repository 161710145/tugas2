<?php
require_once '1.php';
$sepeda = new sepeda ('BMX','2018');
echo"<h3>sepeda</h3>";
echo "merek :".$sepeda->get_merek().'<br>';
echo "keluaran :".$sepeda->get_keluaran().'<br>';
?>