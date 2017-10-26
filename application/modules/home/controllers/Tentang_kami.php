<?php 
	/**
	* 
	*/
	class Tentang_kami extends MX_Controller
	{
		
		function __construct()
		{
			parent::__construct();
		}

		public function profile_perusahaan()
		{
			$this->ciparser->new_parse('template','modules_home','profil');
		}

		public function sejarah()
		{
			$this->ciparser->new_parse('template','modules_home','sejarah');
		}

		public function visi_misi()
		{
			$this->ciparser->new_parse('template','modules_home','visi-misi');
		}

		public function logo()
		{
			$this->ciparser->new_parse('template','modules_home','logo');
		}

		public function struktur()
		{
			$this->ciparser->new_parse('template','modules_home','struktur');
		}

		public function sambutan()
		{
			$this->ciparser->new_parse('template','modules_home','sambutan');
		}

		public function dewan_komisaris()
		{
			$this->ciparser->new_parse('template','modules_home','dewan-komisaris');
		}

		public function dewan_direksi()
		{
			$this->ciparser->new_parse('template','modules_home','dewan-direksi');
		}
	}
 ?>