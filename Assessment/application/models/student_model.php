<?php
class Student_model extends CI_Model{
	//get year of study from year table 
	public function get_year_of_study(){
		$query = $this->db->get('year');
		return $query->result();
	}
	
	//get courses from the course table
	public function get_courses(){
		$query = $this->db->get('course');
		return $query->result();
	}
	
	//insert student in the students table
	public function insert($data){
		$this->db->insert('students',$data);
		return true;
	}
	
	//get all students
	public function getAllStudents(){
		$query = $this->db->get('students');
		return $query->result(); 
	}
	
	//get a specific student
	public function getStudent($id){
		$this->db->where('id',$id);
		$query = $this->db->get('students');
		return $query->row();
	}
	
	
	//update active status
	public function activate($data,$code){
		$this->db->where('code',$code);
		$this->db->update('students',$data);
		return true;
	}
	
}
?>