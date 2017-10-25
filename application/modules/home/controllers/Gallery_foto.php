<?php 
	/**
	* 
	*/
	class Gallery_foto extends MX_Controller
	{
		
		function __construct()
		{
			parent::__construct();
		}

		public function index(){
			$this->ciparser->new_parse('template','modules_home','gallery-foto');
		}

		public function detail_foto()
		{
			$this->ciparser->new_parse('template','modules_home','detail-foto');
		}
	}
 ?>