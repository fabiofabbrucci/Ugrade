<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Home extends CI_Controller {

    public function index() {
            $this->load->database();

        if ($this->input->post('key') == false && $this->input->post('country') == false && $this->input->post('area') == false && $this->input->post('livello') == false) {
            return $this->load->view('home', array(
                        "country" => $this->db->query('select * from university group by country')->result(),
                        "livello" => $this->db->query('select * from program_type')->result(),
                        "area" => $this->db->query('select * from program group by sector')->result(),
                        "courses" => null
                    ));
        }
        $sql = "select * from program where true ";

        if($this->input->post('area')!= "") {
            $sql.= " and sector like '".$this->input->post('area')."'"; 
        }
        
        if($this->input->post('country')!="") {
            $sql.= " and university_id in (select id from university where country like '".$this->input->post('country')."' "; 
        }
        
        if($this->input->post('livello')!="") {
            $sql .= " and program_type_id in (select id from program_type where description like '".$this->input->post('livello')."'"; 
        }
       
        if($this->input->post('key')!="") {
            $sql .= " and name like '%".$this->input->post('key')."%'"; 
        }
        
        $courses = $this->db->query($sql)->result();
        $c_final = array();

        foreach($courses as $c){
           $tmp = array();
           $tmp['corso'] = $c;
           $tmp['uni'] = $this->db->query("select * from university where id = ".$c->university_id)->first_row();
        
           array_push($c_final,$tmp);
        }
        return $this->load->view('home', array(
                    "country" => $this->db->query('select * from university group by country')->result(),
                    "livello" => $this->db->query('select * from program_type')->result(),
                    "area" => $this->db->query('select * from program group by sector')->result(),
                    "courses" => $c_final
                ));
    }

}
