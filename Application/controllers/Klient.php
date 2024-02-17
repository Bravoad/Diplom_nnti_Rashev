<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Klient extends CI_Controller {

    public function index()
    {
        $this->load->helper('form');
        $this->load->helper('url');
        $this->load->model('dog_model');
        $data['index']=$this->dog_model->get_dog();
        $this->load->view('temp/head');
        $this->load->view('temp/header');
        $this->load->view('temp/navbar2');
        $this->load->view('dog',$data);
        $this->load->view('temp/footer');

    }
    public function zakldog()
    {
        $this->load->model('dog_model');
        $data['insert']=$this->dog_model->ins_dog();
        $this->load->view('dog',$data);
    }
}
?>