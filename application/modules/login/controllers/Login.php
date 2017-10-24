<?php

(defined('BASEPATH')) OR exit('No direct script access allowed');

/**
 * Description of site
 *
 * @author http://www.roytuts.com
 */
class Login extends MX_Controller  {

    var $idUser;

    function __construct() {
        parent::__construct();
        $this->load->model('login_model');
        $this->load->helper('encrypt_decrypt_helper','general_helper');
        $this->load->library('encryption');
    }

    public function index() {
        if($this->input->server('REQUEST_METHOD') == 'POST'){
            $this->form_validation->set_error_delimiters('','');
            $this->form_validation->set_rules('username', 'username','trim|required');
            $this->form_validation->set_rules('password', 'password','trim|required');
            if ($this->form_validation->run() == TRUE){
                $ret['state'] = 1;
                $query = $this->login_model->is_login($this->input->post('username'),md5($this->input->post('password')));
                if ($query->num_rows() > 0){
                        $ret['status'] = 1;
                        $pass_in_db = $query->row_array()['password'];
                        $pass_in_form = md5($this->input->post('password'));
                        if($pass_in_db == $pass_in_form ){
                                $dt_sess['userid'] = $query->row_array()['iduser'];
                                $dt_sess['previlage'] = $query->row_array()['status'];
                                $this->session->set_userdata($dt_sess);
                                $this->session->set_userdata('is_login',true);
                                if($query->row()->status == '1'){ // for Admin
                                    $ret['url'] = site_url('admin');
                                }else{ // for User
                                    $ret['url'] = site_url();
                                }
                        }else{
                            $ret['error'] = '- Your request can not procesed';
                        
                        }
                    }else{
                        $ret['status'] = 0;
                        $ret['error'] = 'Anda memasukkan Username/Email dan Password yang salah.<br> Isi dengan data yang benar dan coba lagi';
                    }
            }else{
                $ret['state'] = 0;
            }
            $ret['notif']['username'] = form_error('username');
            $ret['notif']['password'] = form_error('password');
            echo json_encode($ret);
            exit();
        }
       $data['css'][] = base_url_css_customize().'login-page.css';
       $this->load->view('login_layout',$data);
    }

    public function activation(){
        $id_user = (int) decrypt_text(end($this->uri->segment_array()));
        if(!is_numeric($id_user)) {
            echo 'link activation not found'; exit();
        }
        $this->login_model->activation_user($id_user);
        # load page success
    }

    public function logout(){
        $redirect = site_url(end($this->uri->segment_array()));
        $this->session->sess_destroy();
        //setcookie("user", "", time()-3600);
        $redirect = site_url('login');
        redirect($redirect);
    }

    public function get_session_id(){
        return $this->session->userdata('userid');
    }

    public function get_user_idRole(){
        return $this->session->userdata('previlage');
    }

    public function is_login(){
        if($this->session->userdata('is_login') == '' || $this->session->userdata('previlage') == '' || $this->session->userdata('userid') == '') {
            return false;
        }else{
            return true;
        }
    }

    public function change_password(){

        
        $this->load->module('login');
        $this->idUser = $this->login->get_session_id();
        if($this->input->server('REQUEST_METHOD') == 'POST'){

            $current_password = $this->input->post('current_password');
            $new_password = $this->input->post('new_password');
            $retype_password = $this->input->post('retype_password');

            $this->form_validation->set_error_delimiters('','');
            $this->form_validation->set_rules('current_password', 'current password','trim|required');
            $this->form_validation->set_rules('new_password', 'new password','trim|required|min_length[8]');
            $this->form_validation->set_rules('retype_password', 'retype password','trim|required|matches[new_password]|min_length[8]');

            if ($this->form_validation->run() == TRUE){
                $ret['status'] = 1;
                $ret['notif']['current_password'] = '';
                $ret['notif']['new_password'] = '';
                $ret['notif']['retype_password'] = '';

                if(md5($current_password) == $this->login_model->current_password($this->idUser)){
                    $ret['state'] = 1;
                    if($this->login_model->change_password($this->idUser,md5($new_password)) == true){
                        $ret['status'] = 1;
                        $ret['notif']['result'] = 'Password Berhasil diubah';
                  
                    }else{
                        $ret['status'] = 0;
                        $ret['notif']['result'] = 'Password Gagal diubah';
                    }
                }else{
                    $ret['state'] = 0;
                    $ret['notif']['result'] = 'Password sekarang tidak sesuai';
                }
                
            }else{
                $ret['status'] = 0;
                $ret['notif']['current_password'] = form_error('current_password');
                $ret['notif']['new_password'] = form_error('new_password');
                $ret['notif']['retype_password'] = form_error('retype_password');
            }

            echo json_encode($ret);
            exit();
        }

        $this->data['title'] = 'change password | ';
        $this->data['css'][] = '';
        $this->data['js'][] = '';

        $this->data['page_loaded'] = 'employ_change_password_layout.php';
        $this->ciparser->new_parse('template','modules_employ', 'employ_menu_layout',$this->data);
    }

