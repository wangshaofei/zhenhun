<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Ajax extends CI_Controller {

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
        $this->load->model('Member_list_model');
        $member_list = $this->Member_list_model->list_main_page();
        $data['member_list'] = $member_list;
        $this->load->view('index',$data);
    }
    /*
     * $level 1 国家 
     */
    public function getCity($parentId = 0){
        $this->load->model('City_model');
        $r = $this->City_model->cityForSel($parentId);
        echo json_encode($r);
    }
    
    public function getUserDetail($userId = 0){
        $this->load->model('Member_condition_model');
        $this->load->model('Member_model');
        $r1 = $this->Member_condition_model->getEntryById($userId);
        $r2 = $this->Member_model->getFullMsgByUserId($userId);
        echo json_encode(array('fullMsg'=>$r2,'condition'=>$r1));
    }
    
    function getCerByContry($contryId) {
        $this->load->model('Contry_certificate_model');
        $certificates = $this->Contry_certificate_model->getCertificateByContry($contryId);
        echo json_encode($certificates);
    }
    
    function addMetadata(){
        $this->load->model('Metadata_model');
        $r = $this->Metadata_model->add();
        echo json_encode(array('r'=>$r));
    }
    
    function deleteMetadata(){
        $this->load->model('Metadata_model');
        $r = $this->Metadata_model->delete();
        echo json_encode(array('r'=>$r));
    }
    
    function getMetadataByItem($item){
        $this->load->model('Metadata_model');
        $list = $this->Metadata_model->get($item);
        echo json_encode($list);
    }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */