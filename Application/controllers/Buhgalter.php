<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Buhgalter extends CI_Controller {

   public function index()
    {
        $this->load->helper('form');
        $this->load->helper('url');
        $this->load->model('opl_model');
        $data['index']=$this->opl_model->get_opl();
        $this->load->view('temp/head');
        $this->load->view('temp/navbar2');
        $this->load->view('buhgalter',$data);
        $this->load->view('temp/footer');
    }
    public function zavrab()
    {
        $this->load->model('otch_model');
        $this->load->view('temp/head');
        $this->load->view('temp/header');
        $this->load->view('temp/navbar1');
        $data7['select7']=$this->otch_model->select6();
        $this->load->view('vipoprab', $data7);
        $this->load->view('temp/footer');
    }
    public function actsverki()
    {
        $this->load->model('otch_model');
        $this->load->view('temp/head');
        $this->load->view('temp/header');
        $this->load->view('temp/navbar1');
        $data6['actsverki']=$this->otch_model->select6();
        $this->load->view('sverki', $data6);
        $this->load->view('temp/footer');
    }

    public function insopl()
    {
        $this->load->model('opl_model');
        $data['insert']=$this->opl_model->ins_opl();
                $this->load->view('opl',$data);
    }

}
?>