<?php

(defined('BASEPATH')) OR exit('No direct script access allowed');

/**
 * Description of site
 *
 * @author http://www.roytuts.com
 */
class VisiMisi extends CI_Controller  {
	var $data = array();
    var $idUser;

    function __construct() {
        parent::__construct();
    }

    function index() {
      
        $data = null;

    $this->ciparser->new_parse('template_admin','modules_admin','visi-misi_layout');
    }



   

   

}

/* End of file site.php */
/* Location: ./application/modules/modules_admin/controllers/dashboard.php */