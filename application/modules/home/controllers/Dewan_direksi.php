<?php 
	/**
	* 
	*/
	class Dewan_direksi extends MX_Controller
	{
		
		function __construct()
		{
			parent::__construct();
		}

		public function index(){
			$this->ciparser->new_parse('template','modules_home','dewan-direksi');
		}
	}
 ?>