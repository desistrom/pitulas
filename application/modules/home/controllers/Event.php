<?php 
	/**
	* 
	*/
	class Event extends MX_Controller
	{
		
		function __construct()
		{
			parent::__construct();
		}

		public function index(){
			$this->ciparser->new_parse('template','modules_home','event');
		}

		public function detail_event()
		{
			$this->ciparser->new_parse('template','modules_home','detail-event');
		}
	}
 ?>