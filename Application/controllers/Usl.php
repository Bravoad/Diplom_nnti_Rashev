<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usl extends CI_Controller {

    public function index()
    {
        $this->load->helper('form');
        $this->load->helper('url');
        $this->load->model('usl_model');
        $data['index']=$this->usl_model->get_usl();
        $this->load->view('temp/head');
        $this->load->view('temp/header');
        $this->load->view('temp/navbar3');
        $this->load->view('usluga',$data);
        $this->load->view('temp/footer');

    }
    public function insert()
    {
        $this->load->model('usl_model');
        $data['insert']=$this->usl_model->ins_usl();
        $this->load->view('usluga',$data);
    }
}
?>