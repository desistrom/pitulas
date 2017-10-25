<?php 
	/**
	* 
	*/
	class Harga_beras extends MX_Controller
	{
		
		function __construct()
		{
			parent::__construct();
		}

		public function index(){
			$this->ciparser->new_parse('template','modules_home','harga-beras');
		}
	}
 ?>

 