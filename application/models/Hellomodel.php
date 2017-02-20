<?php
class Hellomodel extends CI_Model {
  function __construct() {
    parent::__construct();
    $this->load->database();
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
  function getFromDbOne($id) {
    $query = $this->db->where('id', $id)->get();
    return $query->result();
  }
  function setHello() {
    $count = $this->db->count_all('member');
    $count = $count + 1;
    $data = array(
      'id' => $count,
      'name' => $this->input->post('name')
    );
    return $query = $this->db->insert('member', $data);
  }
}