<?php


class Uni_Model extends CI_Model{
    
    public function commenti($id){
        $users = $this->db->query("select distinct(user_account_id) from program_question where program_id = $id")->result();
        $c_final = array();
        foreach($users as $u){
            $tmp = array();
            $tmp['1']       = $this->db->query("select * from program_question where question_id = 1 and user_account_id = ".$u->user_account_id)->first_row();
            $tmp['2']       = $this->db->query("select * from program_question where question_id = 2 and user_account_id = ".$u->user_account_id)->first_row();
            $tmp['3']       = $this->db->query("select * from program_question where question_id = 3 and user_account_id = ".$u->user_account_id)->first_row();
            $tmp['4']       = $this->db->query("select * from program_question where question_id = 4 and user_account_id = ".$u->user_account_id)->first_row();
            $tmp['5']       = $this->db->query("select * from program_question where question_id = 5 and user_account_id = ".$u->user_account_id)->first_row();
            $username       = $this->db->query("select * from user_account where id = ".$u->user_account_id)->first_row();
            $tmp['utenti']  = $username->username;  
            array_push($c_final,$tmp);
        }
        return $c_final;
    }
    
    public function getFeedbackCount ($course_id) {
    	$result = $this -> db -> query (
    			"select count(*) as count " .
    			"from program_question " .
    			"where program_id = ?" .
    			"group by program_id ",
    			array ($course_id)
    	);
    	
    	if ( $result -> num_rows () > 0) {
    		$row = $result -> first_row ();
    	
    		return $row -> count;
    	}
    	
    	return 0;
    }
}