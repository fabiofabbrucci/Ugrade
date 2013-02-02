<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Uni extends CI_Controller {

   

    public function index() {
        $this->load->model('uni');
        return $this->load->view('uni');
    }

    public function course($id = "",$uni = "") {
        $this->load->database();
        if ($id == "") {
            
            $courses = $this->db->query('select * from program')->result();
            
            $c_final=array();
            foreach($courses as $c){
                $tmp = array();
                $tmp['corso'] = $c;
                $tmp['uni']   = $this->db->query('select * from university where id = ?',array($c->university_id))->first_row();
                array_push($c_final,$tmp);
            }
            return $this->load->view('courseslist',array(
                "courses"   =>  $c_final
            ));
        }
        
        return $this->load->view('coursesshow',array(
            "course"        =>  $this->db->query('select * from program where id = ?',array($id))->first_row(),
        ));
        
    }

    

}

