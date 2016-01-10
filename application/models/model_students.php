<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 10/01/2016
 * Time: 2:20
 */
class Model_students extends MY_Model{

    protected  $_table = 'students';
    protected $primary_key = 'student_id';
    protected $return_type = 'array';


    protected $after_get = array('remove_sesitive_data');
    protected $before_create = array('prep_data');
    protected $before_update = array('update_timestamp');

    protected  function remove_sesitive_data($student){
        unset($student['password']);
        unset($student['ip_address']);
        return $student;
    }

    protected  function prep_data($student){
        $student['password'] = md5($student['password']);
        $student['ip_address'] = $this->input->ip_address();
        $student['created_timestamp'] = date('Y-m-d H:i:s');
        return $student;
    }

    protected  function update_timestamp($student){
        $student['updated_timestamp'] = date('Y-m-d H:i:s');
        return $student;
    }




}