<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Udog extends CI_Controller {

    public function index()
    {
        $this->load->helper('form');
        $this->load->helper('url');
        $this->load->model('dog_model');
        $data['index']=$this->dog_model->get_dog();
        $this->load->view('temp/head');
        $this->load->view('temp/header');
        $this->load->view('temp/navbar');
        $this->load->view('upddog',$data);
        $this->load->view('temp/footer');

    }
    public function update()
    {
        $this->load->model('dog_model');
        $data['update']=$this->dog_model->upd_dog();
        $this->load->view('upddog',$data);
    }
    public function index2()
    {
        $this->load->helper('form');
        $this->load->helper('url');
        $this->load->model('dog_model');
        $data['index']=$this->dog_model->get_dog();
        $this->load->view('temp/head');
        $this->load->view('temp/header');
        $this->load->view('temp/navbar');
        $this->load->view('vipdog',$data);
        $this->load->view('temp/footer');

    }
    public function update2()
    {
        $this->load->model('dog_model');
        $data['update']=$this->dog_model->upd_dog2();
        $this->load->view('vipdog',$data);
    }
}
?>