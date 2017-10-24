<?php

(defined('BASEPATH')) OR exit('No direct script access allowed');

/**
 * Description of site
 *
 * @author http://www.roytuts.com
 */
class DewanDireksi extends CI_Controller  {
	var $data = array();
    var $idUser;

    function __construct() {
        parent::__construct();
    }

    function index() {
      
    $this->ciparser->new_parse('template_admin','modules_admin', 'dewan-direksi_layout');
    }

     function list_dewan_direksi() {
      
    $this->ciparser->new_parse('template_admin','modules_admin', 'list-dewan-direksi_layout');
    }



   

   

}

/* End of file site.php */
/* Location: ./application/modules/modules_admin/controllers/dashboard.php */