<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth_model extends CI_Model {

  public function login($params = null) {
    if(is_null($params))
      return array('status' => false, 'message' => 'parameter not failed');

    $this->db->select('*');
    $this->db->from("users");
    $this->db->where("user_email", $params['email']);
    $this->db->where("user_password", $params['password']);
    $get = $this->db->get();
    if($get->num_rows() > 0) {
      return array(
        'status' => true, 
        'data' => $get->row_array(), 
        'message' => 'login successfully');
    }else{
      return array('status' => false, 'message' => 'login failed');
    }
  }

  public function save($params = null, $id = null) {
    if(is_null($params))
      return array('status' => false, 'message' => 'parameter not failed');

    $this->db->trans_begin();
    $get = $this->db->get_where("users", array("user_email" => $params['user_email']))->get()->num_rows();
    if($get == 0) {
      $this->db->insert("users", $params);
      unset($params);
      $params = array(
        'ug_user_id' => $this->db->insert_id(),
        'ug_grup_id' => ACCESS_SUPER_USER,
        'ug_view'    => 1
      );
      $this->db->insert("user_group", $params);
    }else if(! is_null($id)) {
      $get = $this->db->get_where("users", array("user_id" => $id))->get()->num_rows();
      if($get > 0) {
        $this->db->update("users", $params, array("user_id" => $id));
      }
    }

    if($this->db->trans_status() == false){
        $this->db->rollback();
        return array('status' => false, 'message' => 'saving failed');
    }else{
        $this->db->trans_commit();
        return array('status' => true, 'message' => 'saving successfully');
    }

  }

}

/* End of file Auth_model.php */
