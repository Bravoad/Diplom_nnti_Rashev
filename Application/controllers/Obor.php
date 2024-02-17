<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Obor extends CI_Controller {

    public function index()
    {
        $this->load->helper('form');
        $this->load->helper('url');
        $this->load->model('obor_model');
        $data['index']=$this->obor_model->get_obor();
        $this->load->view('temp/head');
        $this->load->view('temp/header');
        $this->load->view('temp/navbar');
        $this->load->view('obor',$data);
        $this->load->view('temp/footer');

    }
    public function insert()
    {
        $this->load->model('obor_model');
        $data['insert']=$this->obor_model->ins_obor();
        $this->load->view('obor',$data);
    }
}
?>