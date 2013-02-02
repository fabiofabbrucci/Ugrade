<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Uni extends CI_Controller {

    public function __construct(){
        
    }

    public function index() {
        return $this->load->view('uni');
    }

    public function course($id = "",$uni = "") {
        
        if ($id == "") {
            $courses = $this->db->query('select * from program')->result();
            $c_final=array();
            foreach($courses as $c){
                $tmp = array();
                $tmp['corso'] = $c;
                $tmp['uni']   = $this->db->query('select * university where id = ?',array($c->university_id))->first_row();
                
            }
            return $this->load->view('courses.list',array(
                "courses"   =>  $this->db->query('select * from program')->result()
            ));
        }
        
        return $this->load->view('courses.show',array(
            "course"        =>  $this->db->query('select * from program where id = ?',array($id))->first_row(),
        ));
    }

    

}

