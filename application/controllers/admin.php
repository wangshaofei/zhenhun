<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Admin extends CI_Controller {

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     * 	- or -  
     * 		http://example.com/index.php/welcome/index
     * 	- or -
     * Since this controller is set as the default controller in 
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see http://codeigniter.com/user_guide/general/urls.html
     */
    public function index() {
        $this->load->model('Metadata_model');
        $list = $this->Metadata_model->get(0);
        $items = $this->Metadata_model->getItemAndNum();
        $data['list'] = $list;
        $data['items'] = $items;
        $this->load->view('admin/index_view',$data);
    }
    
    public function users() {
        $this->load->model('Member_list_model');
        $list = $this->Member_list_model->short_list(0);
        $data['list'] = $list;
        $this->load->view('admin/users_view',$data);
    }
    
    public function handle_user(){
        $this->load->model('Member_model');
        $this->Member_model->handle_users();
        $this->users();
    }
    

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */