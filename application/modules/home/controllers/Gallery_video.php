<?php 
	/**
	* 
	*/
	class Gallery_video extends MX_Controller
	{
		
		function __construct()
		{
			parent::__construct();
		}

		public function index(){
			$this->ciparser->new_parse('template','modules_home','gallery-video');
		}

		public function detail_video()
		{
			$this->ciparser->new_parse('template','modules_home','detail-video');
		}
	}
 ?>