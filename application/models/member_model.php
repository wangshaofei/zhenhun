<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class Member_model extends CI_Model {

    var $user_id = '';
    var $user_name = '';
    var $email = '';
    var $password = '';
    var $real_name = '';
    var $gender = '';
    var $birthday = '';
    var $phone = '';
    var $mobile_phone = '';
    var $Im_qq = '';
    var $Im_msn = '';
    var $Im_skype = '';
    var $Im_yahoo = '';
    var $Im_aliww = '';
    var $registered_on = '';
    var $last_login = '';
    var $last_ip = '';
    var $Logins = '';
    var $user_level = '';
    var $portrait = '';
    var $activation = '';

    function __construct() {
        // Call the Model constructor
        parent::__construct();
        $this->load->database();
    }

    // 插入数据
    function insert_entry() {
        $this->setProperty();
        return $this->db->insert('t_member', $this);
        
    }
    // 修改数据
    function update_entry() {
        $this->updateProperty();
        $this->db->update('t_member', $this, array('user_id' => $this->input->post('user_id')));
    }
    // 查找同名的邮箱
    function get_entry_by_email($email) {
        $query = $this->db->get_where('t_member', array('email' => $email));
        return $query->num_rows();
    }
    // 查找同名的昵称
    function get_entry_by_username($username) {
        $query = $this->db->get_where('t_member', array('user_name' => $username));
        return $query->num_rows();
    }
    
    // 保存头像
    function addportrait($member_id,$src_file_name){
        $this->db->query('update t_member set portrait="'.$src_file_name.'" where user_id='.$member_id .'; ');
    }
    
    function getFullMsgByUserId($id) {
        $query = $this->db->query('select * from t_memberFullMsg m where m.id='.$id.';');
        return $query->result_array();
    }
    
    function setProperty() {
        $this->user_name = $this->input->post('user_name');
        $this->email = $this->input->post('email');
        $this->password = md5($this->input->post('password'));
        $this->real_name = $this->input->post('real_name');
        $this->gender = $this->input->post('gender');
        $this->birthday = $this->input->post('birthday');
        $this->phone = $this->input->post('phone');
        $this->mobile_phone = $this->input->post('mobile_phone');
        $this->Im_qq = $this->input->post('Im_qq');
        $this->Im_msn = $this->input->post('Im_msn');
        $this->Im_skype = $this->input->post('Im_skype');
        $this->Im_yahoo = $this->input->post('Im_yahoo');
        $this->Im_aliww = $this->input->post('Im_aliww');
        $this->registered_on = date("Y-m-d H:i:s");
        $this->last_login = date("Y-m-d H:i:s");
        $this->last_ip = $_SERVER['REMOTE_ADDR'];
        $this->Logins = 1;
        $this->user_level = 1;
        $this->portrait = '';
        $this->activation = 1;
    }
    
    function handle_users(){
        
        $id = $this->input->post('user_id');
        $ids = implode(',', $id);
        if($this->input->post('handle') == 'delete'){
            $q1 = 'delete from t_member where user_id in ('.$ids.');';
            $q2 = 'delete from t_member_match where member_id in ('.$ids.');';
            $q3 = 'delete from t_member_extends where member_id in ('.$ids.');';
            $q4 = 'delete from t_member_condition where member_id in ('.$ids.');';
        }else if($this->input->post('handle') == 'update'){
            $q .= 'update';
        }
        
        $query = $this->db->query($q1);
        $query = $this->db->query($q2);
        $query = $this->db->query($q3);
        $query = $this->db->query($q4);
        return $query;
    }

}

?>
