<?php 
class Question_model extends CI_model{


    public function get_questions(){

        $this->db->select('*');
        $this->db->from('questions');
        $query = $this->db->get();
        return $query->result();

    }
    public function get($id){
        $this->db->where('question_id',$id);
        $query = $this->db->get('questions');
        return $query->row();
    }

    public function add(){
        $d = array();
  
            $data = array(
            'question'=>$this->input->post('question'),
            'choice1'=>$this->input->post('choice1'),
            'choice2'=>$this->input->post('choice2'),
            'choice3'=>$this->input->post('choice3'),
            'choice4'=>$this->input->post('choice4'),
            'lab_id'=>$this->input->post('lab_id'),
            'question_id'=>$this->input->post('id')

        );

        $this->db->insert('questions',$data);
         return true;

    
    }
    public function get_question($question_id){
        $this->db->where('question_id',$question_id);
        $query = $this->db->get('questions');
        return $query->row();

    }

    public function process($id){
         $this->db->where('question_id',$id);
        $query = $this->db->get('questions');
        return $query->row();
      
        if($query->num_rows()<1){
            echo 'no data';
            exit();
        }
    }
 

    public function edit_question($question_id,$data){
        $this->db->where('question_id',$question_id);
        $this->db->update('questions',$data);
        return true;
    }

    public function delete($question_id){
        $this->db->where('question_id',$question_id);   
        $this->db->delete('questions');
        return true;
    }

    public function insert_ans($id,$d){    
    
      $data = array(
          'id' =>$id,
        'selected'=> $d
      );
  
        $this->db->insert('temp',$data);
    }


    public function update_ans($id,$d){

        $this->db->where('id',$id);
        $data = array(
          'selected'=> $d
        );
    
        $this->db->update('temp',$data);
        return true;
    }

    public function check()
    {
        $this->db->select('*');
        $this->db->from('temp');
        $query = $this->db->get();
        return $query->result();

    }

    public function temp_rows()
    {
        $this->db->select('*');
        $this->db->from('temp');
        $query = $this->db->get();
        return $query->num_rows();
    }
    public function num_row(){
        $this->db->select('*');
        $this->db->from('questions');
        $query = $this->db->get();
        return $query->num_rows();
    }
    public function get_selected($id){
        $this->db->where('id',$id);
        $query = $this->db->get('temp');
        return $query->row();
    }
    
    public function del($id){
        $this->db->where('id',$id);
        $this->db->delete('temp');
        return True;
    }


}