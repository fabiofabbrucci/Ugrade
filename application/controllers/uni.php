<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Uni extends CI_Controller {

   

    public function index($id = "") {
    }

    public function course($id = "") {
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
                
        $course = $this->db->query('select * from program where id = ?',array($id))->first_row();

        $c_final=array();

        $tmp = array();
        $tmp['corso'] = $course;
        $tmp['uni']   = $this->db->query('select * from university where id = ?',array($course->university_id))->first_row();
            

        
        return $this->load->view('coursesshow',array(
            "course"   =>  $tmp
        ));
        
    }

    

}

