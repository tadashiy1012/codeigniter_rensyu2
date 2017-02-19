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
        $this->load->view('helloview', array('data' => $data, 'db' => $dbData));
    }

    public function create() {
        $this->load->helper('form');
        $this->load->helper('url');
        $this->load->library('form_validation');
        $this->load->model('Hellomodel');
        $this->form_validation->set_rules('name', 'name', 'required');
        if ($this->form_validation->run() === false) {
            echo redirect('/hello');
        } else {
            $this->Hellomodel->setHello();
            echo redirect('/hello');
        }
    }

}