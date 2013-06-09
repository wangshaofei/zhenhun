<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
$config = array(
    'regiter_step_1' => array(
        array('field' => 'email', 'label' => '邮箱', 'rules' => 'required|callback_check_email'),
        array('field' => 'user_name', 'label' => '昵称', 'rules' => 'required|callback_check_username'),
        array('field' => 'gender', 'label' => '性别', 'rules' => 'required'),
        array('field' => 'password', 'label' => '密码', 'rules' => 'required'),
        array('field' => 'agree', 'label' => '协议文件', 'rules' => 'required')
    ),
    'regiter_step_2' => array(
        array('field' => 'country', 'label' => 'country', 'rules' => 'required'),
        array('field' => 'state', 'label' => 'state', 'rules' => 'required'),
        array('field' => 'city', 'label' => 'city', 'rules' => 'required'),
        array('field' => 'certificate', 'label' => 'certificate', 'rules' => 'required'),
        array('field' => 'age', 'label' => 'age', 'rules' => 'required'),
        array('field' => 'height', 'label' => 'height', 'rules' => 'required'),
        array('field' => 'marital_status', 'label' => 'marital_status', 'rules' => 'required'),
        array('field' => 'has_child', 'label' => 'has_child', 'rules' => 'required'),
        array('field' => 'income_type', 'label' => 'income_type', 'rules' => 'required'),
        array('field' => 'income_begin', 'label' => 'income_begin', 'rules' => 'required'),
        array('field' => 'income_end', 'label' => 'income_end', 'rules' => 'required'),
        array('field' => 'education', 'label' => 'education', 'rules' => 'required'),
        array('field' => 'house', 'label' => 'house', 'rules' => 'required'),
    ),
    'regiter_step_3' => array(
        array('field' => 'work_status', 'label' => 'work_status', 'rules' => 'required'),
        array('field' => 'english', 'label' => 'english', 'rules' => 'required'),
        array('field' => 'intro', 'label' => 'intro', 'rules' => 'required'),
    ),
    'regiter_step_4' => array(
        array('field' => 'smoke', 'label' => 'smoke', 'rules' => 'required'),
        array('field' => 'drink', 'label' => 'drink', 'rules' => 'required'),
        array('field' => 'birth_city', 'label' => 'birth_city', 'rules' => 'required'),
        array('field' => 'nationality', 'label' => 'nationality', 'rules' => 'required'),
    )
);
?>
