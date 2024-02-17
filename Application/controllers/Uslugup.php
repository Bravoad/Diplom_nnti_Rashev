<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Uslugup extends CI_Controller {

    public function index()
    {
        $this->load->helper('form');
        $this->load->helper('url');
        $this->load->model('Usl_model');
        $data['index']=$this->Usl_model->get_usl();
        $this->load->view('temp/head');
        $this->load->view('temp/header');
        $this->load->view('temp/navbar1');
        $this->load->view('uslup',$data);
        $this->load->view('temp/footer');
    }
    public function update()
    {
        $this->load->model('Usl_model');
        $data['update']=$this->Usl_model->upd_usl();
        $this->load->view('uslup',$data);
    }
}
?>