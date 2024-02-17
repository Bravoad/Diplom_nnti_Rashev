<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rizar extends CI_Controller {

public function index()
{
$this->load->model('main_model');
$data['index']=$this->main_model->main_page();
$this->load->view('index', $data);
}
}
?>