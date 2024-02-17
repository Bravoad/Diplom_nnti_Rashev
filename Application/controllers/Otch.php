<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Otch extends CI_Controller {

    public function index()
    {
        $this->load->model('otch_model');
        $this->load->view('temp/head');
        $this->load->view('temp/header');
        $this->load->view('temp/navbar3');
        $data['select']=$this->otch_model->select();
        $this->load->view('zakldog',$data);
        $this->load->view('temp/footer');
    }
    public function select()
    {
        $this->load->model('otch_model');
        $this->load->view('temp/head');
        $this->load->view('temp/header');
        $this->load->view('temp/navbar3');
        $data['select']=$this->otch_model->select();
        $this->load->view('zakldog', $data);
        $this->load->view('temp/footer');
    }
    public function index2()
    {
        $this->load->model('otch_model');
        $this->load->view('temp/head');
        $this->load->view('temp/header');
        $this->load->view('temp/navbar3');
        $data2['index2']=$this->otch_model->select2();
        $this->load->view('viprab', $data2);
        $this->load->view('temp/footer');
    }
    public function select2()
    {
        $this->load->model('otch_model');
        $this->load->view('temp/head');
        $this->load->view('temp/header');
        $this->load->view('temp/navbar3');
        $data2['select2']=$this->otch_model->select2();
        $this->load->view('viprab', $data2);
        $this->load->view('temp/footer');
    }
    public function index3()
    {
        $this->load->model('otch_model');
        $this->load->view('temp/head');
        $this->load->view('temp/header');
        $this->load->view('temp/navbar3');
        $data3['index3']=$this->otch_model->select3();
        $this->load->view('raitusl', $data3);
        $this->load->view('temp/footer');
    }
    public function select3()
    {
        $this->load->model('otch_model');
        $this->load->view('temp/head');
        $this->load->view('temp/header');
        $this->load->view('temp/navbar3');
        $data3['select3']=$this->otch_model->select3();
        $this->load->view('raitusl', $data3);
        $this->load->view('temp/footer');
    }
    public function index4()
    {
        $this->load->model('otch_model');
        $this->load->view('temp/head');
        $this->load->view('temp/header');
        $this->load->view('temp/navbar');
        $data4['index4']=$this->otch_model->select4();
        $this->load->view('zaknar2', $data4);
        $this->load->view('temp/footer');
    }
    public function select4()
    {
        $this->load->model('otch_model');
        $this->load->view('temp/head');
        $this->load->view('temp/header');
        $this->load->view('temp/navbar');
        $data4['select4']=$this->otch_model->select4();
        $this->load->view('zaknar2', $data4);
        $this->load->view('temp/footer');
    }
    public function index5()
    {
        $this->load->model('otch_model');
        $this->load->view('temp/head');
        $this->load->view('temp/header');
        $this->load->view('temp/navbar1');
        $data5['index5']=$this->otch_model->select5();
        $this->load->view('stom', $data5);
        $this->load->view('temp/footer');
    }
    public function select5()
    {
        $this->load->model('otch_model');
        $this->load->view('temp/head');
        $this->load->view('temp/header');
        $this->load->view('temp/navbar1');
        $data5['select5']=$this->otch_model->select5();
        $this->load->view('stom', $data5);
        $this->load->view('temp/footer');
    }
    public function index6()
    {
        $this->load->model('otch_model');
        $this->load->view('temp/head');
        $this->load->view('temp/header');
        $this->load->view('temp/navbar1');
        $data6['index6']=$this->otch_model->select6();
        $this->load->view('vneplan', $data6);
        $this->load->view('temp/footer');
    }
    public function select6()
    {
        $this->load->model('otch_model');
        $this->load->view('temp/head');
        $this->load->view('temp/header');
        $this->load->view('temp/navbar1');
        $data6['select6']=$this->otch_model->select6();
        $this->load->view('vneplan', $data6);
        $this->load->view('temp/footer');
    }

}
?>