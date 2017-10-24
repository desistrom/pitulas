<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


if (!function_exists('encrypt_text')){

    function encrypt_text($plain_text){
	 	$CI =& get_instance(); 
		$CI->load->library('encryption');
        return $CI->encryption->encrypt($plain_text);
    }   
}

if (!function_exists('decrypt_text')){
	function decrypt_text($ciphertext){
		$CI =& get_instance(); 
		$CI->load->library('encryption');
		return $CI->encryption->decrypt($ciphertext);
	}
}
