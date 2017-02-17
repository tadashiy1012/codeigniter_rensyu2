<?php
class Hellomodel extends CI_Model {
  function __construct() {
    parent::__construct();
  }
  function getHello() {
    $data = array(
      'title' => 'hello',
      'message' => 'Hello World'
    );
    return $data;
  }
  function getFromDb() {
    $query = $this->db->get('member');
    return $query->result_array();
  }
}