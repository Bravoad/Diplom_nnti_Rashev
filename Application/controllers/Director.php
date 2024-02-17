<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class  Director extends CI_Controller {

    public function update4()
    {
        $this->load->model('dog_model');
        $data['update4']=$this->dog_model->upd_dog();
        $this->load->view('upddog',$data);
    }
    public function index()
    {
        $this->load->helper('form');
        $this->load->helper('url');
        $this->load->model('rab_model');
        $data['index']=$this->rab_model->get_rab();
        $this->load->view('temp/head');
        $this->load->view('temp/header');
        $this->load->view('temp/navbar3');
        $this->load->view('rab',$data);
        $this->load->view('temp/footer');

    }
    public function insertrab()
    {
        $this->load->model('rab_model');
        $data['insertrab']=$this->rab_model->ins_rab();
        $this->load->view('rab',$data);
    }
    public function zakldog()
    {
        $this->load->model('otch_model');
        $this->load->view('temp/head');
        $this->load->view('temp/header');
        $this->load->view('temp/navbar3');
        $data['zakldog']=$this->otch_model->select();
        $this->load->view('zakldog', $data);
        $this->load->view('temp/footer');
    }
    public function raitusl()
    {
        $this->load->model('otch_model');
        $this->load->view('temp/head');
        $this->load->view('temp/header');
        $this->load->view('temp/navbar3');
        $data3['raitusl']=$this->otch_model->select3();
        $this->load->view('raitusl', $data3);
        $this->load->view('temp/footer');
    }

    public function viprab()
    {
        $this->load->model('otch_model');
        $this->load->view('temp/head');
        $this->load->view('temp/header');
        $this->load->view('temp/navbar3');
        $data2['viprab']=$this->otch_model->select2();
        $this->load->view('viprab', $data2);
        $this->load->view('temp/footer');
    }

    public function dogviprab()
    {
        $this->load->model('otch_model');
        $this->load->view('temp/head');
        $this->load->view('temp/header');
        $this->load->view('temp/navbar3');
        $data2['dogviprab']=$this->otch_model->select2();
        $this->load->view('viprab', $data2);
        $this->load->view('temp/footer');
    }



}
?>