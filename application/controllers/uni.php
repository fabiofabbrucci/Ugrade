<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Uni extends CI_Controller {
    public function index($id = "") 
    {
    	
    }

    public function course ($id = "", $message = null) {
        $this -> load -> database();
        
        if ($id == "") {
            $courses = $this -> db -> query('select * from program')->result();
            
            $c_final = array();
            
            foreach ( $courses as $c ){
                $tmp          = array();
                $tmp['corso'] = $c;
                $tmp['uni']   = $this->db->query('select * from university where id = ?',array($c->university_id))->first_row();
                array_push ( $c_final, $tmp );
            }
            
            return $this->load->view('courseslist',array(
                "courses"   =>  $c_final
            ));
        }

        $c_final=array();

        
        $this -> load -> model('uni_model');
        
        return $this -> load -> view ('coursesshow',array(
            "user"         =>  $c_final,
            "course"       =>  $this -> getCourse ($id),
            "form_comment" =>  ( $message ? false: true ),
            "commenti"     =>  $this -> uni_model -> commenti ( $id )
        ));
        
    }
    
    public function send_comment () {
    	$program_id = $this->input->post ("program_id");
    	$email      = $this->input->post ("email");
    	$counter    = $this->input->post ("counter");
    	
    	$result = $this->db->query("select * from user_account where username=?", array ($email) );
    	
    	if ( $result -> num_rows == 1 ) {
            $row = $result -> row ();
            $user_id = $row -> id;
    	}
    	else if ( $result -> num_rows == 0 ) {
            $this -> db -> insert ( "user_account", array ("username" => $email, "password" => "passwd") );
            $user_id = $this -> db -> insert_id ();
    	}else {
            echo "Error!";
            return;
    	}
    	
    	for ( $i = 0; $i < $counter; $i++ )
    	{
    		$data = array ();
    		
    		$data ["program_id"]      = $program_id;
    		$data ["question_id"]     = $this->input->post ("id$i");
    		$data ["user_account_id"] = $user_id;
    		$data ["comment"]         = $this->input->post ("comment$i");
    		$data ["vote"]            = $this->input->post ("vote$i");
    		
    		$this -> db -> insert ("program_question", $data);
    	}

        $this->course($program_id, 'Commento inserito');
    }
    
    private function getCourse ( $id ) {
    	$tmp = array();
    	$course = $this -> db -> query ( 'select * from program where id = ?', array($id) ) -> first_row ();
    	
    	$tmp ["rank_position"] = $this -> uni_model -> getRankPosition ( $id );
    	$tmp ["total_courses"] = $this -> uni_model -> getTotalCourses ();
    	$tmp ["ranks"]         = $this -> uni_model -> getRanks ($id);
    	$tmp ['corso']         = $course;
    	$tmp ['uni']           = $this -> db -> query('select * from university where id = ?',array($course->university_id))->first_row();
    	$tmp ["questions"]     = $this -> db -> query('select * from question') -> result();
    	$tmp ["program_id"]    = $id;
    	
    	return $tmp;
    }
    
}