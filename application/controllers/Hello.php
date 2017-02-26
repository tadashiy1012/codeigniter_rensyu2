<?php
class Hello extends CI_Controller {

    public function index() {
        $this->load->model('Hellomodel');
        $data = $this->Hellomodel->getHello();
        $this->load->view('helloview', $data);
        $this->load->view('link', $data);
        $this->load->view('search', $data);
        $this->load->view('helloview_footer', $data);
    }

    public function list() {
        $this->load->model('Hellomodel');
        $data = $this->Hellomodel->getHello();
        $db = $this->Hellomodel->getFromDb();
        $this->load->view('helloview', $data);
        $this->load->view('dbout', array('db' => $db));
        $this->load->view('list', array('db' => $db));
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
        $data = $this->Hellomodel->getHello();
        $item = $this->Hellomodel->getFromDbOne($id);
        if (empty($item)) {
            show_404();
        }
        $this->load->view('helloview', $data);
        $this->load->view('dbout', array('db' => $item));
        $this->load->view('read', array('item' => $item));
        $this->load->view('helloview_footer', $data);
    }

    public function search() {
        $id = $this->input->post('inId');
        if (empty($id) || !ctype_digit($id)) {
            show_404();
        }
        $this->load->helper('url');
        echo redirect('/hello/read/' . $id);
    }

    public function delete($id) {
        if (empty($id) || !ctype_digit($id)) {
            show_404();
        }
        $this->load->model('Hellomodel');
        $this->Hellomodel->deleteHello($id);
        $this->load->helper('url');
        echo redirect('/hello/list');
    }

}