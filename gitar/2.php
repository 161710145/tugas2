<?php
require_once '1.php';
$gitar = new gitar ('yamaha','2015');
echo"<h3>gitar</h3>";
echo "merek :".$gitar->get_merek().'<br>';
echo "keluaran :".$gitar->get_keluaran().'<br>';
?>