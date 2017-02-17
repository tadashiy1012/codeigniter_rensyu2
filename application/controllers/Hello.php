<?php
class Hello extends CI_Controller {

    public function index()
    {
        //echo 'Hello World!';
        // $data = array(
        //     'title' => 'hello',
        //     'message' => 'Hello World'
        // );
        $this->load->model('Hellomodel');
        $data = $this->Hellomodel->getHello();
        $dbData = $this->Hellomodel->getFromDb();
        $this->load->view('helloview', array('data' => $data, 'db' => $dbData);
    }

}