<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class City_model extends CI_Model {

    var $id = '';
    var $name = '';
    var $parent_id = '';

    function __construct() {
        // Call the Model constructor
        parent::__construct();
        $this->load->database();
    }

    // 插入数据
    function insert_entry() {
    }
    // 修改数据
    function update_entry() {
    }
    
    function getCityByLevel($parentId = 0){
        $q = 'select * from t_city where parent_id='. $parentId;
         $query = $this->db->query($q);
         return $query->result_array();
    }

    function cityForSel($parentId = 0){
        $country = array();
        array_push($country, array('0' => '请选择'));
        foreach ($this->getCityByLevel($parentId) as $key => $value) {
            array_push($country, array($value['id'] => $value['name']));
        }
        return $country;
    }
    
    
    function countryForSel(){
        $country = array();
        $country[0] = '请选择';
        foreach ($this->getCountry() as $key => $value) {
            $country[$value['id']] = $value['name'];
        }
        return $country;
    }
    
    function getCountry(){
        return $this->getCityByLevel(0);
    }
}

?>
