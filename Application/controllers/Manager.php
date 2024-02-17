<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Manager extends CI_Controller {

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
    public function insertnar()
    {
        $this->load->model('Nar_model');
        $data['insertnar']=$this->Nar_model->ins_nar();
        $this->load->view('narydtz',$data);
    }
    public function zakupob()
    {
        $this->load->model('obor_model');
        $data['zakupob']=$this->obor_model->ins_obor();
        $this->load->view('obor',$data);
    }

    public function rasnar()
    {
        $this->load->model('Nar_model');
        $data['rasnar']=$this->Nar_model->upd_nar();
        $this->load->view('rasnar',$data);
    }

    public function zaknar()
    {
        $this->load->model('Nar_model');
        $data['zaknar']=$this->Nar_model->upd_nar2();
        $this->load->view('zaknar',$data);
        }

    public function actvip()
    {
        $this->load->model('dog_model');
        $data['actvip']=$this->dog_model->upd_dog2();
        $this->load->view('vipdog',$data);
    }
    public function korrusl()
    {
        $this->load->model('usl_model');
        $data['insert']=$this->usl_model->ins_usl();
        $this->load->view('usluga',$data);
    }

}
?>