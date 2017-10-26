<?php 
	/**
	* 
	*/
	class Gallery extends MX_Controller
	{
		
		function __construct()
		{
			parent::__construct();
		}

		public function gallery_foto()
		{
			$this->ciparser->new_parse('template','modules_home','gallery-foto');
		}

		public function detail_foto()
		{
			$this->ciparser->new_parse('template','modules_home','detail-foto');
		}

		public function gallery_video()
		{
			$this->ciparser->new_parse('template','modules_home','gallery-video');
		}

		public function detail_video()
		{
			$this->ciparser->new_parse('template','modules_home','detail-video');
		}
	}
 ?>