<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class Member_list_model extends CI_Model {

    function __construct() {
        // Call the Model constructor
        parent::__construct();
        $this->load->database();
    }

    /*
     * 首页的数据
     */
    function list_main_page() {
        $query = $this->db->query('select * from t_member m join t_member_extends me on m.user_id=me.member_id join t_member_match mm on m.user_id=mm.member_id order by last_login desc;');
        return $query->result();
    }
    
    function short_list() {
        $query = $this->db->query('select * from t_member m order by last_login desc;');
        return $query->result();
    }
}

?>
