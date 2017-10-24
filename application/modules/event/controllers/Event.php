<?php

(defined('BASEPATH')) OR exit('No direct script access allowed');

/**
 * Description of site
 *
 * @author Junaedi
 */
class Event extends MX_Controller  {
    var $data = array();
    var $idUser;

    function __construct() {
        
	$this->load->model('event_model');
    $this->load->helper('date');
    $this->load->helper('url');
    }

    public function index(){
    	$this->data['list'] = $this->event_model->list_event();
        $this->ciparser->new_parse('template','modules_event','event_layout',$this->data);
    }

    public function add_event(){
    	if ($this->input->server('REQUEST_METHOD') == 'POST') {
    		$this->form_validation->set_error_delimiters('','');
    		$this->form_validation->set_rules('','','required');
    		$this->form_validation->set_rules('','','required');
    		if ($this->form_validation->run() == TRUE) {
    			$data['nm_event'] = $this->input->post('');
    			$data['desc_event'] = $this->input->post('');
    			$data['tgl_event'] = $this->input->post('');
    			$data['time_post'] = $this->input->post('');
    		}
    	}
    }
}

/* End of file site.php */
/* Location: ./application/modules/modules_admin/controllers/dashboard.php */