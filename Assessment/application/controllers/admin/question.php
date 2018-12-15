<?php
class Question extends MY_Controller{


    public function index(){
        $data['questions'] = $this->Question_model->get_questions();
        $data['main_content'] = 'admin/question/index';
        $this->load->view('admin/layouts/question',$data);
    
}
        public function get_question($id){
                
                $data['question'] = $this->Question_model->get_question($id);

                $this->load->view('index.php',$data);

        }
        public function start(){
                $this->load->view('index.php');
        }

        public function add(){
                $this->form_validation->set_rules('question','Question','required');
                $this->form_validation->set_rules('choice1','Choice1','required');
                $this->form_validation->set_rules('choice2','Choice2','required');
                $this->form_validation->set_rules('choice3','Choice3','required');
                $this->form_validation->set_rules('choice4','Choice4','required');
                $this->form_validation->set_rules('lab_id','LAB_ID','required');

                $data['main_content'] = 'admin/question/add';
                if($this->form_validation->run()==FALSE){
                $this->load->view('admin/layouts/add',$data);
        }else{
                $this->Question_model->add();
                redirect('admin/question');
        }
}

  
        public function edit($id){
                $this->form_validation->set_rules('question','Question','required');
                $this->form_validation->set_rules('choice1','Choice1','required');
                $this->form_validation->set_rules('choice2','Choice2','required');
                $this->form_validation->set_rules('choice3','Choice3','required');
                $this->form_validation->set_rules('choice4','Choice4','required');
            //    $this->form_validation->set_rules('correct','Correct','required');
                $data['question'] = $this->Question_model->get_question($id);
               // $data['main_content'] = 'admin/question/add';
                if($this->form_validation->run()==FALSE){
                        $this->load->view('admin/layouts/edit',$data);
                }else{

                $data = array(
                'question'=>$this->input->post('question'),
                'choice1'=>$this->input->post('choice1'),
                'choice2'=>$this->input->post('choice2'),
                'choice3'=>$this->input->post('choice3'),
                'choice4'=>$this->input->post('choice4'),
                'lab_id'=>$this->input->post('lab_id'),
                'question_id'=>$this->input->post('id')
                
              //  'correct'=>$this->input->post('correct')

            );

                $this->Question_model->edit_question($id,$data);

                redirect('admin/question');
        }
     }


        public function delete($id){
        $this->Question_model->delete($id);
        redirect('admin/question');
        }


}