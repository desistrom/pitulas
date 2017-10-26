<?php 
	/**
	* 
	*/
	class Pusat_informasi extends MX_Controller
	{
		
		function __construct()
		{
			parent::__construct();
		}

		public function harga_beras()
		{
			$this->ciparser->new_parse('template','modules_home','harga-beras');
		}

		public function stock_beras()
		{
			$this->ciparser->new_parse('template','modules_home','stock-beras');
		}

		public function harga_polyback()
		{
			$this->ciparser->new_parse('template','modules_home','harga-polyback');
		}

		public function stock_polyback()
		{
			$this->ciparser->new_parse('template','modules_home','stock-polyback');
		}

		public function matrix_10()
		{
			$this->ciparser->new_parse('template','modules_home','matrix-10');
		}
	}
 ?>