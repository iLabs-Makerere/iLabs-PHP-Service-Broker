<?php 
class Dashboard extends MY_Controller{
    public function index(){
        // get names and marks

        if(!empty($this->input->post('name'))){
            $data['get_students'] = $this->Student_model->get_filtered_students($this->input->post('name'));

        }else{
            $data['get_students'] = $this->Student_model->get_students();
        }
    
   
    $data['main_content'] = 'admin/dashboard/index';
    $this->load->view('admin/layouts/dashboard.php',$data);


}
} 