<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class Member_extends1_model extends CI_Model {

    var $member_id = '';
    var $work_status = '';
    var $english = '';
    var $intro = '';

    function __construct() {
        // Call the Model constructor
        parent::__construct();
        $this->load->database();
    }

    // 插入数据
    function insert_entry() {
        $this->setProperty();
        return $this->db->insert('t_member_extends', $this);
    }

    // 修改数据
    function update_entry() {
        $this->setProperty();
        return $this->db->update('t_member_extends', $this, array('member_id' => $this->input->post('member_id')));
    }

    function setProperty() {
        $this->member_id = $this->input->post('member_id');
        $this->work_status = $this->input->post('work_status');
        $this->english = $this->input->post('english');
        $this->intro = $this->input->post('intro');
    }

}

?>
