<?php 
	/**
	* 
	*/
	class Kawasan_pangan extends MX_Controller
	{
		
		function __construct()
		{
			parent::__construct();
		}

		public function index(){
			$this->ciparser->new_parse('template','modules_home','kawasan-pangan');
		}
	}
 ?>