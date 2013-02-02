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
        $sector = "%";
        if($this->input->post('livello')!= "") $sector = $this->input->post('livello'); 
        
        $country = "%";
        if($this->input->post('country')!="") $country  = $this->input->post('country'); 
        
        $area = "%";
        if($this->input->post('area')!="") $area = $this->input->post('area'); 
        
        $key = "%";
        if($this->input->post('key')=="") $key = $this->input->post('key'); 
        
        $courses = $this->db->query("select * from program where sector like '".$sector."' and ".
                                   "university_id in (select id from university where country like '".$country."') and".
                                    " program_type_id in (select id from program_type where description like '".$area."') and ".
                                    "name like '".$key."'")->result();
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
