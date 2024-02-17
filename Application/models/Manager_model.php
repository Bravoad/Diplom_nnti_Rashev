<?php if (! defined ('BASEPATH')) EXIT ('No direct script access aliwed');

class Manager_model extends CI_Model{
    function get_nar(){
        $sql = $this->db->get('naryd');
        return $sql->result_array();
    }
    function ins_nar(){
        if (!empty($_POST)) {
            $data = array (
                'id_dog'=> $_POST['dog'],
                'id_obor'=> $_POST['obor'],
                'id_usluga'=> $_POST['usl'],
                'kol' => $_POST['kol'],
                'opis' => $_POST['opis'],
                'status'=>'Проект'
            );
          $sql=$this->db->insert('naryd',$data);
            $dog=$_POST['dog'];
                $data2 = array (
                    'status'=>'Проект'
                );
                $this->db->where('id_dog',$dog);
                $this->db->update('dogovor',$data2);
            redirect(base_url().'index.php/Manager/index', 'refresh');
        }
    }
    function  upd_nar(){
        $nar=$_POST['nar'];
        $rab=$_POST['rab'];
        $data = array (
            'status'=>'Выполняется'
        );
        $data3 = array (
            'status'=>'1'
        );
        $data2 = array (
            'id_rab'=> $_POST['rab'],
            'dotnar' => $_POST['dat'],
            'status'=>'Сформирован'
        );
        $this->db->where('id_nar',$nar);
        $this->db->update('naryd',$data2);
        $this->db->where('id_rab',$rab);
        $this->db->update('rab',$data3);
        $this->db->join('naryd','id_dog','naryd.id_dog');
        $this->db->update('dogovor',$data);
        redirect(base_url().'index.php/rasnar/index', 'refresh');
    }
    function  upd_nar2()
    {
        $nar = $_POST['nar'];

        $data3 = array(
            'status' => '0'
        );
        $data2 = array(
            'dzaknar' => $_POST['dat'],
            'dfactvip' => $_POST['dat2'],
            'status' => 'Закрыт'
        );
        $this->db->where('id_nar', $nar);
        $this->db->update('naryd', $data2);
        $this->db->join('naryd', 'id_rab', 'naryd.id_rab');
        $this->db->update('rab', $data3);
        redirect(base_url() . 'index.php/Zaknar/index', 'refresh');
    }

    function upd_dog(){
        if (!empty($_POST)) {
            $data = array (
                'status'=>'Подписан',
                'datapod' => $_POST['dat'],
            );
            $data2 = array (
                'status'=>'Подготовка'
            );
            $dog=$_POST['dog'];
            $this->db->where('id_dog',$dog);
            $this->db->update('dogovor',$data);
            $this->db->where('id_dog',$dog);
            $this->db->update('naryd',$data2);
            redirect(base_url().'index.php/Manager/index5', 'refresh');
        }
    }
    function upd_dog2(){
        if (!empty($_POST)) {
            $data = array (
                'status'=>'Выполнен',
                'dvip' => $_POST['dat'],
            );
            $dog=$_POST['dog'];
            $this->db->where('id_dog',$dog);
            $this->db->update('dogovor',$data);
            redirect(base_url().'index.php/Manager/index6', 'refresh');
        }

    }
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

        public function select()
        {
            $this->db->select('nameobor,typobor,kolkop,sum(kol) as ko');
            $this->db->from('obor,naryd,dogovor');
            $this->db->where('naryd.status','Подготовка');
            $this->db->where('dogovor.id_dog=naryd.id_dog');
            $this->db->where('obor.id_obor=naryd.id_obor');
            $this->db->where('kolkop<kol');
            $this->db->group_by("nameobor,typobor,kolkop");
            $sql = $this->db->get();
            return $sql->result_array();
        }

    public function select2()
    {
        if (!empty($_POST)) {
            $d7=$_POST['d7'];
            $d8=$_POST['d8'];
            $this->db->select('namusluga,namkli,fiorab,adr,dfactvip,typopl,sposopl,naryd.status,usluga.stom');
            $this->db->select('(opl.stom+usluga.stom) as obs');
            $this->db->from('naryd,dogovor,opl,usluga,rab');
            $this->db->where('naryd.status','Закрыт');
            $this->db->where('dogovor.id_dog=naryd.id_dog');
            $this->db->where('dogovor.id_dog=opl.id_dog');
            $this->db->where('usluga.id_usluga=naryd.id_usluga');
            $this->db->where('rab.id_rab=naryd.id_rab');
            $this->db->where('dfactvip>=',$d7);
            $this->db->where('dfactvip<=',$d8);
            $this->db->group_by('namusluga,namkli,fiorab,adr,dfactvip,typopl,sposopl,naryd.status,usluga.stom,opl.stom');
            $sql = $this->db->get();
            return $sql->result_array();
        }
    }

    }



?>