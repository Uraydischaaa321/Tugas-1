<?php

class hewan{
	public $Jumlah_kaki, $bersuara, $bisa_terbang;

	public function cetaktipe(){
		return $this->Jumlah_kaki;
	}
}

class kucing extends hewan{
	public $bisa_terbang = "Tidak Bisa Terbang";
	function bersuara(){
		echo "Meoooong";
	}
}

class anjing extends hewan{
	public $bisa_terbang = "Tidak Bisa Terbang";
	function bersuara(){
		echo "guk guk guk";
	}
}

class elang extends hewan{
	public $bisa_terbang = "Bisa Terbang";
	function bersuara(){
		echo "Miiip miiip miiip";
	}
}

class angsa extends hewan{
	public $bisa_terbang = "Bisa Terbang";
	function bersuara(){
		echo "kwak kwak kwak";
	}
}