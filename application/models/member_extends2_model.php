<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class Member_extends2_model extends CI_Model {

    var $member_id = '';
    var $smoke = '';
    var $drink = '';
    var $birth_city = '';
    var $nationality = '';

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

        $this->smoke = $this->input->post('smoke');
        $this->drink = $this->input->post('drink');
        $this->birth_city = $this->input->post('birth_city');
        $this->nationality = $this->input->post('nationality');
    }

}

?>
