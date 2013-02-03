<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Uni extends CI_Controller {

    public function __construct() {
		parent::__construct();
		
		$this -> load -> model('uni_model');
	}
	
    public function index($id = "") 
    {
    	
    }


    public function course($id = "", $message = null) {
        $this->load->database();

        if ($id == "") {
            $courses = $this->db->query('select * from program')->result();

            $c_final = array();

            foreach ($courses as $c) {
                $tmp = array();
                $tmp['corso'] = $c;
                $tmp['uni'] = $this->db->query('select * from university where id = ?', array($c->university_id))->first_row();
                array_push($c_final, $tmp);
            }

            return $this->load->view('courseslist', array(
                        "courses" => $c_final
                    ));
        }

        $c_final = array();


        $this->load->model('uni_model');

        

        return $this->load->view('coursesshow', array(
                    "user"          => $c_final,
                    "course"        => $this->getCourse($id),
                    "form_comment"  => ( $message ? false : true ),
                    "commenti"      => $this->uni_model->commenti($id),
                    "message"       => $message,
                    "questions"      => array(
                        "1"     =>  $this->db->query("select * from question where id = 1")->first_row(),
                        "2"     =>  $this->db->query("select * from question where id = 2")->first_row(),
                        "3"     =>  $this->db->query("select * from question where id = 3")->first_row(),
                        "4"     =>  $this->db->query("select * from question where id = 4")->first_row(),
                        "5"     =>  $this->db->query("select * from question where id = 5")->first_row()
                    )
                ));
    }

    public function send_comment() {
        $program_id = $this->input->post("program_id");
        $email = $this->input->post("email");
        $name = $this->input->post("name");
        $surname = $this->input->post("surname");
        $counter = $this->input->post("counter");

        $result = $this->db->query("select * from user_account where username=?", array($email));

        if ($result->num_rows == 1) {
            $row = $result->row();
            $user_id = $row->id;


            $valid_comment = $this->db->query("select * from program_question where program_id = $program_id and user_account_id = $user_id")->result();

            if (count($valid_comment) > 0) {
                return $this->course($program_id, "you have already commented the course!");
            }
        } else if ($result->num_rows == 0) {
            $this->db->insert("user_account", array("username" => $email, "password" => "passwd", "name" => $name, "surname" => $surname));
            $user_id = $this->db->insert_id();
        } else {
            echo "Error!";
            return;
        }

        for ($i = 0; $i < $counter; $i++) {
            $data = array();

            $data ["program_id"] = $program_id;
            $data ["question_id"] = $this->input->post("id$i");
            $data ["user_account_id"] = $user_id;
            $data ["comment"] = $this->input->post("comment$i");
            $data ["vote"] = $this->input->post("vote$i") ? $this->input->post("vote$i") : null;
            $data ["date"] = date("Y-m-d H:i:s");

            $this->db->insert("program_question", $data);
        }

        $this->course($program_id, 'Commento inserito');
    }

   
    
    public function compare () {
    	$ids = $this -> input -> post ("program");
    	
    	$courses = array ();
    	
    	foreach ( $ids as $id ) {
    		$courses [] = $this -> getCourse ($id);
    	}
    	
    	return $this -> load -> view ('compare',array(
    			"courses"       =>  $courses
    	));
    }
    
    private function getCourse ( $id ) {
    	$tmp = array();
    	
    	$course = $this -> db -> query ( 'select * from program where id = ?', array($id) ) -> first_row ();
    	
    	$tmp ["rank_position"]  = $this -> uni_model -> getRankPosition ( $id );
    	$tmp ["total_courses"]  = $this -> uni_model -> getTotalCourses ();
    	$tmp ["ranks"]          = $this -> uni_model -> getRanks ($id);
    	$tmp ["avgRanks"]       = $this -> uni_model -> getAvgRanks ($id);
    	$tmp ['corso']          = $course;
    	$tmp ['uni']            = $this -> db -> query('select * from university where id = ?',array($course->university_id))->first_row();
    	$tmp ["questions"]      = $this -> db -> query('select * from question') -> result();
    	$tmp ["program_id"]     = $id;
    	$tmp ["feedback_count"] = $this -> uni_model -> getFeedbackCount ($id);
    	
    	return $tmp;
    }

    
  
}