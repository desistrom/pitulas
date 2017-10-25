<?php

(defined('BASEPATH')) OR exit('No direct script access allowed');

/**
 * Description of site
 *
 * @author http://www.roytuts.com
 */
class Home extends MX_Controller  {
	var $data = array();
    var $idUser;

    function __construct() {

    $this->load->helper('date');
    }

    public function index(){
    	$format = 'DATE_RFC822';
		$time = time();
		print_r(standard_date($format, $time));
    	$this->ciparser->new_parse('template','modules_home','home_layout');
	}
}
?>