    function _exlogin($url_dashboard = null){

            $this->form_validation->set_error_delimiters('','');
            $this->form_validation->set_rules('username_txt', 'username','trim|required');
            $this->form_validation->set_rules('password_txt', 'password','trim|required');
            
            if ($this->form_validation->run() == TRUE){
                
                $ret['notif'] = 1;
                $query = $this->login_model->is_login($this->input->post('username_txt'),md5($this->input->post('password_txt')));
                if ($query->num_rows() > 0){

                        $ret['notif'] = 1;
                        $pass_in_db = $query->row_array()['PASSWORD'];
                        $pass_in_form = md5($this->input->post('password_txt'));
                        if($pass_in_db == $pass_in_form ){

                            if($query->row_array()['ID_STATUS_USER'] == '2'){
                                $ret['notif'] = 1;
                                $dt_sess['userid'] = $query->row_array()['ID_USER'];
                                $dt_sess['previlage'] = $query->row_array()['ID_ROLE'];
                                $this->session->set_userdata($dt_sess);
                                $this->session->set_userdata('is_login',true);
                                if($this->input->post('remember') == true){
                                  // $this->rememberme->setCookie($this->input->post('remember'));
                                }
                                //$ret['url'] = $url_dashboard;
                               
                                if($query->row()->ID_ROLE == '1'){ // for Trainer
                                    $ret['url'] = site_url('trainer');
                                }else if($query->row()->ID_ROLE == '2'){ // for Employ
                                    $ret['url'] = site_url('employ/profile');
                                }else{ // for Employer
                                    $ret['url'] = site_url('employer/profile');
                                }
                            }else{
                                $ret['notif'] = 0;
                                $ret['error']['ntf_error'] = '- account inactive, please activated before';
                                $ret['error']['ntf_username'] = '';
                                $ret['error']['ntf_password'] = '';
                            }
                        }else{
                            $ret['notif'] = 0;
                            $ret['error']['ntf_error'] = '- Your request can not procesed';
                            $ret['error']['ntf_username'] = '';
                            $ret['error']['ntf_password'] = '';
                        
                        }
                }else{
                        $ret['notif'] = 0;
                        $ret['error']['ntf_error'] = '- Username dan password tidak sesuai';
                        $ret['error']['ntf_password'] = '';
                        $ret['error']['ntf_username'] = '';
                        
                }
            }else{
                    $ret['notif'] = 0;
                    $ret['error']['ntf_error'] = '';
                    $ret['error'] = array('ntf_username' => form_error('username_txt'),
                                           'ntf_password' => form_error('password_txt'),
                                           'ntf_error' => ''
                                        );
            }
            #$ret['pass'] = $this->input->post('txt_password');
            echo json_encode($ret);
        
    }
    
    function _encrypt_duplex($password){
        return md5($password);
    }


  

    function _email_message_activation($id_user, $name){
        return "Hi, ".$name.".
                <br/>You just requested for your email verification again. So here it is.
                <br/>Click the button below to verify your account.
                <br/><a href='".site_url('login/activation').'/'.encrypt_text($id_user)."'>VERIFY</a>";
    }

    function _email_message_forgot_password($name, $password){
        return "Hi, ".$name.".
                <br/>This is your  password as you requested: <b>".$password."</b>";
    }

    function _generate_pin(){
        ##JUMLAH PIN & PASSWORD 9 DIGIT
        ##PASSWORD REVERSE DARI PIN
        ##FORMAT : TGL-RANDOM STRING - RANDOM ANGKA - BULAN  
        $tanggal = date('d');
        $bulan = date('m');
        $random_angka = rand(10, 99);
        $pin = $tanggal.$random_angka;
        $random_element = array("A","B","C","D","E","F","G","H","I","J","K","L","M","N","O","P","Q","R","S","T","U","V",
                                "W","X","Y","Z","a","b","c","d","e","f","g","h","i","j","k","l","m","n","o","p","q","r",
                                "s","t","u","v","w","x","y","z");
        for($i=0;$i<=4;$i++){
            $pin .= random_element($random_element);
        }
        $pin .= $bulan;
        return $pin;
    }
        
    function _generate_password(){
        $password = null;
        for($i=1;$i<=5;$i++){
            $password .= rand(1,9);
        }
        return $password;
    }

}

/* End of file site.php */
/* Location: ./application/modules/site/controllers/site.php */