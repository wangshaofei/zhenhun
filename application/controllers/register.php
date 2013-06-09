<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Register extends CI_Controller {

    function __construct() {
        // Call the Model constructor
        parent::__construct();
        
        // 将国家初始化

    }

    /**
     *  注册页面导航
     */
    public function index($step, $data = array()) {
        
        // 注册步骤
        switch ($step) {
            case 1:
                $this->load->view('register/step_1_view');
                break;
            case 2:
                $this->load->model('City_model');
                $data['country'] = $this->City_model->countryForSel();
                $this->load->view('register/step_2_view', $data);
                break;
            case 3:
                $this->load->view('register/step_3_view', $data);
                break;
            case 4:
                $this->load->model('City_model');
                $data['country'] = $this->City_model->countryForSel();
                $this->load->view('register/step_4_view', $data);
                break;
            case 5:
                $this->load->view('register/step_5_view', $data);
                break;
            case 6:
                $this->load->view('register/step_6_view', $data);
                break;
            default:
                break;
        }
    }

    /*
     * 存储基础信息
     */

    public function save_member() {
        $this->load->library('form_validation');
        
        if ($this->form_validation->run('regiter_step_1') == FALSE) {
            $this->index(1);
        } else {
            $this->load->model('Member_model');
            if ($this->Member_model->insert_entry()) {
                $data['member_id'] = $this->db->insert_id();
                $this->session->set_userdata(array('member_id'=>$this->db->insert_id()));
                // 删除验证对象，和post 变量，使下个页面的radio控件可以选中默认值。
                unset($this->form_validation);
                $_POST = array();
                $this->index(2, $data);
            } else {
                $this->index(1);
            }
        }
    }

    /*
     * 校验邮箱 是否已被注册
     */

    public function check_email() {
        $this->load->model('Member_model');
        if ($this->Member_model->get_entry_by_email($this->input->post('email'))) {
            $this->form_validation->set_message('check_email', '该邮箱已被注册！');
            return FALSE;
        } else {
            return TRUE;
        }
    }

    /*
     * 校验用户名 是否已被注册
     */

    public function check_username() {
        $this->load->model('Member_model');
        if ($this->Member_model->get_entry_by_username($this->input->post('user_name'))) {
            $this->form_validation->set_message('check_username', '该用户名已被注册！');
            return FALSE;
        } else {
            return TRUE;
        }
    }

    /*
     * 保存匹配信息
     */

    public function save_member_match() {
        $this->load->model('Member_condition_model');
        $this->Member_condition_model->save($this->input->post('match'));
        
        $data['member_id'] = $this->input->post('member_id');
        if ($this->form_validation->run('regiter_step_2') == FALSE) {
            $this->index(2, $data);
        } else {
            $this->load->model('Member_match_model');
            if ($this->Member_match_model->insert_entry()) {
                // 删除验证对象，和post 变量，使下个页面的radio控件可以选中默认值。
                unset($this->form_validation);
                $_POST = array();
                $this->index(3, $data);
            }
        }
    }

    /*
     * 保存可选/拓展信息 3
     */

    public function save_member_extends_step3() {

        $data['member_id'] = $this->input->post('member_id');
        if ($this->form_validation->run('regiter_step_3') == FALSE) {
            $this->index(3, $data);
        } else {
            $this->load->model('Member_extends1_model');
            if ($this->Member_extends1_model->insert_entry()) {
                // 删除验证对象，和post 变量，使下个页面的radio控件可以选中默认值。
                unset($this->form_validation);
                $_POST = array();
                $this->index(4, $data);
            }
        }
    }

    /*
     * 保存可选/拓展信息 4
     */

    public function save_member_extends_step4() {

        $data['member_id'] = $this->input->post('member_id');
        if ($this->form_validation->run('regiter_step_4') == FALSE) {
            $this->index(4, $data);
        } else {
            $this->load->model('Member_extends2_model');
            if ($this->Member_extends2_model->update_entry()) {
                // 删除验证对象，和post 变量，使下个页面的radio控件可以选中默认值。
                unset($this->form_validation);
                $_POST = array();
                $this->index(5, $data);
            }
        }
    }

    /*
     * 保存可选/拓展信息 5
     */

    public function save_member_extends_step5() {

        $data['member_id'] = $this->input->post('member_id');

        $this->load->model('Member_extends3_model');
        if ($this->Member_extends3_model->update_entry()) {
            // 删除验证对象，和post 变量，使下个页面的radio控件可以选中默认值。
            unset($this->form_validation);
            $_POST = array();
            $this->index(6, $data);
        }
    }

    public function uploadPic() {
        
        $member_id = $this->input->post('member_id');
        if(!$member_id){
            $this->load->view('register/step_1_view');
            return false;
        }
        $upload_path = './uploads/'.$member_id . '/';
        if(!is_dir($upload_path)){
            mkdir($upload_path, 0777);
        }
        if($this->input->post('savePic')){
            $this->load->library('image_lib');
            
            $x1 = $this->input->post('x1');
            $y1 = $this->input->post('y1');
            $x2 = $this->input->post('x2');
            $y2 = $this->input->post('y2');
            $s_w = $this->input->post('s_w');
            $s_h = $this->input->post('s_h');
            
            $image_width = $this->input->post('image_width');
            $image_height = $this->input->post('image_height');
            $file_name = $this->input->post('file_name');
            $file_ext = $this->input->post('file_ext');
            $src_file_name = 'headimg'.$file_ext;
            
            $big_dir = $upload_path.'big/';
            $small_dir = $upload_path.'small/';
            $src_dir = $upload_path.'src/';
            // 是否包含 big small 两个文件夹
            if(!is_dir($big_dir)){
                mkdir($big_dir, 0777);
            }
            if(!is_dir($small_dir)){
                mkdir($small_dir, 0777);
            }
            if(!is_dir($src_dir)){
                mkdir($src_dir, 0777);
            }
            
            $real_x1 = ($image_width * $x1) / $s_w;
            $real_y1 = ($image_height * $y1) / $s_h;
            $real_x2 = ($image_width * $x2) / $s_w;
            $real_y2 = ($image_height * $y2) / $s_h;
            $real_w = $real_x2 - $real_x1;
            $real_h = $real_y2 - $real_y1;
            
            $config = array();
            $config['source_image'] = $upload_path.$file_name;
            $config['x_axis'] = $real_x1;
            $config['y_axis'] = $real_y1;
            $config['width'] = $real_w;
            $config['height'] = $real_h;
            $config['maintain_ratio'] = FALSE;
            $config['new_image'] = $src_dir.$src_file_name;
            $this->image_lib->initialize($config); 
            $this->image_lib->crop();
            $this->image_lib->clear();
            $config = array();
            // 生成125的图像
            $config['source_image'] = $src_dir.$src_file_name;
            $config['width'] = 125;
            $config['height'] = 125;
            $config['quality'] = 100;
            $config['create_thumb'] = TRUE;
            $config['new_image'] = $big_dir . $src_file_name;
            $this->image_lib->initialize($config); 
            $this->image_lib->resize();
            $this->image_lib->clear();
            $config = array();
            // 生成80的图像
            $config['source_image'] = $src_dir.$src_file_name;
            $config['width'] = 80;
            $config['height'] = 80;$config['create_thumb'] = TRUE;
            $config['quality'] = 100;
            $config['new_image'] = $small_dir . $src_file_name;
            $this->image_lib->initialize($config);
            $this->image_lib->resize();
            $this->image_lib->clear();
            $config = array();
            
            // 保存图片名称到数据库
            $this->load->model('Member_model');
            $this->Member_model->addportrait($member_id,$src_file_name);
            
            // 跳转到首页 并登陆成功。
            redirect();
            
        }else{
            $config['upload_path'] = $upload_path;
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size'] = '10000';
            $config['max_width'] = '10240';
            $config['max_height'] = '7680';
            // 上传的目录和文件名不能包含中文路径
            $config['encrypt_name'] = TRUE;

            $this->load->library('upload', $config);

            if (!$this->upload->do_upload()) {
                $error = array(
                    'error' => $this->upload->display_errors(),
                    'member_id' => $member_id
                        );
                $this->index(6, $error);
            } else {
                $data = array(
                    'upload_data' => $this->upload->data(),
                    'member_id' => $member_id
                    );
                $this->index(6, $data);
            }
        }
        
    }

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */