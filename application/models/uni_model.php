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
//     			"select count(program_id) as count " .
//     			"from program_question " .
//     			"where program_id = ?" .
//     			"group by program_id ",
    			"select program_id, count(distinct user_account_id) as count " .
    			"from program_question PQ " .
    			"where program_id = ?" .
    			"group by program_id",
    			array ($course_id)
    	);
    	if ( $result -> num_rows () > 0) {
    		$row = $result -> first_row ();
    	
    		return $row -> count;
    	}
    	
    	return 0;
    }
    
    public function getAvgRanks ( $course_id ) {
    	$result = $this -> db -> query
    	(
    		"SELECT PQ.program_id, avg(vote) as avg " . 
    		"FROM program_question PQ " . 
			"WHERE PQ.program_id = ? " .
			"GROUP BY PQ.program_id;",
    		array ($course_id)
    	);
    	 
    	if ( $result -> num_rows () > 0) {
    		$row = $result -> row();
    		return $row -> avg;
    	}
    	
    	return 0;
    }
    
    public function getRanks ( $course_id ) {
    	$result = $this -> db -> query 
    	(
    		"SELECT Q.titolo, PQ.program_id, PQ.question_id, avg ( vote ) AS avg ".
			"FROM program_question PQ " . 
			"JOIN question Q ON PQ.question_id = Q.id " . 
    		"WHERE program_id = ? " .
			"GROUP BY program_id, question_id;",
    		array ($course_id)
    	);
    	
    	if ( $result -> num_rows () > 0) {
    		return $result -> result_array ();
    	}
    	 
    	return array ();
    }
    
    public function getTotalCourses () {
    	$result = $this -> db -> query ( "SELECT COUNT(*) as count FROM program" );
    	 
    	if ( $result -> num_rows () > 0) {
    		$row = $result -> row ();
    		return $row -> count;
    	}
    	
    	return 0;
    }
    
    public function getRankPosition ($course_id) {
    	
    	$avg = $this -> getAvgRanks($course_id); 
    	
    	$result = $this -> db -> query
    	(
    		"SELECT count(*) as count FROM " . 
			"(SELECT avg(vote) as avg FROM program P " .
			"LEFT JOIN program_question PQ ON PQ.question_id = P.id " .
			"GROUP BY P.id " .
			"HAVING avg(vote) > ? " .
			"ORDER BY avg desc) AS T",
    		array ($avg)
    	);
    	 
    	if ( $result -> num_rows () > 0) {
    		$row = $result -> row();
    		return $row -> count;
    	}
    	
    	return 0;
    }
}