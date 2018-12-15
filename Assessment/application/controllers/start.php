<?php
class Start extends CI_Controller{


    public function index(){
        $this->load->view('index.php');
}


public function process(){

          global $id;

          if(!isset($_SESSION['id'])){
                  $_SESSION['id'] = 1;

             }

        $next = $this->input->post('next');
        $back = $this->input->post('back');

        if(isset($next)){

          $id = intval($_SESSION['id'])+1;
          $selected_choice  = $this->input->post("choice");
          $data['question']= $this->Question_model->process($id);
          $data['all'] =  $this->Question_model->num_row();
          $data['temp_rows'] =  $this->Question_model->temp_rows();

        if($this->Question_model->get_selected($id-1) !=null  ){
          if($this->Question_model->get_selected($id-1)->selected != $selected_choice )
             $this->Question_model->update_ans($id-1,$selected_choice);
           }
         else{
          $this->Question_model->insert_ans($id-1,$selected_choice); 
         }
          if($id>$this->Question_model->num_row()) redirect('start/final');
          $_SESSION['id'] = $id;
          $data['choices']=$this->Question_model->get_selected($id);
          $this->load->view('qtn.php',$data);
        }
          elseif(isset($back))
          {

         $id= intval($_SESSION['id']);

         $selected_choice  = $this->input->post("choice");

         if($this->Question_model->get_selected($id) !=null  ){
          if($this->Question_model->get_selected($id)->selected != $selected_choice ){
             $this->Question_model->update_ans($id,$selected_choice);
           }
          }
         else{
          $this->Question_model->insert_ans($id,$selected_choice);
         }
         $id-=1;
         if($id<1)$id=1;
         $data['question']= $this->Question_model->process($id);
         $_SESSION['id'] = $id;
         $data['temp_rows'] =  $this->Question_model->temp_rows();
         $data['all'] =  $this->Question_model->num_row();
         
         $data['choices']=$this->Question_model->get_selected($id);
         $this->load->view('qtn.php',$data);
        }

        else{

              $data['question'] = $this->Question_model->process(1);
              $data['all'] =$this->Question_model->num_row();
              $data['temp_rows'] =  $this->Question_model->temp_rows();
              $this->load->view('qtn.php',$data);
          }

}

    public function final(){
      $score = 0;
      $array1 = array();
      $array2 = array();
      $a1=$this->Question_model->get_questions();
      foreach($a1 as $r){
        array_push($array1,$r->choice4);
      }
      $a2 = $this->Question_model->check();
      foreach($a2 as $c){
        array_push($array2, $c->selected);
      }

      $all = $this->Question_model->num_row();
       for($x=0;$x<$all;$x++){
        if($array1[$x] == $array2[$x]){
          $score++;
        }
      } 

    echo $score; 

      $this->load->view('final.php');
       for($x=1;$x<$this->Question_model->num_row()+1;$x++){
      $this->Question_model->del($x);
      unset($_SESSION['id']);
    }

  }
}