<?php 
	/**
	* 
	*/
	class Bidang_usaha extends MX_Controller
	{
		
		function __construct()
		{
			parent::__construct();
		}

		public function perdagangan()
		{
			$this->ciparser->new_parse('template','modules_home','perdagangan');
		}

		public function jasa_angkutan()
		{
			$this->ciparser->new_parse('template','modules_home','jasa-angkutan');
		}

		public function jasa_pertokoan()
		{
			$this->ciparser->new_parse('template','modules_home','jasa-pertokoan');
		}

		public function jasa_pergudangan()
		{
			$this->ciparser->new_parse('template','modules_home','jasa-pergudangan');
		}

		public function resi_gudang()
		{
			$this->ciparser->new_parse('template','modules_home','resi-gudang');
		}

		public function kawasan_pangan()
		{
			$this->ciparser->new_parse('template','modules_home','kawasan-pangan');
		}
	}
 ?>