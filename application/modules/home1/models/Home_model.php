<?php

(defined('BASEPATH')) OR exit('No direct script access allowed');

class Home_model extends CI_Model  {

	public function new_event(){
        $sql = "SELECT * FROM pt_event e JOIN pt_galery g ON e.id_event = g.id_event_ref WHERE kategori LIMIT 4 ORDER BY tgl_event ASC";
        if ($this->db->query($sql)->num_rows () > 0) {
            return $this->db->query($sql)->result_aray();
            exit();
        }
        return false;
    }

    public function product(){
        $sql = "SELECT nm_product, desc_product FROM pt_product";
        if ($this->db->query($sql)->num_rows () > 0) {
            return $this->db->query($sql)->result_aray();
            exit();
        }
        return false;
    }


}

