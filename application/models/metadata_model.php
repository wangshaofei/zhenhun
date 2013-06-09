<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class Metadata_model extends CI_Model {

    var $id = '';
    var $item_name = '';
    var $value = '';
    var $name = '';

    function __construct() {
        // Call the Model constructor
        parent::__construct();
        $this->load->database();
    }

    // 插入数据
    function add() {
        $this->item_name = $this->input->post('item_name');
        $this->value = $this->input->post('value');
        $this->name = $this->input->post('name');
        
        $query = $this->db->insert('t_metadata',  $this);
        return $query;
    }
    // 插入数据
    function delete() {
        $this->id = $this->input->post('id');
        $query = $this->db->query('delete from t_metadata where id='.$this->id.';');
        return $query;
    }
    
    function get($item = 0){
        if($item){
            $query = $this->db->query('select * from t_metadata where item_name=\''.$item.'\';');
        }else{
            $query = $this->db->query('select * from t_metadata');
        }
        return $query->result_array();
    }
    
    function getItemAndNum(){
        $query = $this->db->query('select item_name,count(*) as count from t_metadata group by item_name;');
        return $query->result_array();
    }
    
}

?>
