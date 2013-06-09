<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class Contry_certificate_model extends CI_Model {

    var $id = '';
    var $contry_id = '';
    var $certificate_id = '';

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
    
    function getCertificateByContry($contryId){
        $query = $this->db->query('select tcc.contry_id,tc.id,tc.name from t_contry_certificate tcc join t_certificate tc on tcc.certificate_id=tc.id where contry_id='.$contryId .';');
        return $query->result_array();
    }
}

?>
