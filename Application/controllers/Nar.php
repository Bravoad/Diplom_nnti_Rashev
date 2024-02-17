<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Nar extends CI_Controller {

    public function index()
    {
        $this->load->helper('form');
        $this->load->helper('url');
        $this->load->model('Nar_model');
        $data['index']=$this->Nar_model->get_nar();
        $this->load->view('temp/head');
        $this->load->view('temp/header');
        $this->load->view('temp/navbar');
        $this->load->view('narydtz',$data);
        $this->load->view('temp/footer');
    }
    public function insert()
    {
        $this->load->model('Nar_model');
        $data['insert']=$this->Nar_model->ins_nar();
        $this->load->view('narydtz',$data);
    }
}
?>