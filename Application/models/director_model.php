<?php if (! defined ('BASEPATH')) EXIT ('No direct script access aliwed');

class director_model extends CI_Model{
    function get_rab(){
        $sql = $this->db->get('rab');
        return $sql->result_array();
    }
    function ins_rab(){
        if (!empty($_POST)) {
            $data = array (
                'fiorab'=> $_POST['rab'],
                'spec' => $_POST['spec'],
                'status' => 0,
            );
            $this->db->insert('rab',$data);
            redirect(base_url().'index.php/Rab/index', 'refresh');
        }
    }

    public function select()
    {
        if (!empty($_POST)) {
            $d1=$_POST['d1'];
            $d2=$_POST['d2'];
            $this->db->select('namkli,tel,adr,inn,opis,datazaya,datapod');
            $this->db->from('naryd,dogovor');
            $this->db->where('dogovor.status','Подписан');
            $this->db->where('dogovor.id_dog=naryd.id_dog');
            $this->db->where('datapod>=',$d1);
            $this->db->where('datapod<=',$d2);
            $sql = $this->db->get();

            return $sql->result_array();
        }
    }

    public function select2()
    {
        if (!empty($_POST)) {
            $d3=$_POST['d3'];
            $d4=$_POST['d4'];
            $this->db->select('namusluga,namkli,fiorab,adr,dfactvip,typopl,sposopl,naryd.status,usluga.stom');
            $this->db->select('(opl.stom+usluga.stom) as obs');
            $this->db->from('naryd,dogovor,opl,usluga,rab');
            $this->db->where('naryd.status','Закрыт');
            $this->db->where('dogovor.id_dog=naryd.id_dog');
            $this->db->where('dogovor.id_dog=opl.id_dog');
            $this->db->where('usluga.id_usluga=naryd.id_usluga');
            $this->db->where('rab.id_rab=naryd.id_rab');
            $this->db->where('dfactvip>=',$d3);
            $this->db->where('dfactvip<=',$d4);
            $this->db->group_by('namusluga,namkli,fiorab,adr,dfactvip,typopl,sposopl,naryd.status,usluga.stom,opl.stom');
            $sql = $this->db->get();
            return $sql->result_array();
        }
    }
    public function select3()
    {
        if (!empty($_POST)) {
            $d5=$_POST['d5'];
            $d6=$_POST['d6'];
            $this->db->select('*, count(naryd.*)');
            $this->db->from('naryd,usluga');
            $this->db->where('naryd.status','Закрыт');
            $this->db->where('usluga.id_usluga=naryd.id_usluga');
            $this->db->where('dfactvip>=',$d5);
            $this->db->where('dfactvip<=',$d6);
            $this->db->GROUP_BY('naryd.id_nar,usluga.id_usluga');
            $this->db->ORDER_BY('count(naryd.*)','DESC');

            $sql = $this->db->get();
            return $sql->result_array();
        }


    }
    function get_usl(){
        $sql = $this->db->get('usluga');
        return $sql->result_array();
    }
    function ins_usl(){
        if (!empty($_POST)) {
            $data = array (
                'namusluga'=> $_POST['usl'],
                'stom' => $_POST['stom'],
            );
            $this->db->insert('usluga',$data);
            redirect(base_url().'index.php/Usl/index', 'refresh');
        }
    }

}



?>