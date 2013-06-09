<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class Member_match_model extends CI_Model {

    var $member_match_id = '';
    var $member_id = '';
    var $country = '';
    var $state = '';
    var $city = '';
    var $certificate = '';
    var $age = '';
    var $height = '';
    var $marital_status = '';
    var $has_child = '';
    var $income_type = '';
    var $income_begin = '';
    var $income_end = '';
    var $education = '';
    var $house = '';

    function __construct() {
        // Call the Model constructor
        parent::__construct();
        $this->load->database();
    }

    // 插入数据
    function insert_entry() {
        $this->setProperty();
        return $this->db->insert('t_member_match', $this);
    }

    // 修改数据
    function update_entry() {
        $this->setProperty();
        $this->db->update('t_member_match', $this, array('member_id' => $this->input->post('member_id')));
    }
    

    function setProperty() {
        $this->member_match_id = $this->input->post('member_match_id');
        $this->member_id = $this->input->post('member_id');
        $this->country = $this->input->post('country');
        $this->state = $this->input->post('state');
        $this->city = $this->input->post('city');
        $this->certificate = $this->input->post('certificate');
        $this->age = $this->input->post('age');
        $this->height = $this->input->post('height');
        $this->marital_status = $this->input->post('marital_status');
        $this->has_child = $this->input->post('has_child');
        $this->income_type = $this->input->post('income_type');
        $this->income_begin = $this->input->post('income_begin');
        $this->income_end = $this->input->post('income_end');
        $this->education = $this->input->post('education');
        $this->house = $this->input->post('house');
    }

}

?>
