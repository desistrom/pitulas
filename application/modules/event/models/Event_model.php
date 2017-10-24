<?php

(defined('BASEPATH')) OR exit('No direct script access allowed');

class Event_model extends CI_Model  {

	public function list_event(){
        $sql = "SELECT e.*, g.item FROM pt_event e 
        LEFT JOIN pt_galery g ON e.id_event = g.id_event_ref 
        WHERE g.is_type = 1
        ORDER BY tgl_event ASC";
        if ($this->db->query($sql)->num_rows () > 0) {
            return $this->db->query($sql)->result_aray();
            exit();
        }
        return false;
    }

    public function row_event($data){
        $sql = "SELECT * FROM pt_event pt_event e 
        LEFT JOIN pt_galery g ON e.id_event = g.id_event_ref 
        WHERE id_event = ?";
        if ($this->db->query($sql,$data)->num_rows () > 0) {
            return $this->db->query($sql,$data)->row_aray();
            exit();
        }
        return false;
    }

    public function add_event($data){
        if ($this->db->insert('pt_event',$data)) {
            return true;
            exit();
        }
        return false;
    }

    public function edit_event($data,$search){
        if ($this->db->update('pt_event',$data,$search)) {
            return true;
            exit();
        }
        return false;
    }

    public function delete_event($evt,$gal){
        if ($this->db->delete('pt_galery',$gal)) {
            if($this->db->delete('pt_event',$evt)){
                return true;
                exit();
            }
            return false;
        }
        return false;
    }

    public function add_galery($data){
        if ($this->db->insert('pt_galery',$data)) {
            return true;
            exit();
        }
        return false;
    }

    public function delete_galery($id){
        if ($this->db->delete('pt_galery',$id)) {
            return true;
            exit();
        }
    }


}

