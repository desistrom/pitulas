<?php 
	/**
	* 
	*/
	class Resi_gudang extends MX_Controller
	{
		
		function __construct()
		{
			parent::__construct();
		}

		public function index(){
			$this->ciparser->new_parse('template','modules_home','resi-gudang');
		}
	}
 ?>