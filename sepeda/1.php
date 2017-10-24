<?php
class sepeda{

	public $merek;
	public $keluaran;
//konstraktor
public function __construct($merek,$keluaran){
	$this->merek = $merek;
	$this->keluaran = $keluaran;
}
public function get_merek()
	{
	return	$this->merek;
	}
public function get_keluaran()
	{
	return	$this->keluaran;
}
 }
?>