<?php
class Hello extends CI_Controller {

    public function index() {
        $this->load->model('Hellomodel');
        $data = $this->Hellomodel->getHello();
        $this->load->view('helloview', $data);
        $this->load->view('link', $data);
        $this->load->view('helloview_footer', $data);
    }

    public function list() {
        $this->load->model('Hellomodel');
        $data = $this->Hellomodel->getHello();
        $db = $this->Hellomodel->getFromDb();
        $this->load->view('helloview', $data);
        $this->load->view('dbout', array('db' => $db));
        $this->load->view('helloview_footer', $data);
    }

    public function create() {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('name', 'name', 'required');
        $this->load->helper('url');
        $this->load->model('Hellomodel');
        if ($this->form_validation->run() === false) {
            $data = $this->Hellomodel->getHello();
            $this->load->view('helloview', $data);
            $this->load->view('form', $data);
            $this->load->view('helloview_footer', $data);
        } else {
            $this->Hellomodel->setHello();
            echo redirect('/hello/list');
        }
    }

    public function read($id) {
        $this->load->model('Hellomodel');
        $data['item'] = $this->Hellomodel->getFromDbOne($id);
        if (empty($data['item'])) {
            show_404();
        }
        $data['title'] = 'hello:' . $id;
        $data['message'] = 'Hello World!!';
        $this->load->view('helloview', array('data' => $data, 'db' => $data['item']));
    }

}