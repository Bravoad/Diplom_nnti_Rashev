<?php if (! defined ('BASEPATH')) EXIT ('No direct script access aliwed');

class buhgalter_model extends CI_Model{
   function get_opl(){
$sql = $this->db->get('opl');
       return $sql->result_array();
   }
    function  ins_opl()
    {
        if (!empty($_POST)) {
            $data = array(
                'typopl' => $_POST['typ'],
                'sposopl' => $_POST['spos'],
                'stom' => $_POST['stom'],
                'dopl' => $_POST['dopl'],

                'id_dog' => $_POST['dog']
            );
            $this->db->insert('opl', $data);
            redirect(base_url() . 'index.php/Opl/index', 'refresh');
        }
    }
        function  upd_usl(){
            $usl=$_POST['usl'];
            $data = array (
                'stom'=> $_POST['stom'],
            );
            $this->db->where('id_usluga',$usl);
            $this->db->update('usluga',$data);
            redirect(base_url().'index.php/uslugup/index', 'refresh');
        }
    public function select()
    {
        if (!empty($_POST)) {
            $d9=$_POST['d9'];
            $d10=$_POST['d10'];
            $this->db->select('namusluga,usluga.stom');
            $this->db->select('(opl.stom+usluga.stom) as obs');
            $this->db->from('naryd,dogovor,opl,usluga,rab');
            $this->db->where('naryd.status','Закрыт');
            $this->db->where('dogovor.id_dog=naryd.id_dog');
            $this->db->where('dogovor.id_dog=opl.id_dog');
            $this->db->where('usluga.id_usluga=naryd.id_usluga');
            $this->db->where('rab.id_rab=naryd.id_rab');
            $this->db->where('dfactvip>=',$d9);
            $this->db->where('dfactvip<=',$d10);
            $this->db->group_by('namusluga,usluga.stom,opl.stom');
            $sql = $this->db->get();
            return $sql->result_array();
        }
    }
    public function select2()
    {
        if (!empty($_POST)) {
            $d11=$_POST['d11'];
            $d12=$_POST['d12'];
            $this->db->select('nameobor,obor.stom');
            $this->db->select('(obor.stom*naryd.kol) as obs');
            $this->db->from('naryd,dogovor,opl,obor,usluga,rab');
            $this->db->where('naryd.status','Закрыт');
            $this->db->where('dogovor.id_dog=naryd.id_dog');
            $this->db->where('dogovor.id_dog=opl.id_dog');
            $this->db->where('usluga.id_usluga=naryd.id_usluga');
            $this->db->where('rab.id_rab=naryd.id_rab');
            $this->db->where('obor.id_obor=naryd.id_obor');
            $this->db->where('dfactvip>=',$d11);
            $this->db->where('dfactvip<=',$d12);
            $this->db->group_by('nameobor,obor.stom,naryd.kol');
            $sql = $this->db->get();
            return $sql->result_array();
        }
    }
    public function select3()
    {
        if (!empty($_POST)) {
            $d13=$_POST['d13'];
            $d14=$_POST['d14'];
            $this->db->select('*,sum(opl.stom) as stomo,usluga.stom');
            $this->db->select('((opl.stom+usluga.stom)-obor.stom) as saldo');
            $this->db->from('naryd,dogovor,opl,obor,usluga,rab');
            $this->db->where('naryd.status','Закрыт');
            $this->db->where('dogovor.id_dog=naryd.id_dog');
            $this->db->where('dogovor.id_dog=opl.id_dog');
            $this->db->where('usluga.id_usluga=naryd.id_usluga');
            $this->db->where('rab.id_rab=naryd.id_rab');
            $this->db->where('obor.id_obor=naryd.id_obor');
            $this->db->where('dfactvip>=',$d13);
            $this->db->where('dfactvip<=',$d14);
            $this->db->GROUP_BY('naryd.id_nar,usluga.id_usluga,rab.id_rab,opl.id_opl,dogovor.id_dog,obor.id_obor,opl');
            $sql = $this->db->get();
            return $sql->result_array();
        }
    }



}

?>
