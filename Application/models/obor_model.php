<?php if (! defined ('BASEPATH')) EXIT ('No direct script access aliwed');

class obor_model extends CI_Model{
    function get_obor(){
        $sql = $this->db->get('obor');
        return $sql->result_array();
    }
     function  ins_obor()
     {
         if (!empty($_POST)) {
             $data=array(
                 'post' => $_POST['post'] ,
                 'vend' => $_POST['vend'],
                 'nameobor' => $_POST['namob'],
                 'typobor' => $_POST['tipob'],
             'kolkop' => $_POST['kol'],
                 'stom' => $_POST['st']
             );
             $this->db->insert('obor',$data);
             redirect(base_url().'index.php/Obor/index', 'refresh');
         }
     }
}




?>