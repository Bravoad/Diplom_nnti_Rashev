<?php if (! defined ('BASEPATH')) EXIT ('No direct script access aliwed');

class klient_model extends CI_Model{
   function get_dog(){
       $sql = $this->db->get('dogovor');
        return $sql->result_array();
   }
    function ins_dog(){
        if (!empty($_POST)) {
            $data = array (
                'namkli'=> $_POST['kli'],
                'adr' => $_POST['adr'],
                'tel' => $_POST['tel'],
                'inn'=> $_POST['inn'],
                'bankrekv'=>$_POST['bank'],
                'status'=>'Заявка',
                'datazaya' => $_POST['dat'],
                'opis' => $_POST['opis'],

            );
            $this->db->insert('dogovor',$data);
            redirect(base_url().'index.php/Klient/index', 'refresh');
        }
    }

}


?>