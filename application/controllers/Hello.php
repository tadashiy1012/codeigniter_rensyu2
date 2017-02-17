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
        $this->load->view('helloview', $data);
    }

}