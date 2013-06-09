<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class Member_extends3_model extends CI_Model {

    var $member_id = '';
    var $profession = '';
    var $industry = '';
    var $treaty = '';
    var $religion = '';
    var $disposition = '';
    var $pet = '';
    var $brother = '';
    var $child = '';
    var $aa = '';
    var $constellation = '';
    var $wife_work = '';

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

        $this->profession = $this->input->post('profession');
        $this->industry = $this->input->post('industry');
        $this->treaty = $this->input->post('treaty');
        $this->religion = $this->input->post('religion');
        $this->disposition = $this->input->post('disposition');
        $this->pet = $this->input->post('pet');
        $this->brother = $this->input->post('brother');
        $this->child = $this->input->post('child');
        $this->aa = $this->input->post('aa');
        $this->constellation = $this->input->post('constellation');
        $this->wife_work = $this->input->post('wife_work');
    }

}

?>
