<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class Member_condition_model extends CI_Model {

    var $id = '';
    var $member_id = '';
    var $match_name = '';
    var $match_value = '';
    var $match_weight = '';

    function __construct() {
        // Call the Model constructor
        parent::__construct();
        $this->load->database();
    }

    function save($array){
        if(!count($array))
            return false;
        $member_id = $this->session->userdata('member_id');
        $q = 'insert into t_member_condition (member_id,match_name,match_value,match_weight) values ';
        foreach ($array as $key => $value) {
            foreach ($value as $k => $v) {
                if(strpos($k, 'weight') !== false){
                    continue;
                }
                if(strpos($k, '_begin') !== false && array_key_exists('weight_less', $value)){
                    $q .= '('.$member_id.',\''.$k.'\', \''.$v.'\',\''.$value['weight_less'].'\'),';
                }else if(strpos($k, '_end') !== false && array_key_exists('weight_more', $value)){
                    $q .= '('.$member_id.',\''.$k.'\', \''.$v.'\',\''.$value['weight_more'].'\'),';
                }  else {
                    $q .= '('.$member_id.',\''.$k.'\', \''.$v.'\',\''.$value['weight'].'\'),';
                }
            }
        }
        $q = substr($q, 0,  strlen($q)-1) . ';';
        $this->db->query($q);
    }
    
    function getEntryById($id){
        $query = $this->db->query('select * from t_member_condition where member_id='.$id);
        return $query->result_array();
    }
}

?>
